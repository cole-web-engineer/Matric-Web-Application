<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Notifications\ApplicantMessage;
use Illuminate\Notifications\Notification;

class App_infoo extends Model
{
    // pachedu_neka_sauce_kedu

    public function App_infoo($app_infoo)
    {
    	$this-notify(new ApplicantMessage($app_infoo));
    }
}
