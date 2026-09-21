<div {{ $attributes->merge(['class' => 'p-4 text-sm rounded-lg '.$class]) }} role="alert">
    <span class="font-medium">{{ $title ?? 'Info alert!' }}</span> {{ $content ?? 'Change a few things up and try submitting again.' }}
</div>