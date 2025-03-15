<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code', 'location'];

    // علاقة الجامعة بالطلاب
    public function students()
    {
        return $this->hasMany(Student::class);
    }
    // علاقة الجامعة بالرخص
    public function license()
{
    return $this->hasOne(License::class);
}

}
