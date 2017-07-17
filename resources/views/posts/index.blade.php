@extends('layouts.app')
@section("content")
    <div class="row">
        @forelse($posts as $post)
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <span><strong> {{substr($post->title, 0,20)}}</strong></span>
                        <span class="pull-right">{!! $post->created_at->diffForHumans() !!}</span>

                    </div>

                    <div class="panel-body">
                        {{$post->shortContent}}
                        <a href="/posts/{{$post->id}}">Read more</a>

                    </div>
                    <div class="panel-footer clearfix" style="background-color: #fff">
                        <ul class="list-inline">
                             <span class="pull-left">
                                <a href="/posts/{{$post->id}}/edit" class="btn btn-success btn-xs" title="Edit">
                                <i class="fa fa-pencil"></i>
                            </a>
                            </span>
                             <span class="pull-left">
                                <a href="/posts/{{$post->id}}/edit" class="btn btn-warning btn-xs" title="Like">
                                <i class="fa fa-heart"></i>
                            </a>
                            </span>
                             @if($post->id == Auth::id())
                                <form action="/posts/{{$post->id}}" method="POST">
                                    {{method_field('DELETE')}}
                                    {{ csrf_field() }}
                                    <span class="pull-right">
                                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button>
                                    </span>
                                </form>

                            @endif



                        </ul>

                     </div>
                </div>
            </div>
        @empty
            No post found
        @endforelse

    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            {{$posts->links()}}
        </div>
    </div>
@endsection