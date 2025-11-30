<?php
$session = session();
$errors = $session->getFlashdata('errors');
?>

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

    <?php if (!empty($errors)): ?>
        <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
          <ul class="list-disc list-inside">
            <?php foreach ($errors as $error): ?>
              <li><?= esc($error) ?></li>
            <?php endforeach; ?>
          </ul>
        </div>
        <?php endif; ?>

    <form action="login/auth" method="POST" class="space-y-5">

      <!-- Email -->
      <div>
        <label class="block mb-1 text-gray-300">Email</label>
        <input type="email" name="email" value="<?= esc(old('email')) ?>" required
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
      <div class="flex justify-center">
        <?= view('components/buttons/primary_forms', ['title' => 'Log In']) ?>
      </div>

    </form>

    <!-- Signup Link -->
    <p class="text-center text-gray-400 mt-6">
      Don't have an account?
      <?= view('components/buttons/underlined_link', ['link' => 'register', 'title' => 'Register']) ?>
    </p>

  </div>

</section>

<!-- Footer -->
<?= view('components/footer') ?>

</body>
</html>