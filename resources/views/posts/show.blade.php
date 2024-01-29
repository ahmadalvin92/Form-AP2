<!DOCTYPE html>
<head>
    @vite('resources/css/app.css')
</head>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SM-AP2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>
<body style="background: url('{{ asset('image/form-background.jpg') }}') no-repeat center center fixed; background-size: cover;">

    <div class="container mt-5 mb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <img src="{{ asset('storage/posts/'.$post->image) }}" class="w-100 rounded">
                        <hr>
                        <div>
                            <strong>Nama Peralatan : </strong>{{ $post->title }}
                    </div>
                            <strong>Status : </strong>{!! $post->content !!}
                    </div>
                        <div>
                        <strong>Keterangan:</strong> {!! $post->keterangan !!}
                    </div>
                    <div>
                        <strong>Catatan:</strong> {!! $post->catatan !!}
                    </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>