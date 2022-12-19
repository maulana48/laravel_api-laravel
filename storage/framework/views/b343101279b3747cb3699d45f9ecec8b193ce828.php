
<?php $__env->startSection('content'); ?>

<!-- Top Bar Nav -->
    <nav class="w-full py-4 bg-blue-800 shadow">
        <div class="w-full container mx-auto flex flex-wrap items-center justify-between">

            <nav>
                <ul class="flex items-center justify-between font-bold text-sm text-white uppercase no-underline">
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="<?php echo e(route('blog.index')); ?>">Home</a></li>
                    <li><a class="hover:text-gray-200 hover:underline px-4" href="<?php echo e(route('blog.create')); ?>">Create</a></li>
                </ul>
            </nav>

            <div class="flex items-center text-lg no-underline text-white pr-6">
                <a class="" href="#">
                    <i class="fab fa-facebook"></i>
                </a>
                <a class="pl-6" href="#">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="pl-6" href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a class="pl-6" href="#">
                    <i class="fab fa-linkedin"></i>
                </a>
            </div>
        </div>

    </nav>

    <!-- Text Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center py-12">
            <a class="font-bold text-gray-800 uppercase hover:text-gray-700 text-5xl" href="#">
                Minimal Blog
            </a>
            <p class="text-lg text-gray-600">
                Lorem Ipsum Dolor Sit Amet
            </p>
        </div>
    </header>

    <div class="container mx-auto flex flex-wrap py-6">

        <!-- Post Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">

            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->
                <a href="#" class="hover:opacity-75">
                        <?php if( $post->image): ?>
                            <img src="<?php echo e(asset($post->image)); ?>">
                        <?php else: ?> 
                            <img src="https://source.unsplash.com/collection/1346951/1000x500?sig=1">
                        <?php endif; ?>
                </a>
                <div class="bg-white flex flex-col justify-start p-6">
                    <div class="flex justify-between">
                        <a href="#" class="text-blue-700 text-sm font-bold uppercase pb-4"><?php echo e($post->category->name); ?></a>
                        <div class="flex gap-2">
                            <a href="<?php echo e(route('blog.edit', $post->id)); ?>" class="btn bg-yellow-700 hover:bg-yellow-500 py-2 px-5 text-white rounded-xl">Edit Post</a>
                            <form action="<?php echo e(route('blog.destroy', $post->id)); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <button type="submit" class="btn bg-red-700 hover:bg-red-500 py-2 px-5 text-white rounded-xl">
                                    <a href="" class="">Delete Post</a>
                                </button>    
                            </form>
                        </div>
                    </div>
                    <a href="#" class="text-3xl font-bold hover:text-gray-700 pb-4"><?php echo e($post->name); ?></a>
                    <p href="#" class="text-sm pb-8">
                        By <a href="#" class="font-semibold hover:text-gray-800"><?php echo e($user->name); ?></a>, Published on <?php echo e($post->created_at->format('F jS, Y')); ?>

                    </p>
                    <h1 class="text-2xl font-bold pb-3">Content</h1>
                    <p class="pb-3"><?php echo $post->body; ?></p>
                </div>
            </article>

            <div class="w-full flex pt-6">
                <?php if($PVpost): ?>
                    <a href="<?php echo e(route('blog.show', $PVpost->id)); ?>" class="w-1/2 bg-white shadow hover:shadow-md text-left p-6">
                        <p class="text-lg text-blue-800 font-bold flex items-center"><i class="fas fa-arrow-left pr-1"></i> Previous</p>
                        <p class="pt-2"><?php echo e($PVpost->title); ?></p>
                    </a>
                <?php endif; ?>
                <?php if($NXpost): ?>
                    <a href="<?php echo e(route('blog.show', $NXpost->id)); ?>" class="w-1/2 bg-white shadow hover:shadow-md text-right p-6">
                        <p class="text-lg text-blue-800 font-bold flex items-center justify-end">Next <i class="fas fa-arrow-right pl-1"></i></p>
                        <p class="pt-2"><?php echo e($NXpost->title); ?></p>
                    </a>
                <?php endif; ?>
            </div>

            <div class="w-full flex flex-col gap-2 text-center md:text-left md:flex-row shadow bg-white mt-10 mb-10 p-6">
                <div class="w-full md:w-1/5 flex justify-center md:justify-start pb-4">
                    <img src="https://source.unsplash.com/collection/1346951/150x150?sig=1" class="rounded-full shadow h-32 w-32">
                </div>
                <div class="flex-1 flex flex-col justify-center md:justify-start">
                    <p class="font-semibold text-2xl"><?php echo e($user->name); ?></p>
                    <p class="pt-2"><?php echo e($user->email); ?></p>
                    <div class="flex items-center justify-center md:justify-start text-2xl no-underline text-blue-800 pt-4">
                        <a class="" href="#">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a class="pl-4" href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="pl-4" href="#">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="pl-4" href="#">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>
            </div>

        </section>

        <!-- Sidebar Section -->
        <aside class="w-full md:w-1/3 flex flex-col items-center px-3">

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">About Us</p>
                <p class="pb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas mattis est eu odio sagittis tristique. Vestibulum ut finibus leo. In hac habitasse platea dictumst.</p>
                <a href="#" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-4">
                    Get to know us
                </a>
            </div>

            <div class="w-full bg-white shadow flex flex-col my-4 p-6">
                <p class="text-xl font-semibold pb-5">Instagram</p>
                <div class="grid grid-cols-3 gap-3">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=1">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=2">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=3">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=4">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=5">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=6">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=7">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=8">
                    <img class="hover:opacity-75" src="https://source.unsplash.com/collection/1346951/150x150?sig=9">
                </div>
                <a href="#" class="w-full bg-blue-800 text-white font-bold text-sm uppercase rounded hover:bg-blue-700 flex items-center justify-center px-2 py-3 mt-6">
                    <i class="fab fa-instagram mr-2"></i> Follow @dgrzyb
                </a>
            </div>

        </aside>

    </div>

    <footer class="w-full border-t bg-white pb-12">
        <div class="mx-auto pt-10">
            <div class="text-center">
                <h1 class="font-bold text-2xl">New Updates</h1>
            </div>
            <div class="flex justify-center flex-col md:flex-row gap-10 md:gap-5 pt-10 px-10">
            <?php $__currentLoopData = $latest; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class=" overflow-hidden shadow-lg transition duration-500 ease-in-out transform hover:shadow-2xl rounded-lg md:w-80">
                        <?php if($l->image): ?>
                            <img alt="blog photo" src="<?php echo e(asset($l->image)); ?>" class="max-h-40 w-full object-cover" />
                        <?php else: ?>
                            <img alt="blog photo" src="https://images.unsplash.com/photo-1542435503-956c469947f6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80" class="max-h-40 w-full object-cover" />
                        <?php endif; ?>
                        <div class="bg-white w-full p-4">
                            <a href="#" class="text-blue-600 text-2xl font-medium"><?php echo e($l->title); ?></a>
                            <p class="text-gray-600 font-light text-md">
                                <?php echo e($l->excerpt); ?>

                                <a class="inline-flex text-blue-600" href="<?php echo e(route('blog.show', $l->id)); ?>">Read More</a>
                            </p>
                            <div class=" flex flex-wrap justify-starts items-center py-3 border-b-2 text-xs text-white font-medium">
                                <a href="#" class="m-1 px-2 py-1 rounded bg-blue-500"> <?php echo e($l->category->name); ?> </a>
                            </div>
                            <div class="flex items-center mt-2">
                                <img class="w-10 h-10 object-cover rounded-full" alt="User avatar"
                                    src="https://images.unsplash.com/photo-1477118476589-bff2c5c4cfbb?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=200&q=200" />
                                <div class="pl-2">
                                    <div class="font-medium"><?php echo e($l->user->name); ?></div>
                                    <div class="text-gray-600 text-xs"><?php echo e($l->user->username); ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
        <div class="w-full container mx-auto flex flex-col items-center">
            <div class="flex flex-col md:flex-row text-center md:text-left md:justify-between py-6">
                <a href="#" class="uppercase px-3">About Us</a>
                <a href="#" class="uppercase px-3">Privacy Policy</a>
                <a href="#" class="uppercase px-3">Terms & Conditions</a>
                <a href="#" class="uppercase px-3">Contact Us</a>
            </div>
            <div class="uppercase pb-6">&copy; myblog.com</div>
        </div>
    </footer>

    <script>
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.parent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\New folder\Alkademi\Laravel\api-laravel\resources\views/Blogs/show.blade.php ENDPATH**/ ?>