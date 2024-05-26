<aside class="bg-slate-600">

    <div class="profile">
        <h3 class="text-white mb-0">Dinar wijaksono</h3>
        <p class="text-[14px] mt-0 text-white">Lorem, ipsum.</p>
    </div>

    <hr class="my-5 mx-3">

    <ul>
        <a href="/">
            <li>Dashboard</li>
        </a>

        <a href="/Home/heading">
            <li>
                Heading</li>
        </a>

        <a href="/Home/colors">
            <li>Colors</li>
        </a>

        <a href="/Table">
            <li @class([
                'active' => session()->get('menuActive') == 'table',
            ])>Tabel</li>
        </a>
    </ul>

    <hr class="my-5 mx-3">

    <ul>
        <a href="/Auth/login">
            <li>Exemple Page Login</li>
        </a>
    </ul>

    <hr class="my-5 mx-3">

    <ul>
        <li class="btn">
            <button type="button">Logout</button>
        </li>
    </ul>

</aside>
