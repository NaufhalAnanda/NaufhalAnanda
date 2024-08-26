<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';

    protected $primaryKey='id';
    public $incrementing =false;
    protected $fillable =[
        'nama_siswa',
        'gender',
        'nis',
        'class_id'
    ];


    public function kelas()
    {
        return $this->belongsTo(ClassRoom::class, 'class_id', 'id');
    }
}
