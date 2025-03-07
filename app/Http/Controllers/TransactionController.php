<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;



class TransactionController extends Controller
{
    public function index(){
        
    }

    public function create(Request $request){
        $request = validate([

        ]);
    }

    public function store(Request $request)
{

    $family = Auth::user(); 
    $familyid = $family->id;

    $validated = $request->validate([
        'author' => 'required|exists:users,id',
        'description' => 'required|string|max:255',
        'amount' => 'required|numeric|min:0.01',
        'type' => 'required|in:income,expense',
        'categories_id' => 'required|exists:categories,id'
    ]);
    
    // dd($validated);
    
    // Transaction::create([
    //     'description' => $validated['description'],
    //     'amount' => $validated['amount'],
    //     'type' => $validated['type'],
    //     'categories_id' => $validated['categories_id'],
    //     'author' => User::find($validated['author'])->firstname, 
        
    // ]);
    $transaction = new Transaction();
    $transaction->author = $request->author;
    $transaction->description = $request->description;
    $transaction->amount = $request->amount;
    $transaction->type = $request->type;
    $transaction->categories_id = $request->categories_id;
    $transaction->save();


    // Transaction::create($validated);

    return redirect()->back()->with('success', 'Transaction added.');
}



    public function show($id){
        
    }

    public function edit($id)
    {
        $transaction = Transaction::findOrFail($id);
        $categories = Category::all(); 
        return view('user.dashboard', compact('transaction', 'categories'));
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'author' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0.01',
            'type' => 'required|in:income,expense',
            'categories_id' => 'required|exists:categories,id',
        ]);

        $transaction = Transaction::findOrFail($id);
        $transaction->update([
            'author' => $request->author,
            'description' => $request->description,
            'amount' => $request->amount,
            'type' => $request->type,
            'categories_id' => $request->categories_id,
        ]);

        return redirect()->back()->with('success', 'Transaction updated.');
    }

    public function destroy($id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->delete();

        return redirect()->back()->with('success', 'Transaction deleted.');
    }
}
