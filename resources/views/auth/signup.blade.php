@extends('layouts.layout')
@section('title', 'Регистрация • Bububu')
@section('content')
    <h2>Регистрация</h2>
    @error('error')
        <p class="warning">{{ $message }}</p>
    @enderror
    <form action="{{ route('signup') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div>
            <label for="surname">Фамилия *</label>
            <input id ="surname" name="surname" placeholder="Введите фамилию" required>
            @error('surname')
            <p class="warning">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="name">Имя *</label>
            <input id ="name" name="name" placeholder="Введите имя" required>
            @error('name')
            <p class="warning">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="patronymic">Отчество *</label>
            <input id ="patronymic" name="patronymic" placeholder="Введите отчество">
            @error('patronymic')
            <p class="warning">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="nickname">Никнейм *</label>
            <input id ="nickname" name="nickname" placeholder="Введите никнейм" required>
            @error('nickname')
            <p class="warning">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label>Пол *</label>
            <input type="radio" id="sex-m" name="sex" value="1" checked><label for="sex-m">Мужской</label>
            <input type="radio" id="sex-f" name="sex" value="0"><label for="sex-f">Женский</label>
            @error('email')
            <p class="sex">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="birthday">Дата рождения *</label>
            <input id ="birthday" type="date" name="birthday" placeholder="Введите дату рождения" required>
            @error('birthday')
            <p class="warning">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="email">Электронная почта *</label>
            <input id ="email" type="email" name="email" placeholder="Введите почту" required>
            @error('email')
            <p class="warning">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="phone">Номер телефона</label>
            <input id ="phone" type="tel" name="phone" placeholder="Введите номер телефона">
            @error('phone')
            <p class="warning">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="password">Пароль *</label>
            <input id ="password" type="password" name="password" placeholder="Придумайте пароль" required>
            @error('password')
            <p class="warning">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="password_confirmation">Потдверждение пароля *</label>
            <input id ="password_confirmation" type="password" name="password_confirmation" placeholder="Повторите пароль" required>
            @error('password_confirmation')
            <p class="warning">{{ $message }}</p>
            @enderror
        </div>
        <div>
            <label for="avatar">Аватар</label>
            <input id ="avatar" name="avatar" type="file" accept="image/jpeg,image/png">
            @error('avatar')
            <p class="warning">{{ $message }}</p>
            @enderror
        </div>
        <button type="submit">Войти</button>
    </form>
@endsection
