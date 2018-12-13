<!DOCTYPE html>
<html lang="ja">
@include('layouts.head')
<body>
@include('layouts.header')
<div class="container">
    <div class="row" id="content">
        <div class="col">
        @include('layouts.nav')
        </div>
        <div class="col-6">
        @yield('content')
        </div>
        <div class="col">
        <a class="twitter-timeline" data-lang="ja" data-width="400" data-height="600" data-link-color="#2B7BB9" href="https://twitter.com/motomoto0606?ref_src=twsrc%5Etfw">Tweets by motomoto0606</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>
</div>
@include('layouts.footer')
</body>
</html>