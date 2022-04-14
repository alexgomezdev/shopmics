
$("#compareBtn").click(function(){

    $.ajax(
        {
            headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') }, 
            type : "GET" ,
            url :'https://gateway.marvel.com:443/v1/public/comics?ts=1&apikey=1a3866a39a0a5d92dc712572898c21b1&hash=5cf818d1edaa8819ac48ceea00b736e9',
            success: function(data){
                console.log(data);
                var token = $('meta[name="csrf-token"]').attr('content');
                $.ajax({ 
                    type: "POST",
                    headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                    url: '/shopmics/public/compare',
                    data: {'_token': token, 'array': data.data.results},
                    contentType: "application/json; charset=utf-8",
                    dataType: "json",
                    success: function(){
                        console.log('Todo good')
                    }
                })
                console.log(data.data.results);
            }
        }
    )})