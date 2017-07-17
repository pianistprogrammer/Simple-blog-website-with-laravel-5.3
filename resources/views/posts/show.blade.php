@extends('layouts.app')
@section("content")
    <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="panel-heading">
                            <span><strong> {{substr($post->title, 0,20)}}</strong></span>
                            <span class="pull-right">{!! $post->created_at->diffForHumans() !!}</span>
                        </div>
                    </div>

                    <div class="panel-body">
                        {{$post->description}}

                    </div>

                </div>
            </div>
    </div>

@endsection