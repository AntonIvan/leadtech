<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4db6ccb7727f3fd4beb09d79f68255d5
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'LeadGenerator\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'LeadGenerator\\' => 
        array (
            0 => __DIR__ . '/..' . '/vladimir163/lead-generator/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4db6ccb7727f3fd4beb09d79f68255d5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4db6ccb7727f3fd4beb09d79f68255d5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}