<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\Profile;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    private $profile;
    public function index()
    {
        return view('zadanie3.register');
    }

    public function store(RegisterRequest $request)
    {
        $this->profile = new Profile();
        $this->storeProfile($request->type, $request);

        $this->profile->save();

        return redirect('zadanie3/success');
    }

    public function success()
    {
        return view('zadanie3.success');
    }

    private function storeProfile($type, $request)
    {
        if ($type === 'indyvidual') {
            $this->storeIndyvidual($request);
        } else {
            $this->storeCompany($request);
        }
    }

    private function storeIndyvidual($request)
    {
        $this->profile->name = $request->name;
        $this->profile->email = $request->email;
        $this->profile->DOB = \DateTime::createFromFormat('m/d/Y', $request->DOB)->format('Y-m-d');
    }

    private function storeCompany($request)
    {
        $this->profile->name = $request->name;
        $this->profile->email = $request->email;
        $this->profile->nip = $request->nip;
    }
}
