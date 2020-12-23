<?php

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::setMany([
            'default_locale' => 'ar',
            'default_timezone' => 'Africa/Cairo',
            'reviews_enabled' => true,
            'auto_approved_reviews' => true,
            'supported_currencies' => ['USD','LE','SAR'],
            'default_currency' => 'USD',
            'store_email' => 'admin@ecomerce.com',
            'search_engine' => 'mysql',
            'local_pickup_cost' => 0,
            'locale_shipping_cost' => 0,
            'outer_shipping_cost'=>0,
            'free_shipping_cost'=>0,
            'translatable' => [
                'store_name' => 'EVE Store',
                'free_shipping_label' => 'Free Shipping',
                'locale_label' => 'Locale Shipping',
                'outer_label' => 'Outer Shipping'
            ],
        ]);
    }
}
