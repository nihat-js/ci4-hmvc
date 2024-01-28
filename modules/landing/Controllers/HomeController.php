<?php

namespace modules\landing\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Database\Database;
use modules\landing\Models\CartModel;
use modules\landing\Models\ProductModel;

class HomeController extends BaseController
{
    public function index()
    {

        $db = \Config\Database::connect();
        $products = $db->query("SELECT * FROM `products`")->getResultArray();

        $product = new ProductModel();
        $cart = new CartModel();


        echo view('modules\landing\Views\templates\header', ["products" => $products]);
        echo view('modules\landing\Views\_banner-area.php');
        echo view('modules\landing\Views\_top-sale.php', ["products" => $products]);

        echo view('modules\landing\Views\_special-price.php', ["products" => $products]);

        echo view('modules\landing\Views\_banner-ads.php', ["products" => $products]);
        echo view('modules\landing\Views\_new-phones.php', ["products" => $products]);
        echo view('modules\landing\Views\_blogs.php', ["products" => $products]);
        echo view('modules\landing\Views\templates\footer.php', ["products" => $products]);

    }

    public function cart(){
        $product = new ProductModel();

        count($product->getData('cart')) ? include ('Template/_cart-template.php') :  include ('Template/notFound/_cart_notFound.php');
        /*  include cart items if it is not empty */

        /*  include top sale section */
        count($product->getData('wishlist')) ? include ('Template/_wishilist_template.php') :  include ('Template/notFound/_wishlist_notFound.php');
    }


}
