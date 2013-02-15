<?php

$ip = 0;
$cs = 1;
$x = 0;
$y = 0;
$z = 0;

if (isset($_GET["prog"]) && $_GET["prog"] != '')
    $program = $_GET["prog"];
else
    $program = "cx1cy2+zxy*zzzpzcx1+yzxpyiypydypycx2/yyxpycz5-yyzpycx6cy1+xxypxcz0izpzlxz8";

echo "Prog: " . $program . "<hr>";
while ($ip < strlen($program)) {
    echo "ip:" . $ip . " x:" . $x . " y:" . $y . " z:" . $z . " cmd: " . $program[$ip] . "<br>";
    switch ($program[$ip]) {
        case "c":
            $$program[$ip+=$cs] = $program[$ip+=$cs];
            break;
        case "p":
            echo $$program[$ip+=$cs] . "<hr>";
            break;
        case "i":
            $$program[$ip+=$cs]++;
            break;
        case "d":
            $$program[$ip+=$cs]--;
            break;
        case "l":
            if ($$program[$ip+=$cs] > $$program[$ip+=$cs])
                $ip-=$program[$ip+=$cs] * $cs;
            else
                $ip+=$cs;
            break;
        case "+":
            $$program[$ip+=$cs] = $$program[$ip+=$cs] + $$program[$ip+=$cs];
            break;

        case "-":
            $$program[$ip+=$cs] = $$program[$ip+=$cs] - $$program[$ip+=$cs];
            break;
        case "*":
            $$program[$ip+=$cs] = $$program[$ip+=$cs] * $$program[$ip+=$cs];
            break;

        case "/":
            $$program[$ip+=$cs] = $$program[$ip+=$cs] / $$program[$ip+=$cs];
            break;
    }
    $ip+=$cs;
}
?>
