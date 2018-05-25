<?php

/**
 * Rotate an array to the right by a given number of steps.
 *
 * @param array $A
 * @param integer $K
 *
 * @return array
 */
function solution(array $A, int $K)
{
    if (empty($A))
    {
        return $A;
    }

    for ($i = 0; $i < $K; $i++)
    {
        $last = array_pop($A);

        array_unshift($A, $last);
    }

    return $A;
}
