    
    
    //Recursive function that works with the offset of the response and this parameter of the url for give all comics because only we can give 100 comics at the same time.
    function recursiveAjax($offset = 0){
        $.get('https://gateway.marvel.com:443/v1/public/comics?offset='+$offset+'ts=1&apikey=1a3866a39a0a5d92dc712572898c21b1&hash=5cf818d1edaa8819ac48ceea00b736e9', function(data){
            var marvelComics=data.data;
            if(marvelComics.total-$offset<100){
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
                return $cont;
            }else{
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
               recursiveAjax($offset + 100,) 
            }
    
         
           ;;
        } )    
        
    }
    $("#compareBtn").click(function(){
        recursiveAjax();
        })
  