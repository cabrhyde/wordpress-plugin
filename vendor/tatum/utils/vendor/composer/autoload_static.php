<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5fff1caf64f6b78fe7a9621f62aaa4d5
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hathoriel\\Utils\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hathoriel\\Utils\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Hathoriel\\Utils\\Activator' => __DIR__ . '/../..' . '/src/Activator.php',
        'Hathoriel\\Utils\\Assets' => __DIR__ . '/../..' . '/src/Assets.php',
        'Hathoriel\\Utils\\Base' => __DIR__ . '/../..' . '/src/Base.php',
        'Hathoriel\\Utils\\Core' => __DIR__ . '/../..' . '/src/Core.php',
        'Hathoriel\\Utils\\Localization' => __DIR__ . '/../..' . '/src/Localization.php',
        'Hathoriel\\Utils\\PackageLocalization' => __DIR__ . '/../..' . '/src/PackageLocalization.php',
        'Hathoriel\\Utils\\PluginReceiver' => __DIR__ . '/../..' . '/src/PluginReceiver.php',
        'Hathoriel\\Utils\\Service' => __DIR__ . '/../..' . '/src/Service.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5fff1caf64f6b78fe7a9621f62aaa4d5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5fff1caf64f6b78fe7a9621f62aaa4d5::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5fff1caf64f6b78fe7a9621f62aaa4d5::$classMap;

        }, null, ClassLoader::class);
    }
}
