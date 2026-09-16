<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        DB::transaction(function () use ($validated) {
            Project::create([
                'name' => $validated['name'],
                'owner_id' => Auth::id(),
            ]);
        });

        return redirect()->back()
            ->with('success', 'Project berhasil dibuat.');
    }
}