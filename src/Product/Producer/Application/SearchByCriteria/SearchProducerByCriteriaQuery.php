<?php

declare(strict_types=1);

namespace App\Product\Producer\Application\SearchByCriteria;

use App\Shared\Domain\Bus\Query\Query;

final class SearchProducerByCriteriaQuery implements Query
{
    public function __construct(
        public readonly string $criteriaKey,
        public readonly string $criteriaValue)
    {

    }

    public static function create(string $criteriaKey, string $criteriaValue): self
    {
        return new self($criteriaKey, $criteriaValue);
    }
}