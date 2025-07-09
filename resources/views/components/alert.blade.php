@props(['type' => 'info', 'message'])

<div class="p-4 mb-4 text-sm text-white bg-{{ $type === 'success' ? 'green' : ($type === 'error' ? 'red' : 'blue') }}-500 rounded">
    {{ $message }}
</div>
