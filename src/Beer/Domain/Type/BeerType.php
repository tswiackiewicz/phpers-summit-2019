<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Beer\Domain\Type;

use TSwiackiewicz\PHPersSummit\Beer\Shared\BeerId;

class BeerType
{
    /** @var BeerId */
    private $beerId;

    /** @var string */
    private $type;

    /** @var BeerTypeRepository */
    private $repository;

    public function __construct(BeerId $beerId, string $type, BeerTypeRepository $repository)
    {
        $this->beerId = $beerId;
        $this->type = $type;
        $this->repository = $repository;
    }

    public function setType(string $type): void
    {
        if ($this->type === $type) {
            return;
        }

        $this->type = $type;
        $this->repository->store($this->beerId, $type);
    }
}