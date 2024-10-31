<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8bda2baa6d743165fbd1a3e16eb3b7e7
{
    public static $prefixLengthsPsr4 = array (
        'G' => 
        array (
            'Group\\Ptable\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Group\\Ptable\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8bda2baa6d743165fbd1a3e16eb3b7e7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8bda2baa6d743165fbd1a3e16eb3b7e7::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8bda2baa6d743165fbd1a3e16eb3b7e7::$classMap;

        }, null, ClassLoader::class);
    }
}
