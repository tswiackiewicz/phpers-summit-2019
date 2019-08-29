<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Beer\Domain;

use TSwiackiewicz\PHPersSummit\Beer\Domain\Comment\{BeerComment, BeerComments};
use TSwiackiewicz\PHPersSummit\Beer\Shared\{BeerException, BeerId};
use TSwiackiewicz\PHPersSummit\Shared\Uuid;

class Beer
{
    /** @var BeerId */
    private $id;

    /** @var BeerType */
    private $type;

    /** @var BeerRating */
    private $rating;

    /** @var BeerComments */
    private $comments;

    /** @var BeerRepository */
    private $repository;

    public function __construct(
        BeerId $id,
        BeerType $type,
        BeerRating $rating,
        BeerComments $comments,
        BeerRepository $repository
    ) {
        $this->id = $id;
        $this->type = $type;
        $this->rating = $rating;
        $this->comments = $comments;
        $this->repository = $repository;
    }

    /**
     * @param string $type
     * @param bool $admin
     * @throws BeerException
     */
    public function setType(string $type, bool $admin): void
    {
        if (!$admin) {
            throw BeerException::notAllowedForNotAdminUsers();
        }

        $this->type->setType($type);

        $this->repository->store($this);
    }

    /**
     * @param int $rating
     * @throws BeerException
     */
    public function rate(int $rating): void
    {
        $this->rating->rate($this->id, $rating);
    }

    /**
     * @param BeerComment $comment
     * @param Uuid $userId
     * @param string $username
     * @throws BeerException
     */
    public function addComment(BeerComment $comment, Uuid $userId, string $username): void
    {
        $this->comments->add($comment, $userId, $username);
    }

    public function id(): BeerId
    {
        return $this->id;
    }

    public function type(): BeerType
    {
        return $this->type;
    }
}
