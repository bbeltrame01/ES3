<?php

return [

    'title' =>  'MyPocket',

    'title_prefix' => '',

    'title_postfix' => ' - Sistema de Gerenciamento Financeiro',

    'logo' => '<b>My</b>Pocket',

    'logo_mini' => '<b>M</b>P',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'blue-light',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => null,

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    'dashboard_url' => 'dashboard',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',

    'menu' => [
        [
            'text'        => 'Dashboard',
            'url'         => 'dashboard',
            'icon'        => 'th-large',
        ],
        [
            'text' => 'Cadastros',
            'icon' => 'plus-square',
            'submenu' => [
                [
                    'text' => 'Contas',
                    'url'  => 'register/account',
                    'icon' => 'wallet',
                ],
                [
                    'text' => 'Cartões',
                    'url'  => 'register/card',
                    'icon' => 'credit-card',
                ],
            ],
        ],
        [
            'text'    => 'Movimentos',
            'icon'    => 'exchange-alt',
            'submenu' => [
                [
                    'text' => 'Gastos',
                    'url'  => 'movement/spent',
                    'icon' => 'hand-holding-usd',
                ],
                [
                    'text'    => 'Renda',
                    'url'     => 'movement/income',
                    'icon' => 'hand-holding-usd',
                ],
                [
                    'text' => 'Transferência',
                    'url'  => 'movement/transfer',
                    'icon' => 'hand-holding-usd',
                ],
            ],
        ],
        [
            'text' => 'Comprovantes',
            'icon' => 'ticket-alt',
            'submenu' => [
                [
                    'text' => 'Compras',
                    'url'  => 'receipt/buy',
                    'icon' => 'shopping-cart',
                ],
                [
                    'text' => 'Renda',
                    'url'  => 'receipt/income',
                    'icon' => 'file-invoice-dollar',
                ],
            ],
        ],
        [
            'text' => 'Metas',
            'url' => 'objective',
            'icon' => 'trophy',
        ],
        [
            'text' => 'Relatórios',
            'icon' => 'file',
            'submenu' => [
                [
                    'text' => 'Extrato',
                    'icon' => 'file-alt',
                    'submenu' => [
                        [
                        'text'=>'Contas',
                        'url' =>'report/extract/account',
                        'icon' => 'wallet',
                    ],
                    [
                        'text' => 'Cartão de Crédito',
                        'url' => 'report/extract/card',
                        'icon' => 'credit-card',
                    ],
                ],
                ],
                [
                    'text' => 'Movimentos',
                    'icon' => 'file-medical-alt',
                    'submenu' => [
                        [
                        'text'=>'Despesas X Receitas',
                        'url' =>'report/movements/balance',
                        'icon' => 'balance-scale',
                    ],
                    [
                        'text' => 'Lançamentos',
                        'url' => 'report/movements/releases',
                        'icon' => 'exchange-alt',
                    ],
                ],
                ],
            ],
        ],    
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Choose which JavaScript plugins should be included. At this moment,
    | only DataTables is supported as a plugin. Set the value to true
    | to include the JavaScript file from a CDN via a script tag.
    |
    */

    'plugins' => [
        'datatables' => true,
        'select2'    => true,
        'chartjs'    => true,
    ],
];
