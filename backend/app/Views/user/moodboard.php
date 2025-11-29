<?= view('components/head') ?>

<body class="font-sans text-gray-200 bg-[#0a0a0d]">

<!-- Navbar -->
<?= view('components/header') ?>


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
      <?= view('components/buttons/primary', ['title' => "Primary"]) ?>
      <?= view('components/buttons/secondary', ['title' => "Secondary"]) ?>
      <?= view('components/buttons/bordered', ['title' => "Bordered"]) ?>
      <?= view('components/buttons/disabled', ['title' => "Disabled"]) ?>
      
      
      
      
    </div>
  </div>

  <!-- Card Samples -->
  <div class="text-center">
    <h2 class="text-3xl font-semibold mb-8 text-purple-200 bg-purple-700/20 px-4 py-2 rounded-lg">
      Card Samples
    </h2>

    <div class="grid md:grid-cols-3 gap-10 justify-center">

      <!-- Card 1 -->
       <?= view('components/cards/productCard1', ['image' => null, 'title' => "Freshly Baked Bread", 'text' => "Crispy outside, soft inside — baked with love daily."]) ?>

      <!-- Card 2 -->
      <?= view('components/cards/productCard2', ['image' => null, 'title' => "Freshly Baked Bread", 'text' => "Crispy outside, soft inside — baked with love daily."]) ?>

      <!-- Card 3 -->
      <?= view('components/cards/productCard3', ['image' => null, 'title' => "Freshly Baked Bread", 'text' => "Crispy outside, soft inside — baked with love daily."]) ?>


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
<?= view('components/cta') ?>

<!-- Footer -->
<?= view('components/footer') ?>

</body>
</html>
