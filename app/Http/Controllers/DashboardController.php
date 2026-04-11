<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalComplaints = Complaint::count();
        $openComplaints = Complaint::where('status', 'open')->count();
        $inProgressComplaints = Complaint::where('status', 'in_progress')->count();
        $closedComplaints = Complaint::where('status', 'closed')->count();
        $recentComplaints = Complaint::with('user')->latest()->take(5)->get();
        
        return view('user.dashboard.index', compact(
            'totalComplaints',
            'openComplaints',
            'inProgressComplaints',
            'closedComplaints',
            'recentComplaints'
        ));
    }
}