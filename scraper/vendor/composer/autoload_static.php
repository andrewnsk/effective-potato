<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit210b62c1f44a9eae4e59c3a2ecacee9c
{
    public static $prefixesPsr0 = array (
        'o' => 
        array (
            'org\\bovigo\\vfs' => 
            array (
                0 => __DIR__ . '/..' . '/mikey179/vfsStream/src/main/php',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit210b62c1f44a9eae4e59c3a2ecacee9c::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
