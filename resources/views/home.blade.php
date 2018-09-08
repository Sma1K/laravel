@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 50px">
        <h1 class="text-center">Latest news</h1>

        @foreach($news as $ne)



           <h1><b>{{$ne->title}} ({{$ne->category->name}})</b></h1>
        <div>
            <div style="width: 300px; height: 300px; float: left; margin-bottom: 20px;">
                <img src="{{$ne->image}}" alt="" style="width: 300px; height: 300px;">
            </div>
            <div style="margin-left: 200px ; width: 600px;float: left;"><p>{{$ne->text}}</p></div>
        </div>
        <br>
        <br>
        <div class="lilbtns" style="display: block; width: 150px;">
            <a href="/news/{{$ne->id}}/edit" ><button><i class="fas fa-edit"></i>Edit</button></a>
            <div class="author" >{{$ne->user->email}} </div>
            <div class="pDate" >{{$ne->created_at}}</div>
        </div>
        <div>
            <hr>
            <h1>-Comments-</h1>
            @foreach($ne->comments as $comment)
                <div class="comments">
                    <div class="comment">{{$comment->comment}}</div>
                    <div class="createdAt">{{$comment->created_at}}</div>
                    <div class="commentor">{{$comment->user->name}}</div>
                </div>


                @endforeach
            <form action="/comment" method="post" id="formes1">
                {{csrf_field()}}
                <textarea cols="100" rows="5" class="text-center" name = "comment" style="margin-left: 20px; margin-bottom: 5px;"></textarea>
                <input type="hidden" value="{{$ne->id}}" name="news_id">
                <br/>
                <input type="submit" value="Send" style="margin-left: 20px">
            </form>
            <hr>
        @endforeach
        </div>
        {{$news->links()}}
    </div>
@endsection


<style>
    p{
        font-family: "Times New Roman", Times, serif;
        font-size: 20px;
        text-indent: 4em;
    }
    p:first-letter {
        font-family: "Times New Roman", Times, serif; /* Гарнитура шрифта первой буквы */
        font-size: 200%; /* Размер шрифта первого символа */
         /* Красный цвет текста */

    }
    .author
    {
        font-style: italic;
        background-color: gold;
    }
</style>

<style>
    .news{
        background: #eee;
        height: auto;
        padding: 20px;
        border-radius: 50px;
        margin: 10px;
    }
    .news h2{
        font-weight: bold;
        font-style: italic;
        margin: 0px;
    }
    .news p{
        text-align: justify;;
    }
    .news img{
        float: left;
        height: 180px;
        margin: 40px;
    }
    .comment{

    }
    .newsText{
        font-size: 20px;
        font-style: italic;


    }
    .author{
        float: right;
        color: #000;
    }


    .comments{
        margin: 10px 0px;
    }

    .cometee{
        float: right;
    }
</style>
@section("scripts")
    <script>
        $("#formes1").submit(function(){
            var data = $("#formes1").serialize();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            console.log(data);
            $.ajax({
                type:'POST',
                url:'/comment',
                data:data,
                success:function(data)
                {

                    var obj="<div class=comment>"+data['comment']+"</div>" + "<div class=createdAt>"+data['created_at']+"</div>" + "<div class=commentor>"+'you'+"</div>";
                    $(".commentor").append(obj);
                }
            });
            return false;
        });


    </script>
    @endsection