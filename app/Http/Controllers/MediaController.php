<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MediaController extends Controller
{
    public function index(Request $request) {

        $limit   = $request->input('limit')   ? $request->input('limit')   : Self::LIMIT;
        $offset  = $request->input('offset')  ? $request->input('offset')  : 0;
        $orderBy = $request->input('orderBy') ? $request->input('orderBy') : 'name';

        $data = [
            'media'  => \App\Models\Media::orderBy('name')->take($limit)->skip($offset)->get(),
            'prev'   => ($offset - $limit) < 0 ? 0 : $offset - $limit,
            'next'   => $offset + $limit,
            'limit'  => $limit,
            'offset' => $offset,
            'total'  => \App\Models\Media::get()->count()
        ];

        return view('admin/media', $data);
    }

    public function add(Request $request) {

        $data = [
            'mediaTypes' => \App\Models\MediaType::all(),
            'timelines' => \App\Models\Timeline::all()
        ];

        return view('admin/addmedia', $data);
    }

    public function post(Request $request) {

        if (\App\Models\Media::where('name', $request->input('name'))->get()->count()) {
            $request->session()->flash('message', 'Media Already Exists');
            return redirect('admin/media/add');
        } else {
            $media = new \App\Models\Media;
            $media->name = $request->input('name');
            $media->abbreviation = $request->input('abbreviation');
            $media->short_name = $request->input('shortname');
            $media->year = $request->input('year');
            $media->media_type_fk = $request->input('mediatype');
            $media->timeline_fk = $request->input('timeline');

            if ($media->save()) {
                $request->session()->flash('message', 'Media created');
                return redirect('admin/media/add');
            } else {
                App::abort(500, 'Data persistence error');
            }
        }
    }

    public function delete(Request $request, $id) {

        $media = \App\Models\Media::find($id);
        if ($media) {
            $media->delete();
            $request->session()->flash('message', 'Media Deleted');
        } else {
            App::abort(500, 'Data persistence error');
        }

        return redirect('admin/media');
    }

    public function edit(Request $request, $id) {

        $media = \App\Models\Media::find($id);
        if ($media) {
            $data = [
                'media'            => $media,
                'timelines'        => \App\Models\Timeline::all(),
                'mediaTypes'       => \App\Models\MediaType::all()
            ];

            return view('admin/editmedia', $data);
        }
    }

    public function put(Request $request, $id) {

        $media = \App\Models\Media::find($id);

        if ($media) {
            $media->name = $request->input('name');
            $media->timeline_fk = $request->input('timeline');
            $media->media_type_fk = $request->input('mediaType');
            $media->abbreviation = $request->input('abbreviation');
            $media->short_name = $request->input('shortName');
            $media->year = $request->input('year');

            if ($media->save()) {
                $request->session()->flash('message', 'Media updated');
                return redirect('admin/media/' . $id . '/edit');
            } else {
                App::abort(500, 'Data persistence error');
            }
        }

        return redirect('admin/media', $data);

    }

    
}
