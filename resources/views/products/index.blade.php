@extends('layouts.app')

@section('title', 'Our Products - FazBite')

@section('content')

<style>
    .catalog-hero {
        background: #f0e7d9;
        padding: 85px 0;
        text-align: center;
    }

    .catalog-hero h1 {
        font-size: clamp(42px, 6vw, 68px);
        color: #493326;
        margin: 15px 0;
    }

    .catalog-hero p {
        color: #806d5d;
        max-width: 560px;
        margin: auto;
        line-height: 1.8;
    }

    .catalog-section {
        padding: 75px 0 100px;
    }

    .filter-link {
        display: inline-block;
        padding: 10px 20px;
        margin: 5px;
        border: 1px solid #e8ded0;
        color: #76543e;
        font-size: 12px;
        transition: .3s;
    }

    .filter-link:hover,
    .filter-link.active {
        background: #493326;
        color: white;
        border-color: #493326;
    }

    .catalog-search {
        border: 1px solid #e8ded0;
        background: white;
        padding: 13px 18px;
        width: 100%;
        outline: none;
        color: #493326;
    }

    .catalog-search:focus {
        border-color: #b8955a;
    }

    .catalog-image {
        position: relative;
        overflow: hidden;
        background: #f5efe4;
    }

    .catalog-image img {
        width: 100%;
        height: 270px;
        object-fit: cover;
        transition: transform .6s;
    }

    .product-card:hover .catalog-image img {
        transform: scale(1.07);
    }

    .catalog-badge {
        position: absolute;
        top: 15px;
        left: 15px;
        background: #fbf8f2;
        color: #76543e;
        padding: 7px 12px;
        font-size: 10px;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .catalog-meta {
        color: #a18c78;
        font-size: 11px;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    .catalog-name {
        font-size: 23px;
        margin: 10px 0;
        color: #493326;
    }

    .catalog-description {
        font-size: 13px;
        color: #8b7d70;
        line-height: 1.7;
        min-height: 44px;
    }

    .catalog-price {
        font-size: 17px;
        color: #b8955a;
        font-weight: 700;
    }

    .catalog-detail {
        display: inline-block;
        color: #493326;
        border-bottom: 1px solid #b8955a;
        font-size: 12px;
        padding-bottom: 4px;
        margin-top: 15px;
        letter-spacing: 1px;
        font-weight: 700;
    }

    .catalog-detail:hover {
        color: #b8955a;
    }

    .catalog-empty {
        padding: 70px 20px;
        text-align: center;
        color: #8b7d70;
        background: #f5efe4;
    }

    @media(max-width: 576px) {
        .catalog-hero {
            padding: 60px 20px;
        }

        .catalog-image img {
            height: 220px;
        }
    }
</style>

<section class="catalog-hero">
    <div class="container">
        <span class="section-label">THE FAZBITE COLLECTION</span>

        <h1>Our <i>Products.</i></h1>

        <p>
            Discover our carefully crafted collection of artisan bread,
            buttery pastries, delightful cakes, and irresistible desserts.
        </p>
    </div>
</section>

<section class="catalog-section">
    <div class="container">

        <div class="row align-items-center mb-4 g-3">

            <div class="col-lg-6">
                <span class="section-label">MADE FRESH WITH LOVE</span>
                <h2 class="section-title mt-2">Find Your Favorite</h2>
            </div>

            <div class="col-lg-6">
                <form action="{{ route('products.index') }}" method="GET">
                    <div class="input-group">
                        <input
                            type="text"
                            name="search"
                            class="catalog-search"
                            placeholder="Search your favorite treats..."
                            value="{{ request('search') }}"
                        >

                        <button class="btn-fazbite border-0" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </form>
            </div>

        </div>

        <div class="mb-5">

            <a href="{{ route('products.index') }}"
               class="filter-link {{ !request('category') ? 'active' : '' }}">
                All Products
            </a>

            @foreach($categories as $category)
                <a
                    href="{{ route('products.index', array_merge(request()->except('page'), ['category' => $category->slug])) }}"
                    class="filter-link {{ request('category') == $category->slug ? 'active' : '' }}"
                >
                    {{ $category->name }}
                    ({{ $category->products_count }})
                </a>
            @endforeach

        </div>

        <div class="row g-4">

            @forelse($products as $product)
                @php
                    $rawImageName = $product->image ? basename($product->image) : '';
                    $jpgFallbackName = $rawImageName ? preg_replace('/\.jpeg$/i', '.jpg', $rawImageName) : '';
                @endphp

                <div class="col-6 col-lg-3">

                    <div class="product-card">

                        <a href="{{ route('products.show', $product->slug) }}">

                            <div class="catalog-image">

                                @if($product->image)
                                    <img
                                        src="{{ asset('storage/' . $rawImageName) }}"
                                        data-jpg-fallback="{{ asset('storage/' . $jpgFallbackName) }}"
                                        alt="{{ $product->name }}"
                                        loading="lazy"
                                        onerror="if (!this.dataset.triedJpg && this.dataset.jpgFallback && this.src !== this.dataset.jpgFallback) { this.dataset.triedJpg = '1'; this.src = this.dataset.jpgFallback; } else { this.onerror = null; this.src = 'https://placehold.co/600x600/f5efe4/76543e?text=FazBite'; }"
                                    >
                                @else
                                    <img
                                        src="https://placehold.co/600x600/f5efe4/76543e?text=FazBite"
                                        alt="{{ $product->name }}"
                                    >
                                @endif

                                <span class="catalog-badge">
                                    {{ $product->category->name ?? 'FazBite' }}
                                </span>

                            </div>

                        </a>

                        <div class="product-info">

                            <div class="catalog-meta">
                                FAZBITE SIGNATURE
                            </div>

                            <h3 class="catalog-name">
                                {{ $product->name }}
                            </h3>

                            <p class="catalog-description">
                                {{ \Illuminate\Support\Str::limit($product->description, 75) }}
                            </p>

                            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2">

                                <span class="catalog-price">
                                    Rp{{ number_format($product->price, 0, ',', '.') }}
                                </span>

                                <span class="small text-muted">
                                    Stock: {{ $product->stock }}
                                </span>

                            </div>

                            <a
                                href="{{ route('products.show', $product->slug) }}"
                                class="catalog-detail"
                            >
                                VIEW DETAILS
                                <i class="fa-solid fa-arrow-right ms-1"></i>
                            </a>

                        </div>

                    </div>

                </div>

            @empty

                <div class="col-12">
                    <div class="catalog-empty">
                        <i class="fa-solid fa-cookie-bite fa-2x mb-3"></i>

                        <h3>No Products Found</h3>

                        <p>
                            We couldn't find any products matching your search.
                        </p>

                        <a href="{{ route('products.index') }}" class="btn-fazbite">
                            VIEW ALL PRODUCTS
                        </a>
                    </div>
                </div>

            @endforelse

        </div>

        <div class="mt-5 d-flex justify-content-center">
            {{ $products->links('pagination::bootstrap-5') }}
        </div>

    </div>
</section>

@endsection