import { api } from './api';

export interface ApiProduct {
  id: number;
  name: string;
  price: number;
  image: string;
}

export interface ApiProductSection {
  key: string;
  title: string;
  image: string;
  products: ApiProduct[];
}

export const fetchProductSections = () =>
  api.get<{ data: ApiProductSection[] }>('/products').then((res) => res.data.data);
