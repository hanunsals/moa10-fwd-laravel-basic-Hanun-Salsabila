@extends('layouts.main')

@section('container')
    <!-- ======= Hero Slider Section ======= -->
    <section id="hero-slider" class="hero-slider">
        <div class="container-md" data-aos="fade-in">
            <div class="row">
                <div class="col-12">
                    <div class="swiper sliderFeaturedPosts">
                        <div class="swiper-wrapper">
                            @if ($posts->count())
                                @foreach ($posts->take(3) as $post)
                                    <div class="swiper-slide">
                                        @if ($post->image)
                                            <a href="/posts/{{ $post->slug }}" class="img-bg d-flex align-items-end"
                                                style="background-image: url('{{ asset('storage/' . $post->image) }}');">
                                            @else
                                                <a href="/posts/{{ $post->slug }}" class="img-bg d-flex align-items-end"
                                                    style="background-image: url('https://source.unsplash.com/1948x843?{{ $post->category->name }}');">
                                        @endif
                                        <div class="img-bg-inner">
                                            <h2>{{ $post->title }}</h2>
                                            <p>{{ $post->excerpt }}</p>
                                        </div>
                                        </a>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                        <div class="custom-swiper-button-next">
                            <span class="bi-chevron-right"></span>
                        </div>
                        <div class="custom-swiper-button-prev">
                            <span class="bi-chevron-left"></span>
                        </div>

                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- End Hero Slider Section -->

    <!-- ======= Post Grid Section ======= -->
    <section id="posts" class="posts">
        <div class="container" data-aos="fade-up">

            <div class="section-header d-flex justify-content-between align-items-center mb-5">
                <h2>Posts</h2>
                <div><a href="/posts" class="more">See All Posts</a></div>
            </div>

            <div class="row g-5">
                <div class="col-lg-4">
                    <div class="post-entry-1 lg">
                        @if ($posts->count() > 3)
                            @if ($posts[3]->image)
                                <a href="/posts/{{ $posts[3]->slug }}"><img src="{{ asset('storage/' . $posts[3]->image) }}"
                                        alt="{{ $posts[3]->category->name }}" alt="" class="img-fluid"></a>
                            @else
                                <a href="/posts/{{ $posts[3]->slug }}"><img
                                        src="https://source.unsplash.com/900x571?{{ $posts[3]->category->name }}"
                                        alt="{{ $posts[3]->category->name }}" alt="" class="img-fluid"></a>
                            @endif
                            <div class="post-meta"><span class="date">{{ $posts[3]->category->name }}</span> <span
                                    class="mx-1">&bullet;</span>
                                <span>{{ $posts[3]->created_at->format('M jS \'y') }}</span>
                            </div>
                            <h2><a href="/posts/{{ $posts[3]->slug }}">{{ $posts[3]->title }}</a></h2>
                            <p class="mb-4 d-block">{{ $posts[3]->excerpt }}</p>

                            <div class="d-flex align-items-center author">
                                <div class="photo"><img src="assets/img/person-1.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="name">
                                    <h3 class="m-0 p-0">{{ $posts[3]->author->name }}</h3>
                                </div>
                            </div>
                        @else
                            @if ($posts[0]->image)
                                <a href="/posts/{{ $post->slug }}"><img src="{{ asset('storage/' . $posts[0]->image) }}"
                                        alt="{{ $posts[0]->category->name }}" alt="" class="img-fluid"></a>
                            @else
                                <a href="/posts/{{ $post->slug }}"><img
                                        src="https://source.unsplash.com/900x571?{{ $posts[0]->category->name }}"
                                        alt="{{ $posts[0]->category->name }}" alt="" class="img-fluid"></a>
                            @endif
                            <div class="post-meta"><span class="date">{{ $posts[0]->category->name }}</span> <span
                                    class="mx-1">&bullet;</span>
                                <span>{{ $posts[0]->created_at->format('M jS \'y') }}</span>
                            </div>
                            <h2><a href="/posts/{{ $post->slug }}">{{ $posts[0]->title }}</a></h2>
                            <p class="mb-4 d-block">{{ $posts[0]->excerpt }}</p>

                            <div class="d-flex align-items-center author">
                                <div class="photo"><img src="assets/img/person-1.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="name">
                                    <h3 class="m-0 p-0">{{ $posts[0]->author->name }}</h3>
                                </div>
                            </div>
                        @endif
                    </div>

                </div>

                <div class="col-lg-8">
                    <div class="row g-5">
                        @if ($posts->count() > 7)
                            <div class="col-lg-4 border-start custom-border">
                                <div class="post-entry-1">
                                    @foreach ($posts as $index => $post)
                                        @if ($index >= 4 && $index % 2 == 0)
                                            @if ($post->image)
                                                <a href="/posts/{{ $post->slug }}"><img
                                                        src="{{ asset('storage/' . $post->image) }}"
                                                        alt="{{ $post->category->name }}" alt=""
                                                        class="img-fluid"></a>
                                            @else
                                                <a href="/posts/{{ $post->slug }}"><img
                                                        src="https://source.unsplash.com/900x571?{{ $post->category->name }}"
                                                        alt="{{ $post->category->name }}" alt=""
                                                        class="img-fluid"></a>
                                            @endif
                                            <div class="post-meta"><span class="date">{{ $post->category->name }}</span>
                                                <span class="mx-1">&bullet;</span>
                                                <span>{{ $post->created_at->format('M jS \'y') }}</span>
                                            </div>
                                            <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-4 border-start custom-border">
                                <div class="post-entry-1">
                                    @foreach ($posts as $index => $post)
                                        @if ($index >= 4 && $index % 2 != 0)
                                            @if ($post->image)
                                                <a href="/posts/{{ $post->slug }}"><img
                                                        src="{{ asset('storage/' . $post->image) }}"
                                                        alt="{{ $post->category->name }}" alt=""
                                                        class="img-fluid"></a>
                                            @else
                                                <a href="/posts/{{ $post->slug }}"><img
                                                        src="https://source.unsplash.com/900x571?{{ $post->category->name }}"
                                                        alt="{{ $post->category->name }}" alt=""
                                                        class="img-fluid"></a>
                                            @endif
                                            <div class="post-meta"><span
                                                    class="date">{{ $post->category->name }}</span>
                                                <span class="mx-1">&bullet;</span>
                                                <span>{{ $post->created_at->format('M jS \'y') }}</span>
                                            </div>
                                            <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @else
                            <div class="col-lg-4 border-start custom-border">
                                <div class="post-entry-1">
                                    @foreach ($posts as $index => $post)
                                        @if ($index <= 3 && $index % 2 == 0)
                                            @if ($post->image)
                                                <a href="/posts/{{ $post->slug }}"><img
                                                        src="{{ asset('storage/' . $post->image) }}"
                                                        alt="{{ $post->category->name }}" alt=""
                                                        class="img-fluid"></a>
                                            @else
                                                <a href="/posts/{{ $post->slug }}"><img
                                                        src="https://source.unsplash.com/900x571?{{ $post->category->name }}"
                                                        alt="{{ $post->category->name }}" alt=""
                                                        class="img-fluid"></a>
                                            @endif
                                            <div class="post-meta"><span
                                                    class="date">{{ $post->category->name }}</span>
                                                <span class="mx-1">&bullet;</span>
                                                <span>{{ $post->created_at->format('M jS \'y') }}</span>
                                            </div>
                                            <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-4 border-start custom-border">
                                <div class="post-entry-1">
                                    @foreach ($posts as $index => $post)
                                        @if ($index <= 3 && $index % 2 != 0)
                                            @if ($post->image)
                                                <a href="/posts/{{ $post->slug }}"><img
                                                        src="{{ asset('storage/' . $post->image) }}"
                                                        alt="{{ $post->category->name }}" alt=""
                                                        class="img-fluid"></a>
                                            @else
                                                <a href="/posts/{{ $post->slug }}"><img
                                                        src="https://source.unsplash.com/900x571?{{ $post->category->name }}"
                                                        alt="{{ $post->category->name }}" alt=""
                                                        class="img-fluid"></a>
                                            @endif
                                            <div class="post-meta"><span
                                                    class="date">{{ $post->category->name }}</span>
                                                <span class="mx-1">&bullet;</span>
                                                <span>{{ $post->created_at->format('M jS \'y') }}</span>
                                            </div>
                                            <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                        @endif
                        <!-- Trending Section -->
                        <div class="col-lg-4">

                            <div class="trending">
                                <h3>Trending</h3>
                                <ul class="trending-post">
                                    @foreach ($trending->take(5) as $item)
                                        <li>
                                            <a href="/posts/{{ $post->slug }}">
                                                <span class="number">{{ $loop->iteration }}</span>
                                                <h3>{{ $item->title }}</h3>
                                                <span class="author">{{ $item->author->name }}</span>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
                        <!-- End Trending Section -->
                    </div>

                </div>

            </div> <!-- End .row -->
        </div>
    </section> <!-- End Post Grid Section -->
@endsection
