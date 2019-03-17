<?php

namespace AppBundle\Model;

class OwnedGame
{
    /** @var int|null */
    private $appid;

    /** @var string|null */
    private $name;

    /** @var int|null */
    private $playtimeForever;

    /** @var string|null */
    private $imgIconUrl;

    /** @var string|null */
    private $imgLogoUrl;

    /** @var boolean|null */
    private $hasCommunityVisibleStats;

    /**
     * @return mixed
     */
    public function getAppid()
    {
        return $this->appid;
    }

    /**
     * @param mixed $appid
     * @return OwnedGame
     */
    public function setAppid($appid)
    {
        $this->appid = $appid;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     * @return OwnedGame
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPlaytimeForever()
    {
        return $this->playtimeForever;
    }

    /**
     * @param mixed $playtimeForever
     * @return OwnedGame
     */
    public function setPlaytimeForever($playtimeForever)
    {
        $this->playtimeForever = $playtimeForever;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getImgIconUrl()
    {
        return $this->imgIconUrl;
    }

    /**
     * @param mixed $imgIconUrl
     * @return OwnedGame
     */
    public function setImgIconUrl($imgIconUrl)
    {
        $this->imgIconUrl = $imgIconUrl;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getImgLogoUrl()
    {
        return $this->imgLogoUrl;
    }

    /**
     * @param mixed $imgLogoUrl
     * @return OwnedGame
     */
    public function setImgLogoUrl($imgLogoUrl)
    {
        $this->imgLogoUrl = $imgLogoUrl;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHasCommunityVisibleStats()
    {
        return $this->hasCommunityVisibleStats;
    }

    /**
     * @param mixed $hasCommunityVisibleStats
     * @return OwnedGame
     */
    public function setHasCommunityVisibleStats($hasCommunityVisibleStats)
    {
        $this->hasCommunityVisibleStats = $hasCommunityVisibleStats;

        return $this;
    }
}
