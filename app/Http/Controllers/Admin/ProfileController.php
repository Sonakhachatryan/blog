<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        return view('admin.profile');
    }

    public function update(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'email' => 'required|email',
            'image' => 'image'
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        if ($file = $this->uploadFile($request->file('image'), 'images/admin')) {
            if (auth()->guard('admin')->user()->image != '')
                File::delete('images/admin' . auth()->guard('admin')->user()->image);
            $data['image'] = $file;
        }

        Admin::find(auth()->guard('admin')->id())->update($data);

        return back();

    }

    public function uploadFile($file, $path)
    {
        $ext = $file->getClientOriginalExtension();
        $name = time() . "." .$ext;
        if ($file->move($path, $name))
            return $name;
        return NULL;
    }

}
