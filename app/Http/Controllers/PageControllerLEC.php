<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageControllerLEC extends Controller
{
    function greetings($greetings = "Leandro"){
        return "Welcome $greetings";
    }

    function aboutus(){
        return view('aboutus');
    }
    function contactus(){
        return view('contactus');
    }
    function dashboard(){
        return view('dashboard');
    }
    function login(){
        return view('login');
    }
    
    function profile(){
        $student = ["name" => "Leandro C Estabillo",
        "age" => "June 12 2001","course" => "bachelor science in information technology","section" => "3rd year section 3A"];
        return view('profile')->with($student);
    }

    function controlstructures(){
        $grade = 100;
        return view('controlstructures')->with($grade);
    }
function student_lce($index_lce = null) {
    $student_lce = array(
        array ("student"=>"s1","fname"=>"Ericson","mname"=>"U","lname"=>"Palisoc","email"=>"ericsonpalisoc233@gmail.com"),
        array ("student"=>"s2","fname"=>"Justine","mname"=>"L","lname"=>"Estabillo","email"=>"justineestabillo33@gmail.com"),
        array ("student"=>"s3","fname"=>"Angelvic","mname"=>"P","lname"=>"Claudio","email"=>"angelvicclaudio454@gmail.com"),
        array ("student"=>"s4","fname"=>"Agnes","mname"=>"D","lname"=>"Garcia","email"=>"agnesgarcia25gmail.com"),
        array ("student"=>"s5","fname"=>"Al_Eugene","mname"=>"S","lname"=>"Delacruz","email"=>"aleugenedelacruz44gmail.com"),
        array ("student"=>"s6","fname"=>"Arabella","mname"=>"G","lname"=>"Cancino","email"=>"arabellacancino14gmail.com"),
        array ("student"=>"s7","fname"=>"Edward","mname"=>"O","lname"=>"Fernandez","email"=>"edwardfernandez88gmail.com"),
        array ("student"=>"s8","fname"=>"Juan_Carlos","mname"=>"A","lname"=>"Mercado","email"=>"juancarlosmercado20gmail.com"),
        array ("student"=>"s9","fname"=>"Leanne","mname"=>"D","lname"=>"Flores","email"=>"leanneflores232gmail.com"),
        array ("student"=>"s10","fname"=>"Maria Luisa","mname"=>"V","lname"=>"Soriano","email"=>"marialuisasoriano151gmail.com"),
    );

    // If index is provided, retrieve specific data
    if ($index_lce !== null) {
        // Validate index to prevent accessing out-of-bound indexes
        if ($index_lce >= 0 && $index_lce < count($student_lce)) {
            $data_lce = $student_lce[$index_lce];
        } else {
            // Handle invalid index, for example, redirect to an error page or return a message
            abort(404, 'Student not found');
        }

        return view('student_lce')->with('data_lce', $data_lce);
    }

    // If no index is provided, show all data
    return view('student_lce')->with('student_lce', $student_lce);
}
}
