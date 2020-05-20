<li class="nav-item">
<a href="{{ $href }}" class="nav-link @if($active) active @endif">
         <i class="
            @if($sub)
              fas fa-circle
            @elseif($subsub)
            fas fa-dot-circle
            @endif

            nav-icon
            @if($icon)
            fas fa-{{ $icon }}
            @endif

           ">
        </i>
    <p>{{ $slot }}</p>
    </a>
</li>