<?php

namespace PublicPlan\Model;

use DateTime;

class Passport
{
    private string $id;
    private DateTime $issuedAt;
    private DateTime $expiresAt;
    private User $user;

    /**
     * @param string $id
     * @param User $user
     */
    public function __construct(string $id, User $user)
    {
        $this->id = $id;
        $this->user = $user;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): Passport
    {
        $this->id = $id;
        return $this;
    }

    public function getIssuedAt(): DateTime
    {
        return $this->issuedAt;
    }

    public function setIssuedAt(DateTime $issuedAt): Passport
    {
        $this->issuedAt = $issuedAt;
        return $this;
    }

    public function getExpiresAt(): DateTime
    {
        return $this->expiresAt;
    }

    public function setExpiresAt(DateTime $expiresAt): Passport
    {
        $this->expiresAt = $expiresAt;
        return $this;
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): Passport
    {
        $this->user = $user;
        return $this;
    }
}