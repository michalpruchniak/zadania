<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Profile;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('zadanie3.register');
    }

    public function store(RegisterRequest $request)
    {

        $profile = new Profile();
        if ($request->type == 'indyvidual') {
            $profile->name = $request->name;
            $profile->email = $request->email;
            $profile->DOB = \DateTime::createFromFormat('m/d/Y', $request->DOB)->format('Y-m-d');
        } else {
            $profile->name = $request->name;
            $profile->email = $request->email;
            $profile->nip = $request->nip;
        }

        $profile->save();
    }
}
