<?php

namespace App\Entity;

use App\Repository\PegawaiRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PegawaiRepository::class)]
class Pegawai
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nip = null;

    #[ORM\Column(length: 255)]
    private ?string $namaLengkap = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $alamat = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNip(): ?string
    {
        return $this->nip;
    }

    public function setNip(string $nip): static
    {
        $this->nip = $nip;

        return $this;
    }

    public function getNamaLengkap(): ?string
    {
        return $this->namaLengkap;
    }

    public function setNamaLengkap(string $namaLengkap): static
    {
        $this->namaLengkap = $namaLengkap;

        return $this;
    }

    public function getAlamat(): ?string
    {
        return $this->alamat;
    }

    public function setAlamat(string $alamat): static
    {
        $this->alamat = $alamat;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }
}
