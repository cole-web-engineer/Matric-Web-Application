<?php

namespace App\Notifications;

use App\Applicant;
use App\Http\Controllers\ApplicantController;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use http\Url;
use App\App_info;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\HtmlString;


class AdminMessage extends Notification
{
    use Queueable;
    public $app_info;

    /**
     * Create a new notification_instance.
     *
     * @return void
     */
    public function __construct($app_info)
    {
        // muriwo_we_data
        $this->app_info = $app_info;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification. /(*.*.*)/
     *
     * @param  mixed_$notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     *
     **/

    public function toMail($notifiable)
    {

        $name = $this->app_info['fullname'];
        $email = $this->app_info['email'];
        $mobile = $this->app_info['mobile'];
        $address = $this->app_info['address'];
        $branch = $this->app_info['branch'];
        $matric_year = $this->app_info['matric_year'];
        $matric_interest = $this->app_info['matric_interest'];
        //subjects
        $groupOne = $this->app_info['groupOne'];
        $groupTwo = $this->app_info['groupTwo'];
        $groupThree = $this->app_info['groupThree'];
        // parent_details
        $parent_name = $this->app_info['parent_name'];
        $relation = $this->app_info['relation'];
        $occupation = $this->app_info['occupation'];
        $employer_name = $this->app_info['employer_name'];
        $parent_mobile = $this->app_info['parent_mobile'];
        $parent_address = $this->app_info['parent_address'];

         //Attachments
        $result = \File::exists('storage/uploads/ids/'.$this->app_info['scannedidpassport']);
        if ($result > 0)
        {
            $idpassport = url("storage/uploads/ids/".$this->app_info['scannedidpassport']);
        }
        else
        {
            $idpassport = url("storage/uploads/no_ScannedIDPassport_Uploaded.png");
        }
        // 2nd Check !!!
        $result1 = \File::exists('storage/uploads/childbirth_cert/'.$this->app_info['childbirth_cert']);
        if ($result1 > 0)
        {
            $resdience = url("storage/uploads/childbirth_cert/".$this->app_info['childbirth_cert']);
        }
        else
        {
            $resdience = url("storage/uploads/no_LatestResult_Uploaded.png");
        }
        return (new MailMessage)

                    ->from('noreply@taalct.co.za', 'Matric Upgrade Applicant')
                    ->line('Hi, New Online Application Recieved.')
                    ->subject('Matric Upgrade Applicant')
                    ->action('Visit Here To Access Admin Panel', url('/'))
                    ->line('Thank you for using our application!')
                    ->view('vendor.notifications.AdminMessage',
                            compact('name', 'email', 'mobile', 'address', 'branch', 'matric_year',
                                    'matric_interest', 'groupOne', 'groupTwo', 'groupThree', 'parent_name',
                                    'relation', 'relation', 'occupation', 'employer_name', 'parent_mobile', 'parent_address'
                    ))
                    ->attach($idpassport, [
                        // swift mailer cant readfile without mime type defined !!!
                        'mime' => 'application/pdf', 'image/jpeg', 'image/png', 'image/jpg', 'image/bmp'
                    ])
                    ->attach($resdience, [
                        // swift mailer cant read file without mime type
                        'mime' => 'application/pdf', 'image/jpeg', 'image/png', 'image/jpg', 'image/bmp'
                    ]);
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     *
     **/
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
