<nav class="bg-gradient-to-t font-secondary from-primary to-secondary text-white h-24 text-l flex px-14">
    <img src="/logo-05.svg" class="md:h-40 h-21 md:mt-[-0.5em] relative z-10">

    <ul class="lg:flex py-8 px-14 space-x-9 body font-medium items-center ml-[-14em] z-10 mt-8 hidden lg:block justify-center flex-1">
        <li>
            <a href="{{route ('home')}}">HOME</a>
        </li>
        <li>
            <a href="#">TEAMS</a>
        </li>
        <li>
            <a href="{{route ('merch')}}">MERCH</a>
        </li>
        <li>
            <a href="{{route ('contact')}}">CONTACT</a>
        </li>
    </ul>

    <button class="lg:hidden text-white ml-auto" id="hamburger-btn">
        <span class="block w-6 h-0.5 bg-white mb-1"></span>
        <span class="block w-6 h-0.5 bg-white mb-1"></span>
        <span class="block w-6 h-0.5 bg-white mb-1"></span>
    </button>


    <ul class="lg:hidden absolute left-0 right-0 top-24 bg-primary text-white text-center py-6 hidden z-40" id="mobile-menu">
        <li>
            <a href="/" class="block py-2">HOME</a>
        </li>
        <li>
            <a href="#" class="block py-2">TEAMS</a>
        </li>
        <li>
            <a href="/merch.html" class="block py-2">MERCH</a>
        </li>
        <li>
            <a href="/contact.html" class="block py-2">CONTACT</a>
        </li>
    </ul>
</nav>

<script>

    const hamburgerBtn = document.getElementById('hamburger-btn');
    const mobileMenu = document.getElementById('mobile-menu');

    hamburgerBtn.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>
