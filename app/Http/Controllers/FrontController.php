<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CustomerEnquiry;
use Illuminate\Support\Facades\Mail;
use App\Models\CustomerEnquiry as EnquiryModel;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{
    public function index() {
        return view('front-end.pages.index');
    }

    public function company() {
        return view('front-end.pages.company');
    }

    public function projects() {
        return view('front-end.pages.projects');
    }

    public function services() {
        return view('front-end.pages.services');
    }

    public function news() {
        return view('front-end.pages.news');
    }

    public function contact() {
        return view('front-end.pages.contact');
    }

    public function sendEnquiry(Request $request) {
        try {
            $validate = Validator::make($request->all(), [
                'name'      => 'required',
                'email'     => 'required|email|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                'mobile'    => 'required|digits_between:10,15',
            ]);

            if($validate->fails()){
                return redirect()->back()->withErrors($validate)->withInput();
            }

            $enquiry = new EnquiryModel;
            $enquiry->name = $request->name;
            $enquiry->email = $request->email;
            $enquiry->mobile = $request->mobile;
            $enquiry->subject = $request->subject ?? null;
            $enquiry->message = $request->message ?? null;
            $enquiry->save();
            
            if($enquiry->id) {
                Mail::to('qdkhan05@gmail.com')->send(new CustomerEnquiry($request->all()));
            }
            return redirect()->back()->with('success', 'Hello! your query has been saved, We will contact you soon.');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
