<?php
    namespace App\Models\Scrapers;

    use App\Models\Scale;
    use App\Models\ScrapeData;
    use Symfony\Component\DomCrawler\Crawler;

    class HobbyLinkJapanScraper extends AbstractScraper {

        const SITE_URL = 'http://hlj.com/scripts/hljlist?GenreCode2=Gun&MacroType2=gunkit';
        //const SITE_URL = 'http://hlj.com/scripts/hljlist?GenreCode2=Gun&MacroType2=gunkit&DisplayMode=images&Dis=2&Sort=std&qid=5A7WRB6N64EJ1A&z=GenreCode2|MacroType2&set=1&Page=12';
        const BASE_URL = 'http://hlj.com';
        const SOURCE_FK = 1;

        protected function _getSiteUrl() {

            return Self::SITE_URL;
        }

        protected function _getNextPage($crawler) {

            $currentPage = $crawler->filter('.page.current');
            $nextPageLi = $currentPage->nextAll();
            if (count($nextPageLi)) {
                $nextPageLiChildren = $nextPageLi->children();
                if (count($nextPageLiChildren)) {
                    $nextPageA = $nextPageLiChildren->first();
                    if ($nextPageA->nodeName() == 'a') {
                        return $this->http->request('GET', Self::BASE_URL . $nextPageA->attr('href'));
                    }
                }
            }

            return false;
        }

        protected function _extractScrapeData($crawler) {

            $crawler->filter('.f-iteminfo')->each(function($node, $i) {

                $title        = $node->filter('.f-itemname')->text();
                $existingData = ScrapeData::where('title', $title)->where('source_fk', Self::SOURCE_FK)->take(1)->get();

                if (!count($existingData)) {
                    $data = new ScrapeData;
                    $data->title = $title;
                    $data->data  = $node->html();
                    $data->source_fk = Self::SOURCE_FK;
                    $data->parsed = false;
                    $data->save();
                } else {
                    $existingData = $existingData->first();
                    if ($existingData->data != $node->html()) {
                        $existingData->data = $node->html();
                        $existingData->parsed = false;
                        $existingData->save();
                    }
                }
            });
        }

        public function parseGunpla($scrapeData) {

            echo '<pre>';
            var_dump($scrapeData->data);
            echo '</pre>';
            die();

            $crawler = new Crawler($scrapeData->data);
            $title   = $crawler->filter('.f-itemname')->text();
            $scale   = $this->_parseScale($title);

            if (is_array($scale) && !empty($scale)) {
                var_dump($scale);
                $msData = $this->_parseMobileSuit($scale['string']);
                if ($msData) {
                    $price = $this->_parsePrice($crawler->filter('.forex')->text());
                    if($price) {


                        //$gunpla = $this->_storeGunpla($msData, $scale);
                        //$this->_relatePrice($gunpla, $price);
                    }
                }
            } else {
                // If no scale can be identified we won't consider this a kit
                //var_dump($scrapeData);
                $scrapeData->parsed = true;
                $scrapeData->save();
            }

            die();
        }

        private function _parsePrice($string) {

            return [
                'price'    => preg_replace("/[^0-9]/", "", $string),
                'currency' => 'JPY'
            ];
        }
    }
?>
