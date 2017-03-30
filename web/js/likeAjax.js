var URL = "http://www.adopteunpatron.fr/candidat/profil/";

$.ajax({
        url : URL + "like",
        async: true,
        type: "GET",
        datatype: "json",
        success: function(count){
            $("#countLike").text(count);  
            
        },
        error: function(){
            alert("nope");
        }
    });


