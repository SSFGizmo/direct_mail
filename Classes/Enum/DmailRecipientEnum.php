<?php

declare(strict_types=1);

namespace DirectMailTeam\DirectMail\Enum;

enum DmailRecipientEnum: string
{
    case TtAddress = 'tt_address';
    case FeUsers = 'fe_users';
    case Plainlist = 'PLAINLIST';
}