<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class BtqnSessionController extends Controller
{
    //
    public function btqnGetSessionData(Request $request)
    {
        if($request->session()->has("K23CNT3_BuiThiQuynhNga"))
        {
            echo "<h2>Session Data:". $request->session()->get('K23CNT3_BuiThiQuynhNga');
        }
        else
        {
            echo "<h2> Không có dữ liệu trong session </h2>";
        }
    }
    //#ghi dữ liệu vào session
    public function btqnStoreSessionData(Request $request)
    {
        //Lưu
        $request->session()->put('K23CNT3_BuiThiQuynhNga','K23CNT3 - Bùi Thị Quỳnh Nga - 2310900075');
        echo "<h2> Dữ liệu đã được lưu vào session</h2>";
    }
    //xoá dữ liệu trong session
    public function btqnDeleteSessionData(Request $request)
    {
        $request->session()->forget('K23CNT3_BuiThiQuynhNga');
        echo "<h2> Dữ liệu đã được xoá khỏi session</h2>";
    }
}