<?php

namespace App\Notifications;

use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class ResetPassword extends Notification
{
    /**
     * The password reset token.
     *
     * @var string
     */
    public $token;

    /**
     * Create a notification instance.
     *
     * @param  string  $token
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
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
        $url = url('password/reset', $this->token);

        return (new MailMessage)
            ->subject('Resetar senha - ' . config('app.name'))
            ->greeting('Olá!')
            ->line('Você recebeu esse email porque nós recebemos uma solicitação de recuperação de senha para sua conta.')
            ->action('Resetar senha', $url)
            ->line('Se você não solicitou a recuperação de senha, desconsidere este email.');
    }
}
