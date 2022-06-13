import DashboardComponent from './components/DashboardComponent';
import DentistComponent from './components/dentist/ListComponent';
import AddDentistComponent from './components/dentist/AddComponent';
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
        name: 'add-dentist',
        path: '/dentists/add',
        component: AddDentistComponent
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