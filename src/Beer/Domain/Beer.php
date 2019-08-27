<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Beer\Domain;

use TSwiackiewicz\PHPersSummit\Beer\Domain\Comment\BeerComments;
use TSwiackiewicz\PHPersSummit\Beer\Domain\Comment\Comment;
use TSwiackiewicz\PHPersSummit\Beer\Domain\Type\BeerType;
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
     * @param bool $premiumUser
     * @throws BeerException
     */
    public function setType(string $type, bool $premiumUser): void
    {
        if (!$premiumUser) {
            throw BeerException::notAllowedForNotPremiumUsers();
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

    public function addComment(Uuid $userId, string $username, Comment $comment): void
    {
        $this->comments->add($userId, $username, $comment);
    }
}