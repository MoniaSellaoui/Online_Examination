<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Quiz;
use App\Models\Question;

class AdminController extends Controller
{
    //


    public function dashboard()
    {$quizzes=Quiz::get();
        return view('Admin.dashboard')->with('quizzes',$quizzes);
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
    session::put('quiz',$quiz);
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


}
