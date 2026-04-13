<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Umur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>
  <body>
    
    <div class="container">
        <div class="card mt-4">
            <div class="card-body">
                <div class="card-title mb-2">
                    <h1>Form Umur</h1>
                    <p class="text-muted">Masukan data anda dibawah!</p>
                </div>

                 {{-- FOrm --}}
                 <form action="#" method="post">
                    <div class="form-group my-3">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control">
                    </div>
                    <div class="form-group my-3">
                        <label for="">Umur Kamu</label>
                        <input type="number" name="umur" class="form-control">
                    </div>
                    <div class="form-group my-3">
                        <button type="submit" class="btn btn-success">Masuk Ke Halaman</button>
                    </div>
                 </form>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>