<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace LeonardoAI\Model;

class VariationsNobgPostResponse200 extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * @var VariationsNobgPostResponse200SdNobgJob
     */
    protected $sdNobgJob;

    public function getSdNobgJob(): VariationsNobgPostResponse200SdNobgJob
    {
        return $this->sdNobgJob;
    }

    public function setSdNobgJob(VariationsNobgPostResponse200SdNobgJob $sdNobgJob): self
    {
        $this->initialized['sdNobgJob'] = true;
        $this->sdNobgJob = $sdNobgJob;

        return $this;
    }
}
