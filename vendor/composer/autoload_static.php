<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita1aff256c1304c28cdd2f2116569ca23
{
    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slug' => 
            array (
                0 => __DIR__ . '/..' . '/kevinlebrun/slug.php/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInita1aff256c1304c28cdd2f2116569ca23::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}