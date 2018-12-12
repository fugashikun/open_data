<!DOCTYPE html>
<html lang="ja">
@include('layouts.head')
<body>
@include('layouts.header')
<div class="container">
    <div class="row" id="content">
        <div class="col-md-4">
        @include('layouts.nav')
        </div>
        @yield('content')
    </div>
</div>
@include('layouts.footer')
</body>
</html>