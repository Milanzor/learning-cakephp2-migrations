<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit617c816584fd47be100a97b3840c311e
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Composer\\Installers\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Composer\\Installers\\' => 
        array (
            0 => __DIR__ . '/..' . '/composer/installers/src/Composer/Installers',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit617c816584fd47be100a97b3840c311e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit617c816584fd47be100a97b3840c311e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
