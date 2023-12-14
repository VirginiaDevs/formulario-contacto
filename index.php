<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de contacto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet"> 

    <link type='text/css' rel='stylesheet' href='styles.css'/>
</head>
<body>
    <div id="container">
        <h2 id="titulo">Contacta con nosotros</h2>

        <form id="form-contacto" method="POST">
            <div class="row">
                <div class="form-group col-12 col-md-6 col-lg-6">
                    <input type="text" class="form-control form-control-lg" name="nombre" id="nombre" placeholder="Nombre *">
                </div>
                <div class="form-group col-12 col-md-6 col-lg-6">
                    <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="Email *">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-12 col-md-6 col-lg-6"">
                    <input type="tel" class="form-control form-control-lg" name="telefono" id="telefono" placeholder="Teléfono">
                </div>
                <div class="form-group col-12 col-md-6 col-lg-6"">
                    <input type="text" class="form-control form-control-lg" name="asunto" id="asunto" placeholder="Asunto">
                </div>
            </div>

            <div class="form-group">
                <textarea name="comentarios" id="comentarios" class="form-control form-control-lg" rows="7" placeholder="Comentarios *"></textarea>
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="privacidad">
                    <label class="form-check-label">
                        He leído y acepto la <span id="enlace">política de privacidad</span>
                    </label>
                </div>
            </div>

            <button id="btn-enviar" class="btn btn-primary" type="submit">Enviar</button>
        </form>

        <div id="mensaje"></div>

        <div class="modal fade" tabindex="-1" id="modal-mensaje">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
</body>
</html>