<?php

namespace App\Http\Controllers\Backend\Statical;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function getIndex(){
        return view('backend.patient.index');
    }
}
