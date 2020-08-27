<?php

abstract class ApptEncoder
{
    abstract public function encode(): string;
}

class BloggsApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return "Дані про зустріч зашифровані в форматі BloggsCal" . PHP_EOL;
    }
}

class MegaApptEncoder extends ApptEncoder
{
    public function encode(): string
    {
        return "Дані про зустріч зашифровані в форматі MegaCal" . PHP_EOL;
    }

}

abstract class CommsManager
{
    abstract public function getHeaderText(): string;

    abstract public function getEncoder(): ApptEncoder;

    abstract public function getFooterText(): string;
}

class BloggsCommsManager extends CommsManager
{
    public function getHeaderText(): string
    {
        return "BloggsComms верхній пост" . PHP_EOL;
    }

    public function getEncoder(): ApptEncoder
    {
        return new BloggsApptEncoder();
    }

    public function getFooterText(): string
    {
        return "BloggsComms нижній пост" . PHP_EOL;
    }

}

class MegaCommsManager extends CommsManager
{
    public function getHeaderText(): string
    {
        return "MegaComms верхній пост" . PHP_EOL;
    }

    public function getEncoder(): ApptEncoder
    {
        return new MegaApptEncoder();
    }

    public function getFooterText(): string
    {
        return "MegaComms нижній пост" . PHP_EOL;
    }

}

#########################################

$bgr = new BloggsCommsManager();

echo $bgr->getHeaderText();
echo $bgr->getFooterText();
echo $bgr->getEncoder()->encode();

#########################################
echo "\n";

#########################################
$mgr = new MegaCommsManager();

echo $mgr->getHeaderText();
echo $mgr->getFooterText();
echo $mgr->getEncoder()->encode();

#########################################