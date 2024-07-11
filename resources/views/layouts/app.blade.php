<html>
<head>
<title>@yield('title')</title>

<script src="{{ asset('js/tailwind.js') }}"></script>
<script>
tailwind.config = {
    theme: {
        extend: {
            colors: {
                primary: 'deepskyblue'
            }
        }
    }
}
</script>
</head>

<body class="antialiased font-sans bg-gray-200">

@yield('content')

@stack('scripts')
</body>
</html>
