<?php

function bonus() : string
{
    $env = strtolower(trim(getenv('APP_ENV') ?: ''));

    if ($env === 'production') {
        return 'Prod';
    }

    if ($env === 'development') {
        return 'Dev';
    }

    return 'Dev';
}

echo bonus();