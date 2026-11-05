export interface CartItem {
  id: string;
  name: string;
  price: number;
  image: string;
  variant: string;
  quantity: number;
}

export const CART_STORAGE_KEY = 'computer-react-cart';
export const CART_UPDATED_EVENT = 'cart-updated';

const isCartItem = (value: unknown): value is CartItem => {
  if (typeof value !== 'object' || value === null) return false;

  const item = value as Record<string, unknown>;
  return (
    typeof item.id === 'string' &&
    typeof item.name === 'string' &&
    typeof item.price === 'number' &&
    typeof item.image === 'string' &&
    typeof item.variant === 'string' &&
    typeof item.quantity === 'number'
  );
};

export const getCartItems = (): CartItem[] => {
  const storedItems = localStorage.getItem(CART_STORAGE_KEY);
  if (!storedItems) return [];

  const parsedItems: unknown = JSON.parse(storedItems);
  if (!Array.isArray(parsedItems) || !parsedItems.every(isCartItem)) {
    throw new Error('Dữ liệu giỏ hàng không hợp lệ.');
  }

  return parsedItems;
};

export const saveCartItems = (items: CartItem[]) => {
  localStorage.setItem(CART_STORAGE_KEY, JSON.stringify(items));
  window.dispatchEvent(new Event(CART_UPDATED_EVENT));
};

export const addCartItem = (newItem: CartItem) => {
  const items = getCartItems();
  const existingItem = items.find((item) => item.id === newItem.id);

  if (existingItem) {
    existingItem.quantity += newItem.quantity;
  } else {
    items.push(newItem);
  }

  saveCartItems(items);
};

export const formatVnd = (amount: number) => `${amount.toLocaleString('vi-VN')}đ`;
