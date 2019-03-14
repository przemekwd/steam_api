<?php

namespace AppBundle\Serializer\Denormalizer;

use AppBundle\Model\SteamPlayer;
use AppBundle\Serializer\Denormalizer;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\SerializerAwareInterface;

class PlayersDenormalizer extends Denormalizer implements DenormalizerInterface, SerializerAwareInterface
{
    /**
     * @param mixed $data
     * @param string $class
     * @param null $format
     * @param array $context
     * @return \Generator
     */
    public function denormalize($data = [], $class = '', $format = null, array $context = [])
    {
        $players = array_pop($data['response']);

        foreach ($players as $player) {
            yield $this->serializer->denormalize($player, SteamPlayer::class, 'json');
        }
    }

    /**
     * @param mixed $data
     * @param string $type
     * @param null $format
     * @return bool
     */
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === self::class;
    }
}
