<?php

namespace Bridge\Methods;

use Bridge\Methods\SortImple;

class BubbleSorterImple extends SortImple
{
    public function sort(array $array) :array
    {
        $count = count($array);
        // 要素数回繰り返し
        for ($i = 0; $i < $count; $i++) {
            // 要素数-1回繰り返し
            for ($n = 1; $n < $count; $n++) {
                // 隣接要素を比較し大小が逆なら入替える
                if ($array[$n-1] > $array[$n]) {
                    $temp = $array[$n];
                    $array[$n] = $array[$n-1];
                    $array[$n-1] = $temp;
                }
            }
        }
        return $array;
    }
}
