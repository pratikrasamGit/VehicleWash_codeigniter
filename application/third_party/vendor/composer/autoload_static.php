<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite56d23100f7cc3f9c842e6188f4f22a7
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite56d23100f7cc3f9c842e6188f4f22a7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite56d23100f7cc3f9c842e6188f4f22a7::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
