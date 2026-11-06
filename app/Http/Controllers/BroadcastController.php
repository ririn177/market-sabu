
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\MessageSent;

class BroadcastController extends Controller
{
    public function send()
    {
        $message = 'Broadcasting Market Sabu berhasil!';

        broadcast(new MessageSent($message));

        return response()->json([
            'status' => 'success',
            'message' => $message
        ]);
    }
}
