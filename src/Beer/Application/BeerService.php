<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Beer\Application;

use TSwiackiewicz\PHPersSummit\Beer\Application\Command\{AddComment, RateBeer, SetBeerType};
use TSwiackiewicz\PHPersSummit\Beer\Domain\BeerRepository;
use TSwiackiewicz\PHPersSummit\Beer\Shared\BeerException;
use TSwiackiewicz\PHPersSummit\User\Application\UserService;

class BeerService
{
    /** @var UserService */
    private $userService;

    /** @var BeerFactory */
    private $factory;

    /**
     * @var BeerRepository
     */
    private $repository;

    public function __construct(UserService $userService, BeerFactory $factory, BeerRepository $repository)
    {
        $this->userService = $userService;
        $this->factory = $factory;
        $this->repository = $repository;
    }

    /**
     * @param SetBeerType $command
     * @throws BeerException
     */
    public function setBeerType(SetBeerType $command): void
    {
        $user = $this->userService->forUsername($command->username());

        $beer = $this->factory->forId($command->beerId());
        $beer->setType($command->type(), $user->admin());

        $this->repository->store($beer);
    }

    /**
     * @param RateBeer $command
     * @throws BeerException
     */
    public function rateBeer(RateBeer $command): void
    {
        $beer = $this->factory->forId($command->beerId());
        $beer->rate($command->rating());
    }

    /**
     * @param AddComment $command
     * @throws BeerException
     */
    public function addComment(AddComment $command): void
    {
        $beer = $this->factory->forId($command->beerId());
        $beer->addComment($command->comment(), $command->userId(), $command->username());
    }
}
