        @extends('main')

        @section('title', 'Добро пожаловать!')

        @section('content')
        @if($_SESSION['f'])
        <dialog class="dialSus">
            @if(isset($message))
            @foreach($message as $mes)
                <h4 class="colorJap center">{{$mes[0]}}</h4>  
            @endforeach
            @else
            <h4 class="colorJap center">Неверный логин или пароль</h4>
            @endif
            <button class="colorJap smallWidth auth addHoverNew inDialSus">Назад</button>
        </dialog>
        @endif
        <div id="app" class="container">
            <transition name="appear">
            <div class="mainButtons" v-if="btnA && btnR" stagger="5000">
                <button type="button" @click="btnA = !btnA" v-if="btnA && btnR" class="btn auth">ВОЙТИ</button>
                <button type="button" @click="btnR = !btnR" v-if="btnA && btnR" class="btn register">РЕГИСТРАЦИЯ</button>
            </div>
            </transition>
            <transition name="appear" class="trans">
                <form method="POST" action="/auth" class="mainForm authForm" v-if="!btnA">
                    @csrf
                    <label class="mainLabel">Логин:</label>
                    <input required type="text" name="log" class="mainInput">
                    <label class="mainLabel">Пароль:</label>
                    <input required type="password" name="pass" class="mainInput">
                    <button class="btn register">ВХОД</button>
                    <button type="button" ref="btn" @click="btnA = !btnA" class="btn auth cancel">ОТМЕНА</button>
                </form>
                <form method="POST" action="/reg" class="mainForm regForm" v-if="!btnR">
                    @csrf
                    <label class="mainLabel">Логин:</label>
                    <input required type="text" name="logn" class="mainInput">
                    <label class="mainLabel">E-mail:</label>
                    <input required type="text" name="mail" class="mainInput">
                    <label class="mainLabel">Пароль:</label>
                    <input required type="password" name="pass" class="mainInput">
                    <label class="mainLabel">Повторите пароль:</label>
                    <input required type="password" name="passRep" class="mainInput">
                    <button class="btn register">ЗАРЕГИСТРИРОВАТЬСЯ</button>
                    <button type="button" ref="btn" @click="btnR = !btnR" class="btn auth cancel">ОТМЕНА</button>
                </form>
            </transition>
        </div>
        <script defer src="/js/mesScript.js"></script>
        @endsection
