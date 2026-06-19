/**
 * NITA @ 100 Centenary Master Design Controller
 * Core animation and interaction logic for luxury corporate showcase
 */

document.addEventListener("DOMContentLoaded", () => {
  // -------------------------------------------------------------
  // 1. STABLE EXTERNAL ENGINE INTEGRATION (LENIS, GSAP, SWIPER)
  // -------------------------------------------------------------
  
  // Custom helper to load library references dynamically if double-safeguarding is needed,
  // but we prefer loading them via standard HTML CDN scripts.
  const gsapInstance = window.gsap;
  const ScrollTriggerInstance = window.ScrollTrigger;
  const LenisInstance = window.Lenis;
  const SwiperInstance = window.Swiper;

  // Let GSAP know about ScrollTrigger
  if (gsapInstance && ScrollTriggerInstance) {
    gsapInstance.registerPlugin(ScrollTriggerInstance);
  }

  // -------------------------------------------------------------
  // 2. LENIS SMOOTH SCROLLER & ANCHOR ROUTING
  // -------------------------------------------------------------
  let lenis;
  if (LenisInstance) {
    lenis = new LenisInstance({
      duration: 1.2,
      easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // Luxurious deceleration
      direction: 'vertical',
      gestureDirection: 'vertical',
      smooth: true,
      mouseMultiplier: 1.0,
      smoothTouch: false
    });

    lenis.on('scroll', () => {
      if (ScrollTriggerInstance) {
        ScrollTriggerInstance.update();
      }
    });

    function raf(time) {
      lenis.raf(time);
      requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    // Smooth scroll to anchor links with luxurious deceleration
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const targetId = this.getAttribute('href');
        if (targetId === '#') return;
        const targetEl = document.querySelector(targetId);
        if (targetEl) {
          lenis.scrollTo(targetEl, {
            offset: -80, // offset for the luxury header size
            duration: 1.5,
            immediate: false
          });
        }
      });
    });
  }

  // -------------------------------------------------------------
  // 3. HEADER BLUR AFTER SCROLL
  // -------------------------------------------------------------
  const header = document.getElementById("main-header");
  const handleScroll = () => {
    if (window.scrollY > 100) {
      header.classList.add("glass-active");
    } else {
      header.classList.remove("glass-active");
    }
  };
  window.addEventListener("scroll", handleScroll);
  handleScroll(); // Trigger initially on page refresh

  // -------------------------------------------------------------
  // 4. NITA 100 SVG ANIMATION SEQUENCE (GSAP TIMELINE)
  // -------------------------------------------------------------
  if (gsapInstance) {
    const svgTl = gsapInstance.timeline({
      defaults: { ease: "power2.out", duration: 1.0 }
    });

    // 4.1. Letters N I T A appear stroke-by-stroke
    // Select path lengths to animate stroke drawing effect using standard JS properties
    const strokePaths = document.querySelectorAll("#nita-logo-svg path.draw-stroke");
    strokePaths.forEach((path) => {
      const length = path.getTotalLength();
      gsapInstance.set(path, {
        strokeDasharray: length,
        strokeDashoffset: length,
        opacity: 1
      });
    });

    // Construct the elegant staggered drawing sequence
    svgTl.to("#nita-logo-svg path.letter-n", { strokeDashoffset: 0, duration: 1.2 }, 0.2);
    svgTl.to("#nita-logo-svg path.letter-i", { strokeDashoffset: 0, duration: 0.8 }, 0.8);
    svgTl.to("#nita-logo-svg path.letter-t", { strokeDashoffset: 0, duration: 0.8 }, 1.3);
    svgTl.to("#nita-logo-svg path.letter-a", { strokeDashoffset: 0, duration: 1.0 }, 1.7);
    
    // Draw @ loop
    svgTl.to("#nita-logo-svg .loop-at", { strokeDashoffset: 0, duration: 1.0, opacity: 1 }, 2.2);
    svgTl.to("#nita-logo-svg .text-at", { opacity: 1, duration: 0.5 }, 2.6);

    // 4.2. Number "1" rises up
    svgTl.fromTo("#nita-logo-svg .num-one", 
      { y: 35, opacity: 0 }, 
      { y: 0, opacity: 1, duration: 1.4, ease: "back.out(1.7)" }, 
      2.0
    );

    // 4.3. Left and Right Zeroes scale, interlock and rotate
    svgTl.fromTo("#nita-logo-svg .zero-left", 
      { scale: 0, opacity: 0, transformOrigin: "96px 141px" }, 
      { scale: 1, opacity: 1, duration: 1.6, ease: "elastic.out(1, 0.75)" }, 
      2.4
    );

    svgTl.fromTo("#nita-logo-svg .zero-right", 
      { scale: 0, opacity: 0, transformOrigin: "136px 141px" }, 
      { scale: 1, opacity: 1, duration: 1.6, ease: "elastic.out(1, 0.75)" }, 
      2.8
    );

    // Gentle rotation of the Zeroes
    svgTl.to("#nita-logo-svg .zero-left", { rotation: 360, transformOrigin: "96px 141px", duration: 2.2, ease: "power1.inOut" }, 2.4);
    svgTl.to("#nita-logo-svg .zero-right", { rotation: -360, transformOrigin: "136px 141px", duration: 2.2, ease: "power1.inOut" }, 2.8);

    // Fades in the overlapping arc details so they appear intertwined
    svgTl.fromTo("#nita-logo-svg .interlock-overlay", 
      { opacity: 0 }, 
      { opacity: 1, duration: 0.8 }, 
      4.2
    );

    // 4.4. Years 1926 - 2026 and standard label fade upward
    svgTl.fromTo("#nita-years-label", 
      { y: 20, opacity: 0 }, 
      { y: 0, opacity: 1, duration: 1.0, ease: "power3.out" }, 
      4.0
    );
    svgTl.fromTo("#nita-years-subtitle", 
      { y: -10, opacity: 0 }, 
      { y: 0, opacity: 0.85, duration: 1.0 }, 
      3.8
    );

    // 4.5. Every 20 seconds: light sweep traveling across the logo
    const triggerSweep = () => {
      gsapInstance.fromTo("#nita-logo-svg .shine-sweep",
        { x: -150 },
        { x: 300, duration: 2.2, ease: "power2.inOut" }
      );
    };
    setInterval(triggerSweep, 20000);
    // Initial sweep run after timeline is complete
    setTimeout(triggerSweep, 6000);

    // 4.6. Hover interaction: gentle 3D card tilt
    const logoCard = document.getElementById("hero-logo-card");
    if (logoCard) {
      logoCard.addEventListener("mousemove", (e) => {
        const rect = logoCard.getBoundingClientRect();
        const centerX = rect.left + rect.width / 2;
        const centerY = rect.top + rect.height / 2;
        const rotateY = ((e.clientX - centerX) / (rect.width / 2)) * 14;  // Max 14 deg
        const rotateX = -((e.clientY - centerY) / (rect.height / 2)) * 14; 

        gsapInstance.to(logoCard, {
          rotateX: rotateX,
          rotateY: rotateY,
          transformPerspective: 1000,
          ease: "power2.out",
          duration: 0.5,
          shadow: "0 35px 65px rgba(0,0,0,0.6)"
        });
      });

      logoCard.addEventListener("mouseleave", () => {
        gsapInstance.to(logoCard, {
          rotateX: 0,
          rotateY: 0,
          ease: "power3.out",
          duration: 0.8
        });
      });
    }

    // -------------------------------------------------------------
    // 5. Hero Reveal Sequence (Simplified)
    // -------------------------------------------------------------
    gsapInstance.from("#hero-reveal-title", {
      opacity: 0,
      y: 30,
      duration: 1.2,
      ease: "power3.out",
      delay: 0.5
    });

    // Handwriting Script Reveal
    gsapInstance.fromTo("#hero-reveal-script", 
      { opacity: 0, scale: 0.95 },
      { opacity: 1, scale: 1, duration: 1.5, delay: 1.6, ease: "power2.out" }
    );
  }

  // -------------------------------------------------------------
  // 6. COUNTDOWN CONSOLE WIDGET
  // -------------------------------------------------------------
  const dDay = new Date("2026-09-12T19:00:00").getTime();
  const daysEl = document.getElementById("count-days");
  const hoursEl = document.getElementById("count-hours");
  const minutesEl = document.getElementById("count-minutes");
  const secondsEl = document.getElementById("count-seconds");

  const updateCountdown = () => {
    const now = new Date().getTime();
    const diff = dDay - now;

    if (diff <= 0) {
      if (daysEl) daysEl.innerText = "00";
      if (hoursEl) hoursEl.innerText = "00";
      if (minutesEl) minutesEl.innerText = "00";
      if (secondsEl) secondsEl.innerText = "00";
      return;
    }

    const days = Math.floor(diff / (1000 * 60 * 60 * 24));
    const hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    const minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((diff % (1000 * 60)) / 1000);

    if (daysEl) daysEl.innerText = days.toString().padStart(2, "0");
    if (hoursEl) hoursEl.innerText = hours.toString().padStart(2, "0");
    if (minutesEl) minutesEl.innerText = minutes.toString().padStart(2, "0");
    if (secondsEl) secondsEl.innerText = seconds.toString().padStart(2, "0");
  };
  setInterval(updateCountdown, 1000);
  updateCountdown();

  // -------------------------------------------------------------
  // 7. HORIZONTAL TIMELINE SCROLL (Desktop GSAP Pin)
  // -------------------------------------------------------------
  if (gsapInstance && ScrollTriggerInstance) {
    const mm = gsapInstance.matchMedia();

    mm.add("(min-width: 1024px)", () => {
      const timelineContainer = document.querySelector(".journey-sticky-container");
      const scrollWrapper = document.querySelector(".timeline-scroll-wrapper");

      if (timelineContainer && scrollWrapper) {
        gsapInstance.to(scrollWrapper, {
          x: () => -(scrollWrapper.scrollWidth - window.innerWidth),
          ease: "none",
          scrollTrigger: {
            trigger: "#journey",
            pin: true,
            pinSpacing: true, // Explicitly enable to ensure next section is pushed down
            scrub: 1.0,
            start: "top top",
            end: () => `+=${scrollWrapper.scrollWidth - window.innerWidth}`,
            invalidateOnRefresh: true,
            onUpdate: (self) => {
              const glowLine = document.getElementById("timeline-glow-line");
              if (glowLine) glowLine.style.width = `${self.progress * 100}%`;
            }
          }
        });
      }
    });
  }

  // -------------------------------------------------------------
  // 8. SWIPER JS MOBILE IMPLEMENTATION (FALLBACK CAROUSEL)
  // -------------------------------------------------------------
  const isMobileSize = () => window.innerWidth < 1024;

  let journeySwiper;
  const initSwiper = () => {
    if (SwiperInstance && isMobileSize()) {
      const swiperContainer = document.querySelector(".journey-swiper");
      if (swiperContainer && !journeySwiper) {
        journeySwiper = new SwiperInstance(".journey-swiper", {
          slidesPerView: 1.1,
          spaceBetween: 20,
          centeredSlides: false,
          grabCursor: true,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true
          }
        });
      }
    } else {
      if (journeySwiper) {
        journeySwiper.destroy(true, true);
        journeySwiper = undefined;
      }
    }
  };
  window.addEventListener("resize", initSwiper);
  initSwiper();

  // -------------------------------------------------------------
  // 9. CELEBRATION GLASS CARDS MOUSE REFLECTION GLOW
  // -------------------------------------------------------------
  const glassCards = document.querySelectorAll(".celebration-glass-card");
  glassCards.forEach((card) => {
    card.addEventListener("mousemove", (e) => {
      const rect = card.getBoundingClientRect();
      const x = e.clientX - rect.left;
      const y = e.clientY - rect.top;
      
      card.style.setProperty("--mouse-x", `${x}px`);
      card.style.setProperty("--mouse-y", `${y}px`);
    });
  });

  // -------------------------------------------------------------
  // 10. AWARDS ROTATING TROPHY (3D CURSOR INTERACTION)
  // -------------------------------------------------------------
  const awardsSection = document.getElementById("awards");
  const trophyBox = document.getElementById("awards-trophy-box");

  if (awardsSection && trophyBox && gsapInstance) {
    awardsSection.addEventListener("mousemove", (e) => {
      const rect = awardsSection.getBoundingClientRect();
      const centerX = rect.left + rect.width / 2;
      const centerY = rect.top + rect.height / 2;
      const rotateY = ((e.clientX - centerX) / (rect.width / 2)) * 14;   // Max 14deg
      const rotateX = -((e.clientY - centerY) / (rect.height / 2)) * 14;

      gsapInstance.to(trophyBox, {
        rotateX: rotateX,
        rotateY: rotateY,
        transformPerspective: 1200,
        ease: "power2.out",
        duration: 0.6
      });
    });

    awardsSection.addEventListener("mouseleave", () => {
      gsapInstance.to(trophyBox, {
        rotateX: 0,
        rotateY: 0,
        ease: "power3.out",
        duration: 1.2
      });
    });
  }

  // -------------------------------------------------------------
  // 11. DYNAMIC STATISTICS COUNT-UP SYSTEM
  // -------------------------------------------------------------
  if (gsapInstance && ScrollTriggerInstance) {
    const statsSection = document.getElementById("statistics");
    if (statsSection) {
      const animCounters = document.querySelectorAll(".stat-counter-val");
      
      gsapInstance.from(animCounters, {
        scrollTrigger: {
          trigger: "#statistics",
          start: "top 80%",
          once: true
        },
        duration: 2.2,
        innerText: 0,
        snap: { innerText: 1 },
        stagger: 0.25,
        ease: "power3.out",
        onUpdate: function() {
          // Format integers to local formatted string
          animCounters.forEach((counter) => {
            const rawVal = parseFloat(counter.innerHTML);
            if (!isNaN(rawVal)) {
              counter.innerText = Math.round(rawVal).toLocaleString();
            }
          });
        }
      });
    }
  }

  // -------------------------------------------------------------
  // 12. MEMBERSHIP FORM SUBMISSION & CARD FLOATER WIGGLE
  // -------------------------------------------------------------
  const memberForm = document.getElementById("nita-membership-form");
  if (memberForm) {
    memberForm.addEventListener("submit", (e) => {
      e.preventDefault();
      
      // Animate submit button feedback
      const submitBtn = memberForm.querySelector("button[type='submit']");
      if (submitBtn) {
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = "PROVISIONING MEMBER ACCESS...";
        submitBtn.style.opacity = "0.7";
        submitBtn.setAttribute("disabled", "true");

        setTimeout(() => {
          submitBtn.innerHTML = "REGISTRATION COMPLETED &oplus;";
          submitBtn.classList.remove("bg-[#B8141F]");
          submitBtn.classList.add("bg-emerald-600");
          submitBtn.style.opacity = "1";
          
          alert("Thank you! For safety and standard guidelines, your NITA Centenary credentials have been prepared. An email with security codes has been dispatched!");
          memberForm.reset();
        }, 1500);
      }
    });
  }

  // Gentle 3D float relative to mouse movement in membership section
  const membershipSec = document.getElementById("membership");
  const floatingMemberCard = document.getElementById("nita-floating-card");
  if (membershipSec && floatingMemberCard && gsapInstance) {
    membershipSec.addEventListener("mousemove", (e) => {
      const rect = membershipSec.getBoundingClientRect();
      const centerX = rect.left + rect.width / 2;
      const centerY = rect.top + rect.height / 2;
      const deltaX = (e.clientX - centerX) / (rect.width / 2);
      const deltaY = (e.clientY - centerY) / (rect.height / 2);

      gsapInstance.to(floatingMemberCard, {
        x: deltaX * 35,
        y: deltaY * 35,
        rotateZ: deltaX * -6,
        ease: "power2.out",
        duration: 0.8
      });
    });
  }

  // -------------------------------------------------------------
  // 13. GLOBAL SECTION ENTRY ANIMATIONS (GSAP SCROLLTRIGGER)
  // -------------------------------------------------------------
  if (gsapInstance && ScrollTriggerInstance) {
    const fadeSections = document.querySelectorAll(".cinematic-section");
    fadeSections.forEach((section) => {
      if (section.id === "home") return;

      // Force visibility initially and then let GSAP handle the reveal
      gsapInstance.set(section.querySelectorAll(".fade-up-item"), { opacity: 1, y: 0 });

      gsapInstance.from(section.querySelectorAll(".fade-up-item"), {
        opacity: 0,
        y: 60,
        duration: 0.8,
        stagger: 0.1,
        ease: "power2.out",
        scrollTrigger: {
          trigger: section,
          start: "top 90%", // Trigger earlier
          toggleActions: "play none none none"
        }
      });

      // Smooth zoom transition on images in the section
      const revealImgs = section.querySelectorAll(".zoom-reveal-image");
      revealImgs.forEach((img) => {
        gsapInstance.set(img, { opacity: 1, scale: 1 });
        gsapInstance.from(img, {
          scale: 1.25,
          opacity: 0,
          duration: 1.2,
          ease: "power2.out",
          scrollTrigger: {
            trigger: section,
            start: "top 90%"
          }
        });
      });
    });

    // Failsafe: Trigger refresh on complete page load and after a brief timeout
    window.addEventListener("load", () => {
      ScrollTriggerInstance.refresh();
      setTimeout(() => ScrollTriggerInstance.refresh(), 500);
      setTimeout(() => ScrollTriggerInstance.refresh(), 2000);
    });
  }

  // -------------------------------------------------------------
  // 14. VISIBILITY FAILSAFE — ensure sections never stay invisible
  // -------------------------------------------------------------
  // If GSAP ScrollTrigger animations never fire (CDN timeout, ad-blocker, etc.),
  // force all fade-up-items to be visible.
  const forceVisibility = () => {
    document.querySelectorAll(".fade-up-item").forEach((el) => {
      el.style.opacity = "1";
      el.style.transform = "none";
      el.style.visibility = "visible";
    });
    // Also check for zoom reveal images
    document.querySelectorAll(".zoom-reveal-image").forEach((el) => {
      el.style.opacity = "1";
      el.style.scale = "1";
    });
  };

  // Initial failsafe after 500ms
  setTimeout(forceVisibility, 500);
  
  // Secondary failsafe if user hasn't scrolled much after 2 seconds
  setTimeout(() => {
    if (window.scrollY < 200) {
      forceVisibility();
    }
  }, 2000);

  // Periodic refresh for ScrollTrigger to handle late-loading images
  setInterval(() => {
    if (ScrollTriggerInstance) ScrollTriggerInstance.refresh();
  }, 3000);

});
