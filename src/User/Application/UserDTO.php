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
    private $userId;

    /** @var Email */
    private $login;

    /** @var bool */
    private $admin;

    public function __construct(Uuid $userId, Email $login, bool $admin = false)
    {
        $this->userId = $userId;
        $this->login = $login;
        $this->admin = $admin;
    }

    public function userId(): Uuid
    {
        return $this->userId;
    }

    public function login(): Email
    {
        return $this->login;
    }

    public function admin(): bool
    {
        return $this->admin;
    }
}
