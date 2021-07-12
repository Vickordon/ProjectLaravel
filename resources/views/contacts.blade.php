@extends('layoutHeader')
@section('title')
Контакти
@endsection
@section('main_content')
<div>
    <H1>Тут мають бути контакти</H1>
    <form action="/contact/chec" method="post">
        <input type="text" name="name" id="name" placeholder="Ім'я"><br>
        <input type="tel" name="tel" id="tel" placeholder="Номер телефону"><br>
        <input type="email" name="email" id="email" placeholder="E-mail"><br>
        <button type="submit">Підтвердити</button>

    </form>
</div>
@endsection