<style>
  /* since nested groupes are not supported we have to use 
     regular css for the nested dropdowns 
  */
  li>ul                 { transform: translatex(100%) scale(0) }
  li:hover>ul           { transform: translatex(101%) scale(1) }

  /* Below styles fake what can be achieved with the tailwind config
     you need to add the group-hover variant to scale and define your custom
     min width style.
  	 See https://codesandbox.io/s/tailwindcss-multilevel-dropdown-y91j7?file=/index.html
  	 for implementation with config file
  */
  .group:hover .group-hover\:scale-100 { transform: scale(1) }
  .group:hover .group-hover\:-rotate-180 { transform: rotate(180deg) }
  .scale-0 { transform: scale(0) }
  .min-w-32 { min-width: 8rem }
</style>
@php
    use Illuminate\Support\Str;
@endphp
<div class="fixed top-0 w-full z-40 shadow-sm bg-white" x-data="{ show: false, dropdown: false, logged: localStorage.getItem('klinik-auth') === 'true', search: '', dropdownProduct: false, dropdownService: false, dropdownSubService: false }" x-init="show = false" x-cloak>
	{{-- logged adalah kondisi untuk ketika user sudah login --}}
	<div class="flex justify-between items-center px-5 md:px-8 lg:px-16 py-3 md:py-5 text-lg bg-white max-w-8xl mx-auto">
		{{-- logo --}}
		<div>
			<a href="/" class="block">
				<div class="hidden md:block">
					<img src="{{asset('images/_ks/logonew_merah.png')}}" alt="logo" width="108" height="38" class="block md:hidden lg:block" style="min-width: 108px;" />
					<img src="{{asset('images/_ks/logonew_merah.png')}}" alt="logo" class="hidden md:block lg:hidden w-10 h-10" />
				</div>
				<div class="md:hidden">
					<img src="{{asset('images/_ks/logonew_merah.png')}}" alt="logo" width="108" height="38" class="block md:hidden lg:block" style="min-width: 108px;" x-show="show === false" />
					<img src="{{asset('images/_ks/logonew_merah.png')}}" alt="logo" class="block w-10 h-10" x-show="show === true" />
				</div>
			</a>
		</div>
		{{-- menu navbar desktop --}}
		<div
			class="uppercase font-semibold hidden md:flex text-base space-x-4 md:space-x-3 xl:space-x-8"
			x-show="show === false">
			<div class="">
				<a href="#kaisar-whyus" class="relative flex flex-col items-center py-2 group text-sm px-1">
					<div class="{{ Request::path() == '/' ? "cursor-pointer text-klinik-primary" : "cursor-pointer text-gray-400" }}">mengapa memilih kami</div>
					<div
					class="{{ Request::path() == '/' ? "w-8 h-1.5 group-hover:bg-klinik-primary rounded-full absolute bottom-0" : "w-8 h-1.5 bg-white group-hover:bg-gray-400 rounded-full absolute bottom-0" }}"
					></div>
				</a>
			</div>
			<div class="">
				<a href="#kaisar-aboutus" class="relative flex flex-col items-center py-2 group text-sm px-1">
					<div class="{{ Request::path() == '/' ? "cursor-pointer text-klinik-primary" : "cursor-pointer text-gray-400" }}">tentang kami</div>
					<div
					class="{{ Request::path() == '/' ? "w-8 h-1.5 group-hover:bg-klinik-primary rounded-full absolute bottom-0" : "w-8 h-1.5 bg-white group-hover:bg-gray-400 rounded-full absolute bottom-0" }}"
					></div>
				</a>
			</div>
			<div class="">
				<a href="#kaisar-program" class="relative flex flex-col items-center py-2 group text-sm px-1">
					<div class="{{ Request::path() == '/' ? "cursor-pointer text-klinik-primary" : "cursor-pointer text-gray-400" }}">kegiatan</div>
					<div
					class="{{ Request::path() == '/' ? "w-8 h-1.5 group-hover:bg-klinik-primary rounded-full absolute bottom-0" : "w-8 h-1.5 bg-white group-hover:bg-gray-400 rounded-full absolute bottom-0" }}"
					></div>
				</a>
			</div>
			<div class="">
				<a href="#kaisar-lulusan" class="relative flex flex-col items-center py-2 group text-sm px-1">
					<div class="{{ Request::path() == '/' ? "cursor-pointer text-klinik-primary" : "cursor-pointer text-gray-400" }}">lulusan</div>
					<div
					class="{{ Request::path() == '/' ? "w-8 h-1.5 group-hover:bg-klinik-primary rounded-full absolute bottom-0" : "w-8 h-1.5 bg-white group-hover:bg-gray-400 rounded-full absolute bottom-0" }}"
					></div>
				</a>
			</div>
			<div class="">
				<a href="#kaisar-testimoni" class="relative flex flex-col items-center py-2 group text-sm px-1">
					<div class="{{ Request::path() == '/' ? "cursor-pointer text-klinik-primary" : "cursor-pointer text-gray-400" }}">testimoni</div>
					<div
					class="{{ Request::path() == '/' ? "w-8 h-1.5 group-hover:bg-klinik-primary rounded-full absolute bottom-0" : "w-8 h-1.5 bg-white group-hover:bg-gray-400 rounded-full absolute bottom-0" }}"
					></div>
				</a>
			</div>
			<div class="">
				<a href="#kaisar-harga" class="relative flex flex-col items-center py-2 group text-sm px-1">
					<div class="{{ Request::path() == '/' ? "cursor-pointer text-klinik-primary" : "cursor-pointer text-gray-400" }}">kelas</div>
					<div
					class="{{ Request::path() == '/' ? "w-8 h-1.5 group-hover:bg-klinik-primary rounded-full absolute bottom-0" : "w-8 h-1.5 bg-white group-hover:bg-gray-400 rounded-full absolute bottom-0" }}"
					></div>
				</a>
			</div>
			<div class="">
				<a href="#kaisar-faq" class="relative flex flex-col items-center py-2 group text-sm px-1">
					<div class="{{ Request::path() == '/' ? "cursor-pointer text-klinik-primary" : "cursor-pointer text-gray-400" }}">faq</div>
					<div
					class="{{ Request::path() == '/' ? "w-8 h-1.5 group-hover:bg-klinik-primary rounded-full absolute bottom-0" : "w-8 h-1.5 bg-white group-hover:bg-gray-400 rounded-full absolute bottom-0" }}"
					></div>
				</a>
			</div>
			<div class="">
				<a href="#kaisar-hubungi" class="relative flex flex-col items-center py-2 group text-sm px-1">
					<div class="{{ Request::path() == '/' ? "cursor-pointer text-klinik-primary" : "cursor-pointer text-gray-400" }}">hubungi kami</div>
					<div
					class="{{ Request::path() == '/' ? "w-8 h-1.5 group-hover:bg-klinik-primary rounded-full absolute bottom-0" : "w-8 h-1.5 bg-white group-hover:bg-gray-400 rounded-full absolute bottom-0" }}"
					></div>
				</a>
			</div>
			<div class="">
				<a href="https://member.kaisarbarberacademy.com" target="blank" class="relative flex flex-col items-center py-2 group text-sm px-1">
					<div class="{{ Request::path() == '/' ? "cursor-pointer text-klinik-primary" : "cursor-pointer text-gray-400" }}">Member</div>
					<div
					class="{{ Request::path() == '/' ? "w-8 h-1.5 group-hover:bg-klinik-primary rounded-full absolute bottom-0" : "w-8 h-1.5 bg-white group-hover:bg-gray-400 rounded-full absolute bottom-0" }}"
					></div>
				</a>
			</div>
		</div>

		{{-- menu navbar mobiile --}}
		<div
			class="uppercase font-semibold flex text-base md:hidden space-x-4" style="margin-left: auto;">
			<div class="">
				<a href="https://member.kaisarbarberacademy.com" target="blank" class="relative flex flex-col items-center py-2 group text-sm px-1">
					<div class="cursor-pointer text-klinik-primary">member</div>
				</a>
			</div>
		</div>

		<script>
			
			document.addEventListener("DOMContentLoaded", function() {
				const links = document.querySelectorAll("a[href^='#kaisar-']");

				links.forEach(link => {
					link.addEventListener("click", function(e) {
						e.preventDefault();
						const targetId = this.getAttribute("href");
						console.log(targetId)

						// Hapus kelas-kelas lama
						links.forEach(link => {
							const textDiv = link.querySelector("div:first-child");
							console.log(textDiv)
							// textDiv.classList.remove("text-gray-400");
							// textDiv.classList.add("text-klinik-primary");

							// const bgDiv = link.querySelector("div:last-child");
							// bgDiv.classList.remove("rounded-full absolute bottom-0");
							// bgDiv.classList.add("w-8 h-1.5 bg-white group-hover:bg-gray-400");
						});

						// Ganti kelas-kelas dalam tautan yang diklik
						if (targetId === '#kaisar-aboutus') {
							// const textDiv = this.querySelector("div:first-child");
							// textDiv.classList.remove("text-klinik-primary");
							// textDiv.classList.add("text-gray-400");

							// const bgDiv = this.querySelector("div:last-child");
							// bgDiv.classList.remove("w-8 h-1.5 bg-klinik-primary");
							// bgDiv.classList.remove("bg-white");
							// bgDiv.classList.remove("group-hover:bg-gray-400");
							// bgDiv.classList.add("rounded-full absolute bottom-0");
						}

						// Gulirkan halaman jika diperlukan
						const targetElement = document.querySelector(targetId);
						if (targetElement) {
							targetElement.scrollIntoView({ behavior: "smooth" });
						}
					});
				});
			});

		</script> 

		<div class="flex items-center" :class="{ 'w-full ml-2 md:ml-4': show }" style="max-height: 40px">
			
		</div>
	</div>
</div>