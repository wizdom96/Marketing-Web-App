<?php

use Illuminate\Database\Seeder;

class MakeModelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->delete();

        $cars=array(
            array(
                'id'=> 1,                                   //creating car make  (make)
                'car'=>'Peugeot'
            ),

            array(
                'id'=> 2,
                'car'=>'Bmw'
            ),

            array(
                'id'=> 3,
                'car'=>'Citroen'
            )

            );
            DB::table('cars')->insert($cars);

//////////////////////////////////////////////////////////////////////////


            DB::table('car_models')->delete();

        $car_models=array(
            array(
                'id'=>1,
                'car_model'=> '206' ,
                'car_id'=> 1                                            //creating car model (model) 
            ),
            array(
                'id'=>2,
                'car_model'=> '508' ,
                'car_id'=> 1                                            //creating car model (model) 
            ),

            array(
                'id'=>3,
                'car_model'=> '330' ,
                'car_id'=> 2                                            //creating car model (model) 
            ),

            array(
                'id'=>4,
                'car_model'=> 'M5' ,
                'car_id'=> 2                                            //creating car model (model) 
            ),

            array(
                'id'=>5,
                'car_model'=> '745' ,
                'car_id'=> 2                                            //creating car model (model) 
            ),

            array(
                'id'=>6,
                'car_model'=> 'C4' ,
                'car_id'=> 3                                            //creating car model (model) 
            ),

            array(
                'id'=>7,
                'car_model'=> 'Saxo' ,
                'car_id'=> 3                                            //creating car model (model) 
            ),

            array(
                'id'=>8,
                'car_model'=> 'C5' ,
                'car_id'=> 3                                            //creating car model (model) 
            )
            
            );
            DB::table('car_models')->insert($car_models);

    }
}
