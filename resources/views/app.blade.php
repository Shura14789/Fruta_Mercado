<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  @vite('resources/css/app.css')
</head>
<body>


    <nav class="bg-white dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Super entregas</span>
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Crear venta</button>
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
              <span class="sr-only">Open main menu</span>
              <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
              </svg>
          </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
          <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
              <a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Inicio</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Stock</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Servicios</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contactos</a>
            </li>
          </ul>
        </div>
        </div>
      </nav>
      
<div class=" ">
	<div class="relative">
		<section class="w-full h-[40vh] lg:h-[55vh] bg-cover bg-center brightness-50" style="background: black">
		</section>
		<div class="absolute top-1/2 left-[5%] md:left-[10%] -translate-y-1/2 text-white">
            
			<h1 class="text-3xl md:text-5xl font-bold">Mercado Frutal</h1>
			<p class="text-sm md:text-lg">
				Los productos más frescos
			</p>
		</div>
	</div>

	<div class="w-full h-[1200px] md:h-[60vh] lg:h-[130vh] bg-blue-300 relative">
		<div
			class="absolute -top-[3%] md:-top-[10%] left-1/2 -translate-x-1/2 grid grid-cols-1 md:grid-cols-3 h-fit w-4/5 md:w-[90%] lg:w-4/5 rounded shadow overflow-hidden text-white">
			
			<div class="p-2 md:p-4 h-full bg-gray-800 col-span-2">
				<form>
					<div class="flex flex-col md:flex-row justify-around items-start md:items-center pt-8 p-4">
						<h2 class="text-2xl md:text-3xl font-semibold">Ingresar Stock</h2>

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24" color="#000000" fill="none" class="icon icon-tabler icon-tabler-mail-forward text-white">
                            <path d="M16.9767 19.5C19.4017 17.8876 21 15.1305 21 12C21 7.02944 16.9706 3 12 3C11.3126 3 10.6432 3.07706 10 3.22302M16.9767 19.5V16M16.9767 19.5H20.5M7 4.51555C4.58803 6.13007 3 8.87958 3 12C3 16.9706 7.02944 21 12 21C12.6874 21 13.3568 20.9229 14 20.777M7 4.51555V8M7 4.51555H3.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
					</div>

					<!-- {/* bottom form with input fields  */} -->
					<div class="grid grid-cols-1 md:grid-cols-2 gap-8 py-6 px-4 md:py-12 md:px-8 text-sm">
						<!-- {/* name input  */} -->
						<div class="flex flex-col gap-1">
							<label class="font-semibold">
                      Nombre del producto <span class="text-red-500">&#42;</span>
                    </label>
							<input
                      class="border-[1px] border-white bg-gray-800 p-2 rounded-md"
                      placeholder="Naranja, Platano, Manzana, Peras......"
                      required
                      name="name"
                      type="text"
                    />
                  </div>

							<!-- {/* email input  */} -->
							<div class="flex flex-col gap-1">
								<label class="font-semibold">
                      Proveedor <span class="text-red-500">&#42;</span>
                    </label>
								<input
                      class="border-[1px] border-white bg-gray-800 p-2 rounded-md"
                      placeholder="Harle, AGEM, Green garden........."
                      required
                      name="email"
                      type="email"
                    />
                  </div>

								<!-- {/* phone number input  */} -->
								<div class="flex flex-col gap-1">
									<label class="font-semibold">
                      Cantidad <span class="text-red-500">&#42;</span>
                    </label>
									<input
                      class="border-[1px] border-white bg-gray-800 p-2 rounded-md"
                      placeholder="Ingresar cantidad de fruta"
                      required
                      name="phone"
                      type="tel"
                    />
                  </div>

									<!-- {/* subject input  */} -->
									<div class="flex flex-col gap-1">
										<label class="font-semibold">
                      Fecha de entrega <span class="text-red-500">&#42;</span>
                    </label>
										<input
                      class="border-[1px] border-white bg-gray-800 p-2 rounded-md"
                      placeholder="06/08/2024"
                      required
                      name="subject"
                      type="text"
                    />
                  </div>

										<!-- {/* message input  */} -->
										<div class="flex flex-col gap-1 md:col-span-2">
											<label class="font-semibold">
                      Descripción <span class="text-red-500">&#42;</span>
                    </label>
											<input
                      class="border-[1px] border-white bg-gray-800 p-2 rounded-md"
                      placeholder="Describe el producto y su estado"
                      required
                      name="subject"
                      type="text"
                    />
                  </div>
										</div>
				</form>

				<!-- {/* submit button div  */} -->
				<div class="flex items-center justify-center md:justify-end py-4 px-8">
					<!-- {/* submit button  */} -->
					<button class="py-2 px-4 md:py-4 md:px-6 bg-gray-800 rounded-md border-2 border-white flex items-center gap-2 hover:scale-95 transition-all">
                  <span class="text-xl">Cargar</span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-brand-telegram"
                    width="30"
                    height="30"
                    viewBox="0 0 24 24"
                    stroke-width="1.5"
                    stroke="#fff"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  >
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M15 10l-4 4l6 6l4 -16l-18 7l4 2l2 6l3 -4" />
                  </svg>
                </button>
				</div>
			</div>

			<div class="py-6 px-4 h-[500px] md:h-full bg-blue-800 grid grid-cols-1 grid-rows-5">
				<h2 class="text-xl lg:text-2xl text-center md:text-start font-semibold">Contactar para soporte de esta plataforma</h2>

				<div class="row-span-4 flex flex-col items-center justify-center">
					<svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mail-share" width="35"
						height="35" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fff" fill="none"
						stroke-linecap="round" stroke-linejoin="round">
						<path stroke="none" d="M0 0h24v24H0z" fill="none" />
						<path d="M13 19h-8a2 2 0 0 1 -2 -2v-10a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v6" />
						<path d="M3 7l9 6l9 -6" />
						<path d="M16 22l5 -5" />
						<path d="M21 21.5v-4.5h-4.5" />
					</svg>
					<span>Elsanto@support.com</span>
				</div>

				<div class="flex justify-center md:justify-start items-center gap-4">
					<a title="youtube" href="#">
						<img class="h-8 w-8 invert" src="https://www.svgrepo.com/show/521936/youtube.svg" /></a>
						<a title="linkedin" href="#">
							<img class="h-12 w-12 invert" src="https://www.svgrepo.com/show/520815/linkedin.svg" /></a>
							<a title="instagram" href="#">
								<img class="h-8 w-8 invert" src="https://www.svgrepo.com/show/521711/instagram.svg" /></a>
								<a title="github" href="#">
									<img class="h-8 w-8 invert" src="https://www.svgrepo.com/show/512317/github-142.svg" /></a>
				</div>
               
			</div>
		</div>
        
	</div>
</div>
</body>
</html>