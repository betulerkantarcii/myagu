import AppForm from '../app-components/Form/AppForm';

Vue.component('academics-administration-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                title:  this.getLocalizedFormDefaults() ,
                link:  this.getLocalizedFormDefaults() ,
                enabled:  false ,
                
            }
        }
    }

});