    
    
    
    
    $("#compareBtn").click(function(){
    
        $.get('https://gateway.marvel.com:443/v1/public/comics?ts=1&apikey=1a3866a39a0a5d92dc712572898c21b1&hash=5cf818d1edaa8819ac48ceea00b736e9', function(data){
            
            var marvelComics=data.data;
            console.log(marvelComics);
            $.ajax({ 
                type: "POST",
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                url: `compareComics`,
                data: JSON.stringify(marvelComics),    
                contentType: "application/json",
                dataType: "json",
                success: function(){
                    console.log('Todo good')
                }
            })
           ;;
        } )    
        })
