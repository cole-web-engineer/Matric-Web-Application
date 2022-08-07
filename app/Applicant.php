<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Applicant extends Model
{
    // data_redu

    use Notifiable;
    protected $fillable = [

    	// student_details

    	'fullname',
    	'email',
    	'gender',
    	'mobile',
    	'address',
    	'branch',
    	'matric_year',
    	'matric_interest',

    	// subject_groups

    	'groupOne',
    	'groupTwo',
    	'groupThree',

    	// parent_details

    	'parent_name',
    	'relation',
    	'occupation',
    	'employer_name',
    	'parent_mobile',
    	'parent_address',

    	// Uploads_Attached

    	'scannedidpassport',
    	'childbirth_cert',
    ];

    protected $hidden = [

    	'payment',
    	'TsAndCs',
    ];
}
