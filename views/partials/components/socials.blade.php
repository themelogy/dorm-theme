<ul class="header-top-social-icons social-icons social-icons-transparent social-icons-3 d-none d-md-block">
    @foreach(['facebook' => 'fa-facebook-f', 'instagram'=>'fa-instagram', 'twitter'=>'fa-twitter', 'google'=>'fa-google-plus', 'whatsapp'=>'fa-whatsapp', 'linkedin'=>'fa-linkedin', 'youtube'=>'fa-youtube-play', 'spotify' => 'fa-spotify'] as $sk => $sv)
        @if(setting('theme::'.$sk) && $sk == 'whatsapp')
            <li class="social-icons-{{ $sk }}">
                <a rel="nofollow" href="whatsapp:{{ setting('theme::'.$sk) }}"><i class="fab {{ $sv }} {{ $iconClass ?? '' }}"></i></a>
            </li>
        @elseif(setting('theme::'.$sk))
            <li>
                <a rel="nofollow" target="_blank" href="{{ setting('theme::'.$sk) }}"><i class="fab {{ $sv }} {{ $iconClass ?? '' }}"></i></a>
            </li>
        @endif
    @endforeach
</ul>
