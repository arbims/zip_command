<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit669d113912e3d42b02f5cfe0ef2c9ffa
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit669d113912e3d42b02f5cfe0ef2c9ffa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit669d113912e3d42b02f5cfe0ef2c9ffa::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit669d113912e3d42b02f5cfe0ef2c9ffa::$classMap;

        }, null, ClassLoader::class);
    }
}
