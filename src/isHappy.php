<?php
function isHappy(string $ticketNumber)
{
    if (strlen($ticketNumber) % 2 !== 0) {
        throw new ErrorException('Ticket number should contain even number of digits ');
    }

    $parts = str_split($ticketNumber, strlen($ticketNumber) / 2);

    $firstPart = array_map('intval', str_split($parts[0]));
    $secondPart = array_map('intval', str_split($parts[1]));

    return array_sum($firstPart) === array_sum($secondPart);
}
