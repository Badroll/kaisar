{{-- footer start --}}
<div class="bg-klinik-primary text-white px-6 pt-16 md:pt-16" id="kaisar-hubungi">
  <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1">

  <div style="background: transparent;" id="footer-sosmed-call">
      <div>
        <div>
          <img src="{{asset('images/_ks/logonew_putih.png')}}" class="mx-auto" width="200"/>
        </div>
      </div>
    </div>

    <div class="md:pt-0 pt-10" style="background: transparent">
      <div class="flex">
        <div class="mb-7 font-bold text-base md:text-xl border-b-2 border-white md:border-none">HUBUNGI KAMI</div>
      </div>
      <div class="flex flex-col space-y-4 pr-2 font-bold text-sm md:text-base">
        <a target="_blank" href="http://bit.ly/tanyakaisarbarbershop">
          <div class="flex">
            <img src="{{asset('images/_ks/icon-footer/icon-wa.svg')}}" height="30" width="30" alt=""/>
            <p>&nbsp;WhatsApp</p>
          </div>
        </a>
        <a target="_blank" href="mailto:kaisarbarbershop01@gmail.com">
        <div class="flex">
            <img src="{{asset('images/_ks/icon-footer/icon-mail.png')}}" height="30" width="30" alt=""/>
            <p>&nbsp;Email</p>
          </div>
        </a>
        <a target="_blank" href="https://www.instagram.com/kaisarbarberacademy/">
        <div class="flex">
            <img src="{{asset('images/_ks/icon-footer/icon-ig.svg')}}" height="30" width="30" alt=""/>
            <p>&nbsp;Instagram</p>
          </div>
        </a>
        <a target="_blank" href="https://www.tiktok.com/@kaisarbarberacademy">
        <div class="flex">
            <img src="{{asset('images/_ks/icon-footer/icon-tt.svg')}}" height="30" width="30" alt=""/>
            <p>&nbsp;Tiktok</p>
          </div>
        </a>
        <a target="_blank" href="https://www.youtube.com/@KaisarBarbershop">
        <div class="flex">
            <img src="{{asset('images/_ks/icon-footer/icon-yt.svg')}}" height="30" width="30" alt=""/>
            <p>&nbsp;Youtube</p>
          </div>
        </a>
        <a class="cursor-pointer uppercase" @click="openModal = true" id="hubungi-modal" style="display:none;">HUBUNGI KAMI</a>
      </div>
    </div>

    <div class="hidden lg:block lg:pt-0 pt-12" style="background: transparent;">
      <div class="flex">
        <div class="mb-7 font-bold text-base md:text-xl border-b-2 border-white md:border-none">ALAMAT</div>
      </div>
      <p class="mb-3">Jl. Menoreh Utara IX No.37, Sampangan, Kec. Gajahmungkur, Kota Semarang, Jawa Tengah 50236</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3398.199155579619!2d110.38814782783258!3d-7.007188408805736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708bd50764d2ef%3A0x1fae8d2dc3f6df95!2sKursus%20Potong%20Rambut%20Semarang%20%7C%7C%20Kaisar%20Barbershop%20Academy!5e0!3m2!1sid!2sid!4v1697479857549!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

    <div class="sm:block lg:hidden pt-12">
      <div class="flex">
        <div class="mb-7 font-bold text-base md:text-xl border-b-2 border-white md:border-none">ADDRESS</div>
      </div>
      <p class="mb-2">Jl. Menoreh Utara IX No.37, Sampangan, Kec. Gajahmungkur, Kota Semarang, Jawa Tengah 50236</p>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3398.199155579619!2d110.38814782783258!3d-7.007188408805736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708bd50764d2ef%3A0x1fae8d2dc3f6df95!2sKursus%20Potong%20Rambut%20Semarang%20%7C%7C%20Kaisar%20Barbershop%20Academy!5e0!3m2!1sid!2sid!4v1697479857549!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

  </div>

  <div
    class="md:pb-10 pb-20 text-white border-t-2 border-white mt-10 pt-5 text-sm"
  >
    <div
      class="flex md:justify-between items-center flex-col-reverse md:flex-row"
    >
      <div class="text-center md:pt-0 pt-4"></div>
    </div>
  </div>

  <div x-cloak x-show="openModal" class="fixed z-50 inset-0 overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center md:block md:p-0">
      <div 
        x-show="openModal" 
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0" 
        class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"
      ></div>

      <!-- This element is to trick the browser into centering the modal contents. -->
      <span class="hidden md:inline-block md:align-middle md:h-screen" aria-hidden="true">&#8203;</span>
      <div 
        x-show="openModal" 
        x-transition:enter="ease-out duration-300"
        x-transition:enter-start="opacity-0 translate-y-4 md:translate-y-0 md:scale-95"
        x-transition:enter-end="opacity-100 translate-y-0 md:scale-100"
        x-transition:leave="ease-in duration-200"
        x-transition:leave-start="opacity-100 translate-y-0 md:scale-100"
        x-transition:leave-end="opacity-0 translate-y-4 md:translate-y-0 md:scale-95" 
        class="inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all md:my-8 md:align-middle max-w-full w-full md:max-w-2xl md:w-full md:p-6 relative z-50"
      >
        <div class="flex justify-end absolute top-2 right-2 text-black">
          <div class="p-1 rounded-lg hover:bg-gray-100 text-gray-800 cursor-pointer" @click="openModal = false">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
          </div>
        </div>
        <form action="#" method="post" data-parsley-validate="true">
          {{ csrf_field() }}
          <div>
            <div class="">
              <h3 class="leading-6 mt-6 font-extrabold text-base md:text-4xl text-center text-black" id="modal-title">
                Gabung bersama kami
              </h3>
              <div class="text-center mt-4 text-black">
                Segera bergabung bersama kaisar Barber Academy untuk mendapatkan pelayanan berkualitas tinggi.
              </div>
              <div class="mt-12 space-y-6">
                <div class="block md:flex gap-6 space-y-6 md:space-y-0">
                  <div class="w-full md:w-1/2">
                    <input required type="text" name="name" id="name_user" class="shadow-sm focus:outline-none block w-full md:text-sm border border-gray-200 bg-gray-50 rounded-md px-3 py-2.5 text-black" placeholder="Nama">
                  </div>
                  <div class="w-full md:w-1/2">
                    <input required type="email" name="email" id="email_user" class="shadow-sm focus:outline-none block w-full md:text-sm border border-gray-200 bg-gray-50 rounded-md px-3 py-2.5 text-black" placeholder="No. HP">
                  </div>
                </div>
                <div>
                  <input required type="text" name="subject" id="subject_message" class="shadow-sm focus:outline-none block w-full md:text-sm border border-gray-200 bg-gray-50 rounded-md px-3 py-2.5 text-black" placeholder="Alamat">
                </div>
                <div>
                  <textarea required id="message_body" name="message" rows="4" class="shadow-sm focus:outline-none block w-full sm:text-sm border border-gray-200 bg-gray-50 rounded-md px-3 py-2.5 text-black" placeholder="Keterangan"></textarea>
                </div>
              </div>
            </div>
          </div>
          <div class="mt-5">
            <button type="submit" class="w-full inline-flex justify-center rounded-full border border-transparent shadow-sm px-4 py-2 bg-klinik-primary text-base font-medium text-white hover:bg-klinik-primary-dark focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-klinik-primary md:col-start-2 md:text-sm">
              GABUNG
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>

</div>
<script>

      

</script>
{{-- footer end --}}