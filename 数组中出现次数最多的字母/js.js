function query() {
    var str = ["a", "x", "b", "d", "m", "a", "k", "m", "p", "j", "a"]; //定义数组
    // 计数
    var count = {};
    // 索引
    var pos = {};
    // 遍历数组生成新数组
    for (var i = 0; i < str.length; i++) {
        var char = str[i];
        if (count[char]) {
            count[char] += 1;
            pos[char] += "," + i;

        } else {
            count[char] = 1;
            pos[char] = i;
        }
    }
    // 返回出现最多的字母次数降序排列取第一个数字
    var max = count[Object.keys(count).sort(function(a, b) {
        return count[a] <= count[b];
    })[0]];
    //出现次数最多的字母如果有多个全部写入新数组并输出
    var str_pu = [];
    for (i in count) {
        if (count[i] >= max) {
            max = count[i];
            str_pu.push(i);
            console.log(str_pu)
        }

    }
    //显示出现最多的字母
    document.getElementById("a").innerHTML = "出现最多的是：" + str_pu;
    //显示出现的次数和位置
    for (var i = 0; i < str_pu.length; i++) {
        key = str_pu[i];
        document.getElementById("b").innerHTML = key + "的次数是：" + count[key];
        document.getElementById("c").innerHTML = key + "的位置是：" + pos[key];
    }

}
