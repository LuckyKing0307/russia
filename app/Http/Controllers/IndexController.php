<?php

namespace App\Http\Controllers;

use App\Exports\RegistredExport;
use App\Models\RegistredUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class IndexController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    public function send(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);

        RegistredUsers::create($data);

        Session::put('survey_completed', true);

        return redirect('/survey-end');
    }

    public function download()
    {
        return Excel::download(new RegistredExport, 'users.xlsx');
    }
}
