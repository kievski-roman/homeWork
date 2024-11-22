<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0371ed47d60886192bb9998702824294
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
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static $classMap = array (
        'App\\Core\\Router' => __DIR__ . '/../..' . '/App/Core/Router.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0371ed47d60886192bb9998702824294::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0371ed47d60886192bb9998702824294::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0371ed47d60886192bb9998702824294::$classMap;

        }, null, ClassLoader::class);
    }
}
