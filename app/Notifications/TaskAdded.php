<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class TaskAdded extends Notification
{
//    use Queueable;
    private $task;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($task)
    {
        $this->task = $task;

    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
//        return ['database', 'mail'];
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
//        $url = url('http://smc.pgapco.ir/PM/tdl');
//
//        return (new MailMessage)
//            ->subject('تسک جدید در سامانه رامپکو')
//            ->greeting('باسلام')
//            ->line('یک تسک جدید در سامانه يكپارچه تصميم ساز مديريت پروژه رامپکو اضافه شد.')
//            ->line("عنوان: ")
//            ->line($this->task['name'])
//            ->line("توضیحات: ")
//            ->line($this->task['description'])
//            ->action('مشاهده', $url)
//            ->line('سامانه يكپارچه تصميم ساز مديريت پروژه رامپکو');
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
            'title' => $this->task['name'],
            'description' => $this->task['description'],
            'url' => '/PM/tdl',
        ];
    }
}
