<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace LeonardoAI\Model;

class GenerationsTexturePostBody extends \ArrayObject
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
     * @var int|null
     */
    protected $frontRotationOffset;
    /**
     * @var string
     */
    protected $modelAssetId;
    /**
     * @var string|null
     */
    protected $negativePrompt;
    /**
     * @var bool|null
     */
    protected $preview;
    /**
     * @var string|null
     */
    protected $previewDirection;
    /**
     * @var string
     */
    protected $prompt;
    /**
     * @var string|null
     */
    protected $sdVersion;
    /**
     * @var int|null
     */
    protected $seed;

    public function getFrontRotationOffset(): ?int
    {
        return $this->frontRotationOffset;
    }

    public function setFrontRotationOffset(?int $frontRotationOffset): self
    {
        $this->initialized['frontRotationOffset'] = true;
        $this->frontRotationOffset = $frontRotationOffset;

        return $this;
    }

    public function getModelAssetId(): string
    {
        return $this->modelAssetId;
    }

    public function setModelAssetId(string $modelAssetId): self
    {
        $this->initialized['modelAssetId'] = true;
        $this->modelAssetId = $modelAssetId;

        return $this;
    }

    public function getNegativePrompt(): ?string
    {
        return $this->negativePrompt;
    }

    public function setNegativePrompt(?string $negativePrompt): self
    {
        $this->initialized['negativePrompt'] = true;
        $this->negativePrompt = $negativePrompt;

        return $this;
    }

    public function getPreview(): ?bool
    {
        return $this->preview;
    }

    public function setPreview(?bool $preview): self
    {
        $this->initialized['preview'] = true;
        $this->preview = $preview;

        return $this;
    }

    public function getPreviewDirection(): ?string
    {
        return $this->previewDirection;
    }

    public function setPreviewDirection(?string $previewDirection): self
    {
        $this->initialized['previewDirection'] = true;
        $this->previewDirection = $previewDirection;

        return $this;
    }

    public function getPrompt(): string
    {
        return $this->prompt;
    }

    public function setPrompt(string $prompt): self
    {
        $this->initialized['prompt'] = true;
        $this->prompt = $prompt;

        return $this;
    }

    public function getSdVersion(): ?string
    {
        return $this->sdVersion;
    }

    public function setSdVersion(?string $sdVersion): self
    {
        $this->initialized['sdVersion'] = true;
        $this->sdVersion = $sdVersion;

        return $this;
    }

    public function getSeed(): ?int
    {
        return $this->seed;
    }

    public function setSeed(?int $seed): self
    {
        $this->initialized['seed'] = true;
        $this->seed = $seed;

        return $this;
    }
}
