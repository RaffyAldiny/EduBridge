<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads; 
use App\Models\Professionals;
use Illuminate\Support\Facades\Hash;

class Professionallogin extends Component
{
    use WithFileUploads;
    public $showModal = false;
    public $isLogin = true; 
    public $name, $email, $password, $resume;

    protected $rules = [
        'name' => 'required|string',
        'email' => 'required|email|unique:professionals,email',
        'password' => 'required',
        'resume' => 'required|file|max:10240', // 1MB Max
    ];

    public function signup()
    {
        $this->validate($this->rules);

        $path = $this->resume->store('resumes', 'public');

        Professionals::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
            'resume_path' => $path,
        ]);

        session()->flash('success', 'Sign-up Successful. Please wait for approval.');
        return redirect()->to('/professormessage'); // Updated redirection
    }

    public function login()
    {
        $credentials = ['email' => $this->email, 'password' => $this->password];
    
        if (auth()->guard('professionals')->attempt($credentials)) {
            // Redirect to the professormessage page after successful login
            return redirect()->to('/studentlist'); // Updated redirection
        }
    
        // Flash an error message if login fails
        session()->flash('error', 'Invalid Login Credentials');
    }
    
    public function render()
    {
        return view('livewire.professionallogin');
    }
}
