<?php /** @noinspection SpellCheckingInspection */

class Product
{
    private int $id;
    private string $title;
    private float $price;
    private int $avialableQuantity;

    /**
     * @param int $id
     * @param string $title
     * @param float $price
     * @param int $avialableQuantity
     */
    public function __construct(int $id, string $title, float $price, int $avialableQuantity)
    {
        $this->id = $id;
        $this->title = $title;
        $this->price = $price;
        $this->avialableQuantity = $avialableQuantity;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param float $price
     */
    public function setPrice(float $price)
    {
        $this->price = $price;
    }

    /**
     * @return int
     */
    public function getAvialableQuantity(): int
    {
        return $this->avialableQuantity;
    }

    /**
     * @param int $avialableQuantity
     */
    public function setAvialableQuantity(int $avialableQuantity)
    {
        $this->avialableQuantity = $avialableQuantity;
    }

    /**
     * @param Cart $cart
     * @param int $quantity
     * @return CartItem
     * @throws Exception
     */
    public function addToCart(Cart $cart, int $quantity): CartItem
    {
        return $cart->addProduct($this, $quantity);
    }

    /**
     * @param Cart $cart
     * @return void
     */
    public function removeFromCart(Cart $cart)
    {

    }

}