<!DOCTYPE html>
<html lang="en">
@include('base.header',['title' =>'Teste'])
<body>
    <div class="container">
        @yield('container')
    </div>

    @include('base.footer')
</body>

</html>
