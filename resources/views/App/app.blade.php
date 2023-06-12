@include('app.inc.header')

<body>
<div class="page-body">
    @include('App.inc.menu')
    <div class="page-wrapper">
        <div class="container-xl">
            {{ $slot }}
        </div>
    </div>
    @include('app.inc.footer')
</div>
</body>
</html>
