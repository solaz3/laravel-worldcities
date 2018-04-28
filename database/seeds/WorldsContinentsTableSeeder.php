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
                'name' => json_encode([
                    'en' => 'Asia',
                    'zh' => '亚洲',
                ]),
                'abbr' => json_encode([
                    'en' => 'AS',
                    'zh' => '亚',
                ]),
                'code' => 'as',
            ],
            [
                'id' => 2,
                'name' => json_encode([
                    'en' => 'Europe',
                    'zh' => '欧洲',
                ]),
                'abbr' => json_encode([
                    'en' => 'EU',
                    'zh' => '欧',
                ]),
                'code' => 'eu',
            ],
            [
                'id' => 3,
                'name' => json_encode([
                    'en' => 'Africa',
                    'zh' => '非洲',
                ]),
                'abbr' => json_encode([
                    'en' => 'AF',
                    'zh' => '非',
                ]),
                'code' => 'af',
            ],
            [
                'id' => 4,
                'name' => json_encode([
                    'en' => 'Oceania',
                    'zh' => '大洋洲',
                ]),
                'abbr' => json_encode([
                    'en' => 'OC',
                    'zh' => '大洋',
                ]),
                'code' => 'oc',
            ],
            [
                'id' => 5,
                'name' => json_encode([
                    'en' => 'Antarctica',
                    'zh' => '南极洲',
                ]),
                'abbr' => json_encode([
                    'en' => 'AN',
                    'zh' => '南极',
                ]),
                'code' => 'an',
            ],
            [
                'id' => 6,
                'name' => json_encode([
                    'en' => 'North America',
                    'zh' => '北美洲',
                ]),
                'abbr' => json_encode([
                    'en' => 'NA',
                    'zh' => '北美',
                ]),
                'code' => 'na',
            ],
            [
                'id' => 7,
                'name' => json_encode([
                    'en' => 'South America',
                    'zh' => '南美洲',
                ]),
                'abbr' => json_encode([
                    'en' => 'SA',
                    'zh' => '南美',
                ]),
                'code' => 'sa',
            ],
        ]);
    }
}