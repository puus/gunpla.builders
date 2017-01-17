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
                'title' => 'Timelines'
            ]
        ]
    ])

    <div class='card'>
        <table class='highlight'>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Abbreviation</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($timelines as $timeline)
                    <tr>
                        <td>{{$timeline->name}}</td>
                        <td>{{$timeline->abbreviation}}</td>

                        <td>
                            <a href='/admin/timelines/<?= $timeline->timeline_id ?>/edit'><i class="material-icons">mode_edit</i></a>
                            <a href='/admin/timelines/<?= $timeline->timeline_id ?>/delete'><i class="material-icons">delete</i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @include('partials/pagination', [
            'offset' => $offset,
            'total' => $total,
            'limit' => $limit,
            'route' => '/admin/timelines'
        ])
    </div>
</div>

<div class='fixed-action-btn' style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large waves-effect waves-light blue" href="/admin/timelines/add"><i class="material-icons">add</i></a>
</div>

@endsection
