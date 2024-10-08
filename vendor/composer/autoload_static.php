<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit297136b82c50d5e5cfffc292cdc76bd9
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Propel\\Wfm\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Propel\\Wfm\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit297136b82c50d5e5cfffc292cdc76bd9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit297136b82c50d5e5cfffc292cdc76bd9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit297136b82c50d5e5cfffc292cdc76bd9::$classMap;

        }, null, ClassLoader::class);
    }
}
