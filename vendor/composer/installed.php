<?php return array(
    'root' => array(
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => NULL,
        'name' => '__root__',
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => NULL,
            'dev_requirement' => false,
        ),
        'almasaeed2010/adminlte' => array(
            'pretty_version' => 'v2.4.3',
            'version' => '2.4.3.0',
            'type' => 'template',
            'install_path' => __DIR__ . '/../almasaeed2010/adminlte',
            'aliases' => array(),
            'reference' => 'b3acb63ac56b13eb45b36e628b384a9a2507b50e',
            'dev_requirement' => false,
        ),
        'composer/installers' => array(
            'pretty_version' => 'v1.11.0',
            'version' => '1.11.0.0',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(),
            'reference' => 'ae03311f45dfe194412081526be2e003960df74b',
            'dev_requirement' => false,
        ),
        'roundcube/plugin-installer' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'shama/baton' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
    ),
);
