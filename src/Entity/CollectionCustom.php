<?php

namespace App\Entity;

use App\Repository\CollectionCustomRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CollectionCustomRepository::class)]
class CollectionCustom
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $slug = null;

    #[ORM\Column(length: 255)]
    private ?string $title = null;

    #[ORM\Column(length: 255)]
    private ?string $subtitle = null;

    #[ORM\Column(length: 255)]
    private ?string $content = null;

    #[ORM\Column(length: 255)]
    private ?string $miniTitleWithBar = null;

    #[ORM\Column(length: 255)]
    private ?string $img = null;

    #[ORM\Column]
    private array $keysList = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): static
    {
        $this->title = $title;

        return $this;
    }

    public function getSubtitle(): ?string
    {
        return $this->subtitle;
    }

    public function setSubtitle(string $subtitle): static
    {
        $this->subtitle = $subtitle;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): static
    {
        $this->content = $content;

        return $this;
    }

    public function getMiniTitleWithBar(): ?string
    {
        return $this->miniTitleWithBar;
    }

    public function setMiniTitleWithBar(string $miniTitleWithBar): static
    {
        $this->miniTitleWithBar = $miniTitleWithBar;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(string $img): static
    {
        $this->img = $img;

        return $this;
    }

    public function getKeysList(): array
    {
        return $this->keysList;
    }

    public function setKeysList(array $keysList): static
    {
        $this->keysList = $keysList;

        return $this;
    }
}
