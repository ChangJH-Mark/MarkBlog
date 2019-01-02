@extends('layout.main')
@section('title','| Home')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="jumbotron">
                <h1 class="display-4">Welcome to My Blog!</h1>
                <p class="lead">This is a simple Blog build with Laravel and it's my first blog too. Thanks for visiting! please read my lastest post</p>
                <hr class="my-4">
                <p>阅读量最多的博客</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Popular post</a>
            </div>
        </div>
    </div><!-- end of header row -->

    <div class="row">

        <div class="col-md-8">
            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>lkwjeflvka aosidjfakwjefolakjsdflkajweoflkcakdjgalkdfjakdsjfawhjebnqawejfad
                alskdjfoqwiejflakdjsfoilqwjeflkajdsogihanwbeqajewofilhvnoawiejfoilew</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>
            <div class="post">
                <h3>Post Title</h3>
                <p>lkwjeflvka aosidjfakwjefolakjsdflkajweoflkcakdjgalkdfjakdsjfawhjebnqawejfad
                    alskdjfoqwiejflakdjsfoilqwjeflkajdsogihanwbeqajewofilhvnoawiejfoilew</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>that's the best thing ever!..jweflkqjvolkajoewrjfolakjwedvoihjaeolghvlkqjaedfkja
                    aliwejfoivnlkjqaeowilfjnlakjdsoflikandlvijaoiwejfr.</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>

            <hr>

            <div class="post">
                <h3>Post Title</h3>
                <p>that's the best thing 2jegvkmfblkjmemwf ajdsoiqljkemgwvlkjalekwflkajdsflkjadlkf
                    lafjgoqijblvkadpfjqa2elkgjvfkad !...</p>
                <a href="#" class="btn btn-primary">Read More</a>
            </div>
        </div>
        <div class="col-md-3 offset-md-1">
            <h2>Sidebar</h2>
        </div>
    </div>
    @endsection