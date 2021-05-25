<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>E-Mart</title>

    @livewireStyles
    @livewireScripts
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  {{--  <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-scroller">
    <div class="container-fluid page-body-wrapper">
        @include('partials.client-header')
        <div class="main-panel">
            <div class="content-wrapper pb-0">
                <div class="page-header flex-wrap">
                    @yield('content')
                </div>

            </div>

            @include('partials.client-footer')
        </div>

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
</body>
</html>
