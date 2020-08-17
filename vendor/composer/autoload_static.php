<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitebe94bec27bf899160de870d8347baf8
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'chriskacerguis\\RestServer\\' => 26,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'chriskacerguis\\RestServer\\' => 
        array (
            0 => __DIR__ . '/..' . '/chriskacerguis/codeigniter-restserver/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitebe94bec27bf899160de870d8347baf8::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitebe94bec27bf899160de870d8347baf8::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}