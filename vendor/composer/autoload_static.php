<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit55e7a4acd3a2a0d39c94b16b32bb3d42
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Carbon_Fields\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Carbon_Fields\\' => 
        array (
            0 => __DIR__ . '/..' . '/htmlburger/carbon-fields/core',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit55e7a4acd3a2a0d39c94b16b32bb3d42::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit55e7a4acd3a2a0d39c94b16b32bb3d42::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit55e7a4acd3a2a0d39c94b16b32bb3d42::$classMap;

        }, null, ClassLoader::class);
    }
}
