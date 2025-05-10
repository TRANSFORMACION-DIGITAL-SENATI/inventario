<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Ecuación</title>
    </head>
    <body>
        <h1>Ecuación</h1>
        <br>
        <pre>
            <form action="{{ route('ecuacion.store') }}" method="POST">
                
                @csrf

                <div>
                    <label for="">Valor de a:</label>
                    <input type="text" name="a" autocomplete="off">
                </div>
                <div>
                    <label for="">Valor de b:</label>
                    <input type="text" name="b" autocomplete="off">
                </div>
                <div>
                    <button type="submit">Guardar</button>
                </div>
            </form>
        </pre>
    </body>
</html>