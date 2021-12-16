@props(['status' => 'info'])

@php
switch (session('status')) {
    case 'info':
        $bgColor = 'bg-blue-300';
        break;
    case 'alert':
        $bgColor = 'bg-red-500';
        break;
}
@endphp

@if(session('message'))
    <div class="{{ $bgColor }} w-1/2 mx-auto p-s text-white">
        {{ session('message') }}
    </div>
@endif