<template>
    <div class="row">
        <div class="col-4 col-start-large-5">
            <div class="p-card--highlighted u-clearfix">
                <h3 class="p-card__title u-float-left">Sign In</h3>
                <div class="u-float-right">
                    <!-- <router-link to="signup">
                        <a :href="href" @click="navigate">Sign Up</a>
                    </router-link> -->
                </div>            
            <div class="p-card__content">
                <form>
                <label for="phone">Phone Number</label>
                <input type="text" v-model="signPhone" placeholder="087839798xxx">
                <label for="password">Password</label>
                <input type="password" v-model="signPassword" placeholder="******">
                <input type="hidden" v-model="signLat">
                <input type="hidden" v-model="signDevtok">
                <input type="hidden" v-model="signType">
                <button type="submit" v-on:click="login">Submit</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    mounted() {

    },
    data: function() {
        return {
            signPhone: "" ,
            signPassword: "",
            signCountry: "",
            signLat: "abcdc",
            signDevtok: "123456",
            signType: 1,
        }
    },
    method: {
        login: function(event){
            event.preventDefault();
            var bodyFormData = {
                "phone" : this.regPhone,
                "password" : this.regPassword,
                "latlong" : this.regLat,
                "device_token" : this.regDevtok,
                "device_type" : this.regType
            }
            bodyFormData = this
            this.$store.dispatch(AUTH_REQUEST, bodyFormData).then(() => {
                this.$router.push('/')
            })
            console.log(bodyFormData)
            return false
            axios({
            method: 'post',
            url: baseURL,
            data: bodyFormData
            })
            .then(function (response) {
                // handle success
                // if(response.status===200){
                //     return postPhone();
                // }
                console.log(response);
            });
        }
    }
}
</script>