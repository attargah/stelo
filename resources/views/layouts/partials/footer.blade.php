<footer class="footer-field block relative z-10 bg-main-500 ">
    <div class="footer-top clamp-1 [--minv-1:30] [--maxv-1:90] pt-[--clamp-1] pb-[100px] md:py-[--clamp-1]">
        <div class="container clamp-1 [--minv-1:1260] [--maxv-1:1920] max-w-[--clamp-1] px-[80px] lg:px-[30px] sm:px-[24px] mx-auto w-full">
            <div class="wrapper grid grid-cols-[minmax(0,6.4fr)_minmax(0,9.25fr)] clamp-1 [--minv-1:30] [--maxv-1:200] gap-[--clamp-1] lg:gap-[30px] md:grid-cols-1">
                <div class="logo-wrapper hidden md:block">
                    <div class="logo-field w-fit">
                        <a href="index.html" class="flex justify-start">
                            <div class="image overflow-clip max-w-[200px] w-full">

                                @empty($settings->site_logo)
                                    <svg class="w-full h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 248 74">
                                        <g id="letter">
                                            <path id="letter-s" class="letterletter-s fill-white" d="M32.86,47.32c-2.01-1.62-4.3-3.22-6.87-4.8-2.22-1.52-4.35-2.92-6.39-4.21-2.04-1.29-3.71-2.67-4.99-4.16-1.29-1.49-1.93-3.22-1.93-5.2,0-2.18.73-3.86,2.2-5.05,1.47-1.19,3.31-1.78,5.53-1.78,3.15,0,5.69.78,7.62,2.33,1.93,1.55,3.4,3.48,4.4,5.79,1,2.31,1.68,4.69,2.04,7.13h2.36c0-4.35.04-7.84.11-10.44.07-2.61.18-4.87.32-6.78h-2.36c-.5,3.76-1.97,4.82-4.4,3.17-1-.59-2.58-1.29-4.73-2.08s-4.73-1.19-7.73-1.19-5.96.51-8.65,1.53c-2.69,1.02-4.85,2.51-6.5,4.45-1.65,1.95-2.47,4.4-2.47,7.37,0,2.71.66,5.05,1.99,7.03,1.32,1.98,3.04,3.76,5.16,5.35,2.11,1.58,4.39,3.2,6.82,4.85,3.22,2.18,5.91,4.22,8.06,6.14,2.15,1.91,3.22,4.32,3.22,7.23,0,1.91-.41,3.43-1.24,4.55-.82,1.12-1.86,1.95-3.11,2.47-1.25.53-2.56.79-3.92.79-3.15,0-5.73-.78-7.73-2.33-2.01-1.55-3.53-3.69-4.56-6.43-1.04-2.74-1.81-5.92-2.31-9.55H.43c0,5.02-.04,9.04-.11,12.08-.07,3.04-.18,5.61-.32,7.72h2.36c.29-1.39.7-2.38,1.24-2.97.54-.59,1.16-.73,1.88-.4.79.27,1.56.59,2.31.99.75.4,1.59.83,2.52,1.29,1.22.53,2.61.96,4.19,1.29,1.57.33,3.33.49,5.26.49,3.58,0,6.86-.58,9.83-1.73,2.97-1.15,5.37-2.8,7.2-4.95,1.83-2.14,2.74-4.73,2.74-7.77,0-2.64-.61-4.93-1.83-6.88-1.22-1.95-2.83-3.73-4.83-5.35h0Z" />
                                            <path id="letter-t" class="letterletter-t fill-white" d="M76.79,67.72c-1.36,1.16-2.86,1.73-4.51,1.73s-3.04-.49-3.97-1.49c-.93-.99-1.4-2.67-1.4-5.05V23.52h13.75v-1.98h-13.75V0s-.05.02-.07.03c-1.69,1.76-3.64,3.17-5.86,4.2-2.33,1.08-4.86,1.83-7.6,2.26v15.05h-9.45v1.98h9.45v33.36c0,3.5.27,6.3.81,8.41.54,2.11,1.59,3.93,3.17,5.44,1.22,1.06,2.67,1.87,4.35,2.42,1.68.56,3.74.84,6.18.84,4.08,0,7.25-1.07,9.5-3.22,2.26-2.14,3.92-4.83,4.99-8.07l-1.93-.79c-1.07,2.71-2.29,4.64-3.65,5.79h0Z" />
                                            <path id="letter-e" class="letterletter-e fill-white" d="M100.24,42.03h31.22c0-7.65-1.79-13.23-5.37-16.73-3.58-3.5-8.52-5.25-14.82-5.25-4.94,0-9.34,1.07-13.21,3.22-3.87,2.15-6.89,5.26-9.07,9.35-2.19,4.09-3.28,9.14-3.28,15.15,0,5.68,1.04,10.48,3.11,14.4,2.08,3.93,4.98,6.88,8.7,8.86,3.72,1.98,8.02,2.97,12.89,2.97,3.87,0,7.23-.73,10.1-2.18,2.86-1.45,5.21-3.32,7.04-5.59,1.83-2.28,3.13-4.57,3.92-6.88l-2.04-.79c-1.36,2.31-2.87,4.09-4.51,5.35-1.65,1.25-3.33,2.11-5.05,2.57-1.72.46-3.4.69-5.05.69-2.43,0-4.8-.69-7.09-2.08-2.29-1.39-4.15-3.56-5.59-6.53-1.43-2.97-2.15-6.73-2.15-11.28,0-.99.02-1.98.05-2.97.03-.8.1-1.56.19-2.28h0ZM104.11,26.54c2-2.94,4.37-4.4,7.09-4.4,2,0,3.63.83,4.89,2.47,1.25,1.65,2.17,3.84,2.74,6.58.57,2.74.79,5.73.64,8.96h-19.05c.54-6.25,1.77-10.79,3.69-13.61h0Z" />
                                            <path id="letter-l" class="letterletter-l fill-white" d="M158.63,64.8V0s-.05.02-.07.03c-1.69,1.76-3.65,3.17-5.86,4.2-2.33,1.08-4.86,1.83-7.6,2.26v58.31c0,2.77-.56,4.65-1.66,5.64-1.11.99-2.99,1.49-5.64,1.49v2.08c1.36-.07,3.42-.15,6.18-.25,2.76-.1,5.46-.15,8.11-.15s5.39.05,8,.15c2.61.1,4.56.18,5.85.25v-2.08c-2.65,0-4.53-.49-5.64-1.49-1.11-.99-1.66-2.87-1.66-5.64Z" />
                                            <path id="letter-o" class="letterletter-o fill-white" d="M210.34,22.78c-3.83-1.81-8.22-2.72-13.16-2.72s-9.34.91-13.21,2.72c-3.87,1.82-6.91,4.7-9.13,8.66-2.22,3.96-3.33,9.17-3.33,15.64s1.11,11.68,3.33,15.64c2.22,3.96,5.26,6.83,9.13,8.61,3.87,1.78,8.27,2.67,13.21,2.67s9.32-.89,13.16-2.67c3.83-1.78,6.87-4.65,9.13-8.61,2.26-3.96,3.38-9.17,3.38-15.64s-1.13-11.68-3.38-15.64c-2.25-3.96-5.3-6.84-9.13-8.66ZM205.35,66.18c-2.15,3.89-4.87,5.84-8.16,5.84s-6.1-1.95-8.22-5.84c-2.11-3.89-3.17-10.26-3.17-19.1s1.06-15.23,3.17-19.15c2.11-3.93,4.85-5.89,8.22-5.89s6.01,1.96,8.16,5.89c2.15,3.93,3.22,10.31,3.22,19.15s-1.07,15.21-3.22,19.1Z" />
                                        </g>
                                        <g id="shine">
                                            <path id="shine-1" class="shine shine-1 fill-white" d="M243.34,15.88h0c-1.48-.42-2.9-.94-4.25-1.58-3.83-1.82-6.87-4.7-9.13-8.66-.94-1.66-1.69-3.54-2.24-5.64h0s0,0,0,0c-.55,2.1-1.29,3.98-2.24,5.64-2.25,3.96-5.3,6.84-9.13,8.66-1.35.64-2.76,1.16-4.25,1.58h0s0,0,0,0c1.48.41,2.9.94,4.25,1.57,3.83,1.82,6.87,4.7,9.13,8.66.95,1.66,1.69,3.54,2.24,5.64h0s0,0,0,0c.55-2.1,1.29-3.98,2.24-5.64,2.26-3.96,5.3-6.84,9.13-8.66,1.35-.64,2.76-1.16,4.25-1.57h0Z" />
                                            <path id="shine-2" class="shine shine-2 fill-white" d="M248,4.47c-.42-.12-.82-.26-1.2-.44-1.08-.51-1.93-1.32-2.57-2.44-.27-.47-.48-1-.63-1.59-.15.59-.37,1.12-.63,1.59-.63,1.11-1.49,1.93-2.57,2.44-.38.18-.78.33-1.2.44h0c.42.12.82.27,1.2.44,1.08.51,1.93,1.32,2.57,2.44.27.47.48,1,.63,1.59.15-.59.36-1.12.63-1.59.64-1.11,1.49-1.93,2.57-2.44.38-.18.78-.33,1.2-.44h0Z" />
                                            <path id="shine-3" class="shine shine-3 fill-white" d="M246.81,26.84c-1.08-.51-1.93-1.32-2.57-2.44-.27-.47-.48-1-.63-1.59-.15.59-.37,1.12-.63,1.59-.63,1.11-1.49,1.93-2.57,2.44-.38.18-.78.33-1.2.44h0c.42.12.82.27,1.2.44,1.08.51,1.93,1.32,2.57,2.44.27.47.48,1,.63,1.59.15-.59.36-1.12.63-1.59.64-1.11,1.49-1.93,2.57-2.44.38-.18.78-.33,1.2-.44h0c-.42-.12-.82-.27-1.2-.44Z" />
                                        </g>
                                    </svg>
                                @else
                                    <img src="{{ Storage::url($settings->site_logo) }}" width="400" alt="{{ $settings->site_name }}">
                                @endempty

                            </div>
                        </a>
                    </div>
                </div>
                <div class="footer-menu-wrapper">
                    <div class="flex min-md:justify-between sm:flex-col gap-10 sm:gap-[30px]">
                        <div class="menu-footer-item group/mfi">
                            <div class="title-field flex items-center gap-[14px]">
                                <i class="icon icon-favicon clamp-fs [--minv-fs:18] [--maxv-fs:20] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300 group-[&.active]/mfi:rotate-90"></i>
                                <p class="title clamp-fs [--minv-fs:22] [--maxv-fs:32] [font-size:--clamp-fs] leading-tight md:leading-none text-white [font-family:var(--playfair)]">Kurumsal</p>
                            </div>
                            <div class="sm:grid sm:grid-rows-[0fr] sm:duration-300 group-[&.active]/mfi:grid-rows-[1fr]">
                                <div class="overflow-wrapper sm:overflow-hidden">
                                    <ul class="flex flex-col clamp-1 [--minv-1:14] [--maxv-1:24] gap-[--clamp-1] clamp-2 [--minv-2:20] [--maxv-2:42] mt-[--clamp-2] ">
                                        <!-- NOT: "li" OBJESİNDE; "hidden md:block" VARSA, SADECE MOBİLDE GÖRÜNÜYOR. -->
                                        <li class="">
                                            <a href="index.html" class="flex items-center group/link gap-4">
                                                <i class="icon-field size-[8px] rounded-full bg-white/25 duration-300 group-hover/link:bg-secondary-500"></i>
                                                <span class="text clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] leading-tight text-white/65 duration-300 group-hover/link:text-white">Anasayfa</span>
                                            </a>
                                        </li>
                                        <!-- NOT: "li" OBJESİNDE; "hidden md:block" VARSA, SADECE MOBİLDE GÖRÜNÜYOR. -->
                                        <li class="">
                                            <a href="why.html" class="flex items-center group/link gap-4">
                                                <i class="icon-field size-[8px] rounded-full bg-white/25 duration-300 group-hover/link:bg-secondary-500"></i>
                                                <span class="text clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] leading-tight text-white/65 duration-300 group-hover/link:text-white">Neden Kuvars?</span>
                                            </a>
                                        </li>
                                        <!-- NOT: "li" OBJESİNDE; "hidden md:block" VARSA, SADECE MOBİLDE GÖRÜNÜYOR. -->
                                        <li class="">
                                            <a href="about.html" class="flex items-center group/link gap-4">
                                                <i class="icon-field size-[8px] rounded-full bg-white/25 duration-300 group-hover/link:bg-secondary-500"></i>
                                                <span class="text clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] leading-tight text-white/65 duration-300 group-hover/link:text-white">Hakkımızda</span>
                                            </a>
                                        </li>
                                        <!-- NOT: "li" OBJESİNDE; "hidden md:block" VARSA, SADECE MOBİLDE GÖRÜNÜYOR. -->
                                        <li class="">
                                            <a href="use-care.html" class="flex items-center group/link gap-4">
                                                <i class="icon-field size-[8px] rounded-full bg-white/25 duration-300 group-hover/link:bg-secondary-500"></i>
                                                <span class="text clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] leading-tight text-white/65 duration-300 group-hover/link:text-white">Kullanım &amp; Bakım</span>
                                            </a>
                                        </li>
                                        <!-- NOT: "li" OBJESİNDE; "hidden md:block" VARSA, SADECE MOBİLDE GÖRÜNÜYOR. -->
                                        <li class="">
                                            <a href="gallery.html" class="flex items-center group/link gap-4">
                                                <i class="icon-field size-[8px] rounded-full bg-white/25 duration-300 group-hover/link:bg-secondary-500"></i>
                                                <span class="text clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] leading-tight text-white/65 duration-300 group-hover/link:text-white">Galeri</span>
                                            </a>
                                        </li>
                                        <!-- NOT: "li" OBJESİNDE; "hidden md:block" VARSA, SADECE MOBİLDE GÖRÜNÜYOR. -->
                                        <li class="">
                                            <a href="blog.html" class="flex items-center group/link gap-4">
                                                <i class="icon-field size-[8px] rounded-full bg-white/25 duration-300 group-hover/link:bg-secondary-500"></i>
                                                <span class="text clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] leading-tight text-white/65 duration-300 group-hover/link:text-white">Blog</span>
                                            </a>
                                        </li>
                                        <!-- NOT: "li" OBJESİNDE; "hidden md:block" VARSA, SADECE MOBİLDE GÖRÜNÜYOR. -->
                                        <li class="">
                                            <a href="contact.html" class="flex items-center group/link gap-4">
                                                <i class="icon-field size-[8px] rounded-full bg-white/25 duration-300 group-hover/link:bg-secondary-500"></i>
                                                <span class="text clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] leading-tight text-white/65 duration-300 group-hover/link:text-white">İletişim</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="menu-footer-item group/mfi">
                            <div class="title-field flex items-center gap-[14px]">
                                <i class="icon icon-favicon clamp-fs [--minv-fs:18] [--maxv-fs:20] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300 group-[&.active]/mfi:rotate-90"></i>
                                <p class="title clamp-fs [--minv-fs:22] [--maxv-fs:32] [font-size:--clamp-fs] leading-tight md:leading-none text-white [font-family:var(--playfair)]">Menü</p>
                            </div>
                            <div class="sm:grid sm:grid-rows-[0fr] sm:duration-300 group-[&.active]/mfi:grid-rows-[1fr]">
                                <div class="overflow-wrapper sm:overflow-hidden">
                                    <ul class="flex flex-col clamp-1 [--minv-1:14] [--maxv-1:24] gap-[--clamp-1] clamp-2 [--minv-2:20] [--maxv-2:42] mt-[--clamp-2] ">
                                        <!-- NOT: "li" OBJESİNDE; "hidden md:block" VARSA, SADECE MOBİLDE GÖRÜNÜYOR. -->
                                        <li class="">
                                            <a href="product.html" class="flex items-center group/link gap-4">
                                                <i class="icon-field size-[8px] rounded-full bg-white/25 duration-300 group-hover/link:bg-secondary-500"></i>
                                                <span class="text clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] leading-tight text-white/65 duration-300 group-hover/link:text-white">Koleksiyonlar</span>
                                            </a>
                                        </li>
                                        <!-- NOT: "li" OBJESİNDE; "hidden md:block" VARSA, SADECE MOBİLDE GÖRÜNÜYOR. -->
                                        <li class="">
                                            <a href="javascript:;" class="flex items-center group/link gap-4">
                                                <i class="icon-field size-[8px] rounded-full bg-white/25 duration-300 group-hover/link:bg-secondary-500"></i>
                                                <span class="text clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] leading-tight text-white/65 duration-300 group-hover/link:text-white">Online Broşür</span>
                                            </a>
                                        </li>
                                        <!-- NOT: "li" OBJESİNDE; "hidden md:block" VARSA, SADECE MOBİLDE GÖRÜNÜYOR. -->
                                        <li class="">
                                            <a href="javascript:;" class="flex items-center group/link gap-4">
                                                <i class="icon-field size-[8px] rounded-full bg-white/25 duration-300 group-hover/link:bg-secondary-500"></i>
                                                <span class="text clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] leading-tight text-white/65 duration-300 group-hover/link:text-white">Style Quiz</span>
                                            </a>
                                        </li>
                                        <!-- NOT: "li" OBJESİNDE; "hidden md:block" VARSA, SADECE MOBİLDE GÖRÜNÜYOR. -->
                                        <li class="">
                                            <a href="javascript:;" class="flex items-center group/link gap-4">
                                                <i class="icon-field size-[8px] rounded-full bg-white/25 duration-300 group-hover/link:bg-secondary-500"></i>
                                                <span class="text clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] leading-tight text-white/65 duration-300 group-hover/link:text-white">3D Visualizer</span>
                                            </a>
                                        </li>
                                        <!-- NOT: "li" OBJESİNDE; "hidden md:block" VARSA, SADECE MOBİLDE GÖRÜNÜYOR. -->
                                        <li class="">
                                            <a href="page.html" class="flex items-center group/link gap-4">
                                                <i class="icon-field size-[8px] rounded-full bg-white/25 duration-300 group-hover/link:bg-secondary-500"></i>
                                                <span class="text clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] leading-tight text-white/65 duration-300 group-hover/link:text-white">Gizlilk Politikası</span>
                                            </a>
                                        </li>
                                        <!-- NOT: "li" OBJESİNDE; "hidden md:block" VARSA, SADECE MOBİLDE GÖRÜNÜYOR. -->
                                        <li class="">
                                            <a href="page.html" class="flex items-center group/link gap-4">
                                                <i class="icon-field size-[8px] rounded-full bg-white/25 duration-300 group-hover/link:bg-secondary-500"></i>
                                                <span class="text clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] leading-tight text-white/65 duration-300 group-hover/link:text-white">KVKK Metni</span>
                                            </a>
                                        </li>
                                        <!-- NOT: "li" OBJESİNDE; "hidden md:block" VARSA, SADECE MOBİLDE GÖRÜNÜYOR. -->
                                        <li class="hidden md:block">
                                            <a href="javascript:;" class="flex items-center group/link gap-4">
                                                <i class="icon-field size-[8px] rounded-full bg-white/25 duration-300 group-hover/link:bg-secondary-500"></i>
                                                <span class="text clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] leading-tight text-white/65 duration-300 group-hover/link:text-white">Online Broşür</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="newsletter-wrapper">
                    <div class="title-field flex items-center gap-[14px]">
                        <i class="icon icon-favicon clamp-fs [--minv-fs:18] [--maxv-fs:20] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300"></i>
                        <p class="title clamp-fs [--minv-fs:22] [--maxv-fs:32] [font-size:--clamp-fs] leading-tight md:leading-none text-white [font-family:var(--playfair)]">E-Bülten</p>
                    </div>
                    <div class="form-wrapper clamp-1 [--minv-1:20] [--maxv-1:36] mt-[--clamp-1]">
                        <form action="#">
                            <div class="grid grid-cols-11 sm:grid-cols-1 gap-[24px]">
                                <div class="form-item group/item col-span-4 sm:col-span-1 sm:order-1">
                                    <div class="custom-input relative">
                                        <input type="email" placeholder="E-Posta Adresiniz..." class="w-full h-[64px] lg:h-[52px] rounded-full border border-white/10 bg-transparent text-[16px] font-medium text-white placeholder:text-white/65 clamp-1 [--minv-1:20] [--maxv-1:42] px-[--clamp-1] duration-300 hover:border-white/50 focus:border-white">
                                    </div>
                                </div>
                                <div class="form-item group/item col-span-4 sm:col-span-1 sm:order-2">
                                    <div class="custom-input relative">
                                        <input type="tel" placeholder="Telefon numaranız..." class="w-full h-[64px] lg:h-[52px] rounded-full border border-white/10 bg-transparent text-[16px] font-medium text-white placeholder:text-white/65 clamp-1 [--minv-1:20] [--maxv-1:42] px-[--clamp-1] duration-300 hover:border-white/50 focus:border-white">
                                    </div>
                                </div>
                                <div class="form-item group/item col-span-3 sm:col-span-1 sm:order-4">
                                    <button class="group/link flex items-center justify-center bg-secondary-500 clamp-1 [--minv-1:52] [--maxv-1:64] h-[--clamp-1] rounded-full gap-[10px] duration-300 hover:bg-secondary-600 w-full sm:w-full px-2">
                                        <span class="text text-[16px] leading-tight text-white font-medium">ABONE OL</span>
                                    </button>
                                </div>
                                <div class="form-item group/item col-span-12 sm:col-span-1 sm:order-3">
                                    <div class="custom-checkbox relative flex items-center gap-[10px] group/checkbox">
                                        <input type="checkbox" class="absolute left-0 top-0 w-full h-full z-[2] opacity-0 cursor-pointer peer">
                                        <div class="box relative size-[20px] rounded-full border border-white/10 peer-hover:border-white/50 peer-checked:!border-white duration-300 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:size-[10px] before:rounded-full before:bg-white before:duration-300 before:scale-0 peer-checked:before:scale-100 shrink-0"></div>
                                        <div class="text clamp-fs [--minv-fs:14] [--maxv-fs:16] [font-size:--clamp-fs] leading-tight text-white/65 [&_input]:text-white [&_input]:cursor-pointer [&_input]:duration-300 [&_input:hover]:text-white/70 [&_input]:relative [&_input]:z-[3] duration-300 peer-checked:text-white">Paylaştığım e-posta adresimin <input class="trigger" popovertarget="gdpr" popovertargetaction="show" type="button" value="Stelo e-bülten iletişiminde"> kullanılmasını onaylıyorum.</div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom clamp-1 [--minv-1:30] [--maxv-1:40] pb-[--clamp-1]">
        <div class="container clamp-1 [--minv-1:1260] [--maxv-1:1920] max-w-[--clamp-1] pl-[40px] pr-[80px] 2xl:px-[30px] sm:px-[24px] mx-auto w-full">
            <div class="wrapper grid grid-cols-[minmax(0,5.42fr)_minmax(0,12.17fr)] gap-10 md:grid-cols-1">
                <div class="logo-wrapper md:hidden">
                    @empty($settings->site_logo)
                        <svg class="w-full h-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 248 74">
                            <g id="letter">
                                <path id="letter-s" class="letterletter-s fill-white" d="M32.86,47.32c-2.01-1.62-4.3-3.22-6.87-4.8-2.22-1.52-4.35-2.92-6.39-4.21-2.04-1.29-3.71-2.67-4.99-4.16-1.29-1.49-1.93-3.22-1.93-5.2,0-2.18.73-3.86,2.2-5.05,1.47-1.19,3.31-1.78,5.53-1.78,3.15,0,5.69.78,7.62,2.33,1.93,1.55,3.4,3.48,4.4,5.79,1,2.31,1.68,4.69,2.04,7.13h2.36c0-4.35.04-7.84.11-10.44.07-2.61.18-4.87.32-6.78h-2.36c-.5,3.76-1.97,4.82-4.4,3.17-1-.59-2.58-1.29-4.73-2.08s-4.73-1.19-7.73-1.19-5.96.51-8.65,1.53c-2.69,1.02-4.85,2.51-6.5,4.45-1.65,1.95-2.47,4.4-2.47,7.37,0,2.71.66,5.05,1.99,7.03,1.32,1.98,3.04,3.76,5.16,5.35,2.11,1.58,4.39,3.2,6.82,4.85,3.22,2.18,5.91,4.22,8.06,6.14,2.15,1.91,3.22,4.32,3.22,7.23,0,1.91-.41,3.43-1.24,4.55-.82,1.12-1.86,1.95-3.11,2.47-1.25.53-2.56.79-3.92.79-3.15,0-5.73-.78-7.73-2.33-2.01-1.55-3.53-3.69-4.56-6.43-1.04-2.74-1.81-5.92-2.31-9.55H.43c0,5.02-.04,9.04-.11,12.08-.07,3.04-.18,5.61-.32,7.72h2.36c.29-1.39.7-2.38,1.24-2.97.54-.59,1.16-.73,1.88-.4.79.27,1.56.59,2.31.99.75.4,1.59.83,2.52,1.29,1.22.53,2.61.96,4.19,1.29,1.57.33,3.33.49,5.26.49,3.58,0,6.86-.58,9.83-1.73,2.97-1.15,5.37-2.8,7.2-4.95,1.83-2.14,2.74-4.73,2.74-7.77,0-2.64-.61-4.93-1.83-6.88-1.22-1.95-2.83-3.73-4.83-5.35h0Z" />
                                <path id="letter-t" class="letterletter-t fill-white" d="M76.79,67.72c-1.36,1.16-2.86,1.73-4.51,1.73s-3.04-.49-3.97-1.49c-.93-.99-1.4-2.67-1.4-5.05V23.52h13.75v-1.98h-13.75V0s-.05.02-.07.03c-1.69,1.76-3.64,3.17-5.86,4.2-2.33,1.08-4.86,1.83-7.6,2.26v15.05h-9.45v1.98h9.45v33.36c0,3.5.27,6.3.81,8.41.54,2.11,1.59,3.93,3.17,5.44,1.22,1.06,2.67,1.87,4.35,2.42,1.68.56,3.74.84,6.18.84,4.08,0,7.25-1.07,9.5-3.22,2.26-2.14,3.92-4.83,4.99-8.07l-1.93-.79c-1.07,2.71-2.29,4.64-3.65,5.79h0Z" />
                                <path id="letter-e" class="letterletter-e fill-white" d="M100.24,42.03h31.22c0-7.65-1.79-13.23-5.37-16.73-3.58-3.5-8.52-5.25-14.82-5.25-4.94,0-9.34,1.07-13.21,3.22-3.87,2.15-6.89,5.26-9.07,9.35-2.19,4.09-3.28,9.14-3.28,15.15,0,5.68,1.04,10.48,3.11,14.4,2.08,3.93,4.98,6.88,8.7,8.86,3.72,1.98,8.02,2.97,12.89,2.97,3.87,0,7.23-.73,10.1-2.18,2.86-1.45,5.21-3.32,7.04-5.59,1.83-2.28,3.13-4.57,3.92-6.88l-2.04-.79c-1.36,2.31-2.87,4.09-4.51,5.35-1.65,1.25-3.33,2.11-5.05,2.57-1.72.46-3.4.69-5.05.69-2.43,0-4.8-.69-7.09-2.08-2.29-1.39-4.15-3.56-5.59-6.53-1.43-2.97-2.15-6.73-2.15-11.28,0-.99.02-1.98.05-2.97.03-.8.1-1.56.19-2.28h0ZM104.11,26.54c2-2.94,4.37-4.4,7.09-4.4,2,0,3.63.83,4.89,2.47,1.25,1.65,2.17,3.84,2.74,6.58.57,2.74.79,5.73.64,8.96h-19.05c.54-6.25,1.77-10.79,3.69-13.61h0Z" />
                                <path id="letter-l" class="letterletter-l fill-white" d="M158.63,64.8V0s-.05.02-.07.03c-1.69,1.76-3.65,3.17-5.86,4.2-2.33,1.08-4.86,1.83-7.6,2.26v58.31c0,2.77-.56,4.65-1.66,5.64-1.11.99-2.99,1.49-5.64,1.49v2.08c1.36-.07,3.42-.15,6.18-.25,2.76-.1,5.46-.15,8.11-.15s5.39.05,8,.15c2.61.1,4.56.18,5.85.25v-2.08c-2.65,0-4.53-.49-5.64-1.49-1.11-.99-1.66-2.87-1.66-5.64Z" />
                                <path id="letter-o" class="letterletter-o fill-white" d="M210.34,22.78c-3.83-1.81-8.22-2.72-13.16-2.72s-9.34.91-13.21,2.72c-3.87,1.82-6.91,4.7-9.13,8.66-2.22,3.96-3.33,9.17-3.33,15.64s1.11,11.68,3.33,15.64c2.22,3.96,5.26,6.83,9.13,8.61,3.87,1.78,8.27,2.67,13.21,2.67s9.32-.89,13.16-2.67c3.83-1.78,6.87-4.65,9.13-8.61,2.26-3.96,3.38-9.17,3.38-15.64s-1.13-11.68-3.38-15.64c-2.25-3.96-5.3-6.84-9.13-8.66ZM205.35,66.18c-2.15,3.89-4.87,5.84-8.16,5.84s-6.1-1.95-8.22-5.84c-2.11-3.89-3.17-10.26-3.17-19.1s1.06-15.23,3.17-19.15c2.11-3.93,4.85-5.89,8.22-5.89s6.01,1.96,8.16,5.89c2.15,3.93,3.22,10.31,3.22,19.15s-1.07,15.21-3.22,19.1Z" />
                            </g>
                            <g id="shine">
                                <path id="shine-1" class="shine shine-1 fill-white" d="M243.34,15.88h0c-1.48-.42-2.9-.94-4.25-1.58-3.83-1.82-6.87-4.7-9.13-8.66-.94-1.66-1.69-3.54-2.24-5.64h0s0,0,0,0c-.55,2.1-1.29,3.98-2.24,5.64-2.25,3.96-5.3,6.84-9.13,8.66-1.35.64-2.76,1.16-4.25,1.58h0s0,0,0,0c1.48.41,2.9.94,4.25,1.57,3.83,1.82,6.87,4.7,9.13,8.66.95,1.66,1.69,3.54,2.24,5.64h0s0,0,0,0c.55-2.1,1.29-3.98,2.24-5.64,2.26-3.96,5.3-6.84,9.13-8.66,1.35-.64,2.76-1.16,4.25-1.57h0Z" />
                                <path id="shine-2" class="shine shine-2 fill-white" d="M248,4.47c-.42-.12-.82-.26-1.2-.44-1.08-.51-1.93-1.32-2.57-2.44-.27-.47-.48-1-.63-1.59-.15.59-.37,1.12-.63,1.59-.63,1.11-1.49,1.93-2.57,2.44-.38.18-.78.33-1.2.44h0c.42.12.82.27,1.2.44,1.08.51,1.93,1.32,2.57,2.44.27.47.48,1,.63,1.59.15-.59.36-1.12.63-1.59.64-1.11,1.49-1.93,2.57-2.44.38-.18.78-.33,1.2-.44h0Z" />
                                <path id="shine-3" class="shine shine-3 fill-white" d="M246.81,26.84c-1.08-.51-1.93-1.32-2.57-2.44-.27-.47-.48-1-.63-1.59-.15.59-.37,1.12-.63,1.59-.63,1.11-1.49,1.93-2.57,2.44-.38.18-.78.33-1.2.44h0c.42.12.82.27,1.2.44,1.08.51,1.93,1.32,2.57,2.44.27.47.48,1,.63,1.59.15-.59.36-1.12.63-1.59.64-1.11,1.49-1.93,2.57-2.44.38-.18.78-.33,1.2-.44h0c-.42-.12-.82-.27-1.2-.44Z" />
                            </g>
                        </svg>
                    @else
                        <img src="{{ Storage::url($settings->site_logo) }}" width="400" alt="{{ $settings->site_name }}">
                    @endempty
                </div>
                <div class="other-info flex justify-between items-end relative md:items-center md:grid md:grid-cols-3 md:gap-[30px] sm:grid-cols-1 sm:gap-[20px]">
                    <div class="catolog-wrapper min-md:absolute min-md:right-0 min-md:bottom-0 2xl:bottom-7 w-full min-md:max-w-[1000px] flex items-center justify-end gap-[30px] md:bottom-auto md:hidden pointer-events-none">
                        <div class="image aspect-[743/512] clamp-1 [--minv-1:400] [--maxv-1:743] 2xl:[--maxv-1:700] lg:[--maxv-1:500] max-w-[--clamp-1] w-full h-auto overflow-clip translate-z-0">
                            <img src="{{asset('assets/image/photo/footer-catalog.webp')}}" class="full-container" alt="">
                        </div>
                        <div class="text-wrapper">
                            <a href="javascript:void(0)" class="flex items-center gap-[30px] group/link pointer-events-auto">
                                <p class="text clamp-fs [--minv-fs:20] [--maxv-fs:32] [font-size:--clamp-fs] leading-tight text-white whitespace-nowrap duration-300 group-hover/link:text-secondary-500">Online Broşür</p>
                                <i class="icon icon-arrow-right-top clamp-fs [--minv-fs:10] [--maxv-fs:14] [font-size:--clamp-fs] h-[--clamp-fs] text-secondary-500 block leading-none duration-300 group-hover/link:rotate-45"></i>
                            </a>
                        </div>
                    </div>
                    <div class="copyright-wrapper">
                        <p class="copyright clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] text-white/65 leading-tight [&_a]:duration-300 [&_a:hover]:text-white [&_a]:font-medium sm:text-center">© Copyright 2024 <a href="index.html">stelo.com.tr</a></p>
                    </div>
                    <div class="social-media-wrapper md:flex md:justify-center sm:justify-center">
                        <ul class="flex clamp-1 [--minv-1:16] [--maxv-1:20] gap-[--clamp-1]">
                            <li>
                                <a href="javascript:void(0)" class="flex items-center justify-center group/link">
                                    <i class="icon icon-facebook clamp-fs [--minv-fs:20] [--maxv-fs:24] [font-size:--clamp-fs] h-[--clamp-fs] text-white/25 block leading-none duration-300 group-hover/link:text-secondary-500"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="flex items-center justify-center group/link">
                                    <i class="icon icon-twitter clamp-fs [--minv-fs:20] [--maxv-fs:24] [font-size:--clamp-fs] h-[--clamp-fs] text-white/25 block leading-none duration-300 group-hover/link:text-secondary-500"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="flex items-center justify-center group/link">
                                    <i class="icon icon-linkedin clamp-fs [--minv-fs:20] [--maxv-fs:24] [font-size:--clamp-fs] h-[--clamp-fs] text-white/25 block leading-none duration-300 group-hover/link:text-secondary-500"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="flex items-center justify-center group/link">
                                    <i class="icon icon-youtube clamp-fs [--minv-fs:20] [--maxv-fs:24] [font-size:--clamp-fs] h-[--clamp-fs] text-white/25 block leading-none duration-300 group-hover/link:text-secondary-500"></i>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="flex items-center justify-center group/link">
                                    <i class="icon icon-instagram clamp-fs [--minv-fs:20] [--maxv-fs:24] [font-size:--clamp-fs] h-[--clamp-fs] text-white/25 block leading-none duration-300 group-hover/link:text-secondary-500"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="signature">
                        <div class="signature flex justify-end md:justify-end sm:justify-center">
                            <div class="penta-logo group/py overflow-clip flex items-center w-[98px] duration-300 hover:w-[98px] opacity-50">
                                <a class="penta-logo-text text-white block font-medium max-w-[82px] uppercase tracking-normal mr-2 leading-none text-[14px] scale-90 duration-500 ease-penta text-right !font-['Segoe_UI',Tahoma,Verdana,sans-serif] group-hover/py:opacity-0 group-hover/py:max-w-0" href="https://www.pentayazilim.com/" title="Web Tasarım" rel="dofollow">Web<br>Tasarım</a>
                                <a class="penta-logo-brand flex items-center" href="https://www.pentayazilim.com/" title="Penta Yazılım" rel="dofollow">
                                    <div class="penta-logo-img w-[26px] h-[24px] relative">
                                        <img class="penta-logo-p w-full h-full block absolute left-0 top-0 object-contain object-center" src="https://www.pentayazilim.com/penta-logo/penta-yazilim-p-s-w.png" alt="Web Tasarım" title="Penta Yazılım">
                                        <img class="penta-logo-y [animation:penta_2s_linear_infinite] w-[12px] h-[12px] object-contain object-center block absolute left-2 top-2.5 [transform-style:preserve-3d]" src="https://www.pentayazilim.com/penta-logo/penta-yazilim-y-s-w.png" alt="Penta Yazılım" title="Web Tasarım">
                                    </div>
                                    <strong class="block text-white group-hover/py:max-w-[80px] font-medium overflow-clip max-w-[0] uppercase tracking-normal ml-2 leading-none text-[14px] scale-90 duration-500 ease-penta text-left !font-['Segoe_UI',Tahoma,Verdana,sans-serif]">Penta<br>Yazılım</strong>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</penta-yazilim>

<section class="popup-field group/popup p-[--gap] fixed left-0 top-0 w-full h-dvh bg-transparent overflow-hidden border-0" id="gdpr" popover>
    <button class="background absolute left-0 top-0 w-full h-full bg-black/75 translate-z-0 cursor-pointer border-0" popovertarget="gdpr" popovertargetaction="hide"></button>
    <div class="content-wrapper fx wrapper max-w-[768px] mx-auto h-full relative z-[2]">
        <button class="icon-wrapper group/close absolute left-1/2 top-0 -translate-x-1/2 -translate-y-1/2 duration-300 clamp-1 [--minv-1:36] [--maxv-1:54] size-[--clamp-1] bg-white border border-solid border-white items-center justify-center rounded-full cursor-pointer hover:bg-secondary-500 hover:border-secondary-500 z-[10] shadow-[0px_10px_10px_rgba(0,0,0,0.1)] flex" popovertarget="gdpr" popovertargetaction="hide" data-gdpr-popup-close>
            <div class="close cursor-pointer clamp-1 [--minv-1:14] [--maxv-1:18] size-[--clamp-1] duration-300 group-hover/close:rotate-90">
                <div class="line clamp-1 [--minv-1:14] [--maxv-1:18] w-[--clamp-1] h-[1px] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 rotate-45 bg-main-500 group-hover/close:bg-white duration-300"></div>
                <div class="line clamp-1 [--minv-1:14] [--maxv-1:18] w-[--clamp-1] h-[1px] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 -rotate-45 bg-main-500 group-hover/close:bg-white duration-300"></div>
            </div>
        </button>
        <div class="inner shadow-popup h-full bg-white clamp-1 [--minv-1:0] [--maxv-1:0] rounded-[--clamp-1] clamp-2 [--minv-2:30] [--maxv-2:90] p-[--clamp-2]">
            <div class="overflow-wrapper prevent-scroll-bounce h-full overflow-x-hidden overflow-y-auto pr-7.5 scrollbar-thin scrollbar-w-0.5 scrollbar-track-main-50 scrollbar-thumb-main-200 scrollbar-track-rounded-full scrollbar-thumb-rounded-full overscroll-none" data-detect-scroll-position="fade-y">
                <div class="text-editor">
                    <!-- .text-editor içerisindeki style attribute değerleri frontendi tasarıma benzetmek adına eklenmiştir, backend aşamasında silinerek panel editöründen tanımlanmalıdır. -->
                    <h4><strong>KİŞİSEL VERİLERİN KORUNMASI</strong></h4>
                    <h5><strong>İNTERNET SİTESİ ÇEREZ POLİTİKASI</strong></h5>

                    <p>Kişisel verileriniz; veri sorumlusu olarak Firma Adı (“ŞİRKET” veya Firma Adı” olarak adlandırılacaktır.) tarafından işletilen (www.alanadi.com) internet sitesini ziyaret edenlerin gizliliğini korumak Kurumumuzun önde gelen ilkelerindendir. Bu Çerez Kullanımı Politikası (“Politika”), tüm web sitesi ziyaretçilerimize ve kullanıcılarımıza hangi tür çerezlerin hangi koşullarda kullanıldığını açıklamaktadır.</p>
                    <p>Çerezler, bilgisayarınız ya da mobil cihazınız üzerinden ziyaret ettiğiniz internet siteleri tarafından cihazınıza veya ağ sunucusuna depolanan küçük metin dosyalarıdır.</p>
                    <p>Genellikle ziyaret ettiğiniz internet sitesini kullanmanız sırasında size kişiselleştirilmiş bir deneyim sunmak, sunulan hizmetleri geliştirmek ve deneyiminizi iyileştirmek için kullanılır ve bir internet sitesinde gezinirken kullanım kolaylığına katkıda bulunabilir. Çerez kullanılmasını tercih etmezseniz tarayıcınızın ayarlarından Çerezleri silebilir ya da engelleyebilirsiniz. Ancak bunun internet sitemizi kullanımınızı etkileyebileceğini hatırlatmak isteriz. Tarayıcınızdan Çerez ayarlarınızı değiştirmediğiniz sürece bu sitede çerez kullanımını kabul ettiğinizi varsayacağız.</p>

                    <h6><strong>1. ÇEREZLERDE HANGİ TÜR VERİLER İŞLENİR?</strong></h6>
                    <p>İnternet sitelerinde yer alan çerezlerde, türüne bağlı olarak, siteyi ziyaret ettiğiniz cihazdaki tarama ve kullanım tercihlerinize ilişkin veriler toplanmaktadır. Bu veriler, eriştiğiniz sayfalar, incelediğiniz hizmet ve ürünler, tercih ettiğiniz dil seçeneği ve diğer tercihlerinize dair bilgileri kapsamaktadır.</p>

                    <h6><strong>2. ÇEREZ NEDİR ve KULLANIM AMAÇLARI NELERDİR?</strong></h6>
                    <p>Çerezler, ziyaret ettiğiniz internet siteleri tarafından tarayıcılar aracılığıyla cihazınıza veya ağ sunucusuna depolanan küçük metin dosyalarıdır. Sitede tercih ettiğiniz dil ve diğer ayarları içeren bu küçük metin dosyaları, siteye bir sonraki ziyaretinizde tercihlerinizin hatırlanmasına ve sitedeki deneyiminizi iyileştirmek için hizmetlerimizde geliştirmeler yapmamıza yardımcı olur. Böylece bir sonraki ziyaretinizde daha iyi ve kişiselleştirilmiş bir kullanım deneyimi yaşayabilirsiniz.</p>
                    <p>İnternet Sitemizde çerez kullanılmasının başlıca amaçları aşağıda sıralanmaktadır:</p>
                    <ul>
                        <li>İnternet sitesinin işlevselliğini ve performansını arttırmak yoluyla sizlere sunulan hizmetleri geliştirmek,</li>
                        <li>İnternet Sitesini iyileştirmek ve İnternet Sitesi üzerinden yeni özellikler sunmak ve sunulan özellikleri sizlerin tercihlerine göre kişiselleştirmek;</li>
                        <li>İnternet Sitesinin, sizin ve Kurum’un hukuki ve ticari güvenliğinin teminini sağlamak, Site üzerinden sahte işlemlerin gerçekleştirilmesini önlemek;</li>
                        <li>5651 sayılı Internet Ortamında Yapılan Yayınların Düzenlenmesi ve Bu Yayınlar Yoluyla İşlenen Suçlarla Mücadele Edilmesi Hakkında Kanun ve Internet Ortamında Yapılan Yayınların Düzenlenmesine Dair Usul ve Esaslar Hakkında Yönetmelik’ten kaynaklananlar başta olmak üzere, kanuni ve sözleşmesel yükümlülüklerini yerine getirmek.</li>
                    </ul>

                    <h5><strong>3.İNTERNET SİTEMİZDE KULLANILAN ÇEREZ TÜRLERİ</strong></h5>

                    <h6><strong>3.1.Oturum Çerezleri</strong></h6>
                    <p>Oturum çerezlerini ziyaretinizi süresince internet sitesinin düzgün bir şekilde çalışmasının teminini sağlamaktadır. Sitelerimizin ve sizin, ziyaretinizde güvenliğini, sürekliliğini sağlamak gibi amaçlarla kullanılırlar. Oturum çerezleri geçici çerezlerdir, siz tarayıcınızı kapatıp sitemize tekrar geldiğinizde silinir, kalıcı değillerdir.</p>

                    <h6><strong>3.2.Kalıcı Çerezler</strong></h6>
                    <p>Bu tür çerezler tercihlerinizi hatırlamak için kullanılır ve tarayıcılar vasıtasıyla cihazınızda depolanır Kalıcı çerezler, sitemizi ziyaret ettiğiniz tarayıcınızı kapattıktan veya bilgisayarınızı yeniden başlattıktan sonra bile saklı kalır. Tarayıcınızın ayarlarından silinene kadar bu çerezler tarayıcınızın alt klasörlerinde tutulurlar.</p>
                    <p>Kalıcı çerezlerin bazı türleri; İnternet Sitesini kullanım amacınız gibi hususlar göz önünde bulundurarak sizlere özel öneriler sunulması için kullanılabilmektedir.</p>
                    <p>Kalıcı çerezler sayesinde İnternet Sitemizi aynı cihazla tekrardan ziyaret etmeniz durumunda, cihazınızda İnternet Sitemiz tarafından oluşturulmuş bir çerez olup olmadığı kontrol edilir ve var ise, sizin siteyi daha önce ziyaret ettiğiniz anlaşılır ve size iletilecek içerik bu doğrultuda belirlenir ve böylelikle sizlere daha iyi bir hizmet sunulur.</p>

                    <h6><strong>3.3.Zorunlu/Teknik Çerezler</strong></h6>
                    <p>Ziyaret ettiğiniz internet sitesinin düzgün şekilde çalışabilmesi için zorunlu çerezlerdir. Bu tür çerezlerin amacı, sitenin çalışmasını sağlamak yoluyla gerekli hizmet sunmaktır. Örneğin, internet sitesinin güvenli bölümlerine erişmeye, özelliklerini kullanabilmeye, üzerinde gezinti yapabilmeye olanak verir.</p>

                    <h6><strong>3.4.Analitik Çerezler</strong></h6>
                    <p>İnternet sitesinin kullanım şekli, ziyaret sıklığı ve sayısı, hakkında bilgi toplayan ve ziyaretçilerin siteye nasıl geçtiğini gösterirler. Bu tür çerezlerin kullanım amacı, sitenin işleyiş biçimini iyileştirerek performans arttırmak ve genel eğilim yönünü belirlemektir. Ziyaretçi kimliklerinin tespitini sağlayabilecek verileri içermezler. Örneğin, gösterilen hata mesajı sayısı veya en çok ziyaret edilen sayfaları gösterirler.</p>

                    <h6><strong>3.5.İşlevsel/Fonksiyonel Çerezler</strong></h6>
                    <p>Ziyaretçinin site içerisinde yaptığı seçimleri kaydederek bir sonraki ziyarette hatırlar. Bu tür çerezlerin amacı ziyaretçilere kullanım kolaylığı sağlamaktır. Örneğin, site kullanıcısının ziyaret ettiği her bir sayfada kullanıcı şifresini tekrar girmesini önler.</p>

                    <h6><strong>3.6. Hedefleme/Reklam Çerezleri</strong></h6>
                    <p>Ziyaretçilere sunulan reklamların etkinliğinin ölçülmesi ve reklamların kaç kere görüntülendiğinin hesaplanmasını sağlarlar. Bu tür çerezlerin amacı, ziyaretçilerin ilgi alanlarına özelleştirilmiş reklamların sunulmasıdır.</p>
                    <p>Aynı şekilde, ziyaretçilerin gezinmelerine özel olarak ilgi alanlarının tespit edilmesini ve uygun içeriklerin sunulmasını sağlarlar. Örneğin, ziyaretçiye gösterilen reklamın kısa süre içinde tekrar gösterilmesini engeller.</p>

                    <h5><strong>4.ÇEREZ TERCİHLERİ NASIL YÖNETİLİR?</strong></h5>
                    <p>Çerezlerin kullanımına ilişkin tercihlerinizi değiştirmek ya da çerezleri engellemek veya silmek için tarayıcınızın ayarlarını değiştirmeniz yeterlidir.</p>
                    <p>Birçok tarayıcı çerezleri kontrol edebilmeniz için size çerezleri kabul etme veya reddetme, yalnızca belirli türdeki çerezleri kabul etme ya da bir internet sitesinin cihazınıza çerez depolamayı talep ettiğinde tarayıcı tarafından uyarılma seçeneği sunar.</p>
                    <p>Aynı zamanda, daha önce tarayıcınıza kaydedilmiş çerezlerin silinmesi de mümkündür.</p>
                    <p>Çerezleri devre dışı bırakır veya reddederseniz, bazı tercihleri manuel olarak ayarlamanız gerekebilir, hesabınızı tanıyamayacağımız ve ilişkilendiremeyeceğimiz için internet sitesindeki bazı özellikler ve hizmetler düzgün çalışmayabilir. Tarayıcınızın ayarlarını aşağıdaki tablodan ilgili link’e tıklayarak değiştirebilirsiniz.</p>

                    <h5><strong>5.İNTERNET SİTESİ GİZLİLİK POLİTİKASI’NIN YÜRÜRLÜĞÜ</strong></h5>
                    <p>İnternet Sitesi Gizlilik Politikası ..../..../.... tarihlidir. Politika’nın tümünün veya belirli maddelerinin yenilenmesi durumunda Politika’nın yürürlük tarihi güncellenecektir. Gizlilik Politikası Kurum’un internet sitesinde (www.alanadi.com) yayımlanır ve kişisel veri sahiplerinin talebi üzerine ilgili kişilerin erişimine sunulur.</p>
                    <p>Firma Adı<br />Adres: Mahalle Adı Sokak Adı. No: 1/A, 34444 İlçe Adı/İl Adı<br />Telefon: +90 216 555 55 55<br />E – Posta: mail@alanadi.com<br />Web Adresi: www.alanadi.com</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="popup-field group/popup border-0 outline-none p-[30px] m-0 fixed left-0 top-0 w-dvw h-dvh bg-transparent overflow-hidden backdrop-blur-none" id="search" popover data-search-popup>
    <button class="background fixed left-0 top-0 w-full h-full bg-black/75 translate-z-0 cursor-pointer border-0" popovertarget="search" popovertargetaction="hide" data-search-popup-close></button>
    <div class="content-wrapper fx w-full h-full relative z-[2] pointer-events-none grid range-1 [--minv-1:30] [--maxv-1:60] p-[--range-1]">
        <div class="inner-wrapper relative max-w-[768px] max-h-full mx-auto my-auto w-full h-max pointer-events-auto flex md:w-full">
            <button class="icon-wrapper group/close absolute left-1/2 top-0 -translate-x-1/2 -translate-y-1/2 duration-300 clamp-1 [--minv-1:36] [--maxv-1:54] size-[--clamp-1] bg-white border border-solid border-white items-center justify-center rounded-full cursor-pointer hover:bg-secondary-500 hover:border-secondary-500 z-[10] shadow-[0px_10px_10px_rgba(0,0,0,0.1)] flex" popovertarget="search" popovertargetaction="hide" data-search-popup-close>
                <div class="close cursor-pointer clamp-1 [--minv-1:14] [--maxv-1:18] size-[--clamp-1] duration-300 group-hover/close:rotate-90">
                    <div class="line clamp-1 [--minv-1:14] [--maxv-1:18] w-[--clamp-1] h-[1px] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 rotate-45 bg-main-500 group-hover/close:bg-white duration-300"></div>
                    <div class="line clamp-1 [--minv-1:14] [--maxv-1:18] w-[--clamp-1] h-[1px] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 -rotate-45 bg-main-500 group-hover/close:bg-white duration-300"></div>
                </div>
            </button>
            <div class="overflow-wrapper max-w-[768px] max-h-[calc(100dvh-var(--range-1)*2)] h-full w-full rounded-none bg-white md:max-w-full">
                <div class="form-wrapper clamp-1 [--minv-1:30] [--maxv-1:40] p-[--clamp-1]">
                    <form action="#">
                        <div class="grid grid-cols-2 sm:grid-cols-1 gap-5">
                            <div class="form-item group/item relative col-span-2 sm:col-span-1">
                                <div class="custom-input relative flex items-center">
                                    <input type="text" placeholder="Ara..." class="w-full h-[60px] bg-transparent clamp-fs [--minv-fs:16] [--maxv-fs:20] [font-size:--clamp-fs] leading-tight pl-5 pr-5 peer" />
                                    <button class="icon-field group/button pr-5">
                                        <i class="icon icon-search clamp-fs [--minv-fs:18] [--maxv-fs:20] [font-size:--clamp-fs] h-[--clamp-fs] text-main-500 block leading-none duration-300 group-hover/button:text-secondary-500 group-hover/button:rotate-12"></i>
                                    </button>
                                    <div class="border-item absolute left-0 bottom-0 w-full h-[1px] bg-main-500 before:absolute before:left-0 before:w-full before:h-[1px] before:scale-x-0 before:origin-left before:bg-secondary-500 before:duration-300 peer-hover:before:scale-x-100 peer-focus:before:scale-x-100"></div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="popup-field group/popup border-0 outline-none md:p-[30px] m-0 fixed left-0 top-0 w-dvw h-dvh bg-transparent overflow-hidden backdrop-blur-none" id="contact" popover data-contact-popup>
    <button class="background fixed left-0 top-0 w-full h-full bg-black/75 translate-z-0 cursor-pointer border-0" popovertarget="contact" popovertargetaction="hide" data-contact-popup-close></button>
    <div class="content-wrapper fx-right-to-left w-full h-full relative z-[2] pointer-events-none grid range-1 [--minv-1:30] [--maxv-1:60] p-[--range-1]">
        <div class="inner-wrapper relative max-w-full max-h-full w-max h-max pointer-events-auto md:w-full ml-auto mr-0 mt-auto mb-0 md:mx-auto md:my-auto">
            <button class="icon-wrapper group/close absolute clamp-1 [--minv-1:24] [--maxv-1:48] top-[--clamp-1] right-[--clamp-1] duration-300 flex items-center justify-center rounded-full cursor-pointe z-[10] md:hidden" popovertarget="contact" popovertargetaction="hide" data-contact-popup-close>
                <div class="close cursor-pointer clamp-1 [--minv-1:16] [--maxv-1:24] size-[--clamp-1] duration-300 group-hover/close:rotate-90">
                    <div class="line clamp-1 [--minv-1:16] [--maxv-1:24] w-[--clamp-1] h-[1px] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 rotate-45 bg-main-500 group-hover/close:bg-main-500"></div>
                    <div class="line clamp-1 [--minv-1:16] [--maxv-1:24] w-[--clamp-1] h-[1px] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 -rotate-45 bg-main-500 group-hover/close:bg-main-500"></div>
                </div>
            </button>
            <button class="icon-wrapper group/close absolute left-1/2 top-0 -translate-x-1/2 -translate-y-1/2 duration-300 clamp-1 [--minv-1:36] [--maxv-1:54] size-[--clamp-1] bg-white border border-solid border-white items-center justify-center rounded-full cursor-pointer hover:bg-secondary-500 hover:border-secondary-500 z-[10] shadow-[0px_10px_10px_rgba(0,0,0,0.1)] hidden md:flex" popovertarget="contact" popovertargetaction="hide" data-contact-popup-close>
                <div class="close cursor-pointer clamp-1 [--minv-1:14] [--maxv-1:18] size-[--clamp-1] duration-300 group-hover/close:rotate-90">
                    <div class="line clamp-1 [--minv-1:14] [--maxv-1:18] w-[--clamp-1] h-[1px] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 rotate-45 bg-main-500 group-hover/close:bg-white duration-300"></div>
                    <div class="line clamp-1 [--minv-1:14] [--maxv-1:18] w-[--clamp-1] h-[1px] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 -rotate-45 bg-main-500 group-hover/close:bg-white duration-300"></div>
                </div>
            </button>
            <div class="overflow-wrapper max-w-[660px] max-h-[calc(100dvh-var(--range-1)*2)] h-full w-full rounded-none bg-white rounded-tl-[32px] md:rounded-none clamp-1 [--minv-1:20] [--maxv-1:60] px-[--clamp-1] clamp-2 [--minv-2:20] [--maxv-2:80] py-[--clamp-2] md:p-[--clamp-1] md:w-full md:max-w-full">
                <div class="content-field relative pr-7 md:px-2 prevent-scroll-bounce h-full overflow-x-hidden overflow-y-auto pr-7.5 scrollbar-thin scrollbar-w-0.5 scrollbar-track-main-50 scrollbar-thumb-main-200 scrollbar-track-rounded-full scrollbar-thumb-rounded-full overscroll-none clamp-1 [--minv-1:20] [--maxv-1:80] max-h-[calc(100dvh-var(--clamp-1)-60px)]" data-detect-scroll-position="fade-y">
                    <div class="title-field flex flex-col gap-5">
                        <h5 class="title clamp-fs [--minv-fs:20] [--maxv-fs:32] [font-size:--clamp-fs] leading-tight text-main-500 font-medium [font-family:var(--playfair)]">İletişim Formu</h5>
                        <div class="description-field clamp-fs [--minv-fs:14] [--maxv-fs:18] [font-size:--clamp-fs] leading-tight text-main-500/65">
                            <p>Her türlü soru, öneri veya geri bildirimleriniz için buradayız. Aşağıdaki formu doldurarak bize ulaşabilirsiniz.</p>
                        </div>
                    </div>
                    <div class="form-wrapper clamp-1 [--minv-1:20] [--maxv-1:42] mt-[--clamp-1]">
                        <form action="#">
                            <div class="grid grid-cols-2 gap-5 sm:grid-cols-1">
                                <div class="form-item relative group/item col-span-1 sm:col-span-1">
                                    <input type="text" placeholder="Ad Soyad *" class="w-full h-[62px] lg:h-[52px] rounded-[6px] border border-[#E6DACB] bg-[#FCF7F1] text-[16px] font-medium text-main-500 placeholder:text-main-500/65 clamp-1 [--minv-1:20] [--maxv-1:32] px-[--clamp-1] duration-300 hover:border-main-500/50 focus:border-main-500 [&.disabled]:border-main-500 [&.disabled]:hover:main-500 [&.disabled]:focus:main-500" />
                                </div>
                                <div class="form-item relative group/item col-span-1 sm:col-span-1">
                                    <input type="tel" placeholder="Telefon *" class="w-full h-[62px] lg:h-[52px] rounded-[6px] border border-[#E6DACB] bg-[#FCF7F1] text-[16px] font-medium text-main-500 placeholder:text-main-500/65 clamp-1 [--minv-1:20] [--maxv-1:32] px-[--clamp-1] duration-300 hover:border-main-500/50 focus:border-main-500 [&.disabled]:border-main-500 [&.disabled]:hover:main-500 [&.disabled]:focus:main-500" />
                                </div>
                                <div class="form-item relative group/item col-span-1 sm:col-span-1">
                                    <input type="email" placeholder="E-Posta *" class="w-full h-[62px] lg:h-[52px] rounded-[6px] border border-[#E6DACB] bg-[#FCF7F1] text-[16px] font-medium text-main-500 placeholder:text-main-500/65 clamp-1 [--minv-1:20] [--maxv-1:32] px-[--clamp-1] duration-300 hover:border-main-500/50 focus:border-main-500 [&.disabled]:border-main-500 [&.disabled]:hover:main-500 [&.disabled]:focus:main-500" />
                                </div>
                                <div class="form-item relative group/item col-span-1 sm:col-span-1">
                                    <input type="text" placeholder="Konu *" class="w-full h-[62px] lg:h-[52px] rounded-[6px] border border-[#E6DACB] bg-[#FCF7F1] text-[16px] font-medium text-main-500 placeholder:text-main-500/65 clamp-1 [--minv-1:20] [--maxv-1:32] px-[--clamp-1] duration-300 hover:border-main-500/50 focus:border-main-500 [&.disabled]:border-main-500 [&.disabled]:hover:main-500 [&.disabled]:focus:main-500 product-name-input" />
                                </div>
                                <div class="form-item relative group/item col-span-2 sm:col-span-1">
                                    <textarea name="" id="" placeholder="Notunuz" class="w-full h-[100px] lg:h-[80px] rounded-[6px] border border-[#E6DACB] bg-[#FCF7F1] text-[16px] font-medium text-main-500 placeholder:text-main-500/65 clamp-1 [--minv-1:20] [--maxv-1:32] px-[--clamp-1] clamp-2 [--minv-2:20] [--maxv-2:24] py-[--clamp-2] duration-300 hover:border-main-500/50 focus:border-main-500 resize-none [&.disabled]:border-main-500 [&.disabled]:hover:main-500 [&.disabled]:focus:main-500"></textarea>
                                </div>
                                <div class="form-item relative group/item col-span-2 sm:col-span-1">
                                    <div class="custom-checkbox relative flex items-center gap-[10px] group/checkbox my-[10px] sm:my-0 w-fit">
                                        <input type="checkbox" class="absolute left-0 top-0 w-full h-full z-[2] opacity-0 cursor-pointer peer" />
                                        <div class="box relative size-[20px] rounded-full border border-main-500/15 peer-hover:border-main-500/50 peer-checked:!border-main-500 duration-300 before:absolute before:left-1/2 before:top-1/2 before:-translate-x-1/2 before:-translate-y-1/2 before:size-[10px] before:rounded-full before:bg-main-500 before:duration-300 before:scale-0 peer-checked:before:scale-100 shrink-0"></div>
                                        <div class="text clamp-fs [--minv-fs:14] [--maxv-fs:16] [font-size:--clamp-fs] leading-tight text-main-500/65 [&_input]:text-main-500 [&_input]:cursor-pointer [&_input]:duration-300 [&_input:hover]:text-main-500/70 [&_input]:relative [&_input]:z-[3] duration-300 peer-checked:text-main-500"><input class="trigger" popovertarget="gdpr" popovertargetaction="show" type="button" value="Aydınlatma Metni" />'ni okudum ve kabul ediyorum.</div>
                                    </div>
                                </div>
                                <div class="form-item relative group/item col-span-2 sm:col-span-1">
                                    <button class="group/button h-16 lg:h-14 bg-secondary-500 clamp-1 [--minv-1:12] [--maxv-1:40] px-[--clamp-1] rounded-[6px] overflow-clip translate-z-0 gap-[10px] flex items-center justify-between duration-300 hover:bg-secondary-600 w-full">
                                        <span class="text clamp-fs [--minv-fs:16] [--maxv-fs:18] [font-size:--clamp-fs] leading-tight font-medium text-center text-white">Formu Gönder</span>
                                        <i class="icon icon-arrow-right-top clamp-fs [--minv-fs:10] [--maxv-fs:14] [font-size:--clamp-fs] h-[--clamp-fs] text-white block leading-none duration-300"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="popup-field group/popup border-0 outline-none p-0 m-0 fixed left-0 top-0 w-dvw h-dvh bg-transparent overflow-hidden backdrop-blur-none" id="example" popover data-example-popup>
    <button class="background fixed left-0 top-0 w-full h-full bg-black/75 translate-z-0 cursor-pointer border-0" popovertarget="example" popovertargetaction="hide" data-example-popup-close></button>
    <div class="content-wrapper fx w-full h-full relative z-[2] pointer-events-none grid range-1 [--minv-1:30] [--maxv-1:60] p-[--range-1]">
        <div class="inner-wrapper relative max-w-full max-h-full mx-auto my-auto w-max h-max pointer-events-auto flex">
            <button class="icon-wrapper group/close absolute left-1/2 top-0 -translate-x-1/2 -translate-y-1/2 duration-300 clamp-1 [--minv-1:36] [--maxv-1:54] size-[--clamp-1] z-3 bg-main-500 border border-solid border-main-500 flex items-center justify-center rounded-full cursor-pointer hover:bg-secondary-500 hover:border-secondary-500 z-[10]" popovertarget="example" popovertargetaction="hide" data-example-popup-close>
                <div class="close cursor-pointer clamp-1 [--minv-1:14] [--maxv-1:18] size-[--clamp-1] duration-300 group-hover/close:rotate-90">
                    <div class="line clamp-1 [--minv-1:14] [--maxv-1:18] w-[--clamp-1] h-[1px] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 rotate-45 bg-white group-hover/close:bg-white"></div>
                    <div class="line clamp-1 [--minv-1:14] [--maxv-1:18] w-[--clamp-1] h-[1px] absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 -rotate-45 bg-white group-hover/close:bg-white"></div>
                </div>
            </button>
            <div class="overflow-wrapper overflow-hidden max-w-[calc(100dvw-var(--range-1)*2)] max-h-[calc(100dvh-var(--range-1)*2)] h-full w-full rounded-none bg-white">
            </div>
        </div>
    </div>
</section>

<div class="body-overlay fixed left-0 top-0 w-full h-full z-[70] bg-black/50 pointer-events-none opacity-0 duration-300 [&.active]:opacity-100 [&.active]:pointer-events-auto"></div>

<div class="cookie-box duration-300 max-h-svh overflow-y-auto fixed bottom-[30px] sm:right-0 sm:bottom-0 right-[30px] z-[120] p-[30px] bg-black max-w-[625px] sm:max-w-none translate-y-[125%] scrollbar scrollbar-w-[4px] scrollbar-h-[4px] scrollbar-thumb-main-500 scrollbar-track-main-500/10 scrollbar-thumb-rounded-none rounded-[10px]">
    <div class="close close-cookie absolute right-[20px] top-[20px] cursor-pointer group/close size-[20px] duration-300 hover:rotate-90">
        <div class="line w-[20px] h-[1px] absolute left-[50%] top-[50%] -translate-x-[50%] -translate-y-[50%] rotate-45 bg-white duration-300"></div>
        <div class="line w-[20px] h-[1px] absolute left-[50%] top-[50%] -translate-x-[50%] -translate-y-[50%] -rotate-45 bg-white duration-300"></div>
    </div>
    <div class="text-field text-white">
        <div class="title font-medium text-[14px] mb-[16px]">Çerez Ayarları</div>
        <div class="expo text-[14px] sm:text-[12px] text-white/50">Bu web sitesinde, cihaz bilgilerini ve kişisel verileri işlemek için çerezleri ve benzer işlevleri kullanıyoruz. İşleme, içeriğin, harici hizmetlerin ve üçüncü şahısların unsurlarının, istatistiksel analiz/ölçümün, kişiselleştirilmiş reklamcılığın ve sosyal medyanın entegrasyonunun entegrasyonuna hizmet eder. İşleve bağlı olarak, veriler üçüncü taraflara aktarılır ve onlar tarafından işlenir. Bu onay isteğe bağlıdır, web sitemizin kullanımı için gerekli değildir ve sol alttaki simge kullanılarak herhangi bir zamanda iptal edilebilir.</div>
    </div>
    <div class="split my-[20px] bg-white/5 w-full h-px"></div>
    <div class="options-field flex items-center justify-between sm:flex-col sm:gap-[16px] sm:items-start">
        <div class="custom-check flex items-center gap-[10px]">
            <div class="title text-[14px] text-white/75">Fonksiyonel</div>
            <div class="selected-option h-[30px] rounded-full flex-center px-[20px] border border-solid border-white">
                <div class="text text-[12px] font-medium text-[#019B07]">Her Zaman Aktif</div>
            </div>
        </div>
        <div class="custom-check flex items-center gap-[10px]">
            <div class="title text-[14px] text-white/75">İstatistik</div>
            <div class="check-option relative">
                <input id="statistics" type="checkbox" class="absolute-full opacity-0 relative-2 cursor-pointer peer" aria-label="Statistics" />
                <div class="box h-[20px] pointer-events-none w-[42px] duration-300 rounded-full bg-white/15 after:absolute after:left-[4px] after:top-[4px] after:w-[12px] after:h-[12px] after:rounded-full after:bg-white after:duration-300 peer-checked:bg-white/25 peer-checked:after:translate-x-[22px]"></div>
            </div>
        </div>
        <div class="custom-check flex items-center gap-[10px]">
            <div class="title text-[14px] text-white/75">Pazarlama</div>
            <div class="check-option relative">
                <input id="marketing" type="checkbox" class="absolute-full opacity-0 relative-2 cursor-pointer peer" aria-label="Marketing" />
                <div class="box h-[20px] pointer-events-none w-[42px] duration-300 rounded-full bg-white/15 after:absolute after:left-[4px] after:top-[4px] after:w-[12px] after:h-[12px] after:rounded-full after:bg-white after:duration-300 peer-checked:bg-white/25 peer-checked:after:translate-x-[22px]"></div>
            </div>
        </div>
    </div>
    <div class="split my-[20px] bg-white/5 w-full h-px"></div>
    <div class="action-field flex items-center justify-between gap-[20px] sm:flex-col">
        <button class="button accept-cookie close-cookie group/button w-full flex justify-center items-center gap-[20px] bg-main-500 px-5 hover:bg-main-600 h-[45px] md:h-[50px] duration-300 border-0 rounded-[8px]">
            <div class="text text-[14px] text-white font-medium relative z-[2] whitespace-nowrap duration-300">Çerezleri Kabul Et</div>
        </button>
        <button class="button close-cookie group/button w-full flex justify-center items-center gap-5 bg-transparent px-5 h-[45px] md:h-[50px] duration-300 border border-solid border-white/50 hover:border-white rounded-[8px]">
            <div class="text text-[14px] text-white/50 duration-300 font-medium relative z-[2] whitespace-nowrap group-hover/button:text-white">Reddet</div>
        </button>
    </div>
    <div class="link-field mt-[30px]">
        <a href="page.html" class="text-white/50 duration-300 hover:text-white text-[14px] font-medium">Kişisel Verilerin Korunması</a>
        <span class="mx-[10px] text-white/10">|</span>
        <a href="page.html" class="text-white/50 duration-300 hover:text-white text-[14px] font-medium">Gizlilik</a>
    </div>
</div>
</body>
</html>


@include('layouts.partials.footer-scripts')
