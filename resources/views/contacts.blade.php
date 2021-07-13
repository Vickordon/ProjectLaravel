@extends('layoutHeader')
@section('title')
Контакти+ форма
@endsection
@section('main_content')
<div class="container">
    <H1>Тут мають бути контакти</H1>
    <h2>Register form</h2>
    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li> {{$error}} </li>
            @endforeach
        </ul>
    </div>
    @endif
    <div class="form-group">
        <form action="/contact/check" method="post">
            @csrf
            <input type="text" name="name" id="name" placeholder="Ім'я" class="form-control"><br>
            <input type="tel" name="tel" id="tel" placeholder="Номер телефону" class="form-control"><br>
            <input type="email" name="email" id="email" placeholder="E-mail" class="form-control"><br>
            <button type="submit" class="btn btn-success">Підтвердити</button><br>
        </form>
    </div>
</div>
@endsection