<div class="flex items-center gap-1">
    <img src="{{ asset('storage/' . App\Models\WebSetting::first()->logo) }}" alt="Logo" class="h-8 w-8">
    <span class="text-lg font-semibold">{{ Str::upper(App\Models\WebSetting::first()->organization_name) }}</span>
</div>