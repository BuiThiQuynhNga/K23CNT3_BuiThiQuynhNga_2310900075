<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BtqnAccountController extends Controller
{
    //#form login - get
    public function btqnLogin()
    {
        return view('btqn-Login');
    }
    //#form login-post
    public function btqnLoginSubmit(Request $request)
    {
            $validation = $request->validate([
                    'btqnemail' =>'required|email',
                    'btqnpass'  =>'required|min:6'
                ]);
            $btqnemail = $request->input('btqnemail');
            $btqnpass  = $request->input('btqnpass');
            $btqnLoginSession=[
                'btqnemail'=>$btqnemail,
                'btqnpass' =>$btqnpass
            ];
            $btqn_json = json_encode($btqnLoginSession);

            if($btqnemail == "btqn@gmail.com" && $btqnpass=='123456a@')
            {
                //lưu session
                $request->session()->put('K23CNT3-BuiThiQuynhNga',$btqnemail);
                return redirect('/');
            }
        return redirect()->back()->with('btqn-error','lỗi đăng nhập');
    }
    public function btqnLogout(Request $request)
    {
        $request->session()->forget('K23CNT3_BuiThiQuynhNga');
        $request->session()->Flush();
        return redirect('/');
    }
}
