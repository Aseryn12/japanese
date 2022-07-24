@extends('tests.taskIn')

@section('title', "Тест")

@section('task')
    @if($_SESSION['res'])
    <dialog class="dial">
        <h2 class="colorJap center">Ответ не верный.</h2>
        <h4 class="colorJap center">Правильный ответ {{$_SESSION['quests'][$id-1]->a}}</h4>
        <button class="colorJap smallWidth auth addHoverNew inDial">Продолжить</button>
    </dialog>
    @endif
    <section class="task">
        @if($quest[2])
        <img class="quest i" src="{{$quest[2]}}">
        @endif
        <h3 class="colorJap t">{{$quest[1]}}</h3>
        <article class="a">
            @foreach($answ as $a)
            <div class="inA"><a href="/tests/tasks/prov/{{$id}}/{{$a}}" class="colorJap answer">{{$a}}</a></div>
            @endforeach
        </article>
    </section>
@endsection