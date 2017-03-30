
$("#btnContSkill").click(function () {
    event.preventDefault();
    $.ajax({
        url: "http://www.adopte-un-patron.fr/offre/get/skills",
        type: 'GET',
        async: true,
        success: function(data) {
            
            
            $(data).each(function() {
                $("#contSkill").val('');
                //Recuperation de la liste de skills
                $("#contSkill").append("<div><input type='checkbox' id='"+this.id+"'>"+ this.name +"</div>");
                //Vrerif de mon checkbox selectioné 
                $("#"+ this.id).click(function(){
                    if ($(this).is(':checked')){
                    //Si le checked cochée
                    $.ajax({
                        url: "http://www.adopte-un-patron.fr/offre/skills/update/tokenSkills/"+this.id,
                        type: 'GET',
                        async: false
                    });
                  
                    }else{
                    //Si le checked décochée
                    $.ajax({
                        url: "http://www.adopte-un-patron.fr/offre/skills/delete/tokenSkills/"+this.id,
                        type: 'GET',
                        async: false
                    });
                    
                    }
                });
            });

        }
    });
});



