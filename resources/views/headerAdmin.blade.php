@section('menu')
<div class="window">
    <div class="header">
        <div class="logo"><img src="{{ asset('assets/images/Logo.png') }}" alt="Sokur model agency"></div>
        <div class="menu">
            <ul id="menu">
                <li><a  href="/admin">Main</a></li>
                <li><a href="/casting">Casting</a></li>
                @if ($isAdmin)
                    <li><a href="/model">Add a model</a></li>
                @endif
                @if ($isAdmin)
                    <li><a href="/getModel">Edit/Delete Model</a></li>
                @endif
                <li><a href="/portfolio">Add to portfolio</a></li>
                @if ($isAdmin)
                    <li><a href="{{ route('portfolio.create') }}">Edit/Delete Portfolio</a></li>
                @endif
                @if (isset($user))
                <li class='exit'><a href="{{ route('registration.create') }}">Exit</a></li>
                @endif
            </ul>
        </div>
    </div>
</div>
@show
