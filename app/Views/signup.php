<!DOCTYPE html>
<html lang="en"> <?php include ('/Applications/MAMP/htdocs/app/Views/env/header.php'); ?> <body class="dark:bg-slate-900">
    <section class="md:h-screen py-36 flex items-center relative overflow-hidden zoom-image">
      <div class="absolute inset-0 image-wrap z-1 bg-[url('../../public/images/bg/01.jpg')] bg-no-repeat bg-center"></div>
      <div class="absolute inset-0 bg-gradient-to-b from-transparent z-2">
        <div class="absolute inset-0 bg-black/60" id="elements"></div>
      </div>
      <div class="absolute top-5 right-7 z-3">
        <!-- Switcher -->
        <span class=" relative inline-block top-1 ">
          <input type="checkbox" class="checkbox opacity-0 absolute" id="chk" />
          <label class="label bg-blue-600 dark:bg-white shadow dark:shadow-gray-700 cursor-pointer rounded-full flex justify-between items-center p-1 w-14 h-8" for="chk">
            <i class="uil uil-moon text-[20px] text-blue-500 mt-1"></i>
            <i class="uil uil-sun text-[20px] text-blue-500 mt-1"></i>
            <span class="ball bg-white dark:bg-slate-900 rounded-full absolute top-[2px] left-[2px] w-7 h-7"></span>
          </label>
        </span>
        <!-- Switcher -->
      </div>
      <div class="container z-3">
        <div class="flex justify-center">
          <div class="max-w-[400px] w-full m-auto p-6 bg-white dark:bg-slate-900 shadow-md dark:shadow-blue-700 rounded-3xl">
            <a href="index.html">
              <img src="/public/images/areslogo.png" class="mx-32 h-12 w-20" alt="">
            </a>
            <form class="text-left">
              <div class="grid grid-cols-1">
                <div class=" my-4 mb-4">
                  <button type="button" class="text-white bg-[#3b5998] hover:bg-[#3b5998]/90 focus:ring-4 focus:outline-none focus:ring-[#3b5998]/50 font-small rounded-full  px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#3b5998]/55 rounded-full w-full">
                    <svg class="mr-2 -ml-1 w-4 h-4" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                      <path fill="currentColor" d="M279.1 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.4 0 225.4 0c-73.22 0-121.1 44.38-121.1 124.7v70.62H22.89V288h81.39v224h100.2V288z"></path>
                    </svg> Sign up with Facebook </button>
                </div>
                <div class=" mb-4">
                  <button type="button" class="text-white bg-[#4285F4] hover:bg-[#4285F4]/90 focus:ring-4 focus:outline-none focus:ring-[#4285F4]/50 font-small rounded-full px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#4285F4]/55 rounded-full w-full">
                    <svg class="mr-2 -ml-1 w-4 h-4" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488 512">
                      <path fill="currentColor" d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z"></path>
                    </svg> Sign up with Google </button>
                </div>
                <div class="flex items-center py-4">
                  <div class="flex-grow h-px bg-gray-400"></div>
                  <span class="flex-shrink text-2xl text-gray-500 px-4 ">or</span>
                  <div class="flex-grow h-px bg-gray-400"></div>
                </div>
                <h5 class="text-center  text-xl font-semibold">Sign Up</h5>
                <div class="mb-4">
                  <label class="font-semibold" for="RegisterName">Your Name:</label>
                  <input id="RegisterName" type="text" class="form-input mt-3 rounded-full" placeholder="Harry">
                </div>
                <div class="mb-4">
                  <label class="font-semibold" for="LoginEmail">Email Address:</label>
                  <input id="LoginEmail" type="email" class="form-input mt-3 rounded-full" placeholder="name@example.com">
                </div>
                <div class="mb-4">
                  <label class="font-semibold" for="LoginPassword">Password:</label>
                  <input id="LoginPassword" type="password" class="form-input mt-3 rounded-full" placeholder="Password:">
                </div>
                <label class="font-semibold">What is your role?</label>
                <div class="flex flex-row ">
                  <ul class="items-center w-full text-blue-900 bg-black-500 dark:bg-slate-600 rounded-full border border-black-500 sm:flex dark:bg-blue-400 dark:border-blue-600 dark:text-white my-4">
                    <li class="w-full  border-black-200 sm:border-b-0 dark:bg-black-600 dark:border-black-600  rounded-full">
                      <div class="flex items-center pl-3">
                        <input id="horizontal-list-radio-license" type="radio" value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-blue-100 border-blue-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-blue-700 focus:ring-2 dark:border-black-500">
                        <label for="horizontal-list-radio-license" class="py-3 ml-2 w-full text-sm font-small text-blue-900 dark:text-white">Real Estate Agent </label>
                      </div>
                    </li>
                    <li class="w-full  border-black-200 sm:border-b-0 dark:bg-black-600 dark:border-black-600 rounded-full">
                      <div class="flex items-center pl-3">
                        <input id="horizontal-list-radio-id" type="radio" value="" name="list-radio" class="w-4 h-4 text-blue-600 bg-blue-100 border-blue-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-blue-700 focus:ring-2 dark:bg-blue-600 dark:border-blue-500">
                        <label for="horizontal-list-radio-id" class="py-3 ml-2 w-full text-sm font-medium text-blue-900 dark:text-white">Customer</label>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="mb-4">
                  <a href="" class="btn bg-blue-600 hover:bg-blue-700 text-white rounded-full w-full">Register</a>
                </div>
                <div class="text-center">
                  <span class="text-slate-400 me-2">Already have an account ? </span>
                  <a onclick="window.location.replace('app/Views/signin.php');" class="text-black dark:text-white font-bold">Sign in</a>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!--end section -->
    <div class="fixed bottom-3 right-3 z-10">
      <a href="" class="back-button btn btn-icon bg-blue-600 hover:bg-blue-700 text-white rounded-full">
        <i data-feather="arrow-left" class="h-4 w-4"></i>
      </a>
    </div>
    <!-- JAVASCRIPTS --> <?php include ('/Applications/MAMP/htdocs/app/Views/env/mainscript.php'); ?>
    <!-- JAVASCRIPTS -->
  </body>
</html>