<x-app-layout>
  <!-- Jumbotron -->
  <section
    class="bg-center bg-no-repeat bg-[url('https://images.pexels.com/photos/4348401/pexels-photo-4348401.jpeg')] bg-gray-700 bg-blend-multiply">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
      <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Create
        Creative Crafts</h1>
      <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Lorem ipsum dolor, sit amet
        consectetur adipisicing elit. Similique, suscipit iure corrupti ipsa tempora alias. Magnam perspiciatis
        voluptatibus inventore illo adipisci quod, provident quo eveniet facilis hic iusto sapiente explicabo.</p>
      <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">

      </div>
    </div>
  </section>

  <!-- Kategoti -->
  <section class="py-10 bg-gray-50 mb-10">
    <div class="max-w-screen-xl mx-auto">
      <div class="flex flex-col gap-4">
        <h3 class="font-semibold text-2xl font-heebo">Kategori</h3>
        <div class="w-full flex gap-2 justify-between">
          <x-landing-page.category>
            <i class="fa-solid fa-globe fa-lg"></i>
            <p>Semua Kategori</p>
          </x-landing-page.category>
          <x-landing-page.category>
            <i class="fa-solid fa-music fa-lg"></i>
            <p>Festival musik</p>
          </x-landing-page.category>
          <x-landing-page.category>
            <i class="fa-solid fa-palette fa-lg"></i>
            <p>Kreasi seni</p>
          </x-landing-page.category>
          <x-landing-page.category>
            <i class="fa-solid fa-gamepad fa-lg"></i>
            <p>Permainan dan hiburan</p>
          </x-landing-page.category>
          <x-landing-page.category>
            <i class="fa-solid fa-person-running fa-lg"></i>
            <p>Olahraga</p>
          </x-landing-page.category>
        </div>
      </div>
    </div>
  </section>

  <!-- Content -->
  <div class="max-w-screen-xl mx-auto">

    <!-- Event -->
    <section class="flex flex-col gap-4 mb-16">
      <h3 class="font-heebo font-semibold text-3xl">Event di Surakarta</h3>
      <div class="flex gap-6 flex-wrap justify-between">
        <x-landing-page.event-card>
          <x-slot:image>
            <a href="#">
              <img class="rounded-t-lg overflow-hidden object-cover" src="{{ asset('storage/images/bali-arts.jpg') }}"
                alt="" />
            </a>
          </x-slot:image>
          <x-slot:title>
            <a href="#">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology
                acquisitions 2021</h5>
            </a>
          </x-slot:title>
          <x-slot:date>
            23 September 2021
          </x-slot:date>
          <x-slot:location>
            Balai Kartini, Jakarta Selatan
          </x-slot:location>
          <x-slot:price>
            Free
          </x-slot:price>
        </x-landing-page.event-card>
        <x-landing-page.event-card>
          <x-slot:image>
            <a href="#">
              <img class="rounded-t-lg overflow-hidden object-cover" src="{{ asset('storage/images/bali-arts.jpg') }}"
                alt="" />
            </a>
          </x-slot:image>
          <x-slot:title>
            <a href="#">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology
                acquisitions 2021</h5>
            </a>
          </x-slot:title>
          <x-slot:date>
            23 September 2021
          </x-slot:date>
          <x-slot:location>
            Balai Kartini, Jakarta Selatan
          </x-slot:location>
          <x-slot:price>
            Free
          </x-slot:price>
        </x-landing-page.event-card>
        <x-landing-page.event-card>
          <x-slot:image>
            <a href="#">
              <img class="rounded-t-lg overflow-hidden object-cover" src="{{ asset('storage/images/bali-arts.jpg') }}"
                alt="" />
            </a>
          </x-slot:image>
          <x-slot:title>
            <a href="#">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology
                acquisitions 2021</h5>
            </a>
          </x-slot:title>
          <x-slot:date>
            23 September 2021
          </x-slot:date>
          <x-slot:location>
            Balai Kartini, Jakarta Selatan
          </x-slot:location>
          <x-slot:price>
            Free
          </x-slot:price>
        </x-landing-page.event-card>
        <x-landing-page.event-card>
          <x-slot:image>
            <a href="#">
              <img class="rounded-t-lg overflow-hidden object-cover" src="{{ asset('storage/images/bali-arts.jpg') }}"
                alt="" />
            </a>
          </x-slot:image>
          <x-slot:title>
            <a href="#">
              <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Noteworthy technology
                acquisitions 2021</h5>
            </a>
          </x-slot:title>
          <x-slot:date>
            23 September 2021
          </x-slot:date>
          <x-slot:location>
            Balai Kartini, Jakarta Selatan
          </x-slot:location>
          <x-slot:price>
            Free
          </x-slot:price>
        </x-landing-page.event-card>
      </div>
    </section>

    <!-- Destinasi Rekomendasi -->
    <section class="flex flex-col gap-4 my-24">
      <h3 class="font-heebo font-semibold text-3xl">Rekomendasi Destinasi Wisata di Surakarta</h3>
      <div id="controls-carousel" class="relative w-full" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96 ">
          <!-- Item 1 -->
          <div class="hidden duration-700 ease-in-out bg-black" data-carousel-item>
            <img src="{{ asset('storage/images/keraton.jpg') }}"
              class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 opacity-50"
              alt="...">
              <div class="absolute text-white top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 font-semibold font-mono text-5xl">
                Keraton Surakarta
            </div>
          </div>
          <!-- Item 1 -->
          <div class="hidden duration-700 ease-in-out bg-black" data-carousel-item>
            <img src="{{ asset('storage/images/mangkunegaran.jpg') }}"
              class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 opacity-50"
              alt="...">
              <div class="absolute text-white top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 font-semibold font-mono text-5xl">
                Pura Mangkunegaran
            </div>
          </div>
          <!-- Item 1 -->
          <div class="hidden duration-700 ease-in-out bg-black" data-carousel-item>
            <img src="{{ asset('storage/images/De-Tjolomadoe.jpg') }}"
              class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 opacity-50"
              alt="...">
              <div class="absolute text-white top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 font-semibold font-mono text-5xl">
                De'Tjolomadoe
            </div>
          </div>
          <!-- Item 1 -->
          <div class="hidden duration-700 ease-in-out bg-black" data-carousel-item>
            <img src="{{ asset('storage/images/tumurun.jpg') }}"
              class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 opacity-50"
              alt="...">
              <div class="absolute text-white top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 font-semibold font-mono text-5xl">
                Tumurun Private Museum
            </div>
          </div>
          <!-- Item 1 -->
          <div class="hidden duration-700 ease-in-out bg-black" data-carousel-item>
            <img src="{{ asset('storage/images/sriwedari.webp') }}"
              class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 opacity-50"
              alt="...">
              <div class="absolute text-white top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 font-semibold font-mono text-5xl">
                Taman Sriwedari
            </div>
          </div>


        </div>
        <!-- Slider controls -->
        <button type="button"
          class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
          data-carousel-prev>
          <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5 1 1 5l4 4" />
            </svg>
            <span class="sr-only">Previous</span>
          </span>
        </button>
        <button type="button"
          class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
          data-carousel-next>
          <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
          </span>
        </button>
      </div>
    </section>
  </div>


</x-app-layout>
