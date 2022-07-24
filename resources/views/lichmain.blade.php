<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/lichKab.css" rel="stylesheet">
    <script src="/js/app.js"></script>
    <title>日本語 | @yield('title')</title>
</head>
<body>
    <header class="header backWhite">
        <h1 class="placeLeft colorJap cur a">日本語</h1>
        <h3 class="placeCenter b"><a href="/lichkab/logs" class="noStyle colorJap kabHead">Профиль</a></h3>
        <h3 class="placeCenter t"><a href="/lichkab/tests" class="noStyle placeCenter colorJap kabHead t">Задания</a></h3>
        <h3 class="placeCenter c"><a href="/lichkab/achivs" class="noStyle placeCenter colorJap kabHead c">Достижения</a></h3>
        <h3 class="placeCenter d"><a href="/lichkab/gliphs" class="noStyle placeCenter colorJap kabHead d">Иероглифы</a></h3>
        <a class="noStyle placeRight e" href="/"><button class="btn colorJap smallWidth auth addHoverNew">выход</button></a>
    </header>
    <main class="main backWhite">
        <div id="app2">
            @yield('content')
        </div>
    </main>
    <footer>
        
    </footer>
</body>
</html>