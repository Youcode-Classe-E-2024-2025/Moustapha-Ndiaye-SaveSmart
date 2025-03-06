<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashbord</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  
  <style>
    body {
      background-color: #DFDBE5;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='88' height='88' viewBox='0 0 88 88'%3E%3Cg fill='%239C92AC' fill-opacity='0.4'%3E%3Cpath fill-rule='evenodd' d='M29.42 29.41c.36-.36.58-.85.58-1.4V0h-4v26H0v4h28c.55 0 1.05-.22 1.41-.58h.01zm0 29.18c.36.36.58.86.58 1.4V88h-4V62H0v-4h28c.56 0 1.05.22 1.41.58zm29.16 0c-.36.36-.58.85-.58 1.4V88h4V62h26v-4H60c-.55 0-1.05.22-1.41.58h-.01zM62 26V0h-4v28c0 .55.22 1.05.58 1.41.37.37.86.59 1.41.59H88v-4H62zM18 36c0-1.1.9-2 2-2h10a2 2 0 1 1 0 4H20a2 2 0 0 1-2-2zm0 16c0-1.1.9-2 2-2h10a2 2 0 1 1 0 4H20a2 2 0 0 1-2-2zm16-26a2 2 0 0 1 2-2 2 2 0 0 1 2 2v4a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-4zm16 0a2 2 0 0 1 2-2 2 2 0 0 1 2 2v4a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-4zM34 58a2 2 0 0 1 2-2 2 2 0 0 1 2 2v4a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-4zm16 0a2 2 0 0 1 2-2 2 2 0 0 1 2 2v4a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-4zM34 78a2 2 0 0 1 2-2 2 2 0 0 1 2 2v6a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-6zm16 0a2 2 0 0 1 2-2 2 2 0 0 1 2 2v6a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-6zM34 4a2 2 0 0 1 2-2 2 2 0 0 1 2 2v6a2 2 0 0 1-2 2 2 2 0 0 1-2-2V4zm16 0a2 2 0 0 1 2-2 2 2 0 0 1 2 2v6a2 2 0 0 1-2 2 2 2 0 0 1-2-2V4zm-8 82a2 2 0 1 1 4 0v2h-4v-2zm0-68a2 2 0 1 1 4 0v10a2 2 0 1 1-4 0V18zM66 4a2 2 0 1 1 4 0v8a2 2 0 1 1-4 0V4zm0 72a2 2 0 1 1 4 0v8a2 2 0 1 1-4 0v-8zm-48 0a2 2 0 1 1 4 0v8a2 2 0 1 1-4 0v-8zm0-72a2 2 0 1 1 4 0v8a2 2 0 1 1-4 0V4zm24-4h4v2a2 2 0 1 1-4 0V0zm0 60a2 2 0 1 1 4 0v10a2 2 0 1 1-4 0V60zm14-24c0-1.1.9-2 2-2h10a2 2 0 1 1 0 4H58a2 2 0 0 1-2-2zm0 16c0-1.1.9-2 2-2h10a2 2 0 1 1 0 4H58a2 2 0 0 1-2-2zm-28-6a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm8 26a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm16 0a2 2 0 1 0 0-4 2 2 0 0 0 0 4zM36 20a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm16 0a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm-8-8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 68a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm16-34a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm16-12a2 2 0 1 0 0 4 6 6 0 1 1 0 12 2 2 0 1 0 0 4 10 10 0 1 0 0-20zm-64 0a2 2 0 1 1 0 4 6 6 0 1 0 0 12 2 2 0 1 1 0 4 10 10 0 1 1 0-20zm56-12a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 48a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm-48 0a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0-48a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm24 32a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-4a6 6 0 1 0 0-12 6 6 0 0 0 0 12zm36-36a6 6 0 1 1 0-12 6 6 0 0 1 0 12zm0-4a2 2 0 1 0 0-4 2 2 0 0 0 0 4zM10 44c0-1.1.9-2 2-2h8a2 2 0 1 1 0 4h-8a2 2 0 0 1-2-2zm56 0c0-1.1.9-2 2-2h8a2 2 0 1 1 0 4h-8a2 2 0 0 1-2-2zm8 24c0-1.1.9-2 2-2h8a2 2 0 1 1 0 4h-8a2 2 0 0 1-2-2zM3 68c0-1.1.9-2 2-2h8a2 2 0 1 1 0 4H5a2 2 0 0 1-2-2zm0-48c0-1.1.9-2 2-2h8a2 2 0 1 1 0 4H5a2 2 0 0 1-2-2zm71 0c0-1.1.9-2 2-2h8a2 2 0 1 1 0 4h-8a2 2 0 0 1-2-2zm6 66a6 6 0 1 1 0-12 6 6 0 0 1 0 12zm0-4a2 2 0 1 0 0-4 2 2 0 0 0 0 4zM8 86a6 6 0 1 1 0-12 6 6 0 0 1 0 12zm0-4a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0-68A6 6 0 1 1 8 2a6 6 0 0 1 0 12zm0-4a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm36 36a2 2 0 1 0 0-4 2 2 0 0 0 0 4z'/%3E%3C/g%3E%3C/svg%3E");
      min-height: 100vh;
      display: flex;
      /* justify-content: center; */
      /* align-items: center; */
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .avatar {
      background-color: #DFDBE5;
      color: white;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: bold;
      font-size: 1.5rem;
      transition: transform 0.3s ease;
    }
    .user-card:hover .avatar {
      transform: scale(1.05);
      /* box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05); */
    }
  </style>
</head>
<body>
  <div>
     <!-- User Profile and Navigation -->
  <div class="flex flex-col m-5">
    <!-- Avatar and User Info -->
    <div class="md:col-span-1 bg-white rounded-lg shadow-lg p-6 text-center">
      <div class="avatar w-24 h-24 rounded-full mb-4 mx-auto bg-[#9f84c7] text-white flex items-center justify-center text-3xl">
        {{ substr($user->firstname, 0, 1) }}
      </div>
      <h3 class="font-bold text-xl text-gray-800">{{ $user->firstname }}</h3>
      <p class="text-gray-500 mb-4">Family Financial Manager</p>
      
      <form action="{{url('profile')}}" method="Get" class="w-full">
        @csrf
        <button class="w-full text-gray-600 hover:text-[#9f84c7] transition-colors flex items-center justify-center gap-2 p-2 rounded-lg hover:bg-gray-100">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
            <path fill-rule="evenodd" d="M17 4.25A2.25 2.25 0 0 0 14.75 2h-5.5A2.25 2.25 0 0 0 7 4.25v2a.75.75 0 0 0 1.5 0v-2a.75.75 0 0 1 .75-.75h5.5a.75.75 0 0 1 .75.75v11.5a.75.75 0 0 1-.75.75h-5.5a.75.75 0 0 1-.75-.75v-2a.75.75 0 0 0-1.5 0v2A2.25 2.25 0 0 0 9.25 18h5.5A2.25 2.25 0 0 0 17 15.75V4.25Z" clip-rule="evenodd" />
            <path fill-rule="evenodd" d="M14 10a.75.75 0 0 0-.75-.75H3.704l1.048-.943a.75.75 0 1 0-1.004-1.114l-2.5 2.25a.75.75 0 0 0 0 1.114l2.5 2.25a.75.75 0 1 0 1.004-1.114l-1.048-.943h9.546A.75.75 0 0 0 14 10Z" clip-rule="evenodd" />
          </svg>
          <span class="hidden sm:inline">Back</span>
        </button>
      </form>
    </div>

    <!-- Financial Overview Charts -->
    <div class="md:col-span-3 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-6 flex-wrap">
      <!-- Income Chart -->
      <div class="bg-white rounded-lg shadow-lg">
        <h3 class="text-xl font-bold mb-4 flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          Income
        </h3>
        <canvas id="incomeChart" class="w-full h-48"></canvas>
        <h3 class="text-center font-bold text-green-600"> {{ $incomes->sum('total') }}</h3>
      </div>

      <!-- Expense Chart -->
      <div class="bg-white  rounded-lg shadow-lg">
        <h3 class="text-xl font-bold mb-4 flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
          </svg>
          Expense
        </h3>
        <canvas id="expenseChart" class="w-full h-48"></canvas>
        <h3 class="text-center font-bold text-red-600"> {{ $expenses->sum('total') }}</h3>
      </div>

      <!-- Budget Chart -->
      <div class="bg-white rounded-lg shadow-lg">
        <h3 class="text-xl font-bold mb-4 flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z" />
          </svg>
          Budget
        </h3>
        <canvas id="budgetChart" class="w-full h-48"></canvas>
        <h3 class="text-center font-bold text-purple-600"> {{ $current_budget }}</h3>
      </div>

      <!-- Optimize Chart -->
      <div class="bg-white rounded-lg shadow-lg p-2">
        <h3 class="text-xl font-bold mb-4 flex items-center">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
          </svg>
          Optimize
        </h3>
        <canvas id="optimizebudgetChart" class=""></canvas>
        <div class="flex justify-around mt-4 space-x-1">
          <button id="defaultButton" class="px-2 py-1 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#9f84c7] hover:bg-[#a49cb1]">Default</button>
          <button id="intelligentButton" class="px-2 py-1 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#9f84c7] hover:bg-[#a49cb1]">Intelligent</button>
        </div>
      </div>
    </div>
  </div>

  </div>
<!-- Container for Tables and Toggle Button -->
<div class="bg-white rounded-lg shadow-xl p-6 m-5">
    <!-- Toggle Button -->
    <div class="flex justify-center mb-6">
        <button id="toggleTables" class="inline-flex items-center px-6 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#9f84c7] hover:bg-[#a49cb1] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#a49cb1]">
            Switch to Transaction Receipts
        </button>
    </div>

    <!-- Goals Management Table (Visible by Default) -->
    <div id="goalsTable">
        <div class="bg-gradient-to-r from-[#968aa8] to-[#DFDBE5] p-6 text-white">
            <h2 class="text-2xl font-bold mb-2">Goals Management</h2>
            <p class="opacity-80">View your family's goals</p>
        </div>
        <div class="flex flex-row justify-between items-center mt-5 px-6">
            <p class="text-gray-500 mb-1">Start adding your goals.</p>
            <button id="openGoalModal" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#9f84c7] hover:bg-[#a49cb1] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#a49cb1]">
                + Add Goal
            </button>
        </div>

        <!-- Goals Table -->
        <div class="mt-2 p-6">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                            <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Priority</th>
                            <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Family</th>
                            <th scope="col" class="px-3 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($goals as $goal)
                        <tr class="hover:bg-gray-50">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $goal->title }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                                    {{ $goal->priority == 'high' ? 'bg-red-100 text-red-800' : 
                                       ($goal->priority == 'medium' ? 'bg-yellow-100 text-yellow-800' : 'bg-green-100 text-green-800') }}">
                                    {{ ucfirst($goal->priority) }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $goal->family->name ?? 'N/A' }}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <button onclick="editGoal({{ $goal->id }})" class="text-indigo-600 hover:text-indigo-900">Edit</button>
                                <form action="{{ route('goals.destroy', $goal->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

    <!-- Transaction Receipts Table (Hidden by Default) -->
    <div id="transactionsTable" class="hidden">
        <div class="bg-gradient-to-r from-[#968aa8] to-[#DFDBE5] p-2 text-white">
            <h2 class="text-2xl font-bold mb-2">Transaction Receipts</h2>
            <p class="opacity-80">View your family's financial activity</p>
        </div>
        <div class="p-2">
            <!-- Add Transactions -->
            <div class="flex flex-row justify-between items-center mb-2">
                <p class="text-gray-500">Start adding your income and expenses to track your family finances.</p>
                <button class="inline-flex items-center px-2 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#9f84c7] hover:bg-[#a49cb1] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#a49cb1]">
                    <svg class="-ml-1 mr-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                    </svg>
                    Transaction
                </button>
            </div>

            <!-- Transactions Table -->
            <div class="overflow-x-auto">
                <table>
                    <thead class="bg-gray-50">
                        <tr>
                            <!-- <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th> -->
                            <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Description</th>
                            <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                            <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                            <th scope="col" class="px-3 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                            <th scope="col" class="px-3 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach ($transactions as $transaction)
                        <tr class="hover:bg-gray-50">
                            <!-- <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $transaction->created_at->format('Y-m-d') }}</td> -->
                            <td class="px-3 py-4 whitespace-nowrap text-sm font-medium text-gray-900">{{ $transaction->description }}</td>
                            <td class="px-3 py-4 whitespace-nowrap text-sm text-gray-500">{{ $transaction->category->name }}</td>
                            <td class="px-3 py-4 whitespace-nowrap">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $transaction->type == 'expense' ? 'bg-red-100 text-red-800' : 'bg-green-100 text-green-800' }}">
                                    {{ ucfirst($transaction->type) }}
                                </span>
                            </td>
                            <td class="px-3 py-2 whitespace-nowrap text-sm text-right font-medium {{ $transaction->type == 'expense' ? 'text-red-600' : 'text-green-600' }}">
                                {{ $transaction->type == 'expense' ? '-$' : '+$' }}{{ number_format($transaction->amount, 2) }}
                            </td>
                            <td class="px-3 py-2 whitespace-nowrap text-right text-sm font-medium">
                                <a href="#" onclick="openModal({{ $transaction->id }})" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                <form action="{{ route('transactions.destroy', $transaction->id) }}" method="POST" class="inline" onsubmit="return confirm('Are you sure you want to delete this transaction?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900 ml-4">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
 <!-- Add Transaction Modal -->
 <div id="addTransactionModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
            <div class="bg-white rounded-lg shadow-xl max-w-md w-full mx-4">
              <div class="flex justify-between items-center p-4 border-b">
                <h3 class="text-lg font-medium text-gray-900">Add New Transaction</h3>
                <button id="closeTransactionModal" class="text-gray-400 hover:text-gray-500">
                  <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
              
              <div class="p-6">
                <form id="addTransactionForm" action="{{url('store')}}" method="POST">
                  @csrf
                  <div class="mb-4">
                    <label for="description" class="block text-gray-700 font-medium mb-2">Description</label>
                    <input type="text" id="description" name="description" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#a49cb1] focus:border-transparent" required>
                  </div>
                  
                  <div class="mb-4">
                    <label for="amount" class="block text-gray-700 font-medium mb-2">Amount</label>
                    <input type="number" id="amount" name="amount" step="0.01" min="0.01" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#a49cb1] focus:border-transparent" required>
                  </div>
                  
                  <div class="mb-4">
                    <label for="type" class="block text-gray-700 font-medium mb-2">Type</label>
                    <select id="type" name="type" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#a49cb1] focus:border-transparent" required>
                      <option value="">Select Type</option>
                      <option value="income">Income</option>
                      <option value="expense">Expense</option>
                    </select>
                  </div>
                  
                  <div class="mb-6">
                  <label for="category" class="block text-gray-700 font-medium mb-2">Category</label>
                  <select id="category" name="categories_id" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#a49cb1] focus:border-transparent" required>
                  <option value="">Select Category</option>
                      @foreach ($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                  </select>
                   </div>

                  
                  <div class="flex gap-4">
                    <button type="button" id="cancelTransactionBtn" class="w-full bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-2 px-4 rounded-md transition duration-300">
                      Cancel
                    </button>
                    <button type="submit" class="w-full bg-[#9f84c7] hover:bg-[#a49cb1] text-white font-medium py-2 px-4 rounded-md transition duration-300">
                      Save Transaction
                    </button>
                  </div>
                </form>
              </div>
  </div>
</div>
</div>
</div>
</div>


 <!-- Add/Edit Goal Modal -->
<div id="addgoalModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-xl max-w-md w-full mx-4">
        <div class="flex justify-between items-center p-4 border-b">
            <h3 class="text-lg font-medium text-gray-900">Goal Details</h3>
            <button id="closeGoalModal" class="text-gray-400 hover:text-gray-500">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        
        <div class="p-6">
            <form id="goalForm" action="{{ route('goals.store') }}" method="POST">
                @csrf
                <input type="hidden" id="goal_id" name="id">

                <div class="mb-4">
                    <label for="title" class="block text-gray-700 font-medium mb-2">Title</label>
                    <input type="text" id="title" name="title" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#a49cb1] focus:border-transparent" required>
                </div>

                <div class="mb-4">
                    <label for="priority" class="block text-gray-700 font-medium mb-2">Priority</label>
                    <select id="priority" name="priority" class="w-full px-3 py-2 border rounded-md">
                        <option value="high">High</option>
                        <option value="medium">Medium</option>
                        <option value="low">Low</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="family_id" class="block text-gray-700 font-medium mb-2">Family</label>
                    <select id="family_id" name="family_id" class="w-full px-3 py-2 border rounded-md">
                        @foreach ($families as $family)
                            <option value="{{ $family->id }}">{{ $family->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex gap-4 justify-between">
                    <button type="button" id="cancelGoalBtn" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gray-200 hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#a49cb1]">Cancel</button>
                    <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-[#9f84c7] hover:bg-[#a49cb1] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#a49cb1]">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Update Goal Modal -->
<div id="updateGoalModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white rounded-lg shadow-xl max-w-md w-full mx-4">
        <div class="flex justify-between items-center p-4 border-b">
            <h3 class="text-lg font-medium text-gray-900">Update Goal</h3>
            <button id="closeUpdateGoalModal" class="text-gray-400 hover:text-gray-500">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div class="p-6">
            <form id="updateGoalForm" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" id="update_goal_id" name="goal_id">

                <div class="mb-4">
                    <label for="update_title" class="block text-gray-700 font-medium mb-2">Title</label>
                    <input type="text" id="update_title" name="title" class="w-full px-3 py-2 border rounded-md" required>
                </div>

                <div class="mb-4">
                    <label for="update_priority" class="block text-gray-700 font-medium mb-2">Priority</label>
                    <select id="update_priority" name="priority" class="w-full px-3 py-2 border rounded-md">
                        <option value="high">High</option>
                        <option value="medium">Medium</option>
                        <option value="low">Low</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label for="update_family_id" class="block text-gray-700 font-medium mb-2">Family</label>
                    <select id="update_family_id" name="family_id" class="w-full px-3 py-2 border rounded-md">
                        @foreach ($families as $family)
                            <option value="{{ $family->id }}">{{ $family->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex gap-4">
                    <button type="button" id="cancelUpdateGoalBtn" class="w-full bg-gray-200 hover:bg-gray-300 py-2 rounded-md">Cancel</button>
                    <button type="submit" class="w-full bg-blue-500 hover:bg-blue-700 text-white py-2 rounded-md">Update Goal</button>
                </div>
            </form>
        </div>
    </div>
</div>

  </div>
</div>
         
<!-- JavaScript for Toggle Functionality -->
<script>
    const toggleButton = document.getElementById('toggleTables');
    const goalsTable = document.getElementById('goalsTable');
    const transactionsTable = document.getElementById('transactionsTable');

    toggleButton.addEventListener('click', () => {
        // Toggle visibility of tables
        goalsTable.classList.toggle('hidden');
        transactionsTable.classList.toggle('hidden');

        // Update button text
        if (goalsTable.classList.contains('hidden')) {
            toggleButton.textContent = 'Switch to Goals Management';
        } else {
            toggleButton.textContent = 'Switch to Transaction Receipts';
        }
    });
</script>
<script>
</script>


<script>
document.getElementById('openGoalModal').addEventListener('click', function() {
    document.getElementById('addgoalModal').classList.remove('hidden');
});

document.getElementById('closeGoalModal').addEventListener('click', function() {
    document.getElementById('addgoalModal').classList.add('hidden');
});

function editGoal(goal) {
    document.getElementById('goal_id').value = goal.id;
    document.getElementById('title').value = goal.title;
    document.getElementById('amount').value = goal.amount;
    document.getElementById('priority').value = goal.priority;
    document.getElementById('family_id').value = goal.family_id;
    document.getElementById('goalModal').classList.remove('hidden');
}
</script>
<script>
// Close update modal when close button is clicked
document.getElementById('closeUpdateGoalModal').addEventListener('click', function() {
    document.getElementById('updateGoalModal').classList.add('hidden');
});

// Cancel button functionality for update modal
document.getElementById('cancelUpdateGoalBtn').addEventListener('click', function() {
    document.getElementById('updateGoalModal').classList.add('hidden');
});

// Edit goal function for updating
function editGoal(id, title, priority, family_id) {
    // Set form action
    document.getElementById('updateGoalForm').action = "{{ route('goals.update', '') }}/" + id;

    // Fill form with goal data
    document.getElementById('update_goal_id').value = id;  // Correspond au champ hidden dans ton formulaire
    document.getElementById('update_title').value = title;
    document.getElementById('update_priority').value = priority;
    document.getElementById('update_family_id').value = family_id;

    // Show modal
    document.getElementById('updateGoalModal').classList.remove('hidden');
}
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Récupération des données depuis Blade
    const incomesData = @json($incomes);
    const expensesData = @json($expenses);
    const goalData = @json($goalData);
    const currentBudget = @json($current_budget);

    // Logs de débogage
    console.log('Données des objectifs:', goalData);

    // Création des charts pour les revenus, dépenses et budget
    function createFinancialCharts() {
        // Income Chart
        const incomeChart = new Chart(document.getElementById('incomeChart'), {
            type: 'line',
            data: {
                labels: incomesData.map(income => income.date),
                datasets: [{
                    label: 'Revenus',
                    data: incomesData.map(income => income.total),
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: { y: { beginAtZero: true } }
            }
        });

        // Expense Chart
        const expenseChart = new Chart(document.getElementById('expenseChart'), {
            type: 'line',
            data: {
                labels: expensesData.map(expense => expense.date),
                datasets: [{
                    label: 'Dépenses',
                    data: expensesData.map(expense => expense.total),
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: { y: { beginAtZero: true } }
            }
        });

        // Budget Chart
        const budgetChart = new Chart(document.getElementById('budgetChart'), {
            type: 'line',
            data: {
                labels: incomesData.map(income => income.date),
                datasets: [{
                    label: 'Budget',
                    data: incomesData.map((income, index) => 
                        income.total - (expensesData[index]?.total || 0)
                    ),
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: { y: { beginAtZero: true } }
            }
        });
    }

    // Fonction pour créer le chart des objectifs
    function createGoalChart(data, backgroundColors) {
        const optimizeChartCtx = document.getElementById('optimizebudgetChart');
        
        // Destruction du chart existant s'il y en a un
        if (window.optimizeChart) {
            window.optimizeChart.destroy();
        }

        // Création du nouveau chart
        window.optimizeChart = new Chart(optimizeChartCtx, {
            type: 'pie',
            data: {
                labels: data.map(goal => goal.title),
                datasets: [{
                    data: data.map(goal => goal.percent),
                    backgroundColor: data.map(goal => goal.color),
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: { position: 'none' },
                    tooltip: {
                        callbacks: {
                            label: function(context) {
                                return `${context.label}: ${context.formattedValue}%`;
                            }
                        }
                    }
                }
            }
        });
    }

    // Initialisation des charts
    createFinancialCharts();
    createGoalChart(goalData);

    // Gestion des boutons
    const defaultButton = document.getElementById('defaultButton');
    const intelligentButton = document.getElementById('intelligentButton');

    if (defaultButton) {
        defaultButton.addEventListener('click', function() {
            // Méthode 50/30/20 classique
            const defaultData = [
                { title: 'Besoins', percent: 50, color: 'rgba(54, 162, 235, 0.6)' },
                { title: 'Désirs', percent: 30, color: 'rgba(255, 99, 132, 0.6)' },
                { title: 'Épargne', percent: 20, color: 'rgba(75, 192, 192, 0.6)' }
            ];
            createGoalChart(defaultData);
        });
    }

    if (intelligentButton) {
        intelligentButton.addEventListener('click', function() {
            // Méthode de calcul de probabilité basée sur les objectifs
            createGoalChart(goalData);
        });
    }
});
</script>


</body>
</html>