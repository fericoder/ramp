<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{

    public function index()
    {
        $user = \Auth::user();
        return view('profile', compact('user'));
    }

    public function contacts()
    {
        return view('contacts');
    }

    public function update(Request $request)
    {

        $validatedData = $request->validate ([
            'fName' => 'required',
            'lName' => 'required',
            'mobile' => 'required|min:11|max:11',
            'position' => 'required',
        ]);

        $data = $request->except('_token', '_method', 'avatar', 'email');
        User::where('id', \Auth::user()->id)
            ->update($data);

        alert()->success('اطلاعات با موفقیت بروز شد.', 'انجام شد');
        return redirect()->route('profile.index');
    }


    public function updateAvatar(Request $request)
    {
        $validatedData = $request->validate([
            'avatar' => 'required|mimes:jpeg,bmp,png,gif,JPG,PNG,JPEG',
        ]);

        $avatar = $this->uploadFile($request->file('avatar'));

        User::where('id', \Auth::user()->id)->update(['avatar' => $avatar]);

        alert()->success('تصویر پروفایل با موفقیت بروز شد.', 'انجام شد');
        return redirect()->route('profile.index');
    }




    public function updatePassword(Request $request)
    {

        $validatedData = $request->validate ([
            'password' => 'required',
        ]);

        User::where('id', \Auth::user()->id)->update(['password' => \Hash::make($validatedData['password'])]);

        alert()->success('رمزعبور با موفقیت بروز شد.', 'انجام شد');
        return redirect()->route('profile.index');
    }


    public function under()
    {
        return view('under');
    }

}
