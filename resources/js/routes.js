import DashboardComponent from './components/DashboardComponent';
import DentistComponent from './components/dentist/ListComponent';
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
        name: 'dentists',
        path: '/dentists',
        component: DentistComponent
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