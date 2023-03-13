$(document).ready(function() {
    let offset = $("nav").height();
    $("a[href^='#']").on('click', function(event) {
        if (this.hash !== "") {
            event.preventDefault();
            let hash = this.hash;
            $('html, body').animate({
                scrollTop: $(hash).offset().top - offset
            }, 100);
        }
    });
});
