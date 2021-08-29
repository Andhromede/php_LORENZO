    $(".Boissons").click(function() {
        //Desactive les sections inutiles
        $(".divEntree, .divPizza, .divDesserts").addClass('hidden');
        $(".divBoissons").removeClass('hidden');

        //change la couleur des entetes selon celle qui est selectionnée
        $(".Entree, .Pizza, .Desserts, .tous").removeClass('colorDore');
        $(".Entree, .Pizza, .Desserts, .tous").addClass('text-light');
        $(".Boissons").addClass('colorDore');
    });
    
    $(".Pizza").click(function() {
        //Desactive les sections inutiles
        $(".divEntree, .divBoissons, .divDesserts").addClass('hidden');
        $(".divPizza").removeClass('hidden');

        //change la couleur des entetes selon celle qui est selectionnée
        $(".Entree, .Boissons, .Desserts, .tous").removeClass('colorDore');
        $(".Entree, .Boissons, .Desserts, .tous").addClass('text-light');
        $(".Pizza").addClass('colorDore');
    });

    $(".Entree").click(function() {
        //Desactive les sections inutiles
        $(".divPizza, .divBoissons, .divDesserts").addClass('hidden');
        $(".divEntree").removeClass('hidden');

        //change la couleur des entetes selon celle qui est selectionnée
        $(".Pizza, .Boissons, .Desserts, .tous").removeClass('colorDore');
        $(".Pizza, .Boissons, .Desserts, .tous").addClass('text-light');
        $(".Entree").addClass('colorDore');
    });

    $(".Desserts").click(function() {
        //Desactive les sections inutiles
        $(".divPizza, .divBoissons, .divEntree").addClass('hidden');
        $(".divDesserts").removeClass('hidden');

        //change la couleur des entetes selon celle qui est selectionnée
        $(".Pizza, .Boissons, .Entree, .tous").removeClass('colorDore');
        $(".Pizza, .Boissons, .Entree, .tous").addClass('text-light');
        $(".Desserts").addClass('colorDore');
    });

    $(".tous").click(function() {
        //Desactive les sections inutiles
        $(".divPizza, .divBoissons, .divEntree, .divDesserts").removeClass('hidden');

        //change la couleur des entetes selon celle qui est selectionnée
        $(".Pizza, .Boissons, .Entree, .Entree").removeClass('colorDore');
        $(".Pizza, .Boissons, .Entree, .Entree").addClass('text-light');
        $(".tous").addClass('colorDore');
    });
        
