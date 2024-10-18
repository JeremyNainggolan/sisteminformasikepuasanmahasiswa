<a {{ $attributes }} class="nav-link {{ $active ? 'text-primary' : 'text-secondary' }} fw-bolder"
   aria-current="{{ $active ? 'page' : false }}">{{ $slot }}</a>
