<x-app-layout>
  <!-- Jumbotron -->
  <section
    class="-mt-24 flex min-h-screen w-full items-center justify-between bg-gradient-to-r from-white from-[75%] to-primary-green to-[25%] pl-[70px] pr-36 pt-24">
    <div class="flex w-3/5 flex-col gap-4">
      <img src="{{ asset('storage/images/group.png') }}" alt="" class="h-16 w-16">
      <h1 class="font-poppins text-[64px] font-bold text-primary-purple">We Provide Various <span
          class="text-primary-orange underline decoration-2 underline-offset-4">Events</span> For You</h1>
      <p class="w-4/5">No need to worry about running out of tickets or having trouble finding event information. At
        Craftive.id,
        everything you need is at your fingertips. Find the event you're looking forward to and order your tickets now!
      </p>
      <div class="flex justify-end pr-20">
        <img src="{{ asset('storage/images/group-1.png') }}" alt="" class="h-16 w-16">
      </div>
    </div>

    <div id="default-carousel" class="relative h-[490px] w-1/3" data-carousel="slide">
      <!-- Carousel wrapper -->
      <div class="relative h-full overflow-hidden rounded-lg">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ asset('storage/images/slider-1.png') }}"
            class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ asset('storage/images/slider-2.png') }}"
            class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <img src="{{ asset('storage/images/slider-3.png') }}"
            class="absolute left-1/2 top-1/2 block w-full -translate-x-1/2 -translate-y-1/2" alt="...">
        </div>
      </div>
      <!-- Slider indicators -->
      <div class="absolute bottom-5 left-1/2 z-30 flex -translate-x-1/2 space-x-3">
        <button type="button" class="h-3 w-3 rounded-full" aria-current="true" aria-label="Slide 1"
          data-carousel-slide-to="0"></button>
        <button type="button" class="h-3 w-3 rounded-full" aria-current="false" aria-label="Slide 2"
          data-carousel-slide-to="1"></button>
        <button type="button" class="h-3 w-3 rounded-full" aria-current="false" aria-label="Slide 3"
          data-carousel-slide-to="2"></button>
      </div>
    </div>

  </section>

  <!-- Kategori -->
  <section id="categories-container" class="mb-10 bg-gray-100 py-14">
    <div class="mx-auto max-w-screen-xl">
        <div id="categories" class="flex w-full justify-between gap-5">
          @foreach ($categories as $category)
            <x-landing-page.category image="{{ asset($category->image_url) }}" value="{{ $category->name }}">
            </x-landing-page.category>
          @endforeach
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

  </div>
  <!-- Hubungi Kami -->
  <section class="h-72 w-full bg-planting bg-cover bg-fixed bg-center">
    <div class="flex h-full w-full flex-col items-center justify-center gap-5 bg-black bg-opacity-40">
      <h3 class="text-3xl font-bold text-white">Hubungi Kami Untuk Info Selengkapnya</h3>
      <button class="rounded-md bg-white px-7 py-2 font-medium">
        Hubungi Kami
      </button>
    </div>
  </section>

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

