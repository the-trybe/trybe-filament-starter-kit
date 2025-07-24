<?php

if (! function_exists('mb_split')) {
    function mb_split($pattern, $string, $limit = -1)
    {
        // Emulate mb_split using preg_split with the 'u' modifier for UTF-8 support
        return preg_split('/'.$pattern.'/u', $string, $limit > 0 ? $limit : -1);
    }
}
