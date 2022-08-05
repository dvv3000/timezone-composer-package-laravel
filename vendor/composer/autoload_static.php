<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit98e2a1f6da2da31dda01191fbda3e97e
{
    public static $prefixLengthsPsr4 = array (
        'V' => 
        array (
            'Vietdv\\FirstPackage\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Vietdv\\FirstPackage\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit98e2a1f6da2da31dda01191fbda3e97e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit98e2a1f6da2da31dda01191fbda3e97e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit98e2a1f6da2da31dda01191fbda3e97e::$classMap;

        }, null, ClassLoader::class);
    }
}