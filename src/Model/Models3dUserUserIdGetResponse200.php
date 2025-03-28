<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace LeonardoAI\Model;

class Models3dUserUserIdGetResponse200 extends \ArrayObject
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
     * @var list<Models3dUserUserIdGetResponse200ModelAssetsItem>
     */
    protected $modelAssets;

    /**
     * @return list<Models3dUserUserIdGetResponse200ModelAssetsItem>
     */
    public function getModelAssets(): array
    {
        return $this->modelAssets;
    }

    /**
     * @param list<Models3dUserUserIdGetResponse200ModelAssetsItem> $modelAssets
     */
    public function setModelAssets(array $modelAssets): self
    {
        $this->initialized['modelAssets'] = true;
        $this->modelAssets = $modelAssets;

        return $this;
    }
}
