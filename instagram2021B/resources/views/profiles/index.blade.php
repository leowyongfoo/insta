@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://scontent.fkul2-2.fna.fbcdn.net/v/t1.6435-9/87484989_1302671929930848_339511108844912640_n.jpg?_nc_cat=106&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=9jTXfhT2QH0AX8kW7KZ&_nc_ht=scontent.fkul2-2.fna&oh=6eb3b91557d7948ccb9b6207bbcb83ca&oe=60E70058"
             class= "rounded-circle" style="max-height: 15vh;">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
               <h1>{{ $user->username }}</h1>
               <a href="#">Add New Post</a>
            </div>
            <div class="d-flex">
               <div class="pr-5"><strong>100</strong> posts</div>
               <div class="pr-5"><strong>54</strong> followers</div>
               <div class="pr-5"><strong>14</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
            <div>
                {{ $user->profile->description }}
            </div>
            <div><a href="#">{{ $user->profile->url}}</a></div>
        </div>
    </div>

    <div class="row pt-4">
       <div class="col-4">
            <img src="/images/post1.jpg" alt="" class="w-100">
       </div>
       <div class="col-4">
            <img src="/images/post1.jpg" alt="" class="w-100">
       </div>
       <div class="col-4">
            <img src="/images/post1.jpg" alt="" class="w-100">
       </div>
    </div>

</div>
@endsection
