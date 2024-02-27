@vite(['resources/css/manager-store/sidebars.css'])
<div class="flex-shrink-0 py-3 bg-white" style="width: 280px; height: calc(100vh - 93px);">
    <ul class="list-unstyled ps-0">
        @foreach ($menus as $menu)
            <li class="mb-1 list-unstyled-item">
                <a href="{{ $menu['url'] }}" class="d-block py-2 link-dark fs-5 px-3 text-decoration-none" data-bs-toggle="collapse" data-bs-target="#{{ $menu['id'] }}" aria-expanded="false">
                    {{ $menu['title'] }}
                </a>
                @if (!empty($menu['children']) && count($menu['children']) > 0)
                    <div class="collapse show" id="{{ $menu['id'] }}" style="">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            @foreach ($menu['children'] as $menu_child)
                                <li><a href="{{ $menu_child['url'] }}" class="link-dark d-block py-2 mx-0  fs-6 px-5 text-decoration-none"> {{ $menu_child['title'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endif

            </li>
        @endforeach

    </ul>
</div>
