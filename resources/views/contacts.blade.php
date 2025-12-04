<div>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contacts">Contact</a>
        <a href="/blogs">Blogs</a>
    </nav>
    <h1>Halaman Contacts</h1>
    <h2>Daftar Contacts</h2>
    <ul>
        @foreach ($contacts as $contact)
            <li>
                {{ $contact['name'] }} - {{ $contact['phone'] }}
            </li>
        @endforeach
    </ul>
</div>
