@extends('layout')


@section('title')
Guía de Buenos Aires
@endsection

@section('description')
Somos un hotel de Categoria ubicado en plena Ciudad de Buenos aires
@endsection

@section('navBar')
@component('components.general.nav_general')
    
@endcomponent  

@section('main')

        <!-- =========== PAGE TITLE ========== -->
        <div class="page_title gradient_overlay" style="background: url(images/page_title_bg.jpg);">
            <div class="container">
                <div class="inner">
                    <h1>Guia de Buenos aires</h1>
                    
                </div>
            </div>
        </div>

        <!-- =========== MAIN ========== -->
        <main class="blog">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <!-- ITEM -->
                        <article class="blog_list">
                            <figure>
                                <a href="blog-post.html" class="hover_effect h_link h_blue">
                                    <img src="images/blog/blog_post1.jpg" class="img-responsive" alt="Image">
                                </a>
                            </figure>
                            <div class="details">
                                <h2><a href="blog-post.html">Live your myth in Greece</a></h2>
                                <div class="info">
                                    <span class="meta_part"><a href="#"><i class="fa fa-user"></i>John Doe</a></span>
                                    <span class="meta_part"><a href="#"><i class="fa fa-calendar"></i>February 15, 2017</a></span>
                                    <span class="meta_part"><a href="#"><i class="fa fa-comment-o"></i>68 Comments</a></span>
                                    <span class="meta_part"><i class="fa fa-folder-open-o"></i><a href="#">News</a>, <a href="#">Events</a></span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit...</p>
                                <a class="button btn_blue " href="blog-post.html"><i class="fa fa-angle-double-right"></i> Read More </a>
                            </div>
                        </article>
                        <!-- ITEM -->
                        <article class="blog_list">
                            <figure>
                                <a href="blog-post.html" class="hover_effect h_link h_blue">
                                    <img src="images/blog/blog_post2.jpg" class="img-responsive" alt="Image">
                                </a>
                            </figure>
                            <div class="details">
                                <h2><a href="blog-post.html">Hotel Zante in pictures</a></h2>
                                <div class="info">
                                    <span class="meta_part"><a href="#"><i class="fa fa-user"></i>John Doe</a></span>
                                    <span class="meta_part"><a href="#"><i class="fa fa-calendar"></i>February 15, 2017</a></span>
                                    <span class="meta_part"><a href="#"><i class="fa fa-comment-o"></i>68 Comments</a></span>
                                    <span class="meta_part"><i class="fa fa-folder-open-o"></i><a href="#">News</a>, <a href="#">Events</a></span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit...</p>
                                <a class="button btn_blue " href="blog-post.html"><i class="fa fa-angle-double-right"></i> Read More </a>
                            </div>
                        </article>
                        <!-- ITEM -->
                        <article class="blog_list">
                            <figure>
                                <a href="blog-post.html" class="hover_effect h_link h_blue">
                                    <img src="images/blog/blog_post3.jpg" class="img-responsive" alt="Image">
                                </a>
                            </figure>
                            <div class="details">
                                <h2><a href="blog-post.html">Hotel Zante family party</a></h2>
                                <div class="info">
                                    <span class="meta_part"><a href="#"><i class="fa fa-user"></i>John Doe</a></span>
                                    <span class="meta_part"><a href="#"><i class="fa fa-calendar"></i>February 15, 2017</a></span>
                                    <span class="meta_part"><a href="#"><i class="fa fa-comment-o"></i>68 Comments</a></span>
                                    <span class="meta_part"><i class="fa fa-folder-open-o"></i><a href="#">News</a>, <a href="#">Events</a></span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit...</p>
                                <a class="button btn_blue " href="blog-post.html"><i class="fa fa-angle-double-right"></i> Read More </a>
                            </div>
                        </article>
                        <!-- ITEM -->
                        <article class="blog_list">
                            <figure>
                                <a href="blog-post.html" class="hover_effect h_link h_blue">
                                    <img src="images/blog/blog_post4.jpg" class="img-responsive" alt="Image">
                                </a>
                            </figure>
                            <div class="details">
                                <h2><a href="blog-post.html">Hotel Zante Weddings</a></h2>
                                <div class="info">
                                    <span class="meta_part"><a href="#"><i class="fa fa-user"></i>John Doe</a></span>
                                    <span class="meta_part"><a href="#"><i class="fa fa-calendar"></i>February 15, 2017</a></span>
                                    <span class="meta_part"><a href="#"><i class="fa fa-comment-o"></i>68 Comments</a></span>
                                    <span class="meta_part"><i class="fa fa-folder-open-o"></i><a href="#">News</a>, <a href="#">Events</a></span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit...</p>
                                <a class="button btn_blue " href="blog-post.html"><i class="fa fa-angle-double-right"></i> Read More </a>
                            </div>
                        </article>
                        <!-- ITEM -->
                        <article class="blog_list">
                            <figure>
                                <a href="blog-post.html" class="hover_effect h_link h_blue">
                                    <img src="images/blog/blog_post5.jpg" class="img-responsive" alt="Image">
                                </a>
                            </figure>
                            <div class="details">
                                <h2><a href="blog-post.html">10 Things You Should Know</a></h2>
                                <div class="info">
                                    <span class="meta_part"><a href="#"><i class="fa fa-user"></i>John Doe</a></span>
                                    <span class="meta_part"><a href="#"><i class="fa fa-calendar"></i>February 15, 2017</a></span>
                                    <span class="meta_part"><a href="#"><i class="fa fa-comment-o"></i>68 Comments</a></span>
                                    <span class="meta_part"><i class="fa fa-folder-open-o"></i><a href="#">News</a>, <a href="#">Events</a></span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit...</p>
                                <a class="button btn_blue " href="blog-post.html"><i class="fa fa-angle-double-right"></i> Read More </a>
                            </div>
                        </article>
                        <nav>
                            <ul class="pagination">
                                <li class="prev_pagination"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">6</a></li>
                                <li class="next_pagination"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-md-4">
                        @component('components.general.Form_reserva')
                        @endcomponent
                    </div>
                </div>
            </div>
 

           
        </main>

    </div>
@endsection