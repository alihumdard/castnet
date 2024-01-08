<?php
use App\Models\Setting;
use App\Models\SocialLinks;
use App\Models\HomeSection1;

function appSetting() {
    $setting = Setting::first();
  return $setting ? $setting->toArray() : [];
}
function socialLinks() {
    $socialLinks = SocialLinks::first();
  return $socialLinks ? $socialLinks->toArray() : [];
}
function homeSection1() {
    $section1Data = HomeSection1::all()->toarray();
  return $section1Data ? $section1Data : [];
}



