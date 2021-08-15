<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9e6721c0aa26c08614143596edfa2caf
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
            'Psr\\Cache\\' => 10,
            'Phpfastcache\\Tests\\' => 19,
            'Phpfastcache\\' => 13,
        ),
        'I' => 
        array (
            'InstagramScraper\\' => 17,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'Phpfastcache\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpfastcache/phpfastcache/tests/lib',
        ),
        'Phpfastcache\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpfastcache/phpfastcache/lib/Phpfastcache',
        ),
        'InstagramScraper\\' => 
        array (
            0 => __DIR__ . '/..' . '/raiym/instagram-php-scraper/src/InstagramScraper',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine\\CouchDB' => 
            array (
                0 => __DIR__ . '/..' . '/phpfastcache/couchdb/lib',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9e6721c0aa26c08614143596edfa2caf::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9e6721c0aa26c08614143596edfa2caf::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit9e6721c0aa26c08614143596edfa2caf::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit9e6721c0aa26c08614143596edfa2caf::$classMap;

        }, null, ClassLoader::class);
    }
}
