<?php

function htmlImg($src, $title = '', $width = '', $height = '')
{
    return sprintf('<img src="%s" title="%s" width="%s" height="%s">', $src, $title, $width, $height);
}

function htmlInputText($value = '', $size = '')
{
    return sprintf('<input type="text" value="%s" size="%s">', $value, $size);
}

// more html helpers here...