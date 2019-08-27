<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\User\Application;

use TSwiackiewicz\PHPersSummit\Shared\Email;
use TSwiackiewicz\PHPersSummit\Shared\Uuid;

/**
 * Template of UserDTO class
 * Only a few base properties are used
 */
class UserDTO
{
    /** @var Uuid */
    private $uuid;

    /** @var Email */
    private $login;

    /** @var bool */
    private $premium;

    public function __construct(Uuid $uuid, Email $login, bool $premium = false)
    {
        $this->uuid = $uuid;
        $this->login = $login;
        $this->premium = $premium;
    }

    public function uuid(): Uuid
    {
        return $this->uuid;
    }

    public function login(): Email
    {
        return $this->login;
    }

    public function premium(): bool
    {
        return $this->premium;
    }
}