<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Student;
use Illuminate\Support\Arr;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

Schema::disableForeignKeyConstraints();
//
Student::truncate();
//
Schema::enableForeignKeyConstraints();


class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


       $data = [
         [
            'name' => 'Naufhal',

         ],

         [
            'name' => 'Bilaa',

         ],




       ];

    //    multiped insert
       foreach($data as $value){
        Student::insert([
           'nama_siswa' => $value ['name'],
           'gender' => Arr::random(['L','P']),
           'nis' => mt_rand(0000001, 9999999),
           'class_id' => Arr::random ([1,2,3]),
           'created_at' => Carbon::now(),
           'updated_at' => Carbon::now(),
        ]);

       }

    }
}
