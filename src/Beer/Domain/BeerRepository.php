<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Beer\Domain;

use TSwiackiewicz\PHPersSummit\Beer\Shared\BeerId;

interface BeerRepository
{
    public function getById(BeerId $beerId): Beer;

    public function store(Beer $beer): void;
}
