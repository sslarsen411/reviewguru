<x-app-layout>

    <section class="bg-guru-bg bg-contain bg-right bg-no-repeat  mx-auto px-4 sm:px-6 lg:px-8 mt-16 w-full h-[60vh]">
        <div
            class=" my-10 px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28 ">
            <div class="sm:text-center lg:text-left p-6 justify-self-start bg-zinc-50/60 rounded-lg">
                <h1 class="tracking-tight font-semibold text-gray-600 text-balance ">
                    <span class="block text-3xl mt-12">The Rave Review Guru says &ldquo;Let&apos;s face it&hellip; </span>

                    <span class="text-4xl leading-normal block mt-6 text-nowrap ">Getting customers to write a review is a</span>
                    <span class="block text-6xl mt-2 text-gray-800 italic text-nowrap">Giant pain in the @$$!&rdquo;</span>
                </h1>
                <h2 class="text-2xl my-6 text-zinc-600">
                    The Rave Review Guru can show you a <strong><em>better</em></strong> way.
                </h2>
                <!-- Button Section -->
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center ">
                    <div class="rounded-md shadow-sm ">
                        <a href="#"
                           class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base
                           font-medium rounded-md text-white bg-orange-400 hover:bg-orange-200 md:py-4 md:text-lg md:px-10">
                            Show me
                        </a>
                    </div>
                </div>
                <!-- End of Button Section -->
            </div>

        </div>
    </section>
    <section class="w-full h-[40vh] flex">
        <div class="w-1/2 flex flex-column items-center justify-center bg-zinc-50 p-10">
            <h2 class="text-4xl text-center mr-8">The problem is&hellip;</h2>
            <p class="text-3xl max-w-6xl ">
                …being asked to write a review has all the appeal of a Friday afternoon homework assignment…
            </p>
        </div>
        <div class="w-1/2 flex items-center justify-center bg-stone-100">
            <img src="{{ asset('images/homework-yuck.webp') }}" alt="" class="rounded-[50%]">
            <p class="text-3xl max-w-84  ">
                “Give me 1500 words on why I like this business. It’s due Monday.”
            </p>
        </div>
    </section>
    <div class="text-9xl text-center">Why?</div>
    <section class="w-full h-[40vh] flex">
        <div class="bg-hurts-bg bg-contain bg-center w-1/2 flex items-center justify-center bg-zinc-50">
            <p class="m-auto w-3/4 text-center text-zinc-50 font-semibold italic text-4xl my-8 border-white border-t-2 border-b-2 py-2 ">
                Because reviews take <strong>too much mental effort</strong> with <strong>no reward</strong>.
            </p>
        </div>
        <div class="w-1/2 flex items-center justify-center bg-stone-100 p-10">
            <p class="text-8xl max-w-6xl ">
                That means...
            </p>
        </div>
    </section>
    <section>

    </section>
    <!-- Accordion Feature Section -->
{{--    <section class="bg-zinc-50 py-12 px-6" x-data="{ selected: null }">--}}
{{--        <div class="max-w-2xl mx-auto">--}}
{{--            <h2 class="text-2xl sm:text-3xl font-bold text-center text-gray-800 mb-8">--}}
{{--                What the Guru Can Do for You--}}
{{--            </h2>--}}

{{--            <div class="space-y-4">--}}
{{--                <!-- Feature 1 -->--}}
{{--                <div class="bg-white rounded-xl shadow-sm p-4" @click="selected !== 1 ? selected = 1 : selected = null">--}}
{{--                    <h3 class="text-lg font-semibold flex justify-between items-center cursor-pointer">--}}
{{--                        🃏 Review Cards That Work--}}
{{--                        <span x-show="selected !== 1">➕</span>--}}
{{--                        <span x-show="selected === 1">➖</span>--}}
{{--                    </h3>--}}
{{--                    <div x-show="selected === 1" x-transition class="mt-2 text-gray-600">--}}
{{--                        Hand these to happy customers right after a job well done. They eliminate awkwardness and make it easy for customers to post a review—without pressure.--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Feature 2 -->--}}
{{--                <div class="bg-white rounded-xl shadow-sm p-4" @click="selected !== 2 ? selected = 2 : selected = null">--}}
{{--                    <h3 class="text-lg font-semibold flex justify-between items-center cursor-pointer">--}}
{{--                        💻 Two Shakes Review App--}}
{{--                        <span x-show="selected !== 2">➕</span>--}}
{{--                        <span x-show="selected === 2">➖</span>--}}
{{--                    </h3>--}}
{{--                    <div x-show="selected === 2" x-transition class="mt-2 text-gray-600">--}}
{{--                        Automate your review process with smart prompts, private feedback capture, and steady review flow. Set it and forget it.--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <!-- Feature 3 -->--}}
{{--                <div class="bg-white rounded-xl shadow-sm p-4" @click="selected !== 3 ? selected = 3 : selected = null">--}}
{{--                    <h3 class="text-lg font-semibold flex justify-between items-center cursor-pointer">--}}
{{--                        📘 Free Guide to Boosting Reviews--}}
{{--                        <span x-show="selected !== 3">➕</span>--}}
{{--                        <span x-show="selected === 3">➖</span>--}}
{{--                    </h3>--}}
{{--                    <div x-show="selected === 3" x-transition class="mt-2 text-gray-600">--}}
{{--                        No fluff. Just simple steps to get more reviews. Learn what to say, when to ask, and how to make it painless for your customers.--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--    <div class="max-w-4xl mx-auto my-8 p-6 bg-white border border-gray-200 rounded-2xl shadow-lg">--}}
{{--        <h1 class="text-2xl font-bold mb-4">The Power of Consistent Reviews in Local SEO</h1>--}}

{{--        <h2 class="text-xl font-semibold mt-6 mb-2">Why Reviews Matter More Than Ever</h2>--}}
{{--        <ul class="list-disc list-inside space-y-1">--}}
{{--            <li>Google prioritizes businesses that appear active.</li>--}}
{{--            <li>One of the strongest signals of activity is <strong>recency of customer reviews</strong>.</li>--}}
{{--            <li>Rankings can <strong>decline sharply</strong> when review activity stalls—even if a business has thousands of older reviews.</li>--}}
{{--        </ul>--}}
{{--        <blockquote class="border-l-4 border-blue-500 pl-4 italic my-4 text-gray-700">--}}
{{--            <strong>Example:</strong> A business with <strong>2,000 reviews but no recent activity</strong> ranked lower than a competitor with <strong>400 but steady weekly reviews</strong>.--}}
{{--        </blockquote>--}}

{{--        <h2 class="text-xl font-semibold mt-6 mb-2">The Hidden Pitfall: Review Batches</h2>--}}
{{--        <p>Many businesses make the mistake of:</p>--}}
{{--        <ul class="list-disc list-inside space-y-1">--}}
{{--            <li>Sending out review requests in <strong>large, infrequent batches</strong>.</li>--}}
{{--            <li>Experiencing a brief spike in reviews—then silence for months.</li>--}}
{{--            <li>This leads to <strong>stagnation in rankings</strong>.</li>--}}
{{--        </ul>--}}
{{--        <p class="mt-2 font-medium">Better Strategy:</p>--}}
{{--        <p>Make review requests part of your <strong>ongoing local SEO routine</strong>, leading to:</p>--}}
{{--        <ul class="list-disc list-inside space-y-1">--}}
{{--            <li>Timely feedback (while the customer experience is still fresh).</li>--}}
{{--            <li>Steady signals to Google that your business is active and trustworthy.</li>--}}
{{--        </ul>--}}

{{--        <h2 class="text-xl font-semibold mt-6 mb-2">Real Data: The “Receipts” on Review Frequency</h2>--}}
{{--        <ul class="list-disc list-inside space-y-1">--}}
{{--            <li><strong>Case Study by Joy Hawkins (Jan 2023):</strong></li>--}}
{{--            <ul class="list-disc list-inside ml-6 space-y-1">--}}
{{--                <li>Businesses that incentivized staff to request reviews saw <strong>improved rankings</strong>.</li>--}}
{{--                <li>When the reward program was paused, rankings dropped.</li>--}}
{{--                <li>Once restarted, rankings improved again.</li>--}}
{{--            </ul>--}}
{{--            <li>Direct correlation observed between <strong>consistent new reviews and ranking strength</strong>.</li>--}}
{{--        </ul>--}}

{{--        <h2 class="text-xl font-semibold mt-6 mb-2">Review Incentives: What's Allowed</h2>--}}
{{--        <ul class="list-disc list-inside space-y-1">--}}
{{--            <li>🚫 You <strong>can’t reward customers</strong> for leaving reviews (against Google policy).</li>--}}
{{--            <li>✅ But you <strong>can reward staff</strong> for encouraging customers to leave reviews.</li>--}}
{{--            <li>This strategy increases participation without violating guidelines.</li>--}}
{{--        </ul>--}}

{{--        <h2 class="text-xl font-semibold mt-6 mb-2">Addressing the Fear of Negative Reviews</h2>--}}
{{--        <ul class="list-disc list-inside space-y-1">--}}
{{--            <li>Some businesses fear getting negative feedback, so they avoid asking altogether.</li>--}}
{{--            <li>This leads to <strong>review bias</strong>: Only upset customers speak up.</li>--}}
{{--            <li>Asking more customers—even unhappy ones—results in:--}}
{{--                <ul class="list-disc list-inside ml-6 space-y-1">--}}
{{--                    <li>A <strong>more balanced representation</strong> of your business.</li>--}}
{{--                    <li>Improved rankings due to <strong>any review activity</strong>, even if a few are negative.</li>--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--        </ul>--}}

{{--        <h2 class="text-xl font-semibold mt-6 mb-2">The Role of Review Recency in 2025</h2>--}}
{{--        <ul class="list-disc list-inside space-y-1">--}}
{{--            <li>“Review recency” ranked <strong>#20</strong> in 2023’s local search factors.</li>--}}
{{--            <li>Experts believe it's now one of the <strong>top 5 most important ranking factors</strong>.</li>--}}
{{--            <li>Google increasingly favors businesses with <strong>recent, authentic engagement</strong>.</li>--}}
{{--        </ul>--}}

{{--        <h2 class="text-xl font-semibold mt-6 mb-2">Final Takeaways</h2>--}}
{{--        <ol class="list-decimal list-inside space-y-2">--}}
{{--            <li><strong>Ask for reviews regularly.</strong><br>Make it a consistent part of your business routine.</li>--}}
{{--            <li><strong>Incentivize staff, not customers.</strong><br>Motivate your team to encourage reviews without breaking Google's rules.</li>--}}
{{--            <li><strong>Never stop collecting reviews.</strong><br>Even one negative review is better than no reviews at all.</li>--}}
{{--        </ol>--}}
{{--    </div>--}}

</x-app-layout>
