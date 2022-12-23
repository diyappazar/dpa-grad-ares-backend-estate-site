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
        <div class="max-w-[400px] w-full m-auto p-6 bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-3xl">
                        <a href="index.html"><img src="assets/images/logo-icon-64.png" class="mx-auto" alt=""></a>
                        <h5 class="my-6 text-xl font-semibold">Reset Your Password</h5>
                        <div class="grid grid-cols-1">
                            <p class="text-slate-400 mb-6">Please enter your email address. You will receive a link to create a new password via email.</p>
                            <form class="text-left">
                                <div class="grid grid-cols-1">
                                    <div class="mb-4">
                                        <label class="font-medium" for="LoginEmail">Email Address:</label>
                                        <input id="LoginEmail" type="email" class="form-input mt-3" placeholder="name@example.com">
                                    </div>

                                    <div class="mb-4">
                                        <a href="" class="btn bg-blue-600 hover:bg-blue-700 text-white rounded-md w-full">Send</a>
                                    </div>

                                    <div class="text-center">
                                        <span class="text-slate-400 me-2">Remember your password ? </span><a href="auth-login.html" class="text-black dark:text-white font-bold">Sign in</a>
                                    </div>
                                </div>
                            </form>
                        </div>
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