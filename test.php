<?php

$m2 = function ($x)
{
    return $x*2;
};

$m3 = function ($x)
{
    return $x*3;
};

function apply($x, $func)
{
    return $func($x);
}

echo apply(2, $m3);