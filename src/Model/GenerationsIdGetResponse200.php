<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace LeonardoAI\Model;

class GenerationsIdGetResponse200 extends \ArrayObject
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
     * columns and relationships of "generations".
     *
     * @var GenerationsIdGetResponse200GenerationsByPk|null
     */
    protected $generationsByPk;

    /**
     * columns and relationships of "generations".
     */
    public function getGenerationsByPk(): ?GenerationsIdGetResponse200GenerationsByPk
    {
        return $this->generationsByPk;
    }

    /**
     * columns and relationships of "generations".
     */
    public function setGenerationsByPk(?GenerationsIdGetResponse200GenerationsByPk $generationsByPk): self
    {
        $this->initialized['generationsByPk'] = true;
        $this->generationsByPk = $generationsByPk;

        return $this;
    }
}
