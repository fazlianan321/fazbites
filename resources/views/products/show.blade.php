@extends('layouts.app')

@section('title', $product->name . ' - FazBite')

@section('content')

<style>
    .detail-section {
        padding: 75px 0 100px;
    }

    .breadcrumb-fazbite {
        font-size: 12px;
        color: #8b7d70;
        margin-bottom: 35px;
    }

    .breadcrumb-fazbite a {
        color: #b8955a;
    }

    .detail-image {
        background: #f0e7d9;
        overflow: hidden;
    }

    .detail-image img {
        width: 100%;
        height: 550px;
        object-fit: cover;
    }

    .detail-category {
        font-size: 11px;
        color: #b8955a;
        letter-spacing: 3px;
        text-transform: uppercase;
        font-weight: 700;
    }

    .detail-title {
        font-size: clamp(36px, 5vw, 55px);
        color: #493326;
        line-height: 1.2;
        margin: 18px 0;
    }

    .detail-price {
        font-size: 28px;
        color: #b8955a;
        font-weight: 700;
        margin: 25px 0;
    }

    .detail-description {
        font-size: 14px;
        color: #8b7d70;
        line-height: 2;
    }

    .detail-stock {
        border-top: 1px solid #e8ded0;
        border-bottom: 1px solid #e8ded0;
        padding: 18px 0;
        margin: 25px 0;
        color: #76543e;
        font-size: 13px;
    }

    .detail-back {
        color: #76543e;
        font-size: 12px;
        letter-spacing: 1px;
        border-bottom: 1px solid #b8955a;
        padding-bottom: 5px;
    }

    .related-section {
        background: #f5efe4;
        padding: 75px 0;
    }

    @media(max-width: 768px) {
        .detail-image img {
            height: 350px;
        }
    }
</style>

<section class="detail-section">
    <div class="container">

        <div class="breadcrumb-fazbite">
            <a href="{{ route('home') }}">Home</a>
            <span class="mx-2">/</span>

            <a href="{{ route('products.index') }}">Our Products</a>
            <span class="mx-2">/</span>

            {{ $product->name }}
        </div>

        <div class="row g-5 align-items-center">

            <div class="col-lg-6">

                @php
                    $rawProductImage = $product->image ? basename($product->image) : '';
                    $jpgProductFallback = $rawProductImage ? preg_replace('/\.jpeg$/i', '.jpg', $rawProductImage) : '';
                @endphp

                <div class="detail-image">
                    <img
                        src="{{ $product->image ? asset('storage/' . $rawProductImage) : 'https://placehold.co/800x800/f5efe4/76543e?text=FazBite' }}"
                        data-jpg-fallback="{{ $product->image ? asset('storage/' . $jpgProductFallback) : '' }}"
                        alt="{{ $product->name }}"
                        onerror="if (!this.dataset.triedJpg && this.dataset.jpgFallback && this.src !== this.dataset.jpgFallback) { this.dataset.triedJpg = '1'; this.src = this.dataset.jpgFallback; } else { this.onerror = null; this.src = 'https://placehold.co/800x800/f5efe4/76543e?text=FazBite'; }"
                    >
                </div>

            </div>

            <div class="col-lg-6">

                <span class="detail-category">
                    {{ $product->category->name ?? 'FazBite Collection' }}
                </span>

                <h1 class="detail-title">
                    {{ $product->name }}
                </h1>

                <p class="detail-description">
                    {{ $product->description }}
                </p>

                <div class="detail-price">
                    Rp{{ number_format($product->price, 0, ',', '.') }}
                </div>

                <div class="detail-stock">
                    <i class="fa-solid fa-box-open me-2"></i>

                    @if($product->stock > 0)
                        Available Stock: {{ $product->stock }} items
                    @else
                        Currently Out of Stock
                    @endif
                </div>

                <a href="{{ route('products.index') }}" class="detail-back">
                    <i class="fa-solid fa-arrow-left me-2"></i>
                    BACK TO OUR PRODUCTS
                </a>

            </div>

        </div>

    </div>
</section>

@if($relatedProducts->count() > 0)

<section class="related-section">
    <div class="container">

        <div class="text-center mb-5">
            <span class="section-label">YOU MAY ALSO LIKE</span>
            <h2 class="section-title mt-2">More From FazBite</h2>
        </div>

        <div class="row g-4">

            @foreach($relatedProducts as $related)
                @php
                    $rawRelatedImage = $related->image ? basename($related->image) : '';
                    $jpgRelatedFallback = $rawRelatedImage ? preg_replace('/\.jpeg$/i', '.jpg', $rawRelatedImage) : '';
                @endphp

                <div class="col-6 col-lg-3">

                    <a href="{{ route('products.show', $related->slug) }}">

                        <div class="product-card">

                            <img
                                src="{{ $related->image ? asset('storage/' . $rawRelatedImage) : 'https://placehold.co/600x600/f5efe4/76543e?text=FazBite' }}"
                                data-jpg-fallback="{{ $related->image ? asset('storage/' . $jpgRelatedFallback) : '' }}"
                                alt="{{ $related->name }}"
                                loading="lazy"
                                onerror="if (!this.dataset.triedJpg && this.dataset.jpgFallback && this.src !== this.dataset.jpgFallback) { this.dataset.triedJpg = '1'; this.src = this.dataset.jpgFallback; } else { this.onerror = null; this.src = 'https://placehold.co/600x600/f5efe4/76543e?text=FazBite'; }"
                            >

                            <div class="product-info">

                                <h3>{{ $related->name }}</h3>

                                <span class="product-price">
                                    Rp{{ number_format($related->price, 0, ',', '.') }}
                                </span>

                            </div>

                        </div>

                    </a>

                </div>

            @endforeach

        </div>

    </div>
</section>

@endif

@endsection