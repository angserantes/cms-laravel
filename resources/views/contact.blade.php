@extends('layout')

@section('content')

<h2 style="font-size:50px ;">Formulario de contactos</h2>

<form action="/action_page.php">
  <label for="fname">Nombre:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="lname">Apellido:</label><br>
  <input type="text" id="lname" name="lname" value=""><br><br>

</form>

@endsection
