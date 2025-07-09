@php
    $webSetting = null;
    try {
        if (\Schema::hasTable('web_settings')) {
            $webSetting = App\Models\WebSetting::first();
        }
    } catch (\Exception $e) {
        $webSetting = null;
    }
@endphp
<div class="flex items-center gap-1">
    <img src="{{ asset('storage/' . ($webSetting->logo ?? 'default.png')) }}" alt="Logo" class="h-8 w-8">
    <span class="text-lg font-semibold">{{ Str::upper($webSetting->organization_name ?? '') }}</span>
</div>