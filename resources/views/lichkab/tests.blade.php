@extends('lichmain')

@section('title', 'Задания')

@section('content')
<section class="tests marginAuto">
                <div class="test">
                    <h3 class="colorJap placeCenter">Упражнение 1</h3>
                    <a class="inTest" href="/tests/testTheory/{{$query[0]->id}}">
                        <div class="round">
                        <div style="background-image: url('{{$query[0]->imgTest}}');"  class="roundIn"></div>
                        </div>
                    </a>
                </div>
                <?php
                    for($i = 1; $i < count($query); $i++):
                        foreach($idTests as $idT):
                            if($idT->id_tests == $query[$i-1]->id):
                ?>
                <div class="test">
                    <h3 class="colorJap placeCenter">Упражнение {{$i+1}}</h3>
                    <a class="inTest" href="/tests/testTheory/{{$query[$i]->id}}">
                        <div class="round">
                        <div style="background-image: url('{{$query[$i]->imgTest}}');"  class="roundIn"></div>
                        </div>
                    </a>
                </div>
                <?php 
                            else:
                            endif;
                        endforeach;
                    endfor;
                 ?>
            </section>
@endsection
