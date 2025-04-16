<?php

declare(strict_types=1);

namespace App;

use DateTime as DT;

new DT();

class Account {
    public SocialMedia $socialMedia;

    public function __construct(public string $name, public float $balance)
    {
        $this->socialMedia = new SocialMedia();
    }

    public function deposit(float $amount)
    {
        $this->balance += $amount;

        return $this;
    }
}