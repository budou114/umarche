<div>
    @if (empty($filename))
        <img src="{{ asset('images/noimage.jpg') }}">
    @else
        <img src="{{ asset('storage/shops/' . $filename) }}">
    @endif
</div>