<!-- Menu -->
<script>
$(document).ready(function(){

// Menu
    // Menu hidden on load mobile
    if ($(window).width() < 480) {
        $('#menuhide').hide();
    }

    // Hamburger button hidden on desktop
    else {
        $('#hamburger').hide();
    }

    // Toggle on click
    $("#menunonhide").click(function(){
        $("#menuhide").slideToggle("slow");
    });

});

</script>
<ul id="menubar">
    <li>
        <ul id="menunonhide">
            <li id="topbutton">
	        <a href="#" id="logo">
                    <img src="/<?php echo $froot ?>/style/logo.png" alt="<?php echo $name;?> Logo" id="menuimg">
                </a>
            </li>
            <li id="topmenubutton">
                <a href="#" id="hamburger">
                    <p class="menutext">&#9776;</p>
                </a>
            </li>
        </ul>
    </li>
    <li>
        <ul id="menuhide">
            <li class="menuitem">
                <a href="/<?php echo $froot; ?>/<?php echo $pfile_1; ?>" class="menubutton">
                    <p class="menutext"><?php echo $pname_1; ?></p>
                </a>
            </li>
            <li class="menuitem">
                <a href="/<?php echo $froot; ?>/<?php echo $pfile_2; ?>" class="menubutton">
                    <p class="menutext"><?php echo $pname_2; ?></p>
                </a>
            </li>
            <li class="menuitem">
                <a href="/<?php echo $froot; ?>/<?php echo $pfile_3; ?>" class="menubutton">
                    <p class="menutext"><?php echo $pname_3; ?></p>
                </a>
            </li>
            <li id="account">
                <a href="#" class="menuaccount">
                    <p class="menutext">Account name</p>
                </a>
            </li>
        </ul>
    </li>
</ul>
