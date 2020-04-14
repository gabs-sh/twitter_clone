<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4effa17a52665f0d44bcb4953b23b5ac
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4effa17a52665f0d44bcb4953b23b5ac::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4effa17a52665f0d44bcb4953b23b5ac::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}