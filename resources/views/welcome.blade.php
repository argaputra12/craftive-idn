<x-guest-layout>
  <div class="flex h-[853px] w-full items-center justify-between">
    <div class="ml-20 flex justify-center">
      <div class="flex w-1/2 flex-col justify-center gap-8 px-8">
        <h1 class="font-poppins text-6xl leading-normal">Create Creative Crafts</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis aperiam sapiente rem inventore autem dolore
          minus.</p>
        <button
          class="w-1/2 border-2 border-black px-6 py-2 text-lg font-semibold transition-all duration-200 hover:bg-black hover:text-white">
          Get Started
        </button>
      </div>
    </div>
    <div class="w-1/2">
      <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-[853px] overflow-hidden rounded-l-md">
          <!-- Item 1 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('storage/images/art-event.png') }}"
              class="absolute left-1/2 top-1/2 block h-full w-full -translate-x-1/2 -translate-y-1/2" alt="...">
          </div>
          <!-- Item 2 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('storage/images/art-event.png') }}"
              class="absolute left-1/2 top-1/2 block h-full w-full -translate-x-1/2 -translate-y-1/2" alt="...">
          </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute bottom-5 left-1/2 z-30 flex -translate-x-1/2 space-x-3">
          <button type="button" class="h-3 w-3 rounded-full" aria-current="true" aria-label="Slide 1"
            data-carousel-slide-to="0"></button>
          <button type="button" class="h-3 w-3 rounded-full" aria-current="false" aria-label="Slide 2"
            data-carousel-slide-to="1"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
          class="group absolute left-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
          data-carousel-prev>
          <span
            class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70 sm:h-10 sm:w-10">
            <svg aria-hidden="true" class="h-5 w-5 text-white dark:text-gray-800 sm:h-6 sm:w-6" fill="none"
              stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            <span class="sr-only">Previous</span>
          </span>
        </button>
        <button type="button"
          class="group absolute right-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
          data-carousel-next>
          <span
            class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-white/30 group-hover:bg-white/50 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70 sm:h-10 sm:w-10">
            <svg aria-hidden="true" class="h-5 w-5 text-white dark:text-gray-800 sm:h-6 sm:w-6" fill="none"
              stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="sr-only">Next</span>
          </span>
        </button>
      </div>

    </div>
  </div>

  <!-- About -->
  <div id="about-container" class="w-full bg-primary-background">
    <div class="mx-auto flex max-w-screen-xl justify-between py-32" id="about">
      <div class="flex w-1/2 justify-start">
        <h1 class="text-4xl">About <span class="text-gray-600">Craftive</span></h1>
      </div>
      <div class="flex w-1/2 flex-col gap-5">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam reiciendis sed exercitationem, consequuntur
          perferendis deleniti vel. Facilis beatae quas sapiente porro itaque eveniet doloribus laboriosam accusamus aut
          similique, voluptas repellendus. Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit molestiae
          expedita sequi fugiat amet quibusdam dolorem sapiente iure necessitatibus et.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores laboriosam eius possimus ad id quisquam
          totam ratione aliquam, hic aspernatur itaque debitis iste similique facere ipsam commodi! Nisi, tempore
          aliquid. Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel temporibus iure voluptatem nulla dolores
          labore nemo consectetur dicta.</p>
      </div>
    </div>
  </div>

  <!-- Our Services -->
  <div id="our-services-container" class="w-full">
    <div class="mx-auto flex max-w-screen-xl flex-col gap-36 py-20">
      <div class="flex justify-center">
        <h1 class="text-4xl">Our <span class="text-gray-600">Services</span></h1>
      </div>
      <div class="flex justify-between">
        <div class="flex flex-col items-center gap-8">
          <i class="fa-solid fa-star fa-7x text-yellow-300"></i>
          <p class="text-lg">TICKET</p>
          <p class="w-4/5 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="flex flex-col items-center gap-8">
          <i class="fa-solid fa-star fa-7x text-yellow-300"></i>
          <p class="text-lg">EVENT</p>
          <p class="w-4/5 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="flex flex-col items-center gap-8">
          <i class="fa-solid fa-star fa-7x text-yellow-300"></i>
          <p class="text-lg">ART</p>
          <p class="w-4/5 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="flex flex-col items-center gap-8">
          <i class="fa-solid fa-star fa-7x text-yellow-300"></i>
          <p class="text-lg">CRAFT</p>
          <p class="w-4/5 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
      </div>
      <div class="flex items-center justify-center gap-7">
        <a href="{{ route('register') }}"
          class="border-2 border-black px-6 py-2 text-lg font-semibold transition-all duration-200 hover:bg-black hover:text-white">
          Register as Ticket Buyer
        </a>
        <p class="text-lg uppercase">or</p>
        <a href="{{ route('eo.register') }}"
          class="border-2 border-black px-6 py-2 text-lg font-semibold transition-all duration-200 hover:bg-black hover:text-white">
          Register as Event Organizer
        </a>
      </div>
    </div>
  </div>

  <!-- Our Portofolio -->
  <div id="our-portofolio-container" class="w-full bg-primary-background">
    <div class="mx-auto flex max-w-screen-xl flex-col gap-20 py-20" id="about">
      <div class="flex w-full justify-center">
        <h1 class="text-4xl">Our <span class="text-gray-600">Portofolio</span></h1>
      </div>
      <div class="flex flex-col gap-8">
        <div class="flex justify-between">
          <div class="flex gap-12">
            <p class="border-b-2 border-black px-1 font-semibold">ALL</p>
            <p class="px-1">ART</p>
            <p class="px-1">EVENT</p>
            <p class="px-1">CLASS</p>
            <p class="px-1">OTHER</p>
          </div>
          <div>
            VIEW MORE
          </div>
        </div>
        <div class="grid grid-cols-2 gap-4 md:grid-cols-3">
          <div class="rounded-lg bg-black">
            <img class="h-auto max-w-full rounded-lg transition-all duration-300 hover:opacity-70"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
          </div>
          <div class="rounded-lg bg-black">
            <img class="h-auto max-w-full rounded-lg transition-all duration-300 hover:opacity-70"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
          </div>
          <div class="rounded-lg bg-black">
            <img class="h-auto max-w-full rounded-lg transition-all duration-300 hover:opacity-70"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
          </div>
          <div class="rounded-lg bg-black">
            <img class="h-auto max-w-full rounded-lg transition-all duration-300 hover:opacity-70"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
          </div>
          <div class="rounded-lg bg-black">
            <img class="h-auto max-w-full rounded-lg transition-all duration-300 hover:opacity-70"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
          </div>
          <div class="rounded-lg bg-black">
            <img class="h-auto max-w-full rounded-lg transition-all duration-300 hover:opacity-70"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
          </div>
          <div class="rounded-lg bg-black">
            <img class="h-auto max-w-full rounded-lg transition-all duration-300 hover:opacity-70"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt="">
          </div>
          <div class="rounded-lg bg-black">
            <img class="h-auto max-w-full rounded-lg transition-all duration-300 hover:opacity-70"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="">
          </div>
          <div class="rounded-lg bg-black">
            <img class="h-auto max-w-full rounded-lg transition-all duration-300 hover:opacity-70"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- On Going Events -->
  <div id="on-going-events-container" class="w-full">
    <div class="mx-auto flex max-w-screen-xl flex-col gap-20 py-20" id="about">
      <div class="flex w-full justify-center">
        <h1 class="text-4xl">On Going <span class="text-gray-600">Events</span></h1>
      </div>
      <div class="flex flex-col gap-8">
        <div class="flex justify-between">
          <select name="location" id="location" class="w-1/5 border-none outline-none">
            <option value="" selected disabled>Pilih Lokasi</option>
            <option value="">Jakarta</option>
            <option value="">Solo</option>
            <option value="">Yogya</option>
            <option value="">Bandung</option>
          </select>
        </div>
        <div class="grid grid-cols-2 gap-4 md:grid-cols-3">
          <div class="rounded-lg bg-black">
            <img class="h-auto max-w-full rounded-lg transition-all duration-300 hover:opacity-70"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
          </div>
          <div class="rounded-lg bg-black">
            <img class="h-auto max-w-full rounded-lg transition-all duration-300 hover:opacity-70"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
          </div>
          <div class="rounded-lg bg-black">
            <img class="h-auto max-w-full rounded-lg transition-all duration-300 hover:opacity-70"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
          </div>
          <div class="rounded-lg bg-black">
            <img class="h-auto max-w-full rounded-lg transition-all duration-300 hover:opacity-70"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
          </div>
          <div class="rounded-lg bg-black">
            <img class="h-auto max-w-full rounded-lg transition-all duration-300 hover:opacity-70"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
          </div>
          <div class="rounded-lg bg-black">
            <img class="h-auto max-w-full rounded-lg transition-all duration-300 hover:opacity-70"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Testimonials -->
  <div id="testimonials-container" class="w-full bg-primary-background">
    <div class="mx-auto flex max-w-screen-xl flex-col gap-20 py-20" id="testimonials">
      <div class="flex w-full justify-center">
        <h1 class="text-4xl">What <span class="text-gray-600">People Say</span></h1>
      </div>
      <!-- Carousel wrapper -->

      <div id="indicators-carousel" class="relative w-full" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative h-[480px] overflow-hidden rounded-lg">
          <!-- Item 1 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <div class="flex justify-evenly">
              <div
                class="w-[570px] rounded-lg border border-gray-200 bg-white px-20 py-10 shadow dark:border-gray-700 dark:bg-gray-800">
                <div class="flex items-center gap-9">
                  <img src="https://flowbite.com/docs/images/examples/image-4@2x.jpg" alt=""
                    class="z-10 h-44 w-44 rounded-full">
                  <div class="flex flex-col gap-10">
                    <div class="flex flex-col">
                      <h1 class="text-2xl font-bold">Hanun Aulia</h1>
                      <h2 class="text-lg font-semibold text-gray-400">Pelajar</h2>
                    </div>
                    <div class="flex gap-4">
                      <i class="fa-brands fa-facebook fa-xl"></i>
                      <i class="fa-brands fa-instagram fa-xl"></i>
                      <i class="fa-brands fa-linkedin fa-xl"></i>
                    </div>
                  </div>
                </div>
                <div class="relative -left-20 -top-16 z-0 h-0 w-[570px] border border-black">
                </div>
                <div class="pt-6 text-lg">
                  Urna cursus aliquet sagittis erat bibendum sagittis. Auctor risus posuere duis vivamus. Mattis tellus,
                  quam
                  amet sapien odio in viverra. Pharetra, pharetra dictum nibh adipiscing. Varius aliquet ac, amet
                  sodales
                  curabitur enim.
                </div>
              </div>
              <div
                class="w-[570px] rounded-lg border border-gray-200 bg-white px-20 py-10 shadow dark:border-gray-700 dark:bg-gray-800">
                <div class="flex items-center gap-9">
                  <img src="https://flowbite.com/docs/images/examples/image-4@2x.jpg" alt=""
                    class="z-10 h-44 w-44 rounded-full">
                  <div class="flex flex-col gap-10">
                    <div class="flex flex-col">
                      <h1 class="text-2xl font-bold">Hanun Aulia</h1>
                      <h2 class="text-lg font-semibold text-gray-400">Pelajar</h2>
                    </div>
                    <div class="flex gap-4">
                      <i class="fa-brands fa-facebook fa-xl"></i>
                      <i class="fa-brands fa-instagram fa-xl"></i>
                      <i class="fa-brands fa-linkedin fa-xl"></i>
                    </div>
                  </div>
                </div>
                <div class="relative -left-20 -top-16 z-0 h-0 w-[570px] border border-black">
                </div>
                <div class="pt-6 text-lg">
                  Urna cursus aliquet sagittis erat bibendum sagittis. Auctor risus posuere duis vivamus. Mattis tellus,
                  quam
                  amet sapien odio in viverra. Pharetra, pharetra dictum nibh adipiscing. Varius aliquet ac, amet
                  sodales
                  curabitur enim.
                </div>
              </div>
            </div>
          </div>
          <!-- Item 2 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <div class="flex justify-evenly">
              <div
                class="w-[570px] rounded-lg border border-gray-200 bg-white px-20 py-10 shadow dark:border-gray-700 dark:bg-gray-800">
                <div class="flex items-center gap-9">
                  <img src="https://flowbite.com/docs/images/examples/image-4@2x.jpg" alt=""
                    class="z-10 h-44 w-44 rounded-full">
                  <div class="flex flex-col gap-10">
                    <div class="flex flex-col">
                      <h1 class="text-2xl font-bold">Hanun Aulia</h1>
                      <h2 class="text-lg font-semibold text-gray-400">Pelajar</h2>
                    </div>
                    <div class="flex gap-4">
                      <i class="fa-brands fa-facebook fa-xl"></i>
                      <i class="fa-brands fa-instagram fa-xl"></i>
                      <i class="fa-brands fa-linkedin fa-xl"></i>
                    </div>
                  </div>
                </div>
                <div class="relative -left-20 -top-16 z-0 h-0 w-[570px] border border-black">
                </div>
                <div class="pt-6 text-lg">
                  Urna cursus aliquet sagittis erat bibendum sagittis. Auctor risus posuere duis vivamus. Mattis tellus,
                  quam
                  amet sapien odio in viverra. Pharetra, pharetra dictum nibh adipiscing. Varius aliquet ac, amet
                  sodales
                  curabitur enim.
                </div>
              </div>
              <div
                class="w-[570px] rounded-lg border border-gray-200 bg-white px-20 py-10 shadow dark:border-gray-700 dark:bg-gray-800">
                <div class="flex items-center gap-9">
                  <img src="https://flowbite.com/docs/images/examples/image-4@2x.jpg" alt=""
                    class="z-10 h-44 w-44 rounded-full">
                  <div class="flex flex-col gap-10">
                    <div class="flex flex-col">
                      <h1 class="text-2xl font-bold">Hanun Aulia</h1>
                      <h2 class="text-lg font-semibold text-gray-400">Pelajar</h2>
                    </div>
                    <div class="flex gap-4">
                      <i class="fa-brands fa-facebook fa-xl"></i>
                      <i class="fa-brands fa-instagram fa-xl"></i>
                      <i class="fa-brands fa-linkedin fa-xl"></i>
                    </div>
                  </div>
                </div>
                <div class="relative -left-20 -top-16 z-0 h-0 w-[570px] border border-black">
                </div>
                <div class="pt-6 text-lg">
                  Urna cursus aliquet sagittis erat bibendum sagittis. Auctor risus posuere duis vivamus. Mattis tellus,
                  quam
                  amet sapien odio in viverra. Pharetra, pharetra dictum nibh adipiscing. Varius aliquet ac, amet
                  sodales
                  curabitur enim.
                </div>
              </div>
            </div>
          </div>
          <!-- Item 3 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <div class="flex justify-evenly">
              <div
                class="w-[570px] rounded-lg border border-gray-200 bg-white px-20 py-10 shadow dark:border-gray-700 dark:bg-gray-800">
                <div class="flex items-center gap-9">
                  <img src="https://flowbite.com/docs/images/examples/image-4@2x.jpg" alt=""
                    class="z-10 h-44 w-44 rounded-full">
                  <div class="flex flex-col gap-10">
                    <div class="flex flex-col">
                      <h1 class="text-2xl font-bold">Hanun Aulia</h1>
                      <h2 class="text-lg font-semibold text-gray-400">Pelajar</h2>
                    </div>
                    <div class="flex gap-4">
                      <i class="fa-brands fa-facebook fa-xl"></i>
                      <i class="fa-brands fa-instagram fa-xl"></i>
                      <i class="fa-brands fa-linkedin fa-xl"></i>
                    </div>
                  </div>
                </div>
                <div class="relative -left-20 -top-16 z-0 h-0 w-[570px] border border-black">
                </div>
                <div class="pt-6 text-lg">
                  Urna cursus aliquet sagittis erat bibendum sagittis. Auctor risus posuere duis vivamus. Mattis tellus,
                  quam
                  amet sapien odio in viverra. Pharetra, pharetra dictum nibh adipiscing. Varius aliquet ac, amet
                  sodales
                  curabitur enim.
                </div>
              </div>
              <div
                class="w-[570px] rounded-lg border border-gray-200 bg-white px-20 py-10 shadow dark:border-gray-700 dark:bg-gray-800">
                <div class="flex items-center gap-9">
                  <img src="https://flowbite.com/docs/images/examples/image-4@2x.jpg" alt=""
                    class="z-10 h-44 w-44 rounded-full">
                  <div class="flex flex-col gap-10">
                    <div class="flex flex-col">
                      <h1 class="text-2xl font-bold">Hanun Aulia</h1>
                      <h2 class="text-lg font-semibold text-gray-400">Pelajar</h2>
                    </div>
                    <div class="flex gap-4">
                      <i class="fa-brands fa-facebook fa-xl"></i>
                      <i class="fa-brands fa-instagram fa-xl"></i>
                      <i class="fa-brands fa-linkedin fa-xl"></i>
                    </div>
                  </div>
                </div>
                <div class="relative -left-20 -top-16 z-0 h-0 w-[570px] border border-black">
                </div>
                <div class="pt-6 text-lg">
                  Urna cursus aliquet sagittis erat bibendum sagittis. Auctor risus posuere duis vivamus. Mattis tellus,
                  quam
                  amet sapien odio in viverra. Pharetra, pharetra dictum nibh adipiscing. Varius aliquet ac, amet
                  sodales
                  curabitur enim.
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute bottom-5 left-1/2 z-30 flex -translate-x-1/2 space-x-3">
          <button type="button" class="h-3 w-3 rounded-full bg-slate-300" aria-current="true" aria-label="Slide 1"
            data-carousel-slide-to="0"></button>
          <button type="button" class="h-3 w-3 rounded-full bg-slate-300" aria-current="false" aria-label="Slide 2"
            data-carousel-slide-to="1"></button>
          <button type="button" class="h-3 w-3 rounded-full bg-slate-300" aria-current="false" aria-label="Slide 3"
            data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
          class="group absolute left-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
          data-carousel-prev>
          <span
            class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-gray-200 duration-200 group-hover:bg-gray-400 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70 sm:h-10 sm:w-10">
            <svg aria-hidden="true" class="h-5 w-5 text-white dark:text-gray-800 sm:h-6 sm:w-6" fill="none"
              stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            <span class="sr-only">Previous</span>
          </span>
        </button>
        <button type="button"
          class="group absolute right-0 top-0 z-30 flex h-full cursor-pointer items-center justify-center px-4 focus:outline-none"
          data-carousel-next>
          <span
            class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-gray-200 duration-200 group-hover:bg-gray-400 group-focus:outline-none group-focus:ring-4 group-focus:ring-white dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70 sm:h-10 sm:w-10">
            <svg aria-hidden="true" class="h-5 w-5 text-white dark:text-gray-800 sm:h-6 sm:w-6" fill="none"
              stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
            </svg>
            <span class="sr-only">Next</span>
          </span>
        </button>
      </div>
    </div>

  </div>

  <!-- Contact -->
  <div id="contact-container" class="w-full">
    <div class="mx-auto flex max-w-screen-xl flex-col gap-20 py-20" id="contact">
      <div class="flex w-full items-center justify-between">
        <h1 class="w-1/4 text-4xl leading-relaxed">
          Do you have any questions?
        </h1>
        <button
          class="border-2 border-black px-8 py-3 uppercase transition-all duration-200 hover:bg-black hover:text-white">Contact
          Us</button>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <div id="footer" class="w-full bg-primary-background">
    <div class="mx-auto flex max-w-screen-xl justify-between py-20 text-gray-700">
      <div class="flex w-80 flex-col justify-start gap-6">
        <div class="flex items-center gap-2">
          <img src="{{ asset('storage/images/Logo.png') }}" alt="" class="h-9">
          <p class="text-2xl font-bold">Craftive.id</p>
        </div>
        <div class="text-justify">
          We are one of the leading interior design and remodeling studios available for all of your residential and
          commercial interior design needs.
        </div>
      </div>
      <div class="flex flex-col justify-start gap-6">
        <h1 class="items-center font-bold uppercase">navigation</h1>
        <div class="flex flex-col gap-5">
          <p>About</p>
          <p>Services</p>
          <p>Portofolio</p>
          <p>On Going Events</p>
          <p>Testimonials</p>
        </div>
        <div class="mt-2 flex gap-4">
          <i class="fa-brands fa-linkedin fa-xl"></i>
          <i class="fa-brands fa-square-whatsapp fa-xl"></i>
          <i class="fa-brands fa-square-instagram fa-xl"></i>
        </div>
      </div>
      <div class="flex flex-col justify-start gap-6">
        <h1 class="font-bold uppercase">contacts</h1>
        <div class="flex flex-col gap-2">
          <h2>ADDRESS</h2>
          <p>Jalan Craftive No 666, Surakarta</p>
        </div>
        <div class="flex flex-col gap-2">
          <h2>EMAIL</h2>
          <p>infocraftive@gmail.com</p>
        </div>
        <div class="flex flex-col gap-2">
          <h2>PHONE</h2>
          <p>+62213131324</p>
        </div>
      </div>
    </div>

  </div>

</x-guest-layout>
