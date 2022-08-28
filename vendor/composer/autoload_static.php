<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit790f044843cb040ec5f5da5343cad8dd
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Ridhopujiono\\FileManagement\\' => 28,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ridhopujiono\\FileManagement\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit790f044843cb040ec5f5da5343cad8dd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit790f044843cb040ec5f5da5343cad8dd::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit790f044843cb040ec5f5da5343cad8dd::$classMap;

        }, null, ClassLoader::class);
    }
}