<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Psy\Exception\BreakException;

class CalcsController extends Controller
{
  public function result($a,$b,$c) 
{
     switch ($b){
     
     case 'addition':
     $answer = $a + $c;
     break;

     case 'subtraction':
     $answer = $a - $c;
     break ;

     case 'multiplication':
     $answer = $a * $c;
     break ;

     case 'division':
     $answer = $a * $c;
     break ;
              
     }   
          
         return view('calcs',['answer'=> $answer ]);
     }  
}
