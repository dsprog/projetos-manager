<?php

namespace Dsprog\Framework;

class Tools
{
    public static function dd($value)
    {
        echo '<pre><code>';
        var_dump($value);
        echo '</code></pre>';
    }
}