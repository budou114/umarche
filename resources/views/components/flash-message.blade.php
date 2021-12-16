@props(['status' => 'info'])

@php
switch ($status) {
    case 'info':
        $bgColor = 'bg-blue-300';
        break;
    case 'error':
        $bgColor = 'bg-red-500';
        break;
}
@endphp

@if(session('message'))
    <div class="{{ $bgColor }} w-1/2 mx-auto p-s text-white">
        {{ session('message') }}
    </div>
@endif