<?php

namespace App\Enums;

enum UserRoles
{
    public static function labels(): array
    {
        return [
            'admin' => 'Administrateur',
            'user' => 'Utilisateur',
        ];
    }
}
