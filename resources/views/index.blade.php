<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <h1 class="text-center mb-4 text-primary">Recordando Bootstrap</h1>
                <p class="text-center text-muted mb-5">
                    Formulario de práctica usando componentes de Bootstrap 5
                </p>
                <div class="card shadow">
                    <div class="card-body p-4">
                        <form id="formularioBootstrap">
                            <!-- Nombres -->
                            <div class="mb-3">
                                <label for="nombres" class="form-label">Nombres</label>
                                <input type="text" class="form-control" id="nombres" name="nombres" required>
                            </div>
                            <!-- Apellidos -->
                            <div class="mb-3">
                                <label for="apellidos" class="form-label">Apellidos</label>
                                <input type="text" class="form-control" id="apellidos" name="apellidos" required>
                            </div>
                            <!-- Fecha de nacimiento -->
                            <div class="mb-3">
                                <label for="fechaNacimiento" class="form-label">Fecha de nacimiento</label>
                                <input type="date" class="form-control" id="fechaNacimiento" name="fechaNacimiento"
                                    required>
                            </div>
                            <!-- Cantidad de niños a cargo -->
                            <div class="mb-3">
                                <label for="ninos" class="form-label">Cantidad de niños a cargo</label>
                                <input type="number" class="form-control" id="ninos" name="ninos" min="0"
                                    value="0" required>
                            </div>
                            <!-- Madre cabeza de familia -->
                            <div class="mb-3">
                                <label class="form-label d-block">¿Es madre cabeza de familia?</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="madreCabeza" id="madreSi"
                                        value="Sí">
                                    <label class="form-check-label" for="madreSi">Sí</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="madreCabeza" id="madreNo"
                                        value="No" checked>
                                    <label class="form-check-label" for="madreNo">No</label>
                                </div>
                            </div>
                            <!-- Técnico o Tecnólogo -->
                            <div class="mb-3">

                                <label class="form-label d-block">¿Está realizando un técnico o tecnólogo?</label>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="estudio" id="estudioSi"
                                        value="Sí">
                                    <label class="form-check-label" for="estudioSi">Sí</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="estudio" id="estudioNo"
                                        value="No" checked>
                                    <label class="form-check-label" for="estudioNo">No</label>
                                </div>
                            </div>

                            <!-- Géneros de cine -->
                            <div class="mb-4">
                                <label class="form-label d-block">Géneros de cine que prefiere:</label>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="generos"
                                                value="Acción" id="accion">
                                            <label class="form-check-label" for="accion">Acción</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="generos"
                                                value="Comedia" id="comedia">
                                            <label class="form-check-label" for="comedia">Comedia</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="generos"
                                                value="Drama" id="drama">
                                            <label class="form-check-label" for="drama">Drama</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="generos"
                                                value="Terror" id="terror">
                                            <label class="form-check-label" for="terror">Terror</label>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="generos"
                                                value="Ciencia Ficción" id="scifi">
                                            <label class="form-check-label" for="scifi">Ciencia Ficción</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="generos"
                                                value="Romance" id="romance">
                                            <label class="form-check-label" for="romance">Romance</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    Enviar y mostrar respuestas
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Zona de resultados -->
                <div id="resultados" class="mt-5" style="display: none;">
                    <div class="card border-success">
                        <div class="card-header bg-success text-white">
                            <h5 class="mb-0">Respuestas seleccionadas</h5>
                        </div>
                        <div class="card-body" id="contenidoResultados"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
    <script>
        document.getElementById('formularioBootstrap').addEventListener('submit', function(e) {
            e.preventDefault();
            const nombres = document.getElementById('nombres').value;
            const apellidos = document.getElementById('apellidos').value;
            const fecha = document.getElementById('fechaNacimiento').value;
            const ninos = document.getElementById('ninos').value;
            const madre = document.querySelector('input[name="madreCabeza"]:checked').value;
            const estudio = document.querySelector('input[name="estudio"]:checked').value;
            const generosSeleccionados = [];
            document.querySelectorAll('input[name="generos"]:checked').forEach(cb => {
                generosSeleccionados.push(cb.value);
            });
            const generosTexto = generosSeleccionados.length > 0 ?
                generosSeleccionados.join(', ') : 'Ninguno seleccionado';
            const html = `
<p><strong>Nombres:</strong> ${nombres}</p>
<p><strong>Apellidos:</strong> ${apellidos}</p>
<p><strong>Fecha de nacimiento:</strong> ${fecha}</p>
<p><strong>Cantidad de niños a cargo:</strong> ${ninos}</p>
<p><strong>Madre cabeza de familia:</strong> ${madre}</p>
<p><strong>Está realizando técnico/tecnólogo:</strong> ${estudio}</p>
<p><strong>Géneros de cine preferidos:</strong> ${generosTexto}</p>
`;
            document.getElementById('contenidoResultados').innerHTML = html;
            document.getElementById('resultados').style.display = 'block';
            document.getElementById('resultados').scrollIntoView({
                behavior: 'smooth'
            });
        });
    </script>
</body>

</html>
