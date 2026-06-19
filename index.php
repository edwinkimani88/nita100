<?php include 'includes/head.php'; ?>
<body class="bg-[#FAFAFA] text-slate-900 overflow-x-hidden antialiased">

    <?php include 'includes/header.php'; ?>

    <!-- ------------------------------------------------------------- -->
    <!-- 2. EPIC CINEMATIC HERO SECTION (100vh) -->
    <!-- ------------------------------------------------------------- -->
    <section
      id="home"
      class="relative h-screen w-full flex flex-col justify-center items-center overflow-hidden bg-deep-navy z-10"
    >
      <!-- Right-side cinematic photo panel — only covers the right half so left text stays legible -->
      <div class="absolute right-0 top-0 w-1/2 h-full z-0 select-none pointer-events-none hidden lg:block">
        <div class="absolute inset-0 bg-gradient-to-r from-[#091A37] via-[#091A37]/60 to-transparent z-10"></div>
        <img
          src="assets/images/kenyan_gala_dinner.jpg"
          alt="NITA Kenya Centenary Gala Dinner"
          class="w-full h-full object-cover"
        />
      </div>

      <!-- Full gradient overlay for the left text area -->
      <div class="absolute inset-0 bg-gradient-to-r from-[#091A37] via-[#091A37]/95 to-transparent pointer-events-none z-1"></div>
      <!-- Bottom fade -->
      <div class="absolute inset-0 bg-gradient-to-t from-[#091a37]/80 via-transparent to-transparent pointer-events-none z-1"></div>

      <!-- Golden Particle Sparkle system wrapper -->
      <div class="absolute inset-0 z-2 pointer-events-none overflow-hidden opacity-25">
        <div class="absolute rounded-full bg-[#D5C2A2] w-1.5 h-1.5 top-[20%] left-[30%] animate-sparkle" style="animation-delay: 1s; animation-duration: 4s;"></div>
        <div class="absolute rounded-full bg-[#D5C2A2] w-2 h-2 top-[60%] left-[75%] animate-sparkle" style="animation-delay: 3s; animation-duration: 6s;"></div>
        <div class="absolute rounded-full bg-[#D5C2A2] w-1 h-1 top-[40%] left-[15%] animate-sparkle" style="animation-delay: 0.5s; animation-duration: 5s;"></div>
        <div class="absolute rounded-full bg-[#D5C2A2] w-2.5 h-2.5 top-[80%] left-[45%] animate-sparkle" style="animation-delay: 4.5s; animation-duration: 7s;"></div>
        <div class="absolute rounded-full bg-[#D5C2A2] w-1 h-1 top-[15%] left-[85%] animate-sparkle" style="animation-delay: 2.2s; animation-duration: 3.5s;"></div>
        <div class="absolute rounded-full bg-[#D5C2A2] w-1.5 h-1.5 top-[75%] left-[10%] animate-sparkle" style="animation-delay: 1.8s; animation-duration: 4.5s;"></div>
      </div>

      <div class="container mx-auto px-6 lg:px-14 z-10 w-full grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-14 items-center h-full pt-[100px]">
        
        <!-- Left Column: Master Display Editorial Typography -->
        <div class="lg:col-span-7 flex flex-col justify-center text-left" id="hero-reveal-wrapper">
          <span
            class="text-[10px] md:text-[11px] font-bold tracking-[0.45em] text-luxury-gold uppercase mb-4 block"
          >
            National Industrial Training Authority — Est. 1925
          </span>

          <h1
            id="hero-reveal-title"
            class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-serif font-extrabold tracking-tight text-white leading-[1.08] uppercase mb-4"
            style="font-family: 'Times New Roman', Times, serif;"
          >
            A CENTURY OF<br />
            INDUSTRIAL<br />
            EXCELLENCE
          </h1>

          <h3
            id="hero-reveal-script"
            class="font-sans text-xl sm:text-3xl text-prestige-gold mb-6 tracking-wide block font-semibold"
          >
            A Rigorous, High-Prestige Recognition Ecosystem
          </h3>

          <p
            class="font-sans text-sm md:text-[15px] text-white/55 max-w-lg mb-8 font-light leading-relaxed"
          >
            For 100 years, NITA has certified Kenya's electricians, welders, mechanics, plumbers, and technicians — the skilled men and women who power our industries and build our nation. Join us at Safari Park Hotel as we celebrate them.
          </p>

          <!-- Executive Buttons with Spring dynamics -->
          <div class="flex flex-wrap gap-4 items-center" id="hero-actions-row">
            <a
              href="#membership"
              class="px-8 py-4.5 bg-prestige-gold text-white text-[11px] font-extrabold tracking-[0.25em] rounded-sm hover:bg-[#A68341] hover:shadow-[0_0_25px_rgba(197,160,89,0.5)] transition-all flex items-center gap-3 uppercase shadow-[0_5px_15px_rgba(0,0,0,0.3)]"
            >
              RESERVE YOUR SEAT
              <span class="text-xs">&rarr;</span>
            </a>
            <a
              href="#event"
              class="px-8 py-4.5 border border-white/10 hover:border-white/30 text-white text-[11px] font-extrabold tracking-[0.25em] rounded-sm bg-white/5 hover:bg-white/10 transition-all flex items-center gap-3 uppercase"
            >
              VIEW PROGRAMME
              <span class="text-luxury-gold">&#9660;</span>
            </a>
          </div>
        </div>

        <!-- Right Column: Interactive 3D SVG Centenary Logo & D-Day Countdown -->
        <div class="lg:col-span-5 flex flex-col items-center justify-center relative w-full pt-4 lg:pt-0">
          
          <!-- Outer 3D Card Containment -->
          <div
            id="hero-logo-card"
            class="w-full flex flex-col items-center justify-center p-6 sm:p-8 rounded-2xl glass-premium shadow-2xl relative select-none"
            style="transform-style: preserve-3d; backface-visibility: hidden;"
          >
            
            <!-- Animated Centenary Logo Shield -->
            <div class="w-[280px] sm:w-[340px] aspect-square relative flex items-center justify-center">
              <svg
                id="nita-logo-svg"
                viewBox="0 0 200 200"
                class="w-full h-full drop-shadow-[0_15px_30px_rgba(0,0,0,0.7)]"
              >
                <!-- Gradients and Masks -->
                <defs>
                  <!-- Mirror Highlight Mask -->
                  <linearGradient id="shine-gradient" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#ffffff" stop-opacity="0" />
                    <stop offset="50%" stop-color="#ffffff" stop-opacity="0.32" />
                    <stop offset="100%" stop-color="#ffffff" stop-opacity="0" />
                  </linearGradient>

                  <!-- Gold Gradient for Logo "100" -->
                  <linearGradient id="luxury-gold-grad" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#9C8C70" />
                    <stop offset="45%" stop-color="#D5C2A2" />
                    <stop offset="55%" stop-color="#FFFFFF" />
                    <stop offset="100%" stop-color="#80725a" />
                  </linearGradient>

                  <!-- Silver Gradient -->
                  <linearGradient id="luxury-silver-grad" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#E2E8F0" />
                    <stop offset="50%" stop-color="#94A3B8" />
                    <stop offset="100%" stop-color="#CBD5E1" />
                  </linearGradient>

                  <!-- Accent Red Gradient -->
                  <linearGradient id="luxury-red-grad" x1="0%" y1="0%" x2="100%" y2="100%">
                    <stop offset="0%" stop-color="#EF4444" />
                    <stop offset="50%" stop-color="#B8141F" />
                    <stop offset="100%" stop-color="#7F0E12" />
                  </linearGradient>

                  <!-- Clip Mask for Shine reflection sweep -->
                  <clipPath id="shine-clip-mask">
                    <circle cx="96" cy="141" r="23" />
                    <circle cx="136" cy="141" r="23" />
                  </clipPath>
                </defs>

                <!-- LAYER 1: LETTERS N, I, T, A (drawn with stroke pathLength effect) -->
                <g stroke-linecap="round" stroke-linejoin="round">
                  <!-- Letter N -->
                  <path id="path-n" class="letter-n draw-stroke" d="M 32,64 L 32,35 L 47,64 L 47,35" fill="none" stroke="#FFFFFF" stroke-width="3" style="opacity: 0;" />
                  <!-- Letter I -->
                  <path id="path-i" class="letter-i draw-stroke" d="M 54,35 L 68,35 M 61,35 L 61,64 M 54,64 L 68,64" fill="none" stroke="#FFFFFF" stroke-width="3" style="opacity: 0;" />
                  <!-- Letter T -->
                  <path id="path-t" class="letter-t draw-stroke" d="M 76,35 L 94,35 M 85,35 L 85,64" fill="none" stroke="#FFFFFF" stroke-width="3" style="opacity: 0;" />
                  <!-- Letter A -->
                  <path id="path-a" class="letter-a draw-stroke" d="M 102,64 L 111,35 L 120,64 M 105,55 L 117,55" fill="none" stroke="#FFFFFF" stroke-width="3" style="opacity: 0;" />
                  
                  <!-- NITA At-sign circle loop -->
                  <circle id="circle-at" class="loop-at draw-stroke" cx="134" cy="48" r="6.5" fill="none" stroke="#B8141F" stroke-width="1.25" style="opacity: 0;" />
                </g>
                <text id="text-symbol-at" class="text-at font-sans" x="134" y="50.5" font-size="6.5" font-weight="900" fill="#B8141F" text-anchor="middle" style="opacity: 0;">@</text>

                <!-- LAYER 2: THE CENTENARY YEAR LABEL (1926-2026) AND "YEARS" -->
                <text id="nita-years-subtitle" x="96" y="88" font-size="9.5" font-family="var(--font-bodoni)" letter-spacing="4.5" fill="#FFFFFF" text-anchor="middle" font-weight="700" style="opacity: 0;">YEARS</text>

                <!-- LAYER 3: NUMERICS - THE MASSIVE "1" AND TWO INTERLOCKING ZEROES -->
                <!-- Number "1" (rising from bottom) -->
                <path class="num-one" d="M 45,134 L 58,110 L 58,172 M 45,172 L 72,172" fill="none" stroke="url(#luxury-gold-grad)" stroke-width="6.5" stroke-linecap="round" stroke-linejoin="round" style="opacity: 0;" />

                <!-- Left Silver Zero (represented as circle) -->
                <circle class="zero-left" cx="96" cy="141" r="23" fill="none" stroke="url(#luxury-silver-grad)" stroke-width="7" style="opacity: 0;" />

                <!-- Right Red/Gold Interlock Zero -->
                <circle class="zero-right" cx="136" cy="141" r="23" fill="none" stroke="url(#luxury-red-grad)" stroke-width="7" style="opacity: 0;" />

                <!-- Interlock Arc Detail Overlay (creates interlocking illusion) -->
                <path class="interlock-overlay" d="M 113,124 A 23,23 0 0,1 119,141" fill="none" stroke="url(#luxury-silver-grad)" stroke-width="7" style="opacity: 0;" />

                <!-- LAYER 4: BOTTOM TIMESTAMP -->
                <text id="nita-years-label" x="96" y="189" font-size="10" font-family="var(--font-sans)" letter-spacing="3.5" fill="#D5C2A2" font-weight="500" text-anchor="middle" style="opacity: 0;">1925 - 2026</text>

                <!-- Dynamic Highlight sweeps traversing over the lock -->
                <g clip-path="url(#shine-clip-mask)">
                  <rect class="shine-sweep" x="-150" y="80" width="45" height="120" fill="url(#shine-gradient)" transform="skewX(-20)" style="mix-blend-mode: color-dodge;" />
                </g>
              </svg>
            </div>

            <!-- Countdown Timer Console -->
            <div class="w-full mt-4 border-t border-white/10 pt-4" id="countdown-banner">
              <span class="text-[9px] font-bold tracking-[0.35em] text-luxury-gold block mb-3 uppercase text-center opacity-80">
                COUNTDOWN TO D-DAY
              </span>
              <div class="grid grid-cols-4 gap-3 text-center">
                <div class="bg-deep-navy/90 px-2 py-3 rounded border border-white/5">
                  <div id="count-days" class="font-display font-medium text-lg md:text-xl text-white">63</div>
                  <div class="text-[8px] tracking-[0.15em] text-luxury-gold mt-1 uppercase font-bold">DAYS</div>
                </div>
                <div class="bg-deep-navy/90 px-2 py-3 rounded border border-white/5">
                  <div id="count-hours" class="font-display font-medium text-lg md:text-xl text-white">14</div>
                  <div class="text-[8px] tracking-[0.15em] text-luxury-gold mt-1 uppercase font-bold">HOURS</div>
                </div>
                <div class="bg-deep-navy/90 px-2 py-3 rounded border border-white/5">
                  <div id="count-minutes" class="font-display font-medium text-lg md:text-xl text-white">28</div>
                  <div class="text-[8px] tracking-[0.15em] text-luxury-gold mt-1 uppercase font-bold">MINS</div>
                </div>
                <div class="bg-deep-navy/90 px-2 py-3 rounded border border-[#B8141F]/30">
                  <div id="count-seconds" class="font-display font-semibold text-lg md:text-xl text-prestige-gold">45</div>
                  <div class="text-[8px] tracking-[0.15em] text-prestige-gold mt-1 uppercase font-bold text-red-glow">SEC</div>
                </div>
              </div>

              <!-- Location / Time Stamp -->
              <div class="mt-4 flex flex-col gap-1 items-center justify-center font-sans text-[10px] text-white/50 tracking-wider">
                <p class="flex items-center gap-1.5 font-bold text-white/75">
                  <span class="text-prestige-gold">&#9733;</span> THURSDAY, 30TH OCTOBER 2026
                </p>
                <p class="flex items-center gap-1 uppercase">
                  <span>&#128205;</span> SAFARI PARK HOTEL, NAIROBI, KENYA
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ------------------------------------------------------------- -->
    <!-- 2b. STRATEGIC PARTNERS BAR -->
    <!-- ------------------------------------------------------------- -->
    <section class="relative py-12 bg-white border-b border-slate-100 z-10 overflow-hidden">
      <div class="container mx-auto px-6 lg:px-14">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-10">
          <span class="font-sans text-[10px] font-bold tracking-[0.3em] text-slate-400 uppercase shrink-0">
            STRATEGIC PARTNERS IN EXCELLENCE
          </span>
          <div class="flex flex-wrap justify-center items-center gap-12 lg:gap-20">
            <img src="assets/KPRA logo.png" alt="KPRA" class="h-10 lg:h-12 w-auto object-contain hover:scale-110 transition-transform" />
            <img src="assets/Gostar logo.png" alt="Gostar Global Marketing" class="h-14 lg:h-16 w-auto object-contain hover:scale-110 transition-transform" />
            <img src="assets/Nita Logo.png" alt="NITA" class="h-12 lg:h-14 w-auto object-contain hover:scale-110 transition-transform" />
          </div>
        </div>
      </div>
    </section>


    <!-- ------------------------------------------------------------- -->
    <!-- 3. JOURNEY TO 100 SECTION (140vh + Horizontal Pin) -->
    <!-- ------------------------------------------------------------- -->
    <section id="journey" class="relative bg-white z-20 overflow-hidden select-none mb-32">
      <!-- Pinned Horizontal Scroll Wrapper (on Desktop) -->
      <div class="journey-sticky-container w-full min-h-screen lg:min-h-[110vh] flex flex-col justify-start pt-32 pb-20 lg:pb-0">
        
        <!-- Massive Watermark Background label -->
        <span class="absolute right-10 top-1/2 -translate-y-1/2 font-bodoni text-[22vw] font-black text-black/[0.015] tracking-tighter pointer-events-none z-0">
          NITA100
        </span>

        <!-- Section Entry Top Header Bar -->
        <div class="container mx-auto px-6 lg:px-14 flex flex-col lg:flex-row justify-between items-start lg:items-end z-30 mb-20 relative w-full">
          <div class="max-w-xl">
            <span class="font-sans text-[11px] font-bold tracking-[0.45em] text-prestige-gold uppercase block mb-3">
              OUR HERITAGE
            </span>
            <h2 class="text-3xl sm:text-5xl font-bodoni font-bold text-deep-navy tracking-tight leading-none uppercase">
              THE JOURNEY TO <span class="text-royal-blue">100 YEARS</span>
            </h2>
            <p class="font-sans text-xs sm:text-sm text-slate-500 mt-4 leading-relaxed font-light">
              From the first trade test centre in Nairobi to thousands of certified Kenyan craftspeople today — this is the story of NITA's century of impact on our people.
            </p>
          </div>
          <div class="mt-4 lg:mt-0">
            <a
              href="#membership"
              class="group inline-flex items-center gap-3 font-sans text-xs font-bold tracking-[0.25em] text-[#114687] hover:text-prestige-gold transition-colors border-b border-slate-200 pb-1 hover:border-[#B8141F]"
            >
              EXPLORE TIMELINE
              <span class="group-hover:translate-x-1.5 transition-transform duration-300">&rarr;</span>
            </a>
          </div>
        </div>

        <!-- TIMELINE CONTAINER FOR DESKTOP PINNED SCROLL -->
        <!-- Hidden on Mobile size, displays horizontal scroll pinning -->
        <div class="hidden lg:block relative w-full z-10 mt-2">
          
          <!-- Base Timeline Connection Line -->
          <div class="absolute top-[35px] left-14 right-14 h-[1.5px] bg-[#114687]/10" />
          <div id="timeline-glow-line" class="absolute top-[35px] left-14 h-[2.5px] bg-gradient-to-r from-[#114687] to-[#B8141F] shadow-[0_0_8px_rgba(184,20,31,0.5)] transition-all duration-300" style="width: 0%;" />

          <!-- Dynamic Horizontal Scroll Wrapper inside Main.js -->
          <div class="timeline-scroll-wrapper flex gap-24 pl-[15vw] pr-[20vw] items-start">
            
            <!-- Cards 1: 1926 Foundation -->
            <div class="w-[380px] shrink-0 flex flex-col justify-start">
              <div class="flex items-center gap-4 mb-5">
                <span class="bg-[#114687] text-white px-5 py-2 font-display font-bold text-center rounded text-sm shadow-md">
                  1926
                </span>
                <span class="w-2.5 h-2.5 rounded-full bg-prestige-gold"></span>
              </div>
              <div class="rounded-xl overflow-hidden bg-white border border-slate-100 shadow-md hover:shadow-xl transition-all duration-500 group min-h-[480px] flex flex-col">
                <div class="w-full h-[240px] bg-slate-900 overflow-hidden relative">
                  <img src="assets/images/kenyan_artisan_workshop.jpg" alt="Kenyan artisan at work" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                </div>
                <div class="p-6">
                  <h4 class="font-bodoni font-bold text-base text-slate-900 mb-2 group-hover:text-prestige-gold transition-colors uppercase">
                    NITA Is Founded
                  </h4>
                  <p class="font-sans text-xs text-slate-500 leading-relaxed font-light">
                    NITA Kenya begins its mission — equipping Kenyan men and women with practical trade skills to build and sustain our growing nation.
                  </p>
                </div>
              </div>
            </div>

            <!-- Cards 2: 1945 -->
            <div class="w-[380px] shrink-0 flex flex-col justify-start">
              <div class="flex items-center gap-4 mb-5">
                <span class="bg-[#114687] text-white px-5 py-2 font-display font-bold text-center rounded text-sm shadow-md">
                  1945
                </span>
                <span class="w-2.5 h-2.5 rounded-full bg-prestige-gold"></span>
              </div>
              <div class="rounded-xl overflow-hidden bg-white border border-slate-100 shadow-md hover:shadow-xl transition-all duration-500 group">
                <div class="w-full h-[240px] bg-slate-900 overflow-hidden relative">
                  <img src="assets/images/kenyan_gala_dinner.jpg" alt="Kenyan community gathering" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                </div>
                <div class="p-6">
                  <h4 class="font-bodoni font-bold text-base text-slate-900 mb-2 group-hover:text-prestige-gold transition-colors uppercase">
                    Growing Roots
                  </h4>
                  <p class="font-sans text-xs text-slate-500 leading-relaxed font-light">
                    Trade training centres open across Kenya — from Mombasa to Kisumu — bringing dignified skilled employment to Kenyan youth.
                  </p>
                </div>
              </div>
            </div>

            <!-- Cards 3: 1960 -->
            <div class="w-[380px] shrink-0 flex flex-col justify-start">
              <div class="flex items-center gap-4 mb-5">
                <span class="bg-[#114687] text-white px-5 py-2 font-display font-bold text-center rounded text-sm shadow-md">
                  1960s
                </span>
                <span class="w-2.5 h-2.5 rounded-full bg-prestige-gold"></span>
              </div>
              <div class="rounded-xl overflow-hidden bg-white border border-slate-100 shadow-md hover:shadow-xl transition-all duration-500 group">
                <div class="w-full h-[240px] bg-slate-900 overflow-hidden relative">
                  <img src="assets/images/kenyan_artisan_workshop.jpg" alt="Kenyan electrical technician" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                </div>
                <div class="p-6">
                  <h4 class="font-bodoni font-bold text-base text-slate-900 mb-2 group-hover:text-prestige-gold transition-colors uppercase">
                    Independence Era
                  </h4>
                  <p class="font-sans text-xs text-slate-500 leading-relaxed font-light">
                    NITA certifies Kenya's first generation of independent electricians, welders, mechanics, and plumbers — building the infrastructure of a free nation.
                  </p>
                </div>
              </div>
            </div>

            <!-- Cards 4: 1990 -->
            <div class="w-[380px] shrink-0 flex flex-col justify-start">
              <div class="flex items-center gap-4 mb-5">
                <span class="bg-[#114687] text-white px-5 py-2 font-display font-bold text-center rounded text-sm shadow-md">
                  1990s
                </span>
                <span class="w-2.5 h-2.5 rounded-full bg-prestige-gold"></span>
              </div>
              <div class="rounded-xl overflow-hidden bg-white border border-slate-100 shadow-md hover:shadow-xl transition-all duration-500 group">
                <div class="w-full h-[240px] bg-slate-900 overflow-hidden relative">
                  <img src="assets/images/kenyan_artisan_workshop.jpg" alt="NITA Kenya vocational expansion" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                </div>
                <div class="p-6">
                  <h4 class="font-bodoni font-bold text-base text-slate-900 mb-2 group-hover:text-prestige-gold transition-colors uppercase">
                    Reaching Every County
                  </h4>
                  <p class="font-sans text-xs text-slate-500 leading-relaxed font-light">
                    NITA expands its reach to all 47 counties, ensuring that no Kenyan artisan or trainee is left behind.
                  </p>
                </div>
              </div>
            </div>

            <!-- Cards 5: 2026 -->
            <div class="w-[380px] shrink-0 flex flex-col justify-start">
              <div class="flex items-center gap-4 mb-5">
                <span class="bg-[#114687] text-white px-5 py-2 font-display font-bold text-center rounded text-sm shadow-md">
                  2026
                </span>
                <span class="w-2.5 h-2.5 rounded-full bg-prestige-gold"></span>
              </div>
              <div class="rounded-xl overflow-hidden bg-white border border-slate-100 shadow-md hover:shadow-xl transition-all duration-500 group">
                <div class="w-full h-[240px] bg-slate-900 overflow-hidden relative">
                  <img src="assets/images/kenyan_gala_dinner.jpg" alt="NITA @ 100 Centenary Gala" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" />
                </div>
                <div class="p-6">
                  <h4 class="font-bodoni font-bold text-base text-slate-900 mb-2 group-hover:text-prestige-gold transition-colors uppercase">
                    NITA @ 100
                  </h4>
                  <p class="font-sans text-xs text-slate-500 leading-relaxed font-light">
                    We celebrate 100 years of Kenya's industrial workforce — and honour the electricians, mechanics, welders, and technicians who shaped our nation.
                  </p>
                </div>
              </div>
            </div>

          </div>
        </div>


        <!-- MOBILE TIMELINE: CAROUSEL WITH SWIPERJS -->
        <!-- Visible on mobile/tablet viewport sizes, swiping layout -->
        <div class="lg:hidden w-full relative z-10 px-4">
          <!-- Swiper wrapper -->
          <div class="swiper journey-swiper">
            <div class="swiper-wrapper">
              
              <!-- Slide 1 -->
              <div class="swiper-slide">
                <div class="rounded-xl overflow-hidden bg-white border border-slate-100 shadow-sm p-4 flex flex-col">
                  <div class="flex justify-between items-center mb-3">
                    <span class="bg-[#114687] text-white px-4 py-1 text-xs font-bold rounded">1926</span>
                    <span class="text-[10px] text-prestige-gold font-bold">FOUNDING</span>
                  </div>
                  <div class="w-full h-44 rounded overflow-hidden mb-3">
                    <img src="assets/images/kenyan_artisan_workshop.jpg" alt="Kenyan artisan" class="w-full h-full object-cover" />
                  </div>
                  <h4 class="font-bodoni font-bold text-base text-slate-900 uppercase">NITA Is Founded</h4>
                  <p class="font-sans text-xs text-slate-500 mt-2 font-light">NITA begins empowering Kenyan tradespeople with practical skills to build the nation.</p>
                </div>
              </div>

              <!-- Slide 2 -->
              <div class="swiper-slide">
                <div class="rounded-xl overflow-hidden bg-white border border-slate-100 shadow-sm p-4 flex flex-col">
                  <div class="flex justify-between items-center mb-3">
                    <span class="bg-[#114687] text-white px-4 py-1 text-xs font-bold rounded">1945</span>
                    <span class="text-[10px] text-prestige-gold font-bold">GROWING ROOTS</span>
                  </div>
                  <div class="w-full h-44 rounded overflow-hidden mb-3">
                    <img src="assets/images/kenyan_gala_dinner.jpg" alt="Kenyan community" class="w-full h-full object-cover" />
                  </div>
                  <h4 class="font-bodoni font-bold text-base text-slate-900 uppercase">Growing Roots</h4>
                  <p class="font-sans text-xs text-slate-500 mt-2 font-light">Trade centres open across Kenya — bringing skilled employment and dignity to Kenyan youth.</p>
                </div>
              </div>

              <!-- Slide 3 -->
              <div class="swiper-slide">
                <div class="rounded-xl overflow-hidden bg-white border border-slate-100 shadow-sm p-4 flex flex-col">
                  <div class="flex justify-between items-center mb-3">
                    <span class="bg-[#114687] text-white px-4 py-1 text-xs font-bold rounded">1960s</span>
                    <span class="text-[10px] text-prestige-gold font-bold">INDEPENDENCE ERA</span>
                  </div>
                  <div class="w-full h-44 rounded overflow-hidden mb-3">
                    <img src="assets/images/kenyan_award_ceremony.jpg" alt="Kenyan recognition" class="w-full h-full object-cover" />
                  </div>
                  <h4 class="font-bodoni font-bold text-base text-slate-900 uppercase">Independence Era</h4>
                  <p class="font-sans text-xs text-slate-500 mt-2 font-light">NITA certifies thousands of craftspeople who build the infrastructure of a free Kenya.</p>
                </div>
              </div>

              <!-- Slide 4 -->
              <div class="swiper-slide">
                <div class="rounded-xl overflow-hidden bg-white border border-slate-100 shadow-sm p-4 flex flex-col">
                  <div class="flex justify-between items-center mb-3">
                    <span class="bg-[#114687] text-white px-4 py-1 text-xs font-bold rounded">1990s</span>
                    <span class="text-[10px] text-prestige-gold font-bold">REACHING ALL COUNTIES</span>
                  </div>
                  <div class="w-full h-44 rounded overflow-hidden mb-3">
                    <img src="assets/images/kenyan_gala_hero.jpg" alt="Kenya counties" class="w-full h-full object-cover" />
                  </div>
                  <h4 class="font-bodoni font-bold text-base text-slate-900 uppercase">Reaching Every County</h4>
                  <p class="font-sans text-xs text-slate-500 mt-2 font-light">NITA reaches all 47 counties, ensuring every Kenyan artisan has access to certification and recognition.</p>
                </div>
              </div>

              <!-- Slide 5 -->
              <div class="swiper-slide">
                <div class="rounded-xl overflow-hidden bg-white border border-slate-100 shadow-sm p-4 flex flex-col">
                  <div class="flex justify-between items-center mb-3">
                    <span class="bg-[#114687] text-white px-4 py-1 text-xs font-bold rounded">2026</span>
                    <span class="text-[10px] text-prestige-gold font-bold">CENTENARY</span>
                  </div>
                  <div class="w-full h-44 rounded overflow-hidden mb-3">
                    <img src="assets/images/kenyan_trophy.jpg" alt="NITA centenary" class="w-full h-full object-cover" />
                  </div>
                  <h4 class="font-bodoni font-bold text-base text-slate-900 uppercase">NITA @ 100</h4>
                  <p class="font-sans text-xs text-slate-500 mt-2 font-light">We celebrate 100 years of Kenyan workmanship — and gather at Safari Park to honour those who made it possible.</p>
                </div>
              </div>

            </div>
            
            <!-- Swiper bullet pagination indicator -->
            <div class="swiper-pagination mt-6" />
          </div>
        </div>

      </div>
    </section>


    <!-- ------------------------------------------------------------- -->
    <!-- 4. THE GRAND CELEBRATION SECTION (100vh) -->
    <!-- ------------------------------------------------------------- -->
    <section
      id="event"
      class="cinematic-section relative min-h-screen py-32 bg-deep-navy flex flex-col justify-center items-center overflow-hidden mt-20"
    >
      <!-- Premium Mesh Grid overlay and lights -->
      <div class="absolute inset-0 bg-[linear-gradient(rgba(255,255,255,0.008)_1.5px,transparent_1.5px),linear-gradient(90deg,rgba(255,255,255,0.008)_1.5px,transparent_1.5px)] bg-[size:40px_40px] pointer-events-none z-0"></div>
      <div class="absolute top-[10%] left-[20%] w-[450px] h-[450px] bg-[#114687]/15 rounded-full blur-[140px] pointer-events-none z-0"></div>
      <div class="absolute bottom-[10%] right-[20%] w-[450px] h-[450px] bg-prestige-gold/8 rounded-full blur-[140px] pointer-events-none z-0"></div>

      <div class="container mx-auto px-6 lg:px-14 w-full z-10 text-center flex flex-col items-center relative">
        
        <span class="fade-up-item font-sans text-[11px] font-bold tracking-[0.45em] text-luxury-gold uppercase block mb-3">
          THE GRAND CELEBRATION
        </span>
        <h2 class="fade-up-item text-3xl sm:text-5xl font-bodoni font-bold text-white tracking-tight uppercase leading-[1.1] mb-5">
          A Night To Remember
        </h2>
        <p class="fade-up-item font-sans text-xs sm:text-sm text-white/50 max-w-xl font-light leading-relaxed mb-16">
          An elegant evening of appreciation, celebration, and national pride — honouring Kenya's finest craftspeople, trainers, and industry champions over a century of hard work.
        </p>

        <!-- Pushing standard luxury grid for the 5 interactive cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-5 lg:gap-6 w-full items-stretch" id="celebration-cards-grid">
          
          <!-- Card 1 -->
          <div class="celebration-glass-card relative flex flex-col text-left rounded-2xl p-6 overflow-hidden bg-white/[0.03] border border-white/[0.08] transition-all duration-300 min-h-[300px]" style="transform-style: preserve-3d;">
            <div class="flex justify-between items-center mb-6">
              <span class="text-xs font-bold text-luxury-gold/60 font-display">01</span>
              <span class="text-[9px] font-bold px-3 py-1 bg-white/5 border border-white/10 text-white uppercase tracking-wider rounded">4:00 PM</span>
            </div>
            <div class="text-3xl mb-4 text-luxury-gold">&#11142;</div>
            <h3 class="font-bodoni font-bold text-base text-white tracking-wide uppercase">ARRIVAL & WELCOME</h3>
            <p class="font-sans text-[11px] text-white/45 mt-4 leading-relaxed font-light mt-auto">
              Guests arrive and are welcomed with Kenyan hospitality — refreshments, cultural performances, and warm reception by NITA leadership.
            </p>
          </div>

          <!-- Card 2 -->
          <div class="celebration-glass-card relative flex flex-col text-left rounded-2xl p-6 overflow-hidden bg-white/[0.03] border border-white/[0.08] transition-all duration-300 min-h-[300px]" style="transform-style: preserve-3d;">
            <div class="flex justify-between items-center mb-6">
              <span class="text-xs font-bold text-luxury-gold/60 font-display">02</span>
              <span class="text-[9px] font-bold px-3 py-1 bg-white/5 border border-white/10 text-white uppercase tracking-wider rounded">5:00 PM</span>
            </div>
            <div class="text-3xl mb-4 text-luxury-gold">🎬</div>
            <h3 class="font-bodoni font-bold text-base text-white tracking-wide uppercase">CENTENARY SPEECHES</h3>
            <p class="font-sans text-[11px] text-white/45 mt-4 leading-relaxed font-light mt-auto">
              Remarks celebrating 100 years of NITA — stories of Kenyan craftspeople whose skills have shaped our towns, homes, and economy.
            </p>
          </div>

          <!-- Card 3 -->
          <div class="celebration-glass-card relative flex flex-col text-left rounded-2xl p-6 overflow-hidden bg-white/[0.03] border border-white/[0.08] transition-all duration-300 min-h-[300px]" style="transform-style: preserve-3d;">
            <div class="flex justify-between items-center mb-6">
              <span class="text-xs font-bold text-luxury-gold/60 font-display">03</span>
              <span class="text-[9px] font-bold px-3 py-1 bg-white/5 border border-white/10 text-prestige-gold uppercase tracking-wider rounded-sm font-bold bg-prestige-gold/5 border-[#B8141F]/20">7:00 PM</span>
            </div>
            <div class="text-3xl mb-4 text-prestige-gold text-red-glow">🏆</div>
            <h3 class="font-bodoni font-bold text-base text-white tracking-wide uppercase decoration-[#B8141F]">AWARDS CEREMONY</h3>
            <p class="font-sans text-[11px] text-white/45 mt-4 leading-relaxed font-light mt-auto">
              Honouring outstanding Kenyan trainers, graduates, and trade champions who have dedicated their lives to professional excellence.
            </p>
          </div>

          <!-- Card 4 -->
          <div class="celebration-glass-card relative flex flex-col text-left rounded-2xl p-6 overflow-hidden bg-white/[0.03] border border-white/[0.08] transition-all duration-300 min-h-[300px]" style="transform-style: preserve-3d;">
            <div class="flex justify-between items-center mb-6">
              <span class="text-xs font-bold text-luxury-gold/60 font-display">04</span>
              <span class="text-[9px] font-bold px-3 py-1 bg-white/5 border border-white/10 text-white uppercase tracking-wider rounded">8:30 PM</span>
            </div>
            <div class="text-3xl mb-4 text-luxury-gold">🍽️</div>
            <h3 class="font-bodoni font-bold text-base text-white tracking-wide uppercase">GALA DINNER</h3>
            <p class="font-sans text-[11px] text-white/45 mt-4 leading-relaxed font-light mt-auto">
              A sumptuous Kenyan-cuisine dinner at Safari Park Hotel, served to the sounds of live Kenyan music in a warm atmosphere of celebration.
            </p>
          </div>

          <!-- Card 5 -->
          <div class="celebration-glass-card relative flex flex-col text-left rounded-2xl p-6 overflow-hidden bg-white/[0.03] border border-white/[0.08] transition-all duration-300 min-h-[300px]" style="transform-style: preserve-3d;">
            <div class="flex justify-between items-center mb-6">
              <span class="text-xs font-bold text-luxury-gold/60 font-display">05</span>
              <span class="text-[9px] font-bold px-3 py-1 bg-white/5 border border-white/10 text-white uppercase tracking-wider rounded">10:30 PM</span>
            </div>
            <div class="text-3xl mb-4 text-luxury-gold">🎉</div>
            <h3 class="font-bodoni font-bold text-base text-white tracking-wide uppercase">CELEBRATION & FELLOWSHIP</h3>
            <p class="font-sans text-[11px] text-white/45 mt-4 leading-relaxed font-light mt-auto">
              An evening of celebration, laughter, and reconnection — sharing stories of pride, growth, and the Kenyan spirit that drives NITA.
            </p>
          </div>

        </div>

        <div class="fade-up-item mt-14" id="celebration-program-action">
          <a
            href="#membership"
            class="group inline-flex items-center gap-3 font-sans text-xs font-bold tracking-[0.25em] text-luxury-gold hover:text-prestige-gold transition-all border-b border-[#D5C2A2]/20 pb-1 hover:border-[#B8141F]"
          >
            VIEW EVENT PROGRAM
            <span class="group-hover:translate-x-1.5 transition-transform duration-300">&rarr;</span>
          </a>
        </div>

      </div>
    </section>


    <!-- ------------------------------------------------------------- -->
    <!-- 5. AWARDS SHOWCASE (Split Layout with Rotating Trophy) -->
    <!-- ------------------------------------------------------------- -->
    <section
      id="awards"
      class="cinematic-section relative min-h-screen py-24 bg-white flex flex-col justify-center overflow-hidden"
    >
      <div class="absolute left-1/4 top-1/2 -translate-y-1/2 w-[350px] h-[350px] bg-[#114687]/5 rounded-full blur-[110px] pointer-events-none z-0"></div>

      <div class="container mx-auto px-6 lg:px-14 grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center w-full z-10 relative">
        
        <!-- Left: Interactive 3D Trophy -->
        <div class="lg:col-span-5 flex justify-center items-center relative" id="awards-trophy-column">
          <!-- Backdrop spotlight glow -->
          <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[260px] h-[260px] bg-[#D5C2A2]/14 blur-[60px] pointer-events-none"></div>
          <div class="absolute -inset-5 border border-[#D5C2A2]/10 rounded-2xl pointer-events-none"></div>

          <!-- Custom 3D rotatable Box container -->
          <div
            id="awards-trophy-box"
            class="relative w-full max-w-sm aspect-[3/4] rounded-2xl overflow-hidden shadow-2xl border border-slate-100 bg-deep-navy select-none"
            style="transform-style: preserve-3d; backface-visibility: hidden;"
          >
            <!-- Heavy shading -->
            <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-[#091a37]/30 to-[#114687]/35 z-1 pointer-events-none"></div>
            
            <img
              src="assets/images/kenyan_award_ceremony.jpg"
              alt="NITA Kenya Award Ceremony"
              class="zoom-reveal-image w-full h-full object-cover opacity-95 transition-all duration-700 hover:scale-105"
            />

            <!-- Plaque Label -->
            <div class="absolute bottom-6 left-6 right-6 z-10 bg-black/45 backdrop-blur-md p-4 rounded border border-white/10" style="transform: translateZ(30px);">
              <span class="font-sans text-[8px] tracking-[0.35em] text-luxury-gold block uppercase font-bold">NITA KENYA HONOURS</span>
              <h4 class="font-bodoni text-sm font-bold text-white mt-1 uppercase tracking-wide">Celebrating Our Champions</h4>
              <p class="font-sans text-[10px] text-white/50 mt-1 font-light leading-relaxed">
                Recognising the Kenyan craftspeople, trainers, and trade leaders who built our nation with their hands.
              </p>
            </div>
          </div>
        </div>

        <!-- Right: Award categories arranged vertically -->
        <div class="lg:col-span-7 flex flex-col text-left" id="awards-content-column">
          <span class="fade-up-item font-sans text-[11px] font-bold tracking-[0.45em] text-prestige-gold uppercase block mb-3">
            STRATEGIC VISION: THE AWARD PILLARS
          </span>
          <h2 class="fade-up-item text-3xl sm:text-5xl font-bodoni font-bold text-slate-900 tracking-tight leading-none uppercase mb-5">
            WHERE INSTITUTIONAL MANDATE MEETS <span class="text-royal-blue">INDUSTRY EXCELLENCE</span>
          </h2>
          <p class="fade-up-item font-sans text-xs sm:text-sm text-slate-500 max-w-xl font-light leading-relaxed mb-10">
            The recognition framework is structurally built around NITA’s core pillars of national impact, ensuring that the awards carry immense institutional value across both public and private sectors.
          </p>

          <!-- Sequential rows with micro-staggers inside Main.js -->
          <div class="flex flex-col gap-4" id="categories-vertical-stack">
            
            <!-- Category 1 -->
            <div class="fade-up-item flex gap-4 p-5 rounded-xl border border-slate-100 bg-[#FAFAFA] hover:bg-white hover:border-royal-blue/20 transition-all duration-300">
              <div class="w-8 h-8 rounded-full bg-royal-blue text-white flex items-center justify-center font-display text-[10px] font-bold shrink-0">01</div>
              <div>
                <h4 class="font-sans text-xs font-[900] tracking-[0.1em] text-slate-900 uppercase">Workforce Development Excellence</h4>
                <p class="font-sans text-xs text-slate-500 mt-1 leading-relaxed font-light">Spotlighting organizations and institutions that have shown exceptional commitment to upskilling, practical talent acquisition, and continuous learning frameworks.</p>
              </div>
            </div>

            <!-- Category 2 -->
            <div class="fade-up-item flex gap-4 p-5 rounded-xl border border-slate-100 bg-[#FAFAFA] hover:bg-white hover:border-royal-blue/20 transition-all duration-300">
              <div class="w-8 h-8 rounded-full bg-royal-blue text-white flex items-center justify-center font-display text-[10px] font-bold shrink-0">02</div>
              <div>
                <h4 class="font-sans text-xs font-[900] tracking-[0.1em] text-slate-900 uppercase">Industrial Innovation & Productivity</h4>
                <p class="font-sans text-xs text-slate-500 mt-1 leading-relaxed font-light">Honoring the visionaries and enterprises introducing ground-breaking technical training programs, apprenticeships, and modernizations that close industry skills gaps.</p>
              </div>
            </div>

            <!-- Category 3 -->
            <div class="fade-up-item flex gap-4 p-5 rounded-xl border border-slate-100 bg-[#FAFAFA] hover:bg-white hover:border-royal-blue/20 transition-all duration-300">
              <div class="w-8 h-8 rounded-full bg-royal-blue text-white flex items-center justify-center font-display text-[10px] font-bold shrink-0">03</div>
              <div>
                <h4 class="font-sans text-xs font-[900] tracking-[0.1em] text-slate-900 uppercase">Strategic Collaboration & Alliances</h4>
                <p class="font-sans text-xs text-slate-500 mt-1 leading-relaxed font-light">Recognizing the powerful partnerships forged between government, academia, development agencies, and private employers to build Kenya’s human capital.</p>
              </div>
            </div>

          </div>

          <div class="fade-up-item mt-10">
            <a
              href="#membership"
              class="group inline-flex items-center gap-3 font-sans text-xs font-bold tracking-[0.25em] text-[#114687] hover:text-prestige-gold transition-colors border-b border-slate-200 pb-1 hover:border-[#B8141F]"
            >
              SEE ALL AWARD CATEGORIES
              <span class="group-hover:translate-x-1.5 transition-transform duration-300">&rarr;</span>
            </a>
          </div>

        </div>

      </div>
    </section>


    <!-- ------------------------------------------------------------- -->
    <!-- 6. MEMBERSHIP SECTION (Glassmorphism + Form + Floating Card) -->
    <!-- ------------------------------------------------------------- -->
    <section
      id="membership"
      class="cinematic-section relative min-h-screen py-24 bg-[#091A37] flex flex-col justify-center overflow-hidden"
    >
      <div class="absolute top-[20%] left-0 w-[400px] h-[400px] bg-[#114687]/15 rounded-full blur-[130px] pointer-events-none z-0"></div>
      <div class="absolute bottom-10 right-0 w-[450px] h-[450px] bg-prestige-gold/8 rounded-full blur-[130px] pointer-events-none z-0"></div>

      <div class="container mx-auto px-6 lg:px-14 grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-14 items-center w-full z-10 relative">
        
        <!-- Left: Editorial Column -->
        <div class="lg:col-span-5 flex flex-col text-left" id="membership-benefit-column">
          <span class="fade-up-item font-sans text-[11px] font-bold tracking-[0.45em] text-luxury-gold uppercase block mb-3">
            RESERVE YOUR SEAT
          </span>
          <h2 class="fade-up-item text-3xl sm:text-5xl font-bodoni font-bold text-white tracking-tight leading-none uppercase mb-6">
            ATTEND THE<br /><span class="text-luxury-gold">GALA DINNER</span>
          </h2>
          <p class="fade-up-item font-sans text-xs sm:text-sm text-white/55 leading-relaxed font-light mb-10">
            Secure your place at the NITA @ 100 Centenary Gala Dinner on 30th October 2026 at Safari Park Hotel, Nairobi. An evening of celebration, recognition, and Kenyan pride.
          </p>

          <!-- Evening highlights (GGMC Execution Model) -->
          <div class="flex flex-col gap-6" id="membership-perks-stack">
            <div class="fade-up-item flex items-start gap-4">
              <span class="text-xl text-prestige-gold font-semibold mt-0.5">&#10004;</span>
              <div>
                <h4 class="font-sans text-[11px] font-bold tracking-wider text-white uppercase">Red-Carpet Arrival & Media Spotlight</h4>
                <p class="font-sans text-xs text-white/45 mt-0.5 leading-relaxed font-light">Step into the Jambo Room at Safari Park with professional media interviews and live-streamed arrivals, instantly establishing the evening's prestige.</p>
              </div>
            </div>

            <div class="fade-up-item flex items-start gap-4">
              <span class="text-xl text-prestige-gold font-semibold mt-0.5">&#10004;</span>
              <div>
                <h4 class="font-sans text-[11px] font-bold tracking-wider text-white uppercase">Interactive Digital Nominee Wall</h4>
                <p class="font-sans text-xs text-white/45 mt-0.5 leading-relaxed font-light">Every nominee's inspiring story and training milestone dynamically showcased on the main stage screens to the entire industry audience.</p>
              </div>
            </div>

            <div class="fade-up-item flex items-start gap-4">
              <span class="text-xl text-prestige-gold font-semibold mt-0.5">&#10004;</span>
              <div>
                <h4 class="font-sans text-[11px] font-bold tracking-wider text-white uppercase">Live Adjudication & Multi-Sector Presentation</h4>
                <p class="font-sans text-xs text-white/45 mt-0.5 leading-relaxed font-light">Experience the build-up of live reveals by industry titans and govt dignitaries, celebrating how dedication drives national development.</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Right: Glassmorphic form & floating card image -->
        <div class="lg:col-span-7 flex flex-col md:flex-row gap-8 items-center justify-end relative" id="registration-form-column">
          
          <!-- Master Floating Card Image (displays interactive floating parallax) -->
          <div
            id="nita-floating-card"
            class="hidden md:block absolute -left-16 top-1/4 w-[240px] aspect-[1.586/1] rounded-xl overflow-hidden shadow-2xl border border-white/10 bg-slate-900 select-none z-20 pointer-events-none animate-float-card"
          >
            <!-- card cover image -->
            <img src="assets/images/membership_card_float_1781702316378.jpg" alt="Centenary Member card" class="w-full h-full object-cover opacity-85" />
          </div>

          <!-- Glass Register Form container -->
          <div class="w-full max-w-[480px] rounded-2xl glass-premium p-6 sm:p-8 shadow-2xl relative z-10 border border-white/[0.08]">
            <span class="font-sans text-[9px] font-bold tracking-[0.3em] text-luxury-gold block mb-2 uppercase text-center">
              GALA DINNER — 30TH OCTOBER 2026
            </span>
            <span class="font-sans text-[8px] text-white/40 block mb-6 text-center tracking-wider">
              📍 Safari Park Hotel, Nairobi
            </span>

            <form id="nita-membership-form" class="flex flex-col gap-5">
              
              <div class="flex flex-col gap-1.5">
                <label class="font-sans text-[10px] font-bold tracking-[0.1em] text-luxury-gold uppercase">Full Name</label>
                <input
                  type="text"
                  required
                  placeholder="Your full name"
                  class="w-full px-4 py-3 bg-deep-navy/80 rounded border border-white/10 text-white font-sans text-xs focus:outline-none focus:border-[#B8141F] transition-colors placeholder:text-white/20"
                />
              </div>

              <div class="flex flex-col gap-1.5">
                <label class="font-sans text-[10px] font-bold tracking-[0.1em] text-luxury-gold uppercase">Email Address</label>
                <input
                  type="email"
                  required
                  placeholder="your@email.com"
                  class="w-full px-4 py-3 bg-deep-navy/80 rounded border border-white/10 text-white font-sans text-xs focus:outline-none focus:border-[#B8141F] transition-colors placeholder:text-white/20"
                />
              </div>

              <div class="flex flex-col gap-1.5">
                <label class="font-sans text-[10px] font-bold tracking-[0.1em] text-luxury-gold uppercase">Organisation / Company</label>
                <input
                  type="text"
                  required
                  placeholder="Your organisation"
                  class="w-full px-4 py-3 bg-deep-navy/80 rounded border border-white/10 text-white font-sans text-xs focus:outline-none focus:border-[#B8141F] transition-colors placeholder:text-white/20"
                />
              </div>

              <div class="flex flex-col gap-1.5">
                <label class="font-sans text-[10px] font-bold tracking-[0.1em] text-luxury-gold uppercase">Phone Number</label>
                <input
                  type="tel"
                  required
                  placeholder="+254 7XX XXX XXX"
                  class="w-full px-4 py-3 bg-deep-navy/80 rounded border border-white/10 text-white font-sans text-xs focus:outline-none focus:border-[#B8141F] transition-colors placeholder:text-white/20"
                />
              </div>

              <div class="flex flex-col gap-1.5">
                <label class="font-sans text-[10px] font-bold tracking-[0.1em] text-luxury-gold uppercase">No. of Seats</label>
                <select class="w-full px-4 py-3 bg-deep-navy/80 rounded border border-white/10 text-white font-sans text-xs focus:outline-none focus:border-[#B8141F] transition-colors">
                  <option value="1">1 Seat</option>
                  <option value="2">2 Seats</option>
                  <option value="3">3 Seats</option>
                  <option value="table">Full Table (10)</option>
                </select>
              </div>

                <button
                  type="submit"
                  class="w-full mt-2 py-4 bg-prestige-gold text-white text-[11px] font-extrabold tracking-[0.3em] uppercase rounded shadow-[0_4px_15px_rgba(197,160,89,0.35)] hover:bg-[#A68341] hover:shadow-[0_4px_25px_rgba(197,160,89,0.6)] focus:outline-none transition-all duration-300"
                >
                  RESERVE MY SEAT &rarr;
                </button>

              <p class="font-sans text-[9px] text-white/30 text-center leading-relaxed mt-2 uppercase tracking-wide">
                Your details will be used solely to confirm your attendance at the NITA @ 100 Gala Dinner.
              </p>
            </form>
          </div>

        </div>

      </div>
    </section>


    <!-- ------------------------------------------------------------- -->
    <!-- 7. STATISTICS SECTION (Odometer Counters) -->
    <!-- ------------------------------------------------------------- -->
    <section
      id="statistics"
      class="cinematic-section relative min-h-[90vh] py-24 bg-white flex flex-col justify-center overflow-hidden z-20"
    >
      <div class="container mx-auto px-6 lg:px-14 grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-14 items-center w-full z-10">
        
        <!-- Left: Big numbers statistics block -->
        <div class="lg:col-span-7 flex flex-col text-left" id="statistics-numerical-column">
          <span class="fade-up-item font-sans text-[11px] font-bold tracking-[0.45em] text-prestige-gold uppercase block mb-3">
            A CENTURY OF SERVICE TO KENYA
          </span>
          <h2 class="fade-up-item text-3xl sm:text-5xl font-bodoni font-bold text-slate-900 tracking-tight leading-tighter uppercase mb-2">
            100 Years of Kenyan Pride
          </h2>
          <h3 class="fade-up-item font-cormorant text-xl sm:text-2xl font-semibold italic text-[#114687] tracking-wider mb-12">
            Equipping hands. Empowering lives. Building Kenya.
          </h3>

          <!-- Grid numbers with GSAP count-up targets -->
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-8 lg:gap-12" id="statistics-counters-grid">
            
            <div class="fade-up-item border-l-2 border-slate-100 pl-6">
              <span class="font-display font-medium text-4xl sm:text-5xl lg:text-[54px] text-slate-900 tracking-tight leading-none block">
                <span class="stat-counter-val">100</span>
              </span>
              <span class="font-sans text-[10px] font-bold tracking-[0.25em] text-[#114687] uppercase block mt-2">YEARS</span>
              <p class="font-sans text-xs text-slate-400 mt-1 font-light">Certifying Kenya's industrial workforce in electrical installation, welding, motor vehicle mechanics, plumbing, and building from 1926 to today.</p>
            </div>

            <div class="fade-up-item border-l-2 border-slate-100 pl-6">
              <span class="font-display font-medium text-4xl sm:text-5xl lg:text-[54px] text-slate-900 tracking-tight leading-none block">
                <span class="stat-counter-val">47</span>
              </span>
              <span class="font-sans text-[10px] font-bold tracking-[0.25em] text-[#114687] uppercase block mt-2">COUNTIES REACHED</span>
              <p class="font-sans text-xs text-slate-400 mt-1 font-light">NITA's training programmes and certification centres serve every county in Kenya.</p>
            </div>

            <div class="fade-up-item border-l-2 border-slate-100 pl-6">
              <span class="font-display font-medium text-4xl sm:text-5xl lg:text-[54px] text-prestige-gold tracking-tight leading-none block select-none">
                <span class="stat-counter-val text-red-glow">500</span><span class="text-prestige-gold font-bold">+</span>
              </span>
              <span class="font-sans text-[10px] font-bold tracking-[0.25em] text-prestige-gold uppercase block mt-2 font-black">KENYANS HONOURED</span>
              <p class="font-sans text-xs text-slate-400 mt-1 font-light">Outstanding Kenyan tradespeople and trainers recognised through NITA's annual awards over the decades.</p>
            </div>

            <div class="fade-up-item border-l-2 border-slate-100 pl-6">
              <span class="font-display font-semibold text-3xl sm:text-4xl text-slate-900 tracking-tight leading-none block uppercase">
                Thousands
              </span>
              <span class="font-sans text-[10px] font-bold tracking-[0.25em] text-[#114687] uppercase block mt-3">LIVES CHANGED</span>
              <p class="font-sans text-xs text-slate-400 mt-1 font-light">Kenyan artisans, plumbers, electricians, welders, and mechanics whose lives and families were transformed by NITA training.</p>
            </div>

          </div>
        </div>

        <!-- Right: Columns Image with scroll parallax -->
        <div class="lg:col-span-5 flex justify-center h-full relative" id="statistics-imagery-column">
          <div class="absolute -inset-4 border border-[#D5C2A2]/10 rounded-2xl pointer-events-none"></div>
          <div class="w-full max-w-sm aspect-[4/5] rounded-2xl overflow-hidden shadow-2xl relative bg-deep-navy">
            <img
              src="assets/images/kenyan_artisan_workshop.jpg"
              alt="Kenyan artisan at work"
              class="zoom-reveal-image w-full h-full object-cover opacity-95"
            />
          </div>
        </div>

      </div>
    </section>


    <!-- ------------------------------------------------------------- -->
    <!-- 8. FINAL SECTION: LEGACY CONTINUES -->
    <!-- ------------------------------------------------------------- -->
    <section
      class="relative h-[90vh] lg:h-screen w-full flex flex-col justify-center items-center overflow-hidden bg-deep-navy z-10"
    >
      <!-- Parallax backdrop image representing architectural pillars with tiny human silhouette -->
      <div class="absolute inset-0 z-0 opacity-55 select-none pointer-events-none">
        <img
          src="assets/images/kenyan_gala_dinner.jpg"
          alt="NITA Kenya Centenary Gala Dinner"
          class="w-full h-full object-cover scale-102"
        />
      </div>

      <!-- Atmospheric Dark Layer -->
      <div class="absolute inset-0 bg-gradient-to-t from-[#091a37] via-[#091a37]/70 to-[#091a37]/80 pointer-events-none z-1"></div>

      <!-- Centered Cinematic Headlines -->
      <div class="container mx-auto px-6 lg:px-14 z-10 text-center flex flex-col items-center justify-center max-w-4xl relative">
        
        <span class="font-sans text-[10px] md:text-[11px] font-bold tracking-[0.45em] text-luxury-gold uppercase mb-4 block animate-pulse">
          30TH OCTOBER 2026 · SAFARI PARK HOTEL · NAIROBI
        </span>

        <h2 class="text-3xl sm:text-5xl md:text-[62px] font-bodoni font-bold text-white tracking-tight uppercase leading-[1.1] mb-5">
          Join Us for a Night of<br />
          <span class="text-luxury-gold text-luxury-glow">Kenyan Pride & Celebration.</span>
        </h2>

        <p class="font-sans text-xs sm:text-sm text-white/55 max-w-lg mb-10 leading-relaxed font-light">
          Be part of this historic evening as we gather to celebrate 100 years of Kenyan craftmanship, honour our finest people, and write the next chapter of NITA's story together.
        </p>

        <!-- Centered Action Button with glowing shadow pulse -->
        <a
          href="#membership"
          class="px-10 py-5 bg-prestige-gold text-white text-[11px] font-extrabold tracking-[0.3em] rounded-sm hover:bg-[#9c1018] shadow-[0_8px_25px_rgba(184,20,31,0.45)] hover:shadow-[0_8px_35px_rgba(184,20,31,0.7)] hover:scale-103 transition-all duration-300 uppercase inline-flex items-center gap-3 animate-glow-pulse"
        >
          Reserve Your Seat Today
          <span class="text-xs">&rarr;</span>
        </a>

      </div>
    </section>

    <?php include 'includes/footer.php'; ?>
