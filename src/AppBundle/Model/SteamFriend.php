<?php

namespace AppBundle\Model;

class SteamFriend
{
    /**
     * @var string|null
     */
    private $steamId;

    /**
     * @var string|null
     */
    private $relationship;

    /**
     * @var string|null
     */
    private $friendSince;

    /**
     * @return string|null
     */
    public function getSteamId(): ?string
    {
        return $this->steamId;
    }

    /**
     * @param string|null $steamId
     * @return SteamFriend
     */
    public function setSteamId(?string $steamId): SteamFriend
    {
        $this->steamId = $steamId;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRelationship(): ?string
    {
        return $this->relationship;
    }

    /**
     * @param string|null $relationship
     * @return SteamFriend
     */
    public function setRelationship(?string $relationship): SteamFriend
    {
        $this->relationship = $relationship;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getFriendSince(): ?string
    {
        return $this->friendSince;
    }

    /**
     * @param string|null $friendSince
     * @return SteamFriend
     */
    public function setFriendSince(?string $friendSince): SteamFriend
    {
        $this->friendSince = $friendSince;

        return $this;
    }
}
