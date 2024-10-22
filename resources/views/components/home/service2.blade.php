<div class="max-w-full w-full mx-auto py-12 md:py-20 relative flex" x-data="{ value: 1 }" id="kaisar-program">
	<div class="z-30 max-w-8xl mx-auto w-full px-5 md:px-8 lg:px-16">
		<div id="service">
			<div class="flex items-center justify-end">
				<div>
					<div class="text-xs md:text-lg font-semibold tracking-widest mb-1.5 font-poppins text-right">KEGIATAN</div>
					<div class="text-xl md:text-3.5xl font-bold mb-2 md:mb-4 text-right">Suasana Belajar di Kaisar Barber Academy</div>
					<div class="w-full bg-klinik-primary text-right" style="height: 2px;"></div>
				</div>
				<div class="hidden md:block">
				</div>
			</div>

			<div class="flex mt-10 hidden md:block">
				<div class="swiper-container w-full relative swiper-promo">
					<div class="swiper-wrapper">
						<style type="text/css">
							.addon-promo-item-img{
								height: 503;
							}
						</style>
						
						<div class="flex swiper-slide h-full w-full">
							<img src="{{asset('images/_ks/sistem mengajar/Foto Kursus 1.jpg')}}" onclick="goToImage(this)" class="w-1/3 ml-2 object-cover rounded-lg addon-promo-item-img"
							/>
							<img src="{{asset('images/_ks/sistem mengajar/Foto Kursus 2.jpg')}}" onclick="goToImage(this)" class="w-1/3 ml-2 object-cover rounded-lg addon-promo-item-img"
							/>
							<img src="{{asset('images/_ks/sistem mengajar/Foto Kursus 3.jpg')}}" onclick="goToImage(this)" class="w-1/3 ml-2 object-cover rounded-lg addon-promo-item-img"
							/>
						</div>
						<div class="flex swiper-slide h-full w-full">
							<img src="{{asset('images/_ks/sistem mengajar/Foto Kursus 4.jpg')}}" onclick="goToImage(this)" class="w-1/3 ml-2 object-cover rounded-lg addon-promo-item-img"
							/>
							<img src="{{asset('images/_ks/sistem mengajar/Foto Kursus 5.jpg')}}" onclick="goToImage(this)" class="w-1/3 ml-2 object-cover rounded-lg addon-promo-item-img"
							/>
							<img src="{{asset('images/_ks/sistem mengajar/Foto Kursus 6.jpg')}}" onclick="goToImage(this)" class="w-1/3 ml-2 object-cover rounded-lg addon-promo-item-img"
							/>
						</div>
						<div class="flex swiper-slide h-full w-full">
							<img src="{{asset('images/_ks/sistem mengajar/Foto Kursus 7.jpg')}}" onclick="goToImage(this)" class="w-1/3 ml-2 object-cover rounded-lg addon-promo-item-img"
							/>
							<img src="{{asset('images/_ks/sistem mengajar/Foto Kursus 8 (Horizontal).jpg')}}" onclick="goToImage(this)" class="w-1/3 ml-2 object-cover rounded-lg addon-promo-item-img"
							/>
							<img src="{{asset('images/_ks/sistem mengajar/Foto Kursus 9.jpg')}}" onclick="goToImage(this)" class="w-1/3 ml-2 object-cover rounded-lg addon-promo-item-img"
							/>
						</div>
						<div class="flex swiper-slide h-full w-full">
							<img src="{{asset('images/_ks/sistem mengajar/Foto Kursus 10.jpg')}}" onclick="goToImage(this)" class="w-1/3 ml-2 object-cover rounded-lg addon-promo-item-img"
							/>
							<img src="{{asset('images/_ks/sistem mengajar/Foto Kursus 11.jpg')}}" onclick="goToImage(this)" class="w-1/3 ml-2 object-cover rounded-lg addon-promo-item-img"
							/>
							<img src="{{asset('images/_ks/sistem mengajar/Foto Kursus 12 (bokeh).jpg')}}" onclick="goToImage(this)" class="w-1/3 ml-2 object-cover rounded-lg addon-promo-item-img"
							/>
						</div>
						<div class="flex swiper-slide h-full w-full">
							<img src="{{asset('images/_ks/sistem mengajar/Foto Di Barber.jpg')}}" onclick="goToImage(this)" class="w-1/3 ml-2 object-cover rounded-lg addon-promo-item-img"
							/>
							<img src="{{asset('images/_ks/sistem mengajar/Foto Di Barber 2.jpg')}}" onclick="goToImage(this)" class="w-1/3 ml-2 object-cover rounded-lg addon-promo-item-img"
							/>
						</div>

					</div>
					{{-- pagination --}}
					<div class="swiper-pagination klinik-bottom-promo"></div>
				</div>
			</div>

			<div class="flex mt-10 block md:hidden">
				<div class="swiper-container w-full relative swiper-promo">
					<div class="swiper-wrapper">
						<style type="text/css">
							.addon-promo-item-img{
								height: 503;
							}
						</style>
						
						<div class="flex swiper-slide h-full w-full">
							<img src="{{asset('images/_ks/sistem mengajar/Foto Kursus 1.jpg')}}" onclick="goToImage(this)" class="w-full ml-2 object-cover rounded-lg addon-promo-item-img"
							/>
						</div>
						<div class="flex swiper-slide h-full w-full">
							<img src="{{asset('images/_ks/sistem mengajar/Foto Kursus 2.jpg')}}" onclick="goToImage(this)" class="w-full ml-2 object-cover rounded-lg addon-promo-item-img"
							/>
						</div>
						<div class="flex swiper-slide h-full w-full">
							<img src="{{asset('images/_ks/sistem mengajar/Foto Kursus 3.jpg')}}" onclick="goToImage(this)" class="w-full ml-2 object-cover rounded-lg addon-promo-item-img"
							/>
						</div>
						<div class="flex swiper-slide h-full w-full">
							<img src="{{asset('images/_ks/sistem mengajar/Foto Kursus 4.jpg')}}" onclick="goToImage(this)" class="w-full ml-2 object-cover rounded-lg addon-promo-item-img"
							/>
						</div>
						<div class="flex swiper-slide h-full w-full">
							<img src="{{asset('images/_ks/sistem mengajar/Foto Kursus 5.jpg')}}" onclick="goToImage(this)" class="w-full ml-2 object-cover rounded-lg addon-promo-item-img"
							/>
						</div>
						<div class="flex swiper-slide h-full w-full">
							<img src="{{asset('images/_ks/sistem mengajar/Foto Kursus 6.jpg')}}" onclick="goToImage(this)" class="w-full ml-2 object-cover rounded-lg addon-promo-item-img"
							/>
						</div>
						<div class="flex swiper-slide h-full w-full">
							<img src="{{asset('images/_ks/sistem mengajar/Foto Kursus 7.jpg')}}" onclick="goToImage(this)" class="w-full ml-2 object-cover rounded-lg addon-promo-item-img"
							/>
						</div>
						<div class="flex swiper-slide h-full w-full">
							<img src="{{asset('images/_ks/sistem mengajar/Foto Kursus 8 (Horizontal).jpg')}}" onclick="goToImage(this)" class="w-full ml-2 object-cover rounded-lg addon-promo-item-img"
							/>
						</div>
						<div class="flex swiper-slide h-full w-full">
							<img src="{{asset('images/_ks/sistem mengajar/Foto Kursus 9.jpg')}}" onclick="goToImage(this)" class="w-full ml-2 object-cover rounded-lg addon-promo-item-img"
							/>
						</div>
						<div class="flex swiper-slide h-full w-full">
							<img src="{{asset('images/_ks/sistem mengajar/Foto Kursus 10.jpg')}}" onclick="goToImage(this)" class="w-full ml-2 object-cover rounded-lg addon-promo-item-img"
							/>
						</div>
						<div class="flex swiper-slide h-full w-full">
							<img src="{{asset('images/_ks/sistem mengajar/Foto Kursus 11.jpg')}}" onclick="goToImage(this)" class="w-full ml-2 object-cover rounded-lg addon-promo-item-img"
							/>
						</div>
						<div class="flex swiper-slide h-full w-full">
							<img src="{{asset('images/_ks/sistem mengajar/Foto Kursus 12 (bokeh).jpg')}}" onclick="goToImage(this)" class="w-full ml-2 object-cover rounded-lg addon-promo-item-img"
							/>
						</div>
						<div class="flex swiper-slide h-full w-full">
							<img src="{{asset('images/_ks/sistem mengajar/Foto Di Barber.jpg')}}" onclick="goToImage(this)" class="w-full ml-2 object-cover rounded-lg addon-promo-item-img"
							/>
						</div>
						<div class="flex swiper-slide h-full w-full">
							<img src="{{asset('images/_ks/sistem mengajar/Foto Di Barber 2.jpg')}}" onclick="goToImage(this)" class="w-full ml-2 object-cover rounded-lg addon-promo-item-img"
							/>
						</div>

					</div>
					{{-- pagination --}}
					<div class="swiper-pagination klinik-bottom-promo"></div>
				</div>
			</div>

		</div>
	</div>
</div>