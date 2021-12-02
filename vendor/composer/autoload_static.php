<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0b99c8dd6df3283b102a8e838497c4b3
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Work\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Work\\' => 
        array (
            0 => __DIR__ . '/../..' . '/work',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0b99c8dd6df3283b102a8e838497c4b3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0b99c8dd6df3283b102a8e838497c4b3::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0b99c8dd6df3283b102a8e838497c4b3::$classMap;

        }, null, ClassLoader::class);
    }
}