<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc96d5692f4d49f342546c642baeb4bb7
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

        spl_autoload_register(array('ComposerAutoloaderInitc96d5692f4d49f342546c642baeb4bb7', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc96d5692f4d49f342546c642baeb4bb7', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        \Composer\Autoload\ComposerStaticInitc96d5692f4d49f342546c642baeb4bb7::getInitializer($loader)();

        $loader->register(true);

        return $loader;
    }
}
