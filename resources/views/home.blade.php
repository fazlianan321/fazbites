
@extends('layouts.app')

@section('title', 'FazBite | Premium Artisan Bakery')
@section('description', 'Discover the finest artisan breads, pastries, cakes, and desserts. Freshly baked, made with love.')

@section('content')

<!-- =========================================
     HERO SECTION
========================================= -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <div class="hero-content">

                    <div class="hero-eyebrow animate-fade-up">
                        <span class="hero-eyebrow-line"></span>
                        <span>THE ART OF BAKING</span>
                    </div>

                    <h1 class="hero-title animate-fade-up delay-1">
                        A Little Taste
                        <br>
                        of <span>Happiness.</span>
                    </h1>

                    <p class="hero-description animate-fade-up delay-2">
                        Crafted with passion, baked with love.
                        Discover our collection of artisan breads,
                        delicate pastries, and delightful desserts
                        made to make every moment special.
                    </p>

                    <div class="hero-buttons animate-fade-up delay-3">
                        <a href="{{ route('products.index') }}" class="btn-fazbite">
                            Explore Collection
                            <i class="fa-solid fa-arrow-right"></i>
                        </a>

                        <a href="#about" class="hero-text-link">
                            Discover Our Story
                            <i class="fa-solid fa-arrow-down"></i>
                        </a>
                    </div>

                    <div class="hero-stats animate-fade-up delay-3">

                        <div class="hero-stat">
                            <h3>100%</h3>
                            <p>Freshly Made</p>
                        </div>

                        <div class="hero-stat-divider"></div>

                        <div class="hero-stat">
                            <h3>08+</h3>
                            <p>Special Products</p>
                        </div>

                        <div class="hero-stat-divider"></div>

                        <div class="hero-stat">
                            <h3>LOVE</h3>
                            <p>In Every Bite</p>
                        </div>

                    </div>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="hero-visual animate-fade-in">

                    <div class="hero-image-main">
                        <img
                            src="{{ asset('storage/products/3.jpeg') }}"
                            alt="FazBite Premium Chocolate Cake"
                            onerror="this.src='https://placehold.co/750x850/f0e5d5/493326?text=FazBite+Bakery'">
                    </div>

                    <div class="hero-image-accent">
                        <img
                            src="{{ asset('storage/products/2.jpeg') }}"
                            alt="Fresh Butter Croissant"
                            onerror="this.src='https://placehold.co/300x300/e8ded0/493326?text=Fresh+Pastry'">
                    </div>

                    <div class="hero-floating-card animate-float">
                        <div class="floating-icon">
                            <i class="fa-solid fa-heart"></i>
                        </div>

                        <div>
                            <strong>Made with Love</strong>
                            <span>Quality in every bite</span>
                        </div>
                    </div>

                    <div class="hero-image-caption">
                        <span>01 / 04</span>
                        <span>ARTISAN COLLECTION</span>
                    </div>

                    <div class="hero-decoration"></div>

                </div>
            </div>

        </div>
    </div>

    <div class="hero-bottom-label">
        <span>FRESHLY BAKED</span>
        <span class="hero-bottom-dot"></span>
        <span>MADE WITH LOVE</span>
    </div>
</section>


<!-- =========================================
     MARQUEE SECTION
========================================= -->
<section class="marquee-section">
    <div class="marquee-track">

        @for($i = 0; $i < 4; $i++)
            <div class="marquee-item">
                <span>FRESHLY BAKED</span>
                <i class="fa-solid fa-star"></i>
                <span>MADE WITH LOVE</span>
                <i class="fa-solid fa-star"></i>
                <span>CRAFTED WITH PASSION</span>
                <i class="fa-solid fa-star"></i>
            </div>
        @endfor

    </div>
</section>


<!-- =========================================
     ABOUT SECTION
========================================= -->
<section class="about-section" id="about">
    <div class="container">

        <div class="row align-items-center g-5">

            <div class="col-lg-6">
                <div class="about-visual reveal">

                    <div class="about-image-main">
                        <img
                            src="{{ asset('storage/products/1.jpeg') }}"
                            alt="Fresh Artisan Bread"
                            onerror="this.src='https://placehold.co/650x750/f0e5d5/493326?text=Artisan+Bread'">
                    </div>

                    <div class="about-image-small">
                        <img
                            src="{{ asset('storage/products/6.jpeg') }}"
                            alt="Fresh Cinnamon Roll"
                            onerror="this.src='https://placehold.co/300x350/e8ded0/493326?text=Cinnamon+Roll'">
                    </div>

                    <div class="about-stamp">
                        <div class="stamp-inner">
                            <i class="fa-solid fa-heart"></i>
                            <span>BAKED</span>
                            <span>WITH LOVE</span>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-6">
                <div class="about-content reveal">

                    <span class="section-label">OUR STORY</span>

                    <h2 class="section-heading about-heading mt-3">
                        More Than Just
                        <span>Something Delicious.</span>
                    </h2>

                    <p class="about-description">
                        At FazBite, we believe that the finest moments
                        often begin with the simplest pleasures.
                        A warm loaf of bread, a delicate pastry,
                        or a sweet dessert shared with someone special.
                    </p>

                    <p class="about-description">
                        Every creation is made with carefully selected
                        ingredients, attention to detail, and a passion
                        for bringing happiness through the art of baking.
                    </p>

                    <div class="about-signature">
                        <span>FazBite</span>
                        <small>Freshly Baked, Made with Love.</small>
                    </div>

                    <a href="{{ route('products.index') }}" class="btn-fazbite mt-4">
                        Discover Our Products
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>

                </div>
            </div>

        </div>

    </div>
</section>


<!-- =========================================
     CATEGORY SECTION
========================================= -->
<section class="category-section">
    <div class="container">

        <div class="section-header text-center reveal">
            <span class="section-label">EXPLORE OUR COLLECTION</span>
            <h2 class="section-heading mt-3">A World of Delight</h2>
            <p class="section-description">
                Discover something wonderful for every craving.
            </p>
        </div>

        <div class="row g-4 mt-4">

            @php
                $categoryIcons = [
                    'artisan-bread' => 'fa-bread-slice',
                    'pastry' => 'fa-croissant',
                    'cake' => 'fa-cake-candles',
                    'cookies-dessert' => 'fa-cookie-bite',
                ];
            @endphp

            @foreach($categories as $category)
                <div class="col-6 col-lg-3 reveal">

                    <a href="{{ route('products.index', ['category' => $category->slug]) }}"
                       class="category-card">

                        <div class="category-card-icon">
                            <i class="fa-solid {{ $categoryIcons[$category->slug] ?? 'fa-utensils' }}"></i>
                        </div>

                        <div class="category-card-content">
                            <h3>{{ $category->name }}</h3>

                            <p>
                                {{ $category->products_count }}
                                {{ $category->products_count == 1 ? 'Product' : 'Products' }}
                            </p>
                        </div>

                        <div class="category-card-arrow">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        </div>

                    </a>

                </div>
            @endforeach

        </div>

    </div>
</section>


<!-- =========================================
     FEATURED PRODUCTS
========================================= -->
<section class="featured-section">
    <div class="container">

        <div class="featured-header reveal">

            <div>
                <span class="section-label">HANDPICKED FOR YOU</span>
                <h2 class="section-heading mt-3">Our Signature Creations</h2>
                <p class="section-description">
                    A collection of our finest creations, made to delight.
                </p>
            </div>

            <a href="{{ route('products.index') }}" class="featured-view-all">
                View All Products
                <i class="fa-solid fa-arrow-right"></i>
            </a>

        </div>

        <div class="row g-4 mt-3">

            @forelse($featuredProducts as $product)
                <div class="col-6 col-lg-3 reveal">

                    <article class="premium-product-card">

                        <a href="{{ route('products.show', $product->slug) }}"
                           class="premium-product-image">

                            @if($product->image)
                                <img
                                    src="{{ asset('storage/'.$product->image) }}"
                                    alt="{{ $product->name }}"
                                    loading="lazy">
                            @else
                                <img
                                    src="https://placehold.co/500x600/f0e5d5/493326?text=FazBite"
                                    alt="{{ $product->name }}">
                            @endif

                            <span class="product-image-badge">
                                FAZBITE SELECTION
                            </span>

                            <span class="product-quick-view">
                                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            </span>

                        </a>

                        <div class="premium-product-info">

                            <span class="product-category">
                                {{ $product->category->name ?? 'FazBite Collection' }}
                            </span>

                            <h3>
                                <a href="{{ route('products.show', $product->slug) }}">
                                    {{ $product->name }}
                                </a>
                            </h3>

                            <div class="premium-product-bottom">
                                <span class="product-price">
                                    Rp {{ number_format($product->price, 0, ',', '.') }}
                                </span>

                                <a href="{{ route('products.show', $product->slug) }}"
                                   class="product-arrow"
                                   aria-label="View {{ $product->name }}">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>

                        </div>

                    </article>

                </div>
            @empty
                <div class="col-12">
                    <div class="text-center py-5">
                        <h4>Products Coming Soon</h4>
                        <p class="text-secondary">
                            Our delicious collection will be available soon.
                        </p>
                    </div>
                </div>
            @endforelse

        </div>

    </div>
</section>


<!-- =========================================
     BRAND PROMOTION
========================================= -->
<section class="brand-promo-section">
    <div class="container">

        <div class="brand-promo reveal">

            <div class="brand-promo-content">
                <span class="section-label">A SPECIAL MOMENT</span>

                <h2>
                    Happiness Is
                    <br>
                    <span>Freshly Baked.</span>
                </h2>

                <p>
                    Treat yourself to something beautiful.
                    Because every day deserves a little sweetness.
                </p>

                <a href="{{ route('products.index') }}" class="btn-promo">
                    Find Your Favorite
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
            </div>

            <div class="brand-promo-image">
                <img
                    src="{{ asset('storage/products/5.jpeg') }}"
                    alt="FazBite Strawberry Shortcake"
                    loading="lazy"
                    onerror="this.src='https://placehold.co/600x650/e8ded0/493326?text=Sweet+Moments'">
            </div>

            <div class="promo-decoration">
                <i class="fa-solid fa-star"></i>
            </div>

        </div>

    </div>
</section>


<!-- =========================================
     WHY CHOOSE US
========================================= -->
<section class="values-section">
    <div class="container">

        <div class="text-center reveal">
            <span class="section-label">THE FAZBITE PROMISE</span>
            <h2 class="section-heading mt-3">Made With Intention</h2>
            <p class="section-description">
                Little details make every creation special.
            </p>
        </div>

        <div class="row g-4 mt-4">

            <div class="col-6 col-lg-3 reveal">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fa-solid fa-wheat-awn"></i>
                    </div>
                    <h4>Quality Ingredients</h4>
                    <p>Carefully selected ingredients for delightful creations.</p>
                </div>
            </div>

            <div class="col-6 col-lg-3 reveal">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fa-solid fa-heart"></i>
                    </div>
                    <h4>Made with Love</h4>
                    <p>Every product is prepared with care and passion.</p>
                </div>
            </div>

            <div class="col-6 col-lg-3 reveal">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fa-solid fa-bread-slice"></i>
                    </div>
                    <h4>Freshly Baked</h4>
                    <p>Fresh flavors and comforting textures in every bite.</p>
                </div>
            </div>

            <div class="col-6 col-lg-3 reveal">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fa-solid fa-gift"></i>
                    </div>
                    <h4>Special Moments</h4>
                    <p>Beautiful treats for your everyday celebrations.</p>
                </div>
            </div>

        </div>

    </div>
</section>


<!-- =========================================
     FINAL CTA
========================================= -->
<section class="final-cta-section">
    <div class="container text-center reveal">

        <span class="section-label">YOUR NEXT FAVORITE AWAITS</span>

        <h2>
            Make Today
            <span>A Little Sweeter.</span>
        </h2>

        <p>
            Explore our collection and find something made just for you.
        </p>

        <a href="{{ route('products.index') }}" class="btn-fazbite">
            Explore FazBite
            <i class="fa-solid fa-arrow-right"></i>
        </a>

    </div>
</section>


@endsection


<!-- =========================================
     PAGE SPECIFIC CSS
========================================= -->
@push('styles')
<style>

    /* HERO */

    .hero-section {
        position: relative;
        padding: 90px 0 105px;
        background: var(--cream);
        overflow: hidden;
    }

    .hero-eyebrow {
        display: flex;
        align-items: center;
        gap: 13px;
        color: var(--gold);
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 3px;
    }

    .hero-eyebrow-line {
        width: 35px;
        height: 1px;
        background: var(--gold);
    }

    .hero-title {
        font-family: 'Playfair Display', serif;
        color: var(--brown);
        font-size: clamp(48px, 6vw, 82px);
        line-height: 1.12;
        font-weight: 500;
        letter-spacing: -2px;
        margin: 28px 0;
    }

    .hero-title span {
        color: var(--gold);
        font-style: italic;
    }

    .hero-description {
        max-width: 490px;
        color: var(--muted);
        font-size: 14px;
        line-height: 2;
        margin-bottom: 30px;
    }

    .hero-buttons {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        gap: 25px;
    }

    .hero-text-link {
        color: var(--brown);
        font-size: 11px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        transition: color .3s;
    }

    .hero-text-link i {
        margin-left: 8px;
        color: var(--gold);
        transition: transform .3s;
    }

    .hero-text-link:hover {
        color: var(--gold);
    }

    .hero-text-link:hover i {
        transform: translateY(4px);
    }

    .hero-stats {
        display: flex;
        align-items: center;
        gap: 30px;
        margin-top: 55px;
    }

    .hero-stat h3 {
        font-family: 'Playfair Display', serif;
        font-size: 25px;
        font-weight: 600;
        color: var(--brown);
        margin-bottom: 5px;
    }

    .hero-stat p {
        font-size: 10px;
        color: var(--muted);
        margin: 0;
    }

    .hero-stat-divider {
        width: 1px;
        height: 37px;
        background: var(--border);
    }

    .hero-visual {
        position: relative;
        padding: 0 25px 45px 35px;
    }

    .hero-image-main {
        height: 530px;
        overflow: hidden;
        position: relative;
        z-index: 2;
    }

    .hero-image-main img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        animation: imageReveal 1.2s ease both;
    }

    .hero-image-accent {
        position: absolute;
        z-index: 3;
        width: 185px;
        height: 185px;
        bottom: 0;
        left: -10px;
        border: 8px solid var(--cream);
        overflow: hidden;
        box-shadow: var(--shadow);
    }

    .hero-image-accent img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .hero-floating-card {
        position: absolute;
        z-index: 4;
        right: -10px;
        bottom: 80px;
        background: white;
        padding: 17px 21px;
        display: flex;
        align-items: center;
        gap: 13px;
        box-shadow: var(--shadow);
    }

    .floating-icon {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--ivory);
        color: var(--gold);
    }

    .hero-floating-card strong {
        display: block;
        font-family: 'Playfair Display', serif;
        color: var(--brown);
        font-size: 14px;
    }

    .hero-floating-card span {
        display: block;
        color: var(--muted);
        font-size: 10px;
        margin-top: 4px;
    }

    .hero-image-caption {
        position: absolute;
        right: 25px;
        bottom: 13px;
        display: flex;
        gap: 15px;
        color: var(--muted);
        font-size: 9px;
        letter-spacing: 2px;
    }

    .hero-decoration {
        position: absolute;
        top: -25px;
        right: 0;
        width: 170px;
        height: 170px;
        border: 1px solid var(--gold-light);
        z-index: 1;
    }

    .hero-bottom-label {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        display: flex;
        align-items: center;
        gap: 12px;
        color: var(--muted);
        font-size: 9px;
        letter-spacing: 2px;
        white-space: nowrap;
    }

    .hero-bottom-dot {
        width: 5px;
        height: 5px;
        border-radius: 50%;
        background: var(--gold);
    }


    /* MARQUEE */

    .marquee-section {
        background: var(--brown);
        overflow: hidden;
        padding: 20px 0;
    }

    .marquee-item {
        display: flex;
        align-items: center;
        gap: 35px;
        padding-right: 35px;
        white-space: nowrap;
        color: var(--ivory);
        font-family: 'Playfair Display', serif;
        font-size: 18px;
        letter-spacing: 2px;
    }

    .marquee-item i {
        color: var(--gold-light);
        font-size: 11px;
    }


    /* ABOUT */

    .about-section {
        padding: 115px 0;
        background: white;
        overflow: hidden;
    }

    .about-visual {
        position: relative;
        padding: 0 55px 55px 0;
    }

    .about-image-main {
        height: 510px;
        overflow: hidden;
    }

    .about-image-main img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform .8s ease;
    }

    .about-image-main:hover img {
        transform: scale(1.05);
    }

    .about-image-small {
        position: absolute;
        bottom: 0;
        right: 0;
        width: 205px;
        height: 210px;
        border: 9px solid white;
        overflow: hidden;
        box-shadow: var(--shadow);
    }

    .about-image-small img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .about-stamp {
        position: absolute;
        top: 35px;
        right: 20px;
        width: 95px;
        height: 95px;
        border-radius: 50%;
        background: var(--gold);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        transform: rotate(12deg);
        box-shadow: var(--shadow);
    }

    .stamp-inner {
        display: flex;
        flex-direction: column;
        gap: 3px;
        font-size: 9px;
        font-weight: 700;
        letter-spacing: 1px;
    }

    .stamp-inner i {
        font-size: 17px;
        margin-bottom: 3px;
    }

    .about-heading span {
        display: block;
        color: var(--gold);
        font-style: italic;
    }

    .about-description {
        color: var(--muted);
        font-size: 13px;
        line-height: 2;
        margin-top: 22px;
    }

    .about-signature {
        margin-top: 30px;
        display: flex;
        flex-direction: column;
    }

    .about-signature span {
        font-family: 'Playfair Display', serif;
        font-size: 35px;
        font-style: italic;
        color: var(--brown);
    }

    .about-signature small {
        font-size: 10px;
        color: var(--gold);
        letter-spacing: 1px;
    }


    /* CATEGORY */

    .category-section {
        padding: 110px 0;
        background: var(--ivory);
    }

    .section-header {
        max-width: 650px;
        margin: auto;
    }

    .category-card {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        min-height: 210px;
        padding: 28px;
        background: white;
        border: 1px solid var(--border);
        color: var(--brown);
        position: relative;
        overflow: hidden;
        transition: all .4s ease;
    }

    .category-card:hover {
        background: var(--brown);
        color: white;
        transform: translateY(-8px);
        box-shadow: var(--shadow);
    }

    .category-card-icon {
        width: 52px;
        height: 52px;
        display: flex;
        align-items: center;
        justify-content: center;
        background: var(--ivory);
        color: var(--gold);
        font-size: 21px;
        margin-bottom: 28px;
        transition: all .4s;
    }

    .category-card:hover .category-card-icon {
        background: rgba(255,255,255,.13);
        color: var(--gold-light);
    }

    .category-card-content h3 {
        font-family: 'Playfair Display', serif;
        font-size: 20px;
        margin-bottom: 8px;
    }

    .category-card-content p {
        color: var(--muted);
        font-size: 11px;
        margin: 0;
        transition: color .3s;
    }

    .category-card:hover .category-card-content p {
        color: #d7c9bb;
    }

    .category-card-arrow {
        position: absolute;
        right: 25px;
        bottom: 25px;
        color: var(--gold);
        transition: transform .3s;
    }

    .category-card:hover .category-card-arrow {
        transform: translate(4px, -4px);
        color: white;
    }


    /* FEATURED PRODUCTS */

    .featured-section {
        padding: 115px 0;
        background: var(--cream);
    }

    .featured-header {
        display: flex;
        align-items: end;
        justify-content: space-between;
        gap: 20px;
    }

    .featured-view-all {
        display: inline-flex;
        align-items: center;
        gap: 13px;
        color: var(--brown);
        font-size: 11px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 1px;
        padding-bottom: 10px;
        border-bottom: 1px solid var(--gold);
        white-space: nowrap;
        transition: all .3s;
    }

    .featured-view-all:hover {
        color: var(--gold);
        gap: 20px;
    }

    .premium-product-card {
        height: 100%;
        background: white;
        border: 1px solid var(--border);
        transition: all .45s ease;
    }

    .premium-product-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 45px rgba(73,51,38,.12);
    }

    .premium-product-image {
        display: block;
        position: relative;
        height: 290px;
        overflow: hidden;
        background: var(--ivory);
    }

    .premium-product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform .8s cubic-bezier(.2,.7,.2,1);
    }

    .premium-product-card:hover .premium-product-image img {
        transform: scale(1.08);
    }

    .product-image-badge {
        position: absolute;
        top: 15px;
        left: 15px;
        background: rgba(251,248,242,.94);
        padding: 8px 11px;
        color: var(--brown);
        font-size: 8px;
        font-weight: 700;
        letter-spacing: 1px;
    }

    .product-quick-view {
        position: absolute;
        right: 15px;
        bottom: 15px;
        width: 40px;
        height: 40px;
        background: white;
        color: var(--brown);
        display: flex;
        align-items: center;
        justify-content: center;
        transform: translateY(15px);
        opacity: 0;
        transition: all .35s;
    }

    .premium-product-card:hover .product-quick-view {
        opacity: 1;
        transform: translateY(0);
    }

    .premium-product-info {
        padding: 23px 20px;
    }

    .premium-product-info h3 {
        margin: 9px 0 20px;
        font-family: 'Playfair Display', serif;
        font-size: 19px;
        line-height: 1.4;
    }

    .premium-product-info h3 a {
        color: var(--brown);
        transition: color .3s;
    }

    .premium-product-info h3 a:hover {
        color: var(--gold);
    }

    .premium-product-bottom {
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-top: 1px solid var(--border);
        padding-top: 15px;
    }

    .product-arrow {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 35px;
        height: 35px;
        background: var(--ivory);
        color: var(--brown);
        transition: all .3s;
    }

    .product-arrow:hover {
        background: var(--brown);
        color: white;
    }


    /* BRAND PROMO */

    .brand-promo-section {
        padding: 50px 0 110px;
        background: var(--cream);
    }

    .brand-promo {
        position: relative;
        display: grid;
        grid-template-columns: 1fr 1fr;
        background: var(--ivory);
        min-height: 430px;
        overflow: hidden;
    }

    .brand-promo-content {
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 65px;
    }

    .brand-promo-content h2 {
        font-family: 'Playfair Display', serif;
        font-size: clamp(35px, 4vw, 52px);
        color: var(--brown);
        line-height: 1.2;
        margin: 20px 0;
    }

    .brand-promo-content h2 span {
        color: var(--gold);
        font-style: italic;
    }

    .brand-promo-content p {
        color: var(--muted);
        font-size: 13px;
        line-height: 1.9;
        max-width: 400px;
        margin-bottom: 28px;
    }

    .btn-promo {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 12px;
        background: var(--brown);
        color: white;
        padding: 15px 25px;
        font-size: 10px;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
        width: fit-content;
        transition: all .35s;
    }

    .btn-promo:hover {
        background: var(--gold);
        color: white;
        transform: translateY(-4px);
    }

    .brand-promo-image {
        min-height: 430px;
        overflow: hidden;
    }

    .brand-promo-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform .8s;
    }

    .brand-promo:hover .brand-promo-image img {
        transform: scale(1.05);
    }

    .promo-decoration {
        position: absolute;
        top: 25px;
        right: calc(50% - 22px);
        width: 45px;
        height: 45px;
        border-radius: 50%;
        background: var(--gold);
        color: white;
        display: flex;
        align-items: center;
        justify-content: center;
    }


    /* VALUES */

    .values-section {
        padding: 110px 0;
        background: white;
    }

    .value-card {
        text-align: center;
        padding: 30px 20px;
        height: 100%;
        transition: transform .4s;
    }

    .value-card:hover {
        transform: translateY(-8px);
    }

    .value-icon {
        width: 65px;
        height: 65px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 22px;
        background: var(--ivory);
        color: var(--gold);
        font-size: 22px;
        transition: all .4s;
    }

    .value-card:hover .value-icon {
        background: var(--brown);
        color: white;
        transform: rotateY(180deg);
    }

    .value-card h4 {
        font-family: 'Playfair Display', serif;
        color: var(--brown);
        font-size: 18px;
        margin-bottom: 12px;
    }

    .value-card p {
        color: var(--muted);
        font-size: 12px;
        line-height: 1.9;
    }


    /* FINAL CTA */

    .final-cta-section {
        padding: 110px 0;
        background: var(--ivory);
    }

    .final-cta-section h2 {
        font-family: 'Playfair Display', serif;
        color: var(--brown);
        font-size: clamp(38px, 5vw, 60px);
        line-height: 1.25;
        margin: 20px 0;
    }

    .final-cta-section h2 span {
        color: var(--gold);
        font-style: italic;
        display: block;
    }

    .final-cta-section p {
        color: var(--muted);
        font-size: 13px;
        margin-bottom: 30px;
    }


    /* RESPONSIVE */

    @media (max-width: 991px) {

        .hero-section {
            padding: 70px 0 90px;
        }

        .hero-visual {
            margin-top: 10px;
        }

        .hero-image-main {
            height: 470px;
        }

        .about-section,
        .category-section,
        .featured-section,
        .values-section {
            padding: 80px 0;
        }

        .brand-promo-content {
            padding: 40px;
        }
    }

    @media (max-width: 767px) {

        .hero-section {
            padding: 55px 0 80px;
        }

        .hero-title {
            font-size: 52px;
            letter-spacing: -1.5px;
        }

        .hero-description {
            font-size: 13px;
        }

        .hero-stats {
            gap: 16px;
            margin-top: 40px;
        }

        .hero-stat h3 {
            font-size: 21px;
        }

        .hero-stat p {
            font-size: 9px;
        }

        .hero-visual {
            padding: 0 15px 40px;
        }

        .hero-image-main {
            height: 400px;
        }

        .hero-image-accent {
            width: 135px;
            height: 135px;
        }

        .hero-floating-card {
            right: 0;
            bottom: 65px;
            padding: 12px;
        }

        .hero-decoration {
            width: 110px;
            height: 110px;
        }

        .hero-image-caption {
            right: 15px;
            font-size: 8px;
        }

        .about-visual {
            padding-right: 35px;
        }

        .about-image-main {
            height: 380px;
        }

        .about-image-small {
            width: 140px;
            height: 145px;
        }

        .about-stamp {
            width: 75px;
            height: 75px;
            right: 5px;
            top: 20px;
        }

        .stamp-inner {
            font-size: 7px;
        }

        .featured-header {
            align-items: flex-start;
            flex-direction: column;
        }

        .premium-product-image {
            height: 210px;
        }

        .premium-product-info {
            padding: 15px 12px;
        }

        .premium-product-info h3 {
            font-size: 16px;
        }

        .product-category {
            font-size: 8px;
        }

        .product-price {
            font-size: 12px;
        }

        .brand-promo {
            grid-template-columns: 1fr;
        }

        .brand-promo-content {
            padding: 40px 25px;
        }

        .brand-promo-image {
            min-height: 300px;
            height: 300px;
        }

        .promo-decoration {
            display: none;
        }

        .value-card {
            padding: 20px 10px;
        }

    }

    @media (max-width: 400px) {

        .hero-title {
            font-size: 44px;
        }

        .hero-stats {
            gap: 11px;
        }

        .hero-stat h3 {
            font-size: 18px;
        }

        .premium-product-image {
            height: 170px;
        }

        .premium-product-info h3 {
            font-size: 14px;
        }

        .product-image-badge {
            font-size: 7px;
            padding: 6px;
        }

    }

</style>
@endpush


<!-- =========================================
     PAGE SPECIFIC JAVASCRIPT
========================================= -->
@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {

    // Reveal animation for homepage sections
    const elements = document.querySelectorAll('.reveal');

    if ('IntersectionObserver' in window) {

        const revealObserver = new IntersectionObserver(function (entries) {

            entries.forEach(function (entry) {

                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                    revealObserver.unobserve(entry.target);
                }

            });

        }, {
            threshold: 0.12
        });

        elements.forEach(function (element) {
            revealObserver.observe(element);
        });

    } else {

        elements.forEach(function (element) {
            element.classList.add('active');
        });

    }

});
</script>
@endpush
