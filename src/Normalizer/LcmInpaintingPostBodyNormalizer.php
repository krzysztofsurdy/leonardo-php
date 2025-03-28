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
    class LcmInpaintingPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \LeonardoAI\Model\LcmInpaintingPostBody::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \LeonardoAI\Model\LcmInpaintingPostBody::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \LeonardoAI\Model\LcmInpaintingPostBody();
            if (\array_key_exists('guidance', $data) && \is_int($data['guidance'])) {
                $data['guidance'] = (float) $data['guidance'];
            }
            if (\array_key_exists('strength', $data) && \is_int($data['strength'])) {
                $data['strength'] = (float) $data['strength'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('imageDataUrl', $data)) {
                $object->setImageDataUrl($data['imageDataUrl']);
                unset($data['imageDataUrl']);
            }
            if (\array_key_exists('maskDataUrl', $data)) {
                $object->setMaskDataUrl($data['maskDataUrl']);
                unset($data['maskDataUrl']);
            }
            if (\array_key_exists('prompt', $data)) {
                $object->setPrompt($data['prompt']);
                unset($data['prompt']);
            }
            if (\array_key_exists('guidance', $data) && $data['guidance'] !== null) {
                $object->setGuidance($data['guidance']);
                unset($data['guidance']);
            } elseif (\array_key_exists('guidance', $data) && $data['guidance'] === null) {
                $object->setGuidance(null);
            }
            if (\array_key_exists('strength', $data) && $data['strength'] !== null) {
                $object->setStrength($data['strength']);
                unset($data['strength']);
            } elseif (\array_key_exists('strength', $data) && $data['strength'] === null) {
                $object->setStrength(null);
            }
            if (\array_key_exists('requestTimestamp', $data)) {
                $object->setRequestTimestamp($data['requestTimestamp']);
                unset($data['requestTimestamp']);
            }
            if (\array_key_exists('style', $data) && $data['style'] !== null) {
                $object->setStyle($data['style']);
                unset($data['style']);
            } elseif (\array_key_exists('style', $data) && $data['style'] === null) {
                $object->setStyle(null);
            }
            if (\array_key_exists('steps', $data) && $data['steps'] !== null) {
                $object->setSteps($data['steps']);
                unset($data['steps']);
            } elseif (\array_key_exists('steps', $data) && $data['steps'] === null) {
                $object->setSteps(null);
            }
            if (\array_key_exists('width', $data) && $data['width'] !== null) {
                $object->setWidth($data['width']);
                unset($data['width']);
            } elseif (\array_key_exists('width', $data) && $data['width'] === null) {
                $object->setWidth(null);
            }
            if (\array_key_exists('height', $data) && $data['height'] !== null) {
                $object->setHeight($data['height']);
                unset($data['height']);
            } elseif (\array_key_exists('height', $data) && $data['height'] === null) {
                $object->setHeight(null);
            }
            if (\array_key_exists('seed', $data) && $data['seed'] !== null) {
                $object->setSeed($data['seed']);
                unset($data['seed']);
            } elseif (\array_key_exists('seed', $data) && $data['seed'] === null) {
                $object->setSeed(null);
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
            $data['imageDataUrl'] = $object->getImageDataUrl();
            $data['maskDataUrl'] = $object->getMaskDataUrl();
            $data['prompt'] = $object->getPrompt();
            if ($object->isInitialized('guidance') && null !== $object->getGuidance()) {
                $data['guidance'] = $object->getGuidance();
            }
            if ($object->isInitialized('strength') && null !== $object->getStrength()) {
                $data['strength'] = $object->getStrength();
            }
            if ($object->isInitialized('requestTimestamp') && null !== $object->getRequestTimestamp()) {
                $data['requestTimestamp'] = $object->getRequestTimestamp();
            }
            if ($object->isInitialized('style') && null !== $object->getStyle()) {
                $data['style'] = $object->getStyle();
            }
            if ($object->isInitialized('steps') && null !== $object->getSteps()) {
                $data['steps'] = $object->getSteps();
            }
            if ($object->isInitialized('width') && null !== $object->getWidth()) {
                $data['width'] = $object->getWidth();
            }
            if ($object->isInitialized('height') && null !== $object->getHeight()) {
                $data['height'] = $object->getHeight();
            }
            if ($object->isInitialized('seed') && null !== $object->getSeed()) {
                $data['seed'] = $object->getSeed();
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
            return [\LeonardoAI\Model\LcmInpaintingPostBody::class => false];
        }
    }
} else {
    class LcmInpaintingPostBodyNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \LeonardoAI\Model\LcmInpaintingPostBody::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \LeonardoAI\Model\LcmInpaintingPostBody::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \LeonardoAI\Model\LcmInpaintingPostBody();
            if (\array_key_exists('guidance', $data) && \is_int($data['guidance'])) {
                $data['guidance'] = (float) $data['guidance'];
            }
            if (\array_key_exists('strength', $data) && \is_int($data['strength'])) {
                $data['strength'] = (float) $data['strength'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('imageDataUrl', $data)) {
                $object->setImageDataUrl($data['imageDataUrl']);
                unset($data['imageDataUrl']);
            }
            if (\array_key_exists('maskDataUrl', $data)) {
                $object->setMaskDataUrl($data['maskDataUrl']);
                unset($data['maskDataUrl']);
            }
            if (\array_key_exists('prompt', $data)) {
                $object->setPrompt($data['prompt']);
                unset($data['prompt']);
            }
            if (\array_key_exists('guidance', $data) && $data['guidance'] !== null) {
                $object->setGuidance($data['guidance']);
                unset($data['guidance']);
            } elseif (\array_key_exists('guidance', $data) && $data['guidance'] === null) {
                $object->setGuidance(null);
            }
            if (\array_key_exists('strength', $data) && $data['strength'] !== null) {
                $object->setStrength($data['strength']);
                unset($data['strength']);
            } elseif (\array_key_exists('strength', $data) && $data['strength'] === null) {
                $object->setStrength(null);
            }
            if (\array_key_exists('requestTimestamp', $data)) {
                $object->setRequestTimestamp($data['requestTimestamp']);
                unset($data['requestTimestamp']);
            }
            if (\array_key_exists('style', $data) && $data['style'] !== null) {
                $object->setStyle($data['style']);
                unset($data['style']);
            } elseif (\array_key_exists('style', $data) && $data['style'] === null) {
                $object->setStyle(null);
            }
            if (\array_key_exists('steps', $data) && $data['steps'] !== null) {
                $object->setSteps($data['steps']);
                unset($data['steps']);
            } elseif (\array_key_exists('steps', $data) && $data['steps'] === null) {
                $object->setSteps(null);
            }
            if (\array_key_exists('width', $data) && $data['width'] !== null) {
                $object->setWidth($data['width']);
                unset($data['width']);
            } elseif (\array_key_exists('width', $data) && $data['width'] === null) {
                $object->setWidth(null);
            }
            if (\array_key_exists('height', $data) && $data['height'] !== null) {
                $object->setHeight($data['height']);
                unset($data['height']);
            } elseif (\array_key_exists('height', $data) && $data['height'] === null) {
                $object->setHeight(null);
            }
            if (\array_key_exists('seed', $data) && $data['seed'] !== null) {
                $object->setSeed($data['seed']);
                unset($data['seed']);
            } elseif (\array_key_exists('seed', $data) && $data['seed'] === null) {
                $object->setSeed(null);
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
            $data['imageDataUrl'] = $object->getImageDataUrl();
            $data['maskDataUrl'] = $object->getMaskDataUrl();
            $data['prompt'] = $object->getPrompt();
            if ($object->isInitialized('guidance') && null !== $object->getGuidance()) {
                $data['guidance'] = $object->getGuidance();
            }
            if ($object->isInitialized('strength') && null !== $object->getStrength()) {
                $data['strength'] = $object->getStrength();
            }
            if ($object->isInitialized('requestTimestamp') && null !== $object->getRequestTimestamp()) {
                $data['requestTimestamp'] = $object->getRequestTimestamp();
            }
            if ($object->isInitialized('style') && null !== $object->getStyle()) {
                $data['style'] = $object->getStyle();
            }
            if ($object->isInitialized('steps') && null !== $object->getSteps()) {
                $data['steps'] = $object->getSteps();
            }
            if ($object->isInitialized('width') && null !== $object->getWidth()) {
                $data['width'] = $object->getWidth();
            }
            if ($object->isInitialized('height') && null !== $object->getHeight()) {
                $data['height'] = $object->getHeight();
            }
            if ($object->isInitialized('seed') && null !== $object->getSeed()) {
                $data['seed'] = $object->getSeed();
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
            return [\LeonardoAI\Model\LcmInpaintingPostBody::class => false];
        }
    }
}
