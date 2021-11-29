<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index()
    {
        $data['retail'] = DB::table('retails')->where('status', 1)->limit(8)->get();
        $data['residential'] = DB::table('residentials')->where('status', 1)->limit(8)->get();
        $data['officespace'] = DB::table('officespaces')->where('status', 1)->limit(8)->get();
        $data['plot'] = DB::table('plots')->where('status', 1)->limit(8)->get();
        $data['warehouse'] =DB::table('warehouses')->where('status', 1)->limit(8)->get();
        return view('index', $data);
    }
    public function list(Request $req, $str)
    {
        $sort = "";
        if ($req->get('sort') !== null) {
            $sort = $req->get('sort');
        }
        $data['sort'] = $sort;
        if ($str == "commercial") {
            $query = DB::table('officespaces');
        } else if ($str == "officespace" || $str == "plot" || $str == "retail" || $str == "residential" || $str == "warehouse") {
            $query = DB::table($str . 's');
        } else {
            return redirect('404');
        }
        $query = $query->where('status', 1);

        if ($sort == 'price_low_to_high' && $str="warehouse"){
            $query = $query->orderBy('rent_p_sq_ft');
        }
        else if ($sort == 'price_high_to_low' && $str="warehouse") {
            $query = $query->orderBy('rent_p_sq_ft', 'desc');
        }
        else if($sort == 'price_low_to_high') {
            $query = $query->orderBy('rent_p_month', 'asc');
        }
        else if ($sort == 'price_high_to_low') {
            $query = $query->orderBy('rent_p_month', 'desc');
        }
       else if ($sort == 'most_recent') {
            $query = $query->orderBy('id', 'desc');
        }

        $query = $query->get();
        $data['property'] = $query;
        // print_r($data['property']);
        // die();
        foreach ($data['property'] as $list) {
            $data['property_photos'][$list->id] =
                DB::table('prop_images')
                ->where('property_id', '=', $list->id)
                ->where('category_id', '=', $list->category_id)
                ->get();
        }
        if($str=="warehouse")
        {
            return view('proplistware',$data);
        }
        return view('proplist', $data);
    }
    public function detail($cat, $slug)
    {
        if ($cat == "commercial") {
            $data['detail'] = DB::table('officespaces')->where('slug', $slug)->where('status', 1)->first();
        } else {
            $data['detail'] = DB::table($cat . 's')->where('slug', $slug)->where('status', 1)->first();
        }
        // echo "<pre>";
        // print_r($data);
        // die();
        $data['prop_id'] = DB::table('total_properties')
            ->where('category_id', $data['detail']->category_id)
            ->where('property_id', $data['detail']->id)
            ->select('id')
            ->first();

        return view('propdetail', $data);
    }
    public function search()
    {
        $location = $_GET['location'];
        $property_type = $_GET['property_type'];
        $budget = $_GET['budget'];

        if ($property_type == "commercial") {
            $query = DB::table('officespaces');
        } else if ($property_type == "officespace" || $property_type == "plot" || $property_type == "retail" || $property_type == "residential" || $property_type == "warehouse") {
            $query = DB::table($property_type . 's');
        } else {
            return redirect('404');
        }
        if ($property_type=="warehouse") {
            $column ='rent_p_sq_ft';

        }else{
            $column='rent_p_month';
        }
        $query = $query->where($column, '<', "$budget");
        $query = $query->where('address', 'like', "%$location%")
                        ->orWhere('city_name','like',"%$location%");


        $query=$query->where('status',1);
        $query = $query->get();
        $data['property'] = $query;
        foreach ($data['property'] as $list) {
            $data['property_photos'][$list->id] =
                DB::table('prop_images')
                ->where('property_id', '=', $list->id)
                ->where('category_id', '=', $list->category_id)
                ->get();
        }
        if ($property_type=="warehouse") {
            return view('searchware', $data);
        }
        return view('search', $data);
    }

    public function contact(Request $req){

        $contact = new contact;
        $contact->name = $req->cname;
        $contact->email = $req->cemail;
        $contact->mobile = $req->cmobile;
        $contact->interested = $req->cint;
        date_default_timezone_set('Asia/Kolkata');
        $contact->created_at = date("d-m-Y");
        return $contact->save();


    }
    public function post(Request $req){
       $postD=new Post;
       $postD->role = $req->prad1;
       $postD->type = $req->prad2;
       $postD->cat = $req->pcat;
       $postD->city = $req->pcity;
       $postD->state = $req->pstate;
       $postD->locality = $req->ploc;
       $postD->bedrooms = $req->pbed;
       $postD->balcony = $req->pbal;
       $postD->floor = $req->pfloor;
       $postD->furnished = $req->pbed;
       $postD->bathrooms = $req->pbal;
       $postD->meetroom = $req->pfloor;
       $postD->noSeat = $req->pfloor;
       $postD->save();
       return redirect('/congratulation');

    }

    public function details($catId, $slug)
    {
        $data2 = DB::table('category')
            ->where('id',$catId)
            ->select('slug')
            ->first();
        if($data2->slug=='office-space')
        {
            $col = 'officespace';
        }else{
            $col = $data2->slug;
        }

            $data['detail'] = DB::table($col.'s')->where('slug', $slug)->where('status', 1)->first();

        // echo "<pre>";
        // print_r($data);
        // die();
        $data['prop_id'] = DB::table('total_properties')
            ->where('category_id', $data['detail']->category_id)
            ->where('property_id', $data['detail']->id)
            ->select('id')
            ->first();

        return view('details', $data);
    }


}
