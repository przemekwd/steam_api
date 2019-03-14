<?php

namespace AppBundle\Controller;

use AppBundle\Service\SteamConnector;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Translation\TranslatorInterface;

class BaseController extends Controller
{
    /**
     * @var TranslatorInterface
     */
    protected $translator;

    /**
     * @var SteamConnector
     */
    protected $steamConnector;

    /**
     * @var SerializerInterface
     */
    protected $serializer;

    /**
     * @param TranslatorInterface $translator
     * @param SteamConnector $steamConnector
     * @param SerializerInterface $serializer
     */
    public function __construct(TranslatorInterface $translator, SteamConnector $steamConnector, SerializerInterface $serializer)
    {
        $this->translator = $translator;
        $this->steamConnector = $steamConnector;
        $this->serializer = $serializer;
    }
}
