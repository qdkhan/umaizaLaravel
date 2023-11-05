<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\CustomerEnquiry;
use Illuminate\Support\Facades\Mail;
use App\Models\CustomerEnquiry as EnquiryModel;
use App\Models\Category;
use App\Models\Project;
use App\Models\Team;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{
    public function index() {
        try{
            $data = Project::latest()->take(1)->value('image');
            $images = explode(',', $data);
            return view('front-end.pages.index', compact('images'));
        } catch(\Exception $e){
            return $e->getMessage();
        }
        
    }

    public function company() {
        $teams = Team::select('*')->get();
        return view('front-end.pages.company', ['teams' => $teams]);
    }

    public function projects($category_id = null) {
        try{
            $categories = Category::select('id','name','slug')->get();
            $data = Project::select('projects.id', 'projects.name', 'projects.description', 'projects.client', 'projects.architect', 'projects.location', 'projects.size', 'projects.year', 'projects.category_id', 'projects.image', 'projects.created_at', 'categories.name as category_name', 'categories.slug')
                            ->when($category_id, function ($query) use ($category_id) {
                                    $query->where('category_id', $category_id);
                                })
                            ->leftJoin('categories', 'categories.id', '=', 'projects.category_id')
                            ->get();
            return view('front-end.pages.projects', ['projects' => $data, 'categories' => $categories]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function projectsSingle($id) {
        try{
            $project = Project::select('projects.id', 'projects.name', 'projects.description', 'projects.client', 'projects.architect', 'projects.location', 'projects.size', 'projects.year', 'projects.category_id', 'projects.image', 'projects.created_at', 'categories.name as category_name', 'categories.slug')
                            ->leftJoin('categories', 'categories.id', '=', 'projects.category_id')
                            ->where('projects.id', $id)
                            ->first();
            return view('front-end.pages.single-project', ['project' => $project]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
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
                'name'      => 'required|min:3',
                'email'     => 'required|email|regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix',
                'mobile'    => 'required|digits_between:10,12',
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
                Mail::to('care@umaizaconstruction.com')->send(new CustomerEnquiry($request->all()));
            }
            return redirect()->back()->with('success', 'Hello! your query has been saved, We will contact you soon.');
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
