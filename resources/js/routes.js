import DashboardComponent from './components/DashboardComponent';
import DentistComponent from './components/dentist/ListComponent';
import AddDentistComponent from './components/dentist/AddComponent';
import UpdateDentistComponent from './components/dentist/UpdateComponent';

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
        name: 'update-dentist',
        path: '/dentists/:id',
        component: UpdateDentistComponent
    }
];

export default routes;