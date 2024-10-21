<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentPreferenceController extends Controller
{
    public function showProfessionList($profession)
    {
        // Manually map professions that don't follow a simple rule
        $manualTitles = [
            'dataanalyst' => 'Data Analyst',
            'peerreviewer' => 'Peer Reviewer',
        ];

        // Same list of professionals for all professions
        $professionals = [['name' => 'John Cris A. Demafeliz', 'profile_picture' => 'https://via.placeholder.com/40', 'is_active' => true, 'last_active' => 'Active'], ['name' => 'Ella Marie Juan John D. Dinglasan', 'profile_picture' => 'https://via.placeholder.com/40', 'is_active' => false, 'last_active' => '3 hours ago'], ['name' => 'Anna Clark', 'profile_picture' => 'https://via.placeholder.com/40', 'is_active' => true, 'last_active' => 'Active'], ['name' => 'Bob Harris', 'profile_picture' => 'https://via.placeholder.com/40', 'is_active' => false, 'last_active' => '5 hours ago']];

        // If the profession exists in manualTitles, use that title
        if (array_key_exists($profession, $manualTitles)) {
            $professionTitle = $manualTitles[$profession];
        } else {
            // Otherwise, automatically format the profession slug
            $professionTitle = ucwords(str_replace(['-', '_'], ' ', $profession));
        }

        return view('professionlist', [
            'profession' => $professionTitle, // Dynamic conversion or manual mapping
            'professionals' => $professionals,
        ]);
    }
}
