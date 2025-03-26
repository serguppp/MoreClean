<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package moreclean
 */

?>

<header id="masthead" class="fixed w-full left-0 top-0 z-1">
	<div id="hdr" class="bg-white shadow-2xs text-black roboto">
		<div id="hdr-content" class="max-w-screen-xl mx-auto ">
			<div class="grid grid-cols-2 md:grid-cols-5">
				<!-- Page logo  -->
				<div id="logo" class="flex items-center ">
					<button id="logo-btn" class="button">
						<img id="logo-img" class = "" src="wp-content\themes\moreclean\theme\img\logo2.jpg" alt="Logo">
					</button>
				</div>

				<div class="flex md:hidden justify-end">
					<button id="hamburger" data-collapse-toggle="navbar-default" type="button" class="text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
						<svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
							<path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
						</svg>
					</button>
				</div>

				<nav class="hidden col-span-2" id="navbar-default">
					<ul class="font-medium flex flex-col p-4  mt-4 border border-gray-100 rounded-lg bg-gray-50  dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
						<li>
							<a href="#" class="block py-2 px-3 text-white bg-blue-700 rounded-sm  dark:text-white" aria-current="page">Home</a>
						</li>
						<li>
							<a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 ">About</a>
						</li>
						<li>
							<a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100">Services</a>
						</li>
						<li>
							<a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 ">Pricing</a>
						</li>
						<li>
							<a href="#" class="block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 ">Contact</a>
						</li>
					</ul>
				</nav>

				<!-- Page logo -->
				<!-- Navbar sections-->
				<div class="hidden my:auto md:block md:w-auto md:col-span-3 w-full ">
					<!-- Top -->
					<div id="top-nav" class="items-center flex justify-between mx-5 ">
						<div>
							<div class="flex flex-wrap">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-6">
									<path strokeLinecap="round" strokeLinejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
									<path strokeLinecap="round" strokeLinejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
								</svg>
								<p class="font-bold text-l"> Adres </p>

							</div>
							<div>
								<p class="pl-6 text-sm">
									62-212 Mieleszyn
								</p>
								<p class="pl-6 text-sm">
									Przysieka 25
								</p>
							</div>
						</div>

						<div>
							<div class="flex">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6">
									<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
								</svg>
								<div class="font-bold text-l">
									<p>Telefon</p>
								</div>
							</div>
							<div class="pl-6 text-sm">
								<p>+48 782 164 336</p>
							</div>
						</div>

						<div>
							<div class="flex flex-nowrap">
								<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6">
									<path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
								</svg>
								<div class="font-bold text-l">
									<p>Godziny otwarcia</p>
								</div>
							</div>
							<div class="pl-6 text-sm">
								<p>poniedziałek - sobota</p>
							</div>
							<div class="pl-6 text-sm text-right">
								<p>10:00-18:00</p>
							</div>
						</div>

					</div>

					<!-- Top-->

					<!-- br -->
					<div id="nav-br" class="hidden md:block h-0.25 my-1 mx-auto bg-black ">
					<!-- br -->

					</div>
					<!-- Down -->
					<div id="bot-nav" class="flex justify-center items-center ">
						<nav class="space-x-6 inline-block">
							<a href="#" class="hover:text-gray-900 text-l">Strona główna</a>
							<a href="#" class=" hover:text-gray-900 text-l">O nas</a>
							<a href="#" class=" hover:text-gray-900 text-l">Oferta</a>
							<a href="#" class=" hover:text-gray-900 text-l">Realizacje</a>
							<a href="#" class=" hover:text-gray-900 text-l">Cennik</a>
							<a href="#" class=" hover:text-gray-900 text-l">Opinie</a>
							<a href="#" class=" hover:text-gray-900 text-l">Kontakt</a>
						</nav>
					</div>
					<!-- Down -->
				</div>
				
				<!-- Social media -->
				<div id="sm-nav" class="hidden md:flex md:items-center md:text-center md:justify-center">
					<div>
						<a href="#!" role="button">
							<!-- Facebook -->
							<span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]:fill-[#1877f2]">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
									<!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
									<path
										d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" />
								</svg>
							</span>
						</a>
					</div>

					<div class="ms-2">
						<a href="#!" role="button">
							<!-- Instagram -->
							<span class="[&>svg]:h-7 [&>svg]:w-7 [&>svg]:fill-[#c13584]">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
									<!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc. -->
									<path
										d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
								</svg>
							</span>
						</a>
					</div>
				</div>

				<!-- Social media -->


			</div>
		</div>
	</div>

</header><!-- #masthead -->