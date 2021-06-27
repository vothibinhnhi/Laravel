<?php echo $__env->make('user.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- ##### Post Details Title Area Start ##### -->
<div class="post-details-title-area bg-overlay clearfix" style="background-image: url(/user/img/bg-img//22.jpg)">
    <div class="container-fluid h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 col-lg-8">
                <!-- Post Content -->
                <div class="post-content">
                    <p class="tag"><span><?php echo e($news->kindOfNews['name']); ?></span></p>
                    <p class="post-title"><?php echo e($news->title); ?></p>
                    <div class="d-flex align-items-center">
                        <span class="post-date mr-30"><?php echo e(date_format($news->created_at, 'F d,Y')); ?></span>
                        <span class="post-date">By <?php echo e($news->user['name']); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Post Details Title Area End ##### -->

<!-- ##### Post Details Area Start ##### -->
<section class="post-news-area section-padding-100-0 mb-70">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Post Details Content Area -->
            <div class="col-12 col-lg-8">
                <div class="post-details-content mb-100">
                    <p><?php echo e($news->description); ?>.</p>
                    <img class="mb-30" src="<?php echo e($news->thumbnail); ?>" width="100%" alt="">
                    <p><?php echo e($news->content); ?>.
                    </p>
                </div>

                <!-- Comment Area Start -->
                <div class="comment_area clearfix mb-100">
                    <h4 class="mb-50">Comments</h4>

                    <ol>
                        <!-- Single Comment Area -->
                        <li class="single_comment_area">
                            <!-- Comment Content -->
                            <div class="comment-content d-flex">
                                <!-- Comment Author -->
                                <div class="comment-author">
                                    <img src="/user/img/bg-img//32.jpg" alt="author">
                                </div>
                                <!-- Comment Meta -->
                                <div class="comment-meta">
                                    <div class="d-flex">
                                        <a href="#" class="post-author">Maria Williams</a>
                                        <a href="#" class="post-date">June 23, 2018 </a>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                    <p>Consectetur adipiscing elit. Praesent vel tortor facilisis, volutpat nulla
                                        placerat, tinci dunt mi. Nullam vel orci dui. Su spendisse sit amet laoreet
                                        neque. Fusce sagittis sus cipit sem a consequat.</p>
                                </div>
                            </div>
                        </li>
                        <!-- Single Comment Area -->
                        <li class="single_comment_area">
                            <!-- Comment Content -->
                            <div class="comment-content d-flex">
                                <!-- Comment Author -->
                                <div class="comment-author">
                                    <img src="/user/img/bg-img//32.jpg" alt="author">
                                </div>
                                <!-- Comment Meta -->
                                <div class="comment-meta">
                                    <div class="d-flex">
                                        <a href="#" class="post-author">Lisa Moore</a>
                                        <a href="#" class="post-date">June 23, 2018</a>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent vel tortor
                                        facilisis, volutpat nulla placerat, tincidunt mi. Nullam vel orci dui. Su
                                        spendisse sit amet laoreet neque. Fusce sagittis suscipit.</p>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>

                <div class="post-a-comment-area mb-30 clearfix">
                    <h4 class="mb-50">Leave a reply</h4>

                    <!-- Reply Form -->
                    <div class="contact-form-area">
                        <form action="#" method="post">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <input type="text" class="form-control" id="name" placeholder="Name*">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <input type="email" class="form-control" id="email" placeholder="Email*">
                                </div>
                                <div class="col-12">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="10"
                                        placeholder="Message"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="btn newsbox-btn mt-30" type="submit">Submit Comment</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- Sidebar Widget -->
            <div class="col-12 col-sm-9 col-md-6 col-lg-4">
                <div class="sidebar-area">

                    <!-- Newsletter Widget -->
                    <div class="single-widget-area newsletter-widget mb-30">
                        <h4>Subscribe to our newsletter</h4>
                        <form action="#" method="post">
                            <input type="email" name="nl-email" id="nlemail" placeholder="Your E-mail">
                            <button type="submit" class="btn newsbox-btn w-100">Subscribe</button>
                        </form>
                        <p class="mt-30">Nullam lacinia ex eleifend orci porttitor, suscipit interdum augue condimentum.
                            Etiam pretium turpis eget nibh . volutpat lobortis.</p>
                    </div>

                    <!-- Add Widget -->
                    <div class="single-widget-area add-widget mb-30">
                        <a href="#">
                            <img src="/user/img/bg-img//add3.png" alt="">
                        </a>
                    </div>

                    <!-- Latest News Widget -->
                    <div class="single-widget-area news-widget mb-30">
                        <h4>Latest News</h4>
                        <?php $__currentLoopData = $getNews5Lasted; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="single-blog-post d-flex style-4 mb-30">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail">
                                    <a href="<?php echo e(route('showNews', $item->id)); ?>"><img src="<?php echo e($item->thumbnail); ?>"
                                            style="width: 100%;height:14vh !important" alt=""></a>

                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date"><?php echo e(date_format($item->created_at, 'F d,Y')); ?></span>
                                    <a href="<?php echo e(route('showNews', $item->id)); ?>"
                                        class="post-title"><?php echo e($item->title); ?></a>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <!-- Single News Area -->
                    </div>
                    <!-- Single Widget Area -->
                    <div class="single-widget-area">
                        <?php $__currentLoopData = $getNews2Lasted; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <!-- Single News Area -->
                            <div class="single-blog-post style-2 mb-5">
                                <!-- Blog Thumbnail -->
                                <div class="blog-thumbnail">
                                    <a href="<?php echo e(route('showNews', $item->id)); ?>"><img src="<?php echo e($item->thumbnail); ?>"
                                            style="width: 100%;height:35vh !important" alt=""></a>

                                </div>

                                <!-- Blog Content -->
                                <div class="blog-content">
                                    <span class="post-date"><?php echo e(date_format($item->created_at, 'F d,Y')); ?></span>
                                    <a href="<?php echo e(route('showNews', $item->id)); ?>"
                                        class="post-title"><?php echo e($item->title); ?></a>
                                    <a href="#" class="post-author">By <?php echo e($item->user['name']); ?></a>
                                </div>
                            </div>

                            <!-- Single News Area -->
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Post Details Area End ##### -->
<?php echo $__env->make('user.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\Admin\Desktop\laravel\news\resources\views/user/show.blade.php ENDPATH**/ ?>