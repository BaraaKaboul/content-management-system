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
        $setting = Setting::first();
        return view('settings.settings',compact('setting'));
    }

    public function store($request)
    {
        try {
            $rules = [
                'phone' => 'required|numeric',
                'email' => 'required|email|max:255',
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'favicon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'facebook' => 'nullable|url',
                'instagram' => 'nullable|url',
            ];
            foreach (config('laravellocalization.supportedLocales') as $key => $lang)
            {
                $rules["$key.title"] = 'required|string|max:255';
                $rules["$key.content"] = 'required|string';
                $rules["$key.address"] = 'required|string|max:255';
            }
            $validatedData = $request->validate($rules);

            $data = [
                'phone'=>$request->phone,
                'email'=>$request->email,
//                'logo'=>$request->logo,
//                'favicon'=>$request->favicon,
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
            if ($request->hasFile('logo')) {
                $file = $request->file('logo');
                $filename = time().'.'.$file->getClientOriginalName();
                $file->move(public_path('logo'), $filename);
                $path = 'logo/' . $filename;
                $data['logo'] = $path;
            }

            if ($request->hasFile('favicon')) {
                $file = $request->file('favicon');
                $filename = time().'.'.$file->getClientOriginalName();
                $file->move(public_path('favicon'), $filename);
                $path = 'favicon/' . $filename;
                $data['favicon'] = $path;
            }

            $data = array_merge($data,$translations);

            Setting::createOrUpdate($data);// لحتى قدرت استخدم createOrUpdate عملت فانكشن بالmodel وحطيت الايميل شرط, ازا كان نفسو بيعمل update

            return to_route('dashboard.settings');

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
        catch (\Exception $e){
            return redirect()->back()->withErrors(['errors'=>$e->getMessage()]);
        }
    }
}
