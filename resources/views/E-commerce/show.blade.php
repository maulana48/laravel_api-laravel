@extends('components.parent')
@section('content')
<div class="container mx-auto px-20 text-black">

<div class="border bg-amber-100 rounded-lg p-6 relative z-10" style="cursor: auto;">
                
  <div class="flex flex-wrap items-center">

                    
    <div class="flex w-full h-48 md:h-64 lg:h-72 relative">
                                                
      <div class="w-8/12 pr-4 relative">
                            
                            
        <img src="{{ asset($barang->foto) }}" class="w-full h-full object-cover object-top rounded-lg bg-white">
                        
      </div>
                        
      <div class="w-4/12 h-full">
                            
        <div class="flex flex-col w-full h-full">
                                
          <div class="flex-1 pb-2">
                                    
            <div class="w-full h-full relative">
                                        
              <img src="{{ asset($barang->foto) }}" class="absolute top-0 w-full h-full object-cover object-center rounded-lg bg-white">
                                    
            </div>
                                
          </div>
                                
          <div class="flex-1 pt-2">
                                    
            <div class="w-full h-full relative">
                                        
              <img src="{{ asset($barang->foto) }}" class="absolute top-0 w-full h-full object-cover object-bottom rounded-lg bg-white">
                                    
            </div>
                                
          </div>
                            
        </div>
                        
      </div>
                    
    </div>

                    
    <div class="w-full pt-8 flex flex-col justify-between">
                        
      <div>
                            
        <h2 class="font-bold text-xl">{{ $barang->nama }} <a href="#" title="Add to Favorites" class="text-4xl ml-4 border-black-500 text-gray-300 hover:text-red-500 duration-300">&hearts;</a> </h2>
                            
                
        <div class="flex flex-wrap text-center pt-4 mb-2">
                                                                    
          <div class="mr-2 mb-2 rounded-full px-3 py-1 text-xs bg-green-400 text-green-900">{{ $barang->harga }}</div>
                                                                    
          <div class="mr-2 mb-2 rounded-full px-3 py-1 text-xs bg-red-400 line-through text-green-900">{{ $barang->harga + $barang->harga/10 }}</div>
                                                                    
          <div class="mr-2 mb-2 rounded-full px-3 py-1 text-xs bg-blue-400 text-green-900">{{ $barang->diskon }}% off</div>
                                                            
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
                            
        <a href="{{ route('ec.index') }}" class="flex items-center justify-center text-center relative text-white font-bold text-sm bg-gray-200 text-gray-800 px-8 py-3 rounded-lg shadow-lg hover:shadow-none hover:opacity-75">Back to home</a>

                                                                                                                                        
        <button x-on:click="#" class="w-full block text-center relative text-white font-bold text-sm bg-teal-800 px-4 py-3 rounded-lg shadow-lg hover:shadow-none hover:opacity-75">Buy now</button>
                                                                                                                        
      </div>
                    
    </div>

                
  </div>
            
</div>
</div>

@endsection