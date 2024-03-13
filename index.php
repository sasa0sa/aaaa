<!DOCTYPE html>
<html>
    <head>
        <title>Laragon</title>
        <link href="/public/assets/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">
        <link href="input.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body>
    <div> 
    <header class="absolute inset-x-0 top-0 z-50">
    <nav class="items-center justify-between p-6 lg:px-8 flex flex-row-2" aria-label="Global">
        <div class="flex lg:flex-1 items-center">
            <a href="#" class="-m-1.5 px-2 pt-2 pb-6">
                <span class="sr-only">Your Company</span>
                <img class="h-12 w-auto" src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/4a/Escut_del_Pinell_de_Brai.svg/1200px-Escut_del_Pinell_de_Brai.svg.png" alt="">
            </a>
        </div>
        <div class="hidden lg:flex lg:gap-x-16 flex flex-row items-center flex-grow">
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Informació</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Llocs d'interés</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Altra informació</a>
            <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Treballadors</a>
            <!-- component -->
            <div class="relative hover-trigger text-sm font-semibold leading-6 text-gray-900">
            <svg xmlns="http://www.w3.org/2000/svg" class="mt-0.5 animate-pulse" width="24" height="24"><path d="M12 17.414 3.293 8.707l1.414-1.414L12 14.586l7.293-7.293 1.414 1.414L12 17.414z"/></svg>
              <div class="absolute rounded-md -bottom-20 right-16 bg-white border border-grey-100 px-4 py-2 hover-target text-sm font-semibold leading-6 text-gray-900">
                <div class="hidden lg:flex lg:gap-x-24 flex flex-row items-center flex-grow">
                  <a href="#" class="text-sm font-semibold leading-6 text-gray-900 text-center">Informació</a>
                  <a href="#" class="text-sm font-semibold leading-6 text-gray-900 text-center">Llocs d'interés</a>
                  <a href="#" class="text-sm font-semibold leading-6 text-gray-900 text-center">Altra informació</a>
                  <a href="#" class="text-sm font-semibold leading-6 text-gray-900 text-center">Alcaldes</a>
                </div>  
              </div>
            </div>

            <style>
              .animate-pulse {
                animation: pulse 1.5s infinite;
              }

              .hover-trigger:hover .animate-pulse {
                animation: none;
              }
              .hover-trigger .hover-target {
                  opacity: 0;
                  visibility: hidden;
                  transition: visibility 0s linear 0.5s, opacity 0.5s linear; 
              }

              .hover-trigger:hover .hover-target {
                  opacity: 1;
                  visibility: visible;
                  transition-delay: 0s; 
              }
            </style>
        </div>
    </nav>
</header>
    <div class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8 mt-10">
    <div class="mx-auto max-w-2xl sm:text-center">
      <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl tracking-wide">AJUNTAMENT DEL PINELL DE BRAI</h2>
      <p class="mt-8 text-lg leading-8 text-gray-600">Som l'ajuntament del Pinell de brai. Un poble de la Terra Alta.</p>
    </div>
    <div class="mx-auto mt-16 max-w-2xl rounded-3xl ring-1 ring-gray-200 sm:mt-20 lg:mx-0 lg:flex lg:max-w-none">
      <div class="p-8 sm:p-10 lg:flex-auto">
        <h3 class="text-2xl font-bold tracking-tight text-gray-900">Lifetime membership</h3>
        <p class="mt-6 text-base leading-7 text-gray-600">Lorem ipsum dolor sit amet consect etur adipisicing elit. Itaque amet indis perferendis blanditiis repellendus etur quidem assumenda.</p>
        <div class="mt-10 flex items-center gap-x-4">
          <h4 class="flex-none text-sm font-semibold leading-6 text-indigo-600">What’s included</h4>
          <div class="h-px flex-auto bg-gray-100"></div>
        </div>
        <ul role="list" class="mt-8 grid grid-cols-1 gap-4 text-sm leading-6 text-gray-600 sm:grid-cols-2 sm:gap-6">
          <li class="flex gap-x-3">
            <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
            </svg>
            Private forum access
          </li>
          <li class="flex gap-x-3">
            <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
            </svg>
            Member resources
          </li>
          <li class="flex gap-x-3">
            <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
            </svg>
            Entry to annual conference
          </li>
          <li class="flex gap-x-3">
            <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z" clip-rule="evenodd" />
            </svg>
            Official member t-shirt
          </li>
        </ul>
      </div>
      <div class="-mt-2 p-2 lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0">
        <div class="rounded-2xl bg-gray-50 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16">
          <div class="mx-auto max-w-xs px-8">
            <p class="text-base font-semibold text-gray-600">Pay once, own it forever</p>
            <p class="mt-6 flex items-baseline justify-center gap-x-2">
              <span class="text-5xl font-bold tracking-tight text-gray-900">$349</span>
              <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">USD</span>
            </p>
            <a href="#" class="mt-10 block w-full rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get access</a>
            <p class="mt-6 text-xs leading-5 text-gray-600">Invoices and receipts available for easy company reimbursement</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div> 

</body>
</html>