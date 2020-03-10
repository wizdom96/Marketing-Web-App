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
                'approved'=>'1',
                'sponsored'=> '1',
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
                'approved'=>'1',
                'sponsored'=> '3',
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
                'approved'=>'1',
                'sponsored'=> '1',
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
                'approved'=>'1',
                'sponsored'=> '1',
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
                'approved'=>'0',
                'sponsored'=> '1',
                'user_id'=>'2'
            )

        );
            DB::table('content')->insert($items);
    }
}