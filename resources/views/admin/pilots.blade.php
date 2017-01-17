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
                'title' => 'Pilots'
            ]
        ]
    ])

    <div class='card'>
        <table class='highlight'>
            <thead>
                <tr>
                    <th data-field="name">Name</th>
                    <th>Factions</th>
                    <th>Mobile Suits</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($pilots as $pilot)
                    <tr>
                        <td>{{$pilot->name}}</td>
                        <td>
                            <span>Total: <?= count($pilot->factions) ?> <i class='pointer collapse-ul material-icons'>keyboard_arrow_down</i></span>
                            <ul class='collapsed'>
                                @foreach($pilot->factions as $faction)
                                    <li><a href='/admin/factions/<?= $faction->faction_id ?>'>{{$faction->name}}</a></li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <span>Total: <?= count($pilot->mobileSuits) ?> <i class='pointer collapse-ul material-icons'>keyboard_arrow_down</i></i></span>
                            <ul class='collapsed'>
                                @foreach($pilot->mobileSuits as $ms)
                                    <li><a href='/admin/mobileSuits/<?= $ms->mobile_suit_id ?>'>{{$ms->name}}</a></li>
                                @endforeach
                            </ul>
                        </td>
                        <td>
                            <a href='/admin/pilots/<?= $pilot->pilot_id ?>/edit'><i class="material-icons">mode_edit</i></a>
                            <a onclick="return confirm('Are you sure?')" href='/admin/pilots/<?= $pilot->pilot_id ?>/delete'><i class="material-icons">delete</i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @include('partials/pagination', [
            'offset' => $offset,
            'total' => $total,
            'limit' => $limit,
            'route' => '/admin/pilots'
        ])
    </div>
</div>

<div class='fixed-action-btn' style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large waves-effect waves-light blue" href="/admin/pilots/add"><i class="material-icons">add</i></a>
</div>

@endsection
