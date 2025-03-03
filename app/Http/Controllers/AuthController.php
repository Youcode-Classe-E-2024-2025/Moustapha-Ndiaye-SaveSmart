<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Family;
use App\Models\User;
use App\Models\Category;
use App\Models\Transaction;


class AuthController extends Controller
{
    public function showDashboard($id)
    {
        $user = User::find($id)->firstname;
        $categories = Category::all();
        $transactions = Transaction::all();
    
        // Get the income and expense evolution by date
        $incomes = Transaction::where('type', 'income')
            ->selectRaw('DATE(created_at) as date, SUM(amount) as total')
            ->groupBy('date')
            ->orderBy('date')
            ->get();
    
        $expenses = Transaction::where('type', 'expense')
            ->selectRaw('DATE(created_at) as date, SUM(amount) as total')
            ->groupBy('date')
            ->orderBy('date')
            ->get();
    
        // Calculate the current budget: total income - total expenses
        $total_income = Transaction::where('type', 'income')->sum('amount');
        $total_expense = Transaction::where('type', 'expense')->sum('amount');
        $current_budget = $total_income - $total_expense;
    
        return view('user.dashboard', compact('user', 'categories', 'transactions', 'incomes', 'expenses', 'current_budget'));
    }
    

    public function showProfilPage(){
        $family = Auth::user();
        $users = $family->users;
        return view('user.profile', [
            'name' => $family->name,
            'users' => $users,
        ]);
    }
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:families',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = Family::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        

        return view('auth.login')->with('success', 'Registration successful');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); 
            return to_route('user.profile'); 
        }

        
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return to_route('login');
    }
}
