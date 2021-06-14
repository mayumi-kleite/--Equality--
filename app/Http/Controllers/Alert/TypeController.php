<?php

namespace App\Http\Controllers\Alert;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function call(string $type)
    {
        switch($type)
        {
            case 'abuse':
                $kind = 'Sexually harassed';
                break;
            case 'racism':
                $kind = 'Suffered racism';
                break;
            case 'homophobia':
                $kind = 'Suffered homophobia';
                break;
        }
        return view('Alert.type', ['type' => $kind]);
    }
}
