<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SM-AP2 - Edit Form Perawatan Perangkat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: url('{{ asset('image/form-background.jpg') }}') no-repeat center center fixed; background-size: cover;">

    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                    <form action="{{ route('posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label class="font-weight-bold">GAMBAR</label>
                                <input type="file" class="form-control" name="image">
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Nama Peralatan</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title', $post->title) }}" placeholder="Masukkan Judul Post">

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
                                    <input class="form-check-input" type="checkbox" value="Rapikan kabel-kabel Lan✅" id="rapikan_kabel_lan" name="keterangan[]">
                                    <label class="form-check-label" for="rapikan_kabel_lan">
                                        Rapikan kabel-kabel Lan
                                    </label>
                                </div>

                                <!-- error message untuk keterangan -->
                                @error('keterangan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold">Status</label>
                                <select class="form-control @error('content') is-invalid @enderror" name="content">
                                    <option value="ok" {{ old('content', $post->content) == 'ok' ? 'selected' : '' }}>OK</option>
                                    <option value="not_ok" {{ old('content', $post->content) == 'not_ok' ? 'selected' : '' }}>NOT OK</option>
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
                                <input type="text" class="form-control @error('catatan') is-invalid @enderror" name="catatan" value="{{ old('catatan', $post->catatan) }}" placeholder="Masukkan Catatan">

                                <!-- error message untuk catatan -->
                                @error('catatan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                                <button type="submit" class="btn btn-md btn-primary">UPDATE</button>
                                <button type="reset" class="btn btn-md btn-warning">RESET</button>
                            </form>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</script>
</body>
</html>