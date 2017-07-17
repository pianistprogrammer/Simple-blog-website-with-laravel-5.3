@extends("layouts.app")
<style>
    .profile-img{
        border-radius: 100%;
        max-width: 150px;
        width: 145px;
        height: 150px;
        border: 5px solid #fff;
        box-shadow: 0 2px 2px rgba(0, 0 ,0, 0.3);
    }
</style>
@section("content")
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-body text-center">
                    <img src="{{URL:: to('/images/profile.jpg')}}" alt="Profile Image" class="profile-img">
                    <h1>{{$user->name}}</h1>
                    <h5>{{$user->email}}</h5>
                    <h5>{{$user->dob}}</h5>
                    <button class="btn btn-success">Follow</button>
                </div>
            </div>
        </div>
    </div>
@endsection