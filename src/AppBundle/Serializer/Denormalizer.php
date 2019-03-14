<?php

namespace AppBundle\Serializer;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

abstract class Denormalizer
{
    const DATE_FORMAT = 'Y-m-d H:i:s';

    /**
     * @var Serializer
     */
    protected $serializer;

    /**
     * @param SerializerInterface $serializer
     */
    public function setSerializer(SerializerInterface $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @param $className
     *
     * @return bool|string
     */
    protected function provideClassNameWithoutExtension($className)
    {
        return substr($className, 0, strpos($className, ".")) ?: $className;
    }
}
