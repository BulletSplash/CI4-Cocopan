<?= view('components/head') ?>

<body class="font-sans bg-[#0a0a0d] text-gray-200">

<!-- Navbar -->
<?= view('components/header') ?>

<!-- Main Signup Section -->
<section class="min-h-screen flex items-center justify-center px-6">

  <div class="w-full max-w-md mt-20 bg-[#151522]/80 border border-white/5 backdrop-blur-xl shadow-xl rounded-2xl p-8
              hover:shadow-purple-600/20 transition">

    <h2 class="text-3xl font-bold text-center text-purple-300 mb-6">
      Create an Account
    </h2>

    <?php if (session()->getFlashdata('error')): ?>
      <div class="text-red-400 text-center mb-4">
        <?= session()->getFlashdata('error') ?>
      </div>
    <?php endif; ?>

    <form action="/register" method="POST" class="space-y-5">

      <!-- Display Name -->
      <div>
        <label class="block mb-1 text-gray-300">Fullname</label>
        <input type="text" name="full_name" value="<?= esc(old('email')) ?>" required
               class="w-full px-4 py-3 rounded-lg bg-[#0d0d12] border border-white/10
                      focus:border-purple-400 focus:ring-2 focus:ring-purple-500/30 outline-none
                      text-gray-200 placeholder-gray-500 transition"
               placeholder="Juan Dela Cruz">
      </div>

      <!-- Email -->
      <div>
        <label class="block mb-1 text-gray-300">Email</label>
        <input type="email" name="email" value="<?= esc(old('email')) ?>" required
               class="w-full px-4 py-3 rounded-lg bg-[#0d0d12] border border-white/10
                      focus:border-purple-400 focus:ring-2 focus:ring-purple-500/30 outline-none
                      text-gray-200 placeholder-gray-500 transition"
               placeholder="your@email.com">
      </div>

      <!-- Password -->
      <div>
        <label class="block mb-1 text-gray-300">Password</label>
        <input type="password" name="password" required
               class="w-full px-4 py-3 rounded-lg bg-[#0d0d12] border border-white/10
                      focus:border-purple-400 focus:ring-2 focus:ring-purple-500/30 outline-none
                      text-gray-200 placeholder-gray-500 transition"
               placeholder="Choose a password">
      </div>

      <!-- Confirm Password -->
      <div>
        <label class="block mb-1 text-gray-300">Confirm Password</label>
        <input type="password" name="confirm_password" required
               class="w-full px-4 py-3 rounded-lg bg-[#0d0d12] border border-white/10
                      focus:border-purple-400 focus:ring-2 focus:ring-purple-500/30 outline-none
                      text-gray-200 placeholder-gray-500 transition"
               placeholder="Re-enter password">
      </div>

      <!-- Signup Button -->
      <div class="flex justify-center">
        <?= view('components/buttons/primary_forms', ['title' => 'Register']) ?>
      </div>
    </form>

    <!-- Login Link -->
    <p class="text-center text-gray-400 mt-6">
      Already have an account?
      <?= view('components/buttons/underlined_link', ['link' => 'login', 'title' => 'Log in']) ?>
    </p>

  </div>

</section>

<!-- Footer -->
<?= view('components/footer') ?>

</body>
</html>
