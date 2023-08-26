@extends('layout')
@section('title', 'BLOG DETAILS')
@section('content')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/list.js/1.5.0/list.min.js"></script>
    <style>
        /*--------------------------------------------------------------
                        # Blog Details
                        --------------------------------------------------------------*/
        h4 {
            color: #000
        }

        .blog .blog-details {
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            padding: 30px;
            border-radius: 10px;
        }

        .blog .blog-details .post-img {
            margin: -30px -30px 20px -30px;
            overflow: hidden;
            border-radius: 10px 10px 0 0;
        }

        .blog .blog-details .title {
            font-size: 28px;
            font-weight: 700;
            padding: 0;
            margin: 20px 0 0 0;
            color: var(--color-default);
        }

        .blog .blog-details .content {
            margin-top: 20px;
        }

        .blog .blog-details .content h3 {
            font-size: 22px;
            margin-top: 30px;
            font-weight: bold;
        }

        .blog .blog-details .content blockquote {
            overflow: hidden;
            background-color: rgba(34, 34, 34, 0.06);
            padding: 60px;
            position: relative;
            text-align: center;
            margin: 20px 0;
        }

        .blog .blog-details .content blockquote p {
            color: var(--color-default);
            line-height: 1.6;
            margin-bottom: 0;
            font-style: italic;
            font-weight: 500;
            font-size: 22px;
        }

        .blog .blog-details .content blockquote:after {
            content: "";
            position: absolute;
            left: 0;
            top: 0;
            bottom: 0;
            width: 3px;
            background-color: var(--color-secondary);
            margin-top: 20px;
            margin-bottom: 20px;
        }

        .blog .blog-details .meta-top {
            margin-top: 20px;
            color: #6c757d;
        }

        .blog .blog-details .meta-top ul {
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            align-items: center;
            padding: 0;
            margin: 0;
        }

        .blog .blog-details .meta-top ul li+li {
            padding-left: 20px;
        }

        .blog .blog-details .meta-top i {
            font-size: 16px;
            margin-right: 8px;
            line-height: 0;
            color: var(--color-primary);
        }

        .blog .blog-details .meta-top a {
            color: #6c757d;
            font-size: 14px;
            display: inline-block;
            line-height: 1;
        }

        .blog .blog-details .meta-bottom {
            padding-top: 10px;
            border-top: 1px solid rgba(34, 34, 34, 0.15);
        }

        .blog .blog-details .meta-bottom i {
            color: #555555;
            display: inline;
        }

        .blog .blog-details .meta-bottom a {
            color: rgba(34, 34, 34, 0.8);
            transition: 0.3s;
        }

        .blog .blog-details .meta-bottom a:hover {
            color: var(--color-primary);
        }

        .blog .blog-details .meta-bottom .cats {
            list-style: none;
            display: inline;
            padding: 0 20px 0 0;
            font-size: 14px;
        }

        .blog .blog-details .meta-bottom .cats li {
            display: inline-block;
        }

        .blog .blog-details .meta-bottom .tags {
            list-style: none;
            display: inline;
            padding: 0;
            font-size: 14px;
        }

        .blog .blog-details .meta-bottom .tags li {
            display: inline-block;
        }

        .blog .blog-details .meta-bottom .tags li+li::before {
            padding-right: 6px;
            color: var(--color-default);
            content: ",";
        }

        .blog .blog-details .meta-bottom .share {
            font-size: 16px;
        }

        .blog .blog-details .meta-bottom .share i {
            padding-left: 5px;
        }

        .blog .post-author {
            padding: 20px;
            margin-top: 30px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .blog .post-author img {
            max-width: 120px;
            margin-right: 20px;
        }

        .blog .post-author h4 {
            font-weight: 600;
            font-size: 22px;
            margin-bottom: 0px;
            padding: 0;
            color: var(--color-default);
        }

        .blog .post-author .social-links {
            margin: 0 10px 10px 0;
        }

        .blog .post-author .social-links a {
            color: rgba(34, 34, 34, 0.5);
            margin-right: 5px;
        }

        .blog .post-author p {
            font-style: italic;
            color: rgba(108, 117, 125, 0.8);
            margin-bottom: 0;
        }

        /*--------------------------------------------------------------
                        # Blog Sidebar
                        --------------------------------------------------------------*/
        .blog .sidebar {
            padding: 30px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .blog .sidebar .sidebar-title {
            font-size: 20px;
            font-weight: 700;
            padding: 0;
            margin: 0;
            color: var(--color-default);
        }

        .blog .sidebar .sidebar-item+.sidebar-item {
            margin-top: 40px;
        }

        .blog .sidebar .search-form form {
            background: #fff;
            border: 1px solid rgba(34, 34, 34, 0.3);
            padding: 5px 10px;
            position: relative;
            border-radius: 50px;
        }

        .blog .sidebar .search-form form input[type=text] {
            border: 0;
            padding: 4px;
            border-radius: 50px;
            width: calc(100% - 60px);
        }

        .blog .sidebar .search-form form input[type=text]:focus {
            outline: none;
        }

        .blog .sidebar .search-form form button {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            border: 0;
            background: none;
            font-size: 16px;
            padding: 0 25px;
            margin: -1px;
            background: var(--color-primary);
            color: #fff;
            transition: 0.3s;
            border-radius: 50px;
            line-height: 0;
        }

        .blog .sidebar .search-form form button i {
            line-height: 0;
        }

        .blog .sidebar .search-form form button:hover {
            background: rgba(0, 131, 116, 0.8);
        }

        .blog .sidebar .categories ul {
            list-style: none;
            padding: 0;
        }

        .blog .sidebar .categories ul li+li {
            padding-top: 10px;
        }

        .blog .sidebar .categories ul a {
            color: var(--color-default);
            transition: 0.3s;
        }

        .blog .sidebar .categories ul a:hover {
            color: var(--color-primary);
        }

        .blog .sidebar .categories ul a span {
            padding-left: 5px;
            color: rgba(34, 34, 34, 0.4);
            font-size: 14px;
        }

        .blog .sidebar .recent-posts .post-item+.post-item {
            margin-top: 15px;
        }

        .blog .sidebar .tags {
            margin-bottom: -10px;
        }

        .blog .sidebar .tags ul {
            list-style: none;
            padding: 0;
        }

        .blog .sidebar .tags ul li {
            display: inline-block;
        }

        .blog .sidebar .tags ul a {
            color: #555555;
            font-size: 14px;
            padding: 6px 20px;
            margin: 0 6px 8px 0;
            border: 1px solid #d5d5d5;
            display: inline-block;
            transition: 0.3s;
            border-radius: 50px;
        }

        .blog .sidebar .tags ul a:hover {
            color: #fff;
            border: 1px solid var(--color-primary);
            background: var(--color-primary);
        }

        .blog .sidebar .tags ul a span {
            padding-left: 5px;
            color: rgba(85, 85, 85, 0.8);
            font-size: 14px;
        }

        /*--------------------------------------------------------------
                        # Blog Comments
                        --------------------------------------------------------------*/
        .blog .comments {
            margin-top: 30px;
        }

        .blog .comments .comments-count {
            font-weight: bold;
        }

        .blog .comments .comment {
            margin-top: 30px;
            position: relative;
        }

        .blog .comments .comment .comment-img {
            margin-right: 14px;
        }

        .blog .comments .comment .comment-img img {
            width: 60px;
        }

        .blog .comments .comment h5 {
            font-size: 16px;
            margin-bottom: 2px;
        }

        .blog .comments .comment h5 a {
            font-weight: bold;
            color: var(--color-default);
            transition: 0.3s;
        }

        .blog .comments .comment h5 a:hover {
            color: var(--color-primary);
        }

        .blog .comments .comment h5 .reply {
            padding-left: 10px;
            color: var(--color-primary);
        }

        .blog .comments .comment h5 .reply i {
            font-size: 20px;
        }

        .blog .comments .comment time {
            display: block;
            font-size: 14px;
            color: rgba(34, 34, 34, 0.8);
            margin-bottom: 5px;
        }

        .blog .comments .comment.comment-reply {
            padding-left: 40px;
        }

        .blog .comments .reply-form {
            margin-top: 30px;
            padding: 30px;
            box-shadow: 0 0 16px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        .blog .comments .reply-form h4 {
            font-weight: bold;
            font-size: 22px;
        }

        .blog .comments .reply-form p {
            font-size: 14px;
        }

        .blog .comments .reply-form input {
            border-radius: 4px;
            padding: 10px 10px;
            font-size: 14px;
        }

        .blog .comments .reply-form input:focus {
            box-shadow: none;

        }

        .blog .comments .reply-form textarea {
            border-radius: 4px;
            padding: 10px 10px;
            font-size: 14px;
        }

        .blog .comments .reply-form textarea:focus {
            box-shadow: none;

        }

        .blog .comments .reply-form .form-group {
            margin-bottom: 25px;
        }

        .blog .comments .reply-form .btn-primary {
            border-radius: 50px;
            padding: 14px 40px;
            border: 0;
            background-color: var(--color-secondary);
        }

        .blog .comments .reply-form .btn-primary:hover {
            background-color: rgba(248, 90, 64, 0.8);
        }

        .blog_wrapper {
            align-items: stretch;

        }

        a.name {
            font-size: 15px;
            /* margin-left: 95px; */
            margin-left: 5px;
            font-weight: bold;
            color: #000;
            transition: 0.3s;
        }

        .list-img {
            width: 80px;
            float: left;
        }

        time {
            display: block;
            margin-left: 95px;
            font-style: italic;
            font-size: 14px;
            color: rgba(34, 34, 34, 0.4);
        }
    </style>

    <!-- ======= Blog Details Section ======= -->
    <section id="blog" class="blog" style="padding: 221px 0;">
        <div class="container" data-aos="fade-up">

            <div class="row g-5 blog_wrapper">

                <div class="col-lg-8">

                    <article class="blog-details">

                        <div class="post-img">
                            <img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">
                        </div>

                        <h2 class="title">Announcing the countries in the
                            server turkiye</h2>



                        <div class="content">
                            <p>
                                Hello Winbance community, let's welcome the new server, which is the server of Turkey, and it is the servant of the youngest in terms of countries, nor the one who receives


                            </p>
                            <ul>
                                <li>
Turkey
                                </li>
                                <li>
Iran
                                </li>



                            </ul>



                            <img src="assets/images/blog/blog-details/blog12.svg" class="img-fluid" alt="">

                            <br>
                            <br>
                            <p>
                                It is considered one of the most important servers in the company as well, and
                                it will be an official distributor in the reception of traders through academies
                                and major companies in the training sector.
                            </p>

                        </div><!-- End post content -->



                    </article><!-- End blog post -->



                </div>

                <div class="col-lg-4">


                               <div class="sidebar" id="search-list">

                        <div class="sidebar-item search-form">

                            <h3 class="sidebar-title">Search</h3>
                            <div id="test-list">
                                <form action="" class="mt-3" id="test-list">
                                    <input type="text" class="fuzzy-search">
                                    <button type="submit"><i class="bi bi-search"></i></button>
                                </form>
                                {{-- <input type="text" class="fuzzy-search" /> --}}
                                <div class="sidebar-item recent-posts" id="items">
                                    <br>

                                    <h3 class="sidebar-title">Recent Posts</h3>

                                    <ul class="list">
                                        <li>
                                            <div class="post-item mt-3">
                                                <img src="assets/images/blog/blog1.svg" alt="" class="list-img">
                                                <div class="quest_filter">
                                                    <h4><a href="{{ route('home.blog6') }}" class="name">winbance signs a partnership
                                                            agreement with rithmic</a></h4>
                                                    <time datetime="2022-01-01">NOVEMBRE 11, 2022</time>
                                                </div>
                                            </div><!-- End recent post item-->
                                        </li>
                                        <li>
                                            <div class="post-item">
                                                <img src="assets/images/blog/blog2.svg" alt="" class="list-img">
                                                <div class="quest_filter">
                                                    <h4><a href="{{ route('home.blog7') }}" class="name">Partnership with
                                                            Winbance
                                                            on the basis of savings chart</a></h4>
                                                  <time datetime="2022-01-01">NOVEMBRE 11, 2022</time>
                                                </div>
                                            </div><!-- End recent post item-->
                                        </li>
                                        <li>
                                            <div class="post-item">
                                                <img src="assets/images/blog/blog3.svg" alt="" class="list-img">
                                                <div class="quest_filter">
                                                    <h4><a href="{{ route('home.blog8') }}" class="name">Announcing the countries in the server arabic</a></h4>
                                                 <time datetime="2022-01-01">NOVEMBRE 11, 2022</time>
                                                </div>
                                            </div><!-- End recent post item-->
                                        </li>
                                        <li>
                                            <div class="post-item">
                                                <img src="assets/images/blog/blog4.svg" alt="" class="list-img">
                                                <div class="quest_filter">
                                                    <h4><a href="{{ route('home.blog9') }}" class="name">Announcing the countries in the server UK</a></h4>
                                                     <time datetime="2022-01-01">NOVEMBRE 11, 2022</time>
                                                </div>
                                            </div><!-- End recent post item-->
                                        </li>
                                        <li>
                                            <div class="post-item">
                                                <img src="assets/images/blog/blog5.svg" alt="" class="list-img">
                                                <div class="quest_filter">
                                                    <h4><a href="{{ route('home.blog10') }}" class="name">Week about Winbance</a></h4>
                                                    <time datetime="2022-01-01">NOVEMBRE 11, 2022</time>
                                                </div>
                                            </div><!-- End recent post item-->
                                        </li>
                                        <li>
                                            <div class="post-item">
                                                <img src="assets/images/blog/blog6.svg" alt="" class="list-img">
                                                <div class="quest_filter">
                                                    <h4><a href="{{ route('home.blog11') }}" class="name">Winbance or NinjaTrader They partner to provide a trading platform</a></h4>
                                                <time datetime="2022-01-01">NOVEMBRE 11, 2022</time>
                                                </div>
                                            </div><!-- End recent post item-->
                                        </li>
                                        <li>
                                            <div class="post-item">
                                                <img src="assets/images/blog/blog7.svg" alt="" class="list-img">
                                                <div class="quest_filter">
                                                    <h4><a href="{{ route('home.blog12') }}" class="name">Announcing the countries in the server turkiye</a></h4>
                                                   <time datetime="2022-01-01">NOVEMBRE 11, 2022</time>
                                                </div>
                                            </div><!-- End recent post item-->
                                        </li>
                                        <li>
                                            <div class="post-item">
                                                <img src="assets/images/blog/blog8.svg" alt="" class="list-img">
                                                <div class="quest_filter">
                                                    <h4><a href="{{ route('home.blog13') }}" class="name">Announcing the countries in the server latinoamerica</a></h4>
                                                <time datetime="2022-01-01">NOVEMBRE 11, 2022</time>
                                                </div>
                                            </div><!-- End recent post item-->
                                        </li>
                                        <li>
                                            <div class="post-item">
                                                <img src="assets/images/blog/blog9.svg" alt="" class="list-img">
                                                <div class="quest_filter">
                                                    <h4><a href="{{ route('home.blog14') }}" class="name">Announcing the countries in the server European</a></h4>
                                                  <time datetime="2022-01-01">NOVEMBRE 11, 2022</time>
                                                </div>
                                            </div><!-- End recent post item-->
                                        </li>
                                        <li>
                                            <div class="post-item">
                                                <img src="assets/images/blog/blog10.svg" alt="" class="list-img">
                                                <div class="quest_filter">
                                                    <h4><a href="{{ route('home.blog15') }}" class="name">Forum in the server of the Arabs about launchpad</a></h4>
                                                    <time datetime="2022-01-01">NOVEMBRE 11, 2022</time>
                                                </div>
                                            </div><!-- End recent post item-->
                                        </li>
                                        <li>
                                            <div class="post-item">
                                                <img src="assets/images/blog/blog11.svg" alt="" class="list-img">
                                                <div class="quest_filter">
                                                    <h4><a href="{{ route('home.blog17') }}" class="name">winbance story...</a></h4>
                                                <time datetime="2022-01-01">NOVEMBRE 11, 2022</time>
                                                </div>
                                            </div><!-- End recent post item-->
                                        </li>

                                    </ul>
                                </div>
                            </div><!-- End sidebar search formn-->
                        </div>

                    </div><!-- End sidebar recent posts-->



                </div><!-- End Blog Sidebar -->

            </div>
        </div>

        </div>
    </section><!-- End Blog Details Section -->
    <script>
        var monkeyList = new List('test-list', {
            valueNames: ['name']
        });
    </script>

@endsection
