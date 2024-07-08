<?php

namespace App\Http\Controllers;

use App\Models\Award;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AwardController extends Controller
{
    /**
     * Display a listing of the AWARD.
     */
    public function index()
    {
        // Get all awards
    $awards = Award::all();

    // Render view
    return view('pages.admin.index', compact('awards'));
    }

    /**
     * Show the form for creating a new AWARD.
     */
    public function create()
    {
        // Render view
        return view('pages.admin.create');
    }

    /**
     * Store a newly created AWARD in storage.
     */
    public function store(Request $request)
    {
        // Validate award data including file upload
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|file|max:10240', // max 10MB, optional
        ]);

        // Handle file upload
        $imagePath = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('public/uploads/awards', $fileName);
        }

        // Store award
        Award::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $imagePath ? 'uploads/awards/' . $fileName : null,
        ]);

        // Redirect after successful store
        return redirect('/admin/award')->with('success', 'Award added successfully.');
    }

    /**
     * Display the specified AWARD.
     */
    public function show($id)
    {
        // Find Award by ID
        $award = Award::findOrFail($id);

        // Render view 
        return view('pages.admin.show', compact('award'));
    }

    /**
     * Show the form for editing the specified AWARD.
     */
    public function edit($id)
    {
        // Find Award by ID
        $award = Award::findOrFail($id);

        // Render view
        return view('pages.admin.edit', compact('award'));
    }

    /**
     * Update the specified AWARD in storage.
     */
    public function update(Request $request, $id)
    {
        // Find Award by ID
        $award = Award::findOrFail($id);

        // Validate award data including file upload
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|file|max:10240', // max 10MB, optional
        ]);

        // Handle file upload
        if ($request->hasFile('image')) {
            // Delete old file if exists
            if ($award->image) {
                Storage::delete('public/' . $award->image);
            }

            // Upload new file
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $image = $image->storeAs('public/uploads/awards', $fileName);

            // Update award image path
            $award->image = 'uploads/awards/' . $fileName;
        }

        // Update title and description
        $award->title = $request->title;
        $award->description = $request->description;

        // Save the updated award
        $award->save();

        // Redirect after successful update
        return redirect('/admin/award')->with('success', 'Award updated successfully.');
    }

    /**
     * Remove the specified AWARD from storage.
     */
    public function destroy($id)
    {
        // Find Award by ID
        $award = Award::findOrFail($id);

        // Delete file from storage
        if ($award->imagePath) {
            Storage::delete('public/' . $award->imagePath);
        }

        // Delete award from database
        $award->delete();

        // Redirect after successful deletion
        return redirect('/admin/award')->with('success', 'Award deleted successfully.');
    }
}
