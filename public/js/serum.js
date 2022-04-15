var count=JSON.parse(localStorage.getItem('cart'));

btn = document.getElementsByClassName('add');
for(var i=0;i<btn.length;i++)
{
    btn[i].addEventListener('click',function(){
        document.getElementById('msg').innerHTML="Item is added to Cart.";
        setTimeout(() => {
            document.getElementById('msg').innerHTML="";
        }, 3000);
        localStorage.setItem("cart",count+=1);
        var items=localStorage.getItem('cart');
        console.log(items);
        document.getElementById('items').innerText="Items in cart = " + items;
    })
}