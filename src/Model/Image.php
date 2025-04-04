<?php

namespace PublicPlan\Model;

use PublicPlan\Trait\Likeable;

class Image
{
    use Likeable;

    public function __construct(
        private readonly string $title,
        private readonly string $image_base64_encoded,
    )
    {
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getImageBase64Encoded(): string
    {
        return $this->image_base64_encoded;
    }
}