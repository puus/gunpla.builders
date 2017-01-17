<ul class='pagination'>
    <li class="{{ $offset == 0 ? 'disabled' : 'waves-effect' }}"><a href='{{$route}}?limit={{$limit}}&amp;offset={{$prev}}'>&lt; Prev</a></li>
    @for ($x = 0; $x < ($total / $limit); $x++)
        <li class="{{ $x * $limit == $offset ? 'active' : 'waves-effect' }}"><a href='{{$route}}?limit={{$limit}}&amp;offset={{$x * $limit}}'>{{ $x + 1 }}</a></li>
    @endfor
    <li class="{{ $offset + $limit >= $total ? 'disabled' : 'waves-effect' }}"><a href='{{$route}}?limit={{$limit}}&amp;offset={{$next}}'>Next &gt;</a></li>
</ul>
