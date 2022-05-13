<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Pusher\Pusher;

class NotificationController extends Controller
{
    public function notify()
    {
        $options = array(
                        'cluster' => env('ap2'),
                        'encrypted' => true
                        );
        $pusher = new Pusher(
                            env('e1bf8aa512f5bb5f37bd'),
                            env('0ff999a3f840c10c38c5'),
                            env('1407769'), 
                            $options
                        );

        $data['message'] = 'hello investmentnovel';
        $pusher->trigger('notify-channel', 'App\\Events\\Notify', $data);

    }
}