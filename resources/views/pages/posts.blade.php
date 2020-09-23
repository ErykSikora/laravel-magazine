@extends('layouts/default')    

@section('title', 'Strona Główna')

@section('content')
@foreach($posts as $post)
    @if($post['type'] == 'text')
    <article class="post formatText">
        <div class="postContent">
            <div class="wrapper">
                <h2 class="postTitle">
                <a href="#">{{ $post['title'] }}</a>
                </h2>
                <div class="rte">
                    {!! $post['content'] !!}
                    <p class="readMore">
                        <a href="#">Keep reading</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="meta">
            <ul class="tags">
                <li><i class="fa fa-tags"></i></li>
                <li>
                    <a href="#">format</a>
                </li>
                <li>
                    <a href="#">typography</a>
                </li>
            </ul>
            <div class="flex flex-sb">
                <p class="date"><i class="fa fa-clock-o"></i> 1 day ago</p>
                <p>
                    <a href="#" class="link"><i class="fa fa-edit"></i> Edytuj</a>
                </p>
            </div>
        </div>
    </article>
    @elseif($post['type'] == 'photo')
    <article class="post formatPhoto">
        <figure class="postImage">
            <i class="postPremium fa fa-star"></i>
            <a href="#">
            <img src="{{ $post['image'] }}" alt="" class="mainPhoto">
            </a>
            <div class="cover"
                style="background: url(https://lorempixel.com/1200/800/?27293) no-repeat;">
            </div>
        </figure>
        <div class="meta">
            <ul class="tags">
                <li><i class="fa fa-tags"></i></li>
                <li>
                    <a href="#">photo</a>
                </li>
                <li>
                    <a href="#">dog</a>
                </li>
            </ul>
            <div class="flex flex-sb">
                <p class="date"><i class="fa fa-clock-o"></i> 1 day ago</p>
                <p>
                    <a href="#" class="link"><i class="fa fa-edit"></i> Edytuj</a>
                </p>
            </div>
        </div>
    </article>
    @endif
    @endforeach
    <div class="wrapper">
        <div class="pagination">
            <a href="//larablogger.test:3002/?p=1" class="paginationPrev" title="Previous">
                <i class="fa fa-caret-left"></i>&nbsp;&nbsp;&nbsp;Previous
            </a>
            <a href="#" class="paginationNext" title="Next">
            Next&nbsp;&nbsp;&nbsp;<i class="fa fa-caret-right"></i>
            </a>
        </div>
    </div>
@endsection
