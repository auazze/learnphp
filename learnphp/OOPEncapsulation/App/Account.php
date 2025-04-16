<?php

declare(strict_types=1);

namespace App;

use DateTime as DT;

new DT();

class Account {
    public SocialMedia $socialMedia;

    public function __construct(private string $name, private float $balance)
    {
        $this->socialMedia = new SocialMedia();
    }

    public function deposit(float $amount)
    {
        $this->balance += $amount;

        return $this;
    }

    public function getBalance()
    {
        return "$" . $this->balance;
    }

    public function setBalance(float $newBalance)
    {
        if ($newBalance < 0) {
            return;
        }

        $this->balance = $newBalance;
        $this->sendEmail();
    }

    private function sendEmail()
    {

    }
}