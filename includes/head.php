<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NITA @ 100 — A Century of Industrial Excellence</title>

    <!-- SEO Meta -->
    <meta name="description" content="NITA @ 100 Centenary Celebration. Experience the luxury heritage, interactive historical timelines, and premium awards showcase of the National Industrial Training Authority (NITA) of Kenya.">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Pinyon+Script&family=Great+Vibes&family=Syncopate:wght@400;700&family=Orbitron:wght@400..900&family=Space+Grotesk:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Tailwind CSS v3 CDN (most reliable browser approach — no build step required) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              'navy-primary': '#114687',
              'accent-red':   '#B8141F',
              'luxury-grey':  '#6D6E71',
              'luxury-gold':  '#D5C2A2',
              'deep-bg':      '#FAFAFA',
              'dark-navy':    '#091A37',
            },
            fontFamily: {
              'bodoni':    ['"Bodoni Moda"', '"Cormorant Garamond"', 'serif'],
              'cormorant': ['"Pinyon Script"', '"Great Vibes"', 'cursive'],
              'sans':      ['Montserrat', 'Inter', 'sans-serif'],
              'display':   ['Syncopate', 'Orbitron', '"Space Grotesk"', 'sans-serif'],
            },
            zIndex: {
              '25': '25',
              '35': '35',
              '100': '100',
            },
            animation: {
              'glow-pulse':  'glowPulse 5s ease-in-out infinite',
              'light-sweep': 'lightSweep 20s linear infinite',
              'float-card':  'floatCard 6s ease-in-out infinite',
              'sparkle':     'sparkle 4s ease-in-out infinite',
            },
            keyframes: {
              glowPulse: {
                '0%, 100%': { boxShadow: '0 0 8px rgba(184,20,31,0.4), 0 0 20px rgba(184,20,31,0.15)' },
                '50%':      { boxShadow: '0 0 24px rgba(184,20,31,0.82), 0 0 45px rgba(184,20,31,0.5)' },
              },
              lightSweep: {
                '0%':       { transform: 'translateX(-150%) skewX(-25deg)' },
                '15%, 100%':{ transform: 'translateX(250%) skewX(-25deg)' },
              },
              floatCard: {
                '0%, 100%': { transform: 'translateY(0px) rotate(0.5deg)' },
                '50%':      { transform: 'translateY(-16px) rotate(-0.5deg)' },
              },
              sparkle: {
                '0%, 100%': { opacity: '0.25' },
                '50%':      { opacity: '0.85' },
              },
            },
          }
        }
      }
    </script>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- Custom CSS (animations, glass effects, scrollbar) -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
