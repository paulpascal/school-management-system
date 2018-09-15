<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Hrshadhin\Userstamps\UserstampsTrait;

class Registration extends Model
{
    use SoftDeletes;
    use UserstampsTrait;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'regi_no',
        'student_id',
        'class_id',
        'section_id',
        'academic_year_id',
        'roll_no',
        'group',
        'shift',
        'card_no',
        'board_regi_no',
        'fourth_subject',
        'status',
    ];

    public function student()
    {
        return $this->belongsTo('App\Student', 'student_id');
    }

    public function class()
    {
        return $this->belongsTo('App\IClass', 'class_id');
    }

    public function section()
    {
        return $this->belongsTo('App\Section', 'section_id');
    }

    public function acYear()
    {
        return $this->belongsTo('App\AcademicYear', 'academic_year_id');
    }
}
