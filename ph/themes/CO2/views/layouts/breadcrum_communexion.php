
<?php
   // $communexion = CO2::getCommunexionCookies();
?>

<script type="text/javascript">

console.log("communexion bread",communexion);
jQuery(document).ready(function() {
    loadMultiScopes();
    mylog.log("communexionActivated ok", communexion, communexion.state);

    if(communexion.value == null){
        communexion.state = false;
        $.cookie("communexionActivated", false, { expires: 365, path : "/" });
    }

    if(communexion.state){
        mylog.log("communexionActivated ok", communexion);
        activateGlobalCommunexion(true);
    }else{
        activateGlobalCommunexion(false,true);
    }
    $(".tooltips").tooltip();
});


</script>
