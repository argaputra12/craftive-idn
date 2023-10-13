<x-app-layout>
  <style>
    button[aria-current="true"] {
      background-color: #858585;
    }

    button[aria-current="false"] {
      background-color: #D9D9D9;
    }
  </style>

  <!-- Jumbotron -->
  <section
    class="-mt-24 flex min-h-screen w-full items-center justify-between bg-gradient-to-r from-white from-[75%] to-primary-green to-[25%] pl-[70px] pr-36 pt-24">
    <div class="flex w-3/5 flex-col gap-4">
      <img src="{{ asset('storage/images/group.png') }}" alt="" class="h-16 w-16">
      <h1 class="font-poppins text-[64px] font-bold text-primary-purple">We Provide Various <span
          class="text-primary-orange underline decoration-2 underline-offset-4">Events</span> For You</h1>
      <p class="w-4/5">Tidak perlu bingung lagi untuk mengadakan workshop kreatif dengan biaya yang murah dan fasilitas yang lengkap. Disini kamu bisa mengeksplorasi kemampuanmu dengan bertemu bersama teman-teman yang akan berkreasi bersama!
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

  <div id="event" class="flex flex-col gap-12 bg-gray-100 py-16">

    <!-- Main Event -->
    <div id="main-event" id="default-carousel" class="relative w-full px-14" data-carousel="slide">
      <!-- Carousel wrapper -->
      <div class="relative h-56 overflow-hidden rounded-lg md:h-80">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <div style="background-image: url('{{ asset('storage/images/tumurun.jpg') }}');"
            class="z-0 h-full w-full rounded-lg bg-cover bg-center">
            <div
              class="absolute inset-0 flex items-end justify-center bg-opacity-10 bg-gradient-to-t from-black from-10% py-11">
              <div class="flex flex-col text-white">
                <h2 class="text-center text-xl font-semibold">Nama Event</h2>
                <div class="flex items-center gap-1 text-xs text-[#BBBBBB]">
                  <i class="fa-regular fa-calendar"></i>
                  <p class="font-medium">10 Desember 2023</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
          <div style="background-image: url('{{ asset('storage/images/sriwedari.webp') }}');"
            class="z-0 h-full w-full rounded-lg bg-cover bg-center">
            <div
              class="absolute inset-0 flex items-end justify-center bg-opacity-10 bg-gradient-to-t from-black from-10% py-11">
              <div class="flex flex-col text-white">
                <h2 class="text-center text-xl font-semibold">Nama Event</h2>
                <div class="flex items-center gap-1 text-xs text-[#BBBBBB]">
                  <i class="fa-regular fa-calendar"></i>
                  <p class="font-medium">10 Desember 2023</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Slider indicators -->
      <div class="absolute -bottom-5 left-1/2 z-30 flex -translate-x-1/2 space-x-3">
        <button type="button" class="h-3 w-3 rounded-full" aria-current="true" aria-label="Slide 1"
          data-carousel-slide-to="0"></button>
        <button type="button" class="h-3 w-3 rounded-full" aria-current="false" aria-label="Slide 2"
          data-carousel-slide-to="1"></button>
      </div>
    </div>

    <!-- Kategori -->
    <section id="categories-container" class="py-8 px-14">
      <div class="mx-auto max-w-screen-xl">
        <div id="categories" class="flex w-full justify-between gap-5">
          @foreach ($categories as $category)
            <x-landing-page.category image="{{ asset($category->image_url) }}" value="{{ $category->name }}">
            </x-landing-page.category>
          @endforeach
        </div>
      </div>
    </section>

    <!-- Event Recommendation -->
    <section class="flex w-full items-center">
      <div class="absolute left-0 z-0 h-[340px] w-52 rounded-r-xl bg-primary-green">

      </div>
      <div class="z-10 flex w-full items-center justify-between pl-14">
        <h1 class="font-poppins text-3xl font-semibold">
          Rekomendasi <span class="text-primary-orange">Event</span> Untuk Kamu
        </h1>
        <div class="relative w-full">
          <div class="flex gap-10">
            <div class="h-80 w-64 rounded-lg bg-white p-5 drop-shadow-md">
              <div class="flex flex-col gap-8">
                <img src="{{ asset('storage/images/bali-arts.jpg') }}" alt="" class="rounded-md">
                <div class="flex flex-col gap-3">
                  <p class="text-xl font-semibold">Nama Event</p>
                  <div class="flex">
                    <div class="rounded-md bg-primary-green px-2 py-1 text-xs text-primary-purple">
                      Flower and Planting
                    </div>
                  </div>
                  <div class="flex items-center gap-1 text-xs">
                    <i class="fa-regular fa-calendar"></i>
                    <p class="">10 Des 2023</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="h-80 w-64 rounded-lg bg-white p-5 drop-shadow-md">
              <div class="flex flex-col gap-8">
                <img src="{{ asset('storage/images/bali-arts.jpg') }}" alt="" class="rounded-md">
                <div class="flex flex-col gap-3">
                  <p class="text-xl font-semibold">Nama Event</p>
                  <div class="flex">
                    <div class="rounded-md bg-primary-green px-2 py-1 text-xs text-primary-purple">
                      Flower and Planting
                    </div>
                  </div>
                  <div class="flex items-center gap-1 text-xs">
                    <i class="fa-regular fa-calendar"></i>
                    <p class="">10 Des 2023</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="h-80 w-64 rounded-lg bg-white p-5 drop-shadow-md">
              <div class="flex flex-col gap-8">
                <img src="{{ asset('storage/images/bali-arts.jpg') }}" alt="" class="rounded-md">
                <div class="flex flex-col gap-3">
                  <p class="text-xl font-semibold">Nama Event</p>
                  <div class="flex">
                    <div class="rounded-md bg-primary-green px-2 py-1 text-xs text-primary-purple">
                      Flower and Planting
                    </div>
                  </div>
                  <div class="flex items-center gap-1 text-xs">
                    <i class="fa-regular fa-calendar"></i>
                    <p class="">10 Des 2023</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Event di Surakarta -->
    <section class="px-14">
      <h1 class="mb-4 text-3xl font-semibold">
        <span class="text-primary-orange">Event</span> di Surakarta
      </h1>
      <div class="flex w-full flex-wrap gap-10">

        @foreach ($events as $event)
          <a href="{{ route('events.index', ['id' => $event->id]) }}" class="flex h-[212px] w-[48%] gap-5 rounded-lg bg-white p-5 drop-shadow-md hover:drop-shadow-xl transition-all duration-300">
            <img src="{{ asset('storage/images/bali-arts.jpg') }}" alt="" class="h-44 w-44 rounded-md">
            <div class="flex flex-col justify-between">
              <div class="flex flex-col gap-1">
                <p class="font-poppins text-xl font-semibold">{{ $event->name }}</p>
                <p class="text-[#606060] max-h-[72px] text-ellipsis overflow-hidden">{{ $event->description }}</p>
              </div>
              <div class="flex gap-2">
                @foreach ($event->eventCategory as $category)
                  <div class="rounded-md bg-primary-green px-2 py-1 text-xs text-primary-purple">
                    {{ $category->categories->name }}
                  </div>
                @endforeach
              </div>
              <div class="flex items-center gap-1 text-xs">
                <i class="fa-regular fa-calendar"></i>
                <p>{{ date('d F Y', strtotime($event->date)) }}</p>
              </div>
            </div>
          </a>
        @endforeach
      </div>

      <div class="mt-6">
        {{ $events->links() }}
      </div>
    </section>

  </div>

  <!-- Hubungi Kami -->
<section id="contact" class="h-72 w-full bg-planting bg-cover bg-fixed bg-center">
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

