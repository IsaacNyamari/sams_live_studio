 <div class="container mx-auto px-4 py-8">
     <h2 class="text-2xl font-bold mb-6 dark:text-white">Edit Package</h2>
     @if (session()->has('message'))
         <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
             {{ session('message') }}
         </div>
     @endif

     <form class='w-full max-w-lg mx-auto' method='POST' wire:submit.prevent="updatePackage" enctype="multipart/form-data">
         @csrf
         <div class='flex flex-wrap -mx-3 mb-6'>
             {{-- title --}}
             <div class='w-full px-3'>
                 <label class='block uppercase tracking-wide dark:text-white text-gray-700 text-xs font-bold mb-2'
                     for='title'>
                     Title
                 </label>
                 <input wire:model.live="title"
                     class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'
                     id='title' type='text'>

                 @error('title')
                     <p class='text-red-500 text-xs italic'>{{ $message }}</p>
                 @enderror
             </div>
         </div>
         <div class='flex flex-wrap -mx-3 mb-6'>
             {{-- description --}}
             <div class='w-full px-3'>
                 <label class='block uppercase tracking-wide dark:text-white text-gray-700 text-xs font-bold mb-2'
                     for='description'>
                     Description
                 </label>
                 <textarea wire:model.live="description"
                     class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'
                     id='description'></textarea>

                 @error('description')
                     <p class='text-red-500 text-xs italic'>{{ $message }}</p>
                 @enderror
             </div>
         </div>
         {{-- features --}}
         <div class='flex flex-wrap -mx-3 mb-6'>
             <div class='w-full px-3'>
                 <label class='block uppercase tracking-wide dark:text-white text-gray-700 text-xs font-bold mb-2'
                     for='features'>
                     Features
                 </label>
                 <div class="flex gap-2 mb-3">
                     <textarea
                         class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'
                         wire:model="features" id='features' type='text' placeholder="Add comma-separated features"></textarea>

                     </textarea>
                 </div>
                 @error('features')
                     <p class='text-red-500 text-xs italic'>{{ $message }}</p>
                 @enderror
             </div>
         </div>
         {{-- price --}}
         <div class='flex flex-wrap -mx-3 mb-6'>
             <div class='w-full px-3'>
                 <label class='block uppercase tracking-wide dark:text-white text-gray-700 text-xs font-bold mb-2'
                     for='price'>
                     Price
                 </label>
                 <input wire:model.live="price"
                     class='appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'
                     id='price' type='number' step="0.01">

                 @error('price')
                     <p class='text-red-500 text-xs italic'>{{ $message }}</p>
                 @enderror
             </div>
         </div>
         {{-- is featured --}}

         <div class='flex flex-wrap -mx-3 mb-6'>
             <div class='w-full px-3'>
                 <label class='block uppercase tracking-wide dark:text-white text-gray-700 text-xs font-bold mb-2'
                     for='is_featured'>
                     Is Featured
                 </label>
                 <input wire:model.live="featured"
                     class='appearance-none block w-fit bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500'
                     id='is_featured' type='checkbox'>
             </div>
         </div>
         <div class='flex flex-wrap -mx-3 mb-6'>
             <div class='w-full px-3'>
                 <button
                     class='bg-[#000080] text-white hover:bg-[#021F59] dark:bg-white/100 dark:text-[#000080] dark:hover:bg-gray-50 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline'
                     type='submit'>
                     Update
                 </button>
             </div>
         </div>
     </form>
 </div>
