
@foreach ($users as $id => $user)
<h3>{{  $id}} {{ $user['name'] }} | {{ $user['phone'] }} | {{ $user['city'] }} |
    <a href="{{ route(' singleuser',$id) }}">show data</a>
</h3>

@endforeach
