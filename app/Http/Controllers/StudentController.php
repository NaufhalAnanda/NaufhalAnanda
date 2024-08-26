<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //Elquent ORM (Rekomendasi)
        // Query Builder(Masih Bisa Digunakan)
        // RAW (Tidak Disarankan)
        //  $student = Student::all();

         $data['siswa'] = Student::with('kelas')->get();
         return view('student', $data);


        // dd($student);
        // die();

        // return view('student',[
        //     'siswa' =>$student,
        // ]);

        //eloquent
        //$data[student]=Student::all();

        //query builder
        // $data['siswa'] = DB::table('students')->get();
        // dd($data);
        // return view('student', $data);

      //  menambahkan data
        //query builder
        //  DB::table('students')->insert([
        //      'nama_siswa' =>'Naufhal Ananda',
        //         'gender' =>'L',
        //      'nis' =>'1234',
        //      'class_id' => 3
        //  ]);

        //eloquent

        // Student::create([
        //     'nama_siswa' =>'Eloquent',
        //     'gender' =>'L',
        //     'nis' =>'1234',
        //     'class_id' => 2
        // ]);

        //UPDATE DATA
        //query builder
        //  DB::table('students')->where('id',2)->update([
        //      'nama_siswa' => 'Naufhal Ananda',
        //      'class_id' => 2
        //  ]);

        //eloquent update
        // $query = student::find(259104)->update([
        //     'nama_siswa' => 'Nabila',
        // ]);
        // dd($query);

        //query hapus
        //builder
        // $query = DB::table('students')->where('id',3)
        // ->delete();

        //Eloquent
        // $query = student::find(4)->delete();
        // dd($query);
    }


    // public function latihan(){
    //     $nilai = [9,8,7,6,4,8,9,1,10,3,9,7,1,5,3,9];
    //     $test = collect($nilai)->contains(3);


    //     dd($test);

    //     //php biasa
    //     //1. Hitung jumlah nilai
    //     //2. Hitung berapa banyak nilai
    //     //3. hitung nilai rata rata = total nilai / count nilai

    //     $banyakNilai = count($nilai);
    //     $totalNilai = array_sum($nilai);
    //     $rataRata = $totalNilai / $banyakNilai;

    //     $nialiRataRata = collect($nilai)->avg();

    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
