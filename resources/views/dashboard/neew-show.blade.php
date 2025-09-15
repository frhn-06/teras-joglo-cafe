<x-dashboard.layout>
<x-slot:title_page>{{$title_head}}</x-slot:title_page>


<main class="min-h-svh bg-[#eee]">
  <div class="px-2 py-4 md:px-4 md:py-6">
    <div class="w-full sm:max-w-xl lg:w-3xl mx-auto">
      <div class="w-full md:w-2/3 lg:w-1/2 mx-auto mb-6">
        <img src="/storage/{{$neew->img}}" alt="" class="w-full">
      </div>
      <h1 class="font-bold text-xl md:text-2xl">
        {{$neew->title}}
      </h1>
      <p class="text-slate-800 italic mb-6">
        By {{$neew->author->name}} | {{$neew->created_at->lt(now()->subMonth()) ? $neew->created_at->isoFormat('D MMM') : $neew->created_at->diffForHumans()}}
      </p>
      <div class="text-lg/5 text-justify">
        {!!$neew->body!!}
      </div>
    </div>
  </div>
</main>

</x-dashboard.layout>
