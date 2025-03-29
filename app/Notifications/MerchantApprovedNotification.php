<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class MerchantApprovedNotification extends Notification
{
    use Queueable;

    public function __construct()
    {
        //
    }

    public function via($notifiable)
    {
        return ['mail']; // الإرسال عبر البريد الإلكتروني
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
        ->subject(__('general.merchant_approved_subject'))
        ->greeting(__('general.merchant_approved_greeting', ['name' => $notifiable->merchantName]))
        ->line(__('general.merchant_approved_body'))
        ->line(__('general.merchant_approved_username', ['username' => $notifiable->username]))
        ->line(__('general.merchant_approved_login_instruction'))
        ->action(__('general.merchant_approved_login_button'), url('/merchant/login'))
        ->line(__('general.merchant_approved_thanks'))
        ->salutation(__('general.merchant_approved_signature'));
    }
}