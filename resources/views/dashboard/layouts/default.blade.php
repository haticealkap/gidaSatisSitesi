
@include('dashboard.layouts.header')

@yield('content')



<script type="application/javascript" src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script  src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>

@stack('scripts')
@include('dashboard.layouts.footer')