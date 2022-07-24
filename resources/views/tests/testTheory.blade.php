@extends('tests.taskIn')

@section('title', 'Теория')

@section('task')
<section class="taskTh">
    <h1 class="theoryTitle">{{$res->theoryTitle}}</h1>
    <article class="theoryImg">
        @foreach($imgs as $img)
        <div class="oneGliph">
            <img сlass="placeCenter" width="90%" height="90%" src="{{$img->img}}">
            <p class="colorJap gName">{{$img->ciril}}</p>
        </div>
        @endforeach
    </article>
    <article class="theoryText">
        <?php echo "$res->theoryText" ?>
    </article>
    <article class="theoryBtns">
        <a class="aBtn" href="/tests/testTasks/{{$id}}"><button class="btn btnTh auth">К заданию</button></a>
    </article>
</section>
@endsection