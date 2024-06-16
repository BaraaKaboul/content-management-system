<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Interface\SettingsRepositoryInterface;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    protected $setting;

    public function __construct(SettingsRepositoryInterface $setting)
    {
        return $this->setting = $setting;
    }
    public function index()
    {
        return $this->setting->index();
    }

    public function showSettings()
    {
        return $this->setting->showSettings();
    }

    public function store(Request $request)
    {
        return $this->setting->store($request);
    }
}
