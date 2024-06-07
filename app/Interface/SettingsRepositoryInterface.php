<?php

namespace App\Interface;

interface SettingsRepositoryInterface
{
    public function index();

    public function showSettings();

    public function store($request);
}
