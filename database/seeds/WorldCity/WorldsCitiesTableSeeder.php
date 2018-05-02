<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorldsCitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        $table = config('worldcities.table.city');

        DB::table($table)->truncate();

        DB::table($table)->insert([
            [
                "id" => 1,
                "country_id" => 156,
                "state_id" => null,
                "name" => json_encode(["en" => "Elbasan", "zh" => "爱尔巴桑"]),
                "code" => "el"
            ],
            [
                "id" => 2,
                "country_id" => 156,
                "state_id" => null,
                "name" => json_encode(["en" => "Diber", "zh" => "迪勃拉"]),
                "code" => "di"
            ],
            [
                "id" => 3,
                "country_id" => 156,
                "state_id" => null,
                "name" => json_encode(["en" => "Tirane", "zh" => "地拉那"]),
                "code" => "tr"
            ],
            [
                "id" => 4,
                "country_id" => 156,
                "state_id" => null,
                "name" => json_encode(["en" => "Durres", "zh" => "都拉斯"]),
                "code" => "dr"
            ],
            [
                "id" => 5,
                "country_id" => 156,
                "state_id" => null,
                "name" => json_encode(["en" => "Vlore", "zh" => "发罗拉"]),
                "code" => "vl"
            ],
            [
                "id" => 6,
                "country_id" => 156,
                "state_id" => null,
                "name" => json_encode(["en" => "Fier", "zh" => "费里"]),
                "code" => "fr"
            ],
            [
                "id" => 7,
                "country_id" => 156,
                "state_id" => null,
                "name" => json_encode(["en" => "Gjirokaster", "zh" => "吉诺卡斯特"]),
                "code" => "gj"
            ],
            [
                "id" => 8,
                "country_id" => 156,
                "state_id" => null,
                "name" => json_encode(["en" => "Korce", "zh" => "科尔察"]),
                "code" => "ko"
            ],
            [
                "id" => 9,
                "country_id" => 156,
                "state_id" => null,
                "name" => json_encode(["en" => "Kukes", "zh" => "库克斯"]),
                "code" => "ku"
            ],
            [
                "id" => 10,
                "country_id" => 156,
                "state_id" => null,
                "name" => json_encode(["en" => "Lezhe", "zh" => "莱什"]),
                "code" => "le"
            ],
            [
                "id" => 11,
                "country_id" => 156,
                "state_id" => null,
                "name" => json_encode(["en" => "Berat", "zh" => "培拉特"]),
                "code" => "br"
            ],
            [
                "id" => 12,
                "country_id" => 156,
                "state_id" => null,
                "name" => json_encode(["en" => "Shkoder", "zh" => "斯库台"]),
                "code" => "sh"
            ],
            [
                "id" => 13,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Adrar", "zh" => "阿德拉尔"]),
                "code" => "adr"
            ],
            [
                "id" => 14,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Alger", "zh" => "阿尔及尔"]),
                "code" => "alg"
            ],
            [
                "id" => 15,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Ain Defla", "zh" => "艾因·德夫拉"]),
                "code" => "ade"
            ],
            [
                "id" => 16,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Ain Temouchent", "zh" => "艾因·蒂姆尚特"]),
                "code" => "ate"
            ],
            [
                "id" => 17,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Annaba", "zh" => "安纳巴"]),
                "code" => "aae"
            ],
            [
                "id" => 18,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Oran", "zh" => "奥兰"]),
                "code" => "ora"
            ],
            [
                "id" => 19,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Batna", "zh" => "巴特纳"]),
                "code" => "bat"
            ],
            [
                "id" => 20,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Bejaia", "zh" => "贝贾亚"]),
                "code" => "bja"
            ],
            [
                "id" => 21,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Bechar", "zh" => "贝沙尔"]),
                "code" => "bec"
            ],
            [
                "id" => 22,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "El Bayadh", "zh" => "贝伊德"]),
                "code" => "eba"
            ],
            [
                "id" => 23,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Biskra", "zh" => "比斯克拉"]),
                "code" => "bis"
            ],
            [
                "id" => 24,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Bordj Bou Arreridj", "zh" => "布尔吉·布阿雷里吉"]),
                "code" => "bor"
            ],
            [
                "id" => 25,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Blida", "zh" => "布利达"]),
                "code" => "bli"
            ],
            [
                "id" => 26,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Boumerdes", "zh" => "布迈德斯"]),
                "code" => "bou"
            ],
            [
                "id" => 27,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Bouira", "zh" => "布依拉"]),
                "code" => "boa"
            ],
            [
                "id" => 28,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Tipaza", "zh" => "蒂巴扎"]),
                "code" => "tip"
            ],
            [
                "id" => 29,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Tissemsilt", "zh" => "蒂斯姆西勒特"]),
                "code" => "tis"
            ],
            [
                "id" => 30,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Ghardaia", "zh" => "盖尔达耶"]),
                "code" => "gha"
            ],
            [
                "id" => 31,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Guelma", "zh" => "盖尔马"]),
                "code" => "gue"
            ],
            [
                "id" => 32,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Khenchela", "zh" => "罕西拉"]),
                "code" => "khe"
            ],
            [
                "id" => 33,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Relizane", "zh" => "赫利赞"]),
                "code" => "rel"
            ],
            [
                "id" => 34,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Jijel", "zh" => "吉杰尔"]),
                "code" => "jij"
            ],
            [
                "id" => 35,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Djelfa", "zh" => "杰勒法"]),
                "code" => "dje"
            ],
            [
                "id" => 36,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Constantine", "zh" => "君士坦丁"]),
                "code" => "czl"
            ],
            [
                "id" => 37,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Laghouat", "zh" => "拉格瓦特"]),
                "code" => "lag"
            ],
            [
                "id" => 38,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Mascara", "zh" => "马斯卡拉"]),
                "code" => "mua"
            ],
            [
                "id" => 39,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Medea", "zh" => "麦迪亚"]),
                "code" => "med"
            ],
            [
                "id" => 40,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Mila", "zh" => "密拉"]),
                "code" => "mil"
            ],
            [
                "id" => 41,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Mostaganem", "zh" => "莫斯塔加纳姆"]),
                "code" => "mos"
            ],
            [
                "id" => 42,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Msila", "zh" => "姆西拉"]),
                "code" => "msi"
            ],
            [
                "id" => 43,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Naama", "zh" => "纳阿马"]),
                "code" => "naa"
            ],
            [
                "id" => 44,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Setif", "zh" => "塞蒂夫"]),
                "code" => "set"
            ],
            [
                "id" => 45,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Saida", "zh" => "赛伊达"]),
                "code" => "sai"
            ],
            [
                "id" => 46,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Skikda", "zh" => "斯基克达"]),
                "code" => "ski"
            ],
            [
                "id" => 47,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Souk Ahras", "zh" => "苏克·阿赫拉斯"]),
                "code" => "sah"
            ],
            [
                "id" => 48,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "El Tarf", "zh" => "塔里夫"]),
                "code" => "eta"
            ],
            [
                "id" => 49,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Tamanghasset", "zh" => "塔曼拉塞特"]),
                "code" => "tam"
            ],
            [
                "id" => 50,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Tebessa", "zh" => "特贝萨"]),
                "code" => "teb"
            ],
            [
                "id" => 51,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Tlemcen", "zh" => "特莱姆森"]),
                "code" => "tle"
            ],
            [
                "id" => 52,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Tizi Ouzou", "zh" => "提济乌祖"]),
                "code" => "iou"
            ],
            [
                "id" => 53,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Tiaret", "zh" => "提亚雷特"]),
                "code" => "tia"
            ],
            [
                "id" => 54,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Tindouf", "zh" => "廷杜夫"]),
                "code" => "tin"
            ],
            [
                "id" => 55,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "El Oued", "zh" => "瓦德"]),
                "code" => "eou"
            ],
            [
                "id" => 56,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Ouargla", "zh" => "瓦尔格拉"]),
                "code" => "oua"
            ],
            [
                "id" => 57,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Oum el Bouaghi", "zh" => "乌姆布阿基"]),
                "code" => "oeb"
            ],
            [
                "id" => 58,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Sidi Bel Abbes", "zh" => "西迪贝勒阿贝斯"]),
                "code" => "sba"
            ],
            [
                "id" => 59,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Chlef", "zh" => "谢里夫"]),
                "code" => "chl"
            ],
            [
                "id" => 60,
                "country_id" => 51,
                "state_id" => null,
                "name" => json_encode(["en" => "Illizi", "zh" => "伊利齐"]),
                "code" => "ill"
            ],
            [
                "id" => 61,
                "country_id" => 70,
                "state_id" => null,
                "name" => json_encode(["en" => "Herat", "zh" => "赫拉特"]),
                "code" => "hea"
            ],
            [
                "id" => 62,
                "country_id" => 70,
                "state_id" => null,
                "name" => json_encode(["en" => "Kabul", "zh" => "喀布尔"]),
                "code" => "kbl"
            ],
            [
                "id" => 63,
                "country_id" => 70,
                "state_id" => null,
                "name" => json_encode(["en" => "Kandahar", "zh" => "坎大哈"]),
                "code" => "kdh"
            ],
            [
                "id" => 64,
                "country_id" => 70,
                "state_id" => null,
                "name" => json_encode(["en" => "Mazar-i Sharif", "zh" => "马扎里沙里夫"]),
                "code" => "mzr"
            ],
            [
                "id" => 65,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "Parana", "zh" => "巴拉那"]),
                "code" => "pra"
            ],
            [
                "id" => 66,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "Viedma", "zh" => "别德马"]),
                "code" => "vdm"
            ],
            [
                "id" => 67,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "Posadas", "zh" => "波萨达斯"]),
                "code" => "pss"
            ],
            [
                "id" => 68,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "Bahia Blanca", "zh" => "布兰卡港"]),
                "code" => "bhi"
            ],
            [
                "id" => 69,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "Buenos Aires", "zh" => "布宜诺斯艾利斯"]),
                "code" => "bue"
            ],
            [
                "id" => 70,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "Formosa", "zh" => "福莫萨"]),
                "code" => "fma"
            ],
            [
                "id" => 71,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "Jujuy", "zh" => "胡胡伊"]),
                "code" => "juj"
            ],
            [
                "id" => 72,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "Catamarca", "zh" => "卡塔马卡"]),
                "code" => "ctc"
            ],
            [
                "id" => 73,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "Cordoba", "zh" => "科尔多瓦"]),
                "code" => "cor"
            ],
            [
                "id" => 74,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "Corrientes", "zh" => "科连特斯"]),
                "code" => "cnq"
            ],
            [
                "id" => 75,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "Villa Krause", "zh" => "克劳斯城"]),
                "code" => "vlk"
            ],
            [
                "id" => 76,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "Concordia", "zh" => "肯考迪娅"]),
                "code" => "coc"
            ],
            [
                "id" => 77,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "La Rioja", "zh" => "拉里奥哈"]),
                "code" => "irj"
            ],
            [
                "id" => 78,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "La Plata", "zh" => "拉普拉塔"]),
                "code" => "lpg"
            ],
            [
                "id" => 79,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "Resistencia", "zh" => "雷西斯滕匹亚"]),
                "code" => "res"
            ],
            [
                "id" => 80,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "Rio Gallegos", "zh" => "里奥加耶戈斯"]),
                "code" => "rgl"
            ],
            [
                "id" => 81,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "Rio Cuarto", "zh" => "里奥夸尔托"]),
                "code" => "rcu"
            ],
            [
                "id" => 82,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "Comodoro Rivadavia", "zh" => "里瓦达维亚海军准将城"]),
                "code" => "crd"
            ],
            [
                "id" => 83,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "Rosario", "zh" => "罗萨里奥"]),
                "code" => "ros"
            ],
            [
                "id" => 84,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "Rawson", "zh" => "罗森"]),
                "code" => "rwo"
            ],
            [
                "id" => 85,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "Mar del Plata", "zh" => "马德普拉塔"]),
                "code" => "mdq"
            ],
            [
                "id" => 86,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "Mendoza", "zh" => "门多萨"]),
                "code" => "mdz"
            ],
            [
                "id" => 87,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "Neuquen", "zh" => "内乌肯"]),
                "code" => "nqn"
            ],
            [
                "id" => 88,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "Salta", "zh" => "萨尔塔"]),
                "code" => "sla"
            ],
            [
                "id" => 89,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "Santiago del Estero", "zh" => "圣地亚哥-德尔埃斯特罗"]),
                "code" => "sde"
            ],
            [
                "id" => 90,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "Santa Fe", "zh" => "圣菲"]),
                "code" => "sfn"
            ],
            [
                "id" => 91,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "San Juan", "zh" => "圣胡安"]),
                "code" => "uaq"
            ],
            [
                "id" => 92,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "San Rafael", "zh" => "圣拉斐尔"]),
                "code" => "afa"
            ],
            [
                "id" => 93,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "San Luis", "zh" => "圣路易斯"]),
                "code" => "luq"
            ],
            [
                "id" => 94,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "Santa Rosa", "zh" => "圣罗莎"]),
                "code" => "rsa"
            ],
            [
                "id" => 95,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "San Miguel de Tucuman", "zh" => "圣米格尔-德图库曼"]),
                "code" => "smc"
            ],
            [
                "id" => 96,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "San Nicolas", "zh" => "圣尼古拉斯"]),
                "code" => "sns"
            ],
            [
                "id" => 97,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "Trelew", "zh" => "特雷利乌"]),
                "code" => "rel"
            ],
            [
                "id" => 98,
                "country_id" => 208,
                "state_id" => null,
                "name" => json_encode(["en" => "Ushuaia", "zh" => "乌斯怀亚"]),
                "code" => "ush"
            ],
            [
                "id" => 99,
                "country_id" => 68,
                "state_id" => null,
                "name" => json_encode(["en" => "Abu Dhabi", "zh" => "阿布扎比"]),
                "code" => "az"
            ],
            [
                "id" => 100,
                "country_id" => 68,
                "state_id" => null,
                "name" => json_encode(["en" => "Al l'Ayn", "zh" => "艾因"]),
                "code" => "al"
            ],
            [
                "id" => 101,
                "country_id" => 68,
                "state_id" => null,
                "name" => json_encode(["en" => "Dubai", "zh" => "迪拜"]),
                "code" => "du"
            ],
            [
                "id" => 102,
                "country_id" => 68,
                "state_id" => null,
                "name" => json_encode(["en" => "Ash Shariqah", "zh" => "沙迦"]),
                "code" => "sh"
            ],
            [
                "id" => 103,
                "country_id" => 84,
                "state_id" => null,
                "name" => json_encode(["en" => "Al-Batinah", "zh" => "巴提奈地区"]),
                "code" => "ba"
            ],
            [
                "id" => 104,
                "country_id" => 84,
                "state_id" => null,
                "name" => json_encode(["en" => "Az-Zahirah", "zh" => "达希莱地区"]),
                "code" => "za"
            ],
            [
                "id" => 105,
                "country_id" => 84,
                "state_id" => null,
                "name" => json_encode(["en" => "Ash-Sharqiyah", "zh" => "东部地区"]),
                "code" => "sh"
            ],
            [
                "id" => 106,
                "country_id" => 84,
                "state_id" => null,
                "name" => json_encode(["en" => "Masqat", "zh" => "马斯喀特省"]),
                "code" => "ma"
            ],
            [
                "id" => 107,
                "country_id" => 84,
                "state_id" => null,
                "name" => json_encode(["en" => "Musandam", "zh" => "穆桑达姆省"]),
                "code" => "mu"
            ],
            [
                "id" => 108,
                "country_id" => 84,
                "state_id" => null,
                "name" => json_encode(["en" => "Ad-Dakhiliyah", "zh" => "内地地区"]),
                "code" => "da"
            ],
            [
                "id" => 109,
                "country_id" => 84,
                "state_id" => null,
                "name" => json_encode(["en" => "Al-Wusta", "zh" => "中部地区"]),
                "code" => "wu"
            ],
            [
                "id" => 110,
                "country_id" => 84,
                "state_id" => null,
                "name" => json_encode(["en" => "Zufar", "zh" => "佐法尔省"]),
                "code" => "zu"
            ],
            [
                "id" => 111,
                "country_id" => 117,
                "state_id" => null,
                "name" => json_encode(["en" => "Abseron", "zh" => "阿布歇隆"]),
                "code" => "abs"
            ],
            [
                "id" => 112,
                "country_id" => 117,
                "state_id" => null,
                "name" => json_encode(["en" => "Xacmaz", "zh" => "哈奇马斯"]),
                "code" => "xac"
            ],
            [
                "id" => 113,
                "country_id" => 117,
                "state_id" => null,
                "name" => json_encode(["en" => "Kalbacar", "zh" => "卡尔巴卡尔"]),
                "code" => "kal"
            ],
            [
                "id" => 114,
                "country_id" => 117,
                "state_id" => null,
                "name" => json_encode(["en" => "Qazax", "zh" => "卡扎赫"]),
                "code" => "qaz"
            ],
            [
                "id" => 115,
                "country_id" => 117,
                "state_id" => null,
                "name" => json_encode(["en" => "Lankaran", "zh" => "连科兰"]),
                "code" => "lan"
            ],
            [
                "id" => 116,
                "country_id" => 117,
                "state_id" => null,
                "name" => json_encode(["en" => "Mil-Qarabax", "zh" => "密尔-卡拉巴赫"]),
                "code" => "mqa"
            ],
            [
                "id" => 117,
                "country_id" => 117,
                "state_id" => null,
                "name" => json_encode(["en" => "Mugan-Salyan", "zh" => "穆甘-萨连"]),
                "code" => "msa"
            ],
            [
                "id" => 118,
                "country_id" => 117,
                "state_id" => null,
                "name" => json_encode(["en" => "Nagorni-Qarabax", "zh" => "纳戈尔诺－卡拉巴赫"]),
                "code" => "nqa"
            ],
            [
                "id" => 119,
                "country_id" => 117,
                "state_id" => null,
                "name" => json_encode(["en" => "Naxcivan", "zh" => "纳希切万"]),
                "code" => "nx"
            ],
            [
                "id" => 120,
                "country_id" => 117,
                "state_id" => null,
                "name" => json_encode(["en" => "Priaraks", "zh" => "普利亚拉克斯"]),
                "code" => "pri"
            ],
            [
                "id" => 121,
                "country_id" => 117,
                "state_id" => null,
                "name" => json_encode(["en" => "Saki", "zh" => "舍基"]),
                "code" => "sa"
            ],
            [
                "id" => 122,
                "country_id" => 117,
                "state_id" => null,
                "name" => json_encode(["en" => "Sumqayit", "zh" => "苏姆盖特"]),
                "code" => "smc"
            ],
            [
                "id" => 123,
                "country_id" => 117,
                "state_id" => null,
                "name" => json_encode(["en" => "Sirvan", "zh" => "锡尔万"]),
                "code" => "sir"
            ],
            [
                "id" => 124,
                "country_id" => 117,
                "state_id" => null,
                "name" => json_encode(["en" => "Ganca", "zh" => "占贾"]),
                "code" => "ga"
            ],
            [
                "id" => 125,
                "country_id" => 7,
                "state_id" => null,
                "name" => json_encode(["en" => "Aswan", "zh" => "阿斯旺"]),
                "code" => "asw"
            ],
            [
                "id" => 126,
                "country_id" => 7,
                "state_id" => null,
                "name" => json_encode(["en" => "Al Ghurdaqah", "zh" => "古尔代盖"]),
                "code" => "gby"
            ],
            [
                "id" => 127,
                "country_id" => 7,
                "state_id" => null,
                "name" => json_encode(["en" => "Cairo", "zh" => "开罗"]),
                "code" => "cai"
            ],
            [
                "id" => 128,
                "country_id" => 7,
                "state_id" => null,
                "name" => json_encode(["en" => "Shubra al Khaymah", "zh" => "苏布拉开马"]),
                "code" => "skh"
            ],
            [
                "id" => 129,
                "country_id" => 7,
                "state_id" => null,
                "name" => json_encode(["en" => "Alexandria", "zh" => "亚历山大"]),
                "code" => "aly"
            ],
            [
                "id" => 130,
                "country_id" => 45,
                "state_id" => null,
                "name" => json_encode(["en" => "Afar", "zh" => "阿法尔"]),
                "code" => "af"
            ],
            [
                "id" => 131,
                "country_id" => 45,
                "state_id" => null,
                "name" => json_encode(["en" => "Amara", "zh" => "阿姆哈拉"]),
                "code" => "ah"
            ],
            [
                "id" => 132,
                "country_id" => 45,
                "state_id" => null,
                "name" => json_encode(["en" => "Oromiya", "zh" => "奥罗米亚"]),
                "code" => "or"
            ],
            [
                "id" => 133,
                "country_id" => 45,
                "state_id" => null,
                "name" => json_encode(["en" => "Binshangul Gumuz", "zh" => "宾香古尔"]),
                "code" => "bg"
            ],
            [
                "id" => 134,
                "country_id" => 45,
                "state_id" => null,
                "name" => json_encode(["en" => "Dire Dawa", "zh" => "德雷达瓦"]),
                "code" => "dd"
            ],
            [
                "id" => 135,
                "country_id" => 45,
                "state_id" => null,
                "name" => json_encode(["en" => "Gambela Hizboch", "zh" => "甘贝拉各族"]),
                "code" => "gb"
            ],
            [
                "id" => 136,
                "country_id" => 45,
                "state_id" => null,
                "name" => json_encode(["en" => "Hareri  Hizb", "zh" => "哈勒里民族"]),
                "code" => "hr"
            ],
            [
                "id" => 137,
                "country_id" => 45,
                "state_id" => null,
                "name" => json_encode(["en" => "YeDebub Biheroch", "zh" => "南方各族"]),
                "code" => "sn"
            ],
            [
                "id" => 138,
                "country_id" => 45,
                "state_id" => null,
                "name" => json_encode(["en" => "Sumale", "zh" => "索马里"]),
                "code" => "sm"
            ],
            [
                "id" => 139,
                "country_id" => 45,
                "state_id" => null,
                "name" => json_encode(["en" => "Tigray", "zh" => "提格雷"]),
                "code" => "tg"
            ],
            [
                "id" => 140,
                "country_id" => 45,
                "state_id" => null,
                "name" => json_encode(["en" => "Adis abeba", "zh" => "亚的斯亚贝巴"]),
                "code" => "aa"
            ],
            [
                "id" => 141,
                "country_id" => 144,
                "state_id" => null,
                "name" => json_encode(["en" => "Offaly", "zh" => "奥法利"]),
                "code" => "of"
            ],
            [
                "id" => 142,
                "country_id" => 144,
                "state_id" => null,
                "name" => json_encode(["en" => "Tipperary", "zh" => "蒂珀雷里"]),
                "code" => "tp"
            ],
            [
                "id" => 143,
                "country_id" => 144,
                "state_id" => null,
                "name" => json_encode(["en" => "Dublin", "zh" => "都柏林"]),
                "code" => "db"
            ],
            [
                "id" => 144,
                "country_id" => 144,
                "state_id" => null,
                "name" => json_encode(["en" => "Donegal", "zh" => "多内加尔"]),
                "code" => "dg"
            ],
            [
                "id" => 145,
                "country_id" => 144,
                "state_id" => null,
                "name" => json_encode(["en" => "Galway", "zh" => "戈尔韦"]),
                "code" => "gw"
            ],
            [
                "id" => 146,
                "country_id" => 144,
                "state_id" => null,
                "name" => json_encode(["en" => "Kildare", "zh" => "基尔代尔"]),
                "code" => "kd"
            ],
            [
                "id" => 147,
                "country_id" => 144,
                "state_id" => null,
                "name" => json_encode(["en" => "Kilkenny", "zh" => "基尔肯尼"]),
                "code" => "kk"
            ],
            [
                "id" => 148,
                "country_id" => 144,
                "state_id" => null,
                "name" => json_encode(["en" => "Cavan", "zh" => "卡范"]),
                "code" => "cv"
            ],
            [
                "id" => 149,
                "country_id" => 144,
                "state_id" => null,
                "name" => json_encode(["en" => "Carlow", "zh" => "卡洛"]),
                "code" => "cw"
            ],
            [
                "id" => 150,
                "country_id" => 144,
                "state_id" => null,
                "name" => json_encode(["en" => "Kerry", "zh" => "凯里"]),
                "code" => "kr"
            ],
            [
                "id" => 151,
                "country_id" => 144,
                "state_id" => null,
                "name" => json_encode(["en" => "Cork", "zh" => "科克"]),
                "code" => "ck"
            ],
            [
                "id" => 152,
                "country_id" => 144,
                "state_id" => null,
                "name" => json_encode(["en" => "Clare", "zh" => "克莱尔"]),
                "code" => "cl"
            ],
            [
                "id" => 153,
                "country_id" => 144,
                "state_id" => null,
                "name" => json_encode(["en" => "Longford", "zh" => "朗福德"]),
                "code" => "lf"
            ],
            [
                "id" => 154,
                "country_id" => 144,
                "state_id" => null,
                "name" => json_encode(["en" => "Louth", "zh" => "劳斯"]),
                "code" => "lt"
            ],
            [
                "id" => 155,
                "country_id" => 144,
                "state_id" => null,
                "name" => json_encode(["en" => "Laois", "zh" => "崂斯"]),
                "code" => "la"
            ],
            [
                "id" => 156,
                "country_id" => 144,
                "state_id" => null,
                "name" => json_encode(["en" => "Limerick", "zh" => "利默里克"]),
                "code" => "lm"
            ],
            [
                "id" => 157,
                "country_id" => 144,
                "state_id" => null,
                "name" => json_encode(["en" => "Leitrim", "zh" => "利特里姆"]),
                "code" => "lr"
            ],
            [
                "id" => 158,
                "country_id" => 144,
                "state_id" => null,
                "name" => json_encode(["en" => "Roscommon", "zh" => "罗斯康芒"]),
                "code" => "rc"
            ],
            [
                "id" => 159,
                "country_id" => 144,
                "state_id" => null,
                "name" => json_encode(["en" => "Mayo", "zh" => "梅奥"]),
                "code" => "my"
            ],
            [
                "id" => 160,
                "country_id" => 144,
                "state_id" => null,
                "name" => json_encode(["en" => "Meath", "zh" => "米斯"]),
                "code" => "mt"
            ],
            [
                "id" => 161,
                "country_id" => 144,
                "state_id" => null,
                "name" => json_encode(["en" => "Monaghan", "zh" => "莫内根"]),
                "code" => "mg"
            ],
            [
                "id" => 162,
                "country_id" => 144,
                "state_id" => null,
                "name" => json_encode(["en" => "Sligo", "zh" => "斯莱戈"]),
                "code" => "sl"
            ],
            [
                "id" => 163,
                "country_id" => 144,
                "state_id" => null,
                "name" => json_encode(["en" => "Wicklow", "zh" => "威克洛"]),
                "code" => "wk"
            ],
            [
                "id" => 164,
                "country_id" => 144,
                "state_id" => null,
                "name" => json_encode(["en" => "Wexford", "zh" => "韦克斯福德"]),
                "code" => "wx"
            ],
            [
                "id" => 165,
                "country_id" => 144,
                "state_id" => null,
                "name" => json_encode(["en" => "Waterford", "zh" => "沃特福德"]),
                "code" => "wf"
            ],
            [
                "id" => 166,
                "country_id" => 144,
                "state_id" => null,
                "name" => json_encode(["en" => "Westmeath", "zh" => "西米斯"]),
                "code" => "wm"
            ],
            [
                "id" => 167,
                "country_id" => 130,
                "state_id" => null,
                "name" => json_encode(["en" => "Polva", "zh" => "贝尔瓦"]),
                "code" => "65"
            ],
            [
                "id" => 168,
                "country_id" => 130,
                "state_id" => null,
                "name" => json_encode(["en" => "Harju", "zh" => "哈留"]),
                "code" => "37"
            ],
            [
                "id" => 169,
                "country_id" => 130,
                "state_id" => null,
                "name" => json_encode(["en" => "Rapla", "zh" => "拉普拉"]),
                "code" => "70"
            ],
            [
                "id" => 170,
                "country_id" => 130,
                "state_id" => null,
                "name" => json_encode(["en" => "Laane", "zh" => "里亚内"]),
                "code" => "57"
            ],
            [
                "id" => 171,
                "country_id" => 130,
                "state_id" => null,
                "name" => json_encode(["en" => "Parnu", "zh" => "帕尔努"]),
                "code" => "67"
            ],
            [
                "id" => 172,
                "country_id" => 130,
                "state_id" => null,
                "name" => json_encode(["en" => "Saare", "zh" => "萨雷"]),
                "code" => "74"
            ],
            [
                "id" => 173,
                "country_id" => 130,
                "state_id" => null,
                "name" => json_encode(["en" => "Tartu", "zh" => "塔尔图"]),
                "code" => "78"
            ],
            [
                "id" => 174,
                "country_id" => 130,
                "state_id" => null,
                "name" => json_encode(["en" => "Valga", "zh" => "瓦尔加"]),
                "code" => "82"
            ],
            [
                "id" => 175,
                "country_id" => 130,
                "state_id" => null,
                "name" => json_encode(["en" => "Viljandi", "zh" => "维良地"]),
                "code" => "84"
            ],
            [
                "id" => 176,
                "country_id" => 130,
                "state_id" => null,
                "name" => json_encode(["en" => "Laane-Viru", "zh" => "维鲁"]),
                "code" => "59"
            ],
            [
                "id" => 177,
                "country_id" => 130,
                "state_id" => null,
                "name" => json_encode(["en" => "Voru", "zh" => "沃鲁"]),
                "code" => "86"
            ],
            [
                "id" => 178,
                "country_id" => 130,
                "state_id" => null,
                "name" => json_encode(["en" => "Hiiu", "zh" => "希尤"]),
                "code" => "39"
            ],
            [
                "id" => 179,
                "country_id" => 130,
                "state_id" => null,
                "name" => json_encode(["en" => "Jarva", "zh" => "耶尔韦"]),
                "code" => "51"
            ],
            [
                "id" => 180,
                "country_id" => 130,
                "state_id" => null,
                "name" => json_encode(["en" => "Jogeva", "zh" => "耶盖瓦"]),
                "code" => "49"
            ],
            [
                "id" => 181,
                "country_id" => 130,
                "state_id" => null,
                "name" => json_encode(["en" => "Ida-Viru", "zh" => "依达－维鲁"]),
                "code" => "44"
            ],
            [
                "id" => 182,
                "country_id" => 157,
                "state_id" => null,
                "name" => json_encode(["en" => "Andorra la Vella", "zh" => "安道尔城"]),
                "code" => "7"
            ],
            [
                "id" => 183,
                "country_id" => 157,
                "state_id" => null,
                "name" => json_encode(["en" => "Ordino", "zh" => "奥尔迪诺"]),
                "code" => "5"
            ],
            [
                "id" => 184,
                "country_id" => 157,
                "state_id" => null,
                "name" => json_encode(["en" => "Encamp", "zh" => "恩坎普"]),
                "code" => "3"
            ],
            [
                "id" => 185,
                "country_id" => 157,
                "state_id" => null,
                "name" => json_encode(["en" => "Canillo", "zh" => "卡尼略"]),
                "code" => "2"
            ],
            [
                "id" => 186,
                "country_id" => 157,
                "state_id" => null,
                "name" => json_encode(["en" => "Escaldes-Engordany", "zh" => "莱塞斯卡尔德－恩戈尔达"]),
                "code" => "8"
            ],
            [
                "id" => 187,
                "country_id" => 157,
                "state_id" => null,
                "name" => json_encode(["en" => "La Massana", "zh" => "马萨纳"]),
                "code" => "4"
            ],
            [
                "id" => 188,
                "country_id" => 157,
                "state_id" => null,
                "name" => json_encode(["en" => "Sant Julia de Laria", "zh" => "圣胡利娅－德洛里亚"]),
                "code" => "6"
            ],
            [
                "id" => 189,
                "country_id" => 12,
                "state_id" => null,
                "name" => json_encode(["en" => "Cuanza Norte", "zh" => "北宽扎"]),
                "code" => "cno"
            ],
            [
                "id" => 190,
                "country_id" => 12,
                "state_id" => null,
                "name" => json_encode(["en" => "Lunda Norte", "zh" => "北隆达"]),
                "code" => "lno"
            ],
            [
                "id" => 191,
                "country_id" => 12,
                "state_id" => null,
                "name" => json_encode(["en" => "Bengo", "zh" => "本戈"]),
                "code" => "bgo"
            ],
            [
                "id" => 192,
                "country_id" => 12,
                "state_id" => null,
                "name" => json_encode(["en" => "Benguela", "zh" => "本格拉"]),
                "code" => "bgu"
            ],
            [
                "id" => 193,
                "country_id" => 12,
                "state_id" => null,
                "name" => json_encode(["en" => "Bie", "zh" => "比耶"]),
                "code" => "bie"
            ],
            [
                "id" => 194,
                "country_id" => 12,
                "state_id" => null,
                "name" => json_encode(["en" => "Cabinda", "zh" => "卡宾达"]),
                "code" => "cab"
            ],
            [
                "id" => 195,
                "country_id" => 12,
                "state_id" => null,
                "name" => json_encode(["en" => "Cunene", "zh" => "库内内"]),
                "code" => "cnn"
            ],
            [
                "id" => 196,
                "country_id" => 12,
                "state_id" => null,
                "name" => json_encode(["en" => "Cuando Cubango", "zh" => "宽多库邦戈"]),
                "code" => "ccu"
            ],
            [
                "id" => 197,
                "country_id" => 12,
                "state_id" => null,
                "name" => json_encode(["en" => "Luanda", "zh" => "罗安达"]),
                "code" => "lua"
            ],
            [
                "id" => 198,
                "country_id" => 12,
                "state_id" => null,
                "name" => json_encode(["en" => "Malanje", "zh" => "马兰热"]),
                "code" => "mal"
            ],
            [
                "id" => 199,
                "country_id" => 12,
                "state_id" => null,
                "name" => json_encode(["en" => "Moxico", "zh" => "莫希科"]),
                "code" => "mox"
            ],
            [
                "id" => 200,
                "country_id" => 12,
                "state_id" => null,
                "name" => json_encode(["en" => "Namibe", "zh" => "纳米贝"]),
                "code" => "nam"
            ],
            [
                "id" => 201,
                "country_id" => 12,
                "state_id" => null,
                "name" => json_encode(["en" => "Cuanza Sul", "zh" => "南宽扎"]),
                "code" => "cus"
            ],
            [
                "id" => 202,
                "country_id" => 12,
                "state_id" => null,
                "name" => json_encode(["en" => "Lunda Sul", "zh" => "南隆达"]),
                "code" => "lsu"
            ],
            [
                "id" => 203,
                "country_id" => 12,
                "state_id" => null,
                "name" => json_encode(["en" => "Huambo", "zh" => "万博"]),
                "code" => "hua"
            ],
            [
                "id" => 204,
                "country_id" => 12,
                "state_id" => null,
                "name" => json_encode(["en" => "Huila", "zh" => "威拉"]),
                "code" => "hui"
            ],
            [
                "id" => 205,
                "country_id" => 12,
                "state_id" => null,
                "name" => json_encode(["en" => "Uige", "zh" => "威热"]),
                "code" => "uig"
            ],
            [
                "id" => 206,
                "country_id" => 12,
                "state_id" => null,
                "name" => json_encode(["en" => "Zaire", "zh" => "扎伊尔"]),
                "code" => "zai"
            ],
            [
                "id" => 207,
                "country_id" => 160,
                "state_id" => null,
                "name" => json_encode(["en" => "Burgenland", "zh" => "布尔根兰"]),
                "code" => "bur"
            ],
            [
                "id" => 208,
                "country_id" => 160,
                "state_id" => null,
                "name" => json_encode(["en" => "Tyrol", "zh" => "蒂罗尔"]),
                "code" => "tyr"
            ],
            [
                "id" => 209,
                "country_id" => 160,
                "state_id" => null,
                "name" => json_encode(["en" => "Vorarlberg", "zh" => "福拉尔贝格"]),
                "code" => "vor"
            ],
            [
                "id" => 210,
                "country_id" => 160,
                "state_id" => null,
                "name" => json_encode(["en" => "Carinthia", "zh" => "克恩顿"]),
                "code" => "cat"
            ],
            [
                "id" => 211,
                "country_id" => 160,
                "state_id" => null,
                "name" => json_encode(["en" => "Salzburg", "zh" => "萨尔茨堡"]),
                "code" => "szg"
            ],
            [
                "id" => 212,
                "country_id" => 160,
                "state_id" => null,
                "name" => json_encode(["en" => "Upper Austria", "zh" => "上奥地利"]),
                "code" => "uau"
            ],
            [
                "id" => 213,
                "country_id" => 160,
                "state_id" => null,
                "name" => json_encode(["en" => "Styria", "zh" => "施蒂利亚"]),
                "code" => "sty"
            ],
            [
                "id" => 214,
                "country_id" => 160,
                "state_id" => null,
                "name" => json_encode(["en" => "Vienna", "zh" => "维也纳"]),
                "code" => "vdd"
            ],
            [
                "id" => 215,
                "country_id" => 160,
                "state_id" => null,
                "name" => json_encode(["en" => "Lower Austria", "zh" => "下奥地利"]),
                "code" => "lau"
            ],
            [
                "id" => 216,
                "country_id" => 184,
                "state_id" => null,
                "name" => json_encode(["en" => "Northern", "zh" => "北部"]),
                "code" => "no"
            ],
            [
                "id" => 217,
                "country_id" => 184,
                "state_id" => null,
                "name" => json_encode(["en" => "Bougainville", "zh" => "布干维尔"]),
                "code" => "bv"
            ],
            [
                "id" => 218,
                "country_id" => 184,
                "state_id" => null,
                "name" => json_encode(["en" => "Eastern Highlands", "zh" => "东部高地"]),
                "code" => "eh"
            ],
            [
                "id" => 219,
                "country_id" => 184,
                "state_id" => null,
                "name" => json_encode(["en" => "East Sepik", "zh" => "东塞皮克"]),
                "code" => "es"
            ],
            [
                "id" => 220,
                "country_id" => 184,
                "state_id" => null,
                "name" => json_encode(["en" => "East New Britain", "zh" => "东新不列颠"]),
                "code" => "eb"
            ],
            [
                "id" => 221,
                "country_id" => 184,
                "state_id" => null,
                "name" => json_encode(["en" => "Enga", "zh" => "恩加"]),
                "code" => "en"
            ],
            [
                "id" => 222,
                "country_id" => 184,
                "state_id" => null,
                "name" => json_encode(["en" => "Gulf", "zh" => "海湾"]),
                "code" => "gu"
            ],
            [
                "id" => 223,
                "country_id" => 184,
                "state_id" => null,
                "name" => json_encode(["en" => "Madang", "zh" => "马当"]),
                "code" => "md"
            ],
            [
                "id" => 224,
                "country_id" => 184,
                "state_id" => null,
                "name" => json_encode(["en" => "Manus", "zh" => "马努斯"]),
                "code" => "mn"
            ],
            [
                "id" => 225,
                "country_id" => 184,
                "state_id" => null,
                "name" => json_encode(["en" => "Milne Bay", "zh" => "米尔恩湾"]),
                "code" => "mb"
            ],
            [
                "id" => 226,
                "country_id" => 184,
                "state_id" => null,
                "name" => json_encode(["en" => "Port Moresby", "zh" => "莫尔兹比港"]),
                "code" => "nc"
            ],
            [
                "id" => 227,
                "country_id" => 184,
                "state_id" => null,
                "name" => json_encode(["en" => "Morobe", "zh" => "莫罗贝"]),
                "code" => "mr"
            ],
            [
                "id" => 228,
                "country_id" => 184,
                "state_id" => null,
                "name" => json_encode(["en" => "Southern Highlands", "zh" => "南部高地"]),
                "code" => "sh"
            ],
            [
                "id" => 229,
                "country_id" => 184,
                "state_id" => null,
                "name" => json_encode(["en" => "Simbu", "zh" => "钦布"]),
                "code" => "si"
            ],
            [
                "id" => 230,
                "country_id" => 184,
                "state_id" => null,
                "name" => json_encode(["en" => "Sandaun", "zh" => "桑道恩"]),
                "code" => "sa"
            ],
            [
                "id" => 231,
                "country_id" => 184,
                "state_id" => null,
                "name" => json_encode(["en" => "Western", "zh" => "西部"]),
                "code" => "we"
            ],
            [
                "id" => 232,
                "country_id" => 184,
                "state_id" => null,
                "name" => json_encode(["en" => "Western Highlands", "zh" => "西部高地"]),
                "code" => "wh"
            ],
            [
                "id" => 233,
                "country_id" => 184,
                "state_id" => null,
                "name" => json_encode(["en" => "West New Britain", "zh" => "西新不列颠"]),
                "code" => "wb"
            ],
            [
                "id" => 234,
                "country_id" => 184,
                "state_id" => null,
                "name" => json_encode(["en" => "New Ireland", "zh" => "新爱尔兰"]),
                "code" => "ni"
            ],
            [
                "id" => 235,
                "country_id" => 92,
                "state_id" => null,
                "name" => json_encode(["en" => "Peshawar", "zh" => "白沙瓦"]),
                "code" => "pew"
            ],
            [
                "id" => 236,
                "country_id" => 92,
                "state_id" => null,
                "name" => json_encode(["en" => "Faisalabad", "zh" => "费萨拉巴德"]),
                "code" => "lyp"
            ],
            [
                "id" => 237,
                "country_id" => 92,
                "state_id" => null,
                "name" => json_encode(["en" => "Gujranwala", "zh" => "故吉软瓦拉"]),
                "code" => "guj"
            ],
            [
                "id" => 238,
                "country_id" => 92,
                "state_id" => null,
                "name" => json_encode(["en" => "Hyderabad", "zh" => "海德拉巴"]),
                "code" => "hdd"
            ],
            [
                "id" => 239,
                "country_id" => 92,
                "state_id" => null,
                "name" => json_encode(["en" => "Karachi", "zh" => "卡拉奇"]),
                "code" => "kct"
            ],
            [
                "id" => 240,
                "country_id" => 92,
                "state_id" => null,
                "name" => json_encode(["en" => "Lahore", "zh" => "拉合尔"]),
                "code" => "lhe"
            ],
            [
                "id" => 241,
                "country_id" => 92,
                "state_id" => null,
                "name" => json_encode(["en" => "Rawalpindi", "zh" => "拉瓦尔品第"]),
                "code" => "rwp"
            ],
            [
                "id" => 242,
                "country_id" => 92,
                "state_id" => null,
                "name" => json_encode(["en" => "Multan", "zh" => "木尔坦"]),
                "code" => "mux"
            ],
            [
                "id" => 243,
                "country_id" => 92,
                "state_id" => null,
                "name" => json_encode(["en" => "Islamabad", "zh" => "伊斯兰堡"]),
                "code" => "isb"
            ],
            [
                "id" => 244,
                "country_id" => 189,
                "state_id" => null,
                "name" => json_encode(["en" => "Amambay", "zh" => "阿曼拜"]),
                "code" => "am"
            ],
            [
                "id" => 245,
                "country_id" => 189,
                "state_id" => null,
                "name" => json_encode(["en" => "Presidente Hayes", "zh" => "阿耶斯总统省"]),
                "code" => "ph"
            ],
            [
                "id" => 246,
                "country_id" => 189,
                "state_id" => null,
                "name" => json_encode(["en" => "Paraguari", "zh" => "巴拉瓜里"]),
                "code" => "pa"
            ],
            [
                "id" => 247,
                "country_id" => 189,
                "state_id" => null,
                "name" => json_encode(["en" => "Boqueron", "zh" => "博克龙"]),
                "code" => "bo"
            ],
            [
                "id" => 248,
                "country_id" => 189,
                "state_id" => null,
                "name" => json_encode(["en" => "Guaira", "zh" => "瓜伊拉"]),
                "code" => "gu"
            ],
            [
                "id" => 249,
                "country_id" => 189,
                "state_id" => null,
                "name" => json_encode(["en" => "Caaguazu", "zh" => "卡瓜苏"]),
                "code" => "cg"
            ],
            [
                "id" => 250,
                "country_id" => 189,
                "state_id" => null,
                "name" => json_encode(["en" => "Canindeyu", "zh" => "卡嫩迪尤"]),
                "code" => "cn"
            ],
            [
                "id" => 251,
                "country_id" => 189,
                "state_id" => null,
                "name" => json_encode(["en" => "Caazapa", "zh" => "卡萨帕"]),
                "code" => "cz"
            ],
            [
                "id" => 252,
                "country_id" => 189,
                "state_id" => null,
                "name" => json_encode(["en" => "Concepcion", "zh" => "康塞普西翁"]),
                "code" => "cc"
            ],
            [
                "id" => 253,
                "country_id" => 189,
                "state_id" => null,
                "name" => json_encode(["en" => "Cordillera", "zh" => "科迪勒拉"]),
                "code" => "cd"
            ],
            [
                "id" => 254,
                "country_id" => 189,
                "state_id" => null,
                "name" => json_encode(["en" => "Misiones", "zh" => "米西奥内斯"]),
                "code" => "mi"
            ],
            [
                "id" => 255,
                "country_id" => 189,
                "state_id" => null,
                "name" => json_encode(["en" => "Neembucu", "zh" => "涅恩布库"]),
                "code" => "ne"
            ],
            [
                "id" => 256,
                "country_id" => 189,
                "state_id" => null,
                "name" => json_encode(["en" => "Alto Paraguay", "zh" => "上巴拉圭"]),
                "code" => "ag"
            ],
            [
                "id" => 257,
                "country_id" => 189,
                "state_id" => null,
                "name" => json_encode(["en" => "Alto Parana", "zh" => "上巴拉那"]),
                "code" => "an"
            ],
            [
                "id" => 258,
                "country_id" => 189,
                "state_id" => null,
                "name" => json_encode(["en" => "San Pedro", "zh" => "圣佩德罗"]),
                "code" => "sp"
            ],
            [
                "id" => 259,
                "country_id" => 189,
                "state_id" => null,
                "name" => json_encode(["en" => "Asuncion", "zh" => "亚松森特别区"]),
                "code" => "as"
            ],
            [
                "id" => 260,
                "country_id" => 189,
                "state_id" => null,
                "name" => json_encode(["en" => "Itapua", "zh" => "伊塔普亚"]),
                "code" => "it"
            ],
            [
                "id" => 261,
                "country_id" => 189,
                "state_id" => null,
                "name" => json_encode(["en" => "Central", "zh" => "中央"]),
                "code" => "ce"
            ],
            [
                "id" => 262,
                "country_id" => 74,
                "state_id" => null,
                "name" => json_encode(["en" => "Gaza Strip", "zh" => "加沙地带"]),
                "code" => "gz"
            ],
            [
                "id" => 263,
                "country_id" => 74,
                "state_id" => null,
                "name" => json_encode(["en" => "West Bank", "zh" => "西岸"]),
                "code" => "we"
            ],
            [
                "id" => 264,
                "country_id" => 61,
                "state_id" => null,
                "name" => json_encode(["en" => "Ash-Shamaliyah", "zh" => "北部"]),
                "code" => "5"
            ],
            [
                "id" => 265,
                "country_id" => 61,
                "state_id" => null,
                "name" => json_encode(["en" => "Al-Hadd", "zh" => "哈德"]),
                "code" => "1"
            ],
            [
                "id" => 266,
                "country_id" => 61,
                "state_id" => null,
                "name" => json_encode(["en" => "Hammad", "zh" => "哈马德"]),
                "code" => "12"
            ],
            [
                "id" => 267,
                "country_id" => 61,
                "state_id" => null,
                "name" => json_encode(["en" => "Ar-Rifa", "zh" => "里法"]),
                "code" => "9"
            ],
            [
                "id" => 268,
                "country_id" => 61,
                "state_id" => null,
                "name" => json_encode(["en" => "Al-Manamah", "zh" => "麦纳麦"]),
                "code" => "3"
            ],
            [
                "id" => 269,
                "country_id" => 61,
                "state_id" => null,
                "name" => json_encode(["en" => "Al-Muharraq", "zh" => "穆哈拉格"]),
                "code" => "2"
            ],
            [
                "id" => 270,
                "country_id" => 61,
                "state_id" => null,
                "name" => json_encode(["en" => "Al-Gharbiyah", "zh" => "西部"]),
                "code" => "10"
            ],
            [
                "id" => 271,
                "country_id" => 61,
                "state_id" => null,
                "name" => json_encode(["en" => "Isa", "zh" => "伊萨城"]),
                "code" => "8"
            ],
            [
                "id" => 272,
                "country_id" => 61,
                "state_id" => null,
                "name" => json_encode(["en" => "Al-Wusta", "zh" => "中部"]),
                "code" => "7"
            ],
            [
                "id" => 273,
                "country_id" => 211,
                "state_id" => null,
                "name" => json_encode(["en" => "Acre", "zh" => "阿克里"]),
                "code" => "ac"
            ],
            [
                "id" => 274,
                "country_id" => 211,
                "state_id" => null,
                "name" => json_encode(["en" => "Alagoas", "zh" => "阿拉戈斯"]),
                "code" => "al"
            ],
            [
                "id" => 275,
                "country_id" => 211,
                "state_id" => null,
                "name" => json_encode(["en" => "Amapa", "zh" => "阿马帕"]),
                "code" => "ap"
            ],
            [
                "id" => 276,
                "country_id" => 211,
                "state_id" => null,
                "name" => json_encode(["en" => "Parana", "zh" => "巴拉那"]),
                "code" => "pr"
            ],
            [
                "id" => 277,
                "country_id" => 211,
                "state_id" => null,
                "name" => json_encode(["en" => "Brasilia", "zh" => "巴西利亚"]),
                "code" => "bsb"
            ],
            [
                "id" => 278,
                "country_id" => 211,
                "state_id" => null,
                "name" => json_encode(["en" => "Bahia", "zh" => "巴伊亚"]),
                "code" => "ba"
            ],
            [
                "id" => 279,
                "country_id" => 211,
                "state_id" => null,
                "name" => json_encode(["en" => "Rio Grande do Norte", "zh" => "北里奥格兰德"]),
                "code" => "rn"
            ],
            [
                "id" => 280,
                "country_id" => 211,
                "state_id" => null,
                "name" => json_encode(["en" => "Pernambuco", "zh" => "伯南布哥"]),
                "code" => "pe"
            ],
            [
                "id" => 281,
                "country_id" => 211,
                "state_id" => null,
                "name" => json_encode(["en" => "Goias", "zh" => "戈亚斯"]),
                "code" => "go"
            ],
            [
                "id" => 282,
                "country_id" => 211,
                "state_id" => null,
                "name" => json_encode(["en" => "Rondonia", "zh" => "朗多尼亚"]),
                "code" => "ro"
            ],
            [
                "id" => 283,
                "country_id" => 211,
                "state_id" => null,
                "name" => json_encode(["en" => "Rio de Janeiro", "zh" => "里约热内卢"]),
                "code" => "rj"
            ],
            [
                "id" => 284,
                "country_id" => 211,
                "state_id" => null,
                "name" => json_encode(["en" => "Roraima", "zh" => "罗赖马"]),
                "code" => "rr"
            ],
            [
                "id" => 285,
                "country_id" => 211,
                "state_id" => null,
                "name" => json_encode(["en" => "Maranhao", "zh" => "马拉尼昂"]),
                "code" => "ma"
            ],
            [
                "id" => 286,
                "country_id" => 211,
                "state_id" => null,
                "name" => json_encode(["en" => "Mato Grosso", "zh" => "马托格罗索"]),
                "code" => "mt"
            ],
            [
                "id" => 287,
                "country_id" => 211,
                "state_id" => null,
                "name" => json_encode(["en" => "Minas Gerais", "zh" => "米纳斯吉拉斯"]),
                "code" => "mg"
            ],
            [
                "id" => 288,
                "country_id" => 211,
                "state_id" => null,
                "name" => json_encode(["en" => "Rio Grande do Sul", "zh" => "南里奥格兰德"]),
                "code" => "rs"
            ],
            [
                "id" => 289,
                "country_id" => 211,
                "state_id" => null,
                "name" => json_encode(["en" => "Mato Grosso do Sul", "zh" => "南马托格罗索"]),
                "code" => "ms"
            ],
            [
                "id" => 290,
                "country_id" => 211,
                "state_id" => null,
                "name" => json_encode(["en" => "Para", "zh" => "帕拉"]),
                "code" => "pa"
            ],
            [
                "id" => 291,
                "country_id" => 211,
                "state_id" => null,
                "name" => json_encode(["en" => "Paraiba", "zh" => "帕拉伊巴"]),
                "code" => "pb"
            ],
            [
                "id" => 292,
                "country_id" => 211,
                "state_id" => null,
                "name" => json_encode(["en" => "Piaui", "zh" => "皮奥伊"]),
                "code" => "pi"
            ],
            [
                "id" => 293,
                "country_id" => 211,
                "state_id" => null,
                "name" => json_encode(["en" => "Ceara", "zh" => "塞阿拉"]),
                "code" => "ce"
            ],
            [
                "id" => 294,
                "country_id" => 211,
                "state_id" => null,
                "name" => json_encode(["en" => "Sergipe", "zh" => "塞尔希培"]),
                "code" => "se"
            ],
            [
                "id" => 295,
                "country_id" => 211,
                "state_id" => null,
                "name" => json_encode(["en" => "Espirito Santo", "zh" => "圣埃斯皮里图"]),
                "code" => "es"
            ],
            [
                "id" => 296,
                "country_id" => 211,
                "state_id" => null,
                "name" => json_encode(["en" => "Sao Paulo", "zh" => "圣保罗"]),
                "code" => "sp"
            ],
            [
                "id" => 297,
                "country_id" => 211,
                "state_id" => null,
                "name" => json_encode(["en" => "Santa Catarina", "zh" => "圣卡塔琳娜"]),
                "code" => "sc"
            ],
            [
                "id" => 298,
                "country_id" => 211,
                "state_id" => null,
                "name" => json_encode(["en" => "Tocantins", "zh" => "托坎廷斯"]),
                "code" => "to"
            ],
            [
                "id" => 299,
                "country_id" => 211,
                "state_id" => null,
                "name" => json_encode(["en" => "Amazonas", "zh" => "亚马孙"]),
                "code" => "am"
            ],
            [
                "id" => 300,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Bresckaja", "zh" => "布列斯特"]),
                "code" => "br"
            ],
            [
                "id" => 301,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Homelskaja", "zh" => "戈梅利"]),
                "code" => "ho"
            ],
            [
                "id" => 302,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Hrodzenskaja", "zh" => "格罗德诺"]),
                "code" => "hr"
            ],
            [
                "id" => 303,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Minsk", "zh" => "明斯克市"]),
                "code" => "mi"
            ],
            [
                "id" => 304,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Mahileuskaja", "zh" => "莫吉廖夫"]),
                "code" => "ma"
            ],
            [
                "id" => 305,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Vicebskaja", "zh" => "维捷布斯克"]),
                "code" => "vi"
            ],
            [
                "id" => 306,
                "country_id" => 161,
                "state_id" => null,
                "name" => json_encode(["en" => "Burgas", "zh" => "布尔加斯"]),
                "code" => "boj"
            ],
            [
                "id" => 307,
                "country_id" => 161,
                "state_id" => null,
                "name" => json_encode(["en" => "Khaskovo", "zh" => "卡斯科伏"]),
                "code" => "kho"
            ],
            [
                "id" => 308,
                "country_id" => 161,
                "state_id" => null,
                "name" => json_encode(["en" => "Ruse", "zh" => "鲁塞"]),
                "code" => "rou"
            ],
            [
                "id" => 309,
                "country_id" => 161,
                "state_id" => null,
                "name" => json_encode(["en" => "Lovech", "zh" => "洛维奇"]),
                "code" => "lvp"
            ],
            [
                "id" => 310,
                "country_id" => 161,
                "state_id" => null,
                "name" => json_encode(["en" => "Montana", "zh" => "蒙塔纳"]),
                "code" => "oza"
            ],
            [
                "id" => 311,
                "country_id" => 161,
                "state_id" => null,
                "name" => json_encode(["en" => "Plovdiv", "zh" => "普罗夫迪夫"]),
                "code" => "pdv"
            ],
            [
                "id" => 312,
                "country_id" => 161,
                "state_id" => null,
                "name" => json_encode(["en" => "Sofiya", "zh" => "索非亚"]),
                "code" => "sof"
            ],
            [
                "id" => 313,
                "country_id" => 161,
                "state_id" => null,
                "name" => json_encode(["en" => "Grad Sofiya", "zh" => "索非亚市"]),
                "code" => "gso"
            ],
            [
                "id" => 314,
                "country_id" => 161,
                "state_id" => null,
                "name" => json_encode(["en" => "Varna", "zh" => "瓦尔纳"]),
                "code" => "var"
            ],
            [
                "id" => 315,
                "country_id" => 2,
                "state_id" => null,
                "name" => json_encode(["en" => "Alibori", "zh" => "阿黎博里"]),
                "code" => "al"
            ],
            [
                "id" => 316,
                "country_id" => 2,
                "state_id" => null,
                "name" => json_encode(["en" => "Atakora", "zh" => "阿塔科拉"]),
                "code" => "ak"
            ],
            [
                "id" => 317,
                "country_id" => 2,
                "state_id" => null,
                "name" => json_encode(["en" => "Littoral", "zh" => "滨海"]),
                "code" => "li"
            ],
            [
                "id" => 318,
                "country_id" => 2,
                "state_id" => null,
                "name" => json_encode(["en" => "Bohicon", "zh" => "波希康市"]),
                "code" => "boh"
            ],
            [
                "id" => 319,
                "country_id" => 2,
                "state_id" => null,
                "name" => json_encode(["en" => "Borgou", "zh" => "博尔古"]),
                "code" => "bo"
            ],
            [
                "id" => 320,
                "country_id" => 2,
                "state_id" => null,
                "name" => json_encode(["en" => "Atlantique", "zh" => "大西洋"]),
                "code" => "aq"
            ],
            [
                "id" => 321,
                "country_id" => 2,
                "state_id" => null,
                "name" => json_encode(["en" => "Plateau", "zh" => "高原"]),
                "code" => "pl"
            ],
            [
                "id" => 322,
                "country_id" => 2,
                "state_id" => null,
                "name" => json_encode(["en" => "Kouffo", "zh" => "库福"]),
                "code" => "ko"
            ],
            [
                "id" => 323,
                "country_id" => 2,
                "state_id" => null,
                "name" => json_encode(["en" => "Mono", "zh" => "莫诺"]),
                "code" => "mo"
            ],
            [
                "id" => 324,
                "country_id" => 2,
                "state_id" => null,
                "name" => json_encode(["en" => "Collines", "zh" => "丘陵"]),
                "code" => "co"
            ],
            [
                "id" => 325,
                "country_id" => 2,
                "state_id" => null,
                "name" => json_encode(["en" => "Oueme", "zh" => "韦梅"]),
                "code" => "ou"
            ],
            [
                "id" => 326,
                "country_id" => 2,
                "state_id" => null,
                "name" => json_encode(["en" => "Donga", "zh" => "峡谷"]),
                "code" => "do"
            ],
            [
                "id" => 327,
                "country_id" => 2,
                "state_id" => null,
                "name" => json_encode(["en" => "Zou", "zh" => "祖"]),
                "code" => "zo"
            ],
            [
                "id" => 328,
                "country_id" => 145,
                "state_id" => null,
                "name" => json_encode(["en" => "Hainaut", "zh" => "埃诺"]),
                "code" => "wht"
            ],
            [
                "id" => 329,
                "country_id" => 145,
                "state_id" => null,
                "name" => json_encode(["en" => "Antwerpen", "zh" => "安特卫普"]),
                "code" => "van"
            ],
            [
                "id" => 330,
                "country_id" => 145,
                "state_id" => null,
                "name" => json_encode(["en" => "Brabant-Wallone", "zh" => "布拉班特-瓦隆"]),
                "code" => "wbr"
            ],
            [
                "id" => 331,
                "country_id" => 145,
                "state_id" => null,
                "name" => json_encode(["en" => "Brussels", "zh" => "布鲁塞尔"]),
                "code" => "bru"
            ],
            [
                "id" => 332,
                "country_id" => 145,
                "state_id" => null,
                "name" => json_encode(["en" => "Oost-Vlaanderen", "zh" => "东佛兰德"]),
                "code" => "vov"
            ],
            [
                "id" => 333,
                "country_id" => 145,
                "state_id" => null,
                "name" => json_encode(["en" => "Vlaams-Brabant", "zh" => "佛兰芒-布拉班特"]),
                "code" => "vbr"
            ],
            [
                "id" => 334,
                "country_id" => 145,
                "state_id" => null,
                "name" => json_encode(["en" => "Liege", "zh" => "列日"]),
                "code" => "wlg"
            ],
            [
                "id" => 335,
                "country_id" => 145,
                "state_id" => null,
                "name" => json_encode(["en" => "Limburg", "zh" => "林堡"]),
                "code" => "vli"
            ],
            [
                "id" => 336,
                "country_id" => 145,
                "state_id" => null,
                "name" => json_encode(["en" => "Luxembourg", "zh" => "卢森堡"]),
                "code" => "wlx"
            ],
            [
                "id" => 337,
                "country_id" => 145,
                "state_id" => null,
                "name" => json_encode(["en" => "Namur", "zh" => "那慕尔"]),
                "code" => "wna"
            ],
            [
                "id" => 338,
                "country_id" => 145,
                "state_id" => null,
                "name" => json_encode(["en" => "West-Vlaanderen", "zh" => "西佛兰德"]),
                "code" => "vwv"
            ],
            [
                "id" => 339,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Elbląg", "zh" => "埃尔布隆格"]),
                "code" => "elb"
            ],
            [
                "id" => 340,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Olsztyn", "zh" => "奥尔什丁"]),
                "code" => "ols"
            ],
            [
                "id" => 341,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Ostrołeka", "zh" => "奥斯特罗文卡"]),
                "code" => "oss"
            ],
            [
                "id" => 342,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Bydgoszcz", "zh" => "比得哥什"]),
                "code" => "bzg"
            ],
            [
                "id" => 343,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Piotrkow", "zh" => "彼得库夫"]),
                "code" => "pio"
            ],
            [
                "id" => 344,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Bytom", "zh" => "比托姆"]),
                "code" => "byt"
            ],
            [
                "id" => 345,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Biała Podlaska", "zh" => "比亚瓦波德拉斯卡"]),
                "code" => "bap"
            ],
            [
                "id" => 346,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Białystok", "zh" => "比亚维斯托克"]),
                "code" => "bia"
            ],
            [
                "id" => 347,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Opole", "zh" => "波莱"]),
                "code" => "opo"
            ],
            [
                "id" => 348,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Poznan", "zh" => "波兹南"]),
                "code" => "poz"
            ],
            [
                "id" => 349,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Dabrowa Gornicza", "zh" => "达布罗瓦戈尼察"]),
                "code" => "dab"
            ],
            [
                "id" => 350,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Gorzow Wlkp", "zh" => "大波兰地区戈茹夫"]),
                "code" => "gow"
            ],
            [
                "id" => 351,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Wroclaw", "zh" => "弗罗茨瓦夫"]),
                "code" => "wro"
            ],
            [
                "id" => 352,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Wlocławek", "zh" => "弗沃茨瓦韦克"]),
                "code" => "wlo"
            ],
            [
                "id" => 353,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Gdansk", "zh" => "格但斯克"]),
                "code" => "gdn"
            ],
            [
                "id" => 354,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Gdynia", "zh" => "格丁尼亚"]),
                "code" => "gdy"
            ],
            [
                "id" => 355,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Gliwice", "zh" => "格利维采"]),
                "code" => "gwc"
            ],
            [
                "id" => 356,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Grudziadz", "zh" => "格鲁琼兹"]),
                "code" => "gru"
            ],
            [
                "id" => 357,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Chełm", "zh" => "海乌姆"]),
                "code" => "cho"
            ],
            [
                "id" => 358,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Warszawa", "zh" => "华沙"]),
                "code" => "waw"
            ],
            [
                "id" => 359,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Chorzow", "zh" => "霍茹夫"]),
                "code" => "chz"
            ],
            [
                "id" => 360,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Kalisz", "zh" => "卡利什"]),
                "code" => "kal"
            ],
            [
                "id" => 361,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Katowice", "zh" => "卡托维兹"]),
                "code" => "ktw"
            ],
            [
                "id" => 362,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Kielce", "zh" => "凯尔采"]),
                "code" => "klc"
            ],
            [
                "id" => 363,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Konin", "zh" => "科宁"]),
                "code" => "kon"
            ],
            [
                "id" => 364,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Koszalin", "zh" => "科沙林"]),
                "code" => "osz"
            ],
            [
                "id" => 365,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Krakow", "zh" => "克拉科夫"]),
                "code" => "krk"
            ],
            [
                "id" => 366,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Krosno", "zh" => "克罗斯诺"]),
                "code" => "kro"
            ],
            [
                "id" => 367,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Radom", "zh" => "拉多姆"]),
                "code" => "rdm"
            ],
            [
                "id" => 368,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Legnica", "zh" => "莱格尼察"]),
                "code" => "leg"
            ],
            [
                "id" => 369,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Leszno", "zh" => "莱什诺"]),
                "code" => "lez"
            ],
            [
                "id" => 370,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Lublin", "zh" => "卢布林"]),
                "code" => "lul"
            ],
            [
                "id" => 371,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Ruda Sl", "zh" => "鲁达"]),
                "code" => "rds"
            ],
            [
                "id" => 372,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Lodz", "zh" => "罗兹"]),
                "code" => "lod"
            ],
            [
                "id" => 373,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Zielona Gora", "zh" => "绿山城"]),
                "code" => "ieg"
            ],
            [
                "id" => 374,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Mysłowice", "zh" => "米什洛维采"]),
                "code" => "myl"
            ],
            [
                "id" => 375,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Piła", "zh" => "皮瓦"]),
                "code" => "pil"
            ],
            [
                "id" => 376,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Przemysl", "zh" => "普热梅希尔"]),
                "code" => "prz"
            ],
            [
                "id" => 377,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Plock", "zh" => "普沃茨克"]),
                "code" => "plo"
            ],
            [
                "id" => 378,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Ciechanow", "zh" => "切哈努夫"]),
                "code" => "cie"
            ],
            [
                "id" => 379,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Rzeszow", "zh" => "热舒夫"]),
                "code" => "rze"
            ],
            [
                "id" => 380,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Szczecin", "zh" => "什切青"]),
                "code" => "szz"
            ],
            [
                "id" => 381,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Skierniewice", "zh" => "斯凯尔涅维采"]),
                "code" => "ski"
            ],
            [
                "id" => 382,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Slupsk", "zh" => "斯武普斯克"]),
                "code" => "slp"
            ],
            [
                "id" => 383,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Suwałki", "zh" => "苏瓦乌基"]),
                "code" => "swl"
            ],
            [
                "id" => 384,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Sopot", "zh" => "索波特"]),
                "code" => "sop"
            ],
            [
                "id" => 385,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Sosnowiec", "zh" => "索斯诺维茨"]),
                "code" => "swc"
            ],
            [
                "id" => 386,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Tarnow", "zh" => "塔尔努夫"]),
                "code" => "tar"
            ],
            [
                "id" => 387,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Tarnobrzeg", "zh" => "塔尔诺布热格"]),
                "code" => "qep"
            ],
            [
                "id" => 388,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Tychy", "zh" => "特切"]),
                "code" => "tyy"
            ],
            [
                "id" => 389,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Torun", "zh" => "托伦"]),
                "code" => "tor"
            ],
            [
                "id" => 390,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Walbrzych", "zh" => "瓦乌布日赫"]),
                "code" => "wzh"
            ],
            [
                "id" => 391,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Lomza", "zh" => "沃姆扎"]),
                "code" => "qoy"
            ],
            [
                "id" => 392,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Siemianowice Sl", "zh" => "希米亚诺维采"]),
                "code" => "sow"
            ],
            [
                "id" => 393,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Swinoujscie", "zh" => "希维诺乌伊希切"]),
                "code" => "swi"
            ],
            [
                "id" => 394,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Swietochłowice", "zh" => "希维托赫洛维采"]),
                "code" => "swt"
            ],
            [
                "id" => 395,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Siedlce", "zh" => "谢德尔采"]),
                "code" => "sdc"
            ],
            [
                "id" => 396,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Sieradz", "zh" => "谢拉兹"]),
                "code" => "sir"
            ],
            [
                "id" => 397,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Nowy Sacz", "zh" => "新松奇"]),
                "code" => "now"
            ],
            [
                "id" => 398,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Jaworzno", "zh" => "雅沃兹诺"]),
                "code" => "jaw"
            ],
            [
                "id" => 399,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Jelenia Gora", "zh" => "耶莱尼亚古拉"]),
                "code" => "jeg"
            ],
            [
                "id" => 400,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Zabrze", "zh" => "扎布热"]),
                "code" => "zab"
            ],
            [
                "id" => 401,
                "country_id" => 154,
                "state_id" => null,
                "name" => json_encode(["en" => "Zamosc", "zh" => "扎莫希奇"]),
                "code" => "zam"
            ],
            [
                "id" => 402,
                "country_id" => 210,
                "state_id" => null,
                "name" => json_encode(["en" => "El Alto", "zh" => "奥尔托"]),
                "code" => "alt"
            ],
            [
                "id" => 403,
                "country_id" => 210,
                "state_id" => null,
                "name" => json_encode(["en" => "Oruro", "zh" => "奥鲁罗"]),
                "code" => "oru"
            ],
            [
                "id" => 404,
                "country_id" => 210,
                "state_id" => null,
                "name" => json_encode(["en" => "El Beni", "zh" => "贝尼"]),
                "code" => "ben"
            ],
            [
                "id" => 405,
                "country_id" => 210,
                "state_id" => null,
                "name" => json_encode(["en" => "Potosi", "zh" => "波多西"]),
                "code" => "poi"
            ],
            [
                "id" => 406,
                "country_id" => 210,
                "state_id" => null,
                "name" => json_encode(["en" => "Quillacollo", "zh" => "基拉科洛"]),
                "code" => "qui"
            ],
            [
                "id" => 407,
                "country_id" => 210,
                "state_id" => null,
                "name" => json_encode(["en" => "Cochabamba", "zh" => "科恰班巴"]),
                "code" => "cbb"
            ],
            [
                "id" => 408,
                "country_id" => 210,
                "state_id" => null,
                "name" => json_encode(["en" => "La Paz", "zh" => "拉巴斯"]),
                "code" => "lpb"
            ],
            [
                "id" => 409,
                "country_id" => 210,
                "state_id" => null,
                "name" => json_encode(["en" => "Pando", "zh" => "潘多"]),
                "code" => "pan"
            ],
            [
                "id" => 410,
                "country_id" => 210,
                "state_id" => null,
                "name" => json_encode(["en" => "Chuquisaca", "zh" => "丘基萨卡"]),
                "code" => "chu"
            ],
            [
                "id" => 411,
                "country_id" => 210,
                "state_id" => null,
                "name" => json_encode(["en" => "Sacaba", "zh" => "萨卡巴"]),
                "code" => "sac"
            ],
            [
                "id" => 412,
                "country_id" => 210,
                "state_id" => null,
                "name" => json_encode(["en" => "Santa Cruz", "zh" => "圣克鲁斯"]),
                "code" => "srz"
            ],
            [
                "id" => 413,
                "country_id" => 210,
                "state_id" => null,
                "name" => json_encode(["en" => "Tarija", "zh" => "塔里哈"]),
                "code" => "tja"
            ],
            [
                "id" => 414,
                "country_id" => 139,
                "state_id" => null,
                "name" => json_encode(["en" => "Posavski", "zh" => "波萨维纳"]),
                "code" => "fpo"
            ],
            [
                "id" => 415,
                "country_id" => 139,
                "state_id" => null,
                "name" => json_encode(["en" => "Bosansko-Podrinjski", "zh" => "波斯尼亚－波德里涅"]),
                "code" => "fbp"
            ],
            [
                "id" => 416,
                "country_id" => 139,
                "state_id" => null,
                "name" => json_encode(["en" => "Tomislavgrad", "zh" => "多米斯拉夫格勒"]),
                "code" => "fto"
            ],
            [
                "id" => 417,
                "country_id" => 139,
                "state_id" => null,
                "name" => json_encode(["en" => "Hercegovacko-Neretvanski", "zh" => "黑塞哥维那－涅雷特瓦"]),
                "code" => "fhn"
            ],
            [
                "id" => 418,
                "country_id" => 139,
                "state_id" => null,
                "name" => json_encode(["en" => "Sarajevo", "zh" => "萨拉热窝"]),
                "code" => "fsa"
            ],
            [
                "id" => 419,
                "country_id" => 139,
                "state_id" => null,
                "name" => json_encode(["en" => "Tuzlanski-Podrinjski", "zh" => "图兹拉－波德里涅"]),
                "code" => "ftu"
            ],
            [
                "id" => 420,
                "country_id" => 139,
                "state_id" => null,
                "name" => json_encode(["en" => "Unsko-Sanski", "zh" => "乌纳－萨纳"]),
                "code" => "fus"
            ],
            [
                "id" => 421,
                "country_id" => 139,
                "state_id" => null,
                "name" => json_encode(["en" => "Hercegovacko-Bosanski", "zh" => "西波斯尼亚"]),
                "code" => "fhb"
            ],
            [
                "id" => 422,
                "country_id" => 139,
                "state_id" => null,
                "name" => json_encode(["en" => "Zapadno-Hercegovaki", "zh" => "西黑塞哥维那"]),
                "code" => "fzh"
            ],
            [
                "id" => 423,
                "country_id" => 139,
                "state_id" => null,
                "name" => json_encode(["en" => "Zenicko-Dobojski", "zh" => "泽尼察－多博伊"]),
                "code" => "fze"
            ],
            [
                "id" => 424,
                "country_id" => 139,
                "state_id" => null,
                "name" => json_encode(["en" => "Srednjo-Bosanski", "zh" => "中波斯尼亚"]),
                "code" => "fsb"
            ],
            [
                "id" => 425,
                "country_id" => 209,
                "state_id" => null,
                "name" => json_encode(["en" => "Belize", "zh" => "伯利兹"]),
                "code" => "bz"
            ],
            [
                "id" => 426,
                "country_id" => 209,
                "state_id" => null,
                "name" => json_encode(["en" => "Orange Walk", "zh" => "橘园"]),
                "code" => "ow"
            ],
            [
                "id" => 427,
                "country_id" => 209,
                "state_id" => null,
                "name" => json_encode(["en" => "Cayo", "zh" => "卡约"]),
                "code" => "cy"
            ],
            [
                "id" => 428,
                "country_id" => 209,
                "state_id" => null,
                "name" => json_encode(["en" => "Corozal", "zh" => "科罗萨尔"]),
                "code" => "cr"
            ],
            [
                "id" => 429,
                "country_id" => 209,
                "state_id" => null,
                "name" => json_encode(["en" => "Stann Creek", "zh" => "斯坦港"]),
                "code" => "sc"
            ],
            [
                "id" => 430,
                "country_id" => 209,
                "state_id" => null,
                "name" => json_encode(["en" => "Toledo", "zh" => "托莱多"]),
                "code" => "to"
            ],
            [
                "id" => 431,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Bale", "zh" => "巴雷"]),
                "code" => "bal"
            ],
            [
                "id" => 432,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Bam", "zh" => "巴姆"]),
                "code" => "bam"
            ],
            [
                "id" => 433,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Banwa", "zh" => "巴瓦"]),
                "code" => "ban"
            ],
            [
                "id" => 434,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Bazega", "zh" => "巴泽加"]),
                "code" => "baz"
            ],
            [
                "id" => 435,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Poni", "zh" => "波尼"]),
                "code" => "pon"
            ],
            [
                "id" => 436,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Boulgou", "zh" => "布尔古"]),
                "code" => "blg"
            ],
            [
                "id" => 437,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Boulkiemde", "zh" => "布尔基恩德"]),
                "code" => "bok"
            ],
            [
                "id" => 438,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Bougouriba", "zh" => "布古里巴"]),
                "code" => "bor"
            ],
            [
                "id" => 439,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Ganzourgou", "zh" => "冈祖尔古"]),
                "code" => "gan"
            ],
            [
                "id" => 440,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Gourma", "zh" => "古尔马"]),
                "code" => "gou"
            ],
            [
                "id" => 441,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Ziro", "zh" => "济罗"]),
                "code" => "zir"
            ],
            [
                "id" => 442,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Kadiogo", "zh" => "卡焦戈"]),
                "code" => "kad"
            ],
            [
                "id" => 443,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Kenedougou", "zh" => "凯内杜古"]),
                "code" => "ken"
            ],
            [
                "id" => 444,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Komondjari", "zh" => "科蒙加里"]),
                "code" => "koo"
            ],
            [
                "id" => 445,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Comoe", "zh" => "科莫埃"]),
                "code" => "com"
            ],
            [
                "id" => 446,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Kompienga", "zh" => "孔皮恩加"]),
                "code" => "kop"
            ],
            [
                "id" => 447,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Kossi", "zh" => "孔西"]),
                "code" => "kos"
            ],
            [
                "id" => 448,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Koulpelogo", "zh" => "库尔佩罗戈"]),
                "code" => "kol"
            ],
            [
                "id" => 449,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Kourweogo", "zh" => "库尔维奥戈"]),
                "code" => "kow"
            ],
            [
                "id" => 450,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Kouritenga", "zh" => "库里滕加"]),
                "code" => "kot"
            ],
            [
                "id" => 451,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Leraba", "zh" => "雷拉巴"]),
                "code" => "ler"
            ],
            [
                "id" => 452,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Loroum", "zh" => "罗卢姆"]),
                "code" => "lor"
            ],
            [
                "id" => 453,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Mouhoun", "zh" => "穆翁"]),
                "code" => "mou"
            ],
            [
                "id" => 454,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Namentenga", "zh" => "纳门滕加"]),
                "code" => "nam"
            ],
            [
                "id" => 455,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Nahouri", "zh" => "纳乌里"]),
                "code" => "nah"
            ],
            [
                "id" => 456,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Nayala", "zh" => "纳亚拉"]),
                "code" => "nay"
            ],
            [
                "id" => 457,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Gnagna", "zh" => "尼亚尼亚"]),
                "code" => "gna"
            ],
            [
                "id" => 458,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Noumbiel", "zh" => "努姆比埃尔"]),
                "code" => "nou"
            ],
            [
                "id" => 459,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Passore", "zh" => "帕索雷"]),
                "code" => "pas"
            ],
            [
                "id" => 460,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Seno", "zh" => "塞诺"]),
                "code" => "sen"
            ],
            [
                "id" => 461,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Sanguie", "zh" => "桑吉"]),
                "code" => "sag"
            ],
            [
                "id" => 462,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Sanmatenga", "zh" => "桑马滕加"]),
                "code" => "sam"
            ],
            [
                "id" => 463,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Sourou", "zh" => "苏鲁"]),
                "code" => "sor"
            ],
            [
                "id" => 464,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Soum", "zh" => "苏姆"]),
                "code" => "som"
            ],
            [
                "id" => 465,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Tapoa", "zh" => "塔波阿"]),
                "code" => "tap"
            ],
            [
                "id" => 466,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Tuy", "zh" => "图伊"]),
                "code" => "tuy"
            ],
            [
                "id" => 467,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Houet", "zh" => "乌埃"]),
                "code" => "hou"
            ],
            [
                "id" => 468,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Oubritenga", "zh" => "乌布里滕加"]),
                "code" => "oub"
            ],
            [
                "id" => 469,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Oudalan", "zh" => "乌达兰"]),
                "code" => "oud"
            ],
            [
                "id" => 470,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Sissili", "zh" => "锡西里"]),
                "code" => "sis"
            ],
            [
                "id" => 471,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Yagha", "zh" => "亚加"]),
                "code" => "yag"
            ],
            [
                "id" => 472,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Yatenga", "zh" => "亚滕加"]),
                "code" => "yat"
            ],
            [
                "id" => 473,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Ioba", "zh" => "伊奥巴"]),
                "code" => "ioa"
            ],
            [
                "id" => 474,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Zoundweogo", "zh" => "宗德韦奥戈"]),
                "code" => "zow"
            ],
            [
                "id" => 475,
                "country_id" => 9,
                "state_id" => null,
                "name" => json_encode(["en" => "Zondoma", "zh" => "宗多马"]),
                "code" => "zod"
            ],
            [
                "id" => 476,
                "country_id" => 50,
                "state_id" => null,
                "name" => json_encode(["en" => "Bubanza", "zh" => "布班扎"]),
                "code" => "bb"
            ],
            [
                "id" => 477,
                "country_id" => 50,
                "state_id" => null,
                "name" => json_encode(["en" => "Bururi", "zh" => "布鲁里"]),
                "code" => "br"
            ],
            [
                "id" => 478,
                "country_id" => 50,
                "state_id" => null,
                "name" => json_encode(["en" => "Bujumbura Mairie", "zh" => "布琼布拉城市"]),
                "code" => "bm"
            ],
            [
                "id" => 479,
                "country_id" => 50,
                "state_id" => null,
                "name" => json_encode(["en" => "Bujumbura Rural", "zh" => "布琼布拉乡村"]),
                "code" => "bu"
            ],
            [
                "id" => 480,
                "country_id" => 50,
                "state_id" => null,
                "name" => json_encode(["en" => "Ngozi", "zh" => "恩戈齐"]),
                "code" => "ng"
            ],
            [
                "id" => 481,
                "country_id" => 50,
                "state_id" => null,
                "name" => json_encode(["en" => "Kirundo", "zh" => "基龙多"]),
                "code" => "ki"
            ],
            [
                "id" => 482,
                "country_id" => 50,
                "state_id" => null,
                "name" => json_encode(["en" => "Gitega", "zh" => "基特加"]),
                "code" => "gi"
            ],
            [
                "id" => 483,
                "country_id" => 50,
                "state_id" => null,
                "name" => json_encode(["en" => "Karuzi", "zh" => "卡鲁济"]),
                "code" => "kr"
            ],
            [
                "id" => 484,
                "country_id" => 50,
                "state_id" => null,
                "name" => json_encode(["en" => "Kayanza", "zh" => "卡扬扎"]),
                "code" => "ky"
            ],
            [
                "id" => 485,
                "country_id" => 50,
                "state_id" => null,
                "name" => json_encode(["en" => "Cankuzo", "zh" => "坎库佐"]),
                "code" => "ca"
            ],
            [
                "id" => 486,
                "country_id" => 50,
                "state_id" => null,
                "name" => json_encode(["en" => "Rutana", "zh" => "鲁塔纳"]),
                "code" => "rt"
            ],
            [
                "id" => 487,
                "country_id" => 50,
                "state_id" => null,
                "name" => json_encode(["en" => "Ruyigi", "zh" => "鲁伊吉"]),
                "code" => "ry"
            ],
            [
                "id" => 488,
                "country_id" => 50,
                "state_id" => null,
                "name" => json_encode(["en" => "Makamba", "zh" => "马坎巴"]),
                "code" => "ma"
            ],
            [
                "id" => 489,
                "country_id" => 50,
                "state_id" => null,
                "name" => json_encode(["en" => "Muramvya", "zh" => "穆拉姆维亚"]),
                "code" => "mu"
            ],
            [
                "id" => 490,
                "country_id" => 50,
                "state_id" => null,
                "name" => json_encode(["en" => "Mwaro", "zh" => "穆瓦洛"]),
                "code" => "mw"
            ],
            [
                "id" => 491,
                "country_id" => 50,
                "state_id" => null,
                "name" => json_encode(["en" => "Muyinga", "zh" => "穆因加"]),
                "code" => "my"
            ],
            [
                "id" => 492,
                "country_id" => 50,
                "state_id" => null,
                "name" => json_encode(["en" => "Cibitoke", "zh" => "锡比托凯"]),
                "code" => "ci"
            ],
            [
                "id" => 493,
                "country_id" => 73,
                "state_id" => null,
                "name" => json_encode(["en" => "Haeju", "zh" => "海州"]),
                "code" => "hae"
            ],
            [
                "id" => 494,
                "country_id" => 73,
                "state_id" => null,
                "name" => json_encode(["en" => "Hyesan", "zh" => "惠山"]),
                "code" => "hye"
            ],
            [
                "id" => 495,
                "country_id" => 73,
                "state_id" => null,
                "name" => json_encode(["en" => "Kanggye", "zh" => "江界"]),
                "code" => "kan"
            ],
            [
                "id" => 496,
                "country_id" => 73,
                "state_id" => null,
                "name" => json_encode(["en" => "Kaesong", "zh" => "开城"]),
                "code" => "ksn"
            ],
            [
                "id" => 497,
                "country_id" => 73,
                "state_id" => null,
                "name" => json_encode(["en" => "Naseon", "zh" => "罗先"]),
                "code" => "nas"
            ],
            [
                "id" => 498,
                "country_id" => 73,
                "state_id" => null,
                "name" => json_encode(["en" => "Namp'o", "zh" => "南浦"]),
                "code" => "nam"
            ],
            [
                "id" => 499,
                "country_id" => 73,
                "state_id" => null,
                "name" => json_encode(["en" => "Pyongyang", "zh" => "平壤"]),
                "code" => "fnj"
            ],
            [
                "id" => 500,
                "country_id" => 73,
                "state_id" => null,
                "name" => json_encode(["en" => "Ch'ongjin", "zh" => "清津"]),
                "code" => "cho"
            ],
            [
                "id" => 501,
                "country_id" => 73,
                "state_id" => null,
                "name" => json_encode(["en" => "Sariwon", "zh" => "沙里院"]),
                "code" => "sar"
            ],
            [
                "id" => 502,
                "country_id" => 73,
                "state_id" => null,
                "name" => json_encode(["en" => "Hamhung", "zh" => "咸兴"]),
                "code" => "ham"
            ],
            [
                "id" => 503,
                "country_id" => 73,
                "state_id" => null,
                "name" => json_encode(["en" => "Sinuiju", "zh" => "新义州"]),
                "code" => "sii"
            ],
            [
                "id" => 504,
                "country_id" => 73,
                "state_id" => null,
                "name" => json_encode(["en" => "Wonsan", "zh" => "元山"]),
                "code" => "won"
            ],
            [
                "id" => 505,
                "country_id" => 147,
                "state_id" => null,
                "name" => json_encode(["en" => "Aarhus", "zh" => "奥胡斯"]),
                "code" => "ar"
            ],
            [
                "id" => 506,
                "country_id" => 147,
                "state_id" => null,
                "name" => json_encode(["en" => "Nordjylland", "zh" => "北日德兰"]),
                "code" => "vsv"
            ],
            [
                "id" => 507,
                "country_id" => 147,
                "state_id" => null,
                "name" => json_encode(["en" => "Bornholm", "zh" => "博恩霍尔姆"]),
                "code" => "bo"
            ],
            [
                "id" => 508,
                "country_id" => 147,
                "state_id" => null,
                "name" => json_encode(["en" => "Frederiksborg", "zh" => "菲特烈堡"]),
                "code" => "fre"
            ],
            [
                "id" => 509,
                "country_id" => 147,
                "state_id" => null,
                "name" => json_encode(["en" => "Fyn", "zh" => "菲茵"]),
                "code" => "fy"
            ],
            [
                "id" => 510,
                "country_id" => 147,
                "state_id" => null,
                "name" => json_encode(["en" => "Copenhagen", "zh" => "哥本哈根"]),
                "code" => "cph"
            ],
            [
                "id" => 511,
                "country_id" => 147,
                "state_id" => null,
                "name" => json_encode(["en" => "Ribe", "zh" => "里伯"]),
                "code" => "rib"
            ],
            [
                "id" => 512,
                "country_id" => 147,
                "state_id" => null,
                "name" => json_encode(["en" => "Ringkoebing", "zh" => "灵克宾"]),
                "code" => "rkg"
            ],
            [
                "id" => 513,
                "country_id" => 147,
                "state_id" => null,
                "name" => json_encode(["en" => "Roskilde", "zh" => "罗斯基勒"]),
                "code" => "rke"
            ],
            [
                "id" => 514,
                "country_id" => 147,
                "state_id" => null,
                "name" => json_encode(["en" => "Soenderjylland", "zh" => "南日德兰"]),
                "code" => "vbi"
            ],
            [
                "id" => 515,
                "country_id" => 147,
                "state_id" => null,
                "name" => json_encode(["en" => "Storstroem", "zh" => "斯多斯特姆"]),
                "code" => "st"
            ],
            [
                "id" => 516,
                "country_id" => 147,
                "state_id" => null,
                "name" => json_encode(["en" => "Viborg", "zh" => "维堡"]),
                "code" => "vib"
            ],
            [
                "id" => 517,
                "country_id" => 147,
                "state_id" => null,
                "name" => json_encode(["en" => "Vejle", "zh" => "维厄勒"]),
                "code" => "vej"
            ],
            [
                "id" => 518,
                "country_id" => 147,
                "state_id" => null,
                "name" => json_encode(["en" => "Vestsjaelland", "zh" => "西希兰"]),
                "code" => "vs"
            ],
            [
                "id" => 519,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Arnsberg", "zh" => "阿恩斯贝格"]),
                "code" => "arn"
            ],
            [
                "id" => 520,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Erfurt", "zh" => "爱尔福特"]),
                "code" => "erf"
            ],
            [
                "id" => 521,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Ansbach", "zh" => "安斯巴格"]),
                "code" => "ans"
            ],
            [
                "id" => 522,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Augsburg", "zh" => "奥格斯堡"]),
                "code" => "agb"
            ],
            [
                "id" => 523,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Berlin", "zh" => "柏林"]),
                "code" => "be"
            ],
            [
                "id" => 524,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Bayreuth", "zh" => "拜伊罗特"]),
                "code" => "byu"
            ],
            [
                "id" => 525,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Bielefeld", "zh" => "比勒费尔德"]),
                "code" => "bfe"
            ],
            [
                "id" => 526,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Potsdam", "zh" => "波茨坦"]),
                "code" => "pot"
            ],
            [
                "id" => 527,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Bochum", "zh" => "波鸿"]),
                "code" => "bom"
            ],
            [
                "id" => 528,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Bremen", "zh" => "不来梅"]),
                "code" => "hb"
            ],
            [
                "id" => 529,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Brunswick", "zh" => "不伦瑞克"]),
                "code" => "brw"
            ],
            [
                "id" => 530,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Darmstadt", "zh" => "达姆施塔特"]),
                "code" => "dar"
            ],
            [
                "id" => 531,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Detmold", "zh" => "代特莫尔特"]),
                "code" => "det"
            ],
            [
                "id" => 532,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Dresden", "zh" => "德累斯顿"]),
                "code" => "drs"
            ],
            [
                "id" => 533,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Dessau", "zh" => "德绍"]),
                "code" => "des"
            ],
            [
                "id" => 534,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Dusseldorf", "zh" => "杜塞尔多夫"]),
                "code" => "dus"
            ],
            [
                "id" => 535,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Frankfurt", "zh" => "法兰克福"]),
                "code" => "ffo"
            ],
            [
                "id" => 536,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Freiburg", "zh" => "弗赖堡"]),
                "code" => "fbg"
            ],
            [
                "id" => 537,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Halle", "zh" => "哈雷"]),
                "code" => "hae"
            ],
            [
                "id" => 538,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Hamburg", "zh" => "汉堡"]),
                "code" => "hh"
            ],
            [
                "id" => 539,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Hannover", "zh" => "汉诺威"]),
                "code" => "haj"
            ],
            [
                "id" => 540,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Kiel", "zh" => "基尔"]),
                "code" => "kel"
            ],
            [
                "id" => 541,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "GieBen", "zh" => "吉森"]),
                "code" => "gbn"
            ],
            [
                "id" => 542,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Karlsruhe", "zh" => "卡尔斯鲁厄"]),
                "code" => "kae"
            ],
            [
                "id" => 543,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Kassel", "zh" => "卡塞尔"]),
                "code" => "kas"
            ],
            [
                "id" => 544,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Chemnitz", "zh" => "开姆尼斯"]),
                "code" => "che"
            ],
            [
                "id" => 545,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Koblenz", "zh" => "科布伦次"]),
                "code" => "kob"
            ],
            [
                "id" => 546,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Cologne", "zh" => "科隆"]),
                "code" => "cgn"
            ],
            [
                "id" => 547,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Leipzig", "zh" => "莱比锡"]),
                "code" => "lej"
            ],
            [
                "id" => 548,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Landshut", "zh" => "兰茨胡特"]),
                "code" => "ldh"
            ],
            [
                "id" => 549,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Luneburg", "zh" => "吕讷堡"]),
                "code" => "lbg"
            ],
            [
                "id" => 550,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Magdeburg", "zh" => "马格德堡"]),
                "code" => "mag"
            ],
            [
                "id" => 551,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Mannheim", "zh" => "曼海姆"]),
                "code" => "mhg"
            ],
            [
                "id" => 552,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Mainz", "zh" => "美因兹"]),
                "code" => "mai"
            ],
            [
                "id" => 553,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Muenster", "zh" => "明斯特"]),
                "code" => "mun"
            ],
            [
                "id" => 554,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Munich", "zh" => "慕尼黑"]),
                "code" => "muc"
            ],
            [
                "id" => 555,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Nuremberg", "zh" => "纽伦堡"]),
                "code" => "nue"
            ],
            [
                "id" => 556,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Schwerin", "zh" => "什未林"]),
                "code" => "swh"
            ],
            [
                "id" => 557,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Stuttgart", "zh" => "斯图加特"]),
                "code" => "str"
            ],
            [
                "id" => 558,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Trier", "zh" => "特里尔"]),
                "code" => "tri"
            ],
            [
                "id" => 559,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Wiesbaden", "zh" => "威斯巴登"]),
                "code" => "wib"
            ],
            [
                "id" => 560,
                "country_id" => 149,
                "state_id" => null,
                "name" => json_encode(["en" => "Wuerzburg", "zh" => "维尔茨堡"]),
                "code" => "wug"
            ],
            [
                "id" => 561,
                "country_id" => 88,
                "state_id" => null,
                "name" => json_encode(["en" => "Aileu", "zh" => "阿伊莱乌"]),
                "code" => "al"
            ],
            [
                "id" => 562,
                "country_id" => 88,
                "state_id" => null,
                "name" => json_encode(["en" => "Ainaro", "zh" => "阿伊纳罗"]),
                "code" => "an"
            ],
            [
                "id" => 563,
                "country_id" => 88,
                "state_id" => null,
                "name" => json_encode(["en" => "Ermera", "zh" => "埃尔梅拉"]),
                "code" => "er"
            ],
            [
                "id" => 564,
                "country_id" => 88,
                "state_id" => null,
                "name" => json_encode(["en" => "Ambeno", "zh" => "安贝诺"]),
                "code" => "am"
            ],
            [
                "id" => 565,
                "country_id" => 88,
                "state_id" => null,
                "name" => json_encode(["en" => "Baucau", "zh" => "包考"]),
                "code" => "ba"
            ],
            [
                "id" => 566,
                "country_id" => 88,
                "state_id" => null,
                "name" => json_encode(["en" => "Bobonaro", "zh" => "博博纳罗"]),
                "code" => "bo"
            ],
            [
                "id" => 567,
                "country_id" => 88,
                "state_id" => null,
                "name" => json_encode(["en" => "Dili", "zh" => "帝力"]),
                "code" => "di"
            ],
            [
                "id" => 568,
                "country_id" => 88,
                "state_id" => null,
                "name" => json_encode(["en" => "Kovalima", "zh" => "科瓦利马"]),
                "code" => "ko"
            ],
            [
                "id" => 569,
                "country_id" => 88,
                "state_id" => null,
                "name" => json_encode(["en" => "Lautem", "zh" => "劳滕"]),
                "code" => "la"
            ],
            [
                "id" => 570,
                "country_id" => 88,
                "state_id" => null,
                "name" => json_encode(["en" => "Liquica", "zh" => "利基卡"]),
                "code" => "li"
            ],
            [
                "id" => 571,
                "country_id" => 88,
                "state_id" => null,
                "name" => json_encode(["en" => "Manatuto", "zh" => "马纳图托"]),
                "code" => "mt"
            ],
            [
                "id" => 572,
                "country_id" => 88,
                "state_id" => null,
                "name" => json_encode(["en" => "Manofahi", "zh" => "马努法伊"]),
                "code" => "mf"
            ],
            [
                "id" => 573,
                "country_id" => 88,
                "state_id" => null,
                "name" => json_encode(["en" => "Viqueque", "zh" => "维克克"]),
                "code" => "vi"
            ],
            [
                "id" => 574,
                "country_id" => 42,
                "state_id" => null,
                "name" => json_encode(["en" => "Maritime", "zh" => "滨海区"]),
                "code" => "m"
            ],
            [
                "id" => 575,
                "country_id" => 42,
                "state_id" => null,
                "name" => json_encode(["en" => "Savanes", "zh" => "草原区"]),
                "code" => "s"
            ],
            [
                "id" => 576,
                "country_id" => 42,
                "state_id" => null,
                "name" => json_encode(["en" => "Plateaux", "zh" => "高原区"]),
                "code" => "p"
            ],
            [
                "id" => 577,
                "country_id" => 42,
                "state_id" => null,
                "name" => json_encode(["en" => "Kara", "zh" => "卡拉区"]),
                "code" => "k"
            ],
            [
                "id" => 578,
                "country_id" => 42,
                "state_id" => null,
                "name" => json_encode(["en" => "Centre", "zh" => "中部区"]),
                "code" => "c"
            ],
            [
                "id" => 579,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Abakan", "zh" => "阿巴坎"]),
                "code" => "aba"
            ],
            [
                "id" => 580,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Arkhangelsk", "zh" => "阿尔汉格尔斯克"]),
                "code" => "ark"
            ],
            [
                "id" => 581,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Aginskoye", "zh" => "阿金斯科耶"]),
                "code" => "agi"
            ],
            [
                "id" => 582,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Anadyr", "zh" => "阿纳德尔"]),
                "code" => "dyr"
            ],
            [
                "id" => 583,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Astrakhan", "zh" => "阿斯特拉罕"]),
                "code" => "ast"
            ],
            [
                "id" => 584,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Elista", "zh" => "埃利斯塔"]),
                "code" => "esl"
            ],
            [
                "id" => 585,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Orel", "zh" => "奥廖尔"]),
                "code" => "orl"
            ],
            [
                "id" => 586,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Orenburg", "zh" => "奥伦堡"]),
                "code" => "ore"
            ],
            [
                "id" => 587,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Barnaul", "zh" => "巴尔瑙尔"]),
                "code" => "bax"
            ],
            [
                "id" => 588,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Penza", "zh" => "奔萨"]),
                "code" => "pnz"
            ],
            [
                "id" => 589,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Petropavlovsk-Kamchatskiy", "zh" => "彼得罗巴甫洛夫斯克"]),
                "code" => "pkc"
            ],
            [
                "id" => 590,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Petrozavodsk", "zh" => "彼得罗扎沃茨克"]),
                "code" => "pes"
            ],
            [
                "id" => 591,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Perm", "zh" => "彼尔姆"]),
                "code" => "per"
            ],
            [
                "id" => 592,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Birobidzan", "zh" => "比罗比詹"]),
                "code" => "bbz"
            ],
            [
                "id" => 593,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Belgorod", "zh" => "别尔哥罗德"]),
                "code" => "bel"
            ],
            [
                "id" => 594,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Chabarovsk", "zh" => "伯力"]),
                "code" => "cok"
            ],
            [
                "id" => 595,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Blagoveshchensk", "zh" => "布拉戈维申斯克"]),
                "code" => "bqs"
            ],
            [
                "id" => 596,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Bryansk", "zh" => "布良斯克"]),
                "code" => "bry"
            ],
            [
                "id" => 597,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Chelyabinsk", "zh" => "车里雅宾斯克"]),
                "code" => "che"
            ],
            [
                "id" => 598,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Chita", "zh" => "赤塔"]),
                "code" => "chi"
            ],
            [
                "id" => 599,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Rostov-na-Donu", "zh" => "顿河畔罗斯托夫"]),
                "code" => "ros"
            ],
            [
                "id" => 600,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Omsk", "zh" => "鄂木斯克"]),
                "code" => "oms"
            ],
            [
                "id" => 601,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Volgograd", "zh" => "伏尔加格勒"]),
                "code" => "vog"
            ],
            [
                "id" => 602,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Vladimir", "zh" => "弗拉基米尔"]),
                "code" => "vmr"
            ],
            [
                "id" => 603,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Vladikavkaz", "zh" => "弗拉季高加索"]),
                "code" => "vla"
            ],
            [
                "id" => 604,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Gorno-Altajsk", "zh" => "戈尔诺－阿尔泰斯克"]),
                "code" => "goa"
            ],
            [
                "id" => 605,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Grozny", "zh" => "格罗兹尼"]),
                "code" => "grv"
            ],
            [
                "id" => 606,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Vladivostok", "zh" => "海参崴"]),
                "code" => "vvo"
            ],
            [
                "id" => 607,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Khanty-Mansiysk", "zh" => "汉特－曼西斯克"]),
                "code" => "khm"
            ],
            [
                "id" => 608,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Kirov", "zh" => "基洛夫"]),
                "code" => "kir"
            ],
            [
                "id" => 609,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Kaliningrad", "zh" => "加里宁格勒"]),
                "code" => "kgd"
            ],
            [
                "id" => 610,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Kazan", "zh" => "喀山"]),
                "code" => "kzn"
            ],
            [
                "id" => 611,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Kaluga", "zh" => "卡卢加"]),
                "code" => "klf"
            ],
            [
                "id" => 612,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Kostroma", "zh" => "科斯特罗马"]),
                "code" => "kos"
            ],
            [
                "id" => 613,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Krasnodar", "zh" => "克拉斯诺达尔"]),
                "code" => "krr"
            ],
            [
                "id" => 614,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Krasnojarsk", "zh" => "克拉斯诺亚尔斯克"]),
                "code" => "kya"
            ],
            [
                "id" => 615,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Kemerovo", "zh" => "克麦罗沃"]),
                "code" => "kem"
            ],
            [
                "id" => 616,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Kyzyl", "zh" => "克孜勒"]),
                "code" => "kyz"
            ],
            [
                "id" => 617,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Kudymkar", "zh" => "库德姆卡尔"]),
                "code" => "kud"
            ],
            [
                "id" => 618,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Kurgan", "zh" => "库尔干"]),
                "code" => "kro"
            ],
            [
                "id" => 619,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Kursk", "zh" => "库尔斯克"]),
                "code" => "urs"
            ],
            [
                "id" => 620,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Lipeck", "zh" => "利佩茨克"]),
                "code" => "lip"
            ],
            [
                "id" => 621,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Ryazan", "zh" => "梁赞"]),
                "code" => "rya"
            ],
            [
                "id" => 622,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Makhachkala", "zh" => "马哈奇卡拉"]),
                "code" => "mcx"
            ],
            [
                "id" => 623,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Magadan", "zh" => "马加丹"]),
                "code" => "mag"
            ],
            [
                "id" => 624,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Magas", "zh" => "马加斯"]),
                "code" => "in"
            ],
            [
                "id" => 625,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Maykop", "zh" => "迈科普"]),
                "code" => "may"
            ],
            [
                "id" => 626,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Murmansk", "zh" => "摩尔曼斯克"]),
                "code" => "mmk"
            ],
            [
                "id" => 627,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Moscow", "zh" => "莫斯科"]),
                "code" => "mow"
            ],
            [
                "id" => 628,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Nalchik", "zh" => "纳尔奇克"]),
                "code" => "nal"
            ],
            [
                "id" => 629,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Naryan-Mar", "zh" => "纳里扬马尔"]),
                "code" => "nnm"
            ],
            [
                "id" => 630,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Juzno-Sachalinsk", "zh" => "南萨哈林斯克"]),
                "code" => "jsa"
            ],
            [
                "id" => 631,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Velikij Novgorod", "zh" => "诺夫哥罗德"]),
                "code" => "vus"
            ],
            [
                "id" => 632,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Palana", "zh" => "帕拉纳"]),
                "code" => "pal"
            ],
            [
                "id" => 633,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Pskov", "zh" => "普斯科夫"]),
                "code" => "psk"
            ],
            [
                "id" => 634,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Cheboksary", "zh" => "切博克萨雷"]),
                "code" => "csy"
            ],
            [
                "id" => 635,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Cherkessk", "zh" => "切尔克斯克"]),
                "code" => "cks"
            ],
            [
                "id" => 636,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Tyumen", "zh" => "秋明"]),
                "code" => "tyu"
            ],
            [
                "id" => 637,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Saratov", "zh" => "萨拉托夫"]),
                "code" => "sar"
            ],
            [
                "id" => 638,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Saransk", "zh" => "萨兰斯克"]),
                "code" => "skx"
            ],
            [
                "id" => 639,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Salekhard", "zh" => "萨列哈尔德"]),
                "code" => "sly"
            ],
            [
                "id" => 640,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Samara", "zh" => "萨马拉"]),
                "code" => "sam"
            ],
            [
                "id" => 641,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Syktyvkar", "zh" => "瑟克特夫卡尔"]),
                "code" => "scw"
            ],
            [
                "id" => 642,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "St. Peterburg", "zh" => "圣彼得堡"]),
                "code" => "spe"
            ],
            [
                "id" => 643,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Smolensk", "zh" => "斯摩棱斯克"]),
                "code" => "lnx"
            ],
            [
                "id" => 644,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Stavropol", "zh" => "斯塔夫罗波尔"]),
                "code" => "sta"
            ],
            [
                "id" => 645,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Tambov", "zh" => "坦波夫"]),
                "code" => "tam"
            ],
            [
                "id" => 646,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Tver", "zh" => "特维尔"]),
                "code" => "tve"
            ],
            [
                "id" => 647,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Tula", "zh" => "图拉"]),
                "code" => "tul"
            ],
            [
                "id" => 648,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Tomsk", "zh" => "托木斯克"]),
                "code" => "tom"
            ],
            [
                "id" => 649,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Voronezh", "zh" => "沃罗涅什"]),
                "code" => "vor"
            ],
            [
                "id" => 650,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Vologda", "zh" => "沃洛格达"]),
                "code" => "vlg"
            ],
            [
                "id" => 651,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Ufa", "zh" => "乌法"]),
                "code" => "ufa"
            ],
            [
                "id" => 652,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Ulan-Ude", "zh" => "乌兰乌德"]),
                "code" => "uud"
            ],
            [
                "id" => 653,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Uljanovsk", "zh" => "乌里扬诺夫斯克"]),
                "code" => "uly"
            ],
            [
                "id" => 654,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Ust-Ordynsky", "zh" => "乌斯季奥尔登斯基"]),
                "code" => "uob"
            ],
            [
                "id" => 655,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Niznij Novgorod", "zh" => "下诺夫哥罗德"]),
                "code" => "goj"
            ],
            [
                "id" => 656,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Novosibirsk", "zh" => "新西伯利亚"]),
                "code" => "nvs"
            ],
            [
                "id" => 657,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Jakutsk", "zh" => "雅库茨克"]),
                "code" => "jak"
            ],
            [
                "id" => 658,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Jaroslavl", "zh" => "雅罗斯拉夫尔"]),
                "code" => "jar"
            ],
            [
                "id" => 659,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Jekaterinburg", "zh" => "叶卡捷林堡"]),
                "code" => "jek"
            ],
            [
                "id" => 660,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Irkutsk", "zh" => "伊尔库茨克"]),
                "code" => "ikt"
            ],
            [
                "id" => 661,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Izhevsk", "zh" => "伊热夫斯克"]),
                "code" => "ijk"
            ],
            [
                "id" => 662,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Ivanovo", "zh" => "伊万诺沃"]),
                "code" => "ivo"
            ],
            [
                "id" => 663,
                "country_id" => 118,
                "state_id" => null,
                "name" => json_encode(["en" => "Yoshkar-Ola", "zh" => "约什卡尔奥拉"]),
                "code" => "yol"
            ],
            [
                "id" => 664,
                "country_id" => 194,
                "state_id" => null,
                "name" => json_encode(["en" => "Azuay", "zh" => "阿苏艾"]),
                "code" => "a"
            ],
            [
                "id" => 665,
                "country_id" => 194,
                "state_id" => null,
                "name" => json_encode(["en" => "El Oro", "zh" => "埃尔奥罗"]),
                "code" => "o"
            ],
            [
                "id" => 666,
                "country_id" => 194,
                "state_id" => null,
                "name" => json_encode(["en" => "Esmeraldas", "zh" => "埃斯梅拉尔达斯"]),
                "code" => "e"
            ],
            [
                "id" => 667,
                "country_id" => 194,
                "state_id" => null,
                "name" => json_encode(["en" => "Bolivar", "zh" => "玻利瓦尔"]),
                "code" => "b"
            ],
            [
                "id" => 668,
                "country_id" => 194,
                "state_id" => null,
                "name" => json_encode(["en" => "Guayas", "zh" => "瓜亚斯"]),
                "code" => "g"
            ],
            [
                "id" => 669,
                "country_id" => 194,
                "state_id" => null,
                "name" => json_encode(["en" => "Galapagos", "zh" => "加拉帕戈斯"]),
                "code" => "w"
            ],
            [
                "id" => 670,
                "country_id" => 194,
                "state_id" => null,
                "name" => json_encode(["en" => "Carchi", "zh" => "卡尔奇"]),
                "code" => "c"
            ],
            [
                "id" => 671,
                "country_id" => 194,
                "state_id" => null,
                "name" => json_encode(["en" => "Canar", "zh" => "卡尼亚尔"]),
                "code" => "f"
            ],
            [
                "id" => 672,
                "country_id" => 194,
                "state_id" => null,
                "name" => json_encode(["en" => "Cotopaxi", "zh" => "科托帕希"]),
                "code" => "x"
            ],
            [
                "id" => 673,
                "country_id" => 194,
                "state_id" => null,
                "name" => json_encode(["en" => "Loja", "zh" => "洛哈"]),
                "code" => "l"
            ],
            [
                "id" => 674,
                "country_id" => 194,
                "state_id" => null,
                "name" => json_encode(["en" => "Los Rios", "zh" => "洛斯里奥斯"]),
                "code" => "r"
            ],
            [
                "id" => 675,
                "country_id" => 194,
                "state_id" => null,
                "name" => json_encode(["en" => "Manabi", "zh" => "马纳比"]),
                "code" => "m"
            ],
            [
                "id" => 676,
                "country_id" => 194,
                "state_id" => null,
                "name" => json_encode(["en" => "Morona-Santiago", "zh" => "莫罗纳－圣地亚哥"]),
                "code" => "s"
            ],
            [
                "id" => 677,
                "country_id" => 194,
                "state_id" => null,
                "name" => json_encode(["en" => "Napo, Orellana", "zh" => "纳波，奥雷利亚纳"]),
                "code" => "d"
            ],
            [
                "id" => 678,
                "country_id" => 194,
                "state_id" => null,
                "name" => json_encode(["en" => "Pastaza", "zh" => "帕斯塔萨"]),
                "code" => "y"
            ],
            [
                "id" => 679,
                "country_id" => 194,
                "state_id" => null,
                "name" => json_encode(["en" => "Pichincha", "zh" => "皮钦查"]),
                "code" => "p"
            ],
            [
                "id" => 680,
                "country_id" => 194,
                "state_id" => null,
                "name" => json_encode(["en" => "Chimborazo", "zh" => "钦博拉索"]),
                "code" => "h"
            ],
            [
                "id" => 681,
                "country_id" => 194,
                "state_id" => null,
                "name" => json_encode(["en" => "Zamora-Chinchipe", "zh" => "萨莫拉－钦奇佩"]),
                "code" => "z"
            ],
            [
                "id" => 682,
                "country_id" => 194,
                "state_id" => null,
                "name" => json_encode(["en" => "Sucumbios", "zh" => "苏昆毕奥斯"]),
                "code" => "u"
            ],
            [
                "id" => 683,
                "country_id" => 194,
                "state_id" => null,
                "name" => json_encode(["en" => "Tungurahua", "zh" => "通古拉瓦"]),
                "code" => "t"
            ],
            [
                "id" => 684,
                "country_id" => 194,
                "state_id" => null,
                "name" => json_encode(["en" => "Imbabura", "zh" => "因巴布拉"]),
                "code" => "i"
            ],
            [
                "id" => 685,
                "country_id" => 10,
                "state_id" => null,
                "name" => json_encode(["en" => "Anseba", "zh" => "安塞巴"]),
                "code" => "ke"
            ],
            [
                "id" => 686,
                "country_id" => 10,
                "state_id" => null,
                "name" => json_encode(["en" => "Semenawi Keyih Bahri", "zh" => "北红海"]),
                "code" => "sk"
            ],
            [
                "id" => 687,
                "country_id" => 10,
                "state_id" => null,
                "name" => json_encode(["en" => "Gash Barka", "zh" => "加什·巴尔卡"]),
                "code" => "br"
            ],
            [
                "id" => 688,
                "country_id" => 10,
                "state_id" => null,
                "name" => json_encode(["en" => "Debub", "zh" => "南部"]),
                "code" => "de"
            ],
            [
                "id" => 689,
                "country_id" => 10,
                "state_id" => null,
                "name" => json_encode(["en" => "Debubawi Keyih Bahri", "zh" => "南红海"]),
                "code" => "dk"
            ],
            [
                "id" => 690,
                "country_id" => 10,
                "state_id" => null,
                "name" => json_encode(["en" => "Maekel", "zh" => "中部"]),
                "code" => "ma"
            ],
            [
                "id" => 691,
                "country_id" => 150,
                "state_id" => null,
                "name" => json_encode(["en" => "Arles", "zh" => "阿尔勒"]),
                "code" => "arl"
            ],
            [
                "id" => 692,
                "country_id" => 150,
                "state_id" => null,
                "name" => json_encode(["en" => "Ajaccio", "zh" => "阿雅克修"]),
                "code" => "aja"
            ],
            [
                "id" => 693,
                "country_id" => 150,
                "state_id" => null,
                "name" => json_encode(["en" => "Aix-en-Provence", "zh" => "艾克斯"]),
                "code" => "qxb"
            ],
            [
                "id" => 694,
                "country_id" => 150,
                "state_id" => null,
                "name" => json_encode(["en" => "Orleans", "zh" => "奥尔良"]),
                "code" => "orr"
            ],
            [
                "id" => 695,
                "country_id" => 150,
                "state_id" => null,
                "name" => json_encode(["en" => "Paris", "zh" => "巴黎"]),
                "code" => "par"
            ],
            [
                "id" => 696,
                "country_id" => 150,
                "state_id" => null,
                "name" => json_encode(["en" => "Besancon", "zh" => "贝桑松"]),
                "code" => "bsn"
            ],
            [
                "id" => 697,
                "country_id" => 150,
                "state_id" => null,
                "name" => json_encode(["en" => "Dijon", "zh" => "第戎"]),
                "code" => "dij"
            ],
            [
                "id" => 698,
                "country_id" => 150,
                "state_id" => null,
                "name" => json_encode(["en" => "Frejus", "zh" => "弗雷瑞斯"]),
                "code" => "frj"
            ],
            [
                "id" => 699,
                "country_id" => 150,
                "state_id" => null,
                "name" => json_encode(["en" => "Caen", "zh" => "卡昂"]),
                "code" => "cfr"
            ],
            [
                "id" => 700,
                "country_id" => 150,
                "state_id" => null,
                "name" => json_encode(["en" => "Rennes", "zh" => "雷恩"]),
                "code" => "rns"
            ],
            [
                "id" => 701,
                "country_id" => 150,
                "state_id" => null,
                "name" => json_encode(["en" => "Lyon", "zh" => "里昂"]),
                "code" => "lio"
            ],
            [
                "id" => 702,
                "country_id" => 150,
                "state_id" => null,
                "name" => json_encode(["en" => "Lille", "zh" => "里尔"]),
                "code" => "lle"
            ],
            [
                "id" => 703,
                "country_id" => 150,
                "state_id" => null,
                "name" => json_encode(["en" => "Limoges", "zh" => "利摩日"]),
                "code" => "lig"
            ],
            [
                "id" => 704,
                "country_id" => 150,
                "state_id" => null,
                "name" => json_encode(["en" => "Rouen", "zh" => "鲁昂"]),
                "code" => "uro"
            ],
            [
                "id" => 705,
                "country_id" => 150,
                "state_id" => null,
                "name" => json_encode(["en" => "Marseille", "zh" => "马赛"]),
                "code" => "mrs"
            ],
            [
                "id" => 706,
                "country_id" => 150,
                "state_id" => null,
                "name" => json_encode(["en" => "Metz", "zh" => "梅斯"]),
                "code" => "mzm"
            ],
            [
                "id" => 707,
                "country_id" => 150,
                "state_id" => null,
                "name" => json_encode(["en" => "Montpellier", "zh" => "蒙彼利埃"]),
                "code" => "mpl"
            ],
            [
                "id" => 708,
                "country_id" => 150,
                "state_id" => null,
                "name" => json_encode(["en" => "Nantes", "zh" => "南特"]),
                "code" => "nte"
            ],
            [
                "id" => 709,
                "country_id" => 150,
                "state_id" => null,
                "name" => json_encode(["en" => "Nice", "zh" => "尼斯"]),
                "code" => "nce"
            ],
            [
                "id" => 710,
                "country_id" => 150,
                "state_id" => null,
                "name" => json_encode(["en" => "Chalons-en-Champagne", "zh" => "沙隆"]),
                "code" => "csm"
            ],
            [
                "id" => 711,
                "country_id" => 150,
                "state_id" => null,
                "name" => json_encode(["en" => "Toulouse", "zh" => "图卢兹"]),
                "code" => "tls"
            ],
            [
                "id" => 712,
                "country_id" => 150,
                "state_id" => null,
                "name" => json_encode(["en" => "Valence", "zh" => "瓦朗斯"]),
                "code" => "vaa"
            ],
            [
                "id" => 713,
                "country_id" => 150,
                "state_id" => null,
                "name" => json_encode(["en" => "Amiens", "zh" => "亚眠"]),
                "code" => "ami"
            ],
            [
                "id" => 714,
                "country_id" => 99,
                "state_id" => null,
                "name" => json_encode(["en" => "Davao", "zh" => "达沃"]),
                "code" => "dor"
            ],
            [
                "id" => 715,
                "country_id" => 99,
                "state_id" => null,
                "name" => json_encode(["en" => "Caloocan", "zh" => "卡卢坎"]),
                "code" => "cao"
            ],
            [
                "id" => 716,
                "country_id" => 99,
                "state_id" => null,
                "name" => json_encode(["en" => "Manila", "zh" => "马尼拉"]),
                "code" => "mnl"
            ],
            [
                "id" => 717,
                "country_id" => 99,
                "state_id" => null,
                "name" => json_encode(["en" => "Cebu", "zh" => "宿务"]),
                "code" => "ceb"
            ],
            [
                "id" => 718,
                "country_id" => 162,
                "state_id" => null,
                "name" => json_encode(["en" => "Espoo", "zh" => "埃斯波"]),
                "code" => "esp"
            ],
            [
                "id" => 719,
                "country_id" => 162,
                "state_id" => null,
                "name" => json_encode(["en" => "Oulu", "zh" => "奥卢"]),
                "code" => "olu"
            ],
            [
                "id" => 720,
                "country_id" => 162,
                "state_id" => null,
                "name" => json_encode(["en" => "Pori", "zh" => "波里"]),
                "code" => "por"
            ],
            [
                "id" => 721,
                "country_id" => 162,
                "state_id" => null,
                "name" => json_encode(["en" => "Porvoo", "zh" => "博尔沃"]),
                "code" => "prv"
            ],
            [
                "id" => 722,
                "country_id" => 162,
                "state_id" => null,
                "name" => json_encode(["en" => "Hameenlinna", "zh" => "海门林纳"]),
                "code" => "hmy"
            ],
            [
                "id" => 723,
                "country_id" => 162,
                "state_id" => null,
                "name" => json_encode(["en" => "Helsinki", "zh" => "赫尔辛基"]),
                "code" => "hel"
            ],
            [
                "id" => 724,
                "country_id" => 162,
                "state_id" => null,
                "name" => json_encode(["en" => "Kajaani", "zh" => "卡亚尼"]),
                "code" => "kaj"
            ],
            [
                "id" => 725,
                "country_id" => 162,
                "state_id" => null,
                "name" => json_encode(["en" => "Kokkola", "zh" => "科科拉"]),
                "code" => "kok"
            ],
            [
                "id" => 726,
                "country_id" => 162,
                "state_id" => null,
                "name" => json_encode(["en" => "Kotka", "zh" => "科特卡"]),
                "code" => "ktk"
            ],
            [
                "id" => 727,
                "country_id" => 162,
                "state_id" => null,
                "name" => json_encode(["en" => "Kuopio", "zh" => "库奥皮奥"]),
                "code" => "kuo"
            ],
            [
                "id" => 728,
                "country_id" => 162,
                "state_id" => null,
                "name" => json_encode(["en" => "Lahti", "zh" => "拉赫蒂"]),
                "code" => "lhi"
            ],
            [
                "id" => 729,
                "country_id" => 162,
                "state_id" => null,
                "name" => json_encode(["en" => "Lappeenranta", "zh" => "拉彭兰塔"]),
                "code" => "lpp"
            ],
            [
                "id" => 730,
                "country_id" => 162,
                "state_id" => null,
                "name" => json_encode(["en" => "Rovaniemi", "zh" => "罗瓦涅米"]),
                "code" => "rvn"
            ],
            [
                "id" => 731,
                "country_id" => 162,
                "state_id" => null,
                "name" => json_encode(["en" => "Mariehamn", "zh" => "玛丽港"]),
                "code" => "mhq"
            ],
            [
                "id" => 732,
                "country_id" => 162,
                "state_id" => null,
                "name" => json_encode(["en" => "Mikkeli", "zh" => "米凯利"]),
                "code" => "mik"
            ],
            [
                "id" => 733,
                "country_id" => 162,
                "state_id" => null,
                "name" => json_encode(["en" => "Tampere", "zh" => "坦佩雷"]),
                "code" => "tmp"
            ],
            [
                "id" => 734,
                "country_id" => 162,
                "state_id" => null,
                "name" => json_encode(["en" => "Turku", "zh" => "图尔库"]),
                "code" => "tku"
            ],
            [
                "id" => 735,
                "country_id" => 162,
                "state_id" => null,
                "name" => json_encode(["en" => "Vaasa", "zh" => "瓦萨"]),
                "code" => "vaa"
            ],
            [
                "id" => 736,
                "country_id" => 162,
                "state_id" => null,
                "name" => json_encode(["en" => "Vantaa", "zh" => "万塔"]),
                "code" => "vat"
            ],
            [
                "id" => 737,
                "country_id" => 162,
                "state_id" => null,
                "name" => json_encode(["en" => "Joensuu", "zh" => "约恩苏"]),
                "code" => "joe"
            ],
            [
                "id" => 738,
                "country_id" => 49,
                "state_id" => null,
                "name" => json_encode(["en" => "Paul", "zh" => "保尔"]),
                "code" => "pa"
            ],
            [
                "id" => 739,
                "country_id" => 49,
                "state_id" => null,
                "name" => json_encode(["en" => "Porto Novo", "zh" => "波多诺伏"]),
                "code" => "pn"
            ],
            [
                "id" => 740,
                "country_id" => 49,
                "state_id" => null,
                "name" => json_encode(["en" => "Boa Vista", "zh" => "博阿维斯塔岛"]),
                "code" => "bv"
            ],
            [
                "id" => 741,
                "country_id" => 49,
                "state_id" => null,
                "name" => json_encode(["en" => "Brava", "zh" => "布拉瓦岛"]),
                "code" => "br"
            ],
            [
                "id" => 742,
                "country_id" => 49,
                "state_id" => null,
                "name" => json_encode(["en" => "Ribeira Grande", "zh" => "大里贝拉"]),
                "code" => "rg"
            ],
            [
                "id" => 743,
                "country_id" => 49,
                "state_id" => null,
                "name" => json_encode(["en" => "Fogo", "zh" => "福古岛"]),
                "code" => "fo"
            ],
            [
                "id" => 744,
                "country_id" => 49,
                "state_id" => null,
                "name" => json_encode(["en" => "Maio", "zh" => "马尤岛"]),
                "code" => "ma"
            ],
            [
                "id" => 745,
                "country_id" => 49,
                "state_id" => null,
                "name" => json_encode(["en" => "Mosteiros", "zh" => "莫斯特罗"]),
                "code" => "mo"
            ],
            [
                "id" => 746,
                "country_id" => 49,
                "state_id" => null,
                "name" => json_encode(["en" => "Praia", "zh" => "普拉亚"]),
                "code" => "pr"
            ],
            [
                "id" => 747,
                "country_id" => 49,
                "state_id" => null,
                "name" => json_encode(["en" => "Sal", "zh" => "萨尔岛"]),
                "code" => "sl"
            ],
            [
                "id" => 748,
                "country_id" => 49,
                "state_id" => null,
                "name" => json_encode(["en" => "Santo Antao", "zh" => "圣安唐岛"]),
                "code" => "sa"
            ],
            [
                "id" => 749,
                "country_id" => 49,
                "state_id" => null,
                "name" => json_encode(["en" => "Santiago", "zh" => "圣地亚哥岛"]),
                "code" => "ia"
            ],
            [
                "id" => 750,
                "country_id" => 49,
                "state_id" => null,
                "name" => json_encode(["en" => "Sao Domingos", "zh" => "圣多明戈"]),
                "code" => "sd"
            ],
            [
                "id" => 751,
                "country_id" => 49,
                "state_id" => null,
                "name" => json_encode(["en" => "Sao Filipe", "zh" => "圣菲利普"]),
                "code" => "sf"
            ],
            [
                "id" => 752,
                "country_id" => 49,
                "state_id" => null,
                "name" => json_encode(["en" => "Santa Catarina", "zh" => "圣卡塔琳娜"]),
                "code" => "ca"
            ],
            [
                "id" => 753,
                "country_id" => 49,
                "state_id" => null,
                "name" => json_encode(["en" => "Santa Cruz", "zh" => "圣克鲁斯"]),
                "code" => "cr"
            ],
            [
                "id" => 754,
                "country_id" => 49,
                "state_id" => null,
                "name" => json_encode(["en" => "Sao Miguel", "zh" => "圣米戈尔"]),
                "code" => "sm"
            ],
            [
                "id" => 755,
                "country_id" => 49,
                "state_id" => null,
                "name" => json_encode(["en" => "Sao Nicolau", "zh" => "圣尼古拉岛"]),
                "code" => "sn"
            ],
            [
                "id" => 756,
                "country_id" => 49,
                "state_id" => null,
                "name" => json_encode(["en" => "Sao Vicente", "zh" => "圣维森特岛"]),
                "code" => "sv"
            ],
            [
                "id" => 757,
                "country_id" => 49,
                "state_id" => null,
                "name" => json_encode(["en" => "Tarrafal", "zh" => "塔拉法尔"]),
                "code" => "ta"
            ],
            [
                "id" => 758,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Arauca", "zh" => "阿劳卡"]),
                "code" => "ara"
            ],
            [
                "id" => 759,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Antioquia", "zh" => "安提奥基亚"]),
                "code" => "ant"
            ],
            [
                "id" => 760,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Norte de Santander", "zh" => "北桑坦德"]),
                "code" => "nds"
            ],
            [
                "id" => 761,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Bogota", "zh" => "波哥大首都区"]),
                "code" => "bdc"
            ],
            [
                "id" => 762,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Bolivar", "zh" => "博利瓦尔"]),
                "code" => "bol"
            ],
            [
                "id" => 763,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Boyaca", "zh" => "博亚卡"]),
                "code" => "boy"
            ],
            [
                "id" => 764,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Atlantico", "zh" => "大西洋"]),
                "code" => "atl"
            ],
            [
                "id" => 765,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Guaviare", "zh" => "瓜维亚雷"]),
                "code" => "gvr"
            ],
            [
                "id" => 766,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "La Guajira", "zh" => "瓜希拉"]),
                "code" => "gjr"
            ],
            [
                "id" => 767,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Guainia", "zh" => "瓜伊尼亚"]),
                "code" => "gna"
            ],
            [
                "id" => 768,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Quindio", "zh" => "金迪奥"]),
                "code" => "qui"
            ],
            [
                "id" => 769,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Caldas", "zh" => "卡尔达斯"]),
                "code" => "cal"
            ],
            [
                "id" => 770,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Caqueta", "zh" => "卡克塔"]),
                "code" => "caq"
            ],
            [
                "id" => 771,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Casanare", "zh" => "卡萨纳雷"]),
                "code" => "cas"
            ],
            [
                "id" => 772,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Cauca", "zh" => "考卡"]),
                "code" => "cau"
            ],
            [
                "id" => 773,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Valle del Cauca", "zh" => "考卡山谷"]),
                "code" => "vdc"
            ],
            [
                "id" => 774,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Cordoba", "zh" => "科尔多巴"]),
                "code" => "cor"
            ],
            [
                "id" => 775,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Cundinamarca", "zh" => "昆迪纳马卡"]),
                "code" => "cam"
            ],
            [
                "id" => 776,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Risaralda", "zh" => "利萨拉尔达"]),
                "code" => "ris"
            ],
            [
                "id" => 777,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Magdalena", "zh" => "马格达雷那"]),
                "code" => "mag"
            ],
            [
                "id" => 778,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Meta", "zh" => "梅塔"]),
                "code" => "met"
            ],
            [
                "id" => 779,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Narino", "zh" => "纳里尼奥"]),
                "code" => "nar"
            ],
            [
                "id" => 780,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Putumayo", "zh" => "普图马约"]),
                "code" => "put"
            ],
            [
                "id" => 781,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Choco", "zh" => "乔科"]),
                "code" => "cho"
            ],
            [
                "id" => 782,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Cesar", "zh" => "塞萨尔"]),
                "code" => "ces"
            ],
            [
                "id" => 783,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Santander", "zh" => "桑坦德"]),
                "code" => "san"
            ],
            [
                "id" => 784,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "San Andres y Providencia", "zh" => "圣安德烈斯-普罗维登西亚"]),
                "code" => "sap"
            ],
            [
                "id" => 785,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Sucre", "zh" => "苏克雷"]),
                "code" => "suc"
            ],
            [
                "id" => 786,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Tolima", "zh" => "托利马"]),
                "code" => "tol"
            ],
            [
                "id" => 787,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Vichada", "zh" => "维查达"]),
                "code" => "vic"
            ],
            [
                "id" => 788,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Vaupes", "zh" => "沃佩斯"]),
                "code" => "vau"
            ],
            [
                "id" => 789,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Huila", "zh" => "乌伊拉"]),
                "code" => "hui"
            ],
            [
                "id" => 790,
                "country_id" => 187,
                "state_id" => null,
                "name" => json_encode(["en" => "Amazonas", "zh" => "亚马孙"]),
                "code" => "amz"
            ],
            [
                "id" => 791,
                "country_id" => 103,
                "state_id" => null,
                "name" => json_encode(["en" => "Alajuela", "zh" => "阿拉胡埃拉"]),
                "code" => "a"
            ],
            [
                "id" => 792,
                "country_id" => 103,
                "state_id" => null,
                "name" => json_encode(["en" => "Heredia", "zh" => "埃雷迪亚"]),
                "code" => "h"
            ],
            [
                "id" => 793,
                "country_id" => 103,
                "state_id" => null,
                "name" => json_encode(["en" => "Guanacaste", "zh" => "瓜纳卡斯特"]),
                "code" => "g"
            ],
            [
                "id" => 794,
                "country_id" => 103,
                "state_id" => null,
                "name" => json_encode(["en" => "Cartago", "zh" => "卡塔戈"]),
                "code" => "c"
            ],
            [
                "id" => 795,
                "country_id" => 103,
                "state_id" => null,
                "name" => json_encode(["en" => "Limon", "zh" => "利蒙"]),
                "code" => "l"
            ],
            [
                "id" => 796,
                "country_id" => 103,
                "state_id" => null,
                "name" => json_encode(["en" => "Puntarenas", "zh" => "蓬塔雷纳斯"]),
                "code" => "p"
            ],
            [
                "id" => 797,
                "country_id" => 103,
                "state_id" => null,
                "name" => json_encode(["en" => "San Jose", "zh" => "圣何塞"]),
                "code" => "sj"
            ],
            [
                "id" => 798,
                "country_id" => 104,
                "state_id" => null,
                "name" => json_encode(["en" => "Holguin", "zh" => "奥尔金"]),
                "code" => "11"
            ],
            [
                "id" => 799,
                "country_id" => 104,
                "state_id" => null,
                "name" => json_encode(["en" => "Pinar del Rio", "zh" => "比那尔德里奥"]),
                "code" => "1"
            ],
            [
                "id" => 800,
                "country_id" => 104,
                "state_id" => null,
                "name" => json_encode(["en" => "Villa Clara", "zh" => "比亚克拉拉"]),
                "code" => "5"
            ],
            [
                "id" => 801,
                "country_id" => 104,
                "state_id" => null,
                "name" => json_encode(["en" => "Granma", "zh" => "格拉玛"]),
                "code" => "12"
            ],
            [
                "id" => 802,
                "country_id" => 104,
                "state_id" => null,
                "name" => json_encode(["en" => "Guantanamo", "zh" => "关塔那摩"]),
                "code" => "14"
            ],
            [
                "id" => 803,
                "country_id" => 104,
                "state_id" => null,
                "name" => json_encode(["en" => "La Habana", "zh" => "哈瓦那"]),
                "code" => "2"
            ],
            [
                "id" => 804,
                "country_id" => 104,
                "state_id" => null,
                "name" => json_encode(["en" => "Ciudad de la Habana", "zh" => "哈瓦那城"]),
                "code" => "3"
            ],
            [
                "id" => 805,
                "country_id" => 104,
                "state_id" => null,
                "name" => json_encode(["en" => "Camaguey", "zh" => "卡马圭"]),
                "code" => "9"
            ],
            [
                "id" => 806,
                "country_id" => 104,
                "state_id" => null,
                "name" => json_encode(["en" => "Las Tunas", "zh" => "拉斯图纳斯"]),
                "code" => "10"
            ],
            [
                "id" => 807,
                "country_id" => 104,
                "state_id" => null,
                "name" => json_encode(["en" => "Matanzas", "zh" => "马坦萨斯"]),
                "code" => "4"
            ],
            [
                "id" => 808,
                "country_id" => 104,
                "state_id" => null,
                "name" => json_encode(["en" => "Mayari", "zh" => "马亚里"]),
                "code" => "may"
            ],
            [
                "id" => 809,
                "country_id" => 104,
                "state_id" => null,
                "name" => json_encode(["en" => "Manzanillo", "zh" => "曼萨尼罗"]),
                "code" => "mzo"
            ],
            [
                "id" => 810,
                "country_id" => 104,
                "state_id" => null,
                "name" => json_encode(["en" => "Isla de la Juventud", "zh" => "青年岛特区"]),
                "code" => "99"
            ],
            [
                "id" => 811,
                "country_id" => 104,
                "state_id" => null,
                "name" => json_encode(["en" => "Santiago de Cuba", "zh" => "圣地亚哥"]),
                "code" => "13"
            ],
            [
                "id" => 812,
                "country_id" => 104,
                "state_id" => null,
                "name" => json_encode(["en" => "Sancti Spiritus", "zh" => "圣斯皮里图斯"]),
                "code" => "7"
            ],
            [
                "id" => 813,
                "country_id" => 104,
                "state_id" => null,
                "name" => json_encode(["en" => "Cienfuegos", "zh" => "西恩富戈斯"]),
                "code" => "6"
            ],
            [
                "id" => 814,
                "country_id" => 104,
                "state_id" => null,
                "name" => json_encode(["en" => "Ciego de Avila", "zh" => "谢戈德阿维拉"]),
                "code" => "8"
            ],
            [
                "id" => 815,
                "country_id" => 188,
                "state_id" => null,
                "name" => json_encode(["en" => "Essequibo Islands-West Demerara", "zh" => "埃塞奎博群岛-西德梅拉拉"]),
                "code" => "ew"
            ],
            [
                "id" => 816,
                "country_id" => 188,
                "state_id" => null,
                "name" => json_encode(["en" => "Barima-Waini", "zh" => "巴里马-瓦伊尼"]),
                "code" => "bw"
            ],
            [
                "id" => 817,
                "country_id" => 188,
                "state_id" => null,
                "name" => json_encode(["en" => "Pomeroon-Supenaam", "zh" => "波默伦-苏佩纳姆"]),
                "code" => "pm"
            ],
            [
                "id" => 818,
                "country_id" => 188,
                "state_id" => null,
                "name" => json_encode(["en" => "Potaro-Siparuni", "zh" => "波塔罗-锡帕鲁尼"]),
                "code" => "pi"
            ],
            [
                "id" => 819,
                "country_id" => 188,
                "state_id" => null,
                "name" => json_encode(["en" => "Demerara-Mahaica", "zh" => "德梅拉拉-马海卡"]),
                "code" => "dm"
            ],
            [
                "id" => 820,
                "country_id" => 188,
                "state_id" => null,
                "name" => json_encode(["en" => "East Berbice-Corentyne", "zh" => "东伯比斯-科兰太因"]),
                "code" => "ec"
            ],
            [
                "id" => 821,
                "country_id" => 188,
                "state_id" => null,
                "name" => json_encode(["en" => "Cuyuni-Mazaruni", "zh" => "库尤尼-马扎鲁尼"]),
                "code" => "cm"
            ],
            [
                "id" => 822,
                "country_id" => 188,
                "state_id" => null,
                "name" => json_encode(["en" => "Mahaica-Berbice", "zh" => "马海卡-伯比斯"]),
                "code" => "mb"
            ],
            [
                "id" => 823,
                "country_id" => 188,
                "state_id" => null,
                "name" => json_encode(["en" => "Upper Demerara-Berbice", "zh" => "上德梅拉拉-伯比斯"]),
                "code" => "ud"
            ],
            [
                "id" => 824,
                "country_id" => 188,
                "state_id" => null,
                "name" => json_encode(["en" => "Upper Takutu-Upper Essequibo", "zh" => "上塔库图-上埃塞奎博"]),
                "code" => "ut"
            ],
            [
                "id" => 825,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Arkalyk", "zh" => "阿尔卡累克"]),
                "code" => "ayk"
            ],
            [
                "id" => 826,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Aqmola", "zh" => "阿克莫拉"]),
                "code" => "akm"
            ],
            [
                "id" => 827,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Aksu", "zh" => "阿克苏"]),
                "code" => "aks"
            ],
            [
                "id" => 828,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Aqtobe", "zh" => "阿克托别"]),
                "code" => "akt"
            ],
            [
                "id" => 829,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Almaty", "zh" => "阿拉木图"]),
                "code" => "ala"
            ],
            [
                "id" => 830,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Arys", "zh" => "阿雷斯"]),
                "code" => "ary"
            ],
            [
                "id" => 831,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Astana", "zh" => "阿斯塔纳市"]),
                "code" => "ast"
            ],
            [
                "id" => 832,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Atyrau", "zh" => "阿特劳"]),
                "code" => "aty"
            ],
            [
                "id" => 833,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Ekibastuz", "zh" => "埃基巴斯图兹"]),
                "code" => "ekb"
            ],
            [
                "id" => 834,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Balkhash", "zh" => "巴尔喀什"]),
                "code" => "bxh"
            ],
            [
                "id" => 835,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Pavlodar", "zh" => "巴甫洛达尔"]),
                "code" => "pav"
            ],
            [
                "id" => 836,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Soltustik Qazaqstan", "zh" => "北哈萨克斯坦"]),
                "code" => "sev"
            ],
            [
                "id" => 837,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Shyghys Qazaqstan", "zh" => "东哈萨克斯坦"]),
                "code" => "vos"
            ],
            [
                "id" => 838,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Zyryanovsk", "zh" => "济良诺夫斯克"]),
                "code" => "zyr"
            ],
            [
                "id" => 839,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Zhambyl", "zh" => "江布尔"]),
                "code" => "dmb"
            ],
            [
                "id" => 840,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Zhezkazgan", "zh" => "杰兹卡兹甘"]),
                "code" => "dzh"
            ],
            [
                "id" => 841,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Qaraghandy", "zh" => "卡拉干达"]),
                "code" => "kar"
            ],
            [
                "id" => 842,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Karazhal", "zh" => "卡拉扎尔"]),
                "code" => "kzo"
            ],
            [
                "id" => 843,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Kapchagay", "zh" => "卡普恰盖"]),
                "code" => "kap"
            ],
            [
                "id" => 844,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Qostanay", "zh" => "科斯塔奈"]),
                "code" => "kst"
            ],
            [
                "id" => 845,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Qyzylorda", "zh" => "克孜勒奥尔达"]),
                "code" => "kzy"
            ],
            [
                "id" => 846,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Kentau", "zh" => "肯套"]),
                "code" => "ken"
            ],
            [
                "id" => 847,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Kurchatov", "zh" => "库尔恰托夫"]),
                "code" => "kur"
            ],
            [
                "id" => 848,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Lisakovsk", "zh" => "利萨科夫斯克"]),
                "code" => "lkk"
            ],
            [
                "id" => 849,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Leninogorsk", "zh" => "列宁诺戈尔斯克"]),
                "code" => "len"
            ],
            [
                "id" => 850,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Rudny", "zh" => "鲁德内"]),
                "code" => "rud"
            ],
            [
                "id" => 851,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Mangghystau", "zh" => "曼格斯套"]),
                "code" => "man"
            ],
            [
                "id" => 852,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Ongtustik Qazaqstan", "zh" => "南哈萨克斯坦"]),
                "code" => "kgt"
            ],
            [
                "id" => 853,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Saran", "zh" => "萨兰"]),
                "code" => "sar"
            ],
            [
                "id" => 854,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Semey", "zh" => "塞梅伊"]),
                "code" => "sem"
            ],
            [
                "id" => 855,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Shakhtinsk", "zh" => "沙赫京斯克"]),
                "code" => "sak"
            ],
            [
                "id" => 856,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Stepnogorsk", "zh" => "斯捷普诺戈尔斯克"]),
                "code" => "ste"
            ],
            [
                "id" => 857,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Tekeli", "zh" => "铁克利"]),
                "code" => "tek"
            ],
            [
                "id" => 858,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Temirtau", "zh" => "铁米尔套"]),
                "code" => "tem"
            ],
            [
                "id" => 859,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Turkestan", "zh" => "突厥斯坦"]),
                "code" => "tur"
            ],
            [
                "id" => 860,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Batys Qazaqstan", "zh" => "西哈萨克斯坦"]),
                "code" => "zap"
            ],
            [
                "id" => 861,
                "country_id" => 98,
                "state_id" => null,
                "name" => json_encode(["en" => "Zhanaozen", "zh" => "扎纳奥津"]),
                "code" => "zha"
            ],
            [
                "id" => 862,
                "country_id" => 141,
                "state_id" => null,
                "name" => json_encode(["en" => "Almere", "zh" => "阿尔梅勒"]),
                "code" => "aer"
            ],
            [
                "id" => 863,
                "country_id" => 141,
                "state_id" => null,
                "name" => json_encode(["en" => "Amersfoort", "zh" => "阿默斯福特"]),
                "code" => "ame"
            ],
            [
                "id" => 864,
                "country_id" => 141,
                "state_id" => null,
                "name" => json_encode(["en" => "Amsterdam", "zh" => "阿姆斯特丹"]),
                "code" => "ams"
            ],
            [
                "id" => 865,
                "country_id" => 141,
                "state_id" => null,
                "name" => json_encode(["en" => "Arnhem", "zh" => "阿纳姆"]),
                "code" => "arn"
            ],
            [
                "id" => 866,
                "country_id" => 141,
                "state_id" => null,
                "name" => json_encode(["en" => "Apeldoorn", "zh" => "阿珀尔多伦"]),
                "code" => "ape"
            ],
            [
                "id" => 867,
                "country_id" => 141,
                "state_id" => null,
                "name" => json_encode(["en" => "Assen", "zh" => "阿森"]),
                "code" => "ass"
            ],
            [
                "id" => 868,
                "country_id" => 141,
                "state_id" => null,
                "name" => json_encode(["en" => "Ede", "zh" => "埃德"]),
                "code" => "ede"
            ],
            [
                "id" => 869,
                "country_id" => 141,
                "state_id" => null,
                "name" => json_encode(["en" => "Emmen", "zh" => "埃门"]),
                "code" => "emm"
            ],
            [
                "id" => 870,
                "country_id" => 141,
                "state_id" => null,
                "name" => json_encode(["en" => "Eindhoven", "zh" => "埃因霍芬"]),
                "code" => "ein"
            ],
            [
                "id" => 871,
                "country_id" => 141,
                "state_id" => null,
                "name" => json_encode(["en" => "Breda", "zh" => "布雷达"]),
                "code" => "brd"
            ],
            [
                "id" => 872,
                "country_id" => 141,
                "state_id" => null,
                "name" => json_encode(["en" => "Tilburg", "zh" => "蒂尔堡"]),
                "code" => "tlb"
            ],
            [
                "id" => 873,
                "country_id" => 141,
                "state_id" => null,
                "name" => json_encode(["en" => "Dordrecht", "zh" => "多德雷赫特"]),
                "code" => "dor"
            ],
            [
                "id" => 874,
                "country_id" => 141,
                "state_id" => null,
                "name" => json_encode(["en" => "Enschede", "zh" => "恩斯赫德"]),
                "code" => "ens"
            ],
            [
                "id" => 875,
                "country_id" => 141,
                "state_id" => null,
                "name" => json_encode(["en" => "Groningen", "zh" => "格罗宁根"]),
                "code" => "grq"
            ],
            [
                "id" => 876,
                "country_id" => 141,
                "state_id" => null,
                "name" => json_encode(["en" => "Haarlem", "zh" => "哈勒姆"]),
                "code" => "hra"
            ],
            [
                "id" => 877,
                "country_id" => 141,
                "state_id" => null,
                "name" => json_encode(["en" => "Hague", "zh" => "海牙"]),
                "code" => "hag"
            ],
            [
                "id" => 878,
                "country_id" => 141,
                "state_id" => null,
                "name" => json_encode(["en" => "Hoofddorp", "zh" => "霍夫多尔普"]),
                "code" => "hfd"
            ],
            [
                "id" => 879,
                "country_id" => 141,
                "state_id" => null,
                "name" => json_encode(["en" => "Leiden", "zh" => "莱顿"]),
                "code" => "lid"
            ],
            [
                "id" => 880,
                "country_id" => 141,
                "state_id" => null,
                "name" => json_encode(["en" => "Lelystad", "zh" => "莱利斯塔德"]),
                "code" => "ley"
            ],
            [
                "id" => 881,
                "country_id" => 141,
                "state_id" => null,
                "name" => json_encode(["en" => "Rotterdam", "zh" => "鹿特丹"]),
                "code" => "rtm"
            ],
            [
                "id" => 882,
                "country_id" => 141,
                "state_id" => null,
                "name" => json_encode(["en" => "Leeuwarden", "zh" => "吕伐登"]),
                "code" => "lwr"
            ],
            [
                "id" => 883,
                "country_id" => 141,
                "state_id" => null,
                "name" => json_encode(["en" => "Maastricht", "zh" => "马斯特里赫特"]),
                "code" => "mst"
            ],
            [
                "id" => 884,
                "country_id" => 141,
                "state_id" => null,
                "name" => json_encode(["en" => "Middelburg", "zh" => "米德尔堡"]),
                "code" => "mdl"
            ],
            [
                "id" => 885,
                "country_id" => 141,
                "state_id" => null,
                "name" => json_encode(["en" => "Nijmegen", "zh" => "奈梅亨"]),
                "code" => "nij"
            ],
            [
                "id" => 886,
                "country_id" => 141,
                "state_id" => null,
                "name" => json_encode(["en" => "'s-Hertogenbosch", "zh" => "斯海尔托亨博思"]),
                "code" => "htb"
            ],
            [
                "id" => 887,
                "country_id" => 141,
                "state_id" => null,
                "name" => json_encode(["en" => "Utrecht", "zh" => "乌得勒支"]),
                "code" => "utc"
            ],
            [
                "id" => 888,
                "country_id" => 141,
                "state_id" => null,
                "name" => json_encode(["en" => "Zwolle", "zh" => "兹沃勒"]),
                "code" => "zwo"
            ],
            [
                "id" => 889,
                "country_id" => 141,
                "state_id" => null,
                "name" => json_encode(["en" => "Zoetermeer", "zh" => "佐特尔梅"]),
                "code" => "ztm"
            ],
            [
                "id" => 890,
                "country_id" => 113,
                "state_id" => null,
                "name" => json_encode(["en" => "Atlantida", "zh" => "阿特兰蒂达"]),
                "code" => "at"
            ],
            [
                "id" => 891,
                "country_id" => 113,
                "state_id" => null,
                "name" => json_encode(["en" => "El Paraiso", "zh" => "埃尔帕拉伊索"]),
                "code" => "pa"
            ],
            [
                "id" => 892,
                "country_id" => 113,
                "state_id" => null,
                "name" => json_encode(["en" => "Ocotepeque", "zh" => "奥科特佩克"]),
                "code" => "oc"
            ],
            [
                "id" => 893,
                "country_id" => 113,
                "state_id" => null,
                "name" => json_encode(["en" => "Olancho", "zh" => "奥兰乔"]),
                "code" => "ol"
            ],
            [
                "id" => 894,
                "country_id" => 113,
                "state_id" => null,
                "name" => json_encode(["en" => "Francisco Morazan", "zh" => "弗朗西斯科-莫拉桑"]),
                "code" => "fm"
            ],
            [
                "id" => 895,
                "country_id" => 113,
                "state_id" => null,
                "name" => json_encode(["en" => "Gracias a Dios", "zh" => "格拉西亚斯-阿迪奥斯"]),
                "code" => "gd"
            ],
            [
                "id" => 896,
                "country_id" => 113,
                "state_id" => null,
                "name" => json_encode(["en" => "Islas de la Bahia", "zh" => "海湾群岛"]),
                "code" => "ib"
            ],
            [
                "id" => 897,
                "country_id" => 113,
                "state_id" => null,
                "name" => json_encode(["en" => "Cortes", "zh" => "科尔特斯"]),
                "code" => "cr"
            ],
            [
                "id" => 898,
                "country_id" => 113,
                "state_id" => null,
                "name" => json_encode(["en" => "Colon", "zh" => "科隆"]),
                "code" => "cl"
            ],
            [
                "id" => 899,
                "country_id" => 113,
                "state_id" => null,
                "name" => json_encode(["en" => "Comayagua", "zh" => "科马亚瓜"]),
                "code" => "cm"
            ],
            [
                "id" => 900,
                "country_id" => 113,
                "state_id" => null,
                "name" => json_encode(["en" => "Copan", "zh" => "科潘"]),
                "code" => "cp"
            ],
            [
                "id" => 901,
                "country_id" => 113,
                "state_id" => null,
                "name" => json_encode(["en" => "La Paz", "zh" => "拉巴斯"]),
                "code" => "pz"
            ],
            [
                "id" => 902,
                "country_id" => 113,
                "state_id" => null,
                "name" => json_encode(["en" => "Lempira", "zh" => "伦皮拉"]),
                "code" => "le"
            ],
            [
                "id" => 903,
                "country_id" => 113,
                "state_id" => null,
                "name" => json_encode(["en" => "Choluteca", "zh" => "乔卢特卡"]),
                "code" => "ch"
            ],
            [
                "id" => 904,
                "country_id" => 113,
                "state_id" => null,
                "name" => json_encode(["en" => "Choloma", "zh" => "乔罗马"]),
                "code" => "cho"
            ],
            [
                "id" => 905,
                "country_id" => 113,
                "state_id" => null,
                "name" => json_encode(["en" => "Valle", "zh" => "山谷"]),
                "code" => "va"
            ],
            [
                "id" => 906,
                "country_id" => 113,
                "state_id" => null,
                "name" => json_encode(["en" => "Santa Barbara", "zh" => "圣巴巴拉"]),
                "code" => "sb"
            ],
            [
                "id" => 907,
                "country_id" => 113,
                "state_id" => null,
                "name" => json_encode(["en" => "Intibuca", "zh" => "因蒂布卡"]),
                "code" => "in"
            ],
            [
                "id" => 908,
                "country_id" => 113,
                "state_id" => null,
                "name" => json_encode(["en" => "Yoro", "zh" => "约罗"]),
                "code" => "yo"
            ],
            [
                "id" => 909,
                "country_id" => 180,
                "state_id" => null,
                "name" => json_encode(["en" => "Phoenix Islands", "zh" => "菲尼克斯群岛"]),
                "code" => "pho"
            ],
            [
                "id" => 910,
                "country_id" => 180,
                "state_id" => null,
                "name" => json_encode(["en" => "Gilberts Islands", "zh" => "吉尔伯特群岛"]),
                "code" => "gil"
            ],
            [
                "id" => 911,
                "country_id" => 180,
                "state_id" => null,
                "name" => json_encode(["en" => "Line Islands", "zh" => "莱恩群岛"]),
                "code" => "lin"
            ],
            [
                "id" => 912,
                "country_id" => 52,
                "state_id" => null,
                "name" => json_encode(["en" => "Ali Sabih", "zh" => "阿里萨比赫区"]),
                "code" => "s"
            ],
            [
                "id" => 913,
                "country_id" => 52,
                "state_id" => null,
                "name" => json_encode(["en" => "Obock", "zh" => "奥博克区"]),
                "code" => "o"
            ],
            [
                "id" => 914,
                "country_id" => 52,
                "state_id" => null,
                "name" => json_encode(["en" => "Dikhil", "zh" => "迪基勒区"]),
                "code" => "k"
            ],
            [
                "id" => 915,
                "country_id" => 52,
                "state_id" => null,
                "name" => json_encode(["en" => "Tadjoura", "zh" => "塔朱拉区"]),
                "code" => "t"
            ],
            [
                "id" => 916,
                "country_id" => 65,
                "state_id" => null,
                "name" => json_encode(["en" => "Osh", "zh" => "奥什"]),
                "code" => "o"
            ],
            [
                "id" => 917,
                "country_id" => 65,
                "state_id" => null,
                "name" => json_encode(["en" => "Batken", "zh" => "巴特肯"]),
                "code" => "b"
            ],
            [
                "id" => 918,
                "country_id" => 65,
                "state_id" => null,
                "name" => json_encode(["en" => "Bishkek", "zh" => "比什凯克市"]),
                "code" => "gb"
            ],
            [
                "id" => 919,
                "country_id" => 65,
                "state_id" => null,
                "name" => json_encode(["en" => "Chuy", "zh" => "楚河"]),
                "code" => "c"
            ],
            [
                "id" => 920,
                "country_id" => 65,
                "state_id" => null,
                "name" => json_encode(["en" => "Jalal-Abad", "zh" => "贾拉拉巴德"]),
                "code" => "j"
            ],
            [
                "id" => 921,
                "country_id" => 65,
                "state_id" => null,
                "name" => json_encode(["en" => "Karabalta", "zh" => "卡拉巴尔塔"]),
                "code" => "kba"
            ],
            [
                "id" => 922,
                "country_id" => 65,
                "state_id" => null,
                "name" => json_encode(["en" => "Kara-Kol", "zh" => "卡拉库尔"]),
                "code" => "kko"
            ],
            [
                "id" => 923,
                "country_id" => 65,
                "state_id" => null,
                "name" => json_encode(["en" => "Kant", "zh" => "坎特"]),
                "code" => "kan"
            ],
            [
                "id" => 924,
                "country_id" => 65,
                "state_id" => null,
                "name" => json_encode(["en" => "Kok-Jangak", "zh" => "科克扬加克"]),
                "code" => "kj"
            ],
            [
                "id" => 925,
                "country_id" => 65,
                "state_id" => null,
                "name" => json_encode(["en" => "Mailuu-Suu", "zh" => "迈利赛"]),
                "code" => "ms"
            ],
            [
                "id" => 926,
                "country_id" => 65,
                "state_id" => null,
                "name" => json_encode(["en" => "Naryn", "zh" => "纳伦"]),
                "code" => "n"
            ],
            [
                "id" => 927,
                "country_id" => 65,
                "state_id" => null,
                "name" => json_encode(["en" => "Suluktu", "zh" => "苏卢克图"]),
                "code" => "su"
            ],
            [
                "id" => 928,
                "country_id" => 65,
                "state_id" => null,
                "name" => json_encode(["en" => "Talas", "zh" => "塔拉斯"]),
                "code" => "t"
            ],
            [
                "id" => 929,
                "country_id" => 65,
                "state_id" => null,
                "name" => json_encode(["en" => "Tash-Kumyr", "zh" => "塔什库梅尔"]),
                "code" => "tk"
            ],
            [
                "id" => 930,
                "country_id" => 65,
                "state_id" => null,
                "name" => json_encode(["en" => "Uzgen", "zh" => "乌兹根"]),
                "code" => "ug"
            ],
            [
                "id" => 931,
                "country_id" => 65,
                "state_id" => null,
                "name" => json_encode(["en" => "Ysyk-Kol", "zh" => "伊塞克湖"]),
                "code" => "y"
            ],
            [
                "id" => 932,
                "country_id" => 15,
                "state_id" => null,
                "name" => json_encode(["en" => "Boke", "zh" => "博凯"]),
                "code" => "bok"
            ],
            [
                "id" => 933,
                "country_id" => 15,
                "state_id" => null,
                "name" => json_encode(["en" => "Nzerekore", "zh" => "恩泽雷科雷"]),
                "code" => "nzr"
            ],
            [
                "id" => 934,
                "country_id" => 15,
                "state_id" => null,
                "name" => json_encode(["en" => "Faranah", "zh" => "法拉纳"]),
                "code" => "frn"
            ],
            [
                "id" => 935,
                "country_id" => 15,
                "state_id" => null,
                "name" => json_encode(["en" => "Kindia", "zh" => "金迪亚"]),
                "code" => "knd"
            ],
            [
                "id" => 936,
                "country_id" => 15,
                "state_id" => null,
                "name" => json_encode(["en" => "Kankan", "zh" => "康康"]),
                "code" => "knk"
            ],
            [
                "id" => 937,
                "country_id" => 15,
                "state_id" => null,
                "name" => json_encode(["en" => "Conakry", "zh" => "科纳克里"]),
                "code" => "cnk"
            ],
            [
                "id" => 938,
                "country_id" => 15,
                "state_id" => null,
                "name" => json_encode(["en" => "Labe", "zh" => "拉贝"]),
                "code" => "lab"
            ],
            [
                "id" => 939,
                "country_id" => 15,
                "state_id" => null,
                "name" => json_encode(["en" => "Mamou", "zh" => "玛木"]),
                "code" => "mam"
            ],
            [
                "id" => 940,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Abbotsford", "zh" => "阿伯茨福"]),
                "code" => "abb"
            ],
            [
                "id" => 941,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Edmonton", "zh" => "埃德蒙顿"]),
                "code" => "edm"
            ],
            [
                "id" => 942,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Oshawa", "zh" => "奥沙瓦"]),
                "code" => "osh"
            ],
            [
                "id" => 943,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Barrie", "zh" => "巴里"]),
                "code" => "bar"
            ],
            [
                "id" => 944,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Cape Breton", "zh" => "布列塔尼角"]),
                "code" => "cbr"
            ],
            [
                "id" => 945,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Toronto", "zh" => "多伦多"]),
                "code" => "tor"
            ],
            [
                "id" => 946,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Fredericton", "zh" => "弗雷德里顿"]),
                "code" => "fre"
            ],
            [
                "id" => 947,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Guelph", "zh" => "圭尔夫"]),
                "code" => "glp"
            ],
            [
                "id" => 948,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Halifax", "zh" => "哈利法克斯"]),
                "code" => "hal"
            ],
            [
                "id" => 949,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Hamilton", "zh" => "哈密尔顿"]),
                "code" => "ham"
            ],
            [
                "id" => 950,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Whitehorse", "zh" => "怀特霍斯"]),
                "code" => "yxy"
            ],
            [
                "id" => 951,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Kelowna", "zh" => "基劳纳"]),
                "code" => "kwl"
            ],
            [
                "id" => 952,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Brampton", "zh" => "基奇纳"]),
                "code" => "brp"
            ],
            [
                "id" => 953,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Kingston", "zh" => "金斯敦"]),
                "code" => "kgn"
            ],
            [
                "id" => 954,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Calgary", "zh" => "卡里加里"]),
                "code" => "cal"
            ],
            [
                "id" => 955,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Quebec", "zh" => "魁北克"]),
                "code" => "que"
            ],
            [
                "id" => 956,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Regina", "zh" => "里贾纳"]),
                "code" => "reg"
            ],
            [
                "id" => 957,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "London", "zh" => "伦敦"]),
                "code" => "lod"
            ],
            [
                "id" => 958,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Montreal", "zh" => "蒙特利尔"]),
                "code" => "mtr"
            ],
            [
                "id" => 959,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Sudbury", "zh" => "萨德伯里"]),
                "code" => "sud"
            ],
            [
                "id" => 960,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Saskatoon", "zh" => "萨斯卡通"]),
                "code" => "sak"
            ],
            [
                "id" => 961,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Trois-Rivieres", "zh" => "三河城"]),
                "code" => "trr"
            ],
            [
                "id" => 962,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Thunder Bay", "zh" => "桑德贝"]),
                "code" => "thu"
            ],
            [
                "id" => 963,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Sherbrooke", "zh" => "舍布鲁克"]),
                "code" => "sbe"
            ],
            [
                "id" => 964,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "St. Catharines", "zh" => "圣卡塔琳娜"]),
                "code" => "sca"
            ],
            [
                "id" => 965,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Saint-John's", "zh" => "圣约翰斯"]),
                "code" => "sjb"
            ],
            [
                "id" => 966,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Victoria", "zh" => "维多利亚"]),
                "code" => "vic"
            ],
            [
                "id" => 967,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Vancouver", "zh" => "温哥华"]),
                "code" => "van"
            ],
            [
                "id" => 968,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Winnipeg", "zh" => "温尼伯"]),
                "code" => "wnp"
            ],
            [
                "id" => 969,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Windsor", "zh" => "温莎"]),
                "code" => "wdr"
            ],
            [
                "id" => 970,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Ottawa", "zh" => "渥太华"]),
                "code" => "ott"
            ],
            [
                "id" => 971,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Charlottetown", "zh" => "夏洛特敦"]),
                "code" => "cha"
            ],
            [
                "id" => 972,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Yellowknife", "zh" => "耶洛奈夫"]),
                "code" => "yzf"
            ],
            [
                "id" => 973,
                "country_id" => 166,
                "state_id" => null,
                "name" => json_encode(["en" => "Iqaluit", "zh" => "伊魁特"]),
                "code" => "iql"
            ],
            [
                "id" => 974,
                "country_id" => 19,
                "state_id" => null,
                "name" => json_encode(["en" => "Ashanti", "zh" => "阿散蒂"]),
                "code" => "as"
            ],
            [
                "id" => 975,
                "country_id" => 19,
                "state_id" => null,
                "name" => json_encode(["en" => "Obuasi", "zh" => "奥布阿西"]),
                "code" => "obu"
            ],
            [
                "id" => 976,
                "country_id" => 19,
                "state_id" => null,
                "name" => json_encode(["en" => "Northern", "zh" => "北部"]),
                "code" => "no"
            ],
            [
                "id" => 977,
                "country_id" => 19,
                "state_id" => null,
                "name" => json_encode(["en" => "Brong Ahafo", "zh" => "布朗阿哈福"]),
                "code" => "ba"
            ],
            [
                "id" => 978,
                "country_id" => 19,
                "state_id" => null,
                "name" => json_encode(["en" => "Greater Accra", "zh" => "大阿克拉"]),
                "code" => "ga"
            ],
            [
                "id" => 979,
                "country_id" => 19,
                "state_id" => null,
                "name" => json_encode(["en" => "Eastern", "zh" => "东部"]),
                "code" => "ea"
            ],
            [
                "id" => 980,
                "country_id" => 19,
                "state_id" => null,
                "name" => json_encode(["en" => "Upper East", "zh" => "上东部"]),
                "code" => "ue"
            ],
            [
                "id" => 981,
                "country_id" => 19,
                "state_id" => null,
                "name" => json_encode(["en" => "Upper West", "zh" => "上西部"]),
                "code" => "uw"
            ],
            [
                "id" => 982,
                "country_id" => 19,
                "state_id" => null,
                "name" => json_encode(["en" => "Volta", "zh" => "沃尔特"]),
                "code" => "vo"
            ],
            [
                "id" => 983,
                "country_id" => 19,
                "state_id" => null,
                "name" => json_encode(["en" => "Western", "zh" => "西部"]),
                "code" => "we"
            ],
            [
                "id" => 984,
                "country_id" => 19,
                "state_id" => null,
                "name" => json_encode(["en" => "Central", "zh" => "中部"]),
                "code" => "ce"
            ],
            [
                "id" => 985,
                "country_id" => 18,
                "state_id" => null,
                "name" => json_encode(["en" => "Ogooue-Lolo", "zh" => "奥果韦-洛洛"]),
                "code" => "ol"
            ],
            [
                "id" => 986,
                "country_id" => 18,
                "state_id" => null,
                "name" => json_encode(["en" => "Ogooue-Ivindo", "zh" => "奥果韦-伊温多"]),
                "code" => "oi"
            ],
            [
                "id" => 987,
                "country_id" => 18,
                "state_id" => null,
                "name" => json_encode(["en" => "Ogooue-Maritime", "zh" => "滨海奥果韦"]),
                "code" => "om"
            ],
            [
                "id" => 988,
                "country_id" => 18,
                "state_id" => null,
                "name" => json_encode(["en" => "Ngounie", "zh" => "恩古涅"]),
                "code" => "ng"
            ],
            [
                "id" => 989,
                "country_id" => 18,
                "state_id" => null,
                "name" => json_encode(["en" => "Estuaire", "zh" => "河口"]),
                "code" => "es"
            ],
            [
                "id" => 990,
                "country_id" => 18,
                "state_id" => null,
                "name" => json_encode(["en" => "Nyanga", "zh" => "尼扬加"]),
                "code" => "ny"
            ],
            [
                "id" => 991,
                "country_id" => 18,
                "state_id" => null,
                "name" => json_encode(["en" => "Haut-Ogooue", "zh" => "上奥果韦"]),
                "code" => "ho"
            ],
            [
                "id" => 992,
                "country_id" => 18,
                "state_id" => null,
                "name" => json_encode(["en" => "Woleu-Ntem", "zh" => "沃勒-恩特姆"]),
                "code" => "wn"
            ],
            [
                "id" => 993,
                "country_id" => 18,
                "state_id" => null,
                "name" => json_encode(["en" => "Moyen-Ogooue", "zh" => "中奥果韦"]),
                "code" => "mo"
            ],
            [
                "id" => 994,
                "country_id" => 91,
                "state_id" => null,
                "name" => json_encode(["en" => "Otdar Mean Chey", "zh" => "奥多棉吉"]),
                "code" => "oc"
            ],
            [
                "id" => 995,
                "country_id" => 91,
                "state_id" => null,
                "name" => json_encode(["en" => "Krong Keb", "zh" => "白马市"]),
                "code" => "kb"
            ],
            [
                "id" => 996,
                "country_id" => 91,
                "state_id" => null,
                "name" => json_encode(["en" => "Preah Vihear", "zh" => "柏威夏"]),
                "code" => "pr"
            ],
            [
                "id" => 997,
                "country_id" => 91,
                "state_id" => null,
                "name" => json_encode(["en" => "Krong Pailin", "zh" => "拜林市"]),
                "code" => "pl"
            ],
            [
                "id" => 998,
                "country_id" => 91,
                "state_id" => null,
                "name" => json_encode(["en" => "Banteay Mean Chey", "zh" => "班迭棉吉"]),
                "code" => "bm"
            ],
            [
                "id" => 999,
                "country_id" => 91,
                "state_id" => null,
                "name" => json_encode(["en" => "Kampong Chhnang", "zh" => "磅清扬"]),
                "code" => "kzc"
            ],
            [
                "id" => 1000,
                "country_id" => 91,
                "state_id" => null,
                "name" => json_encode(["en" => "Kampong Spoe", "zh" => "磅士卑"]),
                "code" => "ko"
            ],
            [
                "id" => 1001,
                "country_id" => 91,
                "state_id" => null,
                "name" => json_encode(["en" => "Kampong Thum", "zh" => "磅同"]),
                "code" => "kzk"
            ],
            [
                "id" => 1002,
                "country_id" => 91,
                "state_id" => null,
                "name" => json_encode(["en" => "Kampong Cham", "zh" => "磅湛"]),
                "code" => "km"
            ],
            [
                "id" => 1003,
                "country_id" => 91,
                "state_id" => null,
                "name" => json_encode(["en" => "Prey Veng", "zh" => "波罗勉"]),
                "code" => "pg"
            ],
            [
                "id" => 1004,
                "country_id" => 91,
                "state_id" => null,
                "name" => json_encode(["en" => "Takev", "zh" => "茶胶"]),
                "code" => "tk"
            ],
            [
                "id" => 1005,
                "country_id" => 91,
                "state_id" => null,
                "name" => json_encode(["en" => "Svay Rieng", "zh" => "柴桢"]),
                "code" => "svr"
            ],
            [
                "id" => 1006,
                "country_id" => 91,
                "state_id" => null,
                "name" => json_encode(["en" => "Kandal", "zh" => "干丹"]),
                "code" => "kl"
            ],
            [
                "id" => 1007,
                "country_id" => 91,
                "state_id" => null,
                "name" => json_encode(["en" => "Kaoh Kong", "zh" => "戈公"]),
                "code" => "kkz"
            ],
            [
                "id" => 1008,
                "country_id" => 91,
                "state_id" => null,
                "name" => json_encode(["en" => "Kampot", "zh" => "贡布"]),
                "code" => "kmt"
            ],
            [
                "id" => 1009,
                "country_id" => 91,
                "state_id" => null,
                "name" => json_encode(["en" => "Phnum Penh", "zh" => "金边市"]),
                "code" => "pnh"
            ],
            [
                "id" => 1010,
                "country_id" => 91,
                "state_id" => null,
                "name" => json_encode(["en" => "Kracheh", "zh" => "桔井"]),
                "code" => "kh"
            ],
            [
                "id" => 1011,
                "country_id" => 91,
                "state_id" => null,
                "name" => json_encode(["en" => "Rotanak Kiri", "zh" => "腊塔纳基里"]),
                "code" => "rbe"
            ],
            [
                "id" => 1012,
                "country_id" => 91,
                "state_id" => null,
                "name" => json_encode(["en" => "Bat Dambang", "zh" => "马德望"]),
                "code" => "ba"
            ],
            [
                "id" => 1013,
                "country_id" => 91,
                "state_id" => null,
                "name" => json_encode(["en" => "Mondol Kiri", "zh" => "蒙多基里"]),
                "code" => "mwv"
            ],
            [
                "id" => 1014,
                "country_id" => 91,
                "state_id" => null,
                "name" => json_encode(["en" => "Pouthĭsat", "zh" => "菩萨"]),
                "code" => "po"
            ],
            [
                "id" => 1015,
                "country_id" => 91,
                "state_id" => null,
                "name" => json_encode(["en" => "Stoeng Treng", "zh" => "上丁"]),
                "code" => "tnx"
            ],
            [
                "id" => 1016,
                "country_id" => 91,
                "state_id" => null,
                "name" => json_encode(["en" => "Krong Preah", "zh" => "西哈努克市"]),
                "code" => "ka"
            ],
            [
                "id" => 1017,
                "country_id" => 91,
                "state_id" => null,
                "name" => json_encode(["en" => "Siem Reab", "zh" => "暹粒"]),
                "code" => "rep"
            ],
            [
                "id" => 1018,
                "country_id" => 136,
                "state_id" => null,
                "name" => json_encode(["en" => "Olomoucky", "zh" => "奥洛穆茨"]),
                "code" => "ol"
            ],
            [
                "id" => 1019,
                "country_id" => 136,
                "state_id" => null,
                "name" => json_encode(["en" => "Plzensky", "zh" => "比尔森"]),
                "code" => "pl"
            ],
            [
                "id" => 1020,
                "country_id" => 136,
                "state_id" => null,
                "name" => json_encode(["en" => "Prague", "zh" => "布拉格直辖市"]),
                "code" => "pr"
            ],
            [
                "id" => 1021,
                "country_id" => 136,
                "state_id" => null,
                "name" => json_encode(["en" => "Kralovehradecky", "zh" => "赫拉德茨-克拉洛韦"]),
                "code" => "kr"
            ],
            [
                "id" => 1022,
                "country_id" => 136,
                "state_id" => null,
                "name" => json_encode(["en" => "Karlovarsky", "zh" => "卡罗维发利"]),
                "code" => "ka"
            ],
            [
                "id" => 1023,
                "country_id" => 136,
                "state_id" => null,
                "name" => json_encode(["en" => "Liberecky", "zh" => "利贝雷克"]),
                "code" => "li"
            ],
            [
                "id" => 1024,
                "country_id" => 136,
                "state_id" => null,
                "name" => json_encode(["en" => "Moravskoslezsky", "zh" => "摩拉维亚-西里西亚"]),
                "code" => "mo"
            ],
            [
                "id" => 1025,
                "country_id" => 136,
                "state_id" => null,
                "name" => json_encode(["en" => "Jihomoravsky", "zh" => "南摩拉维亚"]),
                "code" => "jc"
            ],
            [
                "id" => 1026,
                "country_id" => 136,
                "state_id" => null,
                "name" => json_encode(["en" => "Pardubicky", "zh" => "帕尔杜比采"]),
                "code" => "pa"
            ],
            [
                "id" => 1027,
                "country_id" => 136,
                "state_id" => null,
                "name" => json_encode(["en" => "Vysocina", "zh" => "维索基纳"]),
                "code" => "vy"
            ],
            [
                "id" => 1028,
                "country_id" => 136,
                "state_id" => null,
                "name" => json_encode(["en" => "Ustecky", "zh" => "乌斯季"]),
                "code" => "us"
            ],
            [
                "id" => 1029,
                "country_id" => 136,
                "state_id" => null,
                "name" => json_encode(["en" => "Stredocesky", "zh" => "中捷克"]),
                "code" => "st"
            ],
            [
                "id" => 1030,
                "country_id" => 136,
                "state_id" => null,
                "name" => json_encode(["en" => "Zlinsky", "zh" => "兹林"]),
                "code" => "zl"
            ],
            [
                "id" => 1031,
                "country_id" => 14,
                "state_id" => null,
                "name" => json_encode(["en" => "Matabeleland North", "zh" => "北马塔贝莱兰"]),
                "code" => "mn"
            ],
            [
                "id" => 1032,
                "country_id" => 14,
                "state_id" => null,
                "name" => json_encode(["en" => "Bulawayo", "zh" => "布拉瓦约"]),
                "code" => "bu"
            ],
            [
                "id" => 1033,
                "country_id" => 14,
                "state_id" => null,
                "name" => json_encode(["en" => "Mashonaland East", "zh" => "东马绍纳兰"]),
                "code" => "me"
            ],
            [
                "id" => 1034,
                "country_id" => 14,
                "state_id" => null,
                "name" => json_encode(["en" => "Harare", "zh" => "哈拉雷"]),
                "code" => "ha"
            ],
            [
                "id" => 1035,
                "country_id" => 14,
                "state_id" => null,
                "name" => json_encode(["en" => "Manicaland", "zh" => "马尼卡兰"]),
                "code" => "ml"
            ],
            [
                "id" => 1036,
                "country_id" => 14,
                "state_id" => null,
                "name" => json_encode(["en" => "Masvingo", "zh" => "马斯温戈"]),
                "code" => "mv"
            ],
            [
                "id" => 1037,
                "country_id" => 14,
                "state_id" => null,
                "name" => json_encode(["en" => "Matabeleland South", "zh" => "南马塔贝莱兰"]),
                "code" => "ms"
            ],
            [
                "id" => 1038,
                "country_id" => 14,
                "state_id" => null,
                "name" => json_encode(["en" => "Mashonaland West", "zh" => "西马绍纳兰"]),
                "code" => "mw"
            ],
            [
                "id" => 1039,
                "country_id" => 14,
                "state_id" => null,
                "name" => json_encode(["en" => "Midlands", "zh" => "中部"]),
                "code" => "md"
            ],
            [
                "id" => 1040,
                "country_id" => 14,
                "state_id" => null,
                "name" => json_encode(["en" => "Mashonaland Central", "zh" => "中马绍纳兰"]),
                "code" => "mc"
            ],
            [
                "id" => 1041,
                "country_id" => 1,
                "state_id" => null,
                "name" => json_encode(["en" => "Adamaoua", "zh" => "阿达马瓦"]),
                "code" => "ada"
            ],
            [
                "id" => 1042,
                "country_id" => 1,
                "state_id" => null,
                "name" => json_encode(["en" => "Nord", "zh" => "北部"]),
                "code" => "nor"
            ],
            [
                "id" => 1043,
                "country_id" => 1,
                "state_id" => null,
                "name" => json_encode(["en" => "Extreme-Nord", "zh" => "北端"]),
                "code" => "exn"
            ],
            [
                "id" => 1044,
                "country_id" => 1,
                "state_id" => null,
                "name" => json_encode(["en" => "Littoral", "zh" => "滨海"]),
                "code" => "lit"
            ],
            [
                "id" => 1045,
                "country_id" => 1,
                "state_id" => null,
                "name" => json_encode(["en" => "Est", "zh" => "东部"]),
                "code" => "est"
            ],
            [
                "id" => 1046,
                "country_id" => 1,
                "state_id" => null,
                "name" => json_encode(["en" => "Sud", "zh" => "南部"]),
                "code" => "sud"
            ],
            [
                "id" => 1047,
                "country_id" => 1,
                "state_id" => null,
                "name" => json_encode(["en" => "Nord-Oueste", "zh" => "西北"]),
                "code" => "not"
            ],
            [
                "id" => 1048,
                "country_id" => 1,
                "state_id" => null,
                "name" => json_encode(["en" => "Ouest", "zh" => "西部"]),
                "code" => "oue"
            ],
            [
                "id" => 1049,
                "country_id" => 1,
                "state_id" => null,
                "name" => json_encode(["en" => "Sud-Oueste", "zh" => "西南"]),
                "code" => "sou"
            ],
            [
                "id" => 1050,
                "country_id" => 1,
                "state_id" => null,
                "name" => json_encode(["en" => "Centre", "zh" => "中央"]),
                "code" => "cen"
            ],
            [
                "id" => 1051,
                "country_id" => 96,
                "state_id" => null,
                "name" => json_encode(["en" => "Madinat ach Shamal", "zh" => "北部"]),
                "code" => "ms"
            ],
            [
                "id" => 1052,
                "country_id" => 96,
                "state_id" => null,
                "name" => json_encode(["en" => "Ad Dawhah", "zh" => "多哈"]),
                "code" => "dw"
            ],
            [
                "id" => 1053,
                "country_id" => 96,
                "state_id" => null,
                "name" => json_encode(["en" => "Al Ghuwariyah", "zh" => "古韦里耶"]),
                "code" => "gw"
            ],
            [
                "id" => 1054,
                "country_id" => 96,
                "state_id" => null,
                "name" => json_encode(["en" => "Al Khawr", "zh" => "豪尔"]),
                "code" => "kr"
            ],
            [
                "id" => 1055,
                "country_id" => 96,
                "state_id" => null,
                "name" => json_encode(["en" => "Jariyan al Batnah", "zh" => "杰里扬拜特奈"]),
                "code" => "jb"
            ],
            [
                "id" => 1056,
                "country_id" => 96,
                "state_id" => null,
                "name" => json_encode(["en" => "Ar Rayyan", "zh" => "赖扬"]),
                "code" => "rn"
            ],
            [
                "id" => 1057,
                "country_id" => 96,
                "state_id" => null,
                "name" => json_encode(["en" => "Al Wakrah", "zh" => "沃克拉"]),
                "code" => "wk"
            ],
            [
                "id" => 1058,
                "country_id" => 96,
                "state_id" => null,
                "name" => json_encode(["en" => "Umm Salal", "zh" => "乌姆锡拉勒"]),
                "code" => "ul"
            ],
            [
                "id" => 1059,
                "country_id" => 96,
                "state_id" => null,
                "name" => json_encode(["en" => "Al Jumaliyah", "zh" => "朱迈利耶"]),
                "code" => "jm"
            ],
            [
                "id" => 1060,
                "country_id" => 6,
                "state_id" => null,
                "name" => json_encode(["en" => "Agnebi", "zh" => "阿涅比"]),
                "code" => "ag"
            ],
            [
                "id" => 1061,
                "country_id" => 6,
                "state_id" => null,
                "name" => json_encode(["en" => "Bafing", "zh" => "巴芬"]),
                "code" => "bf"
            ],
            [
                "id" => 1062,
                "country_id" => 6,
                "state_id" => null,
                "name" => json_encode(["en" => "Vallee du Bandama", "zh" => "邦达马河谷"]),
                "code" => "vb"
            ],
            [
                "id" => 1063,
                "country_id" => 6,
                "state_id" => null,
                "name" => json_encode(["en" => "Denguele", "zh" => "登盖莱"]),
                "code" => "de"
            ],
            [
                "id" => 1064,
                "country_id" => 6,
                "state_id" => null,
                "name" => json_encode(["en" => "Nzi-Comoe", "zh" => "恩济－科莫埃"]),
                "code" => "nc"
            ],
            [
                "id" => 1065,
                "country_id" => 6,
                "state_id" => null,
                "name" => json_encode(["en" => "Fromager", "zh" => "弗罗马格尔"]),
                "code" => "fr"
            ],
            [
                "id" => 1066,
                "country_id" => 6,
                "state_id" => null,
                "name" => json_encode(["en" => "Lacs", "zh" => "湖泊"]),
                "code" => "lc"
            ],
            [
                "id" => 1067,
                "country_id" => 6,
                "state_id" => null,
                "name" => json_encode(["en" => "Marahoue", "zh" => "马拉韦"]),
                "code" => "mr"
            ],
            [
                "id" => 1068,
                "country_id" => 6,
                "state_id" => null,
                "name" => json_encode(["en" => "Sud-Bandama", "zh" => "南邦达马"]),
                "code" => "sb"
            ],
            [
                "id" => 1069,
                "country_id" => 6,
                "state_id" => null,
                "name" => json_encode(["en" => "Sud-Comoe", "zh" => "南科莫埃"]),
                "code" => "sc"
            ],
            [
                "id" => 1070,
                "country_id" => 6,
                "state_id" => null,
                "name" => json_encode(["en" => "Haut-Sassandra", "zh" => "萨桑德拉"]),
                "code" => "ht"
            ],
            [
                "id" => 1071,
                "country_id" => 6,
                "state_id" => null,
                "name" => json_encode(["en" => "Savanes", "zh" => "萨瓦纳"]),
                "code" => "sv"
            ],
            [
                "id" => 1072,
                "country_id" => 6,
                "state_id" => null,
                "name" => json_encode(["en" => "Montagnes", "zh" => "山地"]),
                "code" => "dh"
            ],
            [
                "id" => 1073,
                "country_id" => 6,
                "state_id" => null,
                "name" => json_encode(["en" => "Worodougou", "zh" => "沃罗杜古"]),
                "code" => "wr"
            ],
            [
                "id" => 1074,
                "country_id" => 6,
                "state_id" => null,
                "name" => json_encode(["en" => "Bas-Sassandra", "zh" => "下萨桑德拉"]),
                "code" => "bs"
            ],
            [
                "id" => 1075,
                "country_id" => 6,
                "state_id" => null,
                "name" => json_encode(["en" => "Lagunes", "zh" => "泻湖"]),
                "code" => "lg"
            ],
            [
                "id" => 1076,
                "country_id" => 6,
                "state_id" => null,
                "name" => json_encode(["en" => "Zanzan", "zh" => "赞赞"]),
                "code" => "za"
            ],
            [
                "id" => 1077,
                "country_id" => 6,
                "state_id" => null,
                "name" => json_encode(["en" => "Moyen-Cavally", "zh" => "中卡瓦利"]),
                "code" => "mv"
            ],
            [
                "id" => 1078,
                "country_id" => 6,
                "state_id" => null,
                "name" => json_encode(["en" => "Moyen-Comoe", "zh" => "中科莫埃"]),
                "code" => "mc"
            ],
            [
                "id" => 1079,
                "country_id" => 142,
                "state_id" => null,
                "name" => json_encode(["en" => "Osjecko-Baranjska", "zh" => "奥西耶克-巴拉尼亚"]),
                "code" => "14"
            ],
            [
                "id" => 1080,
                "country_id" => 142,
                "state_id" => null,
                "name" => json_encode(["en" => "Bjelovarsko-Bilogorska", "zh" => "别洛瓦尔-比洛戈拉"]),
                "code" => "7"
            ],
            [
                "id" => 1081,
                "country_id" => 142,
                "state_id" => null,
                "name" => json_encode(["en" => "Primorsko-Goranska", "zh" => "滨海和山区"]),
                "code" => "8"
            ],
            [
                "id" => 1082,
                "country_id" => 142,
                "state_id" => null,
                "name" => json_encode(["en" => "Pozega-Slavonia", "zh" => "波热加-斯拉沃尼亚"]),
                "code" => "11"
            ],
            [
                "id" => 1083,
                "country_id" => 142,
                "state_id" => null,
                "name" => json_encode(["en" => "Brodsko-Posavska", "zh" => "布罗德-波萨维纳"]),
                "code" => "12"
            ],
            [
                "id" => 1084,
                "country_id" => 142,
                "state_id" => null,
                "name" => json_encode(["en" => "Dubrovacko-Neretvanska", "zh" => "杜布罗夫斯克-内雷特瓦"]),
                "code" => "19"
            ],
            [
                "id" => 1085,
                "country_id" => 142,
                "state_id" => null,
                "name" => json_encode(["en" => "Karlovacka", "zh" => "卡尔洛瓦茨"]),
                "code" => "4"
            ],
            [
                "id" => 1086,
                "country_id" => 142,
                "state_id" => null,
                "name" => json_encode(["en" => "Koprivnicko-Krizevacka", "zh" => "科普里夫尼察-克里热夫齐"]),
                "code" => "6"
            ],
            [
                "id" => 1087,
                "country_id" => 142,
                "state_id" => null,
                "name" => json_encode(["en" => "Krapinsko-Zagorska", "zh" => "克拉皮纳-扎戈列"]),
                "code" => "2"
            ],
            [
                "id" => 1088,
                "country_id" => 142,
                "state_id" => null,
                "name" => json_encode(["en" => "Licko-Senjska", "zh" => "利卡-塞尼"]),
                "code" => "9"
            ],
            [
                "id" => 1089,
                "country_id" => 142,
                "state_id" => null,
                "name" => json_encode(["en" => "Medimurska", "zh" => "梅吉穆列"]),
                "code" => "20"
            ],
            [
                "id" => 1090,
                "country_id" => 142,
                "state_id" => null,
                "name" => json_encode(["en" => "Zagrebacka", "zh" => "萨格勒布"]),
                "code" => "1"
            ],
            [
                "id" => 1091,
                "country_id" => 142,
                "state_id" => null,
                "name" => json_encode(["en" => "Grad Zagreb", "zh" => "萨格勒布市"]),
                "code" => "21"
            ],
            [
                "id" => 1092,
                "country_id" => 142,
                "state_id" => null,
                "name" => json_encode(["en" => "Splitsko-Dalmatinska", "zh" => "斯普利特-达尔马提亚"]),
                "code" => "17"
            ],
            [
                "id" => 1093,
                "country_id" => 142,
                "state_id" => null,
                "name" => json_encode(["en" => "Varazdinska", "zh" => "瓦拉日丁"]),
                "code" => "5"
            ],
            [
                "id" => 1094,
                "country_id" => 142,
                "state_id" => null,
                "name" => json_encode(["en" => "Viroviticko-Podravska", "zh" => "维罗维蒂察-波德拉维纳"]),
                "code" => "10"
            ],
            [
                "id" => 1095,
                "country_id" => 142,
                "state_id" => null,
                "name" => json_encode(["en" => "Vukovarsko-Srijemska", "zh" => "武科瓦尔-斯里耶姆"]),
                "code" => "16"
            ],
            [
                "id" => 1096,
                "country_id" => 142,
                "state_id" => null,
                "name" => json_encode(["en" => "Sibensko-Kninska", "zh" => "希贝尼克-克宁"]),
                "code" => "15"
            ],
            [
                "id" => 1097,
                "country_id" => 142,
                "state_id" => null,
                "name" => json_encode(["en" => "Sisacko-Moslavacka", "zh" => "锡萨克-莫斯拉维纳"]),
                "code" => "3"
            ],
            [
                "id" => 1098,
                "country_id" => 142,
                "state_id" => null,
                "name" => json_encode(["en" => "Istarska", "zh" => "伊斯特拉"]),
                "code" => "18"
            ],
            [
                "id" => 1099,
                "country_id" => 142,
                "state_id" => null,
                "name" => json_encode(["en" => "Zadarska", "zh" => "扎达尔"]),
                "code" => "13"
            ],
            [
                "id" => 1100,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Elgeyo-Marakwet", "zh" => "埃尔格约-马拉奎特"]),
                "code" => "ema"
            ],
            [
                "id" => 1101,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Baringo", "zh" => "巴林戈"]),
                "code" => "bar"
            ],
            [
                "id" => 1102,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Bungoma", "zh" => "邦戈马"]),
                "code" => "bun"
            ],
            [
                "id" => 1103,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Bomet", "zh" => "博美特"]),
                "code" => "bom"
            ],
            [
                "id" => 1104,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Busia", "zh" => "布希亚"]),
                "code" => "bus"
            ],
            [
                "id" => 1105,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Embu", "zh" => "恩布"]),
                "code" => "emb"
            ],
            [
                "id" => 1106,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Homa Bay", "zh" => "霍马湾"]),
                "code" => "hob"
            ],
            [
                "id" => 1107,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Kiambu", "zh" => "基安布"]),
                "code" => "kia"
            ],
            [
                "id" => 1108,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Kilifi", "zh" => "基里菲"]),
                "code" => "kil"
            ],
            [
                "id" => 1109,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Kirinyaga", "zh" => "基里尼亚加"]),
                "code" => "kir"
            ],
            [
                "id" => 1110,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Kisumu", "zh" => "基苏木"]),
                "code" => "kis"
            ],
            [
                "id" => 1111,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Kitui", "zh" => "基图伊"]),
                "code" => "kit"
            ],
            [
                "id" => 1112,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Kisii", "zh" => "基西"]),
                "code" => "kii"
            ],
            [
                "id" => 1113,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Garissa", "zh" => "加里萨"]),
                "code" => "gas"
            ],
            [
                "id" => 1114,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Kakamega", "zh" => "卡卡梅加"]),
                "code" => "kak"
            ],
            [
                "id" => 1115,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Kajiado", "zh" => "卡耶亚多"]),
                "code" => "kaj"
            ],
            [
                "id" => 1116,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Kericho", "zh" => "凯里乔"]),
                "code" => "key"
            ],
            [
                "id" => 1117,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Kwale", "zh" => "夸勒"]),
                "code" => "kwa"
            ],
            [
                "id" => 1118,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Lamu", "zh" => "拉木"]),
                "code" => "lau"
            ],
            [
                "id" => 1119,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Laikipia", "zh" => "莱基皮亚"]),
                "code" => "lai"
            ],
            [
                "id" => 1120,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Machakos", "zh" => "马查科斯"]),
                "code" => "mac"
            ],
            [
                "id" => 1121,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Makueni", "zh" => "马瓜尼"]),
                "code" => "mak"
            ],
            [
                "id" => 1122,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Marsabit", "zh" => "马萨布布"]),
                "code" => "rbt"
            ],
            [
                "id" => 1123,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Mandera", "zh" => "曼德拉"]),
                "code" => "man"
            ],
            [
                "id" => 1124,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Meru", "zh" => "梅鲁"]),
                "code" => "mer"
            ],
            [
                "id" => 1125,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Mombasa", "zh" => "蒙巴萨"]),
                "code" => "mom"
            ],
            [
                "id" => 1126,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Migori", "zh" => "米戈利"]),
                "code" => "mig"
            ],
            [
                "id" => 1127,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Muranga", "zh" => "穆兰卡"]),
                "code" => "mur"
            ],
            [
                "id" => 1128,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Nakuru", "zh" => "纳库鲁"]),
                "code" => "nuu"
            ],
            [
                "id" => 1129,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Narok", "zh" => "纳罗克"]),
                "code" => "nar"
            ],
            [
                "id" => 1130,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Nandi", "zh" => "南迪"]),
                "code" => "nan"
            ],
            [
                "id" => 1131,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Nairobi", "zh" => "内罗毕"]),
                "code" => "na"
            ],
            [
                "id" => 1132,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Nithi", "zh" => "尼蒂"]),
                "code" => "nit"
            ],
            [
                "id" => 1133,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Nyamira", "zh" => "尼亚米拉"]),
                "code" => "nym"
            ],
            [
                "id" => 1134,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Nyandarua", "zh" => "年达鲁阿"]),
                "code" => "nyn"
            ],
            [
                "id" => 1135,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Nyeri", "zh" => "涅里"]),
                "code" => "nye"
            ],
            [
                "id" => 1136,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Samburu", "zh" => "桑布卢"]),
                "code" => "uas"
            ],
            [
                "id" => 1137,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Tana River", "zh" => "塔纳河"]),
                "code" => "tri"
            ],
            [
                "id" => 1138,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Taita-Taveta", "zh" => "泰塔塔维塔"]),
                "code" => "tta"
            ],
            [
                "id" => 1139,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Trans-Nzoia", "zh" => "特兰斯-恩佐亚"]),
                "code" => "tnz"
            ],
            [
                "id" => 1140,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Turkana", "zh" => "图尔卡纳"]),
                "code" => "tur"
            ],
            [
                "id" => 1141,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Wajir", "zh" => "瓦吉尔"]),
                "code" => "wjr"
            ],
            [
                "id" => 1142,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Uasin Gishu", "zh" => "瓦辛基苏"]),
                "code" => "ugi"
            ],
            [
                "id" => 1143,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Vihiga", "zh" => "韦希加"]),
                "code" => "vih"
            ],
            [
                "id" => 1144,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "West Pokot", "zh" => "西波克特"]),
                "code" => "wpo"
            ],
            [
                "id" => 1145,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Siaya", "zh" => "夏亚"]),
                "code" => "sia"
            ],
            [
                "id" => 1146,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Isiolo", "zh" => "伊希约洛"]),
                "code" => "isi"
            ],
            [
                "id" => 1147,
                "country_id" => 56,
                "state_id" => null,
                "name" => json_encode(["en" => "Central", "zh" => "中央"]),
                "code" => "ce"
            ],
            [
                "id" => 1148,
                "country_id" => 131,
                "state_id" => null,
                "name" => json_encode(["en" => "Aluksnes", "zh" => "阿卢克斯内"]),
                "code" => "alu"
            ],
            [
                "id" => 1149,
                "country_id" => 131,
                "state_id" => null,
                "name" => json_encode(["en" => "Aizkraukles", "zh" => "爱兹克劳克雷"]),
                "code" => "aiz"
            ],
            [
                "id" => 1150,
                "country_id" => 131,
                "state_id" => null,
                "name" => json_encode(["en" => "Ogres", "zh" => "奥格雷"]),
                "code" => "ogr"
            ],
            [
                "id" => 1151,
                "country_id" => 131,
                "state_id" => null,
                "name" => json_encode(["en" => "Balvu", "zh" => "巴尔维"]),
                "code" => "bal"
            ],
            [
                "id" => 1152,
                "country_id" => 131,
                "state_id" => null,
                "name" => json_encode(["en" => "Bauskas", "zh" => "包斯卡"]),
                "code" => "bau"
            ],
            [
                "id" => 1153,
                "country_id" => 131,
                "state_id" => null,
                "name" => json_encode(["en" => "Cesu", "zh" => "采西斯"]),
                "code" => "ces"
            ],
            [
                "id" => 1154,
                "country_id" => 131,
                "state_id" => null,
                "name" => json_encode(["en" => "Dobeles", "zh" => "多贝莱"]),
                "code" => "dob"
            ],
            [
                "id" => 1155,
                "country_id" => 131,
                "state_id" => null,
                "name" => json_encode(["en" => "Gulbenes", "zh" => "古尔贝内"]),
                "code" => "gul"
            ],
            [
                "id" => 1156,
                "country_id" => 131,
                "state_id" => null,
                "name" => json_encode(["en" => "Jekabpils", "zh" => "杰卡布皮尔斯"]),
                "code" => "jek"
            ],
            [
                "id" => 1157,
                "country_id" => 131,
                "state_id" => null,
                "name" => json_encode(["en" => "Kraslavas", "zh" => "克拉斯拉瓦"]),
                "code" => "kra"
            ],
            [
                "id" => 1158,
                "country_id" => 131,
                "state_id" => null,
                "name" => json_encode(["en" => "Kuldigas", "zh" => "库尔迪加"]),
                "code" => "kul"
            ],
            [
                "id" => 1159,
                "country_id" => 131,
                "state_id" => null,
                "name" => json_encode(["en" => "Rezeknes", "zh" => "雷泽克内"]),
                "code" => "rzr"
            ],
            [
                "id" => 1160,
                "country_id" => 131,
                "state_id" => null,
                "name" => json_encode(["en" => "Rigas", "zh" => "里加"]),
                "code" => "rga"
            ],
            [
                "id" => 1161,
                "country_id" => 131,
                "state_id" => null,
                "name" => json_encode(["en" => "Liepajas", "zh" => "利耶帕亚"]),
                "code" => "lpk"
            ],
            [
                "id" => 1162,
                "country_id" => 131,
                "state_id" => null,
                "name" => json_encode(["en" => "Limbazu", "zh" => "林巴济"]),
                "code" => "lim"
            ],
            [
                "id" => 1163,
                "country_id" => 131,
                "state_id" => null,
                "name" => json_encode(["en" => "Ludzas", "zh" => "卢扎"]),
                "code" => "lud"
            ],
            [
                "id" => 1164,
                "country_id" => 131,
                "state_id" => null,
                "name" => json_encode(["en" => "Madonas", "zh" => "马多纳"]),
                "code" => "mad"
            ],
            [
                "id" => 1165,
                "country_id" => 131,
                "state_id" => null,
                "name" => json_encode(["en" => "Preilu", "zh" => "普雷利"]),
                "code" => "pre"
            ],
            [
                "id" => 1166,
                "country_id" => 131,
                "state_id" => null,
                "name" => json_encode(["en" => "Saldus", "zh" => "萨尔杜斯"]),
                "code" => "sal"
            ],
            [
                "id" => 1167,
                "country_id" => 131,
                "state_id" => null,
                "name" => json_encode(["en" => "Talsu", "zh" => "塔尔西"]),
                "code" => "tal"
            ],
            [
                "id" => 1168,
                "country_id" => 131,
                "state_id" => null,
                "name" => json_encode(["en" => "Daugavpils", "zh" => "陶格夫皮尔斯"]),
                "code" => "dgr"
            ],
            [
                "id" => 1169,
                "country_id" => 131,
                "state_id" => null,
                "name" => json_encode(["en" => "Tukuma", "zh" => "图库马"]),
                "code" => "tuk"
            ],
            [
                "id" => 1170,
                "country_id" => 131,
                "state_id" => null,
                "name" => json_encode(["en" => "Valkas", "zh" => "瓦尔加"]),
                "code" => "vlk"
            ],
            [
                "id" => 1171,
                "country_id" => 131,
                "state_id" => null,
                "name" => json_encode(["en" => "Valmieras", "zh" => "瓦尔米耶拉"]),
                "code" => "vlm"
            ],
            [
                "id" => 1172,
                "country_id" => 131,
                "state_id" => null,
                "name" => json_encode(["en" => "Ventspils", "zh" => "文茨皮尔斯"]),
                "code" => "vsl"
            ],
            [
                "id" => 1173,
                "country_id" => 131,
                "state_id" => null,
                "name" => json_encode(["en" => "Jelgavas", "zh" => "叶尔加瓦"]),
                "code" => "jgr"
            ],
            [
                "id" => 1174,
                "country_id" => 34,
                "state_id" => null,
                "name" => json_encode(["en" => "Berea", "zh" => "伯里亚"]),
                "code" => "d"
            ],
            [
                "id" => 1175,
                "country_id" => 34,
                "state_id" => null,
                "name" => json_encode(["en" => "Butha-Buthe", "zh" => "布塔布泰"]),
                "code" => "b"
            ],
            [
                "id" => 1176,
                "country_id" => 34,
                "state_id" => null,
                "name" => json_encode(["en" => "Quthing", "zh" => "古廷"]),
                "code" => "g"
            ],
            [
                "id" => 1177,
                "country_id" => 34,
                "state_id" => null,
                "name" => json_encode(["en" => "Qachas Nek", "zh" => "加查斯内克"]),
                "code" => "h"
            ],
            [
                "id" => 1178,
                "country_id" => 34,
                "state_id" => null,
                "name" => json_encode(["en" => "Leribe", "zh" => "莱里贝"]),
                "code" => "c"
            ],
            [
                "id" => 1179,
                "country_id" => 34,
                "state_id" => null,
                "name" => json_encode(["en" => "Mafeteng", "zh" => "马费滕"]),
                "code" => "e"
            ],
            [
                "id" => 1180,
                "country_id" => 34,
                "state_id" => null,
                "name" => json_encode(["en" => "Maseru", "zh" => "马塞卢"]),
                "code" => "a"
            ],
            [
                "id" => 1181,
                "country_id" => 34,
                "state_id" => null,
                "name" => json_encode(["en" => "Mohales Hoek", "zh" => "莫哈莱斯胡克"]),
                "code" => "f"
            ],
            [
                "id" => 1182,
                "country_id" => 34,
                "state_id" => null,
                "name" => json_encode(["en" => "Mokhotlong", "zh" => "莫霍特隆"]),
                "code" => "j"
            ],
            [
                "id" => 1183,
                "country_id" => 34,
                "state_id" => null,
                "name" => json_encode(["en" => "Thaba-Tseka", "zh" => "塔巴采卡"]),
                "code" => "k"
            ],
            [
                "id" => 1184,
                "country_id" => 69,
                "state_id" => null,
                "name" => json_encode(["en" => "Attapu", "zh" => "阿速坡"]),
                "code" => "at"
            ],
            [
                "id" => 1185,
                "country_id" => 69,
                "state_id" => null,
                "name" => json_encode(["en" => "Bolikhamxai", "zh" => "波里坎赛"]),
                "code" => "bl"
            ],
            [
                "id" => 1186,
                "country_id" => 69,
                "state_id" => null,
                "name" => json_encode(["en" => "Bokeo", "zh" => "博乔"]),
                "code" => "bk"
            ],
            [
                "id" => 1187,
                "country_id" => 69,
                "state_id" => null,
                "name" => json_encode(["en" => "Xiangkhoang", "zh" => "川圹"]),
                "code" => "xi"
            ],
            [
                "id" => 1188,
                "country_id" => 69,
                "state_id" => null,
                "name" => json_encode(["en" => "Phongsali", "zh" => "丰沙里"]),
                "code" => "ph"
            ],
            [
                "id" => 1189,
                "country_id" => 69,
                "state_id" => null,
                "name" => json_encode(["en" => "Khammouan", "zh" => "甘蒙"]),
                "code" => "kh"
            ],
            [
                "id" => 1190,
                "country_id" => 69,
                "state_id" => null,
                "name" => json_encode(["en" => "Houaphan", "zh" => "华潘"]),
                "code" => "ho"
            ],
            [
                "id" => 1191,
                "country_id" => 69,
                "state_id" => null,
                "name" => json_encode(["en" => "Louangphrabang", "zh" => "琅勃拉邦"]),
                "code" => "lp"
            ],
            [
                "id" => 1192,
                "country_id" => 69,
                "state_id" => null,
                "name" => json_encode(["en" => "Louang Namtha", "zh" => "琅南塔"]),
                "code" => "lm"
            ],
            [
                "id" => 1193,
                "country_id" => 69,
                "state_id" => null,
                "name" => json_encode(["en" => "Xaisomboun", "zh" => "赛宋本行政特区"]),
                "code" => "xn"
            ],
            [
                "id" => 1194,
                "country_id" => 69,
                "state_id" => null,
                "name" => json_encode(["en" => "Xekong", "zh" => "色贡"]),
                "code" => "xe"
            ],
            [
                "id" => 1195,
                "country_id" => 69,
                "state_id" => null,
                "name" => json_encode(["en" => "Saravan", "zh" => "沙拉湾"]),
                "code" => "sl"
            ],
            [
                "id" => 1196,
                "country_id" => 69,
                "state_id" => null,
                "name" => json_encode(["en" => "Savannakhet", "zh" => "沙湾拿吉"]),
                "code" => "sv"
            ],
            [
                "id" => 1197,
                "country_id" => 69,
                "state_id" => null,
                "name" => json_encode(["en" => "Xaignabouri", "zh" => "沙耶武里"]),
                "code" => "xa"
            ],
            [
                "id" => 1198,
                "country_id" => 69,
                "state_id" => null,
                "name" => json_encode(["en" => "Vientiane", "zh" => "万象"]),
                "code" => "vi"
            ],
            [
                "id" => 1199,
                "country_id" => 69,
                "state_id" => null,
                "name" => json_encode(["en" => "Oudomxai", "zh" => "乌多姆赛"]),
                "code" => "ou"
            ],
            [
                "id" => 1200,
                "country_id" => 69,
                "state_id" => null,
                "name" => json_encode(["en" => "Champasak", "zh" => "占巴塞"]),
                "code" => "ch"
            ],
            [
                "id" => 1201,
                "country_id" => 77,
                "state_id" => null,
                "name" => json_encode(["en" => "Ash-Shamal", "zh" => "北部"]),
                "code" => "as"
            ],
            [
                "id" => 1202,
                "country_id" => 77,
                "state_id" => null,
                "name" => json_encode(["en" => "Al-Biqa", "zh" => "贝卡"]),
                "code" => "bi"
            ],
            [
                "id" => 1203,
                "country_id" => 77,
                "state_id" => null,
                "name" => json_encode(["en" => "Bayrut", "zh" => "贝鲁特"]),
                "code" => "ba"
            ],
            [
                "id" => 1204,
                "country_id" => 77,
                "state_id" => null,
                "name" => json_encode(["en" => "Jabal Lubnan", "zh" => "黎巴嫩山"]),
                "code" => "jl"
            ],
            [
                "id" => 1205,
                "country_id" => 77,
                "state_id" => null,
                "name" => json_encode(["en" => "An-Nabatiyah", "zh" => "奈拜提耶市"]),
                "code" => "na"
            ],
            [
                "id" => 1206,
                "country_id" => 77,
                "state_id" => null,
                "name" => json_encode(["en" => "Al-Janub", "zh" => "南部"]),
                "code" => "ja"
            ],
            [
                "id" => 1207,
                "country_id" => 37,
                "state_id" => null,
                "name" => json_encode(["en" => "Gbarpolu", "zh" => "巴波卢"]),
                "code" => "gba"
            ],
            [
                "id" => 1208,
                "country_id" => 37,
                "state_id" => null,
                "name" => json_encode(["en" => "Bong", "zh" => "邦"]),
                "code" => "bg"
            ],
            [
                "id" => 1209,
                "country_id" => 37,
                "state_id" => null,
                "name" => json_encode(["en" => "Bopolu", "zh" => "博波卢"]),
                "code" => "bop"
            ],
            [
                "id" => 1210,
                "country_id" => 37,
                "state_id" => null,
                "name" => json_encode(["en" => "Bomi", "zh" => "博米"]),
                "code" => "bm"
            ],
            [
                "id" => 1211,
                "country_id" => 37,
                "state_id" => null,
                "name" => json_encode(["en" => "Grand Bassa", "zh" => "大巴萨"]),
                "code" => "gb"
            ],
            [
                "id" => 1212,
                "country_id" => 37,
                "state_id" => null,
                "name" => json_encode(["en" => "Grand Gedeh", "zh" => "大吉德"]),
                "code" => "gg"
            ],
            [
                "id" => 1213,
                "country_id" => 37,
                "state_id" => null,
                "name" => json_encode(["en" => "Grand Cape Mount", "zh" => "大角山"]),
                "code" => "cm"
            ],
            [
                "id" => 1214,
                "country_id" => 37,
                "state_id" => null,
                "name" => json_encode(["en" => "Grand Kru", "zh" => "大克鲁"]),
                "code" => "gk"
            ],
            [
                "id" => 1215,
                "country_id" => 37,
                "state_id" => null,
                "name" => json_encode(["en" => "Fish Town", "zh" => "菲什敦"]),
                "code" => "ft"
            ],
            [
                "id" => 1216,
                "country_id" => 37,
                "state_id" => null,
                "name" => json_encode(["en" => "River Gee", "zh" => "吉河"]),
                "code" => "rg"
            ],
            [
                "id" => 1217,
                "country_id" => 37,
                "state_id" => null,
                "name" => json_encode(["en" => "River Cess", "zh" => "里弗塞斯"]),
                "code" => "ri"
            ],
            [
                "id" => 1218,
                "country_id" => 37,
                "state_id" => null,
                "name" => json_encode(["en" => "Lofa", "zh" => "洛法"]),
                "code" => "lo"
            ],
            [
                "id" => 1219,
                "country_id" => 37,
                "state_id" => null,
                "name" => json_encode(["en" => "Margibi", "zh" => "马吉比"]),
                "code" => "mg"
            ],
            [
                "id" => 1220,
                "country_id" => 37,
                "state_id" => null,
                "name" => json_encode(["en" => "Maryland", "zh" => "马里兰"]),
                "code" => "my"
            ],
            [
                "id" => 1221,
                "country_id" => 37,
                "state_id" => null,
                "name" => json_encode(["en" => "Montserrado", "zh" => "蒙特塞拉多"]),
                "code" => "mo"
            ],
            [
                "id" => 1222,
                "country_id" => 37,
                "state_id" => null,
                "name" => json_encode(["en" => "Nimba", "zh" => "宁巴"]),
                "code" => "ni"
            ],
            [
                "id" => 1223,
                "country_id" => 37,
                "state_id" => null,
                "name" => json_encode(["en" => "Sinoe", "zh" => "锡诺"]),
                "code" => "si"
            ],
            [
                "id" => 1224,
                "country_id" => 132,
                "state_id" => null,
                "name" => json_encode(["en" => "Alytus", "zh" => "阿利图斯"]),
                "code" => "al"
            ],
            [
                "id" => 1225,
                "country_id" => 132,
                "state_id" => null,
                "name" => json_encode(["en" => "Kaunas", "zh" => "考纳斯"]),
                "code" => "ka"
            ],
            [
                "id" => 1226,
                "country_id" => 132,
                "state_id" => null,
                "name" => json_encode(["en" => "Klaipeda", "zh" => "克莱佩达"]),
                "code" => "kl"
            ],
            [
                "id" => 1227,
                "country_id" => 132,
                "state_id" => null,
                "name" => json_encode(["en" => "Marijampole", "zh" => "马里扬泊列"]),
                "code" => "ma"
            ],
            [
                "id" => 1228,
                "country_id" => 132,
                "state_id" => null,
                "name" => json_encode(["en" => "Panevezys", "zh" => "帕涅韦日斯"]),
                "code" => "pa"
            ],
            [
                "id" => 1229,
                "country_id" => 132,
                "state_id" => null,
                "name" => json_encode(["en" => "Taurages", "zh" => "陶拉格"]),
                "code" => "ta"
            ],
            [
                "id" => 1230,
                "country_id" => 132,
                "state_id" => null,
                "name" => json_encode(["en" => "Telsiu", "zh" => "特尔希艾"]),
                "code" => "te"
            ],
            [
                "id" => 1231,
                "country_id" => 132,
                "state_id" => null,
                "name" => json_encode(["en" => "Vilnius", "zh" => "维尔纽斯"]),
                "code" => "vi"
            ],
            [
                "id" => 1232,
                "country_id" => 132,
                "state_id" => null,
                "name" => json_encode(["en" => "Utenos", "zh" => "乌田纳"]),
                "code" => "ut"
            ],
            [
                "id" => 1233,
                "country_id" => 132,
                "state_id" => null,
                "name" => json_encode(["en" => "Siauliai", "zh" => "希奥利艾"]),
                "code" => "si"
            ],
            [
                "id" => 1234,
                "country_id" => 132,
                "state_id" => null,
                "name" => json_encode(["en" => "Akmenes", "zh" => "亚克曼"]),
                "code" => "akm"
            ],
            [
                "id" => 1235,
                "country_id" => 152,
                "state_id" => null,
                "name" => json_encode(["en" => "Diekirch", "zh" => "迪基希"]),
                "code" => "dd"
            ],
            [
                "id" => 1236,
                "country_id" => 152,
                "state_id" => null,
                "name" => json_encode(["en" => "Grevenmacher", "zh" => "格雷文马赫"]),
                "code" => "gg"
            ],
            [
                "id" => 1237,
                "country_id" => 152,
                "state_id" => null,
                "name" => json_encode(["en" => "Luxembourg", "zh" => "卢森堡"]),
                "code" => "ll"
            ],
            [
                "id" => 1238,
                "country_id" => 4,
                "state_id" => null,
                "name" => json_encode(["en" => "Byumba", "zh" => "比温巴"]),
                "code" => "by"
            ],
            [
                "id" => 1239,
                "country_id" => 4,
                "state_id" => null,
                "name" => json_encode(["en" => "Butare", "zh" => "布塔雷"]),
                "code" => "bu"
            ],
            [
                "id" => 1240,
                "country_id" => 4,
                "state_id" => null,
                "name" => json_encode(["en" => "Nyanza", "zh" => "恩延扎"]),
                "code" => "ny"
            ],
            [
                "id" => 1241,
                "country_id" => 4,
                "state_id" => null,
                "name" => json_encode(["en" => "Kibungo", "zh" => "基本古"]),
                "code" => "kg"
            ],
            [
                "id" => 1242,
                "country_id" => 4,
                "state_id" => null,
                "name" => json_encode(["en" => "Kibuye", "zh" => "基布耶"]),
                "code" => "ky"
            ],
            [
                "id" => 1243,
                "country_id" => 4,
                "state_id" => null,
                "name" => json_encode(["en" => "Kigali-Ngali", "zh" => "基加利-恩加利"]),
                "code" => "kr"
            ],
            [
                "id" => 1244,
                "country_id" => 4,
                "state_id" => null,
                "name" => json_encode(["en" => "Kigali-Ville", "zh" => "基加利市"]),
                "code" => "kv"
            ],
            [
                "id" => 1245,
                "country_id" => 4,
                "state_id" => null,
                "name" => json_encode(["en" => "Gikongoro", "zh" => "吉孔戈罗"]),
                "code" => "gk"
            ],
            [
                "id" => 1246,
                "country_id" => 4,
                "state_id" => null,
                "name" => json_encode(["en" => "Gisenyi", "zh" => "吉塞尼"]),
                "code" => "gs"
            ],
            [
                "id" => 1247,
                "country_id" => 4,
                "state_id" => null,
                "name" => json_encode(["en" => "Gitarama", "zh" => "吉塔拉马"]),
                "code" => "gt"
            ],
            [
                "id" => 1248,
                "country_id" => 4,
                "state_id" => null,
                "name" => json_encode(["en" => "Kabuga", "zh" => "卡布加"]),
                "code" => "ka"
            ],
            [
                "id" => 1249,
                "country_id" => 4,
                "state_id" => null,
                "name" => json_encode(["en" => "Rwamagana", "zh" => "卢瓦马加纳"]),
                "code" => "rw"
            ],
            [
                "id" => 1250,
                "country_id" => 4,
                "state_id" => null,
                "name" => json_encode(["en" => "Ruhango", "zh" => "鲁汉戈"]),
                "code" => "rh"
            ],
            [
                "id" => 1251,
                "country_id" => 4,
                "state_id" => null,
                "name" => json_encode(["en" => "Ruhengeri", "zh" => "鲁亨盖里"]),
                "code" => "ru"
            ],
            [
                "id" => 1252,
                "country_id" => 4,
                "state_id" => null,
                "name" => json_encode(["en" => "Cyangugu", "zh" => "尚古古"]),
                "code" => "cy"
            ],
            [
                "id" => 1253,
                "country_id" => 4,
                "state_id" => null,
                "name" => json_encode(["en" => "Umutara", "zh" => "乌姆塔拉"]),
                "code" => "um"
            ],
            [
                "id" => 1254,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Alba Iulia", "zh" => "阿尔巴尤利亚"]),
                "code" => "al"
            ],
            [
                "id" => 1255,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Arad", "zh" => "阿拉德"]),
                "code" => "ar"
            ],
            [
                "id" => 1256,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Oradea", "zh" => "奥拉迪亚"]),
                "code" => "or"
            ],
            [
                "id" => 1257,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Bacau", "zh" => "巴克乌"]),
                "code" => "ba"
            ],
            [
                "id" => 1258,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Baia Mare", "zh" => "巴亚马雷"]),
                "code" => "bm"
            ],
            [
                "id" => 1259,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Bistrita", "zh" => "比斯特里察"]),
                "code" => "bn"
            ],
            [
                "id" => 1260,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Botosani", "zh" => "博托沙尼"]),
                "code" => "bo"
            ],
            [
                "id" => 1261,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Bucuresti", "zh" => "布加勒斯特"]),
                "code" => "bc"
            ],
            [
                "id" => 1262,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Brasov", "zh" => "布拉索夫"]),
                "code" => "bs"
            ],
            [
                "id" => 1263,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Braila", "zh" => "布勒伊拉"]),
                "code" => "bl"
            ],
            [
                "id" => 1264,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Buzau", "zh" => "布泽乌"]),
                "code" => "bz"
            ],
            [
                "id" => 1265,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Drobeta-Turnu Severin", "zh" => "德罗贝塔-塞维林堡"]),
                "code" => "dt"
            ],
            [
                "id" => 1266,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Deva", "zh" => "德瓦"]),
                "code" => "de"
            ],
            [
                "id" => 1267,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Timisoara", "zh" => "蒂米什瓦拉"]),
                "code" => "ti"
            ],
            [
                "id" => 1268,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Focsani", "zh" => "福克沙尼"]),
                "code" => "fo"
            ],
            [
                "id" => 1269,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Galati", "zh" => "加拉茨"]),
                "code" => "gl"
            ],
            [
                "id" => 1270,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Giurgiu", "zh" => "久尔久"]),
                "code" => "gg"
            ],
            [
                "id" => 1271,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Constanta", "zh" => "康斯坦察"]),
                "code" => "ct"
            ],
            [
                "id" => 1272,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Craiova", "zh" => "克拉约瓦"]),
                "code" => "do"
            ],
            [
                "id" => 1273,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Calarasi", "zh" => "克勒拉希"]),
                "code" => "cr"
            ],
            [
                "id" => 1274,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Cluj-Napoca", "zh" => "克卢日纳波卡"]),
                "code" => "cn"
            ],
            [
                "id" => 1275,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "XRimnicu Vilcea", "zh" => "勒姆尼库沃尔恰"]),
                "code" => "vi"
            ],
            [
                "id" => 1276,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Resita", "zh" => "雷希察"]),
                "code" => "re"
            ],
            [
                "id" => 1277,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Miercurea-Ciuc", "zh" => "梅尔库里亚丘克"]),
                "code" => "mc"
            ],
            [
                "id" => 1278,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Pitesti", "zh" => "皮特什蒂"]),
                "code" => "pi"
            ],
            [
                "id" => 1279,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Piatra Neamt", "zh" => "皮亚特拉尼亚姆茨"]),
                "code" => "pn"
            ],
            [
                "id" => 1280,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Ploiesti", "zh" => "普洛耶什蒂"]),
                "code" => "pl"
            ],
            [
                "id" => 1281,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Satu Mare", "zh" => "萨图·马雷"]),
                "code" => "sm"
            ],
            [
                "id" => 1282,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Sfantu-Gheorghe", "zh" => "圣格奥尔基"]),
                "code" => "sg"
            ],
            [
                "id" => 1283,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Slatina", "zh" => "斯拉蒂纳"]),
                "code" => "st"
            ],
            [
                "id" => 1284,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Slobozia", "zh" => "斯洛博齐亚"]),
                "code" => "sb"
            ],
            [
                "id" => 1285,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Suceava", "zh" => "苏恰瓦"]),
                "code" => "su"
            ],
            [
                "id" => 1286,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Targovişte", "zh" => "特尔戈维什泰"]),
                "code" => "ta"
            ],
            [
                "id" => 1287,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Tirgu Mures", "zh" => "特尔古穆列什"]),
                "code" => "tm"
            ],
            [
                "id" => 1288,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Tirgu-Jiu", "zh" => "特尔古日乌"]),
                "code" => "tj"
            ],
            [
                "id" => 1289,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Tulcea", "zh" => "图尔恰"]),
                "code" => "tu"
            ],
            [
                "id" => 1290,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Vaslui", "zh" => "瓦斯卢伊"]),
                "code" => "va"
            ],
            [
                "id" => 1291,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Sibiu", "zh" => "锡比乌"]),
                "code" => "so"
            ],
            [
                "id" => 1292,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Iasi", "zh" => "雅西"]),
                "code" => "is"
            ],
            [
                "id" => 1293,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Alexandria", "zh" => "亚厉山德里亚"]),
                "code" => "ad"
            ],
            [
                "id" => 1294,
                "country_id" => 126,
                "state_id" => null,
                "name" => json_encode(["en" => "Zalau", "zh" => "扎勒乌"]),
                "code" => "za"
            ],
            [
                "id" => 1295,
                "country_id" => 3,
                "state_id" => null,
                "name" => json_encode(["en" => "Antsiranana", "zh" => "安齐拉纳纳"]),
                "code" => "as"
            ],
            [
                "id" => 1296,
                "country_id" => 3,
                "state_id" => null,
                "name" => json_encode(["en" => "Fianarantsoa", "zh" => "菲亚纳兰楚阿"]),
                "code" => "fn"
            ],
            [
                "id" => 1297,
                "country_id" => 3,
                "state_id" => null,
                "name" => json_encode(["en" => "Mahajanga", "zh" => "马哈赞加"]),
                "code" => "mj"
            ],
            [
                "id" => 1298,
                "country_id" => 3,
                "state_id" => null,
                "name" => json_encode(["en" => "Antananarivo", "zh" => "塔那那利佛"]),
                "code" => "an"
            ],
            [
                "id" => 1299,
                "country_id" => 3,
                "state_id" => null,
                "name" => json_encode(["en" => "Toamasina", "zh" => "图阿马西拉"]),
                "code" => "tm"
            ],
            [
                "id" => 1300,
                "country_id" => 3,
                "state_id" => null,
                "name" => json_encode(["en" => "Toliary", "zh" => "图利亚拉"]),
                "code" => "tl"
            ],
            [
                "id" => 1301,
                "country_id" => 80,
                "state_id" => null,
                "name" => json_encode(["en" => "Addu Atoll", "zh" => "阿杜"]),
                "code" => "add"
            ],
            [
                "id" => 1302,
                "country_id" => 80,
                "state_id" => null,
                "name" => json_encode(["en" => "North Ari Atoll", "zh" => "北阿里"]),
                "code" => "aad"
            ],
            [
                "id" => 1303,
                "country_id" => 80,
                "state_id" => null,
                "name" => json_encode(["en" => "North Thiladhunmathi", "zh" => "北蒂拉杜马蒂"]),
                "code" => "thd"
            ],
            [
                "id" => 1304,
                "country_id" => 80,
                "state_id" => null,
                "name" => json_encode(["en" => "North Maalhosmadhulu", "zh" => "北马洛斯马杜卢"]),
                "code" => "mad"
            ],
            [
                "id" => 1305,
                "country_id" => 80,
                "state_id" => null,
                "name" => json_encode(["en" => "North Miladhunmadhulu", "zh" => "北米拉杜马杜卢"]),
                "code" => "mld"
            ],
            [
                "id" => 1306,
                "country_id" => 80,
                "state_id" => null,
                "name" => json_encode(["en" => "North Nilandhe Atoll", "zh" => "北尼兰杜"]),
                "code" => "nad"
            ],
            [
                "id" => 1307,
                "country_id" => 80,
                "state_id" => null,
                "name" => json_encode(["en" => "North Huvadhu Atoll", "zh" => "北苏瓦迪瓦"]),
                "code" => "had"
            ],
            [
                "id" => 1308,
                "country_id" => 80,
                "state_id" => null,
                "name" => json_encode(["en" => "Faadhippolhu", "zh" => "法迪福卢"]),
                "code" => "faa"
            ],
            [
                "id" => 1309,
                "country_id" => 80,
                "state_id" => null,
                "name" => json_encode(["en" => "Felidhu Atoll", "zh" => "费利杜"]),
                "code" => "fea"
            ],
            [
                "id" => 1310,
                "country_id" => 80,
                "state_id" => null,
                "name" => json_encode(["en" => "Foammulah", "zh" => "福阿穆拉库"]),
                "code" => "fmu"
            ],
            [
                "id" => 1311,
                "country_id" => 80,
                "state_id" => null,
                "name" => json_encode(["en" => "Hadhdhunmathi", "zh" => "哈杜马蒂"]),
                "code" => "hdh"
            ],
            [
                "id" => 1312,
                "country_id" => 80,
                "state_id" => null,
                "name" => json_encode(["en" => "Kolhumadulu", "zh" => "科卢马杜卢"]),
                "code" => "klh"
            ],
            [
                "id" => 1313,
                "country_id" => 80,
                "state_id" => null,
                "name" => json_encode(["en" => "Male", "zh" => "马累"]),
                "code" => "mal"
            ],
            [
                "id" => 1314,
                "country_id" => 80,
                "state_id" => null,
                "name" => json_encode(["en" => "Male Atoll", "zh" => "马累岛"]),
                "code" => "maa"
            ],
            [
                "id" => 1315,
                "country_id" => 80,
                "state_id" => null,
                "name" => json_encode(["en" => "Mulakatholhu", "zh" => "穆拉库"]),
                "code" => "mua"
            ],
            [
                "id" => 1316,
                "country_id" => 80,
                "state_id" => null,
                "name" => json_encode(["en" => "South Ari Atoll", "zh" => "南阿里"]),
                "code" => "aau"
            ],
            [
                "id" => 1317,
                "country_id" => 80,
                "state_id" => null,
                "name" => json_encode(["en" => "South Thiladhunmathi", "zh" => "南蒂拉杜马蒂"]),
                "code" => "thu"
            ],
            [
                "id" => 1318,
                "country_id" => 80,
                "state_id" => null,
                "name" => json_encode(["en" => "South Maalhosmadulu", "zh" => "南马洛斯马杜卢"]),
                "code" => "mau"
            ],
            [
                "id" => 1319,
                "country_id" => 80,
                "state_id" => null,
                "name" => json_encode(["en" => "South Miladhunmadhulu", "zh" => "南米拉杜马杜卢"]),
                "code" => "mlu"
            ],
            [
                "id" => 1320,
                "country_id" => 80,
                "state_id" => null,
                "name" => json_encode(["en" => "South Nilandhe Atoll", "zh" => "南尼兰杜"]),
                "code" => "nau"
            ],
            [
                "id" => 1321,
                "country_id" => 80,
                "state_id" => null,
                "name" => json_encode(["en" => "South Huvadhu Atoll", "zh" => "南苏瓦迪瓦"]),
                "code" => "hau"
            ],
            [
                "id" => 1322,
                "country_id" => 47,
                "state_id" => null,
                "name" => json_encode(["en" => "Northern", "zh" => "北部区"]),
                "code" => "n"
            ],
            [
                "id" => 1323,
                "country_id" => 47,
                "state_id" => null,
                "name" => json_encode(["en" => "Southern", "zh" => "南部区"]),
                "code" => "s"
            ],
            [
                "id" => 1324,
                "country_id" => 47,
                "state_id" => null,
                "name" => json_encode(["en" => "Central", "zh" => "中央区"]),
                "code" => "c"
            ],
            [
                "id" => 1325,
                "country_id" => 21,
                "state_id" => null,
                "name" => json_encode(["en" => "Bamako", "zh" => "巴马科首都区"]),
                "code" => "cd"
            ],
            [
                "id" => 1326,
                "country_id" => 21,
                "state_id" => null,
                "name" => json_encode(["en" => "Kidal", "zh" => "基达尔"]),
                "code" => "kd"
            ],
            [
                "id" => 1327,
                "country_id" => 21,
                "state_id" => null,
                "name" => json_encode(["en" => "Gao", "zh" => "加奥"]),
                "code" => "ga"
            ],
            [
                "id" => 1328,
                "country_id" => 21,
                "state_id" => null,
                "name" => json_encode(["en" => "Kayes", "zh" => "卡伊"]),
                "code" => "ky"
            ],
            [
                "id" => 1329,
                "country_id" => 21,
                "state_id" => null,
                "name" => json_encode(["en" => "Koulikoro", "zh" => "库利科罗"]),
                "code" => "kl"
            ],
            [
                "id" => 1330,
                "country_id" => 21,
                "state_id" => null,
                "name" => json_encode(["en" => "Mopti", "zh" => "莫普提"]),
                "code" => "mp"
            ],
            [
                "id" => 1331,
                "country_id" => 21,
                "state_id" => null,
                "name" => json_encode(["en" => "Segou", "zh" => "塞古"]),
                "code" => "sg"
            ],
            [
                "id" => 1332,
                "country_id" => 21,
                "state_id" => null,
                "name" => json_encode(["en" => "Tombouctou", "zh" => "通布图"]),
                "code" => "tb"
            ],
            [
                "id" => 1333,
                "country_id" => 21,
                "state_id" => null,
                "name" => json_encode(["en" => "Sikasso", "zh" => "锡卡索"]),
                "code" => "sk"
            ],
            [
                "id" => 1334,
                "country_id" => 23,
                "state_id" => null,
                "name" => json_encode(["en" => "Adrar", "zh" => "阿德拉尔"]),
                "code" => "ad"
            ],
            [
                "id" => 1335,
                "country_id" => 23,
                "state_id" => null,
                "name" => json_encode(["en" => "El-Acaba", "zh" => "阿萨巴"]),
                "code" => "as"
            ],
            [
                "id" => 1336,
                "country_id" => 23,
                "state_id" => null,
                "name" => json_encode(["en" => "Brakna", "zh" => "卜拉克纳"]),
                "code" => "br"
            ],
            [
                "id" => 1337,
                "country_id" => 23,
                "state_id" => null,
                "name" => json_encode(["en" => "Hodh el-Gharbi", "zh" => "东胡德"]),
                "code" => "hg"
            ],
            [
                "id" => 1338,
                "country_id" => 23,
                "state_id" => null,
                "name" => json_encode(["en" => "Gorgol", "zh" => "戈尔戈勒"]),
                "code" => "go"
            ],
            [
                "id" => 1339,
                "country_id" => 23,
                "state_id" => null,
                "name" => json_encode(["en" => "Guidimaka", "zh" => "吉迪马卡"]),
                "code" => "gm"
            ],
            [
                "id" => 1340,
                "country_id" => 23,
                "state_id" => null,
                "name" => json_encode(["en" => "Dakhlet Nouadhibou", "zh" => "努瓦迪布湾"]),
                "code" => "dn"
            ],
            [
                "id" => 1341,
                "country_id" => 23,
                "state_id" => null,
                "name" => json_encode(["en" => "Nouakchott", "zh" => "努瓦克肖特特区"]),
                "code" => "no"
            ],
            [
                "id" => 1342,
                "country_id" => 23,
                "state_id" => null,
                "name" => json_encode(["en" => "Tagant", "zh" => "塔甘特"]),
                "code" => "ta"
            ],
            [
                "id" => 1343,
                "country_id" => 23,
                "state_id" => null,
                "name" => json_encode(["en" => "Trarza", "zh" => "特拉扎"]),
                "code" => "tr"
            ],
            [
                "id" => 1344,
                "country_id" => 23,
                "state_id" => null,
                "name" => json_encode(["en" => "Tiris Zemmour", "zh" => "提里斯-宰穆尔"]),
                "code" => "tz"
            ],
            [
                "id" => 1345,
                "country_id" => 23,
                "state_id" => null,
                "name" => json_encode(["en" => "Hodh ech-Chargui", "zh" => "西胡德"]),
                "code" => "hc"
            ],
            [
                "id" => 1346,
                "country_id" => 23,
                "state_id" => null,
                "name" => json_encode(["en" => "Inchiri", "zh" => "因希里"]),
                "code" => "in"
            ],
            [
                "id" => 1347,
                "country_id" => 83,
                "state_id" => null,
                "name" => json_encode(["en" => "Bayanhongor", "zh" => "巴彦洪格尔"]),
                "code" => "69"
            ],
            [
                "id" => 1348,
                "country_id" => 83,
                "state_id" => null,
                "name" => json_encode(["en" => "Bayan-Ulgiy", "zh" => "巴彦乌勒盖"]),
                "code" => "71"
            ],
            [
                "id" => 1349,
                "country_id" => 83,
                "state_id" => null,
                "name" => json_encode(["en" => "Bulgan", "zh" => "布尔干"]),
                "code" => "67"
            ],
            [
                "id" => 1350,
                "country_id" => 83,
                "state_id" => null,
                "name" => json_encode(["en" => "Darhan-Uul", "zh" => "达尔汗乌勒"]),
                "code" => "37"
            ],
            [
                "id" => 1351,
                "country_id" => 83,
                "state_id" => null,
                "name" => json_encode(["en" => "Dornod", "zh" => "东方"]),
                "code" => "61"
            ],
            [
                "id" => 1352,
                "country_id" => 83,
                "state_id" => null,
                "name" => json_encode(["en" => "Dornogovi", "zh" => "东戈壁"]),
                "code" => "63"
            ],
            [
                "id" => 1353,
                "country_id" => 83,
                "state_id" => null,
                "name" => json_encode(["en" => "Orhon", "zh" => "鄂尔浑"]),
                "code" => "35"
            ],
            [
                "id" => 1354,
                "country_id" => 83,
                "state_id" => null,
                "name" => json_encode(["en" => "Govi-Altay", "zh" => "戈壁阿尔泰"]),
                "code" => "65"
            ],
            [
                "id" => 1355,
                "country_id" => 83,
                "state_id" => null,
                "name" => json_encode(["en" => "Govisumber", "zh" => "戈壁苏木贝尔"]),
                "code" => "64"
            ],
            [
                "id" => 1356,
                "country_id" => 83,
                "state_id" => null,
                "name" => json_encode(["en" => "Arhangay", "zh" => "后杭爱"]),
                "code" => "73"
            ],
            [
                "id" => 1357,
                "country_id" => 83,
                "state_id" => null,
                "name" => json_encode(["en" => "Hovd", "zh" => "科布多"]),
                "code" => "43"
            ],
            [
                "id" => 1358,
                "country_id" => 83,
                "state_id" => null,
                "name" => json_encode(["en" => "Hentiy", "zh" => "肯特"]),
                "code" => "39"
            ],
            [
                "id" => 1359,
                "country_id" => 83,
                "state_id" => null,
                "name" => json_encode(["en" => "Hovsgol", "zh" => "库苏古尔"]),
                "code" => "41"
            ],
            [
                "id" => 1360,
                "country_id" => 83,
                "state_id" => null,
                "name" => json_encode(["en" => "Umnogovi", "zh" => "南戈壁"]),
                "code" => "umn"
            ],
            [
                "id" => 1361,
                "country_id" => 83,
                "state_id" => null,
                "name" => json_encode(["en" => "Uvorhangay", "zh" => "前杭爱"]),
                "code" => "uvo"
            ],
            [
                "id" => 1362,
                "country_id" => 83,
                "state_id" => null,
                "name" => json_encode(["en" => "Selenge", "zh" => "色楞格"]),
                "code" => "49"
            ],
            [
                "id" => 1363,
                "country_id" => 83,
                "state_id" => null,
                "name" => json_encode(["en" => "Suhbaatar", "zh" => "苏赫巴托尔"]),
                "code" => "51"
            ],
            [
                "id" => 1364,
                "country_id" => 83,
                "state_id" => null,
                "name" => json_encode(["en" => "Uvs", "zh" => "乌布苏"]),
                "code" => "46"
            ],
            [
                "id" => 1365,
                "country_id" => 83,
                "state_id" => null,
                "name" => json_encode(["en" => "Ulaanbaatar hot", "zh" => "乌兰巴托市"]),
                "code" => "1"
            ],
            [
                "id" => 1366,
                "country_id" => 83,
                "state_id" => null,
                "name" => json_encode(["en" => "Dzavhan", "zh" => "扎布汗"]),
                "code" => "57"
            ],
            [
                "id" => 1367,
                "country_id" => 83,
                "state_id" => null,
                "name" => json_encode(["en" => "Dundgovi", "zh" => "中戈壁"]),
                "code" => "59"
            ],
            [
                "id" => 1368,
                "country_id" => 83,
                "state_id" => null,
                "name" => json_encode(["en" => "Tov", "zh" => "中央"]),
                "code" => "47"
            ],
            [
                "id" => 1369,
                "country_id" => 93,
                "state_id" => null,
                "name" => json_encode(["en" => "Dhaka", "zh" => "达卡"]),
                "code" => "dac"
            ],
            [
                "id" => 1370,
                "country_id" => 93,
                "state_id" => null,
                "name" => json_encode(["en" => "Chittagong", "zh" => "吉大港"]),
                "code" => "cgp"
            ],
            [
                "id" => 1371,
                "country_id" => 93,
                "state_id" => null,
                "name" => json_encode(["en" => "Khulna", "zh" => "库尔纳"]),
                "code" => "khl"
            ],
            [
                "id" => 1372,
                "country_id" => 190,
                "state_id" => null,
                "name" => json_encode(["en" => "Arequipa", "zh" => "阿雷基帕"]),
                "code" => "ar"
            ],
            [
                "id" => 1373,
                "country_id" => 190,
                "state_id" => null,
                "name" => json_encode(["en" => "Apurimac", "zh" => "阿普里马克"]),
                "code" => "ap"
            ],
            [
                "id" => 1374,
                "country_id" => 190,
                "state_id" => null,
                "name" => json_encode(["en" => "Ayacucho", "zh" => "阿亚库乔"]),
                "code" => "ay"
            ],
            [
                "id" => 1375,
                "country_id" => 190,
                "state_id" => null,
                "name" => json_encode(["en" => "Ancash", "zh" => "安卡什"]),
                "code" => "an"
            ],
            [
                "id" => 1376,
                "country_id" => 190,
                "state_id" => null,
                "name" => json_encode(["en" => "Juliaca", "zh" => "胡利亚卡"]),
                "code" => "jul"
            ],
            [
                "id" => 1377,
                "country_id" => 190,
                "state_id" => null,
                "name" => json_encode(["en" => "Junin", "zh" => "胡宁"]),
                "code" => "ju"
            ],
            [
                "id" => 1378,
                "country_id" => 190,
                "state_id" => null,
                "name" => json_encode(["en" => "Cajamarca", "zh" => "卡哈马卡"]),
                "code" => "cj"
            ],
            [
                "id" => 1379,
                "country_id" => 190,
                "state_id" => null,
                "name" => json_encode(["en" => "Callao", "zh" => "卡亚俄"]),
                "code" => "cl"
            ],
            [
                "id" => 1380,
                "country_id" => 190,
                "state_id" => null,
                "name" => json_encode(["en" => "Cusco", "zh" => "库斯科"]),
                "code" => "cu"
            ],
            [
                "id" => 1381,
                "country_id" => 190,
                "state_id" => null,
                "name" => json_encode(["en" => "La Libertad", "zh" => "拉利伯塔德"]),
                "code" => "ld"
            ],
            [
                "id" => 1382,
                "country_id" => 190,
                "state_id" => null,
                "name" => json_encode(["en" => "Lambayeque", "zh" => "兰巴耶克"]),
                "code" => "ly"
            ],
            [
                "id" => 1383,
                "country_id" => 190,
                "state_id" => null,
                "name" => json_encode(["en" => "Lima", "zh" => "利马"]),
                "code" => "li"
            ],
            [
                "id" => 1384,
                "country_id" => 190,
                "state_id" => null,
                "name" => json_encode(["en" => "Loreto", "zh" => "洛雷托"]),
                "code" => "lo"
            ],
            [
                "id" => 1385,
                "country_id" => 190,
                "state_id" => null,
                "name" => json_encode(["en" => "Madre de Dios", "zh" => "马德雷德迪奥斯"]),
                "code" => "md"
            ],
            [
                "id" => 1386,
                "country_id" => 190,
                "state_id" => null,
                "name" => json_encode(["en" => "Moquegua", "zh" => "莫克瓜"]),
                "code" => "mo"
            ],
            [
                "id" => 1387,
                "country_id" => 190,
                "state_id" => null,
                "name" => json_encode(["en" => "Pasco", "zh" => "帕斯科"]),
                "code" => "pa"
            ],
            [
                "id" => 1388,
                "country_id" => 190,
                "state_id" => null,
                "name" => json_encode(["en" => "Piura", "zh" => "皮乌拉"]),
                "code" => "pi"
            ],
            [
                "id" => 1389,
                "country_id" => 190,
                "state_id" => null,
                "name" => json_encode(["en" => "Puno", "zh" => "普诺"]),
                "code" => "pu"
            ],
            [
                "id" => 1390,
                "country_id" => 190,
                "state_id" => null,
                "name" => json_encode(["en" => "Chimbote", "zh" => "钦博特"]),
                "code" => "chm"
            ],
            [
                "id" => 1391,
                "country_id" => 190,
                "state_id" => null,
                "name" => json_encode(["en" => "Chincha Alta", "zh" => "钦查阿尔塔"]),
                "code" => "chi"
            ],
            [
                "id" => 1392,
                "country_id" => 190,
                "state_id" => null,
                "name" => json_encode(["en" => "San Martin", "zh" => "圣马丁"]),
                "code" => "sm"
            ],
            [
                "id" => 1393,
                "country_id" => 190,
                "state_id" => null,
                "name" => json_encode(["en" => "Sullana", "zh" => "苏拉纳"]),
                "code" => "sul"
            ],
            [
                "id" => 1394,
                "country_id" => 190,
                "state_id" => null,
                "name" => json_encode(["en" => "Tacna", "zh" => "塔克纳"]),
                "code" => "ta"
            ],
            [
                "id" => 1395,
                "country_id" => 190,
                "state_id" => null,
                "name" => json_encode(["en" => "Tumbes", "zh" => "通贝斯"]),
                "code" => "tu"
            ],
            [
                "id" => 1396,
                "country_id" => 190,
                "state_id" => null,
                "name" => json_encode(["en" => "Huanuco", "zh" => "瓦努科"]),
                "code" => "ho"
            ],
            [
                "id" => 1397,
                "country_id" => 190,
                "state_id" => null,
                "name" => json_encode(["en" => "Huancavelica", "zh" => "万卡维利卡"]),
                "code" => "hv"
            ],
            [
                "id" => 1398,
                "country_id" => 190,
                "state_id" => null,
                "name" => json_encode(["en" => "Ucayali", "zh" => "乌卡亚利"]),
                "code" => "uc"
            ],
            [
                "id" => 1399,
                "country_id" => 190,
                "state_id" => null,
                "name" => json_encode(["en" => "Amazonas", "zh" => "亚马孙"]),
                "code" => "am"
            ],
            [
                "id" => 1400,
                "country_id" => 190,
                "state_id" => null,
                "name" => json_encode(["en" => "Ica", "zh" => "伊卡"]),
                "code" => "ic"
            ],
            [
                "id" => 1401,
                "country_id" => 86,
                "state_id" => null,
                "name" => json_encode(["en" => "Bago", "zh" => "勃固省"]),
                "code" => "bg"
            ],
            [
                "id" => 1402,
                "country_id" => 86,
                "state_id" => null,
                "name" => json_encode(["en" => "Shan", "zh" => "掸邦"]),
                "code" => "sh"
            ],
            [
                "id" => 1403,
                "country_id" => 86,
                "state_id" => null,
                "name" => json_encode(["en" => "Tanintharyi", "zh" => "德林达依省"]),
                "code" => "tn"
            ],
            [
                "id" => 1404,
                "country_id" => 86,
                "state_id" => null,
                "name" => json_encode(["en" => "Kayin", "zh" => "克伦邦"]),
                "code" => "kn"
            ],
            [
                "id" => 1405,
                "country_id" => 86,
                "state_id" => null,
                "name" => json_encode(["en" => "Kachin", "zh" => "克钦邦"]),
                "code" => "kc"
            ],
            [
                "id" => 1406,
                "country_id" => 86,
                "state_id" => null,
                "name" => json_encode(["en" => "Kayah", "zh" => "克耶邦"]),
                "code" => "kh"
            ],
            [
                "id" => 1407,
                "country_id" => 86,
                "state_id" => null,
                "name" => json_encode(["en" => "Magway", "zh" => "马圭省"]),
                "code" => "mg"
            ],
            [
                "id" => 1408,
                "country_id" => 86,
                "state_id" => null,
                "name" => json_encode(["en" => "Mandalay", "zh" => "曼德勒省"]),
                "code" => "md"
            ],
            [
                "id" => 1409,
                "country_id" => 86,
                "state_id" => null,
                "name" => json_encode(["en" => "Mon", "zh" => "孟邦"]),
                "code" => "mn"
            ],
            [
                "id" => 1410,
                "country_id" => 86,
                "state_id" => null,
                "name" => json_encode(["en" => "Chin", "zh" => "钦邦"]),
                "code" => "ch"
            ],
            [
                "id" => 1411,
                "country_id" => 86,
                "state_id" => null,
                "name" => json_encode(["en" => "Rakhine", "zh" => "若开邦"]),
                "code" => "rk"
            ],
            [
                "id" => 1412,
                "country_id" => 86,
                "state_id" => null,
                "name" => json_encode(["en" => "Sagaing", "zh" => "实皆省"]),
                "code" => "sg"
            ],
            [
                "id" => 1413,
                "country_id" => 86,
                "state_id" => null,
                "name" => json_encode(["en" => "Yangon", "zh" => "仰光省"]),
                "code" => "yg"
            ],
            [
                "id" => 1414,
                "country_id" => 86,
                "state_id" => null,
                "name" => json_encode(["en" => "Ayeyarwady", "zh" => "伊洛瓦底省"]),
                "code" => "ay"
            ],
            [
                "id" => 1415,
                "country_id" => 46,
                "state_id" => null,
                "name" => json_encode(["en" => "Tangier", "zh" => "丹吉尔"]),
                "code" => "tgr"
            ],
            [
                "id" => 1416,
                "country_id" => 46,
                "state_id" => null,
                "name" => json_encode(["en" => "Tetouan", "zh" => "得土安"]),
                "code" => "tet"
            ],
            [
                "id" => 1417,
                "country_id" => 46,
                "state_id" => null,
                "name" => json_encode(["en" => "Fes", "zh" => "非斯"]),
                "code" => "fes"
            ],
            [
                "id" => 1418,
                "country_id" => 46,
                "state_id" => null,
                "name" => json_encode(["en" => "Casablanca", "zh" => "卡萨布兰卡"]),
                "code" => "cbl"
            ],
            [
                "id" => 1419,
                "country_id" => 46,
                "state_id" => null,
                "name" => json_encode(["en" => "Rabat", "zh" => "拉巴特"]),
                "code" => "rsa"
            ],
            [
                "id" => 1420,
                "country_id" => 46,
                "state_id" => null,
                "name" => json_encode(["en" => "Marrakech", "zh" => "马拉喀什"]),
                "code" => "mrk"
            ],
            [
                "id" => 1421,
                "country_id" => 46,
                "state_id" => null,
                "name" => json_encode(["en" => "Meknes", "zh" => "梅克内斯"]),
                "code" => "mkn"
            ],
            [
                "id" => 1422,
                "country_id" => 46,
                "state_id" => null,
                "name" => json_encode(["en" => "Oujda", "zh" => "乌季达"]),
                "code" => "ouj"
            ],
            [
                "id" => 1423,
                "country_id" => 46,
                "state_id" => null,
                "name" => json_encode(["en" => "Western Sahara", "zh" => "西撒哈拉"]),
                "code" => "wsh"
            ],
            [
                "id" => 1424,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Aguascalientes", "zh" => "阿瓜斯卡连斯特"]),
                "code" => "agu"
            ],
            [
                "id" => 1425,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Acapulco", "zh" => "阿卡普尔科"]),
                "code" => "aca"
            ],
            [
                "id" => 1426,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Hermosillo", "zh" => "埃莫西约"]),
                "code" => "hmo"
            ],
            [
                "id" => 1427,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Campeche", "zh" => "埃佩切"]),
                "code" => "cam"
            ],
            [
                "id" => 1428,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Obregon", "zh" => "奥夫雷贡城"]),
                "code" => "obr"
            ],
            [
                "id" => 1429,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Orizaba", "zh" => "奥里萨巴"]),
                "code" => "ori"
            ],
            [
                "id" => 1430,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Valles", "zh" => "巴利城"]),
                "code" => "vhm"
            ],
            [
                "id" => 1431,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Puerto Vallarta", "zh" => "巴亚尔塔港"]),
                "code" => "pvr"
            ],
            [
                "id" => 1432,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Villahermosa", "zh" => "比利亚埃尔莫萨"]),
                "code" => "vsa"
            ],
            [
                "id" => 1433,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Poza Rica de Hidalgo", "zh" => "波萨里卡"]),
                "code" => "prh"
            ],
            [
                "id" => 1434,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Tijuana", "zh" => "蒂华纳"]),
                "code" => "tij"
            ],
            [
                "id" => 1435,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Durango", "zh" => "杜兰戈"]),
                "code" => "dur"
            ],
            [
                "id" => 1436,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Ensenada", "zh" => "恩塞纳达"]),
                "code" => "ese"
            ],
            [
                "id" => 1437,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Guadalajara", "zh" => "瓜达拉哈拉"]),
                "code" => "gdl"
            ],
            [
                "id" => 1438,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Guanajuato", "zh" => "瓜纳华托"]),
                "code" => "gua"
            ],
            [
                "id" => 1439,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Jalapa", "zh" => "哈拉帕"]),
                "code" => "jal"
            ],
            [
                "id" => 1440,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Juarez", "zh" => "华雷斯"]),
                "code" => "juz"
            ],
            [
                "id" => 1441,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Benito Juare", "zh" => "华雷斯港"]),
                "code" => "bju"
            ],
            [
                "id" => 1442,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Carmen", "zh" => "卡门"]),
                "code" => "car"
            ],
            [
                "id" => 1443,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Colima", "zh" => "科利马"]),
                "code" => "col"
            ],
            [
                "id" => 1444,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Queretaro", "zh" => "克雷塔罗"]),
                "code" => "que"
            ],
            [
                "id" => 1445,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Cuernavaca", "zh" => "库埃纳瓦卡"]),
                "code" => "cvc"
            ],
            [
                "id" => 1446,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Culiacan", "zh" => "库利阿坎"]),
                "code" => "cul"
            ],
            [
                "id" => 1447,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Coatzacoalcos", "zh" => "夸察夸拉克斯"]),
                "code" => "coa"
            ],
            [
                "id" => 1448,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "La Paz", "zh" => "拉巴斯"]),
                "code" => "lap"
            ],
            [
                "id" => 1449,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Leon", "zh" => "莱昂"]),
                "code" => "len"
            ],
            [
                "id" => 1450,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Reynosa", "zh" => "雷诺萨"]),
                "code" => "rex"
            ],
            [
                "id" => 1451,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Los Mochis", "zh" => "洛斯莫奇斯"]),
                "code" => "lmm"
            ],
            [
                "id" => 1452,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Mazatlan", "zh" => "马萨特兰"]),
                "code" => "mzt"
            ],
            [
                "id" => 1453,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Matamoros", "zh" => "马塔莫罗斯"]),
                "code" => "mam"
            ],
            [
                "id" => 1454,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Merida", "zh" => "梅里达"]),
                "code" => "mid"
            ],
            [
                "id" => 1455,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Monclova", "zh" => "蒙克洛瓦"]),
                "code" => "lov"
            ],
            [
                "id" => 1456,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Monterrey", "zh" => "蒙特雷"]),
                "code" => "mty"
            ],
            [
                "id" => 1457,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Morelia", "zh" => "莫雷利亚"]),
                "code" => "mlm"
            ],
            [
                "id" => 1458,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Mexico City", "zh" => "墨西哥城"]),
                "code" => "mex"
            ],
            [
                "id" => 1459,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Mexicali", "zh" => "墨西卡利"]),
                "code" => "mxl"
            ],
            [
                "id" => 1460,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Nogales", "zh" => "诺加莱斯"]),
                "code" => "nog"
            ],
            [
                "id" => 1461,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Pachuca", "zh" => "帕丘卡"]),
                "code" => "pac"
            ],
            [
                "id" => 1462,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Puebla", "zh" => "普埃布拉"]),
                "code" => "pue"
            ],
            [
                "id" => 1463,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Chilpancingo", "zh" => "奇尔潘辛戈"]),
                "code" => "chi"
            ],
            [
                "id" => 1464,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Chihuahua", "zh" => "奇瓦瓦"]),
                "code" => "chh"
            ],
            [
                "id" => 1465,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Cheturnal", "zh" => "切图马尔"]),
                "code" => "ctm"
            ],
            [
                "id" => 1466,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Saltillo", "zh" => "萨尔蒂约"]),
                "code" => "slw"
            ],
            [
                "id" => 1467,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Zacatecas", "zh" => "萨卡特卡斯"]),
                "code" => "zac"
            ],
            [
                "id" => 1468,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Celaya", "zh" => "塞拉亚"]),
                "code" => "cly"
            ],
            [
                "id" => 1469,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "San Luis Potosi", "zh" => "圣路易斯波托亚"]),
                "code" => "slp"
            ],
            [
                "id" => 1470,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Tapachula", "zh" => "塔帕丘拉"]),
                "code" => "tap"
            ],
            [
                "id" => 1471,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Tampico", "zh" => "坦皮科"]),
                "code" => "tam"
            ],
            [
                "id" => 1472,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Tlaxcala", "zh" => "特拉斯卡拉"]),
                "code" => "tla"
            ],
            [
                "id" => 1473,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Tepic", "zh" => "特皮克"]),
                "code" => "tpq"
            ],
            [
                "id" => 1474,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Tehuacan", "zh" => "特瓦坎"]),
                "code" => "tcn"
            ],
            [
                "id" => 1475,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Tuxtla Gutierrez", "zh" => "图斯特拉-古铁雷斯"]),
                "code" => "tgz"
            ],
            [
                "id" => 1476,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Torreon", "zh" => "托雷翁"]),
                "code" => "trc"
            ],
            [
                "id" => 1477,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Toluca", "zh" => "托卢卡"]),
                "code" => "tlc"
            ],
            [
                "id" => 1478,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Oaxaca", "zh" => "瓦哈卡"]),
                "code" => "oax"
            ],
            [
                "id" => 1479,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Victoria", "zh" => "维多利亚城"]),
                "code" => "vic"
            ],
            [
                "id" => 1480,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Veracruz", "zh" => "韦拉克鲁斯"]),
                "code" => "ver"
            ],
            [
                "id" => 1481,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Uruapan", "zh" => "乌鲁阿潘"]),
                "code" => "upn"
            ],
            [
                "id" => 1482,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Nuevo Laredo", "zh" => "新拉雷多"]),
                "code" => "nle"
            ],
            [
                "id" => 1483,
                "country_id" => 106,
                "state_id" => null,
                "name" => json_encode(["en" => "Irapuato", "zh" => "伊拉普阿托"]),
                "code" => "irp"
            ],
            [
                "id" => 1484,
                "country_id" => 43,
                "state_id" => null,
                "name" => json_encode(["en" => "Erongo", "zh" => "埃龙戈"]),
                "code" => "er"
            ],
            [
                "id" => 1485,
                "country_id" => 43,
                "state_id" => null,
                "name" => json_encode(["en" => "Ohangwena", "zh" => "奥汉圭纳"]),
                "code" => "ow"
            ],
            [
                "id" => 1486,
                "country_id" => 43,
                "state_id" => null,
                "name" => json_encode(["en" => "Okavango", "zh" => "奥卡万戈"]),
                "code" => "kv"
            ],
            [
                "id" => 1487,
                "country_id" => 43,
                "state_id" => null,
                "name" => json_encode(["en" => "Omaheke", "zh" => "奥马赫科"]),
                "code" => "ok"
            ],
            [
                "id" => 1488,
                "country_id" => 43,
                "state_id" => null,
                "name" => json_encode(["en" => "Omusati", "zh" => "奥姆沙蒂"]),
                "code" => "ot"
            ],
            [
                "id" => 1489,
                "country_id" => 43,
                "state_id" => null,
                "name" => json_encode(["en" => "Otjozondjupa", "zh" => "奥乔宗蒂约巴"]),
                "code" => "oj"
            ],
            [
                "id" => 1490,
                "country_id" => 43,
                "state_id" => null,
                "name" => json_encode(["en" => "Oshana", "zh" => "奥沙纳"]),
                "code" => "on"
            ],
            [
                "id" => 1491,
                "country_id" => 43,
                "state_id" => null,
                "name" => json_encode(["en" => "Oshikoto", "zh" => "奥希科托"]),
                "code" => "oo"
            ],
            [
                "id" => 1492,
                "country_id" => 43,
                "state_id" => null,
                "name" => json_encode(["en" => "Hardap", "zh" => "哈达普"]),
                "code" => "ha"
            ],
            [
                "id" => 1493,
                "country_id" => 43,
                "state_id" => null,
                "name" => json_encode(["en" => "Khomas", "zh" => "霍马斯"]),
                "code" => "kh"
            ],
            [
                "id" => 1494,
                "country_id" => 43,
                "state_id" => null,
                "name" => json_encode(["en" => "Karas", "zh" => "卡拉斯"]),
                "code" => "kr"
            ],
            [
                "id" => 1495,
                "country_id" => 43,
                "state_id" => null,
                "name" => json_encode(["en" => "Caprivi", "zh" => "卡普里维"]),
                "code" => "ca"
            ],
            [
                "id" => 1496,
                "country_id" => 43,
                "state_id" => null,
                "name" => json_encode(["en" => "Kunene", "zh" => "库内内"]),
                "code" => "ku"
            ],
            [
                "id" => 1497,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Upington", "zh" => "阿平顿"]),
                "code" => "utn"
            ],
            [
                "id" => 1498,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Mount Ayliff", "zh" => "艾利弗山"]),
                "code" => "may"
            ],
            [
                "id" => 1499,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Pietermaritzburg", "zh" => "彼德马里茨堡"]),
                "code" => "pzb"
            ],
            [
                "id" => 1500,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Pietersburg", "zh" => "彼德斯堡"]),
                "code" => "ptg"
            ],
            [
                "id" => 1501,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Pretoria", "zh" => "比勒陀利亚"]),
                "code" => "pry"
            ],
            [
                "id" => 1502,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Bisho", "zh" => "比索"]),
                "code" => "biy"
            ],
            [
                "id" => 1503,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Bredasdorp", "zh" => "布雷达斯多普"]),
                "code" => "bdd"
            ],
            [
                "id" => 1504,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Bloemfontein", "zh" => "布隆方丹"]),
                "code" => "bfn"
            ],
            [
                "id" => 1505,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Bronkhorstspruit", "zh" => "布隆克斯特斯普利特"]),
                "code" => "bht"
            ],
            [
                "id" => 1506,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "De Aar", "zh" => "德阿尔"]),
                "code" => "daa"
            ],
            [
                "id" => 1507,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Durban", "zh" => "德班"]),
                "code" => "dur"
            ],
            [
                "id" => 1508,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Dundee", "zh" => "邓迪"]),
                "code" => "dun"
            ],
            [
                "id" => 1509,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Barkley East", "zh" => "东巴克利"]),
                "code" => "bae"
            ],
            [
                "id" => 1510,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "East London", "zh" => "东伦敦"]),
                "code" => "els"
            ],
            [
                "id" => 1511,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Vryburg", "zh" => "弗雷堡"]),
                "code" => "vru"
            ],
            [
                "id" => 1512,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Vereeniging", "zh" => "弗里尼欣"]),
                "code" => "vgg"
            ],
            [
                "id" => 1513,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Groblersdal", "zh" => "格罗布莱斯达尔"]),
                "code" => "gbd"
            ],
            [
                "id" => 1514,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Giyani", "zh" => "基雅尼"]),
                "code" => "giy"
            ],
            [
                "id" => 1515,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Kimberley", "zh" => "金伯利"]),
                "code" => "kim"
            ],
            [
                "id" => 1516,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Cape Town", "zh" => "开普敦"]),
                "code" => "cpt"
            ],
            [
                "id" => 1517,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Klerksdorp", "zh" => "克莱克斯多普"]),
                "code" => "kxe"
            ],
            [
                "id" => 1518,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Kuruman", "zh" => "库鲁曼"]),
                "code" => "kmh"
            ],
            [
                "id" => 1519,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Queenstown", "zh" => "昆士敦"]),
                "code" => "utw"
            ],
            [
                "id" => 1520,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Ladysmith", "zh" => "莱迪史密斯"]),
                "code" => "lay"
            ],
            [
                "id" => 1521,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Randfontein", "zh" => "兰德方丹"]),
                "code" => "rft"
            ],
            [
                "id" => 1522,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Richards Bay", "zh" => "理查兹湾"]),
                "code" => "rcb"
            ],
            [
                "id" => 1523,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Rustenburg", "zh" => "利斯滕堡"]),
                "code" => "rsb"
            ],
            [
                "id" => 1524,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Middelburg", "zh" => "米德尔堡"]),
                "code" => "mdb"
            ],
            [
                "id" => 1525,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Mkuze", "zh" => "姆库泽"]),
                "code" => "mzq"
            ],
            [
                "id" => 1526,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Moorreesburg", "zh" => "穆里斯堡"]),
                "code" => "moo"
            ],
            [
                "id" => 1527,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Nelspruit", "zh" => "内尔斯普雷特"]),
                "code" => "nlp"
            ],
            [
                "id" => 1528,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Nylstroom", "zh" => "尼尔斯特隆"]),
                "code" => "nyl"
            ],
            [
                "id" => 1529,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Newcastle", "zh" => "纽卡斯尔"]),
                "code" => "ncs"
            ],
            [
                "id" => 1530,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "George", "zh" => "乔治"]),
                "code" => "grj"
            ],
            [
                "id" => 1531,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Sasolburg", "zh" => "萨索尔堡"]),
                "code" => "sas"
            ],
            [
                "id" => 1532,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Secunda", "zh" => "瑟孔达"]),
                "code" => "zec"
            ],
            [
                "id" => 1533,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Ixopo", "zh" => "特克索波"]),
                "code" => "ixo"
            ],
            [
                "id" => 1534,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Trompsburg", "zh" => "特隆普斯堡"]),
                "code" => "tpb"
            ],
            [
                "id" => 1535,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Springbok", "zh" => "跳羚"]),
                "code" => "sbu"
            ],
            [
                "id" => 1536,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Thulamahashe", "zh" => "图拉马哈谢"]),
                "code" => "tlh"
            ],
            [
                "id" => 1537,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Thohoyandou", "zh" => "托霍延杜"]),
                "code" => "thy"
            ],
            [
                "id" => 1538,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Witsieshoek", "zh" => "韦茨肖克"]),
                "code" => "wsh"
            ],
            [
                "id" => 1539,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Welkom", "zh" => "韦尔科姆"]),
                "code" => "wel"
            ],
            [
                "id" => 1540,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Ulundi", "zh" => "乌伦迪"]),
                "code" => "uld"
            ],
            [
                "id" => 1541,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Umtata", "zh" => "乌姆塔塔"]),
                "code" => "utt"
            ],
            [
                "id" => 1542,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Worcester", "zh" => "伍斯特"]),
                "code" => "wor"
            ],
            [
                "id" => 1543,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Beaufort West", "zh" => "西博福特"]),
                "code" => "bew"
            ],
            [
                "id" => 1544,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Port Shepstone", "zh" => "谢普斯通港"]),
                "code" => "pss"
            ],
            [
                "id" => 1545,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Port Elizabeth", "zh" => "伊丽莎白港"]),
                "code" => "plz"
            ],
            [
                "id" => 1546,
                "country_id" => 36,
                "state_id" => null,
                "name" => json_encode(["en" => "Johannesburg", "zh" => "约翰内斯堡"]),
                "code" => "jnb"
            ],
            [
                "id" => 1547,
                "country_id" => 97,
                "state_id" => null,
                "name" => json_encode(["en" => "Bagmati", "zh" => "巴格马蒂"]),
                "code" => "ba"
            ],
            [
                "id" => 1548,
                "country_id" => 97,
                "state_id" => null,
                "name" => json_encode(["en" => "Dhawalagiri", "zh" => "道拉吉里"]),
                "code" => "dh"
            ],
            [
                "id" => 1549,
                "country_id" => 97,
                "state_id" => null,
                "name" => json_encode(["en" => "Gandaki", "zh" => "甘达基"]),
                "code" => "ga"
            ],
            [
                "id" => 1550,
                "country_id" => 97,
                "state_id" => null,
                "name" => json_encode(["en" => "Kosi", "zh" => "戈西"]),
                "code" => "ko"
            ],
            [
                "id" => 1551,
                "country_id" => 97,
                "state_id" => null,
                "name" => json_encode(["en" => "Karnali", "zh" => "格尔纳利"]),
                "code" => "ka"
            ],
            [
                "id" => 1552,
                "country_id" => 97,
                "state_id" => null,
                "name" => json_encode(["en" => "Janakpur", "zh" => "贾纳克布尔"]),
                "code" => "ja"
            ],
            [
                "id" => 1553,
                "country_id" => 97,
                "state_id" => null,
                "name" => json_encode(["en" => "Rapti", "zh" => "拉布蒂"]),
                "code" => "ra"
            ],
            [
                "id" => 1554,
                "country_id" => 97,
                "state_id" => null,
                "name" => json_encode(["en" => "Lumbini", "zh" => "蓝毗尼"]),
                "code" => "lu"
            ],
            [
                "id" => 1555,
                "country_id" => 97,
                "state_id" => null,
                "name" => json_encode(["en" => "Mahakali", "zh" => "马哈卡利"]),
                "code" => "ma"
            ],
            [
                "id" => 1556,
                "country_id" => 97,
                "state_id" => null,
                "name" => json_encode(["en" => "Mechi", "zh" => "梅吉"]),
                "code" => "me"
            ],
            [
                "id" => 1557,
                "country_id" => 97,
                "state_id" => null,
                "name" => json_encode(["en" => "Narayani", "zh" => "纳拉亚尼"]),
                "code" => "na"
            ],
            [
                "id" => 1558,
                "country_id" => 97,
                "state_id" => null,
                "name" => json_encode(["en" => "Bheri", "zh" => "佩里"]),
                "code" => "bh"
            ],
            [
                "id" => 1559,
                "country_id" => 97,
                "state_id" => null,
                "name" => json_encode(["en" => "Sogarmatha", "zh" => "萨加玛塔"]),
                "code" => "sa"
            ],
            [
                "id" => 1560,
                "country_id" => 97,
                "state_id" => null,
                "name" => json_encode(["en" => "Seti", "zh" => "塞蒂"]),
                "code" => "se"
            ],
            [
                "id" => 1561,
                "country_id" => 107,
                "state_id" => null,
                "name" => json_encode(["en" => "Esteli", "zh" => "埃斯特利"]),
                "code" => "es"
            ],
            [
                "id" => 1562,
                "country_id" => 107,
                "state_id" => null,
                "name" => json_encode(["en" => "Atlantico Norte", "zh" => "北大西洋"]),
                "code" => "an"
            ],
            [
                "id" => 1563,
                "country_id" => 107,
                "state_id" => null,
                "name" => json_encode(["en" => "Boaco", "zh" => "博阿科"]),
                "code" => "bo"
            ],
            [
                "id" => 1564,
                "country_id" => 107,
                "state_id" => null,
                "name" => json_encode(["en" => "Granada", "zh" => "格拉纳达"]),
                "code" => "gr"
            ],
            [
                "id" => 1565,
                "country_id" => 107,
                "state_id" => null,
                "name" => json_encode(["en" => "Carazo", "zh" => "卡拉索"]),
                "code" => "ca"
            ],
            [
                "id" => 1566,
                "country_id" => 107,
                "state_id" => null,
                "name" => json_encode(["en" => "Leon", "zh" => "莱昂"]),
                "code" => "le"
            ],
            [
                "id" => 1567,
                "country_id" => 107,
                "state_id" => null,
                "name" => json_encode(["en" => "Rivas", "zh" => "里瓦斯"]),
                "code" => "rv"
            ],
            [
                "id" => 1568,
                "country_id" => 107,
                "state_id" => null,
                "name" => json_encode(["en" => "Madriz", "zh" => "马德里斯"]),
                "code" => "md"
            ],
            [
                "id" => 1569,
                "country_id" => 107,
                "state_id" => null,
                "name" => json_encode(["en" => "Managua", "zh" => "马那瓜"]),
                "code" => "mn"
            ],
            [
                "id" => 1570,
                "country_id" => 107,
                "state_id" => null,
                "name" => json_encode(["en" => "Masaya", "zh" => "马萨亚"]),
                "code" => "ms"
            ],
            [
                "id" => 1571,
                "country_id" => 107,
                "state_id" => null,
                "name" => json_encode(["en" => "Matagalpa", "zh" => "马塔加尔帕"]),
                "code" => "mt"
            ],
            [
                "id" => 1572,
                "country_id" => 107,
                "state_id" => null,
                "name" => json_encode(["en" => "Atlantico Sur", "zh" => "南大西洋"]),
                "code" => "as"
            ],
            [
                "id" => 1573,
                "country_id" => 107,
                "state_id" => null,
                "name" => json_encode(["en" => "Chinandega", "zh" => "奇南德加"]),
                "code" => "cd"
            ],
            [
                "id" => 1574,
                "country_id" => 107,
                "state_id" => null,
                "name" => json_encode(["en" => "Chontales", "zh" => "琼塔莱斯"]),
                "code" => "ct"
            ],
            [
                "id" => 1575,
                "country_id" => 107,
                "state_id" => null,
                "name" => json_encode(["en" => "Rio San Juan", "zh" => "圣胡安河"]),
                "code" => "sj"
            ],
            [
                "id" => 1576,
                "country_id" => 107,
                "state_id" => null,
                "name" => json_encode(["en" => "Jinotega", "zh" => "希诺特加"]),
                "code" => "ji"
            ],
            [
                "id" => 1577,
                "country_id" => 107,
                "state_id" => null,
                "name" => json_encode(["en" => "Nueva Segovia", "zh" => "新塞哥维亚"]),
                "code" => "ns"
            ],
            [
                "id" => 1578,
                "country_id" => 40,
                "state_id" => null,
                "name" => json_encode(["en" => "Agadez", "zh" => "阿加德兹"]),
                "code" => "ajy"
            ],
            [
                "id" => 1579,
                "country_id" => 40,
                "state_id" => null,
                "name" => json_encode(["en" => "Diffa", "zh" => "迪法"]),
                "code" => "dif"
            ],
            [
                "id" => 1580,
                "country_id" => 40,
                "state_id" => null,
                "name" => json_encode(["en" => "Tillaberi", "zh" => "蒂拉贝里"]),
                "code" => "til"
            ],
            [
                "id" => 1581,
                "country_id" => 40,
                "state_id" => null,
                "name" => json_encode(["en" => "Dosso", "zh" => "多索"]),
                "code" => "dss"
            ],
            [
                "id" => 1582,
                "country_id" => 40,
                "state_id" => null,
                "name" => json_encode(["en" => "Zinder", "zh" => "津德尔"]),
                "code" => "znd"
            ],
            [
                "id" => 1583,
                "country_id" => 40,
                "state_id" => null,
                "name" => json_encode(["en" => "Maradi", "zh" => "马拉迪"]),
                "code" => "mfq"
            ],
            [
                "id" => 1584,
                "country_id" => 40,
                "state_id" => null,
                "name" => json_encode(["en" => "Niamey C.U.", "zh" => "尼亚美市"]),
                "code" => "nim"
            ],
            [
                "id" => 1585,
                "country_id" => 40,
                "state_id" => null,
                "name" => json_encode(["en" => "Tahoua", "zh" => "塔瓦"]),
                "code" => "thz"
            ],
            [
                "id" => 1586,
                "country_id" => 48,
                "state_id" => null,
                "name" => json_encode(["en" => "Abuja", "zh" => "阿比亚"]),
                "code" => "abv"
            ],
            [
                "id" => 1587,
                "country_id" => 48,
                "state_id" => null,
                "name" => json_encode(["en" => "Ogbomosho", "zh" => "奥博莫绍"]),
                "code" => "ogb"
            ],
            [
                "id" => 1588,
                "country_id" => 48,
                "state_id" => null,
                "name" => json_encode(["en" => "Kano", "zh" => "卡诺"]),
                "code" => "kan"
            ],
            [
                "id" => 1589,
                "country_id" => 48,
                "state_id" => null,
                "name" => json_encode(["en" => "Lagos", "zh" => "拉各斯"]),
                "code" => "los"
            ],
            [
                "id" => 1590,
                "country_id" => 48,
                "state_id" => null,
                "name" => json_encode(["en" => "Ibadan", "zh" => "伊巴丹"]),
                "code" => "iba"
            ],
            [
                "id" => 1591,
                "country_id" => 125,
                "state_id" => null,
                "name" => json_encode(["en" => "Akershus", "zh" => "阿克什胡斯"]),
                "code" => "2"
            ],
            [
                "id" => 1592,
                "country_id" => 125,
                "state_id" => null,
                "name" => json_encode(["en" => "Oppland", "zh" => "奥普兰"]),
                "code" => "5"
            ],
            [
                "id" => 1593,
                "country_id" => 125,
                "state_id" => null,
                "name" => json_encode(["en" => "Oslo", "zh" => "奥斯陆市"]),
                "code" => "3"
            ],
            [
                "id" => 1594,
                "country_id" => 125,
                "state_id" => null,
                "name" => json_encode(["en" => "Nord-Trondelag", "zh" => "北特伦德拉格"]),
                "code" => "17"
            ],
            [
                "id" => 1595,
                "country_id" => 125,
                "state_id" => null,
                "name" => json_encode(["en" => "Buskerud", "zh" => "布斯克吕"]),
                "code" => "6"
            ],
            [
                "id" => 1596,
                "country_id" => 125,
                "state_id" => null,
                "name" => json_encode(["en" => "Aust-Agder", "zh" => "东阿格德尔"]),
                "code" => "9"
            ],
            [
                "id" => 1597,
                "country_id" => 125,
                "state_id" => null,
                "name" => json_encode(["en" => "Ostfold", "zh" => "东福尔"]),
                "code" => "1"
            ],
            [
                "id" => 1598,
                "country_id" => 125,
                "state_id" => null,
                "name" => json_encode(["en" => "Finnmark", "zh" => "芬马克"]),
                "code" => "20"
            ],
            [
                "id" => 1599,
                "country_id" => 125,
                "state_id" => null,
                "name" => json_encode(["en" => "Hedmark", "zh" => "海德马克"]),
                "code" => "4"
            ],
            [
                "id" => 1600,
                "country_id" => 125,
                "state_id" => null,
                "name" => json_encode(["en" => "Hordaland", "zh" => "霍达兰"]),
                "code" => "12"
            ],
            [
                "id" => 1601,
                "country_id" => 125,
                "state_id" => null,
                "name" => json_encode(["en" => "Rogaland", "zh" => "罗加兰"]),
                "code" => "11"
            ],
            [
                "id" => 1602,
                "country_id" => 125,
                "state_id" => null,
                "name" => json_encode(["en" => "More og Romsdal", "zh" => "默勒－鲁姆斯达尔"]),
                "code" => "15"
            ],
            [
                "id" => 1603,
                "country_id" => 125,
                "state_id" => null,
                "name" => json_encode(["en" => "Sor-Trondelag", "zh" => "南特伦德拉格"]),
                "code" => "16"
            ],
            [
                "id" => 1604,
                "country_id" => 125,
                "state_id" => null,
                "name" => json_encode(["en" => "Nordland", "zh" => "诺尔兰"]),
                "code" => "18"
            ],
            [
                "id" => 1605,
                "country_id" => 125,
                "state_id" => null,
                "name" => json_encode(["en" => "Sogn og Fjordane", "zh" => "松恩－菲尤拉讷"]),
                "code" => "14"
            ],
            [
                "id" => 1606,
                "country_id" => 125,
                "state_id" => null,
                "name" => json_encode(["en" => "Telemark", "zh" => "泰勒马克"]),
                "code" => "8"
            ],
            [
                "id" => 1607,
                "country_id" => 125,
                "state_id" => null,
                "name" => json_encode(["en" => "Troms", "zh" => "特罗姆斯"]),
                "code" => "19"
            ],
            [
                "id" => 1608,
                "country_id" => 125,
                "state_id" => null,
                "name" => json_encode(["en" => "Vest-Agder", "zh" => "西阿格德尔"]),
                "code" => "10"
            ],
            [
                "id" => 1609,
                "country_id" => 125,
                "state_id" => null,
                "name" => json_encode(["en" => "Vestfold", "zh" => "西福尔"]),
                "code" => "7"
            ],
            [
                "id" => 1610,
                "country_id" => 153,
                "state_id" => null,
                "name" => json_encode(["en" => "Alentejo Litoral", "zh" => "滨海阿连特茹"]),
                "code" => "all"
            ],
            [
                "id" => 1611,
                "country_id" => 153,
                "state_id" => null,
                "name" => json_encode(["en" => "Pinhal Litoral", "zh" => "滨海皮尼亚尔"]),
                "code" => "plt"
            ],
            [
                "id" => 1612,
                "country_id" => 153,
                "state_id" => null,
                "name" => json_encode(["en" => "Porto", "zh" => "波尔图"]),
                "code" => "vdp"
            ],
            [
                "id" => 1613,
                "country_id" => 153,
                "state_id" => null,
                "name" => json_encode(["en" => "Douro", "zh" => "杜罗"]),
                "code" => "mdr"
            ],
            [
                "id" => 1614,
                "country_id" => 153,
                "state_id" => null,
                "name" => json_encode(["en" => "Entre Douro e Vouga", "zh" => "恩特拉杜罗伏日"]),
                "code" => "edv"
            ],
            [
                "id" => 1615,
                "country_id" => 153,
                "state_id" => null,
                "name" => json_encode(["en" => "Faro", "zh" => "法鲁"]),
                "code" => "fao"
            ],
            [
                "id" => 1616,
                "country_id" => 153,
                "state_id" => null,
                "name" => json_encode(["en" => "Funchal", "zh" => "丰沙尔"]),
                "code" => "fun"
            ],
            [
                "id" => 1617,
                "country_id" => 153,
                "state_id" => null,
                "name" => json_encode(["en" => "Cavado", "zh" => "卡瓦多"]),
                "code" => "cav"
            ],
            [
                "id" => 1618,
                "country_id" => 153,
                "state_id" => null,
                "name" => json_encode(["en" => "Cova da Beira", "zh" => "科瓦贝拉"]),
                "code" => "clb"
            ],
            [
                "id" => 1619,
                "country_id" => 153,
                "state_id" => null,
                "name" => json_encode(["en" => "Lisboa", "zh" => "里斯本"]),
                "code" => "lis"
            ],
            [
                "id" => 1620,
                "country_id" => 153,
                "state_id" => null,
                "name" => json_encode(["en" => "Leziria do Tejo", "zh" => "利巴特茹"]),
                "code" => "lte"
            ],
            [
                "id" => 1621,
                "country_id" => 153,
                "state_id" => null,
                "name" => json_encode(["en" => "Medio Tejo", "zh" => "梅地奥特茹"]),
                "code" => "mte"
            ],
            [
                "id" => 1622,
                "country_id" => 153,
                "state_id" => null,
                "name" => json_encode(["en" => "Minho-Lima", "zh" => "米尼奥-利马"]),
                "code" => "mli"
            ],
            [
                "id" => 1623,
                "country_id" => 153,
                "state_id" => null,
                "name" => json_encode(["en" => "Beira Interior Norte", "zh" => "内贝拉北"]),
                "code" => "bin"
            ],
            [
                "id" => 1624,
                "country_id" => 153,
                "state_id" => null,
                "name" => json_encode(["en" => "Beira Interior Sul", "zh" => "内贝拉南"]),
                "code" => "bis"
            ],
            [
                "id" => 1625,
                "country_id" => 153,
                "state_id" => null,
                "name" => json_encode(["en" => "Pinhal Interior Norte", "zh" => "内皮尼亚尔北"]),
                "code" => "pin"
            ],
            [
                "id" => 1626,
                "country_id" => 153,
                "state_id" => null,
                "name" => json_encode(["en" => "Pinhal Interior Sul", "zh" => "内皮尼亚尔南"]),
                "code" => "pis"
            ],
            [
                "id" => 1627,
                "country_id" => 153,
                "state_id" => null,
                "name" => json_encode(["en" => "Ponta Delgada", "zh" => "蓬塔德尔加达"]),
                "code" => "pdl"
            ],
            [
                "id" => 1628,
                "country_id" => 153,
                "state_id" => null,
                "name" => json_encode(["en" => "Peninsula de Setubal", "zh" => "塞图巴尔半岛"]),
                "code" => "pse"
            ],
            [
                "id" => 1629,
                "country_id" => 153,
                "state_id" => null,
                "name" => json_encode(["en" => "Serra da Estrela", "zh" => "山后"]),
                "code" => "ses"
            ],
            [
                "id" => 1630,
                "country_id" => 153,
                "state_id" => null,
                "name" => json_encode(["en" => "Alto Alentejo", "zh" => "上阿连特茹"]),
                "code" => "aat"
            ],
            [
                "id" => 1631,
                "country_id" => 153,
                "state_id" => null,
                "name" => json_encode(["en" => "Alto Tros-os-Montes", "zh" => "上特拉斯山"]),
                "code" => "atm"
            ],
            [
                "id" => 1632,
                "country_id" => 153,
                "state_id" => null,
                "name" => json_encode(["en" => "Tamega", "zh" => "塔梅加"]),
                "code" => "tam"
            ],
            [
                "id" => 1633,
                "country_id" => 153,
                "state_id" => null,
                "name" => json_encode(["en" => "Ave", "zh" => "万福"]),
                "code" => "aes"
            ],
            [
                "id" => 1634,
                "country_id" => 153,
                "state_id" => null,
                "name" => json_encode(["en" => "Oeste", "zh" => "西部"]),
                "code" => "oes"
            ],
            [
                "id" => 1635,
                "country_id" => 153,
                "state_id" => null,
                "name" => json_encode(["en" => "Baixo Alentejo", "zh" => "下阿连特茹"]),
                "code" => "bal"
            ],
            [
                "id" => 1636,
                "country_id" => 153,
                "state_id" => null,
                "name" => json_encode(["en" => "Baixo Vouga", "zh" => "下伏日"]),
                "code" => "bvo"
            ],
            [
                "id" => 1637,
                "country_id" => 153,
                "state_id" => null,
                "name" => json_encode(["en" => "Baixo Mondego", "zh" => "下蒙德古"]),
                "code" => "bmo"
            ],
            [
                "id" => 1638,
                "country_id" => 153,
                "state_id" => null,
                "name" => json_encode(["en" => "Alentejo Central", "zh" => "中阿连特茹"]),
                "code" => "alc"
            ],
            [
                "id" => 1639,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Ehime", "zh" => "爱媛"]),
                "code" => "38"
            ],
            [
                "id" => 1640,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Aichi", "zh" => "爱知"]),
                "code" => "23"
            ],
            [
                "id" => 1641,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Hokkaido", "zh" => "北海道"]),
                "code" => "1"
            ],
            [
                "id" => 1642,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Hyogo", "zh" => "兵库"]),
                "code" => "28"
            ],
            [
                "id" => 1643,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Okinawa", "zh" => "冲绳"]),
                "code" => "47"
            ],
            [
                "id" => 1644,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Ibaraki", "zh" => "茨城"]),
                "code" => "8"
            ],
            [
                "id" => 1645,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Osaka", "zh" => "大阪"]),
                "code" => "27"
            ],
            [
                "id" => 1646,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Oita", "zh" => "大分"]),
                "code" => "44"
            ],
            [
                "id" => 1647,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Shimane", "zh" => "岛根"]),
                "code" => "32"
            ],
            [
                "id" => 1648,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Tokushima", "zh" => "徳岛"]),
                "code" => "36"
            ],
            [
                "id" => 1649,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Tokyo", "zh" => "东京"]),
                "code" => "13"
            ],
            [
                "id" => 1650,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Fukushima", "zh" => "福岛"]),
                "code" => "7"
            ],
            [
                "id" => 1651,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Fukuoka", "zh" => "福冈"]),
                "code" => "40"
            ],
            [
                "id" => 1652,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Fukui", "zh" => "福井"]),
                "code" => "18"
            ],
            [
                "id" => 1653,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Toyama", "zh" => "富山"]),
                "code" => "16"
            ],
            [
                "id" => 1654,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Okayama", "zh" => "冈山"]),
                "code" => "33"
            ],
            [
                "id" => 1655,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Kochi", "zh" => "高知"]),
                "code" => "39"
            ],
            [
                "id" => 1656,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Miyagi", "zh" => "宮城"]),
                "code" => "4"
            ],
            [
                "id" => 1657,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Miyazaki", "zh" => "宫崎"]),
                "code" => "45"
            ],
            [
                "id" => 1658,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Hiroshima", "zh" => "广岛"]),
                "code" => "34"
            ],
            [
                "id" => 1659,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Wakayama", "zh" => "和歌山"]),
                "code" => "30"
            ],
            [
                "id" => 1660,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Kyoto", "zh" => "京都"]),
                "code" => "26"
            ],
            [
                "id" => 1661,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Shizuoka", "zh" => "静冈"]),
                "code" => "22"
            ],
            [
                "id" => 1662,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Tochigi", "zh" => "枥木"]),
                "code" => "9"
            ],
            [
                "id" => 1663,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Kagoshima", "zh" => "鹿儿岛"]),
                "code" => "46"
            ],
            [
                "id" => 1664,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Nara", "zh" => "奈良"]),
                "code" => "29"
            ],
            [
                "id" => 1665,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Tottori", "zh" => "鸟取"]),
                "code" => "31"
            ],
            [
                "id" => 1666,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Gifu", "zh" => "岐阜"]),
                "code" => "21"
            ],
            [
                "id" => 1667,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Saitama", "zh" => "埼玉"]),
                "code" => "11"
            ],
            [
                "id" => 1668,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Chiba", "zh" => "千叶"]),
                "code" => "12"
            ],
            [
                "id" => 1669,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Aomori", "zh" => "青森"]),
                "code" => "2"
            ],
            [
                "id" => 1670,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Akita", "zh" => "秋田"]),
                "code" => "5"
            ],
            [
                "id" => 1671,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Gunma", "zh" => "群马"]),
                "code" => "10"
            ],
            [
                "id" => 1672,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Mie", "zh" => "三重"]),
                "code" => "24"
            ],
            [
                "id" => 1673,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Yamaguchi", "zh" => "山口"]),
                "code" => "35"
            ],
            [
                "id" => 1674,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Yamanashi", "zh" => "山梨"]),
                "code" => "19"
            ],
            [
                "id" => 1675,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Yamagata", "zh" => "山形"]),
                "code" => "6"
            ],
            [
                "id" => 1676,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Kanagawa", "zh" => "神奈川"]),
                "code" => "14"
            ],
            [
                "id" => 1677,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Ishikawa", "zh" => "石川"]),
                "code" => "17"
            ],
            [
                "id" => 1678,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Kagawa", "zh" => "香川"]),
                "code" => "37"
            ],
            [
                "id" => 1679,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Niigata", "zh" => "新潟"]),
                "code" => "15"
            ],
            [
                "id" => 1680,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Kumamoto", "zh" => "熊本"]),
                "code" => "43"
            ],
            [
                "id" => 1681,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Iwate", "zh" => "岩手"]),
                "code" => "3"
            ],
            [
                "id" => 1682,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Nagasaki", "zh" => "长崎"]),
                "code" => "42"
            ],
            [
                "id" => 1683,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Nagano", "zh" => "长野"]),
                "code" => "20"
            ],
            [
                "id" => 1684,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Shiga", "zh" => "滋贺"]),
                "code" => "25"
            ],
            [
                "id" => 1685,
                "country_id" => 62,
                "state_id" => null,
                "name" => json_encode(["en" => "Saga", "zh" => "佐贺"]),
                "code" => "41"
            ],
            [
                "id" => 1686,
                "country_id" => 128,
                "state_id" => null,
                "name" => json_encode(["en" => "Norrbottens", "zh" => "北博滕"]),
                "code" => "bd"
            ],
            [
                "id" => 1687,
                "country_id" => 128,
                "state_id" => null,
                "name" => json_encode(["en" => "Blekinge", "zh" => "布莱金厄"]),
                "code" => "k"
            ],
            [
                "id" => 1688,
                "country_id" => 128,
                "state_id" => null,
                "name" => json_encode(["en" => "Dalarnas", "zh" => "达拉纳"]),
                "code" => "dln"
            ],
            [
                "id" => 1689,
                "country_id" => 128,
                "state_id" => null,
                "name" => json_encode(["en" => "Ustergotland", "zh" => "东约特兰"]),
                "code" => "ugl"
            ],
            [
                "id" => 1690,
                "country_id" => 128,
                "state_id" => null,
                "name" => json_encode(["en" => "Orebro", "zh" => "厄勒布鲁"]),
                "code" => "t"
            ],
            [
                "id" => 1691,
                "country_id" => 128,
                "state_id" => null,
                "name" => json_encode(["en" => "Gotlands", "zh" => "哥得兰"]),
                "code" => "i"
            ],
            [
                "id" => 1692,
                "country_id" => 128,
                "state_id" => null,
                "name" => json_encode(["en" => "Hallands", "zh" => "哈兰"]),
                "code" => "n"
            ],
            [
                "id" => 1693,
                "country_id" => 128,
                "state_id" => null,
                "name" => json_encode(["en" => "Kalmar", "zh" => "卡尔马"]),
                "code" => "h"
            ],
            [
                "id" => 1694,
                "country_id" => 128,
                "state_id" => null,
                "name" => json_encode(["en" => "Kronobergs", "zh" => "克鲁努贝里"]),
                "code" => "g"
            ],
            [
                "id" => 1695,
                "country_id" => 128,
                "state_id" => null,
                "name" => json_encode(["en" => "Sodermanlands", "zh" => "南曼兰"]),
                "code" => "d"
            ],
            [
                "id" => 1696,
                "country_id" => 128,
                "state_id" => null,
                "name" => json_encode(["en" => "Stockholms", "zh" => "斯德哥尔摩"]),
                "code" => "ab"
            ],
            [
                "id" => 1697,
                "country_id" => 128,
                "state_id" => null,
                "name" => json_encode(["en" => "Skane", "zh" => "斯科耐"]),
                "code" => "m"
            ],
            [
                "id" => 1698,
                "country_id" => 128,
                "state_id" => null,
                "name" => json_encode(["en" => "Varmlands", "zh" => "韦姆兰"]),
                "code" => "s"
            ],
            [
                "id" => 1699,
                "country_id" => 128,
                "state_id" => null,
                "name" => json_encode(["en" => "Uppsala", "zh" => "乌普萨拉"]),
                "code" => "c"
            ],
            [
                "id" => 1700,
                "country_id" => 128,
                "state_id" => null,
                "name" => json_encode(["en" => "Vasterbottens", "zh" => "西博滕"]),
                "code" => "ac"
            ],
            [
                "id" => 1701,
                "country_id" => 128,
                "state_id" => null,
                "name" => json_encode(["en" => "Vastmanlands", "zh" => "西曼兰"]),
                "code" => "u"
            ],
            [
                "id" => 1702,
                "country_id" => 128,
                "state_id" => null,
                "name" => json_encode(["en" => "Vasternorrlands", "zh" => "西诺尔兰"]),
                "code" => "y"
            ],
            [
                "id" => 1703,
                "country_id" => 128,
                "state_id" => null,
                "name" => json_encode(["en" => "Vastra Gotalands", "zh" => "西约特兰"]),
                "code" => "o"
            ],
            [
                "id" => 1704,
                "country_id" => 128,
                "state_id" => null,
                "name" => json_encode(["en" => "Jonkopings", "zh" => "延雪平"]),
                "code" => "f"
            ],
            [
                "id" => 1705,
                "country_id" => 128,
                "state_id" => null,
                "name" => json_encode(["en" => "Gavleborgs", "zh" => "耶夫勒堡"]),
                "code" => "x"
            ],
            [
                "id" => 1706,
                "country_id" => 128,
                "state_id" => null,
                "name" => json_encode(["en" => "Jamtlands", "zh" => "耶姆特兰"]),
                "code" => "z"
            ],
            [
                "id" => 1707,
                "country_id" => 129,
                "state_id" => null,
                "name" => json_encode(["en" => "Aargau", "zh" => "阿尔高"]),
                "code" => "ag"
            ],
            [
                "id" => 1708,
                "country_id" => 129,
                "state_id" => null,
                "name" => json_encode(["en" => "Basel－Sstadt", "zh" => "巴塞尔城市"]),
                "code" => "bs"
            ],
            [
                "id" => 1709,
                "country_id" => 129,
                "state_id" => null,
                "name" => json_encode(["en" => "Basel Landschaft", "zh" => "巴塞尔乡村"]),
                "code" => "bl"
            ],
            [
                "id" => 1710,
                "country_id" => 129,
                "state_id" => null,
                "name" => json_encode(["en" => "Bern", "zh" => "伯尔尼"]),
                "code" => "be"
            ],
            [
                "id" => 1711,
                "country_id" => 129,
                "state_id" => null,
                "name" => json_encode(["en" => "Zug", "zh" => "楚格"]),
                "code" => "zg"
            ],
            [
                "id" => 1712,
                "country_id" => 129,
                "state_id" => null,
                "name" => json_encode(["en" => "Freiburg", "zh" => "弗里堡"]),
                "code" => "fr"
            ],
            [
                "id" => 1713,
                "country_id" => 129,
                "state_id" => null,
                "name" => json_encode(["en" => "Glarus", "zh" => "格拉鲁斯"]),
                "code" => "gl"
            ],
            [
                "id" => 1714,
                "country_id" => 129,
                "state_id" => null,
                "name" => json_encode(["en" => "Graubünden", "zh" => "格劳宾登"]),
                "code" => "gr"
            ],
            [
                "id" => 1715,
                "country_id" => 129,
                "state_id" => null,
                "name" => json_encode(["en" => "Luzern", "zh" => "卢塞恩"]),
                "code" => "lu"
            ],
            [
                "id" => 1716,
                "country_id" => 129,
                "state_id" => null,
                "name" => json_encode(["en" => "Lausanne", "zh" => "洛桑"]),
                "code" => "la"
            ],
            [
                "id" => 1717,
                "country_id" => 129,
                "state_id" => null,
                "name" => json_encode(["en" => "Neuchatel", "zh" => "纳沙泰尔"]),
                "code" => "ne"
            ],
            [
                "id" => 1718,
                "country_id" => 129,
                "state_id" => null,
                "name" => json_encode(["en" => "Appenzell Innerrhodn", "zh" => "内阿彭策尔"]),
                "code" => "ai"
            ],
            [
                "id" => 1719,
                "country_id" => 129,
                "state_id" => null,
                "name" => json_encode(["en" => "Geneve", "zh" => "日内瓦"]),
                "code" => "ge"
            ],
            [
                "id" => 1720,
                "country_id" => 129,
                "state_id" => null,
                "name" => json_encode(["en" => "Jura", "zh" => "汝拉"]),
                "code" => "ju"
            ],
            [
                "id" => 1721,
                "country_id" => 129,
                "state_id" => null,
                "name" => json_encode(["en" => "Schaffhausen", "zh" => "沙夫豪森"]),
                "code" => "sh"
            ],
            [
                "id" => 1722,
                "country_id" => 129,
                "state_id" => null,
                "name" => json_encode(["en" => "Obwalden", "zh" => "上瓦尔登"]),
                "code" => "ow"
            ],
            [
                "id" => 1723,
                "country_id" => 129,
                "state_id" => null,
                "name" => json_encode(["en" => "St.Gallen", "zh" => "圣加仑"]),
                "code" => "sg"
            ],
            [
                "id" => 1724,
                "country_id" => 129,
                "state_id" => null,
                "name" => json_encode(["en" => "Schwyz", "zh" => "施维茨"]),
                "code" => "sz"
            ],
            [
                "id" => 1725,
                "country_id" => 129,
                "state_id" => null,
                "name" => json_encode(["en" => "Zurich", "zh" => "苏黎世"]),
                "code" => "zh"
            ],
            [
                "id" => 1726,
                "country_id" => 129,
                "state_id" => null,
                "name" => json_encode(["en" => "Solothurn", "zh" => "索洛图恩"]),
                "code" => "so"
            ],
            [
                "id" => 1727,
                "country_id" => 129,
                "state_id" => null,
                "name" => json_encode(["en" => "Ticino", "zh" => "提契诺"]),
                "code" => "ti"
            ],
            [
                "id" => 1728,
                "country_id" => 129,
                "state_id" => null,
                "name" => json_encode(["en" => "Thurgau", "zh" => "图尔高"]),
                "code" => "tg"
            ],
            [
                "id" => 1729,
                "country_id" => 129,
                "state_id" => null,
                "name" => json_encode(["en" => "Wallis", "zh" => "瓦莱"]),
                "code" => "vs"
            ],
            [
                "id" => 1730,
                "country_id" => 129,
                "state_id" => null,
                "name" => json_encode(["en" => "Appenzell Ausserrhon", "zh" => "外阿彭策尔"]),
                "code" => "ar"
            ],
            [
                "id" => 1731,
                "country_id" => 129,
                "state_id" => null,
                "name" => json_encode(["en" => "Vaud", "zh" => "沃"]),
                "code" => "vd"
            ],
            [
                "id" => 1732,
                "country_id" => 129,
                "state_id" => null,
                "name" => json_encode(["en" => "Uri", "zh" => "乌里"]),
                "code" => "ur"
            ],
            [
                "id" => 1733,
                "country_id" => 129,
                "state_id" => null,
                "name" => json_encode(["en" => "Nidwalden", "zh" => "下瓦尔登"]),
                "code" => "nw"
            ],
            [
                "id" => 1734,
                "country_id" => 110,
                "state_id" => null,
                "name" => json_encode(["en" => "Apopa", "zh" => "阿波帕"]),
                "code" => "apo"
            ],
            [
                "id" => 1735,
                "country_id" => 110,
                "state_id" => null,
                "name" => json_encode(["en" => "Ahuachapan", "zh" => "阿瓦查潘"]),
                "code" => "ah"
            ],
            [
                "id" => 1736,
                "country_id" => 110,
                "state_id" => null,
                "name" => json_encode(["en" => "Litoral", "zh" => "滨海"]),
                "code" => "li"
            ],
            [
                "id" => 1737,
                "country_id" => 110,
                "state_id" => null,
                "name" => json_encode(["en" => "Chalatenango", "zh" => "查拉特南戈"]),
                "code" => "ch"
            ],
            [
                "id" => 1738,
                "country_id" => 110,
                "state_id" => null,
                "name" => json_encode(["en" => "Delgado", "zh" => "德尔加多"]),
                "code" => "de"
            ],
            [
                "id" => 1739,
                "country_id" => 110,
                "state_id" => null,
                "name" => json_encode(["en" => "Kie-Ntem", "zh" => "基埃-恩特姆"]),
                "code" => "kn"
            ],
            [
                "id" => 1740,
                "country_id" => 110,
                "state_id" => null,
                "name" => json_encode(["en" => "Cabanas", "zh" => "卡瓦尼亚斯"]),
                "code" => "ca"
            ],
            [
                "id" => 1741,
                "country_id" => 110,
                "state_id" => null,
                "name" => json_encode(["en" => "Cuscatlan", "zh" => "库斯卡特兰"]),
                "code" => "cu"
            ],
            [
                "id" => 1742,
                "country_id" => 110,
                "state_id" => null,
                "name" => json_encode(["en" => "La Paz", "zh" => "拉巴斯"]),
                "code" => "pz"
            ],
            [
                "id" => 1743,
                "country_id" => 110,
                "state_id" => null,
                "name" => json_encode(["en" => "La Libertad", "zh" => "拉利伯塔德"]),
                "code" => "lb"
            ],
            [
                "id" => 1744,
                "country_id" => 110,
                "state_id" => null,
                "name" => json_encode(["en" => "La Union", "zh" => "拉乌尼翁"]),
                "code" => "un"
            ],
            [
                "id" => 1745,
                "country_id" => 110,
                "state_id" => null,
                "name" => json_encode(["en" => "Mejicanos", "zh" => "梅基卡诺斯"]),
                "code" => "mej"
            ],
            [
                "id" => 1746,
                "country_id" => 110,
                "state_id" => null,
                "name" => json_encode(["en" => "Morazan", "zh" => "莫拉桑"]),
                "code" => "mo"
            ],
            [
                "id" => 1747,
                "country_id" => 110,
                "state_id" => null,
                "name" => json_encode(["en" => "Santa Ana", "zh" => "圣安娜"]),
                "code" => "sa"
            ],
            [
                "id" => 1748,
                "country_id" => 110,
                "state_id" => null,
                "name" => json_encode(["en" => "San Miguel", "zh" => "圣米格尔"]),
                "code" => "sm"
            ],
            [
                "id" => 1749,
                "country_id" => 110,
                "state_id" => null,
                "name" => json_encode(["en" => "San Salvador", "zh" => "圣萨尔瓦多"]),
                "code" => "ss"
            ],
            [
                "id" => 1750,
                "country_id" => 110,
                "state_id" => null,
                "name" => json_encode(["en" => "San Vicente", "zh" => "圣维森特"]),
                "code" => "sv"
            ],
            [
                "id" => 1751,
                "country_id" => 110,
                "state_id" => null,
                "name" => json_encode(["en" => "Sonsonate", "zh" => "松索纳特"]),
                "code" => "so"
            ],
            [
                "id" => 1752,
                "country_id" => 110,
                "state_id" => null,
                "name" => json_encode(["en" => "Soyapango", "zh" => "索亚潘戈"]),
                "code" => "soy"
            ],
            [
                "id" => 1753,
                "country_id" => 110,
                "state_id" => null,
                "name" => json_encode(["en" => "Wele-Nzas", "zh" => "韦莱-恩萨斯"]),
                "code" => "wn"
            ],
            [
                "id" => 1754,
                "country_id" => 110,
                "state_id" => null,
                "name" => json_encode(["en" => "Usulutan", "zh" => "乌苏卢坦"]),
                "code" => "us"
            ],
            [
                "id" => 1755,
                "country_id" => 110,
                "state_id" => null,
                "name" => json_encode(["en" => "Ilopango", "zh" => "伊洛潘戈"]),
                "code" => "il"
            ],
            [
                "id" => 1756,
                "country_id" => 110,
                "state_id" => null,
                "name" => json_encode(["en" => "Centro Sur", "zh" => "中南"]),
                "code" => "cs"
            ],
            [
                "id" => 1757,
                "country_id" => 213,
                "state_id" => null,
                "name" => json_encode(["en" => "Beograd", "zh" => "贝尔格莱德"]),
                "code" => "beg"
            ],
            [
                "id" => 1758,
                "country_id" => 213,
                "state_id" => null,
                "name" => json_encode(["en" => "Podgorica", "zh" => "波德戈里察"]),
                "code" => "pod"
            ],
            [
                "id" => 1759,
                "country_id" => 213,
                "state_id" => null,
                "name" => json_encode(["en" => "Kragujevac", "zh" => "克拉古涅瓦茨"]),
                "code" => "kgv"
            ],
            [
                "id" => 1760,
                "country_id" => 213,
                "state_id" => null,
                "name" => json_encode(["en" => "Nis", "zh" => "尼什"]),
                "code" => "ini"
            ],
            [
                "id" => 1761,
                "country_id" => 213,
                "state_id" => null,
                "name" => json_encode(["en" => "Novi Sad", "zh" => "诺维萨德"]),
                "code" => "nvs"
            ],
            [
                "id" => 1762,
                "country_id" => 213,
                "state_id" => null,
                "name" => json_encode(["en" => "Pristina", "zh" => "普里什蒂纳"]),
                "code" => "prn"
            ],
            [
                "id" => 1763,
                "country_id" => 213,
                "state_id" => null,
                "name" => json_encode(["en" => "Subotica", "zh" => "苏博蒂察"]),
                "code" => "sub"
            ],
            [
                "id" => 1764,
                "country_id" => 213,
                "state_id" => null,
                "name" => json_encode(["en" => "Zemun", "zh" => "泽蒙"]),
                "code" => "zem"
            ],
            [
                "id" => 1765,
                "country_id" => 16,
                "state_id" => null,
                "name" => json_encode(["en" => "Northern", "zh" => "北部"]),
                "code" => "n"
            ],
            [
                "id" => 1766,
                "country_id" => 16,
                "state_id" => null,
                "name" => json_encode(["en" => "Eastern", "zh" => "东部"]),
                "code" => "e"
            ],
            [
                "id" => 1767,
                "country_id" => 16,
                "state_id" => null,
                "name" => json_encode(["en" => "Southern", "zh" => "南部"]),
                "code" => "s"
            ],
            [
                "id" => 1768,
                "country_id" => 16,
                "state_id" => null,
                "name" => json_encode(["en" => "Western", "zh" => "西部区"]),
                "code" => "w"
            ],
            [
                "id" => 1769,
                "country_id" => 29,
                "state_id" => null,
                "name" => json_encode(["en" => "Dakar", "zh" => "达喀尔"]),
                "code" => "da"
            ],
            [
                "id" => 1770,
                "country_id" => 29,
                "state_id" => null,
                "name" => json_encode(["en" => "Fatick", "zh" => "法蒂克"]),
                "code" => "fa"
            ],
            [
                "id" => 1771,
                "country_id" => 29,
                "state_id" => null,
                "name" => json_encode(["en" => "Ziguinchor", "zh" => "济金绍尔"]),
                "code" => "zi"
            ],
            [
                "id" => 1772,
                "country_id" => 29,
                "state_id" => null,
                "name" => json_encode(["en" => "Thies", "zh" => "捷斯"]),
                "code" => "th"
            ],
            [
                "id" => 1773,
                "country_id" => 29,
                "state_id" => null,
                "name" => json_encode(["en" => "Diourbel", "zh" => "久尔贝勒"]),
                "code" => "di"
            ],
            [
                "id" => 1774,
                "country_id" => 29,
                "state_id" => null,
                "name" => json_encode(["en" => "Kaolack", "zh" => "考拉克"]),
                "code" => "ka"
            ],
            [
                "id" => 1775,
                "country_id" => 29,
                "state_id" => null,
                "name" => json_encode(["en" => "Kolda", "zh" => "科尔达"]),
                "code" => "ko"
            ],
            [
                "id" => 1776,
                "country_id" => 29,
                "state_id" => null,
                "name" => json_encode(["en" => "Louga", "zh" => "卢加"]),
                "code" => "lo"
            ],
            [
                "id" => 1777,
                "country_id" => 29,
                "state_id" => null,
                "name" => json_encode(["en" => "Matam", "zh" => "马塔姆"]),
                "code" => "ma"
            ],
            [
                "id" => 1778,
                "country_id" => 29,
                "state_id" => null,
                "name" => json_encode(["en" => "Saint-Louis", "zh" => "圣路易"]),
                "code" => "sl"
            ],
            [
                "id" => 1779,
                "country_id" => 29,
                "state_id" => null,
                "name" => json_encode(["en" => "Tambacounda", "zh" => "坦巴昆达"]),
                "code" => "ta"
            ],
            [
                "id" => 1780,
                "country_id" => 146,
                "state_id" => null,
                "name" => json_encode(["en" => "Famagusta", "zh" => "法马古斯塔"]),
                "code" => "4"
            ],
            [
                "id" => 1781,
                "country_id" => 146,
                "state_id" => null,
                "name" => json_encode(["en" => "Kyrenia", "zh" => "凯里尼亚"]),
                "code" => "6"
            ],
            [
                "id" => 1782,
                "country_id" => 146,
                "state_id" => null,
                "name" => json_encode(["en" => "Larnaca", "zh" => "拉纳卡"]),
                "code" => "3"
            ],
            [
                "id" => 1783,
                "country_id" => 146,
                "state_id" => null,
                "name" => json_encode(["en" => "Limassol", "zh" => "利马索尔"]),
                "code" => "2"
            ],
            [
                "id" => 1784,
                "country_id" => 146,
                "state_id" => null,
                "name" => json_encode(["en" => "Nicosia", "zh" => "尼科西亚"]),
                "code" => "1"
            ],
            [
                "id" => 1785,
                "country_id" => 146,
                "state_id" => null,
                "name" => json_encode(["en" => "Pafos", "zh" => "帕福斯"]),
                "code" => "5"
            ],
            [
                "id" => 1786,
                "country_id" => 94,
                "state_id" => null,
                "name" => json_encode(["en" => "Arar", "zh" => "阿尔阿尔"]),
                "code" => "ara"
            ],
            [
                "id" => 1787,
                "country_id" => 94,
                "state_id" => null,
                "name" => json_encode(["en" => "Abha", "zh" => "艾卜哈"]),
                "code" => "ahb"
            ],
            [
                "id" => 1788,
                "country_id" => 94,
                "state_id" => null,
                "name" => json_encode(["en" => "Al Bahah", "zh" => "巴哈"]),
                "code" => "bh"
            ],
            [
                "id" => 1789,
                "country_id" => 94,
                "state_id" => null,
                "name" => json_encode(["en" => "Buraydah", "zh" => "布赖代"]),
                "code" => "bur"
            ],
            [
                "id" => 1790,
                "country_id" => 94,
                "state_id" => null,
                "name" => json_encode(["en" => "Dammam", "zh" => "达曼"]),
                "code" => "dam"
            ],
            [
                "id" => 1791,
                "country_id" => 94,
                "state_id" => null,
                "name" => json_encode(["en" => "Hafar al-Batin", "zh" => "哈费尔巴廷"]),
                "code" => "hbt"
            ],
            [
                "id" => 1792,
                "country_id" => 94,
                "state_id" => null,
                "name" => json_encode(["en" => "Hail", "zh" => "哈伊勒"]),
                "code" => "hl"
            ],
            [
                "id" => 1793,
                "country_id" => 94,
                "state_id" => null,
                "name" => json_encode(["en" => "Khamis Mushayt", "zh" => "海米斯穆谢特"]),
                "code" => "kmx"
            ],
            [
                "id" => 1794,
                "country_id" => 94,
                "state_id" => null,
                "name" => json_encode(["en" => "Al-Kharj", "zh" => "海耶"]),
                "code" => "akh"
            ],
            [
                "id" => 1795,
                "country_id" => 94,
                "state_id" => null,
                "name" => json_encode(["en" => "Al-Hufuf", "zh" => "胡富夫"]),
                "code" => "hff"
            ],
            [
                "id" => 1796,
                "country_id" => 94,
                "state_id" => null,
                "name" => json_encode(["en" => "Jiddah", "zh" => "吉达"]),
                "code" => "jed"
            ],
            [
                "id" => 1797,
                "country_id" => 94,
                "state_id" => null,
                "name" => json_encode(["en" => "Jizan", "zh" => "吉赞"]),
                "code" => "jz"
            ],
            [
                "id" => 1798,
                "country_id" => 94,
                "state_id" => null,
                "name" => json_encode(["en" => "Riyad", "zh" => "利雅得"]),
                "code" => "rd"
            ],
            [
                "id" => 1799,
                "country_id" => 94,
                "state_id" => null,
                "name" => json_encode(["en" => "Medina", "zh" => "麦地那"]),
                "code" => "med"
            ],
            [
                "id" => 1800,
                "country_id" => 94,
                "state_id" => null,
                "name" => json_encode(["en" => "Makkah", "zh" => "麦加"]),
                "code" => "ml"
            ],
            [
                "id" => 1801,
                "country_id" => 94,
                "state_id" => null,
                "name" => json_encode(["en" => "Al-Mubarraz", "zh" => "姆巴拉兹"]),
                "code" => "mbr"
            ],
            [
                "id" => 1802,
                "country_id" => 94,
                "state_id" => null,
                "name" => json_encode(["en" => "Najran", "zh" => "纳季兰"]),
                "code" => "nr"
            ],
            [
                "id" => 1803,
                "country_id" => 94,
                "state_id" => null,
                "name" => json_encode(["en" => "Sakaka", "zh" => "塞卡卡"]),
                "code" => "sak"
            ],
            [
                "id" => 1804,
                "country_id" => 94,
                "state_id" => null,
                "name" => json_encode(["en" => "Tabuk", "zh" => "塔布克"]),
                "code" => "tb"
            ],
            [
                "id" => 1805,
                "country_id" => 94,
                "state_id" => null,
                "name" => json_encode(["en" => "At Tarif", "zh" => "塔伊夫"]),
                "code" => "tar"
            ],
            [
                "id" => 1806,
                "country_id" => 94,
                "state_id" => null,
                "name" => json_encode(["en" => "Yanbu al-Bahr", "zh" => "延布"]),
                "code" => "ynb"
            ],
            [
                "id" => 1807,
                "country_id" => 94,
                "state_id" => null,
                "name" => json_encode(["en" => "Al-Jubayl", "zh" => "朱拜勒"]),
                "code" => "jbi"
            ],
            [
                "id" => 1808,
                "country_id" => 67,
                "state_id" => null,
                "name" => json_encode(["en" => "Anuradhapura", "zh" => "阿努拉德普勒"]),
                "code" => "adp"
            ],
            [
                "id" => 1809,
                "country_id" => 67,
                "state_id" => null,
                "name" => json_encode(["en" => "Ampara", "zh" => "安帕赖"]),
                "code" => "amp"
            ],
            [
                "id" => 1810,
                "country_id" => 67,
                "state_id" => null,
                "name" => json_encode(["en" => "Badulla", "zh" => "巴杜勒"]),
                "code" => "bad"
            ],
            [
                "id" => 1811,
                "country_id" => 67,
                "state_id" => null,
                "name" => json_encode(["en" => "Batticaloa", "zh" => "拜蒂克洛"]),
                "code" => "btc"
            ],
            [
                "id" => 1812,
                "country_id" => 67,
                "state_id" => null,
                "name" => json_encode(["en" => "Polonnaruwa", "zh" => "波隆纳鲁沃"]),
                "code" => "pol"
            ],
            [
                "id" => 1813,
                "country_id" => 67,
                "state_id" => null,
                "name" => json_encode(["en" => "Hambantota", "zh" => "汉班托特"]),
                "code" => "hba"
            ],
            [
                "id" => 1814,
                "country_id" => 67,
                "state_id" => null,
                "name" => json_encode(["en" => "Kilinochchi", "zh" => "基里诺奇"]),
                "code" => "kil"
            ],
            [
                "id" => 1815,
                "country_id" => 67,
                "state_id" => null,
                "name" => json_encode(["en" => "Galle", "zh" => "加勒"]),
                "code" => "gal"
            ],
            [
                "id" => 1816,
                "country_id" => 67,
                "state_id" => null,
                "name" => json_encode(["en" => "Gampaha", "zh" => "加姆珀哈"]),
                "code" => "gam"
            ],
            [
                "id" => 1817,
                "country_id" => 67,
                "state_id" => null,
                "name" => json_encode(["en" => "Jaffna", "zh" => "贾夫纳"]),
                "code" => "jaf"
            ],
            [
                "id" => 1818,
                "country_id" => 67,
                "state_id" => null,
                "name" => json_encode(["en" => "Kalutara", "zh" => "卡卢特勒"]),
                "code" => "klt"
            ],
            [
                "id" => 1819,
                "country_id" => 67,
                "state_id" => null,
                "name" => json_encode(["en" => "Kegalle", "zh" => "凯格勒"]),
                "code" => "keg"
            ],
            [
                "id" => 1820,
                "country_id" => 67,
                "state_id" => null,
                "name" => json_encode(["en" => "Kandy", "zh" => "康提"]),
                "code" => "kan"
            ],
            [
                "id" => 1821,
                "country_id" => 67,
                "state_id" => null,
                "name" => json_encode(["en" => "Colombo", "zh" => "科伦坡"]),
                "code" => "cmb"
            ],
            [
                "id" => 1822,
                "country_id" => 67,
                "state_id" => null,
                "name" => json_encode(["en" => "Kurunegala", "zh" => "库鲁内格勒"]),
                "code" => "kur"
            ],
            [
                "id" => 1823,
                "country_id" => 67,
                "state_id" => null,
                "name" => json_encode(["en" => "Ratnapura", "zh" => "拉特纳普勒"]),
                "code" => "rat"
            ],
            [
                "id" => 1824,
                "country_id" => 67,
                "state_id" => null,
                "name" => json_encode(["en" => "Mannar", "zh" => "马纳尔"]),
                "code" => "man"
            ],
            [
                "id" => 1825,
                "country_id" => 67,
                "state_id" => null,
                "name" => json_encode(["en" => "Matale", "zh" => "马特莱"]),
                "code" => "mat"
            ],
            [
                "id" => 1826,
                "country_id" => 67,
                "state_id" => null,
                "name" => json_encode(["en" => "Matara", "zh" => "马特勒"]),
                "code" => "maa"
            ],
            [
                "id" => 1827,
                "country_id" => 67,
                "state_id" => null,
                "name" => json_encode(["en" => "Monaragala", "zh" => "莫讷勒格勒"]),
                "code" => "mon"
            ],
            [
                "id" => 1828,
                "country_id" => 67,
                "state_id" => null,
                "name" => json_encode(["en" => "Mullathivu", "zh" => "穆莱蒂武"]),
                "code" => "mul"
            ],
            [
                "id" => 1829,
                "country_id" => 67,
                "state_id" => null,
                "name" => json_encode(["en" => "Nuwara Eliya", "zh" => "努沃勒埃利耶"]),
                "code" => "nue"
            ],
            [
                "id" => 1830,
                "country_id" => 67,
                "state_id" => null,
                "name" => json_encode(["en" => "Puttalam", "zh" => "普塔勒姆"]),
                "code" => "put"
            ],
            [
                "id" => 1831,
                "country_id" => 67,
                "state_id" => null,
                "name" => json_encode(["en" => "Trincomalee", "zh" => "亭可马里"]),
                "code" => "trr"
            ],
            [
                "id" => 1832,
                "country_id" => 67,
                "state_id" => null,
                "name" => json_encode(["en" => "Vavuniya", "zh" => "瓦武尼亚"]),
                "code" => "vav"
            ],
            [
                "id" => 1833,
                "country_id" => 137,
                "state_id" => null,
                "name" => json_encode(["en" => "Banskobystricky", "zh" => "班斯卡-比斯特里察"]),
                "code" => "bby"
            ],
            [
                "id" => 1834,
                "country_id" => 137,
                "state_id" => null,
                "name" => json_encode(["en" => "Bratislavsky", "zh" => "布拉迪斯拉发"]),
                "code" => "bts"
            ],
            [
                "id" => 1835,
                "country_id" => 137,
                "state_id" => null,
                "name" => json_encode(["en" => "Koricky", "zh" => "科希策"]),
                "code" => "kor"
            ],
            [
                "id" => 1836,
                "country_id" => 137,
                "state_id" => null,
                "name" => json_encode(["en" => "Nitriansky", "zh" => "尼特拉"]),
                "code" => "nra"
            ],
            [
                "id" => 1837,
                "country_id" => 137,
                "state_id" => null,
                "name" => json_encode(["en" => "Prerovsky", "zh" => "普雷绍夫"]),
                "code" => "pov"
            ],
            [
                "id" => 1838,
                "country_id" => 137,
                "state_id" => null,
                "name" => json_encode(["en" => "Rilinsky", "zh" => "日利纳"]),
                "code" => "ril"
            ],
            [
                "id" => 1839,
                "country_id" => 137,
                "state_id" => null,
                "name" => json_encode(["en" => "Trnavsky", "zh" => "特尔纳瓦"]),
                "code" => "tna"
            ],
            [
                "id" => 1840,
                "country_id" => 137,
                "state_id" => null,
                "name" => json_encode(["en" => "Trenriansky", "zh" => "特伦钦"]),
                "code" => "tre"
            ],
            [
                "id" => 1841,
                "country_id" => 135,
                "state_id" => null,
                "name" => json_encode(["en" => "Obalno-kraska", "zh" => "奥巴尔诺-克拉"]),
                "code" => "okr"
            ],
            [
                "id" => 1842,
                "country_id" => 135,
                "state_id" => null,
                "name" => json_encode(["en" => "Osrednjeslovenska", "zh" => "奥斯雷德涅斯洛文"]),
                "code" => "osr"
            ],
            [
                "id" => 1843,
                "country_id" => 135,
                "state_id" => null,
                "name" => json_encode(["en" => "Podravska", "zh" => "波德拉夫"]),
                "code" => "pod"
            ],
            [
                "id" => 1844,
                "country_id" => 135,
                "state_id" => null,
                "name" => json_encode(["en" => "Pomurska", "zh" => "波穆尔"]),
                "code" => "pom"
            ],
            [
                "id" => 1845,
                "country_id" => 135,
                "state_id" => null,
                "name" => json_encode(["en" => "Dolenjska", "zh" => "多雷尼"]),
                "code" => "dlj"
            ],
            [
                "id" => 1846,
                "country_id" => 135,
                "state_id" => null,
                "name" => json_encode(["en" => "Gorenjska", "zh" => "戈雷尼"]),
                "code" => "gsz"
            ],
            [
                "id" => 1847,
                "country_id" => 135,
                "state_id" => null,
                "name" => json_encode(["en" => "Goriska", "zh" => "戈里"]),
                "code" => "gsk"
            ],
            [
                "id" => 1848,
                "country_id" => 135,
                "state_id" => null,
                "name" => json_encode(["en" => "Koroska", "zh" => "科洛"]),
                "code" => "kor"
            ],
            [
                "id" => 1849,
                "country_id" => 135,
                "state_id" => null,
                "name" => json_encode(["en" => "Notranjsko-kraska", "zh" => "诺特拉尼"]),
                "code" => "nkr"
            ],
            [
                "id" => 1850,
                "country_id" => 135,
                "state_id" => null,
                "name" => json_encode(["en" => "Savinjska", "zh" => "萨维尼"]),
                "code" => "sav"
            ],
            [
                "id" => 1851,
                "country_id" => 135,
                "state_id" => null,
                "name" => json_encode(["en" => "Spodnjeposavska", "zh" => "斯波德涅波萨夫"]),
                "code" => "spo"
            ],
            [
                "id" => 1852,
                "country_id" => 135,
                "state_id" => null,
                "name" => json_encode(["en" => "Zasavska", "zh" => "扎萨夫"]),
                "code" => "zas"
            ],
            [
                "id" => 1853,
                "country_id" => 55,
                "state_id" => null,
                "name" => json_encode(["en" => "Ash-Shamaliyah", "zh" => "北部"]),
                "code" => "ash"
            ],
            [
                "id" => 1854,
                "country_id" => 55,
                "state_id" => null,
                "name" => json_encode(["en" => "Al-Istiwaiyah", "zh" => "赤道"]),
                "code" => "sis"
            ],
            [
                "id" => 1855,
                "country_id" => 55,
                "state_id" => null,
                "name" => json_encode(["en" => "Darfur", "zh" => "达尔富尔"]),
                "code" => "sda"
            ],
            [
                "id" => 1856,
                "country_id" => 55,
                "state_id" => null,
                "name" => json_encode(["en" => "Ash-Sharqiyah", "zh" => "东部"]),
                "code" => "sha"
            ],
            [
                "id" => 1857,
                "country_id" => 55,
                "state_id" => null,
                "name" => json_encode(["en" => "Bahr al-Ghazal", "zh" => "加扎勒河"]),
                "code" => "sbg"
            ],
            [
                "id" => 1858,
                "country_id" => 55,
                "state_id" => null,
                "name" => json_encode(["en" => "Al-Khartum", "zh" => "喀土穆"]),
                "code" => "krt"
            ],
            [
                "id" => 1859,
                "country_id" => 55,
                "state_id" => null,
                "name" => json_encode(["en" => "Kurdufan", "zh" => "科尔多凡"]),
                "code" => "gku"
            ],
            [
                "id" => 1860,
                "country_id" => 55,
                "state_id" => null,
                "name" => json_encode(["en" => "Aali an-Nil", "zh" => "上尼罗"]),
                "code" => "anb"
            ],
            [
                "id" => 1861,
                "country_id" => 55,
                "state_id" => null,
                "name" => json_encode(["en" => "Al Wasta", "zh" => "中部"]),
                "code" => "wdh"
            ],
            [
                "id" => 1862,
                "country_id" => 191,
                "state_id" => null,
                "name" => json_encode(["en" => "Brokopondo", "zh" => "布罗科蓬多"]),
                "code" => "br"
            ],
            [
                "id" => 1863,
                "country_id" => 191,
                "state_id" => null,
                "name" => json_encode(["en" => "Coronie", "zh" => "科罗尼"]),
                "code" => "cr"
            ],
            [
                "id" => 1864,
                "country_id" => 191,
                "state_id" => null,
                "name" => json_encode(["en" => "Commewijne", "zh" => "科默韦讷"]),
                "code" => "cm"
            ],
            [
                "id" => 1865,
                "country_id" => 191,
                "state_id" => null,
                "name" => json_encode(["en" => "Marowijne", "zh" => "马罗韦讷"]),
                "code" => "ma"
            ],
            [
                "id" => 1866,
                "country_id" => 191,
                "state_id" => null,
                "name" => json_encode(["en" => "Nickerie", "zh" => "尼克里"]),
                "code" => "ni"
            ],
            [
                "id" => 1867,
                "country_id" => 191,
                "state_id" => null,
                "name" => json_encode(["en" => "Para", "zh" => "帕拉"]),
                "code" => "pa"
            ],
            [
                "id" => 1868,
                "country_id" => 191,
                "state_id" => null,
                "name" => json_encode(["en" => "Paramaribo", "zh" => "帕拉马里博"]),
                "code" => "pm"
            ],
            [
                "id" => 1869,
                "country_id" => 191,
                "state_id" => null,
                "name" => json_encode(["en" => "Saramacca", "zh" => "萨拉马卡"]),
                "code" => "sa"
            ],
            [
                "id" => 1870,
                "country_id" => 191,
                "state_id" => null,
                "name" => json_encode(["en" => "Wanica", "zh" => "瓦尼卡"]),
                "code" => "wa"
            ],
            [
                "id" => 1871,
                "country_id" => 191,
                "state_id" => null,
                "name" => json_encode(["en" => "Sipaliwini", "zh" => "西帕里韦尼"]),
                "code" => "si"
            ],
            [
                "id" => 1872,
                "country_id" => 175,
                "state_id" => null,
                "name" => json_encode(["en" => "Guadalcanal", "zh" => "瓜达尔卡纳尔"]),
                "code" => "gc"
            ],
            [
                "id" => 1873,
                "country_id" => 175,
                "state_id" => null,
                "name" => json_encode(["en" => "Honiara", "zh" => "霍尼亚拉"]),
                "code" => "ho"
            ],
            [
                "id" => 1874,
                "country_id" => 175,
                "state_id" => null,
                "name" => json_encode(["en" => "Rennell and Bellona", "zh" => "拉纳尔和贝罗纳"]),
                "code" => "rb"
            ],
            [
                "id" => 1875,
                "country_id" => 175,
                "state_id" => null,
                "name" => json_encode(["en" => "Makira", "zh" => "马基拉"]),
                "code" => "mk"
            ],
            [
                "id" => 1876,
                "country_id" => 175,
                "state_id" => null,
                "name" => json_encode(["en" => "Malaita", "zh" => "马莱塔"]),
                "code" => "ml"
            ],
            [
                "id" => 1877,
                "country_id" => 175,
                "state_id" => null,
                "name" => json_encode(["en" => "Choiseul", "zh" => "乔伊索"]),
                "code" => "ch"
            ],
            [
                "id" => 1878,
                "country_id" => 175,
                "state_id" => null,
                "name" => json_encode(["en" => "Temotu", "zh" => "泰莫图"]),
                "code" => "tm"
            ],
            [
                "id" => 1879,
                "country_id" => 175,
                "state_id" => null,
                "name" => json_encode(["en" => "Western", "zh" => "西部"]),
                "code" => "we"
            ],
            [
                "id" => 1880,
                "country_id" => 175,
                "state_id" => null,
                "name" => json_encode(["en" => "Isabel", "zh" => "伊萨贝尔"]),
                "code" => "is"
            ],
            [
                "id" => 1881,
                "country_id" => 175,
                "state_id" => null,
                "name" => json_encode(["en" => "Central Islands", "zh" => "中部群岛"]),
                "code" => "ce"
            ],
            [
                "id" => 1882,
                "country_id" => 72,
                "state_id" => null,
                "name" => json_encode(["en" => "Dushanbe", "zh" => "杜尚别"]),
                "code" => "dyu"
            ],
            [
                "id" => 1883,
                "country_id" => 72,
                "state_id" => null,
                "name" => json_encode(["en" => "Khorugh", "zh" => "霍罗格"]),
                "code" => "kho"
            ],
            [
                "id" => 1884,
                "country_id" => 72,
                "state_id" => null,
                "name" => json_encode(["en" => "Kanibadam", "zh" => "卡尼巴达姆"]),
                "code" => "kan"
            ],
            [
                "id" => 1885,
                "country_id" => 72,
                "state_id" => null,
                "name" => json_encode(["en" => "Kofarnihon", "zh" => "科法尔尼洪"]),
                "code" => "kof"
            ],
            [
                "id" => 1886,
                "country_id" => 72,
                "state_id" => null,
                "name" => json_encode(["en" => "Khujand", "zh" => "苦盏"]),
                "code" => "khu"
            ],
            [
                "id" => 1887,
                "country_id" => 72,
                "state_id" => null,
                "name" => json_encode(["en" => "Kurgan-Tjube", "zh" => "库尔干-秋别"]),
                "code" => "ktj"
            ],
            [
                "id" => 1888,
                "country_id" => 72,
                "state_id" => null,
                "name" => json_encode(["en" => "Kulob", "zh" => "库洛布"]),
                "code" => "klb"
            ],
            [
                "id" => 1889,
                "country_id" => 72,
                "state_id" => null,
                "name" => json_encode(["en" => "Rogun", "zh" => "洛贡"]),
                "code" => "rgu"
            ],
            [
                "id" => 1890,
                "country_id" => 72,
                "state_id" => null,
                "name" => json_encode(["en" => "Nurek", "zh" => "努雷克"]),
                "code" => "nur"
            ],
            [
                "id" => 1891,
                "country_id" => 72,
                "state_id" => null,
                "name" => json_encode(["en" => "Pendzhikent", "zh" => "彭吉肯特"]),
                "code" => "pjk"
            ],
            [
                "id" => 1892,
                "country_id" => 72,
                "state_id" => null,
                "name" => json_encode(["en" => "Sarband", "zh" => "萨班特"]),
                "code" => "sba"
            ],
            [
                "id" => 1893,
                "country_id" => 72,
                "state_id" => null,
                "name" => json_encode(["en" => "Taboshar", "zh" => "塔博沙尔"]),
                "code" => "tbs"
            ],
            [
                "id" => 1894,
                "country_id" => 72,
                "state_id" => null,
                "name" => json_encode(["en" => "Tursunzade", "zh" => "图尔孙扎德"]),
                "code" => "tsz"
            ],
            [
                "id" => 1895,
                "country_id" => 72,
                "state_id" => null,
                "name" => json_encode(["en" => "Ura-Tjube", "zh" => "乌拉秋别"]),
                "code" => "utj"
            ],
            [
                "id" => 1896,
                "country_id" => 72,
                "state_id" => null,
                "name" => json_encode(["en" => "Isfara", "zh" => "伊斯法拉"]),
                "code" => "isf"
            ],
            [
                "id" => 1897,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Amnat Charoen", "zh" => "安纳乍能"]),
                "code" => "37"
            ],
            [
                "id" => 1898,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Prachuap Khiri Khan", "zh" => "巴蜀"]),
                "code" => "77"
            ],
            [
                "id" => 1899,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Pathum Thani", "zh" => "巴吞他尼"]),
                "code" => "13"
            ],
            [
                "id" => 1900,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Prachin Buri", "zh" => "巴真"]),
                "code" => "25"
            ],
            [
                "id" => 1901,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Kanchanaburi", "zh" => "北碧"]),
                "code" => "71"
            ],
            [
                "id" => 1902,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Saraburi", "zh" => "北标"]),
                "code" => "19"
            ],
            [
                "id" => 1903,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Pattani", "zh" => "北大年"]),
                "code" => "94"
            ],
            [
                "id" => 1904,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Samut Prakan", "zh" => "北揽"]),
                "code" => "11"
            ],
            [
                "id" => 1905,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Nakhon Sawan", "zh" => "北榄坡"]),
                "code" => "60"
            ],
            [
                "id" => 1906,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Chachoengsao", "zh" => "北柳"]),
                "code" => "24"
            ],
            [
                "id" => 1907,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Phetchabun", "zh" => "碧差汶"]),
                "code" => "76"
            ],
            [
                "id" => 1908,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Phatthalung", "zh" => "博达伦"]),
                "code" => "93"
            ],
            [
                "id" => 1909,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Chai Nat", "zh" => "猜那"]),
                "code" => "18"
            ],
            [
                "id" => 1910,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Chaiyaphum", "zh" => "猜也奔"]),
                "code" => "36"
            ],
            [
                "id" => 1911,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Uttaradit", "zh" => "程逸"]),
                "code" => "53"
            ],
            [
                "id" => 1912,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Chumphon", "zh" => "春蓬"]),
                "code" => "86"
            ],
            [
                "id" => 1913,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Chon Buri", "zh" => "春武里"]),
                "code" => "20"
            ],
            [
                "id" => 1914,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Tak", "zh" => "达"]),
                "code" => "63"
            ],
            [
                "id" => 1915,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Trat", "zh" => "达叻"]),
                "code" => "23"
            ],
            [
                "id" => 1916,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Phra Nakhon Si Ayutthaya", "zh" => "大城"]),
                "code" => "14"
            ],
            [
                "id" => 1917,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Trang", "zh" => "董里"]),
                "code" => "92"
            ],
            [
                "id" => 1918,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Phetchaburi", "zh" => "佛丕"]),
                "code" => "78"
            ],
            [
                "id" => 1919,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Nakhon Pathom", "zh" => "佛统"]),
                "code" => "73"
            ],
            [
                "id" => 1920,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Kamphaeng Phet", "zh" => "甘烹碧"]),
                "code" => "62"
            ],
            [
                "id" => 1921,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Ang Thong", "zh" => "红统"]),
                "code" => "15"
            ],
            [
                "id" => 1922,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Lop Buri", "zh" => "华富里"]),
                "code" => "16"
            ],
            [
                "id" => 1923,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Kalasin", "zh" => "加拉信"]),
                "code" => "46"
            ],
            [
                "id" => 1924,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Krabi", "zh" => "甲米"]),
                "code" => "81"
            ],
            [
                "id" => 1925,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Chanthaburi", "zh" => "尖竹汶"]),
                "code" => "22"
            ],
            [
                "id" => 1926,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Khon Kaen", "zh" => "孔敬"]),
                "code" => "40"
            ],
            [
                "id" => 1927,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Rayong", "zh" => "拉农"]),
                "code" => "21"
            ],
            [
                "id" => 1928,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Nong Khai", "zh" => "廊开"]),
                "code" => "43"
            ],
            [
                "id" => 1929,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Nong Bua Lamphu", "zh" => "廊莫那浦"]),
                "code" => "39"
            ],
            [
                "id" => 1930,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Ratchaburi", "zh" => "叻丕"]),
                "code" => "70"
            ],
            [
                "id" => 1931,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Loei", "zh" => "黎"]),
                "code" => "42"
            ],
            [
                "id" => 1932,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Roi Et", "zh" => "黎逸"]),
                "code" => "45"
            ],
            [
                "id" => 1933,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Samut Sakhon", "zh" => "龙仔厝"]),
                "code" => "74"
            ],
            [
                "id" => 1934,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Ranong", "zh" => "罗勇"]),
                "code" => "85"
            ],
            [
                "id" => 1935,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Nakhon Si Thammarat", "zh" => "洛坤"]),
                "code" => "80"
            ],
            [
                "id" => 1936,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Maha Sarakham", "zh" => "玛哈沙拉堪"]),
                "code" => "44"
            ],
            [
                "id" => 1937,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Bangkok", "zh" => "曼谷"]),
                "code" => "10"
            ],
            [
                "id" => 1938,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Mukdahan", "zh" => "莫达汉"]),
                "code" => "49"
            ],
            [
                "id" => 1939,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Nakhon Nayok", "zh" => "那空那育"]),
                "code" => "26"
            ],
            [
                "id" => 1940,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Nakhon Phanom", "zh" => "那空帕农"]),
                "code" => "48"
            ],
            [
                "id" => 1941,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Nan", "zh" => "难"]),
                "code" => "55"
            ],
            [
                "id" => 1942,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Lamphun", "zh" => "南奔"]),
                "code" => "51"
            ],
            [
                "id" => 1943,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Nonthaburi", "zh" => "暖武里"]),
                "code" => "12"
            ],
            [
                "id" => 1944,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Phrae", "zh" => "帕"]),
                "code" => "54"
            ],
            [
                "id" => 1945,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Phayao", "zh" => "帕尧"]),
                "code" => "56"
            ],
            [
                "id" => 1946,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Phangnga", "zh" => "攀牙"]),
                "code" => "82"
            ],
            [
                "id" => 1947,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Phitsanulok", "zh" => "彭世洛"]),
                "code" => "65"
            ],
            [
                "id" => 1948,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Phichit", "zh" => "披集"]),
                "code" => "66"
            ],
            [
                "id" => 1949,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Phuket", "zh" => "普吉"]),
                "code" => "83"
            ],
            [
                "id" => 1950,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Chiang Rai", "zh" => "清莱"]),
                "code" => "57"
            ],
            [
                "id" => 1951,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Chiang Mai", "zh" => "清迈"]),
                "code" => "50"
            ],
            [
                "id" => 1952,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Sakon Nakhon", "zh" => "色军"]),
                "code" => "47"
            ],
            [
                "id" => 1953,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Satun", "zh" => "沙敦"]),
                "code" => "91"
            ],
            [
                "id" => 1954,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Sa Kaeo", "zh" => "沙缴"]),
                "code" => "27"
            ],
            [
                "id" => 1955,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Si sa ket", "zh" => "四色菊"]),
                "code" => "33"
            ],
            [
                "id" => 1956,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Songkhla", "zh" => "宋卡"]),
                "code" => "90"
            ],
            [
                "id" => 1957,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Sukhothai", "zh" => "素可泰"]),
                "code" => "64"
            ],
            [
                "id" => 1958,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Surat Thani", "zh" => "素叻"]),
                "code" => "84"
            ],
            [
                "id" => 1959,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Surin", "zh" => "素林"]),
                "code" => "32"
            ],
            [
                "id" => 1960,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Suphan Buri", "zh" => "素攀武里"]),
                "code" => "72"
            ],
            [
                "id" => 1961,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Narathiwat", "zh" => "陶公"]),
                "code" => "96"
            ],
            [
                "id" => 1962,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Udon Thani", "zh" => "乌隆"]),
                "code" => "41"
            ],
            [
                "id" => 1963,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Uthai Thani", "zh" => "乌泰他尼"]),
                "code" => "61"
            ],
            [
                "id" => 1964,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Ubon Ratchathani", "zh" => "乌汶"]),
                "code" => "34"
            ],
            [
                "id" => 1965,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Buri Ram", "zh" => "武里南"]),
                "code" => "31"
            ],
            [
                "id" => 1966,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Sing Buri", "zh" => "信武里"]),
                "code" => "17"
            ],
            [
                "id" => 1967,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Yasothon", "zh" => "耶梭通"]),
                "code" => "35"
            ],
            [
                "id" => 1968,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Yala", "zh" => "也拉"]),
                "code" => "95"
            ],
            [
                "id" => 1969,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Mae Hong Son", "zh" => "夜丰颂"]),
                "code" => "58"
            ],
            [
                "id" => 1970,
                "country_id" => 66,
                "state_id" => null,
                "name" => json_encode(["en" => "Samut Songkhram", "zh" => "夜功"]),
                "code" => "75"
            ],
            [
                "id" => 1971,
                "country_id" => 20,
                "state_id" => null,
                "name" => json_encode(["en" => "Arusha", "zh" => "阿鲁沙"]),
                "code" => "ar"
            ],
            [
                "id" => 1972,
                "country_id" => 20,
                "state_id" => null,
                "name" => json_encode(["en" => "Kaskazini Pemba", "zh" => "奔巴北"]),
                "code" => "pn"
            ],
            [
                "id" => 1973,
                "country_id" => 20,
                "state_id" => null,
                "name" => json_encode(["en" => "Kusini Pemba", "zh" => "奔巴南"]),
                "code" => "ps"
            ],
            [
                "id" => 1974,
                "country_id" => 20,
                "state_id" => null,
                "name" => json_encode(["en" => "Pwani", "zh" => "滨海"]),
                "code" => "pw"
            ],
            [
                "id" => 1975,
                "country_id" => 20,
                "state_id" => null,
                "name" => json_encode(["en" => "Dar es Salaam", "zh" => "达累斯萨拉姆"]),
                "code" => "ds"
            ],
            [
                "id" => 1976,
                "country_id" => 20,
                "state_id" => null,
                "name" => json_encode(["en" => "Dodoma", "zh" => "多多马"]),
                "code" => "do"
            ],
            [
                "id" => 1977,
                "country_id" => 20,
                "state_id" => null,
                "name" => json_encode(["en" => "Kigoma", "zh" => "基戈马"]),
                "code" => "ki"
            ],
            [
                "id" => 1978,
                "country_id" => 20,
                "state_id" => null,
                "name" => json_encode(["en" => "Kagera", "zh" => "卡盖拉"]),
                "code" => "ka"
            ],
            [
                "id" => 1979,
                "country_id" => 20,
                "state_id" => null,
                "name" => json_encode(["en" => "Lindi", "zh" => "林迪"]),
                "code" => "ln"
            ],
            [
                "id" => 1980,
                "country_id" => 20,
                "state_id" => null,
                "name" => json_encode(["en" => "Rukwa", "zh" => "鲁夸"]),
                "code" => "rk"
            ],
            [
                "id" => 1981,
                "country_id" => 20,
                "state_id" => null,
                "name" => json_encode(["en" => "Ruvuma", "zh" => "鲁伍马"]),
                "code" => "rv"
            ],
            [
                "id" => 1982,
                "country_id" => 20,
                "state_id" => null,
                "name" => json_encode(["en" => "Mara", "zh" => "马腊"]),
                "code" => "mr"
            ],
            [
                "id" => 1983,
                "country_id" => 20,
                "state_id" => null,
                "name" => json_encode(["en" => "Manyara", "zh" => "曼亚拉"]),
                "code" => "my"
            ],
            [
                "id" => 1984,
                "country_id" => 20,
                "state_id" => null,
                "name" => json_encode(["en" => "Morogoro", "zh" => "莫洛戈罗"]),
                "code" => "mo"
            ],
            [
                "id" => 1985,
                "country_id" => 20,
                "state_id" => null,
                "name" => json_encode(["en" => "Mbeya", "zh" => "姆贝亚"]),
                "code" => "mb"
            ],
            [
                "id" => 1986,
                "country_id" => 20,
                "state_id" => null,
                "name" => json_encode(["en" => "Mtwara", "zh" => "姆特瓦拉"]),
                "code" => "mt"
            ],
            [
                "id" => 1987,
                "country_id" => 20,
                "state_id" => null,
                "name" => json_encode(["en" => "Mwanza", "zh" => "姆万扎"]),
                "code" => "mw"
            ],
            [
                "id" => 1988,
                "country_id" => 20,
                "state_id" => null,
                "name" => json_encode(["en" => "Kilimanjaro", "zh" => "乞力马扎罗"]),
                "code" => "kj"
            ],
            [
                "id" => 1989,
                "country_id" => 20,
                "state_id" => null,
                "name" => json_encode(["en" => "Zanzibar", "zh" => "桑给巴尔"]),
                "code" => "zn"
            ],
            [
                "id" => 1990,
                "country_id" => 20,
                "state_id" => null,
                "name" => json_encode(["en" => "Kaskazini Unguja", "zh" => "桑给巴尔北"]),
                "code" => "un"
            ],
            [
                "id" => 1991,
                "country_id" => 20,
                "state_id" => null,
                "name" => json_encode(["en" => "Kusini Unguja", "zh" => "桑给巴尔南"]),
                "code" => "us"
            ],
            [
                "id" => 1992,
                "country_id" => 20,
                "state_id" => null,
                "name" => json_encode(["en" => "Mjini Magharibi", "zh" => "桑给巴尔市和西"]),
                "code" => "mm"
            ],
            [
                "id" => 1993,
                "country_id" => 20,
                "state_id" => null,
                "name" => json_encode(["en" => "Tabora", "zh" => "塔波拉"]),
                "code" => "tb"
            ],
            [
                "id" => 1994,
                "country_id" => 20,
                "state_id" => null,
                "name" => json_encode(["en" => "Tanga", "zh" => "坦噶"]),
                "code" => "tn"
            ],
            [
                "id" => 1995,
                "country_id" => 20,
                "state_id" => null,
                "name" => json_encode(["en" => "Singida", "zh" => "辛吉达"]),
                "code" => "si"
            ],
            [
                "id" => 1996,
                "country_id" => 20,
                "state_id" => null,
                "name" => json_encode(["en" => "Shinyanga", "zh" => "欣延加"]),
                "code" => "sh"
            ],
            [
                "id" => 1997,
                "country_id" => 20,
                "state_id" => null,
                "name" => json_encode(["en" => "Iringa", "zh" => "伊林加"]),
                "code" => "ir"
            ],
            [
                "id" => 1998,
                "country_id" => 169,
                "state_id" => null,
                "name" => json_encode(["en" => "Eua", "zh" => "埃瓦"]),
                "code" => "e"
            ],
            [
                "id" => 1999,
                "country_id" => 169,
                "state_id" => null,
                "name" => json_encode(["en" => "Haapai", "zh" => "哈派"]),
                "code" => "h"
            ],
            [
                "id" => 2000,
                "country_id" => 169,
                "state_id" => null,
                "name" => json_encode(["en" => "Niuas", "zh" => "纽阿斯"]),
                "code" => "n"
            ],
            [
                "id" => 2001,
                "country_id" => 169,
                "state_id" => null,
                "name" => json_encode(["en" => "Tongatapu", "zh" => "汤加塔布"]),
                "code" => "t"
            ],
            [
                "id" => 2002,
                "country_id" => 169,
                "state_id" => null,
                "name" => json_encode(["en" => "Vavau", "zh" => "瓦瓦乌"]),
                "code" => "v"
            ],
            [
                "id" => 2003,
                "country_id" => 38,
                "state_id" => null,
                "name" => json_encode(["en" => "Ariana", "zh" => "艾尔亚奈"]),
                "code" => "ar"
            ],
            [
                "id" => 2004,
                "country_id" => 38,
                "state_id" => null,
                "name" => json_encode(["en" => "Beja", "zh" => "巴杰"]),
                "code" => "bj"
            ],
            [
                "id" => 2005,
                "country_id" => 38,
                "state_id" => null,
                "name" => json_encode(["en" => "Ben Arous", "zh" => "本阿鲁斯"]),
                "code" => "ba"
            ],
            [
                "id" => 2006,
                "country_id" => 38,
                "state_id" => null,
                "name" => json_encode(["en" => "Bizerte", "zh" => "比塞大"]),
                "code" => "bi"
            ],
            [
                "id" => 2007,
                "country_id" => 38,
                "state_id" => null,
                "name" => json_encode(["en" => "Kebili", "zh" => "吉比利"]),
                "code" => "kb"
            ],
            [
                "id" => 2008,
                "country_id" => 38,
                "state_id" => null,
                "name" => json_encode(["en" => "Gabes", "zh" => "加贝斯"]),
                "code" => "gb"
            ],
            [
                "id" => 2009,
                "country_id" => 38,
                "state_id" => null,
                "name" => json_encode(["en" => "Gafsa", "zh" => "加夫萨"]),
                "code" => "gf"
            ],
            [
                "id" => 2010,
                "country_id" => 38,
                "state_id" => null,
                "name" => json_encode(["en" => "Jendouba", "zh" => "坚杜拜"]),
                "code" => "je"
            ],
            [
                "id" => 2011,
                "country_id" => 38,
                "state_id" => null,
                "name" => json_encode(["en" => "Le Kef", "zh" => "卡夫"]),
                "code" => "lk"
            ],
            [
                "id" => 2012,
                "country_id" => 38,
                "state_id" => null,
                "name" => json_encode(["en" => "Kasserine", "zh" => "卡塞林"]),
                "code" => "ks"
            ],
            [
                "id" => 2013,
                "country_id" => 38,
                "state_id" => null,
                "name" => json_encode(["en" => "Kairouan", "zh" => "凯鲁万"]),
                "code" => "kr"
            ],
            [
                "id" => 2014,
                "country_id" => 38,
                "state_id" => null,
                "name" => json_encode(["en" => "Mahdia", "zh" => "马赫迪耶"]),
                "code" => "mh"
            ],
            [
                "id" => 2015,
                "country_id" => 38,
                "state_id" => null,
                "name" => json_encode(["en" => "Manouba", "zh" => "马努巴"]),
                "code" => "mn"
            ],
            [
                "id" => 2016,
                "country_id" => 38,
                "state_id" => null,
                "name" => json_encode(["en" => "Medenine", "zh" => "梅德宁"]),
                "code" => "me"
            ],
            [
                "id" => 2017,
                "country_id" => 38,
                "state_id" => null,
                "name" => json_encode(["en" => "Monastir", "zh" => "莫纳斯提尔"]),
                "code" => "mo"
            ],
            [
                "id" => 2018,
                "country_id" => 38,
                "state_id" => null,
                "name" => json_encode(["en" => "Nabeul", "zh" => "纳布勒"]),
                "code" => "na"
            ],
            [
                "id" => 2019,
                "country_id" => 38,
                "state_id" => null,
                "name" => json_encode(["en" => "Sfax", "zh" => "斯法克斯"]),
                "code" => "sf"
            ],
            [
                "id" => 2020,
                "country_id" => 38,
                "state_id" => null,
                "name" => json_encode(["en" => "Sousse", "zh" => "苏塞"]),
                "code" => "so"
            ],
            [
                "id" => 2021,
                "country_id" => 38,
                "state_id" => null,
                "name" => json_encode(["en" => "Tataouine", "zh" => "泰塔温"]),
                "code" => "ta"
            ],
            [
                "id" => 2022,
                "country_id" => 38,
                "state_id" => null,
                "name" => json_encode(["en" => "Tunis", "zh" => "突尼斯"]),
                "code" => "tu"
            ],
            [
                "id" => 2023,
                "country_id" => 38,
                "state_id" => null,
                "name" => json_encode(["en" => "Tozeur", "zh" => "托泽尔"]),
                "code" => "to"
            ],
            [
                "id" => 2024,
                "country_id" => 38,
                "state_id" => null,
                "name" => json_encode(["en" => "Sidi Bouzid", "zh" => "西迪布济德"]),
                "code" => "sd"
            ],
            [
                "id" => 2025,
                "country_id" => 38,
                "state_id" => null,
                "name" => json_encode(["en" => "Siliana", "zh" => "锡勒亚奈"]),
                "code" => "sl"
            ],
            [
                "id" => 2026,
                "country_id" => 38,
                "state_id" => null,
                "name" => json_encode(["en" => "Zaghouan", "zh" => "宰格万"]),
                "code" => "za"
            ],
            [
                "id" => 2027,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Adana", "zh" => "阿达纳"]),
                "code" => "ada"
            ],
            [
                "id" => 2028,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Adiyaman", "zh" => "阿德亚曼"]),
                "code" => "adi"
            ],
            [
                "id" => 2029,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Ardahan", "zh" => "阿尔达罕"]),
                "code" => "ard"
            ],
            [
                "id" => 2030,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Artvin", "zh" => "阿尔特温"]),
                "code" => "art"
            ],
            [
                "id" => 2031,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Afyon", "zh" => "阿菲永"]),
                "code" => "afy"
            ],
            [
                "id" => 2032,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Aksaray", "zh" => "阿克萨赖"]),
                "code" => "aks"
            ],
            [
                "id" => 2033,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Agri", "zh" => "阿勒"]),
                "code" => "agr"
            ],
            [
                "id" => 2034,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Amasya", "zh" => "阿马西亚"]),
                "code" => "ama"
            ],
            [
                "id" => 2035,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Edirne", "zh" => "埃迪尔内"]),
                "code" => "edi"
            ],
            [
                "id" => 2036,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Erzincan", "zh" => "埃尔津詹"]),
                "code" => "ezc"
            ],
            [
                "id" => 2037,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Erzurum", "zh" => "埃尔祖鲁姆"]),
                "code" => "ezr"
            ],
            [
                "id" => 2038,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Elazig", "zh" => "埃拉泽"]),
                "code" => "ela"
            ],
            [
                "id" => 2039,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Eskisehir", "zh" => "埃斯基谢希尔"]),
                "code" => "esk"
            ],
            [
                "id" => 2040,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Aydin", "zh" => "艾登"]),
                "code" => "ayi"
            ],
            [
                "id" => 2041,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Ankara", "zh" => "安卡拉"]),
                "code" => "ank"
            ],
            [
                "id" => 2042,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Antalya", "zh" => "安塔利亚"]),
                "code" => "ant"
            ],
            [
                "id" => 2043,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Ordu", "zh" => "奥尔杜"]),
                "code" => "ord"
            ],
            [
                "id" => 2044,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Bartin", "zh" => "巴尔腾"]),
                "code" => "bar"
            ],
            [
                "id" => 2045,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Balikesir", "zh" => "巴勒克埃西尔"]),
                "code" => "bal"
            ],
            [
                "id" => 2046,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Batman", "zh" => "巴特曼"]),
                "code" => "bat"
            ],
            [
                "id" => 2047,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Bayburt", "zh" => "巴伊布尔特"]),
                "code" => "bay"
            ],
            [
                "id" => 2048,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Bilecik", "zh" => "比莱吉克"]),
                "code" => "bil"
            ],
            [
                "id" => 2049,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Bitlis", "zh" => "比特利斯"]),
                "code" => "bit"
            ],
            [
                "id" => 2050,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Bingol", "zh" => "宾格尔"]),
                "code" => "bin"
            ],
            [
                "id" => 2051,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Bolu", "zh" => "博卢"]),
                "code" => "bol"
            ],
            [
                "id" => 2052,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Burdur", "zh" => "布尔杜尔"]),
                "code" => "brd"
            ],
            [
                "id" => 2053,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Bursa", "zh" => "布尔萨"]),
                "code" => "brs"
            ],
            [
                "id" => 2054,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Cankiri", "zh" => "昌克勒"]),
                "code" => "ckr"
            ],
            [
                "id" => 2055,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Denizli", "zh" => "代尼兹利"]),
                "code" => "den"
            ],
            [
                "id" => 2056,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Diyarbakir", "zh" => "迪亚巴克尔"]),
                "code" => "diy"
            ],
            [
                "id" => 2057,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Van", "zh" => "凡"]),
                "code" => "van"
            ],
            [
                "id" => 2058,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Hakkari", "zh" => "哈卡里"]),
                "code" => "hkr"
            ],
            [
                "id" => 2059,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Hatay", "zh" => "哈塔伊"]),
                "code" => "hty"
            ],
            [
                "id" => 2060,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Kilis", "zh" => "基利斯"]),
                "code" => "kls"
            ],
            [
                "id" => 2061,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Giresun", "zh" => "吉雷松"]),
                "code" => "gir"
            ],
            [
                "id" => 2062,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Gaziantep", "zh" => "加济安泰普"]),
                "code" => "gaz"
            ],
            [
                "id" => 2063,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Gumushane", "zh" => "居米什哈内"]),
                "code" => "gms"
            ],
            [
                "id" => 2064,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Kars", "zh" => "卡尔斯"]),
                "code" => "krs"
            ],
            [
                "id" => 2065,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Kahraman Maras", "zh" => "卡赫拉曼马拉什"]),
                "code" => "kah"
            ],
            [
                "id" => 2066,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Karabuk", "zh" => "卡拉比克"]),
                "code" => "krb"
            ],
            [
                "id" => 2067,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Karaman", "zh" => "卡拉曼"]),
                "code" => "krm"
            ],
            [
                "id" => 2068,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Kastamonu", "zh" => "卡斯塔莫努"]),
                "code" => "kas"
            ],
            [
                "id" => 2069,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Kayseri", "zh" => "开塞利"]),
                "code" => "kay"
            ],
            [
                "id" => 2070,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Kocaeli", "zh" => "科贾埃利"]),
                "code" => "koc"
            ],
            [
                "id" => 2071,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Kirklareli", "zh" => "柯克拉雷利"]),
                "code" => "klr"
            ],
            [
                "id" => 2072,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Konya", "zh" => "科尼亚"]),
                "code" => "kon"
            ],
            [
                "id" => 2073,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Kirsehir", "zh" => "克尔谢希尔"]),
                "code" => "krh"
            ],
            [
                "id" => 2074,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Kirikkale", "zh" => "克勒克卡莱"]),
                "code" => "krk"
            ],
            [
                "id" => 2075,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Urfa", "zh" => "拉飞"]),
                "code" => "urf"
            ],
            [
                "id" => 2076,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Rize", "zh" => "里泽"]),
                "code" => "riz"
            ],
            [
                "id" => 2077,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Mardin", "zh" => "马尔丁"]),
                "code" => "mar"
            ],
            [
                "id" => 2078,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Malatya", "zh" => "马拉蒂亚"]),
                "code" => "mal"
            ],
            [
                "id" => 2079,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Manisa", "zh" => "马尼萨"]),
                "code" => "man"
            ],
            [
                "id" => 2080,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Mugla", "zh" => "穆拉"]),
                "code" => "mug"
            ],
            [
                "id" => 2081,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Mus", "zh" => "穆什"]),
                "code" => "mus"
            ],
            [
                "id" => 2082,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Nevsehir", "zh" => "内夫谢希尔"]),
                "code" => "nev"
            ],
            [
                "id" => 2083,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Nigde", "zh" => "尼代"]),
                "code" => "nig"
            ],
            [
                "id" => 2084,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Canakkale", "zh" => "恰纳卡莱"]),
                "code" => "ckl"
            ],
            [
                "id" => 2085,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Corum", "zh" => "乔鲁姆"]),
                "code" => "cor"
            ],
            [
                "id" => 2086,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Kutahya", "zh" => "屈塔希亚"]),
                "code" => "kut"
            ],
            [
                "id" => 2087,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Sakarya", "zh" => "萨卡里亚"]),
                "code" => "sak"
            ],
            [
                "id" => 2088,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Samsun", "zh" => "萨姆松"]),
                "code" => "sam"
            ],
            [
                "id" => 2089,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Tekirdag", "zh" => "泰基尔达"]),
                "code" => "tel"
            ],
            [
                "id" => 2090,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Trabzon", "zh" => "特拉布宗"]),
                "code" => "tra"
            ],
            [
                "id" => 2091,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Tunceli", "zh" => "通杰利"]),
                "code" => "tun"
            ],
            [
                "id" => 2092,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Tokat", "zh" => "托卡特"]),
                "code" => "tok"
            ],
            [
                "id" => 2093,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Usak", "zh" => "乌萨克"]),
                "code" => "usk"
            ],
            [
                "id" => 2094,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Sirnak", "zh" => "锡尔纳克"]),
                "code" => "sir"
            ],
            [
                "id" => 2095,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Siirt", "zh" => "锡尔特"]),
                "code" => "sii"
            ],
            [
                "id" => 2096,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Sinop", "zh" => "锡诺普"]),
                "code" => "sin"
            ],
            [
                "id" => 2097,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Sivas", "zh" => "锡瓦斯"]),
                "code" => "siv"
            ],
            [
                "id" => 2098,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Igdir", "zh" => "伊迪尔"]),
                "code" => "igd"
            ],
            [
                "id" => 2099,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Icel", "zh" => "伊切尔"]),
                "code" => "ice"
            ],
            [
                "id" => 2100,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Isparta", "zh" => "伊斯帕尔塔"]),
                "code" => "isp"
            ],
            [
                "id" => 2101,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Istanbul", "zh" => "伊斯坦布尔"]),
                "code" => "ist"
            ],
            [
                "id" => 2102,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Izmir", "zh" => "伊兹密尔"]),
                "code" => "izm"
            ],
            [
                "id" => 2103,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Yozgat", "zh" => "约兹加特"]),
                "code" => "yoz"
            ],
            [
                "id" => 2104,
                "country_id" => 134,
                "state_id" => null,
                "name" => json_encode(["en" => "Zonguldak", "zh" => "宗古尔达克"]),
                "code" => "zon"
            ],
            [
                "id" => 2105,
                "country_id" => 95,
                "state_id" => null,
                "name" => json_encode(["en" => "Ahal", "zh" => "阿哈尔"]),
                "code" => "a"
            ],
            [
                "id" => 2106,
                "country_id" => 95,
                "state_id" => null,
                "name" => json_encode(["en" => "Ashgabat", "zh" => "阿什哈巴德市"]),
                "code" => "asb"
            ],
            [
                "id" => 2107,
                "country_id" => 95,
                "state_id" => null,
                "name" => json_encode(["en" => "Balkan", "zh" => "巴尔坎"]),
                "code" => "b"
            ],
            [
                "id" => 2108,
                "country_id" => 95,
                "state_id" => null,
                "name" => json_encode(["en" => "Dashoguz", "zh" => "达沙古兹"]),
                "code" => "d"
            ],
            [
                "id" => 2109,
                "country_id" => 95,
                "state_id" => null,
                "name" => json_encode(["en" => "Lebap", "zh" => "列巴普"]),
                "code" => "l"
            ],
            [
                "id" => 2110,
                "country_id" => 95,
                "state_id" => null,
                "name" => json_encode(["en" => "Mary", "zh" => "马雷"]),
                "code" => "m"
            ],
            [
                "id" => 2111,
                "country_id" => 95,
                "state_id" => null,
                "name" => json_encode(["en" => "Nebitdag", "zh" => "涅比特达格"]),
                "code" => "neb"
            ],
            [
                "id" => 2112,
                "country_id" => 174,
                "state_id" => null,
                "name" => json_encode(["en" => "Malampa", "zh" => "马朗帕"]),
                "code" => "ma"
            ],
            [
                "id" => 2113,
                "country_id" => 174,
                "state_id" => null,
                "name" => json_encode(["en" => "Penama", "zh" => "彭纳马"]),
                "code" => "pe"
            ],
            [
                "id" => 2114,
                "country_id" => 174,
                "state_id" => null,
                "name" => json_encode(["en" => "Sanma", "zh" => "桑马"]),
                "code" => "sa"
            ],
            [
                "id" => 2115,
                "country_id" => 174,
                "state_id" => null,
                "name" => json_encode(["en" => "Tafea", "zh" => "塔菲阿"]),
                "code" => "ta"
            ],
            [
                "id" => 2116,
                "country_id" => 174,
                "state_id" => null,
                "name" => json_encode(["en" => "Torba", "zh" => "托尔巴"]),
                "code" => "to"
            ],
            [
                "id" => 2117,
                "country_id" => 174,
                "state_id" => null,
                "name" => json_encode(["en" => "Shefa", "zh" => "谢法"]),
                "code" => "sh"
            ],
            [
                "id" => 2118,
                "country_id" => 114,
                "state_id" => null,
                "name" => json_encode(["en" => "El Progreso", "zh" => "埃尔普罗格雷索"]),
                "code" => "pr"
            ],
            [
                "id" => 2119,
                "country_id" => 114,
                "state_id" => null,
                "name" => json_encode(["en" => "Escuintla", "zh" => "埃斯昆特拉"]),
                "code" => "es"
            ],
            [
                "id" => 2120,
                "country_id" => 114,
                "state_id" => null,
                "name" => json_encode(["en" => "Jalapa", "zh" => "哈拉帕"]),
                "code" => "ja"
            ],
            [
                "id" => 2121,
                "country_id" => 114,
                "state_id" => null,
                "name" => json_encode(["en" => "Jutiapa", "zh" => "胡蒂亚帕"]),
                "code" => "ju"
            ],
            [
                "id" => 2122,
                "country_id" => 114,
                "state_id" => null,
                "name" => json_encode(["en" => "Quiche", "zh" => "基切"]),
                "code" => "qc"
            ],
            [
                "id" => 2123,
                "country_id" => 114,
                "state_id" => null,
                "name" => json_encode(["en" => "Quetzaltenango", "zh" => "克萨尔特南戈"]),
                "code" => "qz"
            ],
            [
                "id" => 2124,
                "country_id" => 114,
                "state_id" => null,
                "name" => json_encode(["en" => "Retalhuleu", "zh" => "雷塔卢莱乌"]),
                "code" => "re"
            ],
            [
                "id" => 2125,
                "country_id" => 114,
                "state_id" => null,
                "name" => json_encode(["en" => "Mixco", "zh" => "米克斯科"]),
                "code" => "mix"
            ],
            [
                "id" => 2126,
                "country_id" => 114,
                "state_id" => null,
                "name" => json_encode(["en" => "Peten", "zh" => "佩滕"]),
                "code" => "pe"
            ],
            [
                "id" => 2127,
                "country_id" => 114,
                "state_id" => null,
                "name" => json_encode(["en" => "Chiquimula", "zh" => "奇基穆拉"]),
                "code" => "cq"
            ],
            [
                "id" => 2128,
                "country_id" => 114,
                "state_id" => null,
                "name" => json_encode(["en" => "Chimaltenango", "zh" => "奇马尔特南戈"]),
                "code" => "cm"
            ],
            [
                "id" => 2129,
                "country_id" => 114,
                "state_id" => null,
                "name" => json_encode(["en" => "Zacapa", "zh" => "萨卡帕"]),
                "code" => "za"
            ],
            [
                "id" => 2130,
                "country_id" => 114,
                "state_id" => null,
                "name" => json_encode(["en" => "Sacatepequez", "zh" => "萨卡特佩克斯"]),
                "code" => "st"
            ],
            [
                "id" => 2131,
                "country_id" => 114,
                "state_id" => null,
                "name" => json_encode(["en" => "Alta Verapaz", "zh" => "上韦拉帕斯"]),
                "code" => "av"
            ],
            [
                "id" => 2132,
                "country_id" => 114,
                "state_id" => null,
                "name" => json_encode(["en" => "Santa Rosa", "zh" => "圣罗莎"]),
                "code" => "sr"
            ],
            [
                "id" => 2133,
                "country_id" => 114,
                "state_id" => null,
                "name" => json_encode(["en" => "San Marcos", "zh" => "圣马科斯"]),
                "code" => "sm"
            ],
            [
                "id" => 2134,
                "country_id" => 114,
                "state_id" => null,
                "name" => json_encode(["en" => "Suchitepequez", "zh" => "苏奇特佩克斯"]),
                "code" => "su"
            ],
            [
                "id" => 2135,
                "country_id" => 114,
                "state_id" => null,
                "name" => json_encode(["en" => "Solola", "zh" => "索洛拉"]),
                "code" => "so"
            ],
            [
                "id" => 2136,
                "country_id" => 114,
                "state_id" => null,
                "name" => json_encode(["en" => "Totonicapan", "zh" => "托托尼卡潘"]),
                "code" => "to"
            ],
            [
                "id" => 2137,
                "country_id" => 114,
                "state_id" => null,
                "name" => json_encode(["en" => "Guatemala", "zh" => "危地马拉"]),
                "code" => "gu"
            ],
            [
                "id" => 2138,
                "country_id" => 114,
                "state_id" => null,
                "name" => json_encode(["en" => "Huehuetenango", "zh" => "韦韦特南戈"]),
                "code" => "hu"
            ],
            [
                "id" => 2139,
                "country_id" => 114,
                "state_id" => null,
                "name" => json_encode(["en" => "Baja Verapaz", "zh" => "下韦拉帕斯"]),
                "code" => "bv"
            ],
            [
                "id" => 2140,
                "country_id" => 114,
                "state_id" => null,
                "name" => json_encode(["en" => "Villa Nueva", "zh" => "新城"]),
                "code" => "vin"
            ],
            [
                "id" => 2141,
                "country_id" => 114,
                "state_id" => null,
                "name" => json_encode(["en" => "Izabal", "zh" => "伊萨瓦尔"]),
                "code" => "iz"
            ],
            [
                "id" => 2142,
                "country_id" => 192,
                "state_id" => null,
                "name" => json_encode(["en" => "Aragua", "zh" => "阿拉瓜"]),
                "code" => "d"
            ],
            [
                "id" => 2143,
                "country_id" => 192,
                "state_id" => null,
                "name" => json_encode(["en" => "Delta Amacuro", "zh" => "阿马库罗三角洲"]),
                "code" => "y"
            ],
            [
                "id" => 2144,
                "country_id" => 192,
                "state_id" => null,
                "name" => json_encode(["en" => "Apure", "zh" => "阿普雷"]),
                "code" => "c"
            ],
            [
                "id" => 2145,
                "country_id" => 192,
                "state_id" => null,
                "name" => json_encode(["en" => "Anzoategui", "zh" => "安索阿特吉"]),
                "code" => "b"
            ],
            [
                "id" => 2146,
                "country_id" => 192,
                "state_id" => null,
                "name" => json_encode(["en" => "Barinas", "zh" => "巴里纳斯"]),
                "code" => "e"
            ],
            [
                "id" => 2147,
                "country_id" => 192,
                "state_id" => null,
                "name" => json_encode(["en" => "Bolivar", "zh" => "玻利瓦尔"]),
                "code" => "f"
            ],
            [
                "id" => 2148,
                "country_id" => 192,
                "state_id" => null,
                "name" => json_encode(["en" => "Portuguesa", "zh" => "波图格萨"]),
                "code" => "p"
            ],
            [
                "id" => 2149,
                "country_id" => 192,
                "state_id" => null,
                "name" => json_encode(["en" => "Falcon", "zh" => "法尔孔"]),
                "code" => "i"
            ],
            [
                "id" => 2150,
                "country_id" => 192,
                "state_id" => null,
                "name" => json_encode(["en" => "Guarico", "zh" => "瓜里科"]),
                "code" => "j"
            ],
            [
                "id" => 2151,
                "country_id" => 192,
                "state_id" => null,
                "name" => json_encode(["en" => "Caracas", "zh" => "加拉加斯"]),
                "code" => "a"
            ],
            [
                "id" => 2152,
                "country_id" => 192,
                "state_id" => null,
                "name" => json_encode(["en" => "Carabobo", "zh" => "卡拉沃沃"]),
                "code" => "g"
            ],
            [
                "id" => 2153,
                "country_id" => 192,
                "state_id" => null,
                "name" => json_encode(["en" => "Cojedes", "zh" => "科赫德斯"]),
                "code" => "h"
            ],
            [
                "id" => 2154,
                "country_id" => 192,
                "state_id" => null,
                "name" => json_encode(["en" => "Lara", "zh" => "拉腊"]),
                "code" => "k"
            ],
            [
                "id" => 2155,
                "country_id" => 192,
                "state_id" => null,
                "name" => json_encode(["en" => "Dependencias Federales", "zh" => "联邦属地"]),
                "code" => "w"
            ],
            [
                "id" => 2156,
                "country_id" => 192,
                "state_id" => null,
                "name" => json_encode(["en" => "Merida", "zh" => "梅里达"]),
                "code" => "l"
            ],
            [
                "id" => 2157,
                "country_id" => 192,
                "state_id" => null,
                "name" => json_encode(["en" => "Miranda", "zh" => "米兰达"]),
                "code" => "m"
            ],
            [
                "id" => 2158,
                "country_id" => 192,
                "state_id" => null,
                "name" => json_encode(["en" => "Monagas", "zh" => "莫纳加斯"]),
                "code" => "n"
            ],
            [
                "id" => 2159,
                "country_id" => 192,
                "state_id" => null,
                "name" => json_encode(["en" => "Sucre", "zh" => "苏克雷"]),
                "code" => "r"
            ],
            [
                "id" => 2160,
                "country_id" => 192,
                "state_id" => null,
                "name" => json_encode(["en" => "Zulia", "zh" => "苏利亚"]),
                "code" => "v"
            ],
            [
                "id" => 2161,
                "country_id" => 192,
                "state_id" => null,
                "name" => json_encode(["en" => "Tachira", "zh" => "塔奇拉"]),
                "code" => "s"
            ],
            [
                "id" => 2162,
                "country_id" => 192,
                "state_id" => null,
                "name" => json_encode(["en" => "Trujillo", "zh" => "特鲁希略"]),
                "code" => "t"
            ],
            [
                "id" => 2163,
                "country_id" => 192,
                "state_id" => null,
                "name" => json_encode(["en" => "Estado Nueva Esparta", "zh" => "新埃斯帕塔"]),
                "code" => "o"
            ],
            [
                "id" => 2164,
                "country_id" => 192,
                "state_id" => null,
                "name" => json_encode(["en" => "Yaracuy", "zh" => "亚拉奎"]),
                "code" => "u"
            ],
            [
                "id" => 2165,
                "country_id" => 192,
                "state_id" => null,
                "name" => json_encode(["en" => "Amazonas", "zh" => "亚马孙"]),
                "code" => "z"
            ],
            [
                "id" => 2166,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Arua", "zh" => "阿鲁阿"]),
                "code" => "aru"
            ],
            [
                "id" => 2167,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Apac", "zh" => "阿帕克"]),
                "code" => "apc"
            ],
            [
                "id" => 2168,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Adjumani", "zh" => "阿朱马尼"]),
                "code" => "adj"
            ],
            [
                "id" => 2169,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Bundibugyo", "zh" => "本迪布焦"]),
                "code" => "bun"
            ],
            [
                "id" => 2170,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Bugiri", "zh" => "布吉里"]),
                "code" => "bug"
            ],
            [
                "id" => 2171,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Busia", "zh" => "布西亚"]),
                "code" => "bus"
            ],
            [
                "id" => 2172,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Bushenyi", "zh" => "布谢尼"]),
                "code" => "bsh"
            ],
            [
                "id" => 2173,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Ntungamo", "zh" => "恩通加莫"]),
                "code" => "ntu"
            ],
            [
                "id" => 2174,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Gulu", "zh" => "古卢"]),
                "code" => "gul"
            ],
            [
                "id" => 2175,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Hoima", "zh" => "霍伊马"]),
                "code" => "hoi"
            ],
            [
                "id" => 2176,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Kibaale", "zh" => "基巴莱"]),
                "code" => "kba"
            ],
            [
                "id" => 2177,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Kiboga", "zh" => "基博加"]),
                "code" => "kib"
            ],
            [
                "id" => 2178,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Kyenjojo", "zh" => "基恩乔乔"]),
                "code" => "kye"
            ],
            [
                "id" => 2179,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Kisoro", "zh" => "基索罗"]),
                "code" => "kis"
            ],
            [
                "id" => 2180,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Kitgum", "zh" => "基特古姆"]),
                "code" => "kit"
            ],
            [
                "id" => 2181,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Jinja", "zh" => "金贾"]),
                "code" => "jin"
            ],
            [
                "id" => 2182,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Kabale", "zh" => "卡巴莱"]),
                "code" => "kbl"
            ],
            [
                "id" => 2183,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Kabarole", "zh" => "卡巴罗莱"]),
                "code" => "kar"
            ],
            [
                "id" => 2184,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Kaberamaido", "zh" => "卡贝拉马伊多"]),
                "code" => "kab"
            ],
            [
                "id" => 2185,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Kalangala", "zh" => "卡兰加拉"]),
                "code" => "kal"
            ],
            [
                "id" => 2186,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Kamwenge", "zh" => "卡姆文盖"]),
                "code" => "kam"
            ],
            [
                "id" => 2187,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Kamuli", "zh" => "卡穆利"]),
                "code" => "kml"
            ],
            [
                "id" => 2188,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Kanungu", "zh" => "卡农古"]),
                "code" => "kan"
            ],
            [
                "id" => 2189,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Kapchorwa", "zh" => "卡普乔鲁瓦"]),
                "code" => "kpc"
            ],
            [
                "id" => 2190,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Kasese", "zh" => "卡塞塞"]),
                "code" => "kas"
            ],
            [
                "id" => 2191,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Katakwi", "zh" => "卡塔奎"]),
                "code" => "ktk"
            ],
            [
                "id" => 2192,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Kayunga", "zh" => "卡永加"]),
                "code" => "kay"
            ],
            [
                "id" => 2193,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Kampala", "zh" => "坎帕拉"]),
                "code" => "kmp"
            ],
            [
                "id" => 2194,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Kotido", "zh" => "科蒂多"]),
                "code" => "kot"
            ],
            [
                "id" => 2195,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Kumi", "zh" => "库米"]),
                "code" => "kum"
            ],
            [
                "id" => 2196,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Rakai", "zh" => "拉卡伊"]),
                "code" => "rak"
            ],
            [
                "id" => 2197,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Lira", "zh" => "利拉"]),
                "code" => "lir"
            ],
            [
                "id" => 2198,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Luwero", "zh" => "卢韦罗"]),
                "code" => "luw"
            ],
            [
                "id" => 2199,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Rukungiri", "zh" => "鲁昆吉里"]),
                "code" => "ruk"
            ],
            [
                "id" => 2200,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Masaka", "zh" => "马萨卡"]),
                "code" => "mas"
            ],
            [
                "id" => 2201,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Masindi", "zh" => "马辛迪"]),
                "code" => "msn"
            ],
            [
                "id" => 2202,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Mayuge", "zh" => "马尤盖"]),
                "code" => "may"
            ],
            [
                "id" => 2203,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Moroto", "zh" => "莫罗托"]),
                "code" => "mrt"
            ],
            [
                "id" => 2204,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Moyo", "zh" => "莫约"]),
                "code" => "moy"
            ],
            [
                "id" => 2205,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Mbarara", "zh" => "姆巴拉拉"]),
                "code" => "mbr"
            ],
            [
                "id" => 2206,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Mbale", "zh" => "姆巴莱"]),
                "code" => "mba"
            ],
            [
                "id" => 2207,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Mpigi", "zh" => "姆皮吉"]),
                "code" => "mpi"
            ],
            [
                "id" => 2208,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Mubende", "zh" => "穆本德"]),
                "code" => "mub"
            ],
            [
                "id" => 2209,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Mukono", "zh" => "穆科诺"]),
                "code" => "muk"
            ],
            [
                "id" => 2210,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Nakapiripirit", "zh" => "纳卡皮里皮里特"]),
                "code" => "nak"
            ],
            [
                "id" => 2211,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Nakasongola", "zh" => "纳卡松戈拉"]),
                "code" => "nks"
            ],
            [
                "id" => 2212,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Nebbi", "zh" => "内比"]),
                "code" => "neb"
            ],
            [
                "id" => 2213,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Pader", "zh" => "帕德尔"]),
                "code" => "pad"
            ],
            [
                "id" => 2214,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Pallisa", "zh" => "帕利萨"]),
                "code" => "pal"
            ],
            [
                "id" => 2215,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Sembabule", "zh" => "森巴布莱"]),
                "code" => "sem"
            ],
            [
                "id" => 2216,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Soroti", "zh" => "索罗提"]),
                "code" => "sor"
            ],
            [
                "id" => 2217,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Tororo", "zh" => "托罗罗"]),
                "code" => "tor"
            ],
            [
                "id" => 2218,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Wakiso", "zh" => "瓦基索"]),
                "code" => "wak"
            ],
            [
                "id" => 2219,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Sironko", "zh" => "锡龙科"]),
                "code" => "sir"
            ],
            [
                "id" => 2220,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Iganga", "zh" => "伊甘加"]),
                "code" => "iga"
            ],
            [
                "id" => 2221,
                "country_id" => 24,
                "state_id" => null,
                "name" => json_encode(["en" => "Yumbe", "zh" => "永贝"]),
                "code" => "yum"
            ],
            [
                "id" => 2222,
                "country_id" => 120,
                "state_id" => null,
                "name" => json_encode(["en" => "Odessa", "zh" => "敖德萨"]),
                "code" => "51"
            ],
            [
                "id" => 2223,
                "country_id" => 120,
                "state_id" => null,
                "name" => json_encode(["en" => "Poltava", "zh" => "波尔塔瓦"]),
                "code" => "53"
            ],
            [
                "id" => 2224,
                "country_id" => 120,
                "state_id" => null,
                "name" => json_encode(["en" => "Dnipropetrovsk", "zh" => "第聂伯罗波得罗夫斯克"]),
                "code" => "12"
            ],
            [
                "id" => 2225,
                "country_id" => 120,
                "state_id" => null,
                "name" => json_encode(["en" => "Donetsk", "zh" => "顿涅茨克"]),
                "code" => "14"
            ],
            [
                "id" => 2226,
                "country_id" => 120,
                "state_id" => null,
                "name" => json_encode(["en" => "Kharkiv", "zh" => "哈尔科夫"]),
                "code" => "63"
            ],
            [
                "id" => 2227,
                "country_id" => 120,
                "state_id" => null,
                "name" => json_encode(["en" => "Khersonsrka", "zh" => "赫尔松州"]),
                "code" => "65"
            ],
            [
                "id" => 2228,
                "country_id" => 120,
                "state_id" => null,
                "name" => json_encode(["en" => "Khmelnytsky", "zh" => "赫梅利尼茨基"]),
                "code" => "68"
            ],
            [
                "id" => 2229,
                "country_id" => 120,
                "state_id" => null,
                "name" => json_encode(["en" => "Kyiv", "zh" => "基辅"]),
                "code" => "30"
            ],
            [
                "id" => 2230,
                "country_id" => 120,
                "state_id" => null,
                "name" => json_encode(["en" => "Kirovohrad", "zh" => "基洛夫格勒"]),
                "code" => "35"
            ],
            [
                "id" => 2231,
                "country_id" => 120,
                "state_id" => null,
                "name" => json_encode(["en" => "Ternopil", "zh" => "捷尔诺波尔"]),
                "code" => "61"
            ],
            [
                "id" => 2232,
                "country_id" => 120,
                "state_id" => null,
                "name" => json_encode(["en" => "Respublika Krym", "zh" => "克里米亚自治共和国"]),
                "code" => "43"
            ],
            [
                "id" => 2233,
                "country_id" => 120,
                "state_id" => null,
                "name" => json_encode(["en" => "Lviv", "zh" => "利沃夫"]),
                "code" => "46"
            ],
            [
                "id" => 2234,
                "country_id" => 120,
                "state_id" => null,
                "name" => json_encode(["en" => "Luhansk", "zh" => "卢甘斯克"]),
                "code" => "9"
            ],
            [
                "id" => 2235,
                "country_id" => 120,
                "state_id" => null,
                "name" => json_encode(["en" => "Rivne", "zh" => "罗夫诺"]),
                "code" => "56"
            ],
            [
                "id" => 2236,
                "country_id" => 120,
                "state_id" => null,
                "name" => json_encode(["en" => "Mykolayiv", "zh" => "尼古拉耶夫"]),
                "code" => "48"
            ],
            [
                "id" => 2237,
                "country_id" => 120,
                "state_id" => null,
                "name" => json_encode(["en" => "Cherkasy", "zh" => "切尔卡瑟"]),
                "code" => "71"
            ],
            [
                "id" => 2238,
                "country_id" => 120,
                "state_id" => null,
                "name" => json_encode(["en" => "Chernihiv", "zh" => "切尔尼戈夫"]),
                "code" => "74"
            ],
            [
                "id" => 2239,
                "country_id" => 120,
                "state_id" => null,
                "name" => json_encode(["en" => "Chernivtsi", "zh" => "切尔诺夫策"]),
                "code" => "77"
            ],
            [
                "id" => 2240,
                "country_id" => 120,
                "state_id" => null,
                "name" => json_encode(["en" => "Zhytomyr", "zh" => "日托米尔"]),
                "code" => "18"
            ],
            [
                "id" => 2241,
                "country_id" => 120,
                "state_id" => null,
                "name" => json_encode(["en" => "Sumy", "zh" => "苏梅"]),
                "code" => "59"
            ],
            [
                "id" => 2242,
                "country_id" => 120,
                "state_id" => null,
                "name" => json_encode(["en" => "Zakarpatska", "zh" => "外喀尔巴阡"]),
                "code" => "21"
            ],
            [
                "id" => 2243,
                "country_id" => 120,
                "state_id" => null,
                "name" => json_encode(["en" => "Vinnytsya", "zh" => "文尼察"]),
                "code" => "5"
            ],
            [
                "id" => 2244,
                "country_id" => 120,
                "state_id" => null,
                "name" => json_encode(["en" => "Volyn", "zh" => "沃伦"]),
                "code" => "7"
            ],
            [
                "id" => 2245,
                "country_id" => 120,
                "state_id" => null,
                "name" => json_encode(["en" => "Ivano-Frankivsk", "zh" => "伊万－弗兰科夫州"]),
                "code" => "26"
            ],
            [
                "id" => 2246,
                "country_id" => 120,
                "state_id" => null,
                "name" => json_encode(["en" => "Zaporizhzhya", "zh" => "扎波罗热"]),
                "code" => "23"
            ],
            [
                "id" => 2247,
                "country_id" => 193,
                "state_id" => null,
                "name" => json_encode(["en" => "Artigas", "zh" => "阿蒂加斯"]),
                "code" => "ar"
            ],
            [
                "id" => 2248,
                "country_id" => 193,
                "state_id" => null,
                "name" => json_encode(["en" => "Durazno", "zh" => "杜拉斯诺"]),
                "code" => "du"
            ],
            [
                "id" => 2249,
                "country_id" => 193,
                "state_id" => null,
                "name" => json_encode(["en" => "Florida", "zh" => "佛罗里达"]),
                "code" => "fa"
            ],
            [
                "id" => 2250,
                "country_id" => 193,
                "state_id" => null,
                "name" => json_encode(["en" => "Flores", "zh" => "弗洛雷斯"]),
                "code" => "fs"
            ],
            [
                "id" => 2251,
                "country_id" => 193,
                "state_id" => null,
                "name" => json_encode(["en" => "Canelones", "zh" => "卡内洛内斯"]),
                "code" => "ca"
            ],
            [
                "id" => 2252,
                "country_id" => 193,
                "state_id" => null,
                "name" => json_encode(["en" => "Colonia", "zh" => "科洛尼亚"]),
                "code" => "co"
            ],
            [
                "id" => 2253,
                "country_id" => 193,
                "state_id" => null,
                "name" => json_encode(["en" => "Lavalleja", "zh" => "拉瓦耶哈"]),
                "code" => "la"
            ],
            [
                "id" => 2254,
                "country_id" => 193,
                "state_id" => null,
                "name" => json_encode(["en" => "Rivera", "zh" => "里韦拉"]),
                "code" => "rv"
            ],
            [
                "id" => 2255,
                "country_id" => 193,
                "state_id" => null,
                "name" => json_encode(["en" => "Rocha", "zh" => "罗恰"]),
                "code" => "ro"
            ],
            [
                "id" => 2256,
                "country_id" => 193,
                "state_id" => null,
                "name" => json_encode(["en" => "Maldonado", "zh" => "马尔多纳多"]),
                "code" => "ma"
            ],
            [
                "id" => 2257,
                "country_id" => 193,
                "state_id" => null,
                "name" => json_encode(["en" => "Montevideo", "zh" => "蒙得维的亚"]),
                "code" => "mo"
            ],
            [
                "id" => 2258,
                "country_id" => 193,
                "state_id" => null,
                "name" => json_encode(["en" => "Rio Negro", "zh" => "内格罗河"]),
                "code" => "rn"
            ],
            [
                "id" => 2259,
                "country_id" => 193,
                "state_id" => null,
                "name" => json_encode(["en" => "Paysandu", "zh" => "派桑杜"]),
                "code" => "pa"
            ],
            [
                "id" => 2260,
                "country_id" => 193,
                "state_id" => null,
                "name" => json_encode(["en" => "Salto", "zh" => "萨尔托"]),
                "code" => "sl"
            ],
            [
                "id" => 2261,
                "country_id" => 193,
                "state_id" => null,
                "name" => json_encode(["en" => "Cerro Largo", "zh" => "塞罗拉尔戈"]),
                "code" => "cl"
            ],
            [
                "id" => 2262,
                "country_id" => 193,
                "state_id" => null,
                "name" => json_encode(["en" => "Treinta y Tres", "zh" => "三十三人"]),
                "code" => "tt"
            ],
            [
                "id" => 2263,
                "country_id" => 193,
                "state_id" => null,
                "name" => json_encode(["en" => "San Jose", "zh" => "圣何塞"]),
                "code" => "sj"
            ],
            [
                "id" => 2264,
                "country_id" => 193,
                "state_id" => null,
                "name" => json_encode(["en" => "Soriano", "zh" => "索里亚诺"]),
                "code" => "so"
            ],
            [
                "id" => 2265,
                "country_id" => 193,
                "state_id" => null,
                "name" => json_encode(["en" => "Tacuarembo", "zh" => "塔夸伦博"]),
                "code" => "taw"
            ],
            [
                "id" => 2266,
                "country_id" => 60,
                "state_id" => null,
                "name" => json_encode(["en" => "Andijon", "zh" => "安集延"]),
                "code" => "an"
            ],
            [
                "id" => 2267,
                "country_id" => 60,
                "state_id" => null,
                "name" => json_encode(["en" => "Buxoro", "zh" => "布哈拉"]),
                "code" => "bu"
            ],
            [
                "id" => 2268,
                "country_id" => 60,
                "state_id" => null,
                "name" => json_encode(["en" => "Fargona", "zh" => "费尔干纳"]),
                "code" => "fa"
            ],
            [
                "id" => 2269,
                "country_id" => 60,
                "state_id" => null,
                "name" => json_encode(["en" => "Xorazm", "zh" => "花拉子模"]),
                "code" => "xo"
            ],
            [
                "id" => 2270,
                "country_id" => 60,
                "state_id" => null,
                "name" => json_encode(["en" => "Jizzax", "zh" => "吉扎克"]),
                "code" => "ji"
            ],
            [
                "id" => 2271,
                "country_id" => 60,
                "state_id" => null,
                "name" => json_encode(["en" => "Qoraqalpogiston", "zh" => "卡拉卡尔帕克斯坦共和国"]),
                "code" => "qr"
            ],
            [
                "id" => 2272,
                "country_id" => 60,
                "state_id" => null,
                "name" => json_encode(["en" => "Qasqadaryo", "zh" => "卡什卡达里亚"]),
                "code" => "qa"
            ],
            [
                "id" => 2273,
                "country_id" => 60,
                "state_id" => null,
                "name" => json_encode(["en" => "Namangan", "zh" => "纳曼干"]),
                "code" => "ng"
            ],
            [
                "id" => 2274,
                "country_id" => 60,
                "state_id" => null,
                "name" => json_encode(["en" => "Navoiy", "zh" => "纳沃伊"]),
                "code" => "nw"
            ],
            [
                "id" => 2275,
                "country_id" => 60,
                "state_id" => null,
                "name" => json_encode(["en" => "Samarqand", "zh" => "撒马尔罕"]),
                "code" => "sa"
            ],
            [
                "id" => 2276,
                "country_id" => 60,
                "state_id" => null,
                "name" => json_encode(["en" => "Surxondaryo", "zh" => "苏尔汉河"]),
                "code" => "su"
            ],
            [
                "id" => 2277,
                "country_id" => 60,
                "state_id" => null,
                "name" => json_encode(["en" => "Toshkent", "zh" => "塔什干"]),
                "code" => "tk"
            ],
            [
                "id" => 2278,
                "country_id" => 60,
                "state_id" => null,
                "name" => json_encode(["en" => "Toshkent Shahri", "zh" => "塔什干市"]),
                "code" => "to"
            ],
            [
                "id" => 2279,
                "country_id" => 60,
                "state_id" => null,
                "name" => json_encode(["en" => "Sirdaryo", "zh" => "锡尔河"]),
                "code" => "si"
            ],
            [
                "id" => 2280,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Almeria", "zh" => "阿尔梅里亚"]),
                "code" => "lei"
            ],
            [
                "id" => 2281,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Albacete", "zh" => "阿尔瓦塞特"]),
                "code" => "alb"
            ],
            [
                "id" => 2282,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Alava", "zh" => "阿拉瓦"]),
                "code" => "ala"
            ],
            [
                "id" => 2283,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Alicante", "zh" => "阿利坎特"]),
                "code" => "alc"
            ],
            [
                "id" => 2284,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Asturias", "zh" => "阿斯图利亚斯"]),
                "code" => "ast"
            ],
            [
                "id" => 2285,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Avila", "zh" => "阿维拉"]),
                "code" => "avi"
            ],
            [
                "id" => 2286,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Orense", "zh" => "奥伦塞"]),
                "code" => "ore"
            ],
            [
                "id" => 2287,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Badajoz", "zh" => "巴达霍斯"]),
                "code" => "bjz"
            ],
            [
                "id" => 2288,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Baleares", "zh" => "巴利阿里"]),
                "code" => "blr"
            ],
            [
                "id" => 2289,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Valladolid", "zh" => "巴利亚多利德"]),
                "code" => "vll"
            ],
            [
                "id" => 2290,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Valencia", "zh" => "巴伦西亚"]),
                "code" => "vlc"
            ],
            [
                "id" => 2291,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Barcelona", "zh" => "巴塞罗那"]),
                "code" => "bcn"
            ],
            [
                "id" => 2292,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Vizcaya", "zh" => "比斯开"]),
                "code" => "vse"
            ],
            [
                "id" => 2293,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Burgos", "zh" => "布尔戈斯"]),
                "code" => "bur"
            ],
            [
                "id" => 2294,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Granada", "zh" => "格拉纳达"]),
                "code" => "grx"
            ],
            [
                "id" => 2295,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Guadalajara", "zh" => "瓜达拉哈拉"]),
                "code" => "gua"
            ],
            [
                "id" => 2296,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Jaen", "zh" => "哈恩"]),
                "code" => "jae"
            ],
            [
                "id" => 2297,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Gerona", "zh" => "赫罗纳"]),
                "code" => "gro"
            ],
            [
                "id" => 2298,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Guipuzcoa", "zh" => "吉普斯夸"]),
                "code" => "gui"
            ],
            [
                "id" => 2299,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Cadiz", "zh" => "加的斯"]),
                "code" => "cad"
            ],
            [
                "id" => 2300,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Caceres", "zh" => "卡塞雷斯"]),
                "code" => "ccs"
            ],
            [
                "id" => 2301,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Cludad Real", "zh" => "卡斯蒂利亚"]),
                "code" => "cir"
            ],
            [
                "id" => 2302,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Castellon", "zh" => "卡斯特利翁"]),
                "code" => "cas"
            ],
            [
                "id" => 2303,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Cordoba", "zh" => "科尔多瓦"]),
                "code" => "odb"
            ],
            [
                "id" => 2304,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Cuenca", "zh" => "昆卡"]),
                "code" => "cue"
            ],
            [
                "id" => 2305,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "La Coruna", "zh" => "拉科鲁尼亚"]),
                "code" => "lcg"
            ],
            [
                "id" => 2306,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "La Rioja", "zh" => "拉里奥哈"]),
                "code" => "arl"
            ],
            [
                "id" => 2307,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Las Palmas", "zh" => "拉斯帕尔马斯"]),
                "code" => "lpa"
            ],
            [
                "id" => 2308,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Leon", "zh" => "莱昂"]),
                "code" => "len"
            ],
            [
                "id" => 2309,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Lleida", "zh" => "莱里达"]),
                "code" => "lle"
            ],
            [
                "id" => 2310,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Provincia de Lugo", "zh" => "卢戈"]),
                "code" => "lgo"
            ],
            [
                "id" => 2311,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Madrid", "zh" => "马德里"]),
                "code" => "mad"
            ],
            [
                "id" => 2312,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Malaga", "zh" => "马拉加"]),
                "code" => "agp"
            ],
            [
                "id" => 2313,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Murcia", "zh" => "穆尔西亚"]),
                "code" => "mjv"
            ],
            [
                "id" => 2314,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Navarra", "zh" => "纳瓦拉"]),
                "code" => "nvv"
            ],
            [
                "id" => 2315,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Palencia", "zh" => "帕伦西亚"]),
                "code" => "pac"
            ],
            [
                "id" => 2316,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Provincia de Pontevedra", "zh" => "蓬特韦德拉"]),
                "code" => "pev"
            ],
            [
                "id" => 2317,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Zaragoza", "zh" => "萨拉戈萨"]),
                "code" => "zaz"
            ],
            [
                "id" => 2318,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Salamanca", "zh" => "萨拉曼卡"]),
                "code" => "slm"
            ],
            [
                "id" => 2319,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Zamora", "zh" => "萨莫拉"]),
                "code" => "zmr"
            ],
            [
                "id" => 2320,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Segovia", "zh" => "塞哥维亚"]),
                "code" => "seg"
            ],
            [
                "id" => 2321,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Sevilla", "zh" => "塞维利亚"]),
                "code" => "svq"
            ],
            [
                "id" => 2322,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Santander", "zh" => "桑坦德"]),
                "code" => "sdr"
            ],
            [
                "id" => 2323,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Santa Cruz de Tenerife", "zh" => "圣克鲁斯-德特内里费"]),
                "code" => "sct"
            ],
            [
                "id" => 2324,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Soria", "zh" => "索里亚"]),
                "code" => "sor"
            ],
            [
                "id" => 2325,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Tarragona", "zh" => "塔拉戈纳"]),
                "code" => "tar"
            ],
            [
                "id" => 2326,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Teruel", "zh" => "特鲁埃尔"]),
                "code" => "ter"
            ],
            [
                "id" => 2327,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Toledo", "zh" => "托莱多"]),
                "code" => "tol"
            ],
            [
                "id" => 2328,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Huelva", "zh" => "韦尔瓦"]),
                "code" => "huv"
            ],
            [
                "id" => 2329,
                "country_id" => 155,
                "state_id" => null,
                "name" => json_encode(["en" => "Huesca", "zh" => "韦斯卡"]),
                "code" => "huc"
            ],
            [
                "id" => 2330,
                "country_id" => 143,
                "state_id" => null,
                "name" => json_encode(["en" => "Peiraievs", "zh" => "比雷埃夫斯"]),
                "code" => "pri"
            ],
            [
                "id" => 2331,
                "country_id" => 143,
                "state_id" => null,
                "name" => json_encode(["en" => "Dodecanese", "zh" => "多德卡尼斯"]),
                "code" => "do"
            ],
            [
                "id" => 2332,
                "country_id" => 143,
                "state_id" => null,
                "name" => json_encode(["en" => "Chanion", "zh" => "干尼亚"]),
                "code" => "chq"
            ],
            [
                "id" => 2333,
                "country_id" => 143,
                "state_id" => null,
                "name" => json_encode(["en" => "Cyclades", "zh" => "基克拉迪"]),
                "code" => "cy"
            ],
            [
                "id" => 2334,
                "country_id" => 143,
                "state_id" => null,
                "name" => json_encode(["en" => "Lasithiou", "zh" => "拉西锡"]),
                "code" => "lst"
            ],
            [
                "id" => 2335,
                "country_id" => 143,
                "state_id" => null,
                "name" => json_encode(["en" => "Lesbos", "zh" => "莱斯博斯"]),
                "code" => "les"
            ],
            [
                "id" => 2336,
                "country_id" => 143,
                "state_id" => null,
                "name" => json_encode(["en" => "Rethymnis", "zh" => "雷西姆农"]),
                "code" => "ret"
            ],
            [
                "id" => 2337,
                "country_id" => 143,
                "state_id" => null,
                "name" => json_encode(["en" => "Samos", "zh" => "萨摩斯"]),
                "code" => "smi"
            ],
            [
                "id" => 2338,
                "country_id" => 143,
                "state_id" => null,
                "name" => json_encode(["en" => "Athens", "zh" => "雅典"]),
                "code" => "ath"
            ],
            [
                "id" => 2339,
                "country_id" => 143,
                "state_id" => null,
                "name" => json_encode(["en" => "Irakleiou", "zh" => "伊拉克里翁"]),
                "code" => "her"
            ],
            [
                "id" => 2340,
                "country_id" => 182,
                "state_id" => null,
                "name" => json_encode(["en" => "Auckland", "zh" => "奥克兰"]),
                "code" => "auk"
            ],
            [
                "id" => 2341,
                "country_id" => 182,
                "state_id" => null,
                "name" => json_encode(["en" => "North Shore", "zh" => "北岸"]),
                "code" => "nsh"
            ],
            [
                "id" => 2342,
                "country_id" => 182,
                "state_id" => null,
                "name" => json_encode(["en" => "Palmerston North", "zh" => "北帕默斯顿"]),
                "code" => "pmr"
            ],
            [
                "id" => 2343,
                "country_id" => 182,
                "state_id" => null,
                "name" => json_encode(["en" => "Far North", "zh" => "北远"]),
                "code" => "fnr"
            ],
            [
                "id" => 2344,
                "country_id" => 182,
                "state_id" => null,
                "name" => json_encode(["en" => "Blenheim", "zh" => "布莱尼姆"]),
                "code" => "bhe"
            ],
            [
                "id" => 2345,
                "country_id" => 182,
                "state_id" => null,
                "name" => json_encode(["en" => "Dunedin", "zh" => "达尼丁"]),
                "code" => "dud"
            ],
            [
                "id" => 2346,
                "country_id" => 182,
                "state_id" => null,
                "name" => json_encode(["en" => "Greymouth", "zh" => "格雷茅斯"]),
                "code" => "gmn"
            ],
            [
                "id" => 2347,
                "country_id" => 182,
                "state_id" => null,
                "name" => json_encode(["en" => "Hamilton", "zh" => "哈密尔顿"]),
                "code" => "hlz"
            ],
            [
                "id" => 2348,
                "country_id" => 182,
                "state_id" => null,
                "name" => json_encode(["en" => "Hastings", "zh" => "黑斯廷斯"]),
                "code" => "has"
            ],
            [
                "id" => 2349,
                "country_id" => 182,
                "state_id" => null,
                "name" => json_encode(["en" => "Waitakere", "zh" => "怀塔科拉"]),
                "code" => "wae"
            ],
            [
                "id" => 2350,
                "country_id" => 182,
                "state_id" => null,
                "name" => json_encode(["en" => "Gisborne", "zh" => "吉斯伯恩"]),
                "code" => "gis"
            ],
            [
                "id" => 2351,
                "country_id" => 182,
                "state_id" => null,
                "name" => json_encode(["en" => "Kaipara", "zh" => "凯帕拉"]),
                "code" => "kai"
            ],
            [
                "id" => 2352,
                "country_id" => 182,
                "state_id" => null,
                "name" => json_encode(["en" => "Christchurch", "zh" => "克赖斯特彻奇"]),
                "code" => "chc"
            ],
            [
                "id" => 2353,
                "country_id" => 182,
                "state_id" => null,
                "name" => json_encode(["en" => "Richmond", "zh" => "里士满"]),
                "code" => "rmd"
            ],
            [
                "id" => 2354,
                "country_id" => 182,
                "state_id" => null,
                "name" => json_encode(["en" => "Manukau", "zh" => "马努考"]),
                "code" => "mnk"
            ],
            [
                "id" => 2355,
                "country_id" => 182,
                "state_id" => null,
                "name" => json_encode(["en" => "Nelson", "zh" => "纳尔逊"]),
                "code" => "nsn"
            ],
            [
                "id" => 2356,
                "country_id" => 182,
                "state_id" => null,
                "name" => json_encode(["en" => "Napier", "zh" => "内皮尔"]),
                "code" => "npe"
            ],
            [
                "id" => 2357,
                "country_id" => 182,
                "state_id" => null,
                "name" => json_encode(["en" => "Stratford", "zh" => "斯特拉特福德"]),
                "code" => "str"
            ],
            [
                "id" => 2358,
                "country_id" => 182,
                "state_id" => null,
                "name" => json_encode(["en" => "Taumarunui", "zh" => "陶马鲁努伊"]),
                "code" => "tau"
            ],
            [
                "id" => 2359,
                "country_id" => 182,
                "state_id" => null,
                "name" => json_encode(["en" => "Whakatane", "zh" => "瓦卡塔尼"]),
                "code" => "whk"
            ],
            [
                "id" => 2360,
                "country_id" => 182,
                "state_id" => null,
                "name" => json_encode(["en" => "Whangarei", "zh" => "旺阿雷"]),
                "code" => "wre"
            ],
            [
                "id" => 2361,
                "country_id" => 182,
                "state_id" => null,
                "name" => json_encode(["en" => "Wanganui", "zh" => "旺格努伊"]),
                "code" => "wag"
            ],
            [
                "id" => 2362,
                "country_id" => 182,
                "state_id" => null,
                "name" => json_encode(["en" => "New Plymouth", "zh" => "新普利茅斯"]),
                "code" => "npl"
            ],
            [
                "id" => 2363,
                "country_id" => 182,
                "state_id" => null,
                "name" => json_encode(["en" => "Invercargill", "zh" => "因弗卡吉尔"]),
                "code" => "ivc"
            ],
            [
                "id" => 2364,
                "country_id" => 121,
                "state_id" => null,
                "name" => json_encode(["en" => "Baranya", "zh" => "巴兰尼亚"]),
                "code" => "ba"
            ],
            [
                "id" => 2365,
                "country_id" => 121,
                "state_id" => null,
                "name" => json_encode(["en" => "Bacs-Kiskun", "zh" => "巴奇-基什孔"]),
                "code" => "bk"
            ],
            [
                "id" => 2366,
                "country_id" => 121,
                "state_id" => null,
                "name" => json_encode(["en" => "Borsod-Abauj-Zemplen", "zh" => "包尔绍德-奥包乌伊-曾普伦"]),
                "code" => "bz"
            ],
            [
                "id" => 2367,
                "country_id" => 121,
                "state_id" => null,
                "name" => json_encode(["en" => "Bekes", "zh" => "贝凯什"]),
                "code" => "be"
            ],
            [
                "id" => 2368,
                "country_id" => 121,
                "state_id" => null,
                "name" => json_encode(["en" => "Budapest", "zh" => "布达佩斯"]),
                "code" => "bu"
            ],
            [
                "id" => 2369,
                "country_id" => 121,
                "state_id" => null,
                "name" => json_encode(["en" => "Fejer", "zh" => "费耶尔"]),
                "code" => "fe"
            ],
            [
                "id" => 2370,
                "country_id" => 121,
                "state_id" => null,
                "name" => json_encode(["en" => "Hajdu-Bihar", "zh" => "豪伊杜-比豪尔"]),
                "code" => "hb"
            ],
            [
                "id" => 2371,
                "country_id" => 121,
                "state_id" => null,
                "name" => json_encode(["en" => "Heves", "zh" => "赫维什"]),
                "code" => "he"
            ],
            [
                "id" => 2372,
                "country_id" => 121,
                "state_id" => null,
                "name" => json_encode(["en" => "Jasz-Nagykun-Szolnok", "zh" => "加兹-纳杰孔-索尔诺克"]),
                "code" => "jn"
            ],
            [
                "id" => 2373,
                "country_id" => 121,
                "state_id" => null,
                "name" => json_encode(["en" => "Gyor-Moson-Sopron", "zh" => "杰尔-莫松-肖普朗"]),
                "code" => "gs"
            ],
            [
                "id" => 2374,
                "country_id" => 121,
                "state_id" => null,
                "name" => json_encode(["en" => "Komarom-Esztergom", "zh" => "科马罗姆"]),
                "code" => "ke"
            ],
            [
                "id" => 2375,
                "country_id" => 121,
                "state_id" => null,
                "name" => json_encode(["en" => "Nograd", "zh" => "诺格拉德"]),
                "code" => "no"
            ],
            [
                "id" => 2376,
                "country_id" => 121,
                "state_id" => null,
                "name" => json_encode(["en" => "Pest", "zh" => "佩斯"]),
                "code" => "pe"
            ],
            [
                "id" => 2377,
                "country_id" => 121,
                "state_id" => null,
                "name" => json_encode(["en" => "Csongrad", "zh" => "琼格拉德"]),
                "code" => "cs"
            ],
            [
                "id" => 2378,
                "country_id" => 121,
                "state_id" => null,
                "name" => json_encode(["en" => "Somogy", "zh" => "绍莫吉"]),
                "code" => "so"
            ],
            [
                "id" => 2379,
                "country_id" => 121,
                "state_id" => null,
                "name" => json_encode(["en" => "Szabolcs-Szatmar-Bereg", "zh" => "索博尔奇-索特马尔-贝拉格"]),
                "code" => "sz"
            ],
            [
                "id" => 2380,
                "country_id" => 121,
                "state_id" => null,
                "name" => json_encode(["en" => "Tolna", "zh" => "托尔瑙"]),
                "code" => "to"
            ],
            [
                "id" => 2381,
                "country_id" => 121,
                "state_id" => null,
                "name" => json_encode(["en" => "Veszprem", "zh" => "维斯普雷姆"]),
                "code" => "ve"
            ],
            [
                "id" => 2382,
                "country_id" => 121,
                "state_id" => null,
                "name" => json_encode(["en" => "Vas", "zh" => "沃什"]),
                "code" => "va"
            ],
            [
                "id" => 2383,
                "country_id" => 121,
                "state_id" => null,
                "name" => json_encode(["en" => "Zala", "zh" => "佐洛"]),
                "code" => "za"
            ],
            [
                "id" => 2384,
                "country_id" => 59,
                "state_id" => null,
                "name" => json_encode(["en" => "Halab", "zh" => "阿勒颇"]),
                "code" => "hl"
            ],
            [
                "id" => 2385,
                "country_id" => 59,
                "state_id" => null,
                "name" => json_encode(["en" => "Rif Dimashq", "zh" => "大马士革"]),
                "code" => "rd"
            ],
            [
                "id" => 2386,
                "country_id" => 59,
                "state_id" => null,
                "name" => json_encode(["en" => "Madinat Dimashq", "zh" => "大马士革市"]),
                "code" => "di"
            ],
            [
                "id" => 2387,
                "country_id" => 59,
                "state_id" => null,
                "name" => json_encode(["en" => "Dayr az Zawr", "zh" => "代尔祖尔"]),
                "code" => "dz"
            ],
            [
                "id" => 2388,
                "country_id" => 59,
                "state_id" => null,
                "name" => json_encode(["en" => "Dara", "zh" => "德拉"]),
                "code" => "da"
            ],
            [
                "id" => 2389,
                "country_id" => 59,
                "state_id" => null,
                "name" => json_encode(["en" => "Hamah", "zh" => "哈马"]),
                "code" => "hm"
            ],
            [
                "id" => 2390,
                "country_id" => 59,
                "state_id" => null,
                "name" => json_encode(["en" => "Al Hasakah", "zh" => "哈塞克"]),
                "code" => "ha"
            ],
            [
                "id" => 2391,
                "country_id" => 59,
                "state_id" => null,
                "name" => json_encode(["en" => "Hims", "zh" => "霍姆斯"]),
                "code" => "hi"
            ],
            [
                "id" => 2392,
                "country_id" => 59,
                "state_id" => null,
                "name" => json_encode(["en" => "Al Ghab", "zh" => "加布"]),
                "code" => "gh"
            ],
            [
                "id" => 2393,
                "country_id" => 59,
                "state_id" => null,
                "name" => json_encode(["en" => "Al-Qamishli", "zh" => "卡米什利"]),
                "code" => "qa"
            ],
            [
                "id" => 2394,
                "country_id" => 59,
                "state_id" => null,
                "name" => json_encode(["en" => "Al Qunaytirah", "zh" => "库奈特拉"]),
                "code" => "qu"
            ],
            [
                "id" => 2395,
                "country_id" => 59,
                "state_id" => null,
                "name" => json_encode(["en" => "Ar Raqqah", "zh" => "拉卡"]),
                "code" => "rq"
            ],
            [
                "id" => 2396,
                "country_id" => 59,
                "state_id" => null,
                "name" => json_encode(["en" => "Al Ladhiqiyah", "zh" => "拉塔基亚"]),
                "code" => "la"
            ],
            [
                "id" => 2397,
                "country_id" => 59,
                "state_id" => null,
                "name" => json_encode(["en" => "As Suwayda", "zh" => "苏韦达"]),
                "code" => "su"
            ],
            [
                "id" => 2398,
                "country_id" => 59,
                "state_id" => null,
                "name" => json_encode(["en" => "Tartus", "zh" => "塔尔图斯"]),
                "code" => "ta"
            ],
            [
                "id" => 2399,
                "country_id" => 59,
                "state_id" => null,
                "name" => json_encode(["en" => "Idlib", "zh" => "伊德利卜"]),
                "code" => "id"
            ],
            [
                "id" => 2400,
                "country_id" => 202,
                "state_id" => null,
                "name" => json_encode(["en" => "Portland", "zh" => "波特兰"]),
                "code" => "por"
            ],
            [
                "id" => 2401,
                "country_id" => 202,
                "state_id" => null,
                "name" => json_encode(["en" => "Hanover", "zh" => "汉诺威"]),
                "code" => "han"
            ],
            [
                "id" => 2402,
                "country_id" => 202,
                "state_id" => null,
                "name" => json_encode(["en" => "Kingston", "zh" => "金斯敦"]),
                "code" => "kin"
            ],
            [
                "id" => 2403,
                "country_id" => 202,
                "state_id" => null,
                "name" => json_encode(["en" => "Clarendon", "zh" => "克拉伦登"]),
                "code" => "cla"
            ],
            [
                "id" => 2404,
                "country_id" => 202,
                "state_id" => null,
                "name" => json_encode(["en" => "Manchester", "zh" => "曼彻斯特"]),
                "code" => "man"
            ],
            [
                "id" => 2405,
                "country_id" => 202,
                "state_id" => null,
                "name" => json_encode(["en" => "St. Andrews", "zh" => "圣安德鲁斯"]),
                "code" => "and"
            ],
            [
                "id" => 2406,
                "country_id" => 202,
                "state_id" => null,
                "name" => json_encode(["en" => "St. Ann", "zh" => "圣安娜"]),
                "code" => "ann"
            ],
            [
                "id" => 2407,
                "country_id" => 202,
                "state_id" => null,
                "name" => json_encode(["en" => "St. Catherine", "zh" => "圣凯瑟琳"]),
                "code" => "cat"
            ],
            [
                "id" => 2408,
                "country_id" => 202,
                "state_id" => null,
                "name" => json_encode(["en" => "St. Mary", "zh" => "圣玛丽"]),
                "code" => "mar"
            ],
            [
                "id" => 2409,
                "country_id" => 202,
                "state_id" => null,
                "name" => json_encode(["en" => "St. Thomas", "zh" => "圣托马斯"]),
                "code" => "tho"
            ],
            [
                "id" => 2410,
                "country_id" => 202,
                "state_id" => null,
                "name" => json_encode(["en" => "St. Elizabeth", "zh" => "圣伊丽莎白"]),
                "code" => "eli"
            ],
            [
                "id" => 2411,
                "country_id" => 202,
                "state_id" => null,
                "name" => json_encode(["en" => "St. James", "zh" => "圣詹姆斯"]),
                "code" => "jam"
            ],
            [
                "id" => 2412,
                "country_id" => 202,
                "state_id" => null,
                "name" => json_encode(["en" => "Trelawny", "zh" => "特里洛尼"]),
                "code" => "trl"
            ],
            [
                "id" => 2413,
                "country_id" => 202,
                "state_id" => null,
                "name" => json_encode(["en" => "Westmoreland", "zh" => "西摩兰"]),
                "code" => "wml"
            ],
            [
                "id" => 2414,
                "country_id" => 116,
                "state_id" => null,
                "name" => json_encode(["en" => "Armavir", "zh" => "阿尔马维尔"]),
                "code" => "arm"
            ],
            [
                "id" => 2415,
                "country_id" => 116,
                "state_id" => null,
                "name" => json_encode(["en" => "Aragacotn", "zh" => "阿拉加措特恩"]),
                "code" => "agt"
            ],
            [
                "id" => 2416,
                "country_id" => 116,
                "state_id" => null,
                "name" => json_encode(["en" => "Ararat", "zh" => "阿拉拉特"]),
                "code" => "ara"
            ],
            [
                "id" => 2417,
                "country_id" => 116,
                "state_id" => null,
                "name" => json_encode(["en" => "Yerevan", "zh" => "埃里温市"]),
                "code" => "evn"
            ],
            [
                "id" => 2418,
                "country_id" => 116,
                "state_id" => null,
                "name" => json_encode(["en" => "Gelarkunik", "zh" => "格加尔库尼克"]),
                "code" => "geg"
            ],
            [
                "id" => 2419,
                "country_id" => 116,
                "state_id" => null,
                "name" => json_encode(["en" => "Kotayk", "zh" => "科泰克"]),
                "code" => "kot"
            ],
            [
                "id" => 2420,
                "country_id" => 116,
                "state_id" => null,
                "name" => json_encode(["en" => "Lorri", "zh" => "洛里"]),
                "code" => "lor"
            ],
            [
                "id" => 2421,
                "country_id" => 116,
                "state_id" => null,
                "name" => json_encode(["en" => "Tavus", "zh" => "塔武什"]),
                "code" => "tav"
            ],
            [
                "id" => 2422,
                "country_id" => 116,
                "state_id" => null,
                "name" => json_encode(["en" => "VayocJor", "zh" => "瓦约茨·佐尔"]),
                "code" => "vay"
            ],
            [
                "id" => 2423,
                "country_id" => 116,
                "state_id" => null,
                "name" => json_encode(["en" => "Shirak", "zh" => "希拉克"]),
                "code" => "shi"
            ],
            [
                "id" => 2424,
                "country_id" => 116,
                "state_id" => null,
                "name" => json_encode(["en" => "Syunik", "zh" => "休尼克"]),
                "code" => "syu"
            ],
            [
                "id" => 2425,
                "country_id" => 89,
                "state_id" => null,
                "name" => json_encode(["en" => "Abyan", "zh" => "阿比扬"]),
                "code" => "ab"
            ],
            [
                "id" => 2426,
                "country_id" => 89,
                "state_id" => null,
                "name" => json_encode(["en" => "Amran Sana", "zh" => "阿姆兰"]),
                "code" => "am"
            ],
            [
                "id" => 2427,
                "country_id" => 89,
                "state_id" => null,
                "name" => json_encode(["en" => "Al-Bayda", "zh" => "贝达"]),
                "code" => "ba"
            ],
            [
                "id" => 2428,
                "country_id" => 89,
                "state_id" => null,
                "name" => json_encode(["en" => "Ad-Dali", "zh" => "达利"]),
                "code" => "da"
            ],
            [
                "id" => 2429,
                "country_id" => 89,
                "state_id" => null,
                "name" => json_encode(["en" => "Hadramawt", "zh" => "哈德拉毛"]),
                "code" => "hd"
            ],
            [
                "id" => 2430,
                "country_id" => 89,
                "state_id" => null,
                "name" => json_encode(["en" => "Hajjah", "zh" => "哈杰"]),
                "code" => "hj"
            ],
            [
                "id" => 2431,
                "country_id" => 89,
                "state_id" => null,
                "name" => json_encode(["en" => "Al-Hudaydah", "zh" => "荷台达"]),
                "code" => "hu"
            ],
            [
                "id" => 2432,
                "country_id" => 89,
                "state_id" => null,
                "name" => json_encode(["en" => "Al-Jawf", "zh" => "焦夫"]),
                "code" => "ja"
            ],
            [
                "id" => 2433,
                "country_id" => 89,
                "state_id" => null,
                "name" => json_encode(["en" => "Lahij", "zh" => "拉赫季"]),
                "code" => "la"
            ],
            [
                "id" => 2434,
                "country_id" => 89,
                "state_id" => null,
                "name" => json_encode(["en" => "Marib", "zh" => "马里卜"]),
                "code" => "ma"
            ],
            [
                "id" => 2435,
                "country_id" => 89,
                "state_id" => null,
                "name" => json_encode(["en" => "Al-Mahrah", "zh" => "迈赫拉"]),
                "code" => "mr"
            ],
            [
                "id" => 2436,
                "country_id" => 89,
                "state_id" => null,
                "name" => json_encode(["en" => "Al-Mahwit", "zh" => "迈赫维特"]),
                "code" => "mw"
            ],
            [
                "id" => 2437,
                "country_id" => 89,
                "state_id" => null,
                "name" => json_encode(["en" => "Sadah", "zh" => "萨达"]),
                "code" => "sd"
            ],
            [
                "id" => 2438,
                "country_id" => 89,
                "state_id" => null,
                "name" => json_encode(["en" => "Sana", "zh" => "萨那"]),
                "code" => "sn"
            ],
            [
                "id" => 2439,
                "country_id" => 89,
                "state_id" => null,
                "name" => json_encode(["en" => "Seiyun", "zh" => "赛文"]),
                "code" => "gxf"
            ],
            [
                "id" => 2440,
                "country_id" => 89,
                "state_id" => null,
                "name" => json_encode(["en" => "Shabwah", "zh" => "舍卜沃"]),
                "code" => "sh"
            ],
            [
                "id" => 2441,
                "country_id" => 89,
                "state_id" => null,
                "name" => json_encode(["en" => "Taizz", "zh" => "塔伊兹"]),
                "code" => "ta"
            ],
            [
                "id" => 2442,
                "country_id" => 89,
                "state_id" => null,
                "name" => json_encode(["en" => "Ash-Shihr", "zh" => "希赫尔"]),
                "code" => "asr"
            ],
            [
                "id" => 2443,
                "country_id" => 89,
                "state_id" => null,
                "name" => json_encode(["en" => "Adan", "zh" => "亚丁"]),
                "code" => "ad"
            ],
            [
                "id" => 2444,
                "country_id" => 89,
                "state_id" => null,
                "name" => json_encode(["en" => "Ibb", "zh" => "伊卜"]),
                "code" => "ib"
            ],
            [
                "id" => 2445,
                "country_id" => 89,
                "state_id" => null,
                "name" => json_encode(["en" => "Dhamar", "zh" => "扎玛尔"]),
                "code" => "dh"
            ],
            [
                "id" => 2446,
                "country_id" => 82,
                "state_id" => null,
                "name" => json_encode(["en" => "Ashdod", "zh" => "阿什杜德"]),
                "code" => "ash"
            ],
            [
                "id" => 2447,
                "country_id" => 82,
                "state_id" => null,
                "name" => json_encode(["en" => "Beersheba", "zh" => "贝尔谢巴"]),
                "code" => "bev"
            ],
            [
                "id" => 2448,
                "country_id" => 82,
                "state_id" => null,
                "name" => json_encode(["en" => "Bat Yam", "zh" => "贝特雁"]),
                "code" => "bat"
            ],
            [
                "id" => 2449,
                "country_id" => 82,
                "state_id" => null,
                "name" => json_encode(["en" => "Haifa", "zh" => "海法"]),
                "code" => "hfa"
            ],
            [
                "id" => 2450,
                "country_id" => 82,
                "state_id" => null,
                "name" => json_encode(["en" => "Holon", "zh" => "霍隆"]),
                "code" => "hol"
            ],
            [
                "id" => 2451,
                "country_id" => 82,
                "state_id" => null,
                "name" => json_encode(["en" => "Netanya", "zh" => "内坦亚"]),
                "code" => "nat"
            ],
            [
                "id" => 2452,
                "country_id" => 82,
                "state_id" => null,
                "name" => json_encode(["en" => "Tel Aviv-Yafo", "zh" => "特拉维夫"]),
                "code" => "tlv"
            ],
            [
                "id" => 2453,
                "country_id" => 82,
                "state_id" => null,
                "name" => json_encode(["en" => "Jerusalem", "zh" => "耶路撒冷"]),
                "code" => "j"
            ],
            [
                "id" => 2454,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Asti", "zh" => "阿斯蒂"]),
                "code" => "ast"
            ],
            [
                "id" => 2455,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Ascoli Piceno", "zh" => "阿斯科利皮切诺"]),
                "code" => "asp"
            ],
            [
                "id" => 2456,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Ancona", "zh" => "安科纳"]),
                "code" => "aoi"
            ],
            [
                "id" => 2457,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Olbia-Tempio", "zh" => "奥尔比亚"]),
                "code" => "olb"
            ],
            [
                "id" => 2458,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Oristano", "zh" => "奥里斯塔诺"]),
                "code" => "qos"
            ],
            [
                "id" => 2459,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Aosta", "zh" => "奥斯塔"]),
                "code" => "aot"
            ],
            [
                "id" => 2460,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Palermo", "zh" => "巴勒莫"]),
                "code" => "pmo"
            ],
            [
                "id" => 2461,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Bari", "zh" => "巴里"]),
                "code" => "bri"
            ],
            [
                "id" => 2462,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Bergamo", "zh" => "贝加莫"]),
                "code" => "bgo"
            ],
            [
                "id" => 2463,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Benevento", "zh" => "贝内文托"]),
                "code" => "ben"
            ],
            [
                "id" => 2464,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Pisa", "zh" => "比萨"]),
                "code" => "psa"
            ],
            [
                "id" => 2465,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Pordenone", "zh" => "波代诺内"]),
                "code" => "prd"
            ],
            [
                "id" => 2466,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Potenza", "zh" => "波坦察"]),
                "code" => "qpo"
            ],
            [
                "id" => 2467,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Bologna", "zh" => "博洛尼亚"]),
                "code" => "blq"
            ],
            [
                "id" => 2468,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Biella", "zh" => "布拉"]),
                "code" => "bie"
            ],
            [
                "id" => 2469,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Brescia", "zh" => "布雷西亚"]),
                "code" => "brc"
            ],
            [
                "id" => 2470,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Brindisi", "zh" => "布林迪西"]),
                "code" => "bds"
            ],
            [
                "id" => 2471,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Trieste", "zh" => "的里雅斯特"]),
                "code" => "trs"
            ],
            [
                "id" => 2472,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Turin", "zh" => "都灵"]),
                "code" => "trn"
            ],
            [
                "id" => 2473,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Ferrara", "zh" => "费拉拉"]),
                "code" => "frr"
            ],
            [
                "id" => 2474,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Firenze", "zh" => "佛罗伦萨"]),
                "code" => "flr"
            ],
            [
                "id" => 2475,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Foggia", "zh" => "福贾"]),
                "code" => "fog"
            ],
            [
                "id" => 2476,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Cagliari", "zh" => "卡利亚里"]),
                "code" => "cag"
            ],
            [
                "id" => 2477,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Caserta", "zh" => "卡塞塔"]),
                "code" => "cst"
            ],
            [
                "id" => 2478,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Catania", "zh" => "卡塔尼亚"]),
                "code" => "cta"
            ],
            [
                "id" => 2479,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Catanzaro", "zh" => "卡坦扎罗"]),
                "code" => "qcz"
            ],
            [
                "id" => 2480,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Campobasso", "zh" => "坎波巴索"]),
                "code" => "cob"
            ],
            [
                "id" => 2481,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Como", "zh" => "科摩"]),
                "code" => "ciy"
            ],
            [
                "id" => 2482,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Cosenza", "zh" => "科森扎"]),
                "code" => "qcs"
            ],
            [
                "id" => 2483,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Crotone", "zh" => "克罗托内"]),
                "code" => "crv"
            ],
            [
                "id" => 2484,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Cuneo", "zh" => "库内奥"]),
                "code" => "cun"
            ],
            [
                "id" => 2485,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "L'Aquila", "zh" => "拉奎拉"]),
                "code" => "laq"
            ],
            [
                "id" => 2486,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "La Spezia", "zh" => "拉斯佩齐亚"]),
                "code" => "spe"
            ],
            [
                "id" => 2487,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Lecco", "zh" => "莱科"]),
                "code" => "lco"
            ],
            [
                "id" => 2488,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Lecce", "zh" => "莱切"]),
                "code" => "lcc"
            ],
            [
                "id" => 2489,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Reggio Emilia", "zh" => "雷焦艾米利亚"]),
                "code" => "rne"
            ],
            [
                "id" => 2490,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Reggio Calabria", "zh" => "雷焦卡拉布里亚"]),
                "code" => "reg"
            ],
            [
                "id" => 2491,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Livorno", "zh" => "里窝那"]),
                "code" => "liv"
            ],
            [
                "id" => 2492,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Roma", "zh" => "罗马"]),
                "code" => "rom"
            ],
            [
                "id" => 2493,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Massa-Carrara", "zh" => "马萨"]),
                "code" => "mcr"
            ],
            [
                "id" => 2494,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Matera", "zh" => "马泰拉"]),
                "code" => "mtr"
            ],
            [
                "id" => 2495,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Monza e Brianza", "zh" => "蒙扎"]),
                "code" => "mza"
            ],
            [
                "id" => 2496,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Milano", "zh" => "米兰"]),
                "code" => "mil"
            ],
            [
                "id" => 2497,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Modena", "zh" => "摩德纳"]),
                "code" => "mod"
            ],
            [
                "id" => 2498,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Messina", "zh" => "墨西拿"]),
                "code" => "msn"
            ],
            [
                "id" => 2499,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Naples", "zh" => "那不勒斯"]),
                "code" => "nap"
            ],
            [
                "id" => 2500,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Nuoro", "zh" => "努奥罗"]),
                "code" => "qnu"
            ],
            [
                "id" => 2501,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Novara", "zh" => "诺瓦拉"]),
                "code" => "nvr"
            ],
            [
                "id" => 2502,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Parma", "zh" => "帕尔马"]),
                "code" => "pmf"
            ],
            [
                "id" => 2503,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Pavia", "zh" => "帕维亚"]),
                "code" => "pav"
            ],
            [
                "id" => 2504,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Perugia", "zh" => "佩鲁贾"]),
                "code" => "peg"
            ],
            [
                "id" => 2505,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Genova", "zh" => "热那亚"]),
                "code" => "cax"
            ],
            [
                "id" => 2506,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Salerno", "zh" => "萨莱诺"]),
                "code" => "sal"
            ],
            [
                "id" => 2507,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Sassari", "zh" => "萨萨里"]),
                "code" => "qss"
            ],
            [
                "id" => 2508,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Savona", "zh" => "萨沃纳"]),
                "code" => "svn"
            ],
            [
                "id" => 2509,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Taranto", "zh" => "塔兰托"]),
                "code" => "tar"
            ],
            [
                "id" => 2510,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Trapani", "zh" => "特拉帕尼"]),
                "code" => "tps"
            ],
            [
                "id" => 2511,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Trento", "zh" => "特伦托"]),
                "code" => "trt"
            ],
            [
                "id" => 2512,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Venice", "zh" => "威尼斯"]),
                "code" => "vce"
            ],
            [
                "id" => 2513,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Vercelli", "zh" => "韦尔切利"]),
                "code" => "vrl"
            ],
            [
                "id" => 2514,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Viterbo", "zh" => "维泰博"]),
                "code" => "vit"
            ],
            [
                "id" => 2515,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Udine", "zh" => "乌迪内"]),
                "code" => "udn"
            ],
            [
                "id" => 2516,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Syracuse", "zh" => "锡拉库扎"]),
                "code" => "syr"
            ],
            [
                "id" => 2517,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Siena", "zh" => "锡耶纳"]),
                "code" => "sna"
            ],
            [
                "id" => 2518,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Alessandria", "zh" => "亚历山德里亚"]),
                "code" => "ale"
            ],
            [
                "id" => 2519,
                "country_id" => 151,
                "state_id" => null,
                "name" => json_encode(["en" => "Isernia", "zh" => "伊塞尔尼亚"]),
                "code" => "ise"
            ],
            [
                "id" => 2520,
                "country_id" => 85,
                "state_id" => null,
                "name" => json_encode(["en" => "Aizawl", "zh" => "艾藻尔"]),
                "code" => "ajl"
            ],
            [
                "id" => 2521,
                "country_id" => 85,
                "state_id" => null,
                "name" => json_encode(["en" => "Bangalore", "zh" => "班加罗尔"]),
                "code" => "blr"
            ],
            [
                "id" => 2522,
                "country_id" => 85,
                "state_id" => null,
                "name" => json_encode(["en" => "Pondicherry", "zh" => "本地治里"]),
                "code" => "pny"
            ],
            [
                "id" => 2523,
                "country_id" => 85,
                "state_id" => null,
                "name" => json_encode(["en" => "Bhopal", "zh" => "博帕尔"]),
                "code" => "bho"
            ],
            [
                "id" => 2524,
                "country_id" => 85,
                "state_id" => null,
                "name" => json_encode(["en" => "Bhubaneswar", "zh" => "布巴内斯瓦尔"]),
                "code" => "bbi"
            ],
            [
                "id" => 2525,
                "country_id" => 85,
                "state_id" => null,
                "name" => json_encode(["en" => "Chandigarh", "zh" => "昌迪加尔"]),
                "code" => "ixc"
            ],
            [
                "id" => 2526,
                "country_id" => 85,
                "state_id" => null,
                "name" => json_encode(["en" => "Daman", "zh" => "达曼"]),
                "code" => "dam"
            ],
            [
                "id" => 2527,
                "country_id" => 85,
                "state_id" => null,
                "name" => json_encode(["en" => "Diu", "zh" => "第乌"]),
                "code" => "diu"
            ],
            [
                "id" => 2528,
                "country_id" => 85,
                "state_id" => null,
                "name" => json_encode(["en" => "Gangtok", "zh" => "甘托克"]),
                "code" => "gto"
            ],
            [
                "id" => 2529,
                "country_id" => 85,
                "state_id" => null,
                "name" => json_encode(["en" => "Coimbatore", "zh" => "哥印拜陀"]),
                "code" => "cjb"
            ],
            [
                "id" => 2530,
                "country_id" => 85,
                "state_id" => null,
                "name" => json_encode(["en" => "Calcutta", "zh" => "加尔各答"]),
                "code" => "ccu"
            ],
            [
                "id" => 2531,
                "country_id" => 85,
                "state_id" => null,
                "name" => json_encode(["en" => "Karaikal", "zh" => "加里加尔"]),
                "code" => "krk"
            ],
            [
                "id" => 2532,
                "country_id" => 85,
                "state_id" => null,
                "name" => json_encode(["en" => "Jabalpur", "zh" => "贾巴尔普尔"]),
                "code" => "jlr"
            ],
            [
                "id" => 2533,
                "country_id" => 85,
                "state_id" => null,
                "name" => json_encode(["en" => "Jalandhar", "zh" => "贾朗达尔"]),
                "code" => "juc"
            ],
            [
                "id" => 2534,
                "country_id" => 85,
                "state_id" => null,
                "name" => json_encode(["en" => "Jodhpur", "zh" => "焦特布尔"]),
                "code" => "jdh"
            ],
            [
                "id" => 2535,
                "country_id" => 85,
                "state_id" => null,
                "name" => json_encode(["en" => "Chennai", "zh" => "金奈"]),
                "code" => "maa"
            ],
            [
                "id" => 2536,
                "country_id" => 85,
                "state_id" => null,
                "name" => json_encode(["en" => "Kavaratti", "zh" => "卡瓦拉蒂"]),
                "code" => "kva"
            ],
            [
                "id" => 2537,
                "country_id" => 85,
                "state_id" => null,
                "name" => json_encode(["en" => "Kohima", "zh" => "科希马"]),
                "code" => "kom"
            ],
            [
                "id" => 2538,
                "country_id" => 85,
                "state_id" => null,
                "name" => json_encode(["en" => "Mahe", "zh" => "马埃"]),
                "code" => "mah"
            ],
            [
                "id" => 2539,
                "country_id" => 85,
                "state_id" => null,
                "name" => json_encode(["en" => "Madurai", "zh" => "马杜赖"]),
                "code" => "ixm"
            ],
            [
                "id" => 2540,
                "country_id" => 85,
                "state_id" => null,
                "name" => json_encode(["en" => "Sambalpur", "zh" => "森伯尔布尔"]),
                "code" => "slr"
            ],
            [
                "id" => 2541,
                "country_id" => 85,
                "state_id" => null,
                "name" => json_encode(["en" => "Trivandrum", "zh" => "特里凡得琅"]),
                "code" => "trv"
            ],
            [
                "id" => 2542,
                "country_id" => 85,
                "state_id" => null,
                "name" => json_encode(["en" => "Udaipur", "zh" => "乌代布尔"]),
                "code" => "udr"
            ],
            [
                "id" => 2543,
                "country_id" => 85,
                "state_id" => null,
                "name" => json_encode(["en" => "Shillong", "zh" => "西隆"]),
                "code" => "shl"
            ],
            [
                "id" => 2544,
                "country_id" => 85,
                "state_id" => null,
                "name" => json_encode(["en" => "Silvassa", "zh" => "锡尔萨瓦"]),
                "code" => "sil"
            ],
            [
                "id" => 2545,
                "country_id" => 85,
                "state_id" => null,
                "name" => json_encode(["en" => "New Delhi", "zh" => "新德里"]),
                "code" => "icd"
            ],
            [
                "id" => 2546,
                "country_id" => 85,
                "state_id" => null,
                "name" => json_encode(["en" => "Yanam", "zh" => "亚南"]),
                "code" => "srv"
            ],
            [
                "id" => 2547,
                "country_id" => 85,
                "state_id" => null,
                "name" => json_encode(["en" => "Imphal", "zh" => "因帕尔"]),
                "code" => "imf"
            ],
            [
                "id" => 2548,
                "country_id" => 85,
                "state_id" => null,
                "name" => json_encode(["en" => "Indore", "zh" => "印多尔"]),
                "code" => "idr"
            ],
            [
                "id" => 2549,
                "country_id" => 85,
                "state_id" => null,
                "name" => json_encode(["en" => "Jaipur", "zh" => "斋普尔"]),
                "code" => "jai"
            ],
            [
                "id" => 2550,
                "country_id" => 81,
                "state_id" => null,
                "name" => json_encode(["en" => "Bali", "zh" => "巴厘"]),
                "code" => "ba"
            ],
            [
                "id" => 2551,
                "country_id" => 81,
                "state_id" => null,
                "name" => json_encode(["en" => "Kepulauan Bangka Belitung", "zh" => "邦加－勿里洞群岛"]),
                "code" => "bb"
            ],
            [
                "id" => 2552,
                "country_id" => 81,
                "state_id" => null,
                "name" => json_encode(["en" => "Sulawesi Utara", "zh" => "北苏拉威西"]),
                "code" => "sa"
            ],
            [
                "id" => 2553,
                "country_id" => 81,
                "state_id" => null,
                "name" => json_encode(["en" => "Sumatera Utara", "zh" => "北苏门答腊"]),
                "code" => "su"
            ],
            [
                "id" => 2554,
                "country_id" => 81,
                "state_id" => null,
                "name" => json_encode(["en" => "Daerah Tingkat I Kalimantan Barat", "zh" => "大雅加达首都特区"]),
                "code" => "kb"
            ],
            [
                "id" => 2555,
                "country_id" => 81,
                "state_id" => null,
                "name" => json_encode(["en" => "Kalimantan Timur", "zh" => "东加里曼丹"]),
                "code" => "ki"
            ],
            [
                "id" => 2556,
                "country_id" => 81,
                "state_id" => null,
                "name" => json_encode(["en" => "Sulawesi Tenggara", "zh" => "东南苏拉威西"]),
                "code" => "sg"
            ],
            [
                "id" => 2557,
                "country_id" => 81,
                "state_id" => null,
                "name" => json_encode(["en" => "Nusa Tenggara Timur", "zh" => "东努沙登加拉"]),
                "code" => "nt"
            ],
            [
                "id" => 2558,
                "country_id" => 81,
                "state_id" => null,
                "name" => json_encode(["en" => "Java Timur", "zh" => "东爪哇"]),
                "code" => "ji"
            ],
            [
                "id" => 2559,
                "country_id" => 81,
                "state_id" => null,
                "name" => json_encode(["en" => "Riau", "zh" => "廖内"]),
                "code" => "ri"
            ],
            [
                "id" => 2560,
                "country_id" => 81,
                "state_id" => null,
                "name" => json_encode(["en" => "Maluku", "zh" => "马鲁古"]),
                "code" => "ma"
            ],
            [
                "id" => 2561,
                "country_id" => 81,
                "state_id" => null,
                "name" => json_encode(["en" => "Bengkulu", "zh" => "明古鲁"]),
                "code" => "be"
            ],
            [
                "id" => 2562,
                "country_id" => 81,
                "state_id" => null,
                "name" => json_encode(["en" => "Lampung", "zh" => "楠榜"]),
                "code" => "la"
            ],
            [
                "id" => 2563,
                "country_id" => 81,
                "state_id" => null,
                "name" => json_encode(["en" => "Kalimantan Selatan", "zh" => "南加里曼丹"]),
                "code" => "ks"
            ],
            [
                "id" => 2564,
                "country_id" => 81,
                "state_id" => null,
                "name" => json_encode(["en" => "Sulawesi Selatan", "zh" => "南苏拉威西"]),
                "code" => "sn"
            ],
            [
                "id" => 2565,
                "country_id" => 81,
                "state_id" => null,
                "name" => json_encode(["en" => "Sumatera Selatan", "zh" => "南苏门答腊"]),
                "code" => "ss"
            ],
            [
                "id" => 2566,
                "country_id" => 81,
                "state_id" => null,
                "name" => json_encode(["en" => "Daerah Istimewa Yogyakarta", "zh" => "日惹特区"]),
                "code" => "yo"
            ],
            [
                "id" => 2567,
                "country_id" => 81,
                "state_id" => null,
                "name" => json_encode(["en" => "Banten", "zh" => "万丹"]),
                "code" => "bt"
            ],
            [
                "id" => 2568,
                "country_id" => 81,
                "state_id" => null,
                "name" => json_encode(["en" => "Nusa Tenggara Barat", "zh" => "西努沙登加拉"]),
                "code" => "nb"
            ],
            [
                "id" => 2569,
                "country_id" => 81,
                "state_id" => null,
                "name" => json_encode(["en" => "Sumatera Barat", "zh" => "西苏门答腊"]),
                "code" => "sr"
            ],
            [
                "id" => 2570,
                "country_id" => 81,
                "state_id" => null,
                "name" => json_encode(["en" => "Java Barat", "zh" => "西爪哇"]),
                "code" => "jb"
            ],
            [
                "id" => 2571,
                "country_id" => 81,
                "state_id" => null,
                "name" => json_encode(["en" => "Jakarta Raya", "zh" => "雅加达"]),
                "code" => "jk"
            ],
            [
                "id" => 2572,
                "country_id" => 81,
                "state_id" => null,
                "name" => json_encode(["en" => "Aceh", "zh" => "亚齐"]),
                "code" => "ac"
            ],
            [
                "id" => 2573,
                "country_id" => 81,
                "state_id" => null,
                "name" => json_encode(["en" => "Irian Jaya", "zh" => "伊里安查亚"]),
                "code" => "ij"
            ],
            [
                "id" => 2574,
                "country_id" => 81,
                "state_id" => null,
                "name" => json_encode(["en" => "Jambi", "zh" => "占碑"]),
                "code" => "ja"
            ],
            [
                "id" => 2575,
                "country_id" => 81,
                "state_id" => null,
                "name" => json_encode(["en" => "Kalimantan Tengah", "zh" => "中加里曼丹"]),
                "code" => "kt"
            ],
            [
                "id" => 2576,
                "country_id" => 81,
                "state_id" => null,
                "name" => json_encode(["en" => "Sulawesi Tengah", "zh" => "中苏拉威西"]),
                "code" => "st"
            ],
            [
                "id" => 2577,
                "country_id" => 81,
                "state_id" => null,
                "name" => json_encode(["en" => "Java Tengah", "zh" => "中爪哇"]),
                "code" => "jt"
            ],
            [
                "id" => 2578,
                "country_id" => 63,
                "state_id" => null,
                "name" => json_encode(["en" => "Allun", "zh" => "阿吉隆"]),
                "code" => "aj"
            ],
            [
                "id" => 2579,
                "country_id" => 63,
                "state_id" => null,
                "name" => json_encode(["en" => "Amman", "zh" => "安曼"]),
                "code" => "am"
            ],
            [
                "id" => 2580,
                "country_id" => 63,
                "state_id" => null,
                "name" => json_encode(["en" => "Balqa", "zh" => "拜勒加"]),
                "code" => "ba"
            ],
            [
                "id" => 2581,
                "country_id" => 63,
                "state_id" => null,
                "name" => json_encode(["en" => "Jarash", "zh" => "杰拉什"]),
                "code" => "ja"
            ],
            [
                "id" => 2582,
                "country_id" => 63,
                "state_id" => null,
                "name" => json_encode(["en" => "Karak", "zh" => "卡拉克"]),
                "code" => "ka"
            ],
            [
                "id" => 2583,
                "country_id" => 63,
                "state_id" => null,
                "name" => json_encode(["en" => "Rusayfah", "zh" => "鲁赛法"]),
                "code" => "ru"
            ],
            [
                "id" => 2584,
                "country_id" => 63,
                "state_id" => null,
                "name" => json_encode(["en" => "Maan", "zh" => "马安"]),
                "code" => "mn"
            ],
            [
                "id" => 2585,
                "country_id" => 63,
                "state_id" => null,
                "name" => json_encode(["en" => "Madaba", "zh" => "马德巴"]),
                "code" => "md"
            ],
            [
                "id" => 2586,
                "country_id" => 63,
                "state_id" => null,
                "name" => json_encode(["en" => "Mafraq", "zh" => "马夫拉克"]),
                "code" => "mf"
            ],
            [
                "id" => 2587,
                "country_id" => 63,
                "state_id" => null,
                "name" => json_encode(["en" => "Tafiela", "zh" => "塔菲拉"]),
                "code" => "ta"
            ],
            [
                "id" => 2588,
                "country_id" => 63,
                "state_id" => null,
                "name" => json_encode(["en" => "Aqaba", "zh" => "亚喀巴"]),
                "code" => "aq"
            ],
            [
                "id" => 2589,
                "country_id" => 63,
                "state_id" => null,
                "name" => json_encode(["en" => "Irbid", "zh" => "伊尔比德"]),
                "code" => "ir"
            ],
            [
                "id" => 2590,
                "country_id" => 63,
                "state_id" => null,
                "name" => json_encode(["en" => "Zarqa", "zh" => "扎尔卡"]),
                "code" => "za"
            ],
            [
                "id" => 2591,
                "country_id" => 64,
                "state_id" => null,
                "name" => json_encode(["en" => "Haiphong", "zh" => "海防"]),
                "code" => "hp"
            ],
            [
                "id" => 2592,
                "country_id" => 64,
                "state_id" => null,
                "name" => json_encode(["en" => "Hanoi", "zh" => "河内"]),
                "code" => "hi"
            ],
            [
                "id" => 2593,
                "country_id" => 64,
                "state_id" => null,
                "name" => json_encode(["en" => "Ho Chi Minh City", "zh" => "胡志明市"]),
                "code" => "hc"
            ],
            [
                "id" => 2594,
                "country_id" => 39,
                "state_id" => null,
                "name" => json_encode(["en" => "Northern", "zh" => "北方"]),
                "code" => "no"
            ],
            [
                "id" => 2595,
                "country_id" => 39,
                "state_id" => null,
                "name" => json_encode(["en" => "Eastern", "zh" => "东方"]),
                "code" => "ea"
            ],
            [
                "id" => 2596,
                "country_id" => 39,
                "state_id" => null,
                "name" => json_encode(["en" => "Luapula", "zh" => "卢阿普拉"]),
                "code" => "lp"
            ],
            [
                "id" => 2597,
                "country_id" => 39,
                "state_id" => null,
                "name" => json_encode(["en" => "Lusaka", "zh" => "卢萨卡"]),
                "code" => "lk"
            ],
            [
                "id" => 2598,
                "country_id" => 39,
                "state_id" => null,
                "name" => json_encode(["en" => "Southern", "zh" => "南方"]),
                "code" => "so"
            ],
            [
                "id" => 2599,
                "country_id" => 39,
                "state_id" => null,
                "name" => json_encode(["en" => "Copperbelt", "zh" => "铜带"]),
                "code" => "cb"
            ],
            [
                "id" => 2600,
                "country_id" => 39,
                "state_id" => null,
                "name" => json_encode(["en" => "North-Western", "zh" => "西北"]),
                "code" => "nw"
            ],
            [
                "id" => 2601,
                "country_id" => 39,
                "state_id" => null,
                "name" => json_encode(["en" => "Western", "zh" => "西方"]),
                "code" => "we"
            ],
            [
                "id" => 2602,
                "country_id" => 39,
                "state_id" => null,
                "name" => json_encode(["en" => "Central", "zh" => "中央"]),
                "code" => "ce"
            ],
            [
                "id" => 2603,
                "country_id" => 186,
                "state_id" => null,
                "name" => json_encode(["en" => "Region de la Araucania", "zh" => "阿劳卡尼亚大区"]),
                "code" => "ar"
            ],
            [
                "id" => 2604,
                "country_id" => 186,
                "state_id" => null,
                "name" => json_encode(["en" => "Region de Atacama", "zh" => "阿塔卡马大区"]),
                "code" => "at"
            ],
            [
                "id" => 2605,
                "country_id" => 186,
                "state_id" => null,
                "name" => json_encode(["en" => "Region de Antofagasta", "zh" => "安托法加斯塔大区"]),
                "code" => "an"
            ],
            [
                "id" => 2606,
                "country_id" => 186,
                "state_id" => null,
                "name" => json_encode(["en" => "Region del Biobio", "zh" => "比奥比奥大区"]),
                "code" => "bi"
            ],
            [
                "id" => 2607,
                "country_id" => 186,
                "state_id" => null,
                "name" => json_encode(["en" => "Libertador", "zh" => "复活节岛"]),
                "code" => "li"
            ],
            [
                "id" => 2608,
                "country_id" => 186,
                "state_id" => null,
                "name" => json_encode(["en" => "Region de los Lagos", "zh" => "湖大区"]),
                "code" => "ll"
            ],
            [
                "id" => 2609,
                "country_id" => 186,
                "state_id" => null,
                "name" => json_encode(["en" => "Region de Coquimbo", "zh" => "科金博大区"]),
                "code" => "co"
            ],
            [
                "id" => 2610,
                "country_id" => 186,
                "state_id" => null,
                "name" => json_encode(["en" => "Region del Maule", "zh" => "马乌莱大区"]),
                "code" => "ml"
            ],
            [
                "id" => 2611,
                "country_id" => 186,
                "state_id" => null,
                "name" => json_encode(["en" => "Magallanes y Antartica Chilena", "zh" => "麦哲伦-智利南极大区"]),
                "code" => "ma"
            ],
            [
                "id" => 2612,
                "country_id" => 186,
                "state_id" => null,
                "name" => json_encode(["en" => "Metropolitana de Santiago", "zh" => "圣地亚哥"]),
                "code" => "rm"
            ],
            [
                "id" => 2613,
                "country_id" => 186,
                "state_id" => null,
                "name" => json_encode(["en" => "Region de Tarapaca", "zh" => "塔拉帕卡大区"]),
                "code" => "ta"
            ],
            [
                "id" => 2614,
                "country_id" => 186,
                "state_id" => null,
                "name" => json_encode(["en" => "Region de Valparaiso", "zh" => "瓦尔帕莱索大区"]),
                "code" => "vs"
            ],
            [
                "id" => 2615,
                "country_id" => 186,
                "state_id" => null,
                "name" => json_encode(["en" => "Region de Alsen del General Carlos Ibanez del", "zh" => "伊瓦涅斯将军的艾森大区"]),
                "code" => "ai"
            ],
            [
                "id" => 2616,
                "country_id" => 33,
                "state_id" => null,
                "name" => json_encode(["en" => "Bamingui-Bangoran", "zh" => "巴明吉-班戈兰"]),
                "code" => "bb"
            ],
            [
                "id" => 2617,
                "country_id" => 33,
                "state_id" => null,
                "name" => json_encode(["en" => "Bangui", "zh" => "班吉直辖市"]),
                "code" => "bgf"
            ],
            [
                "id" => 2618,
                "country_id" => 33,
                "state_id" => null,
                "name" => json_encode(["en" => "Bimbo", "zh" => "宾博"]),
                "code" => "bi"
            ],
            [
                "id" => 2619,
                "country_id" => 33,
                "state_id" => null,
                "name" => json_encode(["en" => "Kemo", "zh" => "凯莫"]),
                "code" => "kg"
            ],
            [
                "id" => 2620,
                "country_id" => 33,
                "state_id" => null,
                "name" => json_encode(["en" => "Lobaye", "zh" => "洛巴伊"]),
                "code" => "lb"
            ],
            [
                "id" => 2621,
                "country_id" => 33,
                "state_id" => null,
                "name" => json_encode(["en" => "Mambere-Kadei", "zh" => "曼贝雷-卡代"]),
                "code" => "hs"
            ],
            [
                "id" => 2622,
                "country_id" => 33,
                "state_id" => null,
                "name" => json_encode(["en" => "Mbomou", "zh" => "姆博穆"]),
                "code" => "mb"
            ],
            [
                "id" => 2623,
                "country_id" => 33,
                "state_id" => null,
                "name" => json_encode(["en" => "Nana-Gribizi", "zh" => "纳纳-格里比齐"]),
                "code" => "kb"
            ],
            [
                "id" => 2624,
                "country_id" => 33,
                "state_id" => null,
                "name" => json_encode(["en" => "Nana-Mambere", "zh" => "纳纳-曼贝雷"]),
                "code" => "nm"
            ],
            [
                "id" => 2625,
                "country_id" => 33,
                "state_id" => null,
                "name" => json_encode(["en" => "Sangha-Mbaere", "zh" => "桑加-姆巴埃雷"]),
                "code" => "se"
            ],
            [
                "id" => 2626,
                "country_id" => 33,
                "state_id" => null,
                "name" => json_encode(["en" => "Haute-Kotto", "zh" => "上科托"]),
                "code" => "hk"
            ],
            [
                "id" => 2627,
                "country_id" => 33,
                "state_id" => null,
                "name" => json_encode(["en" => "Haut-Mbomou", "zh" => "上姆博穆"]),
                "code" => "hm"
            ],
            [
                "id" => 2628,
                "country_id" => 33,
                "state_id" => null,
                "name" => json_encode(["en" => "Ouaka", "zh" => "瓦卡"]),
                "code" => "uk"
            ],
            [
                "id" => 2629,
                "country_id" => 33,
                "state_id" => null,
                "name" => json_encode(["en" => "Vakaga", "zh" => "瓦卡加"]),
                "code" => "vk"
            ],
            [
                "id" => 2630,
                "country_id" => 33,
                "state_id" => null,
                "name" => json_encode(["en" => "Ouham", "zh" => "瓦姆"]),
                "code" => "ac"
            ],
            [
                "id" => 2631,
                "country_id" => 33,
                "state_id" => null,
                "name" => json_encode(["en" => "Ouham-Pende", "zh" => "瓦姆-彭代"]),
                "code" => "op"
            ],
            [
                "id" => 2632,
                "country_id" => 33,
                "state_id" => null,
                "name" => json_encode(["en" => "Ombella-Mpoko", "zh" => "翁贝拉-姆波科"]),
                "code" => "mp"
            ],
            [
                "id" => 2633,
                "country_id" => 33,
                "state_id" => null,
                "name" => json_encode(["en" => "Basse-Kotto", "zh" => "下科托"]),
                "code" => "bk"
            ],
            [
                "id" => 2634,
                "country_id" => 101,
                "state_id" => 26,
                "name" => json_encode(["en" => "Dongcheng", "zh" => "东城"]),
                "code" => "1"
            ],
            [
                "id" => 2635,
                "country_id" => 101,
                "state_id" => 26,
                "name" => json_encode(["en" => "Xicheng", "zh" => "西城"]),
                "code" => "2"
            ],
            [
                "id" => 2636,
                "country_id" => 101,
                "state_id" => 26,
                "name" => json_encode(["en" => "Chaoyang", "zh" => "朝阳"]),
                "code" => "5"
            ],
            [
                "id" => 2637,
                "country_id" => 101,
                "state_id" => 26,
                "name" => json_encode(["en" => "Fengtai", "zh" => "丰台"]),
                "code" => "6"
            ],
            [
                "id" => 2638,
                "country_id" => 101,
                "state_id" => 26,
                "name" => json_encode(["en" => "Shijingshan", "zh" => "石景山"]),
                "code" => "7"
            ],
            [
                "id" => 2639,
                "country_id" => 101,
                "state_id" => 26,
                "name" => json_encode(["en" => "Haidian", "zh" => "海淀"]),
                "code" => "8"
            ],
            [
                "id" => 2640,
                "country_id" => 101,
                "state_id" => 26,
                "name" => json_encode(["en" => "Mentougou", "zh" => "门头沟"]),
                "code" => "9"
            ],
            [
                "id" => 2641,
                "country_id" => 101,
                "state_id" => 26,
                "name" => json_encode(["en" => "Fangshan", "zh" => "房山"]),
                "code" => "11"
            ],
            [
                "id" => 2642,
                "country_id" => 101,
                "state_id" => 26,
                "name" => json_encode(["en" => "Tongzhou", "zh" => "通州"]),
                "code" => "12"
            ],
            [
                "id" => 2643,
                "country_id" => 101,
                "state_id" => 26,
                "name" => json_encode(["en" => "Shunyi", "zh" => "顺义"]),
                "code" => "13"
            ],
            [
                "id" => 2644,
                "country_id" => 101,
                "state_id" => 26,
                "name" => json_encode(["en" => "Changping", "zh" => "昌平"]),
                "code" => "21"
            ],
            [
                "id" => 2645,
                "country_id" => 101,
                "state_id" => 26,
                "name" => json_encode(["en" => "Daxing", "zh" => "大兴"]),
                "code" => "24"
            ],
            [
                "id" => 2646,
                "country_id" => 101,
                "state_id" => 26,
                "name" => json_encode(["en" => "Pinggu", "zh" => "平谷"]),
                "code" => "26"
            ],
            [
                "id" => 2647,
                "country_id" => 101,
                "state_id" => 26,
                "name" => json_encode(["en" => "Huairou", "zh" => "怀柔"]),
                "code" => "27"
            ],
            [
                "id" => 2648,
                "country_id" => 101,
                "state_id" => 26,
                "name" => json_encode(["en" => "Miyun", "zh" => "密云"]),
                "code" => "28"
            ],
            [
                "id" => 2649,
                "country_id" => 101,
                "state_id" => 26,
                "name" => json_encode(["en" => "Yanqing", "zh" => "延庆"]),
                "code" => "29"
            ],
            [
                "id" => 2650,
                "country_id" => 101,
                "state_id" => 52,
                "name" => json_encode(["en" => "Heping", "zh" => "和平"]),
                "code" => "1"
            ],
            [
                "id" => 2651,
                "country_id" => 101,
                "state_id" => 52,
                "name" => json_encode(["en" => "Hedong", "zh" => "河东"]),
                "code" => "2"
            ],
            [
                "id" => 2652,
                "country_id" => 101,
                "state_id" => 52,
                "name" => json_encode(["en" => "Hexi", "zh" => "河西"]),
                "code" => "3"
            ],
            [
                "id" => 2653,
                "country_id" => 101,
                "state_id" => 52,
                "name" => json_encode(["en" => "Nankai", "zh" => "南开"]),
                "code" => "4"
            ],
            [
                "id" => 2654,
                "country_id" => 101,
                "state_id" => 52,
                "name" => json_encode(["en" => "Hebei", "zh" => "河北"]),
                "code" => "5"
            ],
            [
                "id" => 2655,
                "country_id" => 101,
                "state_id" => 52,
                "name" => json_encode(["en" => "Hongqiao", "zh" => "红桥"]),
                "code" => "6"
            ],
            [
                "id" => 2656,
                "country_id" => 101,
                "state_id" => 52,
                "name" => json_encode(["en" => "Binghaixinqu", "zh" => "滨海新区"]),
                "code" => "26"
            ],
            [
                "id" => 2657,
                "country_id" => 101,
                "state_id" => 52,
                "name" => json_encode(["en" => "Dongli", "zh" => "东丽"]),
                "code" => "10"
            ],
            [
                "id" => 2658,
                "country_id" => 101,
                "state_id" => 52,
                "name" => json_encode(["en" => "Xiqing", "zh" => "西青"]),
                "code" => "11"
            ],
            [
                "id" => 2659,
                "country_id" => 101,
                "state_id" => 52,
                "name" => json_encode(["en" => "Jinnan", "zh" => "津南"]),
                "code" => "12"
            ],
            [
                "id" => 2660,
                "country_id" => 101,
                "state_id" => 52,
                "name" => json_encode(["en" => "Beichen", "zh" => "北辰"]),
                "code" => "13"
            ],
            [
                "id" => 2661,
                "country_id" => 101,
                "state_id" => 52,
                "name" => json_encode(["en" => "Ninghe", "zh" => "宁河"]),
                "code" => "21"
            ],
            [
                "id" => 2662,
                "country_id" => 101,
                "state_id" => 52,
                "name" => json_encode(["en" => "Wuqing", "zh" => "武清"]),
                "code" => "22"
            ],
            [
                "id" => 2663,
                "country_id" => 101,
                "state_id" => 52,
                "name" => json_encode(["en" => "Jinghai", "zh" => "静海"]),
                "code" => "23"
            ],
            [
                "id" => 2664,
                "country_id" => 101,
                "state_id" => 52,
                "name" => json_encode(["en" => "Baodi", "zh" => "宝坻"]),
                "code" => "24"
            ],
            [
                "id" => 2665,
                "country_id" => 101,
                "state_id" => 52,
                "name" => json_encode(["en" => "Jixian", "zh" => "蓟县"]),
                "code" => "25"
            ],
            [
                "id" => 2666,
                "country_id" => 101,
                "state_id" => 34,
                "name" => json_encode(["en" => "Shijiazhuang", "zh" => "石家庄"]),
                "code" => "1"
            ],
            [
                "id" => 2667,
                "country_id" => 101,
                "state_id" => 34,
                "name" => json_encode(["en" => "Tangshan", "zh" => "唐山"]),
                "code" => "2"
            ],
            [
                "id" => 2668,
                "country_id" => 101,
                "state_id" => 34,
                "name" => json_encode(["en" => "Qinhuangdao", "zh" => "秦皇岛"]),
                "code" => "3"
            ],
            [
                "id" => 2669,
                "country_id" => 101,
                "state_id" => 34,
                "name" => json_encode(["en" => "Handan", "zh" => "邯郸"]),
                "code" => "4"
            ],
            [
                "id" => 2670,
                "country_id" => 101,
                "state_id" => 34,
                "name" => json_encode(["en" => "Xingtai", "zh" => "邢台"]),
                "code" => "5"
            ],
            [
                "id" => 2671,
                "country_id" => 101,
                "state_id" => 34,
                "name" => json_encode(["en" => "Baoding", "zh" => "保定"]),
                "code" => "6"
            ],
            [
                "id" => 2672,
                "country_id" => 101,
                "state_id" => 34,
                "name" => json_encode(["en" => "Zhangjiakou", "zh" => "张家口"]),
                "code" => "7"
            ],
            [
                "id" => 2673,
                "country_id" => 101,
                "state_id" => 34,
                "name" => json_encode(["en" => "Chengde", "zh" => "承德"]),
                "code" => "8"
            ],
            [
                "id" => 2674,
                "country_id" => 101,
                "state_id" => 34,
                "name" => json_encode(["en" => "Cangzhou", "zh" => "沧州"]),
                "code" => "9"
            ],
            [
                "id" => 2675,
                "country_id" => 101,
                "state_id" => 34,
                "name" => json_encode(["en" => "Langfang", "zh" => "廊坊"]),
                "code" => "10"
            ],
            [
                "id" => 2676,
                "country_id" => 101,
                "state_id" => 34,
                "name" => json_encode(["en" => "Hengshui", "zh" => "衡水"]),
                "code" => "11"
            ],
            [
                "id" => 2677,
                "country_id" => 101,
                "state_id" => 49,
                "name" => json_encode(["en" => "Taiyuan", "zh" => "太原"]),
                "code" => "1"
            ],
            [
                "id" => 2678,
                "country_id" => 101,
                "state_id" => 49,
                "name" => json_encode(["en" => "Datong", "zh" => "大同"]),
                "code" => "2"
            ],
            [
                "id" => 2679,
                "country_id" => 101,
                "state_id" => 49,
                "name" => json_encode(["en" => "Yangquan", "zh" => "阳泉"]),
                "code" => "3"
            ],
            [
                "id" => 2680,
                "country_id" => 101,
                "state_id" => 49,
                "name" => json_encode(["en" => "Changzhi", "zh" => "长治"]),
                "code" => "4"
            ],
            [
                "id" => 2681,
                "country_id" => 101,
                "state_id" => 49,
                "name" => json_encode(["en" => "Jincheng", "zh" => "晋城"]),
                "code" => "5"
            ],
            [
                "id" => 2682,
                "country_id" => 101,
                "state_id" => 49,
                "name" => json_encode(["en" => "Shuozhou", "zh" => "朔州"]),
                "code" => "6"
            ],
            [
                "id" => 2683,
                "country_id" => 101,
                "state_id" => 49,
                "name" => json_encode(["en" => "Jinzhong", "zh" => "晋中"]),
                "code" => "7"
            ],
            [
                "id" => 2684,
                "country_id" => 101,
                "state_id" => 49,
                "name" => json_encode(["en" => "Yuncheng", "zh" => "运城"]),
                "code" => "8"
            ],
            [
                "id" => 2685,
                "country_id" => 101,
                "state_id" => 49,
                "name" => json_encode(["en" => "Xinzhou", "zh" => "忻州"]),
                "code" => "9"
            ],
            [
                "id" => 2686,
                "country_id" => 101,
                "state_id" => 49,
                "name" => json_encode(["en" => "Linfen", "zh" => "临汾"]),
                "code" => "10"
            ],
            [
                "id" => 2687,
                "country_id" => 101,
                "state_id" => 49,
                "name" => json_encode(["en" => "luliang", "zh" => "吕梁"]),
                "code" => "11"
            ],
            [
                "id" => 2688,
                "country_id" => 101,
                "state_id" => 39,
                "name" => json_encode(["en" => "Hohhot", "zh" => "呼和浩特"]),
                "code" => "1"
            ],
            [
                "id" => 2689,
                "country_id" => 101,
                "state_id" => 39,
                "name" => json_encode(["en" => "Baotou", "zh" => "包头"]),
                "code" => "2"
            ],
            [
                "id" => 2690,
                "country_id" => 101,
                "state_id" => 39,
                "name" => json_encode(["en" => "Wuhai", "zh" => "乌海"]),
                "code" => "3"
            ],
            [
                "id" => 2691,
                "country_id" => 101,
                "state_id" => 39,
                "name" => json_encode(["en" => "Chifeng", "zh" => "赤峰"]),
                "code" => "4"
            ],
            [
                "id" => 2692,
                "country_id" => 101,
                "state_id" => 39,
                "name" => json_encode(["en" => "Tongliao", "zh" => "通辽"]),
                "code" => "5"
            ],
            [
                "id" => 2693,
                "country_id" => 101,
                "state_id" => 39,
                "name" => json_encode(["en" => "Ordos", "zh" => "鄂尔多斯"]),
                "code" => "6"
            ],
            [
                "id" => 2694,
                "country_id" => 101,
                "state_id" => 39,
                "name" => json_encode(["en" => "Hulun Buir", "zh" => "呼伦贝尔"]),
                "code" => "7"
            ],
            [
                "id" => 2695,
                "country_id" => 101,
                "state_id" => 39,
                "name" => json_encode(["en" => "Bayannur", "zh" => "巴彦淖尔"]),
                "code" => "8"
            ],
            [
                "id" => 2696,
                "country_id" => 101,
                "state_id" => 39,
                "name" => json_encode(["en" => "Ulan Qab", "zh" => "乌兰察布"]),
                "code" => "9"
            ],
            [
                "id" => 2697,
                "country_id" => 101,
                "state_id" => 39,
                "name" => json_encode(["en" => "Xing'an", "zh" => "兴安"]),
                "code" => "22"
            ],
            [
                "id" => 2698,
                "country_id" => 101,
                "state_id" => 39,
                "name" => json_encode(["en" => "Xilin Gol", "zh" => "锡林郭勒"]),
                "code" => "25"
            ],
            [
                "id" => 2699,
                "country_id" => 101,
                "state_id" => 39,
                "name" => json_encode(["en" => "Alxa", "zh" => "阿拉善"]),
                "code" => "29"
            ],
            [
                "id" => 2700,
                "country_id" => 101,
                "state_id" => 43,
                "name" => json_encode(["en" => "Shenyang", "zh" => "沈阳"]),
                "code" => "1"
            ],
            [
                "id" => 2701,
                "country_id" => 101,
                "state_id" => 43,
                "name" => json_encode(["en" => "Dalian", "zh" => "大连"]),
                "code" => "2"
            ],
            [
                "id" => 2702,
                "country_id" => 101,
                "state_id" => 43,
                "name" => json_encode(["en" => "Anshan", "zh" => "鞍山"]),
                "code" => "3"
            ],
            [
                "id" => 2703,
                "country_id" => 101,
                "state_id" => 43,
                "name" => json_encode(["en" => "Fushun", "zh" => "抚顺"]),
                "code" => "4"
            ],
            [
                "id" => 2704,
                "country_id" => 101,
                "state_id" => 43,
                "name" => json_encode(["en" => "Benxi", "zh" => "本溪"]),
                "code" => "5"
            ],
            [
                "id" => 2705,
                "country_id" => 101,
                "state_id" => 43,
                "name" => json_encode(["en" => "Dandong", "zh" => "丹东"]),
                "code" => "6"
            ],
            [
                "id" => 2706,
                "country_id" => 101,
                "state_id" => 43,
                "name" => json_encode(["en" => "Jinzhou", "zh" => "锦州"]),
                "code" => "7"
            ],
            [
                "id" => 2707,
                "country_id" => 101,
                "state_id" => 43,
                "name" => json_encode(["en" => "Yingkou", "zh" => "营口"]),
                "code" => "8"
            ],
            [
                "id" => 2708,
                "country_id" => 101,
                "state_id" => 43,
                "name" => json_encode(["en" => "Fuxin", "zh" => "阜新"]),
                "code" => "9"
            ],
            [
                "id" => 2709,
                "country_id" => 101,
                "state_id" => 43,
                "name" => json_encode(["en" => "Liaoyang", "zh" => "辽阳"]),
                "code" => "10"
            ],
            [
                "id" => 2710,
                "country_id" => 101,
                "state_id" => 43,
                "name" => json_encode(["en" => "Panjin", "zh" => "盘锦"]),
                "code" => "11"
            ],
            [
                "id" => 2711,
                "country_id" => 101,
                "state_id" => 43,
                "name" => json_encode(["en" => "Tieling", "zh" => "铁岭"]),
                "code" => "12"
            ],
            [
                "id" => 2712,
                "country_id" => 101,
                "state_id" => 43,
                "name" => json_encode(["en" => "Chaoyang", "zh" => "朝阳"]),
                "code" => "13"
            ],
            [
                "id" => 2713,
                "country_id" => 101,
                "state_id" => 43,
                "name" => json_encode(["en" => "Huludao", "zh" => "葫芦岛"]),
                "code" => "14"
            ],
            [
                "id" => 2714,
                "country_id" => 101,
                "state_id" => 42,
                "name" => json_encode(["en" => "Changchun", "zh" => "长春"]),
                "code" => "1"
            ],
            [
                "id" => 2715,
                "country_id" => 101,
                "state_id" => 42,
                "name" => json_encode(["en" => "Jilin", "zh" => "吉林"]),
                "code" => "2"
            ],
            [
                "id" => 2716,
                "country_id" => 101,
                "state_id" => 42,
                "name" => json_encode(["en" => "Siping", "zh" => "四平"]),
                "code" => "3"
            ],
            [
                "id" => 2717,
                "country_id" => 101,
                "state_id" => 42,
                "name" => json_encode(["en" => "Liaoyuan", "zh" => "辽源"]),
                "code" => "4"
            ],
            [
                "id" => 2718,
                "country_id" => 101,
                "state_id" => 42,
                "name" => json_encode(["en" => "Tonghua", "zh" => "通化"]),
                "code" => "5"
            ],
            [
                "id" => 2719,
                "country_id" => 101,
                "state_id" => 42,
                "name" => json_encode(["en" => "Baishan", "zh" => "白山"]),
                "code" => "6"
            ],
            [
                "id" => 2720,
                "country_id" => 101,
                "state_id" => 42,
                "name" => json_encode(["en" => "Songyuan", "zh" => "松原"]),
                "code" => "7"
            ],
            [
                "id" => 2721,
                "country_id" => 101,
                "state_id" => 42,
                "name" => json_encode(["en" => "Baicheng", "zh" => "白城"]),
                "code" => "8"
            ],
            [
                "id" => 2722,
                "country_id" => 101,
                "state_id" => 42,
                "name" => json_encode(["en" => "Yanbian Korean Autonomous Prefecture", "zh" => "延边"]),
                "code" => "24"
            ],
            [
                "id" => 2723,
                "country_id" => 101,
                "state_id" => 35,
                "name" => json_encode(["en" => "Harbin", "zh" => "哈尔滨"]),
                "code" => "1"
            ],
            [
                "id" => 2724,
                "country_id" => 101,
                "state_id" => 35,
                "name" => json_encode(["en" => "Qiqihar", "zh" => "齐齐哈尔"]),
                "code" => "2"
            ],
            [
                "id" => 2725,
                "country_id" => 101,
                "state_id" => 35,
                "name" => json_encode(["en" => "Jixi", "zh" => "鸡西"]),
                "code" => "3"
            ],
            [
                "id" => 2726,
                "country_id" => 101,
                "state_id" => 35,
                "name" => json_encode(["en" => "Hegang", "zh" => "鹤岗"]),
                "code" => "4"
            ],
            [
                "id" => 2727,
                "country_id" => 101,
                "state_id" => 35,
                "name" => json_encode(["en" => "Shuangyashan", "zh" => "双鸭山"]),
                "code" => "5"
            ],
            [
                "id" => 2728,
                "country_id" => 101,
                "state_id" => 35,
                "name" => json_encode(["en" => "Daqing", "zh" => "大庆"]),
                "code" => "6"
            ],
            [
                "id" => 2729,
                "country_id" => 101,
                "state_id" => 35,
                "name" => json_encode(["en" => "Yichun", "zh" => "伊春"]),
                "code" => "7"
            ],
            [
                "id" => 2730,
                "country_id" => 101,
                "state_id" => 35,
                "name" => json_encode(["en" => "Jiamusi", "zh" => "佳木斯"]),
                "code" => "8"
            ],
            [
                "id" => 2731,
                "country_id" => 101,
                "state_id" => 35,
                "name" => json_encode(["en" => "Qitaihe", "zh" => "七台河"]),
                "code" => "9"
            ],
            [
                "id" => 2732,
                "country_id" => 101,
                "state_id" => 35,
                "name" => json_encode(["en" => "Mudanjiang", "zh" => "牡丹江"]),
                "code" => "10"
            ],
            [
                "id" => 2733,
                "country_id" => 101,
                "state_id" => 35,
                "name" => json_encode(["en" => "Heihe", "zh" => "黑河"]),
                "code" => "11"
            ],
            [
                "id" => 2734,
                "country_id" => 101,
                "state_id" => 35,
                "name" => json_encode(["en" => "Suihua", "zh" => "绥化"]),
                "code" => "12"
            ],
            [
                "id" => 2735,
                "country_id" => 101,
                "state_id" => 35,
                "name" => json_encode(["en" => "Da Hinggan Ling", "zh" => "大兴安岭"]),
                "code" => "27"
            ],
            [
                "id" => 2736,
                "country_id" => 101,
                "state_id" => 48,
                "name" => json_encode(["en" => "Huangpu", "zh" => "黄浦"]),
                "code" => "1"
            ],
            [
                "id" => 2737,
                "country_id" => 101,
                "state_id" => 48,
                "name" => json_encode(["en" => "Luwan", "zh" => "卢湾"]),
                "code" => "3"
            ],
            [
                "id" => 2738,
                "country_id" => 101,
                "state_id" => 48,
                "name" => json_encode(["en" => "Xuhui", "zh" => "徐汇"]),
                "code" => "4"
            ],
            [
                "id" => 2739,
                "country_id" => 101,
                "state_id" => 48,
                "name" => json_encode(["en" => "Changning", "zh" => "长宁"]),
                "code" => "5"
            ],
            [
                "id" => 2740,
                "country_id" => 101,
                "state_id" => 48,
                "name" => json_encode(["en" => "Jing'an", "zh" => "静安"]),
                "code" => "6"
            ],
            [
                "id" => 2741,
                "country_id" => 101,
                "state_id" => 48,
                "name" => json_encode(["en" => "Putuo", "zh" => "普陀"]),
                "code" => "7"
            ],
            [
                "id" => 2742,
                "country_id" => 101,
                "state_id" => 48,
                "name" => json_encode(["en" => "Zhabei", "zh" => "闸北"]),
                "code" => "8"
            ],
            [
                "id" => 2743,
                "country_id" => 101,
                "state_id" => 48,
                "name" => json_encode(["en" => "Hongkou", "zh" => "虹口"]),
                "code" => "9"
            ],
            [
                "id" => 2744,
                "country_id" => 101,
                "state_id" => 48,
                "name" => json_encode(["en" => "Yangpu", "zh" => "杨浦"]),
                "code" => "11"
            ],
            [
                "id" => 2745,
                "country_id" => 101,
                "state_id" => 48,
                "name" => json_encode(["en" => "Minhang", "zh" => "闵行"]),
                "code" => "12"
            ],
            [
                "id" => 2746,
                "country_id" => 101,
                "state_id" => 48,
                "name" => json_encode(["en" => "Baoshan", "zh" => "宝山"]),
                "code" => "13"
            ],
            [
                "id" => 2747,
                "country_id" => 101,
                "state_id" => 48,
                "name" => json_encode(["en" => "Jiading", "zh" => "嘉定"]),
                "code" => "14"
            ],
            [
                "id" => 2748,
                "country_id" => 101,
                "state_id" => 48,
                "name" => json_encode(["en" => "Pudong New Area", "zh" => "浦东新区"]),
                "code" => "15"
            ],
            [
                "id" => 2749,
                "country_id" => 101,
                "state_id" => 48,
                "name" => json_encode(["en" => "Jinshan", "zh" => "金山"]),
                "code" => "16"
            ],
            [
                "id" => 2750,
                "country_id" => 101,
                "state_id" => 48,
                "name" => json_encode(["en" => "Songjiang", "zh" => "松江"]),
                "code" => "17"
            ],
            [
                "id" => 2751,
                "country_id" => 101,
                "state_id" => 48,
                "name" => json_encode(["en" => "Fengxian", "zh" => "奉贤"]),
                "code" => "26"
            ],
            [
                "id" => 2752,
                "country_id" => 101,
                "state_id" => 48,
                "name" => json_encode(["en" => "Qingpu", "zh" => "青浦"]),
                "code" => "29"
            ],
            [
                "id" => 2753,
                "country_id" => 101,
                "state_id" => 48,
                "name" => json_encode(["en" => "Chongming", "zh" => "崇明"]),
                "code" => "30"
            ],
            [
                "id" => 2754,
                "country_id" => 101,
                "state_id" => 40,
                "name" => json_encode(["en" => "Nanjing", "zh" => "南京"]),
                "code" => "1"
            ],
            [
                "id" => 2755,
                "country_id" => 101,
                "state_id" => 40,
                "name" => json_encode(["en" => "Wuxi", "zh" => "无锡"]),
                "code" => "2"
            ],
            [
                "id" => 2756,
                "country_id" => 101,
                "state_id" => 40,
                "name" => json_encode(["en" => "Xuzhou", "zh" => "徐州"]),
                "code" => "3"
            ],
            [
                "id" => 2757,
                "country_id" => 101,
                "state_id" => 40,
                "name" => json_encode(["en" => "Changzhou", "zh" => "常州"]),
                "code" => "4"
            ],
            [
                "id" => 2758,
                "country_id" => 101,
                "state_id" => 40,
                "name" => json_encode(["en" => "Suzhou", "zh" => "苏州"]),
                "code" => "5"
            ],
            [
                "id" => 2759,
                "country_id" => 101,
                "state_id" => 40,
                "name" => json_encode(["en" => "Nantong", "zh" => "南通"]),
                "code" => "6"
            ],
            [
                "id" => 2760,
                "country_id" => 101,
                "state_id" => 40,
                "name" => json_encode(["en" => "Lianyungang", "zh" => "连云港"]),
                "code" => "7"
            ],
            [
                "id" => 2761,
                "country_id" => 101,
                "state_id" => 40,
                "name" => json_encode(["en" => "Huai'an", "zh" => "淮安"]),
                "code" => "8"
            ],
            [
                "id" => 2762,
                "country_id" => 101,
                "state_id" => 40,
                "name" => json_encode(["en" => "Yancheng", "zh" => "盐城"]),
                "code" => "9"
            ],
            [
                "id" => 2763,
                "country_id" => 101,
                "state_id" => 40,
                "name" => json_encode(["en" => "Yangzhou", "zh" => "扬州"]),
                "code" => "10"
            ],
            [
                "id" => 2764,
                "country_id" => 101,
                "state_id" => 40,
                "name" => json_encode(["en" => "Zhenjiang", "zh" => "镇江"]),
                "code" => "11"
            ],
            [
                "id" => 2765,
                "country_id" => 101,
                "state_id" => 40,
                "name" => json_encode(["en" => "Taizhou", "zh" => "泰州"]),
                "code" => "12"
            ],
            [
                "id" => 2766,
                "country_id" => 101,
                "state_id" => 40,
                "name" => json_encode(["en" => "Suqian", "zh" => "宿迁"]),
                "code" => "13"
            ],
            [
                "id" => 2767,
                "country_id" => 101,
                "state_id" => 56,
                "name" => json_encode(["en" => "Hangzhou", "zh" => "杭州"]),
                "code" => "1"
            ],
            [
                "id" => 2768,
                "country_id" => 101,
                "state_id" => 56,
                "name" => json_encode(["en" => "Ningbo", "zh" => "宁波"]),
                "code" => "2"
            ],
            [
                "id" => 2769,
                "country_id" => 101,
                "state_id" => 56,
                "name" => json_encode(["en" => "Wenzhou", "zh" => "温州"]),
                "code" => "3"
            ],
            [
                "id" => 2770,
                "country_id" => 101,
                "state_id" => 56,
                "name" => json_encode(["en" => "Jiaxing", "zh" => "嘉兴"]),
                "code" => "4"
            ],
            [
                "id" => 2771,
                "country_id" => 101,
                "state_id" => 56,
                "name" => json_encode(["en" => "Huzhou", "zh" => "湖州"]),
                "code" => "5"
            ],
            [
                "id" => 2772,
                "country_id" => 101,
                "state_id" => 56,
                "name" => json_encode(["en" => "Shaoxing", "zh" => "绍兴"]),
                "code" => "6"
            ],
            [
                "id" => 2773,
                "country_id" => 101,
                "state_id" => 56,
                "name" => json_encode(["en" => "Jinhua", "zh" => "金华"]),
                "code" => "7"
            ],
            [
                "id" => 2774,
                "country_id" => 101,
                "state_id" => 56,
                "name" => json_encode(["en" => "Quzhou", "zh" => "衢州"]),
                "code" => "8"
            ],
            [
                "id" => 2775,
                "country_id" => 101,
                "state_id" => 56,
                "name" => json_encode(["en" => "Zhoushan", "zh" => "舟山"]),
                "code" => "9"
            ],
            [
                "id" => 2776,
                "country_id" => 101,
                "state_id" => 56,
                "name" => json_encode(["en" => "Taizhou", "zh" => "台州"]),
                "code" => "10"
            ],
            [
                "id" => 2777,
                "country_id" => 101,
                "state_id" => 56,
                "name" => json_encode(["en" => "Lishui", "zh" => "丽水"]),
                "code" => "11"
            ],
            [
                "id" => 2778,
                "country_id" => 101,
                "state_id" => 25,
                "name" => json_encode(["en" => "Hefei", "zh" => "合肥"]),
                "code" => "1"
            ],
            [
                "id" => 2779,
                "country_id" => 101,
                "state_id" => 25,
                "name" => json_encode(["en" => "Wuhu", "zh" => "芜湖"]),
                "code" => "2"
            ],
            [
                "id" => 2780,
                "country_id" => 101,
                "state_id" => 25,
                "name" => json_encode(["en" => "Bengbu", "zh" => "蚌埠"]),
                "code" => "3"
            ],
            [
                "id" => 2781,
                "country_id" => 101,
                "state_id" => 25,
                "name" => json_encode(["en" => "Huainan", "zh" => "淮南"]),
                "code" => "4"
            ],
            [
                "id" => 2782,
                "country_id" => 101,
                "state_id" => 25,
                "name" => json_encode(["en" => "Ma'anshan", "zh" => "马鞍山"]),
                "code" => "5"
            ],
            [
                "id" => 2783,
                "country_id" => 101,
                "state_id" => 25,
                "name" => json_encode(["en" => "Huaibei", "zh" => "淮北"]),
                "code" => "6"
            ],
            [
                "id" => 2784,
                "country_id" => 101,
                "state_id" => 25,
                "name" => json_encode(["en" => "Tongling", "zh" => "铜陵"]),
                "code" => "7"
            ],
            [
                "id" => 2785,
                "country_id" => 101,
                "state_id" => 25,
                "name" => json_encode(["en" => "Anqing", "zh" => "安庆"]),
                "code" => "8"
            ],
            [
                "id" => 2786,
                "country_id" => 101,
                "state_id" => 25,
                "name" => json_encode(["en" => "Huangshan", "zh" => "黄山"]),
                "code" => "10"
            ],
            [
                "id" => 2787,
                "country_id" => 101,
                "state_id" => 25,
                "name" => json_encode(["en" => "Chuzhou", "zh" => "滁州"]),
                "code" => "11"
            ],
            [
                "id" => 2788,
                "country_id" => 101,
                "state_id" => 25,
                "name" => json_encode(["en" => "Fuyang", "zh" => "阜阳"]),
                "code" => "12"
            ],
            [
                "id" => 2789,
                "country_id" => 101,
                "state_id" => 25,
                "name" => json_encode(["en" => "Suzhou", "zh" => "宿州"]),
                "code" => "13"
            ],
            [
                "id" => 2790,
                "country_id" => 101,
                "state_id" => 25,
                "name" => json_encode(["en" => "Lu'an", "zh" => "六安"]),
                "code" => "15"
            ],
            [
                "id" => 2791,
                "country_id" => 101,
                "state_id" => 25,
                "name" => json_encode(["en" => "Bozhou", "zh" => "亳州"]),
                "code" => "16"
            ],
            [
                "id" => 2792,
                "country_id" => 101,
                "state_id" => 25,
                "name" => json_encode(["en" => "Chizhou", "zh" => "池州"]),
                "code" => "17"
            ],
            [
                "id" => 2793,
                "country_id" => 101,
                "state_id" => 25,
                "name" => json_encode(["en" => "Xuancheng", "zh" => "宣城"]),
                "code" => "18"
            ],
            [
                "id" => 2794,
                "country_id" => 101,
                "state_id" => 28,
                "name" => json_encode(["en" => "Fuzhou", "zh" => "福州"]),
                "code" => "1"
            ],
            [
                "id" => 2795,
                "country_id" => 101,
                "state_id" => 28,
                "name" => json_encode(["en" => "Xiamen", "zh" => "厦门"]),
                "code" => "2"
            ],
            [
                "id" => 2796,
                "country_id" => 101,
                "state_id" => 28,
                "name" => json_encode(["en" => "Putian", "zh" => "莆田"]),
                "code" => "3"
            ],
            [
                "id" => 2797,
                "country_id" => 101,
                "state_id" => 28,
                "name" => json_encode(["en" => "Sanming", "zh" => "三明"]),
                "code" => "4"
            ],
            [
                "id" => 2798,
                "country_id" => 101,
                "state_id" => 28,
                "name" => json_encode(["en" => "Quanzhou", "zh" => "泉州"]),
                "code" => "5"
            ],
            [
                "id" => 2799,
                "country_id" => 101,
                "state_id" => 28,
                "name" => json_encode(["en" => "Zhangzhou", "zh" => "漳州"]),
                "code" => "6"
            ],
            [
                "id" => 2800,
                "country_id" => 101,
                "state_id" => 28,
                "name" => json_encode(["en" => "Nanping", "zh" => "南平"]),
                "code" => "7"
            ],
            [
                "id" => 2801,
                "country_id" => 101,
                "state_id" => 28,
                "name" => json_encode(["en" => "Longyan", "zh" => "龙岩"]),
                "code" => "8"
            ],
            [
                "id" => 2802,
                "country_id" => 101,
                "state_id" => 28,
                "name" => json_encode(["en" => "Ningde", "zh" => "宁德"]),
                "code" => "9"
            ],
            [
                "id" => 2803,
                "country_id" => 101,
                "state_id" => 41,
                "name" => json_encode(["en" => "Nanchang", "zh" => "南昌"]),
                "code" => "1"
            ],
            [
                "id" => 2804,
                "country_id" => 101,
                "state_id" => 41,
                "name" => json_encode(["en" => "Jingdezhen", "zh" => "景德镇"]),
                "code" => "2"
            ],
            [
                "id" => 2805,
                "country_id" => 101,
                "state_id" => 41,
                "name" => json_encode(["en" => "Pingxiang", "zh" => "萍乡"]),
                "code" => "3"
            ],
            [
                "id" => 2806,
                "country_id" => 101,
                "state_id" => 41,
                "name" => json_encode(["en" => "Jiujiang", "zh" => "九江"]),
                "code" => "4"
            ],
            [
                "id" => 2807,
                "country_id" => 101,
                "state_id" => 41,
                "name" => json_encode(["en" => "Xinyu", "zh" => "新余"]),
                "code" => "5"
            ],
            [
                "id" => 2808,
                "country_id" => 101,
                "state_id" => 41,
                "name" => json_encode(["en" => "Yingtan", "zh" => "鹰潭"]),
                "code" => "6"
            ],
            [
                "id" => 2809,
                "country_id" => 101,
                "state_id" => 41,
                "name" => json_encode(["en" => "Ganzhou", "zh" => "赣州"]),
                "code" => "7"
            ],
            [
                "id" => 2810,
                "country_id" => 101,
                "state_id" => 41,
                "name" => json_encode(["en" => "Ji'an", "zh" => "吉安"]),
                "code" => "8"
            ],
            [
                "id" => 2811,
                "country_id" => 101,
                "state_id" => 41,
                "name" => json_encode(["en" => "Yichun", "zh" => "宜春"]),
                "code" => "9"
            ],
            [
                "id" => 2812,
                "country_id" => 101,
                "state_id" => 41,
                "name" => json_encode(["en" => "Fuzhou", "zh" => "抚州"]),
                "code" => "10"
            ],
            [
                "id" => 2813,
                "country_id" => 101,
                "state_id" => 41,
                "name" => json_encode(["en" => "Shangrao", "zh" => "上饶"]),
                "code" => "11"
            ],
            [
                "id" => 2814,
                "country_id" => 101,
                "state_id" => 47,
                "name" => json_encode(["en" => "Jinan", "zh" => "济南"]),
                "code" => "1"
            ],
            [
                "id" => 2815,
                "country_id" => 101,
                "state_id" => 47,
                "name" => json_encode(["en" => "Qingdao", "zh" => "青岛"]),
                "code" => "2"
            ],
            [
                "id" => 2816,
                "country_id" => 101,
                "state_id" => 47,
                "name" => json_encode(["en" => "Zibo", "zh" => "淄博"]),
                "code" => "3"
            ],
            [
                "id" => 2817,
                "country_id" => 101,
                "state_id" => 47,
                "name" => json_encode(["en" => "Zaozhuang", "zh" => "枣庄"]),
                "code" => "4"
            ],
            [
                "id" => 2818,
                "country_id" => 101,
                "state_id" => 47,
                "name" => json_encode(["en" => "Dongying", "zh" => "东营"]),
                "code" => "5"
            ],
            [
                "id" => 2819,
                "country_id" => 101,
                "state_id" => 47,
                "name" => json_encode(["en" => "Yantai", "zh" => "烟台"]),
                "code" => "6"
            ],
            [
                "id" => 2820,
                "country_id" => 101,
                "state_id" => 47,
                "name" => json_encode(["en" => "Weifang", "zh" => "潍坊"]),
                "code" => "7"
            ],
            [
                "id" => 2821,
                "country_id" => 101,
                "state_id" => 47,
                "name" => json_encode(["en" => "Jining", "zh" => "济宁"]),
                "code" => "8"
            ],
            [
                "id" => 2822,
                "country_id" => 101,
                "state_id" => 47,
                "name" => json_encode(["en" => "Tai'an", "zh" => "泰安"]),
                "code" => "9"
            ],
            [
                "id" => 2823,
                "country_id" => 101,
                "state_id" => 47,
                "name" => json_encode(["en" => "Weihai", "zh" => "威海"]),
                "code" => "10"
            ],
            [
                "id" => 2824,
                "country_id" => 101,
                "state_id" => 47,
                "name" => json_encode(["en" => "Rizhao", "zh" => "日照"]),
                "code" => "11"
            ],
            [
                "id" => 2825,
                "country_id" => 101,
                "state_id" => 47,
                "name" => json_encode(["en" => "Laiwu", "zh" => "莱芜"]),
                "code" => "12"
            ],
            [
                "id" => 2826,
                "country_id" => 101,
                "state_id" => 47,
                "name" => json_encode(["en" => "Linyi", "zh" => "临沂"]),
                "code" => "13"
            ],
            [
                "id" => 2827,
                "country_id" => 101,
                "state_id" => 47,
                "name" => json_encode(["en" => "Dezhou", "zh" => "德州"]),
                "code" => "14"
            ],
            [
                "id" => 2828,
                "country_id" => 101,
                "state_id" => 47,
                "name" => json_encode(["en" => "Liaocheng", "zh" => "聊城"]),
                "code" => "15"
            ],
            [
                "id" => 2829,
                "country_id" => 101,
                "state_id" => 47,
                "name" => json_encode(["en" => "Binzhou", "zh" => "滨州"]),
                "code" => "16"
            ],
            [
                "id" => 2830,
                "country_id" => 101,
                "state_id" => 47,
                "name" => json_encode(["en" => "Heze", "zh" => "菏泽"]),
                "code" => "17"
            ],
            [
                "id" => 2831,
                "country_id" => 101,
                "state_id" => 36,
                "name" => json_encode(["en" => "Zhengzhou", "zh" => "郑州"]),
                "code" => "1"
            ],
            [
                "id" => 2832,
                "country_id" => 101,
                "state_id" => 36,
                "name" => json_encode(["en" => "Kaifeng", "zh" => "开封"]),
                "code" => "2"
            ],
            [
                "id" => 2833,
                "country_id" => 101,
                "state_id" => 36,
                "name" => json_encode(["en" => "Luoyang", "zh" => "洛阳"]),
                "code" => "3"
            ],
            [
                "id" => 2834,
                "country_id" => 101,
                "state_id" => 36,
                "name" => json_encode(["en" => "Pingdingshan", "zh" => "平顶山"]),
                "code" => "4"
            ],
            [
                "id" => 2835,
                "country_id" => 101,
                "state_id" => 36,
                "name" => json_encode(["en" => "Anyang", "zh" => "安阳"]),
                "code" => "5"
            ],
            [
                "id" => 2836,
                "country_id" => 101,
                "state_id" => 36,
                "name" => json_encode(["en" => "Hebi", "zh" => "鹤壁"]),
                "code" => "6"
            ],
            [
                "id" => 2837,
                "country_id" => 101,
                "state_id" => 36,
                "name" => json_encode(["en" => "Xinxiang", "zh" => "新乡"]),
                "code" => "7"
            ],
            [
                "id" => 2838,
                "country_id" => 101,
                "state_id" => 36,
                "name" => json_encode(["en" => "Jiaozuo", "zh" => "焦作"]),
                "code" => "8"
            ],
            [
                "id" => 2839,
                "country_id" => 101,
                "state_id" => 36,
                "name" => json_encode(["en" => "Puyang", "zh" => "濮阳"]),
                "code" => "9"
            ],
            [
                "id" => 2840,
                "country_id" => 101,
                "state_id" => 36,
                "name" => json_encode(["en" => "Xuchang", "zh" => "许昌"]),
                "code" => "10"
            ],
            [
                "id" => 2841,
                "country_id" => 101,
                "state_id" => 36,
                "name" => json_encode(["en" => "Luohe", "zh" => "漯河"]),
                "code" => "11"
            ],
            [
                "id" => 2842,
                "country_id" => 101,
                "state_id" => 36,
                "name" => json_encode(["en" => "Sanmenxia", "zh" => "三门峡"]),
                "code" => "12"
            ],
            [
                "id" => 2843,
                "country_id" => 101,
                "state_id" => 36,
                "name" => json_encode(["en" => "Nanyang", "zh" => "南阳"]),
                "code" => "13"
            ],
            [
                "id" => 2844,
                "country_id" => 101,
                "state_id" => 36,
                "name" => json_encode(["en" => "Shangqiu", "zh" => "商丘"]),
                "code" => "14"
            ],
            [
                "id" => 2845,
                "country_id" => 101,
                "state_id" => 36,
                "name" => json_encode(["en" => "Xinyang", "zh" => "信阳"]),
                "code" => "15"
            ],
            [
                "id" => 2846,
                "country_id" => 101,
                "state_id" => 36,
                "name" => json_encode(["en" => "Zhoukou", "zh" => "周口"]),
                "code" => "16"
            ],
            [
                "id" => 2847,
                "country_id" => 101,
                "state_id" => 36,
                "name" => json_encode(["en" => "Zhumadian", "zh" => "驻马店"]),
                "code" => "17"
            ],
            [
                "id" => 2848,
                "country_id" => 101,
                "state_id" => 36,
                "name" => json_encode(["en" => "Jiyuan", "zh" => "济源"]),
                "code" => "18"
            ],
            [
                "id" => 2849,
                "country_id" => 101,
                "state_id" => 37,
                "name" => json_encode(["en" => "Wuhan", "zh" => "武汉"]),
                "code" => "1"
            ],
            [
                "id" => 2850,
                "country_id" => 101,
                "state_id" => 37,
                "name" => json_encode(["en" => "Huangshi", "zh" => "黄石"]),
                "code" => "2"
            ],
            [
                "id" => 2851,
                "country_id" => 101,
                "state_id" => 37,
                "name" => json_encode(["en" => "Shiyan", "zh" => "十堰"]),
                "code" => "3"
            ],
            [
                "id" => 2852,
                "country_id" => 101,
                "state_id" => 37,
                "name" => json_encode(["en" => "Yichang", "zh" => "宜昌"]),
                "code" => "5"
            ],
            [
                "id" => 2853,
                "country_id" => 101,
                "state_id" => 37,
                "name" => json_encode(["en" => "Xiangyang", "zh" => "襄阳"]),
                "code" => "6"
            ],
            [
                "id" => 2854,
                "country_id" => 101,
                "state_id" => 37,
                "name" => json_encode(["en" => "Ezhou", "zh" => "鄂州"]),
                "code" => "7"
            ],
            [
                "id" => 2855,
                "country_id" => 101,
                "state_id" => 37,
                "name" => json_encode(["en" => "Jingmen", "zh" => "荆门"]),
                "code" => "8"
            ],
            [
                "id" => 2856,
                "country_id" => 101,
                "state_id" => 37,
                "name" => json_encode(["en" => "Xiaogan", "zh" => "孝感"]),
                "code" => "9"
            ],
            [
                "id" => 2857,
                "country_id" => 101,
                "state_id" => 37,
                "name" => json_encode(["en" => "Jingzhou", "zh" => "荆州"]),
                "code" => "10"
            ],
            [
                "id" => 2858,
                "country_id" => 101,
                "state_id" => 37,
                "name" => json_encode(["en" => "Huanggang", "zh" => "黄冈"]),
                "code" => "11"
            ],
            [
                "id" => 2859,
                "country_id" => 101,
                "state_id" => 37,
                "name" => json_encode(["en" => "Xianning", "zh" => "咸宁"]),
                "code" => "12"
            ],
            [
                "id" => 2860,
                "country_id" => 101,
                "state_id" => 37,
                "name" => json_encode(["en" => "Suizhou", "zh" => "随州"]),
                "code" => "13"
            ],
            [
                "id" => 2861,
                "country_id" => 101,
                "state_id" => 37,
                "name" => json_encode(["en" => "Enshi Tujia-Miao Autonomous Prefecture", "zh" => "恩施"]),
                "code" => "28"
            ],
            [
                "id" => 2862,
                "country_id" => 101,
                "state_id" => 37,
                "name" => json_encode(["en" => "Xiantao", "zh" => "仙桃"]),
                "code" => "94"
            ],
            [
                "id" => 2863,
                "country_id" => 101,
                "state_id" => 37,
                "name" => json_encode(["en" => "Qianjiang", "zh" => "潜江"]),
                "code" => "95"
            ],
            [
                "id" => 2864,
                "country_id" => 101,
                "state_id" => 37,
                "name" => json_encode(["en" => "Tianmen", "zh" => "天门"]),
                "code" => "96"
            ],
            [
                "id" => 2865,
                "country_id" => 101,
                "state_id" => 37,
                "name" => json_encode(["en" => "Shennongjia", "zh" => "神农架"]),
                "code" => "a21"
            ],
            [
                "id" => 2866,
                "country_id" => 101,
                "state_id" => 38,
                "name" => json_encode(["en" => "Changsha", "zh" => "长沙"]),
                "code" => "1"
            ],
            [
                "id" => 2867,
                "country_id" => 101,
                "state_id" => 38,
                "name" => json_encode(["en" => "Zhuzhou", "zh" => "株洲"]),
                "code" => "2"
            ],
            [
                "id" => 2868,
                "country_id" => 101,
                "state_id" => 38,
                "name" => json_encode(["en" => "Xiangtan", "zh" => "湘潭"]),
                "code" => "3"
            ],
            [
                "id" => 2869,
                "country_id" => 101,
                "state_id" => 38,
                "name" => json_encode(["en" => "Hengyang", "zh" => "衡阳"]),
                "code" => "4"
            ],
            [
                "id" => 2870,
                "country_id" => 101,
                "state_id" => 38,
                "name" => json_encode(["en" => "Shaoyang", "zh" => "邵阳"]),
                "code" => "5"
            ],
            [
                "id" => 2871,
                "country_id" => 101,
                "state_id" => 38,
                "name" => json_encode(["en" => "Yueyang", "zh" => "岳阳"]),
                "code" => "6"
            ],
            [
                "id" => 2872,
                "country_id" => 101,
                "state_id" => 38,
                "name" => json_encode(["en" => "Changde", "zh" => "常德"]),
                "code" => "7"
            ],
            [
                "id" => 2873,
                "country_id" => 101,
                "state_id" => 38,
                "name" => json_encode(["en" => "Zhangjiajie", "zh" => "张家界"]),
                "code" => "8"
            ],
            [
                "id" => 2874,
                "country_id" => 101,
                "state_id" => 38,
                "name" => json_encode(["en" => "Yiyang", "zh" => "益阳"]),
                "code" => "9"
            ],
            [
                "id" => 2875,
                "country_id" => 101,
                "state_id" => 38,
                "name" => json_encode(["en" => "Chenzhou", "zh" => "郴州"]),
                "code" => "10"
            ],
            [
                "id" => 2876,
                "country_id" => 101,
                "state_id" => 38,
                "name" => json_encode(["en" => "Yongzhou", "zh" => "永州"]),
                "code" => "11"
            ],
            [
                "id" => 2877,
                "country_id" => 101,
                "state_id" => 38,
                "name" => json_encode(["en" => "Huaihua", "zh" => "怀化"]),
                "code" => "12"
            ],
            [
                "id" => 2878,
                "country_id" => 101,
                "state_id" => 38,
                "name" => json_encode(["en" => "Loudi", "zh" => "娄底"]),
                "code" => "13"
            ],
            [
                "id" => 2879,
                "country_id" => 101,
                "state_id" => 38,
                "name" => json_encode(["en" => "Xiangxi Tujia-Miao Autonomous Prefecture", "zh" => "湘西"]),
                "code" => "31"
            ],
            [
                "id" => 2880,
                "country_id" => 101,
                "state_id" => 30,
                "name" => json_encode(["en" => "Guangzhou", "zh" => "广州"]),
                "code" => "1"
            ],
            [
                "id" => 2881,
                "country_id" => 101,
                "state_id" => 30,
                "name" => json_encode(["en" => "Shaoguan", "zh" => "韶关"]),
                "code" => "2"
            ],
            [
                "id" => 2882,
                "country_id" => 101,
                "state_id" => 30,
                "name" => json_encode(["en" => "Shenzhen", "zh" => "深圳"]),
                "code" => "3"
            ],
            [
                "id" => 2883,
                "country_id" => 101,
                "state_id" => 30,
                "name" => json_encode(["en" => "Zhuhai", "zh" => "珠海"]),
                "code" => "4"
            ],
            [
                "id" => 2884,
                "country_id" => 101,
                "state_id" => 30,
                "name" => json_encode(["en" => "Shantou", "zh" => "汕头"]),
                "code" => "5"
            ],
            [
                "id" => 2885,
                "country_id" => 101,
                "state_id" => 30,
                "name" => json_encode(["en" => "Foshan", "zh" => "佛山"]),
                "code" => "6"
            ],
            [
                "id" => 2886,
                "country_id" => 101,
                "state_id" => 30,
                "name" => json_encode(["en" => "Jiangmen", "zh" => "江门"]),
                "code" => "7"
            ],
            [
                "id" => 2887,
                "country_id" => 101,
                "state_id" => 30,
                "name" => json_encode(["en" => "Zhanjiang", "zh" => "湛江"]),
                "code" => "8"
            ],
            [
                "id" => 2888,
                "country_id" => 101,
                "state_id" => 30,
                "name" => json_encode(["en" => "Maoming", "zh" => "茂名"]),
                "code" => "9"
            ],
            [
                "id" => 2889,
                "country_id" => 101,
                "state_id" => 30,
                "name" => json_encode(["en" => "Zhaoqing", "zh" => "肇庆"]),
                "code" => "12"
            ],
            [
                "id" => 2890,
                "country_id" => 101,
                "state_id" => 30,
                "name" => json_encode(["en" => "Huizhou", "zh" => "惠州"]),
                "code" => "13"
            ],
            [
                "id" => 2891,
                "country_id" => 101,
                "state_id" => 30,
                "name" => json_encode(["en" => "Meizhou", "zh" => "梅州"]),
                "code" => "14"
            ],
            [
                "id" => 2892,
                "country_id" => 101,
                "state_id" => 30,
                "name" => json_encode(["en" => "Shanwei", "zh" => "汕尾"]),
                "code" => "15"
            ],
            [
                "id" => 2893,
                "country_id" => 101,
                "state_id" => 30,
                "name" => json_encode(["en" => "Heyuan", "zh" => "河源"]),
                "code" => "16"
            ],
            [
                "id" => 2894,
                "country_id" => 101,
                "state_id" => 30,
                "name" => json_encode(["en" => "Yangjiang", "zh" => "阳江"]),
                "code" => "17"
            ],
            [
                "id" => 2895,
                "country_id" => 101,
                "state_id" => 30,
                "name" => json_encode(["en" => "Qingyuan", "zh" => "清远"]),
                "code" => "18"
            ],
            [
                "id" => 2896,
                "country_id" => 101,
                "state_id" => 30,
                "name" => json_encode(["en" => "Dongguan", "zh" => "东莞"]),
                "code" => "19"
            ],
            [
                "id" => 2897,
                "country_id" => 101,
                "state_id" => 30,
                "name" => json_encode(["en" => "Zhongshan", "zh" => "中山"]),
                "code" => "20"
            ],
            [
                "id" => 2898,
                "country_id" => 101,
                "state_id" => 30,
                "name" => json_encode(["en" => "Chaozhou", "zh" => "潮州"]),
                "code" => "51"
            ],
            [
                "id" => 2899,
                "country_id" => 101,
                "state_id" => 30,
                "name" => json_encode(["en" => "Jieyang", "zh" => "揭阳"]),
                "code" => "52"
            ],
            [
                "id" => 2900,
                "country_id" => 101,
                "state_id" => 30,
                "name" => json_encode(["en" => "Yunfu", "zh" => "云浮"]),
                "code" => "53"
            ],
            [
                "id" => 2901,
                "country_id" => 101,
                "state_id" => 31,
                "name" => json_encode(["en" => "Nanning", "zh" => "南宁"]),
                "code" => "1"
            ],
            [
                "id" => 2902,
                "country_id" => 101,
                "state_id" => 31,
                "name" => json_encode(["en" => "Liuzhou", "zh" => "柳州"]),
                "code" => "2"
            ],
            [
                "id" => 2903,
                "country_id" => 101,
                "state_id" => 31,
                "name" => json_encode(["en" => "Guilin", "zh" => "桂林"]),
                "code" => "3"
            ],
            [
                "id" => 2904,
                "country_id" => 101,
                "state_id" => 31,
                "name" => json_encode(["en" => "Wuzhou", "zh" => "梧州"]),
                "code" => "4"
            ],
            [
                "id" => 2905,
                "country_id" => 101,
                "state_id" => 31,
                "name" => json_encode(["en" => "Beihai", "zh" => "北海"]),
                "code" => "5"
            ],
            [
                "id" => 2906,
                "country_id" => 101,
                "state_id" => 31,
                "name" => json_encode(["en" => "Fangchenggang", "zh" => "防城港"]),
                "code" => "6"
            ],
            [
                "id" => 2907,
                "country_id" => 101,
                "state_id" => 31,
                "name" => json_encode(["en" => "Qinzhou", "zh" => "钦州"]),
                "code" => "7"
            ],
            [
                "id" => 2908,
                "country_id" => 101,
                "state_id" => 31,
                "name" => json_encode(["en" => "Guigang", "zh" => "贵港"]),
                "code" => "8"
            ],
            [
                "id" => 2909,
                "country_id" => 101,
                "state_id" => 31,
                "name" => json_encode(["en" => "Yulin", "zh" => "玉林"]),
                "code" => "9"
            ],
            [
                "id" => 2910,
                "country_id" => 101,
                "state_id" => 31,
                "name" => json_encode(["en" => "Baise", "zh" => "百色"]),
                "code" => "10"
            ],
            [
                "id" => 2911,
                "country_id" => 101,
                "state_id" => 31,
                "name" => json_encode(["en" => "Hezhou", "zh" => "贺州"]),
                "code" => "11"
            ],
            [
                "id" => 2912,
                "country_id" => 101,
                "state_id" => 31,
                "name" => json_encode(["en" => "Hechi", "zh" => "河池"]),
                "code" => "12"
            ],
            [
                "id" => 2913,
                "country_id" => 101,
                "state_id" => 31,
                "name" => json_encode(["en" => "Laibin", "zh" => "来宾"]),
                "code" => "13"
            ],
            [
                "id" => 2914,
                "country_id" => 101,
                "state_id" => 31,
                "name" => json_encode(["en" => "Chongzuo", "zh" => "崇左"]),
                "code" => "14"
            ],
            [
                "id" => 2915,
                "country_id" => 101,
                "state_id" => 33,
                "name" => json_encode(["en" => "Haikou", "zh" => "海口"]),
                "code" => "1"
            ],
            [
                "id" => 2916,
                "country_id" => 101,
                "state_id" => 33,
                "name" => json_encode(["en" => "Sanya", "zh" => "三亚"]),
                "code" => "2"
            ],
            [
                "id" => 2917,
                "country_id" => 101,
                "state_id" => 33,
                "name" => json_encode(["en" => "Shansha", "zh" => "三沙"]),
                "code" => "3"
            ],
            [
                "id" => 2918,
                "country_id" => 101,
                "state_id" => 33,
                "name" => json_encode(["en" => "Wuzhishan", "zh" => "五指山"]),
                "code" => "91"
            ],
            [
                "id" => 2919,
                "country_id" => 101,
                "state_id" => 33,
                "name" => json_encode(["en" => "Qionghai", "zh" => "琼海"]),
                "code" => "92"
            ],
            [
                "id" => 2920,
                "country_id" => 101,
                "state_id" => 33,
                "name" => json_encode(["en" => "Danzhou", "zh" => "儋州"]),
                "code" => "93"
            ],
            [
                "id" => 2921,
                "country_id" => 101,
                "state_id" => 33,
                "name" => json_encode(["en" => "Wenchang", "zh" => "文昌"]),
                "code" => "95"
            ],
            [
                "id" => 2922,
                "country_id" => 101,
                "state_id" => 33,
                "name" => json_encode(["en" => "Wanning", "zh" => "万宁"]),
                "code" => "96"
            ],
            [
                "id" => 2923,
                "country_id" => 101,
                "state_id" => 33,
                "name" => json_encode(["en" => "Dongfang", "zh" => "东方"]),
                "code" => "97"
            ],
            [
                "id" => 2924,
                "country_id" => 101,
                "state_id" => 33,
                "name" => json_encode(["en" => "Ding'an", "zh" => "定安"]),
                "code" => "a25"
            ],
            [
                "id" => 2925,
                "country_id" => 101,
                "state_id" => 33,
                "name" => json_encode(["en" => "Tunchang", "zh" => "屯昌"]),
                "code" => "a26"
            ],
            [
                "id" => 2926,
                "country_id" => 101,
                "state_id" => 33,
                "name" => json_encode(["en" => "Cengmai", "zh" => "澄迈"]),
                "code" => "a27"
            ],
            [
                "id" => 2927,
                "country_id" => 101,
                "state_id" => 33,
                "name" => json_encode(["en" => "Lingao", "zh" => "临高"]),
                "code" => "a28"
            ],
            [
                "id" => 2928,
                "country_id" => 101,
                "state_id" => 33,
                "name" => json_encode(["en" => "Baisha Li Autonomous County", "zh" => "白沙"]),
                "code" => "a30"
            ],
            [
                "id" => 2929,
                "country_id" => 101,
                "state_id" => 33,
                "name" => json_encode(["en" => "Jiang Li Autonomous County", "zh" => "昌江"]),
                "code" => "a31"
            ],
            [
                "id" => 2930,
                "country_id" => 101,
                "state_id" => 33,
                "name" => json_encode(["en" => "Ledong Li Autonomous County", "zh" => "乐东"]),
                "code" => "a33"
            ],
            [
                "id" => 2931,
                "country_id" => 101,
                "state_id" => 33,
                "name" => json_encode(["en" => "Lingshui Li Autonomous County", "zh" => "陵水"]),
                "code" => "a34"
            ],
            [
                "id" => 2932,
                "country_id" => 101,
                "state_id" => 33,
                "name" => json_encode(["en" => "Baoting Li-Miao Autonomous County", "zh" => "保亭"]),
                "code" => "a35"
            ],
            [
                "id" => 2933,
                "country_id" => 101,
                "state_id" => 33,
                "name" => json_encode(["en" => "Qiongzhong Li-Miao Autonomous County", "zh" => "琼中"]),
                "code" => "a36"
            ],
            [
                "id" => 2934,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Wanzhou", "zh" => "万州"]),
                "code" => "1"
            ],
            [
                "id" => 2935,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Fuling", "zh" => "涪陵"]),
                "code" => "2"
            ],
            [
                "id" => 2936,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Yuzhong", "zh" => "渝中"]),
                "code" => "3"
            ],
            [
                "id" => 2937,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Dadukou", "zh" => "大渡口"]),
                "code" => "4"
            ],
            [
                "id" => 2938,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Jiangbei", "zh" => "江北"]),
                "code" => "5"
            ],
            [
                "id" => 2939,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Shapingba", "zh" => "沙坪坝"]),
                "code" => "6"
            ],
            [
                "id" => 2940,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Jiulongpo", "zh" => "九龙坡"]),
                "code" => "7"
            ],
            [
                "id" => 2941,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Nan'an", "zh" => "南岸"]),
                "code" => "8"
            ],
            [
                "id" => 2942,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Beibei", "zh" => "北碚"]),
                "code" => "9"
            ],
            [
                "id" => 2943,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Liangjiang", "zh" => "两江新区"]),
                "code" => "85"
            ],
            [
                "id" => 2944,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Wansheng", "zh" => "万盛"]),
                "code" => "10"
            ],
            [
                "id" => 2945,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Shuangqiao", "zh" => "双桥"]),
                "code" => "11"
            ],
            [
                "id" => 2946,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Yubei", "zh" => "渝北"]),
                "code" => "12"
            ],
            [
                "id" => 2947,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Ba'nan", "zh" => "巴南"]),
                "code" => "13"
            ],
            [
                "id" => 2948,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Changshou", "zh" => "长寿"]),
                "code" => "21"
            ],
            [
                "id" => 2949,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Qijiang", "zh" => "綦江"]),
                "code" => "22"
            ],
            [
                "id" => 2950,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Tongnan", "zh" => "潼南"]),
                "code" => "23"
            ],
            [
                "id" => 2951,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Tongliang", "zh" => "铜梁"]),
                "code" => "24"
            ],
            [
                "id" => 2952,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Dazu", "zh" => "大足"]),
                "code" => "25"
            ],
            [
                "id" => 2953,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Rongchang", "zh" => "荣昌"]),
                "code" => "26"
            ],
            [
                "id" => 2954,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Bishan", "zh" => "璧山"]),
                "code" => "27"
            ],
            [
                "id" => 2955,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Liangping", "zh" => "梁平"]),
                "code" => "28"
            ],
            [
                "id" => 2956,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Chengkou", "zh" => "城口"]),
                "code" => "29"
            ],
            [
                "id" => 2957,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Fengdu", "zh" => "丰都"]),
                "code" => "30"
            ],
            [
                "id" => 2958,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Dianjiang", "zh" => "垫江"]),
                "code" => "31"
            ],
            [
                "id" => 2959,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Wulong", "zh" => "武隆"]),
                "code" => "32"
            ],
            [
                "id" => 2960,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Zhongxian", "zh" => "忠县"]),
                "code" => "33"
            ],
            [
                "id" => 2961,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Kaixian", "zh" => "开县"]),
                "code" => "34"
            ],
            [
                "id" => 2962,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Yunyang", "zh" => "云阳"]),
                "code" => "35"
            ],
            [
                "id" => 2963,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Fengjie", "zh" => "奉节"]),
                "code" => "36"
            ],
            [
                "id" => 2964,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Wushan", "zh" => "巫山"]),
                "code" => "37"
            ],
            [
                "id" => 2965,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Wuxi", "zh" => "巫溪"]),
                "code" => "38"
            ],
            [
                "id" => 2966,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Qianjiang", "zh" => "黔江"]),
                "code" => "39"
            ],
            [
                "id" => 2967,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Shizhu Tujia Autonomous Country", "zh" => "石柱"]),
                "code" => "40"
            ],
            [
                "id" => 2968,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Xiushan Tujia-Miao Autonomous Country", "zh" => "秀山"]),
                "code" => "41"
            ],
            [
                "id" => 2969,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Youyang Tujia-Miao Autonomous Country", "zh" => "酉阳"]),
                "code" => "42"
            ],
            [
                "id" => 2970,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Pengshui Miao-Tujia Autonomous Country", "zh" => "彭水"]),
                "code" => "43"
            ],
            [
                "id" => 2971,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Jiangjin", "zh" => "江津"]),
                "code" => "81"
            ],
            [
                "id" => 2972,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Hechuan", "zh" => "合川"]),
                "code" => "82"
            ],
            [
                "id" => 2973,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Yongchuan", "zh" => "永川"]),
                "code" => "83"
            ],
            [
                "id" => 2974,
                "country_id" => 101,
                "state_id" => 27,
                "name" => json_encode(["en" => "Liangjiangxinqu", "zh" => "南川"]),
                "code" => "84"
            ],
            [
                "id" => 2975,
                "country_id" => 101,
                "state_id" => 50,
                "name" => json_encode(["en" => "Chengdu", "zh" => "成都"]),
                "code" => "1"
            ],
            [
                "id" => 2976,
                "country_id" => 101,
                "state_id" => 50,
                "name" => json_encode(["en" => "Zigong", "zh" => "自贡"]),
                "code" => "3"
            ],
            [
                "id" => 2977,
                "country_id" => 101,
                "state_id" => 50,
                "name" => json_encode(["en" => "Panzhihua", "zh" => "攀枝花"]),
                "code" => "4"
            ],
            [
                "id" => 2978,
                "country_id" => 101,
                "state_id" => 50,
                "name" => json_encode(["en" => "Luzhou", "zh" => "泸州"]),
                "code" => "5"
            ],
            [
                "id" => 2979,
                "country_id" => 101,
                "state_id" => 50,
                "name" => json_encode(["en" => "Deyang", "zh" => "德阳"]),
                "code" => "6"
            ],
            [
                "id" => 2980,
                "country_id" => 101,
                "state_id" => 50,
                "name" => json_encode(["en" => "Mianyang", "zh" => "绵阳"]),
                "code" => "7"
            ],
            [
                "id" => 2981,
                "country_id" => 101,
                "state_id" => 50,
                "name" => json_encode(["en" => "Guangyuan", "zh" => "广元"]),
                "code" => "8"
            ],
            [
                "id" => 2982,
                "country_id" => 101,
                "state_id" => 50,
                "name" => json_encode(["en" => "Suining", "zh" => "遂宁"]),
                "code" => "9"
            ],
            [
                "id" => 2983,
                "country_id" => 101,
                "state_id" => 50,
                "name" => json_encode(["en" => "Neijiang", "zh" => "内江"]),
                "code" => "10"
            ],
            [
                "id" => 2984,
                "country_id" => 101,
                "state_id" => 50,
                "name" => json_encode(["en" => "Leshan", "zh" => "乐山"]),
                "code" => "11"
            ],
            [
                "id" => 2985,
                "country_id" => 101,
                "state_id" => 50,
                "name" => json_encode(["en" => "Nanchong", "zh" => "南充"]),
                "code" => "13"
            ],
            [
                "id" => 2986,
                "country_id" => 101,
                "state_id" => 50,
                "name" => json_encode(["en" => "Meishan", "zh" => "眉山"]),
                "code" => "14"
            ],
            [
                "id" => 2987,
                "country_id" => 101,
                "state_id" => 50,
                "name" => json_encode(["en" => "Yibin", "zh" => "宜宾"]),
                "code" => "15"
            ],
            [
                "id" => 2988,
                "country_id" => 101,
                "state_id" => 50,
                "name" => json_encode(["en" => "Guang'an", "zh" => "广安"]),
                "code" => "16"
            ],
            [
                "id" => 2989,
                "country_id" => 101,
                "state_id" => 50,
                "name" => json_encode(["en" => "Dazhou", "zh" => "达州"]),
                "code" => "17"
            ],
            [
                "id" => 2990,
                "country_id" => 101,
                "state_id" => 50,
                "name" => json_encode(["en" => "Ya'an", "zh" => "雅安"]),
                "code" => "18"
            ],
            [
                "id" => 2991,
                "country_id" => 101,
                "state_id" => 50,
                "name" => json_encode(["en" => "Bazhong", "zh" => "巴中"]),
                "code" => "19"
            ],
            [
                "id" => 2992,
                "country_id" => 101,
                "state_id" => 50,
                "name" => json_encode(["en" => "Ziyang", "zh" => "资阳"]),
                "code" => "20"
            ],
            [
                "id" => 2993,
                "country_id" => 101,
                "state_id" => 50,
                "name" => json_encode(["en" => "Aba Tibetan-Qiang Autonomous Prefecture", "zh" => "阿坝"]),
                "code" => "32"
            ],
            [
                "id" => 2994,
                "country_id" => 101,
                "state_id" => 50,
                "name" => json_encode(["en" => "Garze Tibetan Autonomous Prefecture", "zh" => "甘孜"]),
                "code" => "33"
            ],
            [
                "id" => 2995,
                "country_id" => 101,
                "state_id" => 50,
                "name" => json_encode(["en" => "Liangshan Yi Autonomous Prefecture", "zh" => "凉山"]),
                "code" => "34"
            ],
            [
                "id" => 2996,
                "country_id" => 101,
                "state_id" => 32,
                "name" => json_encode(["en" => "Guiyang", "zh" => "贵阳"]),
                "code" => "1"
            ],
            [
                "id" => 2997,
                "country_id" => 101,
                "state_id" => 32,
                "name" => json_encode(["en" => "Liupanshui", "zh" => "六盘水"]),
                "code" => "2"
            ],
            [
                "id" => 2998,
                "country_id" => 101,
                "state_id" => 32,
                "name" => json_encode(["en" => "Zunyi", "zh" => "遵义"]),
                "code" => "3"
            ],
            [
                "id" => 2999,
                "country_id" => 101,
                "state_id" => 32,
                "name" => json_encode(["en" => "Anshun", "zh" => "安顺"]),
                "code" => "4"
            ],
            [
                "id" => 3000,
                "country_id" => 101,
                "state_id" => 32,
                "name" => json_encode(["en" => "Tongren", "zh" => "铜仁"]),
                "code" => "22"
            ],
            [
                "id" => 3001,
                "country_id" => 101,
                "state_id" => 32,
                "name" => json_encode(["en" => "Qianxinan Buyi-Miao Autonomous Prefecture", "zh" => "黔西南"]),
                "code" => "23"
            ],
            [
                "id" => 3002,
                "country_id" => 101,
                "state_id" => 32,
                "name" => json_encode(["en" => "Bijie", "zh" => "毕节"]),
                "code" => "24"
            ],
            [
                "id" => 3003,
                "country_id" => 101,
                "state_id" => 32,
                "name" => json_encode(["en" => "Qiandongnan Miao-Dong Autonomous Prefecture", "zh" => "黔东南"]),
                "code" => "26"
            ],
            [
                "id" => 3004,
                "country_id" => 101,
                "state_id" => 32,
                "name" => json_encode(["en" => "Qiannan Buyi Autonomous Prefecture", "zh" => "黔南"]),
                "code" => "27"
            ],
            [
                "id" => 3005,
                "country_id" => 101,
                "state_id" => 55,
                "name" => json_encode(["en" => "Kunming", "zh" => "昆明"]),
                "code" => "1"
            ],
            [
                "id" => 3006,
                "country_id" => 101,
                "state_id" => 55,
                "name" => json_encode(["en" => "Qujing", "zh" => "曲靖"]),
                "code" => "3"
            ],
            [
                "id" => 3007,
                "country_id" => 101,
                "state_id" => 55,
                "name" => json_encode(["en" => "Yuxi", "zh" => "玉溪"]),
                "code" => "4"
            ],
            [
                "id" => 3008,
                "country_id" => 101,
                "state_id" => 55,
                "name" => json_encode(["en" => "Baoshan", "zh" => "保山"]),
                "code" => "5"
            ],
            [
                "id" => 3009,
                "country_id" => 101,
                "state_id" => 55,
                "name" => json_encode(["en" => "Zhaotong", "zh" => "昭通"]),
                "code" => "6"
            ],
            [
                "id" => 3010,
                "country_id" => 101,
                "state_id" => 55,
                "name" => json_encode(["en" => "Lijiang", "zh" => "丽江"]),
                "code" => "7"
            ],
            [
                "id" => 3011,
                "country_id" => 101,
                "state_id" => 55,
                "name" => json_encode(["en" => "Pu'er", "zh" => "普洱"]),
                "code" => "8"
            ],
            [
                "id" => 3012,
                "country_id" => 101,
                "state_id" => 55,
                "name" => json_encode(["en" => "Lincang", "zh" => "临沧"]),
                "code" => "9"
            ],
            [
                "id" => 3013,
                "country_id" => 101,
                "state_id" => 55,
                "name" => json_encode(["en" => "Chuxiong Yi Autonomous Prefecture", "zh" => "楚雄"]),
                "code" => "23"
            ],
            [
                "id" => 3014,
                "country_id" => 101,
                "state_id" => 55,
                "name" => json_encode(["en" => "Honghe Hani-Yi Autonomous Prefecture", "zh" => "红河"]),
                "code" => "25"
            ],
            [
                "id" => 3015,
                "country_id" => 101,
                "state_id" => 55,
                "name" => json_encode(["en" => "Wenshan Zhuang-Miao Autonomous Prefecture", "zh" => "文山"]),
                "code" => "26"
            ],
            [
                "id" => 3016,
                "country_id" => 101,
                "state_id" => 55,
                "name" => json_encode(["en" => "Xishuangbanna Dai Autonomous Prefecture", "zh" => "西双版纳"]),
                "code" => "28"
            ],
            [
                "id" => 3017,
                "country_id" => 101,
                "state_id" => 55,
                "name" => json_encode(["en" => "Dali Bai Autonomous Prefecture", "zh" => "大理"]),
                "code" => "29"
            ],
            [
                "id" => 3018,
                "country_id" => 101,
                "state_id" => 55,
                "name" => json_encode(["en" => "Dehong Dai-Jingpo Autonomous Prefecture", "zh" => "德宏"]),
                "code" => "31"
            ],
            [
                "id" => 3019,
                "country_id" => 101,
                "state_id" => 55,
                "name" => json_encode(["en" => "Nujiang Lisu Autonomous Prefecture", "zh" => "怒江"]),
                "code" => "33"
            ],
            [
                "id" => 3020,
                "country_id" => 101,
                "state_id" => 55,
                "name" => json_encode(["en" => "Diqing Tibetan Autonomous Prefecture", "zh" => "迪庆"]),
                "code" => "34"
            ],
            [
                "id" => 3021,
                "country_id" => 101,
                "state_id" => 53,
                "name" => json_encode(["en" => "Lhasa", "zh" => "拉萨"]),
                "code" => "1"
            ],
            [
                "id" => 3022,
                "country_id" => 101,
                "state_id" => 53,
                "name" => json_encode(["en" => "Qamdo", "zh" => "昌都"]),
                "code" => "21"
            ],
            [
                "id" => 3023,
                "country_id" => 101,
                "state_id" => 53,
                "name" => json_encode(["en" => "Shannan", "zh" => "山南"]),
                "code" => "22"
            ],
            [
                "id" => 3024,
                "country_id" => 101,
                "state_id" => 53,
                "name" => json_encode(["en" => "Xigaze", "zh" => "日喀则"]),
                "code" => "23"
            ],
            [
                "id" => 3025,
                "country_id" => 101,
                "state_id" => 53,
                "name" => json_encode(["en" => "Nagqu", "zh" => "那曲"]),
                "code" => "24"
            ],
            [
                "id" => 3026,
                "country_id" => 101,
                "state_id" => 53,
                "name" => json_encode(["en" => "Ngari", "zh" => "阿里"]),
                "code" => "25"
            ],
            [
                "id" => 3027,
                "country_id" => 101,
                "state_id" => 53,
                "name" => json_encode(["en" => "Nyingchi", "zh" => "林芝"]),
                "code" => "26"
            ],
            [
                "id" => 3028,
                "country_id" => 101,
                "state_id" => 46,
                "name" => json_encode(["en" => "Xi'an", "zh" => "西安"]),
                "code" => "1"
            ],
            [
                "id" => 3029,
                "country_id" => 101,
                "state_id" => 46,
                "name" => json_encode(["en" => "Tongchuan", "zh" => "铜川"]),
                "code" => "2"
            ],
            [
                "id" => 3030,
                "country_id" => 101,
                "state_id" => 46,
                "name" => json_encode(["en" => "Baoji", "zh" => "宝鸡"]),
                "code" => "3"
            ],
            [
                "id" => 3031,
                "country_id" => 101,
                "state_id" => 46,
                "name" => json_encode(["en" => "Xianyang", "zh" => "咸阳"]),
                "code" => "4"
            ],
            [
                "id" => 3032,
                "country_id" => 101,
                "state_id" => 46,
                "name" => json_encode(["en" => "Weinan", "zh" => "渭南"]),
                "code" => "5"
            ],
            [
                "id" => 3033,
                "country_id" => 101,
                "state_id" => 46,
                "name" => json_encode(["en" => "Yan'an", "zh" => "延安"]),
                "code" => "6"
            ],
            [
                "id" => 3034,
                "country_id" => 101,
                "state_id" => 46,
                "name" => json_encode(["en" => "Hanzhong", "zh" => "汉中"]),
                "code" => "7"
            ],
            [
                "id" => 3035,
                "country_id" => 101,
                "state_id" => 46,
                "name" => json_encode(["en" => "Yulin", "zh" => "榆林"]),
                "code" => "8"
            ],
            [
                "id" => 3036,
                "country_id" => 101,
                "state_id" => 46,
                "name" => json_encode(["en" => "Ankang", "zh" => "安康"]),
                "code" => "9"
            ],
            [
                "id" => 3037,
                "country_id" => 101,
                "state_id" => 46,
                "name" => json_encode(["en" => "Shangluo", "zh" => "商洛"]),
                "code" => "10"
            ],
            [
                "id" => 3038,
                "country_id" => 101,
                "state_id" => 29,
                "name" => json_encode(["en" => "Lanzhou", "zh" => "兰州"]),
                "code" => "1"
            ],
            [
                "id" => 3039,
                "country_id" => 101,
                "state_id" => 29,
                "name" => json_encode(["en" => "Jinchang", "zh" => "嘉峪关"]),
                "code" => "2"
            ],
            [
                "id" => 3040,
                "country_id" => 101,
                "state_id" => 29,
                "name" => json_encode(["en" => "Baiyin", "zh" => "金昌"]),
                "code" => "3"
            ],
            [
                "id" => 3041,
                "country_id" => 101,
                "state_id" => 29,
                "name" => json_encode(["en" => "Tianshui", "zh" => "白银"]),
                "code" => "4"
            ],
            [
                "id" => 3042,
                "country_id" => 101,
                "state_id" => 29,
                "name" => json_encode(["en" => "Jiayuguan", "zh" => "天水"]),
                "code" => "5"
            ],
            [
                "id" => 3043,
                "country_id" => 101,
                "state_id" => 29,
                "name" => json_encode(["en" => "Wuwei", "zh" => "武威"]),
                "code" => "6"
            ],
            [
                "id" => 3044,
                "country_id" => 101,
                "state_id" => 29,
                "name" => json_encode(["en" => "Zhangye", "zh" => "张掖"]),
                "code" => "7"
            ],
            [
                "id" => 3045,
                "country_id" => 101,
                "state_id" => 29,
                "name" => json_encode(["en" => "Pingliang", "zh" => "平凉"]),
                "code" => "8"
            ],
            [
                "id" => 3046,
                "country_id" => 101,
                "state_id" => 29,
                "name" => json_encode(["en" => "Jiuquan", "zh" => "酒泉"]),
                "code" => "9"
            ],
            [
                "id" => 3047,
                "country_id" => 101,
                "state_id" => 29,
                "name" => json_encode(["en" => "Qingyang", "zh" => "庆阳"]),
                "code" => "10"
            ],
            [
                "id" => 3048,
                "country_id" => 101,
                "state_id" => 29,
                "name" => json_encode(["en" => "Dingxi", "zh" => "定西"]),
                "code" => "11"
            ],
            [
                "id" => 3049,
                "country_id" => 101,
                "state_id" => 29,
                "name" => json_encode(["en" => "Longnan", "zh" => "陇南"]),
                "code" => "12"
            ],
            [
                "id" => 3050,
                "country_id" => 101,
                "state_id" => 29,
                "name" => json_encode(["en" => "Linxia Hui Autonomous Prefecture", "zh" => "临夏"]),
                "code" => "29"
            ],
            [
                "id" => 3051,
                "country_id" => 101,
                "state_id" => 29,
                "name" => json_encode(["en" => "Gannan Tibetan Autonomous Prefecture", "zh" => "甘南"]),
                "code" => "30"
            ],
            [
                "id" => 3052,
                "country_id" => 101,
                "state_id" => 45,
                "name" => json_encode(["en" => "Xining", "zh" => "西宁"]),
                "code" => "1"
            ],
            [
                "id" => 3053,
                "country_id" => 101,
                "state_id" => 45,
                "name" => json_encode(["en" => "Haidong", "zh" => "海东"]),
                "code" => "21"
            ],
            [
                "id" => 3054,
                "country_id" => 101,
                "state_id" => 45,
                "name" => json_encode(["en" => "Haibei Tibetan Autonomous Prefecture", "zh" => "海北"]),
                "code" => "22"
            ],
            [
                "id" => 3055,
                "country_id" => 101,
                "state_id" => 45,
                "name" => json_encode(["en" => "Huangnan Tibetan Autonomous Prefecture", "zh" => "黄南"]),
                "code" => "23"
            ],
            [
                "id" => 3056,
                "country_id" => 101,
                "state_id" => 45,
                "name" => json_encode(["en" => "Hainan Tibetan Autonomous Prefecture", "zh" => "海南"]),
                "code" => "25"
            ],
            [
                "id" => 3057,
                "country_id" => 101,
                "state_id" => 45,
                "name" => json_encode(["en" => "Guoluo Tibetan Autonomous Prefecture", "zh" => "果洛"]),
                "code" => "26"
            ],
            [
                "id" => 3058,
                "country_id" => 101,
                "state_id" => 45,
                "name" => json_encode(["en" => "Yushu Tibetan Autonomous Prefecture", "zh" => "玉树"]),
                "code" => "27"
            ],
            [
                "id" => 3059,
                "country_id" => 101,
                "state_id" => 45,
                "name" => json_encode(["en" => "Haixi Mongol-Tibetan Autonomous Prefecture", "zh" => "海西"]),
                "code" => "28"
            ],
            [
                "id" => 3060,
                "country_id" => 101,
                "state_id" => 44,
                "name" => json_encode(["en" => "Yinchuan", "zh" => "银川"]),
                "code" => "1"
            ],
            [
                "id" => 3061,
                "country_id" => 101,
                "state_id" => 44,
                "name" => json_encode(["en" => "Shizuishan", "zh" => "石嘴山"]),
                "code" => "2"
            ],
            [
                "id" => 3062,
                "country_id" => 101,
                "state_id" => 44,
                "name" => json_encode(["en" => "Wuzhong", "zh" => "吴忠"]),
                "code" => "3"
            ],
            [
                "id" => 3063,
                "country_id" => 101,
                "state_id" => 44,
                "name" => json_encode(["en" => "Guyuan", "zh" => "固原"]),
                "code" => "4"
            ],
            [
                "id" => 3064,
                "country_id" => 101,
                "state_id" => 44,
                "name" => json_encode(["en" => "Zhongwei", "zh" => "中卫"]),
                "code" => "5"
            ],
            [
                "id" => 3065,
                "country_id" => 101,
                "state_id" => 54,
                "name" => json_encode(["en" => "Urumqi", "zh" => "乌鲁木齐"]),
                "code" => "1"
            ],
            [
                "id" => 3066,
                "country_id" => 101,
                "state_id" => 54,
                "name" => json_encode(["en" => "Karamay", "zh" => "克拉玛依"]),
                "code" => "2"
            ],
            [
                "id" => 3067,
                "country_id" => 101,
                "state_id" => 54,
                "name" => json_encode(["en" => "Turpan", "zh" => "吐鲁番"]),
                "code" => "21"
            ],
            [
                "id" => 3068,
                "country_id" => 101,
                "state_id" => 54,
                "name" => json_encode(["en" => "Hami", "zh" => "哈密"]),
                "code" => "22"
            ],
            [
                "id" => 3069,
                "country_id" => 101,
                "state_id" => 54,
                "name" => json_encode(["en" => "Changji Hui Autonomous Prefecture", "zh" => "昌吉"]),
                "code" => "23"
            ],
            [
                "id" => 3070,
                "country_id" => 101,
                "state_id" => 54,
                "name" => json_encode(["en" => "Bortala Mongol Autonomous Prefecture", "zh" => "博尔塔拉"]),
                "code" => "27"
            ],
            [
                "id" => 3071,
                "country_id" => 101,
                "state_id" => 54,
                "name" => json_encode(["en" => "Bayingolin Mongol Autonomous Prefecture", "zh" => "巴音郭楞"]),
                "code" => "28"
            ],
            [
                "id" => 3072,
                "country_id" => 101,
                "state_id" => 54,
                "name" => json_encode(["en" => "Aksu", "zh" => "阿克苏"]),
                "code" => "29"
            ],
            [
                "id" => 3073,
                "country_id" => 101,
                "state_id" => 54,
                "name" => json_encode(["en" => "Kizilsu Kirgiz Autonomous Prefecture", "zh" => "克孜勒苏"]),
                "code" => "30"
            ],
            [
                "id" => 3074,
                "country_id" => 101,
                "state_id" => 54,
                "name" => json_encode(["en" => "Kashi", "zh" => "喀什"]),
                "code" => "31"
            ],
            [
                "id" => 3075,
                "country_id" => 101,
                "state_id" => 54,
                "name" => json_encode(["en" => "Hotan", "zh" => "和田"]),
                "code" => "32"
            ],
            [
                "id" => 3076,
                "country_id" => 101,
                "state_id" => 54,
                "name" => json_encode(["en" => "Ili Kazakh Autonomous Prefecture", "zh" => "伊犁"]),
                "code" => "40"
            ],
            [
                "id" => 3077,
                "country_id" => 101,
                "state_id" => 54,
                "name" => json_encode(["en" => "Tacheng", "zh" => "塔城"]),
                "code" => "42"
            ],
            [
                "id" => 3078,
                "country_id" => 101,
                "state_id" => 54,
                "name" => json_encode(["en" => "Altay", "zh" => "阿勒泰"]),
                "code" => "43"
            ],
            [
                "id" => 3079,
                "country_id" => 101,
                "state_id" => 54,
                "name" => json_encode(["en" => "Shihezi", "zh" => "石河子"]),
                "code" => "91"
            ],
            [
                "id" => 3080,
                "country_id" => 101,
                "state_id" => 54,
                "name" => json_encode(["en" => "Alar", "zh" => "阿拉尔"]),
                "code" => "92"
            ],
            [
                "id" => 3081,
                "country_id" => 101,
                "state_id" => 54,
                "name" => json_encode(["en" => "Tumsuk", "zh" => "图木舒克"]),
                "code" => "93"
            ],
            [
                "id" => 3082,
                "country_id" => 101,
                "state_id" => 54,
                "name" => json_encode(["en" => "Wujiaqu", "zh" => "五家渠"]),
                "code" => "94"
            ],
            [
                "id" => 3083,
                "country_id" => 101,
                "state_id" => 54,
                "name" => json_encode(["en" => "Beitun", "zh" => "北屯"]),
                "code" => "95"
            ],
            [
                "id" => 3084,
                "country_id" => 101,
                "state_id" => 51,
                "name" => json_encode(["en" => "Taipei City", "zh" => "台北市"]),
                "code" => "1"
            ],
            [
                "id" => 3085,
                "country_id" => 101,
                "state_id" => 51,
                "name" => json_encode(["en" => "Kaohsiung City", "zh" => "高雄市"]),
                "code" => "2"
            ],
            [
                "id" => 3086,
                "country_id" => 101,
                "state_id" => 51,
                "name" => json_encode(["en" => "Keelung City", "zh" => "基隆市"]),
                "code" => "3"
            ],
            [
                "id" => 3087,
                "country_id" => 101,
                "state_id" => 51,
                "name" => json_encode(["en" => "Taichung City", "zh" => "台中市"]),
                "code" => "4"
            ],
            [
                "id" => 3088,
                "country_id" => 101,
                "state_id" => 51,
                "name" => json_encode(["en" => "Tainan City", "zh" => "台南市"]),
                "code" => "5"
            ],
            [
                "id" => 3089,
                "country_id" => 101,
                "state_id" => 51,
                "name" => json_encode(["en" => "Hsinchu City", "zh" => "新竹市"]),
                "code" => "6"
            ],
            [
                "id" => 3090,
                "country_id" => 101,
                "state_id" => 51,
                "name" => json_encode(["en" => "Chiayi City", "zh" => "嘉义市"]),
                "code" => "7"
            ],
            [
                "id" => 3091,
                "country_id" => 101,
                "state_id" => 51,
                "name" => json_encode(["en" => "Taipei County", "zh" => "台北县"]),
                "code" => "8"
            ],
            [
                "id" => 3092,
                "country_id" => 101,
                "state_id" => 51,
                "name" => json_encode(["en" => "Ilan County", "zh" => "宜兰县"]),
                "code" => "9"
            ],
            [
                "id" => 3093,
                "country_id" => 101,
                "state_id" => 51,
                "name" => json_encode(["en" => "Taoyuan County", "zh" => "桃园县"]),
                "code" => "10"
            ],
            [
                "id" => 3094,
                "country_id" => 101,
                "state_id" => 51,
                "name" => json_encode(["en" => "Hsinchu County", "zh" => "新竹县"]),
                "code" => "11"
            ],
            [
                "id" => 3095,
                "country_id" => 101,
                "state_id" => 51,
                "name" => json_encode(["en" => "Miaoli County", "zh" => "苗栗县"]),
                "code" => "12"
            ],
            [
                "id" => 3096,
                "country_id" => 101,
                "state_id" => 51,
                "name" => json_encode(["en" => "Taichung County", "zh" => "台中县"]),
                "code" => "13"
            ],
            [
                "id" => 3097,
                "country_id" => 101,
                "state_id" => 51,
                "name" => json_encode(["en" => "Changhwa County", "zh" => "彰化县"]),
                "code" => "14"
            ],
            [
                "id" => 3098,
                "country_id" => 101,
                "state_id" => 51,
                "name" => json_encode(["en" => "Nantou County", "zh" => "南投县"]),
                "code" => "15"
            ],
            [
                "id" => 3099,
                "country_id" => 101,
                "state_id" => 51,
                "name" => json_encode(["en" => "Yunnlin County", "zh" => "云林县"]),
                "code" => "16"
            ],
            [
                "id" => 3100,
                "country_id" => 101,
                "state_id" => 51,
                "name" => json_encode(["en" => "Chiayi County", "zh" => "嘉义县"]),
                "code" => "17"
            ],
            [
                "id" => 3101,
                "country_id" => 101,
                "state_id" => 51,
                "name" => json_encode(["en" => "Tainan County", "zh" => "台南县"]),
                "code" => "18"
            ],
            [
                "id" => 3102,
                "country_id" => 101,
                "state_id" => 51,
                "name" => json_encode(["en" => "Kaohsiung County", "zh" => "高雄县"]),
                "code" => "19"
            ],
            [
                "id" => 3103,
                "country_id" => 101,
                "state_id" => 51,
                "name" => json_encode(["en" => "Pingtung County", "zh" => "屏东县"]),
                "code" => "20"
            ],
            [
                "id" => 3104,
                "country_id" => 101,
                "state_id" => 51,
                "name" => json_encode(["en" => "Taitung County", "zh" => "台东县"]),
                "code" => "22"
            ],
            [
                "id" => 3105,
                "country_id" => 101,
                "state_id" => 51,
                "name" => json_encode(["en" => "Hualian County", "zh" => "花莲县"]),
                "code" => "23"
            ],
            [
                "id" => 3106,
                "country_id" => 101,
                "state_id" => 51,
                "name" => json_encode(["en" => "Penghu County", "zh" => "澎湖县"]),
                "code" => "21"
            ],
            [
                "id" => 3107,
                "country_id" => 170,
                "state_id" => 114,
                "name" => json_encode(["en" => "Palmerston", "zh" => "北帕默斯顿"]),
                "code" => "pal"
            ],
            [
                "id" => 3108,
                "country_id" => 170,
                "state_id" => 114,
                "name" => json_encode(["en" => "Darwin", "zh" => "达尔文"]),
                "code" => "drw"
            ],
            [
                "id" => 3109,
                "country_id" => 170,
                "state_id" => 112,
                "name" => json_encode(["en" => "Canberra", "zh" => "堪培拉"]),
                "code" => "cbr"
            ],
            [
                "id" => 3110,
                "country_id" => 170,
                "state_id" => 115,
                "name" => json_encode(["en" => "Brisbane", "zh" => "布里斯班"]),
                "code" => "bne"
            ],
            [
                "id" => 3111,
                "country_id" => 170,
                "state_id" => 115,
                "name" => json_encode(["en" => "Gold Coast", "zh" => "黄金海岸"]),
                "code" => "ool"
            ],
            [
                "id" => 3112,
                "country_id" => 170,
                "state_id" => 115,
                "name" => json_encode(["en" => "Cairns", "zh" => "凯恩斯"]),
                "code" => "cns"
            ],
            [
                "id" => 3113,
                "country_id" => 170,
                "state_id" => 115,
                "name" => json_encode(["en" => "Caloundra", "zh" => "日光海岸"]),
                "code" => "cud"
            ],
            [
                "id" => 3114,
                "country_id" => 170,
                "state_id" => 115,
                "name" => json_encode(["en" => "Townsville", "zh" => "汤斯维尔"]),
                "code" => "tsv"
            ],
            [
                "id" => 3115,
                "country_id" => 170,
                "state_id" => 115,
                "name" => json_encode(["en" => "Toowoomba", "zh" => "图文巴"]),
                "code" => "twb"
            ],
            [
                "id" => 3116,
                "country_id" => 170,
                "state_id" => 116,
                "name" => json_encode(["en" => "Adelaide", "zh" => "阿德莱德"]),
                "code" => "adl"
            ],
            [
                "id" => 3117,
                "country_id" => 170,
                "state_id" => 116,
                "name" => json_encode(["en" => "Port Augusta", "zh" => "奥古斯塔港"]),
                "code" => "pug"
            ],
            [
                "id" => 3118,
                "country_id" => 170,
                "state_id" => 116,
                "name" => json_encode(["en" => "Mount Gambier", "zh" => "甘比亚山"]),
                "code" => "mgb"
            ],
            [
                "id" => 3119,
                "country_id" => 170,
                "state_id" => 116,
                "name" => json_encode(["en" => "Whyalla", "zh" => "怀阿拉"]),
                "code" => "way"
            ],
            [
                "id" => 3120,
                "country_id" => 170,
                "state_id" => 116,
                "name" => json_encode(["en" => "Port Lincoln", "zh" => "林肯港"]),
                "code" => "plo"
            ],
            [
                "id" => 3121,
                "country_id" => 170,
                "state_id" => 116,
                "name" => json_encode(["en" => "Murray Bridge", "zh" => "默里布里奇"]),
                "code" => "myb"
            ],
            [
                "id" => 3122,
                "country_id" => 170,
                "state_id" => 116,
                "name" => json_encode(["en" => "Port Pirie", "zh" => "皮里港"]),
                "code" => "ppi"
            ],
            [
                "id" => 3123,
                "country_id" => 170,
                "state_id" => 116,
                "name" => json_encode(["en" => "Victor Harbor", "zh" => "维克托港"]),
                "code" => "vha"
            ],
            [
                "id" => 3124,
                "country_id" => 170,
                "state_id" => 117,
                "name" => json_encode(["en" => "Burnie", "zh" => "伯尼港"]),
                "code" => "bwt"
            ],
            [
                "id" => 3125,
                "country_id" => 170,
                "state_id" => 117,
                "name" => json_encode(["en" => "Devonport", "zh" => "德文波特"]),
                "code" => "dpo"
            ],
            [
                "id" => 3126,
                "country_id" => 170,
                "state_id" => 117,
                "name" => json_encode(["en" => "Hobart", "zh" => "霍巴特"]),
                "code" => "hba"
            ],
            [
                "id" => 3127,
                "country_id" => 170,
                "state_id" => 117,
                "name" => json_encode(["en" => "Launceston", "zh" => "朗塞斯顿"]),
                "code" => "lst"
            ],
            [
                "id" => 3128,
                "country_id" => 170,
                "state_id" => 118,
                "name" => json_encode(["en" => "Geelong", "zh" => "吉朗"]),
                "code" => "gex"
            ],
            [
                "id" => 3129,
                "country_id" => 170,
                "state_id" => 118,
                "name" => json_encode(["en" => "Melbourne", "zh" => "墨尔本"]),
                "code" => "mel"
            ],
            [
                "id" => 3130,
                "country_id" => 170,
                "state_id" => 119,
                "name" => json_encode(["en" => "Albany", "zh" => "奥尔巴尼"]),
                "code" => "alh"
            ],
            [
                "id" => 3131,
                "country_id" => 170,
                "state_id" => 119,
                "name" => json_encode(["en" => "Bunbury", "zh" => "班伯里"]),
                "code" => "buy"
            ],
            [
                "id" => 3132,
                "country_id" => 170,
                "state_id" => 119,
                "name" => json_encode(["en" => "Fremantle", "zh" => "弗里曼特尔港"]),
                "code" => "fre"
            ],
            [
                "id" => 3133,
                "country_id" => 170,
                "state_id" => 119,
                "name" => json_encode(["en" => "Geraldton", "zh" => "杰拉尔顿"]),
                "code" => "get"
            ],
            [
                "id" => 3134,
                "country_id" => 170,
                "state_id" => 119,
                "name" => json_encode(["en" => "Kalgoorlie", "zh" => "卡尔古利"]),
                "code" => "kgi"
            ],
            [
                "id" => 3135,
                "country_id" => 170,
                "state_id" => 119,
                "name" => json_encode(["en" => "Mandurah", "zh" => "曼哲拉"]),
                "code" => "mdu"
            ],
            [
                "id" => 3136,
                "country_id" => 170,
                "state_id" => 119,
                "name" => json_encode(["en" => "Perth", "zh" => "珀斯"]),
                "code" => "per"
            ],
            [
                "id" => 3137,
                "country_id" => 170,
                "state_id" => 113,
                "name" => json_encode(["en" => "Newcastle", "zh" => "纽卡斯尔"]),
                "code" => "ntl"
            ],
            [
                "id" => 3138,
                "country_id" => 170,
                "state_id" => 113,
                "name" => json_encode(["en" => "Wollongong", "zh" => "伍伦贡"]),
                "code" => "wol"
            ],
            [
                "id" => 3139,
                "country_id" => 170,
                "state_id" => 113,
                "name" => json_encode(["en" => "Sydney", "zh" => "悉尼"]),
                "code" => "hbs"
            ],
            [
                "id" => 3140,
                "country_id" => 58,
                "state_id" => 3,
                "name" => json_encode(["en" => "Dalseong-gun", "zh" => "达城郡"]),
                "code" => "dsg"
            ],
            [
                "id" => 3141,
                "country_id" => 58,
                "state_id" => 3,
                "name" => json_encode(["en" => "Daegu", "zh" => "大邱"]),
                "code" => "tae"
            ],
            [
                "id" => 3142,
                "country_id" => 58,
                "state_id" => 3,
                "name" => json_encode(["en" => "Suseong-gu", "zh" => "寿城区"]),
                "code" => "sus"
            ],
            [
                "id" => 3143,
                "country_id" => 58,
                "state_id" => 4,
                "name" => json_encode(["en" => "Chuncheon", "zh" => "春川市"]),
                "code" => "chc"
            ],
            [
                "id" => 3144,
                "country_id" => 58,
                "state_id" => 4,
                "name" => json_encode(["en" => "Donghae", "zh" => "东海市"]),
                "code" => "tgh"
            ],
            [
                "id" => 3145,
                "country_id" => 58,
                "state_id" => 4,
                "name" => json_encode(["en" => "Goseong County", "zh" => "高城郡"]),
                "code" => "gsg"
            ],
            [
                "id" => 3146,
                "country_id" => 58,
                "state_id" => 4,
                "name" => json_encode(["en" => "Hoengseong County", "zh" => "横城郡"]),
                "code" => "hsg"
            ],
            [
                "id" => 3147,
                "country_id" => 58,
                "state_id" => 4,
                "name" => json_encode(["en" => "Hongcheon County", "zh" => "洪川郡"]),
                "code" => "hcn"
            ],
            [
                "id" => 3148,
                "country_id" => 58,
                "state_id" => 4,
                "name" => json_encode(["en" => "Hwacheon County", "zh" => "华川郡"]),
                "code" => "hch"
            ],
            [
                "id" => 3149,
                "country_id" => 58,
                "state_id" => 4,
                "name" => json_encode(["en" => "Gangneung", "zh" => "江陵市"]),
                "code" => "kag"
            ],
            [
                "id" => 3150,
                "country_id" => 58,
                "state_id" => 4,
                "name" => json_encode(["en" => "Jeongseon County", "zh" => "旌善郡"]),
                "code" => "jse"
            ],
            [
                "id" => 3151,
                "country_id" => 58,
                "state_id" => 4,
                "name" => json_encode(["en" => "Inje County", "zh" => "麟蹄郡"]),
                "code" => "ije"
            ],
            [
                "id" => 3152,
                "country_id" => 58,
                "state_id" => 4,
                "name" => json_encode(["en" => "Yeongwol County", "zh" => "宁越郡"]),
                "code" => "ywl"
            ],
            [
                "id" => 3153,
                "country_id" => 58,
                "state_id" => 4,
                "name" => json_encode(["en" => "Pyeongchang County", "zh" => "平昌郡"]),
                "code" => "pog"
            ],
            [
                "id" => 3154,
                "country_id" => 58,
                "state_id" => 4,
                "name" => json_encode(["en" => "Samcheok", "zh" => "三陟市"]),
                "code" => "suk"
            ],
            [
                "id" => 3155,
                "country_id" => 58,
                "state_id" => 4,
                "name" => json_encode(["en" => "Sokcho", "zh" => "束草市"]),
                "code" => "sho"
            ],
            [
                "id" => 3156,
                "country_id" => 58,
                "state_id" => 4,
                "name" => json_encode(["en" => "Taebaek", "zh" => "太白市"]),
                "code" => "tbk"
            ],
            [
                "id" => 3157,
                "country_id" => 58,
                "state_id" => 4,
                "name" => json_encode(["en" => "Cheorwon County", "zh" => "铁原郡"]),
                "code" => "cwn"
            ],
            [
                "id" => 3158,
                "country_id" => 58,
                "state_id" => 4,
                "name" => json_encode(["en" => "Yangyang County", "zh" => "襄阳郡"]),
                "code" => "yny"
            ],
            [
                "id" => 3159,
                "country_id" => 58,
                "state_id" => 4,
                "name" => json_encode(["en" => "Yanggu County", "zh" => "杨口郡"]),
                "code" => "ygu"
            ],
            [
                "id" => 3160,
                "country_id" => 58,
                "state_id" => 4,
                "name" => json_encode(["en" => "Wonju", "zh" => "原州市"]),
                "code" => "wju"
            ],
            [
                "id" => 3161,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Anseong", "zh" => "安城市"]),
                "code" => "asg"
            ],
            [
                "id" => 3162,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Ansan", "zh" => "安山市"]),
                "code" => "asn"
            ],
            [
                "id" => 3163,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Anyang", "zh" => "安养市"]),
                "code" => "any"
            ],
            [
                "id" => 3164,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Pocheon", "zh" => "抱川市"]),
                "code" => "poc"
            ],
            [
                "id" => 3165,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Seongnam", "zh" => "城南市"]),
                "code" => "seo"
            ],
            [
                "id" => 3166,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Dongducheon", "zh" => "东豆川市"]),
                "code" => "ddc"
            ],
            [
                "id" => 3167,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Bucheon", "zh" => "富川市"]),
                "code" => "bcn"
            ],
            [
                "id" => 3168,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Goyang", "zh" => "高阳市"]),
                "code" => "gyg"
            ],
            [
                "id" => 3169,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Gwangmyeong", "zh" => "光明市"]),
                "code" => "gmg"
            ],
            [
                "id" => 3170,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Gwangju", "zh" => "广州市"]),
                "code" => "kwu"
            ],
            [
                "id" => 3171,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Gwacheon", "zh" => "果川市"]),
                "code" => "gcn"
            ],
            [
                "id" => 3172,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Hanam", "zh" => "河南市"]),
                "code" => "hnm"
            ],
            [
                "id" => 3173,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Hwaseong", "zh" => "华城市"]),
                "code" => "hch"
            ],
            [
                "id" => 3174,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Gapyeong County", "zh" => "加平郡"]),
                "code" => "gpg"
            ],
            [
                "id" => 3175,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Gimpo", "zh" => "金浦市"]),
                "code" => "gmp"
            ],
            [
                "id" => 3176,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Guri", "zh" => "九里市"]),
                "code" => "gri"
            ],
            [
                "id" => 3177,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Gunpo", "zh" => "军浦市"]),
                "code" => "gun"
            ],
            [
                "id" => 3178,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Yeoju County", "zh" => "骊州郡"]),
                "code" => "yju"
            ],
            [
                "id" => 3179,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Icheon", "zh" => "利川市"]),
                "code" => "ice"
            ],
            [
                "id" => 3180,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Yeoncheon County", "zh" => "涟川郡"]),
                "code" => "ycn"
            ],
            [
                "id" => 3181,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Yongin", "zh" => "龙仁市"]),
                "code" => "yng"
            ],
            [
                "id" => 3182,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Namyangju", "zh" => "南杨州市"]),
                "code" => "nyu"
            ],
            [
                "id" => 3183,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Pyeongtaek", "zh" => "平泽市"]),
                "code" => "ptk"
            ],
            [
                "id" => 3184,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Paju", "zh" => "坡州市"]),
                "code" => "pju"
            ],
            [
                "id" => 3185,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Siheung", "zh" => "始兴市"]),
                "code" => "she"
            ],
            [
                "id" => 3186,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Suwon", "zh" => "水原市"]),
                "code" => "suo"
            ],
            [
                "id" => 3187,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Osan", "zh" => "乌山市"]),
                "code" => "osn"
            ],
            [
                "id" => 3188,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Yangpyeong County", "zh" => "扬平郡"]),
                "code" => "ypg"
            ],
            [
                "id" => 3189,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Yangju", "zh" => "杨州市"]),
                "code" => "yyu"
            ],
            [
                "id" => 3190,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Uiwang", "zh" => "仪旺市"]),
                "code" => "uwn"
            ],
            [
                "id" => 3191,
                "country_id" => 58,
                "state_id" => 5,
                "name" => json_encode(["en" => "Uijeongbu", "zh" => "议政府市"]),
                "code" => "uij"
            ],
            [
                "id" => 3192,
                "country_id" => 58,
                "state_id" => 1,
                "name" => json_encode(["en" => "Andong", "zh" => "安东市"]),
                "code" => "adg"
            ],
            [
                "id" => 3193,
                "country_id" => 58,
                "state_id" => 1,
                "name" => json_encode(["en" => "Bonghwa County", "zh" => "奉化郡"]),
                "code" => "bha"
            ],
            [
                "id" => 3194,
                "country_id" => 58,
                "state_id" => 1,
                "name" => json_encode(["en" => "Goryeong County", "zh" => "高灵郡"]),
                "code" => "grg"
            ],
            [
                "id" => 3195,
                "country_id" => 58,
                "state_id" => 1,
                "name" => json_encode(["en" => "Gumi", "zh" => "龟尾市"]),
                "code" => "kum"
            ],
            [
                "id" => 3196,
                "country_id" => 58,
                "state_id" => 1,
                "name" => json_encode(["en" => "Gimcheon", "zh" => "金泉市"]),
                "code" => "kmc"
            ],
            [
                "id" => 3197,
                "country_id" => 58,
                "state_id" => 1,
                "name" => json_encode(["en" => "Gunwi County", "zh" => "军威郡"]),
                "code" => "gwi"
            ],
            [
                "id" => 3198,
                "country_id" => 58,
                "state_id" => 1,
                "name" => json_encode(["en" => "Yecheon County", "zh" => "醴泉郡"]),
                "code" => "yec"
            ],
            [
                "id" => 3199,
                "country_id" => 58,
                "state_id" => 1,
                "name" => json_encode(["en" => "Pohang", "zh" => "浦项市"]),
                "code" => "kpo"
            ],
            [
                "id" => 3200,
                "country_id" => 58,
                "state_id" => 1,
                "name" => json_encode(["en" => "Chilgok County", "zh" => "漆谷郡"]),
                "code" => "cgk"
            ],
            [
                "id" => 3201,
                "country_id" => 58,
                "state_id" => 1,
                "name" => json_encode(["en" => "Cheongdo County", "zh" => "淸道郡"]),
                "code" => "cdo"
            ],
            [
                "id" => 3202,
                "country_id" => 58,
                "state_id" => 1,
                "name" => json_encode(["en" => "Cheongsong County", "zh" => "靑松郡"]),
                "code" => "csg"
            ],
            [
                "id" => 3203,
                "country_id" => 58,
                "state_id" => 1,
                "name" => json_encode(["en" => "Gyeongsan", "zh" => "庆山市"]),
                "code" => "gys"
            ],
            [
                "id" => 3204,
                "country_id" => 58,
                "state_id" => 1,
                "name" => json_encode(["en" => "Gyeongju", "zh" => "庆州市"]),
                "code" => "gju"
            ],
            [
                "id" => 3205,
                "country_id" => 58,
                "state_id" => 1,
                "name" => json_encode(["en" => "Yeongju", "zh" => "荣州市"]),
                "code" => "yej"
            ],
            [
                "id" => 3206,
                "country_id" => 58,
                "state_id" => 1,
                "name" => json_encode(["en" => "Sangju", "zh" => "尙州市"]),
                "code" => "sju"
            ],
            [
                "id" => 3207,
                "country_id" => 58,
                "state_id" => 1,
                "name" => json_encode(["en" => "Uljin County", "zh" => "蔚珍郡"]),
                "code" => "ujn"
            ],
            [
                "id" => 3208,
                "country_id" => 58,
                "state_id" => 1,
                "name" => json_encode(["en" => "Mungyeong", "zh" => "闻庆市"]),
                "code" => "mgg"
            ],
            [
                "id" => 3209,
                "country_id" => 58,
                "state_id" => 1,
                "name" => json_encode(["en" => "Seongju County", "zh" => "星州郡"]),
                "code" => "sej"
            ],
            [
                "id" => 3210,
                "country_id" => 58,
                "state_id" => 1,
                "name" => json_encode(["en" => "Uiseong County", "zh" => "义城郡"]),
                "code" => "usg"
            ],
            [
                "id" => 3211,
                "country_id" => 58,
                "state_id" => 1,
                "name" => json_encode(["en" => "Yeongyang County", "zh" => "英阳郡"]),
                "code" => "yyg"
            ],
            [
                "id" => 3212,
                "country_id" => 58,
                "state_id" => 1,
                "name" => json_encode(["en" => "Yeongdeok County", "zh" => "盈德郡"]),
                "code" => "ydk"
            ],
            [
                "id" => 3213,
                "country_id" => 58,
                "state_id" => 1,
                "name" => json_encode(["en" => "Yeongcheon", "zh" => "永川市"]),
                "code" => "ych"
            ],
            [
                "id" => 3214,
                "country_id" => 58,
                "state_id" => 1,
                "name" => json_encode(["en" => "Ulleung County", "zh" => "郁陵郡"]),
                "code" => "ulg"
            ],
            [
                "id" => 3215,
                "country_id" => 58,
                "state_id" => 2,
                "name" => json_encode(["en" => "Changnyeong County", "zh" => "昌宁郡"]),
                "code" => "cng"
            ],
            [
                "id" => 3216,
                "country_id" => 58,
                "state_id" => 2,
                "name" => json_encode(["en" => "Changwon", "zh" => "昌原市"]),
                "code" => "chw"
            ],
            [
                "id" => 3217,
                "country_id" => 58,
                "state_id" => 2,
                "name" => json_encode(["en" => "Goseong County", "zh" => "固城郡"]),
                "code" => "gso"
            ],
            [
                "id" => 3218,
                "country_id" => 58,
                "state_id" => 2,
                "name" => json_encode(["en" => "Hadong County", "zh" => "河东郡"]),
                "code" => "hdg"
            ],
            [
                "id" => 3219,
                "country_id" => 58,
                "state_id" => 2,
                "name" => json_encode(["en" => "Gimhae", "zh" => "金海市"]),
                "code" => "kmh"
            ],
            [
                "id" => 3220,
                "country_id" => 58,
                "state_id" => 2,
                "name" => json_encode(["en" => "Jinju", "zh" => "晋州市"]),
                "code" => "hin"
            ],
            [
                "id" => 3221,
                "country_id" => 58,
                "state_id" => 2,
                "name" => json_encode(["en" => "Geochang County", "zh" => "居昌郡"]),
                "code" => "gch"
            ],
            [
                "id" => 3222,
                "country_id" => 58,
                "state_id" => 2,
                "name" => json_encode(["en" => "Geoje", "zh" => "巨济市"]),
                "code" => "kje"
            ],
            [
                "id" => 3223,
                "country_id" => 58,
                "state_id" => 2,
                "name" => json_encode(["en" => "Yangsan", "zh" => "梁山市"]),
                "code" => "ysn"
            ],
            [
                "id" => 3224,
                "country_id" => 58,
                "state_id" => 2,
                "name" => json_encode(["en" => "Masan", "zh" => "马山市"]),
                "code" => "mas"
            ],
            [
                "id" => 3225,
                "country_id" => 58,
                "state_id" => 2,
                "name" => json_encode(["en" => "Miryang", "zh" => "密阳市"]),
                "code" => "mir"
            ],
            [
                "id" => 3226,
                "country_id" => 58,
                "state_id" => 2,
                "name" => json_encode(["en" => "Namhae County", "zh" => "南海郡"]),
                "code" => "nhe"
            ],
            [
                "id" => 3227,
                "country_id" => 58,
                "state_id" => 2,
                "name" => json_encode(["en" => "Sancheong County", "zh" => "山淸郡"]),
                "code" => "sch"
            ],
            [
                "id" => 3228,
                "country_id" => 58,
                "state_id" => 2,
                "name" => json_encode(["en" => "Sacheon", "zh" => "泗川市"]),
                "code" => "sah"
            ],
            [
                "id" => 3229,
                "country_id" => 58,
                "state_id" => 2,
                "name" => json_encode(["en" => "Tongyeong", "zh" => "统营市"]),
                "code" => "tyg"
            ],
            [
                "id" => 3230,
                "country_id" => 58,
                "state_id" => 2,
                "name" => json_encode(["en" => "Hapcheon County", "zh" => "陜川郡"]),
                "code" => "hce"
            ],
            [
                "id" => 3231,
                "country_id" => 58,
                "state_id" => 2,
                "name" => json_encode(["en" => "Haman County", "zh" => "咸安郡"]),
                "code" => "han"
            ],
            [
                "id" => 3232,
                "country_id" => 58,
                "state_id" => 2,
                "name" => json_encode(["en" => "Hamyang County", "zh" => "咸阳郡"]),
                "code" => "hyg"
            ],
            [
                "id" => 3233,
                "country_id" => 58,
                "state_id" => 2,
                "name" => json_encode(["en" => "Uiryeong County", "zh" => "宜宁郡"]),
                "code" => "urg"
            ],
            [
                "id" => 3234,
                "country_id" => 58,
                "state_id" => 2,
                "name" => json_encode(["en" => "Jinhae", "zh" => "鎭海市"]),
                "code" => "chf"
            ],
            [
                "id" => 3235,
                "country_id" => 58,
                "state_id" => 6,
                "name" => json_encode(["en" => "Sunchang County", "zh" => "淳昌郡"]),
                "code" => "scg"
            ],
            [
                "id" => 3236,
                "country_id" => 58,
                "state_id" => 6,
                "name" => json_encode(["en" => "Buan County", "zh" => "扶安郡"]),
                "code" => "pus"
            ],
            [
                "id" => 3237,
                "country_id" => 58,
                "state_id" => 6,
                "name" => json_encode(["en" => "Gochang County", "zh" => "高敞郡"]),
                "code" => "gcg"
            ],
            [
                "id" => 3238,
                "country_id" => 58,
                "state_id" => 6,
                "name" => json_encode(["en" => "Gimje", "zh" => "金堤市"]),
                "code" => "gje"
            ],
            [
                "id" => 3239,
                "country_id" => 58,
                "state_id" => 6,
                "name" => json_encode(["en" => "Jeongeup", "zh" => "井邑市"]),
                "code" => "jeo"
            ],
            [
                "id" => 3240,
                "country_id" => 58,
                "state_id" => 6,
                "name" => json_encode(["en" => "Muju County", "zh" => "茂朱郡"]),
                "code" => "mju"
            ],
            [
                "id" => 3241,
                "country_id" => 58,
                "state_id" => 6,
                "name" => json_encode(["en" => "Namwon", "zh" => "南原市"]),
                "code" => "nwn"
            ],
            [
                "id" => 3242,
                "country_id" => 58,
                "state_id" => 6,
                "name" => json_encode(["en" => "Jeonju", "zh" => "全州市"]),
                "code" => "jnj"
            ],
            [
                "id" => 3243,
                "country_id" => 58,
                "state_id" => 6,
                "name" => json_encode(["en" => "Gunsan", "zh" => "群山市"]),
                "code" => "kuv"
            ],
            [
                "id" => 3244,
                "country_id" => 58,
                "state_id" => 6,
                "name" => json_encode(["en" => "Imsil County", "zh" => "任实郡"]),
                "code" => "isl"
            ],
            [
                "id" => 3245,
                "country_id" => 58,
                "state_id" => 6,
                "name" => json_encode(["en" => "Wanju County", "zh" => "完州郡"]),
                "code" => "waj"
            ],
            [
                "id" => 3246,
                "country_id" => 58,
                "state_id" => 6,
                "name" => json_encode(["en" => "Iksan", "zh" => "益山市"]),
                "code" => "iks"
            ],
            [
                "id" => 3247,
                "country_id" => 58,
                "state_id" => 6,
                "name" => json_encode(["en" => "Jangsu County", "zh" => "长水郡"]),
                "code" => "jsu"
            ],
            [
                "id" => 3248,
                "country_id" => 58,
                "state_id" => 6,
                "name" => json_encode(["en" => "Jinan County", "zh" => "鎭安郡"]),
                "code" => "jan"
            ],
            [
                "id" => 3249,
                "country_id" => 58,
                "state_id" => 7,
                "name" => json_encode(["en" => "Boseong County", "zh" => "宝城郡"]),
                "code" => "bsg"
            ],
            [
                "id" => 3250,
                "country_id" => 58,
                "state_id" => 7,
                "name" => json_encode(["en" => "Goheung County", "zh" => "高兴郡"]),
                "code" => "ghg"
            ],
            [
                "id" => 3251,
                "country_id" => 58,
                "state_id" => 7,
                "name" => json_encode(["en" => "Gokseong County", "zh" => "谷城郡"]),
                "code" => "gse"
            ],
            [
                "id" => 3252,
                "country_id" => 58,
                "state_id" => 7,
                "name" => json_encode(["en" => "Wando County", "zh" => "莞岛郡"]),
                "code" => "wnd"
            ],
            [
                "id" => 3253,
                "country_id" => 58,
                "state_id" => 7,
                "name" => json_encode(["en" => "Gwangyang", "zh" => "光阳市"]),
                "code" => "kan"
            ],
            [
                "id" => 3254,
                "country_id" => 58,
                "state_id" => 7,
                "name" => json_encode(["en" => "Haenam County", "zh" => "海南郡"]),
                "code" => "hae"
            ],
            [
                "id" => 3255,
                "country_id" => 58,
                "state_id" => 7,
                "name" => json_encode(["en" => "Hwasun County", "zh" => "和顺郡"]),
                "code" => "hsn"
            ],
            [
                "id" => 3256,
                "country_id" => 58,
                "state_id" => 7,
                "name" => json_encode(["en" => "Gangjin County", "zh" => "康津郡"]),
                "code" => "gjn"
            ],
            [
                "id" => 3257,
                "country_id" => 58,
                "state_id" => 7,
                "name" => json_encode(["en" => "Yeosu", "zh" => "丽水市"]),
                "code" => "yos"
            ],
            [
                "id" => 3258,
                "country_id" => 58,
                "state_id" => 7,
                "name" => json_encode(["en" => "Yeonggwang County", "zh" => "灵光郡"]),
                "code" => "ygg"
            ],
            [
                "id" => 3259,
                "country_id" => 58,
                "state_id" => 7,
                "name" => json_encode(["en" => "Yeongam County", "zh" => "灵岩郡"]),
                "code" => "yam"
            ],
            [
                "id" => 3260,
                "country_id" => 58,
                "state_id" => 7,
                "name" => json_encode(["en" => "Naju", "zh" => "罗州市"]),
                "code" => "nju"
            ],
            [
                "id" => 3261,
                "country_id" => 58,
                "state_id" => 7,
                "name" => json_encode(["en" => "Mokpo", "zh" => "木浦市"]),
                "code" => "mok"
            ],
            [
                "id" => 3262,
                "country_id" => 58,
                "state_id" => 7,
                "name" => json_encode(["en" => "Gurye County", "zh" => "求礼郡"]),
                "code" => "gre"
            ],
            [
                "id" => 3263,
                "country_id" => 58,
                "state_id" => 7,
                "name" => json_encode(["en" => "Suncheon", "zh" => "顺天市"]),
                "code" => "sys"
            ],
            [
                "id" => 3264,
                "country_id" => 58,
                "state_id" => 7,
                "name" => json_encode(["en" => "Damyang County", "zh" => "潭阳郡"]),
                "code" => "dya"
            ],
            [
                "id" => 3265,
                "country_id" => 58,
                "state_id" => 7,
                "name" => json_encode(["en" => "Muan County", "zh" => "务安郡"]),
                "code" => "man"
            ],
            [
                "id" => 3266,
                "country_id" => 58,
                "state_id" => 7,
                "name" => json_encode(["en" => "Hampyeong County", "zh" => "咸平郡"]),
                "code" => "hpg"
            ],
            [
                "id" => 3267,
                "country_id" => 58,
                "state_id" => 7,
                "name" => json_encode(["en" => "Sinan County", "zh" => "新安郡"]),
                "code" => "san"
            ],
            [
                "id" => 3268,
                "country_id" => 58,
                "state_id" => 7,
                "name" => json_encode(["en" => "Jangseong County", "zh" => "长城郡"]),
                "code" => "jsn"
            ],
            [
                "id" => 3269,
                "country_id" => 58,
                "state_id" => 7,
                "name" => json_encode(["en" => "Jangheung County", "zh" => "长兴郡"]),
                "code" => "jhg"
            ],
            [
                "id" => 3270,
                "country_id" => 58,
                "state_id" => 7,
                "name" => json_encode(["en" => "Jindo County", "zh" => "珍岛郡"]),
                "code" => "jdo"
            ],
            [
                "id" => 3271,
                "country_id" => 58,
                "state_id" => 8,
                "name" => json_encode(["en" => "Boeun County", "zh" => "报恩郡"]),
                "code" => "ben"
            ],
            [
                "id" => 3272,
                "country_id" => 58,
                "state_id" => 8,
                "name" => json_encode(["en" => "Jeungpyeong County", "zh" => "曾坪郡"]),
                "code" => "jyg"
            ],
            [
                "id" => 3273,
                "country_id" => 58,
                "state_id" => 8,
                "name" => json_encode(["en" => "Danyang County", "zh" => "丹阳郡"]),
                "code" => "dyg"
            ],
            [
                "id" => 3274,
                "country_id" => 58,
                "state_id" => 8,
                "name" => json_encode(["en" => "Jecheon", "zh" => "堤川市"]),
                "code" => "jch"
            ],
            [
                "id" => 3275,
                "country_id" => 58,
                "state_id" => 8,
                "name" => json_encode(["en" => "Goesan County", "zh" => "槐山郡"]),
                "code" => "gsn"
            ],
            [
                "id" => 3276,
                "country_id" => 58,
                "state_id" => 8,
                "name" => json_encode(["en" => "Cheongwon County", "zh" => "淸原郡"]),
                "code" => "cwo"
            ],
            [
                "id" => 3277,
                "country_id" => 58,
                "state_id" => 8,
                "name" => json_encode(["en" => "Cheongju", "zh" => "淸州市"]),
                "code" => "cjj"
            ],
            [
                "id" => 3278,
                "country_id" => 58,
                "state_id" => 8,
                "name" => json_encode(["en" => "Okcheon County", "zh" => "沃川郡"]),
                "code" => "ocn"
            ],
            [
                "id" => 3279,
                "country_id" => 58,
                "state_id" => 8,
                "name" => json_encode(["en" => "Eumseong County", "zh" => "阴城郡"]),
                "code" => "esg"
            ],
            [
                "id" => 3280,
                "country_id" => 58,
                "state_id" => 8,
                "name" => json_encode(["en" => "Yeongdong County", "zh" => "永同郡"]),
                "code" => "ydg"
            ],
            [
                "id" => 3281,
                "country_id" => 58,
                "state_id" => 8,
                "name" => json_encode(["en" => "Jincheon County", "zh" => "鎭川郡"]),
                "code" => "jcn"
            ],
            [
                "id" => 3282,
                "country_id" => 58,
                "state_id" => 8,
                "name" => json_encode(["en" => "Chungju", "zh" => "忠州市"]),
                "code" => "chu"
            ],
            [
                "id" => 3283,
                "country_id" => 58,
                "state_id" => 9,
                "name" => json_encode(["en" => "Boryeong", "zh" => "保宁市"]),
                "code" => "bor"
            ],
            [
                "id" => 3284,
                "country_id" => 58,
                "state_id" => 9,
                "name" => json_encode(["en" => "Buyeo County", "zh" => "扶余郡"]),
                "code" => "byo"
            ],
            [
                "id" => 3285,
                "country_id" => 58,
                "state_id" => 9,
                "name" => json_encode(["en" => "Gongju", "zh" => "公州市"]),
                "code" => "goj"
            ],
            [
                "id" => 3286,
                "country_id" => 58,
                "state_id" => 9,
                "name" => json_encode(["en" => "Hongseong County", "zh" => "洪城郡"]),
                "code" => "hse"
            ],
            [
                "id" => 3287,
                "country_id" => 58,
                "state_id" => 9,
                "name" => json_encode(["en" => "Gyeryong", "zh" => "鸡龙市"]),
                "code" => "gye"
            ],
            [
                "id" => 3288,
                "country_id" => 58,
                "state_id" => 9,
                "name" => json_encode(["en" => "Geumsan County", "zh" => "锦山郡"]),
                "code" => "gsa"
            ],
            [
                "id" => 3289,
                "country_id" => 58,
                "state_id" => 9,
                "name" => json_encode(["en" => "Yesan County", "zh" => "礼山郡"]),
                "code" => "yos"
            ],
            [
                "id" => 3290,
                "country_id" => 58,
                "state_id" => 9,
                "name" => json_encode(["en" => "Nonsan", "zh" => "论山市"]),
                "code" => "nsn"
            ],
            [
                "id" => 3291,
                "country_id" => 58,
                "state_id" => 9,
                "name" => json_encode(["en" => "Cheongyang County", "zh" => "青阳郡"]),
                "code" => "cyg"
            ],
            [
                "id" => 3292,
                "country_id" => 58,
                "state_id" => 9,
                "name" => json_encode(["en" => "Seosan", "zh" => "瑞山市"]),
                "code" => "ssa"
            ],
            [
                "id" => 3293,
                "country_id" => 58,
                "state_id" => 9,
                "name" => json_encode(["en" => "Seocheon County", "zh" => "舒川郡"]),
                "code" => "sce"
            ],
            [
                "id" => 3294,
                "country_id" => 58,
                "state_id" => 9,
                "name" => json_encode(["en" => "Taean County", "zh" => "泰安郡"]),
                "code" => "tan"
            ],
            [
                "id" => 3295,
                "country_id" => 58,
                "state_id" => 9,
                "name" => json_encode(["en" => "Dangjin County", "zh" => "唐津郡"]),
                "code" => "tji"
            ],
            [
                "id" => 3296,
                "country_id" => 58,
                "state_id" => 9,
                "name" => json_encode(["en" => "Cheonan", "zh" => "天安市"]),
                "code" => "cho"
            ],
            [
                "id" => 3297,
                "country_id" => 58,
                "state_id" => 9,
                "name" => json_encode(["en" => "Asan", "zh" => "牙山市"]),
                "code" => "asa"
            ],
            [
                "id" => 3298,
                "country_id" => 58,
                "state_id" => 9,
                "name" => json_encode(["en" => "Yeongi County", "zh" => "燕岐郡"]),
                "code" => "ygi"
            ],
            [
                "id" => 3299,
                "country_id" => 87,
                "state_id" => 20,
                "name" => json_encode(["en" => "Butterworth", "zh" => "北海"]),
                "code" => "bwh"
            ],
            [
                "id" => 3300,
                "country_id" => 87,
                "state_id" => 20,
                "name" => json_encode(["en" => "George Town", "zh" => "槟城"]),
                "code" => "pen"
            ],
            [
                "id" => 3301,
                "country_id" => 87,
                "state_id" => 20,
                "name" => json_encode(["en" => "Bukit Mertajam", "zh" => "大山脚"]),
                "code" => "bmj"
            ],
            [
                "id" => 3302,
                "country_id" => 87,
                "state_id" => 20,
                "name" => json_encode(["en" => "Nibong Tebal", "zh" => "高渊"]),
                "code" => "nte"
            ],
            [
                "id" => 3303,
                "country_id" => 87,
                "state_id" => 19,
                "name" => json_encode(["en" => "Kangar", "zh" => "加央"]),
                "code" => "kgr"
            ],
            [
                "id" => 3304,
                "country_id" => 87,
                "state_id" => 24,
                "name" => json_encode(["en" => "Kemaman", "zh" => "甘马挽"]),
                "code" => "kem"
            ],
            [
                "id" => 3305,
                "country_id" => 87,
                "state_id" => 24,
                "name" => json_encode(["en" => "Kuala Terengganu", "zh" => "瓜拉丁加奴"]),
                "code" => "tgg"
            ],
            [
                "id" => 3306,
                "country_id" => 87,
                "state_id" => 24,
                "name" => json_encode(["en" => "Dungun", "zh" => "龙运"]),
                "code" => "dgn"
            ],
            [
                "id" => 3307,
                "country_id" => 87,
                "state_id" => 24,
                "name" => json_encode(["en" => "Marang", "zh" => "马江"]),
                "code" => "mar"
            ],
            [
                "id" => 3308,
                "country_id" => 87,
                "state_id" => 24,
                "name" => json_encode(["en" => "Setiu", "zh" => "实兆"]),
                "code" => "set"
            ],
            [
                "id" => 3309,
                "country_id" => 87,
                "state_id" => 24,
                "name" => json_encode(["en" => "Hulu", "zh" => "乌鲁"]),
                "code" => "hul"
            ],
            [
                "id" => 3310,
                "country_id" => 87,
                "state_id" => 24,
                "name" => json_encode(["en" => "Besut", "zh" => "勿述"]),
                "code" => "bes"
            ],
            [
                "id" => 3311,
                "country_id" => 87,
                "state_id" => 11,
                "name" => json_encode(["en" => "Padang Terap", "zh" => "巴东得腊"]),
                "code" => "pgt"
            ],
            [
                "id" => 3312,
                "country_id" => 87,
                "state_id" => 11,
                "name" => json_encode(["en" => "Pendang", "zh" => "笨筒"]),
                "code" => "pen"
            ],
            [
                "id" => 3313,
                "country_id" => 87,
                "state_id" => 11,
                "name" => json_encode(["en" => "Langkawi", "zh" => "浮罗交怡"]),
                "code" => "lgk"
            ],
            [
                "id" => 3314,
                "country_id" => 87,
                "state_id" => 11,
                "name" => json_encode(["en" => "Kota Setar", "zh" => "哥打士打"]),
                "code" => "kor"
            ],
            [
                "id" => 3315,
                "country_id" => 87,
                "state_id" => 11,
                "name" => json_encode(["en" => "Kubang Pasu", "zh" => "古邦巴素"]),
                "code" => "kpa"
            ],
            [
                "id" => 3316,
                "country_id" => 87,
                "state_id" => 11,
                "name" => json_encode(["en" => "Kuala Muda", "zh" => "瓜拉姆达"]),
                "code" => "kmu"
            ],
            [
                "id" => 3317,
                "country_id" => 87,
                "state_id" => 11,
                "name" => json_encode(["en" => "Baling", "zh" => "华玲"]),
                "code" => "blz"
            ],
            [
                "id" => 3318,
                "country_id" => 87,
                "state_id" => 11,
                "name" => json_encode(["en" => "Kulim", "zh" => "居林"]),
                "code" => "klm"
            ],
            [
                "id" => 3319,
                "country_id" => 87,
                "state_id" => 11,
                "name" => json_encode(["en" => "Bandar Baharu", "zh" => "万拉峇鲁"]),
                "code" => "bma"
            ],
            [
                "id" => 3320,
                "country_id" => 87,
                "state_id" => 12,
                "name" => json_encode(["en" => "Pasir Putih", "zh" => "巴西富地"]),
                "code" => "ppu"
            ],
            [
                "id" => 3321,
                "country_id" => 87,
                "state_id" => 12,
                "name" => json_encode(["en" => "Pasir Mas", "zh" => "巴西马"]),
                "code" => "pma"
            ],
            [
                "id" => 3322,
                "country_id" => 87,
                "state_id" => 12,
                "name" => json_encode(["en" => "Tanah Merah", "zh" => "丹那美拉"]),
                "code" => "tmr"
            ],
            [
                "id" => 3323,
                "country_id" => 87,
                "state_id" => 12,
                "name" => json_encode(["en" => "Tumpat", "zh" => "道北"]),
                "code" => "tum"
            ],
            [
                "id" => 3324,
                "country_id" => 87,
                "state_id" => 12,
                "name" => json_encode(["en" => "Bachok", "zh" => "登卓"]),
                "code" => "bac"
            ],
            [
                "id" => 3325,
                "country_id" => 87,
                "state_id" => 12,
                "name" => json_encode(["en" => "Kota Bharu", "zh" => "哥打巴鲁"]),
                "code" => "kbr"
            ],
            [
                "id" => 3326,
                "country_id" => 87,
                "state_id" => 12,
                "name" => json_encode(["en" => "Kuala Krai", "zh" => "瓜拉吉赖"]),
                "code" => "kug"
            ],
            [
                "id" => 3327,
                "country_id" => 87,
                "state_id" => 12,
                "name" => json_encode(["en" => "Gua Musang", "zh" => "话望生"]),
                "code" => "gmu"
            ],
            [
                "id" => 3328,
                "country_id" => 87,
                "state_id" => 12,
                "name" => json_encode(["en" => "Machang", "zh" => "马樟"]),
                "code" => "mac"
            ],
            [
                "id" => 3329,
                "country_id" => 87,
                "state_id" => 12,
                "name" => json_encode(["en" => "Jeli", "zh" => "日里"]),
                "code" => "jel"
            ],
            [
                "id" => 3330,
                "country_id" => 87,
                "state_id" => 13,
                "name" => json_encode(["en" => "Kuala Lumpur", "zh" => "吉隆坡"]),
                "code" => "kul"
            ],
            [
                "id" => 3331,
                "country_id" => 87,
                "state_id" => 15,
                "name" => json_encode(["en" => "Melaka", "zh" => "马六甲市"]),
                "code" => "mel"
            ],
            [
                "id" => 3332,
                "country_id" => 87,
                "state_id" => 15,
                "name" => json_encode(["en" => "Alor Gajah", "zh" => "亚罗牙也"]),
                "code" => "aog"
            ],
            [
                "id" => 3333,
                "country_id" => 87,
                "state_id" => 15,
                "name" => json_encode(["en" => "Jasin", "zh" => "野新"]),
                "code" => "jas"
            ],
            [
                "id" => 3334,
                "country_id" => 87,
                "state_id" => 14,
                "name" => json_encode(["en" => "Labuan", "zh" => "纳闽"]),
                "code" => "lbu"
            ],
            [
                "id" => 3335,
                "country_id" => 87,
                "state_id" => 14,
                "name" => json_encode(["en" => "Victoria", "zh" => "维多利亚"]),
                "code" => "vic"
            ],
            [
                "id" => 3336,
                "country_id" => 87,
                "state_id" => 17,
                "name" => json_encode(["en" => "Bera", "zh" => "百乐"]),
                "code" => "ber"
            ],
            [
                "id" => 3337,
                "country_id" => 87,
                "state_id" => 17,
                "name" => json_encode(["en" => "Pekan", "zh" => "北根"]),
                "code" => "pek"
            ],
            [
                "id" => 3338,
                "country_id" => 87,
                "state_id" => 17,
                "name" => json_encode(["en" => "Temerloh", "zh" => "淡马鲁"]),
                "code" => "tem"
            ],
            [
                "id" => 3339,
                "country_id" => 87,
                "state_id" => 17,
                "name" => json_encode(["en" => "Jerantut", "zh" => "而连突"]),
                "code" => "jer"
            ],
            [
                "id" => 3340,
                "country_id" => 87,
                "state_id" => 17,
                "name" => json_encode(["en" => "Kuantan", "zh" => "关丹"]),
                "code" => "kua"
            ],
            [
                "id" => 3341,
                "country_id" => 87,
                "state_id" => 17,
                "name" => json_encode(["en" => "Cameron Highlands", "zh" => "金马仑高原"]),
                "code" => "cah"
            ],
            [
                "id" => 3342,
                "country_id" => 87,
                "state_id" => 17,
                "name" => json_encode(["en" => "Raub", "zh" => "劳勿"]),
                "code" => "rau"
            ],
            [
                "id" => 3343,
                "country_id" => 87,
                "state_id" => 17,
                "name" => json_encode(["en" => "Kuala Lipis", "zh" => "立卑"]),
                "code" => "kul"
            ],
            [
                "id" => 3344,
                "country_id" => 87,
                "state_id" => 17,
                "name" => json_encode(["en" => "Maran", "zh" => "马兰"]),
                "code" => "mar"
            ],
            [
                "id" => 3345,
                "country_id" => 87,
                "state_id" => 17,
                "name" => json_encode(["en" => "Bentong", "zh" => "文冬"]),
                "code" => "ben"
            ],
            [
                "id" => 3346,
                "country_id" => 87,
                "state_id" => 17,
                "name" => json_encode(["en" => "Rompin", "zh" => "云冰"]),
                "code" => "tom"
            ],
            [
                "id" => 3347,
                "country_id" => 87,
                "state_id" => 18,
                "name" => json_encode(["en" => "Teluk Intan", "zh" => "安顺"]),
                "code" => "tas"
            ],
            [
                "id" => 3348,
                "country_id" => 87,
                "state_id" => 18,
                "name" => json_encode(["en" => "Tanjung Malim", "zh" => "丹绒马"]),
                "code" => "tam"
            ],
            [
                "id" => 3349,
                "country_id" => 87,
                "state_id" => 18,
                "name" => json_encode(["en" => "Sungai Siput", "zh" => "和丰"]),
                "code" => "ssp"
            ],
            [
                "id" => 3350,
                "country_id" => 87,
                "state_id" => 18,
                "name" => json_encode(["en" => "Lumut", "zh" => "紅土坎"]),
                "code" => "lum"
            ],
            [
                "id" => 3351,
                "country_id" => 87,
                "state_id" => 18,
                "name" => json_encode(["en" => "Batu Gajah", "zh" => "华都牙也"]),
                "code" => "bga"
            ],
            [
                "id" => 3352,
                "country_id" => 87,
                "state_id" => 18,
                "name" => json_encode(["en" => "Kuala Kangsar", "zh" => "江沙"]),
                "code" => "kar"
            ],
            [
                "id" => 3353,
                "country_id" => 87,
                "state_id" => 18,
                "name" => json_encode(["en" => "Taiping", "zh" => "太平"]),
                "code" => "tpg"
            ],
            [
                "id" => 3354,
                "country_id" => 87,
                "state_id" => 18,
                "name" => json_encode(["en" => "Ipoh", "zh" => "怡保"]),
                "code" => "iph"
            ],
            [
                "id" => 3355,
                "country_id" => 87,
                "state_id" => 10,
                "name" => json_encode(["en" => "Pontian", "zh" => "笨珍"]),
                "code" => "pow"
            ],
            [
                "id" => 3356,
                "country_id" => 87,
                "state_id" => 10,
                "name" => json_encode(["en" => "Mersing", "zh" => "丰盛港"]),
                "code" => "mep"
            ],
            [
                "id" => 3357,
                "country_id" => 87,
                "state_id" => 10,
                "name" => json_encode(["en" => "Kota Tinggi", "zh" => "哥打丁宜"]),
                "code" => "kti"
            ],
            [
                "id" => 3358,
                "country_id" => 87,
                "state_id" => 10,
                "name" => json_encode(["en" => "Kluang", "zh" => "居銮"]),
                "code" => "kla"
            ],
            [
                "id" => 3359,
                "country_id" => 87,
                "state_id" => 10,
                "name" => json_encode(["en" => "Batu Pahat", "zh" => "峇株巴辖"]),
                "code" => "bat"
            ],
            [
                "id" => 3360,
                "country_id" => 87,
                "state_id" => 10,
                "name" => json_encode(["en" => "Muar", "zh" => "麻坡"]),
                "code" => "mua"
            ],
            [
                "id" => 3361,
                "country_id" => 87,
                "state_id" => 10,
                "name" => json_encode(["en" => "Segamat", "zh" => "昔加末"]),
                "code" => "sgm"
            ],
            [
                "id" => 3362,
                "country_id" => 87,
                "state_id" => 10,
                "name" => json_encode(["en" => "Johor Bahru", "zh" => "新山"]),
                "code" => "jhb"
            ],
            [
                "id" => 3363,
                "country_id" => 87,
                "state_id" => 16,
                "name" => json_encode(["en" => "Port Dickson", "zh" => "波德申"]),
                "code" => "pdi"
            ],
            [
                "id" => 3364,
                "country_id" => 87,
                "state_id" => 16,
                "name" => json_encode(["en" => "Tampin", "zh" => "淡边"]),
                "code" => "tai"
            ],
            [
                "id" => 3365,
                "country_id" => 87,
                "state_id" => 16,
                "name" => json_encode(["en" => "Seremban", "zh" => "芙蓉"]),
                "code" => "srb"
            ],
            [
                "id" => 3366,
                "country_id" => 87,
                "state_id" => 16,
                "name" => json_encode(["en" => "Kuala Pilah", "zh" => "瓜拉庇劳"]),
                "code" => "kpi"
            ],
            [
                "id" => 3367,
                "country_id" => 87,
                "state_id" => 16,
                "name" => json_encode(["en" => "Rembau", "zh" => "林茂"]),
                "code" => "rem"
            ],
            [
                "id" => 3368,
                "country_id" => 87,
                "state_id" => 16,
                "name" => json_encode(["en" => "Jempol", "zh" => "仁保"]),
                "code" => "jep"
            ],
            [
                "id" => 3369,
                "country_id" => 87,
                "state_id" => 16,
                "name" => json_encode(["en" => "Jelebu", "zh" => "日叻务"]),
                "code" => "jel"
            ],
            [
                "id" => 3370,
                "country_id" => 87,
                "state_id" => 21,
                "name" => json_encode(["en" => "Papar", "zh" => "吧巴"]),
                "code" => "pap"
            ],
            [
                "id" => 3371,
                "country_id" => 87,
                "state_id" => 21,
                "name" => json_encode(["en" => "Beaufort", "zh" => "保佛"]),
                "code" => "bef"
            ],
            [
                "id" => 3372,
                "country_id" => 87,
                "state_id" => 21,
                "name" => json_encode(["en" => "Beluran", "zh" => "比鲁兰"]),
                "code" => "bel"
            ],
            [
                "id" => 3373,
                "country_id" => 87,
                "state_id" => 21,
                "name" => json_encode(["en" => "Pitas", "zh" => "必达士"]),
                "code" => "pit"
            ],
            [
                "id" => 3374,
                "country_id" => 87,
                "state_id" => 21,
                "name" => json_encode(["en" => "Penampang", "zh" => "兵南邦"]),
                "code" => "pmp"
            ],
            [
                "id" => 3375,
                "country_id" => 87,
                "state_id" => 21,
                "name" => json_encode(["en" => "Tambunan", "zh" => "担布南"]),
                "code" => "tab"
            ],
            [
                "id" => 3376,
                "country_id" => 87,
                "state_id" => 21,
                "name" => json_encode(["en" => "Tenom", "zh" => "丹南"]),
                "code" => "ten"
            ],
            [
                "id" => 3377,
                "country_id" => 87,
                "state_id" => 21,
                "name" => json_encode(["en" => "Tawau", "zh" => "斗湖"]),
                "code" => "taw"
            ],
            [
                "id" => 3378,
                "country_id" => 87,
                "state_id" => 21,
                "name" => json_encode(["en" => "Tuaran", "zh" => "斗亚兰"]),
                "code" => "tur"
            ],
            [
                "id" => 3379,
                "country_id" => 87,
                "state_id" => 21,
                "name" => json_encode(["en" => "Kota Kinabalu", "zh" => "哥打基纳巴鲁"]),
                "code" => "bki"
            ],
            [
                "id" => 3380,
                "country_id" => 87,
                "state_id" => 21,
                "name" => json_encode(["en" => "Kota Marudu", "zh" => "哥打马鲁都"]),
                "code" => "kmu"
            ],
            [
                "id" => 3381,
                "country_id" => 87,
                "state_id" => 21,
                "name" => json_encode(["en" => "Keningau", "zh" => "根地咬"]),
                "code" => "keg"
            ],
            [
                "id" => 3382,
                "country_id" => 87,
                "state_id" => 21,
                "name" => json_encode(["en" => "Kudat", "zh" => "古达"]),
                "code" => "kud"
            ],
            [
                "id" => 3383,
                "country_id" => 87,
                "state_id" => 21,
                "name" => json_encode(["en" => "Kota Belud", "zh" => "古打毛律"]),
                "code" => "kbd"
            ],
            [
                "id" => 3384,
                "country_id" => 87,
                "state_id" => 21,
                "name" => json_encode(["en" => "Kunak", "zh" => "古纳"]),
                "code" => "kun"
            ],
            [
                "id" => 3385,
                "country_id" => 87,
                "state_id" => 21,
                "name" => json_encode(["en" => "Kuala Penyu", "zh" => "瓜拉班尤"]),
                "code" => "kpu"
            ],
            [
                "id" => 3386,
                "country_id" => 87,
                "state_id" => 21,
                "name" => json_encode(["en" => "Kinabatangan", "zh" => "京那巴登岸"]),
                "code" => "kbt"
            ],
            [
                "id" => 3387,
                "country_id" => 87,
                "state_id" => 21,
                "name" => json_encode(["en" => "Ranau", "zh" => "兰脑"]),
                "code" => "rnu"
            ],
            [
                "id" => 3388,
                "country_id" => 87,
                "state_id" => 21,
                "name" => json_encode(["en" => "Lahad Datu", "zh" => "拿笃"]),
                "code" => "ldu"
            ],
            [
                "id" => 3389,
                "country_id" => 87,
                "state_id" => 21,
                "name" => json_encode(["en" => "Nabawan", "zh" => "纳巴湾"]),
                "code" => "nab"
            ],
            [
                "id" => 3390,
                "country_id" => 87,
                "state_id" => 21,
                "name" => json_encode(["en" => "Sandakan", "zh" => "山打根"]),
                "code" => "sdk"
            ],
            [
                "id" => 3391,
                "country_id" => 87,
                "state_id" => 21,
                "name" => json_encode(["en" => "Sipitang", "zh" => "西比陶"]),
                "code" => "spt"
            ],
            [
                "id" => 3392,
                "country_id" => 87,
                "state_id" => 21,
                "name" => json_encode(["en" => "Semporna", "zh" => "仙本那"]),
                "code" => "smm"
            ],
            [
                "id" => 3393,
                "country_id" => 87,
                "state_id" => 22,
                "name" => json_encode(["en" => "Kuching", "zh" => "古晋"]),
                "code" => "kch"
            ],
            [
                "id" => 3394,
                "country_id" => 87,
                "state_id" => 22,
                "name" => json_encode(["en" => "Kapit", "zh" => "加帛"]),
                "code" => "kpi"
            ],
            [
                "id" => 3395,
                "country_id" => 87,
                "state_id" => 22,
                "name" => json_encode(["en" => "Limbang", "zh" => "林梦"]),
                "code" => "lmn"
            ],
            [
                "id" => 3396,
                "country_id" => 87,
                "state_id" => 22,
                "name" => json_encode(["en" => "Miri", "zh" => "美里"]),
                "code" => "myy"
            ],
            [
                "id" => 3397,
                "country_id" => 87,
                "state_id" => 22,
                "name" => json_encode(["en" => "Bintulu", "zh" => "民都鲁"]),
                "code" => "btu"
            ],
            [
                "id" => 3398,
                "country_id" => 87,
                "state_id" => 22,
                "name" => json_encode(["en" => "Mukah", "zh" => "木胶"]),
                "code" => "mkm"
            ],
            [
                "id" => 3399,
                "country_id" => 87,
                "state_id" => 22,
                "name" => json_encode(["en" => "Betong", "zh" => "木中"]),
                "code" => "btg"
            ],
            [
                "id" => 3400,
                "country_id" => 87,
                "state_id" => 22,
                "name" => json_encode(["en" => "Samarahan", "zh" => "三马拉汉"]),
                "code" => "smh"
            ],
            [
                "id" => 3401,
                "country_id" => 87,
                "state_id" => 22,
                "name" => json_encode(["en" => "Sri Aman", "zh" => "斯里阿曼"]),
                "code" => "sam"
            ],
            [
                "id" => 3402,
                "country_id" => 87,
                "state_id" => 22,
                "name" => json_encode(["en" => "Sarikei", "zh" => "泗里街"]),
                "code" => "sar"
            ],
            [
                "id" => 3403,
                "country_id" => 87,
                "state_id" => 22,
                "name" => json_encode(["en" => "Sibu", "zh" => "泗务"]),
                "code" => "sbw"
            ],
            [
                "id" => 3404,
                "country_id" => 87,
                "state_id" => 23,
                "name" => json_encode(["en" => "Petaling", "zh" => "八打灵"]),
                "code" => "pja"
            ],
            [
                "id" => 3405,
                "country_id" => 87,
                "state_id" => 23,
                "name" => json_encode(["en" => "Gombak", "zh" => "鹅麦"]),
                "code" => "gom"
            ],
            [
                "id" => 3406,
                "country_id" => 87,
                "state_id" => 23,
                "name" => json_encode(["en" => "Kuala Langat", "zh" => "瓜拉冷岳"]),
                "code" => "klg"
            ],
            [
                "id" => 3407,
                "country_id" => 87,
                "state_id" => 23,
                "name" => json_encode(["en" => "Kuala Selangor", "zh" => "瓜拉雪兰莪"]),
                "code" => "ksl"
            ],
            [
                "id" => 3408,
                "country_id" => 87,
                "state_id" => 23,
                "name" => json_encode(["en" => "Sabak Bernam", "zh" => "沙白安南"]),
                "code" => "sbm"
            ],
            [
                "id" => 3409,
                "country_id" => 87,
                "state_id" => 23,
                "name" => json_encode(["en" => "Hulu Langat", "zh" => "乌鲁冷岳"]),
                "code" => "hul"
            ],
            [
                "id" => 3410,
                "country_id" => 87,
                "state_id" => 23,
                "name" => json_encode(["en" => "Hulu Selangor", "zh" => "乌鲁雪兰莪"]),
                "code" => "hus"
            ],
            [
                "id" => 3411,
                "country_id" => 87,
                "state_id" => 23,
                "name" => json_encode(["en" => "Sepang", "zh" => "雪邦"]),
                "code" => "sep"
            ],
            [
                "id" => 3412,
                "country_id" => 167,
                "state_id" => 64,
                "name" => json_encode(["en" => "Fayetteville", "zh" => "费耶特维尔"]),
                "code" => "fyv"
            ],
            [
                "id" => 3413,
                "country_id" => 167,
                "state_id" => 64,
                "name" => json_encode(["en" => "Fort Smith", "zh" => "史密斯堡"]),
                "code" => "fsm"
            ],
            [
                "id" => 3414,
                "country_id" => 167,
                "state_id" => 64,
                "name" => json_encode(["en" => "Little Rock", "zh" => "小石城"]),
                "code" => "lit"
            ],
            [
                "id" => 3415,
                "country_id" => 167,
                "state_id" => 61,
                "name" => json_encode(["en" => "Birmingham", "zh" => "伯明罕"]),
                "code" => "bhm"
            ],
            [
                "id" => 3416,
                "country_id" => 167,
                "state_id" => 61,
                "name" => json_encode(["en" => "Montgomery", "zh" => "蒙哥马利"]),
                "code" => "mgm"
            ],
            [
                "id" => 3417,
                "country_id" => 167,
                "state_id" => 61,
                "name" => json_encode(["en" => "Mobile", "zh" => "莫比尔"]),
                "code" => "mob"
            ],
            [
                "id" => 3418,
                "country_id" => 167,
                "state_id" => 62,
                "name" => json_encode(["en" => "Anchorage", "zh" => "安克雷奇"]),
                "code" => "anc"
            ],
            [
                "id" => 3419,
                "country_id" => 167,
                "state_id" => 62,
                "name" => json_encode(["en" => "Fairbanks", "zh" => "费尔班克斯"]),
                "code" => "fai"
            ],
            [
                "id" => 3420,
                "country_id" => 167,
                "state_id" => 62,
                "name" => json_encode(["en" => "Juneau", "zh" => "朱诺"]),
                "code" => "jnu"
            ],
            [
                "id" => 3421,
                "country_id" => 167,
                "state_id" => 73,
                "name" => json_encode(["en" => "Idaho Falls", "zh" => "爱达荷福尔斯"]),
                "code" => "ida"
            ],
            [
                "id" => 3422,
                "country_id" => 167,
                "state_id" => 73,
                "name" => json_encode(["en" => "Pocatello", "zh" => "波卡特洛"]),
                "code" => "pih"
            ],
            [
                "id" => 3423,
                "country_id" => 167,
                "state_id" => 73,
                "name" => json_encode(["en" => "Boise", "zh" => "博伊西"]),
                "code" => "boi"
            ],
            [
                "id" => 3424,
                "country_id" => 167,
                "state_id" => 73,
                "name" => json_encode(["en" => "Blackfoot", "zh" => "布莱克富特"]),
                "code" => "blk"
            ],
            [
                "id" => 3425,
                "country_id" => 167,
                "state_id" => 73,
                "name" => json_encode(["en" => "Coeur d'Alene", "zh" => "科达伦"]),
                "code" => "coe"
            ],
            [
                "id" => 3426,
                "country_id" => 167,
                "state_id" => 73,
                "name" => json_encode(["en" => "Lewiston", "zh" => "刘易斯顿"]),
                "code" => "lws"
            ],
            [
                "id" => 3427,
                "country_id" => 167,
                "state_id" => 73,
                "name" => json_encode(["en" => "Moscow", "zh" => "莫斯科"]),
                "code" => "mjl"
            ],
            [
                "id" => 3428,
                "country_id" => 167,
                "state_id" => 73,
                "name" => json_encode(["en" => "Murphy", "zh" => "墨菲"]),
                "code" => "zmu"
            ],
            [
                "id" => 3429,
                "country_id" => 167,
                "state_id" => 73,
                "name" => json_encode(["en" => "Nampa", "zh" => "楠帕"]),
                "code" => "npa"
            ],
            [
                "id" => 3430,
                "country_id" => 167,
                "state_id" => 73,
                "name" => json_encode(["en" => "Ketchum", "zh" => "岂彻姆"]),
                "code" => "qkm"
            ],
            [
                "id" => 3431,
                "country_id" => 167,
                "state_id" => 73,
                "name" => json_encode(["en" => "Sun Valley", "zh" => "森瓦利"]),
                "code" => "svy"
            ],
            [
                "id" => 3432,
                "country_id" => 167,
                "state_id" => 73,
                "name" => json_encode(["en" => "American Falls", "zh" => "亚美利加瀑布城"]),
                "code" => "yaf"
            ],
            [
                "id" => 3433,
                "country_id" => 167,
                "state_id" => 76,
                "name" => json_encode(["en" => "Davenport", "zh" => "达文波特"]),
                "code" => "dvn"
            ],
            [
                "id" => 3434,
                "country_id" => 167,
                "state_id" => 76,
                "name" => json_encode(["en" => "Des Moines", "zh" => "得梅因"]),
                "code" => "dsm"
            ],
            [
                "id" => 3435,
                "country_id" => 167,
                "state_id" => 76,
                "name" => json_encode(["en" => "Cedar Rapids", "zh" => "锡达拉皮兹"]),
                "code" => "cid"
            ],
            [
                "id" => 3436,
                "country_id" => 167,
                "state_id" => 95,
                "name" => json_encode(["en" => "Bismarck", "zh" => "俾斯麦"]),
                "code" => "bis"
            ],
            [
                "id" => 3437,
                "country_id" => 167,
                "state_id" => 95,
                "name" => json_encode(["en" => "Grand Forks", "zh" => "大福克斯"]),
                "code" => "gfk"
            ],
            [
                "id" => 3438,
                "country_id" => 167,
                "state_id" => 95,
                "name" => json_encode(["en" => "Fargo", "zh" => "法戈"]),
                "code" => "far"
            ],
            [
                "id" => 3439,
                "country_id" => 167,
                "state_id" => 95,
                "name" => json_encode(["en" => "Minot", "zh" => "迈诺特"]),
                "code" => "mot"
            ],
            [
                "id" => 3440,
                "country_id" => 167,
                "state_id" => 94,
                "name" => json_encode(["en" => "Asheville", "zh" => "艾许维尔"]),
                "code" => "aev"
            ],
            [
                "id" => 3441,
                "country_id" => 167,
                "state_id" => 94,
                "name" => json_encode(["en" => "Durham", "zh" => "杜罕"]),
                "code" => "dhh"
            ],
            [
                "id" => 3442,
                "country_id" => 167,
                "state_id" => 94,
                "name" => json_encode(["en" => "Greensboro", "zh" => "格林斯伯勒"]),
                "code" => "gbo"
            ],
            [
                "id" => 3443,
                "country_id" => 167,
                "state_id" => 94,
                "name" => json_encode(["en" => "Chapel Hill", "zh" => "教堂山"]),
                "code" => "che"
            ],
            [
                "id" => 3444,
                "country_id" => 167,
                "state_id" => 94,
                "name" => json_encode(["en" => "Raleigh", "zh" => "罗利"]),
                "code" => "rag"
            ],
            [
                "id" => 3445,
                "country_id" => 167,
                "state_id" => 94,
                "name" => json_encode(["en" => "Raleigh-Durham", "zh" => "洛利杜罕都会区"]),
                "code" => "rdu"
            ],
            [
                "id" => 3446,
                "country_id" => 167,
                "state_id" => 94,
                "name" => json_encode(["en" => "Charlotte", "zh" => "夏洛特"]),
                "code" => "crq"
            ],
            [
                "id" => 3447,
                "country_id" => 167,
                "state_id" => 99,
                "name" => json_encode(["en" => "Allentown", "zh" => "阿伦敦"]),
                "code" => "aew"
            ],
            [
                "id" => 3448,
                "country_id" => 167,
                "state_id" => 99,
                "name" => json_encode(["en" => "Philadephia", "zh" => "费城"]),
                "code" => "phl"
            ],
            [
                "id" => 3449,
                "country_id" => 167,
                "state_id" => 99,
                "name" => json_encode(["en" => "Pittsburgh", "zh" => "匹兹堡"]),
                "code" => "pit"
            ],
            [
                "id" => 3450,
                "country_id" => 167,
                "state_id" => 104,
                "name" => json_encode(["en" => "El Paso", "zh" => "埃尔帕索"]),
                "code" => "elp"
            ],
            [
                "id" => 3451,
                "country_id" => 167,
                "state_id" => 104,
                "name" => json_encode(["en" => "Austin", "zh" => "奥斯汀"]),
                "code" => "aus"
            ],
            [
                "id" => 3452,
                "country_id" => 167,
                "state_id" => 104,
                "name" => json_encode(["en" => "Dallas", "zh" => "达拉斯"]),
                "code" => "dal"
            ],
            [
                "id" => 3453,
                "country_id" => 167,
                "state_id" => 104,
                "name" => json_encode(["en" => "Corpus Christi", "zh" => "哥帕斯基斯蒂"]),
                "code" => "crp"
            ],
            [
                "id" => 3454,
                "country_id" => 167,
                "state_id" => 104,
                "name" => json_encode(["en" => "Galveston", "zh" => "交维斯顿"]),
                "code" => "gls"
            ],
            [
                "id" => 3455,
                "country_id" => 167,
                "state_id" => 104,
                "name" => json_encode(["en" => "Laredo", "zh" => "拉雷多"]),
                "code" => "lrd"
            ],
            [
                "id" => 3456,
                "country_id" => 167,
                "state_id" => 104,
                "name" => json_encode(["en" => "McAllen", "zh" => "麦亚伦"]),
                "code" => "txc"
            ],
            [
                "id" => 3457,
                "country_id" => 167,
                "state_id" => 104,
                "name" => json_encode(["en" => "San Antonio", "zh" => "圣安东尼奥"]),
                "code" => "sat"
            ],
            [
                "id" => 3458,
                "country_id" => 167,
                "state_id" => 104,
                "name" => json_encode(["en" => "Houston", "zh" => "休斯敦"]),
                "code" => "hou"
            ],
            [
                "id" => 3459,
                "country_id" => 167,
                "state_id" => 96,
                "name" => json_encode(["en" => "Dayton", "zh" => "代顿"]),
                "code" => "dyt"
            ],
            [
                "id" => 3460,
                "country_id" => 167,
                "state_id" => 96,
                "name" => json_encode(["en" => "Columbus", "zh" => "哥伦布"]),
                "code" => "czx"
            ],
            [
                "id" => 3461,
                "country_id" => 167,
                "state_id" => 96,
                "name" => json_encode(["en" => "Cleveland", "zh" => "克利夫兰"]),
                "code" => "cle"
            ],
            [
                "id" => 3462,
                "country_id" => 167,
                "state_id" => 96,
                "name" => json_encode(["en" => "Toledo", "zh" => "托莱多"]),
                "code" => "tol"
            ],
            [
                "id" => 3463,
                "country_id" => 167,
                "state_id" => 96,
                "name" => json_encode(["en" => "Cincinnati", "zh" => "辛辛那提"]),
                "code" => "cvg"
            ],
            [
                "id" => 3464,
                "country_id" => 167,
                "state_id" => 97,
                "name" => json_encode(["en" => "Oklahoma City", "zh" => "俄克拉荷马城"]),
                "code" => "okc"
            ],
            [
                "id" => 3465,
                "country_id" => 167,
                "state_id" => 97,
                "name" => json_encode(["en" => "Norman", "zh" => "诺曼"]),
                "code" => "oun"
            ],
            [
                "id" => 3466,
                "country_id" => 167,
                "state_id" => 97,
                "name" => json_encode(["en" => "Tulsa", "zh" => "塔尔萨"]),
                "code" => "tul"
            ],
            [
                "id" => 3467,
                "country_id" => 167,
                "state_id" => 98,
                "name" => json_encode(["en" => "Bend", "zh" => "本德"]),
                "code" => "bzo"
            ],
            [
                "id" => 3468,
                "country_id" => 167,
                "state_id" => 98,
                "name" => json_encode(["en" => "Portland", "zh" => "波特兰"]),
                "code" => "pdx"
            ],
            [
                "id" => 3469,
                "country_id" => 167,
                "state_id" => 98,
                "name" => json_encode(["en" => "The Dalles", "zh" => "达尔斯"]),
                "code" => "dls"
            ],
            [
                "id" => 3470,
                "country_id" => 167,
                "state_id" => 98,
                "name" => json_encode(["en" => "Dallas", "zh" => "达拉斯"]),
                "code" => "dac"
            ],
            [
                "id" => 3471,
                "country_id" => 167,
                "state_id" => 98,
                "name" => json_encode(["en" => "Tillamook", "zh" => "蒂拉穆克"]),
                "code" => "tlm"
            ],
            [
                "id" => 3472,
                "country_id" => 167,
                "state_id" => 98,
                "name" => json_encode(["en" => "Grant's Pass", "zh" => "格兰茨帕斯"]),
                "code" => "xfx"
            ],
            [
                "id" => 3473,
                "country_id" => 167,
                "state_id" => 98,
                "name" => json_encode(["en" => "Hood River", "zh" => "胡德里弗"]),
                "code" => "hdx"
            ],
            [
                "id" => 3474,
                "country_id" => 167,
                "state_id" => 98,
                "name" => json_encode(["en" => "Crater Lake", "zh" => "火山口湖"]),
                "code" => "ctr"
            ],
            [
                "id" => 3475,
                "country_id" => 167,
                "state_id" => 98,
                "name" => json_encode(["en" => "Corvallis", "zh" => "科瓦利斯"]),
                "code" => "ycv"
            ],
            [
                "id" => 3476,
                "country_id" => 167,
                "state_id" => 98,
                "name" => json_encode(["en" => "Coos Bay", "zh" => "库斯贝"]),
                "code" => "cob"
            ],
            [
                "id" => 3477,
                "country_id" => 167,
                "state_id" => 98,
                "name" => json_encode(["en" => "Medford", "zh" => "梅德福"]),
                "code" => "mfr"
            ],
            [
                "id" => 3478,
                "country_id" => 167,
                "state_id" => 98,
                "name" => json_encode(["en" => "Salem", "zh" => "塞勒姆"]),
                "code" => "sle"
            ],
            [
                "id" => 3479,
                "country_id" => 167,
                "state_id" => 98,
                "name" => json_encode(["en" => "St Helens", "zh" => "圣海伦斯"]),
                "code" => "sth"
            ],
            [
                "id" => 3480,
                "country_id" => 167,
                "state_id" => 98,
                "name" => json_encode(["en" => "Springfield", "zh" => "斯普林菲尔德"]),
                "code" => "spy"
            ],
            [
                "id" => 3481,
                "country_id" => 167,
                "state_id" => 98,
                "name" => json_encode(["en" => "Eugene", "zh" => "尤金"]),
                "code" => "eug"
            ],
            [
                "id" => 3482,
                "country_id" => 167,
                "state_id" => 70,
                "name" => json_encode(["en" => "Orlando", "zh" => "奥兰多"]),
                "code" => "orl"
            ],
            [
                "id" => 3483,
                "country_id" => 167,
                "state_id" => 70,
                "name" => json_encode(["en" => "Key West", "zh" => "基韦斯特"]),
                "code" => "eyw"
            ],
            [
                "id" => 3484,
                "country_id" => 167,
                "state_id" => 70,
                "name" => json_encode(["en" => "Jacksonville", "zh" => "杰克逊维尔"]),
                "code" => "jax"
            ],
            [
                "id" => 3485,
                "country_id" => 167,
                "state_id" => 70,
                "name" => json_encode(["en" => "Cape Canaveral", "zh" => "卡纳维尔角"]),
                "code" => "cpv"
            ],
            [
                "id" => 3486,
                "country_id" => 167,
                "state_id" => 70,
                "name" => json_encode(["en" => "Fort Lauderdale", "zh" => "罗德岱堡"]),
                "code" => "fll"
            ],
            [
                "id" => 3487,
                "country_id" => 167,
                "state_id" => 70,
                "name" => json_encode(["en" => "Miami", "zh" => "迈阿密"]),
                "code" => "mia"
            ],
            [
                "id" => 3488,
                "country_id" => 167,
                "state_id" => 70,
                "name" => json_encode(["en" => "St. Petersburg", "zh" => "圣彼德斯堡市"]),
                "code" => "pie"
            ],
            [
                "id" => 3489,
                "country_id" => 167,
                "state_id" => 70,
                "name" => json_encode(["en" => "Tallahassee", "zh" => "塔拉哈西"]),
                "code" => "tlh"
            ],
            [
                "id" => 3490,
                "country_id" => 167,
                "state_id" => 70,
                "name" => json_encode(["en" => "Tampa", "zh" => "坦帕"]),
                "code" => "tpa"
            ],
            [
                "id" => 3491,
                "country_id" => 167,
                "state_id" => 106,
                "name" => json_encode(["en" => "Burlington", "zh" => "伯灵顿"]),
                "code" => "btv"
            ],
            [
                "id" => 3492,
                "country_id" => 167,
                "state_id" => 106,
                "name" => json_encode(["en" => "Rutland", "zh" => "拉特兰"]),
                "code" => "rut"
            ],
            [
                "id" => 3493,
                "country_id" => 167,
                "state_id" => 106,
                "name" => json_encode(["en" => "South Burlington", "zh" => "南伯灵顿"]),
                "code" => "zbr"
            ],
            [
                "id" => 3494,
                "country_id" => 167,
                "state_id" => 69,
                "name" => json_encode(["en" => "Washington D.C.", "zh" => "华盛顿哥伦比亚特区"]),
                "code" => "was"
            ],
            [
                "id" => 3495,
                "country_id" => 167,
                "state_id" => 108,
                "name" => json_encode(["en" => "Spokane", "zh" => "斯波坎"]),
                "code" => "geg"
            ],
            [
                "id" => 3496,
                "country_id" => 167,
                "state_id" => 108,
                "name" => json_encode(["en" => "Tacoma", "zh" => "塔科马"]),
                "code" => "ttw"
            ],
            [
                "id" => 3497,
                "country_id" => 167,
                "state_id" => 108,
                "name" => json_encode(["en" => "Seattle", "zh" => "西雅图"]),
                "code" => "sea"
            ],
            [
                "id" => 3498,
                "country_id" => 167,
                "state_id" => 111,
                "name" => json_encode(["en" => "Evanston", "zh" => "埃文斯顿"]),
                "code" => "evd"
            ],
            [
                "id" => 3499,
                "country_id" => 167,
                "state_id" => 111,
                "name" => json_encode(["en" => "Casper", "zh" => "卡斯珀"]),
                "code" => "cpr"
            ],
            [
                "id" => 3500,
                "country_id" => 167,
                "state_id" => 111,
                "name" => json_encode(["en" => "Laramie", "zh" => "拉勒米"]),
                "code" => "lar"
            ],
            [
                "id" => 3501,
                "country_id" => 167,
                "state_id" => 111,
                "name" => json_encode(["en" => "Rock Springs", "zh" => "罗克斯普林斯"]),
                "code" => "rks"
            ],
            [
                "id" => 3502,
                "country_id" => 167,
                "state_id" => 111,
                "name" => json_encode(["en" => "Cheyenne", "zh" => "夏延"]),
                "code" => "cys"
            ],
            [
                "id" => 3503,
                "country_id" => 167,
                "state_id" => 111,
                "name" => json_encode(["en" => "Sheridan", "zh" => "谢里登"]),
                "code" => "shr"
            ],
            [
                "id" => 3504,
                "country_id" => 167,
                "state_id" => 65,
                "name" => json_encode(["en" => "San Francisco", "zh" => "旧金山"]),
                "code" => "sfo"
            ],
            [
                "id" => 3505,
                "country_id" => 167,
                "state_id" => 65,
                "name" => json_encode(["en" => "Los Angeles", "zh" => "洛杉矶"]),
                "code" => "lax"
            ],
            [
                "id" => 3506,
                "country_id" => 167,
                "state_id" => 65,
                "name" => json_encode(["en" => "San Diego", "zh" => "圣迭戈"]),
                "code" => "san"
            ],
            [
                "id" => 3507,
                "country_id" => 167,
                "state_id" => 65,
                "name" => json_encode(["en" => "San Jose", "zh" => "圣何塞"]),
                "code" => "sjc"
            ],
            [
                "id" => 3508,
                "country_id" => 167,
                "state_id" => 77,
                "name" => json_encode(["en" => "Abilene", "zh" => "阿比林"]),
                "code" => "abz"
            ],
            [
                "id" => 3509,
                "country_id" => 167,
                "state_id" => 77,
                "name" => json_encode(["en" => "Overland Park", "zh" => "奥弗兰公园"]),
                "code" => "ovl"
            ],
            [
                "id" => 3510,
                "country_id" => 167,
                "state_id" => 77,
                "name" => json_encode(["en" => "Hutchinson", "zh" => "哈钦森"]),
                "code" => "hch"
            ],
            [
                "id" => 3511,
                "country_id" => 167,
                "state_id" => 77,
                "name" => json_encode(["en" => "Kansas City", "zh" => "堪萨斯城"]),
                "code" => "kck"
            ],
            [
                "id" => 3512,
                "country_id" => 167,
                "state_id" => 77,
                "name" => json_encode(["en" => "Leavenworth", "zh" => "莱文沃思"]),
                "code" => "xia"
            ],
            [
                "id" => 3513,
                "country_id" => 167,
                "state_id" => 77,
                "name" => json_encode(["en" => "Lawrence", "zh" => "劳伦斯"]),
                "code" => "lwc"
            ],
            [
                "id" => 3514,
                "country_id" => 167,
                "state_id" => 77,
                "name" => json_encode(["en" => "Manhattan", "zh" => "曼哈顿"]),
                "code" => "mhk"
            ],
            [
                "id" => 3515,
                "country_id" => 167,
                "state_id" => 77,
                "name" => json_encode(["en" => "Topeka", "zh" => "托皮卡"]),
                "code" => "top"
            ],
            [
                "id" => 3516,
                "country_id" => 167,
                "state_id" => 77,
                "name" => json_encode(["en" => "Wichita", "zh" => "威奇托"]),
                "code" => "ict"
            ],
            [
                "id" => 3517,
                "country_id" => 167,
                "state_id" => 67,
                "name" => json_encode(["en" => "Bridgeport", "zh" => "布里奇波特"]),
                "code" => "bdr"
            ],
            [
                "id" => 3518,
                "country_id" => 167,
                "state_id" => 67,
                "name" => json_encode(["en" => "Darien", "zh" => "达里恩"]),
                "code" => "daq"
            ],
            [
                "id" => 3519,
                "country_id" => 167,
                "state_id" => 67,
                "name" => json_encode(["en" => "Greenwich", "zh" => "格林尼治"]),
                "code" => "grh"
            ],
            [
                "id" => 3520,
                "country_id" => 167,
                "state_id" => 67,
                "name" => json_encode(["en" => "Hartford", "zh" => "哈特福德"]),
                "code" => "hfd"
            ],
            [
                "id" => 3521,
                "country_id" => 167,
                "state_id" => 67,
                "name" => json_encode(["en" => "Middletown", "zh" => "米德尔顿"]),
                "code" => "xin"
            ],
            [
                "id" => 3522,
                "country_id" => 167,
                "state_id" => 67,
                "name" => json_encode(["en" => "New Haven", "zh" => "纽黑文"]),
                "code" => "hvn"
            ],
            [
                "id" => 3523,
                "country_id" => 167,
                "state_id" => 67,
                "name" => json_encode(["en" => "Westport", "zh" => "韦斯特波特"]),
                "code" => "wpt"
            ],
            [
                "id" => 3524,
                "country_id" => 167,
                "state_id" => 67,
                "name" => json_encode(["en" => "Waterbury", "zh" => "沃特伯里"]),
                "code" => "wat"
            ],
            [
                "id" => 3525,
                "country_id" => 167,
                "state_id" => 67,
                "name" => json_encode(["en" => "New Britain", "zh" => "新不列颠"]),
                "code" => "nwt"
            ],
            [
                "id" => 3526,
                "country_id" => 167,
                "state_id" => 66,
                "name" => json_encode(["en" => "Aspen", "zh" => "阿斯彭"]),
                "code" => "ase"
            ],
            [
                "id" => 3527,
                "country_id" => 167,
                "state_id" => 66,
                "name" => json_encode(["en" => "Aurora", "zh" => "奥罗拉"]),
                "code" => "aux"
            ],
            [
                "id" => 3528,
                "country_id" => 167,
                "state_id" => 66,
                "name" => json_encode(["en" => "Boulder", "zh" => "博尔德"]),
                "code" => "wbu"
            ],
            [
                "id" => 3529,
                "country_id" => 167,
                "state_id" => 66,
                "name" => json_encode(["en" => "Grand Junction", "zh" => "大章克申"]),
                "code" => "gjt"
            ],
            [
                "id" => 3530,
                "country_id" => 167,
                "state_id" => 66,
                "name" => json_encode(["en" => "Denver", "zh" => "丹佛"]),
                "code" => "den"
            ],
            [
                "id" => 3531,
                "country_id" => 167,
                "state_id" => 66,
                "name" => json_encode(["en" => "Fort Collins", "zh" => "柯林斯堡"]),
                "code" => "fnl"
            ],
            [
                "id" => 3532,
                "country_id" => 167,
                "state_id" => 66,
                "name" => json_encode(["en" => "Colorado Springs", "zh" => "科罗拉多斯普林斯"]),
                "code" => "cos"
            ],
            [
                "id" => 3533,
                "country_id" => 167,
                "state_id" => 66,
                "name" => json_encode(["en" => "Vail", "zh" => "韦尔"]),
                "code" => "vac"
            ],
            [
                "id" => 3534,
                "country_id" => 167,
                "state_id" => 78,
                "name" => json_encode(["en" => "Lexington", "zh" => "列克星敦"]),
                "code" => "lex"
            ],
            [
                "id" => 3535,
                "country_id" => 167,
                "state_id" => 78,
                "name" => json_encode(["en" => "Louisville", "zh" => "路易斯维尔"]),
                "code" => "lui"
            ],
            [
                "id" => 3536,
                "country_id" => 167,
                "state_id" => 78,
                "name" => json_encode(["en" => "Owensboro", "zh" => "欧文斯伯勒"]),
                "code" => "owb"
            ],
            [
                "id" => 3537,
                "country_id" => 167,
                "state_id" => 79,
                "name" => json_encode(["en" => "Baton Rouge", "zh" => "巴吞鲁日"]),
                "code" => "btr"
            ],
            [
                "id" => 3538,
                "country_id" => 167,
                "state_id" => 79,
                "name" => json_encode(["en" => "Shreveport", "zh" => "什里夫波特"]),
                "code" => "shv"
            ],
            [
                "id" => 3539,
                "country_id" => 167,
                "state_id" => 79,
                "name" => json_encode(["en" => "New Orleans", "zh" => "新奥尔良"]),
                "code" => "msy"
            ],
            [
                "id" => 3540,
                "country_id" => 167,
                "state_id" => 100,
                "name" => json_encode(["en" => "Pawtucket", "zh" => "波塔基特"]),
                "code" => "paw"
            ],
            [
                "id" => 3541,
                "country_id" => 167,
                "state_id" => 100,
                "name" => json_encode(["en" => "Cranston", "zh" => "克兰斯顿"]),
                "code" => "cqh"
            ],
            [
                "id" => 3542,
                "country_id" => 167,
                "state_id" => 100,
                "name" => json_encode(["en" => "Newport", "zh" => "纽波特"]),
                "code" => "npo"
            ],
            [
                "id" => 3543,
                "country_id" => 167,
                "state_id" => 100,
                "name" => json_encode(["en" => "Providence", "zh" => "普罗维登斯"]),
                "code" => "pvd"
            ],
            [
                "id" => 3544,
                "country_id" => 167,
                "state_id" => 100,
                "name" => json_encode(["en" => "Westerly", "zh" => "韦斯特利"]),
                "code" => "wst"
            ],
            [
                "id" => 3545,
                "country_id" => 167,
                "state_id" => 100,
                "name" => json_encode(["en" => "Woonsocket", "zh" => "文索基特"]),
                "code" => "sfn"
            ],
            [
                "id" => 3546,
                "country_id" => 167,
                "state_id" => 100,
                "name" => json_encode(["en" => "Warwick", "zh" => "沃威克"]),
                "code" => "uzo"
            ],
            [
                "id" => 3547,
                "country_id" => 167,
                "state_id" => 81,
                "name" => json_encode(["en" => "Balitmore", "zh" => "巴尔的摩"]),
                "code" => "bal"
            ],
            [
                "id" => 3548,
                "country_id" => 167,
                "state_id" => 81,
                "name" => json_encode(["en" => "Gaithersburg", "zh" => "盖瑟斯堡"]),
                "code" => "gai"
            ],
            [
                "id" => 3549,
                "country_id" => 167,
                "state_id" => 81,
                "name" => json_encode(["en" => "Rockville", "zh" => "罗克维尔"]),
                "code" => "rkv"
            ],
            [
                "id" => 3550,
                "country_id" => 167,
                "state_id" => 82,
                "name" => json_encode(["en" => "Boston", "zh" => "波士顿"]),
                "code" => "bzd"
            ],
            [
                "id" => 3551,
                "country_id" => 167,
                "state_id" => 82,
                "name" => json_encode(["en" => "Springfield", "zh" => "斯普林菲尔德"]),
                "code" => "sfy"
            ],
            [
                "id" => 3552,
                "country_id" => 167,
                "state_id" => 82,
                "name" => json_encode(["en" => "Worcester", "zh" => "伍斯特"]),
                "code" => "orh"
            ],
            [
                "id" => 3553,
                "country_id" => 167,
                "state_id" => 87,
                "name" => json_encode(["en" => "Billings", "zh" => "比灵斯"]),
                "code" => "bgs"
            ],
            [
                "id" => 3554,
                "country_id" => 167,
                "state_id" => 87,
                "name" => json_encode(["en" => "Great Falls", "zh" => "大瀑布村"]),
                "code" => "gtf"
            ],
            [
                "id" => 3555,
                "country_id" => 167,
                "state_id" => 87,
                "name" => json_encode(["en" => "Missoula", "zh" => "米苏拉"]),
                "code" => "mso"
            ],
            [
                "id" => 3556,
                "country_id" => 167,
                "state_id" => 86,
                "name" => json_encode(["en" => "Columbia", "zh" => "哥伦比亚"]),
                "code" => "cov"
            ],
            [
                "id" => 3557,
                "country_id" => 167,
                "state_id" => 86,
                "name" => json_encode(["en" => "Jefferson City", "zh" => "杰佛逊市"]),
                "code" => "jef"
            ],
            [
                "id" => 3558,
                "country_id" => 167,
                "state_id" => 86,
                "name" => json_encode(["en" => "Kansas City", "zh" => "堪萨斯城"]),
                "code" => "mkc"
            ],
            [
                "id" => 3559,
                "country_id" => 167,
                "state_id" => 86,
                "name" => json_encode(["en" => "Sanit Louis", "zh" => "圣路易斯"]),
                "code" => "stl"
            ],
            [
                "id" => 3560,
                "country_id" => 167,
                "state_id" => 86,
                "name" => json_encode(["en" => "Springfield", "zh" => "斯普林菲尔德"]),
                "code" => "sgf"
            ],
            [
                "id" => 3561,
                "country_id" => 167,
                "state_id" => 85,
                "name" => json_encode(["en" => "Biloxi", "zh" => "比洛克西"]),
                "code" => "bix"
            ],
            [
                "id" => 3562,
                "country_id" => 167,
                "state_id" => 85,
                "name" => json_encode(["en" => "Gulfport", "zh" => "格尔夫波特"]),
                "code" => "gpt"
            ],
            [
                "id" => 3563,
                "country_id" => 167,
                "state_id" => 85,
                "name" => json_encode(["en" => "Greenville", "zh" => "格林维尔"]),
                "code" => "glh"
            ],
            [
                "id" => 3564,
                "country_id" => 167,
                "state_id" => 85,
                "name" => json_encode(["en" => "Hattiesburg", "zh" => "哈蒂斯堡"]),
                "code" => "hbg"
            ],
            [
                "id" => 3565,
                "country_id" => 167,
                "state_id" => 85,
                "name" => json_encode(["en" => "Jackson", "zh" => "杰克逊"]),
                "code" => "jan"
            ],
            [
                "id" => 3566,
                "country_id" => 167,
                "state_id" => 85,
                "name" => json_encode(["en" => "Meridian", "zh" => "默里迪恩"]),
                "code" => "mei"
            ],
            [
                "id" => 3567,
                "country_id" => 167,
                "state_id" => 85,
                "name" => json_encode(["en" => "Vicksburg", "zh" => "维克斯堡"]),
                "code" => "vks"
            ],
            [
                "id" => 3568,
                "country_id" => 167,
                "state_id" => 83,
                "name" => json_encode(["en" => "Ann Arbor", "zh" => "安娜堡"]),
                "code" => "arb"
            ],
            [
                "id" => 3569,
                "country_id" => 167,
                "state_id" => 83,
                "name" => json_encode(["en" => "Battle Creek", "zh" => "巴特尔克里克"]),
                "code" => "btl"
            ],
            [
                "id" => 3570,
                "country_id" => 167,
                "state_id" => 83,
                "name" => json_encode(["en" => "Bay City", "zh" => "贝城"]),
                "code" => "bcy"
            ],
            [
                "id" => 3571,
                "country_id" => 167,
                "state_id" => 83,
                "name" => json_encode(["en" => "Grand Rapids", "zh" => "大急流城"]),
                "code" => "grr"
            ],
            [
                "id" => 3572,
                "country_id" => 167,
                "state_id" => 83,
                "name" => json_encode(["en" => "Dearborn", "zh" => "迪尔伯恩"]),
                "code" => "deo"
            ],
            [
                "id" => 3573,
                "country_id" => 167,
                "state_id" => 83,
                "name" => json_encode(["en" => "Detroit", "zh" => "底特律"]),
                "code" => "det"
            ],
            [
                "id" => 3574,
                "country_id" => 167,
                "state_id" => 83,
                "name" => json_encode(["en" => "Flint", "zh" => "弗林特"]),
                "code" => "fnt"
            ],
            [
                "id" => 3575,
                "country_id" => 167,
                "state_id" => 83,
                "name" => json_encode(["en" => "Wyandotte", "zh" => "怀恩多特"]),
                "code" => "wyd"
            ],
            [
                "id" => 3576,
                "country_id" => 167,
                "state_id" => 83,
                "name" => json_encode(["en" => "Kalamazoo", "zh" => "卡拉马袓"]),
                "code" => "azo"
            ],
            [
                "id" => 3577,
                "country_id" => 167,
                "state_id" => 83,
                "name" => json_encode(["en" => "Lansing", "zh" => "兰辛"]),
                "code" => "lan"
            ],
            [
                "id" => 3578,
                "country_id" => 167,
                "state_id" => 83,
                "name" => json_encode(["en" => "Muskegon", "zh" => "马斯基根"]),
                "code" => "mkg"
            ],
            [
                "id" => 3579,
                "country_id" => 167,
                "state_id" => 83,
                "name" => json_encode(["en" => "Pontiac", "zh" => "庞菷亚克"]),
                "code" => "ptk"
            ],
            [
                "id" => 3580,
                "country_id" => 167,
                "state_id" => 83,
                "name" => json_encode(["en" => "Saginaw", "zh" => "萨吉诺"]),
                "code" => "sgm"
            ],
            [
                "id" => 3581,
                "country_id" => 167,
                "state_id" => 83,
                "name" => json_encode(["en" => "Sault Ste Marie", "zh" => "苏圣玛丽"]),
                "code" => "ssm"
            ],
            [
                "id" => 3582,
                "country_id" => 167,
                "state_id" => 83,
                "name" => json_encode(["en" => "Warren", "zh" => "沃伦"]),
                "code" => "wam"
            ],
            [
                "id" => 3583,
                "country_id" => 167,
                "state_id" => 83,
                "name" => json_encode(["en" => "Port Huron", "zh" => "休伦港"]),
                "code" => "phn"
            ],
            [
                "id" => 3584,
                "country_id" => 167,
                "state_id" => 80,
                "name" => json_encode(["en" => "Bangor", "zh" => "班戈"]),
                "code" => "bnq"
            ],
            [
                "id" => 3585,
                "country_id" => 167,
                "state_id" => 80,
                "name" => json_encode(["en" => "Portland", "zh" => "波特兰"]),
                "code" => "pol"
            ],
            [
                "id" => 3586,
                "country_id" => 167,
                "state_id" => 80,
                "name" => json_encode(["en" => "Lewiston", "zh" => "刘易斯顿"]),
                "code" => "qlw"
            ],
            [
                "id" => 3587,
                "country_id" => 167,
                "state_id" => 84,
                "name" => json_encode(["en" => "Rochester", "zh" => "罗切斯特"]),
                "code" => "rst"
            ],
            [
                "id" => 3588,
                "country_id" => 167,
                "state_id" => 84,
                "name" => json_encode(["en" => "Minneapolis", "zh" => "明尼阿波利斯"]),
                "code" => "mes"
            ],
            [
                "id" => 3589,
                "country_id" => 167,
                "state_id" => 84,
                "name" => json_encode(["en" => "Saint Paul", "zh" => "圣保罗"]),
                "code" => "stp"
            ],
            [
                "id" => 3590,
                "country_id" => 167,
                "state_id" => 102,
                "name" => json_encode(["en" => "Aberdeen", "zh" => "阿伯丁"]),
                "code" => "abk"
            ],
            [
                "id" => 3591,
                "country_id" => 167,
                "state_id" => 102,
                "name" => json_encode(["en" => "Rapid City", "zh" => "拉皮德城"]),
                "code" => "rap"
            ],
            [
                "id" => 3592,
                "country_id" => 167,
                "state_id" => 102,
                "name" => json_encode(["en" => "Sioux Falls", "zh" => "苏福尔斯"]),
                "code" => "fsd"
            ],
            [
                "id" => 3593,
                "country_id" => 167,
                "state_id" => 101,
                "name" => json_encode(["en" => "North Charleston", "zh" => "北查尔斯顿"]),
                "code" => "nts"
            ],
            [
                "id" => 3594,
                "country_id" => 167,
                "state_id" => 101,
                "name" => json_encode(["en" => "Charleston", "zh" => "查尔斯顿"]),
                "code" => "chs"
            ],
            [
                "id" => 3595,
                "country_id" => 167,
                "state_id" => 101,
                "name" => json_encode(["en" => "Columbia", "zh" => "哥伦比亚"]),
                "code" => "cov"
            ],
            [
                "id" => 3596,
                "country_id" => 167,
                "state_id" => 88,
                "name" => json_encode(["en" => "Omaha", "zh" => "奥马哈"]),
                "code" => "oma"
            ],
            [
                "id" => 3597,
                "country_id" => 167,
                "state_id" => 88,
                "name" => json_encode(["en" => "Bellevue", "zh" => "贝尔维尤"]),
                "code" => "xde"
            ],
            [
                "id" => 3598,
                "country_id" => 167,
                "state_id" => 88,
                "name" => json_encode(["en" => "Lincoln", "zh" => "林肯"]),
                "code" => "lnk"
            ],
            [
                "id" => 3599,
                "country_id" => 167,
                "state_id" => 89,
                "name" => json_encode(["en" => "Elko", "zh" => "埃尔科"]),
                "code" => "eko"
            ],
            [
                "id" => 3600,
                "country_id" => 167,
                "state_id" => 89,
                "name" => json_encode(["en" => "North Las Vegas", "zh" => "北拉斯维加斯"]),
                "code" => "nvs"
            ],
            [
                "id" => 3601,
                "country_id" => 167,
                "state_id" => 89,
                "name" => json_encode(["en" => "Virginia City", "zh" => "弗吉尼亚城"]),
                "code" => "vgi"
            ],
            [
                "id" => 3602,
                "country_id" => 167,
                "state_id" => 89,
                "name" => json_encode(["en" => "Henderson", "zh" => "亨德森"]),
                "code" => "hnz"
            ],
            [
                "id" => 3603,
                "country_id" => 167,
                "state_id" => 89,
                "name" => json_encode(["en" => "Carson City", "zh" => "卡森城"]),
                "code" => "csn"
            ],
            [
                "id" => 3604,
                "country_id" => 167,
                "state_id" => 89,
                "name" => json_encode(["en" => "Las Vegas", "zh" => "拉斯维加斯"]),
                "code" => "las"
            ],
            [
                "id" => 3605,
                "country_id" => 167,
                "state_id" => 89,
                "name" => json_encode(["en" => "Reno", "zh" => "里诺"]),
                "code" => "rno"
            ],
            [
                "id" => 3606,
                "country_id" => 167,
                "state_id" => 89,
                "name" => json_encode(["en" => "Sparks", "zh" => "斯帕克斯"]),
                "code" => "spk"
            ],
            [
                "id" => 3607,
                "country_id" => 167,
                "state_id" => 93,
                "name" => json_encode(["en" => "Buffalo", "zh" => "布法罗"]),
                "code" => "ffo"
            ],
            [
                "id" => 3608,
                "country_id" => 167,
                "state_id" => 93,
                "name" => json_encode(["en" => "Rochester", "zh" => "罗切斯特"]),
                "code" => "roc"
            ],
            [
                "id" => 3609,
                "country_id" => 167,
                "state_id" => 93,
                "name" => json_encode(["en" => "New York", "zh" => "纽约市"]),
                "code" => "qee"
            ],
            [
                "id" => 3610,
                "country_id" => 167,
                "state_id" => 68,
                "name" => json_encode(["en" => "Dover", "zh" => "多佛"]),
                "code" => "dor"
            ],
            [
                "id" => 3611,
                "country_id" => 167,
                "state_id" => 68,
                "name" => json_encode(["en" => "Newark", "zh" => "纽瓦克"]),
                "code" => "nwk"
            ],
            [
                "id" => 3612,
                "country_id" => 167,
                "state_id" => 68,
                "name" => json_encode(["en" => "Wilmington", "zh" => "威明顿"]),
                "code" => "ilg"
            ],
            [
                "id" => 3613,
                "country_id" => 167,
                "state_id" => 103,
                "name" => json_encode(["en" => "Bristol", "zh" => "布利斯托"]),
                "code" => "bsj"
            ],
            [
                "id" => 3614,
                "country_id" => 167,
                "state_id" => 103,
                "name" => json_encode(["en" => "Chattanooga", "zh" => "查塔努加"]),
                "code" => "cha"
            ],
            [
                "id" => 3615,
                "country_id" => 167,
                "state_id" => 103,
                "name" => json_encode(["en" => "Kingsport", "zh" => "金斯波特"]),
                "code" => "tri"
            ],
            [
                "id" => 3616,
                "country_id" => 167,
                "state_id" => 103,
                "name" => json_encode(["en" => "Memphis", "zh" => "孟菲斯"]),
                "code" => "mem"
            ],
            [
                "id" => 3617,
                "country_id" => 167,
                "state_id" => 103,
                "name" => json_encode(["en" => "Nashville", "zh" => "纳什维尔"]),
                "code" => "bna"
            ],
            [
                "id" => 3618,
                "country_id" => 167,
                "state_id" => 103,
                "name" => json_encode(["en" => "Knoxville", "zh" => "诺克斯维尔"]),
                "code" => "tys"
            ],
            [
                "id" => 3619,
                "country_id" => 167,
                "state_id" => 103,
                "name" => json_encode(["en" => "Tri-City Area", "zh" => "三城区"]),
                "code" => "ytc"
            ],
            [
                "id" => 3620,
                "country_id" => 167,
                "state_id" => 103,
                "name" => json_encode(["en" => "Smyrna", "zh" => "士麦那"]),
                "code" => "mqy"
            ],
            [
                "id" => 3621,
                "country_id" => 167,
                "state_id" => 103,
                "name" => json_encode(["en" => "Spring Hill", "zh" => "斯普林希尔"]),
                "code" => "rgi"
            ],
            [
                "id" => 3622,
                "country_id" => 167,
                "state_id" => 103,
                "name" => json_encode(["en" => "Johnson City", "zh" => "约翰逊城"]),
                "code" => "jcy"
            ],
            [
                "id" => 3623,
                "country_id" => 167,
                "state_id" => 110,
                "name" => json_encode(["en" => "Appleton", "zh" => "阿普尓顿"]),
                "code" => "atw"
            ],
            [
                "id" => 3624,
                "country_id" => 167,
                "state_id" => 110,
                "name" => json_encode(["en" => "Oshkosh", "zh" => "奥什科什"]),
                "code" => "osh"
            ],
            [
                "id" => 3625,
                "country_id" => 167,
                "state_id" => 110,
                "name" => json_encode(["en" => "Green Bay", "zh" => "格林贝"]),
                "code" => "gbk"
            ],
            [
                "id" => 3626,
                "country_id" => 167,
                "state_id" => 110,
                "name" => json_encode(["en" => "Kenosha", "zh" => "基诺沙"]),
                "code" => "enw"
            ],
            [
                "id" => 3627,
                "country_id" => 167,
                "state_id" => 110,
                "name" => json_encode(["en" => "LaCrosse", "zh" => "拉克罗斯"]),
                "code" => "lse"
            ],
            [
                "id" => 3628,
                "country_id" => 167,
                "state_id" => 110,
                "name" => json_encode(["en" => "Racine", "zh" => "拉辛"]),
                "code" => "rac"
            ],
            [
                "id" => 3629,
                "country_id" => 167,
                "state_id" => 110,
                "name" => json_encode(["en" => "Manitowoc", "zh" => "马尼托沃克"]),
                "code" => "mtw"
            ],
            [
                "id" => 3630,
                "country_id" => 167,
                "state_id" => 110,
                "name" => json_encode(["en" => "Madison", "zh" => "迈迪逊"]),
                "code" => "qmd"
            ],
            [
                "id" => 3631,
                "country_id" => 167,
                "state_id" => 110,
                "name" => json_encode(["en" => "Milwaukee", "zh" => "密尔沃基"]),
                "code" => "mke"
            ],
            [
                "id" => 3632,
                "country_id" => 167,
                "state_id" => 110,
                "name" => json_encode(["en" => "Eau Claire", "zh" => "欧克莱尓"]),
                "code" => "eau"
            ],
            [
                "id" => 3633,
                "country_id" => 167,
                "state_id" => 110,
                "name" => json_encode(["en" => "Wausau", "zh" => "沃索"]),
                "code" => "auw"
            ],
            [
                "id" => 3634,
                "country_id" => 167,
                "state_id" => 110,
                "name" => json_encode(["en" => "Sheboygan", "zh" => "希博伊根"]),
                "code" => "sbm"
            ],
            [
                "id" => 3635,
                "country_id" => 167,
                "state_id" => 107,
                "name" => json_encode(["en" => "Virginia Beach", "zh" => "弗吉尼亚比奇"]),
                "code" => "vab"
            ],
            [
                "id" => 3636,
                "country_id" => 167,
                "state_id" => 107,
                "name" => json_encode(["en" => "Norfolk", "zh" => "诺福克"]),
                "code" => "orf"
            ],
            [
                "id" => 3637,
                "country_id" => 167,
                "state_id" => 107,
                "name" => json_encode(["en" => "Chesapeake", "zh" => "切萨皮克"]),
                "code" => "htw"
            ],
            [
                "id" => 3638,
                "country_id" => 167,
                "state_id" => 109,
                "name" => json_encode(["en" => "Charleston", "zh" => "查尔斯顿"]),
                "code" => "crw"
            ],
            [
                "id" => 3639,
                "country_id" => 167,
                "state_id" => 109,
                "name" => json_encode(["en" => "Huntington", "zh" => "亨廷顿"]),
                "code" => "hnu"
            ],
            [
                "id" => 3640,
                "country_id" => 167,
                "state_id" => 109,
                "name" => json_encode(["en" => "Parkersburg", "zh" => "帕克斯堡"]),
                "code" => "pkb"
            ],
            [
                "id" => 3641,
                "country_id" => 167,
                "state_id" => 72,
                "name" => json_encode(["en" => "Kailua", "zh" => "凯卢阿"]),
                "code" => "khh"
            ],
            [
                "id" => 3642,
                "country_id" => 167,
                "state_id" => 72,
                "name" => json_encode(["en" => "Honolulu", "zh" => "檀香山"]),
                "code" => "hnl"
            ],
            [
                "id" => 3643,
                "country_id" => 167,
                "state_id" => 72,
                "name" => json_encode(["en" => "Hilo", "zh" => "希洛"]),
                "code" => "ito"
            ],
            [
                "id" => 3644,
                "country_id" => 167,
                "state_id" => 90,
                "name" => json_encode(["en" => "Concord", "zh" => "康科德"]),
                "code" => "con"
            ],
            [
                "id" => 3645,
                "country_id" => 167,
                "state_id" => 90,
                "name" => json_encode(["en" => "Manchester", "zh" => "曼彻斯特"]),
                "code" => "mht"
            ],
            [
                "id" => 3646,
                "country_id" => 167,
                "state_id" => 90,
                "name" => json_encode(["en" => "Nashua", "zh" => "纳舒厄"]),
                "code" => "ash"
            ],
            [
                "id" => 3647,
                "country_id" => 167,
                "state_id" => 92,
                "name" => json_encode(["en" => "Albuquerque", "zh" => "阿尔伯克基"]),
                "code" => "abq"
            ],
            [
                "id" => 3648,
                "country_id" => 167,
                "state_id" => 92,
                "name" => json_encode(["en" => "Las Cruces", "zh" => "拉斯克鲁塞斯"]),
                "code" => "lru"
            ],
            [
                "id" => 3649,
                "country_id" => 167,
                "state_id" => 92,
                "name" => json_encode(["en" => "Roswell", "zh" => "罗斯韦尔"]),
                "code" => "row"
            ],
            [
                "id" => 3650,
                "country_id" => 167,
                "state_id" => 92,
                "name" => json_encode(["en" => "Santa Fe", "zh" => "圣菲"]),
                "code" => "saf"
            ],
            [
                "id" => 3651,
                "country_id" => 167,
                "state_id" => 91,
                "name" => json_encode(["en" => "Newark", "zh" => "纽瓦克"]),
                "code" => "nrk"
            ],
            [
                "id" => 3652,
                "country_id" => 167,
                "state_id" => 91,
                "name" => json_encode(["en" => "Paterson", "zh" => "帕特森"]),
                "code" => "pat"
            ],
            [
                "id" => 3653,
                "country_id" => 167,
                "state_id" => 91,
                "name" => json_encode(["en" => "Jersey City", "zh" => "泽西城"]),
                "code" => "jec"
            ],
            [
                "id" => 3654,
                "country_id" => 167,
                "state_id" => 63,
                "name" => json_encode(["en" => "Phoenix", "zh" => "凤凰城"]),
                "code" => "phx"
            ],
            [
                "id" => 3655,
                "country_id" => 167,
                "state_id" => 63,
                "name" => json_encode(["en" => "Glendale", "zh" => "格兰代尔"]),
                "code" => "gda"
            ],
            [
                "id" => 3656,
                "country_id" => 167,
                "state_id" => 63,
                "name" => json_encode(["en" => "Mesa", "zh" => "梅萨"]),
                "code" => "mqa"
            ],
            [
                "id" => 3657,
                "country_id" => 167,
                "state_id" => 63,
                "name" => json_encode(["en" => "Scottsdale", "zh" => "史卡兹代尔"]),
                "code" => "stz"
            ],
            [
                "id" => 3658,
                "country_id" => 167,
                "state_id" => 63,
                "name" => json_encode(["en" => "Tempe", "zh" => "坦普"]),
                "code" => "tpe"
            ],
            [
                "id" => 3659,
                "country_id" => 167,
                "state_id" => 63,
                "name" => json_encode(["en" => "Tucson", "zh" => "图森"]),
                "code" => "tuc"
            ],
            [
                "id" => 3660,
                "country_id" => 167,
                "state_id" => 63,
                "name" => json_encode(["en" => "Yuma", "zh" => "优玛"]),
                "code" => "yum"
            ],
            [
                "id" => 3661,
                "country_id" => 167,
                "state_id" => 74,
                "name" => json_encode(["en" => "Alton", "zh" => "奥尔顿"]),
                "code" => "aln"
            ],
            [
                "id" => 3662,
                "country_id" => 167,
                "state_id" => 74,
                "name" => json_encode(["en" => "Aurora", "zh" => "奥罗拉"]),
                "code" => "auz"
            ],
            [
                "id" => 3663,
                "country_id" => 167,
                "state_id" => 74,
                "name" => json_encode(["en" => "Bloomington", "zh" => "布卢明顿"]),
                "code" => "blo"
            ],
            [
                "id" => 3664,
                "country_id" => 167,
                "state_id" => 74,
                "name" => json_encode(["en" => "Danville", "zh" => "丹维尓"]),
                "code" => "dvi"
            ],
            [
                "id" => 3665,
                "country_id" => 167,
                "state_id" => 74,
                "name" => json_encode(["en" => "De Kalb", "zh" => "迪卡尔布"]),
                "code" => "dek"
            ],
            [
                "id" => 3666,
                "country_id" => 167,
                "state_id" => 74,
                "name" => json_encode(["en" => "Decatur", "zh" => "迪凯持"]),
                "code" => "dec"
            ],
            [
                "id" => 3667,
                "country_id" => 167,
                "state_id" => 74,
                "name" => json_encode(["en" => "East St Louis", "zh" => "东圣路易斯"]),
                "code" => "esl"
            ],
            [
                "id" => 3668,
                "country_id" => 167,
                "state_id" => 74,
                "name" => json_encode(["en" => "Champaign-Urbana", "zh" => "厄巴纳-香槟"]),
                "code" => "cmi"
            ],
            [
                "id" => 3669,
                "country_id" => 167,
                "state_id" => 74,
                "name" => json_encode(["en" => "Galesburg", "zh" => "盖尔斯堡"]),
                "code" => "gsu"
            ],
            [
                "id" => 3670,
                "country_id" => 167,
                "state_id" => 74,
                "name" => json_encode(["en" => "Carbondale", "zh" => "卡本代尔"]),
                "code" => "mdh"
            ],
            [
                "id" => 3671,
                "country_id" => 167,
                "state_id" => 74,
                "name" => json_encode(["en" => "Rock Island", "zh" => "罗克艾兰"]),
                "code" => "rki"
            ],
            [
                "id" => 3672,
                "country_id" => 167,
                "state_id" => 74,
                "name" => json_encode(["en" => "Rockford", "zh" => "罗克福德"]),
                "code" => "rfd"
            ],
            [
                "id" => 3673,
                "country_id" => 167,
                "state_id" => 74,
                "name" => json_encode(["en" => "Normal", "zh" => "诺黙尔"]),
                "code" => "nom"
            ],
            [
                "id" => 3674,
                "country_id" => 167,
                "state_id" => 74,
                "name" => json_encode(["en" => "Peoria", "zh" => "皮奥里亚"]),
                "code" => "pla"
            ],
            [
                "id" => 3675,
                "country_id" => 167,
                "state_id" => 74,
                "name" => json_encode(["en" => "Centralia", "zh" => "森特勒利亚"]),
                "code" => "cra"
            ],
            [
                "id" => 3676,
                "country_id" => 167,
                "state_id" => 74,
                "name" => json_encode(["en" => "Springfield", "zh" => "斯普林菲尔德"]),
                "code" => "spi"
            ],
            [
                "id" => 3677,
                "country_id" => 167,
                "state_id" => 74,
                "name" => json_encode(["en" => "Waukegan", "zh" => "沃其根"]),
                "code" => "ugn"
            ],
            [
                "id" => 3678,
                "country_id" => 167,
                "state_id" => 74,
                "name" => json_encode(["en" => "Chicago", "zh" => "芝加哥"]),
                "code" => "chi"
            ],
            [
                "id" => 3679,
                "country_id" => 167,
                "state_id" => 75,
                "name" => json_encode(["en" => "Evansville", "zh" => "埃文斯维尔"]),
                "code" => "evv"
            ],
            [
                "id" => 3680,
                "country_id" => 167,
                "state_id" => 75,
                "name" => json_encode(["en" => "Fort Wayne", "zh" => "韦恩堡"]),
                "code" => "fwa"
            ],
            [
                "id" => 3681,
                "country_id" => 167,
                "state_id" => 75,
                "name" => json_encode(["en" => "Indianapolis", "zh" => "印第安纳波利斯"]),
                "code" => "ind"
            ],
            [
                "id" => 3682,
                "country_id" => 167,
                "state_id" => 105,
                "name" => json_encode(["en" => "Ogden", "zh" => "奥格登"]),
                "code" => "ogd"
            ],
            [
                "id" => 3683,
                "country_id" => 167,
                "state_id" => 105,
                "name" => json_encode(["en" => "Layton", "zh" => "雷登"]),
                "code" => "ltj"
            ],
            [
                "id" => 3684,
                "country_id" => 167,
                "state_id" => 105,
                "name" => json_encode(["en" => "Orem", "zh" => "欧仁"]),
                "code" => "oeu"
            ],
            [
                "id" => 3685,
                "country_id" => 167,
                "state_id" => 105,
                "name" => json_encode(["en" => "Park City", "zh" => "帕克城"]),
                "code" => "pac"
            ],
            [
                "id" => 3686,
                "country_id" => 167,
                "state_id" => 105,
                "name" => json_encode(["en" => "Provo", "zh" => "普罗沃"]),
                "code" => "pvu"
            ],
            [
                "id" => 3687,
                "country_id" => 167,
                "state_id" => 105,
                "name" => json_encode(["en" => "St.George", "zh" => "圣乔治"]),
                "code" => "sgu"
            ],
            [
                "id" => 3688,
                "country_id" => 167,
                "state_id" => 105,
                "name" => json_encode(["en" => "West Valley City", "zh" => "西瓦利城"]),
                "code" => "wvc"
            ],
            [
                "id" => 3689,
                "country_id" => 167,
                "state_id" => 105,
                "name" => json_encode(["en" => "Salt Lake City", "zh" => "盐湖城"]),
                "code" => "slc"
            ],
            [
                "id" => 3690,
                "country_id" => 167,
                "state_id" => 71,
                "name" => json_encode(["en" => "Augusta", "zh" => "奥古斯塔"]),
                "code" => "aut"
            ],
            [
                "id" => 3691,
                "country_id" => 167,
                "state_id" => 71,
                "name" => json_encode(["en" => "Columbus", "zh" => "哥伦布"]),
                "code" => "czx"
            ],
            [
                "id" => 3692,
                "country_id" => 167,
                "state_id" => 71,
                "name" => json_encode(["en" => "Macon", "zh" => "梅肯"]),
                "code" => "mcn"
            ],
            [
                "id" => 3693,
                "country_id" => 167,
                "state_id" => 71,
                "name" => json_encode(["en" => "Savannah", "zh" => "沙瓦纳"]),
                "code" => "sav"
            ],
            [
                "id" => 3694,
                "country_id" => 167,
                "state_id" => 71,
                "name" => json_encode(["en" => "Atlanta", "zh" => "亚特兰大"]),
                "code" => "tat"
            ],
            [
                "id" => 3695,
                "country_id" => 148,
                "state_id" => 58,
                "name" => json_encode(["en" => "Belfast", "zh" => "贝尔法斯特"]),
                "code" => "bfs"
            ],
            [
                "id" => 3696,
                "country_id" => 148,
                "state_id" => 58,
                "name" => json_encode(["en" => "Derry", "zh" => "德里"]),
                "code" => "dry"
            ],
            [
                "id" => 3697,
                "country_id" => 148,
                "state_id" => 58,
                "name" => json_encode(["en" => "Lisburn", "zh" => "利斯本"]),
                "code" => "lsb"
            ],
            [
                "id" => 3698,
                "country_id" => 148,
                "state_id" => 58,
                "name" => json_encode(["en" => "Newry", "zh" => "纽里"]),
                "code" => "nym"
            ],
            [
                "id" => 3699,
                "country_id" => 148,
                "state_id" => 59,
                "name" => json_encode(["en" => "Aberdeen", "zh" => "阿伯丁"]),
                "code" => "abd"
            ],
            [
                "id" => 3700,
                "country_id" => 148,
                "state_id" => 59,
                "name" => json_encode(["en" => "Edinburgh", "zh" => "爱丁堡"]),
                "code" => "edh"
            ],
            [
                "id" => 3701,
                "country_id" => 148,
                "state_id" => 59,
                "name" => json_encode(["en" => "Dundee", "zh" => "丹迪"]),
                "code" => "dnd"
            ],
            [
                "id" => 3702,
                "country_id" => 148,
                "state_id" => 59,
                "name" => json_encode(["en" => "Glasgow", "zh" => "格拉斯哥"]),
                "code" => "glg"
            ],
            [
                "id" => 3703,
                "country_id" => 148,
                "state_id" => 59,
                "name" => json_encode(["en" => "Stirling", "zh" => "斯特灵"]),
                "code" => "stg"
            ],
            [
                "id" => 3704,
                "country_id" => 148,
                "state_id" => 59,
                "name" => json_encode(["en" => "Inverness", "zh" => "因弗内斯"]),
                "code" => "inv"
            ],
            [
                "id" => 3705,
                "country_id" => 148,
                "state_id" => 60,
                "name" => json_encode(["en" => "Bangor", "zh" => "班戈"]),
                "code" => "ban"
            ],
            [
                "id" => 3706,
                "country_id" => 148,
                "state_id" => 60,
                "name" => json_encode(["en" => "Cardiff", "zh" => "卡迪夫"]),
                "code" => "cdf"
            ],
            [
                "id" => 3707,
                "country_id" => 148,
                "state_id" => 60,
                "name" => json_encode(["en" => "Newport", "zh" => "纽波特"]),
                "code" => "nwp"
            ],
            [
                "id" => 3708,
                "country_id" => 148,
                "state_id" => 60,
                "name" => json_encode(["en" => "Swansea", "zh" => "斯旺西"]),
                "code" => "swa"
            ],
            [
                "id" => 3709,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Exeter", "zh" => "埃克塞特"]),
                "code" => "exe"
            ],
            [
                "id" => 3710,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Bath", "zh" => "巴斯"]),
                "code" => "bas"
            ],
            [
                "id" => 3711,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Peterborough", "zh" => "彼得伯勒"]),
                "code" => "pte"
            ],
            [
                "id" => 3712,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Birmingham", "zh" => "伯明翰"]),
                "code" => "bir"
            ],
            [
                "id" => 3713,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Bradford", "zh" => "布拉德福德"]),
                "code" => "brd"
            ],
            [
                "id" => 3714,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Brighton & Hove", "zh" => "布莱顿与赫福"]),
                "code" => "bnh"
            ],
            [
                "id" => 3715,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Bristol", "zh" => "布里斯托尔"]),
                "code" => "bst"
            ],
            [
                "id" => 3716,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Derby", "zh" => "德比"]),
                "code" => "der"
            ],
            [
                "id" => 3717,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Durham", "zh" => "德罕"]),
                "code" => "dur"
            ],
            [
                "id" => 3718,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Gloucester", "zh" => "格洛斯特"]),
                "code" => "glo"
            ],
            [
                "id" => 3719,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Kingston upon Hull", "zh" => "赫尔河畔京斯敦"]),
                "code" => "kuh"
            ],
            [
                "id" => 3720,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Hereford", "zh" => "赫里福德"]),
                "code" => "haf"
            ],
            [
                "id" => 3721,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Cambridge", "zh" => "剑桥"]),
                "code" => "cam"
            ],
            [
                "id" => 3722,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Carlisle", "zh" => "卡莱尔"]),
                "code" => "cax"
            ],
            [
                "id" => 3723,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Canterbury", "zh" => "坎特伯雷"]),
                "code" => "cng"
            ],
            [
                "id" => 3724,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Coventry", "zh" => "考文垂"]),
                "code" => "cov"
            ],
            [
                "id" => 3725,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Lancaster", "zh" => "兰开斯特"]),
                "code" => "lan"
            ],
            [
                "id" => 3726,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Ripon", "zh" => "里彭"]),
                "code" => "rip"
            ],
            [
                "id" => 3727,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Lichfield", "zh" => "利奇菲尔德"]),
                "code" => "lhf"
            ],
            [
                "id" => 3728,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Liverpool", "zh" => "利物浦"]),
                "code" => "liv"
            ],
            [
                "id" => 3729,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Leeds", "zh" => "利茲"]),
                "code" => "lds"
            ],
            [
                "id" => 3730,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Leicester", "zh" => "列斯特"]),
                "code" => "lce"
            ],
            [
                "id" => 3731,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Lincoln", "zh" => "林肯"]),
                "code" => "lcn"
            ],
            [
                "id" => 3732,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "London", "zh" => "伦敦"]),
                "code" => "lnd"
            ],
            [
                "id" => 3733,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Manchester", "zh" => "曼彻斯特"]),
                "code" => "man"
            ],
            [
                "id" => 3734,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Southampton", "zh" => "南安普敦"]),
                "code" => "sth"
            ],
            [
                "id" => 3735,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Oxford", "zh" => "牛津"]),
                "code" => "oxf"
            ],
            [
                "id" => 3736,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Newcastle", "zh" => "纽卡斯尔"]),
                "code" => "ncl"
            ],
            [
                "id" => 3737,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Nottingham", "zh" => "诺丁汉"]),
                "code" => "ngm"
            ],
            [
                "id" => 3738,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Norwich", "zh" => "诺里奇"]),
                "code" => "nrw"
            ],
            [
                "id" => 3739,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Portsmouth", "zh" => "朴茨茅斯"]),
                "code" => "por"
            ],
            [
                "id" => 3740,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Preston", "zh" => "普雷斯顿"]),
                "code" => "pre"
            ],
            [
                "id" => 3741,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Plymouth", "zh" => "普利茅斯"]),
                "code" => "ply"
            ],
            [
                "id" => 3742,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Chichester", "zh" => "奇切斯特"]),
                "code" => "cst"
            ],
            [
                "id" => 3743,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Chester", "zh" => "切斯特"]),
                "code" => "ceg"
            ],
            [
                "id" => 3744,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Sunderland", "zh" => "桑德兰"]),
                "code" => "sun"
            ],
            [
                "id" => 3745,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Saint Albans", "zh" => "圣阿本斯"]),
                "code" => "tbl"
            ],
            [
                "id" => 3746,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Salisbury", "zh" => "索尔斯堡"]),
                "code" => "sls"
            ],
            [
                "id" => 3747,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Salford", "zh" => "索福特"]),
                "code" => "slf"
            ],
            [
                "id" => 3748,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Truro", "zh" => "特鲁罗"]),
                "code" => "tru"
            ],
            [
                "id" => 3749,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Stoke-on-Trent", "zh" => "特伦特河畔斯多克"]),
                "code" => "sot"
            ],
            [
                "id" => 3750,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Wells", "zh" => "威尔斯"]),
                "code" => "wls"
            ],
            [
                "id" => 3751,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Wakefield", "zh" => "韦克菲尔德"]),
                "code" => "wkf"
            ],
            [
                "id" => 3752,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Winchester", "zh" => "温彻斯特"]),
                "code" => "wne"
            ],
            [
                "id" => 3753,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Wolverhampton", "zh" => "伍尔弗汉普顿"]),
                "code" => "wov"
            ],
            [
                "id" => 3754,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Worcester", "zh" => "伍斯特"]),
                "code" => "wor"
            ],
            [
                "id" => 3755,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Sheffield", "zh" => "谢菲尔德"]),
                "code" => "she"
            ],
            [
                "id" => 3756,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "Ely", "zh" => "伊利"]),
                "code" => "ely"
            ],
            [
                "id" => 3757,
                "country_id" => 148,
                "state_id" => 57,
                "name" => json_encode(["en" => "York", "zh" => "约克"]),
                "code" => "yor"
            ],
        ]);
    }
}