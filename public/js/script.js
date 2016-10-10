$(document).ready(function () {
    /*
     *  SEARCH POPAP SHOW/HIDE
     * */
    $(document).on('click', '.header_top_menu_search', function () {
        $(document).find('.search_popap').slideToggle();
    });
    /*
     hide and show the sidebar
     */
    $('.btn_show_sidebar').on('click',function(){
        $('#container_sidebar').toggleClass('sidebar_slide');
        $('.btn_show_sidebar a i').toggleClass('ion-android-arrow-forward');
    });
    /*
     end hide and show the sidebar
     */
    //var a = $(document).height();
    //var c = $('#admin_footer').height();
    //var b = a - c;
    //alert(b);
});