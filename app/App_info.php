<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Notifications\AdminMessage;
use Illuminate\Notifications\Notification;


class App_info extends Model
{
    // pachedu_ka_that_sauce

    public function App_info($app_info)
    {
    	$this->notify(new AdminMessage($app_info));
    }
}
