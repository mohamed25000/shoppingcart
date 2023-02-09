<?php /** @noinspection SpellCheckingInspection */

class Cart
{
    /**
     * @var CartItem []
     */

    private array $items = [] ;

    /**
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    /**
     * @param Product $product
     * @param int $quantity
     * @return CartItem
     * @throws Exception
     */

    public function addProduct(Product $product, int $quantity): CartItem
    {

        $cartitem = $this->findCartItem($product->getId());
        if($cartitem === null) {
            $cartitem = new CartItem($product, $quantity);
            $this->items[$product->getId()] = $cartitem;
        }
        // $cartitem->increaseQuantity($quantity);
        return $cartitem;
    }

    /**
     * @param int $productId
     * @return Product|null
     */

    private function findCartItem(int $productId): ?Product
    {
        return  $this->items[$productId] ?? null;
        /* foreach ($this->items as $item) {
            if ($item->getProduct()->getId() === $productId) {
                return $item->getProduct();
            }
        }
        return null; */
    }

    /**
     * @param Product $product
     * @return void
     */

    public function removeProduct (Product $product)
    {
        unset($this->items[$product->getId()]);
        /*foreach ($this->items as $index => $item){
            if($item->getProduct()->getId() === $product->getId()) {
                unset($this->items[$index]);
                break;
            }
        } */
       /*$cartitem = $this->findCartItem($product->getId());
       $index = array_search($cartitem, $this->items);
       unset($this->items[$index]); */
    }

    /**
     * @return int
     */
    public function getTotalQuantity(): int
    {
        $sum = 0;
        foreach ($this->items as $item) {
            $sum += $item->getQuantity();
        }
        return $sum;
    }

    /**
     * @return float
     */
    public function getTotalSum()
    {
        $totalSum = 0;
        foreach ($this->items as $item) {
            $totalSum += $item->getQuantity() * $item->getProduct()->getPrice();
        }
        return  $totalSum;
    }
}