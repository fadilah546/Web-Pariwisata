
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register | WisataKu</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      background: linear-gradient(120deg, #9fd3ff, #c2ffe9, #a7b9ff);
      background-size: 200% 200%;
      animation: gradientShift 10s ease infinite;
    }

    @keyframes gradientShift {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .glass-panel {
      background: rgba(255, 255, 255, 0.18);
      backdrop-filter: blur(25px) saturate(150%);
      -webkit-backdrop-filter: blur(25px) saturate(150%);
      border: 1px solid rgba(255, 255, 255, 0.3);
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.2);
    }

    .register-card {
      background: rgba(255, 255, 255, 0.35);
      backdrop-filter: blur(35px) saturate(180%);
      -webkit-backdrop-filter: blur(35px) saturate(180%);
      border: 1px solid rgba(255, 255, 255, 0.35);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
    }
  </style>
</head>
<body class="flex items-center justify-center min-h-screen p-6">

  <!-- Wrapper utama -->
  <div class="glass-panel flex flex-col md:flex-row rounded-3xl overflow-hidden max-w-5xl w-full">

    <!-- Kiri -->
    
       <?php require_once "form_register.php" ?>

        

    <!-- Kanan -->
    <div class="w-full md:w-1/2 flex flex-col justify-center items-start p-10 bg-gradient-to-br from-blue-600/70 via-cyan-400/60 to-indigo-400/60 text-white">
      <div class="max-w-sm">
        <div class="flex items-center space-x-2 mb-10">
          <div class="w-8 h-8 rounded-lg bg-white/30 flex items-center justify-center">
            <div class="w-4 h-4 border-2 border-white rounded-sm"></div>
          </div>
          <span class="text-lg font-semibold tracking-wide">COMPANY</span>
        </div>
        <h1 class="text-4xl font-bold mb-3 drop-shadow-md">Hello, Friend!</h1>
        <p class="text-base opacity-90 leading-relaxed">
          Enter your personal details and start your journey with us.
        </p>
      </div>
    </div>
  </div>

</body>
</html>
