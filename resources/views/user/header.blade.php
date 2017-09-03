<div data-role="header" data-position="fixed">
    @if(Auth::check())
        <a href="#momen" class="ui-btn ui-corner-all ui-shadow ui-icon-video ui-btn-icon-left">Momen</a>
        <a href="#menuHeaderRight" data-rel="popup" data-transition="flip" class="ui-btn ui-corner-all ui-shadow ui-icon-carat-d ui-btn-icon-right">Hai, {{ explode(' ',Auth::user()->nama)[0] }}</a>
        <div data-role="popup" id="menuHeaderRight" class="ui-content">
            <ul data-role="listview">
                <li><a>Jadwal Mata Kuliah</a></li>
                <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Keluar</a></li>
            </ul>
        </div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    @endif
    <h1>BuTan</h1>
</div>
@include('user.momen')