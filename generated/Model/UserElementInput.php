<?php

namespace CedricZiel\LeonardoAI\Generated\Model;

class UserElementInput extends \ArrayObject
{
    protected $initialized = [];

    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * Unique identifier for element. Elements can be found from the List Elements endpoint.
     *
     * @var int|null
     */
    protected $userLoraId;
    /**
     * Weight for the element.
     *
     * @var float|null
     */
    protected $weight;

    public function getUserLoraId(): ?int
    {
        return $this->userLoraId;
    }

    public function setUserLoraId(?int $userLoraId): self
    {
        $this->initialized['userLoraId'] = true;
        $this->userLoraId = $userLoraId;

        return $this;
    }

    public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(?float $weight): self
    {
        $this->initialized['weight'] = true;
        $this->weight = $weight;

        return $this;
    }
}
