<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5d56be34593b7be57795d14aa4548b7d
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Alura\\Pdo\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Alura\\Pdo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit5d56be34593b7be57795d14aa4548b7d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5d56be34593b7be57795d14aa4548b7d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5d56be34593b7be57795d14aa4548b7d::$classMap;

        }, null, ClassLoader::class);
    }
}
