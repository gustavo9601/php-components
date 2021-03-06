<?php

namespace PHPComponentes;

class SessionFileDriver
{
    public static function load()
    {
        $file = __DIR__ . '/../storage/session/session.json';
        if (file_exists($file)) {
            return json_decode(file_get_contents($file), true);
        }
        return [];
    }
}