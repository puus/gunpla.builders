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
                'title' => 'Mobile Suits'
            ]
        ]
    ])

    <div class='card'>
        <table class='highlight'>
            <thead>
                <tr>
                    <th data-field="name">Name</th>
                    <th data-field="model">Model #</th>
                    <th data-field="manufacturer">Manufacturer</th>
                    <th>Variations</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($mobilesuits as $ms)
                    <tr>
                        <td>{{$ms->name}}</td>
                        <td>{{$ms->model}}</td>
                        <td>{{ $ms->manufacturer ? $ms->manufacturer->name : '' }}</td>
                        <td>{{\App\Models\MobileSuitVariation::where('mobile_suit_fk', $ms->mobile_suit_id)->get()->count()}}</td>
                        <td>
                            <a href='/admin/mobilesuits/<?= $ms->mobile_suit_id ?>/edit'><i class="material-icons">mode_edit</i></a>
                            <a onclick="return confirm('Are you sure?')" href='/admin/mobilesuits/<?= $ms->mobile_suit_id ?>/delete'><i class="material-icons">delete</i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @include('partials/pagination', [
            'offset' => $offset,
            'total' => $total,
            'limit' => $limit,
            'route' => '/admin/mobilesuits'
        ])
    </div>
</div>

<div class='fixed-action-btn' style="bottom: 45px; right: 24px;">
    <a class="btn-floating btn-large waves-effect waves-light blue" href="/admin/mobilesuits/add"><i class="material-icons">add</i></a>
</div>

@endsection
