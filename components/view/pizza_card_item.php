<?php
    include_once('../utils/condb.php');

class PizzaCardItem {

    public function __construct() {

    }

    public function build($row) {
        // Echo the HTML markup
        echo '<div class="relative bg-white border-4 border-white rounded-md hover:border-[#131921] transition-all duration-300">';
        echo '<div class="card w-full h-[16rem] md:h-[14rem] lg:h-[24rem] cursor-pointer bg-gray-300 bg-contain object-cover bg-center bg-no-repeat" style="background-image: url(\'' . $row['image'] . '\')"></div>';
        echo '<div class="content p-2">';
        echo '<div class="header">';
        echo '<div class="title text-bold text-xl">' . $row['f_name'] . '</div>';
        echo '</div>';
        echo '<div class="body pt-3">';
        echo '<div class="description text-bold text-xl min-h-[5rem]">';
        if (strlen($row['description']) > 170) {
            echo substr($row['description'], 0, 260) . '...';
        } else {
            echo $row['description'];
        }
        echo '</div>';
        echo '</div>';
        echo '<div class="py-1 flex flex-row justify-between">';
        echo '<div class="flex items-center flex-row gap-x-4">';
        echo '<div><span class="text-red-700">' . $row['price'] . '</span> THB </div>';
        echo '<div class="badge">';
        echo '<span class="px-4 text-black rounded-2xl">Size ' . strtoupper($row['f_size_name']) . '</span>';
        echo '</div>';
        echo '</div>';
        echo '<div class="items-center gap-x-3 hidden lg:flex">';
        echo '<i class="fa-solid fa-plus inline-block text-green-500 bg-green-500 text-white px-2 rounded-full hover:bg-opacity-50 transition-all duration-300 text-2xl"></i>';
        echo '<a href="show.php?f_id=' . $row['fid'] . '"><i class="fa-solid fa-search inline-block text-green-500 text-2xl"></i></a>';
        echo '</div>';
        echo '</div>';
        echo '</div></div>';
    }
}

?>





