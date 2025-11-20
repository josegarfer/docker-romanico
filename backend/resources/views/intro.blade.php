<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Románico Palentino</title>

    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
            font-family: sans-serif;
        }

        .hero {
            height: 100vh;
            width: 100%;
            background-image: url('/images/iglesiasantiago02.jpg');
            background-size: cover;        /* QUE CUBRA TODA LA PANTALLA */
            background-position: center;    /* CENTRAR */
            background-repeat: no-repeat;
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            background: rgba(0, 0, 0, 0.45); /* Oscurece un poco para leer bien */
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
            padding: 20px;
        }

        h1 {
            font-size: 2.7rem;
            margin-bottom: 1rem;
        }

        p {
            font-size: 1.2rem;
            max-width: 800px;
        }

        .btn {
            margin-top: 20px;
            display: inline-block;
            padding: 12px 28px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            cursor: pointer;
        }

        .btn-primary {
            background-color: #2563eb;
            color: white;
        }

        .btn-secondary {
            background-color: rgba(255,255,255,0.8);
            color: #222;
            margin-left: 10px;
        }
    </style>

</head>
<body>

<div class="hero">
    <div class="overlay">
        <h1>Románico de Carrión de los Condes</h1>

        <p>
            Sumérgete en la riqueza del románico palentino a través de una experiencia visual única.
            Iniciamos el recorrido con la magnífica <strong>Iglesia de Santiago</strong>, una de las
            joyas del Camino de Santiago. Accede para descubrir fotografías detalladas, historia,
            curiosidades y más.
        </p>

        <div>
            <a href="/login" class="btn btn-primary">Iniciar sesión</a>
            <a href="/register" class="btn btn-secondary">Registrarse</a>
        </div>
    </div>
</div>

</body>
</html>
