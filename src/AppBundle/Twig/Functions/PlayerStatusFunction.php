<?php

namespace AppBundle\Twig\Functions;

use AppBundle\Model\SteamPlayer;
use AppBundle\Twig\BaseFunction;
use Twig\TwigFunction;

class PlayerStatusFunction extends BaseFunction
{
    /**
     * @return array|\Twig_Filter[]
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('playerStatus', [$this, 'status'], ['is_safe' => ['html']]),
        ];
    }

    /**
     * @param   int     $state
     * @return  string
     */
    public function status(int $state): string
    {
        return $this->translator->trans(SteamPlayer::STATE_NAMES[$state]);
    }
}
