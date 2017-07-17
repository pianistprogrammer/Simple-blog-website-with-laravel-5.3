@extends("layouts.app")
@section("content")
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create Post
                </div>
                <div class="panel-body">
                    <form action="/posts" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" name="title" class="form-control">
                        </div>


                        <div class="form-group">
                            <label for="post_on">Category</label>
                            <select name="category_id" id="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value="">Select One...</option>
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Content</label>
                            <textarea type="text" cols="3" name="description" class="form-control"></textarea>
                        </div>
                        <div class="checkbox">
                            <label for="checkbox">
                                <input type="checkbox" name="live">Live
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="post_on">Post on</label>
                            <input type="datetime-local" name="post_on" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-success pull-right">
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection