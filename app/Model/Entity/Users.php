<?php

namespace Localize\Model\Entity;

class Users 
{
    private ?int $id;
    private string $name;
    private string $email;
    private string $phone;
    private string $password;

    public function __construct(string $email, string $password, ?string $name, ?string $phone, ?int $id)
    {
        if ($id != null) $this->id = $id;
        if ($name != null) $this->name = $name;
        if ($phone != null) $this->phone = $phone;

        $this->email = $email;
        $this->password = $password;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }
    
    public function setPhone($phone): void
    {
        $this->phone = $phone;
    }
    
    public function setPassword($password): void
    {
        $this->password = $password;
    }
}