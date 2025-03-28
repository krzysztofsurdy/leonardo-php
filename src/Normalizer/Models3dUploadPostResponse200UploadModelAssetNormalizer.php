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
    class Models3dUploadPostResponse200UploadModelAssetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \LeonardoAI\Model\Models3dUploadPostResponse200UploadModelAsset::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \LeonardoAI\Model\Models3dUploadPostResponse200UploadModelAsset::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \LeonardoAI\Model\Models3dUploadPostResponse200UploadModelAsset();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('modelFields', $data) && $data['modelFields'] !== null) {
                $object->setModelFields($data['modelFields']);
                unset($data['modelFields']);
            } elseif (\array_key_exists('modelFields', $data) && $data['modelFields'] === null) {
                $object->setModelFields(null);
            }
            if (\array_key_exists('modelId', $data) && $data['modelId'] !== null) {
                $object->setModelId($data['modelId']);
                unset($data['modelId']);
            } elseif (\array_key_exists('modelId', $data) && $data['modelId'] === null) {
                $object->setModelId(null);
            }
            if (\array_key_exists('modelKey', $data) && $data['modelKey'] !== null) {
                $object->setModelKey($data['modelKey']);
                unset($data['modelKey']);
            } elseif (\array_key_exists('modelKey', $data) && $data['modelKey'] === null) {
                $object->setModelKey(null);
            }
            if (\array_key_exists('modelUrl', $data) && $data['modelUrl'] !== null) {
                $object->setModelUrl($data['modelUrl']);
                unset($data['modelUrl']);
            } elseif (\array_key_exists('modelUrl', $data) && $data['modelUrl'] === null) {
                $object->setModelUrl(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
                }
            }

            return $object;
        }

        public function normalize(mixed $object, ?string $format = null, array $context = []): array|string|int|float|bool|\ArrayObject|null
        {
            $data = [];
            if ($object->isInitialized('modelFields') && null !== $object->getModelFields()) {
                $data['modelFields'] = $object->getModelFields();
            }
            if ($object->isInitialized('modelId') && null !== $object->getModelId()) {
                $data['modelId'] = $object->getModelId();
            }
            if ($object->isInitialized('modelKey') && null !== $object->getModelKey()) {
                $data['modelKey'] = $object->getModelKey();
            }
            if ($object->isInitialized('modelUrl') && null !== $object->getModelUrl()) {
                $data['modelUrl'] = $object->getModelUrl();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\LeonardoAI\Model\Models3dUploadPostResponse200UploadModelAsset::class => false];
        }
    }
} else {
    class Models3dUploadPostResponse200UploadModelAssetNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \LeonardoAI\Model\Models3dUploadPostResponse200UploadModelAsset::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \LeonardoAI\Model\Models3dUploadPostResponse200UploadModelAsset::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \LeonardoAI\Model\Models3dUploadPostResponse200UploadModelAsset();
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('modelFields', $data) && $data['modelFields'] !== null) {
                $object->setModelFields($data['modelFields']);
                unset($data['modelFields']);
            } elseif (\array_key_exists('modelFields', $data) && $data['modelFields'] === null) {
                $object->setModelFields(null);
            }
            if (\array_key_exists('modelId', $data) && $data['modelId'] !== null) {
                $object->setModelId($data['modelId']);
                unset($data['modelId']);
            } elseif (\array_key_exists('modelId', $data) && $data['modelId'] === null) {
                $object->setModelId(null);
            }
            if (\array_key_exists('modelKey', $data) && $data['modelKey'] !== null) {
                $object->setModelKey($data['modelKey']);
                unset($data['modelKey']);
            } elseif (\array_key_exists('modelKey', $data) && $data['modelKey'] === null) {
                $object->setModelKey(null);
            }
            if (\array_key_exists('modelUrl', $data) && $data['modelUrl'] !== null) {
                $object->setModelUrl($data['modelUrl']);
                unset($data['modelUrl']);
            } elseif (\array_key_exists('modelUrl', $data) && $data['modelUrl'] === null) {
                $object->setModelUrl(null);
            }
            foreach ($data as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $object[$key] = $value;
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
            if ($object->isInitialized('modelFields') && null !== $object->getModelFields()) {
                $data['modelFields'] = $object->getModelFields();
            }
            if ($object->isInitialized('modelId') && null !== $object->getModelId()) {
                $data['modelId'] = $object->getModelId();
            }
            if ($object->isInitialized('modelKey') && null !== $object->getModelKey()) {
                $data['modelKey'] = $object->getModelKey();
            }
            if ($object->isInitialized('modelUrl') && null !== $object->getModelUrl()) {
                $data['modelUrl'] = $object->getModelUrl();
            }
            foreach ($object as $key => $value) {
                if (preg_match('/.*/', (string) $key)) {
                    $data[$key] = $value;
                }
            }

            return $data;
        }

        public function getSupportedTypes(?string $format = null): array
        {
            return [\LeonardoAI\Model\Models3dUploadPostResponse200UploadModelAsset::class => false];
        }
    }
}
