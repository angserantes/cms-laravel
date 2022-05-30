@extends('layout')

@section('content')

<section class="container">

<div class="card card1">
  <div class="card__content">
    <div class="content__cover">
      <img class="cover__img--food1" src="https://images.unsplash.com/photo-1528637766115-eeb016864bf3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1948&q=80" alt="strawberries">
    </div>
    <div class="content__text">
      <h4 class="content__title">Fresas</h4>
      <hr class="title__divider">
      <p><em>La dulce fruta roja</em></p>
    </div>
    <div class="content__footer">
      <a href="#" target="_blank" class="footer__links">Recetas &#8594;</a><br><br>
      <input class="links__checkbox" type="checkbox"><label for="links__checkbox"></label><span> Lista de la compra</span>
    </div>
  </div>
</div>
<div class="card card2">
  <div class="card__content">
    <div class="content__cover">
      <img class="cover__img--food2" src="https://images.unsplash.com/photo-1460400408855-36abd76648b9?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1950&q=80" alt="blueberries">
    </div>
    <div class="content__text">
      <h4 class="content__title">Arándanos</h4>
      <hr class="title__divider">
      <p><em>Un pequeño toque dulce</em></p>
    </div>
    <div class="content__footer">
      <a href="#" target="_blank" class="footer__links">Recetas &#8594;</a><br><br>
      <input class="links__checkbox" type="checkbox"><label for="links__checkbox"></label><span>Lista de la compra</span>
    </div>
  </div>
</div>
<div class="card card3">
  <div class="card__content">
    <div class="content__cover">
      <img class="cover__img--food3" src="https://images.unsplash.com/photo-1528632735386-3bb3ead106f3?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1567&q=80" alt="lemons">
    </div>
    <div class="content__text">
    <h4 class="content__title">Limones</h4>
          <hr class="title__divider">
      <p><em>Dale un toque ácido a tu día</em></p>
    </div>
    <div class="content__footer">
      <a href="#" target="_blank" class="footer__links">Recetas &#8594;</a><br><br>
      <input class="links__checkbox" type="checkbox"><label for="links__checkbox"></label><span>Lista de la compra</span>
    </div>
  </div>
</div>
</section>
@endsection
