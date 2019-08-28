<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Beer\Application;

use TSwiackiewicz\PHPersSummit\Beer\Application\Command\AddComment;
use TSwiackiewicz\PHPersSummit\Beer\Application\Command\RateBeer;
use TSwiackiewicz\PHPersSummit\Beer\Application\Command\SetBeerType;
use TSwiackiewicz\PHPersSummit\Beer\Domain\BeerRepository;
use TSwiackiewicz\PHPersSummit\Beer\Shared\BeerException;
use TSwiackiewicz\PHPersSummit\User\Application\UserService;

class BeerService
{
    /** @var UserService */
    private $userService;

    /** @var BeerRepository */
    private $repository;

    public function __construct(UserService $userService, BeerRepository $repository)
    {
        $this->userService = $userService;
        $this->repository = $repository;
    }

    /**
     * @param SetBeerType $command
     * @throws BeerException
     */
    public function setBeerType(SetBeerType $command): void
    {
        $user = $this->userService->forUsername($command->username());

        $beer = $this->repository->getById($command->beerId());
        $beer->setType($command->type(), $user->admin());

        $this->repository->store($beer);
    }

    /**
     * @param RateBeer $command
     * @throws BeerException
     */
    public function rateBeer(RateBeer $command): void
    {
        $beer = $this->repository->getById($command->beerId());
        $beer->rate($command->rating());
    }

    /**
     * @param AddComment $command
     * @throws BeerException
     */
    public function addComment(AddComment $command): void
    {
        $beer = $this->repository->getById($command->beerId());
        $beer->addComment($command->comment(), $command->userId(), $command->username());
    }
}
