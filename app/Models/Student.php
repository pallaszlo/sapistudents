<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'program_id',
        'name',
        'email',
        'status',
    ];

    public function program()
    {
        return $this->belongsTo('App\Models\Program');
    }

    public function courses()
    {
        return $this->belongsToMany('App\Models\Course');
    }

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
    ];
}
