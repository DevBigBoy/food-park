<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Admin\ProfileUpdateRequest;
use App\Http\Requests\Admin\ProfilePasswordUpdateRequest;

class ProfileController extends Controller
{
    public function index(): View
    {
        return view('admin.profile.index');
    }

    function updateProfile(ProfileUpdateRequest $request): RedirectResponse
    {
        $user = Auth::user();

        $user->name = $request->name;
        $user->email =  $request->email;
        $user->save();

        toastr('Update Successfully!', 'success');

        return redirect()->back();
    }

    function updatePassword(ProfilePasswordUpdateRequest $request): RedirectResponse
    {
        $user = Auth::user();
        $user->password =  bcrypt($request->password);
        $user->save();

        toastr('Password Updated Successfully!', 'success');

        return redirect()->back();
    }
}
