<?php

namespace Singleton\Code;

trait Singleton
{
    private static $instance = null;

    private function construct()
    {

    }

    public static function Instance()
    {
        if (self::$instance = null)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

    private function _clone()
    {

    }
    private function _wakeup()
    {

    }
}