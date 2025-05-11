<?php

namespace App\Enums;

enum ActivityLogAction: string
{
    // define the actions of the activity log
    case CREATED = 'created';
    case UPDATED = 'updated';
    case DELETED = 'deleted';

    public static function options(): array
    {
        return [
            self::CREATED => __('Created'),
            self::UPDATED => __('Updated'),
            self::DELETED => __('Deleted'),
        ];
    }
}
