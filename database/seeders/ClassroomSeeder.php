<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\ClassRoom;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;



//
Schema::disableForeignKeyConstraints();
//
ClassRoom::truncate();
//tes
Schema::enableForeignKeyConstraints();

class ClassRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    public function run(): void
    {
    //   $this->call(ClassRoomSeeder::class);
    //     //
    //    Schema::disableForeignKeyConstraints();
    //     //
    //     ClassRoom::truncate();
    //     //
    //     Schema::enableForeignKeyConstraints();

       $data = [
         [
            'name' => '12 rpl b',
         ],

         [
            'name' => '12 rpl a',
         ],
         [
            'name' => '12 rpl c',
         ],



       ];

    //    multiped insert
       foreach($data as $value){
        ClassRoom::insert([
           'name' => $value ['name'],
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
        ]);

       }






      //   ClassRoom::insert([
      //       'name' => '12 TKJ c',
      //       'created_at' => Carbon::now(),
      //       'updated_at' => Carbon::now(),
      //   ]);
        //
        // DB::table('class')->insert([
        //     'name' => '12 TKJ D',
        //     'created_at' => Carbon::now(),
        //     'updated_at' => Carbon::now(),
        // ]);
    }
}
