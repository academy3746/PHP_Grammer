<!doctype html>

<!--
    [매개변수]
    PHP version 8.0부터 추가된 기능으로서 이전 버전과는 호환되지 않는다.
    하지만 무척이나 댄디한 스타일이라고 할 수 있지.
 -->

<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Argument</title>
</head>
<body>
    <h1>Legacy Style</h1>
    <?php
    function rock_music($band, $genre)
    {
        echo "<p>{$band} (은 / 는) {$genre} 입니다.</p>";
    }

    rock_music('Nirvana','Grunge Rock');
    rock_music('The Who','Classic Rock');
    rock_music('Megadeth','Thrash Metal');
    rock_music('Oasis','British Pop');
    rock_music('Kiss','Visual Rock');
    ?>

    <hr>

    <h1>Modern Style</h1>
    <?php
    function rock_star($band, $genre)
    {
        echo "<p>{$band} (은 / 는) {$genre} 입니다.</p>";
    }
    rock_star(band: 'Nirvana', genre: 'Grunge Rock');
    rock_star(genre: 'British Pop', band: 'Oasis');
    // 매개변수의 순서가 바뀌더라도 알아서 매칭해 줌!
    ?>
</body>
</html>