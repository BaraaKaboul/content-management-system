<?php

namespace App\Repository;

use App\Interface\SettingsRepositoryInterface;
use App\Models\Setting;

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
        $data = [
            'phone'=>$request->phone,
            'email'=>$request->email,
            'logo'=>$request->logo,
            'favicon'=>$request->favicon,
            'facebook'=>$request->facebook,
            'instagram'=>$request->instagram,
        ];

        $translations = [
            'title'=>[],
            'content'=>[],
            'address'=>[],
        ];

        foreach (config('laravellocalization.supportedLocales') as $key => $lang)
        {
            $translations['title'][$key] = $request->input("$key.title");
            $translations['content'][$key] = $request->input("$key.content");
            $translations['address'][$key] = $request->input("$key.address");
        }
        $data = array_merge($data,$translations);

        Setting::createOrUpdate($data);// لحتى قدرت استخدم createOrUpdate عملت فانكشن بالmodel وحطيت الايميل شرط, ازا كان نفسو بيعمل update

        /*$setting = Setting::where('title->en', $request->input('en.title'))->orWhere('title->ar', $request->input('ar.title'))->first();

        if ($setting) {
            // تحديث السجل الموجود
            $setting->update($data);
        } else {
            // إنشاء سجل جديد
            $setting = Setting::create($data);
        }

        // تحديث الحقول القابلة للترجمة
        foreach (config('laravellocalization.supportedLocales') as $key => $lang) {
            $setting->setTranslation('title', $key, $translations['title'][$key]);
            $setting->setTranslation('content', $key, $translations['content'][$key]);
            $setting->setTranslation('address', $key, $translations['address'][$key]);
        }

        $setting->save();

        return to_route('dashboard.settings');*/
    }
}
