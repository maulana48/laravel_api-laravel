<?php

    $users = [
            [
            'nama' => "asd",
            'foto' => '/img/error.png',
            'bio' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>',
            'active' => true,
            'alamat' => "asd", 
            'role' => "user",
            ],
            [
            'nama' => "asdf",
            'foto' => '/img/error.png',
            'bio' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>',
            'active' => false,
            'alamat' => "asdf", 
            'role' => "admin",
            ],
            [
            'nama' => "asdc",
            'foto' => '/img/error.png',
            'bio' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>',
            'active' => true,
            'alamat' => "asdc", 
            'role' => "admin",
            ],
            [
            'nama' => "asdg",
            'foto' => '/img/error.png',
            'bio' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>',
            'active' => true,
            'alamat' => "asdg", 
            'role' => "user",
            ],
            [
            'nama' => "asde",
            'foto' => '/img/error.png',
            'bio' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>',
            'active' => false,
            'alamat' => "asde", 
            'role' => "user",
            ],
            [
            'nama' => "asdr",
            'foto' => '/img/error.png',
            'bio' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>',
            'active' => true,
            'alamat' => "asdr", 
            'role' => "admin",
            ],
            [
            'nama' => "asdv",
            'foto' => '/img/error.png',
            'bio' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>',
            'active' => true,
            'alamat' => "asdv", 
            'role' => "user",
            ],
            [
            'nama' => "asds",
            'foto' => '/img/error.png',
            'bio' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>',
            'active' => false,
            'alamat' => "asds", 
            'role' => "user",
            ],
            [
            'nama' => "asdd",
            'foto' => '/img/error.png',
            'bio' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>',
            'active' => true,
            'alamat' => "asdd", 
            'role' => "admin",
            ],
            [
            'nama' => "asdde",
            'foto' => '/img/error.png',
            'bio' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>',
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
    <table class="max-w-[1000px] text-sm text-left text-gray-500 dark:text-gray-400 border-4 border-gray text-center m-auto">
        <thead class="text-xs text-white uppercase bg-gray-500 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Nama
                </th>
                <th scope="col" class="py-3 px-6">
                    Foto
                </th>
                <th scope="col" class="py-3 px-6">
                    Bio
                </th>
                <th scope="col" class="py-3 px-6">
                    Aktif
                </th>
                <th scope="col" class="py-3 px-6">
                    Alamat
                </th>
                <th scope="col" class="py-3 px-6">
                    Role
                </th>
                <th scope="col" class="py-3 px-6">
                    Detail
                </th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($u['role'] == $filter['role'] && $u['active'] == true): ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo e($u['nama']); ?>

                        </th>
                        <th scope="row" class="py-4 px-6 w-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <img src="<?php echo e(asset($u['foto'])); ?>" alt="">
                        </th>
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <p class=""><?php echo $u['bio']; ?></p>
                        </th>
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php if($u['active']): ?> aktif <?php else: ?> mati <?php endif; ?>
                        </th>
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <p class=""><?php echo e($u['alamat']); ?></p>
                        </th>
                        <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo e($u['role']); ?>

                        </th>
                        <td class="py-4 px-6">
                            <a href="<?php echo e(route('user.show', $loop->iteration)); ?>" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Show</a>
                        </td>
                    </tr>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.parent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\New folder\Alkademi\Laravel\tugas-laravel\resources\views/user/index.blade.php ENDPATH**/ ?>