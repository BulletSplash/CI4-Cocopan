<?= view('components/head') ?>

<body class="font-sans bg-[#0a0a0d] text-gray-200">

<!-- Navbar -->
<?= view('components/header') ?>

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
<?= view('components/footer') ?>

</body>
</html>