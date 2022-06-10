<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit4e7f4dbf681b682595c61ce2e46ded8a
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

        spl_autoload_register(array('ComposerAutoloaderInit4e7f4dbf681b682595c61ce2e46ded8a', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit4e7f4dbf681b682595c61ce2e46ded8a', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit4e7f4dbf681b682595c61ce2e46ded8a::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
