    <!-- ------------------------------------------------------------- -->
    <!-- 1. TRANSPARENT EXECUTIVE HEADER (HEIGHT 100px) -->
    <!-- ------------------------------------------------------------- -->
    <header
      id="main-header"
      class="fixed top-0 left-0 w-full z-100 flex items-center justify-between px-6 lg:px-14 transition-all duration-500 h-[100px] bg-transparent"
    >
      <!-- Left: Logo Shield -->
      <div class="flex items-center gap-3 select-none" id="header-logo">
        <a href="#home" class="flex items-center gap-4 group">
          <div class="relative flex items-center">
            <!-- Official NITA Logo -->
            <img 
              src="assets/Nita Logo.png" 
              alt="NITA Official Logo" 
              class="h-14 w-auto object-contain transition-transform duration-500 group-hover:scale-105"
            />
          </div>
          <div class="flex flex-col">
            <span class="font-bodoni text-xl font-bold tracking-widest text-white leading-none">
              NITA<span class="text-prestige-gold">@</span>100
            </span>
            <span class="font-sans text-[8px] tracking-[0.25em] text-luxury-gold mt-1 uppercase font-semibold">
              1925 — 2025
            </span>
          </div>
        </a>
      </div>

      <!-- Center: Elegant Navigation Links (Desktop only) -->
      <nav class="hidden lg:flex items-center gap-10" id="header-nav">
        <a
          href="#home"
          class="font-sans text-[11px] font-bold tracking-[0.25em] text-white/70 hover:text-luxury-gold transition-colors duration-300"
        >HOME</a>
        <a
          href="#journey"
          class="font-sans text-[11px] font-bold tracking-[0.25em] text-white/70 hover:text-luxury-gold transition-colors duration-300"
        >JOURNEY TO 100</a>
        <a
          href="#event"
          class="font-sans text-[11px] font-bold tracking-[0.25em] text-white/70 hover:text-luxury-gold transition-colors duration-300"
        >EVENT</a>
        <a
          href="#awards"
          class="font-sans text-[11px] font-bold tracking-[0.25em] text-white/70 hover:text-luxury-gold transition-colors duration-300"
        >AWARDS</a>
        <a
          href="#membership"
          class="font-sans text-[11px] font-bold tracking-[0.25em] text-white/70 hover:text-luxury-gold transition-colors duration-300"
        >MEMBERSHIP</a>
        <a
          href="#statistics"
          class="font-sans text-[11px] font-bold tracking-[0.25em] text-white/70 hover:text-luxury-gold transition-colors duration-300"
        >IMPACT</a>
        <a
          href="#contact"
          class="font-sans text-[11px] font-bold tracking-[0.25em] text-white/70 hover:text-luxury-gold transition-colors duration-300"
        >CONTACT</a>
      </nav>

      <!-- Right: Action Portal Callbacks -->
      <div class="flex items-center gap-5" id="header-actions">
        <a
          href="#membership"
          class="hidden sm:inline-flex items-center font-sans text-[11px] font-bold tracking-[0.2em] text-white/60 hover:text-white transition-all py-2 px-3 border border-white/10 hover:border-white/30 rounded"
        >
          LOGIN
        </a>
        <a
          href="#membership"
          class="relative px-6 py-3.5 text-[11px] font-extrabold tracking-[0.25em] text-white bg-prestige-gold rounded-sm shadow-[0_5px_20px_rgba(197,160,89,0.35)] hover:bg-[#A68341] transition-all duration-300 animate-glow-pulse"
        >
          REGISTER
        </a>
      </div>
    </header>
