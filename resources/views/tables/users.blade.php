@extends('adminUsTest.admin')

@section('content')
    <article class="g-list">
        @foreach($table as $row)
        <section>
            <div class="u-listElem">
            <div class="u-cont">
                <h3>Логин: {{$row->logn}}</h3>
                <h4>Почта: {{$row->mail}}</h4>
            </div>
            <h3 class="descHeader">Прогресс пользователя</h3>
            <div class="u-desc">
                @if(isset($achivs[0][$row->id]))
                <div>
                    <h4 class="u-descHeader">Достижения</h4>
                    <p>{{$achivs[0][$row->id]}}/{{$achivs[1]}}</p>
                </div>
                @else
                <div>
                    <h4 class="u-descHeader">Нет прогресса</h4>
                </div>
                @endif
                @if(isset($gliphs[0][$row->id]))
                <div>
                    <h4 class="u-descHeader">Иероглифы</h4>
                    <p>{{$gliphs[0][$row->id]}}/{{$gliphs[1]-1}}</p>
                </div>
                @else
                <div>
                    <h4 class="u-descHeader">Нет прогресса</h4>
                </div>
                @endif
                @if(isset($tests[0][$row->id]))
                <div>
                    <h4 class="u-descHeader">Тесты</h4>
                    <p>{{$tests[0][$row->id]}}/{{$tests[1]}}</p>
                </div>
                @else
                <div>
                    <h4 class="u-descHeader">Нет прогресса</h4>
                </div>
                @endif
            </div>
            </div>
            <div class="config">
                <a href="javascript:;" onclick="fun({{$row->id}}, 'users', 'upd');" class="noStyle configA">Редактировать</a>
                <a href="javascript:;" onclick="fun({{$row->id}}, 'users', 'del');" class="noStyle configA">Удалить</a>
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
                <label>Логин: <input type="text" name="logn"></label>
                <label>e-mail: <input type="text" name="mail"></label>
            </div>
            </div>
            <div class="btnsInForm">
            <a class="noStyle placeRight eb" href="javascript:;"><button type="button" class="btn colorJap auth addHoverNew back">назад</button></a>
            <a class="noStyle placeRight eb" href="javascript:;"><button type="submit" class="btn colorJap auth addHoverNew mainActionOth">плейсхолдер2</button></a>
            </div>
        </form>
    </dialog>
@endsection