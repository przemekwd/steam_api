<?php

namespace AppBundle\Utils;

class SteamUrl
{
    const VERSION_1 = '/v0001/';
    const VERSION_2 = '/v0002/';
    const SET_PARAMS = '?';

    const BASE = 'http://api.steampowered.com/';
    const BASE_USER = 'ISteamUser/';

    /**
     * @param array $params
     * @return string
     */
    public static final function GetPlayerSummaries(array $params = [])
    {
        return self::BASE . self::BASE_USER . __FUNCTION__ . self::VERSION_2 . self::SET_PARAMS . self::arrayToParams($params);
    }

    /**
     * @param array $params
     * @return string
     */
    public static final function GetFriendList(array $params = [])
    {
        return self::BASE . self::BASE_USER . __FUNCTION__ . self::VERSION_1 . self::SET_PARAMS . self::arrayToParams($params);
    }

    /**
     * @param array $params
     * @return string
     */
    private static final function arrayToParams(array $params)
    {
       return http_build_query($params);
    }
}
