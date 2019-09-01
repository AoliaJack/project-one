<template>
    <div class="row">
        <div class="col-4 col-start-large-5">
            <div class="p-card--highlighted u-clearfix">
                <h3 class="p-card__title u-float-left">Insert Your Code OTP</h3>
                <div class="u-float-right">
                    <!-- <router-link to="signup">
                        <a :href="href" @click="navigate">Sign Up</a>
                    </router-link> -->
                </div>            
            <div class="p-card__content">
                <form>
                <label for="phone">Your OTP Code</label>
                <input type="text" name="otp">
                <button type="submit">Send Code</button>
                </form>
            </div>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    
}
</script>