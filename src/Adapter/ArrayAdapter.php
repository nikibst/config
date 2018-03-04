<?php
/**
 * Created by PhpStorm.
 * User: nikit
 * Date: 04-Mar-18
 * Time: 9:08 AM
 */

namespace Bastas\Config\Adapter;


use Bastas\Config\ConfigAdapterInterface;

class ArrayAdapter implements ConfigAdapterInterface
{
    private $config = [];

    public function addToConfig($config): void
    {
        $this->config += $config;
    }

    public function getConfig(?string $key = null): array
    {
        return $this->config;
    }
}