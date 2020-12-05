<?php

namespace App\Http\Controllers;

use App\Http\Requests\QuizRequest;
use App\Models\Answear;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;


class QuestionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create()
    {
        if(Gate::allows('admin'))
        {
            return view('create');
        }
    }

    public function store(QuizRequest $request)
    {
        if(Gate::allows('admin'))
        {
        
            $question = new Question();
            $question->title = $request->title;
            $question->save();
            $question_id = $question->id;

            foreach ($request->answears as $key => $value) 
            {
                $answear = new Answear();
                $answear->question_id = $question_id;
                $answear->answear = $value;
                if($key == $request->iscorrect)
                {
                    $answear->iscorrect = 1;
                }
                $answear->save();
            }
        }
    
        return redirect()->back();

    }
}
