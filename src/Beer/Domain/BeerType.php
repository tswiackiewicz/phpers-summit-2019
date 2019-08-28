<?php /** @noinspection PhpUnusedPrivateFieldInspection */

declare(strict_types=1);

namespace TSwiackiewicz\PHPersSummit\Beer\Domain;

use MyCLabs\Enum\Enum;

/**
 * Domain concept representing types of beer
 *
 * @method static BeerType ALE()
 * @method static BeerType LAGER()
 * @method static BeerType MALT()
 * @method static BeerType STOUT()
 */
class BeerType extends Enum
{
    private const ALE = 'ale';
    private const LAGER = 'lager';
    private const MALT = 'malt';
    private const STOUT = 'stout';

    public static function fromString(string $type): self
    {
        return new self($type);
    }

    public function setType(string $type): void
    {
        if ($this->value === $type) {
            return;
        }

        $this->value = $type;
    }

    public function type(): string
    {
        return (string)$this->value;
    }
}
