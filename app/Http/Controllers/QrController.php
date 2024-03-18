<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class QrController extends Controller
{
    public function qr(Request $request)
    {
        $data = array(
            'value' => $request->input('qr_text'),
        );
        return view('show', $data);
    }
}
