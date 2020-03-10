<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images_uploads')->delete();

        $pictures=array(
            array(
                'id'=> 1,
                'image_name'=>'1.jpg',
                'content_id'=>'1'               //creating images for content
 
            ),

            array(
                'id'=> 2,
                'image_name'=>'2.jpg',
                'content_id'=>'1'               //creating images for content
 
            ),

            array(
                'id'=> 3,
                'image_name'=>'3.jpg',
                'content_id'=>'2'               //creating images for content
 
            ),

            array(
                'id'=> 4,
                'image_name'=>'4.jpg',
                'content_id'=>'2'               //creating images for content
 
            ),

            array(
                'id'=> 5,
                'image_name'=>'5.jpg',
                'content_id'=>'2'               //creating images for content
 
            ),

            array(
                'id'=> 6,
                'image_name'=>'6.jpg',
                'content_id'=>'2'               //creating images for content
 
            ),

            array(
                'id'=> 7,
                'image_name'=>'7.jpg',
                'content_id'=>'3'               //creating images for content
 
            ),

            array(
                'id'=> 8,
                'image_name'=>'8.jpg',
                'content_id'=>'3'               //creating images for content
 
            ),

            array(
                'id'=> 9,
                'image_name'=>'9.jpg',
                'content_id'=>'3'               //creating images for content
 
            ),

            array(
                'id'=> 10,
                'image_name'=>'10.jpg',
                'content_id'=>'4'               //creating images for content
 
            ),


            array(
                'id'=> 11,
                'image_name'=>'11.jpg',
                'content_id'=>'4'               //creating images for content
 
            ),


            array(
                'id'=> 12,
                'image_name'=>'12.jpg',
                'content_id'=>'4'               //creating images for content
 
            ),
            array(
                'id'=> 13,
                'image_name'=>'13.jpg',
                'content_id'=>'4'               //creating images for content
 
            ),
            array(
                'id'=> 14,
                'image_name'=>'14.jpg',
                'content_id'=>'4'               //creating images for content
 
            ),

            array(
                'id'=> 15,
                'image_name'=>'15.jpg',
                'content_id'=>'4'               //creating images for content
 
            ),

            array(
                'id'=> 16,
                'image_name'=>'16.jpg',
                'content_id'=>'5'               //creating images for content
 
            ),

            array(
                'id'=> 17,
                'image_name'=>'17.jpg',
                'content_id'=>'5'               //creating images for content
 
            ),

            array(
                'id'=> 18,
                'image_name'=>'18.jpg',
                'content_id'=>'5'               //creating images for content
 
            ),


            array(
                'id'=> 19,
                'image_name'=>'19.jpg',
                'content_id'=>'5'               //creating images for content
 
            ),

            array(
                'id'=> 20,
                'image_name'=>'20.jpg',
                'content_id'=>'6'               //creating images for content
 
            ),

            array(
                'id'=> 21,
                'image_name'=>'21.jpg',
                'content_id'=>'6'               //creating images for content
 
            ),

            array(
                'id'=> 22,
                'image_name'=>'22.jpg',
                'content_id'=>'6'               //creating images for content
 
            ),

            array(
                'id'=> 23,
                'image_name'=>'23.jpg',
                'content_id'=>'6'               //creating images for content
 
            ),

            array(
                'id'=> 24,
                'image_name'=>'24.jfif',
                'content_id'=>'7'               //creating images for content
 
            ),
            array(
                'id'=> 25,
                'image_name'=>'25.jfif',
                'content_id'=>'7'               //creating images for content
 
            ),

            array(
                'id'=> 26,
                'image_name'=>'26.jpg',
                'content_id'=>'7'               //creating images for content
 
            ),

            array(
                'id'=> 27,
                'image_name'=>'27.jpg',
                'content_id'=>'7'               //creating images for content
 
            )
    

            );
            DB::table('images_uploads')->insert($pictures);
        
    }
}
