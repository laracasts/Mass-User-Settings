<?php

namespace App;

class Settings
{
    protected $user;

    protected $allowed = [
        'foo', 'bar'
    ];

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function merge(array $attributes)
    {
        $settings = array_merge(
            $this->user->settings,
            array_only($attributes, $this->allowed)
        );

        return $this->user->update(compact('settings'));
    }
}
