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
        $name = $this->letter->name;
        $phone = $this->letter->phone;
        $message = $this->letter->message;
        $quantityValue = $this->letter->quantityValue;
        $priceValue= $this->letter->quantityValue;
        if(empty($this->letter->title)){
            $title = 'Сообщение с сайта Аквазонд';
        }
        else{
            $title = $this->letter->title;
        }
        return (new MailMessage)
                    ->subject($title)
                    ->greeting($title)
                    ->line('Имя: '.$name)
                    ->line('Телефон заказчика: '.$phone)
                    ->line('Аренда на '.$quantityValue)
                    ->line('Сумма к оплате'.$priceValue)
                    ->line('Сообщение: '.$message);
                    // ->action('Notification Action', url('/'))
                    // ->line('Thank you for using our application!');
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
