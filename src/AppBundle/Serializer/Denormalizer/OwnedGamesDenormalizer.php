<?php

namespace AppBundle\Serializer\Denormalizer;

use AppBundle\Model\OwnedGame;
use AppBundle\Model\OwnedGames;
use AppBundle\Serializer\Denormalizer;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\SerializerAwareInterface;

class OwnedGamesDenormalizer extends Denormalizer implements DenormalizerInterface, SerializerAwareInterface
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
        $ownedGames = new OwnedGames();
        $ownedGames->setGameCount($data['response']['game_count']);
        $games = [];
        foreach ($data['response']['games'] as $game) {
            $games[] = $this->serializer->denormalize($game, OwnedGame::class, 'json');
        }
        $ownedGames->setGames($games);

        return $ownedGames;
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
