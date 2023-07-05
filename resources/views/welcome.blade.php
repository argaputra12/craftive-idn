<x-guest-layout>
  <div class="flex justify-between items-center h-[853px] w-full">
    <div class="flex justify-center ml-20">
      <div class="flex flex-col justify-center gap-8 px-8 w-1/2">
        <h1 class="text-6xl font-poppins leading-normal">Create Creative Crafts</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis aperiam sapiente rem inventore autem dolore
          minus.</p>
        <button
          class="border-2 border-black font-semibold text-lg px-6 py-2 w-1/2 hover:bg-black hover:text-white transition-all duration-200">
          Get Started
        </button>
      </div>
    </div>
    <div class="w-1/2">
      <div id="default-carousel" class="relative w-full" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative overflow-hidden rounded-l-md h-[853px]">
          <!-- Item 1 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('storage/images/art-event.png') }}"
              class="absolute block h-full w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
          <!-- Item 2 -->
          <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('storage/images/art-event.png') }}"
              class="absolute block h-full w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
          </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
          <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
            data-carousel-slide-to="0"></button>
          <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
            data-carousel-slide-to="1"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
          class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
          data-carousel-prev>
          <span
            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
              stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            <span class="sr-only">Previous</span>
          </span>
        </button>
        <button type="button"
          class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
          data-carousel-next>
          <span
            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
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
  <div id="about-container" class="bg-primary-background w-full">
    <div class="flex justify-between max-w-screen-xl mx-auto py-32" id="about">
      <div class="flex justify-start w-1/2">
        <h1 class="text-4xl">About <span class="text-gray-600">Craftive</span></h1>
      </div>
      <div class="flex flex-col gap-5 w-1/2">
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
    <div class="flex flex-col max-w-screen-xl mx-auto py-20 gap-36">
      <div class="flex justify-center">
        <h1 class="text-4xl">Our <span class="text-gray-600">Services</span></h1>
      </div>
      <div class="flex justify-between">
        <div class="flex flex-col gap-8 items-center">
          <i class="fa-solid fa-star fa-7x text-yellow-300"></i>
          <p class="text-lg">TICKET</p>
          <p class="w-4/5 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="flex flex-col gap-8 items-center">
          <i class="fa-solid fa-star fa-7x text-yellow-300"></i>
          <p class="text-lg">EVENT</p>
          <p class="w-4/5 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="flex flex-col gap-8 items-center">
          <i class="fa-solid fa-star fa-7x text-yellow-300"></i>
          <p class="text-lg">ART</p>
          <p class="w-4/5 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
        <div class="flex flex-col gap-8 items-center">
          <i class="fa-solid fa-star fa-7x text-yellow-300"></i>
          <p class="text-lg">CRAFT</p>
          <p class="w-4/5 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
        </div>
      </div>
      <div class="flex justify-center items-center gap-7">
        <a href="{{ route('register') }}"
          class="border-2 border-black font-semibold text-lg px-6 py-2 hover:bg-black hover:text-white transition-all duration-200">
          Register as Ticket Buyer
        </a>
        <p class="uppercase text-lg">or</p>
        <a href="{{ route('eo.register') }}"
          class="border-2 border-black font-semibold text-lg px-6 py-2 hover:bg-black hover:text-white transition-all duration-200">
          Register as Event Organizer
        </a>
      </div>
    </div>
  </div>

  <!-- Our Portofolio -->
  <div id="our-portofolio-container" class="w-full bg-primary-background">
    <div class="flex flex-col max-w-screen-xl mx-auto py-20 gap-20" id="about">
      <div class="flex justify-center w-full">
        <h1 class="text-4xl">Our <span class="text-gray-600">Portofolio</span></h1>
      </div>
      <div class="flex flex-col gap-8">
        <div class="flex justify-between">
          <div class="flex gap-12">
            <p class="font-semibold border-b-2 border-black px-1">ALL</p>
            <p class="px-1">ART</p>
            <p class="px-1">EVENT</p>
            <p class="px-1">CLASS</p>
            <p class="px-1">OTHER</p>
          </div>
          <div>
            VIEW MORE
          </div>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
          <div class="bg-black rounded-lg">
            <img class="h-auto max-w-full rounded-lg hover:opacity-70 transition-all duration-300"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
          </div>
          <div class="bg-black rounded-lg">
            <img class="h-auto max-w-full rounded-lg hover:opacity-70 transition-all duration-300"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
          </div>
          <div class="bg-black rounded-lg">
            <img class="h-auto max-w-full rounded-lg hover:opacity-70 transition-all duration-300"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
          </div>
          <div class="bg-black rounded-lg">
            <img class="h-auto max-w-full rounded-lg hover:opacity-70 transition-all duration-300"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
          </div>
          <div class="bg-black rounded-lg">
            <img class="h-auto max-w-full rounded-lg hover:opacity-70 transition-all duration-300"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
          </div>
          <div class="bg-black rounded-lg">
            <img class="h-auto max-w-full rounded-lg hover:opacity-70 transition-all duration-300"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
          </div>
          <div class="bg-black rounded-lg">
            <img class="h-auto max-w-full rounded-lg hover:opacity-70 transition-all duration-300"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-6.jpg" alt="">
          </div>
          <div class="bg-black rounded-lg">
            <img class="h-auto max-w-full rounded-lg hover:opacity-70 transition-all duration-300"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-7.jpg" alt="">
          </div>
          <div class="bg-black rounded-lg">
            <img class="h-auto max-w-full rounded-lg hover:opacity-70 transition-all duration-300"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-8.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- On Going Events -->
  <div id="on-going-events-container" class="w-full">
    <div class="flex flex-col max-w-screen-xl mx-auto py-20 gap-20" id="about">
      <div class="flex justify-center w-full">
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
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
          <div class="bg-black rounded-lg">
            <img class="h-auto max-w-full rounded-lg hover:opacity-70 transition-all duration-300"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg" alt="">
          </div>
          <div class="bg-black rounded-lg">
            <img class="h-auto max-w-full rounded-lg hover:opacity-70 transition-all duration-300"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="">
          </div>
          <div class="bg-black rounded-lg">
            <img class="h-auto max-w-full rounded-lg hover:opacity-70 transition-all duration-300"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg" alt="">
          </div>
          <div class="bg-black rounded-lg">
            <img class="h-auto max-w-full rounded-lg hover:opacity-70 transition-all duration-300"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg" alt="">
          </div>
          <div class="bg-black rounded-lg">
            <img class="h-auto max-w-full rounded-lg hover:opacity-70 transition-all duration-300"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg" alt="">
          </div>
          <div class="bg-black rounded-lg">
            <img class="h-auto max-w-full rounded-lg hover:opacity-70 transition-all duration-300"
              src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Testimonials -->
  <div id="testimonials-container" class="w-full bg-primary-background">
    <div class="flex flex-col max-w-screen-xl mx-auto py-20 gap-20" id="testimonials">
      <div class="flex justify-center w-full">
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
                class="w-[570px] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 px-20 py-10">
                <div class="flex items-center gap-9">
                  <img src="https://flowbite.com/docs/images/examples/image-4@2x.jpg" alt=""
                    class="rounded-full w-44 h-44 z-10">
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
                <div class="border border-black h-0 w-[570px] relative -left-20 -top-16 z-0">
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
                class="w-[570px] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 px-20 py-10">
                <div class="flex items-center gap-9">
                  <img src="https://flowbite.com/docs/images/examples/image-4@2x.jpg" alt=""
                    class="rounded-full w-44 h-44 z-10">
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
                <div class="border border-black h-0 w-[570px] relative -left-20 -top-16 z-0">
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
                class="w-[570px] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 px-20 py-10">
                <div class="flex items-center gap-9">
                  <img src="https://flowbite.com/docs/images/examples/image-4@2x.jpg" alt=""
                    class="rounded-full w-44 h-44 z-10">
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
                <div class="border border-black h-0 w-[570px] relative -left-20 -top-16 z-0">
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
                class="w-[570px] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 px-20 py-10">
                <div class="flex items-center gap-9">
                  <img src="https://flowbite.com/docs/images/examples/image-4@2x.jpg" alt=""
                    class="rounded-full w-44 h-44 z-10">
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
                <div class="border border-black h-0 w-[570px] relative -left-20 -top-16 z-0">
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
                class="w-[570px] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 px-20 py-10">
                <div class="flex items-center gap-9">
                  <img src="https://flowbite.com/docs/images/examples/image-4@2x.jpg" alt=""
                    class="rounded-full w-44 h-44 z-10">
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
                <div class="border border-black h-0 w-[570px] relative -left-20 -top-16 z-0">
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
                class="w-[570px] bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 px-20 py-10">
                <div class="flex items-center gap-9">
                  <img src="https://flowbite.com/docs/images/examples/image-4@2x.jpg" alt=""
                    class="rounded-full w-44 h-44 z-10">
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
                <div class="border border-black h-0 w-[570px] relative -left-20 -top-16 z-0">
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
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
          <button type="button" class="w-3 h-3 rounded-full bg-slate-300" aria-current="true" aria-label="Slide 1"
            data-carousel-slide-to="0"></button>
          <button type="button" class="w-3 h-3 rounded-full bg-slate-300" aria-current="false" aria-label="Slide 2"
            data-carousel-slide-to="1"></button>
          <button type="button" class="w-3 h-3 rounded-full bg-slate-300" aria-current="false" aria-label="Slide 3"
            data-carousel-slide-to="2"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
          class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
          data-carousel-prev>
          <span
            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-gray-200 dark:bg-gray-800/30 group-hover:bg-gray-400 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none duration-200">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
              stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
            </svg>
            <span class="sr-only">Previous</span>
          </span>
        </button>
        <button type="button"
          class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
          data-carousel-next>
          <span
            class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-gray-200 dark:bg-gray-800/30 group-hover:bg-gray-400 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none duration-200">
            <svg aria-hidden="true" class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
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
    <div class="flex flex-col max-w-screen-xl mx-auto py-20 gap-20" id="contact">
      <div class="flex justify-between w-full items-center">
        <h1 class="text-4xl w-1/4 leading-relaxed">
          Do you have any questions?
        </h1>
        <button
          class="uppercase px-8 py-3 border-2 border-black hover:bg-black hover:text-white transition-all duration-200">Contact
          Us</button>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <div id="footer" class="w-full bg-primary-background">
    <div class="flex justify-between max-w-screen-xl mx-auto py-20 text-gray-700">
      <div class="flex flex-col gap-6 justify-start w-80">
        <div class="flex items-center gap-2">
          <img src="{{ asset('storage/images/Logo.png') }}" alt="" class="h-9">
          <p class="text-2xl font-bold">Craftive.id</p>
        </div>
        <div class="text-justify">
          We are one of the leading interior design and remodeling studios available for all of your residential and
          commercial interior design needs.
        </div>
      </div>
      <div class="flex flex-col gap-6 justify-start">
        <h1 class="uppercase font-bold items-center">navigation</h1>
        <div class="flex flex-col gap-5">
          <p>About</p>
          <p>Services</p>
          <p>Portofolio</p>
          <p>On Going Events</p>
          <p>Testimonials</p>
        </div>
        <div class="flex gap-4 mt-2">
          <i class="fa-brands fa-linkedin fa-xl"></i>
          <i class="fa-brands fa-square-whatsapp fa-xl"></i>
          <i class="fa-brands fa-square-instagram fa-xl"></i>
        </div>
      </div>
      <div class="flex flex-col justify-start gap-6">
        <h1 class="uppercase font-bold">contacts</h1>
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
