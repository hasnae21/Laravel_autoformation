{{$users}}
@foreach ($users as $user)

<h1>Name : {{$user->Nom}}</h1>
<h1>phone :{{$user->Phone}}</h1>
    
@endforeach