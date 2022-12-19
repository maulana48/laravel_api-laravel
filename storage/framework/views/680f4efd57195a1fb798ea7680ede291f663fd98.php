
<?php $__env->startSection('content'); ?>
<div class="d-flex my-4">
    <h1 class="text-center text-green-300 text-[30px] font-bold">Product List</h1>
</div>
<div class="mb-4">
    <a href="/e-commerce/create" class="py-[10px] px-[15px] rounded-lg bg-blue-500 text-white">Tambahkan
        Product</a>
</div>
<div id="Products" class="flex flex-wrap bg-amber-100 justify-center">
    

    
</div>
<script>
    $.ajax({
            url: 'http://127.0.0.1:8000/api/e-commerce/',
            method: '',
            dataType: '',
            success: response => {
                let listProduct = response.data
                let htmlString = '';
                for(let Product of listProduct){
                    htmlString += `<div class="product px-4 py-4 mb-8">
            <div class="w-72 bg-white drop-shadow-md rounded-lg">
                <img class="foto object-cover rounded-tl-lg rounded-tr-lg h-[300px] w-full"
                    src="${Product.foto}" />
                <div class="px-5 py-3 space-y-2">
                    <h3 class="nama text-lg">${Product.nama}</h3>
                    <div class="space-x-2">
                        <span class="px-3 py-0.5 border border-blue-500 text-[11px] text-blue-500">Free Ship</span>
                        <span class="px-3 py-0.5 border border-blue-500 text-[11px] text-blue-500">7 Day Return</span>
                    </div>
                    <p class="space-x-2">
                        <span class="harga text-2xl font-semibold">${Product.harga}</span>
                        <span class="harga1 text-sm line-through text-gray-500">${Product.harga + Product.harga/10}</span>
                        <span class="diskon text-sm text-red-700">${Product.diskon}% off</span>
                    </p>
                    <div class="flex justify-between items-center pt-3 pb-2">
                        <a href="/e-commerce/show/${Product.id}"
                            class="link-product px-4 py-2 bg-green-600 hover:bg-green-400 text-center text-sm text-white rounded duration-300">
                            Lihat Detail</a>

                        <a href="#" title="Add to Favorites"
                            class="text-2xl text-gray-300 hover:text-red-500 duration-300">&hearts;</a>
                    </div>
                </div>
            </div>

            <div class="mt-4 flex justify-end gap-2">
                <a href="/e-commerce/edit/${Product.id}" class="link-edit py-[5px] px-[10px] rounded-lg bg-blue-400 text-white">Edit Product</a>
                <button onclick="deleteProduct(${Product.id})" class="link-delete py-[5px] px-[10px] rounded-lg bg-red-500 text-white">Hapus Product</button>
            </div>
        </div>   `
                }
                let html = $.parseHTML(htmlString)
                $('#Products').append(html)
            }
        });

        function deleteProduct(id){
            console.log(id);
            $.ajax({
                url: `http://127.0.0.1:8000/api/e-commerce/${id}`,
                method: "POST",
                success: _ => {
                    console.log('SUCCESS');
                    window.location.href = "";
                },
                error: err => {
                    console.log('ERROR');
                    console.log(err);
                }
            });
        };
        
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.parent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\New folder\Alkademi\Laravel\api-laravel\resources\views/E-commerce/index.blade.php ENDPATH**/ ?>