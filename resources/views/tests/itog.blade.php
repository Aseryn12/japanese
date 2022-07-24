<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/tasks.css" rel="stylesheet">
    <title>日本語 | Итог</title>
</head>
<body>
<?php
    if(isset($counter) && isset($count)){
        $w = round(100/$count * $counter);
    }
?>
<header class="header backWhite">
        <h1 class="colorJap g">日本語</h1>
        @if(isset($counter) && isset($count))
        <div class = rangeTask><div style="width: {{$w}}%" class="inRangeTask"></div></div>
        @endif
    </header>
    <main class="mainItog">
    <section class="res">
        <article class="inRes">
            <h2 class="colorJap inResText">Тест пройден!</h2>
            <a class="noStyle e" href="/lichkab/tests"><button class="colorJap inResA smallWidth auth addHoverNew taskBtn">В личный кабинет</button></a>
        </article>
    </section>
    </main>
</body>
</html>