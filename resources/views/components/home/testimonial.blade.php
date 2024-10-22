<div class="" id="kaisar-testimoni">
	<div class="h-72 md:h-80 bg-klinik-primary"></div>
	<div class="py-12 -mt-72 md:-mt-80 md:py-20 max-w-8xl px-5 md:px-8 lg:px-16 mx-auto relative">
		<!-- <div class="">
			<div class="flex items-center justify-between w-full mb-8 md:mb-12">
				<div class="text-white">
					<div class="text-xs md:text-lg font-semibold tracking-widest mb-1.5 font-poppins">TESTIMONIES</div>
					<div class="text-xl md:text-3.5xl font-bold mb-2 md:mb-4">Apa Kata Mereka</div>
					<div class="w-32 bg-klinik-primary" style="height: 2px; background: white;"></div>
				</div>
			</div>
		</div> -->
		<div class="">
			<div class="flex items-center justify-end w-full mb-8 md:mb-12">
				<div class="text-white">
					<div class="text-xs md:text-lg font-semibold tracking-widest mb-1.5 font-poppins text-right">TESTIMONIES</div>
					<div class="text-xl md:text-3.5xl font-bold mb-2 md:mb-4 text-right">Apa Kata Mereka</div>
					<div class="w-full bg-klinik-primary text-right" style="height: 2px; background: white;"></div>
				</div>
			</div>
		</div>

		{{-- testimonial --}}
		<div class="relative w-full">
			<div class="max-w-8xl mx-auto relative">
				<div class="relative">
					<div class="flex" style="overflow: hidden; margin: -16px;">
						<div class="swiper-container w-full relative swiper-testimonial" style="overflow: visible; padding: 16px;">
							<div class="swiper-wrapper">
								{{-- card --}}

								<div class="flex flex-col p-6 bg-white rounded-md shadow-card-home swiper-slide">
									<div>
										<img src="{{ asset('images/home/accent.svg') }}" alt="icon" class="w-8 h-8">
									</div>
									<p class="mt-8 flex-grow">
									Alhamdulillah selama kursus disini saya nyaman dan juga trainernya ramah tapi tetap professional mengajari saya walau saya belum ada basic sama sekali. Terimakasi Kaisar Barber Academy.
									</p>
									<div class="flex-grow-0">
										<div class="my-6">
											<hr>
										</div>
										<div class="flex">
											<div class="mr-4 flex-shrink-0 rounded-full">
												<img src="{{asset('images/_ks/lulusan/pakaris.jpg')}}" class="w-20 h-20" />
											</div>
											<div class="">
												<h4 class="font-bold">Aris (50 tahun)</h4>
											</div>
										</div>
									</div>
								</div>

								<div class="flex flex-col p-6 bg-white rounded-md shadow-card-home swiper-slide">
									<div>
										<img src="{{ asset('images/home/accent.svg') }}" alt="icon" class="w-8 h-8">
									</div>
									<p class="mt-8 flex-grow">
									Terimakasih mas jovan,saya sudah diberi bekal ilmu barberman dengan sangat baik, dari mulai cara memegang clipper,memegang gunting,cara memotong rambut dan bahkan cara maintenance alat alatnya
									</p>
									<div class="flex-grow-0">
										<div class="my-6">
											<hr>
										</div>
										<div class="flex">
											<div class="mr-4 flex-shrink-0 rounded-full">
												<img src="{{asset('images/_ks/lulusan/aris.jpg')}}" class="w-20 h-20" />
											</div>
											<div class="">
												<h4 class="font-bold">Aris (29 tahun)</h4>
											</div>
										</div>
									</div>
								</div>

								<div class="flex flex-col p-6 bg-white rounded-md shadow-card-home swiper-slide">
									<div>
										<img src="{{ asset('images/home/accent.svg') }}" alt="icon" class="w-8 h-8">
									</div>
									<p class="mt-8 flex-grow">
									Mantappp sekalii kelas kursus disini,trainernya ramah poll dan nyenengke...ngga kaku sama sekali, jadinya bisa di ajak bercanda tetapi soal pelajarannya juga ga kalah mantap...sukses terus kaisar barber academy
									</p>
									<div class="flex-grow-0">
										<div class="my-6">
											<hr>
										</div>
										<div class="flex">
											<div class="mr-4 flex-shrink-0 rounded-full">
											<img src="{{asset('images/_ks/lulusan/endra.jpg')}}" class="w-20 h-20" />
											</div>
											<div class="">
												<h4 class="font-bold">Endra (20 tahun)</h4>
											</div>
										</div>
									</div>
								</div>

								<div class="flex flex-col p-6 bg-white rounded-md shadow-card-home swiper-slide">
									<div>
										<img src="{{ asset('images/home/accent.svg') }}" alt="icon" class="w-8 h-8">
									</div>
									<p class="mt-8 flex-grow">
									Materinya lengkap banget dan system pembelajarannya dinamis,overall nilai nya 10/10 buat belajar disini...sangat recommend sekali pokoknnya
									</p>
									<div class="flex-grow-0">
										<div class="my-6">
											<hr>
										</div>
										<div class="flex">
											<div class="mr-4 flex-shrink-0 rounded-full">
											<img src="{{asset('images/_ks/lulusan/yovan.jpg')}}" class="w-20 h-20" />
											</div>
											<div class="">
												<h4 class="font-bold">Yovan (25 tahun)</h4>
											</div>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
					<!-- Add navigation -->
					<div class="flex justify-between max-w-8xl w-full">
						<div
							class="swiper-btn-prev-testimonial bg-white p-1 rounded-full text-klinik-primary border-2 border-klinik-primary absolute z-30 -left-4 md:-left-6 top-1/2"
						>
							<svg
							class="w-6 md:w-7 h-6 md:h-7"
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
							class="swiper-btn-next-testimonial bg-white p-1 rounded-full text-klinik-primary border-2 border-klinik-primary absolute z-30 -right-4 md:-right-6 top-1/2"
						>
							<svg
							class="w-6 md:w-7 h-6 md:h-7"
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
