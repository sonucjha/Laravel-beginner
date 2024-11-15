{{-- layouts/master.blade.php --}}
<!DOCTYPE html>
<html>

<head>
    <title>@yield('title', 'Default Title')</title>
    <link rel="stylesheet" href="{{ asset('custom_css/navbar.css') }}">
    <link rel="stylesheet" href="{{ asset('custom_css/footer.css') }}">
</head>

<body>
    <header>
        @include('partials.navbar') {{-- Include a reusable navbar --}}

        <x-alert type="success" message="This is a success alert!" />
        <x-alert type="error" message="This is an error alert!" />
    </header>
    <main>
        @yield('content') {{-- Content from child views will appear here --}}
    </main>
    <footer>
        @include('partials.footer') {{-- Include a reusable footer --}}
    </footer>
</body>

</html>
