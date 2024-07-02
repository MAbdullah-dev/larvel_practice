@foreach ($singleUser as $user )
<h1>Name : {{ $user->name }}</h1>
<h1>Email :{{ $user->email }}</h1>
<h1>city_id :{{ $user->c_id }}</h1>
@endforeach

