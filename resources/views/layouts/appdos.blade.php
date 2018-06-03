<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
<body>
    {{--app.js--}}
    <script src="{{ asset('js/app.js') }}"></script>
    {{--Page level scripts--}}
    @yield('scripts')
</body>
</html>