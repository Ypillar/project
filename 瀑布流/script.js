$(document).ready(function() {
    $(window).on("load", function() {
        // 调用函数瀑布流
        imgLocation();
        // 图片
        var dataImg = {
            "data":[{"src":"1.jpg"},{"src":"2.jpg"},{"src":"3.jpg"},{"src":"4.jpg"},{"src":"5.jpg"},{"src":"6.jpg"},
            {"src":"7.jpg"},{"src":"8.jpg"},{"src":"9.jpg"},{"src":"10.jpg"},{"src":"11.jpg"},{"src":"12.jpg"},{"src":"13.jpg"}
            ,{"src":"14.jpg"},{"src":"15.jpg"},{"src":"16.jpg"},{"src":"17.jpg"},{"src":"18.jpg"},{"src":"19.jpg"}
            ,{"src":"20.jpg"},{"src":"21.jpg"},{"src":"22.jpg"},{"src":"23.jpg"},{"src":"24.jpg"},{"src":"25.jpg"}
            ,{"src":"26.jpg"},{"src":"27.jpg"},{"src":"28.jpg"},{"src":"29.jpg"},{"src":"30.jpg"},{"src":"31.jpg"},
            {"src":"32.jpg"},{"src":"33.jpg"},{"src":"34.jpg"},{"src":"35.jpg"}
            ,{"src":"36.jpg"},{"src":"37.jpg"},{"src":"38.jpg"},{"src":"39.jpg"}
            ,{"src":"40.jpg"},{"src":"41.jpg"},{"src":"42.jpg"},{"src":"43.jpg"},{"src":"44.jpg"},{"src":"45.jpg"},{"src":"46.jpg"}
            ,{"src":"47.jpg"},{"src":"48.jpg"},{"src":"49.jpg"},{"src":"50.jpg"}]
        }
        // 一直加载
        window.onscroll=function(){
            if(scrollside()){
                $.each(dataImg.data,function(index,value){
                    var box=$("<li>").addClass("_box").appendTo($("ul"));
                    var content=$("<div>").addClass("info").appendTo(box);
                    var content1=$("<div>").addClass("pic").appendTo(content);
                    $("<img>").attr("src","./images/"+$(value).attr("src")).appendTo(content1);
                });
                imgLocation();
            }
        }
    });


});
// 瀑布流实现函数

function scrollside() {
    var box = $('li');
    var lastboxHeight = box.last().get(0).offsetTop + Math.floor(box.last().height() / 2);
    var documentHeight = $(document).width();
    var scrollHeight = $(window).scrollTop();
    return (lastboxHeight < scrollHeight + documentHeight) ? true : false;


}

function imgLocation() {

    var box = $('li')

    var boxWidth = box.eq(0).width();
    var num = Math.floor($('.photo-box').width() / boxWidth);
    var boxArr = [];
    box.each(function(index, value) {

        var boxHeight = box.eq(index).height();
        if (index < num) {
            boxArr[index] = boxHeight;

        } else {
            var minBoxHeight = Math.min.apply(null, boxArr);
            var minBoxIndex = $.inArray(minBoxHeight, boxArr);
            // console.log(value);
            $(value).css({
                "position": "absolute",
                "top": minBoxHeight + 20,
                "left": box.eq(minBoxIndex).position().left

            })
            boxArr[minBoxIndex] += box.eq(index).height() + 20;
        }
    });
}
