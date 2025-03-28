<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace LeonardoAI\Normalizer;

use Jane\Component\JsonSchemaRuntime\Reference;
use LeonardoAI\Runtime\Normalizer\CheckArray;
use LeonardoAI\Runtime\Normalizer\ValidatorTrait;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

if (!class_exists(Kernel::class) or (Kernel::MAJOR_VERSION >= 7 or Kernel::MAJOR_VERSION === 6 and Kernel::MINOR_VERSION === 4)) {
    class GenerationsTextureIdGetResponse200ModelAssetTextureGenerationsByPkNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \LeonardoAI\Model\GenerationsTextureIdGetResponse200ModelAssetTextureGenerationsByPk::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \LeonardoAI\Model\GenerationsTextureIdGetResponse200ModelAssetTextureGenerationsByPk::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \LeonardoAI\Model\GenerationsTextureIdGetResponse200ModelAssetTextureGenerationsByPk();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('createdAt', $data)) {
                $object->setCreatedAt($data['createdAt']);
                unset($data['createdAt']);
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
                unset($data['id']);
            } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('model_asset_texture_images', $data)) {
                $values = [];
                foreach ($data['model_asset_texture_images'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \LeonardoAI\Model\GenerationsTextureIdGetResponse200ModelAssetTextureGenerationsByPkModelAssetTextureImagesItem::class, 'json', $context);
                }
                $object->setModelAssetTextureImages($values);
                unset($data['model_asset_texture_images']);
            }
            if (\array_key_exists('negativePrompt', $data) && $data['negativePrompt'] !== null) {
                $object->setNegativePrompt($data['negativePrompt']);
                unset($data['negativePrompt']);
            } elseif (\array_key_exists('negativePrompt', $data) && $data['negativePrompt'] === null) {
                $object->setNegativePrompt(null);
            }
            if (\array_key_exists('prompt', $data)) {
                $object->setPrompt($data['prompt']);
                unset($data['prompt']);
            }
            if (\array_key_exists('seed', $data) && $data['seed'] !== null) {
                $object->setSeed($data['seed']);
                unset($data['seed']);
            } elseif (\array_key_exists('seed', $data) && $data['seed'] === null) {
                $object->setSeed(null);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['createdAt'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('modelAssetTextureImages') && null !== $object->getModelAssetTextureImages()) {
                $values = [];
                foreach ($object->getModelAssetTextureImages() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['model_asset_texture_images'] = $values;
            }
            if ($object->isInitialized('negativePrompt') && null !== $object->getNegativePrompt()) {
                $data['negativePrompt'] = $object->getNegativePrompt();
            }
            if ($object->isInitialized('prompt') && null !== $object->getPrompt()) {
                $data['prompt'] = $object->getPrompt();
            }
            if ($object->isInitialized('seed') && null !== $object->getSeed()) {
                $data['seed'] = $object->getSeed();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\LeonardoAI\Model\GenerationsTextureIdGetResponse200ModelAssetTextureGenerationsByPk::class => false];
        }
    }
} else {
    class GenerationsTextureIdGetResponse200ModelAssetTextureGenerationsByPkNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \LeonardoAI\Model\GenerationsTextureIdGetResponse200ModelAssetTextureGenerationsByPk::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \LeonardoAI\Model\GenerationsTextureIdGetResponse200ModelAssetTextureGenerationsByPk::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \LeonardoAI\Model\GenerationsTextureIdGetResponse200ModelAssetTextureGenerationsByPk();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('createdAt', $data)) {
                $object->setCreatedAt($data['createdAt']);
                unset($data['createdAt']);
            }
            if (\array_key_exists('id', $data) && $data['id'] !== null) {
                $object->setId($data['id']);
                unset($data['id']);
            } elseif (\array_key_exists('id', $data) && $data['id'] === null) {
                $object->setId(null);
            }
            if (\array_key_exists('model_asset_texture_images', $data)) {
                $values = [];
                foreach ($data['model_asset_texture_images'] as $value) {
                    $values[] = $this->denormalizer->denormalize($value, \LeonardoAI\Model\GenerationsTextureIdGetResponse200ModelAssetTextureGenerationsByPkModelAssetTextureImagesItem::class, 'json', $context);
                }
                $object->setModelAssetTextureImages($values);
                unset($data['model_asset_texture_images']);
            }
            if (\array_key_exists('negativePrompt', $data) && $data['negativePrompt'] !== null) {
                $object->setNegativePrompt($data['negativePrompt']);
                unset($data['negativePrompt']);
            } elseif (\array_key_exists('negativePrompt', $data) && $data['negativePrompt'] === null) {
                $object->setNegativePrompt(null);
            }
            if (\array_key_exists('prompt', $data)) {
                $object->setPrompt($data['prompt']);
                unset($data['prompt']);
            }
            if (\array_key_exists('seed', $data) && $data['seed'] !== null) {
                $object->setSeed($data['seed']);
                unset($data['seed']);
            } elseif (\array_key_exists('seed', $data) && $data['seed'] === null) {
                $object->setSeed(null);
            }
            if (\array_key_exists('status', $data)) {
                $object->setStatus($data['status']);
                unset($data['status']);
            }
            foreach ($data as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value_1;
                }
            }

            return $object;
        }

        /**
         * @return array|string|int|float|bool|\ArrayObject|null
         */
        public function normalize($object, $format = null, array $context = [])
        {
            $data = [];
            if ($object->isInitialized('createdAt') && null !== $object->getCreatedAt()) {
                $data['createdAt'] = $object->getCreatedAt();
            }
            if ($object->isInitialized('id') && null !== $object->getId()) {
                $data['id'] = $object->getId();
            }
            if ($object->isInitialized('modelAssetTextureImages') && null !== $object->getModelAssetTextureImages()) {
                $values = [];
                foreach ($object->getModelAssetTextureImages() as $value) {
                    $values[] = $this->normalizer->normalize($value, 'json', $context);
                }
                $data['model_asset_texture_images'] = $values;
            }
            if ($object->isInitialized('negativePrompt') && null !== $object->getNegativePrompt()) {
                $data['negativePrompt'] = $object->getNegativePrompt();
            }
            if ($object->isInitialized('prompt') && null !== $object->getPrompt()) {
                $data['prompt'] = $object->getPrompt();
            }
            if ($object->isInitialized('seed') && null !== $object->getSeed()) {
                $data['seed'] = $object->getSeed();
            }
            if ($object->isInitialized('status') && null !== $object->getStatus()) {
                $data['status'] = $object->getStatus();
            }
            foreach ($object as $key => $value_1) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value_1;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\LeonardoAI\Model\GenerationsTextureIdGetResponse200ModelAssetTextureGenerationsByPk::class => false];
        }
    }
}
