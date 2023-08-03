<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
class StudentController extends Controller
{
    // public function index(Request $request){
    //     dd($request);
    //     return view('welcome');
    // }
    // public function index(Request $request){
    //     dd($request);
    //     return 'welcome';
    // }
    public function index(){
        $collection = collect([1,2,3,4,5,6,7,8,9]);
        // dd($collection);
        // $data = $collection->all();
        // $data = $collection->avg();
        // $data = $collection->chunk(2);
        // $data = $collection->chunk(2)->all();
        $data = $collection->map(function($item,$key){
            return $item + 2;
        });
        dd($data);
    }
    public function sendEmail(){
        $details = [
            'title' => 'Mail from Surfside Media',
            'body'=> 'This is for testing mail using gmail.'
        ];
        Mail::to("us300350@gmail.com")->send(new TestMail($details));
        return "Email Sent";
}

}