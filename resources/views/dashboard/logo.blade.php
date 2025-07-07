<div class="flex flex-col items-center gap-2">
    <img src="{{ asset('storage/' . App\Models\WebSetting::first()->logo) }}" alt="Logo" class="h-24 w-24">
        <span class="text-lg font-semibold">{{ Str::upper(App\Models\WebSetting::first()->organization_name) }}</span>
</div>