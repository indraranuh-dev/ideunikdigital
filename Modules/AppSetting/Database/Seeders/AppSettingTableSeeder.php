<?php

namespace Modules\AppSetting\Database\Seeders;

use App\Constants\DefaultAppSettings;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Cache;
use Modules\AppSetting\Entities\AppSetting;

class AppSettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $settings = DefaultAppSettings::allSettings();
        $cms = DefaultAppSettings::allCms();
        $seo = DefaultAppSettings::allSeo();

        foreach ($settings as $setting) {
            Cache::forever($setting['key'], $setting['value']);
        }

        foreach ($cms as $item) {
            Cache::forever($item['key'], $item['value']);
        }

        foreach ($seo as $item) {
            Cache::forever($item['key'], $item['value']);
        }

        AppSetting::insert($settings);
        AppSetting::insert($cms);
        AppSetting::insert($seo);
    }
}