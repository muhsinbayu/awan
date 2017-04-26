<?php
/**
 * Created by PhpStorm.
 * User: realONE
 * Date: 27/04/2017
 * Time: 02.07
 */

function bubble_sort($arr) {
    $size = count($arr);
    for ($i=0; $i<$size; $i++) {
        for ($j=0; $j<$size-1-$i; $j++) {
            if ($arr[$j+1] < $arr[$j]) {
                swap($arr, $j, $j+1);
            }
        }
    }
    return $arr;
}

function swap(&$arr, $a, $b)
{
    $tmp = $arr[$a];
    $arr[$a] = $arr[$b];
    $arr[$b] = $tmp;
}

echo '<form name="form" action="bubble.php" method="get"><input type="text" name="number" id="number">
<input type="submit" name="submit"/></form>';

$data = "";

if (! empty($_GET['number'])){
    $data = $_GET['number'];
}

$str = $data;

preg_match_all('!\d+!', $str, $matches);

print("Before sorting : ");

foreach ($matches[0] as $value)
{
    echo $value;
    echo " ";
}
echo "</br>";

$length = count($matches[0]);

for ($i = 0; $i < $length; $i++){
    $matches[0][$i] = (int)$matches[0][$i];
}

$matches[0] = bubble_sort($matches[0]);

print("After sorting : ");

foreach ($matches[0] as $value)
{
    echo $value;
    echo " ";
}
