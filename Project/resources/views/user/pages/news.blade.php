@extends('user.index')

@push('css')
<style>
    * {
        box-sizing: border-box;
    }
    body {
        padding: 0 1em;
        font-family: sans-serif;
    }


    /* * Post widget * */

    input[type="file"] {
        display: none;
    }
    ul {
        list-style-type: none;
    }

    .btn {
        padding: .5em 1em;

        background-color: transparent;
        color: #6b7270;

        border: none;
        cursor: pointer;
    }

    .widget-post {
        width: 1000px;
        min-height: 100px;
        height: auto;
        border: 1px solid #eaeaea;
        border-radius: 6px;
        box-shadow: 0 1px 2px 1px rgba(130, 130, 130, 0.1);
        background-color: #fff;
        margin: auto;
        overflow: hidden;
    }

    .widget-post__header {
        padding: .2em .5em;
        background-color: #eaeaea;
        color: #3f5563;
    }
    .widget-post__title {
        font-size: 18px;
    }

    .widget-post__content {
        width: 100%;
        height: 50%;
    }
    .widget-post__textarea {
        width: 100%;
        height: 100%;
        padding: .5em;
        border: none;
        resize: none;
    }
    .widget-post__textarea:focus {
        outline: none;
    }

    .widget-post__options {
        padding: .5em;
    }
    .post-actions__label {
        cursor: pointer;
    }

    .widget-post__actions {
        width: 100%;
        padding: .5em;
    }
    .post--actions {
        position: relative;
        padding: .5em;

        background-color: #f5f5f5;
        color: #a2a6a7;
    }
    .post-actions__attachments {
        display: inline-block;
        width: 60%;
    }
    .attachments--btn {
        background-color: #eaeaea;
        color: #007582;

        border-radius: 1.5em;
    }

    .post-actions__widget {
        display: inline-block;
        width: 38%;
        text-align: right;
    }
    .post-actions__publish {
        width: 120px;

        background-color: #008391;
        color: #fff;

        border-radius: 1.5em;
    }

    .scroller::-webkit-scrollbar {
        display: none;
    }

    .is--hidden {
        display: none;
    }

    .sr-only {
        width: 1px;
        height: 1px;

        clip: rect(1px, 1px, 1px, 1px);
        -webkit-clip-path: inset(50%);
        clip-path: inset(50%);

        overflow: hidden;
        white-space: nowrap;

        position: absolute;
        top: 0;

    }


    /* *  Placeholder contrast * */
    ::-webkit-input-placeholder {
        color: #666;
    }
    ::-moz-placeholder {
        color: #666;
    }
    :-ms-input-placeholder {
        color: #666;
    }
    :-moz-placeholder {
        color: #666;
    }
</style>
@endpush


@section('content')


    <div class="site-content">
        <div class="container">

            <div class="row">

                <div class="content col-lg-12">

                    <div class="posts posts--cards post-grid row">

                        @if(count($news) > 0)
                            @foreach($news as $post)
                                <div class="post-grid__item col-sm-6">
                            <div class="posts__item posts__item--card posts__item--category-1 card">
                                <figure class="posts__thumb">
                                    <div class="posts__cat">
                                        <span class="label posts__cat-label">{{$post->title}}</span>
                                    </div>
                                    @if(!empty($post->image))
                                    <a href="#"><img src="{{asset($post->image)}}" style="height: 300px!important;" alt=""></a>
                                    @else
                                        <a href="#"><img src="{{avatar('noimage.jpeg')}}" style="height: 300px!important;"  alt=""></a>
                                    @endif
                                </figure>
                                <div class="posts__inner card__content">
                                    <b class="posts__date">{{$post->created_at}}</b>
                                    <div class="posts__excerpt">
                                        {{$post->content}}
                                    </div>
                                </div>
                            </div>
                        </div>
                            @endforeach
                        @endif
                    </div>

                </div>


            </div>

        </div>
    </div>

@endsection

@push('js')
@endpush
