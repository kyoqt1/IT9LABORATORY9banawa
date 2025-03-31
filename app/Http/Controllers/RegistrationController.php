<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function showForm()
    {
        return view('register');
    }

    public function handleForm(Request $request)
    {
        // Validate data
        $validated = $request->validate([
            'name' => 'required|min:3|max:50',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Redirect to success page with data
        return redirect()->route('register.success')->with('user', $validated);
    }

    public function success()
    {
        $user = session('user');
        return view('success', compact('user'));
    }
}
