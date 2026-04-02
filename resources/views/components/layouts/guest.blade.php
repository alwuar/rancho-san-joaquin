<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title ?? '' }}Rancho San Joaquín</title>
    <script src="https://www.google.com/recaptcha/api.js?render=6Lc89Z8sAAAAALt1LkKAd74ZVJBD6W0kNIKGckd5"></script>

    @stack('estilos')
</head>

<body>

    
    <body>
        <x-nav />
        {{ $slot }}
        <x-footer></x-footer>
    </body>
    
    
@stack ('js')
</body>

</html>
