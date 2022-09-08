<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

use Carbon\Carbon;

class quizController extends Controller
{
    public function welcome() {
        
        return view ("/welcome");
    }
}