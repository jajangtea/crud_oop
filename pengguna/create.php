<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="jumbotron">
                    <h1 class="display-3">CRUD</h1>
                    <p class="lead">OOP PHP</p>
                    <hr class="my-2">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-5 mx-auto">
                <form action="proses.php" method="post">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control" placeholder="nama"
                            aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="">Umur</label>
                        <input type="text" name="umur" id="umur" class="form-control" placeholder="umur"
                            aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                        <label for="">TTL</label>
                        <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control"
                            placeholder="tanggal_lahir" aria-describedby="helpId" width="30%">
                    </div>
                    <label for="">Jenis Kelamin :</label>
                    <div class="form-check form-check-inline">
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="jk" id="jk" value="l"> Laki-Laki
                      </label>
                    </div>
                    <div class="form-check form-check-inline">
                   
                      <label class="form-check-label">
                        <input class="form-check-input" type="radio" name="jk" id="jk" value="p"> Perempuan
                      </label>
                    </div>
                    <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="submit_simpan">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>