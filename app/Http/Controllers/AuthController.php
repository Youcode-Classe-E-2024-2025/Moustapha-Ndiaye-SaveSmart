<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Family;
use App\Models\User;
use App\Models\Category;
use App\Models\Transaction;
use App\Models\Goals;



class AuthController extends Controller

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
    public function showDashboard($id)
{
    $user = User::find($id);
    if (!$user) {
        abort(404, 'User not found');
    }

    $categories = Category::all();
    $transactions = Transaction::all();
    $goals = Goals::all();
    $n = $goals->count();  
    
    $priorityWeights = ['high' => 3, 'medium' => 2, 'low' => 1];

    $priorityPercentages = [];

    foreach ($priorityWeights as $priority => $weight) {
        $priorityPercentages[$priority] = $this->calculerCombinaison(3, 1) 
            * $this->calculerCombinaison(6, $weight) 
            / $this->calculerCombinaison($n, 1);
    }


    $highPercent = $priorityPercentages['high'];
    $mediumPercent = $priorityPercentages['medium'];
    $lowPercent = $priorityPercentages['low'];


    $goalData = $goals->map(function ($goal) use ($n, $priorityWeights, $highPercent, $mediumPercent, $lowPercent) {
        $percent = match ($goal->priority) {
            'high' => $highPercent,
            'medium' => $mediumPercent,
            'low' => $lowPercent,
            default => 10
        };

        return [
            'title' => $goal->title,
            'percent' => $percent , 
            'color' => $this->generateColorForGoal($goal->id) 
        ];
    });
    // dd($goalData);

    $families = Family::all();

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

    $total_income = Transaction::where('type', 'income')->sum('amount');
    $total_expense = Transaction::where('type', 'expense')->sum('amount');
    $current_budget = $total_income - $total_expense;

    return view('user.dashboard', compact('families', 'user', 'categories', 'transactions', 'incomes', 'expenses', 'current_budget', 'goals', 'goalData'));
}

//     public function showDashboard($id)
// {
    
//     $user = User::find($id);
//     if (!$user) {
//         abort(404, 'User not found');
//     }

   
//     $categories = Category::all();
//     $transactions = Transaction::all();
//     $goals = Goals::all();
//     $n = $goals->count();  

    
//     $goalData = $goals->map(function ($goal) use ($n) {
//         return [
//             'title' => $goal->title,
//             'percent' => ($goal->priority == 'high' ? 1 : ($goal->priority == 'medium' ? 0.75 : 0.5)) * 100 / $n, 
//             'color' => $this->generateColorForGoal($goal) 
//         ];
//     });

//     $families = Family::all();

//     $incomes = Transaction::where('type', 'income')
//         ->selectRaw('DATE(created_at) as date, SUM(amount) as total')
//         ->groupBy('date')
//         ->orderBy('date')
//         ->get();

//     $expenses = Transaction::where('type', 'expense')
//         ->selectRaw('DATE(created_at) as date, SUM(amount) as total')
//         ->groupBy('date')
//         ->orderBy('date')
//         ->get();

//     $total_income = Transaction::where('type', 'income')->sum('amount');
//     $total_expense = Transaction::where('type', 'expense')->sum('amount');
//     $current_budget = $total_income - $total_expense;

//     return view('user.dashboard', compact('families', 'user', 'categories', 'transactions', 'incomes', 'expenses', 'current_budget', 'goals', 'goalData'));
// }

// public function generateColorForGoal($goal)
// {
   
//     $hue = (int)$goal->id * 50 % 360; 
//     return "hsl($hue, 100%, 50%)"; 
// }
public function generateColorForGoal($goalId)
{
    srand($goalId); // Assure une couleur stable pour un même objectif
    return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
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
