<?php $__env->startSection('home_content'); ?>
 <main class="main">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <div class="container">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog Post</li>
                    </ol>
                </div><!-- End .container -->
            </nav>

            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <article class="entry single">
                            <div class="entry-media">
                                <div class="">
                                    <img src="<?php echo e(asset('/')); ?><?php echo e($blog->blog_image); ?>" alt="Post">
                                   
                                </div><!-- End .entry-slider -->
                            </div><!-- End .entry-media -->

                            <div class="entry-body">
                                <div class="entry-date">
                                    <span class="day"><?php echo e(date('d', strtotime($blog->created_at))); ?></span>
                                    <span class="month"><?php echo e(date('M', strtotime($blog->created_at))); ?></span>
                                </div><!-- End .entry-date -->

                                <h2 class="entry-title">
                                    <?php echo e($blog->blog_title); ?>

                                </h2>

                                <div class="entry-meta">
                                    <span><i class="icon-calendar"></i><?php echo e(date('M d, Y', strtotime($blog->created_at))); ?></span>
                                    <span><i class="icon-user"></i>By <a href="#">Admin</a></span>
                                    
                                </div><!-- End .entry-meta -->

                                <div class="entry-content">
                                    <p><?php echo e($blog->blog); ?></p>
                                   
                                </div><!-- End .entry-content -->

                                <div class="entry-share">
                                    <h3>
                                        <i class="icon-forward"></i>
                                        Share this post
                                    </h3>

                                    <div class="social-icons">
                                        <a href="#" class="social-icon social-facebook" target="_blank" title="Facebook">
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="#" class="social-icon social-twitter" target="_blank" title="Twitter">
                                            <i class="icon-twitter"></i>
                                        </a>
                                        <a href="#" class="social-icon social-linkedin" target="_blank" title="Linkedin">
                                            <i class="icon-linkedin"></i>
                                        </a>
                                        <a href="#" class="social-icon social-gplus" target="_blank" title="Google +">
                                            <i class="icon-gplus"></i>
                                        </a>
                                        <a href="#" class="social-icon social-mail" target="_blank" title="Email">
                                            <i class="icon-mail-alt"></i>
                                        </a>
                                    </div><!-- End .social-icons -->
                                </div><!-- End .entry-share -->

                                

                               
                            </div><!-- End .entry-body -->
                        </article><!-- End .entry -->

                        <div class="related-posts">
                            <h4 class="light-title">Related <strong>Posts</strong></h4>

                            <div class="owl-carousel owl-theme related-posts-carousel">



                            	<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <article class="entry">
                                    <div class="entry-media">
                                        <a href="<?php echo e(route('blog-post', $row->id)); ?>">
                                            <img src="<?php echo e(asset('/')); ?><?php echo e($row->blog_image); ?>" alt="Post">
                                        </a>
                                    </div><!-- End .entry-media -->

                                    <div class="entry-body">
                                        <div class="entry-date">
                                            <span class="day"><?php echo e(date('d', strtotime($row->created_at))); ?></span>
                                            <span class="month"><?php echo e(date('M', strtotime($row->created_at))); ?></span>
                                        </div><!-- End .entry-date -->

                                        <h2 class="entry-title">
                                            <a href="<?php echo e(route('blog-post', $row->id)); ?>"><?php echo e($row->blog_title); ?></a>
                                        </h2>

                                        <div class="entry-content">
                                            <p><?php echo e(\Illuminate\Support\Str::limit($row->blog, 250, '..........')); ?></p>

                                            <a href="<?php echo e(route('blog-post', $row->id)); ?>" class="read-more">Read More <i class="icon-angle-double-right"></i></a>
                                        </div><!-- End .entry-content -->
                                    </div><!-- End .entry-body -->
                                </article>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              

                              

                                
                            </div><!-- End .owl-carousel -->
                        </div><!-- End .related-posts -->
                    </div><!-- End .col-lg-9 -->

                    <aside class="sidebar col-lg-3">
                        <div class="sidebar-wrapper">
                            

                           

                            <div class="widget">
                                <h4 class="widget-title">Recent Posts</h4>

                                <ul class="simple-entry-list">

                                	<?php $__currentLoopData = $recent_blog; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li>
                                        <div class="entry-media">
                                            <a href="<?php echo e(route('blog-post', $row->id)); ?>">
                                                <img src="<?php echo e(asset('/')); ?><?php echo e($row->blog_image); ?>" alt="Post">
                                            </a>
                                        </div><!-- End .entry-media -->
                                        <div class="entry-info">
                                            <a href="<?php echo e(route('blog-post', $row->id)); ?>"><?php echo e($row->blog_title); ?></a>
                                            <div class="entry-meta">
                                                <?php echo e(date('M d, Y', strtotime($blog->created_at))); ?>

                                            </div><!-- End .entry-meta -->
                                        </div><!-- End .entry-info -->
                                    </li>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                   

                                </ul>
                            </div><!-- End .widget -->

                            

                         


                            
                        </div><!-- End .sidebar-wrapper -->
                    </aside><!-- End .col-lg-3 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div class="mb-6"></div><!-- margin -->
        </main><!-- End .main -->


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.website', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\salepropos\resources\views/eshop/blog_post.blade.php ENDPATH**/ ?>