@extends("layouts.app")
@section("content")
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Edit Post
                </div>
                <div class="panel-body">
                    <form action="/posts/{{$post->id}}" method="POST">
                        {{method_field('PUT')}}
                        {{ csrf_field() }}
                        <input type="hidden" value="user_id">
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control" value="{{$post->title}}" >
                        </div>


                        <div class="form-group">
                            <label for="post_on">Category</label>
                            <select name="category_id" id="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value="0">Select One...</option>
                                    <option value="{{$category->id}}" {{$post->category_id == $category->id ? "selected": ""}} >{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Content</label>
                            <textarea type="text" cols="3" name="description" class="form-control">
                                {{$post->description}}
                            </textarea>
                        </div>
                        <div class="checkbox" >
                            <label for="checkbox">
                                <input type="checkbox" name="live" {{$post->live == 1 ? 'checked':''}}>Live
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="post_on">Post on</label>
                            <input type="datetime-local" name="post_on" class="form-control" value="{{$post->post_on->format('Y-m-d\TH:i:s')}}">
                        </div>
                        <input type="submit" class="btn btn-success pull-right">
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection