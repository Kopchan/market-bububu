@extends('layouts.layout')
@section('title', 'Вход • Bububu')
@section('content')
    <h2>Вход</h2>
    @error('error')
    <p class="warning">{{ $message }}</p>
    @enderror
    <form action="{{ route('login') }}" method="POST" enctype="application/x-www-form-urlencoded">
        @csrf
        <div>
            <label for="email">Электронная почта</label>
            <input id ="email" type="email" name="email" placeholder="Введите почту" required>
        </div>
        <div>
            <label for="password">Пароль</label>
            <input id ="password" type="password" name="password" placeholder="Введите пароль" required>
        </div>
        <button type="submit">Войти</button>
    </form>
@endsection
