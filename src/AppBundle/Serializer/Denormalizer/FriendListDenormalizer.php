<?php

namespace AppBundle\Serializer\Denormalizer;

use AppBundle\Model\SteamFriend;
use AppBundle\Serializer\Denormalizer;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\SerializerAwareInterface;

class FriendListDenormalizer extends Denormalizer implements DenormalizerInterface, SerializerAwareInterface
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
        $friends = $data['friendslist']['friends'];

        foreach ($friends as $friend) {
            yield $this->serializer->denormalize($friend, SteamFriend::class, 'json');
        }

        return [];
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
