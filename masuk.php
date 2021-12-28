<?php 
require 'cek_login.php';
$judul = 'Barang Masuk';


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data <?=$judul;?> </title>
    <meta name="author" content="name">
    <meta name="description" content="description here">
    <meta name="keywords" content="keywords,here">

    <link rel="stylesheet" href="<?php ?> assets/css/all.css">
    <link rel="stylesheet" href="<?php ?> assets/css/tailwind.min.css"/>
    <link href="<?php ?> assets/css/emoji.css" rel="stylesheet">
    <link href="<?php  ?>assets/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <script src="<?php ?> assets/css/Chart.bundle.min.js"></script>

</head>


<body class="bg-gray-800 font-sans leading-normal tracking-normal mt-12">
    <!--Nav-->
    <nav class="bg-gray-800 pt-2 md:pt-1 pb-1 px-1 mt-0 h-auto fixed w-full z-20 top-0">
        <div class="flex flex-wrap items-center">
            <div class="flex flex-shrink md:w-1/3 justify-center md:justify-start text-white">
                <a href="#">
                    <span class="text-xl"><img src="<?php ?> assets/img/rizanaldi.png" class="p-1" style="height: 50px;"></span>
                </a>
            </div>

            <div class="flex flex-1 md:w-1/3 justify-center md:justify-start text-white px-2">
                <span class="relative w-full">
                    <input type="search" placeholder="Search" class="w-full bg-gray-900 text-white transition border border-transparent focus:outline-none focus:border-gray-400 rounded p-2 pl-10 appearance-none leading-normal">
                    <div class="absolute search-icon" style="top: 1rem; left: .8rem;">
                        <svg class="fill-current pointer-events-none text-white w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"></path>
                        </svg>
                    </div>
                </span>
            </div>
            <div class="flex w-full pt-2 content-center justify-between md:w-1/3 md:justify-end">
                <ul class="list-reset flex justify-between flex-1 md:flex-none items-center">
                    <li class="flex-1 md:flex-none md:mr-3">
                        <div class="relative inline-block">

                            <button onclick="toggleDD('myDropdown')" class="drop-button text-white focus:outline-none"> 
                                <span class="pr-2"><i class="em em-robot_face"></i></span> Hi, User 
                                <svg class="h-3 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z" />
                                </svg>
                            </button>
                            <div id="myDropdown" class="dropdownlist absolute bg-gray-800 text-white right-0 mt-3 p-3 overflow-auto z-30 invisible">
                                <!--
                                <a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fa fa-user fa-fw"></i> Profile</a>
                                <a href="#" class="p-2 hover:bg-gray-800 text-white text-sm no-underline hover:no-underline block"><i class="fa fa-cog fa-fw"></i> Settings</a>
                                <div class="border border-white"></div>
                            -->
                                <a href="logout.php" class="p-1 hover:bg-gray-800 text-white text-sm "><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="flex flex-col md:flex-row">
        <div class="bg-gray-800 shadow-xl h-16 fixed bottom-0 mt-12 md:relative md:h-screen z-10 w-full md:w-48">
            <div class="md:mt-12 md:w-48 md:fixed md:left-0 md:top-0 content-center md:content-start text-left justify-between">
                <ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left">
                    <li class="mr-3 flex-1">
                        <a href="index.php" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-500 hover:border-red-500">
                            <i class="fa fa-shopping-cart pr-0 md:pr-3 text-gray-500"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-500 block md:inline-block">Order</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="stock.php" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-500 hover:border-red-500">
                            <i class="fas fa-cubes pr-0 md:pr-3 text-gray-500"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-500 block md:inline-block">Stock Barang</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="masuk.php" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-red-500">
                            <i class="fas fa-sign-in-alt pr-0 md:pr-3 text-red-500"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-red-500 font-bold block md:inline-block">Barang Masuk</span>
                        </a>
                    </li>
                    <li class="mr-3 flex-1">
                        <a href="pelanggan.php" class="block py-1 md:py-3 pl-1 align-middle text-white no-underline hover:text-white border-b-2 border-gray-500 hover:border-red-500">
                            <i class="fa fa-user pr-0 md:pr-3 text-gray-500"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-gray-500 block md:inline-block">Kelola Pelanggan</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <?php 
            $get = mysqli_query($c,"SELECT * from masuk, produk where masuk.idproduk = produk.idproduk ORDER BY tanggal DESC");
            $jumlah_data = mysqli_num_rows($get);
        ?>
        <div class="main-content flex-1 bg-gray-100 mt-12 md:mt-2 pb-24 md:pb-5">
            <div class="bg-gray-800 pt-3">
                <div class="rounded-tl-3xl shadow text-2xl text-white" style="background-image: url(<?php ?>assets/img/bar_bg_sasirangan.png">
                    <h3 class="rounded-tl-3xl font-bold p-3 bg-gradient-to-r from-red-500">Data <?=$judul;?></h3>
                </div>
            </div>
            <div class="p-3">
                <div class="grid grid-cols-5 w-full">
                    <div class="col-span-4 mr-3">
                        <div class="flex rounded font-bold bg-gradient-to-r from-red-500 p-1">
                            <span class="text-sm text-white">Jumlah Data <?=$judul;?> : <span> 
                            <span class="text-2xl bg-gray-100 text-red-500 p-1 rounded"><?=$jumlah_data;?></span>
                        </div>
                    </div>
                    <div class="col">
                        <button onclick="openModal('main-modal')" class="text-sm w-full text-white hover:bg-blue-700 bg-blue-500 p-1 rounded font-bold">+ Tambah <?=$judul;?></button>
                        <button onclick="openModal('another-modal')" class="text-xs w-full text-indigo-500 hover:text-white hover:bg-indigo-700 p-1 rounded font-bold"><?=$judul;?> dengan jenis baru ?</button>
                    </div>
                </div>
                
                <table class="w-full mt-3 p-1 table-auto">
                    <thead class="bg-red-500 text-white text-center">
                      <tr class="border">
                        <th class="border p-1">No</th>
                        <th class="border p-1">Tanggal / Waktu</th>
                        <th class="border p-1">Nama Barang Masuk</th>
                        <th class="border p-1">Jumlah Barang Masuk</th>
                        <th class="border p-1">Aksi</th>

                      </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php 
                            $i = 1;
                            while($m = mysqli_fetch_array($get)){
                                $namaproduk = $m['namaproduk'];
                                $deskripsi = $m['deskripsi'];
                                $qty = $m['qty'];
                                $tanggal = $m['tanggal'];
                        ?>
                        
                        <tr class="border hover:bg-red-100  ">
                            <td class="border p-1"><?=$i++; ?></th>
                            <td class="border p-1 font-bold"><?=$tanggal; ?></td>
                            <td class="border p-1"><p class="text-xs"><?=$namaproduk;?></p><p class="font-bold"><?=$deskripsi;?></p></td>
                            <td class="border p-1"><?=$qty; ?></td>
                            <td class="border p-1">
                                <a href="view.php?idp=<?=$idpesanan;?>" class="rounded hover:bg-green-500" target="blank">
                                    <i  class="fas text-green-500 hover:text-white p-1 fa-search"></i>
                                </a>
                                <a class="rounded hover:bg-purple-500">
                                    <i class="fas text-purple-500 hover:text-white p-1 fa-pencil"></i>
                                </a>
                                <a class="rounded hover:bg-red-500">
                                    <i class="fas text-red-500 hover:text-white p-1 fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php }; ?>
                    </tbody>
                 </table>
            </div>        
        </div>
    </div>
    <!--MODAL-->
    <div class="main-modal fixed w-full inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7);">
        <div class="border border-blue-500 shadow-lg modal-container bg-white w-4/12 md:max-w-11/12 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
            <div class="modal-content py-4 text-left px-6">
                <!--Title-->
                <div class="flex justify-between items-center pb-3">
                    <p class="text-2xl font-bold text-black">Tambah Barang Masuk</p>
                </div>

                <form method="post" class="w-full">
                    <!--Body-->
                    <p class="font-bold">Pilih Produk</p>
                    <div class="p-1 flex">
                        <select name="idproduk" class="border rounded w-full">
                            <?php 
                            $getproduk = mysqli_query($c,"SELECT * FROM produk WHERE idproduk not in (SELECT idproduk FROM detailpesanan WHERE idpesanan = '$idp')"); 
                            while($pl=mysqli_fetch_array($getproduk)){
                                $idproduk = $pl['idproduk'];
                                $namaproduk = $pl['namaproduk'];
                                $deskripsi = $pl['deskripsi'];
                            ?>
                            <option value="<?=$idproduk;?>"><?=$namaproduk;?> | <?=$deskripsi;?>  </option>
                            <?php } ?>
                        </select>
                    </div>
                    <p class="text-black text-sm font-bold">Jumlah</p>
                    <div class="flex p-1">
                        <input required class="form-control shadow border rounded w-full p-1 mb-3 text-sm text-black focus:outline-none focus:shadow-outline" type="number" min=1 name="qty" placeholder="Jumlah">
                        <input type="hidden" name="idp" value="<?=$idp;?>">
                    </div>   
                    <!--Footer-->
                    <div class="flex justify-end ">
                        <button
                            class="text-green-500 hover:bg-green-500 hover:text-white rounded p-1" type="submit" name="new_produk"><i class="fas fa-check-square"></i>
                        </button>
                        <button
                            class="text-red-500 hover:bg-red-500 hover:text-white rounded p-1" onclick="modalClose('main-modal')"><i class="fas fa-window-close"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="another-modal fixed w-full inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster" style="background: rgba(0,0,0,.7);">
        <div class="border border-blue-500 shadow-lg modal-container bg-white w-4/12 md:max-w-11/12 mx-auto rounded-xl shadow-lg z-50 overflow-y-auto">
            <div class="modal-content py-4 text-left px-6">
                <!--Title-->
                <div class="flex justify-between items-center pb-3">
                    <p class="text-2xl font-bold text-black">Tambah <?=$judul;?> Baru</p>
                </div>

                <form method="post">
                    <!--Body-->
                    <label class="text-black text-sm font-bold"> Nama Produk</label>
                    <input required type="text" class="form-control shadow border rounded w-full p-1 mb-3 text-sm text-black focus:outline-none focus:shadow-outline" placeholder="Nama Produk" name="namaproduk"/>
                    <label class="text-black text-sm font-bold"> Deskripsi</label>
                    <input required type="text" class="form-control shadow border rounded w-full p-1 mb-3 text-sm text-black focus:outline-none focus:shadow-outline" placeholder="Deskripsi" name="deskripsi"/>
                    <label class="text-black text-sm font-bold"> Stock Awal</label>
                    <input required type="number" class="form-control shadow border rounded w-full p-1 mb-3 text-sm text-black focus:outline-none focus:shadow-outline" placeholder="Stock Awal" name="stock"/>
                    <label class="text-black text-sm font-bold"> Harga Produk</label>
                    <input required type="number" class="form-control shadow border rounded w-full p-1 mb-3 text-sm text-black focus:outline-none focus:shadow-outline" placeholder="Harga Produk : Rp..." name="harga"/>

                    <!--Footer-->
                    <div class="flex justify-end p-3">
                      <button class="p-1 rounded text-green-500 hover:text-white hover:bg-green-700 mr-3" type="submit" name="tambah_barang_baru">
                        <i class="fas fa-check-square"></i>
                      </button>
                      <button class="p-1 rounded text-red-500 hover:text-white hover:bg-red-700" onclick="modalClose('another-modal')">
                        <i class="fas fa-window-close"></i>
                      </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
    <script>
        /*Toggle dropdown list*/
        function toggleDD(myDropMenu) {
            document.getElementById(myDropMenu).classList.toggle("invisible");
        }
        /*Filter dropdown options*/
        function filterDD(myDropMenu, myDropMenuSearch) {
            var input, filter, ul, li, a, i;
            input = document.getElementById(myDropMenuSearch);
            filter = input.value.toUpperCase();
            div = document.getElementById(myDropMenu);
            a = div.getElementsByTagName("a");
            for (i = 0; i < a.length; i++) {
                if (a[i].innerHTML.toUpperCase().indexOf(filter) > -1) {
                    a[i].style.display = "";
                } else {
                    a[i].style.display = "none";
                }
            }
        }
        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.drop-button') && !event.target.matches('.drop-search')) {
                var dropdowns = document.getElementsByClassName("dropdownlist");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (!openDropdown.classList.contains('invisible')) {
                        openDropdown.classList.add('invisible');
                    }
                }
            }
        }
        /*modals*/
        all_modals = ['main-modal', 'another-modal']
        all_modals.forEach((modal)=>{
            const modalSelected = document.querySelector('.'+modal);
            modalSelected.classList.remove('fadeIn');
            modalSelected.classList.add('fadeOut');
            modalSelected.style.display = 'none';
        })
        const modalClose = (modal) => {
            const modalToClose = document.querySelector('.'+modal);
            modalToClose.classList.remove('fadeIn');
            modalToClose.classList.add('fadeOut');
            setTimeout(() => {
                modalToClose.style.display = 'none';
            }, 500);
        }

        const openModal = (modal) => {
            const modalToOpen = document.querySelector('.'+modal);
            modalToOpen.classList.remove('fadeOut');
            modalToOpen.classList.add('fadeIn');

            modalToOpen.style.display = 'flex';
        }

    </script>



</body>

</html>
