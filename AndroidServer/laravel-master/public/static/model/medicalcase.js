// var Vue = require('vue');
// var VueRouter = require('vue-router');
// // 不要忘了调用此方法
// Vue.use(VueRouter);
new Vue({
    el: '#medicalcase',

    data: {
        newMessage: { name: '', message: '' },
        submitted: false,
        test: 'hello vue',
        items: JSON.parse('[{"id":1,"category_id":1,"name":"\u72ac\u761f\u70ed"},{"id":2,"category_id":1,"name":"\u72ac\u7ec6\u5c0f\u75c5\u6bd2"}]')
    },

    computed: {
        errors: function() {
            for (var key in this.newMessage) {
                if ( ! this.newMessage[key]) return true;
            }

            return false;
        }
    },

    mounted: function() {
        console.log("1111111111111111111");
        this.fetchMessages();
    },

    methods: {
        fetchMessages: function() {
            var self = this;
            $.get("api/medicalcase/messages", function( data ) {
                self.items = data;
            });
        },

        onSubmitForm: function(e) {
            e.preventDefault();

            var message = this.newMessage;

            this.messages.push(message);
            this.newMessage = { name: '', message: '' };
            this.submitted = true;

            this.$http.post('api/messages', message);
        }
    }
});


