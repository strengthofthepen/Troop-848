<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit96964bf504f26b34aa3c816479b845ae
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\EventDispatcher\\' => 34,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Smtpapi' => 
            array (
                0 => __DIR__ . '/..' . '/sendgrid/smtpapi/lib',
            ),
            'SendGrid' => 
            array (
                0 => __DIR__ . '/..' . '/sendgrid/sendgrid/lib',
            ),
        ),
        'G' => 
        array (
            'Guzzle\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/tests',
            ),
            'Guzzle' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit96964bf504f26b34aa3c816479b845ae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit96964bf504f26b34aa3c816479b845ae::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit96964bf504f26b34aa3c816479b845ae::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
