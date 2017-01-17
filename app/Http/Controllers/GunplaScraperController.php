<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class GunplaScraperController extends Controller
{

    public function scrape() {

        $hljScraper = new \App\Models\Scrapers\HobbyLinkJapanScraper();
        $hljScraper->getScrapeData();
    }

    public function parse() {

    	$hlj 		= new \App\Models\Scrapers\HobbyLinkJapanScraper();
        $scrapeData = \App\Models\ScrapeData::where('parsed', false)->get();

        foreach($scrapeData as $d) {
        	switch($d->source_fk) {
        		case 1:
        			$hlj->parseGunpla($d);
        			break;
        	}
        }
    }
}
