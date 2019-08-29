<?php

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Beer\Application;

use TSwiackiewicz\PHPersSummit\Beer\Domain\{Beer, BeerRepository, BeerType};
use TSwiackiewicz\PHPersSummit\Beer\Infrastructure\Comment\DisqusBeerComments;
use TSwiackiewicz\PHPersSummit\Beer\Shared\{BeerException, BeerId};
use TSwiackiewicz\PHPersSummit\Rating\RatingService;

/**
 * In this case BeerFactory is defined at Application Layer level because legacy service adapter (ACL) is used
 * Factory can also be declared at Domain Layer or Infrastructure Layer level - it depends on which layers
 * dependencies are used
 */
class BeerFactory
{
    /** @var BeerRepository */
    private $repository;

    public function __construct(BeerRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param BeerId $beerId
     * @return Beer
     * @throws BeerException
     */
    public function forId(BeerId $beerId): Beer
    {
        $beer = $this->repository->getById($beerId);

        return new Beer(
            $beerId,
            BeerType::fromString($beer['type']),
            new BeerRatingServiceAdapter(
                new RatingService()
            ),
            new DisqusBeerComments($beerId)
        );
    }
}
