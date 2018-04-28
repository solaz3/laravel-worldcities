<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorldsContinentsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $table = config('worldcities.table.continent');

        DB::table($table)->truncate();

        DB::table($table)->insert([
            [
                'id' => 1,
                'name' => [
                    'en' => 'Asia',
                    'zh' => '亚洲',
                ],
                'abbr' => [
                    'en' => 'AS',
                    'zh' => '亚',
                ],
                'code' => 'as',
            ],
            [
                'id' => 2,
                'name' => [
                    'en' => 'Europe',
                    'zh' => '欧洲',
                ],
                'abbr' => [
                    'en' => 'EU',
                    'zh' => '欧',
                ],
                'code' => 'eu',
            ],
            [
                'id' => 3,
                'name' => [
                    'en' => 'Africa',
                    'zh' => '非洲',
                ],
                'abbr' => [
                    'en' => 'AF',
                    'zh' => '非',
                ],
                'code' => 'af',
            ],
            [
                'id' => 4,
                'name' => [
                    'en' => 'Oceania',
                    'zh' => '大洋洲',
                ],
                'abbr' => [
                    'en' => 'OC',
                    'zh' => '大洋',
                ],
                'code' => 'oc',
            ],
            [
                'id' => 5,
                'name' => [
                    'en' => 'Antarctica',
                    'zh' => '南极洲',
                ],
                'abbr' => [
                    'en' => 'AN',
                    'zh' => '南极',
                ],
                'code' => 'an',
            ],
            [
                'id' => 6,
                'name' => [
                    'en' => 'North America',
                    'zh' => '北美洲',
                ],
                'abbr' => [
                    'en' => 'NA',
                    'zh' => '北美',
                ],
                'code' => 'na',
            ],
            [
                'id' => 7,
                'name' => [
                    'en' => 'South America',
                    'zh' => '南美洲',
                ],
                'abbr' => [
                    'en' => 'SA',
                    'zh' => '南美',
                ],
                'code' => 'sa',
            ],
        ]);
    }
}