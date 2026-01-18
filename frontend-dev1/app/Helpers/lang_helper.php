<?php

function lang_url(string $path = ''): string
{
    $locale = service('request')->getLocale();
    return base_url($locale . '/' . ltrim($path, '/'));
}

function current_lang()
{
    return service('request')->getLocale();
}

function switch_lang($lang)
{
    $uri = trim(uri_string(), '/');

    // buang locale lama dari URL
    $uri = preg_replace('#^(id|en|ko)(/)?#', '', $uri);

    return '/' . $lang . ($uri ? '/' . $uri : '');
}