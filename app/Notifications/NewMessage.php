<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewMessage extends Notification
{
    use Queueable;

    public $letter = null;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($test)
    {
        $this->letter = $test;
        //
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
        $letter = $this->letter;
    
        $title = empty($letter->title) ?? 'Сообщение с сайта Аквазонд';
        $name = $letter->name ?? '';
        $phone = $letter->phone ?? '';
        $message = $letter->message ?? '';
        $quantityValue = $letter->quantityValue ?? '';
        $priceValue = $letter->priceValue ?? '';
    
        return (new MailMessage)
            ->subject('Новая заявка')
            ->greeting($title)
            ->when(!empty($name), function ($mail) use ($name) {
                return $mail->line('Имя: ' . $name);
            })
            ->when(!empty($phone), function ($mail) use ($phone) {
                return $mail->line('Телефон заказчика: ' . $phone);
            })
            ->when(!empty($quantityValue), function ($mail) use ($quantityValue) {
                return $mail->line('Аренда на ' . $quantityValue);
            })
            ->when(!empty($priceValue), function ($mail) use ($priceValue) {
                return $mail->line('Сумма к оплате: ' . $priceValue);
            })
            ->when(!empty($message), function ($mail) use ($message) {
                return $mail->line('Сообщение: ' . $message);
            });
    }
    

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
