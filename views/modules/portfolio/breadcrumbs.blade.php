@if ($breadcrumbs)
    <ul class="breadcrumb justify-content-center mb-0">
        <li><a href="{{ route('homepage') }}"><img height="15" src="{!! Theme::url('images/logo/logo-icon.svg') !!}" alt="{{ setting('theme::company-name') }} favicon logo" /></a></li>
        @foreach ($breadcrumbs as $crumb)
            <?php
            $icon = isset($crumb->icon) ? '<i class="' . $crumb->icon . '"></i> ' : '';
            ?>

            @if ($crumb->url && ! $crumb->last)
                <li>
                    <a href="{{ $crumb->url }}">{!! $icon !!}{!! Str::words($crumb->title, 6) !!}</a>
                </li>
            @else
                <li class="active">{!! $icon !!}{!! Str::words($crumb->title, 6) !!}</li>
            @endif
        @endforeach
    </ul>
    @if(strpos(Request::server('HTTP_REFERER'), Request::root()) !== false)
        <a class="btn btn-default btn-xs pull-right" href="{{ Request::server('HTTP_REFERER') }}"><i class="fa fa-angle-left"></i></a>
    @endif
@endif
