@php
    switch ($type) {
    case 'shops':
        $path = 'storage/shops/';
        break;
        
    case 'products':
        $path = 'storage/products/';
        break;
    }
@endphp

<div>
    @if (empty($filename))
        <img src="{{ asset('images/noimage.jpg') }}">
    @else
        <img src="{{ asset($path . $filename) }}">
    @endif
</div>