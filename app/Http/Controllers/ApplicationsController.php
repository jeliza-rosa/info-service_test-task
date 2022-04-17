<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\FormRequest;
use Illuminate\Http\Request;

class ApplicationsController extends Controller
{
    public function send()
    {
        $application = Application::create(FormRequest::validate());
        return redirect('/');
    }
}
