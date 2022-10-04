<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Constructor</title>
</head>
<body>
    <h1>[생성자의 프로퍼티 승격]</h1>
    <hr>
    <h2>Old Legacy style</h2>

    <?php
    class RockStar
    {
        public string $band;
        public string $style;
        public int $age;

        public function __construct(
            $band,
            $style,
            $age
        )
        {
            $this->band = $band;
            $this->style = $style;
            $this->age = $age;
        }
    }
    $band = "Black Sabbath";
    $style = "Heavy Metal";
    $age = 80;

    $rock_star = new RockStar(band: $band, style: $style, age: $age);
    echo "<h3>{$band} (은/는) {$age}년대 {$style} 밴드입니다.</h3>"
    ?>

    <br><br>

    <h2>Modern PHP style</h2>
    <?php
    class Rocker
    {
        public function __construct
        (
            public string $band,
            public string $style,
            public int $age
        )
        {

        }
    }

    $band = "Pearl Jam";
    $style = "Grunge Rock";
    $age = 90;

    echo "<h3>{$band} (은/는) {$age}년대 {$style} 밴드입니다.</h3>"
    ?>
</body>
</html>