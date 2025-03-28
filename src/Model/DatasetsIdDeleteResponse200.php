<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace LeonardoAI\Model;

class DatasetsIdDeleteResponse200 extends \ArrayObject
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
     * columns and relationships of "datasets".
     *
     * @var DatasetsIdDeleteResponse200DeleteDatasetsByPk|null
     */
    protected $deleteDatasetsByPk;

    /**
     * columns and relationships of "datasets".
     */
    public function getDeleteDatasetsByPk(): ?DatasetsIdDeleteResponse200DeleteDatasetsByPk
    {
        return $this->deleteDatasetsByPk;
    }

    /**
     * columns and relationships of "datasets".
     */
    public function setDeleteDatasetsByPk(?DatasetsIdDeleteResponse200DeleteDatasetsByPk $deleteDatasetsByPk): self
    {
        $this->initialized['deleteDatasetsByPk'] = true;
        $this->deleteDatasetsByPk = $deleteDatasetsByPk;

        return $this;
    }
}
