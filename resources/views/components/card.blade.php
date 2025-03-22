@props(['imageSrc' => null, 'altText' => 'Image', 'text' => ''])

<div class="card" style="width: 18rem;">
    @if($imageSrc)
        <img src="{{ $imageSrc }}" class="card-img-top" alt="{{ $altText }}">
    @endif
    <div class="card-body">
        <p class="card-text">{{ $text }}</p>
    </div>
</div>
