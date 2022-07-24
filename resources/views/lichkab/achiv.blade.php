@extends('lichmain')


@section('title', 'Достижения')

@section('content')
<section class="achivs">
    <h1 class="colorJap placeCenter">Достижения</h1>
    @foreach($query as $achiv)
    <article class="achiv">
        <div class="forImg"><img class="achivImg" width="200px" height="200px" src="{{$achiv->img}}"></div>
        <h2 class="colorJap achivName">{{$achiv->name}}</h2>
        <p class="achivCond">{{$achiv->cond}}</p>
    </article>     
    @endforeach   
</section>
@endsection