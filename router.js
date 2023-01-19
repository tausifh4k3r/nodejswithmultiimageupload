const express = require("express");
const router = express.Router();
const multer = require("multer");
const controller = require("./controller")

const storage = multer.diskStorage({
    destination: (req, file, cb) => {
        cb(null, 'public/');
    },
    filename: (req, file, cb) => {
        cb(null, Date.now()+'-'+file.originalname);
    }
});

const upload = multer({ storage });
// router.use('/',upload.single('ProfilePic'),controller.Send);
router.use('/',upload.array('file'),controller.Send);


module.exports = router;

