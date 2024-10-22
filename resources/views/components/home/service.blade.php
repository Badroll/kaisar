<div class="max-w-full w-full mx-auto py-12 md:py-20 relative flex" x-data="{ value: 1 }" id="kaisar-program">
	<div class="z-30 max-w-8xl mx-auto w-full px-5 md:px-8 lg:px-16">
		<div id="service">
			<div class="flex items-center justify-between">
				<div>
					<div class="text-xs md:text-lg font-semibold tracking-widest mb-1.5 font-poppins">PROGRAM / KURIKULUM</div>
					<div class="text-xl md:text-3.5xl font-bold mb-2 md:mb-4">Sistem Mengajar</div>
					<div class="w-full bg-klinik-primary" style="height: 2px"></div>
				</div>
				<div class="hidden md:block">
				</div>
			</div>

			{{-- desktop --}}
			<div class="hidden md:block">
				<div class="flex mt-6">
					<div class="w-6/12">
						<template x-if="value === 1">
							<a href="#">
								<img src="{{ asset('images/_ks/sistem mengajar/Foto Kursus 1.jpg') }}" onclick="goToImage(this)" alt="service" class="h-96 w-full object-cover rounded-2xl">
							</a>
						</template>
						<template x-if="value === 2">
							<a href="#">
								<img src="{{ asset('images/_ks/sistem mengajar/Foto Kursus 2.jpg') }}" onclick="goToImage(this)" alt="service" class="h-96 w-full object-cover rounded-2xl">
							</a>
						</template>
						<template x-if="value === 3">
							<a href="#">
								<img src="{{ asset('images/_ks/sistem mengajar/Foto Kursus 3.jpg') }}" onclick="goToImage(this)" alt="service" class="h-96 w-full object-cover rounded-2xl">
							</a>
						</template>
						<template x-if="value === 4">
							<a href="#">
								<img src="{{ asset('images//_ks/sistem mengajar/Foto Kursus 4.jpg') }}" onclick="goToImage(this)" alt="service" class="h-96 w-full object-cover rounded-2xl">
							</a>
						</template>
						<template x-if="value === 5">
							<a href="#">
								<img src="{{ asset('images/_ks/sistem mengajar/Foto Kursus 5.jpg') }}" onclick="goToImage(this)" alt="service" class="h-96 w-full object-cover rounded-2xl">
							</a>
						</template>
						<template x-if="value === 6">
							<a href="#">
								<img src="{{ asset('images/_ks/sistem mengajar/Foto Kursus 6.jpg') }}" onclick="goToImage(this)" alt="service" class="h-96 w-full object-cover rounded-2xl">
							</a>
						</template>
						<template x-if="value === 7">
							<a href="#">
								<img src="{{ asset('images/_ks/sistem mengajar/Foto Kursus 7.jpg') }}" onclick="goToImage(this)" alt="service" class="h-96 w-full object-cover rounded-2xl">
							</a>
						</template>
						<template x-if="value === 8">
							<a href="#">
								<img src="{{ asset('images/_ks/sistem mengajar/Foto Kursus 8 (Horizontal).jpg') }}" onclick="goToImage(this)" alt="service" class="h-96 w-full object-cover rounded-2xl">
							</a>
						</template>
						<template x-if="value === 9">
							<a href="#">
								<img src="{{ asset('images/_ks/sistem mengajar/Foto Kursus 9.jpg') }}" onclick="goToImage(this)" alt="service" class="h-96 w-full object-cover rounded-2xl">
							</a>
						</template>
						<template x-if="value === 10">
							<a href="#">
								<img src="{{ asset('images/_ks/sistem mengajar/Foto Kursus 10.jpg') }}" onclick="goToImage(this)" alt="service" class="h-96 w-full object-cover rounded-2xl">
							</a>
						</template>
						<template x-if="value === 11">
							<a href="#">
								<img src="{{ asset('images/_ks/sistem mengajar/Foto Kursus 11.jpg') }}" onclick="goToImage(this)" alt="service" class="h-96 w-full object-cover rounded-2xl">
							</a>
						</template>
						<template x-if="value === 12">
							<a href="#">
								<img src="{{ asset('images/_ks/sistem mengajar/Foto Kursus 12 (bokeh).jpg') }}" onclick="goToImage(this)" alt="service" class="h-96 w-full object-cover rounded-2xl">
							</a>
						</template>
						<template x-if="value === 13">
							<a href="#">
								<img src="{{ asset('images/_ks/sistem mengajar/Foto Di Barber.jpg') }}" onclick="goToImage(this)" alt="service" class="h-96 w-full object-cover rounded-2xl">
							</a>
						</template>
						<template x-if="value === 14">
							<a href="#">
								<img src="{{ asset('images/_ks/sistem mengajar/Foto Di Barber 2.jpg') }}" onclick="goToImage(this)" alt="service" class="h-96 w-full object-cover rounded-2xl">
							</a>
						</template>
					</div>
					<div class="w-6/12 h-96 overflow-y-auto ml-4 rounded-2xl">
						<div class="bg-white">
							<div class="p-8 flex items-center hover:bg-gray-50 font-bold text-xl font-montserrat" :class="{ 'text-white bg-klinik-primary hover:bg-klinik-primary': value === 1 }" @mouseover="value = 1">
								<a href="#" class="flex w-full">
									<div style="padding-top: 5px">
										<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
									</div>
									<div>Kegiatan 1</div>
								</a>
							</div>
							<div class="p-8 flex items-center hover:bg-gray-50 font-bold text-xl font-montserrat" :class="{ 'text-white bg-klinik-primary hover:bg-klinik-primary': value === 2 }" @mouseover="value = 2">
								<a href="#" class="flex w-full">
									<div style="padding-top: 5px">
										<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
									</div>
									<div>Kegiatan 2</div>
								</a>
							</div>
							<div class="p-8 flex items-center hover:bg-gray-50 font-bold text-xl font-montserrat" :class="{ 'text-white bg-klinik-primary hover:bg-klinik-primary': value === 3 }" @mouseover="value = 3">
								<a href="#" class="flex w-full">
									<div style="padding-top: 5px">
										<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
									</div>
									<div>Kegiatan 3</div>
								</a>
							</div>
							<div class="p-8 flex items-center hover:bg-gray-50 font-bold text-xl font-montserrat" :class="{ 'text-white bg-klinik-primary hover:bg-klinik-primary': value === 4 }" @mouseover="value = 4">
								<a href="#" class="flex w-full">
									<div style="padding-top: 5px">
										<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
									</div>
									<div>Kegiatan 4</div>
								</a>
							</div>
							<div class="p-8 flex items-center hover:bg-gray-50 font-bold text-xl font-montserrat" :class="{ 'text-white bg-klinik-primary hover:bg-klinik-primary': value === 5 }" @mouseover="value = 5">
								<a href="#" class="flex w-full">
									<div style="padding-top: 5px">
										<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
									</div>
									<div>Kegiatan 5</div>
								</a>
							</div>
							<div class="p-8 flex items-center hover:bg-gray-50 font-bold text-xl font-montserrat" :class="{ 'text-white bg-klinik-primary hover:bg-klinik-primary': value === 6 }" @mouseover="value = 6">
								<a href="#" class="flex w-full">
									<div style="padding-top: 5px">
										<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
									</div>
									<div>Kegiatan 6</div>
								</a>
							</div>
							<div class="p-8 flex items-center hover:bg-gray-50 font-bold text-xl font-montserrat" :class="{ 'text-white bg-klinik-primary hover:bg-klinik-primary': value === 7 }" @mouseover="value = 7">
								<a href="#" class="flex w-full">
									<div style="padding-top: 5px">
										<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
									</div>
									<div>Kegiatan 7</div>
								</a>
							</div>
							<div class="p-8 flex items-center hover:bg-gray-50 font-bold text-xl font-montserrat" :class="{ 'text-white bg-klinik-primary hover:bg-klinik-primary': value === 8 }" @mouseover="value = 8">
								<a href="#" class="flex w-full">
									<div style="padding-top: 5px">
										<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
									</div>
									<div>Kegiatan 8</div>
								</a>
							</div>
							<div class="p-8 flex items-center hover:bg-gray-50 font-bold text-xl font-montserrat" :class="{ 'text-white bg-klinik-primary hover:bg-klinik-primary': value === 9 }" @mouseover="value = 9">
								<a href="#" class="flex w-full">
									<div style="padding-top: 5px">
										<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
									</div>
									<div>Kegiatan 9</div>
								</a>
							</div>
							<div class="p-8 flex items-center hover:bg-gray-50 font-bold text-xl font-montserrat" :class="{ 'text-white bg-klinik-primary hover:bg-klinik-primary': value === 10 }" @mouseover="value = 10">
								<a href="#" class="flex w-full">
									<div style="padding-top: 5px">
										<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
									</div>
									<div>Kegiatan 10</div>
								</a>
							</div>
							<div class="p-8 flex items-center hover:bg-gray-50 font-bold text-xl font-montserrat" :class="{ 'text-white bg-klinik-primary hover:bg-klinik-primary': value === 11 }" @mouseover="value = 11">
								<a href="#" class="flex w-full">
									<div style="padding-top: 5px">
										<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
									</div>
									<div>Kegiatan 11</div>
								</a>
							</div>
							<div class="p-8 flex items-center hover:bg-gray-50 font-bold text-xl font-montserrat" :class="{ 'text-white bg-klinik-primary hover:bg-klinik-primary': value === 12 }" @mouseover="value = 12">
								<a href="#" class="flex w-full">
									<div style="padding-top: 5px">
										<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
									</div>
									<div>Kegiatan 12</div>
								</a>
							</div>
							<div class="p-8 flex items-center hover:bg-gray-50 font-bold text-xl font-montserrat" :class="{ 'text-white bg-klinik-primary hover:bg-klinik-primary': value === 13 }" @mouseover="value = 13">
								<a href="#" class="flex w-full">
									<div style="padding-top: 5px">
										<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
									</div>
									<div>Kegiatan 13</div>
								</a>
							</div>
							<div class="p-8 flex items-center hover:bg-gray-50 font-bold text-xl font-montserrat" :class="{ 'text-white bg-klinik-primary hover:bg-klinik-primary': value === 14 }" @mouseover="value = 14">
								<a href="#" class="flex w-full">
									<div style="padding-top: 5px">
										<svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
									</div>
									<div>Kegiatan 14</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

			{{-- mobile --}}
			<div class="md:hidden" style="display:none">
				<div class="flex items-center flex-col md:flex-row-reverse">
					<div class="py-6">
						<img src="{{asset('images/_mw/logo-main.png')}}" alt="service" class="mx-auto relative z-20 w-full h-48 md:h-96 rounded-2xl" />
					</div>
					<div class="text-center md:text-left md:mr-24">
						<div class="pb-7">
							Find Various Services
						</div>
						<a
							href="/services"
							class="px-6 py-2 bg-klinik-primary text-white rounded-full font-semibold btn-focus-primary uppercase opacity-80"
						>
							All Services
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>