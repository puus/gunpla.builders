<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PilotController extends Controller
{
    public function index(Request $request) {

        $limit   = $request->input('limit')   ? $request->input('limit')   : Self::LIMIT;
        $offset  = $request->input('offset')  ? $request->input('offset')  : 0;
        $orderBy = $request->input('orderBy') ? $request->input('orderBy') : 'name';

        $data = [
            'pilots' => \App\Models\Pilot::orderBy('name')->take($limit)->skip($offset)->get(),
            'prev'   => ($offset - $limit) < 0 ? 0 : $offset - $limit,
            'next'   => $offset + $limit,
            'limit'  => $limit,
            'offset' => $offset,
            'total'  => \App\Models\Pilot::get()->count()
        ];

        return view('admin/pilots', $data);
    }

    public function edit(Request $request, $id) {

        $pilot = \App\Models\Pilot::find($id);
        if ($pilot) {
            $pilotMobileSuits = [];
            foreach($pilot->mobileSuits as $ms) {
                $pilotMobileSuits[] = $ms->mobile_suit_id;
            }

            $pilotFactions = [];
            foreach($pilot->factions as $faction) {
                $pilotFactions[] = $faction->faction_id;
            }

            $data = [
                'pilot'            => $pilot,
                'factions'         => \App\Models\Faction::all(),
                'mobileSuits'      => \App\Models\MobileSuit::all(),
                'timelines'        => \App\Models\Timeline::all(),
                'pilotMobileSuits' => $pilotMobileSuits,
                'pilotFactions'    => $pilotFactions
            ];

            return view('admin/editpilot', $data);
        }
    }

    public function post(Request $request) {

        if (\App\Models\Pilot::where('name', $request->input('name'))->get()->count()) {
            $request->session()->flash('message', 'Pilot Already Exists');
            return redirect('admin/pilots/add');
        } else {
            $pilot = new \App\Models\Pilot;
            $pilot->name = $request->input('name');
            $pilot->timeline_fk = $request->input('timeline');
            if ($pilot->save()) {
                $pilot->factions()->sync($request->input('factions'));
                $pilot->mobileSuits()->sync($request->input('mobileSuits'));
                $request->session()->flash('message', 'Pilot created');
                return redirect('admin/pilots/add');
            } else {
                App::abort(500, 'Data persistence error');
            }
        }
    }

    public function put(Request $request, $id) {

        $pilot = \App\Models\Pilot::find($id);

        if ($pilot) {
            $pilot->name = $request->input('name');
            $pilot->timeline_fk = $request->input('timeline');
            $pilot->factions()->sync($request->input('factions'));
            $pilot->mobileSuits()->sync($request->input('mobileSuits'));
            if ($pilot->save()) {
                $request->session()->flash('message', 'Pilot updated');
                return redirect('admin/pilots/' . $id . '/edit');
            } else {
                App::abort(500, 'Data persistence error');
            }
        }

        return redirect('admin/pilots', $data);
    }

    public function delete(Request $request, $id) {

        $pilot = \App\Models\Pilot::find($id);
        if ($pilot) {
            $pilot->delete();
            $request->session()->flash('message', 'Pilot deleted');
            return redirect('admin/pilots');
        }
    }

    public function add(Request $request) {

        $data = [
            'factions' => \App\Models\Faction::all(),
            'timelines' => \App\Models\Timeline::all(),
            'mobileSuits' => \App\Models\MobileSuit::all()
        ];

        return view('admin/addpilot', $data);
    }
}
