exports.Send=async(req,resp)=>{
    resp.send(req.body);
    resp.send(req.file);
    resp.send(req.body.file);

    for(i=0;i<req.files.length;i++){
        console.log(req.files[i].path);

    }
}