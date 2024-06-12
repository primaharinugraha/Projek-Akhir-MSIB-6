<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EleraningController extends Controller
{
    public function indexeleraning(){
        return view('e-learning.indexelearning');
    }

    public function fundamental1(){
        return view('e-learning.fundamental.fundamental1');
    }
    public function fundamental2(){
        return view('e-learning.fundamental.fundamental2');
    }
    public function fundamental3(){
        return view('e-learning.fundamental.fundamental3');
    }
    public function fundamental4(){
        return view('e-learning.fundamental.fundamental4');
    }
    public function fundamental5(){
        return view('e-learning.fundamental.fundamental5');
    }

    public function intermediate1(){
        return view('e-learning.intermediate.intermediate1');
    }
    public function intermediate2(){
        return view('e-learning.intermediate.intermediate2');
    }
    public function intermediate3(){
        return view('e-learning.intermediate.intermediate3');
    }
    public function intermediate4(){
        return view('e-learning.intermediate.intermediate4');
    }
    public function intermediate5(){
        return view('e-learning.intermediate.intermediate5');
    }

    public function advance1(){
        return view('e-learning.advance.advance1');
    }
    public function advance2(){
        return view('e-learning.advance.advance2');
    }
    public function advance3(){
        return view('e-learning.advance.advance3');
    }
    public function advance4(){
        return view('e-learning.advance.advance4');
    }
    public function advance5(){
        return view('e-learning.advance.advance5');
    }
}
