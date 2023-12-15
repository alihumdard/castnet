<?php
// app/Http/Controllers/Admin/SettingsController.php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;

class SettingsController extends Controller
{
    public function uploadLargeLogo(Request $request)
    {
        $setting = new Setting;

        // Define hardcoded values for all attributes
        $hardcodedAttributes = [
            'section' => 'Large Logo',
            'img_url' => 'Hardcoded Type',
            'link' => 'Hardcoded Description',
            'desc' => 'Hardcoded Description',
            'type' => 'Hardcoded Description',
            'status' => 'Hardcoded Description',
            'created_by' => 'Hardcoded Creator',
            // Add other hardcoded attributes here
        ];

        $setting->uploadLargeLogo($hardcodedAttributes);

        return redirect()->route('admin.setting');
    }
    public function uploadMediumLogo(Request $request)
    {
        $setting = new Setting;

        // Define hardcoded values for all attributes
        $hardcodedAttributes = [
            'section' => 'Medium Logo',
            'img_url' => 'Hardcoded Type',
            'link' => 'Hardcoded Description',
            'desc' => 'Hardcoded Description',
            'type' => 'Hardcoded Description',
            'status' => 'Hardcoded Description',
            'created_by' => 'Hardcoded Creator',
            // Add other hardcoded attributes here
        ];

        $setting->uploadMediumLogo($hardcodedAttributes);

        return redirect()->route('admin.setting');
    }
    public function uploadSmallLogo(Request $request)
    {
        $setting = new Setting;

        // Define hardcoded values for all attributes
        $hardcodedAttributes = [
            'section' => 'Small Logo',
            'img_url' => 'Hardcoded Type',
            'link' => 'Hardcoded Description',
            'desc' => 'Hardcoded Description',
            'type' => 'Hardcoded Description',
            'status' => 'Hardcoded Description',
            'created_by' => 'Hardcoded Creator',
            // Add other hardcoded attributes here
        ];

        $setting->uploadSmallLogo($hardcodedAttributes);

        return redirect()->route('admin.setting');
    }
}

