<?php

namespace App\Settings;

class Settings
{
    public const string APP_NAME = 'Sobo CMS';
    public const string APP_VERSION = '0.0.1';

    private static array $publicPaths = [
        '/user/login',
        '/',
        '/play',
        '/openapi.json',
        // TODO - static asset prefixes
    ];

    /**
     * Summary of getPublicPaths.
     *
     * @return string[]
     */
    public static function getPublicPaths(): array
    {
        return self::$publicPaths;
    }

    public static function getAppVersion(): string
    {
        return self::APP_VERSION;
    }

    public static function getAppName(): string
    {
        return self::APP_NAME;
    }
}
