<template>
  <footer  class="myhome">
    <div class="row mb-3 pl-2 ahmedaaaaaaaa">
        <div class="col-md-5 footer-col-1">
            <a href="" class="footer-logo">{{$t("message.logo") }}</a>
            <div class="footer-info">
                <p class="lead">{{ $t("message.addressfooter") }}<br></p>
            </div>
            <div class="footer-social">
                <a href="" class="custom-social-link "><i class="fa fa-facebook facebook"></i></a>
                <a href="" class="custom-social-link "><i class="fa fa-instagram instagram"></i></a>
            </div>
        </div>
        <div class="col-md-7 ">
            <div class="row">
                <!-- <div class="col-md-6 col-lg-3 mb-2">
                    <ul class="footer-menu">
                        <li class="footer-title">
                            {{ $t("message.Limitworks") }}
                        </li>
                        <router-link to="/shop">
                            <li class="footer-menu-item">
                                <a class="footer-menu-item-link">  {{ $t("message.shopfooter") }}</a>
                            </li>
                        </router-link>
                        <router-link :to="{ path: '/about', query: { mydata: 'product'}}">
                            <li class="footer-menu-item">
                                <a class="footer-menu-item-link">  {{ $t("message.aboutfooter") }}</a>
                            </li>
                        </router-link>
                    </ul>
                </div> -->
                <div class="col-md-6 col-lg-4 mb-2">
                    <ul class="footer-menu">
                        <li class="footer-title">
                            {{ $t("message.company") }}
                        </li>
                        <!-- <li class="footer-menu-item">
                            <a href="#" class="footer-menu-item-link">{{ $t("message.carreerfooter") }}</a>
                        </li> -->
                        <router-link to="/about">
                            <li class="footer-menu-item">
                                <a class="footer-menu-item-link">{{ $t("message.aboutusfooter") }}</a>
                            </li>
                        </router-link>
                        <router-link :to="{ path: '/about', query: { mydata: 'artist'}}">
                            <li class="footer-menu-item">
                                <a class="footer-menu-item-link">{{ $t("message.artistfooter") }}</a>
                            </li>
                        </router-link>
                         <router-link :to="{ path: '/about', query: { mydata: 'contact'}}">
                            <li class="footer-menu-item">
                                <a class="footer-menu-item-link">{{ $t("message.contactfooter") }}</a>
                            </li>
                         </router-link>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-4 mb-2">
                    <ul class="footer-menu">
                        <li class="footer-title">
                            {{ $t("message.others") }}
                        </li>
                        <router-link to="/terms">
                            <li class="footer-menu-item">
                                <a class="footer-menu-item-link">{{ $t("message.termsfooter") }}</a>
                            </li>
                        </router-link>
                        <router-link to="/privacy">
                            <li class="footer-menu-item">
                                <a class="footer-menu-item-link">{{ $t("message.privacyfooter") }}</a>
                            </li>
                        </router-link>
                        <router-link to="/refund">
                            <li class="footer-menu-item">
                                <a class="footer-menu-item-link">{{ $t("message.refundpolicy") }}</a>
                            </li>
                        </router-link>
                    </ul>
                </div>
                <div class="col-md-6 col-lg-4 mb-2 pl-0">
                    <div class="footer-col footer-col-2">
                        <h3 class="footer-title">{{ $t("message.Newsletter") }}</h3>
                        <p >{{ $t("message.signup") }}</p>
                        <router-link  :to="{ path: '/about', query: { mydata: 'join'}}">
                            <a class="btn signUp btn-primary">{{ $t("message.SUBSCRIBE") }}</a>
                        </router-link>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5 mb-2 footer-img">
        <div class="col-md-6" style="padding-left: 37px">
            &COPY;Naqsh
        </div>
        <div class="col-md-6 mr-auto img">
            <img src="/images/iconfinder_24_Apple_Pay_4518982.png" width="40" alt="Pay">
            <img src="/images/iconfinder_Master_Card_380809.png" width="40" alt="master">
            <img src="/images/iconfinder_paypal_1220357.png" width="40" alt="paypal">
            <img src="/images/iconfinder_social_visa_406088.png" width="40" alt="visa">
        </div>
    </div>
</footer>
</template>

<script>




export default {


}


</script>

<style scoped>

.row{
    margin-left: 0;
    margin-right: 0;
}


.col-lg-3,.col-sm-6{
    padding: 0;
}

@media (max-width: 991px){
.footer-col-2 {
    width: 91%;
    margin-left: 5%;
}
}

.lead{
    font-size: 16px!important;
}


</style>
