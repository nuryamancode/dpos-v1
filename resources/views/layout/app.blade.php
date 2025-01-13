<!DOCTYPE html>
<html lang="en" data-theme="light">
@include('components.head')
{{--  @vite('resources/js/app.js')  --}}
{{--  @inertiaHead  --}}
<body>
    {{--  @inertia  --}}
    @include('components.sidebar')
    <main class="dashboard-main">
        @include('components.navbar')
        <div class="dashboard-main-body">
            <x-breadcrumb title='{{ isset($title) ? $title : '' }}' subTitle='{{ isset($subTitle) ? $subTitle : '' }}' />
            @yield('content')
        </div>
        @include('components.footer')
    </main>
    @include('components.script')
</body>

</html>
