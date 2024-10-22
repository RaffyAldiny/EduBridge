<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads; // Import the trait
use Illuminate\Support\Facades\Auth;
use App\Models\Students; // Ensure this is the correct model path
use Illuminate\Support\Facades\Hash;

class Studentlogin extends Component
{
    use WithFileUploads; // Add the trait here

    public $showModal = false;
    public $isLogin = true; 
    public $name, $email, $password, $schoolId; // Form fields

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
        'name' => 'required|string|max:255',
        'schoolId' => 'required|file|max:1024', 
    ];

    public function login()
    {
    $credentials = $this->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);
    
    // Attempt to log the user in
    if (Auth::guard('students')->attempt($credentials)) {
        return redirect()->to('/studentpreference'); // Redirect to the desired page
    }
    session()->flash('error', 'Invalid Login Credentials');
    }

    public function signup()
    {
        $this->validate($this->rules);
    
        // Handle the file upload
        $path = $this->schoolId->store('school-ids', 'public');
    
        // Create a new student record
        Students::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'school_id_path' => $path,
        ]);
    
        session()->flash('success', 'Sign-up Successful. Please wait for approval.'); // Flash success message
        return redirect()->to('/login'); // Redirect to login page
    }
    public function render()
    {
        return view('livewire.studentlogin'); // Ensure the correct layout path
    }
}
