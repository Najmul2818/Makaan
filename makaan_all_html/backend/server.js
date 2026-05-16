const express = require("express");
// const mongoose = require("mongoose");
const cors = require("cors");
const db = require("./db");
const propertyRoutes = require("./routes/propertyRoutes");

const app = express();

// Middleware FIRST
app.use(cors());
app.use(express.json());

// Routes
// app.use("/properties", propertyRoutes);
app.use(propertyRoutes);

// MongoDB connection
// mongoose.connect("mongodb://127.0.0.1:27017/makaanDB")
// .then(()=> console.log("MongoDB Connected"))
// .catch(err => console.log(err));

app.get("/", (req,res)=>{
    res.send("Backend Running");
});

app.listen(5000, ()=>{
    console.log("Server running on port 5000");
});