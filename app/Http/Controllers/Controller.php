<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;

class Controller extends BaseController {

    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    const LIMIT = 10;

    protected function _auth() {

        $user = \Auth::user();
        if (!$user) {
            return redirect()->action('Auth\AuthController@getLogin');
        }

        return $user;
    }

    protected function _getColours() {

        return [
            'red',
            'pink',
            'purple',
            'deep-purple',
            'indigo',
            'blue',
            'light-blue',
            'cyan',
            'teal',
            'green',
            'light-green',
            'lime',
            'yellow',
            'amber',
            'orange',
            'deep-orange',
            'brown',
            'grey',
            'blue-grey',
            'black',
            'white'
        ];
    }

    protected function _getPrimaryColour() {
        return 'blue';
    }

    protected function _getSecondaryColour() {
        return 'orange';
    }
}
