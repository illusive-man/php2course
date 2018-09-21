<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit88642d5f3b1750fba5345e425dfcfb5a
{
    public static $prefixLengthsPsr4 = array (
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'app\\models\\Model' => __DIR__ . '/../..' . '/models/Model.php',
        'app\\models\\Product' => __DIR__ . '/../..' . '/models/Product.php',
        'app\\models\\User' => __DIR__ . '/../..' . '/models/User.php',
        'app\\services\\Db' => __DIR__ . '/../..' . '/services/Db.php',
        'app\\traits\\TSingleton' => __DIR__ . '/../..' . '/traits/TSingleton.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit88642d5f3b1750fba5345e425dfcfb5a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit88642d5f3b1750fba5345e425dfcfb5a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit88642d5f3b1750fba5345e425dfcfb5a::$classMap;

        }, null, ClassLoader::class);
    }
}