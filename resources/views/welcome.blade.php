<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
         <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:Figtree, sans-serif;font-feature-settings:normal}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-size:100%;font-weight:inherit;line-height:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}[type=button],[type=reset],[type=submit],button{-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]{display:none}*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::-webkit-backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: }.relative{position:relative}.mx-auto{margin-left:auto;margin-right:auto}.mx-6{margin-left:1.5rem;margin-right:1.5rem}.ml-4{margin-left:1rem}.mt-16{margin-top:4rem}.mt-6{margin-top:1.5rem}.mt-4{margin-top:1rem}.-mt-px{margin-top:-1px}.mr-1{margin-right:0.25rem}.flex{display:flex}.inline-flex{display:inline-flex}.grid{display:grid}.h-16{height:4rem}.h-7{height:1.75rem}.h-6{height:1.5rem}.h-5{height:1.25rem}.min-h-screen{min-height:100vh}.w-auto{width:auto}.w-16{width:4rem}.w-7{width:1.75rem}.w-6{width:1.5rem}.w-5{width:1.25rem}.max-w-7xl{max-width:80rem}.shrink-0{flex-shrink:0}.scale-100{--tw-scale-x:1;--tw-scale-y:1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.items-center{align-items:center}.justify-center{justify-content:center}.gap-6{gap:1.5rem}.gap-4{gap:1rem}.self-center{align-self:center}.rounded-lg{border-radius:0.5rem}.rounded-full{border-radius:9999px}.bg-gray-100{--tw-bg-opacity:1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.bg-white{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-red-50{--tw-bg-opacity:1;background-color:rgb(254 242 242 / var(--tw-bg-opacity))}.bg-dots-darker{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(0,0,0,0.07)'/%3E%3C/svg%3E")}.from-gray-700\/50{--tw-gradient-from:rgb(55 65 81 / 0.5);--tw-gradient-to:rgb(55 65 81 / 0);--tw-gradient-stops:var(--tw-gradient-from), var(--tw-gradient-to)}.via-transparent{--tw-gradient-to:rgb(0 0 0 / 0);--tw-gradient-stops:var(--tw-gradient-from), transparent, var(--tw-gradient-to)}.bg-center{background-position:center}.stroke-red-500{stroke:#ef4444}.stroke-gray-400{stroke:#9ca3af}.p-6{padding:1.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.text-center{text-align:center}.text-right{text-align:right}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-sm{font-size:0.875rem;line-height:1.25rem}.font-semibold{font-weight:600}.leading-relaxed{line-height:1.625}.text-gray-600{--tw-text-opacity:1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity:1;color:rgb(107 114 128 / var(--tw-text-opacity))}.underline{-webkit-text-decoration-line:underline;text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-2xl{--tw-shadow:0 25px 50px -12px rgb(0 0 0 / 0.25);--tw-shadow-colored:0 25px 50px -12px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-gray-500\/20{--tw-shadow-color:rgb(107 114 128 / 0.2);--tw-shadow:var(--tw-shadow-colored)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.selection\:bg-red-500 *::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white *::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.selection\:bg-red-500::selection{--tw-bg-opacity:1;background-color:rgb(239 68 68 / var(--tw-bg-opacity))}.selection\:text-white::selection{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.hover\:text-gray-900:hover{--tw-text-opacity:1;color:rgb(17 24 39 / var(--tw-text-opacity))}.hover\:text-gray-700:hover{--tw-text-opacity:1;color:rgb(55 65 81 / var(--tw-text-opacity))}.focus\:rounded-sm:focus{border-radius:0.125rem}.focus\:outline:focus{outline-style:solid}.focus\:outline-2:focus{outline-width:2px}.focus\:outline-red-500:focus{outline-color:#ef4444}.group:hover .group-hover\:stroke-gray-600{stroke:#4b5563}.z-10{z-index: 10}@media (prefers-reduced-motion: no-preference){.motion-safe\:hover\:scale-\[1\.01\]:hover{--tw-scale-x:1.01;--tw-scale-y:1.01;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}}@media (prefers-color-scheme: dark){.dark\:bg-gray-900{--tw-bg-opacity:1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:bg-gray-800\/50{background-color:rgb(31 41 55 / 0.5)}.dark\:bg-red-800\/20{background-color:rgb(153 27 27 / 0.2)}.dark\:bg-dots-lighter{background-image:url("data:image/svg+xml,%3Csvg width='30' height='30' viewBox='0 0 30 30' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M1.22676 0C1.91374 0 2.45351 0.539773 2.45351 1.22676C2.45351 1.91374 1.91374 2.45351 1.22676 2.45351C0.539773 2.45351 0 1.91374 0 1.22676C0 0.539773 0.539773 0 1.22676 0Z' fill='rgba(255,255,255,0.07)'/%3E%3C/svg%3E")}.dark\:bg-gradient-to-bl{background-image:linear-gradient(to bottom left, var(--tw-gradient-stops))}.dark\:stroke-gray-600{stroke:#4b5563}.dark\:text-gray-400{--tw-text-opacity:1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:shadow-none{--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.dark\:ring-1{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.dark\:ring-inset{--tw-ring-inset:inset}.dark\:ring-white\/5{--tw-ring-color:rgb(255 255 255 / 0.05)}.dark\:hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity))}.group:hover .dark\:group-hover\:stroke-gray-400{stroke:#9ca3af}}@media (min-width: 640px){.sm\:fixed{position:fixed}.sm\:top-0{top:0px}.sm\:right-0{right:0px}.sm\:ml-0{margin-left:0px}.sm\:flex{display:flex}.sm\:items-center{align-items:center}.sm\:justify-center{justify-content:center}.sm\:justify-between{justify-content:space-between}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width: 768px){.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}}@media (min-width: 1024px){.lg\:gap-8{gap:2rem}.lg\:p-8{padding:2rem}}
        </style>
    </head>
    <body class="antialiased">

        <x-header />



<section class="w-full bg-white dark:bg-wickeddark">
  <div class="relative items-center w-full px-5 py-12 mx-auto md:px-12 lg:px-16 max-w-7xl lg:py-24">
    <div class="flex w-full mx-auto text-left">
      <div class="relative inline-flex items-center mx-auto align-middle">
        <div class="pb-12 text-center">
          <h1 class="max-w-5xl text-2xl font-bold leading-none tracking-tighter text-neutral-600 md:text-5xl lg:text-6xl lg:max-w-7xl">
            The Marketplace <br class="hidden lg:block">
            Of Puerto Rico
          </h1>
          <form action="{{ route('search') }}" method="get" id="search-form" class="p-2 mt-8 transition duration-500 ease-in-out transform border-2 bg-gray-50 md:mx-auto rounded-xl sm:max-w-3xl lg:flex">
            @csrf
            <div class="divide-y lg:divide-x lg:divide-y-0 lg:flex space-y 4">
              <div class="flex-1 min-w-0 revue-form-group">
                <label for="name" class="sr-only">Product </label>
                <input id="name" name="query" type="text" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform bg-transparent border border-transparent rounded-md focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300" placeholder="Product or service ">
              </div>
              <div class="flex-1 min-w-0 revue-form-group">
                <label for="location" class="sr-only">Location</label>
                <select id="location" name="location" class="block w-full px-5 py-3 text-base text-neutral-600 placeholder-gray-300 transition duration-500 ease-in-out transform bg-transparent border border-transparent rounded-md focus:outline-none focus:border-transparent focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300">
                    <option value="location" disabled selected>Select a location</option>
                    <option value="Adjuntas">Adjuntas</option>
                    <option value="Aguada">Aguada</option>
                    <option value="Aguadilla">Aguadilla</option>
                    <option value="Aguas Buenas">Aguas Buenas</option>
                    <option value="Aibonito">Aibonito</option>
                    <option value="Añasco">Añasco</option>
                    <option value="Arecibo">Arecibo</option>
                    <option value="Arroyo">Arroyo</option>
                    <option value="Barceloneta">Barceloneta</option>
                    <option value="Barranquitas">Barranquitas</option>
                    <option value="Bayamón">Bayamón</option>
                    <option value="Cabo Rojo">Cabo Rojo</option>
                    <option value="Caguas">Caguas</option>
                    <option value="Camuy">Camuy</option>
                    <option value="Canóvanas">Canóvanas</option>
                    <option value="Carolina">Carolina</option>
                    <option value="Cataño">Cataño</option>
                    <option value="Cayey">Cayey</option>
                    <option value="Ceiba">Ceiba</option>
                    <option value="Ciales">Ciales</option>
                    <option value="Cidra">Cidra</option>
                    <option value="Coamo">Coamo</option>
                    <option value="Comerío">Comerío</option>
                    <option value="Corozal">Corozal</option>
                    <option value="Culebra">Culebra</option>
                    <option value="Dorado">Dorado</option>
                    <option value="Fajardo">Fajardo</option>
                    <option value="Florida">Florida</option>
                    <option value="Guánica">Guánica</option>
                    <option value="Guayama">Guayama</option>
                    <option value="Guayanilla">Guayanilla</option>
                    <option value="Guaynabo">Guaynabo</option>
                    <option value="Gurabo">Gurabo</option>
                    <option value="Hatillo">Hatillo</option>
                    <option value="Hormigueros">Hormigueros</option>
                    <option value="Humacao">Humacao</option>
                    <option value="Isabela">Isabela</option>
                    <option value="Jayuya">Jayuya</option>
                    <option value="Juana Díaz">Juana Díaz</option>
                    <option value="Juncos">Juncos</option>
                    <option value="Lajas">Lajas</option>
                    <option value="Lares">Lares</option>
                    <option value="Loíza">Loíza</option>
                    <option value="Luquillo">Luquillo</option>
                    <option value="Manatí">Manatí</option>
                    <option value="Las Marías">Las Marías</option>
                    <option value="Maricao">Maricao</option>
                    <option value="Maunabo">Maunabo</option>
                    <option value="Mayagüez">Mayagüez</option>
                    <option value="Moca">Moca</option>
                    <option value="Morovis">Morovis</option>
                    <option value="Naguabo">Naguabo</option>
                    <option value="Naranjito">Naranjito</option>
                    <option value="Orocovis">Orocovis</option>
                    <option value="Patillas">Patillas</option>
                    <option value="Peñuelas">Peñuelas</option>
                    <option value="Las Piedras">Las Piedras</option>
                    <option value="Ponce">Ponce</option>
                    <option value="Quebradillas">Quebradillas</option>
                    <option value="Rincón">Rincón</option>
                    <option value="Río Grande">Río Grande</option>
                    <option value="Sabana Grande">Sabana Grande</option>
                    <option value="Salinas">Salinas</option>
                    <option value="San Germán">San Germán</option>
                    <option value="San Juan">San Juan</option>
                    <option value="San Lorenzo">San Lorenzo</option>
                    <option value="San Sebastián">San Sebastián</option>
                    <option value="Santa Isabel">Santa Isabel</option>
                    <option value="Toa Alta">Toa Alta</option>
                    <option value="Toa Baja">Toa Baja</option>
                    <option value="Trujillo Alto">Trujillo Alto</option>
                    <option value="Utuado">Utuado</option>
                    <option value="Vega Alta">Vega Alta</option>
                    <option value="Vega Baja">Vega Baja</option>
                    <option value="Vieques">Vieques</option>
                    <option value="Villalba">Villalba</option>
                    <option value="Yabucoa">Yabucoa</option>
                    <option value="Yauco">Yauco</option>
                </select>
            </div>
            </div>
            <div class="mt-4 sm:mt-0 lg:ml-3 revue-form-actions">
              <button type="submit" value="Subscribe" name="member[subscribe]" id="member_submit" class="block w-full px-5 py-3 text-base font-medium text-white bg-amber-500 border border-transparent rounded-lg shadow hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-300 sm:px-10">Notify me</button>
            </div>
          </form>
         
        </div>
      </div>
    </div>
  </div>
</section>





<div class="grid grid-cols-2 md:grid-cols-4 gap-4">
    <div class="grid gap-4">
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-1.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-2.jpg" alt="">
        </div>
    </div>
    <div class="grid gap-4">
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-3.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-4.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-5.jpg" alt="">
        </div>
    </div>
    <div class="grid gap-4">
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-6.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-7.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-8.jpg" alt="">
        </div>
    </div>
    <div class="grid gap-4">
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-9.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-10.jpg" alt="">
        </div>
        <div>
            <img class="h-auto max-w-full rounded-lg" src="https://flowbite.s3.amazonaws.com/docs/gallery/masonry/image-11.jpg" alt="">
        </div>
    </div>
</div>







{{-- <section class="text-gray-600 body-font">
  <div class="container px-5 py-40 mx-auto">
    <div class="flex flex-wrap -m-4">
      @if ($firstMerchandiseProduct && $firstMerchandiseProduct->images && count($firstMerchandiseProduct->images) > 0)
        @php
          $imageUrl = asset("storage/" . $firstMerchandiseProduct->images[0]);
          $productUrl = route('show', ['id' => $firstMerchandiseProduct->id]);
        @endphp
        <div class="p-4 lg:w-1/3">
          <a href="{{ $productUrl }}">
            <div class="h-full bg-cover bg-center bg-no-repeat relative" style="background-image: url('{{ $imageUrl }}');">
              <div class="bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">MERCHANDISE</h2>
                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">{{ $firstMerchandiseProduct->title }}</h1>
                <p class="leading-relaxed mb-3">{{ $firstMerchandiseProduct->description }}</p>
                <a href="{{ $productUrl }}" class="text-indigo-500 inline-flex items-center">{{ $firstMerchandiseProduct->price }}
                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </a>
        </div>
      @endif

      @if ($services && $services->count() > 0 && $services[0]->images && count($services[0]->images) > 0)

        @php
          $imageUrl = asset("storage/" . $services->images[0]);
          $productUrl = route('show', ['id' => $services->id]);
        @endphp
        <div class="p-4 lg:w-1/3">
          <a href="{{ $productUrl }}">
            <div class="h-full bg-cover bg-center bg-no-repeat relative" style="background-image: url('{{ $imageUrl }}');">
              <div class="bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Services</h2>
                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">{{ $services[0]->title }}</h1>
                <p class="leading-relaxed mb-3">{{ $services[0]->description }}</p>
                <a href="{{ $productUrl }}" class="text-indigo-500 inline-flex items-center">{{ $services[0]->price }}
                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </a>
        </div>
      @endif

      @if ($firstMerchandiseProduct && $firstMerchandiseProduct->images && count($firstMerchandiseProduct->images) > 0)
        @php
          $imageUrl = asset("storage/" . $firstMerchandiseProduct->images[0]);
          $productUrl = route('show', ['id' => $firstMerchandiseProduct->id]);
        @endphp
        <div class="p-4 lg:w-1/3">
          <a href="{{ $productUrl }}">
            <div class="h-full bg-cover bg-center bg-no-repeat relative" style="background-image: url('{{ $imageUrl }}');">
              <div class="bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">MERCHANDISE</h2>
                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">{{ $firstMerchandiseProduct->title }}</h1>
                <p class="leading-relaxed mb-3">{{ $firstMerchandiseProduct->description }}</p>
                <a href="{{ $productUrl }}" class="text-indigo-500 inline-flex items-center">{{ $firstMerchandiseProduct->price }}
                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </a>
        </div>
      @endif

    </div>
  </div>
</section> --}}

{{-- 
<section class="text-gray-600 body-font">
  <div class="container px-5 py-2 mx-auto">
    <div class="flex flex-wrap -m-4">
      @if ($firstMerchandiseProduct && $firstMerchandiseProduct->images && count($firstMerchandiseProduct->images) > 0)
        @php
          $imageUrl = asset("storage/" . $firstMerchandiseProduct->images[0]);
          $productUrl = route('show', ['id' => $firstMerchandiseProduct->id]);
        @endphp
        <div class="p-4 lg:w-1/3">
          <a href="{{ $productUrl }}">
            <div class="h-full bg-cover bg-center bg-no-repeat relative" style="background-image: url('{{ $imageUrl }}');">
              <div class="bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">MERCHANDISE</h2>
                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">{{ $firstMerchandiseProduct->title }}</h1>
                <p class="leading-relaxed mb-3">{{ $firstMerchandiseProduct->description }}</p>
                <a href="{{ $productUrl }}" class="text-indigo-500 inline-flex items-center">{{ $firstMerchandiseProduct->price }}
                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </a>
        </div>
      @endif

     @if ($vehicles && $vehicles->count() > 0 && $vehicles[0]->images && count($vehicles[0]->images) > 0)
    @php
        $imageUrl = asset("storage/" . $vehicles[0]->images[0]);
        $productUrl = route('show', ['id' => $vehicles[0]->id]);
    @endphp
        <div class="p-4 lg:w-1/3">
            <a href="{{ $productUrl }}">
                <div class="h-full bg-cover bg-center bg-no-repeat relative" style="background-image: url('{{ $imageUrl }}');">
                    <div class="bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                        <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">Vehicles</h2>
                        <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">{{ $vehicles[0]->title }}</h1>
                        <p class="leading-relaxed mb-3">{{ $vehicles[0]->description }}</p>
                        <a href="{{ $productUrl }}" class="text-indigo-500 inline-flex items-center">{{ $vehicles[0]->price }}
                            <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="M12 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </a>
        </div>
    @endif

      @if ($firstMerchandiseProduct && $firstMerchandiseProduct->images && count($firstMerchandiseProduct->images) > 0)
        @php
          $imageUrl = asset("storage/" . $firstMerchandiseProduct->images[0]);
          $productUrl = route('show', ['id' => $firstMerchandiseProduct->id]);
        @endphp
        <div class="p-4 lg:w-1/3">
          <a href="{{ $productUrl }}">
            <div class="h-full bg-cover bg-center bg-no-repeat relative" style="background-image: url('{{ $imageUrl }}');">
              <div class="bg-gray-100 bg-opacity-75 px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">MERCHANDISE</h2>
                <h1 class="title-font sm:text-2xl text-xl font-medium text-gray-900 mb-3">{{ $firstMerchandiseProduct->title }}</h1>
                <p class="leading-relaxed mb-3">{{ $firstMerchandiseProduct->description }}</p>
                <a href="{{ $productUrl }}" class="text-indigo-500 inline-flex items-center">{{ $firstMerchandiseProduct->price }}
                  <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M5 12h14"></path>
                    <path d="M12 5l7 7-7 7"></path>
                  </svg>
                </a>
              </div>
            </div>
          </a>
        </div>
      @endif

    </div>
  </div>
</section> --}}




<section class="text-gray-600 body-font">


  
<div class="text-center mt-40 -mb-20 lg:ml-20">
 <h1 class="max-w-5xl text-2xl font-bold leading-none tracking-tighter text-neutral-600 md:text-5xl lg:text-6xl lg:max-w-7xl">
            Categories 
        
  </h1>
</div>




  <div class="container px-5 py-40 mx-auto">
    <div class="flex flex-wrap -m-4">

      <!-- Merchandise Card -->
      @if ($realEstate && $realEstate->count() > 0)
          <div class="p-4 lg:w-1/3 w-full">
              <div class="h-full relative" style="background-image: url('https://i.postimg.cc/cJGCssq3/cocina-2-transformed.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                  <div class="absolute inset-0 bg-gray-100 bg-opacity-70"></div>
                  <div class="px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                      {{-- <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">REAL ESTATE</h2> --}}
                      <h1 class="title-font sm:text-2xl text-xl font-bold text-amber-550 mb-3">REAL ESTATE</h1>
                      {{-- <p class="leading-relaxed mb-3">{{ $realEstate->description }}</p>
                      <a href="{{ route('show', ['id' => $realEstate->id]) }}" class="text-indigo-500 inline-flex items-center">{{ $realEstate->price }}
                          <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M5 12h14"></path>
                              <path d="M12 5l7 7-7 7"></path>
                          </svg>
                      </a> --}}
                  </div>
              </div>
          </div>
      @endif

      <!-- Services Card -->
      @if ($firstMerchandiseProduct && $firstMerchandiseProduct->count() > 0)
          <div class="p-4 lg:w-1/3 w-full">
              <div class="h-full relative" style="background-image: url('https://i.postimg.cc/6q9Ny9n1/HD-wallpaper-ripndip-apparel-cat-merchandise-store-streetwear.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                  <div class="absolute inset-0 bg-gray-100 bg-opacity-70"></div>
                  <div class="px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                      {{-- <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">MERCHANDISE</h2> --}}
                      <h1 class="title-font sm:text-2xl text-xl font-bold text-amber-550 mb-3">MERCHANDISE</h1>
                      {{-- <p class="leading-relaxed mb-3">{{ $firstMerchandiseProduct->description }}</p>
                      <a href="{{ route('show', ['id' => $firstMerchandiseProduct->id]) }}" class="text-indigo-500 inline-flex items-center">{{ $firstMerchandiseProduct->price }}
                          <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M5 12h14"></path>
                              <path d="M12 5l7 7-7 7"></path>
                          </svg>
                      </a> --}}
                  </div>
              </div>
          </div>
      @endif

      @if ($vehicles && $vehicles->count() > 0)
          <div class="p-4 lg:w-1/3 w-full">
              <div class="h-full relative" style="background-image: url('https://i.postimg.cc/J0fJ8d9x/photo-1517245386807-bb43f82c33c4.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                  <div class="absolute inset-0 bg-gray-100 bg-opacity-70"></div>
                  <div class="px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                      {{-- <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">SERVICES</h2> --}}
                      <h1 class="title-font sm:text-2xl text-xl font-bold text-amber-550 mb-3">SERVICES</h1>
                      {{-- <p class="leading-relaxed mb-3">{{ $vehicles->description }}</p>
                      <a href="{{ route('show', ['id' => $vehicles->id]) }}" class="text-indigo-500 inline-flex items-center">{{ $vehicles->price }}
                          <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M5 12h14"></path>
                              <path d="M12 5l7 7-7 7"></path>
                          </svg>
                      </a> --}}
                  </div>
              </div>
          </div>
      @endif



      @if ($jobs && $jobs->count() > 0)
          <div class="p-4 lg:w-1/3 w-full">
              <div class="h-full relative" style="background-image: url('https://i.postimg.cc/gcgZm49m/images.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                  <div class="absolute inset-0 bg-gray-100 bg-opacity-70"></div>
                  <div class="px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                      {{-- <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">VEHICLES</h2> --}}
                      <h1 class="title-font sm:text-2xl text-xl font-bold text-amber-550 mb-3">VEHICLES</h1>
                      {{-- <p class="leading-relaxed mb-3">{{ $jobs->description }}</p>
                      <a href="{{ route('show', ['id' => $jobs->id]) }}" class="text-indigo-500 inline-flex items-center">{{ $jobs->price }}
                          <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M5 12h14"></path>
                              <path d="M12 5l7 7-7 7"></path>
                          </svg> --}}
                      </a>
                  </div>
              </div>
          </div>
      @endif


      @if ($services && $services->count() > 0)
          <div class="p-4 lg:w-1/3 w-full">
              <div class="h-full relative" style="background-image: url('https://i.postimg.cc/J4yGmLc5/business-student-laptop-night-home-600nw-2274924263.webp'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                  <div class="absolute inset-0 bg-gray-100 bg-opacity-70"></div>
                  <div class="px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                      {{-- <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">JOBS</h2> --}}
                      <h1 class="title-font sm:text-2xl text-xl font-bold text-amber-550 mb-3">JOBS</h1>
                      {{-- <p class="leading-relaxed mb-3">{{ $services->description }}</p> --}}
                      {{-- <a href="" class="text-indigo-500 inline-flex items-center">{{ $services->price }} --}}
                          {{-- <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M5 12h14"></path>
                              <path d="M12 5l7 7-7 7"></path>
                          </svg> --}}
                      </a>
                  </div>
              </div>
          </div>
      @endif



          @if ($services && $services->count() > 0)
          <div class="p-4 lg:w-1/3 w-full">
              <div class="h-full relative" style="background-image: url('https://i.postimg.cc/cJGCssq3/cocina-2-transformed.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
                  <div class="absolute inset-0 bg-gray-100 bg-opacity-70"></div>
                  <div class="px-8 pt-16 pb-24 rounded-lg overflow-hidden text-center relative">
                      {{-- <h2 class="tracking-widest text-xs title-font font-medium text-gray-400 mb-1">REAL ESTATE</h2> --}}
                      <h1 class="title-font sm:text-2xl text-xl font-bold text-amber-550 mb-3">REAL ESTATE</h1>
                      {{-- <p class="leading-relaxed mb-3">{{ $services->description }}</p>
                      <a href="{{ route('show', ['id' => $services->id]) }}" class="text-indigo-500 inline-flex items-center">{{ $services->price }}
                          <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                              <path d="M5 12h14"></path>
                              <path d="M12 5l7 7-7 7"></path>
                          </svg>
                      </a> --}}
                  </div>
              </div>
          </div>
      @endif





      

      <!-- Resto del código para otros tipos de productos... -->

    </div>
  </div>
</section>



  <x-footer />







    </body>
</html>
