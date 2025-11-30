<?= view('components/head') ?>

<body class="font-sans text-gray-200 bg-gradient-to-b from-black via-[#0a0015] to-[#140026]">

  <!-- Navbar -->
   <<?= view('components/header') ?>

  <!-- Roadmap Section -->
  <section class="pt-32 pb-20 px-6 max-w-6xl mx-auto">
    <h1 class="text-5xl font-bold text-center mb-12 
               bg-gradient-to-r from-purple-500 to-fuchsia-600 text-transparent bg-clip-text
               py-4 rounded-xl">
      Cocopan Website Roadmap
    </h1>

    <p class="text-center text-lg text-purple-200 max-w-3xl mx-auto mb-16">
      The journey through the Void — where design evolves, expands, and becomes limitless.
    </p>

    <!-- Roadmap Timeline -->
    <div class="relative border-l-4 border-purple-700 pl-8 space-y-12">

      <!-- Phase 1 -->
      <div class="relative">
        <div class="absolute -left-6 top-1 bg-purple-700 text-white w-10 h-10 rounded-full 
                    flex items-center justify-center font-bold shadow-[0_0_10px_rgba(147,51,234,1)]">
          1
        </div>
        <div class="bg-[#140026] border border-purple-900 rounded-xl p-6 shadow-lg">
          <h2 class="text-2xl font-bold text-purple-300 mb-2">Phase 1: UI Research & Concept Design</h2>
          <p class="text-purple-200 mb-2">
            Crafted initial Void identity — dark, glowing, and celestial.
          </p>
          <p class="text-sm text-purple-400">Status: Completed</p>
        </div>
      </div>

      <!-- Phase 2 -->
      <div class="relative">
        <div class="absolute -left-6 top-1 bg-purple-700 text-white w-10 h-10 rounded-full 
                    flex items-center justify-center font-bold shadow-[0_0_10px_rgba(147,51,234,1)]">
          2
        </div>
        <div class="bg-[#1a0033] border border-purple-900 rounded-xl p-6 shadow-lg">
          <h2 class="text-2xl font-bold text-purple-300 mb-2">Phase 2: Moodboard & Design System</h2>
          <p class="text-purple-200 mb-2">Defined neon highlights, cosmic gradients, and glowing UI elements.</p>
          <p class="text-sm text-purple-400">Status: Completed</p>
        </div>
      </div>

      <!-- Phase 3 -->
      <div class="relative">
        <div class="absolute -left-6 top-1 bg-purple-700 text-white w-10 h-10 rounded-full 
                    flex items-center justify-center font-bold shadow-[0_0_10px_rgba(147,51,234,1)]">
          3
        </div>
        <div class="bg-black border border-purple-900 text-purple-200 rounded-xl p-6 shadow-lg">
          <h2 class="text-2xl font-bold text-purple-400 mb-2">Phase 3: Website Layout & Navigation</h2>
          <p class="text-purple-300 mb-2">Enhanced structure with cosmic transitions & glassy navigation.</p>
          <p class="text-sm text-purple-500">Status: In Progress</p>
        </div>
      </div>

      <!-- Repeat → Phases 4–8, matching Void theme -->
      <!-- (Keeping structure unchanged, updating ONLY colors & visuals) -->

      <!-- Phase 4 -->
      <div class="relative">
        <div class="absolute -left-6 top-1 bg-purple-700 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold shadow-[0_0_10px_rgba(147,51,234,1)]">4</div>
        <div class="bg-[#140026] border border-purple-900 rounded-xl p-6 shadow-lg">
          <h2 class="text-2xl font-bold text-purple-300 mb-2">Phase 4: Interactive Components</h2>
          <p class="text-purple-200 mb-2">Void animations, neon hovers, particles, and cosmic effects.</p>
          <p class="text-sm text-purple-400">Status: Planned</p>
        </div>
      </div>

      <!-- Phase 5 -->
      <div class="relative">
        <div class="absolute -left-6 top-1 bg-purple-700 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold shadow-[0_0_10px_rgba(147,51,234,1)]">5</div>
        <div class="bg-[#1a0033] border border-purple-900 rounded-xl p-6 shadow-lg">
          <h2 class="text-2xl font-bold text-purple-300 mb-2">Phase 5: Optimization & Deployment</h2>
          <p class="text-purple-200 mb-2">Performance improved for a smooth journey through the void.</p>
          <p class="text-sm text-purple-400">Status: Upcoming</p>
        </div>
      </div>

      <!-- Phase 6 -->
      <div class="relative">
        <div class="absolute -left-6 top-1 bg-purple-700 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold shadow-[0_0_10px_rgba(147,51,234,1)]">6</div>
        <div class="bg-black border border-purple-900 text-purple-200 rounded-xl p-6 shadow-lg">
          <h2 class="text-2xl font-bold text-purple-400 mb-2">Phase 6: Interactive Menu & Ordering Mockup</h2>
          <p class="text-purple-300 mb-2">Void menu simulations with glowing item previews.</p>
          <p class="text-sm text-purple-500">Status: Planned</p>
        </div>
      </div>

      <!-- Phase 7 -->
      <div class="relative">
        <div class="absolute -left-6 top-1 bg-purple-700 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold shadow-[0_0_10px_rgba(147,51,234,1)]">7</div>
        <div class="bg-[#140026] border border-purple-900 rounded-xl p-6 shadow-lg">
          <h2 class="text-2xl font-bold text-purple-300 mb-2">Phase 7: User Interaction & Feedback System</h2>
          <p class="text-purple-200 mb-2">User reactions, cosmic ratings, and feedback animations.</p>
          <p class="text-sm text-purple-400">Status: Upcoming</p>
        </div>
      </div>

      <!-- Phase 8 -->
      <div class="relative">
        <div class="absolute -left-6 top-1 bg-purple-700 text-white w-10 h-10 rounded-full flex items-center justify-center font-bold shadow-[0_0_10px_rgba(147,51,234,1)]">8</div>
        <div class="bg-[#1a0033] border border-purple-900 rounded-xl p-6 shadow-lg">
          <h2 class="text-2xl font-bold text-purple-300 mb-2">Phase 8: User Profile Management (CRUD)</h2>
          <p class="text-purple-200 mb-2">Profile editing in a floating neon-glass environment.</p>
          <p class="text-sm text-purple-400">Status: Planned</p>
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
