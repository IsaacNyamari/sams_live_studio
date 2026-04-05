 <div class="max-w-full mx-auto text-center">
       <div class="bg-black/40 backdrop-blur rounded-2xl p-8 border border-white/20">
         <h2 class="text-2xl font-bold text-white mb-4">Current Campaign Goal</h2>
         <p class="text-gray-300 mb-6">Help us acquire professional cinema cameras to elevate our production
             quality</p>
         <div class="text-5xl font-bold text-[#FF8F20] mb-2">KES {{ number_format($inAccount) }}
             ({{ number_format($progress, 2) }}%)</div>
         <p class="text-gray-400 mb-4">raised of KES {{ number_format($goal) }} goal</p>
         <div class="bg-white/10 rounded-full h-4 mb-6">
             <div class="bg-[#FF8F20] rounded-full h-4" style="width: {{ $progress }}%"></div>
         </div>
         <a href="#donation-form"
             class="bg-[#FF8F20] hover:bg-[#FF8F20]/90 text-gray-900 font-semibold px-8 py-3 rounded-lg transition">Support
             This Campaign</a href="#donation-form">
     </div>
 </div>
