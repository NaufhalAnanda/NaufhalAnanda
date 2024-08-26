<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassroomController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/student',[StudentController::class, 'index'] );

Route::get('/class',[ClassroomController::class, 'index'] );

// memanggil function
Route::get('/latihan',[StudentController::class, 'latihan'] );

Route::get('/tambah',function (){
    return 2+2;
});

Route::get('/kurang',function (){
    return 5-2;
});

Route::get('/kali',function (){
    return 5*2;
});

Route::get('/bagi',function (){
    return 4/2;
});

Route::get('/contact',function (){
    return view ('contact',[
        'nama_siswa'=> 'Naufhal Ananda',
        'Kelas'=> 'XII RPL C',
        'Alamat'=> 'Bandung',
        'No_Telp'=> '0865353352',
    ]);
});


// Route::get('product/{id}',function ($id){
    //     return 'ini produk dengan ID :' .$id;
    // });


    // Route::get('contact',function ($id){
    //     return view ('product.detail',[
    //         'id'=> $id

    //     ]);
    // });


    Route::get('product/{id}', function ($id) {
        $produk =[
            [
                'id' =>1,
                'nama_produk' =>'Iphone 15 PRO MAX',
                'harga' =>1500000,
                'stok' =>20
            ],

            [
                'id' =>2,
                'nama_produk' =>'Samsung 15 PRO',
                'harga' =>1000000,
                'stok' =>20
            ],

            [
                'id' =>3,
                'nama_produk' =>'ASUS ASPIRE 3',
                'harga' =>2000000,
                'stok' =>20
            ],

         ];

         $cari_produk = collect($produk)->where('id',$id)->first();
         return view('product.detail', [
            'data' => $cari_produk
         ]);
        });


        Route::get('siswa/{nis}', function ($nis) {
            $siswa =[
                [
                    'nis' =>123,
                    'nama_siswa' =>'Naufhal Ananda',
                    'jurusan' =>'RPL',
                    'tingkat' =>'12',

                ],

                [
                    'nis' =>124,
                    'nama_siswa' =>'Nabila',
                    'jurusan' =>'RPL',
                    'tingkat' =>'12',

                ],

                [
                    'nis' =>125,
                    'nama_siswa' =>'Zahro',
                    'jurusan' =>'RPL',
                    'tingkat' =>'12',

                ],

                [
                    'nis' =>126,
                    'nama_siswa' =>'Kevin',
                    'jurusan' =>'RPL',
                    'tingkat' =>'12',

                ],

                [
                    'nis' =>127,
                    'nama_siswa' =>'Dika',
                    'jurusan' =>'RPL',
                    'tingkat' =>'12',

                ],





             ];

             $cari_nis = collect($siswa)->where('nis',$nis)->first();
            //  dd($siswa);
            //  die;
             return view('siswa.siswa', [
                'data' => $cari_nis
             ]);
            });



            Route::get('/home',function (){
                $siswa =[
                    [
                        'nis' =>123,
                        'nama_siswa' =>'Naufhal Ananda',
                        'jurusan' =>'RPL',
                        'tingkat' =>'12',

                    ],

                    [
                        'nis' =>124,
                        'nama_siswa' =>'Nabila',
                        'jurusan' =>'RPL',
                        'tingkat' =>'12',

                    ],

                    [
                        'nis' =>125,
                        'nama_siswa' =>'Zahro',
                        'jurusan' =>'RPL',
                        'tingkat' =>'12',

                    ],

                    [
                        'nis' =>126,
                        'nama_siswa' =>'Kevin',
                        'jurusan' =>'RPL',
                        'tingkat' =>'12',

                    ],

                    [
                        'nis' =>127,
                        'nama_siswa' =>'Dika',
                        'jurusan' =>'RPL',
                        'tingkat' =>'12',

                    ],


                 ];

                return view ('home',[
                    'Nama' =>'Naufhal Ananda',
                    'Role' =>'Admin',
                    'data' =>$siswa


                ]);
            });




