<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cocopan | Login</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans bg-[#0a0a0d] text-gray-200">

<!-- Navbar -->
<?php $session = session(); ?>

<nav id="navbar" 
     class="fixed top-0 left-0 w-full flex justify-between items-center px-8 py-4 bg-transparent text-gray-200 z-50 transition-all duration-300 backdrop-blur-md">

  <a href="/" class="flex items-center space-x-2 hover:opacity-90 transition">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRheI89iFUg5I_sVIDYpD_Q2HPxPAfNzebhgA&s"
         alt="Cocopan Logo"
         class="w-10 h-10 rounded-full object-cover shadow-lg">
    <h1 class="text-2xl font-bold text-purple-300">Cocopan</h1>
  </a>

  <div>
    <a href="/" class="hover:text-purple-300 transition">Home</a>
  </div>

</nav>

<script>
  window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 50) {
      navbar.classList.add('bg-[#111129]/90', 'shadow-lg');
      navbar.classList.remove('bg-transparent');
    } else {
      navbar.classList.add('bg-transparent');
      navbar.classList.remove('bg-[#111129]/90', 'shadow-lg');
    }
  });
</script>

<!-- Main Login Section -->
<section class="min-h-screen flex items-center justify-center px-6">

  <div class="w-full max-w-md mt-20 bg-[#151522]/80 border border-white/5 backdrop-blur-lg shadow-xl rounded-2xl p-8
              hover:shadow-purple-600/20 transition">

    <h2 class="text-3xl font-bold text-center text-purple-300 mb-6">
      Welcome Back
    </h2>

    <?php if (session()->getFlashdata('error')): ?>
      <div class="text-red-400 text-center mb-4">
        <?= session()->getFlashdata('error') ?>
      </div>
    <?php endif; ?>

    <form action="/login/authenticate" method="POST" class="space-y-5">

      <!-- Email -->
      <div>
        <label class="block mb-1 text-gray-300">Email</label>
        <input type="email" name="email" required
               class="w-full px-4 py-3 rounded-lg bg-[#0d0d12] border border-white/10
                      focus:border-purple-400 focus:ring-2 focus:ring-purple-500/30 outline-none
                      text-gray-200 placeholder-gray-500 transition"
               placeholder="Enter your email">
      </div>

      <!-- Password -->
      <div>
        <label class="block mb-1 text-gray-300">Password</label>
        <input type="password" name="password" required
               class="w-full px-4 py-3 rounded-lg bg-[#0d0d12] border border-white/10
                      focus:border-purple-400 focus:ring-2 focus:ring-purple-500/30 outline-none
                      text-gray-200 placeholder-gray-500 transition"
               placeholder="Enter your password">
      </div>

      <!-- Login Button -->
      <button type="submit"
              class="w-full bg-purple-500 hover:bg-purple-600 text-black font-semibold py-3 rounded-lg shadow mt-2 transition">
        Log In
      </button>

    </form>

    <!-- Signup Link -->
    <p class="text-center text-gray-400 mt-6">
      Don't have an account?
      <a href="/signup" class="text-purple-300 hover:text-purple-200 transition underline">
        Sign Up
      </a>
    </p>

  </div>

</section>

<!-- Footer -->
<footer class="bg-black text-gray-500 text-center py-6 text-sm">
  <a href="/" class="font-semibold text-purple-300 hover:text-purple-200 transition relative
                    after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:w-0 
                    after:bg-purple-400 after:transition-all hover:after:w-full">
    Home
  </a>
  | © 2025 Cocopan.
</footer>

</body>
</html>