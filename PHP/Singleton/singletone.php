<?php

class Preferences
{
    private array $prop = [];
    private static object $instance;


    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (empty(self::$instance)) {
            self::$instance = new Preferences();
        }
        return self::$instance;
    }

    public function setProperty(string $key, string $value): void
    {
        $this->prop[$key] = $value;
    }

    public function getProperty(string $key): string
    {
        return $this->prop[$key];
    }
}

$pref = Preferences::getInstance();
$pref->setProperty('car', 'BMW');
unset($pref);
$pref2 = Preferences::getInstance();
echo $pref2->getProperty('car');