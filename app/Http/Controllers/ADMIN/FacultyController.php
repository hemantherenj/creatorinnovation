<?php

namespace App\Http\Controllers\ADMIN;

use App\Http\Controllers\Controller;
use App\Models\Faculty;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data = Faculty::latest('id')->get();
        return view('ADMIN.Pages.Faculty.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title = "Add New User";
        return view('ADMIN.Pages.Faculty.AddEdit', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate(
            [
                'name' => 'required',
                'designation' => 'required',
                'photo' => 'mimes:png,jpeg,jpg|max:2048',
            ]
        );

        $filePath = public_path('uploads');
        $insert = new Faculty();
        $insert->name = $request->name;
        $insert->designation = $request->designation;


        if ($request->hasfile('photo')) {
            $file = $request->file('photo');
            $file_name = time() . $file->getClientOriginalName();

            $file->move($filePath, $file_name);
            $insert->photo = $file_name;
        }

        $result = $insert->save();
        Session::flash('success', 'Add successfully');
        return redirect()->route('admin.faculty');
    }

    /**
     * Display the specified resource.
     */
    public function show(Faculty $faculty)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $title = "Update User";
        $edit = Faculty::findOrFail($id);
        return view('ADMIN.Pages.Faculty.AddEdit', compact('edit', 'title'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $request->validate(
            [
                'name' => 'required',
                'designation' => 'required',
                'photo' => 'mimes:png,jpeg,jpg|max:2048',
            ]
        );
        $update = Faculty::findOrFail($id);
        $update->name = $request->name;
        $update->designation = $request->designation;

        if ($request->hasfile('photo')) {
            $filePath = public_path('uploads');
            $file = $request->file('photo');
            $file_name = time() . $file->getClientOriginalName();
            $file->move($filePath, $file_name);
            // delete old photo
            if (!is_null($update->photo)) {
                $oldImage = public_path('uploads/' . $update->photo);
                if (File::exists($oldImage)) {
                    unlink($oldImage);
                }
            }
            $update->photo = $file_name;
        }

        $result = $update->save();
        Session::flash('success', 'User updated successfully');
        return redirect()->route('dashboard.faculty');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
        $userData = Faculty::findOrFail($request->user_id);
        $userData->delete();
        // delete photo if exists
        if (!is_null($userData->photo)) {
            $photo = public_path('uploads/' . $userData->photo);
            if (File::exists($photo)) {
                unlink($photo);
            }
        }
        Session::flash('success', 'User deleted successfully');
        return redirect()->route('dashboard.faculty');
    }
}
