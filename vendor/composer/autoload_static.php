<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd4b2704e65efd45c17c1d60bdd0f6d5c
{
    public static $prefixLengthsPsr4 = array (
        'N' => 
        array (
            'Ncut\\LaraAuto\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ncut\\LaraAuto\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitd4b2704e65efd45c17c1d60bdd0f6d5c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd4b2704e65efd45c17c1d60bdd0f6d5c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd4b2704e65efd45c17c1d60bdd0f6d5c::$classMap;

        }, null, ClassLoader::class);
    }
}