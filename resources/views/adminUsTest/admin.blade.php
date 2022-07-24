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
    <script defer src="/js/mesScript.js"></script>
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
    @if(isset($_SESSION['m']))
        <dialog class="dialSus">
            @foreach($_SESSION['m'] as $k => $mes)
                <h4 class="colorJap center">({{$k}}) - {{$mes[0]}}</h4>  
            @endforeach
            <button class="colorJap smallWidth auth addHoverNew inDialSus">Назад</button>
        </dialog>
        <?php
            unset($_SESSION['m']);
        ?>
    @endif
    <main class="main backWhite">
        @yield('content')
    </main>
</body>
</html>