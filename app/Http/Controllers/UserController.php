<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Quiz;
use App\Models\Score;
use App\Models\Developer;
use App\Models\Question;

class UserController extends Controller
{
    //

    public function home()
    {$scores=Score::get();
        $quizzes=Quiz::get();
        return view('User.home')->with('quizzes',$quizzes)->with('scores',$scores);
    }
    public function history()
    {$scores=Score::where('email',Session::get('Developer')->email)->get();
        return view('User.history')->with('scores',$scores);
    }
    public function ranking()
    {$developers= Developer::orderBy('score','desc')->get();
        return view('User.ranking')->with('developers',$developers);
    }
    public function exam()
    {
        return view('User.exam');
    }
    public function respondquestion($topic)
{
  

    if(!Session::get('num')&&!Session::get('quiz'))
    {
       Session::put('num',1);
        $quiz=Quiz::where('topic',$topic)->first();
       Session::put('quiz', $quiz);
   

    }
    return redirect('/user/assessements');
}
public function assessements()
{
    $question = Question::where('topic', Session::get('quiz')->topic)->where('numquestion',Session::get('num'))->first();
    Session::put('question',$question);
    return view('User.assessements')->with('question',$question);
}




public function saveanswer(Request $request)
{
    $score = Score::where('email', Session::get('Developer')->email)->where('topic',Session::get('quiz')->topic)->first();

    $developer=Developer::where('email',Session::get('Developer')->email)->first();
    if($request->input('ans'))
    {
        if($request->input('ans')==Session::get('question')->correct)
        {
            if(!Session::get('score'))
            {
                Session::put('score',Session::get('quiz')->mark);
            }else
            {
                $sc=Session::get('score') + Session::get('quiz')->mark;
                Session::forget('score');
                Session::put('score',$sc);
            }
        }
        if(!Session::get('solved'))
        {
            Session::put('solved',1);
        }else
        { $solved=Session::get('solved') + 1;
            Session::forget('solved');
            Session::put('solved',$solved);

        }
    if(!$score && Session::get('num')==Session::get('quiz')->totalquestions)
    {
       $score=new Score();
       $score->topic=Session::get('quiz')->topic;
       $score->email=Session::get('Developer')->email;
       if(Session::get('score'))
       {
        $score->score=Session::get('score');
        $developer->score= $developer->score + Session::get('score');
        $developer->update();
       }else
       {
        $score->score= 0;
       }
       $score->mark=Session::get('quiz')->mark;
       $score->numquestion=Session::get('quiz')->totalquestions;
       if(Session::get('solved'))
       {
        $score->solved=Session::get('solved');
       }else
       {
        $score->solved=0;
       }
       $score->save();
    }elseif($score && Session::get('num')==Session::get('quiz')->totalquestions)
    {
        if(Session::get('score'))
        { $developer->score=( $developer->score - $score->score) + Session::get('score');
          $developer->update();
          $score->score=Session::get('score');
       
        }else
        {
         $score->score=0;
        } 
        
        if(Session::get('solved'))
        {
         $score->solved=Session::get('solved');
        }else
        {
         $score->solved=0;
        }
        $score->update();

    }
    }
return redirect ('/user/respond1');
}



public function respondquestion1()
{
    $num= Session::get('num')+1;
   Session::forget('num');
   Session::put('num',$num);
if($num <=Session::get('quiz')->totalquestions)
{
    return redirect('/user/assessements');
}else{
    Session::forget('num');
    Session::forget('score');
   Session::forget('solved');
    return redirect('/user/results');
}

}

public function result()

{
    if(Session::get('quiz')) 
    {$score=Score::where('topic',Session::get('quiz')->topic)->where('email',Session::get('Developer')->email)->first();

        Session::forget('quiz');
        return view('/user/results')->with('score',$score);

    } else
    {
        return redirect('/user/home');
    }
}

public function feedback()
{
    return view('feedback.feedback');
}

public function feedbacksuccess()
{
    return view('feedback.feedbacksuccess');
}
}
