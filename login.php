<?php 
require 'function.php';

if(!isset($_SESSION['login'])){

}else{
  header('location:index.php');
}


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="shortcut icon" href="./assets/img/favicon.ico" />
    <link
      rel="apple-touch-icon"
      sizes="76x76"
      href="./assets/img/apple-icon.png"
    />
    <link
      rel="stylesheet"
      href="<?php  ?>assets/fontawesome-free/css/all.min.css"
    />
    <link
      rel="stylesheet"
      href="<?php  ?>assets/css/compiled-tailwind.min.css"
    />
    <title>Login</title>
  </head>
  <body class="text-gray-800 antialiased">
    <main>
      <section class="absolute w-full h-full">
        <div class="absolute top-0 w-full h-full bg-gray-900" style="background-image: url(<?php  ?>assets/img/register_bg_sasirangan.png); background-size: 100%; background-repeat: no-repeat;" >
        </div>
        <div class="container mx-auto px-4 h-full">
          <div class="flex content-center items-center justify-center h-full">
            <div class="w-full lg:w-4/12 px-4">
              <div class="relative flex flex-col min-w-0 break-words w-full">
                <div class="flex-auto px-4 lg:px-10 py-10 pt-0"> 
                  <form method="post" class="mt-3">
                    <div class="text-center text-white ">
                      <strong>Silahkan Login !</strong>
                    </div>
                    <div class="relative w-full mb-3">
                      <label
                        class="block uppercase  text-white text-xs mb-1"
                        for="grid-password"
                        >username</label
                      ><input required
                        type="text"
                        class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm focus:outline-none focus:ring w-full"
                        placeholder="Username" name="username"
                        style="transition: all 0.15s ease 0s;"
                      />
                    </div>
                    <div class="relative w-full mb-3">
                      <label
                        class="block uppercase  text-white text-xs mb-1"
                        for="grid-password"
                        >Password</label
                      ><input required
                        type="password"
                        class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm focus:outline-none focus:ring w-full"
                        placeholder="Password" name="password"
                        style="transition: all 0.15s ease 0s;"
                      />
                    </div>
                    <div class="text-center mt-3">
                      <button class="text-white p-1 text-sm font-bold uppercase rounded shadow hover:bg-red-500 w-full" type="submit" name="login" style="transition: all 0.15s ease 0s;" >
                        M A S U K
                      </button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </body>
  <script>
    function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
  </script>
</html>
