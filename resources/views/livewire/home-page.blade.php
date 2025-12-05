<div>
    <!-- Hero Slider Section -->
    <div class="relative w-full" x-data="{
        activeSlide: 1,
        slides: [
            { id: 1, title: 'Master Combined Maths', description: 'Expert guidance for A/L students.', image: 'https://images.unsplash.com/photo-1635070041078-e363dbe005cb?q=80&w=2070&auto=format&fit=crop' },
            { id: 2, title: '2026 Theory Class', description: 'Complete syllabus coverage.', image: 'https://images.unsplash.com/photo-1509062522246-3755977927d7?q=80&w=2070&auto=format&fit=crop' },
            { id: 3, title: 'Paper Class & Revision', description: 'Systematic revision sessions.', image: 'https://images.unsplash.com/photo-1434030216411-0b793f4b4173?q=80&w=2070&auto=format&fit=crop' }
        ],
        loop() {
            setInterval(() => {
                this.activeSlide = this.activeSlide === this.slides.length ? 1 : this.activeSlide + 1;
            }, 5000);
        }
    }" x-init="loop()">
        <!-- Slides -->
        <div class="relative h-[600px] w-full overflow-hidden rounded-2xl shadow-2xl">
            <template x-for="slide in slides" :key="slide.id">
                <div x-show="activeSlide === slide.id" x-transition:enter="transition ease-out duration-700"
                    x-transition:enter-start="opacity-0 transform scale-105"
                    x-transition:enter-end="opacity-100 transform scale-100"
                    x-transition:leave="transition ease-in duration-500"
                    x-transition:leave-start="opacity-100 transform scale-100"
                    x-transition:leave-end="opacity-0 transform scale-105"
                    class="absolute inset-0 flex items-center justify-center bg-cover bg-center text-white"
                    :style="`background-image: url('${slide.image}')`">

                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-black/50"></div>

                    <div class="relative z-10 w-full max-w-4xl mx-auto px-6 text-center">
                        <h2 class="text-4xl md:text-6xl font-bold mb-6 tracking-tight" x-text="slide.title"
                            x-transition:enter="transition ease-out duration-700 delay-300"
                            x-transition:enter-start="opacity-0 translate-y-10"
                            x-transition:enter-end="opacity-100 translate-y-0">
                        </h2>
                        <p class="text-lg md:text-2xl text-gray-200 mb-10" x-text="slide.description"
                            x-transition:enter="transition ease-out duration-700 delay-500"
                            x-transition:enter-start="opacity-0 translate-y-10"
                            x-transition:enter-end="opacity-100 translate-y-0">
                        </p>

                        <!-- Two Buttons -->
                        <div class="flex flex-col sm:flex-row justify-center gap-4"
                            x-transition:enter="transition ease-out duration-700 delay-700"
                            x-transition:enter-start="opacity-0 translate-y-10"
                            x-transition:enter-end="opacity-100 translate-y-0">

                            <button
                                class="px-8 py-3.5 text-lg font-bold text-white bg-blue-600 rounded-full hover:bg-blue-700 transition duration-300 transform hover:scale-105 shadow-lg">
                                Join Now
                            </button>

                            <button
                                class="px-8 py-3.5 text-lg font-bold text-white bg-transparent border-2 border-white rounded-full hover:bg-white hover:text-slate-900 transition duration-300 transform hover:scale-105">
                                Learn More
                            </button>
                        </div>
                    </div>
                </div>
            </template>
        </div>

        <!-- Prev/Next Buttons -->
        <button @click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1"
            class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/10 hover:bg-white/20 text-white p-3 rounded-full transition duration-300 backdrop-blur-md border border-white/10 group">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="w-6 h-6 group-hover:-translate-x-1 transition-transform">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
        </button>
        <button @click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1"
            class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/10 hover:bg-white/20 text-white p-3 rounded-full transition duration-300 backdrop-blur-md border border-white/10 group">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor" class="w-6 h-6 group-hover:translate-x-1 transition-transform">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
        </button>

        <!-- Pagination Dots -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex space-x-3">
            <template x-for="slide in slides" :key="slide.id">
                <button @click="activeSlide = slide.id" class="h-2 rounded-full transition-all duration-500"
                    :class="activeSlide === slide.id ? 'w-8 bg-blue-500' : 'w-2 bg-white/50 hover:bg-white/80'">
                </button>
            </template>
        </div>
    </div>

    <!-- About Teacher Section -->
    <section class="py-20 bg-white dark:bg-slate-800">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <!-- Content Column -->
                <div class="space-y-8">
                    <div class="space-y-4">
                        <h2
                            class="text-3xl md:text-4xl lg:text-5xl font-bold text-slate-900 dark:text-white leading-tight">
                            ශ්‍රී ලංකාවේ විශිෂ්ටතම සහ ජනප්‍රියම <br>
                            <span
                                class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500">සංයුක්ත
                                ගණිත පන්තිය</span>
                        </h2>
                        <div class="h-1.5 w-24 bg-gradient-to-r from-blue-600 to-cyan-500 rounded-full"></div>
                    </div>

                    <p class="text-lg text-slate-600 dark:text-slate-300 leading-relaxed">
                        සහජ දක්ෂයින් Island Rank දක්වා රැගෙන යන්නා සේම, ඕනෑම මට්ටමේ දරුවෙක් A, B සාමාර්ථ දක්වා
                        ගොඩනගමින්, විශිෂ්ටයෙක් ලෙස මතු කරන ශ්‍රී ලංකාවේ විශිෂ්ටතම සහ ජනප්‍රියම සංයුක්ත ගණිත ගුරුතුමා
                        රුවන් දර්ශන මෙහෙය වන උසස්පෙළ සංයුක්ත ගණිත පන්තිය.
                    </p>

                    <ul class="space-y-4">
                        <li class="flex items-center space-x-3">
                            <div
                                class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center">
                                <svg class="w-4 h-4 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-lg font-medium text-slate-800 dark:text-slate-200">අතිවිශිෂ්ට
                                ප්‍රතිඵල</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <div
                                class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center">
                                <svg class="w-4 h-4 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-lg font-medium text-slate-800 dark:text-slate-200">සුපිරිම පැහැදිලි
                                කිරීම්</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <div
                                class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center">
                                <svg class="w-4 h-4 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-lg font-medium text-slate-800 dark:text-slate-200">නිවැරදි යහපත් ආකල්ප
                                ගොඩනැගීම</span>
                        </li>
                        <li class="flex items-center space-x-3">
                            <div
                                class="flex-shrink-0 w-6 h-6 rounded-full bg-blue-100 dark:bg-blue-900/30 flex items-center justify-center">
                                <svg class="w-4 h-4 text-blue-600 dark:text-blue-400" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor" stroke-width="2.5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <span class="text-lg font-medium text-slate-800 dark:text-slate-200">වසර 20 වැඩි පරිණත
                                අත්දැකීම්</span>
                        </li>
                    </ul>
                </div>

                <!-- Image Column -->
                <div class="relative">
                    <div
                        class="absolute -inset-4 bg-gradient-to-r from-blue-600 to-cyan-500 rounded-[2rem] opacity-20 blur-2xl">
                    </div>
                    <div
                        class="relative rounded-[2rem] overflow-hidden shadow-2xl border-4 border-white dark:border-slate-700">
                        <img src="https://placehold.co/600x700/e2e8f0/1e293b?text=Teacher+Image" alt="Ruwan Darshana"
                            class="w-full h-auto object-cover transform hover:scale-105 transition duration-500">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-20 bg-slate-50 dark:bg-slate-900">
        <div class="max-w-7xl mx-auto px-6 md:px-12">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-white mb-4">Classroom Moments</h2>
                <div class="h-1.5 w-24 bg-blue-600 mx-auto rounded-full"></div>
                <p class="mt-4 text-lg text-slate-600 dark:text-slate-300">Capturing the journey of excellence in
                    Combined Maths.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" x-data="{ selectedImage: null, selectedTitle: null }">
                <!-- Gallery Item 1 -->
                <div @click="selectedImage = 'images/banner-1.jpg'; selectedTitle = 'Theory Class'" class="group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer">
                    <img src="images/banner-1.jpg"
                        alt="Classroom"
                        class="w-full h-auto object-contain transform group-hover:scale-105 transition duration-500">
                    <div
                        class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                    </div>
                </div>

                <!-- Gallery Item 2 -->
                <div @click="selectedImage = 'images/banner-2.jpg'; selectedTitle = 'Group Study'" class="group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer">
                    <img src="images/banner-2.jpg"
                        alt="Students"
                        class="w-full h-auto object-contain transform group-hover:scale-105 transition duration-500">
                    <div
                        class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                    </div>
                </div>

                <!-- Gallery Item 3 -->
                <div @click="selectedImage = 'images/banner-3.jpg'; selectedTitle = 'Paper Discussion'" class="group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer">
                    <img src="images/banner-3.jpg"
                        alt="Teaching"
                        class="w-full h-auto object-contain transform group-hover:scale-105 transition duration-500">
                    <div
                        class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                    </div>
                </div>

                <!-- Gallery Item 4 -->
                <div @click="selectedImage = 'images/banner-4.jpg'; selectedTitle = 'Revision'" class="group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer">
                    <img src="images/banner-4.jpg"
                        alt="Education"
                        class="w-full h-auto object-contain transform group-hover:scale-105 transition duration-500">
                    <div
                        class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                    </div>
                </div>

                <!-- Gallery Item 5 -->
                <div @click="selectedImage = 'https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=800&auto=format&fit=crop'; selectedTitle = 'Awards'" class="group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?q=80&w=800&auto=format&fit=crop"
                        alt="Success"
                        class="w-full h-auto object-contain transform group-hover:scale-105 transition duration-500">
                    <div
                        class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                    </div>
                </div>

                <!-- Gallery Item 6 -->
                <div @click="selectedImage = 'https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=800&auto=format&fit=crop'; selectedTitle = 'Events'" class="group relative overflow-hidden rounded-2xl shadow-lg cursor-pointer">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?q=80&w=800&auto=format&fit=crop"
                        alt="Community"
                        class="w-full h-auto object-contain transform group-hover:scale-105 transition duration-500">
                    <div
                        class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition duration-300 flex items-center justify-center">
                    </div>
                </div>

                <!-- Image Modal -->
                <div x-show="selectedImage"
                     x-cloak
                     @click="selectedImage = null"
                     x-transition:enter="transition ease-out duration-300"
                     x-transition:enter-start="opacity-0"
                     x-transition:enter-end="opacity-100"
                     x-transition:leave="transition ease-in duration-200"
                     x-transition:leave-start="opacity-100"
                     x-transition:leave-end="opacity-0"
                     class="fixed inset-0 z-50 flex items-center justify-center bg-black/90 backdrop-blur-sm p-4"
                     style="display: none;">

                    <!-- Close Button -->
                    <button @click.stop="selectedImage = null"
                            class="absolute top-4 right-4 text-white/80 hover:text-white bg-white/10 hover:bg-white/20 rounded-full p-3 transition-all z-10">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>

                    <!-- Image Container -->
                    <div @click.stop class="relative max-w-7xl max-h-[90vh] w-full">
                        <img :src="selectedImage"
                             :alt="selectedTitle"
                             class="w-full h-auto max-h-[90vh] object-contain rounded-lg shadow-2xl"
                             x-transition:enter="transition ease-out duration-300 delay-100"
                             x-transition:enter-start="opacity-0 scale-95"
                             x-transition:enter-end="opacity-100 scale-100">

                        <!-- Image Title -->
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/80 to-transparent p-6 rounded-b-lg">
                            <h3 x-text="selectedTitle" class="text-white text-2xl font-bold text-center"></h3>
                        </div>
                    </div>

                    <!-- Navigation Hint -->
                    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 text-white/60 text-sm">
                        Click anywhere to close
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
