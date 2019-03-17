<?php

namespace AppBundle\Twig\Functions;

use AppBundle\Twig\BaseFunction;
use Twig\TwigFunction;

class TimeFormatFunction extends BaseFunction
{
    /**
     * @return array|\Twig_Filter[]
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('timeFormat', [$this, 'timeFormat'], ['is_safe' => ['html']]),
        ];
    }

    /**
     * @param   int     $minutes
     * @return  string
     */
    public function timeFormat(int $minutes): string
    {
        $hours = number_format($minutes / 60, 0);
        $minutes = number_format($minutes % 60, 0);

        return ($hours ? "{$hours}h " : "") . "{$minutes}m";
    }
}