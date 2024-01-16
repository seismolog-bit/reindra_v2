<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use League\CommonMark\Node\Query\ExpressionInterface;

class ExerienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::orderBy('type', 'asc')->orderBy('start_year', 'desc')->get();

        return view('admin.experience', compact('experiences'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required', 
            'type' => 'required', 
            'description' => 'required', 
            'start_year' => 'required',
        ]);

        Experience::updateOrCreate([
            'id' => $request->id
        ], [
            'title' => $request->title, 
            'type' => $request->type, 
            'description' => $request->description, 
            'start_year' => $request->start_year,
            'end_year' => $request->end_year,
        ]);

        return redirect()->back()->with('success', 'Data saved successfully');
    }

    public function edit($id)
    {
        $experience = Experience::find($id);
        return response()->json($experience);
    }

    public function destroy(Experience $experience)
    {
        $experience->delete();

        return redirect()->back()->with('success', 'Deleted successfully');
    }
}
