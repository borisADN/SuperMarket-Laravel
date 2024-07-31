<header class="app-bar">
    <table width="100%">
        <tr>
            <td>
                <a href="{{ route('home') }}">
                    <b>Home</b>
                </a>
            </td>
    
            <td class="text-right">
                <li class="nav__profile">
                    <div class="avatar">
                        <img src="{{ URL::asset('assets/images/brooo.jpg') }}" alt="">
                        {{-- <img src="{{ URL::asset('assets/images/picture.jpg') }}" alt="">" > --}}
                    </div>
            
                    <ul>
                        <li><a href="{{ route('edit-profile') }}">Modifier le Profil</a></li>
                        <li><a href="{{ route('logout') }}">Deconnexion</a></li>
                    </ul>
                </li>
            </td>
            {{-- <img src="{{ URL::asset('assets/images/logo.jpg') }}" alt=""> --}}

        </tr>
    </table>
</header>