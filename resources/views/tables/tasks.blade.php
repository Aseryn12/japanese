@extends('adminUsTest.admin')

@section('content')
    <article class="g-list">
        <a href="javascript:;" onclick="fun(false, 'tasks', 'ins');" class="noStyle fixedThing configA">Добавить запись</a> 
        <p class="fixedThing2 noStyle">Фильтр:</p>
        <select onchange="changeSel()" class="selector fixedThing3" name="id_tests">
        <option value="0">Все вопросы</option>
            @foreach($tests as $test)
                <option value="{{$test->id}}">Тест №{{$test->id}}</option>
            @endforeach
        </select>
        @foreach($table as $row)
        <section data-num="{{$row->id_tests}}" class="oneTask">
            <div class="ta-listElem">
            <div class="listElem-header">
                <h3 class="">Тест №{{$row->id_tests}}</h3>
                <h3 class="">Вопрос №{{$row->id}}</h3>
            </div>
            <div class="ta-text">
                <h3>Текст вопроса:</h3>
                <p>{{$row->text}}</p>
            </div>
            @if($row->img)
            <img src="{{$row->img}}" class="gliphImg">
            @endif
            <h3>Ответы</h3>
            <div class="ta-answ">
                <p>{{$row->a}}</p>
                <p>{{$row->b}}</p>
                <p>{{$row->c}}</p>
                <p>{{$row->d}}</p>
            </div>
            </div>
            <div class="config">
                <a href="javascript:;" onclick="fun({{$row->id}}, 'tasks', 'upd');" class="noStyle configA">Редактировать</a>
                <a href="javascript:;" onclick="fun({{$row->id}}, 'tasks', 'del');" class="noStyle configA">Удалить</a>
            </div>
        </section>
        @endforeach
    </article>
    <dialog class="dial">
        <form class="dialFormDel">
            <h3 class="insureDel"></h3>
            <div class="btnsInForm">
            <a class="noStyle placeRight eb" href="javascript:;"><button type="button" class="btn colorJap auth addHoverNew back">назад</button></a>
            <a class="noStyle placeRight eb" href="javascript:;"><button type="submit" class="btn colorJap auth addHoverNew mainActionDel">плейсхолдер2</button></a>
            </div>
        </form>
    </dialog>
    <dialog class="dial">
        <form class="dialFormOth" enctype="multipart/form-data" method="post">
        @csrf
            <h3 class="insureOth"></h3>
            <div class="forInputs">
                <label>Текст вопроса (text): <textarea style="height:100px" type="text" name="text"></textarea></label>
                <label>Правильный ответ (a): <input type="text" name="a"></label>
                <label>Второй ответ (b): <input type="text" name="b"></label>
                <label>Третий ответ (c): <input type="text" name="c"></label>
                <label>Четвёртый ответ (d): <input type="text" name="d"></label>
                <label>Иероглиф: <select name="id_gliphs">
                    <option value="170">Нет иероглифа</option>
                    @foreach($gliphs as $gliph)
                    @if($gliph->id !=170)
                        <option value="{{$gliph->id}}">{{$gliph->ciril}}, {{$gliph->latin}}</option>
                    @endif
                    @endforeach
                </select></label>
                <label>Тест: <select name="id_tests">
                    @foreach($tests as $test)
                        <option value="{{$test->id}}">Тест №{{$test->id}}</option>
                    @endforeach
                </select></label>
            </div>
            <div class="btnsInForm">
            <a class="noStyle placeRight eb" href="javascript:;"><button type="button" class="btn colorJap auth addHoverNew back">назад</button></a>
            <a class="noStyle placeRight eb" href="javascript:;"><button type="submit" class="btn colorJap auth addHoverNew mainActionOth">плейсхолдер2</button></a>
            </div>
        </form>
    </dialog>
    <script src="/js/taskFilter.js">
    </script>
@endsection