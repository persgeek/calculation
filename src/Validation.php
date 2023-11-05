<?php

namespace PG\Calculation;

class Validation
{
    protected $memorySize;

    protected $maxMemorySize;

    protected $diskSize;

    protected $maxDiskSize;

    protected $cpuCore;

    protected $maxCpuCore;

    protected $cpuLimit;

    protected $maxCpuLimit;

    protected $messages = [];

    public static function instance()
    {
        return new static();
    }

    public function setMemorySize($memorySize)
    {
        $this->memorySize = $memorySize;

        return $this;
    }

    public function getMemorySize()
    {
        return $this->memorySize;
    }

    public function setMaxMemorySize($memorySize)
    {
        $this->maxMemorySize = $memorySize;

        return $this;
    }

    public function getMaxMemorySize()
    {
        return $this->maxMemorySize;
    }

    public function setDiskSize($diskSize)
    {
        $this->diskSize = $diskSize;

        return $this;
    }

    public function getDiskSize()
    {
        return $this->diskSize;
    }

    public function setMaxDiskSize($diskSize)
    {
        $this->maxDiskSize = $diskSize;

        return $this;
    }

    public function getMaxDiskSize()
    {
        return $this->maxDiskSize;
    }

    public function setCpuCore($cpuCore)
    {
        $this->cpuCore = $cpuCore;

        return $this;
    }

    public function getCpuCore()
    {
        return $this->cpuCore;
    }

    public function setMaxCpuCore($cpuCore)
    {
        $this->maxCpuCore = $cpuCore;

        return $this;
    }

    public function getMaxCpuCore()
    {
        return $this->maxCpuCore;
    }

    public function setCpuLimit($cpuLimit)
    {
        $this->cpuLimit = $cpuLimit;

        return $this;
    }

    public function getCpuLimit()
    {
        return $this->cpuLimit;
    }

    public function setMaxCpuLimit($cpuLimit)
    {
        $this->maxCpuLimit = $cpuLimit;

        return $this;
    }

    public function getMaxCpuLimit()
    {
        return $this->maxCpuLimit;
    }

    protected function maxMemorySize()
    {
        $fail = ($this->memorySize > $this->maxMemorySize);

        if ($fail) {

            $this->messages[] = 'The memory size is not valid.';
        }
    }

    protected function maxDiskSize()
    {
        $fail = ($this->diskSize > $this->maxDiskSize);

        if ($fail) {

            $this->messages[] = 'The disk size is not valid.';
        }
    }

    protected function maxCpuCore()
    {
        $fail = ($this->cpuCore > $this->maxCpuCore);

        if ($fail) {

            $this->messages[] = 'The cpu core is not valid.';
        }
    }

    protected function maxCpuLimit()
    {
        $fail = ($this->cpuLimit > $this->maxCpuLimit);

        if ($fail) {

            $this->messages[] = 'The cpu limit is not valid.';
        }
    }

    public function validate()
    {
        $validators = [
            'maxMemorySize', 'maxDiskSize', 'maxCpuCore', 'maxCpuLimit'
        ];

        foreach ($validators as $validator) {

            call_user_func([$this, $validator]);
        }

        return array_shift($this->messages);
    }
}