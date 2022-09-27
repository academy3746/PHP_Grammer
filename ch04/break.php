<?php
echo "<h1>Break Point EX</h1> <hr>";
for ($i = 0; $i < 10; $i++) {
    echo "<p>$i</p>";
    if ($i === 5) {
        break; // i의 key, value, 형태 모두 integer 5와 같다면 루프 escape!
    }
}