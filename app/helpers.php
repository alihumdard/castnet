<?php
use App\Models\Setting;

function appSetting() {
    $setting = Setting::first();
  return $setting ? $setting->toArray() : [];
}


