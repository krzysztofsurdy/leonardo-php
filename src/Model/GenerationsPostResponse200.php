<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace LeonardoAI\Model;

class GenerationsPostResponse200 extends \ArrayObject
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
     * @var GenerationsPostResponse200SdGenerationJob|null
     */
    protected $sdGenerationJob;

    public function getSdGenerationJob(): ?GenerationsPostResponse200SdGenerationJob
    {
        return $this->sdGenerationJob;
    }

    public function setSdGenerationJob(?GenerationsPostResponse200SdGenerationJob $sdGenerationJob): self
    {
        $this->initialized['sdGenerationJob'] = true;
        $this->sdGenerationJob = $sdGenerationJob;

        return $this;
    }
}
