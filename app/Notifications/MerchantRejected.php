<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class MerchantRejected extends Notification
{
    use Queueable;

    public function __construct()
    {
        //
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject(__('general.merchant_rejected_subject'))
            ->greeting(__('general.merchant_rejected_greeting', ['name' => $notifiable->merchantName]))
            ->line(__('general.merchant_rejected_body'))
            ->line(__('general.merchant_rejected_contact'))
            ->line(__('general.merchant_rejected_phone', ['phone' => '+966 50 435 0500']))
            ->line(__('general.merchant_rejected_email', ['email' => 'info@aloodot.com']))
            ->line(__('general.merchant_rejected_thanks'))
            ->salutation(__('general.merchant_rejected_signature'));
    }
}