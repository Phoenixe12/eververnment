<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Candidature;
use App\Models\Emails_newsletter;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function userHome()
    {
        return view('');
    }

    public function editorHome()
    {
        $total = Candidature::count();
        $qualifie = Candidature::where('status','QUALIFIE')->count();
        $rejete = Candidature::where('status','REJETE')->count();
        $nq = Candidature::whereNull('status')->count();
        $admin = User::where('role','1')->count();
        $email = Emails_newsletter::count();
        return view('Admin.index',compact('qualifie','rejete','nq','admin','total','email'));
    }

    public function adminHome()
    {
        return view('home',["msg"=>"I am user role"]);
    }
}
