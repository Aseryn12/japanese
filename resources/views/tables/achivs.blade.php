@extends('adminUsTest.admin')

@section('content')
    <article class="g-list">
    <a href="javascript:;" onclick="fun(false, 'achivs', 'ins');" class="noStyle fixedThing configA">Добавить запись</a>  
        @foreach($table as $row)
        <section>
            <div class="g-listElem">
            <img src="{{$row->img}}" class="gliphImg">
            <div class="a-desc">
                <h2 class="gliphType">{{$row->name}}</h2>
                <p>Условие: <span>{{$row->cond}}</span></p>
            </div>
            </div>
            <div class="config">
                <a href="javascript:;" onclick="fun({{$row->id}}, 'achivs', 'upd');" class="noStyle configA">Редактировать</a>
                <a href="javascript:;" onclick="fun({{$row->id}}, 'achivs', 'del');" class="noStyle configA">Удалить</a>
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
                <label>Название (name): <input type="text" name="name"></label>
                <label>Условие (cond): <textarea type="text" name="cond"></textarea></label>
                <label>Эмблема (img): <input type="file" name="img"></label>
            </div>
            <div class="btnsInForm">
            <a class="noStyle placeRight eb" href="javascript:;"><button type="button" class="btn colorJap auth addHoverNew back">назад</button></a>
            <a class="noStyle placeRight eb" href="javascript:;"><button type="submit" class="btn colorJap auth addHoverNew mainActionOth">плейсхолдер2</button></a>
            </div>
        </form>
    </dialog>
@endsection