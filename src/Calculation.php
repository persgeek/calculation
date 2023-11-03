<?php

namespace PG\Calculation;

class Calculation
{
    protected $memorySize;

    protected $diskSize;

    protected $cpuCore;

    protected $cpuLimit;

    protected $address;

    protected $traffic;

    protected $memoryPrice;

    protected $diskPrice;

    protected $cpuCorePrice;

    protected $cpuLimitPrice;

    protected $addressPrice;

    protected $trafficPrice;

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

    public function setCpuLimit($limit)
    {
        $this->cpuLimit = $limit;

        return $this;
    }

    public function getCpuLimit()
    {
        return $this->cpuLimit;
    }

    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setTraffic($traffic)
    {
        $this->traffic = $traffic;

        return $this;
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

    public function setCpuCorePrice($price)
    {
        $this->cpuCorePrice = $price;

        return $this;
    }

    public function getCpuCorePrice()
    {
        return $this->cpuCorePrice;
    }

    public function setCpuLimitPrice($price)
    {
        $this->cpuLimitPrice = $price;

        return $this;
    }

    public function getCpuLimitPrice()
    {
        return $this->cpuLimitPrice;
    }

    public function setAddressPrice($price)
    {
        $this->addressPrice = $price;

        return $this;
    }

    public function getAddressPrice()
    {
        return $this->addressPrice;
    }

    public function setTrafficPrice($price)
    {
        $this->trafficPrice = $price;

        return $this;
    }

    public function getTrafficPrice()
    {
        return $this->trafficPrice;
    }

    public function getMachineMonthlyPrice()
    {
        $prices = [
            ($this->memorySize / 1024) * $this->memoryPrice, ($this->diskSize * $this->diskPrice), ($this->cpuCore * $this->cpuCorePrice), ($this->cpuLimit / 1000) * $this->cpuLimitPrice, ($this->address * $this->addressPrice)
        ];

        return array_sum($prices);
    }

    public function getMachineHourlyPrice()
    {
        $monthlyPrice = $this->getMachineMonthlyPrice();

        return ($monthlyPrice / 720);
    }

    public function getTrafficMonthlyPrice()
    {
        $monthlyPrice = ($this->traffic * $this->trafficPrice);

        return $monthlyPrice;
    }
}
