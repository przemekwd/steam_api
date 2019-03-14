<?php

namespace AppBundle\Model;

/**
 * @package AppBundle\Model
 */
class SteamPlayer
{
    /**
     * @var string|null
     */
    private $steamId;

    /**
     * @var integer|null
     */
    private $communityVisibilityState;

    /**
     * @var integer|null
     */
    private $profileState;

    /**
     * @var string|null
     */
    private $personaName;

    /**
     * @var integer|null
     */
    private $lastLogOff;

    /**
     * @var string|null
     */
    private $profileUrl;

    /**
     * @var string|null
     */
    private $avatar;

    /**
     * @var string|null
     */
    private $avatarMedium;

    /**
     * @var string|null
     */
    private $avatarFull;

    /**
     * @var integer|null
     */
    private $personaState;

    /**
     * @var string|null
     */
    private $realName;

    /**
     * @var string|null
     */
    private $primaryClanId;

    /**
     * @var integer|null
     */
    private $timeCreated;

    /**
     * @var int|null
     */
    private $personaStateFlags;

    /**
     * @var string|null
     */
    private $locCountryCode;

    /**
     * @var string|null
     */
    private $locStateCode;

    /**
     * @return string|null
     */
    public function getSteamId(): ?string
    {
        return $this->steamId;
    }

    /**
     * @param string $steamId
     * @return SteamPlayer
     */
    public function setSteamId(string $steamId): SteamPlayer
    {
        $this->steamId = $steamId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getCommunityVisibilityState(): ?int
    {
        return $this->communityVisibilityState;
    }

    /**
     * @param int $communityVisibilityState
     * @return SteamPlayer
     */
    public function setCommunityVisibilityState(int $communityVisibilityState): SteamPlayer
    {
        $this->communityVisibilityState = $communityVisibilityState;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getProfileState(): ?int
    {
        return $this->profileState;
    }

    /**
     * @param int $profileState
     * @return SteamPlayer
     */
    public function setProfileState(int $profileState): SteamPlayer
    {
        $this->profileState = $profileState;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getLastLogOff(): ?int
    {
        return $this->lastLogOff;
    }

    /**
     * @param int $lastLogOff
     * @return SteamPlayer
     */
    public function setLastLogOff(int $lastLogOff): SteamPlayer
    {
        $this->lastLogOff = $lastLogOff;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getProfileUrl(): ?string
    {
        return $this->profileUrl;
    }

    /**
     * @param string $profileUrl
     * @return SteamPlayer
     */
    public function setProfileUrl(string $profileUrl): SteamPlayer
    {
        $this->profileUrl = $profileUrl;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    /**
     * @param string $avatar
     * @return SteamPlayer
     */
    public function setAvatar(string $avatar): SteamPlayer
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAvatarMedium(): ?string
    {
        return $this->avatarMedium;
    }

    /**
     * @param string $avatarMedium
     * @return SteamPlayer
     */
    public function setAvatarMedium(string $avatarMedium): SteamPlayer
    {
        $this->avatarMedium = $avatarMedium;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getAvatarFull(): ?string
    {
        return $this->avatarFull;
    }

    /**
     * @param string $avatarFull
     * @return SteamPlayer
     */
    public function setAvatarFull(string $avatarFull): SteamPlayer
    {
        $this->avatarFull = $avatarFull;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getRealName(): ?string
    {
        return $this->realName;
    }

    /**
     * @param string $realName
     * @return SteamPlayer
     */
    public function setRealName(string $realName): SteamPlayer
    {
        $this->realName = $realName;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPrimaryClanId(): ?string
    {
        return $this->primaryClanId;
    }

    /**
     * @param string $primaryClanId
     * @return SteamPlayer
     */
    public function setPrimaryClanId(string $primaryClanId): SteamPlayer
    {
        $this->primaryClanId = $primaryClanId;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getTimeCreated(): ?int
    {
        return $this->timeCreated;
    }

    /**
     * @param int $timeCreated
     * @return SteamPlayer
     */
    public function setTimeCreated(int $timeCreated): SteamPlayer
    {
        $this->timeCreated = $timeCreated;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLocCountryCode(): ?string
    {
        return $this->locCountryCode;
    }

    /**
     * @param string $locCountryCode
     * @return SteamPlayer
     */
    public function setLocCountryCode(string $locCountryCode): SteamPlayer
    {
        $this->locCountryCode = $locCountryCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getLocStateCode(): ?string
    {
        return $this->locStateCode;
    }

    /**
     * @param string $locStateCode
     * @return SteamPlayer
     */
    public function setLocStateCode(string $locStateCode): SteamPlayer
    {
        $this->locStateCode = $locStateCode;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getPersonaName(): ?string
    {
        return $this->personaName;
    }

    /**
     * @param string $personaName
     * @return SteamPlayer
     */
    public function setPersonaName(string $personaName): SteamPlayer
    {
        $this->personaName = $personaName;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getPersonaState(): ?int
    {
        return $this->personaState;
    }

    /**
     * @param int $personaState
     * @return SteamPlayer
     */
    public function setPersonaState(int $personaState): SteamPlayer
    {
        $this->personaState = $personaState;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getPersonaStateFlags(): ?int
    {
        return $this->personaStateFlags;
    }

    /**
     * @param int $personaStateFlags
     * @return SteamPlayer
     */
    public function setPersonaStateFlags(int $personaStateFlags): SteamPlayer
    {
        $this->personaStateFlags = $personaStateFlags;

        return $this;
    }
}
