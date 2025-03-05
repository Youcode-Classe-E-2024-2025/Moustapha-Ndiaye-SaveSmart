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
  <!-- avatar -->
  <div class="bg-white p-4 flex flex-col items-center rounded-lg m-3">
          <div class="avatar w-20 h-20 rounded-full mb-3 ">
          {{ substr($user->firstname, 0, 1) }}
          </div>
          <h3 class="font-bold text-xl text-gray-800">{{$user->firstname}}</h3>
          <form action="{{url('profile')}}" method="Get">
            @csrf
          <button class="text-gray-600 hover:text-red-600 transition-colors flex items-center gap-2 p-2 rounded-lg hover:bg-gray-100">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
            <path fill-rule="evenodd" d="M17 4.25A2.25 2.25 0 0 0 14.75 2h-5.5A2.25 2.25 0 0 0 7 4.25v2a.75.75 0 0 0 1.5 0v-2a.75.75 0 0 1 .75-.75h5.5a.75.75 0 0 1 .75.75v11.5a.75.75 0 0 1-.75.75h-5.5a.75.75 0 0 1-.75-.75v-2a.75.75 0 0 0-1.5 0v2A2.25 2.25 0 0 0 9.25 18h5.5A2.25 2.25 0 0 0 17 15.75V4.25Z" clip-rule="evenodd" />
            <path fill-rule="evenodd" d="M14 10a.75.75 0 0 0-.75-.75H3.704l1.048-.943a.75.75 0 1 0-1.004-1.114l-2.5 2.25a.75.75 0 0 0 0 1.114l2.5 2.25a.75.75 0 1 0 1.004-1.114l-1.048-.943h9.546A.75.75 0 0 0 14 10Z" clip-rule="evenodd" />
          </svg>
            <span class="hidden sm:inline">Back</span>
          </button>
          </form>
        </div>
</div>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Get references to modal elements
    const addTransactionBtn = document.querySelector('button.inline-flex.items-center.px-4.py-2.border.border-transparent');
    const transactionModal = document.getElementById('addTransactionModal');
    const closeTransactionModal = document.getElementById('closeTransactionModal');
    const cancelTransactionBtn = document.getElementById('cancelTransactionBtn');
    const transactionForm = document.getElementById('addTransactionForm');
    
    // Function to show transaction modal
    function showTransactionModal() {
      transactionModal.classList.remove('hidden');
      document.body.style.overflow = 'hidden';
    }
    
    // Function to hide transaction modal
    function hideTransactionModal() {
      transactionModal.classList.add('hidden');
      document.body.style.overflow = '';
      transactionForm.reset();
    }
    
    // Add event listeners
    if (addTransactionBtn) {
      addTransactionBtn.addEventListener('click', showTransactionModal);
    }
    
    closeTransactionModal.addEventListener('click', hideTransactionModal);
    cancelTransactionBtn.addEventListener('click', hideTransactionModal);
    
    // Close modal when clicking outside of it
    transactionModal.addEventListener('click', function(event) {
      if (event.target === transactionModal) {
        hideTransactionModal();
      }
    });
    
    // Keyboard accessibility
    document.addEventListener('keydown', function(event) {
      if (event.key === 'Escape' && !transactionModal.classList.contains('hidden')) {
        hideTransactionModal();
      }
    });

    function openModal(transactionId) {
        document.getElementById('modal-' + transactionId).classList.remove('hidden');
    }

    function closeModal(transactionId) {
        document.getElementById('modal-' + transactionId).classList.add('hidden');
    }
  });

  // Function to open the modal for a specific transaction
function openModal(transactionId) {
    // Find and show the modal for the specific transaction
    const modal = document.getElementById(`updateTransactionModal-${transactionId}`);
    if (modal) {
        modal.classList.remove('hidden');
        // Prevent body scrolling when modal is open
        document.body.style.overflow = 'hidden';
    }
}

// Function to close the modal for a specific transaction
function closeModal(transactionId) {
    // Find and hide the modal for the specific transaction
    const modal = document.getElementById(`updateTransactionModal-${transactionId}`);
    if (modal) {
        modal.classList.add('hidden');
        // Re-enable body scrolling
        document.body.style.overflow = 'auto';
    }
}

// Close modal when clicking outside of the modal content (optional enhancement)
document.addEventListener('click', function(event) {
    const modals = document.querySelectorAll('[id^="updateTransactionModal-"]');
    modals.forEach(modal => {
        if (event.target === modal) {
            const transactionId = modal.id.split('-')[1];
            closeModal(transactionId);
        }
    });
});

// Close modal with Escape key (optional enhancement)
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        const visibleModal = document.querySelector('[id^="updateTransactionModal-"]:not(.hidden)');
        if (visibleModal) {
            const transactionId = visibleModal.id.split('-')[1];
            closeModal(transactionId);
        }
    }
});




document.getElementById('openGoalModal').addEventListener('click', function() {
    document.getElementById('goalModal').classList.remove('hidden');
});

document.getElementById('closeGoalModal').addEventListener('click', function() {
    document.getElementById('goalModal').classList.add('hidden');
});

function editGoal(goal) {
    document.getElementById('goal_id').value = goal.id;
    document.getElementById('title').value = goal.title;
    document.getElementById('amount').value = goal.amount;
    document.getElementById('priority').value = goal.priority;
    document.getElementById('family_id').value = goal.family_id;
    document.getElementById('goalModal').classList.remove('hidden');
}

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
                    legend: { position: 'top' },
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