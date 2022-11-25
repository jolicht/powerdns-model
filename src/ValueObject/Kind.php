<?php

declare(strict_types=1);

namespace Jolicht\PowerdnsModel\ValueObject;

enum Kind: string
{
    case NATIVE = 'Native';
    case MASTER = 'Master';
    case SLAVE = 'Slave';
    case PRODUCER = 'Producer';
    case CONSUMER = 'Consumer';
}
