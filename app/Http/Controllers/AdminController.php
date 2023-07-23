<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\Score;
use App\Models\Developer;

class AdminController extends Controller
{
    //


    public function dashboard()
    {$scores=Score::all();
        $quizzes=Quiz::get();
        return view('Admin.dashboard')->with('quizzes',$quizzes)->with('scores',$scores);
    }
    
    public function users()
    {  $developers=Developer::get();
        return view('Admin.users')->with('developers',$developers);
    }


public function ranking()
{
    $developers= Developer::orderBy('score','desc')->get();
    return view('Admin.ranking')->with('developers',$developers);
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
  

    if(!Session::get('num') && (!Session::get('quiz')))
    {
        Session::put('num',1);
        $quiz=Quiz::where('topic',$topic)->first();
       Session::put('quiz', $quiz);
   

    }
    return redirect('/admin/assessements');
}

public function assessements()
{
    $question = Question::where('topic', Session::get('quiz')->topic)->where('numquestion',Session::get('num'))->first();
  Session::put('question',$question);
    return view('admin.assessements')->with('question',$question);
}


public function saveanswer(Request $request)
{
    $score = Score::where('email', Session::get('admin')->email)->where('topic',Session::get('quiz')->topic)->first();
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
       $score->email=Session::get('admin')->email;
       if(Session::get('score'))
       {
        $score->score=Session::get('score');
       }else
       {
        $score->score=0;
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
        {
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
return redirect ('/admin/respond1');
}






public function respondquestion1()
{
    $num= Session::get('num')+1;
    Session::forget('num');
   Session::put('num',$num);
if($num <=Session::get('quiz')->totalquestions)
{
    return redirect('/admin/assessements');
}else{
   Session::forget('num');
    Session::forget('score');
   Session::forget('solved');
    return redirect('/admin/results');
}

}
public function result()
{  $score=Score::where('topic',Session::get('quiz')->topic)->where('email',Session::get('admin')->email)->first();

    Session::forget('quiz');
    return view('/admin/results')->with('score',$score);
}
public function deletedeveloper($email)
{
    $developer=Developer::where('email',$email)->first();
    $scores=Score::where('email',$email)->get();

if($scores){
    foreach($scores as $score)
{
    $score->delete();
}
}

    $developer->delete();
    return back()->with('status','le copmte developpeur a été supprimer avec success!');
}
}