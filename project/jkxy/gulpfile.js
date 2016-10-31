//导入工具包 require('node_modules里对应模块')
var gulp = require('gulp');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var less = require('gulp-less'),
    cssmin = require('gulp-minify-css'),
    imagemin = require('gulp-imagemin'),
    html = require('gulp-htmlmin'),
    rev = require('gulp-rev'),
    revcollector = require('gulp-rev-collector'),
    pngquant = require('imagemin-pngquant')

//定义一个css任务
gulp.task('testLess', function() {
    gulp.src('css/index.less')
        .pipe(rev())
        .pipe(less())
        .pipe(cssmin())
        .pipe(gulp.dest('www/css'));
});



//定义一个js压缩任务
gulp.task('ys', function() {
    gulp.src('js/*.js')
        .pipe(rev())
        .pipe(uglify())
        .pipe(concat('all.min.js'))
        .pipe(gulp.dest('www/js'));
});

// 定义一个html任务
gulp.task('yshtml', function() {
    gulp.src('*.html')
       
        .pipe(revcollector())
        .pipe(html())
         .pipe(rev())
        

    .pipe(gulp.dest('www'));
});



// 定义一个图片压缩任务
gulp.task('images-opt', function() {
    gulp.src('images/*.+(jpeg|jpg|png)')
        .pipe(imagemin({
            progressive: true,
            use: [pngquant({ quality: '65-80' })]
        }))
        .pipe(gulp.dest('www/images'));
});


gulp.task('default', ['testLess', 'ys', 'yshtml', 'images-opt']); //定义默认任务
