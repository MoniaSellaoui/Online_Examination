<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Score;

class AdminController extends Controller
{
    //


    public function dashboard()
    {$scores=Score::all();
        $quizzes=Quiz::get();
        return view('Admin.dashboard')->with('quizzes',$quizzes)->with('scores',$scores);
    }
    
    public function users()
    {
        return view('Admin.users');
    }


public function ranking()
{
    return view('Admin.ranking');
}


public function feedback()
{
    return view('Admin.feedback');
}
public function viewfeedback()
{
    return view('Admin.viewfeedback');
}
public function quizdetails()
{
    return view('Admin.quizdetails');
}
public function savequiz(Request $request)
{ $quiz=new Quiz();
    $quiz-> topic=$request->input('topic');
    $quiz-> totalquestions=$request->input('totalquestions');
    $quiz-> mark=$request->input('mark');
    $quiz-> timelimit=$request->input('timelimit');
    $quiz-> description=$request->input('description');
    $quiz->num= 0;
    $quiz->save();

    $quiz=Quiz::where('topic',$request->input('topic'))->first();
    session::put('quiz', $quiz);
    return redirect('/admin/questionsdetails');
    

}
public function questionsdetails()
{   $quiz=Quiz::where('topic',  session::get('quiz')->topic)->first();

    if($quiz->num  < $quiz->totalquestions)
    {
        return view('Admin.questionsdetails')->with('quiz',$quiz);
    }else{
        session::forget('quiz');
        return redirect('/admin/dashboard');
    }
   
}
public function savequestion(Request $request)
{
    $question=new Question();
    $correct;
    if($request->input('correct')=="a")
    {
        $correct=$request->input('optiona');
    }
    elseif($request->input('correct')=="b")
    {
        $correct=$request->input('optionb');
    }
    elseif($request->input('correct')=="c")
    {
        $correct=$request->input('optionc');
    }
    else
    {
        $correct=$request->input('optiond');
    }
    $question->topic=session::get('quiz')->topic;
    $question->question=$request->input('question');
    $question-> one=$request->input('optiona');
    $question->two=$request->input('optionb');
    $question->three=$request->input('optionc');
    $question->four=$request->input('optiond');
    $question->correct=$correct;
    $quiz=Quiz::where('topic',  session::get('quiz')->topic)->first();
    $quiz->num =$quiz->num +1;
   
    $quiz->update();
    $question->numquestion=$quiz->num ;
 
    $question->save();
    return redirect('/admin/questionsdetails');
 


}
public function removequiz()
{
    return view('Admin.removequiz');
}

public function respondquestion($topic)
{
  

    if(!session::get('num')&&!session::get('quiz'))
    {
        session::put('num',1);
        $quiz=Quiz::where('topic',$topic)->first();
        session::put('quiz', $quiz);
   

    }
    return redirect('/admin/assessements');
}

public function assessements()
{
    $question = Question::where('topic',  session::get('quiz')->topic)->where('numquestion',session::get('num'))->first();
    session::put('question',$question);
    return view('admin.assessements')->with('question',$question);
}


public function saveanswer(Request $request)
{$score = Score::where('email', session::get('admin')->email)->where('topic',session::get('quiz')->topic)->first();
    if(request->input('ans'))
    {
        if(request->input('ans')==session::get('question')->correct)
        {
            if(!session::get('score'))
            {
                session::put('score',session::get('quiz')->mark);
            }else
            {
                $sc=session::get('score')+session::get('quiz')->mark;
                session::forget('score');
                session::put('score',$sc);
            }
        }
        if(!session::get('solved'))
        {
            session::put('solved',1);
        }else
        { $solved=session::get('solved') + 1;
            session::forget('solved');
            session::put('solved',$solved);

        }
    if(!$score && session::get('num')==session::get('quiz')->totalquestions)
    {
       $score=new Score();
       $score->topic=session::get('quiz')->topic;
       $score->email=session::get('admin')->email;
       if(session::get('score'))
       {
        $score->score=session::get('score');
       }else
       {
        $score->score=0;
       }
       $score->mark=session::get('quiz')->mark;
       $score->numquestion=session::get('quiz')->totalquestion;
       if(session::get('solved'))
       {
        $score->solved=session::get('solved');
       }else
       {
        $score->solved=0;
       }
       $score->save();
    }elseif($score && session::get('num')==session::get('quiz')->totalquestions)
    {
        if(session::get('score'))
        {
         $score->score=session::get('score');
        }else
        {
         $score->score=0;
        } 
        
        if(session::get('solved'))
        {
         $score->solved=session::get('solved');
        }else
        {
         $score->solved=0;
        }
        $score->update();

    }
    }
return redirect ('/admin/respond1');
}
public function respondquestion1()
{
    $num= session::get('num')+1;
    session::forget('num');
    session::put('num',$num);
if($num <= session::get('quiz')->totalquestions)
{
    return redirect('/admin/assessements');
}else{
    session::forget('num');
    session::forget('score');
    session::forget('solved');
    return redirect('/admin/results');
}

}
public function result()
{  $score=Score::where('topic',session::get('quiz')->topic)->where('email',session::get('admin')->email)->first();

     session::forget('quiz');
    return view('/admin/results')->with('score',$score);
}
}