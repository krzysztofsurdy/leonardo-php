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
    class PricingCalculatorPostBodyServiceParamsIMAGEGENERATIONNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization(mixed $data, string $type, ?string $format = null, array $context = []): bool
        {
            return $type === \LeonardoAI\Model\PricingCalculatorPostBodyServiceParamsIMAGEGENERATION::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \LeonardoAI\Model\PricingCalculatorPostBodyServiceParamsIMAGEGENERATION::class;
        }

        public function denormalize(mixed $data, string $type, ?string $format = null, array $context = []): mixed
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \LeonardoAI\Model\PricingCalculatorPostBodyServiceParamsIMAGEGENERATION();
            if (\array_key_exists('promptMagicStrength', $data) && \is_int($data['promptMagicStrength'])) {
                $data['promptMagicStrength'] = (float) $data['promptMagicStrength'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('imageHeight', $data)) {
                $object->setImageHeight($data['imageHeight']);
                unset($data['imageHeight']);
            }
            if (\array_key_exists('imageWidth', $data)) {
                $object->setImageWidth($data['imageWidth']);
                unset($data['imageWidth']);
            }
            if (\array_key_exists('numImages', $data)) {
                $object->setNumImages($data['numImages']);
                unset($data['numImages']);
            }
            if (\array_key_exists('inferenceSteps', $data)) {
                $object->setInferenceSteps($data['inferenceSteps']);
                unset($data['inferenceSteps']);
            }
            if (\array_key_exists('promptMagic', $data) && $data['promptMagic'] !== null) {
                $object->setPromptMagic($data['promptMagic']);
                unset($data['promptMagic']);
            } elseif (\array_key_exists('promptMagic', $data) && $data['promptMagic'] === null) {
                $object->setPromptMagic(null);
            }
            if (\array_key_exists('promptMagicStrength', $data) && $data['promptMagicStrength'] !== null) {
                $object->setPromptMagicStrength($data['promptMagicStrength']);
                unset($data['promptMagicStrength']);
            } elseif (\array_key_exists('promptMagicStrength', $data) && $data['promptMagicStrength'] === null) {
                $object->setPromptMagicStrength(null);
            }
            if (\array_key_exists('promptMagicVersion', $data) && $data['promptMagicVersion'] !== null) {
                $object->setPromptMagicVersion($data['promptMagicVersion']);
                unset($data['promptMagicVersion']);
            } elseif (\array_key_exists('promptMagicVersion', $data) && $data['promptMagicVersion'] === null) {
                $object->setPromptMagicVersion(null);
            }
            if (\array_key_exists('alchemyMode', $data)) {
                $object->setAlchemyMode($data['alchemyMode']);
                unset($data['alchemyMode']);
            }
            if (\array_key_exists('highResolution', $data)) {
                $object->setHighResolution($data['highResolution']);
                unset($data['highResolution']);
            }
            if (\array_key_exists('loraCount', $data) && $data['loraCount'] !== null) {
                $object->setLoraCount($data['loraCount']);
                unset($data['loraCount']);
            } elseif (\array_key_exists('loraCount', $data) && $data['loraCount'] === null) {
                $object->setLoraCount(null);
            }
            if (\array_key_exists('isModelCustom', $data) && $data['isModelCustom'] !== null) {
                $object->setIsModelCustom($data['isModelCustom']);
                unset($data['isModelCustom']);
            } elseif (\array_key_exists('isModelCustom', $data) && $data['isModelCustom'] === null) {
                $object->setIsModelCustom(null);
            }
            if (\array_key_exists('controlnetsCost', $data) && $data['controlnetsCost'] !== null) {
                $object->setControlnetsCost($data['controlnetsCost']);
                unset($data['controlnetsCost']);
            } elseif (\array_key_exists('controlnetsCost', $data) && $data['controlnetsCost'] === null) {
                $object->setControlnetsCost(null);
            }
            if (\array_key_exists('isSDXL', $data) && $data['isSDXL'] !== null) {
                $object->setIsSDXL($data['isSDXL']);
                unset($data['isSDXL']);
            } elseif (\array_key_exists('isSDXL', $data) && $data['isSDXL'] === null) {
                $object->setIsSDXL(null);
            }
            if (\array_key_exists('isSDXLLightning', $data) && $data['isSDXLLightning'] !== null) {
                $object->setIsSDXLLightning($data['isSDXLLightning']);
                unset($data['isSDXLLightning']);
            } elseif (\array_key_exists('isSDXLLightning', $data) && $data['isSDXLLightning'] === null) {
                $object->setIsSDXLLightning(null);
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
            if ($object->isInitialized('imageHeight') && null !== $object->getImageHeight()) {
                $data['imageHeight'] = $object->getImageHeight();
            }
            if ($object->isInitialized('imageWidth') && null !== $object->getImageWidth()) {
                $data['imageWidth'] = $object->getImageWidth();
            }
            if ($object->isInitialized('numImages') && null !== $object->getNumImages()) {
                $data['numImages'] = $object->getNumImages();
            }
            if ($object->isInitialized('inferenceSteps') && null !== $object->getInferenceSteps()) {
                $data['inferenceSteps'] = $object->getInferenceSteps();
            }
            if ($object->isInitialized('promptMagic') && null !== $object->getPromptMagic()) {
                $data['promptMagic'] = $object->getPromptMagic();
            }
            if ($object->isInitialized('promptMagicStrength') && null !== $object->getPromptMagicStrength()) {
                $data['promptMagicStrength'] = $object->getPromptMagicStrength();
            }
            if ($object->isInitialized('promptMagicVersion') && null !== $object->getPromptMagicVersion()) {
                $data['promptMagicVersion'] = $object->getPromptMagicVersion();
            }
            if ($object->isInitialized('alchemyMode') && null !== $object->getAlchemyMode()) {
                $data['alchemyMode'] = $object->getAlchemyMode();
            }
            if ($object->isInitialized('highResolution') && null !== $object->getHighResolution()) {
                $data['highResolution'] = $object->getHighResolution();
            }
            if ($object->isInitialized('loraCount') && null !== $object->getLoraCount()) {
                $data['loraCount'] = $object->getLoraCount();
            }
            if ($object->isInitialized('isModelCustom') && null !== $object->getIsModelCustom()) {
                $data['isModelCustom'] = $object->getIsModelCustom();
            }
            if ($object->isInitialized('controlnetsCost') && null !== $object->getControlnetsCost()) {
                $data['controlnetsCost'] = $object->getControlnetsCost();
            }
            if ($object->isInitialized('isSDXL') && null !== $object->getIsSDXL()) {
                $data['isSDXL'] = $object->getIsSDXL();
            }
            if ($object->isInitialized('isSDXLLightning') && null !== $object->getIsSDXLLightning()) {
                $data['isSDXLLightning'] = $object->getIsSDXLLightning();
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
            return [\LeonardoAI\Model\PricingCalculatorPostBodyServiceParamsIMAGEGENERATION::class => false];
        }
    }
} else {
    class PricingCalculatorPostBodyServiceParamsIMAGEGENERATIONNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
    {
        use DenormalizerAwareTrait;
        use NormalizerAwareTrait;
        use CheckArray;
        use ValidatorTrait;

        public function supportsDenormalization($data, $type, ?string $format = null, array $context = []): bool
        {
            return $type === \LeonardoAI\Model\PricingCalculatorPostBodyServiceParamsIMAGEGENERATION::class;
        }

        public function supportsNormalization(mixed $data, ?string $format = null, array $context = []): bool
        {
            return is_object($data) && get_class($data) === \LeonardoAI\Model\PricingCalculatorPostBodyServiceParamsIMAGEGENERATION::class;
        }

        public function denormalize($data, $type, $format = null, array $context = [])
        {
            if (isset($data['$ref'])) {
                return new Reference($data['$ref'], $context['document-origin']);
            }
            if (isset($data['$recursiveRef'])) {
                return new Reference($data['$recursiveRef'], $context['document-origin']);
            }
            $object = new \LeonardoAI\Model\PricingCalculatorPostBodyServiceParamsIMAGEGENERATION();
            if (\array_key_exists('promptMagicStrength', $data) && \is_int($data['promptMagicStrength'])) {
                $data['promptMagicStrength'] = (float) $data['promptMagicStrength'];
            }
            if (null === $data || false === \is_array($data)) {
                return $object;
            }
            if (\array_key_exists('imageHeight', $data)) {
                $object->setImageHeight($data['imageHeight']);
                unset($data['imageHeight']);
            }
            if (\array_key_exists('imageWidth', $data)) {
                $object->setImageWidth($data['imageWidth']);
                unset($data['imageWidth']);
            }
            if (\array_key_exists('numImages', $data)) {
                $object->setNumImages($data['numImages']);
                unset($data['numImages']);
            }
            if (\array_key_exists('inferenceSteps', $data)) {
                $object->setInferenceSteps($data['inferenceSteps']);
                unset($data['inferenceSteps']);
            }
            if (\array_key_exists('promptMagic', $data) && $data['promptMagic'] !== null) {
                $object->setPromptMagic($data['promptMagic']);
                unset($data['promptMagic']);
            } elseif (\array_key_exists('promptMagic', $data) && $data['promptMagic'] === null) {
                $object->setPromptMagic(null);
            }
            if (\array_key_exists('promptMagicStrength', $data) && $data['promptMagicStrength'] !== null) {
                $object->setPromptMagicStrength($data['promptMagicStrength']);
                unset($data['promptMagicStrength']);
            } elseif (\array_key_exists('promptMagicStrength', $data) && $data['promptMagicStrength'] === null) {
                $object->setPromptMagicStrength(null);
            }
            if (\array_key_exists('promptMagicVersion', $data) && $data['promptMagicVersion'] !== null) {
                $object->setPromptMagicVersion($data['promptMagicVersion']);
                unset($data['promptMagicVersion']);
            } elseif (\array_key_exists('promptMagicVersion', $data) && $data['promptMagicVersion'] === null) {
                $object->setPromptMagicVersion(null);
            }
            if (\array_key_exists('alchemyMode', $data)) {
                $object->setAlchemyMode($data['alchemyMode']);
                unset($data['alchemyMode']);
            }
            if (\array_key_exists('highResolution', $data)) {
                $object->setHighResolution($data['highResolution']);
                unset($data['highResolution']);
            }
            if (\array_key_exists('loraCount', $data) && $data['loraCount'] !== null) {
                $object->setLoraCount($data['loraCount']);
                unset($data['loraCount']);
            } elseif (\array_key_exists('loraCount', $data) && $data['loraCount'] === null) {
                $object->setLoraCount(null);
            }
            if (\array_key_exists('isModelCustom', $data) && $data['isModelCustom'] !== null) {
                $object->setIsModelCustom($data['isModelCustom']);
                unset($data['isModelCustom']);
            } elseif (\array_key_exists('isModelCustom', $data) && $data['isModelCustom'] === null) {
                $object->setIsModelCustom(null);
            }
            if (\array_key_exists('controlnetsCost', $data) && $data['controlnetsCost'] !== null) {
                $object->setControlnetsCost($data['controlnetsCost']);
                unset($data['controlnetsCost']);
            } elseif (\array_key_exists('controlnetsCost', $data) && $data['controlnetsCost'] === null) {
                $object->setControlnetsCost(null);
            }
            if (\array_key_exists('isSDXL', $data) && $data['isSDXL'] !== null) {
                $object->setIsSDXL($data['isSDXL']);
                unset($data['isSDXL']);
            } elseif (\array_key_exists('isSDXL', $data) && $data['isSDXL'] === null) {
                $object->setIsSDXL(null);
            }
            if (\array_key_exists('isSDXLLightning', $data) && $data['isSDXLLightning'] !== null) {
                $object->setIsSDXLLightning($data['isSDXLLightning']);
                unset($data['isSDXLLightning']);
            } elseif (\array_key_exists('isSDXLLightning', $data) && $data['isSDXLLightning'] === null) {
                $object->setIsSDXLLightning(null);
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
            if ($object->isInitialized('imageHeight') && null !== $object->getImageHeight()) {
                $data['imageHeight'] = $object->getImageHeight();
            }
            if ($object->isInitialized('imageWidth') && null !== $object->getImageWidth()) {
                $data['imageWidth'] = $object->getImageWidth();
            }
            if ($object->isInitialized('numImages') && null !== $object->getNumImages()) {
                $data['numImages'] = $object->getNumImages();
            }
            if ($object->isInitialized('inferenceSteps') && null !== $object->getInferenceSteps()) {
                $data['inferenceSteps'] = $object->getInferenceSteps();
            }
            if ($object->isInitialized('promptMagic') && null !== $object->getPromptMagic()) {
                $data['promptMagic'] = $object->getPromptMagic();
            }
            if ($object->isInitialized('promptMagicStrength') && null !== $object->getPromptMagicStrength()) {
                $data['promptMagicStrength'] = $object->getPromptMagicStrength();
            }
            if ($object->isInitialized('promptMagicVersion') && null !== $object->getPromptMagicVersion()) {
                $data['promptMagicVersion'] = $object->getPromptMagicVersion();
            }
            if ($object->isInitialized('alchemyMode') && null !== $object->getAlchemyMode()) {
                $data['alchemyMode'] = $object->getAlchemyMode();
            }
            if ($object->isInitialized('highResolution') && null !== $object->getHighResolution()) {
                $data['highResolution'] = $object->getHighResolution();
            }
            if ($object->isInitialized('loraCount') && null !== $object->getLoraCount()) {
                $data['loraCount'] = $object->getLoraCount();
            }
            if ($object->isInitialized('isModelCustom') && null !== $object->getIsModelCustom()) {
                $data['isModelCustom'] = $object->getIsModelCustom();
            }
            if ($object->isInitialized('controlnetsCost') && null !== $object->getControlnetsCost()) {
                $data['controlnetsCost'] = $object->getControlnetsCost();
            }
            if ($object->isInitialized('isSDXL') && null !== $object->getIsSDXL()) {
                $data['isSDXL'] = $object->getIsSDXL();
            }
            if ($object->isInitialized('isSDXLLightning') && null !== $object->getIsSDXLLightning()) {
                $data['isSDXLLightning'] = $object->getIsSDXLLightning();
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
            return [\LeonardoAI\Model\PricingCalculatorPostBodyServiceParamsIMAGEGENERATION::class => false];
        }
    }
}
