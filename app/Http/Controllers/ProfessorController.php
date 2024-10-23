<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    public function showStudentList()
    {
        // List of students
        $students = [
            ['name' => 'Earvin John T. Dela Cruz', 'profile_picture' => 'https://via.placeholder.com/40', 'message' => 'Good morning sir, avail po ba kayo?', 'time' => '2h', 'status_color' => 'bg-green-500'],
            ['name' => 'Jhunwil B. Briones', 'profile_picture' => 'https://via.placeholder.com/40', 'message' => 'Thank you for all the help sir!', 'time' => '3h', 'status_color' => 'bg-red-500'],
            ['name' => 'Sean John C. Cadag', 'profile_picture' => 'https://via.placeholder.com/40', 'message' => 'Reacted ❤️ to your message', 'time' => '1d', 'status_color' => 'bg-red-500'],
            ['name' => 'Christian Hans Y. Yap', 'profile_picture' => 'https://via.placeholder.com/40', 'message' => 'Thank you sir, we have S...', 'time' => '1w', 'status_color' => 'bg-gray-500'],
            ['name' => 'John Lester D. Ramones', 'profile_picture' => 'https://via.placeholder.com/40', 'message' => 'Thank you sir!', 'time' => '2w', 'status_color' => 'bg-gray-500'],
        ];

        return view('studentlist', [
            'students' => $students, 
        ]);
    }
}
