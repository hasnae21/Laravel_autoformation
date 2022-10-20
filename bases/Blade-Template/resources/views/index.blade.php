@include('titre')

{{-- if and else --}}

 id = {{$name=1}}
 @if ($name == 1)
    <h2>hello nada</h2>
@else
   <h2> NULL</h2> 
@endif 

{{-- isset and empty --}}

@isset($age)
<h2>Age is {{$age}}</h2>
@endisset

@empty($age)
    <h2>age is empty</h2>
@endempty

{{-- loop Foreach --}}
@php
$user = array("nada","bautaina","iman")    
@endphp

@foreach ($user  as $value)
    <p>User name id : {{ $value }}</p>
@endforeach
 