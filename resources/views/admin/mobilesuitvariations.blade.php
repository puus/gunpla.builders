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
                'title' => 'Mobile Suit Variations'
            ]
        ]
    ])

    <div class='card'>
        <table class='highlight'>
            <thead>
                <tr>
                    <th data-field="name">Name</th>
                    <th data-field="model">Model #</th>
                    <th>Developed From</th>
                    <th data-field="manufacturer">Manufacturer</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($msv as $ms)
                    <tr>
                        <td>{{$ms->name}}</td>
                        <td>{{$ms->model}}</td>
                        <td>{{$ms->mobileSuit->name}}</td>
                        <td>{{ $ms->manufacturer ? $ms->manufacturer->name : '' }}</td>

                        <td>
                            <a href='/admin/mobilesuitvariations/<?= $ms->mobile_suit_variation_id ?>/edit'><i class="material-icons">mode_edit</i></a>
                            <a onclick="return confirm('Are you sure?')" href='/admin/mobilesuitvariations/<?= $ms->mobile_suit_variation_id ?>/delete'><i class="material-icons">delete</i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @include('partials/pagination', [
            'offset' => $offset,
            'total' => $total,
            'limit' => $limit,
            'route' => '/admin/mobilesuitvariations'
        ])
    </div>
</div>

<div class='fixed-action-btn' style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large waves-effect waves-light blue" href="/admin/mobilesuitvariations/add"><i class="material-icons">add</i></a>
</div>
@endsection
