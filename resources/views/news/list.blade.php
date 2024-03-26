<div class="news__items">
    @php
        $month = Config::get('constants.months');
    @endphp
    @foreach($news as $theNews)
        <article class="news-card news__item">
            <div class="news-card__image"><img loading="lazy" src="{{$theNews->img_link}}" alt="{{$theNews->title}}"><time class="news-card__date" datetime="{{$theNews->created_at->format('d.m.Y')}}"><span class="news-card__day">{{$theNews->created_at->format('d')}}</span><span class="news-card__month">{{$month[$theNews->created_at->format('n')]}}</span></time></div>
            <div class="news-card__main">
                <div class="news-card__tags">
                    @if(isset($theNews->hashtags))
                        <div class="news_hashtags">
                            @php
                                $tags = explode(" ", $theNews['hashtags']);
                            @endphp
                            @foreach($tags as $tag)
                                <a class="news-card__tag" href="?hashtag={{$tag}}">#{{$tag}}</a>&nbsp;
                            @endforeach
                        </div>
                    @endif
                </div>
                <h3 class="news-card__title"><a href="/news/{{ $theNews->id }}">{{$theNews->title}}</a></h3>
            </div>
        </article>
    @endforeach
</div>
