<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit39b3599877ade0d7aaac8170e83bb969
{
    public static $classMap = array (
        'AhoCorasick\\MultiStringMatcher' => __DIR__ . '/..' . '/wikimedia/aho-corasick/src/MultiStringMatcher.php',
        'AhoCorasick\\MultiStringReplacer' => __DIR__ . '/..' . '/wikimedia/aho-corasick/src/MultiStringReplacer.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit39b3599877ade0d7aaac8170e83bb969::$classMap;

        }, null, ClassLoader::class);
    }
}
