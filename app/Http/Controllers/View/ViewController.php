<?php

namespace App\Http\Controllers\View;

use App\Http\Controllers\Controller;
use App\Models\Faq as FAQ;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function index()
    {
        $faqs = FAQ::where('publication_status',1)
            ->orderBy('priority','ASC')
            ->take(10)
            ->get();
            
        return view('home.index', [
            'faqs' => $faqs
        ]);
    }



    public function faq_search($search){
        $faq = FAQ::where('question','LIKE','%'.$search.'%')->get();

        return $faq;

    }
}
