<!DOCTYPE html>

<html lang="DE, de">
    <head>
        <!-- https://www.w3schools.com/tags/tag_meta.asp -->
        <meta charset="UTF-8">
        <meta name="description" content="Der Hüpfburg Discord Server">
        <meta name="keywords" content="hüpfburg, discord, server">
        <meta name="author" content="someguy">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- page display info & styling -->
        <title>Die Hüpfburg !</title>
        <!-- load website icon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/icon/hburg_icon.ico">
        <!-- only for the hamburger button on mobile -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- backend php trick to check if on mobile or not 
            css and js to load differ accodirngly -->
        
        <?php
        // gotta check if on mobile
        $useragent=$_SERVER['HTTP_USER_AGENT'];

        if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
        {
            // this means we are on mobile, change css and js links
            ?>
            <!-- load external stored mobile css style -->
            <link rel="stylesheet" type="text/css" href="style/mobile.css">
            <!-- load external stored mobile javascript -->
            <script src="scripts/mobile.js"></script> <?php
        }else{
            ?>
            <!-- load external stored css style -->
            <link rel="stylesheet" type="text/css" href="style/style.css">
            <!-- load external stored javascript -->
            <script src="scripts/script.js"></script>
            <?php
        }
        ?>
        <!-- end of php -->
        
    </head>

    <!-- script temporarly stored here -->
    <script>

        // this bit is really important as we need to wait for the page
        // to be fully loaded, else this executes before DOM is loaded
        // (and we cant access elements etc)
        window.onload = function(){

            // only on mobile
            if( !(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) ) {
                // parameters = pixelscroll, id of nav to change
                resizeNavOnScroll(100, "main_nav");
            }else{
                showMobileNav();
                closeNav();
            }
            
            // for the struktur section
            showCollapsed();
            // for aktuelles section
            slideNews();
            console.log("loaded")
            alert("Ich bin nicht mehr auf dem Server und die Website wird nicht aktualisiert ; trotzdem verschafft sie einen guten Überblick, auch zur Geschichte.")
        }
        
    </script>

    <!-- header will be shown on top with nav etc -->
    <div id="page-top" style="position: 'absolute'; top: 0;"></div>
    <header id="main_header">
        <nav id="main_nav">
            <div class="nav_title">
                <img id="nav_gif_icon" src="img/icon/hburg_turning_icon_nobg.gif" alt="yes">
                <h3 id="nav_h3"><a href="#page-top">Die Hüpfburg</a></h3>
                <a href="javascript:void(0);" id="mobile_burger_icon" onclick="showMobileNav()">
                <i class="fa fa-bars"></i>
                </a>
            </div>
            <ul id="mobile_id_ref">
                <!-- edit: removed the title="" for it to be more clean -->
                <!-- edit 2: removed "home" link, as the h3 will be that link, adding "Aktuelles" insted -->

                <!-- Channels, Themenchannels, Ränge, ... -->
                <li><a href="#struktur_link" class="current_active" onclick="closeNav()">Struktur</a></li>
                <!-- Entstehung, Geschichte bis jetzt -->
                <li><a href="#geschichte_link" class="current_active" onclick="closeNav()">Geschichte</a></li>
                <!-- Wie der Server moderiert wird (2 Owner usw) -->
                <li><a href="#moderation_link" class="current_active" onclick="closeNav()">Moderation</a></li>
                <!-- Aktuelles, was im Server vorgeht, news usw -->
                <li><a href="#aktuelles_link" class="current_active" onclick="closeNav()">Aktuelles</a></li>
                <!-- Link zum join-button, der aber immer highlighted sein wird-->
                <li id="nav_highlight"><a href="#join_link" onclick="closeNav()"><span id="nav_highlight_mobile">Join!</span></a></li>

            </ul>
           

        </nav>
    </header>
