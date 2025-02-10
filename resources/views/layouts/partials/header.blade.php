
<!-- NOT: 2 ÇEŞİT MOBİL MENU BULUNMAKTADIR. "header-field" ALANINA "mobile-menu-1" VEYA "mobile-menu-2" EKLENEREK/DEĞİŞTİRİLEREK TETİKLENİR. -->
<header class="header-field block w-full left-0 top-0 fixed z-[90] group/header
duration-300 [&.scrolling-down]:-translate-y-full
[&.scrolling-up]:bg-white [&.scrolling-up]:h-[--header-height-up]
[&.menu-active]:bg-white
mobile-menu-1" data-detect-scroll-direction="reset-at-top" data-detect-scroll-offset="80">
    <div class="container clamp-1 [--minv-1:1260] [--maxv-1:1920] max-w-[--clamp-1] px-[40px] xl:px-[30px] sm:px-[24px] mx-auto w-full">
        <div class="wrapper flex items-center justify-between py-[40px] md:py-[20px] group-[&.scrolling-down]/header:py-[20px] group-[&.scrolling-up]/header:py-[20px] duration-300 clamp-1 [--minv-1:120] [--maxv-1:260] gap-[--clamp-1] lg:gap-10 h-[--header-height] group-[&.scrolling-up]/header:h-[calc(var(--header-height)-40px)] lg:group-[&.scrolling-up]/header:h-[calc(var(--header-height)-20px)]">
            <div class="logo-wrapper clamp-1 max-w-[250px] xl:max-w-[200px] lg:max-w-[150px] duration-300 group-[&.scrolling-down]/header:[--maxv-1:200] group-[&.scrolling-up]/header:[--maxv-1:200]">
                <a href="index.html" class="logo-item group/logo w-full h-auto">

                    @empty($settings->site_logo)
                        <svg class="w-full h-auto origin-center overflow-hidden" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 248 74">
                        <g id="letter">
                            <path id="letter-s" class="letter logo-item letter-s [--index:1]
                     fill-main-500 relative min-lg:[transform:perspective(500px)_translateY(75%)_rotateX(-90deg)] min-lg:origin-center min-lg:[tranform-box:fill-box]
                     duration-300 min-lg:delay-[calc(100ms*(var(--index)))] min-lg:group-[&.fx-reveal]/logo:[transform:perspective(1000px)_translateY(0%)_rotateX(0deg)] min-lg:group-[&.fx-reveal]/logo:opacity-100
                     group-[&.header-white]/header:fill-white

                     group-[&.scrolling-up]/header:fill-main-500
                     group-[&.menu-active]/header:fill-main-500

                     group-[&.scrolling-down]/header:fill-main-500
                     " d="M32.86,47.32c-2.01-1.62-4.3-3.22-6.87-4.8-2.22-1.52-4.35-2.92-6.39-4.21-2.04-1.29-3.71-2.67-4.99-4.16-1.29-1.49-1.93-3.22-1.93-5.2,0-2.18.73-3.86,2.2-5.05,1.47-1.19,3.31-1.78,5.53-1.78,3.15,0,5.69.78,7.62,2.33,1.93,1.55,3.4,3.48,4.4,5.79,1,2.31,1.68,4.69,2.04,7.13h2.36c0-4.35.04-7.84.11-10.44.07-2.61.18-4.87.32-6.78h-2.36c-.5,3.76-1.97,4.82-4.4,3.17-1-.59-2.58-1.29-4.73-2.08s-4.73-1.19-7.73-1.19-5.96.51-8.65,1.53c-2.69,1.02-4.85,2.51-6.5,4.45-1.65,1.95-2.47,4.4-2.47,7.37,0,2.71.66,5.05,1.99,7.03,1.32,1.98,3.04,3.76,5.16,5.35,2.11,1.58,4.39,3.2,6.82,4.85,3.22,2.18,5.91,4.22,8.06,6.14,2.15,1.91,3.22,4.32,3.22,7.23,0,1.91-.41,3.43-1.24,4.55-.82,1.12-1.86,1.95-3.11,2.47-1.25.53-2.56.79-3.92.79-3.15,0-5.73-.78-7.73-2.33-2.01-1.55-3.53-3.69-4.56-6.43-1.04-2.74-1.81-5.92-2.31-9.55H.43c0,5.02-.04,9.04-.11,12.08-.07,3.04-.18,5.61-.32,7.72h2.36c.29-1.39.7-2.38,1.24-2.97.54-.59,1.16-.73,1.88-.4.79.27,1.56.59,2.31.99.75.4,1.59.83,2.52,1.29,1.22.53,2.61.96,4.19,1.29,1.57.33,3.33.49,5.26.49,3.58,0,6.86-.58,9.83-1.73,2.97-1.15,5.37-2.8,7.2-4.95,1.83-2.14,2.74-4.73,2.74-7.77,0-2.64-.61-4.93-1.83-6.88-1.22-1.95-2.83-3.73-4.83-5.35h0Z" />
                            <path id="letter-t" class="letter logo-item letter-t [--index:2]
                     fill-main-500 relative min-lg:[transform:perspective(500px)_translateY(75%)_rotateX(-90deg)] min-lg:origin-center min-lg:[tranform-box:fill-box]
                     duration-300 min-lg:delay-[calc(100ms*(var(--index)))] min-lg:group-[&.fx-reveal]/logo:[transform:perspective(1000px)_translateY(0%)_rotateX(0deg)] min-lg:group-[&.fx-reveal]/logo:opacity-100
                     group-[&.header-white]/header:fill-white

                     group-[&.scrolling-up]/header:fill-main-500
                     group-[&.menu-active]/header:fill-main-500

                     group-[&.scrolling-down]/header:fill-main-500
                     " d="M76.79,67.72c-1.36,1.16-2.86,1.73-4.51,1.73s-3.04-.49-3.97-1.49c-.93-.99-1.4-2.67-1.4-5.05V23.52h13.75v-1.98h-13.75V0s-.05.02-.07.03c-1.69,1.76-3.64,3.17-5.86,4.2-2.33,1.08-4.86,1.83-7.6,2.26v15.05h-9.45v1.98h9.45v33.36c0,3.5.27,6.3.81,8.41.54,2.11,1.59,3.93,3.17,5.44,1.22,1.06,2.67,1.87,4.35,2.42,1.68.56,3.74.84,6.18.84,4.08,0,7.25-1.07,9.5-3.22,2.26-2.14,3.92-4.83,4.99-8.07l-1.93-.79c-1.07,2.71-2.29,4.64-3.65,5.79h0Z" />
                            <path id="letter-e" class="letter logo-item letter-e [--index:3]
                     fill-main-500 relative min-lg:[transform:perspective(500px)_translateY(75%)_rotateX(-90deg)] min-lg:origin-center min-lg:[tranform-box:fill-box]
                     duration-300 min-lg:delay-[calc(100ms*(var(--index)))] min-lg:group-[&.fx-reveal]/logo:[transform:perspective(1000px)_translateY(0%)_rotateX(0deg)] min-lg:group-[&.fx-reveal]/logo:opacity-100
                     group-[&.header-white]/header:fill-white

                     group-[&.scrolling-up]/header:fill-main-500
                     group-[&.menu-active]/header:fill-main-500

                     group-[&.scrolling-down]/header:fill-main-500
                     " d="M100.24,42.03h31.22c0-7.65-1.79-13.23-5.37-16.73-3.58-3.5-8.52-5.25-14.82-5.25-4.94,0-9.34,1.07-13.21,3.22-3.87,2.15-6.89,5.26-9.07,9.35-2.19,4.09-3.28,9.14-3.28,15.15,0,5.68,1.04,10.48,3.11,14.4,2.08,3.93,4.98,6.88,8.7,8.86,3.72,1.98,8.02,2.97,12.89,2.97,3.87,0,7.23-.73,10.1-2.18,2.86-1.45,5.21-3.32,7.04-5.59,1.83-2.28,3.13-4.57,3.92-6.88l-2.04-.79c-1.36,2.31-2.87,4.09-4.51,5.35-1.65,1.25-3.33,2.11-5.05,2.57-1.72.46-3.4.69-5.05.69-2.43,0-4.8-.69-7.09-2.08-2.29-1.39-4.15-3.56-5.59-6.53-1.43-2.97-2.15-6.73-2.15-11.28,0-.99.02-1.98.05-2.97.03-.8.1-1.56.19-2.28h0ZM104.11,26.54c2-2.94,4.37-4.4,7.09-4.4,2,0,3.63.83,4.89,2.47,1.25,1.65,2.17,3.84,2.74,6.58.57,2.74.79,5.73.64,8.96h-19.05c.54-6.25,1.77-10.79,3.69-13.61h0Z" />
                            <path id="letter-l" class="letter logo-item letter-l [--index:4]
                     fill-main-500 relative min-lg:[transform:perspective(500px)_translateY(75%)_rotateX(-90deg)] min-lg:origin-center min-lg:[tranform-box:fill-box]
                     duration-300 min-lg:delay-[calc(100ms*(var(--index)))] min-lg:group-[&.fx-reveal]/logo:[transform:perspective(1000px)_translateY(0%)_rotateX(0deg)] min-lg:group-[&.fx-reveal]/logo:opacity-100
                     group-[&.header-white]/header:fill-white

                     group-[&.scrolling-up]/header:fill-main-500
                     group-[&.menu-active]/header:fill-main-500

                     group-[&.scrolling-down]/header:fill-main-500
                     " d="M158.63,64.8V0s-.05.02-.07.03c-1.69,1.76-3.65,3.17-5.86,4.2-2.33,1.08-4.86,1.83-7.6,2.26v58.31c0,2.77-.56,4.65-1.66,5.64-1.11.99-2.99,1.49-5.64,1.49v2.08c1.36-.07,3.42-.15,6.18-.25,2.76-.1,5.46-.15,8.11-.15s5.39.05,8,.15c2.61.1,4.56.18,5.85.25v-2.08c-2.65,0-4.53-.49-5.64-1.49-1.11-.99-1.66-2.87-1.66-5.64Z" />
                            <path id="letter-o" class="letter logo-item letter-o [--index:5]
                     fill-main-500 relative min-lg:[transform:perspective(500px)_translateY(75%)_rotateX(-90deg)] min-lg:origin-center min-lg:[tranform-box:fill-box]
                     duration-300 min-lg:delay-[calc(100ms*(var(--index)))] min-lg:group-[&.fx-reveal]/logo:[transform:perspective(1000px)_translateY(0%)_rotateX(0deg)] min-lg:group-[&.fx-reveal]/logo:opacity-100
                     group-[&.header-white]/header:fill-white

                     group-[&.scrolling-up]/header:fill-main-500
                     group-[&.menu-active]/header:fill-main-500

                     group-[&.scrolling-down]/header:fill-main-500
                     " d="M210.34,22.78c-3.83-1.81-8.22-2.72-13.16-2.72s-9.34.91-13.21,2.72c-3.87,1.82-6.91,4.7-9.13,8.66-2.22,3.96-3.33,9.17-3.33,15.64s1.11,11.68,3.33,15.64c2.22,3.96,5.26,6.83,9.13,8.61,3.87,1.78,8.27,2.67,13.21,2.67s9.32-.89,13.16-2.67c3.83-1.78,6.87-4.65,9.13-8.61,2.26-3.96,3.38-9.17,3.38-15.64s-1.13-11.68-3.38-15.64c-2.25-3.96-5.3-6.84-9.13-8.66ZM205.35,66.18c-2.15,3.89-4.87,5.84-8.16,5.84s-6.1-1.95-8.22-5.84c-2.11-3.89-3.17-10.26-3.17-19.1s1.06-15.23,3.17-19.15c2.11-3.93,4.85-5.89,8.22-5.89s6.01,1.96,8.16,5.89c2.15,3.93,3.22,10.31,3.22,19.15s-1.07,15.21-3.22,19.1Z" />
                        </g>
                        <g id="shine">
                            <path id="shine-1" class="shine logo-item shine-1 [--index:6]
                     fill-main-500 relative min-lg:[transform-box:fill-box] min-lg:origin-center min-lg:rotate-90 min-lg:opacity-0
                     duration-300 min-lg:delay-[calc(100ms*(var(--index)))] min-lg:group-[&.fx-reveal]/logo:rotate-0 min-lg:group-[&.fx-reveal]/logo:opacity-100
                     min-lg:[animation:scale-pulse_2s_linear_infinite] min-lg:[tranform-box:fill-box]
                     group-[&.header-white]/header:fill-white

                     group-[&.scrolling-up]/header:fill-main-500
                     group-[&.menu-active]/header:fill-main-500

                     group-[&.scrolling-down]/header:fill-main-500
                     " d="M243.34,15.88h0c-1.48-.42-2.9-.94-4.25-1.58-3.83-1.82-6.87-4.7-9.13-8.66-.94-1.66-1.69-3.54-2.24-5.64h0s0,0,0,0c-.55,2.1-1.29,3.98-2.24,5.64-2.25,3.96-5.3,6.84-9.13,8.66-1.35.64-2.76,1.16-4.25,1.58h0s0,0,0,0c1.48.41,2.9.94,4.25,1.57,3.83,1.82,6.87,4.7,9.13,8.66.95,1.66,1.69,3.54,2.24,5.64h0s0,0,0,0c.55-2.1,1.29-3.98,2.24-5.64,2.26-3.96,5.3-6.84,9.13-8.66,1.35-.64,2.76-1.16,4.25-1.57h0Z" />
                            <g>
                                <path id="shine-2" class="shine logo-item shine-2 [--index:7]
                        fill-main-500 min-lg:translate-x-[-6.5%] min-lg:translate-y-[15%] min-lg:opacity-0
                        duration-300 min-lg:delay-[calc(100ms*(var(--index)))] min-lg:group-[&.fx-reveal]/logo:translate-x-0 min-lg:group-[&.fx-reveal]/logo:translate-y-0 min-lg:group-[&.fx-reveal]/logo:opacity-100
                        group-[&.header-white]/header:fill-white

                        group-[&.scrolling-up]/header:fill-main-500
                        group-[&.menu-active]/header:fill-main-500

                        group-[&.scrolling-down]/header:fill-main-500
                        " d="M248,4.47c-.42-.12-.82-.26-1.2-.44-1.08-.51-1.93-1.32-2.57-2.44-.27-.47-.48-1-.63-1.59-.15.59-.37,1.12-.63,1.59-.63,1.11-1.49,1.93-2.57,2.44-.38.18-.78.33-1.2.44h0c.42.12.82.27,1.2.44,1.08.51,1.93,1.32,2.57,2.44.27.47.48,1,.63,1.59.15-.59.36-1.12.63-1.59.64-1.11,1.49-1.93,2.57-2.44.38-.18.78-.33,1.2-.44h0Z" />
                                <path id="shine-3" class="shine logo-item shine-3 [--index:8]
                        fill-main-500 min-lg:translate-x-[-6.5%] min-lg:translate-y-[-16%] min-lg:opacity-0
                        duration-300 min-lg:delay-[calc(100ms*(var(--index)))] min-lg:group-[&.fx-reveal]/logo:translate-x-0 min-lg:group-[&.fx-reveal]/logo:translate-y-0 min-lg:group-[&.fx-reveal]/logo:opacity-100
                        group-[&.header-white]/header:fill-white

                        group-[&.scrolling-up]/header:fill-main-500
                        group-[&.menu-active]/header:fill-main-500

                        group-[&.scrolling-down]/header:fill-main-500
                        " d="M246.81,26.84c-1.08-.51-1.93-1.32-2.57-2.44-.27-.47-.48-1-.63-1.59-.15.59-.37,1.12-.63,1.59-.63,1.11-1.49,1.93-2.57,2.44-.38.18-.78.33-1.2.44h0c.42.12.82.27,1.2.44,1.08.51,1.93,1.32,2.57,2.44.27.47.48,1,.63,1.59.15-.59.36-1.12.63-1.59.64-1.11,1.49-1.93,2.57-2.44.38-.18.78-.33,1.2-.44h0c-.42-.12-.82-.27-1.2-.44Z" />
                            </g>
                        </g>
                    </svg>
                   @else
                        <img src="{{ Storage::url($settings->site_logo) }}" width="300" alt="{{ $settings->site_name }}">
                    @endempty



                </a>
            </div>
            <div class="menu-wrapper flex items-center justify-between clamp-1 [--minv-1:1024] [--maxv-1:1265] max-w-[--clamp-1] w-full lg:justify-end lg:w-full">
                <div class="web-menu-wrapper lg:absolute lg:top-full lg:left-0 lg:w-full lg:grid-rows-[0fr] lg:duration-300 group-[&.menu-active]/header:grid-rows-[1fr] lg:!hidden lg:group-[&.mobile-menu-1]/header:!grid">
                    <div class="overflow-wrapper lg:overflow-hidden">
                        <ul class="flex items-center clamp-1 [--minv-1:20] [--maxv-1:52] gap-[--clamp-1] lg:flex-col lg:bg-white lg:w-full lg:gap-0
                  lg:scrollbar lg:scrollbar-w-1 lg:scrollbar-track-rounded-2 lg:scrollbar-thumb-rounded-2 lg:scrollbar-thumb-main-500 lg:scrollbar-track-main-500/0 lg:overflow-x-hidden lg:overflow-y-auto
                  lg:max-h-[calc(100dvh-var(--header-height))]
                  lg:group-[&.scrolling-down]/header:max-h-[calc(100dvh-85px)]
                  lg:group-[&.scrolling-up]/header:max-h-[calc(100dvh-85px)]
                  lg:border-0 lg:border-t lg:border-main-500/30
                  ">
                            <li class="relative lg:w-full group/menu-item has-sub">
                                <a href="product.html" class="flex items-center group/link lg:px-[30px] sm:px-[24px] lg:py-[20px] lg:border-0 lg:border-b lg:border-main-500/30">
                                    <span class="text clamp-fs [--minv-fs:16] [--maxv-fs:18] [font-size:--clamp-fs] leading-tight font-medium duration-300 text-main-500 group-hover/link:text-main-400 group-[&.header-white]/header:text-white group-[&.header-white]/header:group-hover/link:text-white/80 group-[&.header-white.scrolling-up]/header:text-main-500 group-[&.header-white.scrolling-up]/header:group-hover/link:text-main-400 lg:group-[&.header-white]/header:text-main-400">Koleksiyon</span>
                                </a>
                                <div class="sub-trigger group/sub-trigger absolute right-[30px] top-[15px] size-[30px] bg-main-500 justify-center items-center hidden cursor-pointer rounded-none duration-300 [&.active]:bg-main-300 lg:group-[&.has-sub]/menu-item:flex z-20 rtl:left-[30px] rtl:right-auto">
                                    <div class="icon w-0.5 h-4 sm:h-3 absolute left-1/2 -translate-x-1/2 bg-white duration-300 group-[&.active]/sub-trigger:rotate-90 rounded-full"></div>
                                    <div class="icon w-4 h-0.5 sm:w-3 bg-white duration-300 rounded-full"></div>
                                </div>
                                <!-- NOT: sub-menu ALANINA "collection" CLASSI EKLENİRSE, GRİD YAPISI ÜÇLÜYE DÖNER. -->
                                <!-- NOT: sub-menu ALANINDAN "collection" CLASSI KALDIRILIRSA, GRİD YAPISI İKİYE DÖNER. -->
                                <div class="sub-menu min-lg:absolute min-lg:w-max min-lg:top-full min-lg:translate-y-[70px] min-lg:left-1/2 min-lg:translate-x-[calc(-50%+80px)] min-lg:pointer-events-none min-lg:opacity-0 min-lg:invisible duration-300
                              before:absolute before:left-0 before:w-full before:h-[70px] before:top-[-70px] before:duration-300 before:bg-transparent
                              min-lg:group-hover/menu-item:translate-y-[50px] min-lg:group-hover/menu-item:pointer-events-auto min-lg:group-hover/menu-item:opacity-100 min-lg:group-hover/menu-item:visible
                              min-lg:group-hover/menu-item:before:h-[50px] min-lg:group-hover/menu-item:before:top-[-50px]
                              lg:before:hidden group/sub-menu
                              collection
                              min-lg:[&.collection]:translate-x-[calc(-50%+225px)]
                              ">
                                    <div class="content min-lg:border min-lg:border-white/10 min-lg:bg-main-500 min-lg:rounded-[14px] lg:bg-transparent min-lg:p-[30px] relative">
                                        <div class="arrow absolute left-1/2 translate-x-[calc(-50%-80px)] size-[60px] bottom-full pointer-events-none
                                    before:bottom-0 before:left-1/2 before:border-solid before:border-transparent before:size-0 before:absolute before:pointer-events-none
                                    after:bottom-0 after:left-1/2 after:border-solid after:border-transparent after:size-0 after:absolute after:pointer-events-none
                                    before:border-b-[#535357] before:border-[28px] before:ml-[-28px]
                                    after:border-b-main-500 after:border-[26px] after:ml-[-26px] -z-10
                                    group-[&.collection]/sub-menu:translate-x-[calc(-50%-225px)] lg:hidden"></div>
                                        <div class="wrapper grid grid-rows-[0fr] duration-300 group-[&.active]/sub-menu:grid-rows-[1fr]">
                                            <div class="overflow-wrapper lg:overflow-hidden">
                                                <ul class="grid grid-cols-2 clamp-1 [--minv-1:30] [--maxv-1:50] gap-[--clamp-1] lg:gap-0 group-[&.collection]/sub-menu:grid-cols-3 group-[&.collection]/sub-menu:[--maxv-1:40]
                                          scrollbar scrollbar-w-0.5 scrollbar-track-rounded-1 scrollbar-thumb-rounded-1 scrollbar-thumb-white scrollbar-track-white/0 overflow-x-hidden overflow-y-auto
                                          min-lg:max-h-[224px] lg:grid-cols-2 lg:group-[&.collection]/sub-menu:grid-cols-2
                                          ">
                                                    <li>
                                                        <div class="mobile-view hidden lg:block">
                                                            <div class="border border-black/15 border-t-0 odd:border-l-0 even:border-l-0 even:border-r-transparent">
                                                                <a href="product.html" class="text flex flex-col gap-[12px] w-full text-[16px] leading-tight text-main-500 px-[30px] sm:px-[24px] lg:py-[12px] lg:border-0 lg:border-b lg:border-main-500/30 [--index:1]">
                                                                    <div class="image aspect-square w-full h-auto overflow-clip translate-z-0">
                                                                        <img src="{{asset('assets/image/photo/sub-menu-3.webp')}}" class="full-cover" alt="">
                                                                    </div>
                                                                    <p class="text">Archer</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <a href="product.html" class="group/link flex justify-between items-center border border-white/10 min-lg:rounded-[14px] duration-300 hover:bg-white/5 lg:px-[40px] sm:px-[34px] lg:py-[20px] lg:border-0 lg:border-b lg:border-main-500/30 lg:hidden">
                                                            <div class="text-field flex flex-col min-lg:pl-5 min-lg:pr-[30px] lg:hidden">
                                                                <p class="text clamp-fs [--minv-fs:16] [--maxv-fs:18] [font-size:--clamp-fs] leading-tight min-lg:font-medium text-white duration-300 group-hover/link:text-white lg:text-main-500 min-lg:[-webkit-text-stroke:1px_transparent] min-lg:group-hover/link:[-webkit-text-stroke:1px_#FFFFFF] whitespace-nowrap lg:group-hover/link:text-main-400">Archer</p>
                                                                <div class="extra-text hidden group-[&.collection]/sub-menu:grid lg:!hidden grid-rows-[0fr] group-hover/link:grid-rows-[1fr] duration-300">
                                                                    <div class="overflow-wrapper overflow-hidden">
                                                                        <div class="flex items-center gap-2 mt-2">
                                                                            <i class="icon icon-arrow-right-top clamp-fs [--minv-fs:8] [--maxv-fs:8] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300"></i>
                                                                            <p class="text clamp-fs [--minv-fs:12] [--maxv-fs:14] [font-size:--clamp-fs] leading-tight text-white/65 duration-300 group-hover/link:text-white delay-300">Ürünleri İncele</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="image-wrapper lg:hidden">
                                                                <div class="image aspect-[130/90] max-w-[130px] w-full h-auto overflow-clip translate-z-0 rounded-[14px]">
                                                                    <img src="{{asset('assets/image/photo/sub-menu-3.webp')}}" class="full-cover" alt="">
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="mobile-view hidden lg:block">
                                                            <div class="border border-black/15 border-t-0 odd:border-l-0 even:border-l-0 even:border-r-transparent">
                                                                <a href="product.html" class="text flex flex-col gap-[12px] w-full text-[16px] leading-tight text-main-500 px-[30px] sm:px-[24px] lg:py-[12px] lg:border-0 lg:border-b lg:border-main-500/30 [--index:2]">
                                                                    <div class="image aspect-square w-full h-auto overflow-clip translate-z-0">
                                                                        <img src="{{asset('assets/image/photo/sub-menu-4.webp')}}" class="full-cover" alt="">
                                                                    </div>
                                                                    <p class="text">Lyra</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <a href="product.html" class="group/link flex justify-between items-center border border-white/10 min-lg:rounded-[14px] duration-300 hover:bg-white/5 lg:px-[40px] sm:px-[34px] lg:py-[20px] lg:border-0 lg:border-b lg:border-main-500/30 lg:hidden">
                                                            <div class="text-field flex flex-col min-lg:pl-5 min-lg:pr-[30px] lg:hidden">
                                                                <p class="text clamp-fs [--minv-fs:16] [--maxv-fs:18] [font-size:--clamp-fs] leading-tight min-lg:font-medium text-white duration-300 group-hover/link:text-white lg:text-main-500 min-lg:[-webkit-text-stroke:1px_transparent] min-lg:group-hover/link:[-webkit-text-stroke:1px_#FFFFFF] whitespace-nowrap lg:group-hover/link:text-main-400">Lyra</p>
                                                                <div class="extra-text hidden group-[&.collection]/sub-menu:grid lg:!hidden grid-rows-[0fr] group-hover/link:grid-rows-[1fr] duration-300">
                                                                    <div class="overflow-wrapper overflow-hidden">
                                                                        <div class="flex items-center gap-2 mt-2">
                                                                            <i class="icon icon-arrow-right-top clamp-fs [--minv-fs:8] [--maxv-fs:8] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300"></i>
                                                                            <p class="text clamp-fs [--minv-fs:12] [--maxv-fs:14] [font-size:--clamp-fs] leading-tight text-white/65 duration-300 group-hover/link:text-white delay-300">Ürünleri İncele</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="image-wrapper lg:hidden">
                                                                <div class="image aspect-[130/90] max-w-[130px] w-full h-auto overflow-clip translate-z-0 rounded-[14px]">
                                                                    <img src="{{asset('assets/image/photo/sub-menu-4.webp')}}" class="full-cover" alt="">
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="mobile-view hidden lg:block">
                                                            <div class="border border-black/15 border-t-0 odd:border-l-0 even:border-l-0 even:border-r-transparent">
                                                                <a href="product.html" class="text flex flex-col gap-[12px] w-full text-[16px] leading-tight text-main-500 px-[30px] sm:px-[24px] lg:py-[12px] lg:border-0 lg:border-b lg:border-main-500/30 [--index:3]">
                                                                    <div class="image aspect-square w-full h-auto overflow-clip translate-z-0">
                                                                        <img src="{{asset('assets/image/photo/sub-menu-5.webp')}}" class="full-cover" alt="">
                                                                    </div>
                                                                    <p class="text">Orion</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <a href="product.html" class="group/link flex justify-between items-center border border-white/10 min-lg:rounded-[14px] duration-300 hover:bg-white/5 lg:px-[40px] sm:px-[34px] lg:py-[20px] lg:border-0 lg:border-b lg:border-main-500/30 lg:hidden">
                                                            <div class="text-field flex flex-col min-lg:pl-5 min-lg:pr-[30px] lg:hidden">
                                                                <p class="text clamp-fs [--minv-fs:16] [--maxv-fs:18] [font-size:--clamp-fs] leading-tight min-lg:font-medium text-white duration-300 group-hover/link:text-white lg:text-main-500 min-lg:[-webkit-text-stroke:1px_transparent] min-lg:group-hover/link:[-webkit-text-stroke:1px_#FFFFFF] whitespace-nowrap lg:group-hover/link:text-main-400">Orion</p>
                                                                <div class="extra-text hidden group-[&.collection]/sub-menu:grid lg:!hidden grid-rows-[0fr] group-hover/link:grid-rows-[1fr] duration-300">
                                                                    <div class="overflow-wrapper overflow-hidden">
                                                                        <div class="flex items-center gap-2 mt-2">
                                                                            <i class="icon icon-arrow-right-top clamp-fs [--minv-fs:8] [--maxv-fs:8] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300"></i>
                                                                            <p class="text clamp-fs [--minv-fs:12] [--maxv-fs:14] [font-size:--clamp-fs] leading-tight text-white/65 duration-300 group-hover/link:text-white delay-300">Ürünleri İncele</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="image-wrapper lg:hidden">
                                                                <div class="image aspect-[130/90] max-w-[130px] w-full h-auto overflow-clip translate-z-0 rounded-[14px]">
                                                                    <img src="{{asset('assets/image/photo/sub-menu-5.webp')}}" class="full-cover" alt="">
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="mobile-view hidden lg:block">
                                                            <div class="border border-black/15 border-t-0 odd:border-l-0 even:border-l-0 even:border-r-transparent">
                                                                <a href="product.html" class="text flex flex-col gap-[12px] w-full text-[16px] leading-tight text-main-500 px-[30px] sm:px-[24px] lg:py-[12px] lg:border-0 lg:border-b lg:border-main-500/30 [--index:4]">
                                                                    <div class="image aspect-square w-full h-auto overflow-clip translate-z-0">
                                                                        <img src="{{asset('assets/image/photo/sub-menu-6.webp')}}" class="full-cover" alt="">
                                                                    </div>
                                                                    <p class="text">Scorpius</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <a href="product.html" class="group/link flex justify-between items-center border border-white/10 min-lg:rounded-[14px] duration-300 hover:bg-white/5 lg:px-[40px] sm:px-[34px] lg:py-[20px] lg:border-0 lg:border-b lg:border-main-500/30 lg:hidden">
                                                            <div class="text-field flex flex-col min-lg:pl-5 min-lg:pr-[30px] lg:hidden">
                                                                <p class="text clamp-fs [--minv-fs:16] [--maxv-fs:18] [font-size:--clamp-fs] leading-tight min-lg:font-medium text-white duration-300 group-hover/link:text-white lg:text-main-500 min-lg:[-webkit-text-stroke:1px_transparent] min-lg:group-hover/link:[-webkit-text-stroke:1px_#FFFFFF] whitespace-nowrap lg:group-hover/link:text-main-400">Scorpius</p>
                                                                <div class="extra-text hidden group-[&.collection]/sub-menu:grid lg:!hidden grid-rows-[0fr] group-hover/link:grid-rows-[1fr] duration-300">
                                                                    <div class="overflow-wrapper overflow-hidden">
                                                                        <div class="flex items-center gap-2 mt-2">
                                                                            <i class="icon icon-arrow-right-top clamp-fs [--minv-fs:8] [--maxv-fs:8] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300"></i>
                                                                            <p class="text clamp-fs [--minv-fs:12] [--maxv-fs:14] [font-size:--clamp-fs] leading-tight text-white/65 duration-300 group-hover/link:text-white delay-300">Ürünleri İncele</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="image-wrapper lg:hidden">
                                                                <div class="image aspect-[130/90] max-w-[130px] w-full h-auto overflow-clip translate-z-0 rounded-[14px]">
                                                                    <img src="{{asset('assets/image/photo/sub-menu-6.webp')}}" class="full-cover" alt="">
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="mobile-view hidden lg:block">
                                                            <div class="border border-black/15 border-t-0 odd:border-l-0 even:border-l-0 even:border-r-transparent">
                                                                <a href="product.html" class="text flex flex-col gap-[12px] w-full text-[16px] leading-tight text-main-500 px-[30px] sm:px-[24px] lg:py-[12px] lg:border-0 lg:border-b lg:border-main-500/30 [--index:5]">
                                                                    <div class="image aspect-square w-full h-auto overflow-clip translate-z-0">
                                                                        <img src="{{asset('assets/image/photo/sub-menu-7.webp')}}" class="full-cover" alt="">
                                                                    </div>
                                                                    <p class="text">Canis</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <a href="product.html" class="group/link flex justify-between items-center border border-white/10 min-lg:rounded-[14px] duration-300 hover:bg-white/5 lg:px-[40px] sm:px-[34px] lg:py-[20px] lg:border-0 lg:border-b lg:border-main-500/30 lg:hidden">
                                                            <div class="text-field flex flex-col min-lg:pl-5 min-lg:pr-[30px] lg:hidden">
                                                                <p class="text clamp-fs [--minv-fs:16] [--maxv-fs:18] [font-size:--clamp-fs] leading-tight min-lg:font-medium text-white duration-300 group-hover/link:text-white lg:text-main-500 min-lg:[-webkit-text-stroke:1px_transparent] min-lg:group-hover/link:[-webkit-text-stroke:1px_#FFFFFF] whitespace-nowrap lg:group-hover/link:text-main-400">Canis</p>
                                                                <div class="extra-text hidden group-[&.collection]/sub-menu:grid lg:!hidden grid-rows-[0fr] group-hover/link:grid-rows-[1fr] duration-300">
                                                                    <div class="overflow-wrapper overflow-hidden">
                                                                        <div class="flex items-center gap-2 mt-2">
                                                                            <i class="icon icon-arrow-right-top clamp-fs [--minv-fs:8] [--maxv-fs:8] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300"></i>
                                                                            <p class="text clamp-fs [--minv-fs:12] [--maxv-fs:14] [font-size:--clamp-fs] leading-tight text-white/65 duration-300 group-hover/link:text-white delay-300">Ürünleri İncele</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="image-wrapper lg:hidden">
                                                                <div class="image aspect-[130/90] max-w-[130px] w-full h-auto overflow-clip translate-z-0 rounded-[14px]">
                                                                    <img src="{{asset('assets/image/photo/sub-menu-7.webp')}}" class="full-cover" alt="">
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="mobile-view hidden lg:block">
                                                            <div class="border border-black/15 border-t-0 odd:border-l-0 even:border-l-0 even:border-r-transparent">
                                                                <a href="product.html" class="text flex flex-col gap-[12px] w-full text-[16px] leading-tight text-main-500 px-[30px] sm:px-[24px] lg:py-[12px] lg:border-0 lg:border-b lg:border-main-500/30 [--index:6]">
                                                                    <div class="image aspect-square w-full h-auto overflow-clip translate-z-0">
                                                                        <img src="{{asset('assets/image/photo/sub-menu-8.webp')}}" class="full-cover" alt="">
                                                                    </div>
                                                                    <p class="text">Aspiz</p>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <a href="product.html" class="group/link flex justify-between items-center border border-white/10 min-lg:rounded-[14px] duration-300 hover:bg-white/5 lg:px-[40px] sm:px-[34px] lg:py-[20px] lg:border-0 lg:border-b lg:border-main-500/30 lg:hidden">
                                                            <div class="text-field flex flex-col min-lg:pl-5 min-lg:pr-[30px] lg:hidden">
                                                                <p class="text clamp-fs [--minv-fs:16] [--maxv-fs:18] [font-size:--clamp-fs] leading-tight min-lg:font-medium text-white duration-300 group-hover/link:text-white lg:text-main-500 min-lg:[-webkit-text-stroke:1px_transparent] min-lg:group-hover/link:[-webkit-text-stroke:1px_#FFFFFF] whitespace-nowrap lg:group-hover/link:text-main-400">Aspiz</p>
                                                                <div class="extra-text hidden group-[&.collection]/sub-menu:grid lg:!hidden grid-rows-[0fr] group-hover/link:grid-rows-[1fr] duration-300">
                                                                    <div class="overflow-wrapper overflow-hidden">
                                                                        <div class="flex items-center gap-2 mt-2">
                                                                            <i class="icon icon-arrow-right-top clamp-fs [--minv-fs:8] [--maxv-fs:8] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300"></i>
                                                                            <p class="text clamp-fs [--minv-fs:12] [--maxv-fs:14] [font-size:--clamp-fs] leading-tight text-white/65 duration-300 group-hover/link:text-white delay-300">Ürünleri İncele</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="image-wrapper lg:hidden">
                                                                <div class="image aspect-[130/90] max-w-[130px] w-full h-auto overflow-clip translate-z-0 rounded-[14px]">
                                                                    <img src="{{asset('assets/image/photo/sub-menu-8.webp')}}" class="full-cover" alt="">
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="relative lg:w-full group/menu-item ">
                                <a href="javascript:;" class="flex items-center group/link lg:px-[30px] sm:px-[24px] lg:py-[20px] lg:border-0 lg:border-b lg:border-main-500/30">
                                    <span class="text clamp-fs [--minv-fs:16] [--maxv-fs:18] [font-size:--clamp-fs] leading-tight font-medium duration-300 text-main-500 group-hover/link:text-main-400 group-[&.header-white]/header:text-white group-[&.header-white]/header:group-hover/link:text-white/80 group-[&.header-white.scrolling-up]/header:text-main-500 group-[&.header-white.scrolling-up]/header:group-hover/link:text-main-400 lg:group-[&.header-white]/header:text-main-400">Stelo Pro</span>
                                </a>
                            </li>
                            <li class="relative lg:w-full group/menu-item ">
                                <a href="gallery.html" class="flex items-center group/link lg:px-[30px] sm:px-[24px] lg:py-[20px] lg:border-0 lg:border-b lg:border-main-500/30">
                                    <span class="text clamp-fs [--minv-fs:16] [--maxv-fs:18] [font-size:--clamp-fs] leading-tight font-medium duration-300 text-main-500 group-hover/link:text-main-400 group-[&.header-white]/header:text-white group-[&.header-white]/header:group-hover/link:text-white/80 group-[&.header-white.scrolling-up]/header:text-main-500 group-[&.header-white.scrolling-up]/header:group-hover/link:text-main-400 lg:group-[&.header-white]/header:text-main-400">Galeri</span>
                                </a>
                            </li>
                            <li class="relative lg:w-full group/menu-item has-sub">
                                <a href="javascript:;" class="flex items-center group/link lg:px-[30px] sm:px-[24px] lg:py-[20px] lg:border-0 lg:border-b lg:border-main-500/30">
                                    <span class="text clamp-fs [--minv-fs:16] [--maxv-fs:18] [font-size:--clamp-fs] leading-tight font-medium duration-300 text-main-500 group-hover/link:text-main-400 group-[&.header-white]/header:text-white group-[&.header-white]/header:group-hover/link:text-white/80 group-[&.header-white.scrolling-up]/header:text-main-500 group-[&.header-white.scrolling-up]/header:group-hover/link:text-main-400 lg:group-[&.header-white]/header:text-main-400">Neden Stelo?</span>
                                </a>
                                <div class="sub-trigger group/sub-trigger absolute right-[30px] top-[15px] size-[30px] bg-main-500 justify-center items-center hidden cursor-pointer rounded-none duration-300 [&.active]:bg-main-300 lg:group-[&.has-sub]/menu-item:flex z-20 rtl:left-[30px] rtl:right-auto">
                                    <div class="icon w-0.5 h-4 sm:h-3 absolute left-1/2 -translate-x-1/2 bg-white duration-300 group-[&.active]/sub-trigger:rotate-90 rounded-full"></div>
                                    <div class="icon w-4 h-0.5 sm:w-3 bg-white duration-300 rounded-full"></div>
                                </div>
                                <!-- NOT: sub-menu ALANINA "collection" CLASSI EKLENİRSE, GRİD YAPISI ÜÇLÜYE DÖNER. -->
                                <!-- NOT: sub-menu ALANINDAN "collection" CLASSI KALDIRILIRSA, GRİD YAPISI İKİYE DÖNER. -->
                                <div class="sub-menu min-lg:absolute min-lg:w-max min-lg:top-full min-lg:translate-y-[70px] min-lg:left-1/2 min-lg:translate-x-[calc(-50%+80px)] min-lg:pointer-events-none min-lg:opacity-0 min-lg:invisible duration-300
                              before:absolute before:left-0 before:w-full before:h-[70px] before:top-[-70px] before:duration-300 before:bg-transparent
                              min-lg:group-hover/menu-item:translate-y-[50px] min-lg:group-hover/menu-item:pointer-events-auto min-lg:group-hover/menu-item:opacity-100 min-lg:group-hover/menu-item:visible
                              min-lg:group-hover/menu-item:before:h-[50px] min-lg:group-hover/menu-item:before:top-[-50px]
                              lg:before:hidden group/sub-menu

                              min-lg:[&.collection]:translate-x-[calc(-50%+225px)]
                              ">
                                    <div class="content min-lg:border min-lg:border-white/10 min-lg:bg-main-500 min-lg:rounded-[14px] lg:bg-transparent min-lg:p-[30px] relative">
                                        <div class="arrow absolute left-1/2 translate-x-[calc(-50%-80px)] size-[60px] bottom-full pointer-events-none
                                    before:bottom-0 before:left-1/2 before:border-solid before:border-transparent before:size-0 before:absolute before:pointer-events-none
                                    after:bottom-0 after:left-1/2 after:border-solid after:border-transparent after:size-0 after:absolute after:pointer-events-none
                                    before:border-b-[#535357] before:border-[28px] before:ml-[-28px]
                                    after:border-b-main-500 after:border-[26px] after:ml-[-26px] -z-10
                                    group-[&.collection]/sub-menu:translate-x-[calc(-50%-225px)] lg:hidden"></div>
                                        <div class="wrapper grid grid-rows-[0fr] duration-300 group-[&.active]/sub-menu:grid-rows-[1fr]">
                                            <div class="overflow-wrapper lg:overflow-hidden">
                                                <ul class="grid grid-cols-2 clamp-1 [--minv-1:30] [--maxv-1:50] gap-[--clamp-1] lg:flex lg:flex-col lg:gap-0 group-[&.collection]/sub-menu:grid-cols-3 group-[&.collection]/sub-menu:[--maxv-1:40]
                                          scrollbar scrollbar-w-0.5 scrollbar-track-rounded-1 scrollbar-thumb-rounded-1 scrollbar-thumb-white scrollbar-track-white/0 overflow-x-hidden overflow-y-auto
                                          min-lg:max-h-[224px]
                                          ">
                                                    <li>
                                                        <a href="about.html" class="group/link flex justify-between items-center border border-white/10 min-lg:rounded-[14px] duration-300 hover:bg-white/5 lg:px-[40px] sm:px-[34px] lg:py-[20px] lg:border-0 lg:border-b lg:border-main-500/30">
                                                            <div class="text-field flex flex-col min-lg:pl-5 min-lg:pr-[30px]">
                                                                <p class="text clamp-fs [--minv-fs:16] [--maxv-fs:18] [font-size:--clamp-fs] leading-tight min-lg:font-medium text-white duration-300 group-hover/link:text-white lg:text-main-500 min-lg:[-webkit-text-stroke:1px_transparent] min-lg:group-hover/link:[-webkit-text-stroke:1px_#FFFFFF] whitespace-nowrap lg:group-hover/link:text-main-400">Hakkımızda</p>
                                                                <div class="extra-text hidden group-[&.collection]/sub-menu:grid lg:!hidden grid-rows-[0fr] group-hover/link:grid-rows-[1fr] duration-300">
                                                                    <div class="overflow-wrapper overflow-hidden">
                                                                        <div class="flex items-center gap-2 mt-2">
                                                                            <i class="icon icon-arrow-right-top clamp-fs [--minv-fs:8] [--maxv-fs:8] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300"></i>
                                                                            <p class="text clamp-fs [--minv-fs:12] [--maxv-fs:14] [font-size:--clamp-fs] leading-tight text-white/65 duration-300 group-hover/link:text-white delay-300">Ürünleri İncele</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="image-wrapper lg:hidden">
                                                                <div class="image aspect-[130/90] max-w-[130px] w-full h-auto overflow-clip translate-z-0 rounded-[14px]">
                                                                    <img src="{{asset('assets/image/photo/sub-menu-1.webp')}}" class="full-cover" alt="">
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="why.html" class="group/link flex justify-between items-center border border-white/10 min-lg:rounded-[14px] duration-300 hover:bg-white/5 lg:px-[40px] sm:px-[34px] lg:py-[20px] lg:border-0 lg:border-b lg:border-main-500/30">
                                                            <div class="text-field flex flex-col min-lg:pl-5 min-lg:pr-[30px]">
                                                                <p class="text clamp-fs [--minv-fs:16] [--maxv-fs:18] [font-size:--clamp-fs] leading-tight min-lg:font-medium text-white duration-300 group-hover/link:text-white lg:text-main-500 min-lg:[-webkit-text-stroke:1px_transparent] min-lg:group-hover/link:[-webkit-text-stroke:1px_#FFFFFF] whitespace-nowrap lg:group-hover/link:text-main-400">Neden Kuvars?</p>
                                                                <div class="extra-text hidden group-[&.collection]/sub-menu:grid lg:!hidden grid-rows-[0fr] group-hover/link:grid-rows-[1fr] duration-300">
                                                                    <div class="overflow-wrapper overflow-hidden">
                                                                        <div class="flex items-center gap-2 mt-2">
                                                                            <i class="icon icon-arrow-right-top clamp-fs [--minv-fs:8] [--maxv-fs:8] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300"></i>
                                                                            <p class="text clamp-fs [--minv-fs:12] [--maxv-fs:14] [font-size:--clamp-fs] leading-tight text-white/65 duration-300 group-hover/link:text-white delay-300">Ürünleri İncele</p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="image-wrapper lg:hidden">
                                                                <div class="image aspect-[130/90] max-w-[130px] w-full h-auto overflow-clip translate-z-0 rounded-[14px]">
                                                                    <img src="{{asset('assets/image/photo/sub-menu-2.webp')}}" class="full-cover" alt="">
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="relative lg:w-full group/menu-item ">
                                <a href="blog.html" class="flex items-center group/link lg:px-[30px] sm:px-[24px] lg:py-[20px] lg:border-0 lg:border-b lg:border-main-500/30">
                                    <span class="text clamp-fs [--minv-fs:16] [--maxv-fs:18] [font-size:--clamp-fs] leading-tight font-medium duration-300 text-main-500 group-hover/link:text-main-400 group-[&.header-white]/header:text-white group-[&.header-white]/header:group-hover/link:text-white/80 group-[&.header-white.scrolling-up]/header:text-main-500 group-[&.header-white.scrolling-up]/header:group-hover/link:text-main-400 lg:group-[&.header-white]/header:text-main-400">Blog</span>
                                </a>
                            </li>
                            <li class="relative lg:w-full group/menu-item ">
                                <a href="contact.html" class="flex items-center group/link lg:px-[30px] sm:px-[24px] lg:py-[20px] lg:border-0 lg:border-b lg:border-main-500/30">
                                    <span class="text clamp-fs [--minv-fs:16] [--maxv-fs:18] [font-size:--clamp-fs] leading-tight font-medium duration-300 text-main-500 group-hover/link:text-main-400 group-[&.header-white]/header:text-white group-[&.header-white]/header:group-hover/link:text-white/80 group-[&.header-white.scrolling-up]/header:text-main-500 group-[&.header-white.scrolling-up]/header:group-hover/link:text-main-400 lg:group-[&.header-white]/header:text-main-400">İletişim</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="other-menu-wrapper flex items-center clamp-1 [--minv-1:20] [--maxv-1:52] gap-[--clamp-1] lg:gap-[30px] md:gap-[20px] sm:gap-[16px]">
                    <div class="search-wrapper group/search">
                        <button class="flex items-center justify-center group/link clamp-1 [--minv-1:20] [--maxv-1:24] size-[--clamp-1] shrink-0" popovertarget="search" popovertargetaction="show">
                            <i class="icon icon-search clamp-fs [--minv-fs:16] [--maxv-fs:18] [font-size:--clamp-fs] h-[--clamp-fs] block leading-none duration-300 text-main-500 group-hover/link:text-main-400 group-[&.header-white]/header:text-white group-[&.header-white]/header:group-hover/link:text-white/80 group-hover/link:rotate-12 group-[&.header-white.scrolling-up]/header:text-main-500 group-[&.header-white.scrolling-up]/header:group-hover/link:text-main-400 group-[&.menu-active]/header:text-main-500
                     group-[&.header-white.menu-active]/header:group-hover/search:text-main-500
                     "></i>
                        </button>
                    </div>
                    <div class="language-wrapper relative group/language lg:group-[&.mobile-menu-2]/header:hidden">
                        <div class="current-language">
                            <a href="javascript:void(0)" class="flex group/link">
                                <div class="image aspect-square clamp-1 [--minv-1:20] [--maxv-1:24] max-w-[--clamp-1] w-full h-auto overflow-clip translate-z-0 rounded-full">
                                    <img src="{{asset('assets/image/static/flag-tr.webp')}}" class="full-cover" alt="">
                                </div>
                            </a>
                        </div>
                        <div class="other-language absolute right-0 top-full w-max duration-300 opacity-0 invisible translate-y-[30px] pointer-events-none group-hover/language:pointer-events-auto before:absolute before:left-0 before:w-full before:h-[30px] before:-top-[30px] before:bg-transparent before:duration-300 group-hover/language:opacity-100 group-hover/language:visible group-hover/language:translate-y-[20px] group-hover/language:before:h-[20px] group-hover/language:before:-top-[20px]">
                            <!-- NOT: "with-grid" EKLENİRSE, 2'Lİ GRİD YAPISINA GEÇER. -->
                            <!-- NOT: "with-grid" KALDIRILIRSA, ALT ALTA LİSTELENİR. -->
                            <div class="content bg-white p-[16px] rounded-[8px] flex flex-col gap-[12px] shadow-[0px_10px_20px_0px_rgba(0,0,0,0.05)] [&.with-grid]:grid [&.with-grid]:grid-cols-2">
                                <a href="javascript:void(0)" class="flex items-center gap-[12px] group/link w-fit">
                                    <div class="image aspect-square max-w-[20px] w-full h-auto overflow-clip translate-z-0 shrink-0">
                                        <img src="{{asset('assets/image/static/flag-en.webp')}}" class="full-cover" alt="" />
                                    </div>
                                    <p class="text clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] leading-tight font-medium duration-300 text-main-500 group-hover/link:text-main-400 uppercase">en</p>
                                </a>
                                <a href="javascript:void(0)" class="flex items-center gap-[12px] group/link w-fit">
                                    <div class="image aspect-square max-w-[20px] w-full h-auto overflow-clip translate-z-0 shrink-0">
                                        <img src="{{asset('assets/image/static/flag-es.webp')}}" class="full-cover" alt="" />
                                    </div>
                                    <p class="text clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] leading-tight font-medium duration-300 text-main-500 group-hover/link:text-main-400 uppercase">es</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="menu-trigger hidden lg:flex items-center clamp-1 [--minv-1:12] [--maxv-1:40] gap-[--clamp-1] group/menu cursor-pointer group-[&.menu-active]/header:">
                        <div class="relative cursor-pointer group/close size-[32px] duration-300 flex flex-col gap-[10px]">
                            <div class="line w-[32px] h-[1px] absolute left-1/2 -translate-x-1/2 top-1/2 translate-y-[calc(-50%-5px)] duration-300 group-[&.menu-active]/header:rotate-45 group-[&.menu-active]/header:translate-y-[calc(-50%-10px)] group-[&.menu-active]/header:mt-2.5
                     bg-main-500 group-hover/menu:bg-main-400 group-[&.header-white]/header:bg-white group-[&.header-white]/header:group-hover/link:bg-white/80 group-[&.scrolling-up]/header:bg-main-400 group-[&.menu-active]/header:bg-main-400"></div>
                            <div class="line w-[32px] h-[1px] absolute left-1/2 -translate-x-1/2 top-1/2 translate-y-[calc(-50%+5px)] duration-300 group-[&.menu-active]/header:-rotate-45 group-[&.menu-active]/header:translate-y-[calc(-50%-10px)] group-[&.menu-active]/header:mt-2.5
                     bg-main-500 group-hover/menu:bg-main-400 group-[&.header-white]/header:bg-white group-[&.header-white]/header:group-hover/link:bg-white/80 group-[&.scrolling-up]/header:bg-main-400 group-[&.menu-active]/header:bg-main-400"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-menu-wrapper fixed left-0 w-full hidden z-20 lg:group-[&.mobile-menu-2]/header:flex
   -translate-x-full duration-300 ease-in-out group-[&.menu-active]/header:translate-x-0
   top-[--header-height] group-[&.scrolling-up]/header:top-[calc(var(--header-height)-40px)] lg:group-[&.scrolling-up]/header:top-[calc(var(--header-height)-20px)]
   h-[calc(100dvh-var(--header-height))] group-[&.scrolling-up]/header:h-[calc(100dvh-var(--header-height)+40px)] lg:group-[&.scrolling-up]/header:h-[calc(100dvh-var(--header-height)+20px)]
   ">
        <div class="content bg-white w-full h-full">
            <div class="mobile-menu-list h-full flex flex-col justify-between">
                <ul class="flex flex-col w-full scrollbar scrollbar-w-1 scrollbar-track-rounded-2 scrollbar-thumb-rounded-2 scrollbar-thumb-main-500 scrollbar-track-main-500/0 overflow-x-hidden overflow-y-auto max-h-[calc(100dvh-var(--header-height))]" data-detect-scroll-position="fade-y">
                    <li class="relative group/menu-item has-sub duration-300 -translate-x-10 opacity-0 group-[&.menu-active]/header:opacity-100 group-[&.menu-active]/header:translate-x-0 group-[&.menu-active]/header:delay-[calc(300ms+(100ms*var(--index)))]" style="--index:1">
                        <a href="product.html" class="text flex w-full text-[16px] leading-tight text-main-500 px-[30px] sm:px-[24px] lg:py-[20px] lg:border-0 lg:border-b lg:border-main-500/30">Koleksiyon</a>
                        <div class="sub-trigger group/sub-trigger absolute right-[30px] top-[15px] size-[30px] bg-main-500 justify-center items-center hidden cursor-pointer rounded-none duration-300 [&.active]:bg-main-300 lg:group-[&.has-sub]/menu-item:flex z-20 rtl:left-[30px] rtl:right-auto">
                            <div class="icon w-0.5 h-4 sm:h-3 absolute left-1/2 -translate-x-1/2 bg-white duration-300 group-[&.active]/sub-trigger:rotate-90 rounded-full"></div>
                            <div class="icon w-4 h-0.5 sm:w-3 bg-white duration-300 rounded-full"></div>
                        </div>
                        <div class="sub-menu-wrapper grid grid-rows-[0fr] duration-300 [&.active]:grid-rows-[1fr]">
                            <div class="overflow-wrapper overflow-hidden">
                                <ul class="grid grid-cols-2 gap-0">
                                    <li class="border border-black/15 border-t-0 odd:border-l-0 even:border-l-0 even:border-r-transparent">
                                        <a href="product.html" class="text flex flex-col gap-[12px] w-full text-[16px] leading-tight text-main-500 px-[30px] sm:px-[24px] lg:py-[12px] lg:border-0 lg:border-b lg:border-main-500/30 [--index:1]">
                                            <div class="image aspect-square w-full h-auto overflow-clip translate-z-0">
                                                <img src="{{asset('assets/image/photo/sub-menu-3.webp')}}" class="full-cover" alt="">
                                            </div>
                                            <p class="text">Archer</p>
                                        </a>
                                    </li>
                                    <li class="border border-black/15 border-t-0 odd:border-l-0 even:border-l-0 even:border-r-transparent">
                                        <a href="product.html" class="text flex flex-col gap-[12px] w-full text-[16px] leading-tight text-main-500 px-[30px] sm:px-[24px] lg:py-[12px] lg:border-0 lg:border-b lg:border-main-500/30 [--index:2]">
                                            <div class="image aspect-square w-full h-auto overflow-clip translate-z-0">
                                                <img src="{{asset('assets/image/photo/sub-menu-4.webp')}}" class="full-cover" alt="">
                                            </div>
                                            <p class="text">Lyra</p>
                                        </a>
                                    </li>
                                    <li class="border border-black/15 border-t-0 odd:border-l-0 even:border-l-0 even:border-r-transparent">
                                        <a href="product.html" class="text flex flex-col gap-[12px] w-full text-[16px] leading-tight text-main-500 px-[30px] sm:px-[24px] lg:py-[12px] lg:border-0 lg:border-b lg:border-main-500/30 [--index:3]">
                                            <div class="image aspect-square w-full h-auto overflow-clip translate-z-0">
                                                <img src="{{asset('assets/image/photo/sub-menu-5.webp')}}" class="full-cover" alt="">
                                            </div>
                                            <p class="text">Orion</p>
                                        </a>
                                    </li>
                                    <li class="border border-black/15 border-t-0 odd:border-l-0 even:border-l-0 even:border-r-transparent">
                                        <a href="product.html" class="text flex flex-col gap-[12px] w-full text-[16px] leading-tight text-main-500 px-[30px] sm:px-[24px] lg:py-[12px] lg:border-0 lg:border-b lg:border-main-500/30 [--index:4]">
                                            <div class="image aspect-square w-full h-auto overflow-clip translate-z-0">
                                                <img src="{{asset('assets/image/photo/sub-menu-6.webp')}}" class="full-cover" alt="">
                                            </div>
                                            <p class="text">Scorpius</p>
                                        </a>
                                    </li>
                                    <li class="border border-black/15 border-t-0 odd:border-l-0 even:border-l-0 even:border-r-transparent">
                                        <a href="product.html" class="text flex flex-col gap-[12px] w-full text-[16px] leading-tight text-main-500 px-[30px] sm:px-[24px] lg:py-[12px] lg:border-0 lg:border-b lg:border-main-500/30 [--index:5]">
                                            <div class="image aspect-square w-full h-auto overflow-clip translate-z-0">
                                                <img src="{{asset('assets/image/photo/sub-menu-7.webp')}}" class="full-cover" alt="">
                                            </div>
                                            <p class="text">Canis</p>
                                        </a>
                                    </li>
                                    <li class="border border-black/15 border-t-0 odd:border-l-0 even:border-l-0 even:border-r-transparent">
                                        <a href="product.html" class="text flex flex-col gap-[12px] w-full text-[16px] leading-tight text-main-500 px-[30px] sm:px-[24px] lg:py-[12px] lg:border-0 lg:border-b lg:border-main-500/30 [--index:6]">
                                            <div class="image aspect-square w-full h-auto overflow-clip translate-z-0">
                                                <img src="{{asset('assets/image/photo/sub-menu-8.webp')}} " class="full-cover" alt="">
                                            </div>
                                            <p class="text">Aspiz</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="relative group/menu-item  duration-300 -translate-x-10 opacity-0 group-[&.menu-active]/header:opacity-100 group-[&.menu-active]/header:translate-x-0 group-[&.menu-active]/header:delay-[calc(300ms+(100ms*var(--index)))]" style="--index:2">
                        <a href="javascript:;" class="text flex w-full text-[16px] leading-tight text-main-500 px-[30px] sm:px-[24px] lg:py-[20px] lg:border-0 lg:border-b lg:border-main-500/30">Stelo Pro</a>
                    </li>
                    <li class="relative group/menu-item  duration-300 -translate-x-10 opacity-0 group-[&.menu-active]/header:opacity-100 group-[&.menu-active]/header:translate-x-0 group-[&.menu-active]/header:delay-[calc(300ms+(100ms*var(--index)))]" style="--index:3">
                        <a href="gallery.html" class="text flex w-full text-[16px] leading-tight text-main-500 px-[30px] sm:px-[24px] lg:py-[20px] lg:border-0 lg:border-b lg:border-main-500/30">Galeri</a>
                    </li>
                    <li class="relative group/menu-item has-sub duration-300 -translate-x-10 opacity-0 group-[&.menu-active]/header:opacity-100 group-[&.menu-active]/header:translate-x-0 group-[&.menu-active]/header:delay-[calc(300ms+(100ms*var(--index)))]" style="--index:4">
                        <a href="javascript:;" class="text flex w-full text-[16px] leading-tight text-main-500 px-[30px] sm:px-[24px] lg:py-[20px] lg:border-0 lg:border-b lg:border-main-500/30">Neden Stelo?</a>
                        <div class="sub-trigger group/sub-trigger absolute right-[30px] top-[15px] size-[30px] bg-main-500 justify-center items-center hidden cursor-pointer rounded-none duration-300 [&.active]:bg-main-300 lg:group-[&.has-sub]/menu-item:flex z-20 rtl:left-[30px] rtl:right-auto">
                            <div class="icon w-0.5 h-4 sm:h-3 absolute left-1/2 -translate-x-1/2 bg-white duration-300 group-[&.active]/sub-trigger:rotate-90 rounded-full"></div>
                            <div class="icon w-4 h-0.5 sm:w-3 bg-white duration-300 rounded-full"></div>
                        </div>
                        <div class="sub-menu-wrapper grid grid-rows-[0fr] duration-300 [&.active]:grid-rows-[1fr]">
                            <div class="overflow-wrapper overflow-hidden">
                                <ul>
                                    <li>
                                        <a href="about.html" class="text flex w-full text-[16px] leading-tight text-main-500 px-[40px] sm:px-[34px] lg:py-[12px] lg:border-0 lg:border-b lg:border-main-500/30 [--index:1]">Hakkımızda</a>
                                    </li>
                                    <li>
                                        <a href="why.html" class="text flex w-full text-[16px] leading-tight text-main-500 px-[40px] sm:px-[34px] lg:py-[12px] lg:border-0 lg:border-b lg:border-main-500/30 [--index:2]">Neden Kuvars?</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="relative group/menu-item  duration-300 -translate-x-10 opacity-0 group-[&.menu-active]/header:opacity-100 group-[&.menu-active]/header:translate-x-0 group-[&.menu-active]/header:delay-[calc(300ms+(100ms*var(--index)))]" style="--index:5">
                        <a href="blog.html" class="text flex w-full text-[16px] leading-tight text-main-500 px-[30px] sm:px-[24px] lg:py-[20px] lg:border-0 lg:border-b lg:border-main-500/30">Blog</a>
                    </li>
                    <li class="relative group/menu-item  duration-300 -translate-x-10 opacity-0 group-[&.menu-active]/header:opacity-100 group-[&.menu-active]/header:translate-x-0 group-[&.menu-active]/header:delay-[calc(300ms+(100ms*var(--index)))]" style="--index:6">
                        <a href="contact.html" class="text flex w-full text-[16px] leading-tight text-main-500 px-[30px] sm:px-[24px] lg:py-[20px] lg:border-0 lg:border-b lg:border-main-500/30">İletişim</a>
                    </li>
                </ul>
                <!-- NOT: style="--index: 7" DEĞERİ, MENÜ OBJE SAYISININ +1 FAZLASI OLACAK ŞEKİLDE YAPILANDIRILMASI GEREKİYOR. -->
                <!-- ÖRNEK: MENÜDE 6 ADET MENÜ OBJESİ VARSA 6+1=7 DEĞERİ YAZILACAKTIR. HESAPLAMANIN BACKEND TARAFINDA YAPILMASI GEREKMEKTEDİR. -->
                <div class="other-content-wrapper px-[30px] sm:px-[24px] py-[20px] relative z-20 border-0 border-t border-main-500/30 duration-300 translate-y-10 opacity-0 group-[&.menu-active]/header:opacity-100 group-[&.menu-active]/header:translate-y-0 group-[&.menu-active]/header:delay-[calc(300ms+(100ms*var(--index)))]" style="--index: 7">
                    <div class="language-wrapper flex flex-wrap gap-[10px]">
                        <a href="javascript:void(0)" class="flex items-center gap-[12px] group/link w-fit">
                            <div class="image aspect-square max-w-[20px] w-full h-auto overflow-clip translate-z-0 shrink-0">
                                <img src="{{asset('assets/image/static/flag-tr.webp')}}" class="full-cover" alt="" />
                            </div>
                            <p class="text clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] leading-tight font-medium duration-300 text-main-500 group-hover/link:text-main-400 uppercase">tr</p>
                        </a>
                        <a href="javascript:void(0)" class="flex items-center gap-[12px] group/link w-fit">
                            <div class="image aspect-square max-w-[20px] w-full h-auto overflow-clip translate-z-0 shrink-0">
                                <img src="{{asset('assets/image/static/flag-es.webp')}}" class="full-cover" alt="" />
                            </div>
                            <p class="text clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] leading-tight font-medium duration-300 text-main-500 group-hover/link:text-main-400 uppercase">es</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>



