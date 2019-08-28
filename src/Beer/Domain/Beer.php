<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Beer\Domain;

use TSwiackiewicz\PHPersSummit\Beer\Domain\Comment\BeerComments;
use TSwiackiewicz\PHPersSummit\Beer\Domain\Comment\BeerComment;
use TSwiackiewicz\PHPersSummit\Beer\Shared\BeerException;
use TSwiackiewicz\PHPersSummit\Beer\Shared\BeerId;
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

    public function __construct(BeerId $id, BeerType $type, BeerRating $rating, BeerComments $comments)
    {
        $this->id = $id;
        $this->type = $type;
        $this->rating = $rating;
        $this->comments = $comments;
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
