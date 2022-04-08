<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function createQuestion()  {
        $question = new Question();
        $question->question = "test";
        $question->save();

        return view("dashboard");
    }

    public function welcome()  {
        return view('dashboard');
    }
}
