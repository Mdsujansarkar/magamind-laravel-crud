<?php

declare(strict_types=1);

namespace App\Enum;

enum Role: int
{
    case User = 0;
    case Admin = 1;
}
