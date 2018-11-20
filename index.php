<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!-- <?php
$a = 6;
if ($a == 5): ?>
<h1 id="col">Я появился</h1>
<?php else: ?>
<h1 id="col">Яsdasdпоявился</h1>
<?php endif; ?> -->

<?php 
$arr = [41,22,46,0,-2,-3,41,0,-17,-1];
$max = $arr[0];
$min = $arr[0];
for ($i=0; $i < count($arr) ; $i++) { 
    if($max < $arr[$i]) {
        $max = $arr[$i];
    }
    if($min > $arr[$i]) {
        $min = $arr[$i];
    }
}
echo $max;
echo "<br/>";
echo $min;
echo"<br/>";


for($k  = 0; $k< count($arr);$k++) {
    $cur = $arr[$k];
     for($o = $k+1;$o< count($arr);$o++) {
         $next = $arr[$o];
         if ($cur == $next) {
             echo $cur;
             echo "<br/>";
             echo $next;
             echo "<br/>";
         };
     }
 }

$sum = 0;
for($z = 0; $z < count($arr); $z++) {
    if ($arr[$z]>0) {
        $sum = $sum + $arr[$z];
    }
}
echo $sum;
echo "<br/>";
echo "///////////////";
echo "<br/>";

$array;
$cur=0;
for ($i=0; $i < 9; $i++) { 
    for ($j=0; $j < 8 ; $j++) { 
        $array[$i][$j] = rand(15,35);
        echo "|".$array[$i][$j]."|";
        if ($i==1){
           $cur = $cur + $array[$i][$j];
        };
    };
    echo "<br/>";
};

echo $cur;


?>
    
</body>
</html>
