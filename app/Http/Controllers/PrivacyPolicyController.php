<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class PrivacyPolicyController extends Controller
{

    public function index()
    {
        return view('privacy_policy');
    }
}
