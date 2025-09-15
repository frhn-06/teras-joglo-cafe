<x-front.layout>
<x-slot:title_page>{{$title_head}}</x-slot>

  <section id="hero" class="flex justify-center items-center  block-abu">
    <div class="container">
      <div class="px-4 pt-36 py-6">
        <div class="carausel-container overflow-hidden flex items-center" style="white-space:nowrap;">
          <div class="carausel-content w-full">
            <div class="flex justify-center items-center">
              <h1 class="text-xl mb-4 text-white text-center lg:text-3xl" style="font-family: 'Bebas Neue', sans-serif;">
                RELAX, UNWIND, AND FEEL THE HARMONY AT JOGLO TERRACE ~ RELAX, UNWIND, AND FEEL THE HARMONY AT JOGLO TERRACE ~ RELAX, UNWIND, AND FEEL THE HARMONY AT JOGLO TERRACE
              </h1>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section id="content" class="flex justify-center items-center">
    <div class="container">
      <div class="px-8 lg:px-14 py-24">
        <div class="flex justify-center flex-col items-center">
          <div class="w-full sm:w-fit sm:h-64 md:h-72 rounded-xl overflow-hidden mb-8">
            <img src="/storage/{{$neew->img}}" alt="" class="w-full md:w-fit sm:h-full">
          </div>
          <h1 class="text-3xl lg:text-4xl font-bold mb-8">
            {{$neew->title}}
          </h1>
          <p class="text-sm lg:text-lg italic text-slate-700 mb-6">
            By {{$neew->author->name}} | {{$neew->created_at->lt(now()->subMonth()) ? $neew->created_at->isoFormat('D MMM') : $neew->created_at->diffForHumans()}}
          </p>
          <div class="font-semibold text-justify w-full lg:w-4/6 md:w-4/5">
            {!!$neew->body!!}
          </div>
        </div>
      </div>
    </div>
  </section>

</x-front.layout>

<script>
const carauselContainer = document.getElementsByClassName('carausel-container')[0];
const carauselContent = document.getElementsByClassName('carausel-content')[0];
let widthCarauselContainer = carauselContainer.offsetWidth;
let widthCarauselContent = carauselContent.offsetWidth;
function scrollPromotion() {
  const style = document.createElement('style');
  style.innerHTML = 
  `
  @keyframes jalan {
   0% {
    transform: translateX(${widthCarauselContainer}px);
   } 100% {
    transform: translateX(-${widthCarauselContent}px);
    }
  }

  .carausel-content {
  animation: jalan 35s linear infinite;
  }
  `;
  document.head.appendChild(style);
}

scrollPromotion();
</script>