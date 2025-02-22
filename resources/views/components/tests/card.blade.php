@props([
    'title' => '初期値',
    'content' => '初期値',
    'message' => '初期値'
])
<div {{ $attributes->merge(['class' => 'border-2 shadow-md w-1/4 p-2']) }}>
    <div>{{ $title }}</div>
    <div>画像</div>
    <div>{{ $content }}</div>
    <div>{{ $message }}</div>
</div>