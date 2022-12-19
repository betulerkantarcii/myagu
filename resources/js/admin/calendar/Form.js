import AppForm from '../app-components/Form/AppForm';

Vue.component('calendar-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                title:  this.getLocalizedFormDefaults() ,
                description:  this.getLocalizedFormDefaults() ,
                event_time:  '' ,
                event_location:  this.getLocalizedFormDefaults() ,
                link:  this.getLocalizedFormDefaults() ,
                published_at:  '' ,
                enabled:  false ,
                
            }
        }
    }

});