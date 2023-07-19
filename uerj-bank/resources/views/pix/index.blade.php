@component('layouts/layout-sidebar')
    @slot('activePath') {{ $activePath }} @endslot
    <h1>Pix</h1>
    <h2>{{ $name }}</h2>
@endcomponent