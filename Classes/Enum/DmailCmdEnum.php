<?php

declare(strict_types=1);

namespace DirectMailTeam\DirectMail\Enum;

enum DmailCmdEnum: string
{
    case Delete = 'delete';
    case Info = 'info';
    case Categories = 'cats';
    case SendMass = 'send_mass';
    case SendTest = 'send_test';
    case SendMailTest = 'send_mail_test';
    case SendMailFinal = 'send_mail_final';
}