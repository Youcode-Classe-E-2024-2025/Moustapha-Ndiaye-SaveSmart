<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Family Account</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      background-color: #DFDBE5;
      background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='88' height='88' viewBox='0 0 88 88'%3E%3Cg fill='%239C92AC' fill-opacity='0.4'%3E%3Cpath fill-rule='evenodd' d='M29.42 29.41c.36-.36.58-.85.58-1.4V0h-4v26H0v4h28c.55 0 1.05-.22 1.41-.58h.01zm0 29.18c.36.36.58.86.58 1.4V88h-4V62H0v-4h28c.56 0 1.05.22 1.41.58zm29.16 0c-.36.36-.58.85-.58 1.4V88h4V62h26v-4H60c-.55 0-1.05.22-1.41.58h-.01zM62 26V0h-4v28c0 .55.22 1.05.58 1.41.37.37.86.59 1.41.59H88v-4H62zM18 36c0-1.1.9-2 2-2h10a2 2 0 1 1 0 4H20a2 2 0 0 1-2-2zm0 16c0-1.1.9-2 2-2h10a2 2 0 1 1 0 4H20a2 2 0 0 1-2-2zm16-26a2 2 0 0 1 2-2 2 2 0 0 1 2 2v4a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-4zm16 0a2 2 0 0 1 2-2 2 2 0 0 1 2 2v4a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-4zM34 58a2 2 0 0 1 2-2 2 2 0 0 1 2 2v4a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-4zm16 0a2 2 0 0 1 2-2 2 2 0 0 1 2 2v4a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-4zM34 78a2 2 0 0 1 2-2 2 2 0 0 1 2 2v6a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-6zm16 0a2 2 0 0 1 2-2 2 2 0 0 1 2 2v6a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-6zM34 4a2 2 0 0 1 2-2 2 2 0 0 1 2 2v6a2 2 0 0 1-2 2 2 2 0 0 1-2-2V4zm16 0a2 2 0 0 1 2-2 2 2 0 0 1 2 2v6a2 2 0 0 1-2 2 2 2 0 0 1-2-2V4zm-8 82a2 2 0 1 1 4 0v2h-4v-2zm0-68a2 2 0 1 1 4 0v10a2 2 0 1 1-4 0V18zM66 4a2 2 0 1 1 4 0v8a2 2 0 1 1-4 0V4zm0 72a2 2 0 1 1 4 0v8a2 2 0 1 1-4 0v-8zm-48 0a2 2 0 1 1 4 0v8a2 2 0 1 1-4 0v-8zm0-72a2 2 0 1 1 4 0v8a2 2 0 1 1-4 0V4zm24-4h4v2a2 2 0 1 1-4 0V0zm0 60a2 2 0 1 1 4 0v10a2 2 0 1 1-4 0V60zm14-24c0-1.1.9-2 2-2h10a2 2 0 1 1 0 4H58a2 2 0 0 1-2-2zm0 16c0-1.1.9-2 2-2h10a2 2 0 1 1 0 4H58a2 2 0 0 1-2-2zm-28-6a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm8 26a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm16 0a2 2 0 1 0 0-4 2 2 0 0 0 0 4zM36 20a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm16 0a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm-8-8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 68a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm16-34a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm16-12a2 2 0 1 0 0 4 6 6 0 1 1 0 12 2 2 0 1 0 0 4 10 10 0 1 0 0-20zm-64 0a2 2 0 1 1 0 4 6 6 0 1 0 0 12 2 2 0 1 1 0 4 10 10 0 1 1 0-20zm56-12a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 48a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm-48 0a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0-48a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm24 32a10 10 0 1 1 0-20 10 10 0 0 1 0 20zm0-4a6 6 0 1 0 0-12 6 6 0 0 0 0 12zm36-36a6 6 0 1 1 0-12 6 6 0 0 1 0 12zm0-4a2 2 0 1 0 0-4 2 2 0 0 0 0 4zM10 44c0-1.1.9-2 2-2h8a2 2 0 1 1 0 4h-8a2 2 0 0 1-2-2zm56 0c0-1.1.9-2 2-2h8a2 2 0 1 1 0 4h-8a2 2 0 0 1-2-2zm8 24c0-1.1.9-2 2-2h8a2 2 0 1 1 0 4h-8a2 2 0 0 1-2-2zM3 68c0-1.1.9-2 2-2h8a2 2 0 1 1 0 4H5a2 2 0 0 1-2-2zm0-48c0-1.1.9-2 2-2h8a2 2 0 1 1 0 4H5a2 2 0 0 1-2-2zm71 0c0-1.1.9-2 2-2h8a2 2 0 1 1 0 4h-8a2 2 0 0 1-2-2zm6 66a6 6 0 1 1 0-12 6 6 0 0 1 0 12zm0-4a2 2 0 1 0 0-4 2 2 0 0 0 0 4zM8 86a6 6 0 1 1 0-12 6 6 0 0 1 0 12zm0-4a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0-68A6 6 0 1 1 8 2a6 6 0 0 1 0 12zm0-4a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm36 36a2 2 0 1 0 0-4 2 2 0 0 0 0 4z'/%3E%3C/g%3E%3C/svg%3E");
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
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
      box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    }
  </style>
</head>
<body>
  <div class="container max-w-4xl mx-auto p-6 opacity-85">
    <div class="bg-white rounded-lg shadow-xl overflow-hidden">
      <div class="bg-gradient-to-r from-[#968aa8] to-[#DFDBE5] p-6 text-white">
        <h1 class="text-3xl font-bold mb-2">Welcome, {{$name}} Family</h1>
        <p class="opacity-80">Please select your profile or create member</p>
      </div>
      
      <div class="p-6">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
        @foreach($users as $user)
            <div class="user-card bg-gray-50 rounded-lg overflow-hidden shadow-md hover:shadow-lg transition-shadow duration-300 cursor-pointer border border-gray-200">
            <form action="/dashboard/{{ $user->id }}" method="POST" class="w-full">
                @csrf
                <button type="submit" class="block w-full">
                <div class="p-4 flex flex-col items-center">
                    <div class="avatar w-20 h-20 rounded-full mb-3">
                    {{ substr($user->firstname, 0, 1) }}
                    </div>
                    <h3 class="font-bold text-xl text-gray-800">{{ $user->firstname }}</h3>
                    @if($user->role)
                    <span class="text-sm text-gray-500 mt-1">{{ $user->role }}</span>
                    @endif
                </div>
                </button>
            </form>
            </div>
        @endforeach

        </div>
      </div>
      
      <div class="bg-gray-50 px-6 py-4 border-t border-gray-200">
        <div class="flex justify-between items-center">
          <button class="text-gray-600 hover:text-indigo-600 transition-colors flex items-center gap-2 p-2 rounded-lg hover:bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
              <path fill-rule="evenodd" d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
            </svg>
            <span class="hidden sm:inline">New member</span>
          </button>
          <form action="{{url('logout')}}" method="Post">
            @csrf
          <button class="text-gray-600 hover:text-red-600 transition-colors flex items-center gap-2 p-2 rounded-lg hover:bg-gray-100">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-5 h-5">
              <path fill-rule="evenodd" d="M17 4.25A2.25 2.25 0 0 0 14.75 2h-5.5A2.25 2.25 0 0 0 7 4.25v2a.75.75 0 0 0 1.5 0v-2a.75.75 0 0 1 .75-.75h5.5a.75.75 0 0 1 .75.75v11.5a.75.75 0 0 1-.75.75h-5.5a.75.75 0 0 1-.75-.75v-2a.75.75 0 0 0-1.5 0v2A2.25 2.25 0 0 0 9.25 18h5.5A2.25 2.25 0 0 0 17 15.75V4.25Z" clip-rule="evenodd" />
              <path fill-rule="evenodd" d="M1 10a.75.75 0 0 1 .75-.75h9.546l-1.048-.943a.75.75 0 1 1 1.004-1.114l2.5 2.25a.75.75 0 0 1 0 1.114l-2.5 2.25a.75.75 0 1 1-1.004-1.114l1.048-.943H1.75A.75.75 0 0 1 1 10Z" clip-rule="evenodd" />
            </svg>
            <span class="hidden sm:inline">Logout</span>
          </button>
          </form>
          
        </div>
      </div>
      <div id="addMemberModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
  <div class="bg-white rounded-lg shadow-xl max-w-md w-full mx-4">
    <div class="flex justify-between items-center p-4 border-b">
      <h3 class="text-lg font-medium text-gray-900">New member</h3>
      <button id="closeModal" class="text-gray-400 hover:text-gray-500">
        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>
    
    <div class="p-6">
      <form id="addMemberForm" action="{{url('newUser')}}" method="POST">
        @csrf
        <label for="modalName" class="block text-gray-700 font-medium mb-2">Firstname</label>
        <input type="text" id="modalName" name="firstname" value="{{old('name')}}" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-[#a49cb1] focus:border-transparent" required>
        <p id="nameError" class="text-red-600 text-sm mt-1 hidden"></p>
        @if (session('success'))
            <div class="bg-green-500 text-white p-2 rounded mt-2">
                {{ session('success') }}
            </div>
        @endif

        
        <div class="flex gap-4 mt-6">
          <button type="button" id="cancelModal" class="w-full bg-gray-200 hover:bg-gray-300 text-gray-800 font-medium py-2 px-4 rounded-md transition duration-300">
            Cancel
          </button>
          <button type="submit" class="w-full bg-[#9f84c7] hover:bg-[#a49cb1] text-white font-medium py-2 px-4 rounded-md transition duration-300">
            Create
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
    </div>
  </div>


  <script>
  document.addEventListener('DOMContentLoaded', function() {
    // Get references to elements
    const addMemberButton = document.querySelector('button.text-gray-600.hover\\:text-indigo-600');
    const modal = document.getElementById('addMemberModal');
    const closeModal = document.getElementById('closeModal');
    const cancelModal = document.getElementById('cancelModal');
    const form = document.getElementById('addMemberForm');
    const nameInput = document.getElementById('modalName');
    const nameError = document.getElementById('nameError');
    
    // Remove the old form that was at the bottom of the page
    const oldForm = document.querySelector('.bg-gray-50.px-6.py-4.border-t:last-child');
    if (oldForm) {
      oldForm.remove();
    }
    
    // Function to show the modal
    function showModal() {
      modal.classList.remove('hidden');
      document.body.style.overflow = 'hidden'; // Prevent scrolling when modal is open
      nameInput.focus();
    }
    
    // Function to hide the modal
    function hideModal() {
      modal.classList.add('hidden');
      document.body.style.overflow = ''; // Restore scrolling
      form.reset();
      nameError.classList.add('hidden');
    }
    
    // Add event listeners
    addMemberButton.addEventListener('click', showModal);
    closeModal.addEventListener('click', hideModal);
    cancelModal.addEventListener('click', hideModal);
    
    // Close modal when clicking outside of it
    modal.addEventListener('click', function(event) {
      if (event.target === modal) {
        hideModal();
      }
    });
    
    // Form validation
    form.addEventListener('submit', function(event) {
      if (!nameInput.value.trim()) {
        event.preventDefault();
        nameError.textContent = 'Please enter a name';
        nameError.classList.remove('hidden');
        nameInput.focus();
      }
    });
    
    // Keyboard accessibility
    document.addEventListener('keydown', function(event) {
      if (event.key === 'Escape' && !modal.classList.contains('hidden')) {
        hideModal();
      }
    });
  });
</script>
</body>
</html>