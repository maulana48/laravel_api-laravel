
<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-20 text-black">

<div class="border bg-amber-100 rounded-lg p-6 relative z-10" style="cursor: auto;">
                
  <div class="flex flex-wrap items-center">

                    
    <div class="flex w-full h-48 md:h-64 lg:h-72 relative">
                                                
      <div class="w-8/12 pr-4 relative">
                            
                            
        <img src="" class="foto w-full h-full object-fill object-top rounded-lg bg-white">
                        
      </div>
                        
      <div class="w-4/12 h-full">
                            
        <div class="flex flex-col w-full h-full">
                                
          <div class="flex-1 pb-2">
                                    
            <div class="w-full h-full relative">
                                        
              <img src="" class="foto1 absolute top-0 w-full h-full object-fill object-center rounded-lg bg-white">
                                    
            </div>
                                
          </div>
                                
          <div class="flex-1 pt-2">
                                    
            <div class="w-full h-full relative">
                                        
              <img src="" class="foto2 absolute top-0 w-full h-full object-fill object-bottom rounded-lg bg-white">
                                    
            </div>
                                
          </div>
                            
        </div>
                        
      </div>
                    
    </div>

                    
    <div class="w-full pt-8 flex flex-col justify-between">
                        
      <div>
                            
        <h2 class="nama font-bold text-xl"><a href="#" title="Add to Favorites" class="text-4xl ml-4 border-black-500 text-gray-300 hover:text-red-500 duration-300">&hearts;</a> </h2>
                            
                
        <div class="flex flex-wrap text-center pt-4 mb-2">
                                                                    
          <div class="harga mr-2 mb-2 rounded-full px-3 py-1 text-xs bg-green-400 text-green-900">{ $barang->harga }</div>
                                                                    
          <div class="harga1 mr-2 mb-2 rounded-full px-3 py-1 text-xs bg-red-400 line-through text-green-900">{ $barang->harga + $barang->harga/10 }</div>
                                                                    
          <div class="diskon mr-2 mb-2 rounded-full px-3 py-1 text-xs bg-blue-400 text-green-900">{ $barang->diskon }</div>
                                                            
        </div>
                            
        <p class="text-xs leading-relaxed">This revolutionary email design kit is going to transform the way in which you send modern emails.</p>
                                                            
        <ul class="text-xs mt-4 list-disc list-inside leading-relaxed">
                                                                            
          <li>Responsive</li>
                                                                            
          <li> Mobile-friendly</li>
                                                                            
          <li> Media queries</li>
                                                                            
          <li> 20MB of JavaScript</li>
                                                                    
        </ul>
                                                    
      </div>
                        
      <div class="w-full sm:flex-1 grid gap-4 grid-cols-2 pt-6">
                            
        <a href="/e-commerce" class="flex items-center justify-center text-center relative text-white font-bold text-sm bg-gray-200 text-gray-800 px-8 py-3 rounded-lg shadow-lg hover:shadow-none hover:opacity-75">Back to home</a>

                                                                                                                                        
        <button x-on:click="#" class="w-full block text-center relative text-white font-bold text-sm bg-teal-800 px-4 py-3 rounded-lg shadow-lg hover:shadow-none hover:opacity-75">Buy now</button>
                                                                                                                        
      </div>
                    
    </div>

                
  </div>
            
</div>
</div>

<script>
        $.ajax({
            url: "http://127.0.0.1:8000/api/e-commerce/<?php echo e($id); ?>",
            method: '',
            dataType: '',
            success: response => {
                let dataProduct = response.data
                $('.nama').prepend(dataProduct.nama);
                $('.foto').attr({src: `${dataProduct.foto}`}); 
                $('.foto1').attr({src: `${dataProduct.foto}`}); 
                $('.foto2').attr({src: `${dataProduct.foto}`}); 
                $('.harga').text(dataProduct.harga);
                $('.harga1').text(dataProduct.harga + dataProduct.harga / 10);
                $('.diskon').text(dataProduct.diskon + "% off");
                $('#alamat').val(dataProduct.alamat);
                $('#gender').val(dataProduct.gender);
                $('#tanggal_lahir').val(dataProduct.tanggal_lahir);
                $('#role').val(dataProduct.role);
                $('#aktif').val(dataProduct.aktif);
                // return 0;
            }
        });

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('components.parent', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\New folder\Alkademi\Laravel\api-laravel\resources\views/E-commerce/show.blade.php ENDPATH**/ ?>