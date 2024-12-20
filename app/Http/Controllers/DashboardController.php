<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        $totalMembersCount = Member::count();

        $last30DaysVisitsCount = Member::whereNotNull('last_visited_date')
            ->where('last_visited_date', '>=', now()->subDays(30))
            ->count();

        $last60DaysVisitsCount = Member::whereNotNull('last_visited_date')
            ->where('last_visited_date', '>=', now()->subDays(60))
            ->count();

        $last90DaysVisitsCount = Member::whereNotNull('last_visited_date')
            ->where('last_visited_date', '>=', now()->subDays(90))
            ->count();

        $last10FamilyMemberVisits = Member::with('family')
            ->whereNotNull('last_visited_date')
            ->orderBy('last_visited_date', 'desc')
            ->take(10)
            ->get();

        return view('dashboard', compact(
            'totalMembersCount',
            'last30DaysVisitsCount',
            'last60DaysVisitsCount',
            'last90DaysVisitsCount',
            'last10FamilyMemberVisits'
        ));
    }
}
