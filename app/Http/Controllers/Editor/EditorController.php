<?php

namespace App\Http\Controllers\Editor;

use App\Http\Controllers\Controller;

class EditorController extends Controller
{
    //
    public function index()
    {
        return view('users.editor.dashboard');
    }
}
