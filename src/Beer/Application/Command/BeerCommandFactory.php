<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Beer\Application\Command;

use TSwiackiewicz\PHPersSummit\Beer\Domain\Comment\Comment;
use TSwiackiewicz\PHPersSummit\Beer\Shared\BeerId;
use TSwiackiewicz\PHPersSummit\Shared\Uuid;
use TSwiackiewicz\PHPersSummit\User\Application\UserService;

class BeerCommandFactory
{
    /** @var UserService */
    private $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function createAddComment(array $command): AddComment
    {
        $user = $this->userService->forUsername($command['login']);

        return new AddComment(
            BeerId::fromUuid(new Uuid($command['beerId'])),
            $user->uuid(),
            $command['login'],
            new Comment($command['comment'])
        );
    }
}