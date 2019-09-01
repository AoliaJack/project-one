<template>
<div>
    
<div class="row">

<div class="col-3">
    <div class="p-card">
    <!-- <h3 class="p-card__title">We'd love to have you join us as a partner.</h3> -->
    <div class="p-media-object">
    <img src="https://assets.ubuntu.com/v1/0a529437-karlos.jpeg" class="p-media-object__image is-round">
    <div class="p-media-object__details">
        <h3 class="p-media-object__title">
        <a href="#">Karl Waghorn-Moyce</a>
        </h3>
        <p class="p-media-object__content">Lead Visual Designer</p>
        <ul class="p-media-object__meta-list">
        <li class="p-media-object__meta-list-item--location">
            <span class="u-off-screen">Location: </span>London, UK
        </li>
        </ul>
    </div>
    </div>
    </div>
</div>
<div class="col-9">
    <div class="p-card">
    <h3 class="p-card__title">Profile</h3>
    <form>
    <p class="p-card__content">
        <ul class="p-list is-split">
        <li class="p-list__item">
            <h5>Name</h5>
            <input type="text" v-model="profName" placeholder="nama">
        </li>
        <li class="p-list__item">
            <h5>Gender</h5>
            <select v-model="profGender">
                <option value="0">Male</option>
                <option value="0">Female</option>
            </select>
        </li>
        <li class="p-list__item">
            <h5>Birthday</h5>
            <input type="text" v-model="profBirthday" placeholder="Birthday">
        </li>
        <li class="p-list__item">
            <h5>Hometown</h5>
            <input type="text" v-model="profHometown" placeholder="Hometown">
        </li>
        <li class="p-list__item">
            <h5>About Me</h5>
            <input type="text" v-model="profAboutme" placeholder="About Me">
        </li>
        </ul>
        <input type="hidden" v-model="profToken">
        <button type="submit" v-on:click="test">Save Profile</button>
    </p>
    </form>
    </div>

</div>


</div>


</div>

</template>
<script>
const baseURL = '/api/profile/profedit'
export default {
    mounted() {

    },
    data: function() {
        return {
            // profToken: "bearer 0764fb1eca05916fb223550dd90f94b0b7ba4b90478be31b2e67285e9e04f71a",
            profName: "",
            profGender: "",
            profBirthday: "",
            profHometown: "",
            profAboutme: ""
        }
    },
    methods: {
        test: function (event) {
            event.preventDefault();
            var Token = "0764fb1eca05916fb223550dd90f94b0b7ba4b90478be31b2e67285e9e04f71a";
            var bodyFormData = {
                // "Authorization": this.profToken,
                "name": this.profName,
                "gender": this.profGender,
                "birthday": this.profBirthday,
                "hometown": this.profHometown,
                "bio": this.profAboutme
                }
            axios({
            method: 'post',
            url: baseURL,
            data: bodyFormData,
            headers: {
                Authorization: 'bearer 0764fb1eca05916fb223550dd90f94b0b7ba4b90478be31b2e67285e9e04f71a'
            }
            
            })
            console.log(headers)
            return false
            .then(function (response) {
                // handle success
                if(response.status===200){
                    // alert();
                    

                }
                console.log(response);
            });
        }
    }

}
</script>