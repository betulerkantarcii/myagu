import AppForm from '../app-components/Form/AppForm';

Vue.component('cafeteria-menu-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                title:  this.getLocalizedFormDefaults() ,
                published_at:  '' ,
                enabled:  false ,
                
            },
            mediaCollections: ['file']
        }
    }

});