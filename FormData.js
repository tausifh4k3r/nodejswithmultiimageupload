const {urlencoded}= require("express");
var express = require("express");
const multer = require("multer");
var app = express();
const path =require("path");
const cors = require("cors");
app.use(cors());
// var storage =multer.diskStorage({
//     destination:function(req,file,callback){
//         callback(null,'public/')
//     },
//     filename:function(req,file,callback){
//         // console.log(file);
//         callback(null,file.filename+'-'+Date.now()+path.extname(file.originalname));
//     }
// })
app.use(urlencoded({extended:true}));
// const upload = multer({storage:storage})
// app.post('/',(req,resp)=>{
//     resp.send(req.body);
//     upload.single('ProfilePic');


//     console.log(req.body);
//     console.log(req.file);
// }); 
app.use("/",require("./router"))


app.listen(8006)