<?php
function get_users_count(){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"tweetphp");
    $user_count = 0;
    $query = "select count(*) as users_count from users";
    $query_run = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($query_run)){
        $users_count = $row['users_count'];
    }
    return($users_count);
}

function get_tweets_count(){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"tweetphp");
    $tweets_count = 0;
    $query = "select count(*) as tweets_count from tweets";
    $query_run = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($query_run)){
        $tweets_count = $row['tweets_count'];
    }
    return($tweets_count);
}

function get_comments_count(){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"tweetphp");
    $comments_count = 0;
    $query = "select count(*) as comments_count from comments";
    $query_run = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($query_run)){
        $comments_count = $row['comments_count'];
    }
    return($comments_count);
}
function get_retweets_count(){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"tweetphp");
    $retweets_count = 0;
    $query = "select count(*) as retweets_count from retweets";
    $query_run = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($query_run)){
        $retweets_count = $row['retweets_count'];
    }
    return($retweets_count);
}
function get_trends_count(){
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"tweetphp");
    $authors_count = 0;
    $query = "select count(*) as trends_count from trends";
    $query_run = mysqli_query($connection,$query);
    while ($row = mysqli_fetch_assoc($query_run)){
        $trends_count = $row['trends_count'];
    }
    return($trends_count);
}


?>