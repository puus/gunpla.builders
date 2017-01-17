<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FactionController extends Controller
{
    public function index(Request $request) {

        $limit   = $request->input('limit')   ? $request->input('limit')   : Self::LIMIT;
        $offset  = $request->input('offset')  ? $request->input('offset')  : 0;
        $orderBy = $request->input('orderBy') ? $request->input('orderBy') : 'name';

        $data = [
            'factions' => \App\Models\Faction::orderBy('name')->take($limit)->skip($offset)->get(),
            'limit' => $limit,
            'offset' => $offset,
            'total' => \App\Models\Faction::get()->count(),
            'prev'   => ($offset - $limit) < 0 ? 0 : $offset - $limit,
            'next'   => $offset + $limit,

        ];

        return view('admin/factions', $data);
    }

    public function add() {

        $data = [
            'pilots' => \App\Models\Pilot::all()
        ];

        return view('admin/addfaction', $data);
    }

    public function post(Request $request) {

        if (\App\Models\Faction::where('name', $request->input('name'))->get()->count()) {
            $request->session()->flash('message', 'Faction Already Exists');
            return redirect('admin/factions/add');
        } else {
            $faction = new \App\Models\Faction;
            $faction->name = $request->input('name');

            if ($faction->save()) {
                $faction->pilots()->sync($request->input('pilots'));
                $request->session()->flash('message', 'Faction created');
                return redirect('admin/factions/add');
            } else {
                App::abort(500, 'Data persistence error');
            }
        }
    }

    public function edit(Request $request, $id) {

        $faction = \App\Models\Faction::find($id);
        if ($faction) {
            $factionPilots = [];
            foreach($faction->pilots as $pilot) {
                $factionPilots[] = $pilot->pilot_id;
            }

            $data = [
                'faction' => $faction,
                'pilots' => \App\Models\Pilot::all(),
                'factionPilots' => $factionPilots
            ];

            return view('admin/editfaction', $data);
        }
    }

    public function delete(Request $request, $id) {

        $faction = \App\Models\Faction::find($id);
        if ($faction) {
            $faction->delete();
            $request->session()->flash('message', 'Faction Deleted');
        } else {
            App::abort(500, 'Data persistence error');
        }

        return redirect('admin/factions');
    }

    public function put(Request $request, $id) {

        $faction = \App\Models\Faction::find($id);

        if ($faction) {
            $faction->name = $request->input('name');

            if ($faction->save()) {
                $request->session()->flash('message', 'Faction updated');
                return redirect('admin/factions/' . $id . '/edit');
            } else {
                App::abort(500, 'Data persistence error');
            }
        }

        return redirect('admin/media', $data);
    }

}
