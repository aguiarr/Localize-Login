<?php

namespace Localize\Model\Repository;

use Localize\Model\Entity\Users;

interface RepositoryUsers
{
    public function checkout(string $email, string $password): array;
    public function find(int $id): array;
    public function save(Users $users): bool;
}