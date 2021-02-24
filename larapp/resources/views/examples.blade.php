<html>
<body>
<h1>Vista Examples</h1>

@if(count($users)>1)

@foreach($users as $user)

@switch($user->gender)
@case("Female")
mujer
@break
@case("Male")
hombre
@break
@default
ninguno
@endswitch


<h4>{{ $user->fullname }}</h4>

@endforeach

@else
dads
@endif
</body>

</html>


