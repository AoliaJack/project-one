<template>
    <div class="row">
        <div class="col-4 col-start-large-5">
            <div class="p-card--highlighted u-clearfix">
                <h3 class="p-card__title u-float-left">Sign Up</h3>
                <div class="u-float-right">
                    <!-- <router-link to="login">
                        <a :href="href" @click="navigate">Login</a>
                    </router-link> -->
                </div>
            <div class="p-card__content">
                <form>
                <label for="phone">Phone Number</label>
                <input type="text" placeholder="087839798xxx" v-model="regPhone">
                <label for="password">Password</label>
                <input type="password" placeholder="******" v-model="regPassword">
                <label for="country">Country</label>
                <input type="text" placeholder="Your Country" v-model="regCountry">
                <label for="latlong">Lat Long</label>
                <input type="text" placeholder="-77.0364,38.8951." v-model="regLat">
                <input type="hidden" v-model="regDevtok">
                <input type="hidden" v-model="regType">
                <label for="CheckMe">I agree to sign up in this system</label>
                <button type="submit" v-on:click="test">Submit</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</template>

<script>
// require('dotenv').config()
const baseURL = '/api/signup'
/* eslint-disable */

export default {
    mounted() {

    },
    data: function() {
        return {
            regPhone: "" ,
            regPassword: "",
            regCountry: "",
            regLat: "",
            regDevtok: "123456",
            regType: 1,
        }
    },
    methods: {
        test: function (event) {
            event.preventDefault();
            var bodyFormData = {
                "phone" : this.regPhone,
                "password" : this.regPassword,
                "latlong" : this.regLat,
                "device_token" : this.regDevtok,
                "device_type" : this.regType
            }
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