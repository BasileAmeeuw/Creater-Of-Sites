var requestURL ="public/js/Products.json";
var request = new XMLHttpRequest();


request.open('GET', requestURL,true);

request.onload= function() {
    if (this.readyState == 4 && this.status == 200) {
        console.log(request)
        var nvRequest = JSON.parse(request.responseText);
        var txt="";
        for (el of nvRequest)
        {
            txt+='<div class="block_oranje"><form action="index.php?action=ViewSpec" method="post"><input type="img" value=' +el.name + ' class="image" src=' + el.image + '>';
            txt+='<input type ="checkbox" class="input" id=' + el.name + ' name="produit[]" value=' + el.name + "#" + el.price + ' ><label for=' + el.name + '>' + el.name + ' ' + ' <strong>' + el.price + '€ </strong></label></br>';
            txt+='<span class="description">'+ el.description +'</span></div>';
        }
        form.innerHTML=txt;
    } else {
        throw new Exception("Il y a un problème avec le serveur");
    }
};
request.send();







