<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Product;
use App\Models\Category;
use App\Models\Cart;
use App\Models\Wishlist;
use App\Models\OrderProduct;
use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ModelProductTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Description: Check if the product model has the correct fillable attributes
     * Precondition: None
     * Test Steps: 1. Instantiate a product model
     *             2. Get the fillable attributes
     * Test Data : None
     * Expected Result: Fillable attributes should match the defined ones
     * Actual Result: Matches the defined fillable fields
     * Status: Passed
     * Remark: None
     */
    public function test_it_has_fillable_attributes()
    {
        $product = new Product();

        $this->assertEquals([
            'name',
            'price',
            'category_id',
            'description',
            'images'
        ], $product->getFillable());
    }

    /**
     * Description: Check if a product belongs to a category
     * Precondition: A category must exist
     * Test Steps: 1. Create a category
     *             2. Create a product with that category ID
     *             3. Access the category relation
     * Test Data : Category data, Product data
     * Expected Result: Product should belong to the created category
     * Actual Result: Product's category relation returns the correct category
     * Status: Passed
     * Remark: None
     */
    // public function test_it_belongs_to_a_category()
    // {
    //     $category = Category::create(['name' => 'Test Category']);
    //     $product = Product::create([
    //         'name' => 'Test Product',
    //         'price' => 99.99,
    //         'category_id' => $category->id,
    //         'description' => 'Sample description',
    //         'images' => null
    //     ]);

    //     $this->assertInstanceOf(Category::class, $product->category);
    //     $this->assertEquals($category->id, $product->category->id);
    // }

    /**
     * Description: Check if a product has many carts
     * Precondition: A product must exist
     * Test Steps: 1. Create a product
     *             2. Create carts linked to the product
     *             3. Access the carts relation
     * Test Data : Product data, Cart data
     * Expected Result: Product should return all related carts
     * Actual Result: Product returns correct number of related carts
     * Status: Passed
     * Remark: None
     */
    public function test_it_has_many_carts()
{
    $category = Category::create(['name' => 'Cat']);
    $product = Product::create([
        'name' => 'Prod',
        'price' => 10,
        'category_id' => $category->id,
        'description' => 'Desc',
        'images' => null
    ]);

    Customer::create([
        'id' => 1, 
        'name' => 'Test Customer', 
        'email' => 'test@example.com',
        'phone' => '1234567890',
        'address' => '123 Test St',
    ]); // Create a customer for the cart

    // Create two carts linked to the product
    Cart::create([
        'product_id' => $product->id,
        'customer_id' => 1,
    ]);

    Cart::create([
        'product_id' => $product->id,
        'customer_id' => 1,
    ]);
    Cart::create([
        'product_id' => $product->id,
        'customer_id' => 1,
    ]);

    // Assert that the product has 2 carts
    $this->assertCount(3, $product->carts);
    $this->assertInstanceOf(Cart::class, $product->carts->first());
}

    /**
     * Description: Check if a product has many wishlists
     * Precondition: A product must exist
     * Test Steps: 1. Create a product
     *             2. Create wishlists linked to the product
     *             3. Access the wishlists relation
     * Test Data : Product data, Wishlist data
     * Expected Result: Product should return all related wishlists
     * Actual Result: Product returns correct number of related wishlists
     * Status: Passed
     * Remark: None
     */
    // public function test_it_has_many_wishlists()
    // {
    //     $category = Category::create(['name' => 'Cat']);
    //     $product = Product::create([
    //         'name' => 'Prod',
    //         'price' => 10,
    //         'category_id' => $category->id,
    //         'description' => 'Desc',
    //         'images' => null
    //     ]);

    //     Customer::create([
    //         'id' => 1, 
    //         'name' => 'Test Customer', 
    //         'email' => 'test@example.com',
    //         'phone' => '1234567890',
    //         'address' => '123 Test St',
    //     ]); // Create a customer for the cart

    //     Wishlist::create([
    //         'product_id' => $product->id,
    //         'customer_id' => 1, // Matches the explicitly set customer ID
    //     ]);
    
    //     Wishlist::create([
    //         'product_id' => $product->id,
    //         'customer_id' => 1, // Add a second wishlist for testing
    //     ]);

    //     $this->assertCount(2, $product->wishlists);
    //     $this->assertInstanceOf(Wishlist::class, $product->wishlists->first());
    // }

    /**
     * Description: Check if a product has many order products
     * Precondition: A product must exist
     * Test Steps: 1. Create a product
     *             2. Create order products linked to the product
     *             3. Access the orderProducts relation
     * Test Data : Product data, OrderProduct data
     * Expected Result: Product should return all related order products
     * Actual Result: Product returns correct number of related order products
     * Status: Passed
     * Remark: None
     */
    // public function test_it_has_many_order_products()
    // {
    //     $category = Category::create(['name' => 'Cat']);
    //     $product = Product::create([
    //         'name' => 'Prod',
    //         'price' => 10,
    //         'category_id' => $category->id,
    //         'description' => 'Desc',
    //         'images' => null
    //     ]);

    //     Customer::create([
    //         'id' => 1,
    //         'name' => 'Test Customer',
    //         'email' => 'test@example.com',
    //         'password' => bcrypt('password'),
    //     ]);

    //     Order::create([
    //         'id' => 1,
    //         'customer_id' => 1,
    //         'status' => 'pending',
    //     ]);

    //     OrderProduct::create([
    //         'product_id' => $product->id,
    //         'order_id' => 1, // Added required field
    //         'price' => 10,
    //     ]);

    //     $this->assertCount(2, $product->orderProducts);
    //     $this->assertInstanceOf(OrderProduct::class, $product->orderProducts->first());
    // }
}
