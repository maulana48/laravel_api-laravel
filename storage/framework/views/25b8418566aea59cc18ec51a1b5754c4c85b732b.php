
<?php $__env->startSection('content'); ?>
    <!-- component -->
	<div class="d-flex my-4">
		<h1 class="text-center text-green-300 text-[30px] font-bold">Tambahkan Product</h1>
	</div>
    <div class="mb-4">
        <a href="<?php echo e(route('ec.index')); ?>" class="py-[10px] px-[15px] rounded-lg bg-blue-500 text-white">Back to home</a>
    </div>
	<div class="relative min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8 bg-gray-500 bg-no-repeat bg-cover relative items-center"
		style="background-image: url(https://images.unsplash.com/photo-1621243804936-775306a8f2e3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80);">
		<div class="absolute bg-black opacity-60 inset-0 z-0"></div>
		<div class="sm:max-w-lg w-full p-10 bg-white rounded-xl z-10">
			<div class="text-center">
				<h2 class="mt-5 text-3xl font-bold text-gray-900">
					Tambahkan Produk!
				</h2>
				<p class="mt-2 text-sm text-gray-400">Lorem ipsum is placeholder text.</p>
			</div>
			<form class="mt-8 space-y-3" action="" method="POST" enctype="multipart/form-data">
			<?php echo csrf_field(); ?>
						<div class="grid grid-cols-1 space-y-2">
							<label class="text-sm font-bold text-gray-500 tracking-wide">Nama</label>
								<input class="text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" type="" placeholder="Masukkan nama produk" <?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="nama" id="nama" required autofocus value="<?php echo e(old('nama')); ?>">

							<?php $__errorArgs = ['nama'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
								<div class="invalid-feedback">
									<?php echo e($message); ?>

								</div>
							<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						</div>
						<div class="grid grid-cols-1 space-y-2">
							<label class="text-sm font-bold text-gray-500 tracking-wide">Harga</label>
								<input class="text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" type="number" placeholder="Masukkan harga produk" <?php $__errorArgs = ['harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> name="harga" id="harga" required autofocus value="<?php echo e(old('harga')); ?>">

							<?php $__errorArgs = ['harga'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
								<div class="invalid-feedback">
									<?php echo e($message); ?>

								</div>
							<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						</div>
						<div class="grid grid-cols-1 space-y-2">
							<label class="text-sm font-bold text-gray-500 tracking-wide">Diskon</label>
								<input class="text-base p-2 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500" type="" placeholder="Masukkan diskon produk" <?php $__errorArgs = ['diskon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?> form-siswa name="diskon" id="diskon" autofocus value="<?php echo e(old('diskon')); ?>">

							<?php $__errorArgs = ['diskon'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
								<div class="invalid-feedback">
									<?php echo e($message); ?>

								</div>
							<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
						</div>
						<div class="grid grid-cols-1 space-y-2">
										<label class="text-sm font-bold text-gray-500 tracking-wide">Tambahkan Foto</label>
							<div class="flex items-center justify-center w-full">
								<label class="flex flex-col rounded-lg border-4 border-dashed w-full h-60 p-10 group text-center">
									<div class="h-full w-full text-center flex flex-col items-center justify-center items-center  ">
										<div class="flex flex-auto max-h-48 w-2/5 mx-auto -mt-10">
										<img class="has-mask h-36 object-center" src="https://img.freepik.com/free-vector/image-upload-concept-landing-page_52683-27130.jpg?size=338&ext=jpg" alt="freepik image">
										</div>
										<p class="pointer-none text-gray-500 "><span class="text-sm">Drag and drop</span> files here <br /> or <a  id="" class="text-blue-600 hover:underline">select a file</a> from your computer</p>
									</div>
									<input type="file" name="foto" id="foto" class="hidden">
								</label>
							</div>
						</div>
								<p class="text-sm text-gray-300">
									<span>File type: doc,pdf,types of images</span>
								</p>
						<div>
							<button type="submit" class="my-5 w-full flex justify-center bg-blue-500 text-gray-100 p-4  rounded-full
										font-semibold  focus:outline-none focus:shadow-outline hover:bg-blue-600 shadow-lg cursor-pointer transition ease-in duration-300">
							Upload
						</button>
						</div>
			</form>
		</div>
	</div>

	<style>
		.has-mask {
			position: absolute;
			clip: rect(10px, 150px, 130px, 10px);
		}
	</style>

<script>
        $('form').submit(function(event){
            event.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            
            form = new FormData(this);
            for (const i of form.entries()) {
                if(!i[1]){
                    alert (i[0] + ' tidak boleh kosong');
                }
            }
            $.ajax({
                url: "http://127.0.0.1:8000/api/e-commerce/",
                method: "POST",
                data: form,
                processData: false,
                contentType: false,
                success: _ => {
                    console.log('SUCCESS');
                    window.location.href = "";
                },
                error: err => {
                    console.log('ERROR');
                    console.log(err);
                }
            });
        });
</script>
<?php $__env->stopSection(); ?>
    



<?php echo $__env->make('components.parent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\New folder\Alkademi\Laravel\api-laravel\resources\views/E-commerce/create.blade.php ENDPATH**/ ?>