<html>
<head>
<title>@yield('title')</title>

<script src="{{ asset('js/tailwind.js') }}"></script>
<script>
tailwind.config = {
    theme: {
        extend: {
            colors: {
                primary: '#111',
                secondary: 'orange',
                muted: 'theme(colors.gray.500)'
            }
        }
    }
}
</script>
</head>

<body class="antialiased font-sans bg-gray-200">
<x-navbar />
@yield('content')

<x-footer />
@stack('scripts')
</body>
</html>
