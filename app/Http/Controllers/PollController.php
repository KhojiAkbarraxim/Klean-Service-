<?php

namespace App\Http\Controllers;

use App\Models\Ip;
use App\Models\Poll;
use Illuminate\Http\Request;

class PollController extends Controller
{
    public function allpoll()
    {
        $poll = Poll::get(); 
        // dd($poll);
        return response()->json([
            $poll = 'poll',
        ]);
    }
}
