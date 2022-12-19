import AppForm from '../app-components/Form/AppForm';

Vue.component('poll-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                title:  this.getLocalizedFormDefaults() ,
                description:  this.getLocalizedFormDefaults() ,
                link:  this.getLocalizedFormDefaults() ,
                published_at:  '' ,
                enabled:  false ,
                
            }
        }
    }

});