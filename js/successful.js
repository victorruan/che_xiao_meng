/**
 * Created by bpp on 16/9/13.
 */

requirejs.config({
    baseUrl: './',
    paths: {
        'text':'js/text'
    }
});

require(["text!successful.php"],function(html){
    $("#success").append(html);
    $("#success-btn").click(function () {
        window.location.assign("../successes.php")
    })
});

