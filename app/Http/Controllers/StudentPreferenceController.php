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

        // List of professionals
        $professionals = [
            ['name' => 'John Cris A. Demafeliz', 'profile_picture' => 'https://via.placeholder.com/40', 'is_active' => true, 'last_active' => 'Active'],
            ['name' => 'Ella Marie Juan John D. Dinglasan', 'profile_picture' => 'https://via.placeholder.com/40', 'is_active' => false, 'last_active' => '3 hours ago'],
            ['name' => 'Margarita Kurapika D. Dela Cruz', 'profile_picture' => 'https://via.placeholder.com/40', 'is_active' => false, 'last_active' => '4 hours ago'],
            ['name' => 'Cutie Katrina Ysabelle Ysabelle Torres', 'profile_picture' => 'https://via.placeholder.com/40', 'is_active' => false, 'last_active' => 'a day ago'],
            ['name' => 'May June July August D. Tado', 'profile_picture' => 'https://via.placeholder.com/40', 'is_active' => false, 'last_active' => '3 days ago'],
        ];

        // Sorting logic
        usort($professionals, function ($a, $b) {
            // Active professionals first
            if ($a['is_active'] && !$b['is_active']) return -1;
            if (!$a['is_active'] && $b['is_active']) return 1;

            // If neither is active, sort by last active time
            $timeA = $this->parseTimePeriod($a['last_active']);
            $timeB = $this->parseTimePeriod($b['last_active']);

            return $timeA - $timeB;
        });

        // If the profession exists in manualTitles, use that title
        $professionTitle = array_key_exists($profession, $manualTitles)
            ? $manualTitles[$profession]
            : ucwords(str_replace(['-', '_'], ' ', $profession));

        return view('professionlist', [
            'profession' => $professionTitle,
            'professionals' => $professionals, // Already sorted
        ]);
    }

    // Helper function to convert 'last_active' time to comparable integer (hours)
    private function parseTimePeriod($lastActive)
    {
        if ($lastActive === 'Active') {
            return 0; // Active is the highest priority
        } elseif (preg_match('/(\d+)\s+hours?/', $lastActive, $matches)) {
            return intval($matches[1]); // Convert hours to integer
        } elseif (preg_match('/(\d+)\s+days?/', $lastActive, $matches)) {
            return intval($matches[1]) * 24; // Convert days to hours
        } elseif (preg_match('/(a|an)\s+hour/', $lastActive)) {
            return 1; // 'an hour ago' => 1 hour
        } elseif (preg_match('/(a|an)\s+day/', $lastActive)) {
            return 24; // 'a day ago' => 24 hours
        } else {
            return PHP_INT_MAX; // If time is not available, push to the bottom
        }
    }
    
}
