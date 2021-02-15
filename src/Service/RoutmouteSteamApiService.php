<?php

namespace Routmoute\Bundle\RoutmouteSteamBundle\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class RoutmouteSteamApiService
{
    private const STEAM_API = 'https://api.steampowered.com';
    
    private $steam_apikey;
    private $httpClient;
    
    public function __construct(string $steam_apikey, HttpClientInterface $httpClient)
    {
        $this->steam_apikey = $steam_apikey;
        $this->httpClient = $httpClient;
    }

    public function getUsersInfos(string $steamIds): array
    {
        $userInfos = $this->httpClient->request("GET", self::STEAM_API . "/ISteamUser/GetPLayerSummaries/v0002/?key=" . $this->steam_apikey . "&steamids=" . $steamIds);
        $statusCode = $userInfos->getStatusCode();
        if ($statusCode != 200)
        {
            throw new \Exception('Steam access error');
        }
        return $userInfos->toArray();
    }
}
