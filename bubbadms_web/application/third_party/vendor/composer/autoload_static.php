<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfae6d99db4d63f731d5ec7f1bae5c2e5
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twilio\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twilio\\' => 
        array (
            0 => __DIR__ . '/..' . '/twilio/sdk/src/Twilio',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfae6d99db4d63f731d5ec7f1bae5c2e5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfae6d99db4d63f731d5ec7f1bae5c2e5::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
