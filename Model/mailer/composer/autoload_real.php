<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit09170dcbbb0b433a4d4a476f28c4179e
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit09170dcbbb0b433a4d4a476f28c4179e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit09170dcbbb0b433a4d4a476f28c4179e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit09170dcbbb0b433a4d4a476f28c4179e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}