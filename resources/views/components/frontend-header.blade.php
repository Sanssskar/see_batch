<header class="bg-(--primary) py-3">
    <div class="container flex items-center justify-between">
        <div class="text-lg font-bold text-white hover:text-(--secondary) duration-300">
           <i class="fa-solid fa-crown"></i> SanskarHub
        </div>
        <nav class="flex items-center gap-5 font-semibold text-white">
            <a href="{{ route('home') }}"><i class="fa-solid fa-home"></i> Home</a>
            <a href="{{ route('about') }}"> <i class="fa-solid fa-person"></i>About</a>
            <a href="{{ route('service') }}"><i class="fa-solid fa-bell-concierge"></i> Service</a>
            <a href="{{ route('contact') }}"><i class="fa-solid fa-user"></i>   Contact</a>
        </nav>
    </div>
</header>
