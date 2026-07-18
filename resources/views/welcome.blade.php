<x-layouts.app>
    <div class="min-h-screen bg-background text-foreground">

        <main class="relative">
            <section class="relative flex min-h-[90vh] flex-col overflow-hidden pt-28 pb-12">
                <div
                    class="animate-glow-pulse pointer-events-none absolute -top-20 right-[-10%] h-[500px] w-[500px] rounded-full bg-primary/20 blur-[120px]">
                </div>
                <div
                    class="pointer-events-none absolute bottom-0 left-[-5%] h-[400px] w-[400px] rounded-full bg-accent/15 blur-[100px]">
                </div>
                <div
                    class="relative z-10 mx-auto flex w-full max-w-7xl flex-1 flex-col items-center justify-center px-6 text-center">
                    <div
                        class="mb-6 inline-flex items-center gap-2 rounded-full border border-white/10 bg-white/5 px-3 py-1 font-mono text-xs text-accent">
                        <span class="relative flex h-2 w-2">
                            <span
                                class="absolute inline-flex h-full w-full animate-ping rounded-full bg-accent opacity-75"></span>
                            <span class="relative inline-flex h-2 w-2 rounded-full bg-accent"></span></span>موثوق من 500
                        مستخدم
                    </div>
                    <h1 class="font-display mx-auto mb-8 max-w-4xl text-4xl leading-[1.15] font-black text-balance text-white md:text-5xl lg:text-6xl" ">اشحن عالمك الرقمي<br>
                        <span class="gradient-text">بكل سهولة وأمان</span>
                    </h1>
                    <p class="mx-auto mb-10 max-w-[56ch] text-lg leading-relaxed text-muted-foreground md:text-xl" ">
                        وسيطك الموثوق لشراء اشتراكات ChatGPT و Gemini و
                        Lovable وأشهر بطاقات الهدايا العالمية باستخدام وسائل دفع محلية بسيطة.</p>
                        <div class="flex flex-wrap justify-center gap-4">
                            <a href="#products"
                                class="rounded-xl bg-white px-8 py-4 font-bold text-background transition hover:scale-105">تصفح
                                الخدمات</a>
                            <a href="#how"
                                class="glass-panel rounded-xl px-8 py-4 font-bold text-white transition hover:bg-white/10">شاهد
                                كيف يعمل</a>
                        </div>
                </div>
                <div class="relative z-10 mx-auto mt-16 w-full max-w-7xl px-6">
                    <div
                        class="hero-gallery -mx-6 flex h-44 snap-x snap-mandatory gap-3 overflow-x-auto scroll-smooth px-6 pb-2 [scrollbar-width:none] [-ms-overflow-style:none] [&amp;::-webkit-scrollbar]:hidden sm:mx-0 sm:h-56 sm:snap-none sm:overflow-hidden sm:rounded-3xl sm:px-0 sm:pb-0">
                        @foreach ($heroProducts as $product)
                            <a href="{{ route('products.show', $product->slug) }}"
                                class="hero-image relative w-[calc((100%-0.75rem)/2)] shrink-0 snap-start overflow-hidden rounded-2xl border border-white/10 sm:w-auto sm:flex-1 sm:shrink">

                                <img src="{{ asset('storage/' . $product->cover_image) }}" alt="{{ $product->name }}"
                                    loading="lazy" class="hero-card-zoom h-full w-full object-cover object-center">

                                <div
                                    class="hero-overlay-fade absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-80 md:opacity-60">
                                </div>

                                <span
                                    class="hero-label-reveal absolute bottom-3 right-3 text-xs font-bold text-white md:translate-y-2 md:text-sm md:opacity-0">
                                    {{ $product->name }}
                                </span>

                            </a>
                        @endforeach

                    </div>
                </div>
            </section>
            <section id="features" class="relative py-20">
                <div class="mx-auto max-w-7xl px-6">
                    <div class="perspective-1000 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                        <div class="card-3d glass-panel rounded-3xl border-white/5 p-6">
                            <div
                                class="mb-5 grid size-12 place-items-center rounded-xl border border-white/10 bg-primary/10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-zap size-5 text-primary" aria-hidden="true">
                                    <path d=" M4 14a1 1 0 0 1-.78-1.63l9.9-10.2a.5.5 0 0 1 .86.46l-1.92 6.02A1 1 0 0 0 13
                        10h7a1 1 0 0 1 .78 1.63l-9.9 10.2a.5.5 0 0 1-.86-.46l1.92-6.02A1 1 0 0 0 11 14z">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="mb-2 text-base font-bold text-white">تسليم
                                فوري</h3>
                            <p class="text-sm leading-relaxed text-muted-foreground">شحن اشتراكك أو تسليم بيانات الحساب
                                خلال
                                15 دقيقة من تأكيد الدفع.</p>
                        </div>
                        <div class="card-3d glass-panel rounded-3xl border-white/5 p-6">
                            <div
                                class="mb-5 grid size-12 place-items-center rounded-xl border border-white/10 bg-primary/10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-shield-check size-5 text-primary" aria-hidden="true">
                                    <path
                                        d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z">
                                    </path>
                                    <path d="m9 12 2 2 4-4"></path>
                                </svg>
                            </div>
                            <h3 class="mb-2 text-base font-bold text-white">أمان تام</h3>
                            <p class="text-sm leading-relaxed text-muted-foreground">كل
                                العمليات رسمية 100%، بدون خطر حظر
                                الحساب أو مشاكل الدفع.</p>
                        </div>
                        <div class="card-3d glass-panel rounded-3xl border-white/5 p-6">
                            <div
                                class="mb-5 grid size-12 place-items-center rounded-xl border border-white/10 bg-primary/10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-headphones size-5 text-primary" aria-hidden="true">
                                    <path
                                        d="M3 14h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-7a9 9 0 0 1 18 0v7a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3">
                                    </path>
                                </svg>
                            </div>
                            <h3 class="mb-2 text-base font-bold text-white">دعم 24/7</h3>
                            <p class="text-sm leading-relaxed text-muted-foreground">فريق
                                دعم عربي متواجد على مدار الساعة عبر
                                واتساب والبريد الإلكتروني.</p>
                        </div>
                        <div class="card-3d glass-panel rounded-3xl border-white/5 p-6">
                            <div
                                class="mb-5 grid size-12 place-items-center rounded-xl border border-white/10 bg-primary/10">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-sparkles size-5 text-primary" aria-hidden="true">
                                    <path
                                        d="M11.017 2.814a1 1 0 0 1 1.966 0l1.051 5.558a2 2 0 0 0 1.594 1.594l5.558 1.051a1 1 0 0 1 0 1.966l-5.558 1.051a2 2 0 0 0-1.594 1.594l-1.051 5.558a1 1 0 0 1-1.966 0l-1.051-5.558a2 2 0 0 0-1.594-1.594l-5.558-1.051a1 1 0 0 1 0-1.966l5.558-1.051a2 2 0 0 0 1.594-1.594z">
                                    </path>
                                    <path d="M20 2v4"></path>
                                    <path d="M22 4h-4"></path>
                                    <circle cx="4" cy="20" r="2"></circle>
                                </svg>
                            </div>
                            <h3 class="mb-2 text-base font-bold text-white">أسعار عادلة</h3>
                            <p class="text-sm leading-relaxed text-muted-foreground">أسعار
                                محلية بدون رسوم مخفية، مع خصومات
                                دورية على الاشتراكات السنوية.</p>
                        </div>
                    </div>
                </div>
            </section>
            <section id="products" class="relative py-24">
                <div class="mx-auto max-w-7xl px-6">
                    <div class="mb-16 flex items-end justify-between">
                        <div>
                            <h2 class="font-display mb-4 text-3xl font-extrabold text-white">الخدمات الأكثر طلباً</h2>
                            <p class="text-muted-foreground">اختر
                                الخدمة التي تفضلها وابدأ الترقية فوراً</p>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 gap-4 sm:grid sm:grid-cols-2 sm:gap-6 lg:grid-cols-4">
                        @foreach ($products as $product)
                            <div class="w-full">
                                <div class="w-full">
                                    <a 5" href="{{ route('products.show', $product->slug) }}"
                                        class="card-3d group glass-panel relative block overflow-hidden rounded-3xl p-4">
                                        <div class="card-glow pointer-events-none absolute -top-20 -left-20 h-52 w-52 rounded-full bg-gradient-to-br from-primary/25 to-transparent blur-3xl"
                                            7">
                                        </div>
                                        <div class="relative">
                                            <div
                                                class="relative mb-5 aspect-[16/10] w-full overflow-hidden rounded-2xl border border-white/10 bg-black/40 sm:aspect-[5/4]">
                                                <img src="{{ asset('storage/' . $product->cover_image) }}"
                                                    alt="ChatGPT Plus" loading="lazy" width="800" height="640"
                                                    class="card-image-zoom h-full w-full object-cover object-center">
                                                <div
                                                    class="absolute inset-x-0 bottom-0 h-1/3 bg-gradient-to-t from-black/60 to-transparent">
                                                </div>
                                            </div>
                                            <div class="px-2 pb-2">
                                                <h3 class="mb-1 text-lg font-bold text-white">{{ $product->name }}</h3>
                                                <p class="mb-5 line-clamp-1 text-xs text-muted-foreground">
                                                    {{ $product->description }}</p>
                                                <div
                                                    class="flex items-center justify-between border-t border-white/5 pt-4">
                                                    <div>
                                                        <div class="font-mono text-lg font-bold text-primary">
                                                            @if ($price = $product->prices->first())
                                                                {{ $price->price }}
                                                                {{ $price->currency->symbol ?? ($price->currency->code ?? $price->currency->name) }}
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <span
                                                        class="card-cta-hover rounded-lg bg-white/5 px-4 py-2 text-xs font-bold text-white">اطلب
                                                        الآن</span>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </section>
            <section id="how" class="py-24">
                <div class="mx-auto max-w-7xl px-6 text-center">
                    <h2 class="font-display mb-16 text-3xl font-extrabold text-white">3 خطوات بسيطة لتبدأ</h2>
                    <div class="perspective-1000 relative grid gap-12 md:grid-cols-3">
                        <div
                            class="absolute top-8 right-0 left-0 -z-10 hidden h-px bg-gradient-to-r from-transparent via-white/10 to-transparent md:block">
                        </div>
                        <div class="flex flex-col items-center">
                            <div
                                class="glass-panel mb-6 grid size-16 place-items-center rounded-full border-primary/50 text-2xl font-black text-primary shadow-[0_0_20px_color-mix(in_oklab,var(--primary)_35%,transparent)]">
                                1</div>
                            <h3 class="mb-3 text-lg font-bold text-white">اختر
                                الخدمة</h3>
                            <p class="max-w-[30ch] text-sm text-muted-foreground">تصفح مكتبتنا الواسعة من الاشتراكات
                                والبطاقات.</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <div
                                class="glass-panel mb-6 grid size-16 place-items-center rounded-full border-primary/50 text-2xl font-black text-primary shadow-[0_0_20px_color-mix(in_oklab,var(--primary)_35%,transparent)]">
                                2</div>
                            <h3 class="mb-3 text-lg font-bold text-white">ادفع
                                محلياً</h3>
                            <p class="max-w-[30ch] text-sm text-muted-foreground">استخدم محفظتك الإلكترونية المفضلة
                                للدفع
                                فوراً.</p>
                        </div>
                        <div class="flex flex-col items-center">
                            <div
                                class="glass-panel mb-6 grid size-16 place-items-center rounded-full border-primary/50 text-2xl font-black text-primary shadow-[0_0_20px_color-mix(in_oklab,var(--primary)_35%,transparent)]">
                                3</div>
                            <h3 class="mb-3 text-lg font-bold text-white">استلم
                                حسابك</h3>
                            <p class="max-w-[30ch] text-sm text-muted-foreground">يصلك التأكيد والشحن في أقل من 15
                                دقيقة.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-24">
                <div class="mx-auto max-w-7xl px-6">
                    <h2 class="font-display mb-12 text-center text-3xl font-extrabold text-white" ">ماذا يقول عملاؤنا؟</h2>
                <div class="perspective-1000 grid gap-6 md:grid-cols-3">
                    <div class="card-3d glass-panel rounded-3xl p-8">
                        <p class="mb-6 leading-relaxed text-slate-300">
                            «<!-- -->أفضل خدمة استخدمتها لشحن اشتراك
                            ChatGPT، تم التفعيل في أقل من 5 دقائق!<!-- -->»</p>
                        <div >
                            <div class="font-bold text-white" >محمد
                                العتيبي</div>
                            <div class="text-xs text-muted-foreground" >مطور
                                تطبيقات
                            </div>
                        </div>
                    </div>
                    <div class="card-3d glass-panel rounded-3xl p-8" >
                        <p class="mb-6 leading-relaxed text-slate-300" >
                            «<!-- -->بدون بطاقة فيزا استطعت الاشتراك
                            في Gemini Advanced لدراستي. تجربة ممتازة.<!-- -->»</p>
                        <div >
                            <div class="font-bold text-white">ليلى
                                حسن</div>
                            <div class="text-xs text-muted-foreground">
                                طالبة جامعية
                            </div>
                        </div>
                    </div>
                    <div class="card-3d glass-panel rounded-3xl p-8" >
                        <p class="mb-6 leading-relaxed text-slate-300" >
                            «<!-- -->الدعم الفني سريع جداً والأسعار
                            منافسة. صرت أشتري كل اشتراكاتي من Sonic.<!-- -->»</p>
                        <div >
                            <div class="font-bold text-white" >أحمد
                                يوسف</div>
                            <div class="text-xs text-muted-foreground" >رائد
                                أعمال
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="faq" class="py-24">
            <div class="mx-auto max-w-3xl px-6">
                <h2 class="font-display mb-12 text-center text-3xl font-extrabold text-white"
                >الأسئلة الشائعة</h2>
                <div class="space-y-3">
                    <div class="glass-panel overflow-hidden rounded-2xl">
                        <button class="flex w-full items-center justify-between p-6 text-right"
                        ><span class="font-bold text-white"
                            >هل الحسابات رسمية أم
                                مشتركة؟</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round"
                                class="lucide lucide-chevron-down size-4 text-muted-foreground transition-transform"
                                aria-hidden="true">
                                <path d=" m6 9 6 6 6-6">
                        </path>
                        </svg></button>
                </div>
                <div class="glass-panel overflow-hidden rounded-2xl">
                    <button class="flex w-full items-center justify-between p-6 text-right"><span
                            class="font-bold text-white">كم يستغرق الوقت لتفعيل
                            الاشتراك؟</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chevron-down size-4 text-muted-foreground transition-transform"
                            aria-hidden="true">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg></button>
                </div>
                <div class="glass-panel overflow-hidden rounded-2xl">
                    <button class="flex w-full items-center justify-between p-6 text-right"><span
                            class="font-bold text-white">ما هي وسائل الدفع
                            المدعومة؟</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chevron-down size-4 text-muted-foreground transition-transform"
                            aria-hidden="true">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg></button>
                </div>
                <div class="glass-panel overflow-hidden rounded-2xl">
                    <button class="flex w-full items-center justify-between p-6 text-right"><span
                            class="font-bold text-white">ماذا لو لم يتم تفعيل
                            حسابي؟</span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round"
                            class="lucide lucide-chevron-down size-4 text-muted-foreground transition-transform"
                            aria-hidden="true">
                            <path d="m6 9 6 6 6-6"></path>
                        </svg></button>
                </div>
    </div>
    </div>
    </section>
    </main>



    </div>
</x-layouts.app>
