<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TimelineController extends Controller
{
    public function index(Request $request) {

        $limit   = $request->input('limit')   ? $request->input('limit')   : Self::LIMIT;
        $offset  = $request->input('offset')  ? $request->input('offset')  : 0;
        $orderBy = $request->input('orderBy') ? $request->input('orderBy') : 'name';

        $data = [
            'timelines' => \App\Models\Timeline::orderBy('name')->take($limit)->skip($offset)->get(),
            'limit' => $limit,
            'offset' => $offset,
            'total' => \App\Models\Timeline::get()->count(),
            'prev'   => ($offset - $limit) < 0 ? 0 : $offset - $limit,
            'next'   => $offset + $limit,

        ];

        return view('admin/timelines', $data);
    }

    public function edit(Request $request, $id) {

        $timeline = \App\Models\Timeline::find($id);
        if ($timeline) {
            $data = [
                'timeline' => $timeline
            ];

            return view('admin/edittimeline', $data);
        }
    }

    public function add() {

        return view('admin/addtimeline');
    }

    public function post(Request $request) {

        if (\App\Models\Timeline::where('name', $request->input('name'))->get()->count()) {
            $request->session()->flash('message', 'Timeline Already Exists');
            return redirect('admin/timeline/add');
        } else {
            $timeline = new \App\Models\Timeline;
            $timeline->name = $request->input('name');
            $timeline->abbreviation = $request->input('abbreviation');

            if ($timeline->save()) {
                $request->session()->flash('message', 'Timeline created');
                return redirect('admin/timelines/add');
            } else {
                App::abort(500, 'Data persistence error');
            }
        }
    }

    public function delete(Request $request, $id) {

        $timeline = \App\Models\Timeline::find($id);
        if ($timeline) {
            $timeline->delete();
            $request->session()->flash('message', 'Timeline Deleted');
        } else {
            App::abort(500, 'Data persistence error');
        }

        return redirect('admin/timelines');
    }

    public function put(Request $request, $id) {

        $timeline = \App\Models\Timeline::find($id);

        if ($timeline) {
            $timeline->name = $request->input('name');
            $timeline->abbreviation = $request->input('abbreviation');

            if ($timeline->save()) {
                $request->session()->flash('message', 'Timeline updated');
                return redirect('admin/timelines/' . $id . '/edit');
            } else {
                App::abort(500, 'Data persistence error');
            }
        }

        return redirect('admin/timelines');
    }
}
