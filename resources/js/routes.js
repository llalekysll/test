import AllApplication from './components/AllApplication.vue';
import CreateApplication from './components/CreateApplication.vue';
import EditApplication from './components/EditApplication.vue';

export const routes = [
    {
        name: 'home',
        path: '/',
        component: AllApplication
    },
    {
        name: 'create',
        path: '/create',
        component: CreateApplication
    },
    {
        name: 'edit',
        path: '/edit/:id',
        component: EditApplication
    }
];
