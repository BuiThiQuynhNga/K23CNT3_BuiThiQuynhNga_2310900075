<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BTQN_QUAN_TRIController extends Controller
{
    public function btqnLogin()
    {
        return view('BtqnLogin.btqn-login');
    }
    public function btqnLoginSubmit(Request $request)
    {
        return view('BtqnLogin.btqn-login');
    }
}
