<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Kezia Sagala - Portfolio</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Helvetica Neue', sans-serif;
      display: flex;
      min-height: 100vh;
      color: #fff;
      position: relative;
      overflow-x: hidden;
      background-color: #1a1a1a;
    }

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
    }

    .sidebar.open {
      right: 0;
    }

    .sidebar h1 {
      font-size: 24px;
      margin-bottom: 20px;
    }

    .sidebar .intro {
      font-size: 16px;
      line-height: 1.6;
      margin-bottom: 30px;
    }

    .sidebar .intro p {
      margin-bottom: 15px;
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
    }

    .sidebar ul.skillsets li:before {
      content: "0" counter(item);
      counter-increment: item;
      position: absolute;
      left: 0;
      color: #f78da7;
      font-weight: bold;
    }

    .sidebar ul.softwares li {
      margin-bottom: 10px;
      position: relative;
      padding-left: 20px;
    }

    .sidebar ul.softwares li:before {
      content: "-";
      position: absolute;
      left: 0;
      color: #f78da7;
    }

    .sidebar .contact-info {
      font-size: 16px;
    }

    .sidebar .contact-info p {
      margin-bottom: 15px;
    }

    .sidebar .contact-info strong {
      display: block;
      color: #f78da7;
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
      height: 1px;
      background-color: #333;
      margin: 25px 0;
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
      background-color: #1a1a1a;
      padding: 60px;
      width: 100%;
      max-width: 1200px;
      margin: 0 auto;
    }

    .main h2 {
      font-size: 32px;
      color: #f78da7;
      margin-bottom: 30px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 1px;
    }

    .main .section {
      margin-bottom: 60px;
    }

    .main .section h3 {
      color: #fff;
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
      color: #f78da7;
      font-size: 20px;
    }

    .main .entry .title {
      font-weight: 600;
      font-size: 18px;
      margin-bottom: 5px;
    }

    .main .entry .info {
      font-size: 16px;
      color: #aaa;
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
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

    .sidebar .contact-info p {
      margin-bottom: 10px;
    }

    .sidebar .intro p {
      margin-bottom: 10px;
    }

    .sidebar .divider {
      margin: 20px 0;
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
</head>
<body>

  <div class="sidebar" id="sidebar">
    <h1>Kezia Enginia Sagala</h1>

    <div class="intro">
      <p>Hello,</p>
      <p>People often call me Kea, an enthusiastic graphic designer with a deep love for music, culture, and creative storytelling. My work blends design, branding and digital experience, often inspired by the rhythm and energy of the music industry.</p>
      <p>With a background in Visual Communication Design, I thrive on creating immersive visuals that connect ideas with emotions. Whether it's building a brand identity, curating digital experience, or experimenting with new media, I'm always pushing creativity beyond expected.</p>
    </div>

    <h2>Skillsets</h2>
    <ul class="skillsets">
      <li>Graphic Design</li>
      <li>Branding</li>
      <li>Campaign Making</li>
      <li>Editorial</li>
      <li>Video Editing</li>
      <li>Social Media Content</li>
    </ul>

    <div class="divider"></div>

    <h2>Softwares</h2>
    <ul class="softwares">
      <li>Adobe Illustrator</li>
      <li>Adobe Photoshop</li>
      <li>Adobe After Effects</li>
      <li>Adobe Premiere Pro</li>
      <li>Figma</li>
    </ul>

    <div class="divider"></div>

    <div class="contact-info">
      <p><strong>Email</strong>
      <a href="mailto:keziaens@gmail.com">keziaens@gmail.com</a></p>

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

    <div class="section">
      <h2>Achievements</h2>
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

</body>
</html>
