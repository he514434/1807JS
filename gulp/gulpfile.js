const gulp = require("gulp");
const connect = require("gulp-connect");
const sass = require("gulp-sass-china");


gulp.task("hello", () => {
  console.log("this is my task");
})

gulp.task("index", () => {
  return gulp.src(["src/**/*","!src/sass/*"]).pipe(gulp.dest("dist")).pipe(connect.reload());
})


gulp.task("watch", () => {
  gulp.watch(["src/index.html"], ["index"]);
  gulp.watch("src/sass/*.scss",["sass"])
})

gulp.task("server", () => {
  connect.server({
    root: "dist", //以哪个文件夹为服务器
    port: 7777, //端口号
    livereload: true //是否可以自动刷新
  })
})

gulp.task("run", ["server", "watch"])

gulp.task("sass", () => {
  return gulp.src("src/sass/*.scss")
    .pipe(sass().on("error", sass.logError))
    .pipe(gulp.dest("dist/css"))
    .pipe(connect.reload());
})
