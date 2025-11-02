<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\ServiceRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ServiceRepository::class)]
#[ApiResource]
class Service
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $url = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $icone = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $icone_url = null;

    #[ORM\Column(length: 50)]
    private ?string $widget_type = null;

    #[ORM\Column(length: 50)]
    private ?string $size_class = null;

    #[ORM\Column(length: 30, nullable: true)]
    private ?string $card_color = null;

    #[ORM\Column]
    private ?int $ordre_affichage = null;

    #[ORM\ManyToOne(inversedBy: 'services')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Dashboard $dashboard = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(string $url): static
    {
        $this->url = $url;

        return $this;
    }

    public function getIcone(): ?string
    {
        return $this->icone;
    }

    public function setIcone(?string $icone): static
    {
        $this->icone = $icone;

        return $this;
    }

    public function getIconeUrl(): ?string
    {
        return $this->icone_url;
    }

    public function setIconeUrl(?string $icone_url): static
    {
        $this->icone_url = $icone_url;

        return $this;
    }

    public function getWidgetType(): ?string
    {
        return $this->widget_type;
    }

    public function setWidgetType(string $widget_type): static
    {
        $this->widget_type = $widget_type;

        return $this;
    }

    public function getSizeClass(): ?string
    {
        return $this->size_class;
    }

    public function setSizeClass(string $size_class): static
    {
        $this->size_class = $size_class;

        return $this;
    }

    public function getCardColor(): ?string
    {
        return $this->card_color;
    }

    public function setCardColor(?string $card_color): static
    {
        $this->card_color = $card_color;

        return $this;
    }

    public function getOrdreAffichage(): ?int
    {
        return $this->ordre_affichage;
    }

    public function setOrdreAffichage(int $ordre_affichage): static
    {
        $this->ordre_affichage = $ordre_affichage;

        return $this;
    }

    public function getDashboard(): ?Dashboard
    {
        return $this->dashboard;
    }

    public function setDashboard(?Dashboard $dashboard): static
    {
        $this->dashboard = $dashboard;

        return $this;
    }
}
