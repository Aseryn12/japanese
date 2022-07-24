@extends('lichmain')


@section('title', 'Профиль')

@section('content')
    <div class="statistic">
        <div class="inStat">
            <h1 class="colorJap log">Ваш логин: {{$query->logn}}</h1>
            <h4 class="colorJap mail">Ваш eMail: {{$query->mail}}</h4> 
        </div>
        <div class="hr"></div>
        <div class="forAchiv inStat">
            <h3 class="colorJap">Достижения</h3>
            <div class="achivsLog">
                @foreach($achivs as $achiv)
                <div class="achivLog">
                    <img src="{{$achiv->img}}" width="100px" height="100px">
                    <h4 class="center">{{$achiv->name}}</h4>
                </div>
                @endforeach
            </div>
            <?php
                $w = ceil(100/$count[0] * $itog[0]);
            ?>
            <h3 class="colorJap">Процент выполнения достижений: {{$w}}%</h3>
            <div class = range><div style="width: {{$w}}%" class="inRange"></div></div>
        </div>
        <div class="hr"></div>
        <div class="forGliphs inStat">
            <h3 class="colorJap">Иероглифы</h3>
            <?php
                $w = ceil(100/$count[1] * $itog[1]);
            ?>
            <h3 class="colorJap">Процент выученных иероглифов: {{$w}}%</h3>
            <div class = range><div style="width: {{$w}}%" class="inRange"></div></div>
        </div>
        <div class="hr"></div>
        <div class="forTests inStat">
            <h3 class="colorJap">Тесты</h3>
            <?php
                $w = ceil(100/$count[2] * $itog[2]);
            ?>
            <h3 class="colorJap">Процент выполнения тестов: {{$w}}%</h3>
            <div class = range><div style="width: {{$w}}%" class="inRange"></div></div>
        </div>
        @if(100/$count[2] * $itog[2] == 100)
            @if($query->name)
            <form class="forCertForm" method="POST" action="/forCertificateA/{{$query->id}}">
                @csrf
                <input type="submit" class="btn auth cert" value="Получить сертификат">
            </form>
            @else
                <button class="btn auth cert">Получить сертификат</button>
            @endif
        @endif
    </div>
    @if(!$query->name)
    <dialog class="dialCert">
        <form method="POST" action="/forCertificate/{{$query->id}}">
            @csrf
            <label>Ваше имя: <input class="mainInput" placeholder="Иван" name="name" required type="text"></label>
            <label>Ваша фамилия: <input class="mainInput" placeholder="Иванов" name="surname" required type="text"></label>
            <label>Ваше отчество: <input class="mainInput" placeholder="Иванович" name="patronim" type="text"></label>
            <label class="forCheckBox"><input type="checkbox" required> Я соглашаюсь на обработку персональных данных</label>
            <input type="submit" class="register btn" value="Получить сертификат">
            <button type="button" class="auth btn close">Назад</button>
        </form>
    </dialog>
    <script src="/js/forCertificate.js"></script>
    @endif
@endsection