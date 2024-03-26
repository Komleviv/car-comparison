@extends('front.layouts.app')

@section('content')
    <main class="page__main">
        <article class="news-post">
            <header class="news-post__header">
                <div class="news-post__image"><img src="{{ $news->img_link }}" alt="{{ $news->title }}"></div>
                @php
                    $dt = $news->created_at;
                    $months = Config::get('constants.months');
                    $month = $months[$dt->format('n')];
                    $date = $dt->format('d') . " " . $month . " " . $dt->format('Y');
                @endphp
                <div class="news-post__info"><time class="news-post__time" datetime="{{ $dt->format('Y-m-d G:i') }}"><span>{{ $date }}</span><span>{{ $dt->format('G:i') }}</span></time>
                    <div class="news-post__stats">
                        <div class="news-post__likes"><svg class="icon icon--like" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="20" height="20">
                                <path d="m11.516 6.508-.22.658H16.667c.643 0 1.166.524 1.166 1.167V10a.333.333 0 0 1-.02.117l-2.297 6.124a1.175 1.175 0 0 1-1.094.758H3.333a1.168 1.168 0 0 1-1.166-1.166v-7.5c0-.643.523-1.167 1.166-1.167h2.344l.15-.18 3.916-4.699A.336.336 0 0 1 10 2.166h1.343c.374 0 .73.182.948.485.218.302.278.696.16 1.051l-.935 2.806ZM3.333 7.833h-.5v8.5H5.5v-8.5H3.333Zm13.802 2.191.032-.085V7.833h-6.334a.331.331 0 0 1-.316-.438v-.002l1.302-3.902.22-.658h-1.883l-.15.18L6.283 7.48l-.116.139v8.713h8.602l.122-.325 2.244-5.984Z"></path>
                            </svg><span class="like-value">{{ number_format($news->likes, 0, '', ' ') }}</span></div>
                        <div class="news-post__views"><svg class="icon icon--eye" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="20" height="20">
                                <path d="M19.321 9.747c-.027-.062-.689-1.53-2.16-3C15.2 4.785 12.725 3.75 10 3.75c-2.725 0-5.2 1.036-7.16 2.996-1.472 1.471-2.137 2.941-2.161 3a.625.625 0 0 0 0 .509c.027.061.689 1.529 2.16 3 1.96 1.96 4.436 2.995 7.161 2.995 2.725 0 5.2-1.036 7.16-2.995 1.472-1.471 2.134-2.939 2.161-3a.625.625 0 0 0 0-.508ZM10 15c-2.405 0-4.505-.874-6.245-2.598A10.426 10.426 0 0 1 1.953 10a10.416 10.416 0 0 1 1.802-2.402C5.495 5.874 7.595 5 10 5c2.405 0 4.505.874 6.244 2.598.715.709 1.324 1.518 1.807 2.402-.563 1.052-3.017 5-8.051 5Zm0-8.75a3.75 3.75 0 1 0 0 7.5 3.75 3.75 0 0 0 0-7.5Zm0 6.25a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5Z"></path>
                            </svg>{{ number_format($news->views, 0, '', ' ') }}</div>
                    </div>
                </div>
                <h1 class="news-post__title">{{ $news->title }}</h1>
            </header>
            <div class="news-post__main">
                {{ $news->short_text }}
                {!! $news->text !!}
            </div>
            <footer class="news-post__footer"><button class="btn-like news-post__btn-like" type="button"><svg class="icon icon--like-big btn-like__icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28" width="28" height="28">
                        <path d="M23.333 9.334h-6.547l1.31-3.928a2.342 2.342 0 0 0-.32-2.103 2.344 2.344 0 0 0-1.895-.969H14a1.17 1.17 0 0 0-.897.42l-5.484 6.58H4.667a2.336 2.336 0 0 0-2.334 2.333v10.5a2.336 2.336 0 0 0 2.334 2.334H20.19a2.345 2.345 0 0 0 2.186-1.515l3.216-8.576c.049-.13.074-.27.074-.41v-2.333a2.336 2.336 0 0 0-2.334-2.333ZM4.667 11.667H7v10.5H4.667v-10.5Zm18.666 2.123-3.142 8.377H9.333V10.923l5.213-6.256h1.337l-1.822 5.464a1.163 1.163 0 0 0 1.106 1.536h8.166v2.123Z"></path>
                    </svg><span class="btn-like__count like-value">{{ number_format($news->likes, 0, '', ' ') }}</span></button>
                <div class="share news-post__share">
                    <div class="share__title">Поделиться</div>
                    <div class="share__buttons"><a class="share__button" href="https://vk.com/share.php?url={{ url()->current() }}" title="ВКонтакте"><svg class="icon icon--social-vk" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="20" height="20">
                                <path d="M17.277 6.093c.106-.353 0-.612-.503-.612H15.11c-.424 0-.617.224-.724.47 0 0-.846 2.065-2.046 3.404-.387.39-.564.512-.775.512-.106 0-.26-.123-.26-.476V6.093c0-.423-.121-.612-.475-.612H8.213c-.264 0-.424.196-.424.383 0 .401.6.494.662 1.624v2.45c0 .537-.097.635-.31.635-.564 0-1.937-2.072-2.751-4.444-.159-.46-.32-.647-.744-.647H2.98c-.476 0-.57.224-.57.47 0 .442.563 2.629 2.627 5.521 1.376 1.975 3.313 3.046 5.078 3.046 1.057 0 1.188-.238 1.188-.648v-1.493c0-.475.101-.57.436-.57.246 0 .67.124 1.658 1.075 1.128 1.129 1.315 1.635 1.949 1.635h1.664c.475 0 .713-.238.576-.707-.15-.467-.688-1.146-1.404-1.95-.388-.46-.97-.953-1.146-1.2-.247-.318-.176-.458 0-.74 0 0 2.029-2.856 2.24-3.828Z"></path>
                            </svg></a><a class="share__button" href="viber://forward?text={{ $news->title }}%20{{ url()->current() }}" title="Viber"><svg class="icon icon--social-viber" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path d="M16.676 2.627a21.9 21.9 0 0 0-9.555 0l-.34.075a4.905 4.905 0 0 0-3.683 3.58 19.467 19.467 0 0 0 0 9.577 4.905 4.905 0 0 0 3.444 3.52l.465 2.776a.5.5 0 0 0 .826.29l2.73-2.443a21.9 21.9 0 0 0 6.113-.487l.34-.075a4.905 4.905 0 0 0 3.684-3.58 19.47 19.47 0 0 0 0-9.577 4.905 4.905 0 0 0-3.685-3.58l-.34-.076ZM7.965 6.201a.822.822 0 0 0-.537.106h-.014c-.375.22-.713.497-1.001.823-.24.277-.37.557-.404.827-.02.16-.006.322.04.475l.019.01c.27.793.622 1.556 1.052 2.274a13.374 13.374 0 0 0 2.03 2.775l.024.034.038.028.023.027.028.024a13.568 13.568 0 0 0 2.782 2.04c1.155.63 1.856.926 2.277 1.05v.006c.123.038.235.055.348.055a1.61 1.61 0 0 0 .964-.414c.325-.288.6-.627.814-1.004v-.007c.2-.38.133-.738-.157-.98A12.12 12.12 0 0 0 14.41 13c-.448-.244-.903-.097-1.087.15l-.393.495c-.202.246-.568.212-.568.212l-.01.006c-2.731-.697-3.46-3.462-3.46-3.462s-.034-.376.219-.568l.492-.396c.236-.192.4-.646.147-1.094a11.806 11.806 0 0 0-1.347-1.88.748.748 0 0 0-.44-.263l.002.001ZM12.579 5a.5.5 0 0 0 0 1c1.265 0 2.315.413 3.146 1.205.427.433.76.946.978 1.508.219.563.319 1.164.293 1.766a.5.5 0 0 0 .839.39.5.5 0 0 0 .16-.348 5.36 5.36 0 0 0-.36-2.17 5.443 5.443 0 0 0-1.204-1.854l-.01-.01C15.39 5.501 14.085 5 12.579 5Zm-.034 1.644a.5.5 0 0 0 0 1h.017c.912.065 1.576.37 2.04.868.478.514.725 1.153.706 1.943a.5.5 0 1 0 1 .023c.024-1.037-.31-1.932-.972-2.646V7.83c-.677-.726-1.606-1.11-2.724-1.185l-.017-.002-.05.001Zm-.02 1.675a.5.5 0 1 0-.051.998c.418.022.685.148.853.317.169.17.295.443.318.87a.5.5 0 1 0 .998-.053c-.032-.6-.22-1.13-.605-1.52-.387-.39-.914-.58-1.512-.612Z"></path>
                            </svg></a><a class="share__button" href="https://api.whatsapp.com/send?text={{ $news->title }}%20{{ url()->current() }}" title="WhatsApp"><svg class="icon icon--social-whatsapp" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                <path d="M12 2C6.477 2 2 6.477 2 12c0 1.89.525 3.66 1.438 5.168L2.546 20.2A1.01 1.01 0 0 0 3.8 21.454l3.032-.892A9.957 9.957 0 0 0 12 22c5.523 0 10-4.477 10-10S17.523 2 12 2ZM9.738 14.263c2.023 2.022 3.954 2.289 4.636 2.314 1.037.038 2.047-.754 2.44-1.673a.696.696 0 0 0-.088-.703c-.548-.7-1.289-1.203-2.013-1.703a.711.711 0 0 0-.973.158l-.6.915a.229.229 0 0 1-.305.076c-.407-.233-1-.629-1.426-1.055-.426-.426-.798-.992-1.007-1.373a.227.227 0 0 1 .067-.291l.924-.686a.712.712 0 0 0 .12-.94c-.448-.656-.97-1.49-1.727-2.043a.695.695 0 0 0-.684-.075c-.92.394-1.716 1.404-1.678 2.443.025.682.292 2.613 2.314 4.636Z"></path>
                            </svg></a><a class="share__button" href="https://t.me/share/url?url={{ url()->current() }}&text={{ $news->title }}" title="Telegram"><svg class="icon icon--social-telegram" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="20" height="20">
                                <path d="M16.479 3.692a1.25 1.25 0 0 1 1.718 1.355l-1.89 11.464c-.183 1.106-1.396 1.74-2.41 1.189a48.737 48.737 0 0 1-3.242-1.912c-.567-.37-2.303-1.558-2.09-2.403.184-.723 3.1-3.438 4.767-5.052.654-.634.356-1-.416-.416-1.92 1.448-4.999 3.65-6.017 4.27-.898.547-1.367.64-1.927.547-1.021-.17-1.969-.433-2.742-.754-1.045-.433-.994-1.87-.001-2.288l14.25-6Z"></path>
                            </svg></a><a class="share__button" href="https://connect.ok.ru/offer?url={{ url()->current() }}&title={{ $news->title }}" title="Одноклассники"><svg class="icon icon--social-ok" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" width="20" height="20">
                                <path d="M14.86 10.617c-.233-.475-.891-.875-1.766-.2-1.192.95-3.092.95-3.092.95s-1.9 0-3.092-.95c-.875-.675-1.533-.275-1.766.2-.417.833.05 1.242 1.108 1.917.908.583 2.15.8 2.95.883l-.667.667c-.95.941-1.866 1.85-2.491 2.483-.375.383-.375.992 0 1.35l.116.133a.97.97 0 0 0 1.367 0l2.475-2.483c.958.942 1.867 1.85 2.5 2.483a.97.97 0 0 0 1.367 0l.108-.133c.383-.358.383-.967 0-1.35l-2.483-2.483-.659-.675c.792-.075 2.017-.3 2.917-.875 1.058-.675 1.525-1.084 1.108-1.917Zm-4.858-6.808c1.15 0 2.083.933 2.083 2.075 0 1.15-.933 2.075-2.083 2.075a2.077 2.077 0 0 1-2.083-2.075c0-1.142.933-2.075 2.083-2.075Zm0 6.291a4.217 4.217 0 1 0-4.217-4.217 4.21 4.21 0 0 0 4.217 4.217Z"></path>
                            </svg></a></div>
                </div>
            </footer>
        </article>
        <section class="section related-news">
            <h2 class="section-title related-news__title">Похожие новости</h2>
            <div class="related-news__carousel swiper">
                <div class="related-news__items swiper-wrapper">
                    @php
                        $month = Config::get('constants.months');
                    @endphp
                    @foreach($relatedNews as $related)
                    <article class="news-card related-news__item swiper-slide">
                        <div class="news-card__image"><img loading="lazy" src="{{$related->img_link}}" alt="{{$related->title}}"><time class="news-card__date" datetime="{{date('d.m.Y', strtotime($related->created_at))}}"><span class="news-card__day">{{date('d', strtotime($related->created_at))}}</span><span class="news-card__month">{{$month[date('n', strtotime($related->created_at))]}}</span></time></div>
                        <div class="news-card__main">
                            <div class="news-card__tags">
                            @if(isset($related->hashtags))
                                 @php
                                    $tags = explode(" ", $related->hashtags);
                                @endphp
                                @foreach($tags as $tag)
                                    <a class="news-card__tag" href="?hashtag={{$tag}}">#{{$tag}}</a>
                                @endforeach
                            @endif
                            </div>
                            <h3 class="news-card__title"><a href="/news/{{ $related->id }}">{{$related->title}}</a></h3>
                        </div>
                    </article>
                    @endforeach
                </div>
            </div>
        </section>
        <script>
            document.querySelector(".btn-like").addEventListener('click', function() {
                const url = "{{ route('news.like', $news->id) }}";
                let requestOption = {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'Accept': 'application/json',
                        'url': '{{ route('news.like', $news->id) }}',
                        "X-CSRF-Token": '{{ csrf_token() }}'
                    },
                };
                fetch(url, requestOption)
                    .then(response => response.json())
                    .then(json => {
                        document.querySelectorAll(".like-value")
                            .forEach(elem => elem.textContent=json.likes);
                    })
                const button = document.querySelector(".btn-like");
                button.disabled = true;
            });
        </script>
    </main>
@endsection
