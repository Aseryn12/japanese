@extends('adminUsTest.admin')

@section('content')
    <article class="g-list">
    <a href="javascript:;" onclick="fun(false, 'tests', 'ins');" class="noStyle fixedThing configA">Добавить запись</a>  
        @foreach($table as $row)
        <section>
            <div class="t-listElem">
            <div class="listElem-header">
                <h3 class="inHeader-list">Тест №{{$row->id}}</h3>
                <h3 class="inHeader-list">Вопросы: {{$row->qwCount}}</h3>
            </div>
            <div class="t-emblem">
                <img src="{{$row->imgTest}}">
            </div>
            <div class="t-desc">
                <h3>Заголовок теории: <span>{{$row->theoryTitle}}</span></h3>
                <p>Текст теории: {{$row->theoryText}}</p>
            </div>
            </div>
            <div class="config">
                <a href="javascript:;" onclick="fun({{$row->id}}, 'tests', 'upd');" class="noStyle configA">Редактировать</a>
                <a href="javascript:;" onclick="fun({{$row->id}}, 'tests', 'del');" class="noStyle configA">Удалить</a>
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
            <div class="forInputs">
                <label>Заголовок: (theoryTitle)<input type="text" name="theoryTitle"></label>
                <label>Теория: (theoryText) <textarea type="text" name="theoryText"></textarea></label>
                <label>Количество вопросов: (qwCount) <input type="number" name="qwCount"></label>
                <label>Иконка: (imgTest) <input type="file" name="imgTest"></label>
            </div>
            </div>
            <div class="btnsInForm">
            <a class="noStyle placeRight eb" href="javascript:;"><button type="button" class="btn colorJap auth addHoverNew back">назад</button></a>
            <a class="noStyle placeRight eb" href="javascript:;"><button type="submit" class="btn colorJap auth addHoverNew mainActionOth">плейсхолдер2</button></a>
            </div>
        </form>
    </dialog>
@endsection