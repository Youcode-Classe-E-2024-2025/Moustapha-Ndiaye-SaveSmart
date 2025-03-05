<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Goals;
use Illuminate\Support\Facades\Auth;
class GoalController extends Controller
{
    public function calculerCombinaison($n, $k)
    {
        if ($k > $n) {
            return 0;
        }

        $factorielN = $this->factoriel($n);
        $factorielK = $this->factoriel($k);
        $factorielNK = $this->factoriel($n - $k);

        $combinaison = $factorielN / ($factorielK * $factorielNK);

        return $combinaison;
    }

    private function factoriel($n)
    {
        if ($n <= 1) {
            return 1;
        }

        $resultat = 1;
        for ($i = 2; $i <= $n; $i++) {
            $resultat *= $i;
        }

        return $resultat;
    }

    public function optimizeBudget(){

        $goal = Goals::all()->title;
        $n = Goals::all()->sum();
        // option 3/2/1
        $priority = ['high' => 3, 'medium' => 2, 'low' => 1];

        $highPercent = calculerCombinaison(1, 3)*calculerCombinaison($this->high, 6)/calculerCombinaison(1, $n);
        $mediumPercent = calculerCombinaison(1, 3)*calculerCombinaison($this->medium, 6)/calculerCombinaison(1, $n);
        $lowPercent = calculerCombinaison(1, 3)*calculerCombinaison($this->low, 6)/calculerCombinaison(1, $n);
        return view('use.dashboard', compact(
            'highPercent', 'mediumPercent', 'lowPercent'
        ));

    }
    
    public function store(Request $request)
    {
        // Get the authenticated family
        $family = Auth::user();
        $familyId = $family->id;

        // Validate the request data
        $request->validate([
            'title' => 'required|string|max:255',
            // 'amount' => 'required|numeric|min:0.01',
            'priority' => 'required|in:high,medium,low',
        ]);

        // Create the goal manually
        $goal = new Goals();
        $goal->title = $request->title;
        // $goal->amount = $request->amount;
        $goal->priority = $request->priority;
        $goal->family_id = $familyId;
        $goal->save();

        return redirect()->back()->with('success', 'Goal added successfully.');
    }
    public function update(Request $request, $id)
{
    // Get the authenticated family
    $family = Auth::user();
    $familyId = $family->id;

    // Validate the request data
    $data = $request->validate([
        'title' => 'required|string|max:255',
        'priority' => 'required|in:high,medium,low',
    ]);

    // Find the goal by ID
    $goal = Goals::findOrFail($id);

    // Check if the goal belongs to the authenticated family
    if ($goal->family_id !== $familyId) {
        return redirect()->back()->with('error', 'You cannot edit a goal that does not belong to your family.');
    }

    // Update goal properties
    $goal->title = $data['title'];
    $goal->priority = $data['priority'];
    $goal->family_id = $familyId; // You might not need to update this if it's already set correctly

    // Save changes
    $goal->save();

    return redirect()->back()->with('success', 'Goal updated successfully.');
}



    // Delete a goal
    public function destroy(Goals $goal)
    {
        $goal->delete();
        return redirect()->back();
    }

}
