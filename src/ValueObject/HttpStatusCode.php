<?php

declare(strict_types=1);

namespace Jolicht\PowerdnsModel\ValueObject;

enum HttpStatusCode: int
{
    case HTTP_NO_CONTENT = 204;
    case HTTP_NOT_FOUND = 404;
}
