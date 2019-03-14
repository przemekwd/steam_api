<?php

namespace AppBundle\Controller;

use AppBundle\Serializer\Denormalizer\PlayerDenormalizer;
use AppBundle\Utils\SteamUrl;
use Exception;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @package AppBundle\Controller
 * @Route("/steam", name="steam")
 */
class SteamController extends BaseController
{
    /**
     * @Route("/", name="steam_index")
     */
    public function indexAction()
    {
        return $this->render('@App/Steam/index.html.twig', []);
    }

    /**
     * @Route("/user/{steamId}", name="steam_user")
     *
     * @param int $steamId
     * @return Response
     * @throws Exception
     */
    public function userAction(int $steamId)
    {
        $data = $this->steamConnector->get(SteamUrl::GetPlayerSummaries([
            'key' => $this->container->getParameter('steam_key'),
            'steamids' => $steamId,
        ]));

        return $this->render('@App/Steam/user.html.twig', [
            'player' => $this->serializer->deserialize($data, PlayerDenormalizer::class, 'json'),
        ]);
    }
}
