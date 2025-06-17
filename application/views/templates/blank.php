BLANK TEMPLATE

<div class="content-wrapper">
  <style>
    .welcome-banner {
      background-image: url('https://png.pngtree.com/background/20210711/original/pngtree-simple-blue-medical-health-background-picture-image_1128656.jpg');
      height: 100vh;
      width: 100%;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      position: relative;
      font-family: 'Times New Roman', Times, serif;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .overlay {
      position: absolute;
      top: 0; left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(179, 236, 255, 0.4); /* biru laut transparan */
      z-index: 1;
      backdrop-filter: blur(3px);
    }

    .text-box {
      position: relative;
      z-index: 2;
      background-color: rgba(255, 255, 255, 0.85);
      padding: 30px 50px;
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.2);
      text-align: center;
      animation: fadeIn 1s ease-in-out;
    }

    .text-box h1 {
      margin: 0;
      font-size: 36px;
      color: #003366; /* biru tua */
    }

    .text-box p {
      font-size: 18px;
      color: #555;
      margin-top: 10px;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>

  <div class="welcome-banner">
    <div class="overlay"></div>
    <div class="text-box">
      <h1>Selamat Datang di RS.Dansyah</h1>
      <p>Kesehatan Anda adalah Prioritas Kami.</p>
    </div>
  </div>
</div>

  <?php
  echo '
  <div class="welcome-banner">
    <div class="overlay"></div>
    <div class="text-box">
      <h1>Selamat Datang di RS.Dansyah</h1>
      <p>Tenaga Medis Profesional Cepat dan Tanggap</p>
    </div>
  </div>';?>
</div>