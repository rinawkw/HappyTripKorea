@extends('layouts.index')

@section('content')
        <!-- main content -->
        <section class="ot-section-b wide-article">
            <div class="container">
                <div class="wide-article-container">
                    <div class="article-heading">
                        <div class="main-heading">
                            <div class="post-cat2">
                                <span><a href="category.html">Travelling</a></span>
                            </div>
                            <h2><?php echo $post->blog_title ?></h2>
                            <h4>by Happy Trip Korea Admin</h4>
                        </div>
                        <div class="post-meta">
                            <?php
                            $y = substr($post->created_at, 0, 4);
                            $m = substr($post->created_at, 5, 2);
                            $d = substr($post->created_at, 8, 2);
                            ?>
                            <span>{{$d}}/{{$m}}/{{$y}}</span>
                        </div>
                    </div>
                    <div class="article-image"><img src="/images/blog/<?php echo $post->blog_picture ?>" alt=""></div>
                </div>
            </div>
        </section>
        <!-- article -->
        <section class="ot-section-a">
            <!-- container -->
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="theiaStickySidebar">
                            <div class="content ot-article">
                                <p>
                                    <?php echo $post->blog_content ?>
                                </p>
                            </div>
                            <!-- end reviews box -->
                            <div class="ot-next-prev-cont">
                                <?php
                                if($post->blog_id!=0){
                                    $prev = $post->blog_id-1;
                                    if($post->blog_id!=$blog->count()){
                                        $next = $post->blog_id+1;
                                    }
                                    else{
                                        $next = 0;
                                    }
                                }
                                else{
                                    $prev = 0;
                                    if($post->blog_id!=$blog->count()-1){
                                        $next = $post->blog_id+1;
                                    }
                                    else{
                                        $next = 0;
                                    }
                                }
                                if($prev!=0){
                                    $i = $prev-1;
                                ?>
                                <div class="ot-prev"><a href="/blog/<?php echo $i?>"><span><i class="fa fa-chevron-left"></i>Previous article</span><strong><?php echo $blog[''.$i.'']->blog_title?></strong></a></div>
                                <?php }
                                if($next!=0){
                                    $i = $next-1;?>

                                    <div class="ot-prev"><a href=""></a></div>
                                    <div class="ot-next pull-right"><a href="/blog/<?php echo $i?>"><span>Next article<i class="fa fa-chevron-right"></i></span><strong><?php echo $blog[''.$i.'']->blog_title?></strong></a></div>
                                <?php }?>
                            </div>

                        </div>
                        <!-- end theiaStickySidebar -->
                    </div>
                    <div class="col-md-4">
                        <div class="theiaStickySidebar">
                            <aside class="sidebar">
                                <!-- widget articles section -->
                                <div class="widget-container">
                                    <h4 class="section-title"><span>Latest From All Categories</span>Latest News</h4>
                                    <!-- article post -->
                                    <article class="widget-post">
                                        <div class="post-image">
                                            <a href="/blog/<?php echo $blog['' . $blog->count()-1 . '']->blog_id?>"><img src="/images/blog/<?php echo $blog['' . $blog->count()-1 . '']->blog_picture ?>" alt=""></a>
                                        </div>
                                        <div class="post-body">
                                            <h2><a href="/blog/<?php echo $blog['' . $blog->count()-1 . '']->blog_id?>"><?php echo $blog['' . $blog->count()-1 . '']->blog_title ?></a></h2>
                                        </div>
                                    </article>
                                    <!-- end article item -->
                                    <!-- article post -->
                                    <article class="widget-post">
                                        <div class="post-image">
                                            <a href="/blog/<?php echo $blog['' . $blog->count()-2 . '']->blog_id?>"><img src="/images/blog/<?php echo $blog['' . $blog->count()-2 . '']->blog_picture ?>" alt=""></a>
                                        </div>
                                        <div class="post-body">
                                            <h2><span class="hot">Hot <i class="fa fa-bolt"></i></span><a href="/blog/<?php echo $blog['' . $blog->count()-2 . '']->blog_id?>"><?php echo $blog['' . $blog->count()-2 . '']->blog_title ?></a></h2>
                                        </div>
                                    </article>
                                    <!-- end article item -->
                                    <!-- article post -->
                                    <article class="widget-post">
                                        <div class="post-image">
                                            <a href="/blog/<?php echo $blog['' . $blog->count()-3 . '']->blog_id?>"><img src="/images/blog/<?php echo $blog['' . $blog->count()-3 . '']->blog_picture ?>" alt=""></a>
                                        </div>
                                        <div class="post-body">
                                            <h2><a href="/blog/<?php echo $blog['' . $blog->count()-3 . '']->blog_id?>"><?php echo $blog['' . $blog->count()-3 . '']->blog_title ?></a></h2>
                                        </div>
                                    </article>
                                    <!-- end article item -->
                                    <!-- article post -->
                                    <article class="widget-post">
                                        <div class="post-image">
                                            <a href="/blog/<?php echo $blog['' . $blog->count()-4 . '']->blog_id?>"><img src="/images/blog/<?php echo $blog['' . $blog->count()-4 . '']->blog_picture ?>" alt=""></a>
                                        </div>
                                        <div class="post-body">
                                            <h2><a href="/blog/<?php echo $blog['' . $blog->count()-4 . '']->blog_id?>"><?php echo $blog['' . $blog->count()-4 . '']->blog_title ?></a></h2>
                                        </div>
                                    </article>
                                    <!-- end article item -->
                                </div>
                                <!-- end widget articles section -->
                                <!-- widget advertisement -->
                                <div class="widget-container widget_tag_cloud">
                                    <h4 class="section-title">Advertisement</h4>
                                </div>
                                <!-- end widget advertisement -->
                            </aside>
                        </div>
                        <!-- end theiaStickySidebar -->
                    </div>
                    <!-- col-md-4 -->
                </div>
                <!-- row -->
                <!-- end main content -->
            </div>
            <!-- container -->
        </section>


@stop