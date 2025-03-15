<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'unid', 'n1', 'n2', 'n3', 'n4', 'school',
        'code', 'depetname', 'college', 'addtype',
        'wlaaee', 'addyear', 'degree', 'Reg', 'university_id'
    ];

    // علاقة الطالب بالجامعة
    public function university()
    {
        return $this->belongsTo(University::class);
    }
}
