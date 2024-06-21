<nav class="bg-teal-800 sticky top-0 left-0 w-full h-16 flex items-center px-5 gap-x-4">
    <div class="container mx-auto flex space-x-5">
        <x-navlink url="/" name="home" active="home" />
        <x-navlink :url="route('diagnosa.index')" name="daftar Diagnosa" active="diagnosa.*" />
    </div>
</nav>
