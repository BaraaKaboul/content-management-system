<?php

namespace App\Repository;

use App\Interface\SettingsRepositoryInterface;

class SettingsRepository implements SettingsRepositoryInterface
{
    public function index()
    {
        return view('dashboard');
    }

    public function showSettings()
    {
        return view('settings.settings');
    }

    public function store($request)
    {
        return $request;
    }
}
