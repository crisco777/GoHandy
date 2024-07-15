
<head>
    <!DOCTYPE html>
    <html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>




<body class="d-flex justify-content-center align-items-center" style="height: 100vh; "
    background="https://img.freepik.com/foto-gratis/marco-diferentes-herramientas-coche-juguete-mesa_23-2148096420.jpg?size=626&ext=jpg&ga=GA1.1.1803636316.1707523200&semt=ais">
    <div class="card shadow col-xs-12 col-sm-6 col-md-6 col-lg-4   p-4">
        <div class="container col-12 mt-5">

            <div class="mb-3">
                <div  class="d-flex justify-content-center" >
                    <img src="{{ asset('img/grupito.jpeg') }}" alt="" style="height: 12vh; margin-top: -0.8cm; border-radius:5%" >
                </div>
                <label for="formFileMultiple" class="form-label">Payment range</label>
                <div class="input-group mb-3">

                    <span class="input-group-text">$</span>
                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                    <span class="input-group-text">.00</span>
                </div>


                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Insert reference images</label>
                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <a >
                    <button style="background-color: #090539" type="button" class="btn text-white my-3">Solicitar Servicio</button>
                </a>


            </div>
</body>

</html>

