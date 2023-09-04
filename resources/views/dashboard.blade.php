<x-app-layout>
  <!-- Jumbotron -->
  <section
    class="bg-gray-700 bg-[url('https://images.pexels.com/photos/4348401/pexels-photo-4348401.jpeg')] bg-center bg-no-repeat bg-blend-multiply">
    <div class="mx-auto max-w-screen-xl px-4 py-24 text-center lg:py-56">
      <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl">Create
        Creative Crafts</h1>
      <p class="mb-8 text-lg font-normal text-gray-300 sm:px-16 lg:px-48 lg:text-xl">Lorem ipsum dolor, sit amet
        consectetur adipisicing elit. Similique, suscipit iure corrupti ipsa tempora alias. Magnam perspiciatis
        voluptatibus inventore illo adipisci quod, provident quo eveniet facilis hic iusto sapiente explicabo.</p>
      <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-x-4 sm:space-y-0">

      </div>
    </div>
  </section>

  <!-- Kategoti -->
  <section id="categories-container" class="mb-10 bg-gray-50 py-10">
    <div class="mx-auto max-w-screen-xl">
      <div class="flex flex-col gap-4">
        <h3 class="font-heebo text-2xl font-semibold">Kategori</h3>
        <div id="categories" class="flex w-full justify-between gap-2">
          <x-landing-page.category>
            <i class="fa-solid fa-globe fa-lg"></i>
            <input type="hidden" name="category" value="Semua Kategori">
            <p>Semua Kategori</p>
          </x-landing-page.category>
          <x-landing-page.category>
            <i class="fa-solid fa-music fa-lg"></i>
            <input type="hidden" name="category" value="Musik">
            <p>Festival Musik</p>
          </x-landing-page.category>
          <x-landing-page.category>
            <i class="fa-solid fa-palette fa-lg"></i>
            <input type="hidden" name="category" value="Seni">
            <p>Seni dan Budaya</p>
          </x-landing-page.category>
          <x-landing-page.category>
            <i class="fa-solid fa-gamepad fa-lg"></i>
            <input type="hidden" name="category" value="Permainan">
            <p>Permainan dan Hiburan</p>
          </x-landing-page.category>
          <x-landing-page.category>
            <i class="fa-solid fa-person-running fa-lg"></i>
            <input type="hidden" name="category" value="Olahraga">
            <p>Olahraga</p>
          </x-landing-page.category>
        </div>
      </div>
    </div>
  </section>

  <!-- Content -->
  <div class="mx-auto max-w-screen-xl">

    <!-- Event -->
    <section id="events-container" class="mb-16 flex flex-col gap-4">
      <h3 class="font-heebo text-3xl font-semibold">Event di Surakarta</h3>
      <div id="events" class="flex flex-wrap justify-start gap-6">
        @foreach ($events as $e)
          <x-landing-page.event-card :id="$e->id">
            <x-slot:image>
              <img class="overflow-hidden rounded-t-lg object-cover" src="{{ asset('storage/images/bali-arts.jpg') }}"
                alt="" />
            </x-slot:image>
            <x-slot:title>
              <a href="{{ route('events.index', ['id' => $e->id]) }}">
                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                  {{ $e->name }}
                </h5>
              </a>
            </x-slot:title>
            <x-slot:date>
              <p class="text-sm">{{ \Carbon\Carbon::parse($e->date)->format('l, d F Y') }}</p>
              <p class="text-sm">{{ \Carbon\Carbon::parse($e->date)->format('h:i A') }}</p>
            </x-slot:date>
            <x-slot:location>
              <span class="text-sm capitalize">{{ $e->location }}, {{ $e->city }}, {{ $e->province }}</span>
            </x-slot:location>
            <x-slot:price>
              @foreach ($e->tickets as $ticket)
                <span class="text-sm font-light text-black">Mulai dari</span>
                @if ($ticket->price == 0)
                  Gratis
                @else
                  {{ Helper::convertCurrency($ticket->price) }}
                @endif
              @endforeach
            </x-slot:price>
          </x-landing-page.event-card>
        @endforeach
        <div class="w-full">
          {{ $events->links() }}
        </div>
      </div>
    </section>

    <!-- Destinasi Rekomendasi -->
    <section class="my-24 flex flex-col gap-4">
      <h3 class="font-heebo text-3xl font-semibold">Rekomendasi Destinasi Wisata di Surakarta</h3>
      <div id="controls-carousel" class="relative w-full" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
          <!-- Item 1 -->
          <div class="hidden bg-black duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('storage/images/keraton.jpg') }}"
              class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2 opacity-50"
              alt="...">
            <div
              class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transform font-mono text-5xl font-semibold text-white">
              Keraton Surakarta
            </div>
          </div>
          <!-- Item 1 -->
          <div class="hidden bg-black duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('storage/images/mangkunegaran.jpg') }}"
              class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2 opacity-50"
              alt="...">
            <div
              class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transform font-mono text-5xl font-semibold text-white">
              Pura Mangkunegaran
            </div>
          </div>
          <!-- Item 1 -->
          <div class="hidden bg-black duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('storage/images/De-Tjolomadoe.jpg') }}"
              class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2 opacity-50"
              alt="...">
            <div
              class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transform font-mono text-5xl font-semibold text-white">
              De'Tjolomadoe
            </div>
          </div>
          <!-- Item 1 -->
          <div class="hidden bg-black duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('storage/images/tumurun.jpg') }}"
              class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2 opacity-50"
              alt="...">
            <div
              class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transform font-mono text-5xl font-semibold text-white">
              Tumurun Private Museum
            </div>
          </div>
          <!-- Item 1 -->
          <div class="hidden bg-black duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('storage/images/sriwedari.webp') }}"
              class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2 opacity-50"
              alt="...">
            <div
              class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 transform font-mono text-5xl font-semibold text-white">
              Taman Sriwedari
            </div>
          </div>

        </div>
        <!-- Slider controls -->
        <button type="button"
          class="group absolute left-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
          data-carousel-prev>
          <span
            class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70">
            <svg class="h-4 w-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
              fill="none" viewBox="0 0 6 10">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5 1 1 5l4 4" />
            </svg>
            <span class="sr-only">Previous</span>
          </span>
        </button>
        <button type="button"
          class="group absolute right-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
          data-carousel-next>
          <span
            class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70">
            <svg class="h-4 w-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
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

<script>
  //   const filterEvent = (category) => {
  //     const events = document.getElementById('events')

  //     // fetch data then render view with data
  //     fetch(`/?category=${category}`)
  //       .then(response => response.json())
  //       .then(data => {
  //         events.innerHTML = ``
  //         console.log(data)
  //       });

  //   }
</script>
