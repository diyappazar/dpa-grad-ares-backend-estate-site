<!DOCTYPE html>
<html lang="en"> <?= view("/env/header"); ?> <body class="dark:bg-slate-900">
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
    <!-- Show Start -->
    <section class="relative mt-28 h-full">
      <div class="container-fluid z-10 " style="border-radius: 0rem 0rem 2rem 2rem;" >
        <div class="relative pt-20 pb-32 table w-full shadow-md overflow-hidden z-4" style=" height: 1100px; border-radius: 0rem 0rem 3rem 3rem;" id="home">
          <div class="absolute inset-0 bg-black/60 blur-sm" id="elements"></div>
          <div class="container ">
            <div class="grid grid-cols-1">
              <div class="md:text-center text-center mb-30">
                <h1 class="font-bold text-white lg:leading-normal leading-normal text-6xl lg:text-6xl mb-10">ARES, best <span class="text-blue-400">real estates</span> of <br> all <span style="color: rgb(21 200 200);-webkit-text-stroke: 2px ;">North Cyprus</span> in one location<span style="-webkit-text-stroke: 2px;" class="text-blue-400">!</span> </h1>
                <p class="font-sm text-white mb-48">ARES, will help you find your best real estate, all over the island. You can invest, buy, rent, sell. </p> <br>
                 <p class="font-sm mt-32 text-2xl text-white">Let's Start!</p>
                <button  class="rounded-full animate-bounce h-16 w-16 text-center text-white justify-center items-center mt-14 bg-blue-400"><a onclick="document.getElementById('lets_start').scrollIntoView();" >
                <svg class="ml-3" xmlns="http://www.w3.org/2000/svg" style="vertical-align: -0.125em;" width="40" height="40" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="m12 19l-6-6l1.4-1.4l4.6 4.575l4.6-4.575L18 13Zm0-6L6 7l1.4-1.4l4.6 4.575L16.6 5.6L18 7Z"/></svg>             
            </div>
            <!--end grid-->
          </div>
          <div id="lets_start" class=" absolute pt-96 "></div>

          <!--end container-->
        </div>
      </div>
      <!--end Container-->
    </section>
    <!--end section-->
    <!-- Hero End -->
    <section >
      <div class="container"  >
        <div class="grid grid-cols-1 z-10 justify-center" >
          <div class="relative -mt-32" >
            <div class="grid grid-cols-1">
              <ul class="inline-block sm:w-fit w-full flex-wrap justify-center text-center p-4 bg-white dark:bg-slate-900 border-b dark:border-gray-800" style="border-radius: 2rem 2rem 0rem 0rem;" id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
                <li role="presentation" class="inline-block">
                  <button class="px-6 py-2 text-base font-medium w-full hover:text-blue-500 transition-all duration-500 ease-in-out hover:bg-blue-700" style="border-radius: 1rem 0.5rem 0.5rem 0.5rem;" id="buy-home-tab" data-tabs-target="#buy-home" type="button" role="tab" aria-controls="buy-home" aria-selected="true">Buy</button>
                </li>
                <li role="presentation" class="inline-block">
                  <button class="px-6 py-2 text-base font-medium  w-full transition-all duration-500 ease-in-out hover:bg-blue-700" style="border-radius: 0.5rem 0.5rem 0.5rem 0.5rem;" id="sell-home-tab" data-tabs-target="#sell-home" type="button" role="tab" aria-controls="sell-home" aria-selected="false">Rent</button>
                </li>
                <li role="presentation" class="inline-block">
                  <button class="px-6 py-2 text-base font-medium w-full transition-all duration-500 ease-in-out hover:bg-blue-700" style="border-radius: 0.5rem 1rem 0.5rem 0.5rem;" id="rent-home-tab" data-tabs-target="#rent-home" type="button" role="tab" aria-controls="rent-home" aria-selected="false">Daily Rent</button>
                </li>
              </ul>
              <div id="StarterContent" class="p-6 bg-white dark:bg-slate-900   shadow-md dark:shadow-gray-700" style="border-radius: 0rem 1rem 2rem 2rem;">
                <div class="" id="buy-home" role="tabpanel" aria-labelledby="buy-home-tab">
                  <form action="#">
                    <div class="registration-form text-dark text-start">
                      <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-10">
                        <div>
                          <label class="form-label font-medium">Search Estate : <span class="text-red-600">*</span>
                          </label>
                          <div class="relative filter-search-form elative filter-border mt-2 ml-2 mb-6 w-65 ">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                              <i class="absolute uil uil-search icons"></i>
                            </div>
                            <input type="text" id="job-keyword" class=" form-input h-15 filter-input-box block w-full pl-12 p-2.5 font-medium dark:placeholder-slate-400 dark:text-white bg-gray-50 dark:bg-slate-800 border-0 " placeholder="Search your dream estate">
                          </div>
                        </div>
                        <div>
                          <label for="buy-properties" class="form-label font-medium">Select Categories:</label>
                          <div class="filter-search-form relative filter-border mt-2">
                            <i class="uil uil-estate icons"></i>
                            <select class="form-select z-2" data-trigger name="choices-catagory" id="choices-catagory-buy" aria-label="Default select example">
                              <option>Houses</option>
                              <option>Apartment</option>
                              <option>Offices</option>
                              <option>Townhome</option>
                            </select>
                          </div>
                        </div>
                        <div>
                          <label for="buy-min-price" class="form-label font-medium">Min Price :</label>
                          <div class="filter-search-form relative filter-border mt-2">
                            <i class="uil uil-usd-circle icons"></i>
                            <select class="form-select" data-trigger name="choices-min-price" id="choices-min-price-buy" aria-label="Default select example">
                              <option>Min Price</option>
                              <option>500</option>
                              <option>1000</option>
                              <option>2000</option>
                              <option>3000</option>
                              <option>4000</option>
                              <option>5000</option>
                              <option>6000</option>
                            </select>
                          </div>
                        </div>
                        <div>
                          <label for="buy-max-price" class="form-label font-medium">Max Price :</label>
                          <div class="filter-search-form relative mt-2">
                            <i class="uil uil-usd-circle icons"></i>
                            <select class="form-select" data-trigger name="choices-max-price" id="choices-max-price-buy" aria-label="Default select example">
                              <option>Max Price</option>
                              <option>500</option>
                              <option>1000</option>
                              <option>2000</option>
                              <option>3000</option>
                              <option>4000</option>
                              <option>5000</option>
                              <option>6000</option>
                            </select>
                          </div>
                        </div>
                        <div class="lg:mt-6 drop-shadow-xl">
                          <input type="submit" id="search-buy" name="search" class="btn shadow-2xl hover:shadow-blue-500/50 hover:border-xl bg-blue-500 hover:bg-blue-700 hover:border-blue-700 text-white searchbtn submit-btn w-full !h-12" style="border-radius: 0.5rem 0.5rem 0.5rem 1rem;" value="Search">
                        </div>
                        <div class="relative inline-flex ml-2 mt-6 items-center justify-between">
                          <input type="submit" id="askares" class="btn shadow-2xl hover:shadow-blue-500/50 hover:border-xl text-white h-12 w-full" style="background-color: rgb(21 200 200); border-radius: 0.5rem 0.5rem 1rem 0.5rem;" value="Ask ARES">
                          <img src="/public/images/chatbot.png" class="absolute right-0 w-14 ml-64 bottom-4 animate-spin drop-shadow-xl" alt="">
                        </div>
                      </div>
                      <!--end grid-->
                    </div>
                    <!--end container-->
                  </form>
                </div>
                <!--seach bar 1-->
                <div class="hidden" id="sell-home" role="tabpanel" aria-labelledby="sell-home-tab">
                  <form action="#">
                    <div class="registration-form text-dark text-start">
                      <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6">
                        <div>
                          <label class="form-label font-medium">Search Rents : <span class="text-red-600">*</span>
                          </label>
                          <div class="filter-search-form relative filter-border mt-2">
                            <div class="relative filter-search-form elative filter-border mt-2 ml-2 mb-6 w-65 ">
                              <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <i class="absolute uil uil-search icons"></i>
                              </div>
                              <input type="text" id="job-keyword" class=" form-input h-15 filter-input-box block w-full pl-12 p-2.5 font-medium dark:placeholder-slate-400 dark:text-white bg-gray-50 dark:bg-slate-800 border-0 " placeholder="Search your dream estate">
                            </div>
                          </div>
                          <div></div>
                        </div>
                        <div>
                          <label for="buy-properties" class="form-label font-medium">Select Categories:</label>
                          <div class="filter-search-form relative filter-border mt-2">
                            <i class="uil uil-estate icons"></i>
                            <select class="form-select z-2" data-trigger name="choices-catagory" id="choices-catagory-sell" aria-label="Default select example">
                              <option>Houses</option>
                              <option>Apartment</option>
                              <option>Offices</option>
                              <option>Townhome</option>
                            </select>
                          </div>
                        </div>
                        <div>
                          <label for="buy-min-price" class="form-label font-medium">Min Price :</label>
                          <div class="filter-search-form relative filter-border mt-2">
                            <i class="uil uil-usd-circle icons"></i>
                            <select class="form-select" data-trigger name="choices-min-price" id="choices-min-price-sell" aria-label="Default select example">
                              <option>Min Price</option>
                              <option>500</option>
                              <option>1000</option>
                              <option>2000</option>
                              <option>3000</option>
                              <option>4000</option>
                              <option>5000</option>
                              <option>6000</option>
                            </select>
                          </div>
                        </div>
                        <div>
                          <label for="buy-max-price" class="form-label font-medium">Max Price :</label>
                          <div class="filter-search-form relative mt-2">
                            <i class="uil uil-usd-circle icons"></i>
                            <select class="form-select" data-trigger name="choices-max-price" id="choices-max-price-sell" aria-label="Default select example">
                              <option>Max Price</option>
                              <option>500</option>
                              <option>1000</option>
                              <option>2000</option>
                              <option>3000</option>
                              <option>4000</option>
                              <option>5000</option>
                              <option>6000</option>
                            </select>
                          </div>
                        </div>
                        <div class="lg:mt-6">
                          <input type="submit" id="search-sell" name="search" class="btn bg-blue-600 hover:bg-blue-700 border-blue-600 hover:border-blue-700 text-white searchbtn submit-btn w-full !h-12 rounded" value="Search">
                        </div>
                      </div>
                      <!--end grid-->
                    </div>
                    <!--end container-->
                  </form>
                </div>
                <!--seach bar 1-->
                <div class="hidden" id="rent-home" role="tabpanel" aria-labelledby="rent-home-tab">
                  <form action="#">
                    <div class="registration-form text-dark text-start">
                      <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 lg:gap-0 gap-6">
                        <div>
                          <label class="form-label font-medium">Search Daily Rent : <span class="text-red-600">*</span>
                          </label>
                          <div class="filter-search-form relative filter-border mt-2">
                            <div class="relative filter-search-form elative filter-border mt-2 ml-2 mb-6 w-65 ">
                              <div class="absolute inset-y-0 left-0 flex items-center pl-4 pointer-events-none">
                                <i class="absolute uil uil-search icons"></i>
                              </div>
                              <input type="text" id="job-keyword" class=" form-input h-15 filter-input-box block w-full pl-12 p-2.5 font-medium dark:placeholder-slate-400 dark:text-white bg-gray-50 dark:bg-slate-800 border-0 " placeholder="Search your dream estate">
                            </div>
                          </div>
                          <div></div>
                        </div>
                        <div>
                          <label for="buy-properties" class="form-label font-medium">Select Categories:</label>
                          <div class="filter-search-form relative filter-border mt-2">
                            <i class="uil uil-estate icons"></i>
                            <select class="form-select z-2" data-trigger name="choices-catagory" id="choices-catagory-rent" aria-label="Default select example">
                              <option>Houses</option>
                              <option>Apartment</option>
                              <option>Offices</option>
                              <option>Townhome</option>
                            </select>
                          </div>
                        </div>
                        <div>
                          <label for="buy-min-price" class="form-label font-medium">Min Price :</label>
                          <div class="filter-search-form relative filter-border mt-2">
                            <i class="uil uil-usd-circle icons"></i>
                            <select class="form-select" data-trigger name="choices-min-price" id="choices-min-price-rent" aria-label="Default select example">
                              <option>Min Price</option>
                              <option>500</option>
                              <option>1000</option>
                              <option>2000</option>
                              <option>3000</option>
                              <option>4000</option>
                              <option>5000</option>
                              <option>6000</option>
                            </select>
                          </div>
                        </div>
                        <div>
                          <label for="buy-max-price" class="form-label font-medium">Max Price :</label>
                          <div class="filter-search-form relative mt-2">
                            <i class="uil uil-usd-circle icons"></i>
                            <select class="form-select" data-trigger name="choices-max-price" id="choices-max-price-rent" aria-label="Default select example">
                              <option>Max Price</option>
                              <option>500</option>
                              <option>1000</option>
                              <option>2000</option>
                              <option>3000</option>
                              <option>4000</option>
                              <option>5000</option>
                              <option>6000</option>
                            </select>
                          </div>
                        </div>
                        <div class="lg:mt-6">
                          <input type="submit" id="search-rent" name="search" class="btn bg-blue-600 hover:bg-blue-700 border-blue-600 hover:border-blue-700 text-white searchbtn submit-btn w-full !h-12 rounded" value="Search">
                        </div>
                      </div>
                      <!--end grid-->
                    </div>
                    <!--end container-->
                  </form>
                </div>
              </div>
            </div>
            <!--end grid-->
          </div>
        </div>
        <!--end grid-->
      </div>
    </section>
    <!-- Start -->
  

    <section class="md:pb-24 pb-16" >

      <!--end container-->
      <!--popilar captions-->
      <h1 class="font-bold text-slate-800 text-center lg:leading-normal leading-normal text-2xl lg:text-3xl mb-6 mt-10"> Week's Most <span class="text-blue-500">Popular Listings</span>
      </h1>
      <div class="container bg-[#15C8C8] border-double  border-slate-400 dark:border-blue-300 text-center top-2 w-2/3 h-0.5 rounded-xl shadow-md dark:shadow-gray-700 "></div>
      <!-- vitrin slider script -->
      <section class="w-full md:grid-span-1">
        <div class="flex ml-5 justify-center relative mt-16 w-full md:w-8/12 mx-auto">
          <div id="tns1-ow" class="tns-outer">
            <div id="tns1-mw" class="tns-ovh">
              <div id="tns1-iw" class="tns-inner">
                <div class="tiny-home-slide-three tns-slider tns-carousel tns-subpixel tns-calc tns-horizontal" id="tns1" style="transform: translate3d(-66.6667%, 0px, 0px);">
                  <!-- item 1 -->
                  <!-- item 2 -->
                  <div class="tiny-slide tns-item" id="tns1-item1" aria-hidden="true" tabindex="-1">
                    <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                      <div class="relative">
                        <img src="/public/images/property/4.jpg" alt="">
                        <div class="absolute top-6 right-6">
                          <a href="" class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600">
                            <i class="mdi mdi-heart"></i>
                          </a>
                        </div>
                      </div>
                      <div class="p-6">
                        <div class="pb-6">
                          <a href="property-detail.html" class="text-lg hover:text-blue-600 font-medium ease-in-out duration-500">Lot 21 ROYAL OAK DR, Prairieville, LA 70769, USA</a>
                        </div>
                        <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                          <li class="flex items-center mr-4">
                            <i class="uil uil-compress-arrows text-2xl mr-2 text-blue-600"></i>
                            <span>8000sqf</span>
                          </li>
                          <li class="flex items-center mr-4">
                            <i class="uil uil-bed-double text-2xl mr-2 text-blue-600"></i>
                            <span>4 Beds</span>
                          </li>
                          <li class="flex items-center">
                            <i class="uil uil-bath text-2xl mr-2 text-blue-600"></i>
                            <span>4 Baths</span>
                          </li>
                        </ul>
                        <ul class="pt-6 flex justify-between items-center list-none">
                          <li>
                            <span class="text-slate-400">Price</span>
                            <p class="text-lg font-medium">$5000</p>
                          </li>
                          <li>
                            <span class="text-slate-400">Rating</span>
                            <ul class="text-lg font-medium text-amber-400 list-none">
                              <li class="inline">
                                <i class="mdi mdi-star"></i>
                              </li>
                              <li class="inline">
                                <i class="mdi mdi-star"></i>
                              </li>
                              <li class="inline">
                                <i class="mdi mdi-star"></i>
                              </li>
                              <li class="inline">
                                <i class="mdi mdi-star"></i>
                              </li>
                              <li class="inline">
                                <i class="mdi mdi-star"></i>
                              </li>
                              <li class="inline text-black dark:text-white">5.0(30)</li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- item 3 -->
                  <div class="tiny-slide tns-item" id="tns1-item2" aria-hidden="true" tabindex="-1">
                    <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                      <div class="relative">
                        <img src="/public/images/property/4.jpg" alt="">
                        <div class="absolute top-6 right-6">
                          <a href="" class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600">
                            <i class="mdi mdi-heart"></i>
                          </a>
                        </div>
                      </div>
                      <div class="p-6">
                        <div class="pb-6">
                          <a href="property-detail.html" class="text-lg hover:text-blue-600 font-medium ease-in-out duration-500">Lot 21 ROYAL OAK DR, Prairieville, LA 70769, USA</a>
                        </div>
                        <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                          <li class="flex items-center mr-4">
                            <i class="uil uil-compress-arrows text-2xl mr-2 text-blue-600"></i>
                            <span>8000sqf</span>
                          </li>
                          <li class="flex items-center mr-4">
                            <i class="uil uil-bed-double text-2xl mr-2 text-blue-600"></i>
                            <span>4 Beds</span>
                          </li>
                          <li class="flex items-center">
                            <i class="uil uil-bath text-2xl mr-2 text-blue-600"></i>
                            <span>4 Baths</span>
                          </li>
                        </ul>
                        <ul class="pt-6 flex justify-between items-center list-none">
                          <li>
                            <span class="text-slate-400">Price</span>
                            <p class="text-lg font-medium">$5000</p>
                          </li>
                          <li>
                            <span class="text-slate-400">Rating</span>
                            <ul class="text-lg font-medium text-amber-400 list-none">
                              <li class="inline">
                                <i class="mdi mdi-star"></i>
                              </li>
                              <li class="inline">
                                <i class="mdi mdi-star"></i>
                              </li>
                              <li class="inline">
                                <i class="mdi mdi-star"></i>
                              </li>
                              <li class="inline">
                                <i class="mdi mdi-star"></i>
                              </li>
                              <li class="inline">
                                <i class="mdi mdi-star"></i>
                              </li>
                              <li class="inline text-black dark:text-white">5.0(30)</li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- item 4 -->
                  <div class="tiny-slide tns-item" id="tns1-item3" aria-hidden="true" tabindex="-1">
                    <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                      <div class="relative">
                        <img src="/public/images/property/4.jpg" alt="">
                        <div class="absolute top-6 right-6">
                          <a href="" class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600">
                            <i class="mdi mdi-heart"></i>
                          </a>
                        </div>
                      </div>
                      <div class="p-6">
                        <div class="pb-6">
                          <a href="property-detail.html" class="text-lg hover:text-blue-600 font-medium ease-in-out duration-500">Lot 21 ROYAL OAK DR, Prairieville, LA 70769, USA</a>
                        </div>
                        <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                          <li class="flex items-center mr-4">
                            <i class="uil uil-compress-arrows text-2xl mr-2 text-blue-600"></i>
                            <span>8000sqf</span>
                          </li>
                          <li class="flex items-center mr-4">
                            <i class="uil uil-bed-double text-2xl mr-2 text-blue-600"></i>
                            <span>4 Beds</span>
                          </li>
                          <li class="flex items-center">
                            <i class="uil uil-bath text-2xl mr-2 text-blue-600"></i>
                            <span>4 Baths</span>
                          </li>
                        </ul>
                        <ul class="pt-6 flex justify-between items-center list-none">
                          <li>
                            <span class="text-slate-400">Price</span>
                            <p class="text-lg font-medium">$5000</p>
                          </li>
                          <li>
                            <span class="text-slate-400">Rating</span>
                            <ul class="text-lg font-medium text-amber-400 list-none">
                              <li class="inline">
                                <i class="mdi mdi-star"></i>
                              </li>
                              <li class="inline">
                                <i class="mdi mdi-star"></i>
                              </li>
                              <li class="inline">
                                <i class="mdi mdi-star"></i>
                              </li>
                              <li class="inline">
                                <i class="mdi mdi-star"></i>
                              </li>
                              <li class="inline">
                                <i class="mdi mdi-star"></i>
                              </li>
                              <li class="inline text-black dark:text-white">5.0(30)</li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- item 4 -->
                  <div class="tiny-slide tns-item tns-slide-active" id="tns1-item4">
                    <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                      <div class="relative">
                        <img src="/public/images/property/4.jpg" alt="">
                        <div class="absolute top-6 right-6">
                          <a href="" class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600">
                            <i class="mdi mdi-heart"></i>
                          </a>
                        </div>
                      </div>
                      <div class="p-6">
                        <div class="pb-6">
                          <a href="property-detail.html" class="text-lg hover:text-blue-600 font-medium ease-in-out duration-500">Lot 21 ROYAL OAK DR, Prairieville, LA 70769, USA</a>
                        </div>
                        <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                          <li class="flex items-center mr-4">
                            <i class="uil uil-compress-arrows text-2xl mr-2 text-blue-600"></i>
                            <span>8000sqf</span>
                          </li>
                          <li class="flex items-center mr-4">
                            <i class="uil uil-bed-double text-2xl mr-2 text-blue-600"></i>
                            <span>4 Beds</span>
                          </li>
                          <li class="flex items-center">
                            <i class="uil uil-bath text-2xl mr-2 text-blue-600"></i>
                            <span>4 Baths</span>
                          </li>
                        </ul>
                        <ul class="pt-6 flex justify-between items-center list-none">
                          <li>
                            <span class="text-slate-400">Price</span>
                            <p class="text-lg font-medium">$5000</p>
                          </li>
                          <li>
                            <span class="text-slate-400">Rating</span>
                            <ul class="text-lg font-medium text-amber-400 list-none">
                              <li class="inline">
                                <i class="mdi mdi-star"></i>
                              </li>
                              <li class="inline">
                                <i class="mdi mdi-star"></i>
                              </li>
                              <li class="inline">
                                <i class="mdi mdi-star"></i>
                              </li>
                              <li class="inline">
                                <i class="mdi mdi-star"></i>
                              </li>
                              <li class="inline">
                                <i class="mdi mdi-star"></i>
                              </li>
                              <li class="inline text-black dark:text-white">5.0(30)</li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- item 5 -->
                  <div class="tiny-slide tns-item" id="tns1-item5" aria-hidden="true" tabindex="-1">
                    <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                      <div class="relative">
                        <img src="/public/images/property/6.jpg" alt="">
                        <div class="absolute top-6 right-6">
                          <a href="" class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600">
                            <i class="mdi mdi-heart"></i>
                          </a>
                        </div>
                      </div>
                      <div class="p-6">
                        <div class="pb-6">
                          <a href="property-detail.html" class="text-lg hover:text-blue-600 font-medium ease-in-out duration-500">5133 MCLAIN WAY, Baton Rouge, LA 70809, USA</a>
                        </div>
                        <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                          <li class="flex items-center mr-4">
                            <i class="uil uil-compress-arrows text-2xl mr-2 text-blue-600"></i>
                            <span>8000sqf</span>
                          </li>
                          <li class="flex items-center mr-4">
                            <i class="uil uil-bed-double text-2xl mr-2 text-blue-600"></i>
                            <span>4 Beds</span>
                          </li>
                          <li class="flex items-center">
                            <i class="uil uil-bath text-2xl mr-2 text-blue-600"></i>
                            <span>4 Baths</span>
                          </li>
                        </ul>
                        <ul class="pt-6 flex justify-between items-center list-none">
                          <li>
                            <span class="text-slate-400">Price</span>
                            <p class="text-lg font-medium">$5000</p>
                          </li>
                          <li>
                            <span class="text-slate-400">Rating</span>
                            <ul class="text-lg font-medium text-amber-400 list-none">
                              <li class="inline">
                                <i class="mdi mdi-star"></i>
                              </li>
                              <li class="inline">
                                <i class="mdi mdi-star"></i>
                              </li>
                              <li class="inline">
                                <i class="mdi mdi-star"></i>
                              </li>
                              <li class="inline">
                                <i class="mdi mdi-star"></i>
                              </li>
                              <li class="inline">
                                <i class="mdi mdi-star"></i>
                              </li>
                              <li class="inline text-black dark:text-white">5.0(30)</li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <!-- item 6 end -->
                  </div>
                </div>
              </div>
              <!-- vitrin slider end -->
      </section>
      <!-- information section -->
      <!-- component -->
      <div class="container lg:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
          <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Do you feel lost? No problems. Here is how ARES works.</h3>
          <p class="text-slate-400 max-w-xl mx-auto">ARES is bringing new aspect to real estate.</p>
          <div class="container mt-6 bg-[#15C8C8] border-double  border-slate-400 dark:border-blue-300 text-center top-2 w-2/3 h-0.5 rounded-xl shadow-md dark:shadow-gray-700 "></div>
        </div>
      </div>
      <section class="mt-5">
        <div class="rounded-2xl bg-black text-white py-8">
          <div class="container mx-auto flex flex-col items-start md:flex-row my-12 md:my-24">
            <div class="flex flex-col w-full sticky md:top-36 lg:w-1/3 mt-2 md:mt-12 px-8">
              <p class=" text-blue-300 uppercase tracking-loose">Working Process</p>
              <p class="text-3xl md:text-4xl leading-normal md:leading-relaxed mb-2">Working Process of ARES</p>
              <p class="text-sm md:text-base text-gray-50 mb-4"> You can easily go through the process to utilize ARES with this time line </p>
            </div>
            <div class="ml-0 md:ml-72 lg:w-2/3 sticky">
              <div class="container mx-auto w-full h-full">
                <div class="relative wrap overflow-hidden p-10 h-full">
                  <div class="border-2-2 border-blue-500 absolute h-full border" style="right: 50%; border: 2px solid #15C8C8; border-radius: 1%;"></div>
                  <div class="border-2-2 border-blue-500 absolute h-full border" style="left: 50%; border: 2px solid #15C8C8; border-radius: 1%;"></div>
                  <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                    <div class="order-1 w-5/12"></div>
                    <div class="order-1 w-5/12 px-1 py-4 text-right">
                      <p class="mb-3 text-base text-blue-300">1-6 May, 2021</p>
                      <h4 class="mb-3 font-bold text-lg md:text-2xl">Registration</h4>
                      <p class="text-sm md:text-base leading-snug text-gray-50 text-opacity-100"> Pick your favourite event(s) and register in that event by filling the form corresponding to that event. Its that easy :) </p>
                    </div>
                  </div>
                  <div class="mb-8 flex justify-between items-center w-full right-timeline">
                    <div class="order-1 w-5/12"></div>
                    <div class="order-1  w-5/12 px-1 py-4 text-left">
                      <p class="mb-3 text-base text-blue-300">6-9 May, 2021</p>
                      <h4 class="mb-3 font-bold text-lg md:text-2xl">Participation</h4>
                      <p class="text-sm md:text-base leading-snug text-gray-50 text-opacity-100"> Participate online. The links for your registered events will be sent to you via email and whatsapp groups. Use those links and show your talent. </p>
                    </div>
                  </div>
                  <div class="mb-8 flex justify-between flex-row-reverse items-center w-full left-timeline">
                    <div class="order-1 w-5/12"></div>
                    <div class="order-1 w-5/12 px-1 py-4 text-right">
                      <p class="mb-3 text-base text-blue-300"> 10 May, 2021</p>
                      <h4 class="mb-3 font-bold text-lg md:text-2xl">Result Declaration</h4>
                      <p class="text-sm md:text-base leading-snug text-gray-50 text-opacity-100"> The ultimate genius will be revealed by our judging panel on 10th May, 2021 and the resukts will be announced on the whatsapp groups and will be mailed to you. </p>
                    </div>
                  </div>
                  <div class="mb-8 flex justify-between items-center w-full right-timeline">
                    <div class="order-1 w-5/12"></div>
                    <div class="order-1  w-5/12 px-1 py-4">
                      <p class="mb-3 text-base text-blue-300">12 May, 2021</p>
                      <h4 class="mb-3 font-bold  text-lg md:text-2xl text-left">Prize Distribution</h4>
                      <p class="text-sm md:text-base leading-snug text-gray-50 text-opacity-100"> The winners will be contacted by our team for their addresses and the winning goodies will be sent at their addresses. </p>
                    </div>
                  </div>
                </div>
                <img class="mx-auto -mt-36 md:-mt-36" src="https://user-images.githubusercontent.com/54521023/116968861-ef21a000-acd2-11eb-95ac-a34b5b490265.png" />
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- information section end -->
      <!--end container-->
      <!--end grid-->
      <!--end grid-->
      </div>
      <!--end container-->
      <div class="container lg:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
          <h1 class="font-bold text-slate-800 text-center lg:leading-normal leading-normal text-2xl lg:text-3xl  mt-10"> Recent <span class="text-blue-500">Estate Listings</span>
          </h1>
          <div class="container mt-6 bg-[#15C8C8] border-double  border-slate-400 dark:border-blue-300 text-center top-2 w-2/3 h-0.5 rounded-xl shadow-md dark:shadow-gray-700 "></div>
        </div>
        <!--end grid-->
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
          <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
            <div class="relative">
              <img src="/public/images/property/1.jpg" alt="">
              <div class="absolute top-6 right-6">
                <a href="" class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600">
                  <i class="mdi mdi-heart"></i>
                </a>
              </div>
            </div>
            <div class="p-6">
              <div class="pb-6">
                <a href="property-detail.html" class="text-lg hover:text-blue-600 font-medium ease-in-out duration-500">10765 Hillshire Ave, Baton Rouge, LA 70810, USA</a>
              </div>
              <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                <li class="flex items-center mr-4">
                  <i class="uil uil-compress-arrows text-2xl mr-2 text-blue-600"></i>
                  <span>8000sqf</span>
                </li>
                <li class="flex items-center mr-4">
                  <i class="uil uil-bed-double text-2xl mr-2 text-blue-600"></i>
                  <span>4 Beds</span>
                </li>
                <li class="flex items-center">
                  <i class="uil uil-bath text-2xl mr-2 text-blue-600"></i>
                  <span>4 Baths</span>
                </li>
              </ul>
              <ul class="pt-6 flex justify-between items-center list-none">
                <li>
                  <span class="text-slate-400">Price</span>
                  <p class="text-lg font-medium">$5000</p>
                </li>
                <li>
                  <span class="text-slate-400">Rating</span>
                  <ul class="text-lg font-medium text-amber-400 list-none">
                    <li class="inline">
                      <i class="mdi mdi-star"></i>
                    </li>
                    <li class="inline">
                      <i class="mdi mdi-star"></i>
                    </li>
                    <li class="inline">
                      <i class="mdi mdi-star"></i>
                    </li>
                    <li class="inline">
                      <i class="mdi mdi-star"></i>
                    </li>
                    <li class="inline">
                      <i class="mdi mdi-star"></i>
                    </li>
                    <li class="inline text-black dark:text-white">5.0(30)</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <!--end property content-->
          <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
            <div class="relative">
              <img src="/public/images/property/2.jpg" alt="">
              <div class="absolute top-6 right-6">
                <a href="" class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600">
                  <i class="mdi mdi-heart"></i>
                </a>
              </div>
            </div>
            <div class="p-6">
              <div class="pb-6">
                <a href="property-detail.html" class="text-lg hover:text-blue-600 font-medium ease-in-out duration-500">59345 STONEWALL DR, Plaquemine, LA 70764, USA</a>
              </div>
              <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                <li class="flex items-center mr-4">
                  <i class="uil uil-compress-arrows text-2xl mr-2 text-blue-600"></i>
                  <span>8000sqf</span>
                </li>
                <li class="flex items-center mr-4">
                  <i class="uil uil-bed-double text-2xl mr-2 text-blue-600"></i>
                  <span>4 Beds</span>
                </li>
                <li class="flex items-center">
                  <i class="uil uil-bath text-2xl mr-2 text-blue-600"></i>
                  <span>4 Baths</span>
                </li>
              </ul>
              <ul class="pt-6 flex justify-between items-center list-none">
                <li>
                  <span class="text-slate-400">Price</span>
                  <p class="text-lg font-medium">$5000</p>
                </li>
                <li>
                  <span class="text-slate-400">Rating</span>
                  <ul class="text-lg font-medium text-amber-400 list-none">
                    <li class="inline">
                      <i class="mdi mdi-star"></i>
                    </li>
                    <li class="inline">
                      <i class="mdi mdi-star"></i>
                    </li>
                    <li class="inline">
                      <i class="mdi mdi-star"></i>
                    </li>
                    <li class="inline">
                      <i class="mdi mdi-star"></i>
                    </li>
                    <li class="inline">
                      <i class="mdi mdi-star"></i>
                    </li>
                    <li class="inline text-black dark:text-white">5.0(30)</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <!--end property content-->
          <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
            <div class="relative">
              <img src="/public/images/property/3.jpg" alt="">
              <div class="absolute top-6 right-6">
                <a href="" class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600">
                  <i class="mdi mdi-heart"></i>
                </a>
              </div>
            </div>
            <div class="p-6">
              <div class="pb-6">
                <a href="property-detail.html" class="text-lg hover:text-blue-600 font-medium ease-in-out duration-500">3723 SANDBAR DR, Addis, LA 70710, USA</a>
              </div>
              <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                <li class="flex items-center mr-4">
                  <i class="uil uil-compress-arrows text-2xl mr-2 text-blue-600"></i>
                  <span>8000sqf</span>
                </li>
                <li class="flex items-center mr-4">
                  <i class="uil uil-bed-double text-2xl mr-2 text-blue-600"></i>
                  <span>4 Beds</span>
                </li>
                <li class="flex items-center">
                  <i class="uil uil-bath text-2xl mr-2 text-blue-600"></i>
                  <span>4 Baths</span>
                </li>
              </ul>
              <ul class="pt-6 flex justify-between items-center list-none">
                <li>
                  <span class="text-slate-400">Price</span>
                  <p class="text-lg font-medium">$5000</p>
                </li>
                <li>
                  <span class="text-slate-400">Rating</span>
                  <ul class="text-lg font-medium text-amber-400 list-none">
                    <li class="inline">
                      <i class="mdi mdi-star"></i>
                    </li>
                    <li class="inline">
                      <i class="mdi mdi-star"></i>
                    </li>
                    <li class="inline">
                      <i class="mdi mdi-star"></i>
                    </li>
                    <li class="inline">
                      <i class="mdi mdi-star"></i>
                    </li>
                    <li class="inline">
                      <i class="mdi mdi-star"></i>
                    </li>
                    <li class="inline text-black dark:text-white">5.0(30)</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <!--end property content-->
          <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
            <div class="relative">
              <img src="/public/images/property/4.jpg" alt="">
              <div class="absolute top-6 right-6">
                <a href="" class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600">
                  <i class="mdi mdi-heart"></i>
                </a>
              </div>
            </div>
            <div class="p-6">
              <div class="pb-6">
                <a href="property-detail.html" class="text-lg hover:text-blue-600 font-medium ease-in-out duration-500">Lot 21 ROYAL OAK DR, Prairieville, LA 70769, USA</a>
              </div>
              <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                <li class="flex items-center mr-4">
                  <i class="uil uil-compress-arrows text-2xl mr-2 text-blue-600"></i>
                  <span>8000sqf</span>
                </li>
                <li class="flex items-center mr-4">
                  <i class="uil uil-bed-double text-2xl mr-2 text-blue-600"></i>
                  <span>4 Beds</span>
                </li>
                <li class="flex items-center">
                  <i class="uil uil-bath text-2xl mr-2 text-blue-600"></i>
                  <span>4 Baths</span>
                </li>
              </ul>
              <ul class="pt-6 flex justify-between items-center list-none">
                <li>
                  <span class="text-slate-400">Price</span>
                  <p class="text-lg font-medium">$5000</p>
                </li>
                <li>
                  <span class="text-slate-400">Rating</span>
                  <ul class="text-lg font-medium text-amber-400 list-none">
                    <li class="inline">
                      <i class="mdi mdi-star"></i>
                    </li>
                    <li class="inline">
                      <i class="mdi mdi-star"></i>
                    </li>
                    <li class="inline">
                      <i class="mdi mdi-star"></i>
                    </li>
                    <li class="inline">
                      <i class="mdi mdi-star"></i>
                    </li>
                    <li class="inline">
                      <i class="mdi mdi-star"></i>
                    </li>
                    <li class="inline text-black dark:text-white">5.0(30)</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <!--end property content-->
          <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
            <div class="relative">
              <img src="/public/images/property/5.jpg" alt="">
              <div class="absolute top-6 right-6">
                <a href="" class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600">
                  <i class="mdi mdi-heart"></i>
                </a>
              </div>
            </div>
            <div class="p-6">
              <div class="pb-6">
                <a href="property-detail.html" class="text-lg hover:text-blue-600 font-medium ease-in-out duration-500">710 BOYD DR, Unit #1102, Baton Rouge, LA 70808, USA</a>
              </div>
              <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                <li class="flex items-center mr-4">
                  <i class="uil uil-compress-arrows text-2xl mr-2 text-blue-600"></i>
                  <span>8000sqf</span>
                </li>
                <li class="flex items-center mr-4">
                  <i class="uil uil-bed-double text-2xl mr-2 text-blue-600"></i>
                  <span>4 Beds</span>
                </li>
                <li class="flex items-center">
                  <i class="uil uil-bath text-2xl mr-2 text-blue-600"></i>
                  <span>4 Baths</span>
                </li>
              </ul>
              <ul class="pt-6 flex justify-between items-center list-none">
                <li>
                  <span class="text-slate-400">Price</span>
                  <p class="text-lg font-medium">$5000</p>
                </li>
                <li>
                  <span class="text-slate-400">Rating</span>
                  <ul class="text-lg font-medium text-amber-400 list-none">
                    <li class="inline">
                      <i class="mdi mdi-star"></i>
                    </li>
                    <li class="inline">
                      <i class="mdi mdi-star"></i>
                    </li>
                    <li class="inline">
                      <i class="mdi mdi-star"></i>
                    </li>
                    <li class="inline">
                      <i class="mdi mdi-star"></i>
                    </li>
                    <li class="inline">
                      <i class="mdi mdi-star"></i>
                    </li>
                    <li class="inline text-black dark:text-white">5.0(30)</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <!--end property content-->
          <div class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
            <div class="relative">
              <img src="/public/images/property/6.jpg" alt="">
              <div class="absolute top-6 right-6">
                <a href="" class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600">
                  <i class="mdi mdi-heart"></i>
                </a>
              </div>
            </div>
            <div class="p-6">
              <div class="pb-6">
                <a href="property-detail.html" class="text-lg hover:text-blue-600 font-medium ease-in-out duration-500">5133 MCLAIN WAY, Baton Rouge, LA 70809, USA</a>
              </div>
              <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                <li class="flex items-center mr-4">
                  <i class="uil uil-compress-arrows text-2xl mr-2 text-blue-600"></i>
                  <span>8000sqf</span>
                </li>
                <li class="flex items-center mr-4">
                  <i class="uil uil-bed-double text-2xl mr-2 text-blue-600"></i>
                  <span>4 Beds</span>
                </li>
                <li class="flex items-center">
                  <i class="uil uil-bath text-2xl mr-2 text-blue-600"></i>
                  <span>4 Baths</span>
                </li>
              </ul>
              <ul class="pt-6 flex justify-between items-center list-none">
                <li>
                  <span class="text-slate-400">Price</span>
                  <p class="text-lg font-medium">$5000</p>
                </li>
                <li>
                  <span class="text-slate-400">Rating</span>
                  <ul class="text-lg font-medium text-amber-400 list-none">
                    <li class="inline">
                      <i class="mdi mdi-star"></i>
                    </li>
                    <li class="inline">
                      <i class="mdi mdi-star"></i>
                    </li>
                    <li class="inline">
                      <i class="mdi mdi-star"></i>
                    </li>
                    <li class="inline">
                      <i class="mdi mdi-star"></i>
                    </li>
                    <li class="inline">
                      <i class="mdi mdi-star"></i>
                    </li>
                    <li class="inline text-black dark:text-white">5.0(30)</li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
          <!--end property content-->
        </div>
        <!--en grid-->
      </div>
      <!--end container-->
      <div class="rounded-2xl bg-black text-white">
        <div class="container lg:mt-24 mt-16">
          <div class="grid grid-cols-1 pb-8 text-center">
            <h1 class="font-bold text-slate-800 text-center text-white lg:leading-normal leading-normal text-2xl lg:text-3xl mb-6 mt-10">
              <span class="text-blue-500">Best Estate Agents</span> Of the Month
            </h1>
            <p class="text-slate-400 max-w-xl mx-auto">List of the best estate agents of the month chosen according to sells.</p>
            <div class="container bg-[#15C8C8] border-double  border-slate-400 dark:border-blue-300 text-center top-2 w-2/3 h-0.5 rounded-xl shadow-md dark:shadow-gray-700 "></div>
          </div>
          <!--end grid-->
          <div class="flex justify-center relative mt-16">
             <div class="lg:w-full md:w-full w-full">
              <div class="tiny-single-item">
                <div class="tiny-slide">
                  <div class="text-center">
                    <p class="text-xl text-slate-400 italic"> " ARES made the processes so easy. ARES instantly increased the amount of interest and ultimately saved us over $10,000. " </p>
                    <div class="text-center mt-5">
                      <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                        <li class="inline">
                          <i class="mdi mdi-star"></i>
                        </li>
                        <li class="inline">
                          <i class="mdi mdi-star"></i>
                        </li>
                        <li class="inline">
                          <i class="mdi mdi-star"></i>
                        </li>
                        <li class="inline">
                          <i class="mdi mdi-star"></i>
                        </li>
                        <li class="inline">
                          <i class="mdi mdi-star"></i>
                        </li>
                      </ul>
                      <img src="/public/images/client/01.jpg" class="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                      <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                      <span class="text-slate-400 text-sm">Manager</span>
                    </div>
                  </div>
                </div>
                <div class="tiny-slide">
                  <div class="text-center">
                    <p class="text-xl text-slate-400 italic"> " I highly recommend ARES as the new way to sell your home "by owner". My home sold in 24 hours for the asking price. Best $400 you could spend to sell your home. " </p>
                    <div class="text-center mt-5">
                      <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                        <li class="inline">
                          <i class="mdi mdi-star"></i>
                        </li>
                        <li class="inline">
                          <i class="mdi mdi-star"></i>
                        </li>
                        <li class="inline">
                          <i class="mdi mdi-star"></i>
                        </li>
                        <li class="inline">
                          <i class="mdi mdi-star"></i>
                        </li>
                        <li class="inline">
                          <i class="mdi mdi-star"></i>
                        </li>
                      </ul>
                      <img src="/public/images/client/02.jpg" class="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                      <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                      <span class="text-slate-400 text-sm">Manager</span>
                    </div>
                  </div>
                </div>
                <div class="tiny-slide">
                  <div class="text-center">
                    <p class="text-xl text-slate-400 italic"> " My favorite part about selling my home myself was that we got to meet and get to know the people personally. This made it so much more enjoyable! " </p>
                    <div class="text-center mt-5">
                      <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                        <li class="inline">
                          <i class="mdi mdi-star"></i>
                        </li>
                        <li class="inline">
                          <i class="mdi mdi-star"></i>
                        </li>
                        <li class="inline">
                          <i class="mdi mdi-star"></i>
                        </li>
                        <li class="inline">
                          <i class="mdi mdi-star"></i>
                        </li>
                        <li class="inline">
                          <i class="mdi mdi-star"></i>
                        </li>
                      </ul>
                      <img src="/public/images/client/03.jpg" class="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                      <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                      <span class="text-slate-400 text-sm">Manager</span>
                    </div>
                  </div>
                </div>
                <div class="tiny-slide">
                  <div class="text-center">
                    <p class="text-xl text-slate-400 italic"> " Great experience all around! Easy to use and efficient. " </p>
                    <div class="text-center mt-5">
                      <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                        <li class="inline">
                          <i class="mdi mdi-star"></i>
                        </li>
                        <li class="inline">
                          <i class="mdi mdi-star"></i>
                        </li>
                        <li class="inline">
                          <i class="mdi mdi-star"></i>
                        </li>
                        <li class="inline">
                          <i class="mdi mdi-star"></i>
                        </li>
                        <li class="inline">
                          <i class="mdi mdi-star"></i>
                        </li>
                      </ul>
                      <img src="/public/images/client/04.jpg" class="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                      <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                      <span class="text-slate-400 text-sm">Manager</span>
                    </div>
                  </div>
                </div>
                <div class="tiny-slide">
                  <div class="text-center">
                    <p class="text-xl text-slate-400 italic"> " ARES made selling my home easy and stress free. They went above and beyond what is expected. " </p>
                    <div class="text-center mt-5">
                      <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                        <li class="inline">
                          <i class="mdi mdi-star"></i>
                        </li>
                        <li class="inline">
                          <i class="mdi mdi-star"></i>
                        </li>
                        <li class="inline">
                          <i class="mdi mdi-star"></i>
                        </li>
                        <li class="inline">
                          <i class="mdi mdi-star"></i>
                        </li>
                        <li class="inline">
                          <i class="mdi mdi-star"></i>
                        </li>
                      </ul>
                      <img src="/public/images/client/05.jpg" class="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                      <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                      <span class="text-slate-400 text-sm">Manager</span>
                    </div>
                  </div>
                </div>
                <div class="tiny-slide">
                  <div class="text-center">
                    <p class="text-xl text-slate-400 italic"> " ARES is fair priced, quick to respond, and easy to use. I highly recommend their services! " </p>
                    <div class="text-center mt-5">
                      <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                        <li class="inline">
                          <i class="mdi mdi-star"></i>
                        </li>
                        <li class="inline">
                          <i class="mdi mdi-star"></i>
                        </li>
                        <li class="inline">
                          <i class="mdi mdi-star"></i>
                        </li>
                        <li class="inline">
                          <i class="mdi mdi-star"></i>
                        </li>
                        <li class="inline">
                          <i class="mdi mdi-star"></i>
                        </li>
                      </ul>
                      <img src="/public/images/client/06.jpg" class="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                      <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                      <span class="text-slate-400 text-sm">Manager</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--end grid-->
        </div>
        <!--end container-->
    </section>
    <!--end section-->
    <!-- Back to top -->
    <a href="#" onclick="topFunction()" id="back-to-top" class="back-to-top fixed hidden text-lg rounded-full z-10 bottom-5 right-5 h-9 w-9 text-center bg-blue-600 text-white justify-center items-center">
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
                      <button type="submit" class="btn bg-blue-600 hover:bg-blue-700 text-white rounded-full">Subscribe</button>
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
                    <img src="assets/images/areslogo.png" alt="">
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
                    <i data-feather="map-pin" class="w-5 h-5 text-blue-600 mr-3"></i>
                    <div class="">
                      <h6 class="text-gray-300 mb-2">C/54 Northwest Freeway, <br> Suite 558, <br> Houston, USA 485 </h6>
                      <a href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39206.002432144705!2d-95.4973981212445!3d29.709510002925988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8640c16de81f3ca5%3A0xf43e0b60ae539ac9!2sGerald+D.+Hines+Waterwall+Park!5e0!3m2!1sen!2sin!4v1566305861440!5m2!1sen!2sin" data-type="iframe" class="text-blue-600 hover:text-blue-700 duration-500 ease-in-out lightbox">View on Google map</a>
                    </div>
                  </div>
                  <div class="flex mt-6">
                    <i data-feather="mail" class="w-5 h-5 text-blue-600 mr-3"></i>
                    <div class="">
                      <a href="mailto:contact@example.com" class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out">contact@example.com</a>
                    </div>
                  </div>
                  <div class="flex mt-6">
                    <i data-feather="phone" class="w-5 h-5 text-blue-600 mr-3"></i>
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
                </script> ARES. Design with <i class="mdi mdi-heart text-red-600"></i> by <a href="https://ares.emu.edu.tr/" target="_blank" class="text-reset">ares</a>. </p>
            </div>
            <ul class="list-none md:text-right text-center">
              <li class="inline">
                <a href="" class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-blue-600 dark:hover:border-blue-600 hover:bg-blue-600 dark:hover:bg-blue-600">
                  <i data-feather="facebook" class="h-4 w-4"></i>
                </a>
              </li>
              <li class="inline">
                <a href="" class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-blue-600 dark:hover:border-blue-600 hover:bg-blue-600 dark:hover:bg-blue-600">
                  <i data-feather="instagram" class="h-4 w-4"></i>
                </a>
              </li>
              <li class="inline">
                <a href="" class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-blue-600 dark:hover:border-blue-600 hover:bg-blue-600 dark:hover:bg-blue-600">
                  <i data-feather="twitter" class="h-4 w-4"></i>
                </a>
              </li>
              <li class="inline">
                <a href="" class="btn btn-icon btn-sm text-gray-400 hover:text-white border border-gray-800 dark:border-gray-700 rounded-md hover:border-blue-600 dark:hover:border-blue-600 hover:bg-blue-600 dark:hover:bg-blue-600">
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
    <!-- End -->
    <div class=" fixed e z-10 bottom-10 right-1 h-20 w-72 opacity-75 items-center">
      <div class=" bg-sky-900 items-center text-indigo-100 w-60 mr-5 pl-5 right-8 leading-none flex lg:inline-flex" style="border-radius: 1.75rem 2rem 2rem 1.75rem;" role="alert">
        <span class="text-size-xl mr-6 ml-3 text-white drop-shadow-lg flex-auto animate-bounce ">Would you like to get some help?</span>
        <span class="uppercase text-xs font-bold mr-3 w-20 h-20"></span>
      </div>
    </div>
    <div onclick="" class="back-to-top fixed hover:animate-spin duration-200 ease-in-out rounded-full  z-10 bottom-10 right-10 h-20 w-20 items-center flex">
      <img src="/public/images/chatbot.png" class="" alt="">
    </div>
  </body>
  <!-- JAVASCRIPTS --> 
  <?= view("/env/mainscript"); ?>
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