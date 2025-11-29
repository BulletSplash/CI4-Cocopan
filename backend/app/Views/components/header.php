<header>
 <!-- Navbar -->
  <?php $session = session(); ?>

  <nav id="navbar" class="fixed top-0 left-0 w-full flex justify-between items-center px-8 py-4 bg-transparent text-gray-200 z-50 transition-all duration-300 backdrop-blur-md">

    <div class="flex items-center space-x-6">
      <a href='/' class="flex items-center space-x-2 hover:opacity-90 transition">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRheI89iFUg5I_sVIDYpD_Q2HPxPAfNzebhgA&s" 
             alt="Cocopan Logo" 
             class="w-10 h-10 rounded-full object-cover shadow-lg">
        <h1 class="text-2xl font-bold text-purple-300">Cocopan</h1>
      </a>
    </div>

    <?php if (empty($session->get('id'))): ?>
    <div class="space-x-4">

      <a href="login" >
        <?= view('components/buttons/secondary', ['title' => "Log In"]) ?>
      </a>

      <a href="register">
        <?= view('components/buttons/primary', ['title' => "Sign Up"]) ?>
      </a>

    </div>

    <?php else: ?>
    <div class="space-x-4 flex items-center">

      <p class="mt-2 text-purple-300">
        <?= esc($session->get('display_name')) ?>
      </p>

      <a href="logout" 
         class="bg-purple-500 hover:bg-purple-600 text-black px-4 py-2 rounded-full font-semibold transition">
        Log Out
      </a>

    </div>
    <?php endif; ?>

  </nav>

</header>