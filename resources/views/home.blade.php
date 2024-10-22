@extends("layouts.app")

@section("head")
	<link rel="stylesheet" href="https://unpkg.com/swiper@6/swiper-bundle.min.css" />
@endsection

@section("content")
<x-layout-app withNavbar withFooter="false" withBottomNavbar>
	<div class="" style="background: #f5f5f5;" x-data="{ openModal: false }" x-init="openModal = false">
		<x-home.hero />
		<x-home.aboutus />
		<x-home.service2 />
		<x-home.lulusan />
		<x-home.testimonial />
		<x-home.price3 />
		<x-home.faq />
		<x-footer-home />
	</div>
	
</x-layout-app>

{{--
<x-home.hero />
<x-home.promo />
<x-home.service />
<x-home.product />
<x-home.testimonial />
<x-home.news />
<x-home.video />
<x-home.consultation />
<x-footer-home />
--}}

<script src="https://unpkg.com/swiper@6/swiper-bundle.min.js"></script>

<script>
  (function() {
	var showed = false
    // Mendapatkan elemen target
    var targetElement = document.getElementById("kaisar-harga");

    // Fungsi untuk menampilkan pesan alert
    function showScrollAlert() {
	var elem = document.getElementById('hubungi-modal'); // Ganti 'elemenID' dengan ID elemen yang ingin Anda klik
		if(showed){
			return
		}
		//elem.click();
		showed = true
	}

    // Mendeteksi peristiwa scroll
    window.addEventListener("scroll", function() {
      // Mendapatkan posisi vertikal scroll
      var scrollPosition = window.scrollY;

      // Mendapatkan posisi elemen target
      var targetPosition = targetElement.getBoundingClientRect().top + scrollPosition;

      // Jika posisi scroll lebih besar atau sama dengan posisi elemen target, tampilkan pesan alert
      if (scrollPosition >= targetPosition) {
        showScrollAlert();
      }
    });

  })();
</script>

<script>
	var swiperMenu = new Swiper('.swiper-menu', {
		slidesPerView: 3,
		spaceBetween: 30,
		navigation: {
			nextEl: '.swiper-btn-next-hero',
			prevEl: '.swiper-btn-prev-hero',
			disabledClass: 'opacity-50'
		},
	});

	var swiperPromo = new Swiper('.swiper-promo', {
		autoplay: {
			delay: 3000,
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
	});

	var swiperProduct = new Swiper('.swiper-product', {
		navigation: {
			nextEl: '.swiper-btn-next-product',
			prevEl: '.swiper-btn-prev-product',
			disabledClass: 'opacity-50'
		},
		slidesPerView: 'auto',
	});
	var swiperProduct = new Swiper('.swiper-product', {
		navigation: {
			nextEl: '.swiper-btn-next-product',
			prevEl: '.swiper-btn-prev-product',
			disabledClass: 'opacity-50'
		},
		slidesPerView: 'auto',
	});

	var swiperTestimonial = new Swiper('.swiper-testimonial', {
		navigation: {
			nextEl: '.swiper-btn-next-testimonial',
			prevEl: '.swiper-btn-prev-testimonial',
			disabledClass: 'opacity-50'
		},
		slidesPerView: 1,
		spaceBetween: 30,
		breakpoints: {
			// when window width is >= 320px
			640: {
				slidesPerView: 2,
				spaceBetween: 20
			},
			// when window width is >= 640px
			1000: {
				slidesPerView: 3,
				spaceBetween: 30
			}
		}
	});

	var swiperNews = new Swiper('.swiper-news', {
		navigation: {
			nextEl: '.swiper-btn-next-news',
			prevEl: '.swiper-btn-prev-news',
			disabledClass: 'opacity-50'
		},
		slidesPerView: 3,
		spaceBetween: 30,
	});

	function goToImage(el){
		window.open(el.getAttribute("src"), '_blank')
	}


	

</script>
@endsection
