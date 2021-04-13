<?php


namespace App\Setup\Manager;


class ConfigManager
{
    public function set($key = 'installed', $value = true)
    {


        $configs[$key] = $value;

        $configs = var_export($configs, 1);



        return true;
    }
}