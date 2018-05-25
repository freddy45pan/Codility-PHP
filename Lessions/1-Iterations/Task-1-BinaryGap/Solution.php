<?php

/**
 * Binary Gap Solution
 *
 * @param integer $N
 *
 * @return void
 */
function solution(int $N)
{
    $binary = base_convert($N, 10, 2);

    // 因為只計算 1 和 1 之間的連續 0,
    // 所以去除前後的連續 0, ex. 10100 => 101
    $binary = trim($binary, '0');

    $binary = str_split($binary);

    // array 中沒有 0 表示不會出現 binary gap
    if ( ! in_array('0', $binary))
    {
        return 0;
    }

    $length = count($binary);

    // 計算 0 連續出現的次數
    $count = 0;

    $max = 0;

    for ($i = 0; $i < $length; $i++)
    {
        // 遇到 1, count 重新計算
        if ($binary[$i] == '1')
        {
            $count = 0;
        }
        else
        {
            $count++;
        }

        $max = max($max, $count);
    }

    return $max;
}
