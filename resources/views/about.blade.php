@extends('layouts.app')

@section('content')
  <title>Kezia Sagala - Portfolio</title>
  <style>
@font-face {
  font-family: 'Myriad Pro';
  src: url("/Fonts/myriad-pro/MYRIADPRO.REGULAR.otf") format("opentype");
  font-display: swap; /* Teks akan ditampilkan dulu dengan fallback font */
}
@font-face {
  font-family: 'Myriad Pro';
  src: url("/Fonts/myriad-pro/MYRIADPRO.REGULAR.otf") format("opentype");
  font-weight: normal;
  font-style: normal;
}

@font-face {
  font-family: 'Myriad Pro';
  src: url("/Fonts/myriad-pro/MYRIADPRO.BOLD.otf") format("opentype");
  font-weight: bold;
  font-style: normal;
}

@font-face {
  font-family: 'Myriad Pro';
  src: url("/Fonts/myriad-pro/MYRIADPRO.SEMIBOLD.otf") format("opentype");
  font-weight: 600; /* 600 adalah nilai untuk semi-bold */
  font-style: normal;
}
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* body {
      font-family: 'Helvetica Neue', sans-serif;
      font-family: 'Myriad Pro', sans-serif;
      display: flex;
      min-height: 100vh;
      color: #fff;
      position: relative;
      overflow-x: hidden;
      background-color: #ffff;
    } */

    /* Sidebar - Updated to match exact content */
    .sidebar {
      background-color: #111;
      color: #fff;
      width: 80%;
      max-width: 400px;
      position: fixed;
      right: -80%;
      top: 0;
      height: 100vh;
      padding: 40px 30px;
      transition: right 0.3s ease;
      z-index: 1000;
      overflow-y: auto;
      scrollbar-width: thin;
      font-family: 'Myriad Pro', 'Helvetica Neue', Arial, sans-serif;
    }

    .sidebar.open {
      right: 0;
    }

    .sidebar h1 {
      font-size: 36px;
      margin-bottom: 20px;
      font-style: Normal;
    }

    .sidebar .intro {
  text-align: center; /* Ini yang akan membuat teks rata tengah */
  margin-bottom: 30px;
}

.sidebar .intro p {
  margin-bottom: 15px;
  font-family: 'Myriad-PBro', sans-serif;
}

    .sidebar h2 {
      font-size: 20px;
      margin-top: 30px;
      margin-bottom: 15px;
      color: #f78da7;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .sidebar ul {
      list-style: none;
      font-size: 16px;
      margin-bottom: 30px;
    }

    .sidebar ul.skillsets li {
      margin-bottom: 10px;
      position: relative;
      padding-left: 30px;
      color: #f78da7;
    }

    /* .sidebar ul.skillsets li:before {
      content: "0" counter(item);
      counter-increment: item;
      position: absolute;
      left: 0;
      color: #f78da7;
      font-weight: bold;
    } */

    .sidebar ul.softwares li {
      margin-bottom: 10px;
      position: relative;
      padding-left: 20px;
      color: #f78da7;
    }

    /* .sidebar ul.softwares li:before {
      content: "-";
      position: absolute;
      left: 0;
      color: #f78da7;
    } */

    .sidebar .contact-info {
      font-size: 25px;
    }

    .sidebar .contact-info p {
      margin-bottom: 15px;
      color: #f78da7;
    }

    .sidebar .contact-info a {
      color: #f78da7;
    }

    .sidebar .contact-info strong {
      display: block;
      color: #FFFFFF;
      margin-bottom: 5px;
      font-size: 14px;
    }

    .sidebar a {
      color: #fff;
      text-decoration: none;
      transition: color 0.2s;
    }

    .sidebar a:hover {
      color: #f78da7;
    }

    .divider {
  position: relative;
  height: 1px;
  margin: 25px 0;
  background-color: transparent;
}

.divider::after {
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  height: 1px;
  border-top: 1px dotted #333;
}
    .profile-image-container {
    width: 350px;
    height: 100px;
    margin: 0 auto 20px;
    overflow: hidden;
}

.profile-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .profile-image-container {
        width: 120px;
        height: 120px;
    }
}

@media screen and (max-width: 640px) {
    .profile-image-container {
        width: 100%;
        height: 96px; /* atau 24rem sesuai kebutuhan */
    }
}

    /* Tab to open sidebar - Fixed positioning */
    .sidebar-tab {
      position: fixed;
      right: 0;
      top: 50%;
      transform: translateY(-50%);
      background-color: #111;
      color: #fff;
      padding: 15px 8px;
      writing-mode: vertical-rl;
      text-orientation: mixed;
      font-weight: bold;
      font-size: 16px;
      cursor: pointer;
      z-index: 1001;
      border-radius: 8px 0 0 8px;
      transition: right 0.3s ease;
    }

    .sidebar.open ~ .sidebar-tab {
      right: 400px;
    }

    /* Main content */
    .main {
      flex-grow: 1;
      /* background-color: #FFFFFF; */
      padding: 60px;
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
    }

    .main h2 {
      font-size: 32px;
      color: #111;
      margin-bottom: 30px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .main .section {
      margin-bottom: 60px;
    }

    .main .section h3 {
      color: #f78da7;
      margin-bottom: 20px;
      font-size: 20px;
      font-weight: 500;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    .main .entry {
      margin-bottom: 25px;
      padding-left: 20px;
      position: relative;
    }

    .main .entry:before {
      content: "•";
      position: absolute;
      left: 0;
      color: #111;
      font-size: 20px;
    }

    .main .entry .title {
      font-weight: 600;
      font-size: 18px;
      margin-bottom: 5px;
      color: #f78da7;

    }

    .main .entry .info {
      font-size: 16px;
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      color: #f78da7;

    }

    .main .entry .info span {
      display: inline-block;
    }
    <style>
  /* ... (previous styles remain the same) ... */

  /* Responsive Adjustments */
  @media (max-width: 768px) {
    .main {
      padding: 40px 30px;
    }

    .main h2 {
      font-size: 28px;
    }

    .main .section h3 {
      font-size: 18px;
    }

    .sidebar {
      width: 90%;
      max-width: 300px;
      padding: 30px 20px;
    }

    .sidebar.open ~ .sidebar-tab {
      right: 300px;
    }

    .sidebar h1 {
      font-size: 22px;
    }

    .sidebar .intro {
      font-size: 14px;
    }

    .sidebar h2 {
      font-size: 18px;
    }

    .sidebar ul {
      font-size: 14px;
    }

    .main .entry .title {
      font-size: 16px;
    }

    .main .entry .info {
      font-size: 14px;
    }
  }

  @media (max-width: 480px) {
    .main {
      padding: 30px 20px;
    }

    .main h2 {
      font-size: 24px;
    }

    .sidebar-tab {
      padding: 12px 6px;
      font-size: 14px;
    }

    .main .entry .info {
      flex-direction: column;
      gap: 5px;
    }

    .main .entry {
      padding-left: 15px;
    }

    .main .entry:before {
      font-size: 16px;
      left: -5px;
    }

    /* .sidebar .contact-info p {
      margin-bottom: 10px;
    } */

    .sidebar .intro p {
      margin-bottom: 10px;
    }

    .sidebar .divider {
      margin: 20px 0;
      height: 2px;
  background: transparent;
  background-image: radial-gradient(#333 1px, transparent 1px);
  background-size: 5px 5px; /* Atur jarak titik-titik */
  background-position: 0 0;
    }
  }

  @media (hover: none) and (pointer: coarse) {
    /* Touch device adjustments */
    .sidebar-tab {
      padding: 15px 8px;
      font-size: 16px;
    }
  }
</style>

    <div class="sidebar" id="sidebar">
        <h1>Kezia Sagala</h1>
        <div class="divider"></div>

        <div class="profile-image-container">
            <img src="{{ asset('images/Keziapic.png') }}" alt="Kezia Ens" class="profile-image">
        </div>

        <div class="divider"></div>


        <div class="intro">
          <p>Hello,</p>
          <p>I'm Kezia Enginia Sagala. People often call me Kee,</p>
          <p>I'm so enthusiastic graphic designer. with a deep love for music,</p>
          <p>culture, and creative storytelling. My works blends design, branding and digital</p>
          <p>experiences, often inspired by the rhythm and energy of the music industry.</p>
          <br>
          <p>With a background in Visual Communication Design,</p>
          <p>I thrive on creating immersive visuals that connect ideas with emotions,</p>
          <p>whether fit, building a brand identity, creating digital experiences, or</p>
          <p>experimenting with new media, I'm always pushing creativity beyond expanded.</p>
        </div>

        <div class="divider"></div>

        <h1>Skillsets</h1>
        <ul class="skillsets">
          <li>01 Graphic Design</li>
          <li>02 Branding</li>
          <li>03 Campaign Making</li>
          <li>04 Editions</li>
          <li>05 Video Editing</li>
          <li>06 Social Media Content</li>
        </ul>

        <div class="divider"></div>

        <h1>Softwares</h1>
        <ul class="softwares">
          <li>Adobe After Effect</li>
          <li>Adobe Illustrator</li>
          <li>Adobe Photoshop</li>
          <li>Adobe Premiere Pro</li>
          <li>Adobe InDesign</li>
          <li>Figma</li>
        </ul>

        <div class="divider"></div>

        <div class="contact-info">
         <p><strong>Email</strong>
          keziaens@gmail.com</p>

          <p><strong>Instagram</strong>
          <a href="https://instagram.com/keziaens">@keziaens</a></p>

          <p><strong>Behance</strong>
          <a href="https://behance.net/keziaens">behance.net/keziaens</a></p>

          <p><strong>Spotify</strong>
          Kezia Sagala</p>

          <p><strong>Resume</strong>
          <a href="#">download here</a></p>
        </div>
    </div>

  <div class="sidebar-tab" id="sidebarTab">About</div>

  <div class="main">
    <div class="section">
      <h2>About</h2>
    </div>

    <div class="section">
      <h2>Experience</h2>

      <h3>Design Experience</h3>
      <div class="entry">
        <div class="title">Tulusame Studio</div>
        <div class="info"><span>2022 - 2024</span><span>Graphic Design</span></div>
      </div>
      <div class="entry">
        <div class="title">Virtue of Virtual</div>
        <div class="info"><span>2021 - 2022</span><span>Motion Graphic</span></div>
      </div>
      <div class="entry">
        <div class="title">Virtue of Virtual</div>
        <div class="info"><span>2020 - 2021</span><span>Marketing Design</span></div>
      </div>

      <h3>Additional Experience</h3>
      <div class="entry">
        <div class="title">Student Union - Institut Desain dan Bisnis Surabaya</div>
        <div class="info"><span>2023 - 2024</span><span>Media Coordinator</span></div>
      </div>
      <div class="entry">
        <div class="title">Marketing Partnership - Institut Desain dan Bisnis Surabaya</div>
        <div class="info"><span>2023 - 2024</span><span>Motion Graphic, Documentation</span></div>
      </div>
      <div class="entry">
        <div class="title">Sang Widya Institute</div>
        <div class="info"><span>2021 - present</span><span>Social Media Content</span></div>
      </div>
      <div class="entry">
        <div class="title">KTFactor</div>
        <div class="info"><span>2020</span><span>Motion Graphic, Branding</span></div>
      </div>
    </div>
    <div class="divider"></div>


    <div class="section">
      <h3>Achievements</h3>
      <div class="entry">
        <div class="title">Bright Breeze Student Experience</div>
        <div class="info"><span>2024</span><span>1st Winner, Branding Student Competition</span></div>
      </div>
      <div class="entry">
        <div class="title">Grand Street of Awareness</div>
        <div class="info"><span>2023</span><span>2nd Winner, Branding Student Competition</span></div>
      </div>
      <div class="entry">
        <div class="title">Visual Space Beyond 2045</div>
        <div class="info"><span>2023</span><span>3rd Winner, Branding Student Competition</span></div>
      </div>
    </div>
  </div>

  <script>
    const sidebar = document.getElementById('sidebar');
    const sidebarTab = document.getElementById('sidebarTab');

    sidebarTab.addEventListener('click', () => {
      sidebar.classList.toggle('open');
    });

    document.addEventListener('click', (e) => {
      if (!sidebar.contains(e.target) && !sidebarTab.contains(e.target)) {
        sidebar.classList.remove('open');
      }
    });

    // Initialize skillsets numbering
    document.addEventListener('DOMContentLoaded', function() {
      const skillsItems = document.querySelectorAll('.skillsets li');
      skillsItems.forEach((item, index) => {
        if (index < 9) {
          item.style.counterIncrement = 'item';
        }
      });
    });
  </script>
@endsection
