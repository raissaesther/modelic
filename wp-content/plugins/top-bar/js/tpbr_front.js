jQuery(document).ready(function() {

    var fixed = tpbr_settings.fixed;
    var message = tpbr_settings.message;
    var url = tpbr_settings.button_url;
    var link = tpbr_settings.button_text;
    var tbcolor = tpbr_settings.color;
    var status = tpbr_settings.status;
    var button = tpbr_settings.yn_button;
    var is_admin_bar = tpbr_settings.is_admin_bar;

    // Top Bar button
    if (button == 'button') {
        // Getting shade of color for button background.
        function shadeColor1(color, percent) {
            var num = parseInt(color.slice(1),16), amt = Math.round(2.55 * percent), R = (num >> 16) + amt, G = (num >> 8 & 0x00FF) + amt, B = (num & 0x0000FF) + amt;
            return "#" + (0x1000000 + (R<255?R<1?0:R:255)*0x10000 + (G<255?G<1?0:G:255)*0x100 + (B<255?B<1?0:B:255)).toString(16).slice(1);
        }
        var ltbcolor = shadeColor1(tbcolor, -12);
        var btn_result = '<a id="tpbr_calltoaction" style="background:' + ltbcolor + '; display:inline-block; padding:2px 10px 1px; color:white; text-decoration:none; margin: 0px 20px 0px;border-radius:3px; line-height:28px;" href="' + url + '">' + link + '</a>';
    } else {
        var btn_result = '';
    }

    // Check if Top Bar is sticky
    if (fixed == 'fixed'){
        if (is_admin_bar === 'yes'){
            var fixed_result = 'position:fixed; z-index:9999999; width:100%; left:0px; top:0; margin-top:32px;';
        } else {
            var fixed_result = 'position:fixed; z-index:9999999; width:100%; left:0px; top:0;';
        }
    } else {
        var fixed_result = '';
    }

    // Show Top Bar
    if (status == 'active') {
        if (fixed == 'fixed'){
            jQuery('<div style="height:44px; visibility:hidden;"></div><div id="tpbr_topbar" style="' + fixed_result + ' background:' + tbcolor + '; padding:4px 20px 3px;"><div id="tpbr_box" style="line-height:40px; font-size:15px; font-family: Helvetica, Arial, sans-serif; text-align:center; width:100%; color:white; font-weight:300;">' + message + btn_result + '</div></div>').prependTo('body');
        } else {
            jQuery('<div id="tpbr_topbar" style="position:relative; z-index:999999999; ' + fixed_result + ' background:' + tbcolor + '; padding:4px 20px 3px;"><div id="tpbr_box" style="line-height:40px; text-align:center; width:100%; color:white; font-size:15px; font-family: Helvetica, Arial, sans-serif; font-weight:300;">' + message + btn_result + '</div></div>').prependTo('body');
        }
    }

});
