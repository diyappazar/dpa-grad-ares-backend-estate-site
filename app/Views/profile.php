<!DOCTYPE html>
<html lang="en"> 
  <?=view('env/header.php'); ?>
  <meta content="ARES Profile Page" name="description" />
  <body class="dark:bg-slate-900">
    <!-- Start Navbar -->
    <nav id="topnav" class="pt-2 defaultscroll is-sticky" style="border-radius: 0rem 0rem 2rem 2rem;">
      <div class="container">
        <!-- Logo container-->
        <a class="logo mb-2  " href="index.html">
          <img src=" /public/images/areslogo.png" class="inline-block dark:hidden mt-2 mb-2 w-25 h-20" alt="">
          <img src=" /public/images/areslogo.png" class="dark:inline-block hidden mt-2 mb-2 w-25 h-20" alt="">
        </a>
        <!-- End Logo container-->
        <!-- Start Mobile Toggle -->
        <div class="menu-extras ml-4">
          <div class="menu-item">
            <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
              <div class="lines">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </a>
          </div>
        </div>
        <!-- End Mobile Toggle -->
        <!--Login button Start-->
        <ul class="buy-button list-none mb-0">
          <li class="inline mb-0">
            <a onclick="window.location.replace('home/profile');" class="btn btn-icon bg-blue-600 hover:bg-blue-700 border-blue-600 dark:border-blue-600 text-white rounded-full">
              <i data-feather="user" class="h-4 w-4 stroke-[3]"></i>
            </a>
          </li>
          <li class="sm:inline pl-1 mb-0 hidden">
            <a href="/app/Views/signup.php" class="btn bg-blue-600 hover:bg-blue-700 border-blue-600 dark:border-blue-600 text-white rounded-full">Signup</a>
          </li>
          <li class="inline mb-0">
            <a onclick="" class="btn btn-icon bg-blue-600 hover:bg-blue-700 border-blue-600 dark:border-blue-600 text-white rounded-full">
              <i data-feather="globe" class="h-4 w-4 stroke-[3]"></i>
            </a>
          </li>
          <li class="inline mb-0">
            <!-- Switcher -->
            <span class="relative inline-block top-1 ">
              <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
              <label class="label bg-blue-600 dark:bg-white shadow dark:shadow-gray-700 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
                <i class="uil uil-moon text-[20px] text-blue-500 mt-1"></i>
                <i class="uil uil-sun text-[20px] text-blue-500 mt-1"></i>
                <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
              </label>
            </span>
            <!-- Switcher -->
          </li>
        </ul>
        <!--Login button End-->
        <div id="navigation">
          <!-- Navigation Menu-->
          <ul class="navigation-menu">
            <li class="has-submenu parent-menu-item">
              <a href="javascript:void(0)">Home</a>
              <span class="menu-arrow"></span>
              <ul class="submenu">
                <li>
                  <a href="index.html" class="sub-menu-item">Hero One</a>
                </li>
                <li>
                  <a href="index-two.html" class="sub-menu-item">Hero Two</a>
                </li>
                <li>
                  <a href="index-three.html" class="sub-menu-item">Hero Three</a>
                </li>
                <li>
                  <a href="index-four.html" class="sub-menu-item">Hero Four <span class="bg-amber-500 text-white text-[12px] px-2.5 py-1 font-semibold rounded h-5 ml-1">New</span>
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="buy.html" class="sub-menu-item">Buy</a>
            </li>
            <li>
              <a href="sell.html" class="sub-menu-item">Sell</a>
            </li>
            <li class="has-submenu parent-parent-menu-item">
              <a href="javascript:void(0)">Listing</a>
              <span class="menu-arrow"></span>
              <ul class="submenu">
                <li class="has-submenu parent-menu-item">
                  <a href="javascript:void(0)"> Grid View </a>
                  <span class="submenu-arrow"></span>
                  <ul class="submenu">
                    <li>
                      <a href="grid.html" class="sub-menu-item">Grid Listing</a>
                    </li>
                    <li>
                      <a href="grid-map.html" class="sub-menu-item">Grid With Map</a>
                    </li>
                  </ul>
                </li>
                <li class="has-submenu parent-menu-item">
                  <a href="javascript:void(0)"> List View </a>
                  <span class="submenu-arrow"></span>
                  <ul class="submenu">
                    <li>
                      <a href="list.html" class="sub-menu-item">List Listing</a>
                    </li>
                    <li>
                      <a href="list-map.html" class="sub-menu-item">List With Map</a>
                    </li>
                  </ul>
                </li>
                <li class="has-submenu parent-menu-item">
                  <a href="javascript:void(0)"> Property Detail </a>
                  <span class="submenu-arrow"></span>
                  <ul class="submenu">
                    <li>
                      <a href="property-detail.html" class="sub-menu-item">Property Detail</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li class="has-submenu parent-parent-menu-item">
              <a href="javascript:void(0)">Pages</a>
              <span class="menu-arrow"></span>
              <ul class="submenu">
                <li>
                  <a href="aboutus.html" class="sub-menu-item">About Us</a>
                </li>
                <li>
                  <a href="features.html" class="sub-menu-item">Featues</a>
                </li>
                <li>
                  <a href="pricing.html" class="sub-menu-item">Pricing</a>
                </li>
                <li>
                  <a href="faqs.html" class="sub-menu-item">Faqs</a>
                </li>
                <li class="has-submenu parent-menu-item">
                  <a href="javascript:void(0)"> Auth Pages </a>
                  <span class="submenu-arrow"></span>
                  <ul class="submenu">
                    <li>
                      <a href="/app/Views/profilepage.php" class="sub-menu-item">Login</a>
                    </li>
                    <li>
                      <a href="/app/Views/signup.php" class="sub-menu-item">Signup</a>
                    </li>
                    <li>
                      <a href="auth-re-password.html" class="sub-menu-item">Reset Password</a>
                    </li>
                  </ul>
                </li>
                <li class="has-submenu parent-menu-item">
                  <a href="javascript:void(0)"> Utility </a>
                  <span class="submenu-arrow"></span>
                  <ul class="submenu">
                    <li>
                      <a href="terms.html" class="sub-menu-item">Terms of Services</a>
                    </li>
                    <li>
                      <a href="privacy.html" class="sub-menu-item">Privacy Policy</a>
                    </li>
                  </ul>
                </li>
                <li class="has-submenu parent-menu-item">
                  <a href="javascript:void(0)"> Special <span class="bg-amber-500 text-white text-[12px] px-2.5 py-1 font-semibold rounded h-5 ml-1">New</span>
                  </a>
                  <span class="submenu-arrow"></span>
                  <ul class="submenu">
                    <li>
                      <a href="comingsoon.html" class="sub-menu-item">Comingsoon</a>
                    </li>
                    <li>
                      <a href="maintenance.html" class="sub-menu-item">Maintenance</a>
                    </li>
                    <li>
                      <a href="404.html" class="sub-menu-item">404! Error</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>
            <li>
              <a href="contact.html" class="sub-menu-item">Contact</a>
            </li>
          </ul>
          <!--end navigation menu-->
        </div>
        <!--end navigation-->
      </div>
      <!--end container-->
    </nav>

    <!-- End Navbar -->
    <!-- Start profile label -->
    <section class="relative table w-full py-20 bg-[url('../../public/images/bg/01.jpg')] bg-no-repeat bg-center h-15">
      <div class="absolute inset-0 bg-black opacity-80"></div>
      <div class="container">
        <div class="grid grid-cols-1 text-center ">
          <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Welcome to your profile! #user </h3>
        </div>
        <!--end grid-->
      </div>
      <!--end container-->
    </section>
    <!--end section-->
    <!--Profile Starts-->
    <div class="container lg:mt-2 mt-2 mb-3.5 py-5 ">
        <div class="container mx-auto my-4 p-5 bgroup rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
          <div class="md:flex no-wrap md:-mx-2">
            <!-- Left Side -->
            <div class="w-full md:w-3/12 md:mx-2">
              <!-- Profile Card -->
              <div class="bg-white text-black dark:text-white dark:bg-slate-800 p-3 shadow-sm border-t-4 border-b-4 border-blue-400 rounded-xl h-256">
                <div class="image overflow-hidden">
                  <img class="h-64 w-68 mx-auto rounded-full" src="/public/images/profile.jpg" alt="">
                </div>
                
                <h1 class=" my-12"></h1>
                <h1 class="text-black dark:text-white font-bold text-xl leading-8 my-1">Jane Doe</h1>
                <h3 class="text-black dark:text-white font-lg text-semibold leading-6">Owner at Her Company Inc.</h3>
                <p class="text-sm text-gray-500 hover:text-gray-500 leading-6">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, eligendi dolorum sequi illum qui unde aspernatur non deserunt</p>
                
                
                
              </div>
              <div class="my-14"></div>
              <div class="bg-white text-black dark:text-white dark:bg-slate-800 p-3 shadow-sm border-t-4 border-b-4 border-blue-400 rounded-xl h-256">
                <span>Member since</span>
                  <span class="ml-auto">Nov 07, 2016</span>
              </div>                
              
              

              <!-- End of profile card -->
              <div class=""></div>

            </div>
            <!-- Right Side -->
            <div class="w-full md:w-9/12 mx-2 h-64">
              <!-- Profile tab -->
              <!-- About Section -->
              <div class="bg-white text-black dark:text-white dark:bg-slate-800 p-3 shadow-sm border-t-4 border-b-4 border-blue-400 rounded-xl">
                <div class="flex items-center space-x-2 font-semibold text-black dark:text-whiteleading-8">
                  <span clas="text-blue-500">
                    <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 21 21" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                    </svg>
                  </span>
                  <span class="tracking-wide text-black dark:text-white mt-2">About</span>
                </div>
                <div class="text-black dark:text-white">
                  <div class="grid md:grid-cols-2 text-sm">
                    <div class="grid grid-cols-2">
                      <div class="px-4 py-2 font-semibold text-blue-400">First Name</div>
                      <div class="px-4 py-2">Jane</div>
                    </div>
                    <div class="grid grid-cols-2">
                      <div class="px-4 py-2 font-semibold text-blue-400">Last Name</div>
                      <div class="px-4 py-2">Doe</div>
                    </div>
                    <div class="grid grid-cols-2">
                      <div class="px-4 py-2 font-semibold text-blue-400">Gender</div>
                      <div class="px-4 py-2">Female</div>
                    </div>
                    <div class="grid grid-cols-2">
                      <div class="px-4 py-2 font-semibold text-blue-400 ">Contact No.</div>
                      <div class="px-4 py-2">+11 998001001</div>
                    </div>
                    <div class="grid grid-cols-2">
                      <div class="px-4 py-2 font-semibold text-blue-400">Current Address</div>
                      <div class="px-4 py-2">Beech Creek, PA, Pennsylvania</div>
                    </div>
                    <div class="grid grid-cols-2">
                      <div class="px-4 py-2 font-semibold text-blue-400">Permanant Address</div>
                      <div class="px-4 py-2">Arlington Heights, IL, Illinois</div>
                    </div>
                    <div class="grid grid-cols-2">
                      <div class="px-4 py-2 font-semibold text-blue-400">Email.</div>
                      <div class="px-4 py-2">
                        <a class="text-blue-400" href="mailto:jane@example.com">jane@example.com</a>
                      </div>
                    </div>
                    <div class="grid grid-cols-2">
                      <div class="px-4 py-2 font-semibold text-blue-400">Birthday</div>
                      <div class="px-4 py-2">Feb 06, 1998</div>
                    </div>
                  </div>
                </div>
                <button class="block w-full text-white dark:text-blue-400 hover:text-blue-400 text-sm font-semibold rounded-xl bg-blue-500 hover:bg-blue-400 focus:outline-none focus:shadow-outline focus:bg-gray-100 hover:shadow-xs p-3 my-4">Edit Profile</button>
              </div>
              <!-- End of about section -->
              <div class="my-4"></div>
              <!-- Experience and education -->
              <div class="bg-white text-black dark:text-white dark:bg-slate-800 p-3 shadow-sm border-t-4 border-b-4 border-blue-400 rounded-xl">
                
                <div class="grid grid-cols-2">
                  <div>
                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8 mb-3">
                      <span clas="text-blue-500">
                      <i class=" text-black dark:text-white mdi mdi-heart"></i>
                        
                      </span>
                      <span class="text-black dark:text-white tracking-wide">Recent Viewings</span>
                    </div>
                    <ul class="list-inside space-y-2">
                      <li>
                        <div class="text-blue-500">House1</div>
                        
                      </li>
                      <li>
                        <div class="text-blue-500"> House2</div>
                        
                      </li>
                      <li>
                        <div class="text-blue-500">House3</div>
                        
                      </li>
                      <li>
                        <div class="text-blue-500">House4</div>
                        
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- End of Experience and education grid -->
              </div>
              <!-- End of profile tab -->
              <div class="my-4"></div>
              <div class="my-4"></div>
              <div class="my-4"></div>


            </div>
          </div>
        </div>
      </div>
      
    </div>
    <!--end grid-->
    </div>
    <!--en grid-->
    </div>
    <!--end grid-->
      </div>

      </section>
      <!--end section-->
      <!-- Back to top -->
      <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 right-5 h-9 w-9 text-center bg-blue-500 text-white justify-center items-center">
        <i class="uil uil-arrow-up"></i>
      </a>
      <!-- Back to top -->
      <!-- Start Footer -->
      <footer class="relative bg-slate-900 dark:bg-slate-800 mt-24">
        <div class="container">
          <div class="grid grid-cols-1">
            <div class="relative py-16">
              <!-- Subscribe -->
              <div class="relative w-full">
                <div class="relative -top-40 bg-white dark:bg-slate-900 lg:px-8 px-6 py-10 rounded-xl shadow-lg dark:shadow-gray-700 overflow-hidden">
                  <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
                    <div class="md:text-left text-center z-1">
                      <h3 class="md:text-3xl text-2xl md:leading-normal leading-normal font-medium text-black dark:text-white">Subscribe to Newsletter!</h3>
                      <p class="text-slate-400 max-w-xl mx-auto">Subscribe to get latest updates and information.</p>
                    </div>
                    <div class="subcribe-form z-1">
                      <form class="relative max-w-lg md:ml-auto">
                        <input type="email" id="subcribe" name="email" class="rounded-full bg-white dark:bg-slate-900 shadow dark:shadow-gray-700" placeholder="Enter your email :">
                        <button type="submit" class="btn bg-blue-500 hover:bg-blue-700 text-white rounded-full">Subscribe</button>
                      </form>
                      <!--end form-->
                    </div>
                  </div>
                  <div class="absolute -top-5 -left-5">
                    <div class="uil uil-envelope lg:text-[150px] text-7xl text-black/5 dark:text-white/5 -rotate-45"></div>
                  </div>
                  <div class="absolute -bottom-5 -right-5">
                    <div class="uil uil-pen lg:text-[150px] text-7xl text-black/5 dark:text-white/5"></div>
                  </div>
                </div>
                <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px] -mt-24">
                  <div class="lg:col-span-4 md:col-span-12">
                    <a href="#" class="text-[22px] focus:outline-none">
                      <img src="assets/images/logo-light.png" alt="">
                    </a>
                    <p class="mt-6 text-gray-300">A great plateform to buy, sell and rent your properties without any agent or commisions.</p>
                  </div>
                  <!--end col-->
                  <div class="lg:col-span-2 md:col-span-4">
                    <h5 class="tracking-[1px] text-gray-100 font-semibold">Company</h5>
                    <ul class="list-none footer-list mt-6">
                      <li>
                        <a href="aboutus.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out">
                          <i class="uil uil-angle-right-b me-1"></i> About us </a>
                      </li>
                      <li class="mt-[10px]">
                        <a href="features.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out">
                          <i class="uil uil-angle-right-b me-1"></i> Services </a>
                      </li>
                      <li class="mt-[10px]">
                        <a href="pricing.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out">
                          <i class="uil uil-angle-right-b me-1"></i> Pricing </a>
                      </li>
                      <li class="mt-[10px]">
                        <a href="blog.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out">
                          <i class="uil uil-angle-right-b me-1"></i> Blog </a>
                      </li>
                      <li class="mt-[10px]">
                        <a href="profilepage" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out">
                          <i class="uil uil-angle-right-b me-1"></i> Login </a>
                      </li>
                    </ul>
                  </div>
                  <!--end col-->
                  <div class="lg:col-span-3 md:col-span-4">
                    <h5 class="tracking-[1px] text-gray-100 font-semibold">Usefull Links</h5>
                    <ul class="list-none footer-list mt-6">
                      <li>
                        <a href="terms.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out">
                          <i class="uil uil-angle-right-b me-1"></i> Terms of Services </a>
                      </li>
                      <li class="mt-[10px]">
                        <a href="privacy.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out">
                          <i class="uil uil-angle-right-b me-1"></i> Privacy Policy </a>
                      </li>
                      <li class="mt-[10px]">
                        <a href="listing-one.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out">
                          <i class="uil uil-angle-right-b me-1"></i> Listing </a>
                      </li>
                      <li class="mt-[10px]">
                        <a href="contact.html" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out">
                          <i class="uil uil-angle-right-b me-1"></i> Contact </a>
                      </li>
                    </ul>
                  </div>
                  <!--end col-->
                  <div class="lg:col-span-3 md:col-span-4">
                    <h5 class="tracking-[1px] text-gray-100 font-semibold">Contact Details</h5>
                    <div class="flex mt-6">
                      <i data-feather="map-pin" class="w-5 h-5 text-blue-500 mr-3"></i>
                      <div class="">
                        <h6 class="text-gray-300 mb-2">C/54 Northwest Freeway, <br> Suite 558, <br> Houston, USA 485 </h6>
                        <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" data-type="iframe" class="text-blue-500 hover:text-blue-700 duration-500 ease-in-out lightbox">View on Google map</a>
                      </div>
                    </div>
                    <div class="flex mt-6">
                      <i data-feather="mail" class="w-5 h-5 text-blue-500 mr-3"></i>
                      <div class="">
                        <a href="mailto:contact@example.com" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out">contact@example.com</a>
                      </div>
                    </div>
                    <div class="flex mt-6">
                      <i data-feather="phone" class="w-5 h-5 text-blue-500 mr-3"></i>
                      <div class="">
                        <a href="tel:+152534-468-854" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out">+152 534-468-854</a>
                      </div>
                    </div>
                  </div>
                  <!--end col-->
                </div>
                <!--end grid-->
              </div>
              <!-- Subscribe -->
            </div>
          </div>
        </div>
        <!--end container-->
        <div class="py-[30px] px-0 border-t border-gray-800 dark:border-gray-700">
          <div class="container text-center">
            <div class="grid md:grid-cols-2 items-center gap-6">
              <div class="md:text-left text-center">
                <p class="mb-0 text-gray-300">© <script>
                    document.write(new Date().getFullYear())
                  </script> ARES. Design with <i class="mdi mdi-heart text-red-500"></i> by <a href="https://ares.emu.edu.tr/" target="_blank" class="text-reset">ares</a>. </p>
              </div>
              <ul class="list-none md:text-right text-center">
                <li class="inline">
                  <a href="" class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-blue-500 dark:hover:border-blue-500 hover:bg-blue-500 dark:hover:bg-blue-500">
                    <i data-feather="facebook" class="h-4 w-4"></i>
                  </a>
                </li>
                <li class="inline">
                  <a href="" class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-blue-500 dark:hover:border-blue-500 hover:bg-blue-500 dark:hover:bg-blue-500">
                    <i data-feather="instagram" class="h-4 w-4"></i>
                  </a>
                </li>
                <li class="inline">
                  <a href="" class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-blue-500 dark:hover:border-blue-500 hover:bg-blue-500 dark:hover:bg-blue-500">
                    <i data-feather="twitter" class="h-4 w-4"></i>
                  </a>
                </li>
                <li class="inline">
                  <a href="" class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-blue-500 dark:hover:border-blue-500 hover:bg-blue-500 dark:hover:bg-blue-500">
                    <i data-feather="linkedin" class="h-4 w-4"></i>
                  </a>
                </li>
              </ul>
              <!--end icon-->
            </div>
            <!--end grid-->
          </div>
          <!--end container-->
        </div>
      </footer>
      <!--end footer-->
      <!-- Back to top -->
      <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 right-5 h-9 w-9 text-center bg-blue-500 text-white justify-center items-center">
        <i class="uil uil-arrow-up"></i>
      </a>
      <!-- Back to top -->
 
  </body>
       <!-- JAVASCRIPTS --> <?php include ('/Applications/MAMP/htdocs/app/Views/env/mainscript.php'); ?>
      <!-- slider script -->
      <script>
        easy_background("#home", {
          slide: ["/public/images/bg/01.jpg", "/public/images/bg/02.jpg", "/public/images/bg/03.jpg"],
          delay: [4000, 4000, 4000]
        });
      </script>
      <!-- slider script -->
      <!-- JAVASCRIPTS -->
</html>