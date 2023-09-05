<?php

namespace PG\Calculation;

class Calculation
{
    protected $memorySize;

    protected $diskSize;

    protected $cpuCore;

    protected $memoryPrice;

    protected $diskPrice;

    protected $cpuPrice;

    public static function instance()
    {
        return new static();
    }

    public function setMemorySize($size)
    {
        $this->memorySize = $size;

        return $this;
    }

    public function getMemorySize()
    {
        return $this->memorySize;
    }

    public function setDiskSize($size)
    {
        $this->diskSize = $size;

        return $this;
    }

    public function getDiskSize()
    {
        return $this->diskSize;
    }

    public function setCpuCore($core)
    {
        $this->cpuCore = $core;

        return $this;
    }

    public function getCpuCore()
    {
        return $this->cpuCore;
    }

    public function setMemoryPrice($price)
    {
        $this->memoryPrice = $price;

        return $this;
    }

    public function getMemoryPrice()
    {
        return $this->memoryPrice;
    }

    public function setDiskPrice($price)
    {
        $this->diskPrice = $price;

        return $this;
    }

    public function getDiskPrice()
    {
        return $this->diskPrice;
    }

    public function setCpuPrice($price)
    {
        $this->cpuPrice = $price;

        return $this;
    }

    public function getCpuPrice()
    {
        return $this->cpuPrice;
    }

    protected function calculate()
    {
        $prices = [
            ($this->memorySize / 1024) * $this->memoryPrice, ($this->diskSize / 20) * $this->diskPrice, ($this->cpuCore / 1) * $this->cpuPrice,
        ];

        return array_sum($prices);
    }

    public function getPrice()
    {
        return $this->calculate();
    }
}
