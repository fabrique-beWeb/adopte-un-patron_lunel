


$().ready(function () {
    var input = document.getElementById('search');


    form.addEventListener('submit', function (e) {
//prevent form from submition
        e.preventDefault();
        var search = input.value;
        if (search.length > 0) {
            $("#reponse").html('<img src="load.gif"> Recherche en cours...');
            var visites = $('');
            alert(datas);
            //$("#reponse").html('<img src="load.gif"> Recherche en cours...');

            ajax({
                type: "GET",
                url: UserBundle/RecruteurController,
                dataType: json,
                data: visites,
                success: function (count) {
                    if (count) {
                        // $('#form').hide("slow");
                        //alert(msg);
                        for (var i = 0; i < count.length; i++) {
                            var name = count.name;
                            var firstname = count.firstname;
                            var email = count.email;
                        }
                        $("#reponse").html(count);
                    }
                }
            });
        } else {
            $("#reponse").html('<center><h2>Enter search term.</h2></center>');
        }
        ;
    });
}
);