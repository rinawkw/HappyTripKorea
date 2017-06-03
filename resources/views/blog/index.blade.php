@extends('layouts.index')

@section('content')
    <!-- main content -->
    <section class="ot-section-a">
        <!-- container -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="theiaStickySidebar">
                        <div class="ot-module">
                            <!-- classic grid posts section -->
                            <h4 class="section-title"><span>The grid style box</span>Latest Posts</h4>
                            @for ($i = $blog->count()-1; $i >=0; $i--)
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <div class="grid-post grid-gutter">
                                            <div class="post-image">
                                                <div class="review" style="background: #FFC000;"><span
                                                            class="score">HTK</span><span
                                                            class="percent"></span></div>
                                                <div class="post-title">
                                                    <div class="post-cat2"><span
                                                                style="background: #FFC000;">Traveling</span></div>
                                                    <h2>
                                                        <a href="post.html"><?php echo $blog['' . $i . '']->blog_title ?></a>
                                                    </h2>
                                                </div>
                                                <a href="post.html"><img
                                                            src="images/blog/<?php echo $blog['' . $i . '']->blog_picture ?>"
                                                            alt=""></a>
                                            </div>
                                            <div class="post-body">
                                                <div class="post-meta">
                                                    <?php
                                                    $y = substr($blog['' . $i . '']->created_at, 0, 4);
                                                    $m = substr($blog['' . $i . '']->created_at, 5, 2);
                                                    $d = substr($blog['' . $i . '']->created_at, 8, 2);
                                                    ?>
                                                    <span>{{$d}}/{{$m}}/{{$y}}</span>
                                                </div>
                                                <p>
                                                    <?php echo str_limit($blog['' . $i . '']->blog_content, 100)?>
                                                </p>
                                            </div>
                                            <div class="read-more"><a href="post.html">read more</a></div>
                                        </div>
                                    </div>
                                    @if($i!=0)
                                        <?php $i--?>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="grid-post grid-gutter">
                                                <div class="post-image">
                                                    <div class="review" style="background: #FFC000;"><span
                                                                class="score">HTK</span><span
                                                                class="percent"></span></div>
                                                    <div class="post-title">
                                                        <div class="post-cat2"><span style="background: #FFC000;">Traveling</span>
                                                        </div>
                                                        <h2>
                                                            <a href="post.html"><?php echo $blog['' . $i . '']->blog_title ?></a>
                                                        </h2>
                                                    </div>
                                                    <a href="post.html"><img
                                                                src="images/blog/<?php echo $blog['' . $i . '']->blog_picture ?>"
                                                                alt=""></a>
                                                </div>
                                                <div class="post-body">
                                                    <div class="post-meta">
                                                        <?php
                                                        $y = substr($blog['' . $i . '']->created_at, 0, 4);
                                                        $m = substr($blog['' . $i . '']->created_at, 5, 2);
                                                        $d = substr($blog['' . $i . '']->created_at, 8, 2);
                                                        ?>
                                                        <span>{{$d}}/{{$m}}/{{$y}}</span>
                                                    </div>
                                                    <p>
                                                        <?php echo str_limit($blog['' . $i . '']->blog_content, 100)?>
                                                    </p>
                                                </div>
                                                <div class="read-more"><a href="post.html">read more</a></div>
                                            </div>
                                        </div>
                                    @endif
                                    @if($i!=0)
                                        <?php $i--?>
                                        <div class="col-md-4 col-sm-4">
                                            <div class="grid-post grid-gutter">
                                                <div class="post-image">
                                                    <div class="review" style="background: #FFC000;"><span
                                                                class="score">HTK</span><span
                                                                class="percent"></span></div>
                                                    <div class="post-title">
                                                        <div class="post-cat2"><span style="background: #FFC000;">Traveling</span>
                                                        </div>
                                                        <h2>
                                                            <a href="post.html"><?php echo $blog['' . $i . '']->blog_title ?></a>
                                                        </h2>
                                                    </div>
                                                    <a href="post.html"><img
                                                                src="images/blog/<?php echo $blog['' . $i . '']->blog_picture ?>"
                                                                alt=""></a>
                                                </div>
                                                <div class="post-body">
                                                    <div class="post-meta">
                                                        <?php
                                                        $y = substr($blog['' . $i . '']->created_at, 0, 4);
                                                        $m = substr($blog['' . $i . '']->created_at, 5, 2);
                                                        $d = substr($blog['' . $i . '']->created_at, 8, 2);
                                                        ?>
                                                        <span>{{$d}}/{{$m}}/{{$y}}</span>
                                                    </div>
                                                    <p>
                                                        <?php echo str_limit($blog['' . $i . '']->blog_content, 100)?>
                                                    </p>
                                                </div>
                                                <div class="read-more"><a href="post.html">read more</a></div>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            @endfor
                        </div>
                        <!-- end ot-module -->
                    </div>
                    <!-- stickysidebar -->
                </div>
            </div>
            <!-- row -->
            <!-- end main content -->
        </div>
        <!-- container -->
    </section>
@stop