<?php

namespace PG\Calculation;

class Calculation
{
    /**
     * Documentation for this.
     */
    protected $memorySize;

    /**
     * Documentation for this.
     */
    protected $diskSize;

    /**
     * Documentation for this.
     */
    protected $cpuCore;

    /**
     * Documentation for this.
     */
    protected $memoryPrice;

    /**
     * Documentation for this.
     */
    protected $diskPrice;

    /**
     * Documentation for this.
     */
    protected $cpuPrice;

    /**
     * Documentation for this.
     */
    public static function instance()
    {
        return new static();
    }

    /**
     * Documentation for this.
     */
    public function setMemorySize($size)
    {
        $this->memorySize = $size;

        return $this;
    }

    /**
     * Documentation for this.
     */
    public function getMemorySize()
    {
        return $this->memorySize;
    }

    /**
     * Documentation for this.
     */
    public function setDiskSize($size)
    {
        $this->diskSize = $size;

        return $this;
    }

    /**
     * Documentation for this.
     */
    public function getDiskSize()
    {
        return $this->diskSize;
    }

    /**
     * Documentation for this.
     */
    public function setCpuCore($core)
    {
        $this->cpuCore = $core;

        return $this;
    }

    /**
     * Documentation for this.
     */
    public function getCpuCore()
    {
        return $this->cpuCore;
    }

    /**
     * Documentation for this.
     */
    public function setMemoryPrice($price)
    {
        $this->memoryPrice = $price;

        return $this;
    }

    /**
     * Documentation for this.
     */
    public function getMemoryPrice()
    {
        return $this->memoryPrice;
    }

    /**
     * Documentation for this.
     */
    public function setDiskPrice($price)
    {
        $this->diskPrice = $price;

        return $this;
    }

    /**
     * Documentation for this.
     */
    public function getDiskPrice()
    {
        return $this->diskPrice;
    }

    /**
     * Documentation for this.
     */
    public function setCpuPrice($price)
    {
        $this->cpuPrice = $price;

        return $this;
    }

    /**
     * Documentation for this.
     */
    public function getCpuPrice()
    {
        return $this->cpuPrice;
    }

    /**
     * Documentation for this.
     */
    protected function calculate()
    {
        $prices = [
            ($this->memorySize / 1024) * $this->memoryPrice, ($this->diskSize / 20) * $this->diskPrice, ($this->cpuCore / 1) * $this->cpuPrice,
        ];

        return array_sum($prices);
    }

    /**
     * Documentation for this.
     */
    public function getPrice()
    {
        return $this->calculate();
    }
}
