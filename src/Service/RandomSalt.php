<?php

declare(strict_types=1);

namespace Jolicht\PowerdnsModel\Service;

use Webmozart\Assert\Assert;

final class RandomSalt
{
    public function __invoke(int $length): string
    {
        Assert::positiveInteger($length);
        Assert::range($length, 1, 255);

        return \bin2hex(\random_bytes($length));
    }
}
