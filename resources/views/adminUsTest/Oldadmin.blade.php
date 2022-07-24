<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/admin.css" rel="stylesheet">
    <script src="/js/app.js"></script>
    <script defer src="/js/adminJS.js"></script>
    <title>日本語 | {{$title}}</title>
</head>
<body>
    <header class="header backWhite">
        <h1 class="placeLeft colorJap cur a">日本語</h1>
        <div class="inHeader">
            @foreach($tableNames as $tableName)
            <h3 class="placeCenter b"><a href="/admin/table/{{$tableName[0]}}" class="jsbtn noStyle colorJap kabHead">{{$tableName[1]}}</a></h3>
            @endforeach
        </div>
        <a class="noStyle placeRight e " href="/"><button class="btn colorJap auth addHoverNew">выход</button></a>
    </header>
    <main class="main backWhite">
        <div id="app2">     
            @if($_SESSION['table'])
            @if($_SESSION['table'][1] != 'users')
            <a href="javascript:;" onclick="fun(false, '<?php echo $_SESSION['table'][1];?>', 'ins');" class="noStyle configA">Добавить запись</a>                
            @endif
            <table class="colorJap table">
                <thead>
                    <tr>
                        @foreach($_SESSION['table'][0][0] as $key => $value)
                        <td>{{$key}}</td>
                        @endforeach
                        <td class="forConfig">config</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($_SESSION['table'][0] as $row)
                   <tr>
                        @foreach($row as $key => $c)
                        <td>{{$c}}</td>
                        @endforeach
                        <td class="config">
                            <a href="javascript:;" onclick="fun({{$row->id}}, '<?php echo $_SESSION['table'][1];?>', 'upd');" class="noStyle configA">Редактировать</a>
                            <a href="javascript:;" onclick="fun({{$row->id}}, '<?php echo $_SESSION['table'][1];?>', 'del');" class="noStyle configA">Удалить</a>
                        </td>
                    </tr> 
                    @endforeach
                </tbody>
            </table>
            @else
            <h2 class="center colorJap">Выберите таблицу</h2>
            @endif
        </div>
    </main>
    @if($_SESSION['table'])
    <dialog class="dial">
        <form class="dialForm">
            <h3 class="insure"></h3>
            @php($i = 0);
            @foreach($_SESSION['table'][0][0] as $key => $v)
            @if($key == 'created_at' || $key == 'updated_at' || $key == 'id')
            @else
            <label class="inpField">{{$key}}<input type="text" name="{{$key}}"></label>
            @endif
            @php($i++)
            @endforeach
            <div class="btnsInForm">
            <a class="noStyle placeRight eb" href="javascript:;"><button type="button" class="btn colorJap auth addHoverNew back">назад</button></a>
            <a class="noStyle placeRight eb" href="javascript:;"><button type="submit" class="btn colorJap auth addHoverNew mainAction">удалить</button></a>
            </div>
        </form>
    </dialog>
    @endif
    <footer>
        
    </footer>
</body>
</html>