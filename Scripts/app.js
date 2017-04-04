// IIFE - Immediately Invoked Function Expression
(function(){
    $(".btn-danger").click(function(event){

        if(!confirm("Are You Sure?")) {
            event.preventDefault();
            window.location.assign("index.php?pageId=GamesList");
        }
    });
})();
