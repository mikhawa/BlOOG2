<?php

namespace model\Mapping;
use model\Abstract\AbstractMapping;
use model\Trait\TraitSlugify;
use Exception;

class TagMapping
{
    
    protected ?int $tag_id;
    protected ?string $tag_slug;


    public function getTagId(): ?int
    {
        return $this->tag_id;
    }

    public function setTagId(?int $tag_id): void
    {
        if ($tag_id <= 0) {
            throw new Exception("ID non valide");
        }
        $this->tag_id = $tag_id;
    }

    public function getTagSlug(): ?string
    {
        
        return html_entity_decode($this->tag_slug);
    }

    public function setTagSlug(?string $tag_slug): void
    {
       
        $text = htmlspecialchars(trim(strip_tags($tag_slug)), ENT_QUOTES);
        $this->tag_slug = $text;
    }
    public function __toString(): string
    {
        return "Cette instance est créée par ".self::class;
    }
}
