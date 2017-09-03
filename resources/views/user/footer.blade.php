<div data-role="footer" data-position="fixed">
    @if(Auth::check())
        <div data-role="navbar">
            <ul>
                <li><a href="{{ route('home') }}" data-role="button" data-icon="home">Home</a></li>
                <li><a href="{{ route('friends') }}" data-role="button" data-icon="search">Cari</a></li>
                <li><a href="" data-role="button" data-icon="heart">Momenmu</a></li>
                <li><a href="{{ route('setting') }}" data-role="button" data-icon="user">Profil</a></li>
            </ul>
        </div>
    @else
        <h1>Copyright © 2017 @if(\Carbon\Carbon::now()->format('Y')!='2017') - {{ \Carbon\Carbon::now()->format('Y') }} @endif BuTan. All Rights Reserved</h1>
    @endif
</div>