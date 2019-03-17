<?php

namespace AppBundle\Twig;

use Symfony\Component\Translation\TranslatorInterface;
use Twig\Extension\AbstractExtension;

class BaseFunction extends AbstractExtension
{
    /**
     * @var TranslatorInterface
     */
    protected $translator;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }
}
