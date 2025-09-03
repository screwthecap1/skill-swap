<?php

namespace App\Enums;

enum ExchageStatus: string
{
    case ACTIVE = 'active';
    case COMPLETED = 'completed';
    case CANCELED = 'canceled';
}
