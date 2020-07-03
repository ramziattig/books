



/*function filterBooks(category) {
    var books = document.getElementsByClassName('allBooks');

    if (category == "all") {
        for (var index = 0; index < books.length; index++) {
            if (books[index].classList.contains("desafficher")) {
                books[index].classList.remove("desafficher");
            }
        }

    } else {
        for (var index = 0; index < books.length; index++) {
            if (!books[index].classList.contains(category)) {
                books[index].classList.add('desafficher')
            }else{
                if (books[index].classList.contains("desafficher")) {
                    books[index].classList.remove("desafficher");
                }
            }
        }
    }

}*/



$(document).ready(function(){
    $(window).scroll(function(){
        if($(window).scrollTop()> 300){
            $('.up').css({
                "opacity":"1", "pointer-events":"auto"
            });
        }else {
            $('.up').css({
                "opacity":"0", "pointer-events":"none"
            });
        }
    });
    $('.up').click(function(){
        $('html').animate({scrollTop:0}, 300);
    })
});


function myFunction() {
    alert("login to continue!");
  }