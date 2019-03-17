<?php

namespace AppBundle\Twig\Functions;

use AppBundle\Twig\BaseFunction;
use Twig\TwigFunction;

class SteamMediaFunction extends BaseFunction
{
    /**
     * @return array|\Twig_Filter[]
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('media', [$this, 'media'], ['is_safe' => ['html']]),
        ];
    }

    /**
     * @param   string $appId
     * @param   string $hash
     * @param   string $folder
     * @return  string
     */
    public function media(string $appId, string $hash, string $folder = 'apps'): string
    {
        return "http://media.steampowered.com/steamcommunity/public/images/$folder/$appId/$hash.jpg";
    }
}