<x-app-layout>
    <section class="bg-slate-900 ">
        <div class="grid py-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 -mr-8 lg:grid-cols-12 bg-none lg:bg-guru bg-contain bg-no-repeat bg-right " >
            <div class="mr-auto place-content-center lg:col-span-7 h-[50vh]">
{{--                <h1 class="max-w-2xl mb-4 text-4xl font-extrabold tracking-tight leading-none md:text-5xl xl:text-6xl dark:text-white">Payments tool for software companies</h1>--}}
                <h1 class="tracking-tight font-semibold text-zinc-100 text-balance ">
                    <span class="text-xl md:text-2xl lg:text-3xl max-w-3/4 leading-normal block mb-12 text-pretty font-normal ">
                        The <strong>Rave Review Guru </strong>says &ldquo;Getting customers to write a review is a
                    </span>
                    <span class="block text-4xl  md:text-5xl xl:text-6xl lg:text-6xl mt-2 text-red-500 italic text-nowrap bg-slate-900/80">

                        Giant pain in the @$$!&rdquo;
{{--                        <img src="{{ asset('images/pain.webp') }}" alt="mockup" class="bg-slate-900/80 inline-block  h-20  rounded-xl">--}}
                    </span>
                </h1>
                <h2 class="text-2xl my-12 text-zinc-100">
                &ldquo;Let me show you a <strong><em>better</em></strong> way. &rdquo;
                </h2>
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center ">
                    <div class="rounded-md shadow-sm ">
                        <a href="#"
                           class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base
                           font-medium rounded-md text-white bg-red-600 hover:bg-orange-200 md:py-4 md:text-2xl md:px-10">
                            Show me
                        </a>
                    </div>
                </div>
            </div>
            <div class="hidden lg:mt-0 lg:col-span-5 lg:flex" ></div>
        </div>
    </section>

    <section id="pain-points" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border-2">
            <h2 class="text-xl md:text-3xl lg:text-4xl font-bold text-red-900 mt-12 text-left">
                The Frustration is Real
            </h2>
            <div class="space-y-12">
                <!-- Block -->
                <div class="grid md:grid-cols-2 gap-10 items-center">
                    <div>
                        <p class="text-2xl font-semibold text-gray-800 mb-2">You struggle to get customer reviews </p>
                        <p class="text-gray-600">Your customers love you, but they ghost your requests&hellip;</p>
                    </div>
                    <div class="flex justify-center p-16 bg-[#f8f7f1]">
                        <img src="{{ asset('images/review-ghosting.webp') }}"
                             alt="Customer ignoring review prompt" class="scale-x-[-1] rounded-xl w-72">
                    </div>
                </div>

                <!-- Repeat Blocks Below -->
                <div class="grid md:grid-cols-2 gap-10 items-center">
                    <div class="flex justify-center p-16 bg-[#f8f7f1]">
                        <figure>
                            <img src="{{ asset('images/mean-teacher.webp') }}"
                                 alt="mean teacher" class="rounded-xl w-72">
                            <figcaption class="text-left text-gray-700 text-base">
                                &ldquo;Give me 500 words on &lsquo;Why I like this business&rsquo;.<br />It&apos;s due tomorrow.&rdquo;
                            </figcaption>
                        </figure>
                    </div>
                    <div>
                        <p class="text-2xl font-semibold text-gray-800 mb-2">&hellip;because it feels like homework.</p>
                        <p class="text-gray-600">Too much effort. No clear payoff. So they skip it.</p>
                    </div>

                </div>

                <div class="grid md:grid-cols-2 gap-10 items-center">
                    <div>
                        <p class="text-2xl font-semibold text-gray-800 mb-2">Most customers don’t even know where to begin.</p>
                        <p class="text-gray-600 text-left">
                            They don’t know what to say&hellip;
                        </p>
                        <p class="text-gray-600 text-center">
                            They don’t know how long it will take&hellip;
                        </p>
                        <p class="text-gray-600 text-right">
                            They don’t know how to post it&hellip;
                        </p>
                        <p class="text-gray-600 text-lg">
                            So they just don’t.
                        </p>
                    </div>
                    <div class="flex justify-center p-16 bg-[#f8f7f1]">
                        <figure>
                            <img src="{{ asset('images/confused-customer.webp') }}"
                                 alt="Confused customer" class="rounded-xl w-72">
                            <figcaption class="text-center text-gray-700 text-base">
                                Do <strong><em>you</em></strong> know how to write a review?
                            </figcaption>
                        </figure>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-10 items-center">
                    <div class="flex justify-center p-16 bg-[#f8f7f1]">
                        <img src="{{ asset('images/pushy.webp') }}" alt="Hesitant business owner" class="rounded-xl  w-72">
                    </div>
                    <div>
                        <p class="text-2xl font-semibold text-gray-800 mb-2">You’re asking the wrong way.</p>
                        <p class="text-gray-600">It feels awkward. Pushy. So you and your staff ask too late or not at all.</p>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-10 items-center mb-8">
                    <div>
                        <p class="text-2xl font-semibold text-gray-800 mb-2">Your competition is outranking you.</p>
                        <p class="text-gray-600">Google rewards businesses that consistently get fresh reviews. Like your competitors do and you
                            <strong>don&apos;t</strong>.</p>
                    </div>
                    <div class="flex justify-center p-16 bg-[#f8f7f1]">
                        <figure>
                            <img src="{{ asset('images/competitors-outrank-you.webp') }}"
                                 alt="Competitors having the last laugh" class="rounded-xl w-72">
                            <figcaption class="text-center text-gray-700 text-base">
                                Having the last laugh
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="solutions" class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border-2">
            <h2 class="text-xl md:text-3xl lg:text-4xl font-bold text-red-900 mt-12 text-left">
                The Path to Review Enlightenment
            </h2>
            <div class="space-y-12">
                <div class="grid md:grid-cols-2 gap-10 items-center">
                    <div>
                        <p class="text-2xl font-semibold text-gray-800 mb-2">We make reviews easy for your customers.</p>
                        <p class="text-gray-600">Quick, guided questions lead to powerful, polished reviews.</p>
                    </div>
                    <div>
                        <img src="images/easy-review.png" alt="Easy review form" class="rounded-xl shadow-md w-full">
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-10 items-center">
                    <div>
                        <p class="text-2xl font-semibold text-gray-800 mb-2">We help you get reviews <em>continuously</em>.</p>
                        <p class="text-gray-600">Not just once in a while — but week after week, like clockwork.</p>
                    </div>
                    <div>
                        <img src="images/steady-flow.png" alt="Continuous reviews" class="rounded-xl shadow-md w-full">
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-10 items-center">
                    <div>
                        <p class="text-2xl font-semibold text-gray-800 mb-2">We build reviews that Google loves.</p>
                        <p class="text-gray-600">They include your keywords, your location, and your strengths.</p>
                    </div>
                    <div>
                        <img src="images/google-love.png" alt="Optimized reviews" class="rounded-xl shadow-md w-full">
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-10 items-center">
                    <div>
                        <p class="text-2xl font-semibold text-gray-800 mb-2">We help your team become review-savvy.</p>
                        <p class="text-gray-600">No more guessing. Everyone knows the plan — and it works.</p>
                    </div>
                    <div>
                        <img src="images/team-plan.png" alt="Team with strategy" class="rounded-xl shadow-md w-full">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="benefits" class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-xl md:text-3xl lg:text-4xl font-bold text-red-900 mt-12 text-left">
                The Result: Review Nirvana
            </h2>

            <div class="space-y-16">
                <div class="grid md:grid-cols-2 gap-10 items-center">
                    <div>
                        <p class="text-2xl font-semibold text-gray-800 mb-2">You get more reviews — without begging.</p>
                        <p class="text-gray-600">No more chasing. Just a smooth, simple system.</p>
                    </div>
                    <div>
                        <img src="images/review-happiness.png" alt="Business owner happy" class="rounded-xl shadow-md w-full">
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-10 items-center">
                    <div>
                        <p class="text-2xl font-semibold text-gray-800 mb-2">You climb higher in local search.</p>
                        <p class="text-gray-600">More visibility. More clicks. More customers.</p>
                    </div>
                    <div>
                        <img src="images/search-up.png" alt="Improved rankings" class="rounded-xl shadow-md w-full">
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-10 items-center">
                    <div>
                        <p class="text-2xl font-semibold text-gray-800 mb-2">Your customers build your reputation for you.</p>
                        <p class="text-gray-600">They tell the world what makes you great — in their own words.</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/happy-reviewer.png') }}" alt="Happy reviewer" class="rounded-xl shadow-md w-full">
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-10 items-center">
                    <div>
                        <p class="text-2xl font-semibold text-gray-800 mb-2">You finally stop banging your head against the wall.</p>
                        <p class="text-gray-600">And wow — does that feel good.</p>
                    </div>
                    <div>
                        <img src="images/relief.png" alt="Relaxed owner" class="rounded-xl shadow-md w-full">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
<p>Talk is cheap</p>
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
{{--                    <h3 class="text-2xl font-semibold flex justify-between items-center cursor-pointer">--}}
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
{{--                    <h3 class="text-2xl font-semibold flex justify-between items-center cursor-pointer">--}}
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
{{--                    <h3 class="text-2xl font-semibold flex justify-between items-center cursor-pointer">--}}
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
