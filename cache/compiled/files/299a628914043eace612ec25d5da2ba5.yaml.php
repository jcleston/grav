<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'C:/Users/cleston.silva/Desktop/Dev/grav2/grav/user/plugins/injectphp/blueprints.yaml',
    'modified' => 1550074152,
    'size' => 666,
    'data' => [
        'name' => 'Injectphp',
        'version' => '0.1.0',
        'description' => 'Replace a markdown page with a php page',
        'icon' => 'plug',
        'author' => [
            'name' => 'Larry Vennard',
            'email' => 'lvennard@yahoo.com'
        ],
        'homepage' => 'https://github.com/lvennard/grav-plugin-injectphp',
        'keywords' => 'grav, php, plugin, markdown',
        'bugs' => 'https://github.com/lvennard/grav-plugin-injectphp/issues',
        'docs' => 'https://github.com/lvennard/grav-plugin-injectphp/blob/master/README.md',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
