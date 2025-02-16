<?php
declare(strict_types=1);

namespace App\Query;

final class MyQuery
{
    public function __construct(private string $message)
    {
    }

    public function message(): string
    {
        return $this->message;
    }
}
