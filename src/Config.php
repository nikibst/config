<?php

namespace Bastas\Config;


class Config
{
    private $adapter;

    public function __construct(ConfigAdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    public function addToConfig($config): void
    {
        $this->adapter->addToConfig($config);
    }

    public function getConfig(?string $key = null)
    {
        $this->adapter->getConfig($key);
    }
}