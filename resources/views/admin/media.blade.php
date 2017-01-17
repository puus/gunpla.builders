@extends('layouts.app')

@section('content')

<div class='container'>
    @include('partials/breadcrumbs', [
        'crumbs' => [
            [
                'href' => '/admin',
                'title' => 'Administration'
            ],
            [
                'href'  => '#',
                'title' => 'Media'
            ]
        ]
    ])

    <div class='card'>
        <table class='highlight'>
            <thead>
                <tr>
                    <th data-field="name">Name</th>
                    <th>Type</th>
                    <th>Abbreviation</th>
                    <th>Short Name</th>
                    <th>Year</th>
                    <th>Timeline</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($media as $m)
                    <tr>
                        <td>{{$m->name}}</td>
                        <td>{{$m->mediaType ? $m->mediaType->name : ''}}</td>
                        <td>{{$m->abbreviation}}</td>
                        <td>{{$m->short_name}}</td>
                        <td>{{$m->year}}</td>
                        <td>{{$m->timeline ? $m->timeline->abbreviation : ''}}</td>
                        <td>
                            <a href='/admin/media/<?= $m->media_id ?>/edit'><i class="material-icons">mode_edit</i></a>
                            <a onclick="return confirm('Are you sure?')" href='/admin/media/<?= $m->media_id ?>/delete'><i class="material-icons">delete</i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @include('partials/pagination', [
            'offset' => $offset,
            'total' => $total,
            'limit' => $limit,
            'route' => '/admin/media'
        ])
    </div>
</div>

<div class='fixed-action-btn' style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large waves-effect waves-light blue" href="/admin/media/add"><i class="material-icons">add</i></a>
</div>

@endsection
