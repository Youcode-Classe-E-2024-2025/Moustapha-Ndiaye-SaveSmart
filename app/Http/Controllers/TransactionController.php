<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Transaction;
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

    $request->validate([
        'description' => 'required|string|max:255',
        'amount' => 'required|numeric|min:0.01',
        'type' => 'required|in:income,expense',
        'categories_id' => 'required|exists:categories,id',
    ]);
    
    // dd($request->all());

    
    // Transaction::create([
    //     'description' => $request->description,
    //     'amount' => $request->amount,
    //     'type' => $request->type,
    //     'categories_id' => $request->categories_id, 
    //     'family_id' => $familyid,  
    // ]);
    $transaction = new Transaction();
    $transaction->description = $request->description;
    $transaction->amount = $request->amount;
    $transaction->type = $request->type;
    $transaction->categories_id = $request->categories_id;
    $transaction->family_id = $familyid;

    $transaction->save();

    return redirect()->back()->with('success', 'Transaction added.');
}



    public function show($id){
        
    }

    public function edit($id){
        
    }

    public function update(){
        
    }
}
