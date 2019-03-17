<?php

namespace AppBundle\Twig\Functions;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class MaterialIconFunction extends AbstractExtension
{
    /**
     * @return array|\Twig_Filter[]
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('icon', [$this, 'materialIcon'], ['is_safe' => ['html']]),
        ];
    }

    /**
     * @param   string $name
     * @param   string $class
     * @param   string $style
     * @return  string
     */
    public function materialIcon(string $name, string $class = '', string $style = ''): string
    {
        return "<i class='material-icons $class' style='$style'>$name</i>";
    }
}
