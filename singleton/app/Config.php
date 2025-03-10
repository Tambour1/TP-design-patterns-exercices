<?php

# TODO: Créer une classe Config en Singleton

namespace App;

final class Config
{
    private $settings =[];
    private static $instance;

    private function __construct()
    {
        $path = realpath(__DIR__ . '/../config/config.php');
        $this->settings = include $path;
    }

    public static function getInstance(): Config
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function get(string $key) {
        if (!isset($this->settings[$key])) {
            return null;
        }
        return $this->settings[$key];
    }

    
}