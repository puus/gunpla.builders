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
                'title' => 'Factions'
            ]
        ]
    ])

    <div class='card'>
        <table class='highlight'>
            <thead>
                <tr>
                    <th data-field="name">Name</th>
                    <th>Pilots</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($factions as $faction)
                    <tr>
                        <td>{{$faction->name}}</td>
                        <td>{{count($faction->pilots)}}</td>
                        <td>
                            <a href='/admin/factions/<?= $faction->faction_id ?>/edit'><i class="material-icons">mode_edit</i></a>
                            <a href='/admin/factions/<?= $faction->faction_id ?>/delete' onclick="return confirm('Are you sure?')"><i class="material-icons">delete</i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @include('partials/pagination', [
            'offset' => $offset,
            'total' => $total,
            'limit' => $limit,
            'route' => '/admin/factions'
        ])
    </div>
</div>

<div class='fixed-action-btn' style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large waves-effect waves-light blue" href="/admin/factions/add"><i class="material-icons">add</i></a>
</div>

@endsection
