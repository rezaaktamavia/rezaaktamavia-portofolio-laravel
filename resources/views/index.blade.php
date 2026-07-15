<!doctype html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reza Akta Mavia — Portfolio</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Source+Serif+4:opsz,wght@8..60,400;8..60,600&family=IBM+Plex+Mono:wght@400;500;600&display=swap" rel="stylesheet">
<style>
  :root{
    --ink:#0b1220;
    --ink-2:#101b30;
    --teal:#0f3d3e;
    --brass:#c9a227;
    --brass-light:#e6c65c;
    --paper:#f5f1e8;
    --paper-2:#ece5d3;
    --slate:#334155;
    --slate-soft:#64748b;
    --line:#d9d0b8;
  }
  *{box-sizing:border-box;margin:0;padding:0;}
  html{scroll-behavior:smooth;}
  body{font-family:'Source Serif 4',serif;background:var(--paper);color:var(--slate);}
  .mono{font-family:'IBM Plex Mono',monospace;}
  .display{font-family:'Space Grotesk',sans-serif;}
  a{color:inherit;}

  /* ===== shared ===== */
  .wrap{max-width:1180px;margin:0 auto;padding:0 40px;}
  .eyebrow{
    display:inline-flex;align-items:center;gap:8px;
    font-family:'IBM Plex Mono',monospace;font-size:12px;letter-spacing:.14em;
    text-transform:uppercase;color:var(--brass);
    border:1px solid var(--brass);border-radius:2px;padding:5px 12px;
  }
  .eyebrow::before{content:"§";}
  h2.title{font-family:'Space Grotesk',sans-serif;font-weight:700;font-size:34px;color:var(--ink);line-height:1.2;margin-top:14px;}
  p.sub{font-size:15px;color:var(--slate-soft);margin-top:8px;max-width:520px;}
  section{padding:88px 0;}
  .ledger-num{font-family:'IBM Plex Mono',monospace;font-size:12px;color:var(--brass);}

  /* ===== NAV ===== */
  header.topbar{
    background:var(--ink);position:sticky;top:0;z-index:50;
    border-bottom:1px solid rgba(201,162,39,0.25);
  }
  nav{display:flex;align-items:center;justify-content:space-between;padding:20px 40px;max-width:1180px;margin:0 auto;}
  .brandmark{display:flex;align-items:center;gap:10px;}
  .brandmark .box{width:30px;height:30px;border:1.5px solid var(--brass);display:flex;align-items:center;justify-content:center;font-family:'IBM Plex Mono',monospace;font-size:12px;color:var(--brass-light);font-weight:600;transform:rotate(45deg);}
  .brandmark .box span{transform:rotate(-45deg);}
  .brandmark .name{font-family:'Space Grotesk',sans-serif;font-weight:600;color:var(--paper);font-size:16px;letter-spacing:.02em;}
  .navlinks{display:flex;gap:34px;list-style:none;}
  .navlinks a{color:rgba(245,241,232,0.65);font-family:'IBM Plex Mono',monospace;font-size:12px;letter-spacing:.06em;text-transform:uppercase;text-decoration:none;transition:color .2s;}
  .navlinks a:hover{color:var(--brass-light);}
  .nav-cta{
    font-family:'IBM Plex Mono',monospace;font-size:12px;letter-spacing:.06em;text-transform:uppercase;
    color:var(--ink);background:var(--brass);padding:10px 20px;text-decoration:none;
    border-radius:1px;transition:background .2s;
  }
  .nav-cta:hover{background:var(--brass-light);}

  /* ===== HERO ===== */
  .hero{background:var(--ink);position:relative;overflow:hidden;}
  .hero::before{
    content:"";position:absolute;inset:0;
    background-image:
      repeating-linear-gradient(90deg, rgba(201,162,39,0.05) 0px, rgba(201,162,39,0.05) 1px, transparent 1px, transparent 120px);
    pointer-events:none;
  }
  .hero-grid{
    max-width:1180px;margin:0 auto;padding:72px 40px 96px;
    display:grid;grid-template-columns:1.2fr 0.8fr;gap:64px;align-items:center;position:relative;z-index:2;
  }
  .hero-eyebrow{font-family:'IBM Plex Mono',monospace;color:var(--brass-light);font-size:13px;letter-spacing:.16em;text-transform:uppercase;}
  .hero h1{
    font-family:'Space Grotesk',sans-serif;font-weight:700;color:var(--paper);
    font-size:52px;line-height:1.08;margin-top:16px;
  }
  .hero h1 .accent{color:var(--brass-light);}
  .hero-role{margin-top:18px;display:flex;flex-wrap:wrap;gap:10px 16px;}
  .hero-role span.tagpill{
    font-family:'IBM Plex Mono',monospace;font-size:12px;color:var(--ink);
    background:var(--paper);padding:5px 12px;border-radius:1px;
  }
  .hero-desc{margin-top:22px;color:rgba(245,241,232,0.62);font-size:15.5px;line-height:1.8;max-width:480px;}
  .hero-cta{display:flex;gap:14px;margin-top:30px;}
  .btn-solid{
    background:var(--brass);color:var(--ink);font-family:'Space Grotesk',sans-serif;font-weight:600;font-size:14px;
    padding:15px 30px;text-decoration:none;border-radius:1px;transition:all .2s;
  }
  .btn-solid:hover{background:var(--brass-light);transform:translateY(-2px);}
  .btn-line{
    border:1px solid rgba(245,241,232,0.4);color:var(--paper);font-family:'Space Grotesk',sans-serif;font-weight:600;font-size:14px;
    padding:15px 30px;text-decoration:none;border-radius:1px;transition:all .2s;
  }
  .btn-line:hover{border-color:var(--brass-light);color:var(--brass-light);}

  /* passbook card */
  .passbook{
    background:linear-gradient(155deg,#122036,#0b1220);
    border:1px solid rgba(201,162,39,0.35);
    padding:0;position:relative;
  }
  .passbook-top{
    display:flex;justify-content:space-between;align-items:center;
    padding:16px 22px;border-bottom:1px dashed rgba(201,162,39,0.35);
  }
  .passbook-top .lbl{font-family:'IBM Plex Mono',monospace;font-size:10px;letter-spacing:.1em;color:rgba(245,241,232,0.5);text-transform:uppercase;}
  .passbook-top .status{
    font-family:'IBM Plex Mono',monospace;font-size:10px;color:#7fd99a;
    border:1px solid #7fd99a;padding:2px 9px;letter-spacing:.08em;
  }
  .passbook-body{padding:28px 22px 22px;display:flex;flex-direction:column;align-items:center;gap:16px;}
  .avatar-box{
    width:132px;height:132px;
    background:linear-gradient(155deg,#1b2f4d,#0e1a2e);
    border:1px solid var(--brass);
    display:flex;align-items:center;justify-content:center;position:relative;
  }
  .avatar-box::before,.avatar-box::after{
    content:"";position:absolute;width:14px;height:14px;border:1px solid var(--brass-light);
  }
  .avatar-box::before{top:-1px;left:-1px;border-right:none;border-bottom:none;}
  .avatar-box::after{bottom:-1px;right:-1px;border-left:none;border-top:none;}
  .avatar-box .initials{font-family:'Space Grotesk',sans-serif;font-weight:700;font-size:38px;color:var(--brass-light);letter-spacing:.02em;}
  .passbook-name{font-family:'Space Grotesk',sans-serif;font-weight:600;color:var(--paper);font-size:17px;text-align:center;}
  .passbook-role{font-family:'IBM Plex Mono',monospace;font-size:11px;color:var(--brass-light);text-align:center;letter-spacing:.05em;}
  .passbook-stats{width:100%;display:flex;border-top:1px dashed rgba(201,162,39,0.35);margin-top:6px;}
  .pstat{flex:1;text-align:center;padding:16px 8px;border-right:1px dashed rgba(201,162,39,0.35);}
  .pstat:last-child{border-right:none;}
  .pstat .num{font-family:'IBM Plex Mono',monospace;font-weight:600;color:var(--brass-light);font-size:22px;}
  .pstat .lbl2{font-family:'IBM Plex Mono',monospace;font-size:9.5px;color:rgba(245,241,232,0.5);text-transform:uppercase;letter-spacing:.05em;margin-top:2px;}
  .passbook-notch{height:10px;background:repeating-linear-gradient(90deg, var(--paper) 0 6px, transparent 6px 12px);}

  /* ===== EXPERIENCE (bank job) ===== */
  .exp-section{background:var(--paper);}
  .exp-card{
    display:flex;gap:28px;background:#fff;border:1px solid var(--line);
    padding:30px 32px;margin-top:36px;position:relative;
  }
  .exp-card::before{content:"";position:absolute;left:0;top:0;bottom:0;width:4px;background:var(--brass);}
  .exp-mark{font-family:'IBM Plex Mono',monospace;font-size:13px;color:var(--brass);flex-shrink:0;padding-top:4px;min-width:88px;}
  .exp-body h3{font-family:'Space Grotesk',sans-serif;font-size:19px;font-weight:600;color:var(--ink);}
  .exp-body .exp-place{font-family:'IBM Plex Mono',monospace;font-size:12.5px;color:var(--teal);margin-top:4px;letter-spacing:.03em;}
  .exp-body p{font-size:14.5px;color:var(--slate-soft);margin-top:10px;line-height:1.75;max-width:640px;}
  .exp-tags{display:flex;flex-wrap:wrap;gap:8px;margin-top:14px;}
  .exp-tag{font-family:'IBM Plex Mono',monospace;font-size:11px;background:var(--paper-2);color:var(--slate);padding:4px 11px;}

  /* ===== SKILLS ===== */
  .skills-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:1px;background:var(--line);border:1px solid var(--line);margin-top:36px;}
  .skill-cell{background:var(--paper);padding:26px 24px;display:flex;flex-direction:column;gap:10px;transition:background .2s;}
  .skill-cell:hover{background:#fff;}
  .skill-cell .sk-num{font-family:'IBM Plex Mono',monospace;font-size:11px;color:var(--brass);}
  .skill-cell .sk-name{font-family:'Space Grotesk',sans-serif;font-weight:600;font-size:16.5px;color:var(--ink);}
  .skill-cell .sk-desc{font-size:13px;color:var(--slate-soft);line-height:1.6;}

  /* ===== PORTFOLIO ===== */
  .port-section{background:var(--ink);}
  .port-section .eyebrow{border-color:var(--brass-light);}
  .port-section h2.title,.port-section p.sub{color:var(--paper);}
  .port-section p.sub{color:rgba(245,241,232,0.55);}
  .port-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:22px;margin-top:40px;}
  .port-card{background:#101b30;border:1px solid rgba(201,162,39,0.25);transition:all .3s;}
  .port-card:hover{border-color:var(--brass);transform:translateY(-4px);}
  .port-thumb{
    height:170px;display:flex;align-items:center;justify-content:center;
    font-family:'Space Grotesk',sans-serif;font-size:13px;color:rgba(245,241,232,0.35);
    border-bottom:1px dashed rgba(201,162,39,0.25);letter-spacing:.05em;text-transform:uppercase;
    background:repeating-linear-gradient(135deg, rgba(201,162,39,0.05) 0 12px, transparent 12px 24px);
  }
  .port-body{padding:22px 24px 26px;}
  .port-tag{font-family:'IBM Plex Mono',monospace;font-size:10.5px;color:var(--brass-light);letter-spacing:.08em;text-transform:uppercase;}
  .port-title{font-family:'Space Grotesk',sans-serif;font-weight:600;font-size:17px;color:var(--paper);margin-top:10px;}
  .port-desc{font-size:13.5px;color:rgba(245,241,232,0.55);line-height:1.7;margin-top:10px;}
  .port-pills{display:flex;flex-wrap:wrap;gap:7px;margin-top:14px;}
  .port-pill{font-family:'IBM Plex Mono',monospace;font-size:10.5px;color:var(--paper);background:rgba(245,241,232,0.08);padding:4px 10px;}
  .port-foot{display:flex;justify-content:space-between;align-items:center;margin-top:18px;padding-top:14px;border-top:1px dashed rgba(201,162,39,0.2);}
  .port-link{font-family:'IBM Plex Mono',monospace;font-size:12px;color:var(--brass-light);text-decoration:none;}
  .port-cta-wrap{display:flex;justify-content:center;margin-top:38px;}

  /* ===== ACHIEVEMENTS ===== */
  .ach-grid{display:grid;grid-template-columns:repeat(3,1fr);gap:20px;margin-top:36px;}
  .ach-card{background:#fff;border:1px solid var(--line);padding:26px 22px;text-align:center;transition:all .25s;}
  .ach-card:hover{border-color:var(--brass);transform:translateY(-4px);}
  .ach-icon{
    width:56px;height:56px;margin:0 auto 16px;border:1px solid var(--brass);
    display:flex;align-items:center;justify-content:center;font-size:22px;
    transform:rotate(45deg);
  }
  .ach-icon span{transform:rotate(-45deg);}
  .ach-title{font-family:'Space Grotesk',sans-serif;font-weight:600;font-size:15px;color:var(--ink);}
  .ach-sub{font-size:12.5px;color:var(--slate-soft);margin-top:8px;line-height:1.6;}

  /* ===== ABOUT ===== */
  .about-grid{display:grid;grid-template-columns:320px 1fr;gap:56px;margin-top:40px;align-items:start;}
  .about-card{background:#fff;border:1px solid var(--line);padding:24px;}
  .about-card-title{font-family:'IBM Plex Mono',monospace;font-size:12px;color:var(--brass);text-transform:uppercase;letter-spacing:.08em;margin-bottom:14px;}
  .stack-row{display:flex;justify-content:space-between;font-size:13.5px;color:var(--slate);padding:8px 0;border-bottom:1px solid var(--paper-2);}
  .stack-row:last-child{border-bottom:none;}
  .stack-row .k{font-family:'Space Grotesk',sans-serif;font-weight:600;}
  .stack-row .v{font-family:'IBM Plex Mono',monospace;font-size:11.5px;color:var(--slate-soft);}
  .org-chip2{font-family:'IBM Plex Mono',monospace;font-size:11px;color:var(--teal);background:#eaf1ef;padding:6px 12px;border:1px solid #cfe3df;display:inline-block;margin:4px 6px 0 0;}
  .about-text p{font-size:15.5px;line-height:1.85;color:var(--slate);margin-bottom:18px;}
  .about-text .hl{color:var(--brass);font-weight:600;font-family:'Space Grotesk',sans-serif;}
  .about-text .hl2{color:var(--teal);font-weight:600;font-family:'Space Grotesk',sans-serif;}

  /* ===== TESTIMONIALS ===== */
  .testi-section{background:var(--ink);overflow:hidden;}
  .testi-section .eyebrow{border-color:var(--brass-light);}
  .testi-section h2.title{color:var(--paper);}
  .testi-section p.sub{color:rgba(245,241,232,0.55);}
  .testi-track-wrap{position:relative;margin-top:36px;}
  .testi-track{display:flex;width:max-content;animation:slide 55s linear infinite;}
  .testi-track:hover{animation-play-state:paused;}
  @keyframes slide{from{transform:translateX(0);}to{transform:translateX(-50%);}}
  .testi-card{width:300px;flex-shrink:0;background:#101b30;border:1px solid rgba(201,162,39,0.25);padding:22px;margin-right:18px;}
  .testi-head{display:flex;align-items:center;gap:12px;}
  .testi-avatar{width:38px;height:38px;background:var(--brass);color:var(--ink);font-family:'Space Grotesk',sans-serif;font-weight:700;font-size:14px;display:flex;align-items:center;justify-content:center;}
  .testi-name{font-family:'Space Grotesk',sans-serif;font-weight:600;color:var(--paper);font-size:13.5px;}
  .testi-role{font-family:'IBM Plex Mono',monospace;font-size:11px;color:var(--brass-light);}
  .testi-text{font-size:13.5px;color:rgba(245,241,232,0.65);line-height:1.7;margin-top:14px;}
  .testi-stars{color:var(--brass-light);font-size:12px;margin-top:12px;letter-spacing:2px;}

  /* ===== FAQ ===== */
  .faq-layout{display:grid;grid-template-columns:300px 1fr;gap:70px;margin-top:20px;}
  .faq-item{border-bottom:1px solid var(--line);}
  .faq-btn{width:100%;display:flex;justify-content:space-between;align-items:center;padding:20px 0;background:none;border:none;cursor:pointer;font-family:inherit;text-align:left;}
  .faq-q{font-family:'Space Grotesk',sans-serif;font-weight:600;font-size:15px;color:var(--ink);}
  .faq-mark{font-family:'IBM Plex Mono',monospace;color:var(--brass);font-size:16px;flex-shrink:0;transition:transform .25s;}
  .faq-item.open .faq-mark{transform:rotate(45deg);}
  .faq-a{max-height:0;overflow:hidden;transition:max-height .35s ease;font-size:14px;color:var(--slate-soft);line-height:1.75;}
  .faq-item.open .faq-a{max-height:200px;padding-bottom:20px;}

  /* ===== FOOTER ===== */
  footer{background:var(--ink);border-top:1px solid rgba(201,162,39,0.25);padding:60px 0 30px;}
  .foot-grid{display:grid;grid-template-columns:1.4fr 1fr 1fr 1fr;gap:40px;}
  .foot-brand p{font-size:13px;color:rgba(245,241,232,0.5);line-height:1.7;margin-top:14px;max-width:230px;}
  .foot-social{display:flex;gap:10px;margin-top:18px;}
  .foot-social a{width:32px;height:32px;border:1px solid rgba(201,162,39,0.4);display:flex;align-items:center;justify-content:center;font-family:'IBM Plex Mono',monospace;font-size:11px;color:var(--brass-light);text-decoration:none;transition:all .2s;}
  .foot-social a:hover{background:var(--brass);color:var(--ink);}
  .foot-col-title{font-family:'IBM Plex Mono',monospace;font-size:12px;color:var(--brass);text-transform:uppercase;letter-spacing:.08em;margin-bottom:16px;}
  .foot-col ul{list-style:none;display:flex;flex-direction:column;gap:11px;}
  .foot-col ul a{font-size:13.5px;color:rgba(245,241,232,0.55);text-decoration:none;transition:color .2s;}
  .foot-col ul a:hover{color:var(--brass-light);}
  .foot-bottom{margin-top:50px;padding-top:22px;border-top:1px dashed rgba(201,162,39,0.25);text-align:center;font-family:'IBM Plex Mono',monospace;font-size:11.5px;color:rgba(245,241,232,0.4);}

  /* ===== RESPONSIVE ===== */
  @media(max-width:1080px){
    .wrap{padding:0 28px;}
    .hero-grid{padding:56px 28px 72px;grid-template-columns:1fr;gap:40px;}
    .passbook{max-width:420px;margin:0 auto;}
    .skills-grid{grid-template-columns:repeat(2,1fr);}
    .port-grid{grid-template-columns:1fr;}
    .ach-grid{grid-template-columns:repeat(2,1fr);}
    .about-grid{grid-template-columns:1fr;}
    .about-grid>div:first-child{max-width:420px;margin:0 auto;width:100%;}
    .faq-layout{grid-template-columns:1fr;gap:32px;}
    .foot-grid{grid-template-columns:1fr 1fr;gap:32px;}
  }
  @media(max-width:768px){
    nav{padding:16px 20px;}
    .navlinks{display:none;}
    section{padding:64px 0;}
    .wrap{padding:0 20px;}
    .hero-grid{padding:40px 20px 56px;}
    .hero h1{font-size:36px;}
    .hero-role{flex-direction:column;align-items:flex-start;gap:8px;}
    .hero-cta{flex-wrap:wrap;}
    .hero-cta a{flex:1;text-align:center;}
    h2.title{font-size:26px;}
    .skills-grid{grid-template-columns:1fr;}
    .ach-grid{grid-template-columns:1fr;}
    .exp-card{flex-direction:column;gap:14px;padding:22px 20px;}
    .exp-mark{min-width:auto;}
    .about-card{width:100%;}
    .foot-grid{grid-template-columns:1fr;gap:28px;}
    .passbook-stats{flex-wrap:wrap;}
    .pstat{min-width:33.3%;border-bottom:1px dashed rgba(201,162,39,0.35);}
  }
  @media(max-width:480px){
    .hero h1{font-size:29px;}
    .hero-desc{font-size:14.5px;}
    .btn-solid,.btn-line{padding:13px 22px;font-size:13px;}
    .avatar-box{width:104px;height:104px;}
    .avatar-box .initials{font-size:30px;}
    .testi-card{width:250px;}
  }
</style>
</head>
<body>

  {{-- ======= NAV ======= --}}
  <header class="topbar">
    <nav>
      <div class="brandmark">
        <div class="box"><span>R</span></div>
        <span class="name">REZA AKTA MAVIA</span>
      </div>
      <ul class="navlinks">
        <li><a href="#hero">Home</a></li>
        <li><a href="#experience">Pengalaman</a></li>
        <li><a href="#skills">Keahlian</a></li>
        <li><a href="#portfolio">Portofolio</a></li>
        <li><a href="#faq">Kontak</a></li>
      </ul>
      <a href="#faq" class="nav-cta">Hubungi Saya</a>
    </nav>
  </header>

  {{-- ======= HERO ======= --}}
  <section class="hero" id="hero" style="padding:0;">
    <div class="hero-grid">
      <div>
        <p class="hero-eyebrow">// Curriculum Vitae Digital</p>
        <h1>Reza Akta Mavia<br><span class="accent">Sistem Informasi & Analis Data.</span></h1>
        <div class="hero-role">
          <span class="tagpill">Staff IT & Data — BPR Mitra Rakyat Riau</span>
          <span class="tagpill">Web Developer</span>
          <span class="tagpill">Financial Analyst</span>
        </div>
        <p class="hero-desc">Lulusan Sistem Informasi yang menekuni analisis data dan pengembangan sistem di sektor perbankan. Saat ini bertugas sebagai staff IT & Data di <strong>PT BPR Mitra Rakyat Riau</strong>, membantu proses digitalisasi layanan keuangan mikro agar lebih cepat, akurat, dan transparan.</p>
        <div class="hero-cta">
          <a href="#portfolio" class="btn-solid">Lihat Portofolio</a>
          <a href="#faq" class="btn-line">Diskusi Proyek</a>
        </div>
      </div>

      <div class="passbook">
        <div class="passbook-top">
          <span class="lbl">Buku Profil · No. 0142</span>
          <span class="status">● Aktif Bekerja</span>
        </div>
        <div class="passbook-body">
          <div class="avatar-box"><span class="initials">RAM</span></div>
          <div>
            <p class="passbook-name">Reza Akta Mavia</p>
            <p class="passbook-role">STAFF IT & DATA · BPR MITRA RAKYAT RIAU</p>
          </div>
        </div>
        <div class="passbook-stats">
          <div class="pstat"><div class="num">4</div><div class="lbl2">Proyek</div></div>
          <div class="pstat"><div class="num">3</div><div class="lbl2">Penghargaan</div></div>
          <div class="pstat"><div class="num">1.5th</div><div class="lbl2">Di Industri Bank</div></div>
        </div>
        <div class="passbook-notch"></div>
      </div>
    </div>
  </section>

  {{-- ======= EXPERIENCE ======= --}}
  <section class="exp-section" id="experience">
    <div class="wrap">
      <span class="eyebrow">Rekam Kerja</span>
      <h2 class="title">Pengalaman Profesional</h2>
      <p class="sub">Perjalanan karier di dunia perbankan dan teknologi informasi.</p>

      <div class="exp-card">
        <div class="exp-mark">2023 — Now</div>
        <div class="exp-body">
          <h3>Staff IT & Data Analyst</h3>
          <p class="exp-place">PT BPR Mitra Rakyat Riau · Pekanbaru</p>
          <p>Bertanggung jawab atas pemeliharaan sistem informasi kredit, pengolahan data nasabah, serta penyusunan laporan keuangan mikro untuk mendukung pengambilan keputusan manajemen. Turut membantu proses digitalisasi layanan menabung dan pengajuan kredit UMKM.</p>
          <div class="exp-tags">
            <span class="exp-tag">Core Banking System</span>
            <span class="exp-tag">Laporan Keuangan Mikro</span>
            <span class="exp-tag">Data Nasabah</span>
            <span class="exp-tag">Excel & SQL</span>
          </div>
        </div>
      </div>

      <div class="exp-card">
        <div class="exp-mark">2022 — 2023</div>
        <div class="exp-body">
          <h3>Asisten Praktikum Basis Data</h3>
          <p class="exp-place">Program Studi Sistem Informasi</p>
          <p>Membimbing mahasiswa tingkat awal dalam praktikum perancangan basis data dan query SQL, serta menyusun modul praktikum yang lebih mudah dipahami.</p>
          <div class="exp-tags">
            <span class="exp-tag">MySQL</span>
            <span class="exp-tag">Pengajaran</span>
            <span class="exp-tag">Kurikulum</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- ======= SKILLS ======= --}}
  <section id="skills">
    <div class="wrap">
      <span class="eyebrow">Kompetensi</span>
      <h2 class="title">Keahlian yang Saya Kuasai</h2>
      <p class="sub">Perpaduan kemampuan teknis dan finansial untuk mendukung transformasi digital bisnis Anda.</p>

      <div class="skills-grid">
        <div class="skill-cell"><span class="sk-num">01</span><span class="sk-name">Analisis Data</span><span class="sk-desc">Mengolah data transaksi & nasabah menjadi laporan yang mudah dibaca manajemen.</span></div>
        <div class="skill-cell"><span class="sk-num">02</span><span class="sk-name">Web Development</span><span class="sk-desc">Membangun sistem informasi & website berbasis Laravel dan database relasional.</span></div>
        <div class="skill-cell"><span class="sk-num">03</span><span class="sk-name">Laporan Keuangan</span><span class="sk-desc">Menyusun rekapitulasi dan laporan keuangan mikro secara rapi dan akurat.</span></div>
        <div class="skill-cell"><span class="sk-num">04</span><span class="sk-name">Basis Data</span><span class="sk-desc">Merancang skema database untuk sistem kredit dan tabungan nasabah.</span></div>
        <div class="skill-cell"><span class="sk-num">05</span><span class="sk-name">Public Speaking</span><span class="sk-desc">Presentasi laporan dan materi edukasi keuangan di depan tim & komunitas.</span></div>
        <div class="skill-cell"><span class="sk-num">06</span><span class="sk-name">Microsoft Excel & VBA</span><span class="sk-desc">Otomasi rekap data harian bank menggunakan formula dan macro.</span></div>
      </div>
    </div>
  </section>

  {{-- ======= PORTFOLIO ======= --}}
  <section class="port-section" id="portfolio">
    <div class="wrap">
      <span class="eyebrow">Proyek Terpilih</span>
      <h2 class="title">Portofolio Proyek</h2>
      <p class="sub">Sebagian sistem dan produk digital yang pernah saya kerjakan.</p>

      <div class="port-grid">
        <div class="port-card">
          <div class="port-thumb">Sistem Informasi Kredit</div>
          <div class="port-body">
            <span class="port-tag">Web Development</span>
            <h3 class="port-title">Sistem Informasi Kredit BPR</h3>
            <p class="port-desc">Mengembangkan sistem pencatatan pengajuan dan pelunasan kredit mikro yang mempercepat proses verifikasi nasabah di kantor cabang.</p>
            <div class="port-pills"><span class="port-pill">Laravel</span><span class="port-pill">MySQL</span><span class="port-pill">Bootstrap</span></div>
            <div class="port-foot"><span class="mono" style="font-size:12px;color:rgba(245,241,232,0.5);">Reza A. M.</span><a href="#" class="port-link">Lihat Detail →</a></div>
          </div>
        </div>

        <div class="port-card">
          <div class="port-thumb">Company Profile BPR</div>
          <div class="port-body">
            <span class="port-tag">UI/UX & Web</span>
            <h3 class="port-title">Website Company Profile PT BPR Mitra Rakyat Riau</h3>
            <p class="port-desc">Merancang dan membangun website perusahaan untuk memperkenalkan produk simpanan dan kredit kepada masyarakat secara digital.</p>
            <div class="port-pills"><span class="port-pill">Figma</span><span class="port-pill">Tailwind CSS</span><span class="port-pill">Laravel</span></div>
            <div class="port-foot"><span class="mono" style="font-size:12px;color:rgba(245,241,232,0.5);">Reza A. M.</span><a href="#" class="port-link">Lihat Detail →</a></div>
          </div>
        </div>
      </div>

      <div class="port-cta-wrap"><a href="#" class="btn-line">Lihat Semua Proyek →</a></div>
    </div>
  </section>

  {{-- ======= ACHIEVEMENTS ======= --}}
  <section id="achievements">
    <div class="wrap">
      <span class="eyebrow">Prestasi</span>
      <h2 class="title">Penghargaan & Sertifikasi</h2>
      <p class="sub">Pencapaian yang pernah saya raih di bidang akademik dan profesional.</p>

      <div class="ach-grid">
        <div class="ach-card"><div class="ach-icon"><span>🏦</span></div><span class="ach-title">Juara 1 Business Plan Competition</span><p class="ach-sub">Kompetisi rencana bisnis sektor keuangan mikro tingkat provinsi.</p></div>
        <div class="ach-card"><div class="ach-icon"><span>📊</span></div><span class="ach-title">Juara 2 Karya Tulis Ilmiah</span><p class="ach-sub">Riset tentang digitalisasi layanan perbankan rakyat.</p></div>
        <div class="ach-card"><div class="ach-icon"><span>🎓</span></div><span class="ach-title">Sertifikasi Analis Kredit Mikro</span><p class="ach-sub">Pelatihan bersertifikat dari asosiasi BPR se-Riau.</p></div>
      </div>
    </div>
  </section>

  {{-- ======= ABOUT ======= --}}
  <section id="about">
    <div class="wrap">
      <span class="eyebrow">Tentang Saya</span>
      <h2 class="title">Sedikit Cerita Tentang Reza</h2>

      <div class="about-grid">
        <div style="display:flex;flex-direction:column;gap:18px;">
          <div class="about-card">
            <p class="about-card-title">Tech Stack</p>
            <div class="stack-row"><span class="k">Laravel & PHP</span><span class="v">backend</span></div>
            <div class="stack-row"><span class="k">MySQL</span><span class="v">database</span></div>
            <div class="stack-row"><span class="k">Tailwind CSS</span><span class="v">styling</span></div>
            <div class="stack-row"><span class="k">Excel & VBA</span><span class="v">reporting</span></div>
            <div class="stack-row"><span class="k">Power BI</span><span class="v">data viz</span></div>
          </div>
          <div class="about-card">
            <p class="about-card-title">Organisasi & Aktivitas</p>
            <div>
              <span class="org-chip2">HIMA Sistem Informasi</span>
              <span class="org-chip2">Relawan Pajak</span>
              <span class="org-chip2">UKM Futsal</span>
              <span class="org-chip2">Fintech Hackathon</span>
              <span class="org-chip2">Seminar Perbankan Riau</span>
              <span class="org-chip2">Komunitas Data Analyst</span>
            </div>
          </div>
        </div>

        <div class="about-text">
          <p>Halo, saya Reza. Bagi saya, teknologi paling bermanfaat ketika ia mempermudah sesuatu yang tadinya rumit — termasuk urusan keuangan masyarakat kecil. Latar belakang saya di <span class="hl">Sistem Informasi</span> membawa saya masuk ke dunia perbankan rakyat, di mana saya kini bekerja sebagai staff IT & data di <span class="hl2">PT BPR Mitra Rakyat Riau</span>.</p>
          <p>Di luar pekerjaan, saya aktif di HIMA Sistem Informasi, mengikuti berbagai hackathon fintech, dan sesekali menjadi relawan pajak untuk membantu masyarakat memahami kewajiban perpajakan mereka. Saya percaya bahwa kemampuan teknis paling berguna ketika dibagikan kembali ke lingkungan sekitar.</p>
          <a href="#" class="btn-solid" style="display:inline-block;">Unduh CV Saya</a>
        </div>
      </div>
    </div>
  </section>

  {{-- ======= TESTIMONIALS ======= --}}
  <section class="testi-section">
    <div class="wrap">
      <span class="eyebrow">Testimoni</span>
      <h2 class="title">Apa Kata Rekan Kerja</h2>
      <p class="sub">Pendapat dari atasan, rekan kerja, dan mitra yang pernah berkolaborasi dengan saya.</p>
    </div>
    <div class="testi-track-wrap">
      <div class="testi-track" id="testiTrack"></div>
    </div>
  </section>

  {{-- ======= FAQ ======= --}}
  <section id="faq">
    <div class="wrap">
      <div class="faq-layout">
        <div>
          <span class="eyebrow">Tanya Jawab</span>
          <h2 class="title" style="font-size:28px;">Ada yang Ingin<br>Ditanyakan?</h2>
          <p class="sub">Pertanyaan yang sering diajukan seputar pekerjaan dan layanan saya.</p>
          <a href="mailto:rezaaktamavia@email.com" class="btn-solid" style="display:inline-block;margin-top:16px;">Hubungi Saya</a>
        </div>
        <div>
          <div class="faq-item" id="faq-0">
            <button class="faq-btn" onclick="toggleFaq(0)"><span class="faq-q">Apakah Reza menerima proyek freelance di luar pekerjaan utama?</span><span class="faq-mark">+</span></button>
            <div class="faq-a" id="faq-a-0">Ya, saya terbuka untuk proyek freelance web development dan analisis data di luar jam kerja, selama tidak berbenturan dengan pekerjaan di BPR Mitra Rakyat Riau.</div>
          </div>
          <div class="faq-item" id="faq-1">
            <button class="faq-btn" onclick="toggleFaq(1)"><span class="faq-q">Tools apa saja yang biasa digunakan?</span><span class="faq-mark">+</span></button>
            <div class="faq-a" id="faq-a-1">Untuk pengembangan sistem saya menggunakan Laravel, MySQL, dan Tailwind CSS. Untuk analisis data saya menggunakan Excel, VBA, dan Power BI.</div>
          </div>
          <div class="faq-item" id="faq-2">
            <button class="faq-btn" onclick="toggleFaq(2)"><span class="faq-q">Berapa lama waktu pengerjaan satu proyek?</span><span class="faq-mark">+</span></button>
            <div class="faq-a" id="faq-a-2">Tergantung kompleksitas. Sistem sederhana biasanya 1-2 minggu, sedangkan sistem informasi berbasis database bisa 3-5 minggu.</div>
          </div>
          <div class="faq-item" id="faq-3">
            <button class="faq-btn" onclick="toggleFaq(3)"><span class="faq-q">Bagaimana cara menghubungi Reza?</span><span class="faq-mark">+</span></button>
            <div class="faq-a" id="faq-a-3">Anda dapat menghubungi saya melalui email atau LinkedIn yang tercantum di bagian footer halaman ini.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{-- ======= FOOTER ======= --}}
  <footer>
    <div class="wrap">
      <div class="foot-grid">
        <div class="foot-brand">
          <div class="brandmark"><div class="box"><span>R</span></div><span class="name">REZA AKTA MAVIA</span></div>
          <p>Staff IT & Data di PT BPR Mitra Rakyat Riau, sekaligus web developer yang siap membantu digitalisasi bisnis Anda.</p>
          <div class="foot-social">
            <a href="#">in</a>
            <a href="#">gh</a>
            <a href="#">ig</a>
          </div>
        </div>
        <div class="foot-col">
          <p class="foot-col-title">Layanan</p>
          <ul><li><a href="#skills">Analisis Data</a></li><li><a href="#skills">Web Development</a></li><li><a href="#faq">Konsultasi Sistem</a></li></ul>
        </div>
        <div class="foot-col">
          <p class="foot-col-title">Navigasi</p>
          <ul><li><a href="#about">Tentang Saya</a></li><li><a href="#portfolio">Portofolio</a></li><li><a href="#experience">Pengalaman</a></li></ul>
        </div>
        <div class="foot-col">
          <p class="foot-col-title">Kontak</p>
          <ul><li><a href="mailto:rezaaktamavia@email.com">rezaaktamavia@email.com</a></li><li><a href="#">LinkedIn</a></li><li><a href="#">GitHub</a></li></ul>
        </div>
      </div>
      <div class="foot-bottom">© 2024 Reza Akta Mavia · Sistem Informasi · Staff IT & Data, PT BPR Mitra Rakyat Riau</div>
    </div>
  </footer>

<script>
  function toggleFaq(i){
    const item = document.getElementById('faq-'+i);
    const isOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach((el,idx)=>{
      el.classList.remove('open');
      el.querySelector('.faq-mark').textContent = '+';
    });
    if(!isOpen){ item.classList.add('open'); item.querySelector('.faq-mark').textContent='×'; }
  }

  // testimonials (duplicated for seamless marquee)
  const testis = [
    {name:'Bpk. Hendra Saputra', role:'Kepala Cabang BPR Mitra Rakyat Riau', text:'Reza teliti dalam mengolah data nasabah dan cepat tanggap terhadap kendala sistem di cabang.'},
    {name:'Yoga Pratama', role:'Rekan Tim Fintech Hackathon', text:'Kerja sama dengan Reza selalu produktif. Dia paham betul kebutuhan teknis sekaligus sisi bisnisnya.'},
    {name:'Dian Kurniawan', role:'Ketua HIMA Sistem Informasi', text:'Sebagai pengurus HIMA, Reza aktif dan bertanggung jawab penuh atas setiap program kerja yang diamanahkan.'},
    {name:'Bpk. Ilham Nugraha', role:'Supervisor Kredit Mikro', text:'Laporan yang disusun Reza selalu rapi dan membantu mempercepat proses evaluasi kredit nasabah.'},
    {name:'Aditya Wirawan', role:'Rekan Relawan Pajak', text:'Reza mampu menjelaskan hal teknis perpajakan dengan bahasa yang mudah dipahami masyarakat.'},
  ];
  const track = document.getElementById('testiTrack');
  function card(t){
    const el = document.createElement('div');
    el.className='testi-card';
    el.innerHTML = `<div class="testi-head"><div class="testi-avatar">${t.name.charAt(0)}</div><div><p class="testi-name">${t.name}</p><p class="testi-role">${t.role}</p></div></div><p class="testi-text">${t.text}</p><p class="testi-stars">★★★★★</p>`;
    return el;
  }
  [...testis,...testis].forEach(t=>track.appendChild(card(t)));
</script>

</body>
</html>