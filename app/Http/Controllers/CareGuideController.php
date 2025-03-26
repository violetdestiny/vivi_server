<?php

namespace App\Http\Controllers;

use App\Models\CareGuide;

class CareGuideController extends Controller
{
    public function index()
    {
        $guides = CareGuide::query()
            ->when(request('category'), function($query) {
                $query->where('category', request('category'));
            })
            ->latest()
            ->paginate(6); // Paginate with 6 items per page

        return view('care.index', compact('guides'));
    }
    public function show(CareGuide $careGuide)
    {
        return view('care.show', compact('careGuide'));
    }
}
