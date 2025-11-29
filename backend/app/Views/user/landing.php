<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cocopan | Fresh Bread & Coffee</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans text-gray-200 bg-[#0a0a0d]">

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

      <a href="login" 
         class="border border-purple-400 hover:bg-purple-500 hover:text-black px-4 py-2 rounded-full font-semibold transition">
        Log In
      </a>

      <a href="signup" 
         class="bg-purple-500 hover:bg-purple-600 text-black px-4 py-2 rounded-full font-semibold transition">
        Sign Up
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

  <!-- Scroll Behavior -->
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

  <!-- Hero -->
  <section id="home" 
           class="h-screen bg-cover bg-center relative"
           style="background-image:url('https://images.unsplash.com/photo-1541167760496-1628856ab772?auto=format&fit=crop&w=1600&q=80');">

    <div class="absolute inset-0 bg-black/70"></div>

    <div class="relative h-full flex flex-col items-center justify-center text-center px-6 text-gray-200">
      <h1 class="text-6xl md:text-6xl font-bold mb-4 text-purple-300 drop-shadow-[0_0_8px_rgba(127,90,240,0.5)]">
        Cocopan
      </h1>
      <p class="text-xl md:text-2xl mb-6 opacity-90">
        24/7 Fresh Bread & Coffee in the Void
      </p>
      <a href="#products" 
         class="bg-purple-500 hover:bg-purple-600 text-black font-semibold px-6 py-3 rounded-full shadow">
        Explore Our Menu
      </a>
    </div>

  </section>

  <!-- Products -->
  <section id="products" class="py-16 px-6 bg-[#0d0d12] text-center text-gray-200">

    <h2 class="text-4xl font-bold mb-4 text-purple-300">Favorites From the Void</h2>
    <p class="text-gray-400 mb-12">Dark. Minimal. Fresh. Always.</p>

    <div class="grid gap-8 max-w-6xl mx-auto md:grid-cols-3">

      <!-- Card 1 -->
      <div class="rounded-xl bg-[#151522]/80 border border-white/5 backdrop-blur-sm shadow transition hover:scale-105 hover:shadow-purple-600/30">
        <img src="<?= esc($image ?? 'https://images.squarespace-cdn.com/content/v1/670617fd9fdb0f1a8f5fbffe/30a4aed0-e246-4baa-82fd-5327ca4d4ef9/Breadbox_ISO2.png') ?>"
             class="w-full h-56 object-cover opacity-80" alt="Bread">
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2 text-purple-300"><?= esc($title ?? "This Title") ?></h3>
          <p class="text-gray-400"><?= esc($text ?? "text") ?></p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="rounded-xl bg-[#151522]/80 border border-white/5 backdrop-blur-sm shadow transition hover:scale-105 hover:shadow-purple-600/30">
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2 text-purple-300"><?= esc($title ?? "This Title") ?></h3>
          <p class="text-gray-400"><?= esc($text ?? "text") ?></p>
        </div>
        <img src="<?= esc($image ?? 'https://images.squarespace-cdn.com/content/v1/670617fd9fdb0f1a8f5fbffe/30a4aed0-e246-4baa-82fd-5327ca4d4ef9/Breadbox_ISO2.png') ?>"
             class="w-full h-56 object-cover opacity-80" alt="Bread">
      </div>

      <!-- Card 3 -->
      <div class="rounded-xl bg-[#151522]/80 border border-white/5 backdrop-blur-sm shadow transition hover:scale-105 hover:shadow-purple-600/30">
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2 text-purple-300"><?= esc($title ?? "This Title") ?></h3>
          <img src="<?= esc($image ?? 'https://images.squarespace-cdn.com/content/v1/670617fd9fdb0f1a8f5fbffe/30a4aed0-e246-4baa-82fd-5327ca4d4ef9/Breadbox_ISO2.png') ?>"
               class="w-full h-56 object-cover opacity-80 my-4" alt="Bread">
          <p class="text-gray-400"><?= esc($text ?? "text") ?></p>
        </div>
      </div>

    </div>
  </section>

  <section class="py-16 px-6 text-center max-w-3xl mx-auto text-gray-300">
    <h2 class="text-4xl font-bold mb-6 text-purple-300">Why Cocopan?</h2>
    <p class="text-gray-400 text-lg">
      Crafted in darkness — warm bread and bold coffee, available 24/7 for all wanderers of the night.
    </p>
  </section>

  <!-- CTA -->
  <section class="py-8 px-6 bg-purple-500 text-center text-black">
    <h2 class="text-2xl font-bold mb-4">Enter the Void Anytime</h2>
    <p class="mb-6">Open 24/7 | Freshly Baked • Freshly Brewed</p>
    <a href="mailto:info@cocopan.ph" 
       class="bg-black hover:bg-gray-900 text-white px-6 py-3 rounded-full font-semibold shadow">
      Contact Us
    </a>
  </section>

  <!-- Footer -->
  <footer class="bg-black text-gray-500 text-center py-6 space-x-4">

    <!-- Tailwind underline animation -->
    <a href="moodboard" 
       class="font-semibold text-purple-300 hover:text-purple-200 transition relative 
              after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:w-0 
              after:bg-purple-400 after:transition-all hover:after:w-full">
      Moodboard
    </a>

    <a href="roadmap" 
       class="font-semibold text-purple-300 hover:text-purple-200 transition relative 
              after:absolute after:left-0 after:-bottom-1 after:h-[2px] after:w-0 
              after:bg-purple-400 after:transition-all hover:after:w-full">
      Road Map
    </a>

    | © 2025 Cocopan.
  </footer>

</body>
</html>
