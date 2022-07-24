@extends('lichmain')


@section('title', 'Иероглифы')

@section('content')
<section class="gliphs">
                @if($query->first() == null)
                <h1 class="colorJap center">Пока что вы не выучили ни одного иероглифа</h1>
                @else
                <h1 class="colorJap center">Выученные иероглифы</h1>
                @endif
                <article class="inGliphs">
                    @foreach($query as $gliph)
                        @switch($gliph->latin)
                        @case('yu')
                            <div class="placeHolder">
                            </div>
                            <div class="oneGliph" v-on:click="show('{{$gliph->id}}')">
                                <img сlass="placeCenter" width="90%" height="90%" src="{{$gliph->img}}">
                                <p class="colorJap gName">{{$gliph->ciril}}</p>
                            </div>
                            <div class="placeHolder">
                            </div>
                            @break
                        @case('wa')
                            <div class="oneGliph" v-on:click="show('{{$gliph->id}}')">
                                <img сlass="placeCenter" width="90%" height="90%" src="{{$gliph->img}}">
                                <p class="colorJap gName">{{$gliph->ciril}}</p>
                            </div>
                            <div class="placeHolder">
                            </div>
                            <div class="placeHolder">
                            </div>
                            <div class="placeHolder">
                            </div>
                            @break
                        @case('n')
                            <div class="placeHolder">
                            </div>
                            <div class="placeHolder">
                            </div>
                            <div class="oneGliph" v-on:click="show('{{$gliph->id}}')">
                                <img сlass="placeCenter" width="90%" height="90%" src="{{$gliph->img}}">
                                <p class="colorJap gName">{{$gliph->ciril}}</p>
                            </div>
                            <div class="placeHolder">
                            </div>
                            <div class="placeHolder">
                            </div>
                            @break
                        @default
                            <div class="oneGliph" v-on:click="show({{$gliph->id}})">
                                <img сlass="placeCenter" width="90%" height="90%" src="{{$gliph->img}}">
                                <p class="colorJap gName">{{$gliph->ciril}}</p>
                            </div>
                            @break
                        @endswitch
                    @endforeach
                </article>
                <dialog class="chosenGliph">
                    adadada
                    <button type="button" class="btn auth" v-on:click="close">назад</button>
                </dialog>
            </section>
@endsection