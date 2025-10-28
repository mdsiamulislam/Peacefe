<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    public function addAdmin(Request $request)
    {
        // print the request data
        Log::info('Admin registration data: ', $request->all());
        $newUser = DB::table('admins')->insertOrIgnore([
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        if ($newUser) {
            return redirect(
                route('admin.dashboard')
            )->with('success', 'Admin added successfully.');
        } else {
            return redirect('/admin')->with('error', 'Failed to add admin.');
        }
    }

    public function deleteAllUsers()
    {
        DB::table('admins')->delete();
        return redirect('/admin')->with('success', 'All admin users have been deleted.');
    }
}
