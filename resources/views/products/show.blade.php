<x-layouts.app>

    <main class="relative overflow-x-clip pt-32 pb-20">
        <div
            class="animate-glow-pulse pointer-events-none absolute top-20 right-[-10%] h-[500px] w-[500px] rounded-full bg-primary/15 blur-[120px]">
        </div>
        <div
            class="pointer-events-none absolute bottom-40 left-[-10%] h-[400px] w-[400px] rounded-full bg-accent/15 blur-[100px]">
        </div>
        <div class="mx-auto max-w-6xl px-6">
            <a href="/"
                class="mb-8 inline-flex items-center gap-2 text-sm text-muted-foreground transition hover:text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-arrow-left size-4" aria-hidden="true">
                    <path d="m12 19-7-7 7-7"></path>
                    <path d="M19 12H5"></path>
                </svg> العودة للخدمات</a>
            <div class="grid gap-10 lg:grid-cols-[1.1fr_1fr]">
                <div class="animate-rise-in">
                    <div class="perspective-1000">
                        <div
                            class="card-3d glass-panel relative aspect-[5/4] w-full overflow-hidden rounded-3xl border-white/20">
                            <img src="{{ asset('storage/' . $product->cover_image) }}" alt="{{ $product->name }}" width="800"
                                height="640" class="h-full w-full object-cover">
                            <div
                                class="absolute inset-x-0 bottom-0 h-1/2 bg-gradient-to-t from-black/70 to-transparent">
                            </div>
                            <div
                                class="absolute top-4 right-4 rounded-lg bg-black/40 px-3 py-1 font-mono text-[11px] text-white/80 backdrop-blur">
                                Tools</div>
                        </div>
                    </div>
                    <div class="mt-10">
                        <h1 class="font-display mb-3 text-4xl font-black text-white">{{ $product->name }}</h1>
                        <p class="mb-6 text-lg text-muted-foreground">{{ $product->short_description }}</p>
                        <p class="leading-relaxed text-slate-300">{{ $product->description }}</p>
                        <div class="mt-8 flex items-baseline gap-4">
                            <span class="gradient-text font-mono text-4xl font-black">
                                @if ($price = $product->prices->first())
                                    {{ $price->price }}
                                    {{ $price->currency->symbol ?? ($price->currency->code ?? $price->currency->name) }}
                                @endif
                            </span>
                            {{-- <span class="text-muted-foreground">≈
                                <!-- -->115 ر.س</span> --}}
                        </div>
                    </div>
                </div>
                <div class="animate-rise-in glass-panel rounded-[2rem] p-8 md:p-10">
                    <form class="space-y-6">
                        <div>
                            <h2 class="font-display mb-2 text-2xl font-bold text-white">اطلب عبر واتساب</h2>
                            <p class="text-sm text-muted-foreground">ارسل الطلب
                                مباشرة لواتساب التاجر.</p>
                        </div>
                        {{-- <div class="space-y-2">
                            <label class="block text-xs font-bold text-slate-400">نوع الحساب</label>
                            <div class="flex rounded-xl border border-white/10 bg-background p-1">
                                <button type="button"
                                    class="flex-1 rounded-lg py-2.5 text-sm font-bold transition bg-primary text-white">شحن
                                    حسابي</button>
                                <button type="button"
                                    class="flex-1 rounded-lg py-2.5 text-sm font-bold transition text-slate-500 hover:text-white">إنشاء
                                    جديد</button>
                            </div>
                        </div> --}}
                        <div class="rounded-xl border border-white/5 bg-white/[0.02] p-4">
                            <div class="flex justify-between text-sm text-muted-foreground">
                                <span>الإجمالي</span>
                                <span class="font-mono font-bold text-white">
                                    @if ($price = $product->prices->first())
                                        {{ $price->price }}
                                        {{ $price->currency->symbol ?? ($price->currency->code ?? $price->currency->name) }}
                                    @endif
                                </span>
                            </div>
                        </div>
                        <button type="submit"
                            class="inline-flex w-full items-center justify-center gap-2 rounded-2xl bg-gradient-to-l from-primary to-accent py-4 text-lg font-black text-white shadow-xl transition hover:scale-[1.01] hover:shadow-primary/25">
                            <svg class="size-6" viewBox="0 0 24 24" fill="currentColor">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.521.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.521-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.521.074-.794.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.955L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z">
                                </path>
                            </svg>تواصل مباشر على واتساب</button>
                    </form>
                </div>
            </div>
            <div class="mt-24">
                <h3 class="font-display mb-8 text-2xl font-bold text-white">خدمات أخرى</h3>
                <div class="perspective-1000 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($products as $item)
                        <a href="{{ route('products.show', $item->slug) }}"
                            class="card-3d glass-panel block rounded-3xl p-6">
                            <div class="mb-2 text-lg font-bold text-white">{{ $item->name }}</div>
                            <div class="mb-4 text-xs text-muted-foreground">{{ $item->description }}</div>
                            <div class="font-mono font-bold text-primary">
                                @if ($price = $item->prices->first())
                                    {{ $price->price }}
                                    {{ $price->currency->symbol ?? ($price->currency->code ?? $price->currency->name) }}
                                @endif
                            </div>
                        </a>
                    @endforeach

                </div>
            </div>
        </div>
    </main>
</x-layouts.app>
