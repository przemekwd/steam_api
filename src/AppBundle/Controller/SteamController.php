<?php

namespace AppBundle\Controller;

use AppBundle\Model\SteamFriend;
use AppBundle\Serializer\Denormalizer\FriendListDenormalizer;
use AppBundle\Serializer\Denormalizer\PlayerDenormalizer;
use AppBundle\Serializer\Denormalizer\PlayersDenormalizer;
use AppBundle\Utils\SteamUrl;
use Exception;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @package AppBundle\Controller
 * @Route("/steam", name="steam_")
 */
class SteamController extends BaseController
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        return $this->render('@App/Steam/index.html.twig', []);
    }

    /**
     * @Route("/player/{steamId}", name="player")
     *
     * @param int $steamId
     * @return Response
     * @throws Exception
     */
    public function playerAction(int $steamId)
    {
        $data = $this->steamConnector->get(SteamUrl::GetPlayerSummaries([
            'key' => $this->container->getParameter('steam_key'),
            'steamids' => $steamId,
        ]));

        return $this->render('@App/Steam/player.html.twig', [
            'player' => $this->serializer->deserialize($data, PlayerDenormalizer::class, 'json'),
        ]);
    }

    /**
     * @Route("/friend-list/{steamId}", name="friend_list")
     *
     * @param int $steamId
     * @return Response
     * @throws Exception
     */
    public function playerFriendListAction(int $steamId)
    {
        $data = $this->steamConnector->get(SteamUrl::GetFriendList([
            'key' => $this->container->getParameter('steam_key'),
            'steamid' => $steamId,
        ]));

        $friends = $this->serializer->deserialize($data, FriendListDenormalizer::class, 'json');
        $players = [];
        /** @var SteamFriend $friend */
        foreach ($friends as $friend) {
            $players[] = $friend->getSteamId();
        }

        $data = $this->steamConnector->get(SteamUrl::GetPlayerSummaries([
            'key' => $this->container->getParameter('steam_key'),
            'steamids' => implode(',', $players),
        ]));

        return $this->render('@App/Steam/ajax/_friendList.html.twig', [
            'list' => $this->serializer->deserialize($data, PlayersDenormalizer::class, 'json'),
        ]);
    }
}
