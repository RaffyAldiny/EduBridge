<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentPreferenceController extends Controller
{
    public function showProfessionList($profession)
    {
        // Same list of professionals for all professions
        $professionals = [
            ['name' => 'John Cris A. Demafeliz', 'profile_picture' => 'https://via.placeholder.com/40', 'is_active' => true, 'last_active' => 'Active'],
            ['name' => 'Ella Marie Juan John D. Dinglasan', 'profile_picture' => 'https://via.placeholder.com/40', 'is_active' => false, 'last_active' => '3 hours ago'],
            ['name' => 'Anna Clark', 'profile_picture' => 'https://via.placeholder.com/40', 'is_active' => true, 'last_active' => 'Active'],
            ['name' => 'Bob Harris', 'profile_picture' => 'https://via.placeholder.com/40', 'is_active' => false, 'last_active' => '5 hours ago']
        ];

        return view('professionlist', ['profession' => $profession, 'professionals' => $professionals]);
    }
}
