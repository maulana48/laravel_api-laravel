<?php

    $users = [
            [
            'nama' => "asd",
            'foto' => '/img/error.png',
            'bio' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p> Laborum est itaque eveniet laudantium! Autem placeat facere a, distinctio temporibus magnam eos alias, quod ad nihil quaerat aliquid necessitatibus repellendus non.</p>',
            'active' => true,
            'alamat' => "asd", 
            'role' => "user",
            ],
            [
            'nama' => "asdf",
            'foto' => '/img/error.png',
            'bio' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p> Laborum est itaque eveniet laudantium! Autem placeat facere a, distinctio temporibus magnam eos alias, quod ad nihil quaerat aliquid necessitatibus repellendus non.</p>',
            'active' => false,
            'alamat' => "asdf", 
            'role' => "admin",
            ],
            [
            'nama' => "asdc",
            'foto' => '/img/error.png',
            'bio' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p> Laborum est itaque eveniet laudantium! Autem placeat facere a, distinctio temporibus magnam eos alias, quod ad nihil quaerat aliquid necessitatibus repellendus non.</p>',
            'active' => true,
            'alamat' => "asdc", 
            'role' => "admin",
            ],
            [
            'nama' => "asdg",
            'foto' => '/img/error.png',
            'bio' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p> Laborum est itaque eveniet laudantium! Autem placeat facere a, distinctio temporibus magnam eos alias, quod ad nihil quaerat aliquid necessitatibus repellendus non.</p>',
            'active' => true,
            'alamat' => "asdg", 
            'role' => "user",
            ],
            [
            'nama' => "asde",
            'foto' => '/img/error.png',
            'bio' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p> Laborum est itaque eveniet laudantium! Autem placeat facere a, distinctio temporibus magnam eos alias, quod ad nihil quaerat aliquid necessitatibus repellendus non.</p>',
            'active' => false,
            'alamat' => "asde", 
            'role' => "user",
            ],
            [
            'nama' => "asdr",
            'foto' => '/img/error.png',
            'bio' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p> Laborum est itaque eveniet laudantium! Autem placeat facere a, distinctio temporibus magnam eos alias, quod ad nihil quaerat aliquid necessitatibus repellendus non.</p>',
            'active' => true,
            'alamat' => "asdr", 
            'role' => "admin",
            ],
            [
            'nama' => "asdv",
            'foto' => '/img/error.png',
            'bio' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p> Laborum est itaque eveniet laudantium! Autem placeat facere a, distinctio temporibus magnam eos alias, quod ad nihil quaerat aliquid necessitatibus repellendus non.</p>',
            'active' => true,
            'alamat' => "asdv", 
            'role' => "user",
            ],
            [
            'nama' => "asds",
            'foto' => '/img/error.png',
            'bio' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p> Laborum est itaque eveniet laudantium! Autem placeat facere a, distinctio temporibus magnam eos alias, quod ad nihil quaerat aliquid necessitatibus repellendus non.</p>',
            'active' => false,
            'alamat' => "asds", 
            'role' => "user",
            ],
            [
            'nama' => "asdd",
            'foto' => '/img/error.png',
            'bio' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p> Laborum est itaque eveniet laudantium! Autem placeat facere a, distinctio temporibus magnam eos alias, quod ad nihil quaerat aliquid necessitatibus repellendus non.</p>',
            'active' => true,
            'alamat' => "asdd", 
            'role' => "admin",
            ],
            [
            'nama' => "asdde",
            'foto' => '/img/error.png',
            'bio' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p><p> Laborum est itaque eveniet laudantium! Autem placeat facere a, distinctio temporibus magnam eos alias, quod ad nihil quaerat aliquid necessitatibus repellendus non.</p>',
            'active' => true,
            'alamat' => "asdde", 
            'role' => "admin",
            ],
    ];  


    $filter = [
    'active' => true,
    'role' => "admin"
    ];
?>

<?php $__env->startSection('content'); ?>
<div class="p-10">
        <div class="mb-4">
            <a href="<?php echo e(route('user.index')); ?>" class="py-[10px] px-[15px] rounded-lg bg-blue-500 text-white">Back to home</a>
        </div>
        <!--Card 1-->
        <div class=" w-full lg:max-w-full lg:flex border border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 ">
        <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('<?php echo e(asset($users[$id]['foto'])); ?>')" title="Mountain">
        </div>
        <div class="bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
            <div class="mb-8">
                <div class="text-gray-900 font-bold text-xl mb-2"><?php echo e($users[$id]['nama']); ?></div>
                <p class="text-gray-700 text-base"><?php echo $users[$id]['bio']; ?></p>
                </div>
                <div class="flex items-center gap-4">
                <p class="text-gray-900 leading-none"><?php if($users[$id]['active']): ?> aktif <?php endif; ?></p>
                <p>|</p>
                <div class="text-sm">
                    <p class="text-gray-600"><?php echo e($users[$id]['role']); ?></p>
                </div>
            </div>
        </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.parent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\New folder\Alkademi\Laravel\tugas-laravel\resources\views/user/show.blade.php ENDPATH**/ ?>