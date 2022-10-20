{{-- affichage de la database --}}
{{$user}}


@foreach ($user as $user)

<h1>{{$user->Nom}}</h1>
    
@endforeach