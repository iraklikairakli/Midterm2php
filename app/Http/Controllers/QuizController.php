<?php

namespace App\Http\Controllers;

use App\Http\Requests\Quiz\QuizStoreRequest;
use App\Models\Answear;
use App\Models\Question;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;



class QuizController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function quizz()
    {
        $questions = Question::with('answers')->get();
        return view('quiz', compact('questions'));
    }

    public function results(Request $request)
    {
        $kitxvebisRaodenoba = Question::count();
        $sworiPasuxi = 0;

        foreach ($request->except('_token') as $key => $value) {
            $answears = Answear::where('question_id', $key)->get();
            foreach($answears as $answear)
            {
                if($answear->answear == $value)
                {
                    if($answear->iscorrect == 1)
                    {
                        $sworiPasuxi = $sworiPasuxi + 1;
                    }
                }
            }
            
        }
        return view('results', compact('kitxvebisRaodenoba', 'sworiPasuxi'));
    }
}
