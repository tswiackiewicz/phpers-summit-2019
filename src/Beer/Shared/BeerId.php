<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Beer\Shared;

use TSwiackiewicz\PHPersSummit\Shared\Uuid;

class BeerId
{
    /** @var Uuid */
    private $id;

    private function __construct(Uuid $id)
    {
        $this->id = $id;
    }

    public static function fromUuid(Uuid $uuid): self
    {
        return new self($uuid);
    }

    public function uuid(): Uuid
    {
        return $this->id;
    }
}
