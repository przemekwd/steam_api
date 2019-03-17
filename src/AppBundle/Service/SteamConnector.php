<?php

namespace AppBundle\Service;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Symfony\Component\DependencyInjection\ContainerInterface;

class SteamConnector
{
    const STATUS_SUCCESS = 200;

    /**
     * @var Client
     */
    protected $client;

    /**
     * @var ContainerInterface
     */
    protected $container;

    /**
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->client = new Client();
        $this->container = $container;
    }

    /**
     * @param   string      $url
     * @param   array       $options
     * @return  string
     * @throws  Exception
     */
    public function get(string $url, array $options = []): string
    {
        try {
            $response = $this->client->request('GET', $url, $options);
            if ($response->getStatusCode() === self::STATUS_SUCCESS) {
                return $response->getBody()->getContents();
            }
        } catch (GuzzleException $e) {
            throw new Exception($e->getMessage());
        }

        return '';
    }
}
