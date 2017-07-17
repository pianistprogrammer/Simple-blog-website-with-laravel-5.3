<form action="/users" method="post" class="form-horizontal">
    {!! csrf_field() !!}
    <input type="text" name="name" class="form-control" >
    <input type="email" name="email" class="form-control" >
    <input type="password" name="password" class="form-control" >
    <input type="submit" name="" class="btn btn-primary" value="Create">

</form>