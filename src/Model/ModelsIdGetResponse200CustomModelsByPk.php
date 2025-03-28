<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace LeonardoAI\Model;

class ModelsIdGetResponse200CustomModelsByPk extends \ArrayObject
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
    protected $createdAt;
    /**
     * @var string
     */
    protected $description;
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string|null
     */
    protected $instancePrompt;
    /**
     * @var int
     */
    protected $modelHeight;
    /**
     * @var int
     */
    protected $modelWidth;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var bool
     */
    protected $public;
    /**
     * The base version of stable diffusion to use if not using a custom model. v1_5 is 1.5, v2 is 2.1, if not specified it will default to v1_5. Also includes SDXL and SDXL Lightning models.
     *
     * @var string
     */
    protected $sdVersion;
    /**
     * The status of the current task.
     *
     * @var string
     */
    protected $status;
    /**
     * The category the most accurately reflects the model.
     *
     * @var string
     */
    protected $type = 'GENERAL';
    /**
     * @var string
     */
    protected $updatedAt;

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function setCreatedAt(string $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;

        return $this;
    }

    public function getId(): ?string
    {
        return $this->id;
    }

    public function setId(?string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;

        return $this;
    }

    public function getInstancePrompt(): ?string
    {
        return $this->instancePrompt;
    }

    public function setInstancePrompt(?string $instancePrompt): self
    {
        $this->initialized['instancePrompt'] = true;
        $this->instancePrompt = $instancePrompt;

        return $this;
    }

    public function getModelHeight(): int
    {
        return $this->modelHeight;
    }

    public function setModelHeight(int $modelHeight): self
    {
        $this->initialized['modelHeight'] = true;
        $this->modelHeight = $modelHeight;

        return $this;
    }

    public function getModelWidth(): int
    {
        return $this->modelWidth;
    }

    public function setModelWidth(int $modelWidth): self
    {
        $this->initialized['modelWidth'] = true;
        $this->modelWidth = $modelWidth;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;

        return $this;
    }

    public function getPublic(): bool
    {
        return $this->public;
    }

    public function setPublic(bool $public): self
    {
        $this->initialized['public'] = true;
        $this->public = $public;

        return $this;
    }

    /**
     * The base version of stable diffusion to use if not using a custom model. v1_5 is 1.5, v2 is 2.1, if not specified it will default to v1_5. Also includes SDXL and SDXL Lightning models.
     */
    public function getSdVersion(): string
    {
        return $this->sdVersion;
    }

    /**
     * The base version of stable diffusion to use if not using a custom model. v1_5 is 1.5, v2 is 2.1, if not specified it will default to v1_5. Also includes SDXL and SDXL Lightning models.
     */
    public function setSdVersion(string $sdVersion): self
    {
        $this->initialized['sdVersion'] = true;
        $this->sdVersion = $sdVersion;

        return $this;
    }

    /**
     * The status of the current task.
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * The status of the current task.
     */
    public function setStatus(string $status): self
    {
        $this->initialized['status'] = true;
        $this->status = $status;

        return $this;
    }

    /**
     * The category the most accurately reflects the model.
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * The category the most accurately reflects the model.
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;

        return $this;
    }

    public function getUpdatedAt(): string
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(string $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;

        return $this;
    }
}
