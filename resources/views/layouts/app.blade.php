<html>
<head>
<title>@yield('title')</title>

<script src="{{ asset('js/tailwind.js') }}"></script>
</head>

<body class="antialiased font-sans bg-gray-200">

@stack('scripts')
</body>
</html>
