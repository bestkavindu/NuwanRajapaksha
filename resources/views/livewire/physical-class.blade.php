<div class="min-h-screen bg-slate-50 dark:bg-slate-900">
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-br from-emerald-600 via-teal-600 to-cyan-700 text-white py-16 px-4">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="max-w-7xl mx-auto relative z-10 text-center">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mb-4 leading-tight">
                Physical Class Programs
            </h1>
            <p class="text-xl md:text-2xl text-emerald-100">
                භෞතික පන්ති වැඩසටහන්
            </p>
        </div>
    </section>

    <!-- Tabs Section -->
    <section class="max-w-7xl mx-auto px-4 py-12" x-data="{ activeTab: 'sasip' }">
        <!-- Tab Navigation -->
        <div class="flex flex-col sm:flex-row justify-center gap-4 mb-12">
            <button @click="activeTab = 'sasip'"
                    :class="activeTab === 'sasip' ? 'bg-gradient-to-r from-emerald-600 to-teal-600 text-white shadow-xl scale-105' : 'bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:shadow-lg'"
                    class="px-8 py-4 rounded-xl font-bold text-xl transition-all duration-300 transform border-2 border-emerald-600 dark:border-emerald-500">
                <span class="flex items-center justify-center gap-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    Sasip Class
                </span>
            </button>
            <button @click="activeTab = 'sipsara'"
                    :class="activeTab === 'sipsara' ? 'bg-gradient-to-r from-blue-600 to-indigo-600 text-white shadow-xl scale-105' : 'bg-white dark:bg-slate-800 text-slate-700 dark:text-slate-300 hover:shadow-lg'"
                    class="px-8 py-4 rounded-xl font-bold text-xl transition-all duration-300 transform border-2 border-blue-600 dark:border-blue-500">
                <span class="flex items-center justify-center gap-3">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                    Sipsara Class
                </span>
            </button>
        </div>

        <!-- Tab Content -->
        <div class="relative">
            <!-- Sasip Tab Content -->
            <div x-show="activeTab === 'sasip'"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform translate-x-8"
                 x-transition:enter-end="opacity-100 transform translate-x-0"
                 class="space-y-8">

                <!-- Sasip Header -->
                <div class="bg-gradient-to-br from-emerald-50 to-teal-50 dark:from-emerald-900/20 dark:to-teal-900/20 rounded-2xl p-8 border-2 border-emerald-200 dark:border-emerald-700">
                    <h2 class="text-3xl md:text-4xl font-bold text-emerald-900 dark:text-emerald-100 mb-4">
                        සැසිප් පිරිසරණ - Sasip Pirisarana
                    </h2>
                    <p class="text-lg text-emerald-800 dark:text-emerald-200 leading-relaxed">
                        2025 A/L Physical Class Program
                    </p>
                </div>

                <!-- Sasip Timetable -->
                <div class="bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-xl border border-slate-200 dark:border-slate-700">
                    <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-6 text-center">2025 A/L Class Schedule</h3>

                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                        <!-- Exam Timer Class -->
                        <div class="bg-gradient-to-br from-emerald-100 to-teal-100 dark:from-emerald-900/30 dark:to-teal-900/30 rounded-xl p-6 border-2 border-emerald-200 dark:border-emerald-700">
                            <div class="text-center">
                                <h4 class="text-xl font-bold text-emerald-900 dark:text-emerald-100 mb-2">EXAM TIMER CLASS</h4>
                                <p class="text-emerald-700 dark:text-emerald-300 mb-4">Exam oriented intensive training</p>
                                <div class="space-y-2">
                                    <p class="text-lg font-semibold text-emerald-800 dark:text-emerald-200">Monday - Saturday</p>
                                    <p class="text-2xl font-bold text-emerald-900 dark:text-emerald-100">8.00 AM - 11.00 AM</p>
                                </div>
                            </div>
                        </div>

                        <!-- Theory + Question Class -->
                        <div class="bg-gradient-to-br from-teal-100 to-cyan-100 dark:from-teal-900/30 dark:to-cyan-900/30 rounded-xl p-6 border-2 border-teal-200 dark:border-teal-700">
                            <div class="text-center">
                                <h4 class="text-xl font-bold text-teal-900 dark:text-teal-100 mb-2">THEORY + QUESTION CLASS</h4>
                                <p class="text-teal-700 dark:text-teal-300 mb-4">Complete syllabus coverage with practice</p>
                                <div class="space-y-2">
                                    <p class="text-lg font-semibold text-teal-800 dark:text-teal-200">Monday - Saturday</p>
                                    <p class="text-2xl font-bold text-teal-900 dark:text-teal-100">12.00 PM - 6.30 PM</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="mt-8 text-center bg-emerald-50 dark:bg-emerald-900/20 rounded-xl p-6">
                        <p class="text-lg font-semibold text-emerald-900 dark:text-emerald-100 mb-2">පන්ති ගැන වැඩිදුර විස්තර</p>
                        <a href="tel:0772653419" class="text-2xl font-bold text-emerald-600 dark:text-emerald-400 hover:underline">077 265 3419</a>
                    </div>
                </div>

                <!-- Sasip CTA -->
                <div class="bg-gradient-to-br from-emerald-600 to-teal-700 rounded-2xl p-8 text-white text-center">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4">Register for Sasip Class</h3>
                    <p class="text-emerald-100 mb-6">සැසිප් පන්ති සඳහා දැන් ලියාපදිංචි වන්න</p>
                    <a href="https://wa.me/94772653419?text=Sasip%20පන්ති%20සඳහා%20ලියාපදිංචි%20වීමට%20කැමතියි" target="_blank" class="inline-flex items-center justify-center px-8 py-4 text-lg font-bold bg-white text-emerald-600 rounded-full hover:bg-emerald-50 transition-all duration-300 transform hover:scale-105 shadow-xl">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                        </svg>
                        Register Now
                    </a>
                </div>
            </div>

            <!-- Sipsara Tab Content -->
            <div x-show="activeTab === 'sipsara'"
                 x-transition:enter="transition ease-out duration-300"
                 x-transition:enter-start="opacity-0 transform translate-x-8"
                 x-transition:enter-end="opacity-100 transform translate-x-0"
                 class="space-y-8">

                <!-- Sipsara Header -->
                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 dark:from-blue-900/20 dark:to-indigo-900/20 rounded-2xl p-8 border-2 border-blue-200 dark:border-blue-700">
                    <h2 class="text-3xl md:text-4xl font-bold text-blue-900 dark:text-blue-100 mb-4">
                        සිප්සර පිරිසරණ - Sipsara Pirisarana
                    </h2>
                    <p class="text-lg text-blue-800 dark:text-blue-200 leading-relaxed">
                        2026 A/L & 2027 A/L Physical Class Program
                    </p>
                </div>

                <!-- Sipsara Timetable -->
                <div class="space-y-8">
                    <!-- 2027 A/L Schedule -->
                    <div class="bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-xl border border-slate-200 dark:border-slate-700">
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-6 text-center">🔰 2027 A/L THEORY Class Schedule</h3>

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <!-- Sinhala Medium -->
                            <div class="bg-gradient-to-br from-pink-100 to-red-100 dark:from-pink-900/30 dark:to-red-900/30 rounded-xl p-6 border-2 border-pink-200 dark:border-pink-700">
                                <div class="text-center">
                                    <h4 class="text-xl font-bold text-pink-900 dark:text-pink-100 mb-3">SINHALA MEDIUM</h4>
                                    <div class="space-y-3">
                                        <div class="bg-white/50 dark:bg-slate-900/30 rounded-lg p-3">
                                            <p class="text-sm font-semibold text-pink-800 dark:text-pink-200">Thursday</p>
                                            <p class="text-lg font-bold text-pink-900 dark:text-pink-100">8.00 AM - 12.00 PM</p>
                                        </div>
                                        <div class="bg-white/50 dark:bg-slate-900/30 rounded-lg p-3">
                                            <p class="text-sm font-semibold text-pink-800 dark:text-pink-200">Permanent Day: Saturday</p>
                                            <p class="text-lg font-bold text-pink-900 dark:text-pink-100">7.30 AM - 12.00 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- English Medium -->
                            <div class="bg-gradient-to-br from-purple-100 to-pink-100 dark:from-purple-900/30 dark:to-pink-900/30 rounded-xl p-6 border-2 border-purple-200 dark:border-purple-700">
                                <div class="text-center">
                                    <h4 class="text-xl font-bold text-purple-900 dark:text-purple-100 mb-3">ENGLISH MEDIUM</h4>
                                    <div class="space-y-3">
                                        <div class="bg-white/50 dark:bg-slate-900/30 rounded-lg p-3">
                                            <p class="text-sm font-semibold text-purple-800 dark:text-purple-200">May 22 Wednesday</p>
                                            <p class="text-lg font-bold text-purple-900 dark:text-purple-100">9.00 AM - 12.00 PM</p>
                                        </div>
                                        <div class="bg-white/50 dark:bg-slate-900/30 rounded-lg p-3">
                                            <p class="text-sm font-semibold text-purple-800 dark:text-purple-200">Permanent Day: Sunday</p>
                                            <p class="text-lg font-bold text-purple-900 dark:text-purple-100">7.30 AM - 12.00 PM</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2026 A/L Schedule -->
                    <div class="bg-white dark:bg-slate-800 rounded-2xl p-8 shadow-xl border border-slate-200 dark:border-slate-700">
                        <h3 class="text-2xl font-bold text-slate-900 dark:text-white mb-6 text-center">🔰 2026 A/L THEORY Class Schedule</h3>

                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                            <!-- Sinhala Medium Group 02 -->
                            <div class="bg-gradient-to-br from-blue-100 to-indigo-100 dark:from-blue-900/30 dark:to-indigo-900/30 rounded-xl p-6 border-2 border-blue-200 dark:border-blue-700">
                                <div class="text-center">
                                    <h4 class="text-xl font-bold text-blue-900 dark:text-blue-100 mb-3">SINHALA MEDIUM</h4>
                                    <p class="text-blue-700 dark:text-blue-300 text-sm mb-4">(GROUP 02)</p>
                                    <div class="bg-white/50 dark:bg-slate-900/30 rounded-lg p-4">
                                        <p class="text-lg font-semibold text-blue-800 dark:text-blue-200">Sunday</p>
                                        <p class="text-2xl font-bold text-blue-900 dark:text-blue-100">1.00 PM - 5.00 PM</p>
                                    </div>
                                </div>
                            </div>

                            <!-- English Medium -->
                            <div class="bg-gradient-to-br from-cyan-100 to-blue-100 dark:from-cyan-900/30 dark:to-blue-900/30 rounded-xl p-6 border-2 border-cyan-200 dark:border-cyan-700">
                                <div class="text-center">
                                    <h4 class="text-xl font-bold text-cyan-900 dark:text-cyan-100 mb-3">ENGLISH MEDIUM</h4>
                                    <p class="text-cyan-700 dark:text-cyan-300 text-sm mb-4">&nbsp;</p>
                                    <div class="bg-white/50 dark:bg-slate-900/30 rounded-lg p-4">
                                        <p class="text-lg font-semibold text-cyan-800 dark:text-cyan-200">Saturday</p>
                                        <p class="text-2xl font-bold text-cyan-900 dark:text-cyan-100">1.00 PM - 5.00 PM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="text-center bg-blue-50 dark:bg-blue-900/20 rounded-xl p-6">
                        <p class="text-lg font-semibold text-blue-900 dark:text-blue-100 mb-2">පන්ති ගැන වැඩිදුර විස්තර</p>
                        <a href="tel:0772653419" class="text-2xl font-bold text-blue-600 dark:text-blue-400 hover:underline">077 265 3419</a>
                    </div>
                </div>

                <!-- Sipsara CTA -->
                <div class="bg-gradient-to-br from-blue-600 to-indigo-700 rounded-2xl p-8 text-white text-center">
                    <h3 class="text-2xl md:text-3xl font-bold mb-4">Register for Sipsara Class</h3>
                    <p class="text-blue-100 mb-6">සිප්සර පන්ති සඳහා දැන් ලියාපදිංචි වන්න</p>
                    <a href="https://wa.me/94772653419?text=Sipsara%20පන්ති%20සඳහා%20ලියාපදිංචි%20වීමට%20කැමතියි" target="_blank" class="inline-flex items-center justify-center px-8 py-4 text-lg font-bold bg-white text-blue-600 rounded-full hover:bg-blue-50 transition-all duration-300 transform hover:scale-105 shadow-xl">
                        <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                        </svg>
                        Register Now
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
