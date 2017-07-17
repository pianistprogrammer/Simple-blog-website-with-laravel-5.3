@extends("layouts.app")
@section("content")
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Create Post Category
                </div>
                <div class="panel-body">
                    <form action="/categories" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Catrgory name</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <input type="submit" class="btn btn-success pull-right">
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection