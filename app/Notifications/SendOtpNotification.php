<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class SendOtpNotification extends Notification
{
    use Queueable;

    public $otp;

    public function __construct($otp)
    {
        $this->otp = $otp;
    }

    public function via($notifiable)
    {
        return ['mail']; // الإشعار سيتم إرساله عبر البريد الإلكتروني
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Your OTP Code')
                    ->greeting('Hello!')
                    ->line('Your OTP code is: **' . $this->otp . '**')
                    ->line('Please enter this code to verify your email.')
                    ->line('Thank you for using our application!');
    }
}