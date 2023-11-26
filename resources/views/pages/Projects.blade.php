@extends('Layouts.app')
@section('projects')
    <!-- ====== Portfolio Section Start -->
<section
x-data="
{
showCards: 'all',
activeClasses: 'bg-primary text-white',
inactiveClasses: 'text-body-color dark:text-dark-6 hover:bg-primary hover:text-white',
}
"
class="pt-20 pb-12 lg:pt-[120px] lg:pb-[90px] dark:bg-dark"
>
<div class="container mx-auto">
   <div class="-mx-4 flex flex-wrap">
      <div class="w-full px-4">
         <div class="mx-auto mb-[60px] max-w-[510px] text-center">
            <span class="text-primary mb-2 block text-lg font-semibold">
            My Portfolio
            </span>
            <h2
               class="text-dark mb-3 text-3xl leading-[1.208] font-bold sm:text-4xl md:text-[40px]"
               >
               My Recent Projects
            </h2>
            <p class="text-body-color text-base dark:text-dark-6">
               Successfully melded code and creativity in my recent web project, delivering an intuitive user interface powered by robust backend functionality.
            </p>
         </div>
      </div>
   </div>
   
   <div class="-mx-4 flex flex-wrap">
      <div
         :class="showCards == 'all' || showCards == 'branding' ? 'block' : 'hidden' "
         class="w-full px-4 md:w-1/2 xl:w-1/3"
         >
         <div class="relative mb-12">
            <div class="overflow-hidden rounded-[10px]">
               <img
                  src="https://cdn.tailgrids.com/2.0/image/marketing/images/portfolio/portfolio-01/image-01.jpg"
                  alt="portfolio"
                  class="w-full"
                  />
            </div>
            <div
               class="relative z-10 mx-7 -mt-20 rounded-lg bg-white dark:bg-dark-2 py-[34px] px-3 text-center shadow-portfolio dark:shadow-box-dark border"
               >
               <span class="text-primary mb-2 block text-sm font-medium">
               Branding
               </span>
               <h3 class="text-dark dark:text-black mb-5 text-xl font-bold">
                  Branding Design
               </h3>
               <a
                  href="javascript:void(0)"
                  class="text-body-color dark:text-dark-6 hover:border-primary hover:bg-zinc-600 inline-block rounded-md border border-stroke dark:border-dark-3 py-[10px] px-7 text-sm font-medium transition hover:text-white"
                  >
               View Details
               </a>
            </div>
         </div>
      </div>
      <div
         :class="showCards == 'all' || showCards == 'marketing' ? 'block' : 'hidden' "
         class="w-full px-4 md:w-1/2 xl:w-1/3"
         >
         <div class="relative mb-12">
            <div class="overflow-hidden rounded-[10px]">
               <img
                  src="https://cdn.tailgrids.com/2.0/image/marketing/images/portfolio/portfolio-01/image-02.jpg"
                  alt="portfolio"
                  class="w-full"
                  />
            </div>
            <div
               class="relative z-10 mx-7 -mt-20 rounded-lg bg-white dark:bg-dark-2 py-[34px] px-3 text-center shadow-portfolio dark:shadow-box-dark border"
               >
               <span class="text-primary mb-2 block text-sm font-medium">
               Marketing
               </span>
               <h3 class="text-dark dark:text-black mb-5 text-xl font-bold">
                  Best Marketing tips
               </h3>
               <a
                  href="javascript:void(0)"
                  class="text-body-color dark:text-dark-6 hover:border-primary hover:bg-zinc-600 inline-block rounded-md border border-stroke dark:border-dark-3 py-[10px] px-7 text-sm font-medium transition hover:text-white"
                  >
               View Details
               </a>
            </div>
         </div>
      </div>
      <div
         :class="showCards == 'all' || showCards == 'development' ? 'block' : 'hidden' "
         class="w-full pl-4 md:w-1/2 xl:w-1/3"
         >
         <div class="relative mb-12">
            <div class="overflow-hidden rounded-[10px]">
               <img
                  src="https://cdn.tailgrids.com/2.0/image/marketing/images/portfolio/portfolio-01/image-03.jpg"
                  alt="portfolio"
                  class="w-full"
                  />
            </div>
            <div
               class="relative z-10 mx-7 -mt-20 rounded-lg bg-white dark:bg-dark-2 py-[34px] px-3 text-center shadow-portfolio dark:shadow-box-dark border"
               >
               <span class="text-primary mb-2 block text-sm font-medium">
               Development
               </span>
               <h3 class="text-dark dark:text-black mb-5 text-xl font-bold">
                  Web Design Trend
               </h3>
               <a
                  href="javascript:void(0)"
                  class="text-body-color dark:text-dark-6 hover:border-primary hover:bg-zinc-600 inline-block rounded-md border border-stroke dark:border-dark-3 py-[10px] px-7 text-sm font-medium transition hover:text-white"
                  >
               View Details
               </a>
            </div>
         </div>
      </div>
      <div
         :class="showCards == 'all' || showCards == 'design' ? 'block' : 'hidden' "
         class="w-full px-4 md:w-1/2 xl:w-1/3"
         >
         <div class="relative mb-12">
            <div class="overflow-hidden rounded-[10px]">
               <img
                  src="https://cdn.tailgrids.com/2.0/image/marketing/images/portfolio/portfolio-01/image-04.jpg"
                  alt="portfolio"
                  class="w-full"
                  />
            </div>
            <div
               class="relative z-10 mx-7 -mt-20 rounded-lg bg-white dark:bg-dark-2 py-[34px] px-3 text-center shadow-portfolio dark:shadow-box-dark border"
               >
               <span class="text-primary mb-2 block text-sm font-medium">
               Design
               </span>
               <h3 class="text-dark dark:text-black mb-5 text-xl font-bold">
                  Business Card Design
               </h3>
               <a
                  href="javascript:void(0)"
                  class="text-body-color dark:text-dark-6 hover:border-primary hover:bg-zinc-600 inline-block rounded-md border border-stroke dark:border-dark-3 py-[10px] px-7 text-sm font-medium transition hover:text-white"
                  >
               View Details
               </a>
            </div>
         </div>
      </div>
      <div
         :class="showCards == 'all' || showCards == 'marketing' ? 'block' : 'hidden' "
         class="w-full px-4 md:w-1/2 xl:w-1/3"
         >
         <div class="relative mb-12">
            <div class="overflow-hidden rounded-[10px]">
               <img
                  src="https://cdn.tailgrids.com/2.0/image/marketing/images/portfolio/portfolio-01/image-05.jpg"
                  alt="portfolio"
                  class="w-full"
                  />
            </div>
            <div
               class="relative z-10 mx-7 -mt-20 rounded-lg bg-white dark:bg-dark-2 py-[34px] px-3 text-center shadow-portfolio dark:shadow-box-dark border"
               >
               <span class="text-primary mb-2 block text-sm font-medium">
               Marketing
               </span>
               <h3 class="text-dark dark:text-black mb-5 text-xl font-bold">
                  Digital marketing
               </h3>
               <a
                  href="javascript:void(0)"
                  class="text-body-color dark:text-dark-6 hover:border-primary hover:bg-zinc-600 inline-block rounded-md border border-stroke dark:border-dark-3 py-[10px] px-7 text-sm font-medium transition hover:text-white"
                  >
               View Details
               </a>
            </div>
         </div>
      </div>
      <div
         :class="showCards == 'all' || showCards == 'branding' ? 'block' : 'hidden' "
         class="w-full pl-4 md:w-1/2 xl:w-1/3"
         >
         <div class="relative mb-12">
            <div class="overflow-hidden rounded-[10px]">
               <img
                  src="https://cdn.tailgrids.com/2.0/image/marketing/images/portfolio/portfolio-01/image-06.jpg"
                  alt="portfolio"
                  class="w-full"
                  />
            </div>
            <div
               class="relative z-10 mx-7 -mt-20 rounded-lg bg-white dark:bg-dark-2 py-[34px] px-3 text-center shadow-portfolio dark:shadow-box-dark border"
               >
               <span class="text-primary mb-2 block text-sm font-medium">
               Branding
               </span>
               <h3 class="text-dark dark:text-black mb-5 text-xl font-bold">
                  Creative Agency
               </h3>
               <a
                  href="javascript:void(0)"
                  class="text-body-color dark:text-dark-6 hover:border-primary hover:bg-zinc-600 inline-block rounded-md border border-stroke dark:border-dark-3 py-[10px] px-7 text-sm font-medium transition hover:text-white"
                  >
               View Details
               </a>
            </div>
         </div>
      </div>
   </div>
</div>
</section>
@endsection