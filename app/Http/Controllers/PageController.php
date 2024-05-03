<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Employee;
use App\Models\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $comments = Comment::orderBy('id','asc')->limit(3)->get();
        $employees = Employee::all();
        // dd($employees,$comments);
        return view('index')->with('employees', $employees)->with('comments', $comments);
    }
    public function about()
    {
        $employees = Employee::all();
        return view('about')->with('employees', $employees);
    }
    public function services()
    {
        $comments = Comment::orderBy('id','asc')->limit(3)->get();
        return view('service')->with('comments' , $comments);
    }
    public function projects()
    {
        $projects =  Project::all();
        // dd($projects);
        return view('project')->with('projects', $projects);
    }
    public function latestblog()
    {
        return view('blog');
    }
    public function singleblog()
    {
        return view('single');
    }
    public function contact()
    {
        return view('contact');
    }
}
