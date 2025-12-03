<div class="min-h-screen py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-extrabold text-slate-900 dark:text-white sm:text-5xl">
                Past Papers
            </h1>
            <p class="mt-4 text-xl text-slate-600 dark:text-slate-300">
                Access previous years' exam papers and marking schemes.
            </p>
        </div>

        <!-- Papers Grid -->
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
            <!-- Paper Card 1 -->
            <div
                class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300 border border-slate-200 dark:border-slate-700">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <span
                            class="px-3 py-1 text-sm font-semibold text-blue-600 bg-blue-100 rounded-full dark:bg-blue-900/30 dark:text-blue-400">
                            2023 A/L
                        </span>
                        <span class="text-slate-500 dark:text-slate-400 text-sm">Combined Maths</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">2023 Advanced Level Paper - Part
                        II</h3>
                    <p class="text-slate-600 dark:text-slate-300 mb-6">Combined Maths Part II - Sinhala Medium</p>
                    <button
                        onclick="openFlipbook('/storage/2023-AL-COMBINED-MATHS-PART-II-SINHALA-MEDIUM-AlevelApi-PDF (1).pdf')"
                        class="w-full inline-flex items-center justify-center px-6 py-3 text-base font-medium text-white bg-blue-600 rounded-xl hover:bg-blue-700 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                        View Flipbook
                    </button>
                </div>
            </div>

            <!-- Paper Card 2 -->
            <div
                class="bg-white dark:bg-slate-800 rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300 border border-slate-200 dark:border-slate-700">
                <div class="p-6">
                    <div class="flex items-center justify-between mb-4">
                        <span
                            class="px-3 py-1 text-sm font-semibold text-emerald-600 bg-emerald-100 rounded-full dark:bg-emerald-900/30 dark:text-emerald-400">
                            2022 A/L
                        </span>
                        <span class="text-slate-500 dark:text-slate-400 text-sm">Combined Maths</span>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 dark:text-white mb-2">2023 Advanced Level Paper - Part
                        II</h3>
                    <p class="text-slate-600 dark:text-slate-300 mb-6">Combined Maths Part II - Sinhala Medium</p>
                    <button
                        onclick="openFlipbook('/storage/2023-AL-COMBINED-MATHS-PART-II-SINHALA-MEDIUM-AlevelApi-PDF (1).pdf')"
                        class="w-full inline-flex items-center justify-center px-6 py-3 text-base font-medium text-white bg-blue-600 rounded-xl hover:bg-blue-700 transition-colors duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                        View Flipbook
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Flipbook Modal -->
    <div id="flipbook-modal" class="fixed inset-0 z-50 hidden">
        <!-- Backdrop -->
        <div class="absolute inset-0 bg-black/95 backdrop-blur-md" onclick="closeFlipbook()"></div>

        <!-- Close Button -->
        <button onclick="closeFlipbook()"
            class="absolute top-4 right-4 z-[60] p-2 text-white bg-red-600 rounded-full hover:bg-red-700 focus:outline-none transition-transform hover:scale-110">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Flipbook Container -->
        <div class="absolute inset-0 z-50 flex items-center justify-center">
            <div id="flipbook-container" class="w-full h-full"></div>
        </div>
    </div>

    <!-- Scripts -->
    <!-- jQuery (Required for DFlip) -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <!-- DFlip Library -->
    <link href="https://cdn.jsdelivr.net/npm/dflip/css/dflip.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/dflip/css/themify-icons.min.css" rel="stylesheet" type="text/css">
    <script src="https://cdn.jsdelivr.net/npm/dflip/js/dflip.min.js" type="text/javascript"></script>

    <script>
        let flipbookInstance = null;

        function openFlipbook(pdfUrl) {
            const modal = document.getElementById('flipbook-modal');
            const container = document.getElementById('flipbook-container');

            modal.classList.remove('hidden');
            container.innerHTML = ''; // Clear previous instance

            // Initialize DFlip
            // We create a new div for the flipbook
            const flipbookDiv = document.createElement('div');
            flipbookDiv.className = '_df_book';
            flipbookDiv.setAttribute('source', pdfUrl);
            flipbookDiv.id = 'df_manual_book';
            container.appendChild(flipbookDiv);

            // DFlip options
            const options = {
                source: pdfUrl,
                height: window.innerHeight - 40, // Full height minus padding
                webgl: true, // Use WebGL for 3D effect
                backgroundColor: 'transparent',
                duration: 800,
                hard: "none", // "cover" for hard covers
                direction: 1, // 1: LTR, 2: RTL
            };

            // Create the flipbook
            flipbookInstance = $(flipbookDiv).flipBook(pdfUrl, options);
        }

        function closeFlipbook() {
            const modal = document.getElementById('flipbook-modal');
            modal.classList.add('hidden');

            // Clean up
            const container = document.getElementById('flipbook-container');
            container.innerHTML = '';
            flipbookInstance = null;
        }
    </script>
</div>
