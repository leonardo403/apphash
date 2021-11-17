<?php

namespace App\Entity;

use App\Repository\ApphashRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ApphashRepository::class)
 */
class Apphash
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=250)
     */
    private $String;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $hash_gerada;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $hash;

    /**
     * @ORM\Column(type="datetime")
     */
    private $data_criacao;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getString(): ?string
    {
        return $this->String;
    }

    public function setString(string $String): self
    {
        $this->String = $String;

        return $this;
    }

    public function getHashGerada(): ?string
    {
        return $this->hash_gerada;
    }

    public function setHashGerada(string $hash_gerada): self
    {
        $this->hash_gerada = $hash_gerada;

        return $this;
    }

    public function getHash(): ?string
    {
        return $this->hash;
    }

    public function setHash(string $hash): self
    {
        $this->hash = $hash;

        return $this;
    }

    public function getDataCriacao(): ?\DateTimeInterface
    {
        return $this->data_criacao;
    }

    public function setDataCriacao(\DateTimeInterface $data_criacao): self
    {
        $this->data_criacao = $data_criacao;

        return $this;
    }
}
