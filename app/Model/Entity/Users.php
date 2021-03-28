<?php

namespace Localize\Model\Entity;

class Users 
{
    private ?int $id;
    private string $name;
    private string $email;
    private string $phone;
    private string $password;
    private string $token;
    private int $confirmed;

    public function __construct(string $email, string $password, string $token, ?string $name, ?string $phone,?int $id)
    {
        if ($id != null)    $this->id    = $id;
        if ($name != null)  $this->name  = $name;
        if ($phone != null) $this->phone = $phone;

        $this->confirmed = 0;

        $this->token    = $token;
        $this->email    = $email;
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

    public function getConfirmed(): int
    {
        return $this->confirmed;
    }

    public function getToken(): string
    {
        return $this->token;
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

    public function setConfirmed($confirmed): void
    {
        $this->confirmed =  $confirmed;
    }
    
    public function setToken($token): void 
    {
        $this->token = $token;
    }
}