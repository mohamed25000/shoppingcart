<?php

class CartItem
{
    private Product $product;
    private int $quantity;

    /**
     * @param Product $product
     * @param int $quantity
     */
    public function __construct(Product $product, int $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    /**
     * @return Product
     */
    public function getProduct(): Product
    {
        return $this->product;
    }

    /**
     * @param Product $product
     */
    public function setProduct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @param int $amount
     * @return void
     * @throws Exception
     */

    public function increaseQuantity(int $amount = 1)
    {
        if($this->getQuantity() + $amount > $this->getProduct()->getAvialableQuantity()){
            throw new Exception("quantity not available");
        }
        $this->quantity+= $amount;
    }

    /**
     * @param int $amount
     * @return void
     * @throws Exception
     */
    public function  decreaseQuantity(int $amount = 1)
    {
        if($this->getQuantity() - $amount < 1){
            throw new Exception("quantity can nt be less than one");
        }
        $this->quantity -= $amount;
    }

}