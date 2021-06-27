<?php echo $__env->make('admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="card p-4">
                    <?php if(session('success')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('success')); ?>

                        </div>
                    <?php endif; ?>
                    <form action="<?php echo e(route('news.update', $news->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('put'); ?>
                        <input type="hidden" name="user_id" value="1">
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title" value="<?php echo e($news->title); ?>">
                                <?php if($errors->has('title')): ?>
                                    <p class="text-danger">* Error!
                                        <?php echo e($errors->first('title')); ?>

                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname"
                                class="col-sm-3 text-right control-label col-form-label">Description</label>
                            <div class="col-sm-9">
                                <textarea name="description" id="" cols="30" rows="2"
                                    class="form-control"><?php echo e($news->description); ?></textarea>
                                <?php if($errors->has('description')): ?>
                                    <p class="text-danger">* Error!
                                        <?php echo e($errors->first('description')); ?>

                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Content</label>
                            <div class="col-sm-9">
                                <textarea name="content" id="" cols="30" rows="5"
                                    class="form-control"><?php echo e($news->content); ?></textarea>
                                <?php if($errors->has('content')): ?>
                                    <p class="text-danger">* Error!
                                        <?php echo e($errors->first('content')); ?>

                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname"
                                class="col-sm-3 text-right control-label col-form-label">Thumbnail</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" name="thumbnail"
                                    value="<?php echo e($news->thumbnail); ?>">
                                <?php if($errors->has('thumbnail')): ?>
                                    <p class="text-danger">* Error!
                                        <?php echo e($errors->first('thumbnail')); ?>

                                    </p>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-2">
                                <img src="<?php echo e($news->thumbnail); ?>" width="100%" height="50vh" alt="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Kind Of
                                News</label>
                            <div class="col-sm-9">
                                <select name="kindofnews_id" class="form-control" id="">
                                    <?php $__currentLoopData = $kindOfNewsList; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kindOfNews): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($kindOfNews->id); ?>" <?php if($kindOfNews->id == $news->kindofnews_id): ?> <?php echo e('selected'); ?> <?php endif; ?>>
                                            <?php echo e($kindOfNews->name); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <?php echo $__env->make('admin.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /Users/lctiendat/Documents/news/resources/views/admin/news/edit.blade.php ENDPATH**/ ?>