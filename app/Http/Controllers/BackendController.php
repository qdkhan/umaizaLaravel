<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Category;
use App\Models\Project;
use App\Models\Team;
use App\Models\CustomerEnquiry;
use Illuminate\Support\Facades\DB;

class BackendController extends Controller
{
    public function getUpdateTeam(Request $request) {
        try{
            if($request->isMethod('POST')){
                $validate = Validator::make($request->all(), [
                    'name'          => 'required|min:4',
                    'designation'   => 'required|min:5',
                    'branch'        => 'sometimes|nullable|min:5',
                    'facebook'      => 'sometimes|nullable|url',
                    'twitter'       => 'sometimes|nullable|url',
                    'instagram'     => 'sometimes|nullable|url',
                    'linkedin'      => 'sometimes|nullable|url',
                    'image'         => 'image|dimensions:width=263,height=300|mimes:jpg,png|max:50',
                ]);
                if($validate->fails()) 
                    return redirect()->back()->withErrors($validate)->withInput();
                if($request->hasFile('image')) { $file = uploadFiles($request, 'image', 'team'); }

                if($request->id) {
                    $team = Team::find($request->id);
                        if(isset($file)) {
                            deleteFiles($team->image);
                            $team->image =   $file;
                        } 
                    $team->name         =   $request->name;
                    $team->designation  =   $request->designation;
                    $team->branch       =   $request->branch ?? '';
                    $team->facebook     =   $request->facebook ?? 'https://www.facebook.com/umaizaconstruction?mibextid=ZbWKwL';
                    $team->twitter      =   $request->twitter ?? 'https://twitter.com/UCPLSERVICES';
                    $team->instagram    =   $request->instagram ?? 'https://www.instagram.com/UMAIZA_CONSTRUCTION_PVT_LTD';
                    $team->linkedin     =   $request->linkedin ?? 'https://www.linkedin.com/in/umaizaconstruction/';
                    $team->save();
                    return redirect()->to('team-list')->with('success', 'Team updated successfully.');
                } else {
                    $team = new Team();
                    $team->name         =   $request->name;
                    $team->designation  =   $request->designation;
                    $team->branch       =   $request->branch ?? '';
                    $team->facebook     =   $request->facebook ?? 'https://www.facebook.com/umaizaconstruction?mibextid=ZbWKwL';
                    $team->twitter      =   $request->twitter ?? 'https://twitter.com/UCPLSERVICES';
                    $team->instagram    =   $request->instagram ?? 'https://www.instagram.com/UMAIZA_CONSTRUCTION_PVT_LTD';
                    $team->linkedin     =   $request->linkedin ?? 'https://www.linkedin.com/in/umaizaconstruction/';
                    $team->image        =   $file;
                    $team->save();
                    return redirect()->to('team-list')->with('success', 'Team added successfully.');
                }  
            } else {
                if($request->id !== null) {
                    $data = Team::select('*')->find($request->id);
                    return view('back-end.pages.team-add', ['data' => $data]);
                }else {
                    return view('back-end.pages.team-add');
                }
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function teamList(Request $request) {
        try{
            $data = Team::select('*')->get();
            return view('back-end.pages.teams', ['data' => $data]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function teamDelete($id) {
        try {
            DB::beginTransaction();
            $image = Team::where('id', $id)->pluck('image')->toArray();
            $team = Team::find($id)->delete();

            if($team) deleteFiles($image);
            DB::commit();
            return redirect()->to('team-list')->with('deleted', 'Team deleted successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }

    public function getUpdateCategory(Request $request) {
        try{
            if($request->isMethod('POST')) {
                if($request->id) {
                    $validate = Validator::make($request->all(), [
                        'name' => 'required|min:5|unique:categories,name,'.$request->id,
                        'id'   => 'required'
                    ]);
                    if($validate->fails()) 
                        return redirect()->back()->withErrors($validate)->withInput();
                    $category = Category::find($request->id);
                    $category->name = $request->name;
                    $category->slug = strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name));
                    $category->save();
                    return redirect()->to('category-list')->with('success', 'Category Updated successfully.');
                } else{
                    $validate = Validator::make($request->all(), [
                        'name' => 'required|unique:categories,name|min:5',
                    ]);
                    if($validate->fails()) 
                        return redirect()->back()->withErrors($validate)->withInput();
                    $category = new Category();
                    $category->name = $request->name;
                    $category->slug = strtolower(preg_replace('/[^A-Za-z0-9-]+/', '-', $request->name));
                    $category->save();
                    return redirect()->to('category-list')->with('success', 'Category added successfully.');
                }
                
            } else{
                if($request->id !== null) {
                    $data = Category::select('id', 'name')->find($request->id);
                    return view('back-end.pages.category-add', ['data' => $data]);
                }else {
                    return view('back-end.pages.category-add');
                }
            }
            
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function categoryDelete($id) {
        try{
            DB::beginTransaction();
            $category = Category::destroy($id);
            if($category) {
                $images = Project::where('category_id', $id)->value('image');
                $project = Project::where('category_id', $id)->delete();

                if($project) deleteFiles($images);

                DB::commit();
                return redirect()->to('category-list')->with('deleted', 'Category deleted successfully.');
            }
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }    
    }

    public function categoryList(Request $request) {
        try{
            $data = Category::select('*')->get();
            return view('back-end.pages.category', ['data' => $data]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function projectAdd(Request $request) {
        try{
            $data = Category::select('id', 'name')->get();
            return view('back-end.pages.project-add', ['category' => $data]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function projectList(Request $request) {
        try{
            $data = Project::select('projects.id', 'projects.name', 'projects.description', 'projects.client', 'projects.architect', 'projects.location', 'projects.size', 'projects.year', 'projects.category_id', 'projects.image', 'projects.created_at', 'categories.name as category_name')
                    ->leftJoin('categories', 'categories.id', '=', 'projects.category_id')
                    ->get();
            return view('back-end.pages.projects', ['data' => $data]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function getUpdateProject(Request $request) {
        try{ 
            if($request->isMethod('POST')){
                $customMessages = [
                    'image.*.image' => 'The file must be an image.',
                    'image.*.dimensions' => 'The image dimensions must be 750x600 pixels.',
                    'image.*.mimes' => 'The image must be a file of type: jpg, png.',
                    'image.*.max' => 'The image must not exceed 1024kb in size.',
                ];
                $validate = Validator::make($request->all(), [
                    'name'          => 'required|min:5',
                    'description'   => 'sometimes|nullable|min:10',
                    'client'        => 'sometimes|nullable|min:5',
                    'architect'     => 'sometimes|nullable|min:5',
                    'location'      => 'required|min:5',
                    'size'          => 'sometimes|nullable|numeric|min:1',
                    'year'          => 'sometimes|nullable|digits:4',
                    'categories'    => 'required|numeric',
                    'image.*'       => 'image|dimensions:width=750,height=600|mimes:jpg,png|max:1024'
                ], $customMessages);
                if($validate->fails()) 
                    return redirect()->back()->withErrors($validate)->withInput();
                if($request->hasFile('image')) { $file = uploadFiles($request, 'image', 'projects'); }
                if($request->id) {
                    $projects = Project::find($request->id);
                        if(isset($file)) {
                            deleteFiles($projects->image);
                            $projects->image =   $file;
                        } 
                    $projects->name         =   $request->name;
                    $projects->description  =   $request->description ?? 'N/A';
                    $projects->client       =   $request->client ?? 'N/A';
                    $projects->architect    =   $request->architect ?? 'N/A';
                    $projects->location     =   $request->location;
                    $projects->size         =   $request->size ?? 'N/A';
                    $projects->year         =   $request->year ?? 'N/A';
                    $projects->category_id  =   $request->categories;
                    $projects->save();
                    return redirect()->to('project-list')->with('success', 'Project updated successfully.');
                } else {
                    $projects = new Project();
                    $projects->name         =   $request->name;
                    $projects->description  =   $request->description ?? 'N/A';
                    $projects->client       =   $request->client ?? 'N/A';
                    $projects->architect    =   $request->architect ?? 'N/A';
                    $projects->location     =   $request->location;
                    $projects->size         =   $request->size ?? 'N/A';
                    $projects->year         =   $request->year ?? 'N/A';
                    $projects->category_id  =   $request->categories;
                    $projects->image        =   $file;
                    $projects->save();
                    return redirect()->to('project-list')->with('success', 'Project added successfully.');
                }  
            } else {
                if($request->id !== null) {
                    $category = Category::select('id', 'name')->get();
                    $data = Project::select('*')->find($request->id);
                    return view('back-end.pages.project-add', ['data' => $data, 'category' => $category]);
                }else {
                    $data = Category::select('id', 'name')->get();
                    return view('back-end.pages.project-add', ['category' => $data]);
                }
            }
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function projectDelete($id) {
        try {
            DB::beginTransaction();
            $image = Project::where('id', $id)->pluck('image')->toArray();
            $project = Project::find($id)->delete();

            if($project) deleteFiles($image);
            DB::commit();
            return redirect()->to('project-list')->with('deleted', 'Project deleted successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }

    public function enquiryList() {
        try{
            $enquiries = CustomerEnquiry::all('id', 'name', 'email', 'mobile', 'subject', 'message', 'created_at');
            return view('back-end.pages.enquiry', ['enquiries' => $enquiries]);
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }

    public function enquiryDelete($id) {
        try{
            DB::beginTransaction();
            $enquiries = CustomerEnquiry::find($id)->delete();
            if($enquiries) {
                DB::commit();
                return redirect()->back()->with('deleted', 'Enquiry deleted successfully.');
            } 
        } catch (\Exception $e) {
            DB::rollBack();
            return $e->getMessage();
        }
    }
}
