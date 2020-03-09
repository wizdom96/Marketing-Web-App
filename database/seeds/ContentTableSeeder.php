<?php

use Illuminate\Database\Seeder;

class ContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('content')->delete();

        $items=array
        (
            array(
                'id'=> 1,
                'make'=>'Peugeot',
                'model'=>'206',                                         //creating ADs,   content
                'title'=>'Peugeot 206 gti, 2001year',
                'description'=>'so full oprema, odlicno socuvano, ednas udreno od vozo ama se e sanirano',
                'phone'=>'+38978555666',
                'year'=>'2001',
                'city'=>'Skopje',
                'price'=>'2100',
                'power'=>'100',
                'transmission'=>'Manual',
                'fuel'=>'Lpg',
                'km'=>'2100000',
                'type'=>'Coupe',
                'image'=>'["IMG-20180406-WA0000.jpg","IMG-20180406-WA0001.jpg"]',
                'approved'=>'1',
                'sponsored'=> '0',
                'user_id'=>'2'
            ),

            array(
                'id'=> 2,
                'make'=>'Peugeot',
                'model'=>'508',
                'title'=>'Peugeot 508 1.6hdi',
                'description'=>'doneseno so vozenje od holandija, nigde skapano, sport sedista, start/stop kopce, shiber....TOPsostojba',
                'phone'=>'+38978333777',
                'year'=>'2016',
                'city'=>'Kavadarci',
                'price'=>'9100',
                'power'=>'98',
                'transmission'=>'Automatic',
                'fuel'=>'Diesel',
                'km'=>'110000',
                'type'=>'Sedan',
                'image'=>'["7b30400c-ffa7-497d-9bae-1f3e64437d13.jpg","a99f204c-e321-4bff-840d-0d15ce3e8a0f.jpg","aea0004a-e3ff-4338-ac9d-b7b56e01dbee.jpg","e1e004f8-a266-443d-9a44-d029fa643175.jpg"]',
                'approved'=>'1',
                'sponsored'=> '0',
                'user_id'=>'2'
            ),

            array(
                'id'=> 3,
                'make'=>'Bmw',
                'model'=>'330',
                'title'=>'Bmw 330 M oprema ITNO',
                'description'=>'samo kesh   nikogas ne udirano info viber +44095148515145',
                'phone'=>'+44095148515145',
                'year'=>'2008',
                'city'=>'Veles',
                'price'=>'7100',
                'power'=>'126',
                'transmission'=>'Automatic',
                'fuel'=>'Diesel',
                'km'=>'210000',
                'type'=>'Sedan',
                'image'=>'["134f2e11-2647-49a6-bc60-25eb17f1d56d.jpg","c51f6056-ab23-4c62-8a3e-0da40b274faa.jpg","d5816894-1429-42ea-b166-81516dddc200.jpg"]',
                'approved'=>'1',
                'sponsored'=> '0',
                'user_id'=>'2'
            ),

            array(
                'id'=> 4,
                'make'=>'Bmw',
                'model'=>'M5',
                'title'=>'Bmw M5 !SAMO ZA MERAKLII!',
                'description'=>'top. dojdi. probaj. plati',
                'phone'=>'+76222999',
                'year'=>'2002',
                'city'=>'Kavadarci',
                'price'=>'11000',
                'power'=>'290',
                'transmission'=>'Manual',
                'fuel'=>'Petrol',
                'km'=>'90000',
                'type'=>'Sedan',
                'image'=>'["BMW-SERIE-5-09.jpg","BMW-SERIE-5-00.jpg","BMW-SERIE-5-04.jpg","BMW-SERIE-5-05.jpg","BMW-SERIE-5-07.jpg","BMW-SERIE-5-14.jpg"]',
                'approved'=>'1',
                'sponsored'=> '0',
                'user_id'=>'2'
            ),

            array(
                'id'=> 5,
                'make'=>'Bmw',
                'model'=>'745',
                'title'=>'Bmw 745',
                'description'=>'so celosna istorija, uvoz pred 6 godini od CH',
                'phone'=>'+76123456',
                'year'=>'2008',
                'city'=>'Gevgelija',
                'price'=>'2800',
                'power'=>'160',
                'transmission'=>'Automatic',
                'fuel'=>'Petrol',
                'km'=>'390000',
                'type'=>'Sedan',
                'image'=>'["7bd82225-069a-4265-8a47-d3d35ae35193.jpg","2e61986f-254a-47f1-8b9c-9510c7394d5b.jpg","61f63ce6-01d6-4b4c-9c2c-36dc6b3c35db.jpg","49e371bd-b1a5-4b67-b1ec-2b77e26bd2fa.jpg"]',
                'approved'=>'1',
                'sponsored'=> '1',
                'user_id'=>'2'
            ),

            array(
                'id'=> 6,
                'make'=>'Citroen',
                'model'=>'C4',
                'title'=>'Citroen C4 1.4 plin ZARIBANA',
                'description'=>'so celosna istorija, zariban motor',
                'phone'=>'+761121223456',
                'year'=>'2017',
                'city'=>'Skopje',
                'price'=>'1000',
                'power'=>'66',
                'transmission'=>'Manual',
                'fuel'=>'Petrol',
                'km'=>'160000',
                'type'=>'Coupe',
                'image'=>'["5793967f-a553-4248-8e55-43d7166f4785.jpg","a69a5a36-fd0c-4c41-a57b-9d16fc753058.jpg","3dbf4e06-f4e0-4f44-aea6-6214c4d6a29e.jpg","ed23326e-e179-4c6c-a3e3-715c97d8e35e.jpg","4238c3f3-2351-4d86-9470-527a6b871818.jpg"]',
                'approved'=>'1',
                'sponsored'=> '0',
                'user_id'=>'2'
            ),

            array(
                'id'=> 7,
                'make'=>'Citroen',
                'model'=>'Saxo',
                'title'=>'Citroen saxo, 5litri',
                'description'=>'trosi ko upaljac, ekonomicno fkraj odlicna sostoja pogodno za pocetnik',
                'phone'=>'+38977555986',
                'year'=>'1995',
                'city'=>'Makedonska Kamenica',
                'price'=>'800',
                'power'=>'40',
                'transmission'=>'Manual',
                'fuel'=>'Hybrid',
                'km'=>'160000',
                'type'=>'Hatchback',
                'image'=>'["7d06a5c9-f0cd-4b8c-ad7a-1b8c33473e46.jpg","7b903013-85e8-4a2d-aa83-4ba7db8150b0.jpg","f0e8c4cd-7fbd-48b6-8afe-d20832058890.jpg","727ebe8d-6b11-40e6-9323-49d516152038.jpg"]',
                'approved'=>'0',
                'sponsored'=> '1',
                'user_id'=>'2'
            ),
            array(
                'id'=> 8,
                'make'=>'Citroen',
                'model'=>'C6',
                'title'=>'Citroen C4 1.4 plin ZARIBANA',
                'description'=>'so celosna istorija, zariban motor',
                'phone'=>'+761121223456',
                'year'=>'2017',
                'city'=>'Skopje',
                'price'=>'1000',
                'power'=>'66',
                'transmission'=>'Manual',
                'fuel'=>'Petrol',
                'km'=>'160000',
                'type'=>'Coupe',
                'image'=>'["a69a5a36-fd0c-4c41-a57b-9d16fc753058.jpg","3dbf4e06-f4e0-4f44-aea6-6214c4d6a29e.jpg","ed23326e-e179-4c6c-a3e3-715c97d8e35e.jpg","4238c3f3-2351-4d86-9470-527a6b871818.jpg"]',
                'approved'=>'1',
                'sponsored'=> '0',
                'user_id'=>'2'
            ),
            array(
                'id'=> 9,
                'make'=>'Citroen',
                'model'=>'cc',
                'title'=>'Citroen C4 1.4 plin ZARIBANA',
                'description'=>'so celosna istorija, zariban motor',
                'phone'=>'+761121223456',
                'year'=>'2017',
                'city'=>'Skopje',
                'price'=>'1000',
                'power'=>'66',
                'transmission'=>'Manual',
                'fuel'=>'Hybrid',
                'km'=>'210000',
                'type'=>'Coupe',
                'image'=>'["7b903013-85e8-4a2d-aa83-4ba7db8150b0.jpg","f0e8c4cd-7fbd-48b6-8afe-d20832058890.jpg","ed23326e-e179-4c6c-a3e3-715c97d8e35e.jpg","4238c3f3-2351-4d86-9470-527a6b871818.jpg"]',
                'approved'=>'1',
                'sponsored'=> '0',
                'user_id'=>'2'
            ),

        );
            DB::table('content')->insert($items);
    }
}

