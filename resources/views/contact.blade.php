@extends('layout')

@section('content')

<h2 style="font-size:50px ;">Formulario de contactos</h2>

<form action="/action_page.php">
  <label for="fname">Nombre:</label><br>
  <input type="text" id="fname" name="fname" value=""><br>
  <label for="lname">Apellido:</label><br>
  <input type="text" id="lname" name="lname" value=""><br>
  <label for="receta">Receta deseada:</label><br>
  <input type="text" id="receta" name="receta value=""><br>
  <label for="tiempo">Tiempo de realización:</label><br>
  <input type="text" id="tiempo" name="tiempo" value=""><br>
  <label for="email">Regista tu email:</label><br>
  <input type="email" id="email" name="email"><br>
  <label for="email"></label><br>
  <a href="#" class="myButton">Enviar</a>
</form>

@endsection
