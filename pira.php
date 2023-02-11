<style>
    body {
        background-color: rgb(70, 13, 27);
        color: black;
        font-size:17px;
       
        text-align: center;
    }
    h5 {
        text-align: center;
        color: aqua;
        font-size: 15px;
    }
    a {
        text-decoration: none;
        background-color: rgb(30, 108, 88);
        border-radius: 10px;
        padding: 5px;
    }
   
</style>
<a href="pira.html">  Volver al ejercicio</a>
<br>
<br>
<br>
<?php
$f = $_GET["num"];

piraarriba($f);
echo "<br>";
echo "<br>";
pirahueca($f);
echo "<br>";
echo "<br>";
piraabajo($f);

function piraarriba($f)
{
    $e = 1;
    $i = 1;
    for ($e = 1; $e <= $f; $e++) {
        for ($i = 1; $i <= $e; $i++) {
            echo  "*" . " &nbsp";
        }
        echo "<br>";
    }
}




function pirahueca($f)
{
    $e = 1;
    $i = 1;
    for ($e = 1; $e <= $f; $e++) {
        for ($i = 1; $i <= $e; $i++) {
            if ($e == 1 || $e == $i || $i == 1 ||  $e == $f) {
                echo  "*" . " &nbsp";
            } else {
                echo " &nbsp " . "&nbsp";
            }
        }
        echo "<br>";
    }
    echo "<br>";
    echo "<br>";
}


function piraabajo($f)
{
    $e = 1;
    $i = 1;
    for ($e = 1; $e <= $f; $e++) {
        for ($i = $f; $i >= $e; $i--) {
            echo  "*" . "&nbsp ";
        }
        echo "<br>";
    }
}
?>