<?php

/**
 * Find value that occurs in odd number of elements.
 *
 * @param array $A
 *
 * @return integer
 */
function solution(array $A)
{
    if (empty($A))
    {
        return false;
    }

    $length = count($A);

    // A 應該要是奇數個元素的陣列
    if ($length % 2 == 0)
    {
        return false;
    }

    // 計算每個元素出現的次數
    $new_array = array_count_values($A);

    foreach ($new_array as $element => $count)
    {
        // 出現奇數次的元素就是無法配對的元素
        if ($count % 2 != 0)
        {
            return $element;
        }
    }
}
