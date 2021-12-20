<div>
    @if (empty($shop->filename))
        <img src="{{ asset('images/noimage.jpg') }}">
    @else
        <img src="{{ asset('storage/shops/' . $shop->filename) }}">
    @endif
</div>