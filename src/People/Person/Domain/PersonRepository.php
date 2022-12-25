<?php

declare(strict_types=1);

namespace App\People\Person\Domain;

interface PersonRepository
{
    public function save(Person $person): void;

    public function search(PersonId $id): array;

    //public function searchByName(string $name): array;

    public function searchAll(): array;
}