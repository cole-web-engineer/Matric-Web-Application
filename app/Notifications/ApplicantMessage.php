<?php

namespace App\Notifications;

use App\Applicant;
use App\Http\Controllers\ApplicantController;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use http\Url;
use App\App_infoo;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\HtmlString;


class ApplicantMessage extends Notification
{
    use Queueable;
    public $app_infoo;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($app_infoo)
    {
        // data_muriwoo

        $this->app_infoo = $app_infoo;
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
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {

        // pass_data_to_#mail

        $name = $this->app_infoo['fullname'];
        $email = $this->app_infoo['email'];
        $mobile = $this->app_infoo['mobile'];
        $address = $this->app_infoo['address'];
        $branch = $this->app_infoo['branch'];
        $matric_year = $this->app_infoo['matric_year'];
        $matric_interest = $this->app_infoo['matric_interest'];
        
        return (new MailMessage)
                    ->from('noreply@taalct.co.za', 'Taal-NET Matric Rewrite Center')
                    ->line('We Have recieved Your Application.')
                    ->subject('Matric Upgrade Applicant')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!')
                     ->view('vendor.notifications.ApplicantMessage',
                        compact('name', 'email', 'branch', 'matric_year', 'matric_interest')
                    );
    }
    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     *
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
