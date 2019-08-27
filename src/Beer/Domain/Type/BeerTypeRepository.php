<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Beer\Domain\Type;

use TSwiackiewicz\PHPersSummit\Beer\Shared\BeerId;

interface BeerTypeRepository
{
    public function store(BeerId $beerId, string $type): void;
}