<div class="mt-4">
	{{-- 
	<x-branch-info 
		address=""
		phone=""
    phoneId=""
    fax=""
    whatsapp=""
    linkWA=""
    location=""
	/> 
	--}}
	<x-branch-info 
		address="Suncity Square Blok A No. 23, Jl. M. Hasibuan, Bekasi 17141"
		phone="021-88958088"
    phoneId="phone-bekasi"
    fax="021-88960611"
    whatsapp="+628111455088"
    linkWA="https://wa.me/628111455088?text=Halo%2C%20saya%20ingin%20bertanya%20tentang%20Klinik%20Estetika%20dr.%20Affandi%20Cabang%20Bekasi"
    location="https://www.google.com/maps/place/Klinik+Estetika+dr.+Affandi+-+Bekasi/@-6.247716,106.9256207,12z/data=!4m9!1m2!2m1!1sklinik+estetika+dr.+affandi!3m5!1s0x2e698c2cf0509905:0xbd93b62c7066136f!8m2!3d-6.2476627!4d106.9949206!15sChtrbGluaWsgZXN0ZXRpa2EgZHIuIGFmZmFuZGkiA4gBAZIBEHNraW5fY2FyZV9jbGluaWM"
	/>
	<div class="container mt-6">
		<div class="relative mb-4">
			<div class="mySlides">
				<img src="{{ asset('images/branches/bekasi/1.jpg') }}" class="rounded-lg object-cover" style="width:100%; height:208px">
			</div>

			<div class="mySlides">
				<img src="{{ asset('images/branches/bekasi/2.jpg') }}" class="rounded-lg object-cover" style="width:100%; height:208px">
			</div>

			<div class="mySlides">
				<img src="{{ asset('images/branches/bekasi/3.jpg') }}" class="rounded-lg object-cover" style="width:100%; height:208px">
			</div>
				
			<div class="mySlides">
				<img src="{{ asset('images/branches/bekasi/4.jpg') }}" class="rounded-lg object-cover" style="width:100%; height:208px">
			</div>

			<div class="mySlides">
				<img src="{{ asset('images/branches/bekasi/5.jpg') }}" class="rounded-lg object-cover" style="width:100%; height:208px">
			</div>
				
			<div class="mySlides">
				<img src="{{ asset('images/branches/bekasi/6.jpg') }}" class="rounded-lg object-cover" style="width:100%; height:208px">
			</div>
				
			<a class="prev" onclick="plusSlides(-1)">
				<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
			</a>
			<a class="next" onclick="plusSlides(1)">
				<svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
			</a>
		</div>

		<div class="row flex space-x-3 overflow-x-auto">
			<img class="demo cursor h-10 w-10 rounded-lg object-cover" src="{{ asset('images/branches/bekasi/1.jpg') }}" onclick="currentSlide(1)" alt="The Woods">

			<img class="demo cursor h-10 w-10 rounded-lg object-cover" src="{{ asset('images/branches/bekasi/2.jpg') }}" onclick="currentSlide(2)" alt="Cinque Terre">
			
			<img class="demo cursor h-10 w-10 rounded-lg object-cover" src="{{ asset('images/branches/bekasi/3.jpg') }}" onclick="currentSlide(3)" alt="Mountains and fjords">

			<img class="demo cursor h-10 w-10 rounded-lg object-cover" src="{{ asset('images/branches/bekasi/4.jpg') }}" onclick="currentSlide(4)" alt="Northern Lights">

			<img class="demo cursor h-10 w-10 rounded-lg object-cover" src="{{ asset('images/branches/bekasi/5.jpg') }}" onclick="currentSlide(5)" alt="Nature and sunrise">

			<img class="demo cursor h-10 w-10 rounded-lg object-cover" src="{{ asset('images/branches/bekasi/6.jpg') }}" onclick="currentSlide(6)" alt="Snowy Mountains">
		</div>
	</div>
	<script>
		var slideIndex = 1;
		showSlides(slideIndex);
	
		function plusSlides(n) {
			showSlides(slideIndex += n);
		}
	
		function currentSlide(n) {
			showSlides(slideIndex = n);
		}
	
		function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("mySlides");
			var dots = document.getElementsByClassName("demo");
			
			if (n > slides.length) {slideIndex = 1}
			if (n < 1) {slideIndex = slides.length}
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
	
			slides[slideIndex-1].style.display = "block";
			dots[slideIndex-1].className += " active";
			
		}
	</script>
</div>

