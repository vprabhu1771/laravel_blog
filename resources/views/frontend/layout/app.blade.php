<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title', 'Default Title')
    </title>
    @vite('resources/css/app.css')

    <style>
        /* Add this in your main CSS or Tailwind layer */
        html {
            transition: background-color 0.3s, color 0.3s;
        }
    </style>
</head>
<body>
    <!-- Include the Header partial -->
    @include('frontend.layout.header')

    @yield('content')

    <!-- Include the Footer partial -->
    @include('frontend.layout.footer')
</body>
</html>

<script>
    function toggleDarkMode() {
        const html = document.documentElement;
        if (html.classList.contains('dark')) {
            html.classList.remove('dark');
            localStorage.setItem('theme', 'light');
        } else {
            html.classList.add('dark');
            localStorage.setItem('theme', 'dark');
        }
    }

    // Initialize based on saved theme
    document.addEventListener('DOMContentLoaded', () => {
        if (localStorage.getItem('theme') === 'dark') {
            document.documentElement.classList.add('dark');
        }
    });
</script>