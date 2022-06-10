import DashboardComponent from './components/DashboardComponent';
import ProductsComponent from './components/ProductsComponent';
import CreateProduct from './components/CreateProductComponent';
import UpdateProduct from './components/UpdateProductComponent';

const routes = [
    {
        name: 'dashboard',
        path: '/',
        component: DashboardComponent
    },
    {
        name: 'products',
        path: '/products',
        component: ProductsComponent
    },
    {
        name: 'create-product',
        path: '/products/create',
        component: CreateProduct
    },
    {
        name: 'update-product',
        path: '/products/edit/:id',
        component: UpdateProduct
    }
];

export default routes;