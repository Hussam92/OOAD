<?php

namespace PublicPlan\Trait;

use PublicPlan\Model\User;

trait HasAuthor
{
    public User $author;

    public function getAuthor(): User
    {
        return $this->author;
    }

    public function setAuthor(User $author): void
    {
        $this->author = $author;
    }
}