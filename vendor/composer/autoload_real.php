<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite89dd95ead13bfcbe94e402179a3514c
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

        spl_autoload_register(array('ComposerAutoloaderInite89dd95ead13bfcbe94e402179a3514c', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite89dd95ead13bfcbe94e402179a3514c', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite89dd95ead13bfcbe94e402179a3514c::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
