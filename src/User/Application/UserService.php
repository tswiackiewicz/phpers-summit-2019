<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\User\Application;

use TSwiackiewicz\PHPersSummit\Shared\{Email, Uuid};

/**
 * Class UserService
 * @package TSwiackiewicz\PHPersSummit\User\Application
 */
class UserService
{
    public function forUsername(string $username): UserDTO
    {
        return new UserDTO(
            Uuid::random(),
            Email::fromString($username),
            true
        );
    }
}
