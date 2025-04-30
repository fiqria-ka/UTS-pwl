<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
    public $aliases = [
        'csrf'     => \CodeIgniter\Filters\CSRF::class,
        'toolbar'  => \CodeIgniter\Filters\DebugToolbar::class,
        'authcheck' => \App\Filters\AuthCheck::class,
    ];

    public $globals = [
        'before' => [
            // 'csrf',
        ],
        'after'  => [
            'toolbar',
        ],
    ];

    public $methods = [];
    public $filters = [];
}
