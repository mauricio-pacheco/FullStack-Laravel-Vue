import { createApp } from 'vue';
import mascara_data from './components/mascara_data.vue';
import mascara_telefone from './components/mascara_telefone.vue';
import VueMask from 'vue-jquery-mask';

//CRIANDO APP
const app_telefone = createApp({});

//Registrando  o Componente
app_telefone.component('mascara_telefone', mascara_telefone);

//Elemento HTML da Aplicação
app_telefone.mount('#app_telefone');

//Criando App
const app_data = createApp({});

//Registrando o componente
app_data.component('mascara_data', mascara_data);

//Elemento HTML da Aplicação
app_data.mount('#app_data');

require('./bootstrap');
