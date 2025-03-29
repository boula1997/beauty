<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class OtpNotification extends Notification
{
    use Queueable;

    protected $otp;

    public function __construct($otp)
    {
        $this->otp = $otp;
    }

    public function via($notifiable)
    {
        return ['mail']; 
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject(__('general.email_verification_subject'))
                    ->greeting(__('general.hello'))
                    ->line(__('general.your_verification_code_is'))
                    ->line('**' . $this->otp . '**')
                    ->line(__('general.if_you_did_not_request_code'))
                    ->line(__('general.contact_support_if_issue'))
                    ->salutation(__('general.thank_you'));
    }
}