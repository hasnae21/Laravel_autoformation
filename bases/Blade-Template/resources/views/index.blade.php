<!-- how to include a view file  -->
@include('titre')





<!-- if and else  -->

 <!-- id = {{$name=1}}  -->
 age = {{$age=22}} 

 @if ($name == 1)
    <h2>hello There</h2>
@else
   <h2> NULL</h2> 
@endif 

<!-- {{-- isset and empty --}} -->

@isset($age)
<h2>I'm two {{$age}} years old</h2>
@endisset

@empty($age)
    <h2>age is empty</h2>
@endempty

<!-- {{-- loop Foreach --}} -->

@php
$user = array("ford","oudi","fiat")    
@endphp

@foreach ($user  as $value)
    <p>my car type is: {{ $value }}</p>
@endforeach
 