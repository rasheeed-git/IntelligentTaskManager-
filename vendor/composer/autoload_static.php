<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit345232f8b39b4cba28776ef0515d1ae2
{
    public static $prefixLengthsPsr4 = array (
        'B' => 
        array (
            'Bramus\\Router\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Bramus\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/bramus/router/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bramus' => 
            array (
                0 => __DIR__ . '/..' . '/bramus/router/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit345232f8b39b4cba28776ef0515d1ae2::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit345232f8b39b4cba28776ef0515d1ae2::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit345232f8b39b4cba28776ef0515d1ae2::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit345232f8b39b4cba28776ef0515d1ae2::$classMap;

        }, null, ClassLoader::class);
    }
}
