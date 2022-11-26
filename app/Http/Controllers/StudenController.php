<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class StudenController extends Controller
{

    public function __construct()
    {
        //only is a method that only functions have middleware other functions can be access by guest
        return $this->middleware(['auth'])->except('index');
    }

    public function index()
    {

        $students = Student::paginate(20);

        //return index page of student
        return view('pages.student.index', ['students' => $students]);
    }

    public function newStudent()
    {
        // return view page of new student
        return view('pages.student.create');
    }

    public function store(Request $request)
    {
        //validation
        $this->validate($request, ['first_name' => 'required|max:255', 'last_name' => 'required|max:255']);

        //custom validation
        // $validator = Validator::make($request->all(), ['first_name' => 'required|max:255', 'last_name' => 'required|max:255']);
        // if ($validator->fails()) {
        //     return redirect()->back()->withInput()->withErrors($validator);
        //     // $firstNameErr = $validator->errors('first_name');
        //     // $lastNameErr = $validator->errors('last_name');
        //     // return view('pages.student.create', ['errors' => $validator->errors()]);
        // }

        //store or create new student
        Student::create(['first_name' => $request->first_name, 'last_name' => $request->last_name]);

        return back()->with('savedMessage', 'New student has been saved.');
    }

    public function get(Request $request)
    {

        //get specific student for update
        $student = Student::find($request->id);
        return view('pages.student.update', ['student' => $student]);
    }

    public function update(Request $request)
    {
        //validation
        $this->validate($request, ['first_name' => 'required|max:255', 'last_name' => 'required|max:255']);

        //update the student
        Student::where('id', $request->id)->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
        ]);

        //return to create new student page with message of updated 
        return redirect()->route('student.new')->with('savedMessage', 'New student has been updated.');
    }

    public function destroy(Request $request)
    {
        //delete the student
        Student::find($request->id)->delete();
        return back();
    }
}
