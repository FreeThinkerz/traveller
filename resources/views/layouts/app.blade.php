<html>
<head>
<title>@yield('title')</title>

<script src="{{ asset('js/tailwind.js') }}"></script>
<script>
tailwind.config = {
    theme: {
        screens: {
            mobile: '300px',
            tablet: '480px',
            laptop: '920px',
            desktop: '1280px',
            tv: '1536px',
        },
        extend: {
            colors: {
                primary: '#111',
                secondary: '#A5820A',
                muted: 'theme(colors.gray.500)'
            },
            animation: {
                slide: 'slide 10s linear infinite',
            },
            keyframes: {
                slide: {
                    "from": {
                        transform: "translateX(0%)",
                    },
                    "to": {
                        transform: "translateX(-50%)",
                    },
                },

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
