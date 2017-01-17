<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CurrencyController extends Controller
{

    const EXCHANGERATE_URL = 'https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20yahoo.finance.xchange%20where%20pair%20in%20(%22USDJPY%22)&format=json&diagnostics=true&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=';

    public function getRates() {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, Self::EXCHANGERATE_URL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $response = curl_exec($ch);
        curl_close($ch);

        if ($response) {
            $rates = json_decode($response);
            $return = [];

            foreach($rates->query->results as $result) {
                $return[$result->Name] = $result->Rate;
                if(\App\Models\Currency::where('name', $result->Name)->get()->count()) {
                    $rate = \App\Models\Currency::where('name', $result->Name)->first();
                    $rate->rate = $result->Rate;
                    $rate->save();
                } else {
                    $rate = new \App\Models\Currency;
                    $rate->name = $result->Name;
                    $rate->rate = $result->Rate;
                    $rate->save();
                }
            }
        } else {
            // API endpoint seems quite unreliable, thus we call this function
            // recrsivly if we fail to get a response
            $this->getRates();
        }
    }
}
