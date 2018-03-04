<?php

namespace Bastas\Config\Adapter;


use Bastas\Config\ConfigAdapterInterface;

class XmlAdapter implements ConfigAdapterInterface
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