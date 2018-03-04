<?php
/**
 * Created by PhpStorm.
 * User: nikit
 * Date: 04-Mar-18
 * Time: 9:08 AM
 */

namespace Bastas\Config\Adapter;


use Bastas\Config\ConfigAdapterInterface;

class YamlAdapter implements ConfigAdapterInterface
{
    public function addToConfig($config): void
    {
        // TODO: Implement addToConfig() method.
    }

    public function getConfig(?string $key = null): array
    {
        return [];
        // TODO: Implement getConfig() method.
    }
}