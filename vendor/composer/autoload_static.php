<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitee0c31ad09aa0dd4be4a2b54537dfd9c
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Mcglow2\\PhpHelper\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Mcglow2\\PhpHelper\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInitee0c31ad09aa0dd4be4a2b54537dfd9c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitee0c31ad09aa0dd4be4a2b54537dfd9c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitee0c31ad09aa0dd4be4a2b54537dfd9c::$classMap;

        }, null, ClassLoader::class);
    }
}
