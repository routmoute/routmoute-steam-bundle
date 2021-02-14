<?php

namespace Routmoute\Bundle\RoutmouteSteamBundle\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class RoutmouteSteamOAuthService
{
    private const STEAM_API = 'https://api.steampowered.com';
    
    private $steam_apikey;
    private $httpClient;
    
    public function __construct(string $steam_apikey, HttpClientInterface $httpClient)
    {
        $this->steam_apikey = $steam_apikey;
        $this->httpClient = $httpClient;
    }

}