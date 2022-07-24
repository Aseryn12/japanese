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
        @yield('content')
    </main>
    <dialog class="dial">
        <form class="dialForm">
            <h3 class="insure"></h3>
            <div class="btnsInForm">
            <a class="noStyle placeRight eb" href="javascript:;"><button type="button" class="btn colorJap auth addHoverNew back">назад</button></a>
            <a class="noStyle placeRight eb" href="javascript:;"><button type="submit" class="btn colorJap auth addHoverNew mainAction">удалить</button></a>
            </div>
        </form>
    </dialog>
</body>
</html>