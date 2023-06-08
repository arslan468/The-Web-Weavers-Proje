window.addEventListener('load', function() {   //page loaded event
    $("#olive").on("keyup", function(){
        var inputValue =  $("#olive").val();
        console.log(inputValue);
    });
document.querySelector("#muz-btn").addEventListener("click", function(){
    let muzdeger = Number.parseInt(document.querySelector("#muz-deger").innerHTML);
    let kdeger = Number.parseInt(document.querySelector("#txtmuz").value);
    let muzbar = document.querySelector("#muzbar");


    let sonuc = (muzdeger+kdeger);

    if (sonuc > 95) {
        document.querySelector("#muz-destek").style.color = "red";
        document.querySelector("#muz-destek-d").style.color = "red";
    }

    let styles = window.getComputedStyle(muzbar);
    let eskibardeger = Number.parseInt((parseFloat(styles.width) / muzbar.parentElement.offsetWidth) * 100);
    if (muzdeger < 100) {
        let yenibardeger = (eskibardeger+kdeger+2).toString();
        muzbar.style = "width:"+yenibardeger+"%";
        document.querySelector("#muz-deger").innerHTML = sonuc;
    }
    else
    {
        alert("İhtiyaç olan miktardan fazla ürün üretiyorsunuz!!!");
    }

   
    
});

});

