<?php

namespace App\Http\Controllers;
use Illuminate\Database\Eloquent\ModelNotFoundException;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
class ExampleController extends Controller
{
    //
    public function index(Request $request)
    {
        try {
            // Your custom logic here
            $data = ['name' => 'uday', 'email' => 'johndoe@example.com'];
            
            // Additional processing or data retrieval
    
            return view('home', $data);
        } catch (ModelNotFoundException $exception) {
            Log::error('Model not found: ' . $exception->getMessage());
            return response()->view('errors.model_not_found', [], 404);
        } catch (\Exception $exception) {
            Log::error('An error occurred: ' . $exception->getMessage());
            return response()->view('errors.generic', [], 500);
        }
    }
    
}
