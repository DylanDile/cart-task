<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>E-Mart</title>
    @livewireStyles

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>
<body style="background-color: #0b0e11;">
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
        @yield('content')
    </div>
</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script>
    window.addEventListener('swal:modal', event => {
        swal({
            title: event.detail.message,
            text: event.detail.text,
            icon: event.detail.type,
        });
    });

    window.addEventListener('swal:confirm', event => {
        swal({
            title: event.detail.message,
            text: event.detail.text,
            icon: event.detail.type,
            buttons: true,
            dangerMode: true,
        })
            .then((willDelete) => {
                if (willDelete) {
                    window.livewire.emit('remove');
                }
            });
    });
</script>
@livewireScripts
</body>
</html>
