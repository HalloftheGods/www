<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1c909f02da18f4a030e23137ba428197
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'E1379\\SpeakingUrl\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'E1379\\SpeakingUrl\\' => 
        array (
            0 => __DIR__ . '/..' . '/e1379/speaking-url/src',
        ),
    );

    public static $classMap = array (
        'E1379\\SpeakingUrl\\SpeakingUrl' => __DIR__ . '/..' . '/e1379/speaking-url/src/SpeakingUrl.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1c909f02da18f4a030e23137ba428197::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1c909f02da18f4a030e23137ba428197::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1c909f02da18f4a030e23137ba428197::$classMap;

        }, null, ClassLoader::class);
    }
}
