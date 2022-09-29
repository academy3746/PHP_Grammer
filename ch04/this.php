<!doctype html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>Rockstar</title>
</head>
<body>
    <h1>Rockstar</h1>
    <?php
    class RockStar
    {
        public string $band;
        public string $style;

        function set_star(string $band, string $style) : void
        // Looks like setter in Java
        {
            $this->band = $band;
            $this->style = $style;
        }

        function get_star() : string
        // Looks like getter in Java
        {
            /*
            $intro = "This Band is {$this->band}. <br> 
            Genre is {$this->style}. <br>";

            return $intro;
            **/

            return "Today's Band is called {$this->band}. <br> 
            Genre is {$this->style}. <br>";
        }
    }

    $rock_star = new RockStar();
    $rock_star->set_star(band: 'Dream Theater', style: 'Progressive Power Metal');

    echo $rock_star->get_star();
    ?>
</body>
</html>