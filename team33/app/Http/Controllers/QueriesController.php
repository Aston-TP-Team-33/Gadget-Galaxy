<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserQueries;

class QueriesController extends Controller
{
    public function contactForm(Request $request){ #fetch data from contact form and save into database table queries

        $query = new UserQueries();
    
        $query->email=$request->email1;
        $query->name=$request->name1;
        $query->query=$request->query1;
        $query->save();
    
        return redirect('contact');
        
        }
}
