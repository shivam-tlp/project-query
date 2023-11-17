<h1>THis is our user</h1>

@foreach ($data as $id => $user )

<h2> Id:  {{$user->id}} </h2>
<h2> Name:  {{$user->name}} </h2>
    <h2> Age:  {{$user->age}} </h2>
        <h2> city:   {{$user->city}} </h2>

    
@endforeach

