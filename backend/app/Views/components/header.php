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

    <div>
      <?php if(empty($session->get('id'))): ?>
        <?= view('components/buttons/secondary_link', ['link' => '/login', 'title' => 'Log In']) ?>
        <?= view('components/buttons/primary_link', ['link' => '/register', 'title' => 'Sign In']) ?>
      <?php else:  ?>  
        <span> Welcome! <?= esc($session->get('full_name')) ?> </span>
        <?= view('components/buttons/secondary_link', ['link' => '/logout', 'title' => 'Log Out']) ?>
      <?php endif; ?>
    </div>
  </nav>
</header>