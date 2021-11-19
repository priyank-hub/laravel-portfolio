<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\FeedbackAdd;

class FeedbackAddController extends Controller
{
    public function sendTestFeedback() {

        $user = User::first();
        // $feedbackData = [
        //     'body' => 'You recieved a new test notification',
        //     'feedbackText' => 'You can view the message',
        //     'url' => url('/'),
        // ];

        $feedbackData = 'You have a new feedback in the portfolio';

        $user->notify(new FeedbackAdd());
    }
}
