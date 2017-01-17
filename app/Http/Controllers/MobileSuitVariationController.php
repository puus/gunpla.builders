<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MobileSuitVariationController extends Controller
{
    public function index(Request $request) {

        $limit   = $request->input('limit')   ? $request->input('limit')   : Self::LIMIT;
        $offset  = $request->input('offset')  ? $request->input('offset')  : 0;
        $orderBy = $request->input('orderBy') ? $request->input('orderBy') : 'name';

        $data = [
            'msv'    => \App\Models\MobileSuitVariation::orderBy('name')->take($limit)->skip($offset)->get(),
            'prev'   => ($offset - $limit) < 0 ? 0 : $offset - $limit,
            'next'   => $offset + $limit,
            'limit'  => $limit,
            'offset' => $offset,
            'total'  => \App\Models\MobileSuitVariation::get()->count()
        ];
        return view('admin/mobilesuitvariations', $data);
    }

    public function add(Request $request) {

        $data = [
            'manufacturers' => \App\Models\Manufacturer::all(),
            'mobilesuits' => \App\Models\MobileSuit::all(),
            'pilots' => \App\Models\Pilot::all()
        ];

        return view('admin/addmobilesuitvariation', $data);
    }

    public function edit(Request $request, $id) {

        $msv = \App\Models\MobileSuitVariation::find($id);

        $msvPilots = [];
        foreach($msv->pilots as $pilot) {
            $msvPilots[] = $pilot->pilot_id;
        }

        $data = [
            'id'             => $msv->mobile_suit_variation_id,
            'name'           => $msv->name,
            'model'          => $msv->model,
            'msvManufacturer' => $msv->manufacturer ? $msv->manufacturer->manufacturer_id : null,
            'manufacturers'  => \App\Models\Manufacturer::all(),
            'pilots'         => \App\Models\Pilot::all(),
            'msvPilots'       => $msvPilots
        ];

        return view('admin/editmobilesuitvariation', $data);
    }

    public function post(Request $request) {

        $msv = new \App\Models\MobileSuitVariation;
        $msv->name = $request->input('name');
        $msv->model = $request->input('model');
        $msv->manufacturer_fk = $request->input('manufacturer');
        $msv->mobile_suit_fk = $request->input('developedfrom');

        if (\App\Models\MobileSuitVariation::where('name',  $request->input('name'))->get()->count() ||
            \App\Models\MobileSuitVariation::where('model', $request->input('model'))->get()->count()) {
            $request->session()->flash('message', 'MSV Already Exists');
            return redirect('admin/mobilesuitvariations/add');
        }

        if ($msv->save()) {
            $msv->pilots()->sync($request->input('pilots'));
            $request->session()->flash('message', 'MSV Created');
            return redirect('admin/mobilesuitvariations/add');
        } else {
            App::abort(500, 'Data persistence error');
        }
    }

    public function delete(Request $request, $id) {

        $msv = \App\Models\MobileSuitVariation::find($id);
        if ($msv) {
            $msv->delete();
            $request->session()->flash('message', 'MSV Deleted');
        } else {
            App::abort(500, 'Data persistence error');
        }

        return redirect('admin/mobilesuitvariations');
    }

    public function put(Request $request, $id) {

        $msv = \App\Models\MobileSuitVariation::find($id);

        if ($msv) {
            $msv->name = $request->input('name');
            $msv->model = $request->input('model');
            $msv->manufacturer_fk = $request->input('manufacturer');
            if (is_array($request->input('pilots')) && count($request->input('pilots'))) {
                $msv->pilots()->sync($request->input('pilots'));
            }

            if(!$msv->save())
                App::abort(500, 'Data persistence error');

            $request->session()->flash('message', 'Mobile Suit Variation updated');
            return redirect('admin/mobilesuitvariations/' . $msv->mobile_suit_variation_id . '/edit');
        } else {
            $request->session()->flash('message', 'Invalid MSV ID');
            return redirect('admin/mobilesuitvariations');
        }
    }
}
