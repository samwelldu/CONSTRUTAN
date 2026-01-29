<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gracias - CONSTRUTAN</title>
    <!-- Tailwind CSS (Reusing output) -->
    <link href="assets/css/output.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Oswald:wght@500;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
        }

        h1 {
            font-family: 'Oswald', sans-serif;
        }
    </style>
</head>

<body class="bg-gray-100 h-screen flex flex-col justify-center items-center text-center px-4">

    <div
        class="bg-white p-10 rounded-2xl shadow-2xl max-w-lg w-full transform transition-all duration-500 scale-100 hover:scale-105">
        <div class="w-24 h-24 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
            <i class="fas fa-check text-5xl text-green-500 animate-pulse"></i>
        </div>

        <h1 class="text-4xl font-bold text-gray-800 mb-4">¡Mensaje Recibido!</h1>
        <p class="text-gray-600 mb-8 text-lg">
            Gracias por contactar a <strong>CONSTRUTAN</strong>. Hemos recibido tu solicitud y uno de nuestros expertos
            se pondrá en contacto contigo a la brevedad.
        </p>

        <div class="w-full bg-gray-200 rounded-full h-1.5 mb-2 overflow-hidden">
            <div class="bg-green-500 h-1.5 rounded-full" style="width: 0%; animation: progress 4s linear forwards;">
            </div>
        </div>
        <p class="text-xs text-gray-400">Redirigiendo al inicio...</p>

        <div class="mt-8">
            <a href="index.php?msg=sent" class="text-green-600 hover:text-green-800 font-semibold underline">
                Volver ahora
            </a>
        </div>
    </div>

    <script>
        // Auto Redirect after 4 seconds
        setTimeout(function () {
            window.location.href = 'index.php?msg=sent';
        }, 4000);
    </script>

    <style>
        @keyframes progress {
            0% {
                width: 0%;
            }

            100% {
                width: 100%;
            }
        }
    </style>

</body>

</html>