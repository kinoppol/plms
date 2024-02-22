<?php
class main{
    function index(){
        $data['content']='Hello';
        return view('template/main',$data);
    }
    function dashboard(){


        $data['content']='Hello';
        return view('template/main',$data);
    }
}