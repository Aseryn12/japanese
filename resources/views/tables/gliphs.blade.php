@extends('adminUsTest.admin')

@section('content')
    <article class="g-list">
    <a href="javascript:;" onclick="fun(false, 'gliphs', 'ins');" class="noStyle fixedThing configA">Добавить запись</a>  
        @foreach($table as $row)
        @if($row->type)
        <section>
            <div class="g-listElem">
            <img src="{{$row->img}}" class="gliphImg">
            <div class="desc">
                <h2 class="gliphType">Тип<br>{{$row->type}}</h2>
                <p>Кирилическая транскрипция - <span>{{$row->ciril}}</span></p>
                <p>Латинская транскрипция - <span>{{$row->latin}}</span></p>
            </div>
            </div>
            <div class="config">
                <a href="javascript:;" onclick="fun({{$row->id}}, 'gliphs', 'upd');" class="noStyle configA">Редактировать</a>
                <a href="javascript:;" onclick="fun({{$row->id}}, 'gliphs', 'del');" class="noStyle configA">Удалить</a>
            </div>
        </section>
        @endif
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
                <label>Иероглиф (gliph): <input type="file" name="img"></label>
                <label>Латинская транскрипция (latin): <input type="text" name="latin"></label>
                <label>Кирелическая транскрипция (ciril): <input type="text" name="ciril"></label>
                <label>Тип иероглифа (type): <select name="type">
                    <option value="hira">Hira</option>
                    <option value="kata">Kata</option>
                    <option value="kanji">Kanji</option>
                </select></label>
            </div>
            <div class="btnsInForm">
            <a class="noStyle placeRight eb" href="javascript:;"><button type="button" class="btn colorJap auth addHoverNew back">назад</button></a>
            <a class="noStyle placeRight eb" href="javascript:;"><button type="submit" class="btn colorJap auth addHoverNew mainActionOth">плейсхолдер2</button></a>
            </div>
        </form>
    </dialog>
@endsection