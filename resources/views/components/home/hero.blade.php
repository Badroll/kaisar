<div x-data="{ openModalAppointment: false, openModalLoyaltyProgram: false, openModalLiveChat: false, isShow: false }" id="kaisar-whyus">
	
	{{-- hero for mobile --}}
	<div class="block max-w-full mx-auto md:max-w-8xl md:hidden">
		<div class="px-5 md:px-8 lg:px-16">
			<div class="mt-1 pt-5 mb-2 text-3xl font-bold text-klinik-primary text-center">
				Kaisar Barber Academy
			</div>
			<div class="text-xl font-semibold text-klinik-primary text-center">
			Belajar Potong Rambut dengan mudah dari 0 Bersama Kami
			</div>
		</div>
		<div class="px-8 pt-6 pb-3 mt-6 shadow-card-hero">
			<div class="grid items-start grid-cols-3 gap-10">
				<a href="#">
					<div class="flex justify-center">
						<div class="p-4 border border-gray-200 rounded-md">
							<img src="{{ asset('images/home/ic-loyal2.svg') }}" alt="icon" class="w-12 h-12 mx-auto ">
						</div>
					</div>
					<div class="mt-2.5 text-xs font-semibold text-center">Tenaga Ahli</div>
				</a>
				<a href="#">
					<div class="flex justify-center">
						<div class="p-4 border border-gray-200 rounded-md">
							<img src="{{ asset('images/home/ic-loyal2.svg') }}" alt="icon" class="w-12 h-12 mx-auto ">
						</div>
					</div>
					<div class="mt-2.5 text-xs font-semibold text-center">Tempat Nyaman</div>
				</a>
				<a href="#">
					<div class="flex justify-center">
						<div class="p-4 border border-gray-200 rounded-md">
							<img src="{{ asset('images/home/ic-loyal2.svg') }}" alt="icon" class="w-12 h-12 mx-auto ">
						</div>
					</div>
					<div class="mt-2.5 text-xs font-semibold text-center">Fasilitas Lengkap</div>
				</a>
			</div>
		</div>
	</div>
	
	{{-- hero for desktop --}}
	<div class="relative hidden md:block">
		<div class="relative max-w-full mx-auto">
			<div class="flex bg-klinik-grey-sec" style="background: #c62d32; background-size: cover; background-repeat: no-repeat; background-position: center; height: 24rem;">
				<div class="w-full px-5 pt-10 pb-16 mx-auto max-w-7xl md:px-8 lg:px-16">
					<div class="w-full font-bold text-white">
						<div class="text-6.5xl mb-3 text-center">
							Kaisar Barber Academy
						</div>
						<div class="w-full text-3xl text-center">
						Belajar Potong Rambut dengan mudah dari 0 Bersama Kami
						</div>
					</div>
				</div>
			</div>
			<div class="w-full px-5 mx-auto -mt-32 max-w-7xl md:px-8 lg:px-16">
				<div class="relative p-12 mb-20 bg-white rounded-lg shadow-card-home">
					<div class="mb-10 text-4xl font-extrabold">
						Mengapa Memilih Kami ?
					</div>
					<div class="flex">
						<div class="w-full h-auto swiper-container swiper-menu">
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<p>
										<img src="{{ asset('images/home/ic-loyal2.svg') }}" alt="icon" class="w-8 h-8 mb-4">
										<div class="mb-3 text-xl font-extrabold">
											Tenaga Ahli
										</div>
										<div class="font-lato">
										Kaisar Barber Academy memiliki Tenaga Pengajar yang ahli dan professional di bidang barbershop.
										</div>
									</p>
								</div>
								<div class="swiper-slide">
									<p>
										<img src="{{ asset('images/home/ic-loyal2.svg') }}" alt="icon" class="w-8 h-8 mb-4">
										<div class="mb-3 text-xl font-extrabold">
											Tempat Nyaman
										</div>
										<div class="font-lato">
										Kaisar barber academy mempunyai kelas yang sangat nyaman dalam menunjang kegiatan belajar mengajar.
										</div>
									</p>
								</div>
								<div class="swiper-slide">
									<p>
										<img src="{{ asset('images/home/ic-loyal2.svg') }}" alt="icon" class="w-8 h-8 mb-4">
										<div class="mb-3 text-xl font-extrabold">
											Fasilitas Lengkap
										</div>
										<div class="font-lato">
											Kaisar barber academy memiliki materi dan kurikulum yang terstruktur sehingga bagi pemula dapat belajar dari 0 secara mudah
										</div>
									</p>
								</div>
							</div>
						</div>
					</div>
					{{-- navigation --}}
					<div class="flex justify-between w-full">
						<div
							class="absolute z-30 p-1 rounded-full swiper-btn-prev-hero text-klinik-primary left-2"
							style="top: 45%"
						>
							<svg
							class="w-6 h-6"
							fill="none"
							stroke="currentColor"
							viewBox="0 0 24 24"
							xmlns="http://www.w3.org/2000/svg"
							>
							<path
								stroke-linecap="round"
								stroke-linejoin="round"
								stroke-width="2"
								d="M15 19l-7-7 7-7"
							></path>
							</svg>
						</div>
						<div
							class="absolute z-30 p-1 rounded-full swiper-btn-next-hero text-klinik-primary right-2"
							style="top: 45%"
						>
							<svg
							class="w-6 h-6"
							fill="none"
							stroke="currentColor"
							viewBox="0 0 24 24"
							xmlns="http://www.w3.org/2000/svg"
							>
							<path
								stroke-linecap="round"
								stroke-linejoin="round"
								stroke-width="2"
								d="M9 5l7 7-7 7"
							></path>
							</svg>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
