<?php

namespace AppBundle\Model;

class OwnedGames
{
    /**
     * @var int|null
     */
    private $gameCount;

    /**
     * @var array|null
     */
    private $games;

    /**
     * @return mixed
     */
    public function getGameCount()
    {
        return $this->gameCount;
    }

    /**
     * @param mixed $gameCount
     * @return OwnedGames
     */
    public function setGameCount($gameCount)
    {
        $this->gameCount = $gameCount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getGames()
    {
        return $this->games;
    }

    /**
     * @param mixed $games
     * @return OwnedGames
     */
    public function setGames($games)
    {
        $this->games = $games;
        return $this;
    }
}