<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create 2 client data more than 


        DB::table('client')->insert(
            [
                [
                    'name' => 'PT. Bumi Alam Raya',
                    'image' => 'pt-bumi-alam-raya.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Kalimantan Sejahtera Mandiri',
                    'image' => 'ksm.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'CV. Anugrah Bara Insan',
                    'image' => 'abi-smd.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Lati Tanjung Harapan',
                    'image' => 'lati-tanjung.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Lintas Jalur Harapan',
                    'image' => 'lintas-jalur-harapan.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'CV. Arwana Prima Coal',
                    'image' => 'arwana-prima.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Pribumi Sanga Sanga Coal',
                    'image' => 'default.jpg',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Berau Usaha Mandiri',
                    'image' => 'berau-usaha-mandiri.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Ena Sarana Energi',
                    'image' => 'default.jpg',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Wijaya Warman Enerindo',
                    'image' => 'wijaya-warman.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'CV. Shaka',
                    'image' => 'shaka.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Rajib Xanana',
                    'image' => 'rajib-xanana.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Sentekan Jaya',
                    'image' => 'sentekan-jaya.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Aragon Tambang Pratama',
                    'image' => 'aragon-tambang.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'CV. Bumi Etam Bebaya',
                    'image' => 'etam-bumi-bebaya.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Musafir Coal Mining',
                    'image' => 'musafir-coal.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'CV. Anggaraksa Adisarana',
                    'image' => 'anggaraksa.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Soko Joyo Makmur',
                    'image' => 'soko-joyo-makmur.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Mega Sarana Sejahtera',
                    'image' => 'mega-sarana.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Indo Pancadasa Agrotama',
                    'image' => 'indopancadasa.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'CV. Delta Mahakam',
                    'image' => 'delta-mahakam.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'Dinas Pekerjaan PU Kota Samarinda',
                    'image' => 'pu-samarinda.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Dhafin Ivan Sakti ',
                    'image' => 'dhavin-ivan.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Anugrah Pratama Pertiwi ',
                    'image' => 'anugrah-pratama.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Usaha Bangun Jesindo ',
                    'image' => 'usaha-bangun-jesindo.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'CV. Empat Sehati ',
                    'image' => 'empat-sehati.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Sinar Kumala Naga',
                    'image' => 'sinar-kumala-naga.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Wira Kencana',
                    'image' => 'default.jpg',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Tambang Damai',
                    'image' => 'tambang-damai.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Fasih Paser Berjaya',
                    'image' => 'fasih-paser-berjaya.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Serinding Sumber Makmur',
                    'image' => 'serinding-sumber-makmur.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Sribangun Jaya Persada ',
                    'image' => 'default.jpg',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'CV. Amethys',
                    'image' => 'amethys.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'CV. Padang Bara Abadi ',
                    'image' => 'padang-bara.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Mulia Inti Perkasa',
                    'image' => 'mulia-inti.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Batuah Energi Prima',
                    'image' => 'batuah-energi.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Bumi Artha Kutaijaya ',
                    'image' => 'bumi-artha-kutaijaya.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Niagamas Gemilang ',
                    'image' => 'niagamas-gemilang.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Raden Tabang Mineral',
                    'image' => 'raden-tabang-mineral.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Energi Sinar Tambang',
                    'image' => 'karunia-internasional.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Mustika Indah Abadi',
                    'image' => 'mustika-indah.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Anggana Coal ',
                    'image' => 'anggana-coal.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Lembu Swana Perkasa ',
                    'image' => 'lembuswana-perkasa.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Berkat Nur Rahmat',
                    'image' => 'berkat-nur-rahmat.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Indo Bara Pratama',
                    'image' => 'indo-bara-pratama.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Bintang Empat Indonesia',
                    'image' => 'bintang-empat-indonesia.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Mineralindo Silica Jaya',
                    'image' => 'mineral-indo-silica.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Tanaya Indo Silica',
                    'image' => 'tanaya-indo-silica.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Tanaya Artha Silica',
                    'image' => 'tanaya-artha-silica.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Silica Artha Gautama',
                    'image' => 'silica-artha-gautama.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Saka Putra Perkasa',
                    'image' => 'shaka.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'CV. Surya Harapan Baru',
                    'image' => 'surya-harapan.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Berau Jaya Energy',
                    'image' => 'berau-jaya-energy.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Bukit Menjangan Lestari',
                    'image' => 'bukit-menjangan.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Farhan Fadillah Lestari',
                    'image' => 'farhan-fadhillah.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Harindo Wahana',
                    'image' => 'harindo-wahana.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ],
                [
                    'name' => 'PT. Millenia Coalindo Utama',
                    'image' => 'millenia-coalindo.png',
                    'created_at' => now(),
                    'updated_at' => now()
                ]
            ]
        );
    }
}
