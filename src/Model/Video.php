<?php

namespace PublicPlan\Model;

use PublicPlan\Trait\Likeable;

class Video
{
    use Likeable;

    private string $content;

    public function __construct(
        private string $title
    )
    {
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): Video
    {
        $this->content = $content;
        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): Video
    {
        $this->title = $title;
        return $this;
    }
}