<?php

namespace App\Controllers;

class Home extends BaseController
{
    
    public function index(): string
    {
        return view('index');
    }

    public function aa(){

    $data = [
        'x' => 11,
        'y' => 22,
        'z' => 33,
    ];
        return view('aboutme',$data);
    }

    public function sub1(){

        $name = $this->request->getPost('t1');
        $age = $this->request->getPost('t2');
       $x = $this->request->getPost('v');
      
       $x++;

        $data = [
            'name' => $name,
            'age' => $age,
            'v' => $x,
        ];

       return view('index',$data);


    }

    public function cal(){
        $a = $this->request->getPost('a');
        $b = $this->request->getPost('b');
        $op = $this->request->getPost('sub');
        $data = [];
        $ans = null;

        if($op == '+'){
            $ans = $a + $b;
        }
        else if ($op == '-'){
            $ans = $a - $b;
        }
        else if ($op == '*') {
            $ans = $a * $b;
        }
        else if ($op == '/'){
            $ans = $a / $b;
        }

        $data = [
            'a' => $a,
            'b' => $b,
            'ans' => $ans,
        ];

        return view('cal',$data);
        
    }
}
