<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    @include('includes.meta')

    @stack('before-style')

    @include('includes.style')

    @stack('after-style')

    <title>Landing | Kojaydev</title>
</head>
<body>

    @include('includes.navbar')

    <!-- Home Section -->
    @include('components.home')

    <!-- Tech Section -->
    @include('components.tech')

    <!-- Tech Section -->
    @include('components.profile')

    <!-- Project -->
    @include('components.project')

    <!-- Footer -->
    @include('components.footer')


    @stack('before-script')

    @include('includes.script')

    @stack('after-script')
</body>
</html>
