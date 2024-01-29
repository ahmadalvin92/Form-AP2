<!DOCTYPE html>
<html lang="id">

<head>
    @vite('resources/css/app.css')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SM-AP2 - Form Perawatan Perangkat</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <style>
        /* Menambahkan gaya untuk membuat teks hitam pada radio button */
        #radioFreeText, #radioFreeText + label {
            color: black;
        }
    </style>
</head>

<body style="background: url('{{ asset('image/form-background.jpg') }}') no-repeat center center fixed; background-size: cover; color: white;">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <div>
                <img src="{{ asset('image/Angkasa_Pura_II_logo_2014.svg.png') }}" alt="Logo Angkasa Pura" class="img-fluid mx-auto d-block my-2" style="max-width: 150px;">
                <h1 class="text-center mt-4 mb-4">Form Perawatan Perangkat</h1>

                <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                                <label class="font-weight-bold">GAMBAR</label>
                                <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                            
                                <!-- error message untuk title -->
                                @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Peralatan</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" placeholder="Masukkan Judul Post">
                            
                                <!-- error message untuk title -->
                                @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="keterangan">Keterangan</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Bersihkan Rak Switch ✅" id="bersihkan_rak_switch" name="keterangan[]">
                                    <label class="form-check-label" for="bersihkan_rak_switch">
                                        Bersihkan Rak Switch
                                    </label>
                                </div>
                                
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Bersihkan Switch Access ✅" id="bersihkan_switch_access" name="keterangan[]">
                                    <label class="form-check-label" for="bersihkan_switch_access">
                                        Bersihkan Switch Access
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Bersihkan kabel-kabel ✅" id="bersihkan_kabel_kabel" name="keterangan[]">
                                    <label class="form-check-label" for="bersihkan_kabel_kabel">
                                        Bersihkan kabel-kabel
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="Rapikan kabel-kabel Lan ✅" id="rapikan_kabel_lan" name="keterangan[]">
                                    <label class="form-check-label" for="rapikan_kabel_lan">
                                        Rapikan kabel-kabel Lan
                                    </label>
                                </div>
                            </div>
                           
                                <!-- error message untuk title -->
                                @error('keterangan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Status</label>
                                <select class="form-control @error('content') is-invalid @enderror" name="content">
                                    <option value="ok">OK</option>
                                    <option value="not_ok">NOT OK</option>
                                </select>
    
                            <!-- error message untuk content -->
                            @error('content')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>

                            
                            
                            <div class="form-group">
                                <label class="font-weight-bold">Catatan</label>
                                <input type="text" class="form-control @error('catatan') is-invalid @enderror" name="catatan" placeholder="Masukkan Catatan">
                            
                                <!-- error message untuk title -->
                                @error('catatan')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                            <button type="reset" class="btn btn-md btn-warning">RESET</button>

                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</body>
</html>