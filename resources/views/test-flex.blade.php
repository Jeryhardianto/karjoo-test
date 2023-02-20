<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test Flex</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        @media screen and (max-width: 992px) {
            .d-flex {
                flex-wrap: wrap;

            }

            .p-2 {
                flex: 0 0 100%;
                max-width: 100%;
            }
        }

        @media screen and (max-width: 576px) {
            .p-2 {
                flex: 0 0 100%;
                max-width: 100%;

            }
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="d-flex flex-wrap">
            <div class="p-2">
                <button class="btn btn-primary mr-2">Tambah</button>
                <button class="btn btn-success mr-2">Import</button>
                <button class="btn btn-warning">Export</button>
            </div>
            <div class="p-2 flex-grow-1">
                    <input type="text" class="form-control" placeholder="Cari...">
               
            </div>
            <div class="p-2">
                <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Pilih Tahun
                    </a>
                  
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">2020</a></li>
                      <li><a class="dropdown-item" href="#">2021</a></li>
                      <li><a class="dropdown-item" href="#">2022</a></li>
                    </ul>
                  </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        < script src = "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity = "sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin = "anonymous" >
    </>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    </script>
</body>

</html>
