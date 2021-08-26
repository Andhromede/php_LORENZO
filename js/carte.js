    $(".Boissons").click(function() {
            $(".divEntree, .divPizza, .divDesserts").addClass('hidden');
            $(".divBoissons").removeClass('hidden');
        });
    
        $(".Pizza").click(function() {
            $(".divEntree, .divBoissons, .divDesserts").addClass('hidden');
            $(".divPizza").removeClass('hidden');
        });
    
        $(".Entree").click(function() {
            $(".divPizza, .divBoissons, .divDesserts").addClass('hidden');
            $(".divEntree").removeClass('hidden');
        });
    
        $(".Desserts").click(function() {
            $(".divPizza, .divBoissons, .divEntree").addClass('hidden');
            $(".divDesserts").removeClass('hidden');
        });
    
        $(".tous").click(function() {
            $(".divPizza, .divBoissons, .divEntree, .divDesserts").addClass('show');
        });
        
