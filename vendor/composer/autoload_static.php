<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6ae5cde10a0516f7e2a0ec1966393a0a
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit6ae5cde10a0516f7e2a0ec1966393a0a::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInit6ae5cde10a0516f7e2a0ec1966393a0a::$classMap;

        }, null, ClassLoader::class);
    }
}