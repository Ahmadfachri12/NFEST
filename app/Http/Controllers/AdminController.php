<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $totalUser = User::count();
        $eventStats = Event::select('category', DB::raw('count(*) as total'))
                        ->groupBy('category')
                        ->pluck('total', 'category');

        return view('dashboard.index', compact('totalUser', 'eventStats'));
    }
}
