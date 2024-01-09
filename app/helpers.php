<?php
use App\Models\Setting;
use App\Models\SocialLinks;

function appSetting(){
  return Setting::first();
}
function socialLinks(){
  return SocialLinks::first();
}