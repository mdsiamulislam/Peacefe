<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\admin;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function addAdmin(Request $request)
    {
        if ($request->master_key == '1234') {
            $newUser = DB::table('admins')->insertOrIgnore([
                'name' => $request->name,
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
        } else {
            return redirect('/admin')->with('error', 'Failed to add admin.');
        }
    }

    public function login(Request $request)
    {
        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Fetch admin by email
        $admin = DB::table('admins')->where('email', $request->email)->first();

        if (!$admin) {
            return redirect('/admin')->with('error', 'Email not found');
        }

        // Check password
        if (!Hash::check($request->password, $admin->password)) {
            return redirect('/admin')->with('error', 'Invalid password');
        }

        // Optional: remember me
        if ($request->has('remember')) {
            // Laravel Auth session or cookie logic
            // Simple example without Auth facade:
            session(['admin_id' => $admin->id]);
        } else {
            session(['admin_id' => $admin->id]);
        }

        return redirect()->route('admin.dashboard')->with('success', 'Login successful!');
    }


    public function deleteAllUsers()
    {
        DB::table('admins')->delete();
        return redirect('/admin')->with('success', 'All admin users have been deleted.');
    }
}
