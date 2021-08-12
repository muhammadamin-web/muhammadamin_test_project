<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('./css/post.css')}}">
</head>


<body>
    @foreach($posts as $post)

    <div class="news">
        <a href="{{$post->link_url}}">
            <div class="post">
                <img class="post_image" src="{{ asset('storage/news/' . $post->img . '.jpg') }}">
                <div class="created_data">
                    <span class="hour">{{$post->time_hour}}</span>/<span class="day/month/year">{{$post->date_day}}</span>

                </div>
                <div class="post_title">{{$post->title}}</div>
            </div>
        </a>
    </div>
    @endforeach
</body>

</html>