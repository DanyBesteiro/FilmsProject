<?php

declare(strict_types=1);

namespace App\People\Person\Application\SearchByCriteria;

use App\People\Person\Domain\PersonRepository;

final class PersonByCriteriaSearcher
{
    public function __construct(public readonly PersonRepository $personRepository)
    {

    }

    public function execute(string $criteria,string $value): ?array
    {
        return $this->personRepository->searchByCriteria($criteria,$value);
    }
}