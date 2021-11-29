<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\contact;
use App\Models\Admin\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (session()->has('ADMIN_LOGIN')) {
            // $result = DB::select(DB::raw("select count(total_properties.id) as total_prop,category.name from total_properties,category where total_properties.category_id=category.id group by total_properties.category_id,category.name"));
            date_default_timezone_set('Asia/Kolkata');
           $first = DB::table('total_properties')
                ->join('category','total_properties.category_id', '=', 'category.id')
                ->select('category.name', DB::raw("count(total_properties.id) as total_prop"))
                // ->whereDate('total_properties.created_at',today())
                ->groupBy('total_properties.category_id','category.name')
                ->get();
                $firstdata="";
            
                foreach($first as $first){
                    $firstdata.="['".$first->name."',".$first->total_prop."],";
                }
                $arr['firstdata'] = rtrim($firstdata,",");
           $second = DB::table('total_properties')
                ->join('staff','total_properties.staff_id', '=', 'staff.id')
                ->select('staff.name', DB::raw("count(total_properties.id) as total_prop"))
                // ->whereDate('total_properties.created_at',today())
                ->groupBy('total_properties.staff_id','staff.name')
                ->get();
                $seconddata="";
            
                foreach($second as $second){
                    $seconddata.="['".$second->name."',".$second->total_prop."],";
                }
                $arr['seconddata'] = rtrim($seconddata,",");
            return view('admin/dashboard',$arr);
        } else {
            return view('admin.login');
        }
    }
    public function admin_auth(Request $req)
    {
        $data = Admin::where('username', $req->username)->first();
        if (!$data || !Hash::check($req->password, $data->password)) {
            $req->session()->flash('error', 'Please Enter valid email and password');
            return redirect('admin');
        } else {
            $req->session()->put('ADMIN_LOGIN', true);
            $req->session()->put('ADMIN_ID', $data['username']);
            return redirect('admin/dashboard');
        }
    }
    public function enquiry()
    {
        $data = contact::all();
        return view('admin/enquiry', ['data' => $data]);
    }
}
