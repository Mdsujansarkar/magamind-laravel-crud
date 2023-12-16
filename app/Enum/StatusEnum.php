<?php

declare(strict_types=1);

namespace App\Enum;

enum Status: int
{
    case Draft = 0;
    case Publish = 1;
}
