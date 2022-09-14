<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario DNI</title>
    <link rel="stylesheet" href="estilo.css">

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>


<body> 
    <br><br>
    <div class="card card-personalizada bg-light">
        <br>
        <center>
            <h3 class="card-header bg-info"  >CONSULTAR DNI</h3>
            <br>
            <div class="btn-group">
                <input type="text" id="doc" class="form-control">
        
                <button type="button" id="buscar" class="btn btn-info">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>
                </button>
            </div>

            <br>
            <br>


            <div class="row">

                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="apellidoPaterno" disabled> <br>
                </div>
                <div class="col-sm-3"></div>

                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="apellidoMaterno" disabled> <br>
                </div>
                <div class="col-sm-3"></div>


                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <input type="text" class="form-control" id="nombre" disabled> <br>
                </div>
                <div class="col-sm-3"></div>


            </div>
        </center>

    </div>









</body>

<script>
    $('#buscar').click(function() {
        dni = $('#doc').val();
        $.ajax({
            url: 'Control/consultadni.php',
            type: 'post',
            data: 'dni=' + dni,
            dataType: 'json',
            success: function(r) {
                if (r.numeroDocumento == dni) {
                    $('#apellidoPaterno').val(r.apellidoPaterno);
                    $('#apellidoMaterno').val(r.apellidoMaterno);
                    $('#nombre').val(r.nombres);

                } else {
                    alert('El numero de DNI debe tener 8 Digitos');
                }
            }
        });

    });
</script>

<footer>
    <br><br><br><br><br><br><br><br>
    <div class="card bg-info" > 
        <center>
            <h5>Nayely Yadira Paucar Juarez</h5>
        </center>
    </div>
    
</footer>

</html>