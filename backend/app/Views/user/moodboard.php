<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cocopan | Moodboard</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-sans text-gray-200 bg-[#0a0a0d]">

<!-- Navbar -->
<?php $session = session(); ?>

<nav id="navbar" 
     class="fixed top-0 left-0 w-full flex justify-between items-center px-8 py-4 
            bg-transparent text-gray-200 z-50 transition-all duration-300 backdrop-blur-md">

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

<!-- Moodboard Section -->
<section class="min-h-screen pt-32 pb-20 px-6 max-w-6xl mx-auto">

  <!-- Title -->
  <h1 class="text-5xl font-bold text-center mb-10 text-purple-300 
             bg-gradient-to-r from-purple-600/40 to-purple-300/30 py-4 px-6 
             inline-block rounded-2xl shadow-md backdrop-blur-xl">
      Cocopan Moodboard
  </h1>

  <!-- Color Palette -->
  <div class="mb-16 bg-[#151522]/70 py-10 px-6 rounded-2xl shadow-xl backdrop-blur-xl border border-white/10">
    <h2 class="text-3xl font-semibold mb-6 text-center text-purple-200 
               bg-purple-700/30 inline-block px-4 py-2 rounded-lg">
      Color Palette
    </h2>
    <p class="text-center text-gray-400 mb-8">
      The VOID color palette is inspired by deep cosmic tones, neon purples, and glowing accents.
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 text-center">
      
      <!-- Neon Purple -->
      <div>
        <div class="space-y-2">
          <div class="h-16 rounded-lg bg-[#3b0b86]"></div>
          <div class="h-16 rounded-lg bg-[#6b21a8]"></div>
          <div class="h-16 rounded-lg bg-[#c084fc]"></div>
        </div>
        <p class="font-semibold mt-4 text-purple-200">Neon Purple (Primary)</p>
        <p class="text-sm text-gray-400">#3b0b86 – #6b21a8 – #c084fc</p>
      </div>

      <!-- Dark Void -->
      <div>
        <div class="space-y-2">
          <div class="h-16 rounded-lg bg-[#0a0a0d]"></div>
          <div class="h-16 rounded-lg bg-[#111129]"></div>
          <div class="h-16 rounded-lg bg-[#1e1b2e]"></div>
        </div>
        <p class="font-semibold mt-4 text-purple-200">VOID Black (Base)</p>
        <p class="text-sm text-gray-400">#0a0a0d – #111129 – #1e1b2e</p>
      </div>

      <!-- Ether Glow -->
      <div>
        <div class="space-y-2">
          <div class="h-16 rounded-lg bg-purple-300"></div>
          <div class="h-16 rounded-lg bg-purple-200"></div>
          <div class="h-16 rounded-lg bg-purple-100"></div>
        </div>
        <p class="font-semibold mt-4 text-purple-200">Ethereal Glow (Accent)</p>
        <p class="text-sm text-gray-400">Purple Pastels</p>
      </div>

    </div>
  </div>

  <!-- Typography -->
  <div class="mb-16 text-center">
    <h2 class="text-3xl font-semibold mb-6 text-purple-200 bg-purple-700/20 px-4 py-2 inline-block rounded-lg">
      Typography
    </h2>
    <div class="space-y-6">
      <div>
        <p class="text-gray-400 text-sm mb-2">Heading Font</p>
        <p class="font-serif text-3xl text-purple-300">Cocopan – Heading Example</p>
      </div>
      <div>
        <p class="text-gray-400 text-sm mb-2">Body Font</p>
        <p class="font-sans text-xl text-gray-300">Body text example for longer paragraphs.</p>
      </div>
    </div>
  </div>

  <!-- Button Set -->
  <div class="mb-16 text-center bg-[#1b1b2f]/50 py-10 px-6 rounded-2xl shadow-xl backdrop-blur-xl border border-white/10">
    <h2 class="text-3xl font-semibold mb-8 text-purple-100 bg-purple-800/40 px-5 py-3 rounded-xl">
      Button Set
    </h2>

    <div class="flex flex-wrap justify-center gap-6">
      <button class="bg-purple-500 hover:bg-purple-600 text-black font-semibold px-6 py-3 rounded-full shadow-lg transition">
        Primary
      </button>
      <button class="border border-purple-400 text-purple-300 hover:bg-purple-400 hover:text-black font-semibold px-6 py-3 rounded-full transition">
        Secondary
      </button>
      <button class="border-2 border-gray-600 text-gray-400 px-6 py-3 rounded-full font-semibold">
        Bordered
      </button>
      <button class="bg-gray-700 text-gray-500 px-6 py-3 rounded-full font-semibold cursor-not-allowed">
        Disabled
      </button>
    </div>
  </div>

  <!-- Card Samples -->
  <div class="text-center">
    <h2 class="text-3xl font-semibold mb-8 text-purple-200 bg-purple-700/20 px-4 py-2 rounded-lg">
      Card Samples
    </h2>

    <div class="grid md:grid-cols-3 gap-10 justify-center">

      <!-- Card 1 -->
      <div class="bg-[#151522]/70 border border-white/10 rounded-xl shadow-xl backdrop-blur-xl hover:scale-105 transition">
        <img src="<?= esc($image ?? 'https://images.squarespace-cdn.com/content/v1/670617fd9fdb0f1a8f5fbffe/30a4aed0-e246-4baa-82fd-5327ca4d4ef9/Breadbox_ISO2.png') ?>"
             class="w-full h-56 object-cover opacity-80" alt="Bread">
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2 text-purple-300"><?= esc($title ?? "This Title") ?></h3>
          <p class="text-gray-400"><?= esc($text ?? "text") ?></p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="bg-[#151522]/70 border border-white/10 rounded-xl shadow-xl backdrop-blur-xl hover:scale-105 transition">
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2 text-purple-300"><?= esc($title ?? "This Title") ?></h3>
          <p class="text-gray-400"><?= esc($text ?? "text") ?></p>
        </div>
          <img src="<?= esc($image ?? 'https://images.squarespace-cdn.com/content/v1/670617fd9fdb0f1a8f5fbffe/30a4aed0-e246-4baa-82fd-5327ca4d4ef9/Breadbox_ISO2.png') ?>"
             class="w-full h-56 object-cover opacity-80" alt="Bread">
      </div>

      <!-- Card 3 -->
      <div class="bg-[#151522]/70 border border-white/10 rounded-xl shadow-xl backdrop-blur-xl hover:scale-105 transition">
        <div class="p-6">
          <h3 class="text-xl font-semibold mb-2 text-purple-300"><?= esc($title ?? "This Title") ?></h3>
          <img src="<?= esc($image ?? 'https://images.squarespace-cdn.com/content/v1/670617fd9fdb0f1a8f5fbffe/30a4aed0-e246-4baa-82fd-5327ca4d4ef9/Breadbox_ISO2.png') ?>"
             class="w-full h-56 object-cover opacity-80" alt="Bread">
          <p class="text-gray-400 mt-3"><?= esc($text ?? "text") ?></p>
        </div>
      </div>

    </div>

    <!-- Logo Section -->
    <div class="text-center mt-20">
      <h2 class="text-2xl font-semibold text-purple-200 mb-6 bg-purple-700/20 inline-block px-4 py-2 rounded-lg">
        Logo
      </h2>
      
      <div class="flex justify-center items-center gap-10">

        <div class="bg-[#151522]/70 border border-purple-500/40 rounded-full p-2 shadow-xl backdrop-blur-xl">
          <img 
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRheI89iFUg5I_sVIDYpD_Q2HPxPAfNzebhgA&s"
            class="w-28 h-28 rounded-full object-cover">
        </div>

        <div class="bg-[#151522]/70 border border-purple-500/40 rounded-xl p-2 shadow-xl backdrop-blur-xl">
          <img 
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRheI89iFUg5I_sVIDYpD_Q2HPxPAfNzebhgA&s"
            class="w-28 h-28 rounded-lg object-cover">
        </div>

      </div>
    </div>

  </div>
</section>

<!-- CTA -->
<section class="py-8 px-6 bg-purple-600/20 text-center text-purple-200 border-t border-purple-500/20 backdrop-blur-xl">
  <h2 class="text-2xl font-bold mb-4">Enter the VOID</h2>
  <p class="mb-6 text-purple-300">Immerse yourself in the cosmic aesthetic.</p>
  <a href="mailto:info@cocopan.ph" 
     class="bg-purple-500 hover:bg-purple-600 text-black px-6 py-3 rounded-full font-semibold shadow-lg transition">
    Contact Us
  </a>
</section>

<!-- Footer -->
<footer class="bg-[#0b0b10] text-gray-500 text-center py-6">
  <a href="moodboard" class="font-semibold text-purple-400 hover:text-purple-300 transition">Moodboard</a>

  <a href="roadmap" class="font-semibold text-purple-400 hover:text-purple-300 transition">
    Road Map
  </a>

  | © 2025 Cocopan.
</footer>

</body>
</html>
