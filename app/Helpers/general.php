<?php


use Illuminate\Support\Collection;

define('PAGINATION_COUNT', 15);

function getFolder()
{
    return app()->getLocale() == 'ar' ? 'css-rtl' : 'css';
}
function locales(): Collection { return collect(config('app.locales')); }

