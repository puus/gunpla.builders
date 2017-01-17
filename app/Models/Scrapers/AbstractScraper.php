<?php
    namespace App\Models\Scrapers;

    use Goutte\Client;
    use App\Models\Scale;
    use App\Models\MobileSuit;
    use App\Models\MobileSuitVariation;

    abstract class AbstractScraper {

        protected $http;
        protected $crawler;

        protected $dom;
        protected $pages = [];

        protected static $mobileSuits    = [];
        protected static $scales         = [];
        protected static $exchange_rates = [];

        abstract protected function _getSiteUrl();
        abstract protected function _getNextPage($crawler);
        abstract public function parseGunpla($scrapeData);
        abstract protected function _extractScrapeData($crawler);

        public function __construct() {

            $this->http = new Client();

            if (empty($scales))
                Self::$scales = $this->_getScales();

            if (empty($mobileSuits))
                Self::$mobileSuits = $this->_getMobileSuits();

            if (empty($exchange_rates))
                Self::$exchange_rates = $this->_getExchangeRates();
        }

        public function getScrapeData() {

            $this->crawler = $this->_getCrawler();

            while($this->crawler) {
                $this->_extractScrapeData($this->crawler);
                $this->crawler = $this->_getNextPage($this->crawler);
            }
        }

        private function _getScales() {

            $scales = [];
            $_scales = Scale::all();

            foreach($_scales as $scale) {
                $scales[] = $scale->scale;
            }

            return $scales;
        }

        private function _getMobileSuits() {

            $mobileSuits = [
                'ms'  => [],
                'msv' => []
            ];
            $_mobileSuits          = MobileSuit::all();
            $_mobileSuitVariations = MobileSuitVariation::all();

            foreach($_mobileSuits as $ms) {
                $mobileSuits['ms'][] = [
                    'id'    => $ms->mobile_suit_id,
                    'name'  => $ms->name,
                    'model' => $ms->model
                ];
            }

            foreach ($_mobileSuitVariations as $msv) {
                $mobileSuits['msv'][] = [
                    'id'    => $msv->mobile_suit_variation_id,
                    'name'  => $msv->name,
                    'model' => $msv->model
                ];
            }

            return $mobileSuits;
        }

        private function _getCrawler() {

            return $this->http->request('GET', $this->_getSiteUrl());
        }

        protected function _parseScale($string) {

            $return = [];
            $parts  = explode(' ', $string);

            foreach($parts as $part) {
                if (in_array(trim($part), Self::$scales)) {
                    $pos = strpos($string, $part);
                    $return['string'] = substr($string, $pos + strlen($part));
                    $return['scale']  = $part;
                    break;
                }
            }

            return $return;
        }

        protected function _parseMobileSuit($string) {

            $parts  = explode(' ', $string);
            $result = false;

            for($x = 0; $x < count($parts); $x++) {
                $msName  = $parts[$x];
                $attempt = $this->_isMobileSuit($msName);
                if ($attempt)
                    $result = $attempt;

                for ($y = $x + 1; $y < count($parts); $y++) {
                    $msName .= ' ' . $parts[$y];
                    $attempt = $this->_isMobileSuit($msName);
                    if ($attempt)
                        $result = $attempt;
                }
            }

            return $result;
        }

        protected function _isMobileSuit($string) {

            if (trim($string) != '') {
                foreach(Self::$mobileSuits['ms'] as $ms) {
                    if (trim($string) == $ms['name'] || trim($string) == $ms['model']) {
                        $ms['type'] = 'ms';
                        return $ms;
                    }
                }

                foreach(Self::$mobileSuits['msv'] as $msv) {
                    if (trim($string) == $msv['name'] || trim($string) == $msv['model']) {
                        $msv['type'] = 'msv';
                        return $msv;
                    }
                }
            }

            return false;
        }

        protected function _getExchangeRates() {

            $exchangeRates = [];
            $rates = \App\Models\Currency::all();
            foreach($rates as $rate) {
                $exchangeRates[$rate->name] = $rate->rate;
            }

            return $exchangeRates;
        }

        protected function _storeGunpla($siteData, $msData, $scaleData) {

            $scale = \App\Models\Scale::where('scale', $scaleData['scale'])->first();
            if ($scale) {
                $msFk = '';
                if ($msData['type'] == 'ms') {
                    $msFk = 'mobile_suit_fk';
                } else if ($msData['type'] == 'msv') {
                    $msFk = 'mobile_suit_variation_fk';
                }

                if (\App\Models\Gunpla::where($msFk, $msData['id'])->where('scale_fk', $scale->scale_id)->get()->count()) {

                }
            }
        }
    }
?>
