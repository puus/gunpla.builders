<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MobileSuitController extends Controller
{
    public function index(Request $request) {

        $limit   = $request->input('limit')   ? $request->input('limit')   : Self::LIMIT;
        $offset  = $request->input('offset')  ? $request->input('offset')  : 0;
        $orderBy = $request->input('orderBy') ? $request->input('orderBy') : 'name';

        $data = [
            'mobilesuits' => \App\Models\MobileSuit::orderBy('name')->take($limit)->skip($offset)->get(),
            'prev'        => ($offset - $limit) < 0 ? 0 : $offset - $limit,
            'next'        => $offset + $limit,
            'limit'       => $limit,
            'offset'      => $offset,
            'total'       => \App\Models\MobileSuit::get()->count()
        ];
        return view('admin/mobilesuits', $data);
    }

    public function add(Request $request) {

        $data = [
            'manufacturers' => \App\Models\Manufacturer::all(),
            'pilots' => \App\Models\Pilot::all()
        ];

        return view('admin/addmobilesuit', $data);
    }

    public function edit(Request $request, $id) {

        $ms = \App\Models\MobileSuit::find($id);

        $msPilots = [];
        foreach($ms->pilots as $pilot) {
            $msPilots[] = $pilot->pilot_id;
        }

        $data = [
            'id'             => $ms->mobile_suit_id,
            'name'           => $ms->name,
            'model'          => $ms->model,
            'msManufacturer' => $ms->manufacturer ? $ms->manufacturer->manufacturer_id : null,
            'manufacturers'  => \App\Models\Manufacturer::all(),
            'variations'     => \App\Models\MobileSuitVariation::where('mobile_suit_fk', $ms->mobile_suit_id)->get(),
            'pilots'         => \App\Models\Pilot::all(),
            'msPilots'       => $msPilots
        ];

        return view('admin/editmobilesuit', $data);
    }

    public function delete(Request $request, $id) {

        $ms = \App\Models\MobileSuit::find($id);
        if ($ms) {
            $ms->delete();
            $request->session()->flash('message', 'MS Deleted');
        } else {
            App::abort(500, 'Data persistence error');
        }

        return redirect('admin/mobilesuits');
    }

    public function post(Request $request) {

        if (\App\Models\MobileSuit::where('name',  $request->input('name'))->get()->count() ||
            \App\Models\MobileSuit::where('model', $request->input('model'))->get()->count()) {
            $request->session()->flash('message', 'MS Already Exists');
            return redirect('admin/mobilesuits/add');
        }

        $ms = new \App\Models\MobileSuit;
        $ms->name = $request->input('name');
        $ms->model = $request->input('model');
        $ms->manufacturer_fk = $request->input('manufacturer');

        if ($ms->save()) {
            $ms->pilots()->sync($request->input('pilots'));
            $request->session()->flash('message', 'MS Created');
            return redirect('admin/mobilesuits/add');
        } else {
            App::abort(500, 'Data persistence error');
        }
    }

    public function put(Request $request) {

        $ms = \App\Models\MobileSuit::find($request->input('id'));

        if ($ms) {
            $ms->name = $request->input('name');
            $ms->model = $request->input('model');
            $ms->manufacturer_fk = $request->input('manufacturer');
            $ms->pilots()->sync($request->input('pilots'));

            if(!$ms->save())
                App::abort(500, 'Data persistence error');

            $request->session()->flash('message', 'Mobile Suit updated');
            return redirect('admin/mobilesuits/' . $request->input('id') . '/edit');
        } else {
            $request->session()->flash('message', 'Invalid MS ID');
            return redirect('admin/mobilesuits');
        }
    }

    public function deleteMobileSuit(Request $request, $id) {

        $ms = \App\Models\MobileSuit::find($id);
        if ($ms) {
            $ms->delete();
            $request->session()->flash('message', 'MS Deleted');
        } else {
            App::abort(500, 'Data persistence error');
        }

        return redirect('admin/mobilesuits');
    }

    public function postAddPilotToMobileSuit(Request $request, $id) {

        $ms = \App\Models\MobileSuit::find($id);
        if ($ms && $request->input('pilot_id')) {
            $ms->pilots()->attach($request->input('pilot_id'));
            $request->session()->flash('message', 'Pilot added to MS');
            return redirect("admin/mobilesuits/$id/edit");
        }
    }
}
