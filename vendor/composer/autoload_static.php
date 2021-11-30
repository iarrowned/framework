<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit754adce16dbcda37964611bb4ca14f82
{
    public static $files = array (
        '8aa244c9c24219ed9854bc30225da9a9' => __DIR__ . '/../..' . '/app/config.php',
        '23414033a72e1d023fbbb59e7d8bd8d8' => __DIR__ . '/../..' . '/app/routes.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Framework\\' => 10,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Framework\\' => 
        array (
            0 => __DIR__ . '/../..' . '/framework',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit754adce16dbcda37964611bb4ca14f82::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit754adce16dbcda37964611bb4ca14f82::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit754adce16dbcda37964611bb4ca14f82::$classMap;

        }, null, ClassLoader::class);
    }
}
