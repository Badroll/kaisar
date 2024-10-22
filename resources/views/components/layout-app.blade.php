<div class="min-h-screen relative">
	<!-- navbar start -->
    @if ($withNavbar == 'true')
        <x-navbar />
    @endif

	<!-- navbar end -->
	@if ($withBottomNavbar == 'true')
        <!-- navbar bottom start -->
        <div
            class="md:hidden flex justify-between bg-white fixed bottom-0 w-full border-t border-gray-200 uppercase font-semibold text-sm z-40"
        >
        <!-- <a  
                href="/"
                class="bg-white hover:bg-gray-50 md:p-5 p-2 flex flex-col items-center flex-1 cursor-pointer text-xs"
            >
                <div class="mt-1 text-gray-400">mengapa memilih kami</div>
            </a>
            <a  
                href="/"
                class="bg-white hover:bg-gray-50 md:p-5 p-2 flex flex-col items-center flex-1 cursor-pointer text-xs"
            >
                <div class="mt-1 text-gray-400">tentang kami</div>
            </a>
            <a  
                href="/"
                class="bg-white hover:bg-gray-50 md:p-5 p-2 flex flex-col items-center flex-1 cursor-pointer text-xs"
            >
                <div class="mt-1 text-gray-400">program / kurikulum</div>
            </a>
            <a  
                href="/"
                class="bg-white hover:bg-gray-50 md:p-5 p-2 flex flex-col items-center flex-1 cursor-pointer text-xs"
            >
                <div class="mt-1 text-gray-400">testimoni & lulusan</div>
            </a>
            <a  
                href="/"
                class="bg-white hover:bg-gray-50 md:p-5 p-2 flex flex-col items-center flex-1 cursor-pointer text-xs"
            >
                <div class="mt-1 text-gray-400">faq</div>
            </a>
            <a  
                href="/"
                class="bg-white hover:bg-gray-50 md:p-5 p-2 flex flex-col items-center flex-1 cursor-pointer text-xs"
            >
                <div class="mt-1 text-gray-400">paket harga</div>
            </a>
            <a  
                href="/"
                class="bg-white hover:bg-gray-50 md:p-5 p-2 flex flex-col items-center flex-1 cursor-pointer text-xs"
            >
                <div class="mt-1 text-gray-400">hubungi kami</div>
            </a> -->
        </div>
    @endif
	<!-- navbar bottom end -->
    
    @if ($withNavbar == 'true')
        <div class="md:pt-20 pt-16">
            {{ $slot }}
        </div>
    @else
        <div>
            {{ $slot }}
        </div>
    @endif

    {{-- footer --}}
    @if ($withFooter == 'true')
	    <x-footer />
    @endif
</div>
