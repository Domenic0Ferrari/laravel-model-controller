@php
    $menuItems = config('menu');
@endphp

<nav>
    <ul class="d-flex justify-content-center gap-5">
        @foreach ($menuItems as $menuItem)
            <li class="p-2 list-group-item">
                <a class="text-light nav-link" href="{{ route($menuItem['route']) }}"> {{ $menuItem['name'] }} </a>
            </li>
        @endforeach
    </ul>
</nav>