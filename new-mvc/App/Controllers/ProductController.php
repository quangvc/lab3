<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Product;

class ProductController extends BaseController {
    public function getProducts() {
        // Hiển thị danh sách sản phẩm bằng render() của BladeOne
        // file view ở new-mvc/App/Views/product/index.blade.php
        $viewName = 'product.index';
        // data view cần biến $name và $price
        $data = [
            'name' => 'Iphone 14',
            'price' => 12000000,
            'array' => [
                'Xanh',
                'Đỏ',
                'Tím',
                'Vàng'
            ]
        ];

        return $this->render($viewName, $data);
    }
    public function getDashboard() {
        // Hiển thị danh sách sản phẩm bằng render() của BladeOne
        // file view ở new-mvc/App/Views/product/index.blade.php
        $viewName = 'product.dashboard';
        // data view cần biến $name và $price
        $data = [
            'name' => 'Iphone 14',
            'price' => 12000000,
            'array' => [
                'Xanh',
                'Đỏ',
                'Tím',
                'Vàng'
            ]
        ];

        return $this->render($viewName, $data);
    }

    public function showProduct() {
        $viewName = 'product.show';
        $data = [
            'name' => 'Iphone 14',
            'price' => 12000000,
            'array' => [
                'Xanh',
                'Đỏ',
                'Tím',
                'Vàng'
            ]
        ];

        return $this->render($viewName, $data);
    }

    public function create() {
        $viewName = 'product.create';
        $data = [
            'name' => 'Iphone 14'
        ];

        return $this->render($viewName, $data);
    }

    public function detail() {
        $viewName = 'product.detail';
        $data = [
            'name' => 'Iphone 14'
        ];

        return $this->render($viewName, $data);
    }
}
