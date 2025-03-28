<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace LeonardoAI\Model;

class ModelsPostResponse200SdTrainingJob extends \ArrayObject
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
     * @var string
     */
    protected $customModelId;
    /**
     * API Credits Cost for Model Training. Available for Production API Users.
     *
     * @var int|null
     */
    protected $apiCreditCost;

    public function getCustomModelId(): string
    {
        return $this->customModelId;
    }

    public function setCustomModelId(string $customModelId): self
    {
        $this->initialized['customModelId'] = true;
        $this->customModelId = $customModelId;

        return $this;
    }

    /**
     * API Credits Cost for Model Training. Available for Production API Users.
     */
    public function getApiCreditCost(): ?int
    {
        return $this->apiCreditCost;
    }

    /**
     * API Credits Cost for Model Training. Available for Production API Users.
     */
    public function setApiCreditCost(?int $apiCreditCost): self
    {
        $this->initialized['apiCreditCost'] = true;
        $this->apiCreditCost = $apiCreditCost;

        return $this;
    }
}
