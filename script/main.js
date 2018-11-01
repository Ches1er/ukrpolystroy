class ShopContentAdd {

    init(){

    for (let i=0;i<6;i++){

            //Initiate elements

        let $shopContentUnit = $("<div>");
        let $img = $("<img>");
        let $desc = $("<div>");
        let $price = $("<div>");
        let $buyButton = $("<button>");

            //Add classes

        $shopContentUnit.addClass("shop_content_unit");
        $desc.addClass("description");
        $price.addClass("price");

            //Img

        $img.attr("src","http://ukrpolystroy.com.ua/wp-content/uploads/2014/11/sika_blackseal-1.jpg");

            //Add value

        $desc.text("description");
        $price.text("100"+" UAH");
        $buyButton.text("Buy");

            //Append

        $shopContentUnit.append($img,$desc,$price,$buyButton);
        $(".shop_content").append($shopContentUnit);
        }
    }

}

let content = new ShopContentAdd();
$(document).ready(()=>{
    content.init();
})
